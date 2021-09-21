<?php
	
	include "MDB.php";
	include "connection.php";
	error_reporting(0);
	$query = "select * from transactions order by ID";
	$data = mysqli_query($conn,$query);
	#$rows = mysqli_num_rows($data);
	#echo $rows;
	$no = 1
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Trancations</title>
</head>
<body id="background">
	<?php include "header.php"; ?>
<div class="mx-auto" >
	<div class="w-100 p-5" >
		<div class="table-responsive">
			<table class="table table-dark table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">From</th>
					<th scope="col">To</th>
					<th scope="col">Amount</th>
					<th scope="col">Date and Time</th>
				</tr>
			</thead>
				<?php
					foreach($data as $row)
					{
				?>
						<tr>
							<td class="table-success"><?php echo $no++?></td>
							<td class="table-success"><?php echo $row['From_user']?></td>
							<td class="table-success"><?php echo $row['To_customer']?></td>
							<td class="table-success"><?php echo $row['Amount']?></td>
							<td class="table-success"><?php echo $row['Date_Time']?></td>
						</tr>
				<?php	
					}
				?>
				
			</table>
		</div>
	</div>
</div>
</body>
