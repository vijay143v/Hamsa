<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faculty Login</title>
    <script src="login.js"></script>
    <link rel="icon" href="download.png">
    <style>
        body{
    background: rgb(90,90,90);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10rem;
    font-family: Arial, Helvetica, sans-serif;
}
.reg-box{
    height: 25rem;
    width: 25rem;
    background-color: white;
    border-radius: 10px;
}
.reg-box h1{
    text-decoration: underline;
    padding-left: 2rem;
    font-weight: bolder;
}
form{
    font-weight: bold;
    font-size: 25px;
    padding-left: 30px;
}
form input{
    height: 2rem;
    width: 20rem;
    font-weight: bold;
    font-size: 20px;
    padding-left: 10px;
}
.reg-box label{
    font-size: 20px;
}
form button{
    height: 2rem;
    width: 5rem;
    font-size: 15px;
    border-radius: 10px;
    background-color: black;
    color: white;
    cursor: pointer;
}
form button:hover{
    background-color: blue;
    transition: 0.2s all ease-in-out;
}
#data{
    font-size: 18px;
    color: red;
}
a{
    color:blue;
}
    </style>
</head>
<body>
   <div class="reg-box">
    <h1>Login</h1>
    <form method="post">
        <label for="uname">Faculty ID:</label><br>
        <input type="text" name="fid" id="fid"><br><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass" id="pass"><br>
        <p style="font-size: 15px;">Didn't have an account? <a href="facultyyy.php">Register now</a></p>
        <br>
        <button type="submit" name="submit">Submit</button>
        <div id="data">
            <?php
             if(isset($_POST["submit"])){
                $con=mysqli_connect("localhost","root","");
                mysqli_select_db($con,"mini project");
                $fid=$_POST["fid"];
                $pass=$_POST["pass"];
                $fetch="select faculty_id,password from facultyreg;";
                $fetchres=mysqli_query($con,$fetch);
                $found=false;
                if(empty($fid)||empty($pass)){
                    echo "<p>Credentials can't be empty</p>";
                }else{
                while($row = mysqli_fetch_array($fetchres)){
                    if($fid==$row[0]&&$pass==$row[1]){
                        $found=true;
                    }
                }
                if($found){
                    header("Location:facultyform.php");
                }else{
                    echo "<p>Invalid credentials</p>";
                }
            }
              }
            ?>
        </div>
    </form>
   </div>
</body>
</html>