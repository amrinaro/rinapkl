<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head><title>Event</title></head>
<center><h2>Event<h2></center>
	<link rel ="stylesheet" type = "text/css" href= "style.css">

<center><nav><a href="v_from.php"><button>Tambah Baru</button>
</a></nav><center>
<br>
<table border ="1" cellpadding ="8" align ="center" bgcolor ="white">
<thread>
<tr>
<th>id</th>
<th>nama</th>
<th>email</th>
<th>tanggal lahir</th>
<th>alamat</th>
<th>tindakan</th>
</tr>
</thread>
<body>

<?php
$sql = "SELECT * FROM siswa";
$query = mysqli_query($koneksi,$sql);
while($siswa = mysqli_fetch_Array($query)) {
echo "<tr>";
echo "<td>".$siswa ['id']."</td>";
echo "<td>".$siswa ['nama']."</td>";
echo "<td>".$siswa ['email']."</td>";
echo "<td>".$siswa ['tanggal_lahir']."</td>";
echo "<td>".$siswa ['alamat']."</td>";
echo "<td>";
echo "<a href = 'v_from.php?id =".$siswa['id']."'>Edit</a> | ";
echo "<a href = 'hapus.php?id =".$siswa['id']."'>Hapus</a> | ";

}
?>
</body>
</table>
<p>Total :
<?php echo mysqli_num_rows($query) ?>
<br>
<center><nav><a href="logout.php"><button>Logout</button>
</a></nav><center>
</p>
</html>
