<!DOCTYPE html>
<html>
	<head>
		
		<title>
			Registration
		</title>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.countdownTimer.min.js');?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.countdownTimer.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/portfolio.css');?>">
		<script type="text/javascript">
			$(function()
			{
				$("#ms_timer").countdowntimer(
				{
						 minutes : 20,

						 size : "lg"
				});
			});
		</script>
		<script type="text/javascript">

		</script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Auction</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo base_url('index.php/user');?>">Home <span class="sr-only">(current)</span></a></li>
		        <li class=""><a href="<?php echo base_url('index.php/user/my_team');?>">Your Team</a></li>
		        <li class=""><a href="<?php echo base_url('index.php/user/sold_out');?>">Sold Out</a></li>
		      </ul>
		      <form class="navbar-form navbar-left" action="<?php echo base_url('index.php/user/search_p');?>" method="post">
		        <div class="form-group">
		          <input type="text" name="splyr" class="form-control" placeholder="Search Players">
		        </div>
		        <div class="form-group">
		        	<button type="submit" class="btn btn-primary">Submit</button>
		        </div>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a>MONEY:<?php echo $t[0]['money']; ?></a></li>
		        <li><a href="<?php echo base_url('index.php/user/logout');?>">Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>