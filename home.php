<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12 p-3 p-md-5">
    <div class="panel">
      <div class="jumbotron text-center text-white">
         <h1>Cool POS Web Apps</h1>
 <img class="img-fluid" src="uploads/si.png"/>     
	 <p>Free and open source code point of sale inventori stock management present by <a href="https://axcora.com">https://axcora.com</a> and <a href="https://axcora.my.id">https://axcora.my.id</a>.<br/>More source code project <a href="https://www.hockeycomputindo.com/2010/12/blog-post.html" class="btn btn-primary">download in here</a> </p>
     
	  </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
