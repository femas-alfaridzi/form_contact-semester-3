<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['Kelas'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $saran = $_POST['saran'];

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO contacts (nama, nim, kelas, email, jenis_kelamin, agama, saran)
            VALUES ('$nama', '$nim', '$kelas', '$email', '$jenis_kelamin', '$agama', '$saran')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>
