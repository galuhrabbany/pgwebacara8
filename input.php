<?php
$kecamatan = $_POST['kecamatan'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];
// Sesuaikan dengan setting MySQL
 // Create connection
    $conn = new mysqli("localhost", "root", "", "latihan");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO penduduk (kecamatan, longitude, latitude, luas, jumlah_penduduk)
VALUES ('$kecamatan', $longitude, $latitude, $luas, $jumlah_penduduk)";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
//header("Location: index.html");
//exit;
?>
