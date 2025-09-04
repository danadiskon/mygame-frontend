<?php
header('Content-Type: application/json');

$host = "localhost";
$user = "root";
$pass = "";
$db   = "casino";

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    echo json_encode(['status'=>'error','message'=>'Koneksi database gagal']);
    exit;
}

$nama           = $_POST['nama'] ?? '';
$nama_bank      = $_POST['nama_bank'] ?? '';
$nomor_rekening = $_POST['nomor_rekening'] ?? '';
$email          = $_POST['email'] ?? '';
$telepon        = $_POST['telepon'] ?? '';
$password       = $_POST['password'] ?? '';
$konfirmasi     = $_POST['konfirmasi_password'] ?? '';

if($password !== $konfirmasi){
    echo json_encode(['status'=>'error','message'=>'Password dan konfirmasi tidak sama']);
    exit;
}

// cek email unik
$check = $conn->prepare("SELECT * FROM data_user WHERE Email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if($check->num_rows > 0){
    echo json_encode(['status'=>'error','message'=>'Email sudah terdaftar, gunakan email lain']);
    exit;
}

// insert data
$stmt = $conn->prepare("INSERT INTO data_user (Full_Name, Bank_Name, Account_Number, Email, Phone_Number, Password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nama, $nama_bank, $nomor_rekening, $email, $telepon, $password);

if($stmt->execute()){
    echo json_encode(['status'=>'success']);
}else{
    echo json_encode(['status'=>'error','message'=>'Registrasi gagal: '.$stmt->error]);
}

$stmt->close();
$conn->close();
?>
