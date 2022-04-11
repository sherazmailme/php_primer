    <?php 
        $title = 'Index';
        include 'includes/header.php';
    ?>;
    
    <h1><?php echo $title ?></h1>
    
    <!-- Ctrl+k+c to put comments tags -->
    
    <?php
        //generating html within php
        $name = 'Sheraz Ahmed!';
        $age = 35;
        echo "Hello PHP!";
        echo '<br/>';
        echo '<h1>Name: '.$name.'</h1>';
        echo "<h1>Age: $age</h1>";
    ?>

<button type="button" class="btn btn-dark">Click Me</button>
<button type="button" class="btn btn-primary">Click Me</button>

<?php require 'includes/footer.php' ?>;
