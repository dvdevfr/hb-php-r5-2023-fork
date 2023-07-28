<?php
require_once 'data/users.php';
$title = "Boucles";
require_once 'layout/header.php';
?>

<h1>Boucles</h1>
<!-- FOREACH -->
<h2>Foreach</h2>
<div class="container">
  <?php foreach ($users as $user) { ?>
    <div class="card">
      <p>Nom : <?php echo $user['name']; ?></p>
      <p>Email : <?php echo $user['email']; ?></p>
      <p>Âge : <?php echo $user['age']; ?> ans</p>
    </div>
  <?php } ?>
</div>

<!-- WHILE -->
<h2>While</h2>
<div class="container">
  <?php
  $i = 0; // instruction d'initialisation
  while ($i < count($users)) { //condition de maintien 
  ?>
    <div class="card">
      <p>Nom : <?php echo $users[$i]['name']; ?></p>
      <p>Email : <?php echo $users[$i]['email']; ?></p>
      <p>Âge : <?php echo $users[$i]['age']; ?> ans</p>
    </div>
  <?php
    $i++; // instruction de pas
  } ?>
</div>

<?php require_once 'layout/footer.php';
