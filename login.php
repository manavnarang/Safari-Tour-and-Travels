<!DOCTYPE html>

<html lang="en">

<head>
   
 <meta charset="UTF-8">
 
   <title>Document</title>

</head>

<body>
  
  <?php
   
 $username=filter_input(INPUT_POST,'username');
 $password=filter_input(INPUT_POST,'password');
   
 
    
   
         $host="localhost";
           
 $dbusername="root";
           
 $dbpassword="";
            
$dbname="kanishk";
        
           
 $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                
if(mysqli_connect_error())
                
{
                    
die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

                }
  
          else{
               
 $sql="INSERT INTO login(username,password) values('$username','$password')";
               
 if($conn->query($sql))
{
                   
 echo"<font size='20' face='Arial' color='red' >Logged In Sucessfully!!";
               
 }
               
 else{
                   
 echo"error :".$sql."<br>".$conn->error;
              
  }
               
 $conn->close();
           
 }
   
 ?>

</body>

</html>