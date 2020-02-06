<?php
include("db.php");
?>


<html>
<head>
</head>
<body>

<h1>FORM</h1>
<form action="" method="POST">
NAME<input type="text" name="name" value=""/><br><br>
ROLLNO<input type="text" name="rollno" value=""/><br><br>
CLASS<input type="text" name="class" value=""/><br><br>
Upload image<input type="file" name="uploadimage" value=""/>
<input type="submit" name="submit" value="submit"/> 
</form> 
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$class=$_POST['class'];
// if($name!="" && $rollno!="" && $class!="")
// {
$query="INSERT INTO class(name,roolNo,classId) VALUES('$name','$rollno',$class)";

$data=mysqli_query($conn,$query);
echo $query;


if($data)
{
	echo "row inserted";
}
// }
// else
// {
// 	echo "all fields are required";
// }
}

?>