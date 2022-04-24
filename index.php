<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body>
  <?php include("includes/nav.php"); ?>

  <div class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-body">
          <?php include 'includes/add_task_form.php'; ?>
        </div>
        <?php include("includes/alerts.php"); ?>
      </div>
      <div class="col md-8">
        <?php include('includes/table.php'); ?>
      </div>
    </div>
  </div>

</body>

<?php include("includes/foot.php"); ?>

</html>