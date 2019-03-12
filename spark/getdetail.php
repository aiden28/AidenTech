<?php 
session_start();
$con=mysqli_connect('localhost','root','','test');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <style>
            body{
           height:400px;
            text-align: center;
             background-color: skyblue; 
              
        }
        th,td,table{
            border-collapse: collapse;
              font-size: 30px;
            margin-top: 50px;
            margin-left: 10%;
            padding: 15px;
            border: 1px solid black;
        }
        #transfer{
            
            margin-top: 80px;
           
        }
        .view{
            border: 2px solid black;
            height:400px;
            width: 400px;
            margin-left: 35%;
        }
        input[type=submit]
        { 
            width:10em;
            height:4em;
            font-size:15px;
            background-color: brown;
            font-weight: bold;
        }
        h2{
                font-weight: bold;                    
              font-size: 30px;

        }
    </style>
    </head>
    <body>
    <div class="view">
        <h2>User Information</h2>
       <table>
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>


        </table>
        <form id="singleuser" action="singleview.php" method="post">
        <div id="transfer">
        <input type="submit" value="TransferTo">
        </div>
        </form>
        </div>
    </body>
</html>