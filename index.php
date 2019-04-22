<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Gateway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  h1{
    text-shadow: 2px 2px red;
    text-align:center;
    margin-top:50px;
}
#int {
  height: 200px;
  background-color: red; 
  background-image: linear-gradient(to right, red , yellow); 
}
#don{
  height: 200px;
  background-image: linear-gradient(to right, green , red); 
  margin-top: 50px;
}
#footer {
    width: 100%;
    height: 90px;
    background: black;
    clear: both;
    margin: auto;
}

  </style>
</head>
<body background="background.jfif">

<div class="container-fluid">


      <div id="int">
        <h1 style="color:black;font-size:50px;text-align:center;padding-top:70px;">  PAYMENT INTEGRATION GATEWAY </h1>
       </div>
      <div id="don">
        <button class="button" style="border-radius:5px;margin-top:100px; margin-left:650px;color:white;width:150px;height:70px;font-size:40px;background-color:blue;" onclick="location.href='main.php'">Donate</button>
      </div>     
</div>
<div id="footer">
     <h2 style="text-align:center;padding-top:30px;"> copyright &copy; 2010-20<?php echo  date("y");?> by Gourav Sharma </h2>        
        </div>

</body>
</html>
