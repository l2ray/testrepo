<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="StyleSheet" type="text/css" href="../cssFiles/commonFeatures.css" />
        <style>
            #moveIn,h1{
               // background-color:red;
                padding-left:5%;
                margin-bottom:2%;
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
        <?php
        $connection=  mysql_connect("localhost","root","FATOUNYANG");
    $condb=mysql_select_db("StPeters");//NAME USERNAME PASSWORD
        $stdNum=$_POST["stdNum"];
        $stdName=$_POST["stdName"];
        $stdGrade=$_POST["stdGrade"];
        $stdSex=$_POST["stdSex"];
        $stdAddress=$_POST["stdAddress"];
        $stdreligion=$_POST["stdReligion"];
        $pName=$_POST["pName"];
        $pSex=$_POST["pSex"];
        $pAddress=$_POST["pAddress"];
        $pPhoneNum=$_POST["pPhoneNumber"];
        $Squery=  mysql_query("INSERT INTO `Students` (`stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade`) "
                    . "VALUES('$stdNum','$stdName','$stdSex','$stdAddress','$stdreligion','$stdGrade')");
        
        if($Squery){
            $Pquery=  mysql_query("INSERT INTO `Parents`(`Name`, `Gender`, `Address`, `Telephone`, `stdNum`) "
                        . "VALUES ('$pName','$pSex','$pAddress',$pPhoneNum,'$stdNum')");
            echo "<h1 >Student successfully added</h1>"
            . "<div id=\"moveIn\">Please click on <a href=\"AddStudent.php\">me</a> to add more student(s). Thank you</div>";
        }
        else{
            echo "<div id=\"moveIn\">sorry</div>";
        }
        ?>
    </body>
</html>
