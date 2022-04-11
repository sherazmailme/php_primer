<?php 
        $title = 'Strings';
        include 'includes/header.php';
    ?>;
    <h1><?php echo $title ?></h1>
    

    <?php
       $pharase1 = 'Students came late';
       $pharase2 = 'should go back home!';
       $name = 'sheraz ahmed';

       echo $pharase1.ucwords($name) .$pharase2;

       echo '<br/>Uppercase first letter of pharase: '.ucfirst($name);
       echo '<br/>Uppercase first letter of all Words: '.ucwords($name);
       echo '<br/>Uppercase All letters of pharase: '.strtoupper($name);
       echo '<br/>Lowercase All letters of pharase: '.strtolower($name);
       
       echo '<hr/>';
       echo '<br/>Repeat String' . strtoupper(str_repeat('-ahmed',10));
       echo '<hr/>';
       echo '<br/>Substring: ' . substr($name,3,6);
       echo '<hr/>';
       echo '<br/>Find Character and return remaining text "e": ' . strchr($name,'e');
       echo '<br/>Find Character SPACE: ' . strchr($name,' ');
       echo '<hr/>';
       echo '<br/>Replace String with another"ahmed": ' . str_replace("ahmed","khan",$name);
       
    ?>
    
</body>
</html>