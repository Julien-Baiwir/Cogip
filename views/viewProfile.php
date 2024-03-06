<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
echo "Bonjour";
?>
<?php foreach ($profile as $profile): ?>
    <h1><?php echo $profile->getName(); ?></h1>
<?php endforeach; ?>


