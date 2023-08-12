<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $to = "alamat-email-anda@example.com"; 
    $subject = "Pesan dari $nama";
    $headers = "From: $email";
    
    $mailBody = "Nama: $nama\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Phone: $phone\n\n";
    $mailBody .= "Pesan:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Email berhasil dikirim. Terima kasih atas pesan Anda!";
    } else {
        echo "Maaf, terjadi kesalahan dalam mengirim email.";
    }
}
?>
