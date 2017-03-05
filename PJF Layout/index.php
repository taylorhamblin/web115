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
            <h2 class="center">Star Fish</h2>
        </div>
        
        <div id="rows" class="container left">
        
        <div class="box">
            <a href="#big"><img src="Images/star1.jpg" alt="Star 1" height="125" onclick="change('star', 1)"></a>
        </div>
        <div class="box">
            <a href="#big"><img src="Images/star2.jpg" alt="Star 2" height="125" onclick="change('star', 2)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star3.jpg" alt="Star 3" height="125" onclick="change('star', 3)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star4.jpg" alt="Star 4" height="125" onclick="change('star', 4)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star5.jpg" alt="Star 5" height="125" onclick="change('star', 5)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star6.jpg" alt="Star 6" height="125" onclick="change('star', 6)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star7.jpg" alt="Star 7" height="125" onclick="change('star', 7)"></a>
        </div>
        <div class="box">
             <a href="#big"><img src="Images/star8.jpg" alt="Star 8" height="125" onclick="change('star', 8)"></a>
        </div>
        
        </div>
        
         <div class="right">
        <img id="big" src="Images/star1.jpg" alt="Star 1">
        <h3 class="center">Starfish Facts</h3>
            <ul class="textleft font">
                <li>They have no brain and no blood</li>
                <li>They can be really heavy</li>
                <li>A starfish is not a fish</li>
                <li>There are around 2,000 species of sea star</li>
                <li>They can not survive in fresh water</li>
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