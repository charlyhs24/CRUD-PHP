
<?php
include ("functions/database.php");
  $kodebarang  = $_POST['kodebarang'];
  $namabarang  = $_POST['namabarang'];
  $hargabarang = $_POST['hargabarang'];
  $jumlahbarang = $_POST['jumlahbarang'];

$sql = "INSERT INTO gudang (Kode_Barang, Nama_Barang, Harga_Barang, Stok)
        VALUES ('$kodebarang', '$namabarang','$hargabarang','$jumlahbarang')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: forminputbarang.php")
 ?>
