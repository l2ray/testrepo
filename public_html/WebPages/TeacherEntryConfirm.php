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
            p{
                text-align: center;
                font-family:monospace;
                font-weight:bold;
                font-size:20px;
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
           $tName=$_POST["tName"];
           $tGrade=$_POST["grade"];
           $tReligion=$_POST["religion"];
           $tNationality=$_POST["nationality"];
           $tgender=$_POST["gender"];
           $tUname=$_POST["uName"];
           $tpass=$_POST["passkey"];
           $tAddress=$_POST["address"];
           //echo "$tName, $tGrade, $tNationality, $tgender, $tUname, $tpass, $tReligion,$tAddress";
           if(mysql_query("INSERT INTO `teachers` (`name`,`grade`,`religion`,`nationality`,`address`,`gender`,`username`,`password`)"
                         . "VALUES('$tName',$tGrade,'$tReligion','$tNationality','$tAddress','$tgender','$tUname','$tpass')")){
               echo "<p>New teacher successfully created<br/>".
                "please click on the backButton to add a teacher</p>";
           }
           else{
               echo "<h1>Sorry</h1>";
           }
        ?>
    </body>
</html>
