<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $connection=  mysql_connect("localhost","root","FATOUNYANG");
    $condb=mysql_select_db("StPeters");
    $tst1=$_POST["tst1"];   
    $sbj=$_POST["sbj"];
    $tst2=$_POST["tst2"];
    $exam=$_POST["exam"];
    $stdNum=$_POST["stdNum"];
   $query=mysql_query("SELECT * FROM `Students` WHERE stdNum='$stdNum'");//run a query in d database
    $rows=  mysql_num_rows($query);
    
            
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="StyleSheet" type="text/css" href="../cssFiles/commonFeatures.css" />
        <style>
            #pos{
                
                padding-left:5%;
                padding-bottom:2%;
                
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
        <?php
       if($rows==1){
        $total_score=$tst1+$tst2+$exam;
        $querys=mysql_query("INSERT INTO `$sbj`(`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`) VALUES('$stdNum',$tst1,$tst2,$exam,$total_score)");
        if($querys){
            echo "<div id=\"pos\"><h1>Recorded successfully added</h1>";
            echo "<b>Student number:</b> $stdNum; <b>Test 1:</b> $tst1; <b>Test 2:</b> $tst2;  <b>Exam:</b> $exam</id>";
        }
        else{
            echo "<h1>Sorry This Stuent doesnt exist in the database. Thank You</h1>";
        }
        }
            
        else {
            echo "<div id=\"pos\">Sorry insert not successful.Please check and make sure the students registeration number you'r entering exist</div>";
        }
    
        ?>
    </body>
</html>
