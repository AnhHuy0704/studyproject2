<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mycoffee/style1.css">
    <link rel="stylesheet" href="layoyt.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="thecoffeeimage/logo.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <title>The Coffee</title>
</head>
<body>
    <input type="checkbox" id="search">

    <div class="search_tool">
        <div class="logo">
            <img src="thecoffeeimage/logo.jpg">
        </div>
        <input type="search" class="searchinput" placeholder="Type word and hit enter">
        <label for="search">
             <ion-icon class="closeseach" name="close-outline"></ion-icon>
        </label>
            
    </div>

    <div class="header">
        <div class="logo">
            <img src="thecoffeeimage/logo.jpg">
        </div>
        <div class="nav_bar">
           <ul>
                <li onclick="underline_nav(event)"; ><a class="hoveref navitem1" href="#">HOME</a></li>
                <li class="nav_item"><a class="hoveref" href="page.php?location=home">PAGES</a></li>
                <li class="nav_item"><a class="hoveref" href="Home.php?pages">BLOG</a></li>
                <li class="nav_item"><a class="hoveref" href="#">EVENTS</a></li>
                <li class="nav_item"><a class="hoveref" href="#">SHOP</a></li>
                <li class="nav_item"><a class="hoveref" href="#">CONTACT US</a></li>
           </ul>
         
        </div>
        <div class="header_tool">
            <label class="cart">
                <ion-icon name="cart-outline"></ion-icon>
            </label>
            <label for="search" class="search">
                    <ion-icon name="search-outline"></ion-icon>
            </label>
            <label class="contact">
                <ion-icon name="apps-outline"></ion-icon>
            </label>
            <label class="nav_mobile">
                <ion-icon name="apps-outline"></ion-icon>
            </label>
        </div>
    </div>
</body>
</html>
<script>
    menu=document.querySelectorAll(".nav_item");
    function underline_nav(event){
            
                event.target.style.borderbottom="1px solid white";
            
    }
</script>