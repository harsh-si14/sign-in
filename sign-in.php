<?php
$name = $_POST['uname'];
$pass = $_POST['pwd'];
 echo $name.$pass;
$connection=mysqli_connect("localhost","root","" ,"sigin-in");
if(!$connection){
    die("problem in connection");
}
if(isset($_POST['save'])){
   $insert_query="INSERT INTO userdata(uname,pwd) VALUES('$name','$pass')";
   if(mysqli_query($connection, $insert_query)){
    echo "succesfull";
    header("refresh:5,url=index.html");
   }
   else{
    echo "unable to register";
   }


}
?>