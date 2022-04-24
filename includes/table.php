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