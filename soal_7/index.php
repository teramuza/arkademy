<?php
$server = "localhost";
$username = "raja";
$password = "homestead";
$database = "arkademy";

$db = new mysqli($server, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$sql = "SELECT persons.id, persons.name as nama from persons";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Soal nomor 7</title><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

 </head>
 <body>

 		<div class="container">
			<div class="wrap-table">
 			<center><h1>Data Hobi beberapa orang</h1></center><br>

				<div class="table gr m-b-110">
					<div class="table-head">
						<table>
							<thead>
								<tr>
									<th width="380">Nama</th>
									<th >User ID</th>
									<th width="500">Hobi</th>
									
								</tr>
							</thead>
						</table>
					</div>
					<div class="table-body">
						<table class="table-striped">
							<tbody>
							<?php while ($row = $result->fetch_assoc()) { ?>
								<tr>
									<td width="380"><?=$row['nama'];?></td>
									<td ><?=$row['id'];?></td>
									<td width="500">
									<?php
										$sql2 = "SELECT name from hobbies where person_id = ".$row['id'];
										$hobbies = $db->query($sql2);

										while ($hobi = $hobbies->fetch_assoc()) {
											echo $hobi['name'].", ";
										}
									?>
									</td>
									
								</tr>
							<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php $connect->close(); ?>