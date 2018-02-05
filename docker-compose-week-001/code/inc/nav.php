
<?php 

$link = "http://" . $_SERVER['HTTP_HOST'] . "IDM/docker-compose-week-001/code/";

$test = pathinfo($_SERVER['HTTP_HOST']);

echo $test['dirname'];

//echo $link;



?>
<ul>
<li><a href="<?php echo $link; ?>index.php">Home</a></li>
<li><a href="<?php echo $link; ?>about/index.php">About</a></li>
<li><a href="<?php echo $link; ?>contact/index.php">Contact</a></li>
</ul>