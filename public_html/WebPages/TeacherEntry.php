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
                margin-bottom:5%;
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
                Welcome to this section where you have the prevelege to add a new Teacher to the school. <br/>
                Please enter in the details of the teacher and click on the submit button to finally add this particular teacher Thank you.
            </p>
        <table>
            <form method="post" action="TeacherEntryConfirm.php">
                <tr>
                    <td><b>Name:</b></td>
                    <td><input type="text" name="tName" size="20"/></td>
                </tr>
                <tr>
                    <td><b>Grade:</b></td>
                    <td>
                        <select name="grade" >
                            <option selected="selected" value="">Select Teacher's grade&nbsp;&nbsp;&nbsp;</option>
                        <?php
                        
                        for($j=7; $j<=12; $j++)
                          echo"<option value=\"$j\">$j</option>";
                        ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Religion:</b></td>
                    <td>
                        <select name="religion" >
                            <option selected="selected" value="">Select Teacher's religion</option>
                            <option vlue="islam">Islam</option>
                            <option vlue="christ">Christian</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Nationality:</b></td>
                    <td>
                        <select name="nationality" >
                            <option selected="selected" value="">Select Teacher's Country</option>
                            <?php
                            $x=array("Gamba","Senegal","Nigeria","Mali","Guinea Bissau");
                            for($j=0; $j<count($x); $j++)
                          echo"<option value=\"$x[$j]\">$x[$j]</option>";
                            ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Address:</b></td>
                    <td>
                        <select name="address" >
                            <option selected="selected" value="">Select Teacher's Address</option>
                            <?php
                            $x=array("Lamin","Busumbala","Banjul","Kerewan","Bigilo","Kotu","Brikama","Serrekunda","Farato","Busumbala","Yundum","Abuko");
                            for($j=0; $j<count($x); $j++)
                          echo"<option value=\"$x[$j]\">$x[$j]</option>";
                            ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Gender:</b></td>
                    <td>
                        <select name="gender" >
                            <option selected="selected" value="">Select Teacher's Gender</option>
                            <option value="M"/>Male</option>
                            <option value="F"/>Female</option>
                            </select>
                    </td>
                <tr>
                    <td><b>UserName:</b></td>
                    <td><input type="text" name="uName" size="20"/></td>
                </tr>
                <tr>
                    <td><b>Password:</b></td>
                    <td><input type="password" name="passkey" size="20"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="submit" /></td>
                </tr>
            </form>
        </table>
    </body>
</html>