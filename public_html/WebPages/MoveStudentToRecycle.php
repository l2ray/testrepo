<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
        $connection=  mysql_connect("localhost","root","FATOUNYANG");
    $condb=mysql_select_db("StPeters");//NAME USERNAME PASSWORD
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $stdNum=$_POST["stdNum"];
       //echo $stdNum;
       $stdMove="SELECT * FROM Students WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdName=  mysql_result($stdMovQuery,0, 'Name');
           $stdGender=  mysql_result($stdMovQuery,0, 'Gender');
           $stdAddress=  mysql_result($stdMovQuery,0, 'Address');
           $stdReligion=  mysql_result($stdMovQuery,0, 'Religion');
           $stdGrade=mysql_result($stdMovQuery,0,'Grade');
           
           (mysql_query("INSERT INTO `RStudents` (`stdNum`,`Name`,`Gender`,`Address`,`Religion`,`Grade`)"
                   . "VALUES('$stdNum','$stdName','$stdGender','$stdAddress','$stdReligion','$stdGrade')"));    
       ///////////////////////////////////MOVE ENGLISH Record////////
       $stdMove="SELECT * FROM English WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `REnglish` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Biology Record////////
       $stdMove="SELECT * FROM Biology WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RBiology` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Chemistry Record////////
       $stdMove="SELECT * FROM Chemistry WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RChemistry` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Futher_Mathematics Record////////
       $stdMove="SELECT * FROM Futher_Mathematics WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RFurtherMathematics` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE General_Science Record////////
       $stdMove="SELECT * FROM General_Science WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RGeneral_Science` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Geography Record////////
       $stdMove="SELECT * FROM Geography WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RGeography` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Mathematics Record////////
       $stdMove="SELECT * FROM Mathematics WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RMathematics` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
       ///////////////////////////////////MOVE Physics Record////////
       $stdMove="SELECT * FROM Physics WHERE stdNum='$stdNum'";
       $stdMovQuery=  mysql_query($stdMove);
       $stdMoveRow=  mysql_num_rows($stdMovQuery);
       //SELECT `stdNum`, `Name`, `Gender`, `Address`, `Religion`, `Grade` FROM `Students` WHERE 1
                  //`stdNum`, `Name`, `Gender`, `Address`, `Religion
       
           $stdNum=  mysql_result($stdMovQuery,0, 'stdNum');
           $stdTest1=  mysql_result($stdMovQuery,0, 'Test1');
           $stdTest2=  mysql_result($stdMovQuery,0, 'Test2');
           $stdExam=  mysql_result($stdMovQuery,0, 'Exam');
           $stdTScore=  mysql_result($stdMovQuery,0, 'Total_Score');
          
           
           (mysql_query("INSERT INTO `RPhysics` (`stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score`)"
                   . "VALUES('$stdNum','$stdTest1','$stdTest2','$stdExam','$stdTScore')"));
               
               mysql_query("DELETE FROM `Students` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `English` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Mathematics` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Biology` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Geography` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Chemistry` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Futher_Mathematics` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `General_Science` WHERE stdNum='$stdNum'");
               mysql_query("DELETE FROM `Physics` WHERE stdNum='$stdNum'");
       
           
       
        ?>
    </body>
</html>
