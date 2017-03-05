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
            <h2 class="center">Seahorse</h2>
        </div>
        
        <div id="column" class="container left2">
        
        <div class="box2">
            <a href="#big"><img src="Images/horse1.jpg" alt="Horse 1" height="125" onclick="change('horse', 1)"></a>
        </div>
        <div class="box2">
            <a href="#big"><img src="Images/horse2.jpg" alt="Horse 2" height="125" onclick="change('horse', 2)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse3.jpg" alt="Horse 3" height="125" onclick="change('horse', 3)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse4.jpg" alt="Horse 4" height="125" onclick="change('horse', 4)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse5.jpg" alt="Horse 5" height="125" onclick="change('horse', 5)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse6.jpg" alt="Horse 6" height="125" onclick="change('horse', 6)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse7.jpg" alt="Horse 7" height="125" onclick="change('horse', 7)"></a>
        </div>
        <div class="box2">
             <a href="#big"><img src="Images/horse8.jpg" alt="Horse 8" height="125" onclick="change('horse', 8)"></a>
        </div>
        
        </div>
        
         <div class="right2">
        <img id="big" src="Images/horse1.jpg" alt="Horse 1">
    </div>
       <div class="facts">
            <h3>Seahorse Facts</h3>
            <ul class="textleft font">
                <li>Male Seahorses are the ones who give birth</li>
                <li>A baby seahorse is called a "fry"</li>
                <li>They have no teeth and no stomach</li>
                <li>They are terrible swimmers</li>
                <li>Seahorses are masters of disguise</li>
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