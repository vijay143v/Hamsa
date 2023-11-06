<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Form</title>
    <link rel="icon" href="download.png">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body{
    background-color: #001524;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container{
    background-color: white;
    min-width: 50%;
    flex-wrap: wrap;
    height: auto;
}
.heading{
   display: flex;
   justify-content: center;
   padding-top: 20px;
   text-decoration: underline;
}
.form-main{
    padding-left: 40px;
    padding-top: 20px;
    font-weight: bolder;
    font-size: 20px;
}
button{
    height: 30px;
    width: 100px;
    cursor: pointer;
    background-color: black;
    color: white;
}
button:hover{
    background-color: #001524;
}
#number-input{
    height: 30px;
    width: 30%;
    font-weight: bolder;
    padding-left: 10px;
}
#file{
    border:3px silver dotted;
    width: 90%;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h1>Faculty Form</h1>
        </div>
        <div class="form-main">
            <form action="mailto:devichandambati7@gmail.com" method="post">
                <label for="file">Upload your File (PDF):</label><br><br>
                <input type="file" name="file" id="file" required><br><br>

                <label for="year">Select your Branch:</label><br><br>
                <input type="radio" name="branch" id="CSE" value="CSE">
                <label for="CSE">CSE</label><br><br>
                <input type="radio" name="branch" id="CSE-IOT" value="CSE-IOT">
                <label for="CSE-IOT">CSE-IOT</label><br><br>
                <input type="radio" name="branch" id="CSM" value="CSM">
                <label for="CSM">CSM</label><br><br>
                <input type="radio" name="branch" id="ECE" value="ECE">
                <label for="ECE">ECE</label><br><br>
                <input type="radio" name="branch" id="EEE" value="EEE">
                <label for="EEE">EEE</label><br><br> 

                <label for="year">Select your Year:</label><br><br>
                <input type="radio" name="year" id="1" value="1">
                <label for="1">1</label><br><br>
                <input type="radio" name="year" id="2" value="2">
                <label for="2">2</label><br><br>
                <input type="radio" name="year" id="3" value="3">
                <label for="3">3</label><br><br>
                <input type="radio" name="year" id="4" value="4">
                <label for="4">4</label><br><br>

                <label for="format">Select Print Format:</label><br><br>
                <input type="radio" name="format" value="Color">
                <label for="color">Color</label><br><br>
                <input type="radio" name="format" value="black & white">
                <label for="black & white">black & white</label><br><br>

                <label for="copies">Select No of Copies:</label><br><br>
                <input type="number" id="number-input"><br><br>

                <label for="sides">Select No of Sides:</label><br><br>
                <input type="radio" name="sides" value="1-side">
                <label for="1-side">1-Side</label><br><br>
                <input type="radio" name="sides" value="2-sides">
                <label for="2-sides">2-sides</label><br><br><br>

                <button type="submit">Submit</button><br><br><br>
            </form>
        </div>
    </div>
</body>
</html>