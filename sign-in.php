<?php
$name = $_POST['uname'];
$pass = $_POST['pwd'];

$connection=mysqli_connect("localhost","root","" ,"sigin-in");
if(!$connection){
    die("problem in connection");
}
if(isset($_POST['save'])){
   $insert_query="INSERT INTO userdata(uname,pwd) VALUES('$name','$pass')";
   if(mysqli_query($connection, $insert_query)){
    
    header("refresh:5,url=tour.html");
   }
   else{
    echo "unable to register";
   }


}
?>