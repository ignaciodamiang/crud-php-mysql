<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body>
  <?php include("includes/nav.php"); ?>
  <div class="container p-4">
    <div class="row">
      <div class="col-md-4">
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_unset();
        endif; ?>
        <div class="col md-8">
          <div class="card card-body">
            <form action="save.php" method="post">
              <div class="mb-3"><input type="text" name="title" class="form-control" placeholder="Task title" autofocus>
              </div>
              <div class="mb-3"><textarea name="description" rows="2" class="form-control"
                  placeholder="Task description"></textarea>
              </div>
              <div class="d-grid">
                <input type="submit" class="btn btn-success" name="save" value="Save">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<?php include("includes/foot.php"); ?>

</html>