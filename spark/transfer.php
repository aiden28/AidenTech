<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>
   viewUser
    </title>
   <style>
      body{
           padding: 0px;
          margin: 0px;
          background-color: skyblue;
          
       }
       form
       {
           text-align:center;
           border: 2px solid black;
           width: 400px;
           height:400px;
           margin-left: 35%;
           font-size: 35px;
           
               
       }
       .view
       {
           margin-top: 30px;
            padding :30px   
       }
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 10px;
            width:6em;
            height:2em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
       
    </style>
    </head>
    <body>
     <form action="checkcredit.php" method="post">
          <div class="view">
              <strong>Transfer Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
        
          <input type="submit">
        
        </div>
        </form>

        
    </body>
</html>
