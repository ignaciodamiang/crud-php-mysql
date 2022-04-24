<?php if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show my-2" role="alert">
  <?= $_SESSION['message'] ?>
  <button type=" button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
        session_unset();
        endif; ?>