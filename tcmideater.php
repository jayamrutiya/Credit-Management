<?php
session_start();
echo $_SESSION['name'];
include "db.php";
if (!isset($_SESSION['name'])){
  header("location:logout.php");
}


$name1 = $_SESSION['name'];
$query = "SELECT current_credit FROM userdata WHERE name='$name1'";
			$result = mysqli_query($conn,$query);
			while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
				$current_credit = $row['current_credit'];
 			}
if (isset($_POST['submit'])) {
	if(!empty($_POST['bakro'])&&!empty($_POST['amount'])){
		if(($_POST['amount'] <= $current_credit) && ($_POST['amount'] > 0)){
			$bakro = $_POST['bakro'];
			$amount = $_POST['amount'];
			$query = "SELECT current_credit FROM userdata WHERE name='$bakro'";
			$result = mysqli_query($conn,$query);
			while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
				$current_credit1 = $row['current_credit'];
			}
			$total1 = $amount + $current_credit1;
			$total = $current_credit - $amount;
			$query1 = "UPDATE userdata SET current_credit='$total1' WHERE name='$bakro'";
			$query2 = "UPDATE userdata SET current_credit='$total' WHERE name='$name1'";
			if ((mysqli_query($conn,$query1)) && (mysqli_query($conn,$query2))) {
				// if (mysqli_query($conn,$query2)) {
					$query3 = "UPDATE userdata SET status='unselected' WHERE name='$name1'";
					if (mysqli_query($conn,$query3)) {
						//echo "<script>alert('You transfer ".$amount." from ".$name1." to ".$bakro. "')</script>";
						header("Location:logout.php");
					}else{
						echo "<script>alert('" .mysqli_error($conn). "')</script>";
					}
				// }else{
				// 	echo "<script>alert('" .mysqli_error($conn). "')</script>";
				// }
			}else{
				echo "<script>alert('" .mysqli_error($conn). "')</script>";
			}
		}else{
				echo "<script>alert('Pls enter <= ".$current_credit. "')</script>";
			}
	}else{
				echo "<script>alert('Pls select User and Enter amount to transfer')</script>";
		}
}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>TC</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
          <a class="navbar-brand" href="logout.php">Credit Management</a>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Transfer Credit</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">See All Users</a>
                  </li class="nav-item">
              </ul>
          </div>
     </nav>
	<div class="container">
		<br>
		<div class="row">
			<h2 class="ml-5"><i class="fa fa-exchange mr-5" aria-hidden="true"></i>Select one user & write amount to add credit in his/her account.</h2>
		</div>
		<br>
<form action="tcmideater.php" method="post">
	<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Current_Credit</th>
                </tr>
            </thead>


            <?php
				$query = "SELECT id,name,email,current_credit FROM userdata WHERE status='unselected'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
					$id = $row['id'];
					$name = $row['name'];
					$email = $row['email'];
					$current_credit = $row['current_credit'];
			?>

            <tbody>
                <tr>
                	
                    <th scope="row"><?php echo $id; ?></th>
                    <th><label><input type="radio" name="bakro" class="mr-5" value="<?php echo $name; ?>"><?php echo $name; ?></label></th>
                    
                    <td><?php echo $email; ?></td>
                    <td><?php echo $current_credit; ?></td>
                    
                    
                </tr>
            </tbody>
            <?php

}

?>
			
        </table>
        
<div class="row">
	<label>Enter the amount to transfer</label>
	<input type="number" name="amount" class="form-control">
</div>
<div class="row mt-5">
				<input type="submit" name="submit" value="Transfer" class="form-control btn btn-info">
			</div>

<br>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</form>
</div>
</body>
</html>