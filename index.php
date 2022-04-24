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
        <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_unset();
        endif; ?>

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
      <div class="col md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM task";
              $tasks = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($tasks)): ?>

            <tr>
              <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['description'] ?></td>
              <td><?php echo $row['created_at'] ?></td>
              <td class="text-center">
                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                  <i class="bi bi-trash"></i>
                </a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

<?php include("includes/foot.php"); ?>

</html>