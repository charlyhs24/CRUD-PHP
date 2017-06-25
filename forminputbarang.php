<?php include 'view/header.php';?>
<title>Input Barang</title>
<div class="inputbarang">
<h1><b>INPUT DATA BARANG</b></h1>
    <div class="formbarang">
      <form action="inputbarang.php" method="post">
        <label for="kodebarang">kode barang</label><br>
        <input type="text" name="kodebarang"><br>

        <label>nama barang</label><br>
        <input type="text" name="namabarang"><br>

        <label for="hargabarang">harga barang</label><br>
        <input type="text" name="hargabarang"><br>

        <label for="jumlahbarang">jumlah barang</label><br>
        <input type="text" name="jumlahbarang"><br><br>
        <input id="add" type="submit" name="add" value="add">
      </form>
    </div>
</div>
<?php include 'view/footer.php';?>
