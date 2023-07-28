<?php require('data.php'); ?>
<div>
  <h2>boucle foreach</h2>
  <?php foreach ($users as $usr) { ?>
    <hr />
    <h3>username : <?php echo $usr["name"] ?></h3>
    <p>email : <?php echo $usr["email"] ?></p>
    <p>age : <?php echo $usr["age"] ?></p>
    <hr />
  <?php }; ?>
</div>