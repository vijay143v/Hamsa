<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSCMR XEROX NOTIFIER</title>
    <link rel="icon" href="download.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style
>body {
    margin: 0;
    overflow: hidden;
    position: relative;
}

.custom-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}

.video-container {
    position: relative;
    width: 100%;
    height: 100vh;
}
span{
    color: #ff0000;
}

.img {
    text-align: center;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    animation: mark 2s linear;
    animation-iteration-count: 1;
}
.img img {
    max-width: 100%;
    max-height: 100%;
    border-radius: 50%;
}

.heading {
    text-align: center;
    position: absolute;
    text-align: center;
    top: 50%; 
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
    color: white; 
    letter-spacing: 0.5;
    animation: anime 3s linear;
    animation-iteration-count: 1;
}
.button-login {
    text-align: center;
    position: absolute;
    top: 65%; 
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
}

.b-one{
    background-color: rgba(61, 120, 202, 0.973);
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    position: absolute;
    right: 70px;    
    border-radius: 5px;
}
.b-two {
    background-color: rgba(61, 120, 202, 0.973);
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    position: absolute;
    left: 50px;
    border-radius: 5px;
}

.b-one:hover,
.b-two:hover {
    background-color: #0056b3;
    transition: 0.6s ease-in-out;
    border: 1px solid #0056b3;
}</style>
</head>
<body>
    <div class="video-container">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="tech1.mp4" type="video/mp4">
        </video>
        <div class="img">
            <img src="download.png" alt="pscmr-image">
        </div>
        <div class="heading">
            <h1>WELCOME TO PSCMR <span>XEROX</span></h1>
        </div>
        <div class="button-login">
            <a href="facultyy.php"><button class="b-one">Faculty</button></a>
            <a href="student1.php"><button class="b-two">Student</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
