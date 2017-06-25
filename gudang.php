<?php
include 'view/header.php';
include ("functions/database.php");
 ?>

<title>Gudang</title>
<div class="table-gudang">
	<h1> DATA BARANG</h1>
<table border="3px"  >
	<tr>
		<td>KODE BARANG</td>
		<td>NAMA BARANG</td>
		<td>HARGA BARANG</td>
		<td>STOK BARANG</td>
	</tr>

<?php
	$sql = "SELECT * FROM gudang";
	$result = $conn->query($sql);

	if ($result -> num_rows > 0) {
		# code...
		while ($row = $result->fetch_assoc()) {
			# code...
			?>
			<tr>
				<td> <?php echo $row['Kode_Barang']; ?></td>
				<td> <?php echo $row['Nama_Barang']; ?></td>
				<td> <?php echo $row['Harga_Barang']; ?></td>
				<td> <?php echo $row['Stok']; ?></td>
			</tr>
			<?php
		}
	}else{
		echo "0 results";
	}
	$conn->close();
 ?>
</table>
</div>
<?php include 'view/footer.php';
