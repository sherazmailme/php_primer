<?php 
        $title = 'IF Block';
        include 'includes/header.php';
    ?>;
    
    <h1><?php echo $title ?></h1>
    
    <?php
        echo '<h2>If Statement Page</h2>';
        $grade = 77;

        //== compares the value only
        //=== compares the value and datatype together :)
        if ($grade>=50) {
            echo '<h3 style="color:green">You have passed!</h3>';
        }else {
            echo '<h3 style="color:red">You have FAILED!</h3>';
        }
    ?>
    

</body>
</html>