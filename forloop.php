    <?php 
        $title = 'ForLoop';
        include 'includes/header.php';
    ?>;
    <h1><?php echo $title ?></h1>

    <?php
        $grade = 0;
        for ($i=0; $i<10 ; $i++) { 
          echo 'Count '.$i.'<br>';
        }

        while ($grade <= 10) {
            echo 'While Count '.$grade.'<br>';
            $grade++;
        }

        $grade = 5;
        do {
            echo 'Do While Count '.$grade.'<br>';
            $grade++;
        } while ($grade <= 10);

    ?>
    
    <?php require 'includes/footer.php' ?>;