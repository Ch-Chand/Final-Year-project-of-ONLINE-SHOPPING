<?php
    if(isset($_GET['submit'])){
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $contact=$_POST["contactno"];
        $bday=$_POST["bday"];
        $gender=$_POST["gender"];
        $email=$_POST["email"];
        $password=$_POST["password"];

        $servername="localhost";
        $username="root";
        $password="";
        $database="sablayja";
        //Connecting
        $con=mysqli_connect($servername, $username, $password, $database);
        //Checking connection
        if($con->connect_error==true){
            echo "Not Connected"."<br>";
        }
        else{
            echo "Mubarak Ho Connect Ho Gaya";
        }
    }
    
?>