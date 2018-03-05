<?php

    ob_start();
?>

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
            table{
                border-style:groove;
                border-color: red;
                border-width: 3px;
                border-radius: 15%;
                margin-left:35%;
                font-size:30px;
                margin-top:15px;
                //margin-bottom:-3%;
                padding:12px;
            }
            p{
                text-align:center;
                font-family: monospace;
                font-size:20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
        <?php
        $normalPass="njai";
        $normalUser="admin@stp";
        $UName=$_POST['adminUName'];
        $password=$_POST['adminPasswd'];
        //echo "$UName + $password";
        
        if(($UName==$normalUser)&&($password==$normalPass))
        {
            echo "<h1>Congratulations for successfully logging into the system. </h1>"
            . "<p>Please enter in you credentials to enter students record if you are a Teacher"
                    . "<br/> or Enter your details to have 100% access to the system if you are the Principal or the VicePrincipal</p>";
            echo "<table>"
                    . "<form method=\"post\" action=\"TeacherProcess.php\">"
                    . "<tr>"
                        . "<td>Name</td><td>"
                        . "<input type=\"text\" name=\"nme\"</td>"
                    . "</tr>"
                    . "<tr>"
                        . "<td>UserName</td><td>"
                        . "<input type=\"text\" name=\"Unme\"</td>"    
                    . "</tr>"
                    . "<tr>"
                        . "<td>password</td><td>"
                        . "<input type=\"password\" name=\"passwd\"</td>"
                    . "</tr>"
                    . "<tr>"
                        . "<td></td><td>"
                        . "<input type=\"submit\" value=\"submit\"</td>"
                    . "</tr>"
                    . "</form>"
                    
                    . "</table>";
        }
        else{
//          echo   "<h1>Unauthorised Access</h1>";
//            echo "Please click on the link below to try agian and make sure the userName and password combination are correct<br/>";
//            echo "<a href=\"ADMIN.php\">CLICK ON </a> to get back to the login form and try again. Thank you";
//           *
            $error_msg = 'Invalid username or password';
            
            //die($_GET['message']);
            
            header("Location: ADMIN.php?message=$error_msg&key=var");
            exit();
        }
            
        
        
        ?>
        </div>
    </body>
</html>

<?php

ob_end_flush();
?>
