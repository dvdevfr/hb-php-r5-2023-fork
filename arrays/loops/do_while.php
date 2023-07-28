<?php require("data.php");
$i = 0; ?>
<div>
  <h2>boucle dowhile</h2>
  <?php do { ?>
    <hr />
    <h3>username : <?php echo $users[$i]["name"] ?></h3>
    <p>email : <?php echo $users[$i]["email"] ?></p>
    <p>age : <?php echo $users[$i]["age"] ?></p>
    <hr />
  <?php $i++;
  } while ($i < count($users)); ?>
</div>