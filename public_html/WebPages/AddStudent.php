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
                Welcome to the add new Student Section.
                In this Please fill in the form below to add a new Student in the system including the parent's detail.
            </p>
            <table>
                <form method="post" action="ProcessStudent.php">
                    <tr>
                        <td><b>Student's Name:</b></td>
                        <td><input type="text" name="stdName" size="20"/><br/></td>
                    </tr>
                    <tr>
                        <td><b>Student's Registration#</b></td>
                        <td><input type="text" name="stdNum"  value="stdNum"size="20"/><br/></td>
                    </tr>
                    <tr>
                        <td><b>Student's Gender:</b></td>
                        <td><select name="stdSex" >
                                                                                    <option selected="selected" value="">Please select Students gender</option>
                                                                                    <option value="M">Male</option>
                                                                                    <option value="F">Female</option>
                                                                            </select></td>
                    </tr>
                    <tr>
                        <td><b>Student's Address:</b></td>
                        <td><select name="stdAddress" >
                                                                                    <option selected="selected" value="">Please select Student's address</option>
                                                                                    <option value="Lamin">Lamin</option>
                                                                                    <option value="Abuko">Abuko</option>
                                                                                    <option value="Yumdum">Yundum</option>
                                                                                    <option value="Banjulnding">Banjulnding</option>
                                                                                    <option value="Busumbala">Busumbala</option>
                                                                                    <option value="Farato">Farato</option>
                                                                                    <option value="Brikama">Brikama</option>
                                                                                    <option value="Serrekunda">Serrekunda</option>
                                                                                    <option value="Tallinding">Tallinding</option>
                                                                                    <option value="Kanifing">Kanifing</option>
                                                                                    <option value="Tabokoto">Tabokoto</option>
                                                                                    <option value="Wellengara">Wellengara</option>
                </select></td>
                    </tr>
                    <tr>
                        <td> <b>Student's Religion:</b></td>
                        <td> <select name="stdReligion" >
                                                                                    <option selected="selected" value="">Please select Students Religion</option>
                                                                                    <option value="Islam">Islam</option>
                                                                                    <option value="Christian">Christianity</option>
                                                                            </select></td>
                    </tr>
                    <tr>
                        <td><b>Student's Grade:</b></td>
                        <td> <select name="stdGrade" >
                                                                                    <option selected="selected" value="">Please select Students Grade</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                                            </select></td>
                    </tr>
                    <tr>
                        <td><b>Parent's Name:</b></td>
                        <td> <input type="text" name="pName" size="20"/></td>
                    </tr>
                    <tr>
                        <td><b>Parent's Gender:</b></td>
                        <td><select name="pSex" >
                                                                                    <option selected="selected" value="">Please select Parents gender</option>
                                                                                    <option value="M">Male</option>
                                                                                    <option value="F">Female</option>
                                                                            </select></td>
                    </tr>
                    <tr>
                        <td><b>Parent's Address:</b></td>
                        <td><select name="pAddress" >
                                                                                    <option selected="selected" value="">Please select Parent's address</option>
                                                                                    <option value="Lamin">Lamin</option>
                                                                                    <option value="Abuko">Abuko</option>
                                                                                    <option value="Yumdum">Yundum</option>
                                                                                    <option value="Banjulnding">Banjulnding</option>
                                                                                    <option value="Busumbala">Busumbala</option>
                                                                                    <option value="Farato">Farato</option>
                                                                                    <option value="Brikama">Brikama</option>
                                                                                    <option value="Serrekunda">Serrekunda</option>
                                                                                    <option value="Tallinding">Tallinding</option>
                                                                                    <option value="Kanifing">Kanifing</option>
                                                                                    <option value="Tabokoto">Tabokoto</option>
                                                                                    <option value="Wellengara">Wellengara</option>
                </select></td>
                    </tr>
                    <tr>
                        <td><b>Parent's Phone#:</b></td>
                        <td><input type="text" name="pPhoneNumber" value="Phone" size="20"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit"/></td>
                    </tr>
            </form>
            </table>
            
        <?php
        // put your code here
        ?>
    </body>
</html>
