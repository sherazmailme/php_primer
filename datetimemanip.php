<?php 
        $title = 'DateTime';
        include 'includes/header.php';
    ?>;
    <h1><?php echo $title ?></h1>

    <?php
        //getdate() returns array
       $datenow = getdate();
       echo "Today's Date:<br/>";
       echo $datenow['mday']."<br/>";
       echo $datenow['month']."<br/>";
       echo $datenow['year']."<br/>";
       echo $datenow['hours']."<br/>";
       echo $datenow['minutes']."<br/>";
       echo $datenow['seconds']."<br/>";
       
       echo "Unix formatted TimeStamp including date: " .time()."<br/>";
       
       //though the time is not coming correctly and format is bit messed up
       print "Formatting time with date function: ". date("m/d/y G.i:s<br>", time())."<br/>";
       print date("j of F Y, \a\\t g.i a", time());
       
    ?>
    
</body>
</html>