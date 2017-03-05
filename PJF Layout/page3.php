<!DOCTYPE html>

<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="myscript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <title>PHP | Javascript | Flex Layout</title>
    
</head>


<body>
    <div class="nav">
    <header>

                <?php include 'header.php';?>

    </header>
    </div>
    
    <div>
    <main>
        
        <div>
            <h2 class="center">Octopus</h2>
        </div>
        
        <div id="columnreverse" class="scroll container left3">
        
        <div class="box3">
            <a href="#big"><img src="Images/oct1.jpg" alt="Octapus 1" height="125" onclick="change('oct', 1)"></a>
        </div>
        <div class="box3">
            <a href="#big"><img src="Images/oct2.jpg" alt="Octapus 2" height="125" onclick="change('oct', 2)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct3.jpg" alt="Octapus 3" height="125" onclick="change('oct', 3)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct4.jpg" alt="Octapus 4" height="125" onclick="change('oct', 4)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct5.jpg" alt="Octapus 5" height="125" onclick="change('oct', 5)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct6.jpg" alt="Octapus 6" height="125" onclick="change('oct', 6)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct7.jpg" alt="Octapus 7" height="125" onclick="change('oct', 7)"></a>
        </div>
        <div class="box3">
             <a href="#big"><img src="Images/oct8.jpg" alt="Octapus 8" height="125" onclick="change('oct', 8)"></a>
        </div>
        
        </div>
        
         <div class="right3">
        <img id="big" src="Images/oct1.jpg" alt="Octapus 1">
        <h3 class="center">Octopus Facts</h3>
        <ul class="textleft font">
            <li>The plural of octopus is octopuses</li>
            <li>A octopus has three hearts</li>
            <li>An octopus' brain is as large as a bird</li>
            <li>They can regrow their arms</li>
            <li>Octopuses can squeeze ina nd out of tight spaces</li>
        </ul>
    </div>
        
    </main>
    </div>
     <div class="clear"></div>
    
    <footer>
        <?php include 'footer.php';?>
    </footer>
    
</body>


</html>