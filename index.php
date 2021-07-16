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
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Cool POS free and open source code point of sale gratis download";?>
    </title>
	<meta name="description" content="download gratis free full source code point of sale with cool design web app - present by axcora technology"/>
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
  <body style="background-image: url('uploads/pos.jpg');
		  background-repeat: no-repeat;
		    background-attachment: fixed;
  background-position: center; 
   background-size: cover;">
   
<div class="container-fluid">
<div class="row">
<div class="col-md-4 p-3 p-md-5">
<div class="p-3 p-md-5 bg-light rounded shadow" style="opacity:0.6;">
<h1><strong><a href="/">Cool POS</a></strong></h1>
<p class="lead">
Helo.. this time a freedom with cool pos, free download gratis and open source code point of sale apps including inventori stock management for supporting your bussiness.
</p>
<a href="https://www.hockeycomputindo.com/2021/05/new-source-code-pos-free-download.html" class="btn btn-primary">Download</a> or 
<a href="login.php" class="btn btn-outline-primary">Get Started</a>
</div>
</div>
<div class="col-md-4 p-3"></div>
<div class="col-md-4 p-3 p-md-5">
<div class="login-page p-3" style="opacity:0.6;">
    <div class="text-center text-white">
	<h3>About</h3>
	<hr class="bg-white">
       <p>Cool pos develope by axcora technology team you can visit on https://axcora.com or https://axcora.my.id<br/> This is a open source code so you can change anycode with your own, of course you can using cool pos with offline desktop mode or clouds based installasion, just download and deploy on your local terminal server or cloud shared hosting and get strated with cool pos.</p>
     <p>
	 If you need to build and develope modern website integration with point of sale application you can contact we team for best solutions. <br/>whatsapp : +6285646104747 <br/>Call : +62895339403223
	 </p>
	 </div>
  	</div>
</div>
</div><div class="col-md-12 p-3 p-md-5"></div></div>
</body>
</html>
