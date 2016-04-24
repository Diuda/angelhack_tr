<?php
include 'init.php';
?>


<html>
<head>
<title>Bucket</title>
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="text/css" rel="stylesheet" href="css/main.css"  media="screen,projection"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/awesomplete.js"></script>
<link rel="stylesheet" href="css/awesomplete.css"/>
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="back_top">
	<div class="centre" id="bt_bar" style="height:60px;padding:10px;float:right;width:25%;">
    <div id="sr" style="float:right">
  <a class="waves-effect waves-light btn tras" style="padding-right:10px;;letter-spacing:0px" href="logout.php">Logout</a>
</div>
<div id="sr" style="width:50%">
	<astyle="letter-spacing:2px;font-size:30px;" class="white-text"><?php echo "<h4> Hi, ".$user_data['first_name']."</h4>"; ?></a>
</div>
</div>
<div class="centre" id="lg">
	<a href="#">
<img class="imag" src="./drawable/logo.png">
</a>
</div>
<div class="centre" id="se_bar">	
<input type="search" class="foo awesomplete" list="mylist"/>
<datalist id="mylist">
	<option>Coorg</option>
	<option>Goa</option>
	<option>Gokarna</option>
	<option>Haridwar</option>
	<option>Pondicherry</option>
	<option>Ladakh</option>
	<option>New Delhi</option>
	<option>Manipal</option>
	<option>Malpe</option>
	<option>Kapu</option>
	<option>Delta</option>
</datalist>
</div>
<br>
<br>
<div class="centre" id="bt_bar">
<div id="sr">
	<a class="waves-effect waves-light btn tras">Search</a>
</div>
<div id="sr">
	<a class="waves-effect waves-light btn tras">Explore</a>
</div>
</div>
<div class="centre" id="or_bar">
<img class="imag" src="./drawable/or.png">
</div>
<div class="centre" id="add_bar">
	<a class="waves-effect waves-light btn tras">Set Your Location</a>
</div>
<div class="centre" id="dw">
	<img class="imag" src="./drawable/down_arrow.png">
</div>
</div>
<div>
<div class="head">
	<div class="scroll">
	  <div class="row row">
  <div class="col s12 m7">
    <div class="card-panel teal">
      <h2 class="white-text">Top 10 Places
      </h2>
    </div>
  </div>
</div>
	<div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mar">
    <div class="col s12 m7">
      <div class="card blue-grey">
        <div class="card-content white-text">
          <span class="card-title">1. Blah Blah</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Visit</a>
          <a href="#">Explore</a>
        </div>
      </div>
    </div>
  </div>
	<div>
</div>
</div>
</body>
</html>