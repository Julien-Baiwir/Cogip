<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php foreach ($profile as $profile): ?>
    <h1><?php echo $profile->getName(); ?></h1>
    <h3>Name: <?php echo $profile->getName(); ?></h3>
    <h3>Phone: <?php echo $profile->getPhone(); ?></h3>
    <h3>Mail: <?php echo $profile->getEmail(); ?></h3>
    <h3>Company: <?php echo $profile->getCompanyName(); ?></h3>
<?php endforeach; ?>



