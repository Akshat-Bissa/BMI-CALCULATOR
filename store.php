<?php


//print_r($_POST['weight']);
$val1=$_POST['weight'];
$val2=$_POST['height'];
$val3=$val2*$val2;
$mainval= $val1/$val3;
$bmi=substr($mainval,0,4);

   


?>
<h1 align="center">BODY-MASS-INDEX-CALCULATOR</h1>
<h2 align="center"><?="Your Body Mass Index is: " . $bmi;?></h2>
<?php
if($bmi<18){

?>
<h2 align="center">Oops! You are underweight</h2>
<?php
}
?>
<?php
if($bmi>18){

    if($bmi<25){
            ?>
          
            <h2 align="center">Nice! You are fit and fine..</h2>
            <?php
    }
}
?>
<?php
if($bmi>25){
    if($bmi<30){

        ?>
        <h2 align="center">Oops! You are Overweight</h2>
    <?php
    }
}
?>
<?php
if($bmi>30){

    ?>
    <h2 align="center">Please alert! You are suffering with obesity</h2>
    <?php
}
?>