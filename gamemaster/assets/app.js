let selected = { amount: 0, bonusPct: 0, method: "VA" };
const modal = document.getElementById('modal');
const calcDepo = document.getElementById('calc-depo');
const calcBonus = document.getElementById('calc-bonus');
const calcTotal = document.getElementById('calc-total');
const instructions = document.getElementById('instructions');
const payBtn = document.getElementById('payBtn');

document.querySelectorAll('.btn.buy').forEach(btn => {
  btn.addEventListener('click', () => {
    selected.amount = parseInt(btn.dataset.amount, 10);
    selected.bonusPct = parseInt(btn.dataset.bonus, 10);
    selected.method = "VA"; // default VA
    updateCalc();
    setInstructions();
    modal.classList.remove('hidden');
  });
});

document.getElementById('closeModal').addEventListener('click', () => {
  modal.classList.add('hidden');
});

// Fungsi format
function ringgit(x){
  return 'RM ' + x;
}

// Hitungan bonus
function updateCalc(){
  const bonus = Math.floor(selected.amount * selected.bonusPct / 100);
  calcDepo.textContent = ringgit(selected.amount);
  calcBonus.textContent = ringgit(bonus);
  calcTotal.textContent = ringgit(selected.amount + bonus);
}

// Instruksi VA
function setInstructions(){
  instructions.innerHTML = `
    <p>Transfer ke VA <b>3544 0100 4324 508</b> a.n. BRI Payment.</p>
    <ul>
      <li>Nominal yang harus ditransfer: <b>${ringgit(selected.amount)}</b></li>
      <li>Isi berita: <b>Penukaran Coin</b></li>
      <li>Setelah transfer, status <i>menunggu verifikasi</i> sampai admin menyetujui.</li>
    </ul>
  `;
}

// Tombol bayar
payBtn.addEventListener('click', async () => {
  const payload = { amount: selected.amount, bonusPct: selected.bonusPct, method: selected.method };
  const res = await fetch('api/create_registrasi.php', {
    method: 'POST',
    headers: {'Content-Type':'application/json'},
    body: JSON.stringify(payload)
  });
  const data = await res.json();
  if(!data.ok){
    alert('Gagal membuat tagihan: ' + data.error);
    return;
  }

  instructions.innerHTML = `
    <p>Transfer ke VA <b>3544 0100 4324 508</b> a.n. BRI Payment.</p>
    <div class="codebox">
      <div>ID Transaksi: <b>${data.payment.id}</b></div>
      <div>Nominal: <b>${ringgit(selected.amount)}</b></div>
      <div>Kode Unik: <code>${data.payment.code}</code></div>
    </div>
    <p>Setelah transfer, mohon tunggu verifikasi admin pada 
    <a href="admin.php" target="_blank">halaman admin</a>.</p>
    <div class="status" id="statusBox">Status: <b>${data.payment.status}</b></div>
  `;
  checkLoop(data.payment.id);
});

// Polling status pembayaran
async function checkLoop(id){
  const box = document.getElementById('statusBox');
  async function tick(){
    const res = await fetch('api/get_registrasi.php?id=' + id);
    const data = await res.json();
    if(box) box.innerHTML = 'Status: <b>' + data.payment.status + '</b>';
    if(data.payment.status !== 'PAID' && data.payment.status !== 'CANCELLED'){
      setTimeout(tick, 5000);
    }
  }
  tick();
}