<?php
  $page_title = 'All categories';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  
  $all_categories = find_all('categories')
?>
<?php
 if(isset($_POST['add_cat'])){
   $req_field = array('categorie-name');
   validate_fields($req_field);
   $cat_name = remove_junk($db->escape($_POST['categorie-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO categories (name)";
      $sql .= " VALUES ('{$cat_name}')";
      if($db->query($sql)){
        $session->msg("s", "Successfully Added Categorie");
        redirect('categorie.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('categorie.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('categorie.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row text-secondary">
 <div class="col-12 col-md-6 p-3 p-md-5">
<img class="img-fluid" src="uploads/sa.png"/>
</div>

 
  <div class="col-12 col-md-6 p-3 p-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
          
            <span>Add New Group Categories</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="categorie.php">
            <div class="form-group">
                <input type="text" class="form-control" name="categorie-name" placeholder="Categorie Name">
            </div>
			<hr/>
            <button type="submit" name="add_cat" class="btn btn-primary btn-lg col-12">Add categories</button>
        </form>
        </div>
      </div>
    </div>
   </div>
  <?php include_once('layouts/footer.php'); ?>
