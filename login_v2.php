<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Cool POS";?>
    </title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="shortcut icon" sizes="16x16" href="https://axcora.com/img/angular.png">
<link rel="shortcut icon" sizes="32x32" href="https://axcora.com/img/angular.png">
<link rel="apple-touch-icon icon" sizes="76x76" href="https://axcora.com/img/angular.png">
<link rel="apple-touch-icon icon" sizes="120x120" href="https://axcora.com/img/angular.png">
<link rel="apple-touch-icon icon" sizes="152x152" href="https://axcora.com/img/angular.png">
<link rel="apple-touch-icon icon" sizes="180x180" href="https://axcora.com/img/angular.png">
<link rel="apple-touch-icon icon" sizes="192x192" href="https://axcora.com/img/angular.png">
  </head>
  <body style="background-image: url('uploads/ng.jpg');
		  background-repeat: no-repeat;
		    background-attachment: fixed;
  background-position: center; 
   background-size: cover;">
   <nav class="navbar fixed-top">
   <a href="" class="nav-link text-light">Documentation</a>
   <a href="" class="nav-link text-light">Video</a>
   </nav>
      <nav class="navbar fixed-bottom">
   <a href="httpd://axcora.com" class="nav-link text-light">axcora.com</a>
   <a href="" class="nav-link text-light">Download Now</a>
   <a href="https://axcora.my.id/" class="nav-link text-light">axcora.my.id</a>
   </nav>
<div class="container">
<div class="row">
<div class="col-md-12 p-3 p-md-5"></div>
<div class="col-md-3"></div>
<div class="col-md-6 p-3 p-md-5">
<div class="login-page p-3 p-md-5 bg-dark rounded shadow" style="opacity:0.8;">
    <div class="text-center text-white">
       <img class="img-fluid" width="120" src="uploads/dance.png"/>
       <p>Login area</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label text-white">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
		<hr>
        <div class="form-group">
            <label for="Password" class="control-label text-white">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="password">
        </div>
		<hr>
        <div class="form-group">
                <button type="submit" class="btn btn-primary col-12">Login</button>
        </div>
    </form>
	<div class="text-center text-white">
	Present by <a href="https://axcora.com">axcora technology</a>
	</div>
</div>
</div><div class="col-md-12 p-3 p-md-5"></div></div>
</body>
</html>
