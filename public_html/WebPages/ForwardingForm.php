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
            .reportI{
                color:green;
                border:white solid 3px;
                text-align: center;
                font-size:25px;
            }
            .formPosition{
                border:solid red 2px;
                margin:25px;
                margin-left:25%;
                font-size:30px;
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
            </style>
    </head>
    <body>
        <div id="mainContent">
            
            <?php
            include '../includeFiles/header.html';
            ?>
            <p class="reportI">
                Welcome to our Student report processing form. <br/>
                We at St.peter's always have the feeling that every Student irrespective of your accademic performance.<br/> 
                Please enter in the students credentials to view his/her report for the term.<br/>
                Please make sure the credentials you are entering are valid else you're not gonna be shown any report card. 
            </p>
            <table class="formPosition">
            <form method="POST" action="processData.php">
                <tr>
                    <td>Students Number</td>
                    <td><input type="password" size="35" name="stdNum"/></td>
                </tr>
                <tr>
                    <td>Student's Name</td>
                    <td><input type="text" name="stdName" size="35"/></td>
                </tr>
                <tr>
                    <td>Student's Grade</td>
                    <td>
                        <select name="stdGrade">
                            <option selected="selected" value="">Please select Student's grade</option>
                            <option value="g7">7</option>
                            <option value="g8">8</option>
                            <option value="g9">9</option>
                            <option value="g10">10</option>
                            <option value="g11">11</option>
                            <option value="g12">12</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" /> </td>
                </tr>
            </form>
        </table>
        </div>
    </body>
</html>
