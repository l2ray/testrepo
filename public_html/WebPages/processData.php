<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$connection = mysql_connect("localhost", "root", "FATOUNYANG");
$selDb = mysql_select_db("StPeters");
$stdName = $_POST["stdName"];
$stdNum = $_POST["stdNum"];
$stdGrade = $_POST["stdGrade"];

$studentQuery="SELECT `NAME`,`Grade` FROM `Students` WHERE stdNum='$stdNum'";
                    $studentName;
                    $studentGrade;
                    $sQuery=mysql_query($studentQuery);
                   
                    $sRowNum=mysql_num_rows($sQuery);
                    if($sRowNum !=0){
                        $studentName=  mysql_result($sQuery, 0,'Name');
                        $studentGrade=mysql_result($sQuery,0,'Grade');
                    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="StyleSheet" type="text/css" href="../cssFiles/commonFeatures.css" />
        <style>
            table{
                font-size:20px;
                text-align:center;
                margin-left:50px;
                //border:solid red 3px;
            }
            td,th{
                padding:15px;
                font-family:monospace;
            }
            #rHeader{
/*                border:3px salmon dashed;*/
                margin-bottom:23px;
            }
            .grd{
                background-color:white;
                float:right;
                margin-right:100px;
                //margin-bottom: -1300px;
                //border:solid green 3px;
            }
            .grd1{
                color:red;
                
            }
            .grd2,.year2{
                
                border-bottom: dashed 2px black;
                font-size:15px;
                font-weight: bold;
            }
            .year1{
                color:blue;
            }
            
            .address{
                background-color:white;
                margin-left:400px;
                line-height:25px;
                font-size:20px;
                //border:solid 3px red;
            }
            
            img{
                margin-left:430px;
                margin-top:10px;
                border-bottom-left-radius:100px;
                border-bottom-right-radius:100px;
                width:95px;
            }
            .StpHeader{
                //background-color:red;
                text-align:center;
                font-size:25px;
            }
            .stdName{
                background-color:white;
                margin-left:75px;
                font-size:35px;
            }
            #resultSection{
               // background-color:red;
                width:79.5%;
                margin-left:010%;
                border:black 2px solid;
                font-size:25px;
                padding: 10px;
                
            }
            .honours{
               border-top-left-radius: 25px;
               border-bottom-right-radius: 25px;
                border:3px dotted red;
                padding:5px;
                
                
            }
            .qualityPoints{
                background-color:white;
                float:right;
                
            }
            table{
                margin-left:10%;
            }
        </style>
    </head>
    <body>
        
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
            <body>
                <?php
                // echo "<h1>{$stdName} {$stdGrade} {$stdNum}</h1>";
                ////////////////////////////////////Variables for processing subject data////////////////////////////////////////////
                ///////////english//////////////// 1
                $qualityPoints=0;
                $engTest1;$engTest2;$engExam; $engFinalScore;$engGrading;$engRemarks;
                    
                $englishQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `English` WHERE stdNum='$stdNum'";
                $query = mysql_query($englishQuery);

                $rowNum = mysql_num_rows($query);
                if ($rowNum != 0) {

                    $engTest1 = mysql_result($query, 0, 'Test1');
                    $engTest2 = mysql_result($query, 0, 'Test2');
                    $engExam = mysql_result($query, 0, 'Exam');
                    $engFinalScore = mysql_result($query, 0, 'Total_Score');


                    if ($engFinalScore >= 80 && $engFinalScore <= 100) {
                        $engGrading = "A";
                        $engRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($engFinalScore >= 70 && $engFinalScore <= 79) {
                        $engGrading = "B";
                        $engRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($engFinalScore >= 60 && $engFinalScore <= 69) {
                        $engGrading = "C";
                        $engRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($engFinalScore >= 50 && $engFinalScore <= 59) {
                        $engGrading = "D";
                        $engRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($engFinalScore >= 40 && $engFinalScore <= 49) {
                        $engGrading = "E";
                        $engRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $engGrading = "F";
                        $engRemarks = "Fail";
                        $qualityPoints+=0;
                    }
                }


                //echo "Test1: {$engTest1} Test2: {$engTest2} Exam: {$engExam} Total_Score: {$engFinalScore}<br/>";
/////////////////////////////////////Biology////////////////////////////////////////////////////////////////////////////////////////// 2
                $bioTest1;
                $bioTest2;
                $bioExam;
                $bioFinalScore;
                $bioGrading;
                $bioRemarks;
                $biologyQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `Biology` WHERE stdNum='$stdNum'";
                $Bquery = mysql_query($biologyQuery);

                $BrowNum = mysql_num_rows($Bquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($BrowNum != 0) {

                    $bioTest1 = mysql_result($Bquery, 0, 'Test1');
                    $bioTest2 = mysql_result($Bquery, 0, 'Test2');
                    $bioExam = mysql_result($Bquery, 0, 'Exam');
                    $bioFinalScore = mysql_result($Bquery, 0, 'Total_Score');

                    if ($bioFinalScore >= 80 && $bioFinalScore <= 100) {
                        $bioGrading = "A";
                        $bioRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($bioFinalScore >= 70 && $bioFinalScore <= 79) {
                        $bioGrading = "B";
                        $bioRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($bioFinalScore >= 60 && $bioFinalScore <= 69) {
                        $bioGrading = "C";
                        $bioRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($bioFinalScore >= 50 && $bioFinalScore <= 59) {
                        $bioGrading = "D";
                        $bioRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($bioFinalScore >= 40 && $bioFinalScore <= 49) {
                        $bioGrading = "E";
                        $bioRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $bioGrading = "F";
                        $bioRemarks = "Fail";
                    }
                }

                ///////////Mathematics//////////////// 3
                $mthTest1;
                $mthTest2;
                $mthExam;
                $mthFinalScore;
                $mthGrading;
                $mthRemarks;

                $mathsQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `Mathematics` WHERE stdNum='$stdNum'";
                $Mquery = mysql_query($mathsQuery);

                $MrowNum = mysql_num_rows($Mquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($MrowNum != 0) {
                    $mthTest1 = mysql_result($Mquery, 0, 'Test1');
                    $mthTest2 = mysql_result($Mquery, 0, 'Test2');
                    $mthExam = mysql_result($Mquery, 0, 'Exam');
                    $mthFinalScore = mysql_result($Mquery, 0, 'Total_Score');

                    if ($mthFinalScore >= 80 && $mthFinalScore <= 100) {
                        $mthGrading = "A";
                        $mthRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($mthFinalScore >= 70 && $mthFinalScore <= 79) {
                        $mthGrading = "B";
                        $mthRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($mthFinalScore >= 60 && $mthFinalScore <= 69) {
                        $mthGrading = "C";
                        $mthRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($mthFinalScore >= 50 && $mthFinalScore <= 59) {
                        $mthGrading = "D";
                        $mthRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($mthFinalScore >= 40 && $mthFinalScore <= 49) {
                        $mthGrading = "E";
                        $mthRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $mthGrading = "F";
                        $mthRemarks = "Fail";
                    }
                }


                //echo "Test1: {$mthTest1} Test2: {$mthTest2} Exam: {$mthExam} Total_Score: {$mthFinalScore}<br/>";
                ///////////geography//////////////// 4
                $geoTest1;
                $geoTest2;
                $geoExam;
                $geoFinalScore;
                $geoGrading;
                $geoRemarks;

                $geoQuery = "SELECT `Test1`,`stdNum`,`Test2`,`Exam`,`Total_Score` FROM `Geography` WHERE stdNum='$stdNum'";
                $Gquery = mysql_query($geoQuery);

                $GrowNum = mysql_num_rows($Gquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($GrowNum != 0) {
                    $geoTest1 = mysql_result($Gquery, 0, 'Test1');
                    $geoTest2 = mysql_result($Gquery, 0, 'Test2');
                    $geoExam = mysql_result($Gquery, 0, 'Exam');
                    $geoFinalScore = mysql_result($Mquery, 0, 'Total_Score');
                    if ($geoFinalScore >= 80 && $geoFinalScore <= 100) {
                        $geoGrading = "A";
                        $geoRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($geoFinalScore >= 70 && $geoFinalScore <= 79) {
                        $geoGrading = "B";
                        $geoRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($geoFinalScore >= 60 && $geoFinalScore <= 69) {
                        $geoGrading = "C";
                        $geoRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($geoFinalScore >= 50 && $geoFinalScore <= 59) {
                        $geoGrading = "D";
                        $geoRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($geoFinalScore >= 40 && $geoFinalScore <= 49) {
                        $geoGrading = "E";
                        $geoRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $geoGrading = "F";
                        $geoRemarks = "Fail";
                    }
                }

                //echo "Test1: {$geoTest1} Test2: {$geoTest2} Exam: {$geoExam} Total_Score: {$geoFinalScore}<br/>";
                ///////////physics//////////////// 5
                $phyTest1;
                $phyTest2;
                $phyExam;
                $phyFinalScore;
                $phyGrading;
                $phyRemarks;

                $phyQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `Physics` WHERE stdNum='$stdNum'";
                $Pquery = mysql_query($phyQuery);

                $ProwNum = mysql_num_rows($Pquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($ProwNum != 0) {
                    $phyTest1 = mysql_result($Pquery, 0, 'Test1');
                    $phyTest2 = mysql_result($Pquery, 0, 'Test2');
                    $phyExam = mysql_result($Pquery, 0, 'Exam');
                    $phyFinalScore = mysql_result($Pquery, 0, 'Total_Score');

                    if ($phyFinalScore >= 80 && $phyFinalScore <= 100) {
                        $phyGrading = "A";
                        $phyRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($phyFinalScore >= 70 && $phyFinalScore <= 79) {
                        $phyGrading = "B";
                        $phyRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($phyFinalScore >= 60 && $phyFinalScore <= 69) {
                        $phyGrading = "C";
                        $phyRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($phyFinalScore >= 50 && $phyFinalScore <= 59) {
                        $phyGrading = "D";
                        $phyRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($phyFinalScore >= 40 && $phyFinalScore <= 49) {
                        $phyGrading = "E";
                        $phyRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $phyGrading = "F";
                        $phyRemarks = "Fail";
                    }
                }

                //echo "Test1: {$phyTest1} Test2: {$phyTest2} Exam: {$phyExam} Total_Score: {$phyFinalScore}<br/>";
                ///////////FutherMathematics//////////////// 6
                $fmTest1;
                $fmTest2;
                $fmExam;
                $fmFinalScore;
                $fmGrading;
                $fmRemarks;

                $fmQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `Futher_Mathematics` WHERE stdNum='$stdNum'";
                $Fquery = mysql_query($fmQuery);

                $FrowNum = mysql_num_rows($Fquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($FrowNum != 0) {
                    $fmTest1 = mysql_result($Fquery, 0, 'Test1');
                    $fmTest2 = mysql_result($Fquery, 0, 'Test2');
                    $fmExam = mysql_result($Fquery, 0, 'Exam');
                    $fmFinalScore = mysql_result($Fquery, 0, 'Total_Score');

                    if ($fmFinalScore >= 80 && $fmFinalScore <= 100) {
                        $fmGrading = "A";
                        $fmRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($fmFinalScore >= 70 && $fmFinalScore <= 79) {
                        $fmGrading = "B";
                        $fmRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($fmFinalScore >= 60 && $fmFinalScore <= 69) {
                        $fmGrading = "C";
                        $fmRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($fmFinalScore >= 50 && $fmFinalScore <= 59) {
                        $fmGrading = "D";
                        $fmRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($fmFinalScore >= 40 && $fmFinalScore <= 49) {
                        $fmGrading = "E";
                        $fmRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $fmGrading = "F";
                        $fmRemarks = "Fail";
                    }
                }

                // echo "Test1: {$fmTest1} Test2: {$fmTest2} Exam: {$fmExam} Total_Score: {$fmFinalScore}<br/>";
                ///////////generalSciece//////////////// 7
                $gsTest1;
                $gsTest2;
                $gsExam;
                $gsFinalScore;
                $gsGrading;
                $gsRemarks;

                $GsQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `General_Science` WHERE stdNum='$stdNum'";
                $Gsquery = mysql_query($GsQuery);

                $GsrowNum = mysql_num_rows($Gsquery);
//                    if()
//                 echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                if ($GsrowNum != 0) {
                    $gsTest1 = mysql_result($Gsquery, 0, 'Test1');
                    $gsTest2 = mysql_result($Gsquery, 0, 'Test2');
                    $gsExam = mysql_result($Gsquery, 0, 'Exam');
                    $gsFinalScore = mysql_result($Gsquery, 0, 'Total_Score');

                    if ($gsFinalScore >= 80 && $gsFinalScore <= 100) {
                        $gsGrading = "A";
                        $gsRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($gsFinalScore >= 70 && $gsFinalScore <= 79) {
                        $gsGrading = "B";
                        $gsRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($gsFinalScore >= 60 && $gsFinalScore <= 69) {
                        $gsGrading = "C";
                        $gsRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($gsFinalScore >= 50 && $gsFinalScore <= 59) {
                        $gsGrading = "D";
                        $gsRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($gsFinalScore >= 40 && $gsFinalScore <= 49) {
                        $gsGrading = "E";
                        $gsRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $gsGrading = "F";
                        $gsRemarks = "Fail";
                    }
                }

                //echo "Test1: {$gsTest1} Test2: {$gsTest2} Exam: {$gsExam} Total_Score: {$gsFinalScore}<br/>";
                ///////////cHEMISTRY//////////////// 8
                $chmTest1;
                $chmTest2;
                $chmExam;
                $chmFinalScore;
                $chmGrading;
                $chmRemarks;


                $chmQuery = "SELECT `stdNum`,`Test1`,`Test2`,`Exam`,`Total_Score` FROM `Chemistry` WHERE stdNum='$stdNum'";
                $chmquery = mysql_query($chmQuery);
                $chmrowNum = mysql_num_rows($chmquery);
                if ($chmrowNum != 0) {
                    //echo "<h1>Great</h1>";
                    $chmTest1 = mysql_result($chmquery, 0, 'Test1');
                    $chmTest2 = mysql_result($chmquery, 0, 'Test2');
                    $chmExam = mysql_result($chmquery, 0, 'Exam');
                    $chmFinalScore = mysql_result($chmquery, 0, 'Total_Score');

                    if ($chmFinalScore >= 80 && $chmFinalScore <= 100) {
                        $chmGrading = "A";
                        $chmRemarks = "Excellent";
                        $qualityPoints+=5;
                    } else if ($chmFinalScore >= 70 && $chmFinalScore <= 79) {
                        $chmGrading = "B";
                        $chmRemarks = "Very Good";
                        $qualityPoints+=4;
                    } else if ($chmFinalScore >= 60 && $chmFinalScore <= 69) {
                        $chmGrading = "C";
                        $chmRemarks = "Good";
                        $qualityPoints+=3;
                    } else if ($chmFinalScore >= 50 && $chmFinalScore <= 59) {
                        $chmGrading = "D";
                        $chmRemarks = "Average";
                        $qualityPoints+=2;
                    } else if ($chmFinalScore >= 40 && $chmFinalScore <= 49) {
                        $chmGrading = "E";
                        $chmRemarks = "Fair";
                        $qualityPoints+=1;
                    } else {
                        $chmGrading = "F";
                        $chmRemarks = "Fail";
                    }
                }


                ?>

                <?php
                if ($chmrowNum == 0)//||$GsrowNum==0||$FrowNum==0||$ProwNum==0||$GrowNum==0||$MrowNum==0||$BrowNum==0 ||$rowNum==0
                    echo "<h1>Sorry Please check and make sure the correct student details are entered</h1>";
                else {
                    
                    echo"<div id=\"rHeader\">";
            echo"<p>";
            echo "<h1 class=\"StpHeader\">ST PETER'S TECHNICAL JUNIOR &AMP; SENIOR SECONDARY SHOOL -LAMIN</h1>";
                echo "<span class=\"address\">Banjul, The Gambia</span><br/>";
               echo " <span class=\"address\">Tel:00220 4462816</span><br/>";
                echo"<span class=\"address\">Email:stp@ganet.gm</span><br/>";
                echo"<span class=\"imageAddress\"><img src=\"../imageFiles/stp.png\"/></span><br/>";
                echo "<span class=\"stdName\"> <span class=\"stdName1\">Student's Name:</span> <span class=\"stdName2\">$studentName</span></span>";
                echo "<span class=\"grd\"><span class=\"grd1\">Grade</span>: <span class=\"grd2\">$studentGrade</span><br/>";
                echo "<span class=\"year1\">Year:&nbsp &nbsp</span> <span class=\"year2\">2015</span></span>";
           echo " </p>";
       echo "</div>";
                    
                    
                    
                    echo "<table border=\"6\" cellspacing\"0\">";//"
                    echo "<tr>";
                    echo "<th>Subject</th>";
                    echo "<th>Test 1</th>";
                    echo "<th>Test 2</th>";
                    echo "<th>Exam</th>";
                    echo "<th>Total Score</th>";
                    echo "<th>Grade</th>";
                    echo "<th>remarks</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>English</th>";
                    echo "<td>$engTest1</td>";
                    echo "<td>$engTest2</td>";
                    echo "<td>$engExam</td>";
                    echo "<td>$engFinalScore</td>";
                    echo "<td>$engGrading</td>";
                    echo "<td>$engRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Mathematics</th>";
                    echo "<td>$mthTest1</td>";
                    echo "<td>$mthTest2</td>";
                    echo "<td>$mthExam</td>";
                    echo "<td>$mthFinalScore</td>";
                    echo "<td>$mthGrading</td>";
                    echo "<td>$mthRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>General Science</th>";
                    echo "<td>$gsTest1</td>";
                    echo "<td>$gsTest2</td>";
                    echo "<td>$gsExam</td>";
                    echo "<td>$gsFinalScore</td>";
                    echo "<td>$gsGrading</td>";
                    echo "<td>$gsRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Further Mathematics</th>";
                    echo "<td>$fmTest1</td>";
                    echo "<td>$fmTest2</td>";
                    echo "<td>$fmExam</td>";
                    echo "<td>$fmFinalScore</td>";
                    echo "<td>$fmGrading</td>";
                    echo "<td>$fmRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Biology</th>";
                    echo "<td>$bioTest1</td>";
                    echo "<td>$bioTest2</td>";
                    echo "<td>$bioExam</td>";
                    echo "<td>$bioFinalScore</td>";
                    echo "<td>$bioGrading</td>";
                    echo "<td>$bioRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Chemistry</th>";
                    echo "<td>$chmTest1</td>";
                    echo "<td>$chmTest2</td>";
                    echo "<td>$chmExam</td>";
                    echo "<td>$chmFinalScore</td>";
                    echo "<td>$chmGrading</td>";
                    echo "<td>$chmRemarks</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<th>Georaphy</th>";
                    echo "<td>$geoTest1</td>";
                    echo "<td>$geoTest2</td>";
                    echo "<td>$geoExam</td>";
                    echo "<td>$geoFinalScore</td>";
                    echo "<td>$geoGrading</td>";
                    echo "<td>$geoRemarks</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Physics</th>";
                    echo "<td>$phyTest1</td>";
                    echo "<td>$phyTest2</td>";
                    echo "<td>$phyExam</td>";
                    echo "<td>$phyFinalScore</td>";
                    echo "<td>$phyGrading</td>";
                    echo "<td>$phyRemarks</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "<div id=\"resultSection\">Result:&nbsp;&nbsp;&nbsp;&nbsp;";
                        if($qualityPoints>=32 && $qualityPoints<=40)
                            echo "<span class=\"honours\">Honours</span>,&nbsp;&nbsp;&nbsp;&nbsp;Merit,&nbsp;&nbsp;&nbsp;&nbsp;Pass,&nbsp;&nbsp;&nbsp;&nbsp;Fail";
                        else if($qualityPoints>=24 && $qualityPoints<=31)
                            echo "Honours,&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"honours\">Merit</span>,&nbsp;&nbsp;&nbsp;&nbsp;Pass,&nbsp;&nbsp;&nbsp;&nbsp;Fail";
                            else if($qualityPoints>=15 && $qualityPoints<=23)
                            echo "Honours,&nbsp;&nbsp;&nbsp;&nbsp;Merit,&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"honours\">Pass</span>,&nbsp;&nbsp;&nbsp;&nbsp;Fail";
                        else 
                            echo "Honours,&nbsp;&nbsp;&nbsp;&nbsp;Merit,&nbsp;&nbsp;&nbsp;&nbsp;Pass,&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"honours\">Fail</span>";
                    echo "<span class=\"qualityPoints\">Quality Points:.....$qualityPoints</span></div>";
                }
                ?>
                &nbsp;
        </div>


    </body>
</html>
