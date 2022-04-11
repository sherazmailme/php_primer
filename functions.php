<?php 
        $title = 'Functions';
        include 'includes/header.php';
    ?>;
   <h1><?php echo $title ?></h1>
    <?php
       //Defining a function
       function writeMessage(){
           return "Hey There!<br/>";
       }

       function addNumbers($n1, $n2){
        $sum = $n1+$n2;    
        return "result: $sum </br>";
       }

       // pass by value like $num, only value is passed to the called function
       // to pass variable by reference add & with vairalbe like &$num1
       // variables passed by reference can be modified by the called function

       function functionProduct($n1, $n2){
           return "Prodcut:" . $n1 * $n2 . "<br/>";
       }

       //Calling a Function
       echo writeMessage();
       echo addNumbers(2,5);
       echo functionProduct(34,89);
    ?>
    
</body>
</html>