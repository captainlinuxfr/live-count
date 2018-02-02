<?php 
require './core/vendor.php';
$yt = new Youtube(KEY_API);
$upload = $yt->totalvideo(CHANNEL);
$viewer = $yt->viewer(CHANNEL);
$subscribers = $yt->subscribers(CHANNEL);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tool to count YouTube subscribers.">
    <meta name="keywords" content="youtube,tool,subscriber">
    <title>Youtube live count v1</title>
  
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/odometer/0.4.7/themes/odometer-theme-minimal.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
      <style type="text/css"> 
       body { padding-top: 80px; }
        @media ( min-width: 768px ) {
     .odometer {
      font-size: 100px;
    }
  }

  </style>
</head>
<body>
<header>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="./" class="navbar-brand"><b><span style="color:#0037EA;">You</span><span style="color:#DDE0E9;">Live</span><span style="color:#EA0010;">Count</span></b><span style="color:#f48260;"><i class="glyphicon glyphicon-heart"></i></span></a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://captainlinux.net" target="_blank">By captainlinux.com</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
  <div class="container">

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">  
               <center><img src="<?php echo $yt->img(CHANNEL); ?>" class="img-responsive img-responsive-overwrite img-circle "></center>
               <h1><?php echo CHANNEL; ?></h1>
               <div id="sub" class="odometer">0</div>
            <hr>
        </div>
    </div>
  </div>

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 text-center">
        <div class="col-sm-4 text-center">
        <h2><i class="fa fa-user" data-toggle="tooltip" data-original-title=""></i><br>
        <?php echo $subscribers; ?></h2>
        </div>
        <div class="col-sm-4 text-center">
        <h2><i class="fa fa-eye" data-toggle="tooltip" data-original-title=""></i><br>
        <?php echo $viewer; ?></h2>
        </div>
        <div class="col-sm-4 text-center">
        <h2><i class="fa fa-video-camera" data-toggle="tooltip" data-original-title=""></i><br>
        <?php echo $upload; ?></h2>
        </div>
        <hr>
      </div>
    </div>





<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/odometer/0.4.7/odometer.min.js"></script>
<script type="text/javascript" src="js/captainlinux.js"></script>



</body>
</html>





