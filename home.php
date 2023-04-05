<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="./new.css">
</head>
<body>
    <?php 
   $username=$_POST["username"];
   $password=$_POST["password"];
   if( $username=="Suprima"&& $password=="sups0110"){
    ?>
    <div class="box">
       <div class="caption"> <p>UserName:
            <?php echo $username; ?>
   </p>
    <a class="a" href="./index.php">Log Out </a>
       </div>
    <div class="desc" >
   <div class="note">Welcome Admin<br></div>
   <img src="https://img.freepik.com/premium-vector/hello-lettering-handwritten-vector_546326-23.jpg?w=2000" alt="image">
    </div>
    </div>
      <?php
   } 
   else{
    ?>
    <div class="box">
        <div class="caption">UserName:
            <?php echo $username; ?>
   </div><br>
   <div class="note1">Incorrect crediantor</div>
   <br>
   <a class="a1" href="./index.php">Log in</a>
    </div>
      <?php
   } 
   
   ?>
</body>
</html>