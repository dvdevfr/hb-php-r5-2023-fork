<?php require("data.php"); ?>
<div>
  <h2>boucle while</h2>
  <?php $i = 0;
  while ($i < count($users)) { ?>
    <hr />
    <h3>username : <?php echo $users[$i]["name"] ?></h3>
    <p>email : <?php echo $users[$i]["email"] ?></p>
    <p>age : <?php echo $users[$i]["age"] ?></p>
    <hr />
  <?php $i++;
  }; ?>
</div>