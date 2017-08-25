
<?php

include(ROOT.'/views/layout.php');

?>

<div class="container after-nav">
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
    <h2>User  List</h2>
  <ul class="list-group">
<?php foreach ($userList as  $value): ?>


  <li class="list-group-item">
    <?php echo $value ?>
  </li>

<?php endforeach; ?>

  </ul>

</div>
</div>
</div>
