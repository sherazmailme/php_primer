<?php 
    $title = 'Arrays';
    include 'includes/header.php';
?>;
<h1><?php echo $title ?></h1>

<?php
    //homogenious array - same datatype, though you can store mixed data types
    $numbers = array(1,2,3,4,55,456,7,8,9,10);
    
    for ($i=0; $i<count($numbers) ; $i++) { 
    echo 'Index: '.$numbers[$i].'<br/>';
    }
?>

<?php require 'includes/footer.php' ?>;