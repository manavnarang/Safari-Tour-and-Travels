<!DOCTYPE html>

<html lang="en">

<head>
   
 <meta charset="UTF-8">
 
   <title>Document</title>

</head>

<body>
  
  <?php
   
 $firstname=filter_input(INPUT_POST,'firstname');

    $lastname=filter_input(INPUT_POST,'lastname');
    
$email=filter_input(INPUT_POST,'email');
  
  $password=filter_input(INPUT_POST,'password');
   
 $confirmpassword=filter_input(INPUT_POST,'confirmpassword');

$dateofbirth=filter_input(INPUT_POST,'dateofbirth');
    
 
    
   
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
               
 $sql="INSERT INTO myname(firstname,lastname,email,password,confirmpassword,dateofbirth) values('$firstname','$lastname','$email','$password','$confirmpassword','$dateofbirth')";
               
 if($conn->query($sql))
{
                   
 echo"<font size='20' face='Arial' color='darkblue'>Account Created Sucessfully!!";
               
 }
               
 else{
                   
 echo"error :".$sql."<br>".$conn->error;
              
  }
               
 $conn->close();
           
 }
   
 ?>

</body>

</html>