<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>

  <!-- Meta OG -->
  <meta property="og:title" content="GAME MASTER">
  <meta property="og:description" content="Kredit gratis,Tidak perlu registrasi ⭐️⭐️⭐️⭐️ Pembesaran ultra tinggi,Penarikan gratis ⭐️⭐️⭐️⭐️ Layanan online 24 jam ⭐️⭐️⭐️⭐️ Rasakan sekarang juga">
  <meta property="og:image" content="../d16nkh0dr5k1oh.cloudfront.net/img/share88/share_open.png">
  <meta property="og:url" content="index.html">
  <meta property="og:type" content="website">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Meta Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="GAME MASTER">
  <meta name="twitter:description" content="Kredit gratis,Tidak perlu registrasi ⭐️⭐️⭐️⭐️ Pembesaran ultra tinggi,Penarikan gratis ⭐️⭐️⭐️⭐️ Layanan online 24 jam ⭐️⭐️⭐️⭐️ Rasakan sekarang juga">
  <meta name="twitter:image" content="../d16nkh0dr5k1oh.cloudfront.net/img/share88/share_open.png">
  <meta property="twitter:url" content="index.php">
  <meta property="twitter:domain" content="awpslotmaster.com">

  <!-- Title -->
  <title>GAME MASTER</title>

  <!-- Icon -->
  <link rel="icon" type="image/svg+xml" href="img/icons/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
  <link rel="manifest" href="manifest.json">

  <!-- PWA -->
  <meta name="theme-color" content="#4DBA87">
  <meta name="apple-mobile-web-app-capable" content="no">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="GAME MASTER">
  <link rel="apple-touch-icon" href="img/icons/apple-touch-icon-152x152.png">
  <link rel="mask-icon" href="img/icons/safari-pinned-tab.svg" color="#4DBA87">
  <meta name="msapplication-TileImage" content="img/icons/msapplication-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#000000">

<style>
body {
  background-color: #1f1f1f;
  color: #fff;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
  position: relative;
}
.back-button {
  position: absolute;
  top: 20px;
  left: 20px;
  color: #fbff00;
  text-decoration: none;
  font-size: 35px;
  font-weight: 900;
  z-index: 10;
}
.back-button:hover {
  opacity: 0.8;
}
.container {
  background-color: #242424;
  padding: 30px;
  border-radius: 10px;
  width: 100%;
  max-width: 400px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.5);
  position: relative;
}
h2 {
  text-align: center;
  color: #e9c46a;
  margin-bottom: 20px;
}
input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
  width: 95%;
  padding: 11px;
  margin-bottom: 15px;
  border-radius: 6px;
  border: 1px solid #4a4a4a;
  background-color: #333333;
  color: #fff;
  font-size: 14px;
}
input:focus {
  border-color: #e9c46a;
  outline: none;
}
button {
  width: 100%;
  padding: 14px;
  background-color: #e9c46a;
  color: #000;
  font-weight: bold;
  font-size: 16px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background-color: #d1b459;
}
#message {
  margin-bottom: 15px;
  font-weight: bold;
}
#message.error { color: #ff5555; }
#message.success { color:rgb(235, 224, 79); }
</style>
</head>
<body>

<a href="index.php" class="back-button">←</a>

<div class="container">
  <h2>Registration</h2>
  <div id="message"></div>
  <form id="registrationForm">
    <input type="text" name="nama" placeholder="Full Name" required>
    <input type="text" name="nama_bank" placeholder="Bank Name" required>
    <input type="text" name="nomor_rekening" placeholder="Account Number" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="telepon" placeholder="Phone Number" required>
    <input type="password" name="password" placeholder="Create Password" required>
    <input type="password" name="konfirmasi_password" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
  </form>
</div>

<script>
const form = document.getElementById('registrationForm');
const messageDiv = document.getElementById('message');

form.addEventListener('submit', function(e){
    e.preventDefault();
    messageDiv.textContent = '';
    messageDiv.className = '';

    const formData = new FormData(form);

    fetch('proses_registrasi.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'error'){
            messageDiv.textContent = data.message;
            messageDiv.className = 'error';
        } else if(data.status === 'success'){
            messageDiv.textContent = 'Registrasi berhasil! Mengarahkan ke halaman login...';
            messageDiv.className = 'success';
            setTimeout(()=>{ window.location='index.php'; }, 1500);
        }
    })
    .catch(err => {
        messageDiv.textContent = 'Terjadi kesalahan, silakan coba lagi.';
        messageDiv.className = 'error';
    });
});
</script>

</body>
</html>
