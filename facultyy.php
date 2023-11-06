<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="facultyy.css">

</head>
<body>
<section>
    <div class="colour"></div>
    <div class="colour"></div>
    <div class="colour"></div>
    <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>
        <div class="square" style="--i: 5"></div>
        <div class="square" style="--i: 6"></div>
        <div class="container">
            <div class="form">
                <h2>Login Form</h2>
                <form method="post" onSubmit="Valid()">
                    <div class="input__box">
                        <label for="uname">
                            <input type="text" name="fid" id="fid" placeholder="Faculty Id">
                        </label>
                    </div>
                    <div class="input__box">
                        <label for="pass">
                            <input type="password" name="pass" id="pass" placeholder="Password">
                        </label>
                    </div>
                    <div class="input__box">
                        <input type="submit" value="Login" name="submit" id="submit">
                    </div>
                    <p class="forget">
                        Don't have an account? <a href="facultyyy.php">Sign Up!</a>
                    </p>
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
        </div>
    </div>
</section>
<script src="login.js"></script>
</body>
</html>
