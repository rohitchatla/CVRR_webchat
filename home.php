<?php
session_start();
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
	<h1><?php echo $_SESSION['name']?>-*online*</h1>
	<div>
		<?php
$sql="SELECT * FROM posts";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		echo "".$row["name"]. "" ."::".$row["msg"] . "--" .$row["date"]."<br>";
		echo "<br>";
	}
}else{
	echo "0 result";
}
$conn->close();


		?>
	</div>
	<div class="chat">
		<form action="send.php" method="post">
		<textarea name="msg" placeholder="type"></textarea><br>
		<input type="submit" name="" value="send">
	</form>
	<br>
	<form action="logout.php" method="post">
		<input type="submit" name="" value="logout">
		
		
	</form>
	</div>
	
</div>
</body>
</html>