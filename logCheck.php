<?php
session_start();
  if(isset($_POST['submit']))
   {
   	if(empty($_POST['id']) || empty($_POST['pass']))
   		 {
            echo "ID or Pass is empty";
   		 }
       else
        {
          $_SESSION['status']=true;
           header('location:home.php');
       }
   }
?>