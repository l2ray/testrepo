<?php

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
                //margin-bottom:56%;
                padding:12px;
            }
            p{
                text-align:center;
                font-family: monospace;
                font-size:20px;
                font-weight: bold;
            }
            #adminInstruction{
               text-align: center;
                margin-left:60px;
               // width:75%;
               // border:blue dotted 2px;
                //sbackground-color:green;
               
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            
            ?>
            <div id="adminInstruction">
                <h1>Welcome to Admin Section of this System.</h1>
            User must be an Admin member or have administration prevelage.<br/>
            Please fill in this form to enter the admin's site;
            </div>
            
            <table>
                <?php
                    if(isset($_GET['message']))
                    {
                        echo $_GET['message'];
                        echo $_GET['key'];
                    }
                ?>
                <form method="post" action="AdminProcessing.php">
                    <tr>
                        <td>UserName:</td>
                        <td><input type="text" name="adminUName" maxlength="25" size="25"/> </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="adminPasswd" maxlength="25" size="25"/> </td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit" maxlength="25" size="25"/> </td>
                        
                    </tr>
                </form>
                
            </table>
            
        </div>
            
    </body>
</html>
