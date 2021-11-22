<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header>

<?php $introduction = get_field('introduction'); ?>
<?php $team = get_field('team'); ?>


<div class="topnav" id="myTopnav">
  <a href="#introduction"> <?php echo $introduction['title'] ?> </a>
  <a href="#team"> <?php echo $team['title'] ?> </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    </header>
