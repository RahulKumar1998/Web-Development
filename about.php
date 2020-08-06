<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Quizzer </title>
  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
</head>

<body>

<div class="row header">
<div class="col-lg-6">
<span class="logo"><button><a href="index.php" style="text-decoration:none;">BMS Quizzer</a></button></span></div>
<div class="col-md-2">
</div>
<div class="col-md-4">
<?php
include_once 'dbConnection.php';
session_start();
if ((!isset($_SESSION['username']))) {
    echo '<a href="#" class="pull-right logb btn btn-primary" data-toggle="modal" data-target="#myModal"><span aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Login</font></a>&nbsp;';
} else {
    echo '<a href="logout.php?q=feedback.php" class="pull-right logb btn btn-primary"><span aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Logout</font></a>&nbsp;';
}
?>

<a href="index.php" class="pull-right logb btn btn-primary"><span aria-hidden="true"></span>&nbsp;<font style="font-size:12px;font-weight:bold">Home</font></a>&nbsp;
</div></div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:darkblue;font-weight:bold">Login to your Account</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-3 control-label" for="username"></label>
  <div class="col-md-6">
  <input id="username" name="username" placeholder="Enter your username-id" class="form-control input-md" type="username">

  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>
<div class="bg1" style="background-image :url('image/xyz.jpg');height:100%;width:100%; background-repeat: no-repeat;";>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="background-image:url(image/bg1.jpg);background-size:cover; min-height:430px;">
<h2 align="center" style="font-family:'typo'; color:#000066">About Developers</h2>
<div style="font-size:12px;font-weight:bold; margin-top:20px;word-wrap:break-word"><br />
<?php
/* $file = fopen("about.txt", "r");
while (!feof($file)) {
    $string = fgets($file);
    $num    = strlen($string) - 1;
    $c      = str_split($string);
    for ($i = 0; $i < $num; $i++) {
        $last = $c[$i];
        if ($c[$i] == ' ' && $last == ' ') {
            echo '&nbsp;';
        } else {
            echo $c[$i];
        }
    }
    echo "<br />";
}

fclose($file);
 */?>
 <p>Rahul Kumar &nbsp;
<img src="http://localhost/online-quiz/image/bg7.jpg" height="120px" width="100px" > USN:1BM17CS070
<br/><br/>
Prateek Aryan
<img src="http://localhost/online-quiz/image/bg8.jpg" height="120px" width="100px" > USN:1BM17CS065
<br/><br/>
Ravi Prakash &nbsp;&nbsp;

<img src="http://localhost/online-quiz/image/bg6.jpg" height="120px" width="100px" > USN:1BM17CS074
<br/><br/>
Raghavendra &nbsp;&nbsp;
<img src="http://localhost/online-quiz/image/bg5.jpg" height="120px" width="100px" > USN:1BM17CS069


  </p>
</div>
<div class="col-md-3"></div></div>
</div></div>
</div>
<div class="row footer">
<div class="col-md-2 box">
</div>
<div class="col-md-6 box">
<span href="#" data-target="#login" style="color:lightyellow">Created by PS7 BATCH, BMSCE, Bangalore<br><br></span></div>

<div class="col-md-2 box">
<a href="about.php" s style="color:lightyellow;text-decoration:underline" onmouseover="this.style('color:yellow')">About Developers</a></div>
</div>
</body>
</html>
