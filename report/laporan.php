 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
 </head>
 <body>
 <form method="post">
 <div id="tab">	
 <center>
 	<h1>List Customer Warnet 666</h1>
 	
 	<hr>
 </center>
 		<table border="1" align="center" style="font-family:arial; font-size:20px;">
			<tr>
				<th>ID</th>
				<th>Nama Pengguna</th>
				<th>Waktu</th>
				<th>PC</th>
				<th>Harga</th>
				<th>Tanggal</th>
				<th>Jam Main</th>
				<th>Jam Habis</th>
			</tr>
			<?php
			$host = "localhost";
			$user = "root";
			$pass = "";
			$db = "db_warnet";
			$con = mysqli_connect($host, $user, $pass, $db);
			if (isset($_POST['sort'])) {
				@$tanggal=$_POST['tanggal'];
				$sql = "SELECT * FROM tb_pesan WHERE tanggal='$tanggal'";
				$query = mysqli_query($con, $sql);
				while ($data = mysqli_fetch_array($query)){
				?>
				<tr>
				<td><?php echo $data['id'] ?></td>
				<td><?php echo $data['user'] ?></td>
				<td><?php echo $data['waktu'] ?></td>
				<td><?php echo $data['pc'] ?></td>
				<td><?php echo $data['harga'] ?></td>
				<td><?php echo $data['tanggal'] ?></td>
				<td><?php echo $data['jam_main'] ?></td>
				<td><?php echo $data['jam_habis'] ?></td>
				<?php }

			}else if (isset($_POST['back'])){
				$sql = "SELECT * FROM tb_pesan";
				$query = mysqli_query($con, $sql);
				while ($data = mysqli_fetch_array($query)){
				?>
				<tr>
				<td><?php echo $data['id'] ?></td>
				<td><?php echo $data['user'] ?></td>
				<td><?php echo $data['waktu'] ?></td>
				<td><?php echo $data['pc'] ?></td>
				<td><?php echo $data['harga'] ?></td>
				<td><?php echo $data['tanggal'] ?></td>
				<td><?php echo $data['jam_main'] ?></td>
				<td><?php echo $data['jam_habis'] ?></td>
				<?php }	
			}else{
				@$tanggal=$_POST['tanggal'];
				$sql = "SELECT * FROM tb_pesan";
				$query = mysqli_query($con, $sql);
				while ($data = mysqli_fetch_array($query)){
				?>
				<tr>
				<td><?php echo $data['id'] ?></td>
				<td><?php echo $data['user'] ?></td>
				<td><?php echo $data['waktu'] ?></td>
				<td><?php echo $data['pc'] ?></td>
				<td><?php echo $data['harga'] ?></td>
				<td><?php echo $data['tanggal'] ?></td>
				<td><?php echo $data['jam_main'] ?></td>
				<td><?php echo $data['jam_habis'] ?></td>
				<?php }	
			}



			
			?>

			
			</tr>
		</table>
</div>
<center>
<br>
<input type="date" name="tanggal">
 	<input type="submit" name="sort" value="Urutkan">
 	<input type="submit" name="back" value="Reset">
 	</center>
 	<br>
 	<br>		
		<a href="#"> 
    <button onclick="printContent('tab')">Print</button> 
    </a>
   </form>
 </body>
 </html>