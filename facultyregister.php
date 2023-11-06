<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faculty Register</title>
   <link rel="icon" href="download.png">
    <style>
       body{
    background-color: rgb(0, 0, 0);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10rem;
    background-image:url("kelly-sikkema-tk9RQCq5eQo-unsplash.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: repeat-y;
    
}
.heading{
    display: flex;
    justify-content: center;
}
.reg-box{
    min-height: 27rem;
    width: 25rem;
    background-color: rgb(255,255,255);
    border: 2px solid rgb(255,255,255);
    backdrop-filter: blur(1px);
    border-radius: 5px;
}
.reg-box h1{
    text-decoration: underline;
    font-weight: bolder;
}
.form{
    font-weight: bold;
    font-size: 15px;
    padding-left: 30px;
}
form input{
    height: fit-content;
    width: 20rem;
    font-weight: bold;
    font-size: 20px;
    padding-left: 10px;
}
.submit{
    display: flex;
    justify-content: center;
    padding-top:20px;
    padding-right:10px;
}
.submit button{
    height:30px;
    width:100px;
    background-color:black;
    color:white;
    border-radius:10px;
    cursor:pointer;
}
#data{
    font-size: 15px;
}
a{
    color:red;
} 
.result{
   display: flex;
   justify-content: center;
   font-weight: bold;
   color: red;
}
    </style>
</head>
<body>
   <div class="reg-box">
    <h1 style="text-align: center;">Register</h1>
    <div class="form">
    <form style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" method="post">
        <label for="uname"> Faculty ID number:</label><br>
        <input type="text" name="fid"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass"><br><br>
        <label for="pass">Confirm Password:</label><br>
        <input type="password" name="conpass" id="pass"><br>
</div>
        <div class="submit">
        <button type="submit" name="submit">Submit</button>
        </div>
        <div class="result"><?php
 if(isset($_POST["submit"])){
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"mini project");
    $fid=$_POST["fid"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $con_pass=$_POST["conpass"];
    $fetchsql="select * from facultyreg;";
    $inssql="insert into facultyreg values('$fid','$email','$pass','$con_pass');";
    $found=false;
    $res=false;
    $fetchres=mysqli_query($con,$fetchsql);
    if(empty($fid)||empty($email)||empty($pass)||empty($con_pass)){
        echo "<p>Form should not be submitted empty</p>";
    }else if($pass!=$con_pass){
        echo "<p>Password and Confirm Password are not Same</p>";
    }else{
        while($row = mysqli_fetch_array($fetchres)){
            if($fid==$row[0]||$email==$row[1]){
                $found=true;
            }
        }
        if($found==true){
            echo "<p>Already existed user with this Info</p>";
        }else{
            $res=mysqli_query($con,$inssql);
        }
    }
    if($res){
        echo "<p>Details Inserted Sucessfully</p>";
    }
}
?></div>
    </form>
</div>
</body>
</html>
