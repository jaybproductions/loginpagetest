
<?php

session_start();
require "config.php"?>
<html>
<head>
  <title>Jay23B Productions</title>


<link rel="stylesheet" href="/css/site.css">

<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 200%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: red;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="homepage.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="login.php">Login/Logout</a>
  </div>
</div>

<h1>JayB Productions <br><b>logged in as, <?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>



<div class="container">
  <img src="/images/Logo2.jpg" alt="Snow" style="width:200%">

  <a href="https://www.github.com/jaybproductions" class="btn">Check out my Github!</a>
</div>


</body>
</html>
