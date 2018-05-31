<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Agung's Site</title>

  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">

  <!-- <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"> -->

  <link href="<?=base_url('assets/css1/freelancer.min.css')?>" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
            <li><span class="btn btn-default glyphicon glyphicon-plus" style="color: red;"></span><b style="color: white;"> 4's Hospital</b></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
           <li><span class="glyphicon glyphicon-user" style="color: white;"><?php echo $this->session->userdata('ses_nama');?></span></li><br
            <li><a href="<?php echo base_url('index.php/login/logout')?>">Sign Out</a></li>
           </ul>
        </div>
      </div>
    </nav>