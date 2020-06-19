<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home page </title>
    <!-- <link rel="stylesheet" href="home.css"> -->

</head>
    <style>
        .button {
          border: none;
          border-radius: 5px;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          /* margin: 300px 700px; */
          cursor: pointer;
          background-color: #FFD310; /* Blue */

          
        }
        a{
            text-decoration: none;   
            color: white;

        }
        body{

text-align: center;

background-image: url(images/backhome.jpg);
background-repeat: no-repeat;
background-size: 100%;
color: rgb(252, 243, 243);
font-size: 90px;
margin-top: 20%;

}
        </style>
<body>

<?php 

echo "Leave Management System <br>";

?>


<!-- <button class="btn">Enter</button> -->
<!-- <form method="get" action="/page2">
    <button  class="btn" type="submit">Enter</button>
</form> -->

<!-- <form action="login.php">

</form>  -->

<button class="button button2"><a href="login.php" class="btn">Enter</a></button>


</body>
</html>