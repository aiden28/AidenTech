<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        body{
           
           
            height:400px;
            text-align: center;
             background-color: skyblue; 
        }
        form{
            text-align: center;
            border:5px solid grey;
            width: 400px;
            height: 400px;
            margin-left: 35%;
        }
        table
        {
            margin-left: 10%;
        }
        h1{
           
            text-align: center;
        }
        .view{
        
        }
     </style>
</head>
<body>


<form  action="http://localhost:82/spark/getdetail.php" method="post">
    <h1> Select User from list</h1>
	<div class="view">

<table cellspacing=50px>
  <tr>
      <td> <solid>Select User</solid></td>
   
<td>
  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form>  
</body>
</html>