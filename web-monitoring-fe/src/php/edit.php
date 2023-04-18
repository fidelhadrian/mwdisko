<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 
	<h2>Edit penilaian</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>

 
	<?php
	include 'helper.php';
    

    parse_str(file_get_contents('php://input'), $update);
	$id = $_GET['id'];
	$sql = mysqli_query($db_connect,"select * from website where id='$id'");?>

    <?php
	while($data = mysqli_fetch_array($sql)){
		?>

        <?php echo "Anda sedang mengedit ", $data['nama']; ?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
						<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Link</td>
					<td> <input type="text" name="link" value="<?php echo $data['link']; ?>"> </td>
				</tr>
				<tr>
					<td>UI</td>
					<input type="radio" id="ui" name="ui" value="<?php echo $data['ui']; ?>">
  					<label for="ui">Td</label>

				</td>



				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>