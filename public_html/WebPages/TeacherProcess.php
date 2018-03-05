<!DOCTYPE html>
<?php
    $connection=  mysql_connect("localhost","root","FATOUNYANG");
    $condb=mysql_select_db("StPeters");//NAME USERNAME PASSWORD
    $Name=$_POST["nme"];  
    $Uname=$_POST["Unme"];
    $pass=$_POST["passwd"];
    $query="SELECT `username`,`password`,`name` FROM `teachers` WHERE name='$Name' AND username='$Uname' AND password='$pass'";
    $forwardQuery=mysql_query($query);
    $rownumber=  mysql_num_rows($forwardQuery);
    
    
    $principalUname="Principalstp@1234";
    $principalPassword="Principal1";
    $vicePrincipalUname="vicePrincipalstp@1234";
    $vicePrincipalPassword="vicePrincipal1";
    
    
    
       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="StyleSheet" type="text/css" href="../cssFiles/commonFeatures.css" />
        <style>
            li:hover{
              color:red;
            }
            .error{
                color:red;
                font-size:30px;
                
            }
            p{
                margin-left: 35px;
                padding-bottom: 34px;
            }
            table{
                margin-left:30%;
                margin-bottom: 5%;
                border:3px green;
                border-style:ridge;
                border-radius: 25px;
                padding:2%;
                
            }
            table{
                border-style:groove;
                border-color: red;
                border-width: 3px;
                border-radius: 15%;
                margin-left:35%;
                font-size:30px;
                //margin-top:15px;
                //margin-bottom:56%;
                padding:12px;
            }
            p{
                text-align:center;
                font-family: monospace;
                font-size:20px;
                font-weight: bold;
            }
            ul{
                list-style-type:none;
                margin-left:15%;
                padding-bottom: 25px;  
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
            
        <?php
        if($rownumber !=0){//STUDENT'S NUMBER, SUBJECT TEST1 TEST2 EXAM 
            echo "<p>
                Welcome to the student record entry section.<br/>
                Here teachers have the privilege to add (enter) Student's grade for the term.<br/>
                Please make sure you You enter in a valid student number else you'll not be able <br/>to enter that particular student's detail Thank you.<br/>
                And remember Order Justice and Peace is what we believe in. So make sure you do justice to the student.<br/>
            </p>";
         echo "<table>"
                . "<form method=\"post\" action=\"RecordProcessing.php\">"
                    . "<tr>"
                        . "<td>Student's Number</td>"
                        . "<td><input type=\"text\" name=\"stdNum\"size=\"20\"/></td>"//
                    . "</tr>"
                 . "<tr>"
                        . "<td>Subject</td>"
                        . "<td><select name=\"sbj\">"
                                    . "<option value=\"\" selected=\"selected\">Please select a subject</option>"
                                    . "<option value=\"English\">English</option>"
                                    . "<option value=\"Mathematics\">Mathematics</option>"
                                    . "<option value=\"Futher_Mathematics\">Futher Mathematics</option>"
                                    . "<option value=\"General_Science\">General Science</option>"
                                    . "<option value=\"Biology\">Biology</option>"
                                    . "<option value=\"Chemistry\">Chemistry</option>"
                                    . "<option value=\"Physics\">Physics</option>"
                                    . "<option value=\"Geography\">Geography</option>"
                                . "</select>"
                        . "</td>"
                    . "</tr>"
                 . "<tr>"
                 . "<td>Test 1</td>"
                 . "<td><select name=\"tst1\">"
                     ."<option selected=\"selected\">Please select test1 score</option>";
                         for($j=0; $j<=25; $j++)
                          echo"<option value=\"$j\">$j</option>";
                       echo "</td>"
                  . "</tr>"
                                . "<tr>"
                 . "<td>Test 2</td>"
                 . "<td><select name=\"tst2\">"
                     ."<option selected=\"selected\">Please select test2 score</option>";
                         for($j=0; $j<=25; $j++)
                          echo"<option value=\"$j\">$j</option>";
                       echo "</td>"
                  . "</tr>"
                                . "<tr>"
                 . "<td>Exam</td>"
                 . "<td><select name=\"exam\">"
                     ."<option selected=\"selected\">Please select exam score</option>";
                         for($j=0; $j<=50; $j++)
                          echo"<option value=\"$j\">$j</option>";
                       echo "</td>"
                  . "</tr>"
                  . "<tr>"
                        . "<td></td>"
                        . "<td><input type=\"submit\" value=\"submit\" /></td>"
                  . "</tr>"
                 
                
                 ."</form>"
            . "</table>";
    }
    /*
     * View Student's record and comment on the student's weak points
     * Add Student to the School(System)
     * Remove Student from the school(System)
     * Add Teacher to the school(System)
     * Remove Teachers from the School(System)s
     */
    else if(($principalPassword==$pass &&$principalUname==$Uname)||($vicePrincipalPassword==$pass&&$vicePrincipalUname==$Uname)){
        echo "Welcome to the Principal /vice Principal Section."
        . "user in this section has 100% privilege mode in the system.User in this section can do execute the following:"
                . "<ul>"
                
                . "<li><a href=\"AddStudent.php\">Please click on to register(enroll) a student</a></li>"
                . "<li><a href=\"RemoveStudent.php\">Please click on to remove a student </a></li>"
                . "<li><a href=\"TeacherEntry.php\">please click on to Add a teacher in the system</a></li>"
               
                
                . "</ul>";
                
    }
    else{
        echo "<p><span class=\"error\">Sorry access denied</span>. <br/>Please click on the back button and make sure you enter in the correct details to have access.</p>";
    }
        ?>
        </div>  
    </body>
</html>
