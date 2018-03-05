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
        <link type='text/css' href='../cssFiles/commonFeatures.css' rel='StyleSheet'/>
        <style>
            .sd{
                font-family: monospace;
                font-size:40px;
                color:red;
            }
            </style>
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
            <div id='homeContent'>
                <h1 class="sd">Welcome to St.Peter's Technical Senior</h1>
                <img src="../imageFiles/stp5.jpg" id="slide"  width="1000" height="400"/>
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
                <p class="p1">
            <span class="mark">Published</span> by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.<br/>
O’Reilly books may be purchased for educational, business, or sales promotional use. Online<br/>
editions are also available for most titles (safari.oreilly.com). For more information, contact<br/>
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.<br/>
        </p>
        <img src="imageFiles/t.jpg" alt="image 1"/>
        <p>
            Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.<br/>
O’Reilly books may be purchased for educational, business, or sales promotional use. Online<br/>
editions are also available for most titles (safari.oreilly.com). For more information, contact<br/>
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.<br/>
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com..
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
Published by O’Reilly Media, Inc., 1005 Gravenstein Highway North, Sebastopol, CA 95472.
O’Reilly books may be purchased for educational, business, or sales promotional use. Online
editions are also available for most titles (safari.oreilly.com). For more information, contact
our corporate/institutional sales department: (800) 998-9938 or corporate@oreilly.com.
        </p>
            </div>
            <?php
                include '../includeFiles/footer.html';
            ?>
            
        </div>

       
        
        
       
    </body>
</html>
