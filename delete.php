<?php
include ("functions/database.php");
?>
<br>
<?php
  $kodebarang = $_GET['Kode_Barang'];
  $sql = "DELETE FROM gudang WHERE Kode_Barang= '$kodebarang'";
  if ($conn->query($sql) == TRUE) {
    # code...
    header("Location: formdeletebarang.php");
  }else {
    # code...
    echo "error deleting record : ".$conn->error;
  }
  $conn->close();
?>
