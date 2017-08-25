<?php

include(ROOT.'/views/layout.php');
?>



<div class="container after-nav">

<div class="row">
<div class="col-lg-6 col-lg-offset-3">
  <h2>Ad List</h2>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Name</th>
      <th>Ad</th>
    </tr>
  </thead>
     <tbody>

<?php foreach ($aList as $value):?>


     <tr>
       <td><?php echo $value['name'] ?></td>
       <td><?php echo $value['title'] ?></td>
     </tr>


<?php endforeach; ?>
</tbody>
</table>

</div>
</div>
</div>
