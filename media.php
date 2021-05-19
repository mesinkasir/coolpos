<?php
  $page_title = 'All Image';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php $media_files = find_all('media');?>
<?php
  if(isset($_POST['submit'])) {
  $photo = new Media();
  $photo->upload($_FILES['file_upload']);
    if($photo->process_media()){
        $session->msg('s','photo has been uploaded.');
        redirect('media.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('media.php');
    }

  }

?>
<?php include_once('layouts/header.php'); ?>
     <div class="row">
              <div class="col-12 col-md-12 p-3 p-md-5 text-light">
			  <h3>Media Gallery</h3>
			  </div>
                <?php foreach ($media_files as $media_file): ?>
                    <div class="col-6 col-md-4 p-3 p-md-5">
                      <img src="uploads/products/<?php echo $media_file['file_name'];?>" class="img-fluid"/>
					  <br>
                  <a href="delete_media.php?id=<?php echo (int) $media_file['id'];?>" class="btn btn-danger btn-xs"  title="Edit">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg> Deleted
                  </a>
                </div>
              <?php endforeach;?>
         
        
     
</div>


<?php include_once('layouts/footer.php'); ?>
