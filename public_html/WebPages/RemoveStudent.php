<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. /////////////////////////////////pipelining
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
                border-radius: 10%;
                margin-left:30%;
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
        </style>
    </head>
    <body>
        <div id="mainContent">
            
            <?php
            include '../includeFiles/header.html';
            ?>
        <p>
            Please enter in the student's Registration Number to delete.Thank you.
        </p>
        <table>
            <form method="post" action="MoveStudentToRecycle.php">
            <tr>
                <td><b> Student Registration Number:</b></td> 
                <td><input type="text" name="stdNum" size="20"/></td>
        </tr>
        <tr>
                <td><b> </b></td> 
                <td><input type="submit" value="submit" /></td>
        </tr>
            
            
        </form>
        </table>
        </div>
        
    </body>
</html>
