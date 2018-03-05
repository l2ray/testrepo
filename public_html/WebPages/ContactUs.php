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
        <link href="../cssFiles/commonFeatures.css" type="text/css" rel="StyleSheet"/>
        <style>
            .cInfo{
                font-weight:bold;
            }
            table{
               border-collapse: collapse;
            }
            #contactAdmin{
                position:relative;
                float:left;
            }
            .contact:hover{
                background-color:red;
            }
            tr.contact,td.contact{
                border:2px solid red;
            }
            #userInput{
              //  float:right;
              margin-left:60%;
                width:50%px;
            }
        </style>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
            Working with the public is not an easy task especially the school.<br/>
            At St. Peter's, we believe that not only the teachers can do it alone. <br/>
            We need the effort of the parents to complement ours as such, <br/>
            We might be offering your services that might be to your dissatisfaction regarding your child.<br/>
            As a result, we're providing you this platform to contact us anytime during the working hours<br/>
            to ask us anything regarding the schools progress or even that of your child. 
            <br/><br/>
            <span class="cInfo">Below is a list of contacts you can get to</span><br/><br/>
            <div id="contactAdmin">
                <table >
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Contact Dial</th>
                </tr>
                <tr class="contact">
                    <td>Rev. Bruno Toupan </td>
                    <td>Principal Senior</td>
                    <td>9656490</td>
                </tr>
                <tr class="contact">
                    <td>Mr. Francis Gomez</td>
                    <td>VicePrincipal senior</td>
                    <td>3456490</td>
                </tr>
                <tr class="contact">
                    <td>Mrs. Mari Mendy</td>
                    <td>VicePrincipal Junior</td>
                    <td>4472897</td>
                </tr>
                <tr class="contact">
                    <td>Mr. Francis Gomez</td>
                    <td>assistance VicePrincipal senior</td>
                    <td>9805667</td>
                </tr>
                
            </table>
            </div>
            
            <div id="userInput">
                 <table >
                <form>
                    <tr >
                        <td>Name </td>
                        <td><input type="text" value="" name="_name" />*</td>
                        
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" value="" name="_name" />*</td>
                       
                    </tr>
                    <tr>
                         <td>Email (optional) </td>
                        <td><input type="text" value="" name="_name" /></td>
                        
                    </tr>
                    <tr>
                         
                        <td>comment </td>
                        <td><textarea rows="10" cols="23">
                            
                            </textarea>*</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"</td>
                    </tr>
                    
            </form>
            </table>
            </div>
           
            
            
            <?php
                include '../includeFiles/footer.html';
            ?>
            
        </div>
    </body>
</html>
