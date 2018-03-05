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
                    <script type="text/javascript">
var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "../imageFiles/stp5.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "../imageFiles/stp3.jpg"
slideimages[2] = new Image()
slideimages[2].src = "../imageFiles/stp4.jpg"
slideimages[3] = new Image()
slideimages[3].src = "../imageFiles/stp1.jpg"

</script>
    </head>
    <body>
        <div id="mainContent">
            <?php
            include '../includeFiles/header.html';
            ?>
            <div id='aboutContent'>
                <img src="../imageFiles/stp5.jpg" class='aboutSlideShow' width="50%;" id="slide"/>
                <script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<3)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}

slideit()

</script>
                
                <p class='pAbout'>
                <h1>About Us</h1>

                <span class="bold" >A personal approach means each child can gain the confidence they need to excel.</span><br/><br/>

The feeling of home is one of the most distinctive characteristics of St. Peter’s School.<br/>
It very much feels like a large family with the common interest of raising our children together.<br/> 
Creating confident students who feel safe to try new things is at the core of our mission.<br/><br/>

<span class="bold" >Enriching programs give children a world of learning.</span><br/><br/>
In addition to the core subjects, each child is exposed to science, music, art,<br/>
physical education, and French. St. Peter’s School is committed <br/>to the idea that 
all children need to be exposed to a wide variety<br/> of subject matter.<br/><br/>

<span class="bold" >St. Peter’s School prepares students for a successful<br/> secondary school and university experience.</span><br/><br/>
St. Peter’s School graduates go on to secondary school and <br/>college, where they are highly successful. <br/>
Our graduates go on to local independent secondary schools <br/>or public schools whereas others choose to <br/>
attend boarding schools out of state.<br/><br/>

<span class="bold" >Secondary School Placement:</span> 99% of graduates attend their first <br/>or second choice of secondary schools. <br/>
Students from the past 10 years have attended the following <br/>schools after graduation:<br/>
                <ul>
                    <li>The University of the Gambia</li>
                    <li>Gambia College</li>
                    <li>Gambia Technical Training Institute</li>
                    <li>Management Development Institute MDI</li>
                    <li>Gambia Tourism Institute</li>
                    
                </ul>

                </p>
        
            </div>
            <?php
                include '../includeFiles/footer.html';
            ?>
            
        </div>
    </body>
</html>
