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
            #accademiaContent{
                position:relative;
               // outline: 3px solid red;
                width:50%;
               // margin-top:0px;
                margin-left:45%;
               //float:left;
                font-size:13px;
                padding:25px;
                
            }
            .acLftCnt{
                position:relative;
               float:left;
               // outline:solid green 5px;
                width:40%;
                margin-left:2%;
               font-size: 20px;
               padding:30px;
            }
            table{
                border-collapse: collapse;
                font-size:20px;
            }
            td:hover{
                
                background-color:red;
            }
            td{
                padding:5px;
            }
            tr{
               
                background-color:white;
                border-top:solid red 2px;
                border-bottom:solid red 2px;
            }
            
        </style>
    </head>
    <body>
         <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
             <div class="acLftCnt">
                  St.Peter's Technical Senior have for the previous years got themselves countless number of trophies
                  certificates and awards from both national and international level. To show you how committed our student are
                  without further adure, here is a summary of the Achievement our students have made through the dynamic
                  leadership of the admin.
                  <table>
                      <tr class='row'>
                          <th>No.</th>
                          <th>Year</th>
                          <th>Award Name</th>
                          <th>position</th>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>2013</td>
                          <td>National Science Competition</td>
                          <td>1<sup>st</sup></td>
                      </tr>
                       <tr>
                          <td>2</td>
                          <td>2015</td>
                          <td>National Spelling bee</td>
                          <td>1<sup>st</sup></td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>2015</td>
                          <td>University Of the Gambia InterSchool Debate Competition</td>
                          <td>1<sup>st</sup></td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>2015</td>
                          <td>InterSchools Literature Competition</td>
                          <td>2<sup>nd</sup></td>
                      </tr>
                       <tr>
                          <td>5</td>
                          <td>2012</td>
                          <td>MOBSE InterSchool Sport Competition</td>
                          <td>3<sup>rd</sup></td>
                      </tr>
                  </table>
                 
             </div>
       <div id='accademiaContent'>
           <p>
               St. peter's is a School known for accademic excellences. <br/>
               At St. Peter's we don't only stop learning within the four <br/>corners of the classRoom
               
           <h2>After School Care Program Information</h2>
           

           The After School Care Program (ASCP) offers children from Preschool <br/>through 
           8th grade a fun and safe place to stay before and after school.<br/> The program is 
           offered on a drop in as needed basis with no advance registration required. <br/>
           St. Peter’s After School Program is available from 3:10–6:00 p.m. for a fee.<br/><br/>

           ASCP for students in 1st through 8th grade includes planned lessons, <br />
           time for study and homework, science activities, arts and crafts, <br />
           age appropriate games, indoor and outdoor play, and a daily snack.<br/>
           ASCP meets in the library but utilizes many of the school facilities, <br />
           including the computer lab, theater and turf field.<br/><br/>

           Younger students have the opportunity to play with the many games <br/>and
           toys in our newly renovated Early Childhood classrooms. All students <br/>receive
           a snack, enjoy outside play, and participate in many organized<br/> activities,
           which include arts and crafts, and sports.<br/><br/>

            For more information contact our After School Program Coordinator <br/>Bryan Kerr
            at bkerr@st-peters-school.org<br/>

            Click here for more information about additional After School <br/>Enrichment Activities for students.

           </p>
           <p>
               
           <h2>Extended Day Programs</h2>

St. Peter’s is pleased to offer students many opportunities to continue their <br/>
learning outside of the classroom. The St. Peter’s School Extended Day Programs <br/>
consist of the Early Arrival Program, the After School Care Program, Fall,<br/>
Winter & Spring Enrichment Programs, and TALL.<br/><br/>

<span class="bold" >Early Arrival Program (EAP)</span><br/>
The Early Arrival Program provides supervision for children who must arrive at<br/>
school before 8:00 a.m. Children enter through the front door and go directly to<br/>
the Kindergarten area, where they will be supervised from 7:30-8:00, after which<br/>
they are dismissed to their homerooms by the EAP monitor.<br/><br/>

<span class="bold" >After School Care Program (ASCP)</span><br/>
The St. Peter’s After School Care Program is an extension of the school day and<br/>
a wonderful opportunity for students of all ages to further their academics, <br/>
socialize and play in a structured and safe environment. After school care is <br/>
available Monday through Friday from 3:15-6:00 p.m. Please contact Bryan Kerr <br/>
for more information at bkerr@st-peters-school.org<br/><br/>

<span class="bold" >Enrichment Programse</span><br/>
St. Peter’s School offers a variety of after school enrichment programs for its <br/>
students every Fall, Winter and Spring. Courses range from athletics to visual <br/>
arts to music and language studies. The Fall 2014 Enrichment Programs guide is <br/>
available in the link on the sidebar of this page. Please contact Lydie Miller, <br/>
Director of Extended Day Programs.
    
           </p>
            </div>
            <?php
                include '../includeFiles/footer.html';
            ?>
            
        </div>

    </body>
</html>
