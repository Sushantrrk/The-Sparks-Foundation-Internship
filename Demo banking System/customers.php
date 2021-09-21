<?php
	
	include "MDB.php";
	include "connection.php";
	error_reporting(0);
	$query = "select * from customers";
	$data = mysqli_query($conn,$query);
	#$rows = mysqli_num_rows($data);
	#echo $rows;
	$no = 1
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
	
</head>
<body id="background">
	<?php 
	include "header.php";
	?>
<div class="mx-auto" >
	<div class="w-100 p-5" >
		<div class="table-responsive">
			<table class="table table-dark table-sm">
			<thead>
				<tr>
					<th scope="col">no</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Balance</th>
				</tr>
			</thead>
				<?php
					foreach($data as $row)
					{
				?>
						<tr>
							<td class="table-success"><?php echo $no++?></td>
							<td class="table-success"><?php echo $row['Name']?></td>
							<td class="table-success"><?php echo $row['Email']?></td>
							<td class="table-success"><?php echo $row['Balance']?></td>
						</tr>
				<?php	
					}
				?>
				
			</table>
		</div>
	</div>
</div>
</body>
