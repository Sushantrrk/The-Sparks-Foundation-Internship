<?php
	include "MDB.php";
	include "connection.php";
	error_reporting(0);
	
	$customers = mysqli_query($conn,"select * from customers");
	$balance = mysqli_query($conn,"select * from demouser");

	$amt = $_POST['amount'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	date_default_timezone_set("Asia/Kolkata");
	$t = date("Y-m-d h:i:s a");
	if(isset($_POST['submit']))
	{	
		$customers1 = mysqli_query($conn,"select * from customers where Name = '$to'");
		$balance1 = mysqli_query($conn,"select * from demouser");
		foreach ($customers1 as $c) {
			$CustBalance = $c["Balance"];
		}
		foreach($balance1 as $b){
			$bal = $b["Balance"];
		}
		if ($amt > $bal) {
			?>
			<script>
				alert("Amount must be less than balance")
			</script>
			<?php
		}
		elseif($to == "---Select---")
		{
			?>
			<script>
				alert("Please select a customer")
			</script>
			<?php
		}
		else
		{
			$TransactionQuery = "insert into transactions (From_user,To_customer,Amount,Date_Time) values ('Demo_User','$to','$amt','$t')";
			$UpdateDemoUserQuery = "update demouser set Balance =$bal-$amt where ID = 1";
			$UpdateCustBalance = "update customers set Balance =$CustBalance+$amt where Name = '$to'";
			if(mysqli_query($conn,$TransactionQuery) && mysqli_query($conn,$UpdateDemoUserQuery) && mysqli_query($conn,$UpdateCustBalance)){

			?>
			<script>
				alert("Transaction Sucessful <?php date_default_timezone_set("Asia/Kolkata") ?>")
				window.location.href="Statements.php"
			</script>
			<?php
				
			}
			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Make Trasaction</title>
</head>
<body id="background">
<?php include "header.php"?>
	<div class="mx-auto" >
	  	<div class="w-100 p-5" >
	  		<form action="Make Transaction.php" method="post">
			  <fieldsed>
			    <legend>Select a customer to make trasaction</legend>
			    <div class="mb-3">
			      <label for="TextInput" class="form-label"><b>From</b></label>
			      <input type="disabledSelect" id="TextInput" class="form-control" placeholder="Demo_User" name="from" required disabled>
			    </div>
			    <div class="mb-3">
			      <label for="text" class="form-label"><b>To Customer</b></label>
			      <select id="text" class="form-select" name="to" required>
			        <option>---Select---</option>
			        <?php
						foreach ($customers as $row) 
						{
					?>			        	
			        	<option><?php echo $row["Name"]?></option>
			       	<?php
			       		};
			        ?>
			    </select>
			    </div>
			    <div class="mb-3">
			    	<label><b>Current Balance</b></label>
			    	<?php
						foreach($balance as $bal)
						{	
					?>
			    		<input type="disabledSelect" width="100" placeholder="<?php echo $bal["Balance"]?>" disabled>
			    	<?php
			       		}
			        ?>
			    </div>
			    <div class="mb-3">
			    	<label><b>Amount</b></label>
			    	<input type="text" placeholder="0" name="amount" required>
			    </div>
			    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			  </fieldset>
			</form>
	 	</div>
	</div>
</i>
</body>
</html>