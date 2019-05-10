<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
	<h2>Pilih Menu</h2>
	<hr>
	<button class="btn btn-sm bg-success">
      <a class="nav-link text-white" href="<?php  echo site_url('C_join/left_join')?>">Left Join</a>
     </button>
     <button class="btn btn-sm bg-success">
      <a class="nav-link text-white" href="<?php  echo site_url('C_join/right_join')?>">Right Join</a>
     </button>
     <button class="btn btn-sm bg-success">
      <a class="nav-link text-white" href="<?php  echo site_url('C_join/inner_join')?>">Inner Join</a>
     </button>
     </div>
</body>
</html>