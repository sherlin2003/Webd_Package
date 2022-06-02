<?php
include("index.php");
?>
<html>

<head>
    <title> Eccomerce Website for Jewels by 20pw05 and 20pw35</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="body">
        <div class="top">
            <img src="pictures/phone2.png" width="2%"> <span style="padding:0px 5px 0px 5px ;"> 9994287171 </span>
            <img src="pictures/gmail.png" width="2%"> <span style="padding:0px 5px 0px 5px ;">
                Kavithalaya_2003@gmail.com </span>
            <span style="margin:100px;"> <b> <i> Free Shipping on Orders Over Rs2000 and Free Returns </i> </b></span>
            <span class="login"> <a href="login.html" style="color:black;"> Login </a> </span>
            <span class="horizontal"> </span>
            <span class="signup"> <a href="signup.html" style="color:black;"> Sign up </a> </span>
        </div>
        <div class="top1">
            <img src="pictures/logo1.png" class="logo">
            <span
                style="font-size:50px; font-style:Cambria; position:absolute;top:100px; left:180px;text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25); ">
                KAVITHALAYA </span>
            <nav class="navbar">
                <ul class="list-menu list-menu--inline" role="list">
                    <li> <a href="#main" class="items"> HOME </a> </li>
                    <li> <a href="#NEWARRIVALS" class="items"> NEW ARRIVALS</a> </li>
                    <li> <a href="#rings" class="items"> RINGS </a> </li>
                    <li> <a href="#bangles" class="items"> BANGLES</a> </li>
                    <li> <a href="#earing" class="items"> EARINGS </a> </li>
                    <li> <a href="#necklace" class="items"> NECKLACE </a> </li>
                </ul>
            </nav>
            <a href="#">
                <img src="pictures/love.png"
                    style="position:absolute; top :110px; right:150px; width:3%; filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.5)); ">
            </a>
            <a href="#">
                <img src="pictures/CAART.png"
                    style="position:absolute; top :110px; right:50px; width:3%; filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.5));">
            </a>
        </div>
        <div class="slideimage">
            <img src="pictures/bgimage.png" class="image mySlides">
            <img src="pictures/bgimage-5.png" class="image myslides">
            <img src="pictures/bgimage-3.png" class="image myslides">
            <img src="pictures/bgimage-4.png" class="image myslides">
            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
        </div>

        <script src="index.js"></script>

        <div class="categories">
            <p class="inspired"> GET INSPIRED </p>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="pictures/getinspired1.png" class="ig">
                    </div>
                    <div class="flip-box-back">
                        <p style="color: black; font-size:30px; text-align:left; font-style: italic;">
                            <b>NAME :</b>Yellow Chimes<br>
                            <b>PRICE :</b> 350 Rs <br>
                            <b>DESCRIPTION :</b> Adjustable Ring for Women and Girls <br>
                            It can be worn with all kind of Outfits
                        </p>
                    </div>
                </div>
            </div>
            <div class="flip-box1">
                <div class="flip-box1-inner">
                    <div class="flip-box1-front">
                        <img src="pictures/getinspired2.png" class="ig">
                    </div>
                    <div class="flip-box1-back">
                        <p style="color: black; font-size:30px; text-align:left; font-style: italic;">
                            <b>NAME :</b>Trendy Pearl<br>
                            <b>PRICE :</b> 550 Rs <br>
                            <b>DESCRIPTION :</b> Trendy Pearl earrings are Perfect for Daily wear, College Wear or even Party Wear.<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="Discription">
                <p class="inspired1">
                    Whether you’re treating yourself or celebrating something special,
                    <br>
                     our inspiring selection of high-quality designs means you’ll 
                     <br>always find just the right thing.</p>
            </div>
        </div>

        <a name="NEWARRIVALS">
            <p class="heading"> NEW ARRIVALS </p>
        </a>
        <div class="newarrivals">
            <div class="enlarge">
                <div class="outerbox1">
                    <img src="pictures/braclets.png" class="images">
                    <p> 3 in 1 BRACELET <br> 500Rs </p>
                    <div class="addtocart"> ADD TO CART </div>
                </div>
            </div>
            <div class="enlarge">
                <div class="outerbox1">
                    <img src="pictures/earcuff.png" class="images">
                    <p> STAR EAR CUFF <br> 250Rs </p>
                    <div class="addtocart"> ADD TO CART </div>
                </div>
            </div>
            <div class="enlarge">
                <div class="outerbox1">
                    <img src="pictures/earing-2.png" class="images">
                    <p> WHITE METAL EARING <br> 300Rs </p>
                    <div class="addtocart"> ADD TO CART </div>
                </div>
            </div>
            <div class="enlarge">
                <div class="outerbox1">
                    <img src="pictures/chain1.png" class="images">
                    <p> RING NECKLACE <br> 499Rs </p>
                    <div class="addtocart"> ADD TO CART </div>
                </div>
            </div>
            <div class="enlarge">
                <div class="outerbox1">
                    <img src="pictures/ring.png" class="images">
                    <p> BRIGHT LIFE RING <br> 350Rs </p>
                    <div class="addtocart"> ADD TO CART </div>
                </div>
            </div>
        </div>

        <a name="rings">
            <p class="heading"> RINGS </p>
        </a>

        <div class="container-1">
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring1.png" class="images">
                        <p> HALF CUT ADJUSTABLE RING <br> 1,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring-1.png" class="images">
                        <p> STAR RING<br> 2,650Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring2.png" class="images">
                        <p> CLUFF RING <br> 1,050Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/pengunie.png" class="images">
                        <p> PENGUIN RING <br> 599Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring4.png" class="images">
                        <p> BRIGHT LIFE RING<br> 2,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring8.png" class="images">
                        <p> CURLY BRACE RING <br> 1,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/BUBBLY.png" class="images">
                        <p> BUBBLY RING <br> 1,650Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/LEAF.png" class="images">
                        <p> LEAF PLATTED RING <br> 1,050Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ring3.jpg" class="images">
                        <p> HEART-BEAT RING <br> 599Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/RINSIN.png" class="images">
                        <p>RESIN RING <br> 1,450Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
        </div>

        <a name="bangles">
            <p class="heading"> BANGLES </p>
        </a>
        <div class="container-1">
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/AFRICAN.png" class="images">
                        <p> AFRICAN BASS BANGLE <br> 2,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>

                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/JADE.png" class="images">
                        <p>JADE BANGLE <br> 2,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/HANDCUFF.png" class="images">
                        <p>HAND CUFF BANGLE <br> 3,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/PINK.png" class="images">
                        <p> PINK PLATTED BANGLE <br> 3,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/PEARL.png" class="images">
                        <p> PEARL BANGLE <br> 2,450Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/MASIYAORANGE.png" class="images">
                        <p> MANSIYA ORANGE BANGLE<br> 5,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/bangle4.png" class="images">
                        <p> RUBY GREEN PLATED BANGLE <br> 4,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/bangle3.png" class="images">
                        <p>TWIN BANGLE <br> 2,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/EYEDROP.png" class="images">
                        <p> EYE DROP <br> 2,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/bangle5.png" class="images">
                        <p> GARNET BANGLE <br> 3,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
        </div>

        <a name="earing">
            <p class="heading"> EARINGS </p>
        </a>

        <div class="container-1">
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/hotandblod.png" class="images">
                        <p> HOT AND BOLD EARING <br> 2,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/CHIMES.png" class="images">
                        <p> YELLOW CHIMES <br> 2,780Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/RAINBOW.png" class="images">
                        <p> RAINBOW EARING <br> 2,250Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/BELLA.png" class="images">
                        <p> YOU BELLA EARING <br> 3,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/butterfly.png" class="images">
                        <p> BUTTERFLY EARCUFF <br> 4,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/CRUNCHY.png" class="images">
                        <p> CRUNCHY EARING <br> 2,400Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/ZAVERI.png" class="images">
                        <p> ZAVERI PEARL <br> 2,780Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/earing5.png" class="images">
                        <p> ALL PINK EARING <br> 4,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/JUMKA.png" class="images">
                        <p> PEARL JUMKA <br> 2,999Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/earing3.png" class="images">
                        <p> MERRY EARING <br> 2,974Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
        </div>

        <a name="necklace">
            <p class="heading"> NECKLACE </p>
        </a>

        <div class="container-1">
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/choker.png" class="images">
                        <p> CHOKER -KUNDAN<br> 6,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/pendant.png" class="images">
                        <p> PENDANT <br> 5,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/RED.png" class="images">
                        <p> GLORIOUS RED <br> 7,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/gold.png" class="images">
                        <p> DAZZING CHOKER <br> 13,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/TRIBAL.png" class="images">
                        <p> TRIBAL NECKLACE <br> 9,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
            <div class="container1">
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/god.png" class="images">
                        <p>SPARGZ <br> 10,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/smile.png" class="images">
                        <p> SMILE BRIGHT NECKLACE<br> 6,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/neklace2.png" class="images">
                        <p> ALL PINK - FULL SET <br> 7,500Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/neklace1.png" class="images">
                        <p> PERIDOT GREEN CHOKER <br> 13,050Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
                <div class="enlarge">
                    <div class="outerbox1">
                        <img src="pictures/neklace5.png" class="images">
                        <p> MANGA ORANGE <br> 8,000Rs </p>
                        <div class="addtocart"> ADD TO CART </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-content">
            <h3>KAVITHALAYA</h3>
            <p>Our story unfolds over nine decades — driven by the pursuit of craft, a fixation with detail and a
                devotion to beauty. Few jewellery brands have such an illustrious history as the House of Kavithalaya.
                Founded in in 1925, popularly known as K jeweller's – an innate jeweller, an intuitive
                businessperson, and a dedicated philanthropist – the brand continues to set the standard for the
                ultimate in exquisite Diamond, Gold and Silver Jewellery.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Kavithalaya Jewellers</a> </p>
            <div class="footer-menu">
                <ul class="f-menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
</body>

</html>
