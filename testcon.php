<?php
$servername = "localhost:3307";
$username = "root" ;
$password='';
$database_name="student";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
   die("Connection Failed:" . mysqli_connect_error());

}
   if(isset($_POST['save']))
{
    $NAME = $_POST['NAME'];
    $ROLL_NUMBER = $_POST['ROLL_NUMBER'];
    $AGE = $_POST['AGE'];
    $SCORES = $_POST['SCORES'];
     
    $sql_query = "INSERT INTO students(name,roll_number,age,scores) VALUES ('$NAME','$ROLL_NUMBER','$AGE','$SCORES')";

  if(mysqli_query($conn,$sql_query))
  {
    echo  "New Entry inserted succesfully !";
  }
  else
  {
    echo "Error:", $sql ,"" ,mysqli_error($conn);
  }  
}       
mysqli_close($conn);
?>