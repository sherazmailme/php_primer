<?php 
        $title = 'Switch';
        include 'includes/header.php';
    ?>;
    <h1><?php echo $title ?></h1>
    

    <?php
        $grade = 'C';
        switch($grade){
            case 'A': 
                echo '<h2 style="color:green">You are a superstar</h2>';
                break;
            case 'B': 
                echo '<h2 style="color:blue">You are a Champion</h2>';
                break;
            case 'C': 
                echo '<h2 style="color:brown">You are just OK</h2>';
                break;
            default: 
                echo '<h2 style="color:red">You are ZERO!!</h2>';
                break;
        }
    ?>
    
</body>
</html>