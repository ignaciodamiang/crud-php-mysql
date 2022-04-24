<?php
include('db.php');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result){
    die("Query Failed.");
  }
  $row = mysqli_fetch_array($result);
  $title = $row['title'];
  $description = $row['description'];
}

if(isset($_POST['update'])){
  $id = $_GET['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>

<body>
  <?php include("includes/nav.php"); ?>
  <div class="container p-4">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card card-body">
          <h3 class="text-center">Edit Task</h3>
          <form action="edit.php?id=<?= $_GET['id'];?>" method="post">
            <div class="mb-3"><input type="text" name="title" class="form-control" placeholder="Update title"
                value="<?= $title;?>"></div>
            <div class="mb-3"><textarea name="description" rows="2" class="form-control"
                placeholder="Update description"><?= $description?></textarea>
            </div>
            <div class="d-grid">
              <input type="submit" class="btn btn-success" name="update" value="Update">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include("includes/foot.php"); ?>

</html>