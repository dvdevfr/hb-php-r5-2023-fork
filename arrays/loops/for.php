<?php require('data.php'); ?>
<div>
  <h2>boucle for</h2>
  <?php for ($i = 0; $i < count($users); $i++) { ?>
    <hr />
    <h3>username : <?php echo $users[$i]["name"] ?></h3>
    <p>email : <?php echo $users[$i]["email"] ?></p>
    <p>age : <?php echo $users[$i]["age"] ?></p>
    <hr />
  <?php }; ?>
</div>