<?php
$page_title = 'Sale Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12 p-3 p-md-5">
    <div class="panel">
     
      <div class="panel-body text-center">
          <form class="clearfix" method="post" action="sale_report_process.php">
            <div class="form-group">
             <h3><label class="form-label text-white">Run Income Report</label></h3>
                <div class="input-group">
                  <input type="text" class="datepicker form-control" name="start-date" placeholder="Start Date">
                  <span class="input-group-addon">End</span>
                  <input type="text" class="datepicker form-control" name="end-date" placeholder="End Date">
                </div>
            </div>
			<hr>
            <div class="form-group">
                 <button type="submit" name="submit" class="btn btn-primary">Run Report</button>
            </div>
          </form>
      </div>

    </div>
  </div>

</div>
<?php include_once('layouts/footer.php'); ?>
