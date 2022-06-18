<?php
    $server = "localhost";
    $username = "admin";
    $password = "admin";
    $conn = new mysqli("localhost", "admin","admin");
    // if($conn->connect_error) {
    //     die("Connection failed: ".$conn->connect_error);
    // }
    // else {
    //     echo "Connection success! ";
    // }
	
// CREATE DATABASE 
// $sql = "CREATE DATABASE webdpackage";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


//NEW ARRIVALS TABLE 
// $sql = "use webdpackage; 
//create table NEW_ARRIVALS (
//       id int primary key,
// 		 name varchar(50),
// 		 image varchar(60),
// 		 description varchar(100),
// 		 price float(10, 2));";

//if($conn->multi_query($sql) === TRUE) {
//       echo "Table created successfully";
// }
// else {
//      echo $conn->error;
//}

//$sql = "use webdpackage; insert into NEW_ARRIVALS values(1, '3 in 1 BRACELET', 'pictures/braclets.png', 'NEW_ARRIVALS', 500.00)";
//$sql = "use webdpackage; insert into NEW_ARRIVALS values(2,'STAR EAR CUFF', 'pictures/earcuff.png', 'NEW_ARRIVALS', 250.00)";
//$sql = "use webdpackage; insert into NEW_ARRIVALS values(3, 'WHITE METAL EARING' , 'pictures/earing-2.png', 'NEW_ARRIVALS', 300.00)";
//$sql = "use webdpackage; insert into NEW_ARRIVALS values(4, 'RING NECKLACE','pictures/chain1.png', 'NEW_ARRIVALS', 599.00)";
//$sql = "use webdpackage; insert into NEW_ARRIVALS values(5, 'BRIGHT LIFE RIN', 'pictures/ring.png','NEW_ARRIVALS', 354.00)";
//if($conn->multi_query($sql) === TRUE) {
//      echo "Value inserted successfully";
//}


// RING TABLE 
// $sql = 'use webdpackage; create table RINGS(id int primary key,
// 						   name varchar(50),
// 						   image varchar(60),
// 					       description varchar(100),
// 						   price float(10, 2));';

// table insertion
// $sql = "use webdpackage; insert into RINGS values(1, 'HALF CUT ADJUSTABLE RING', 'pictures/ring1.png', 'RINGS', 1500.00)";
// $sql = "use webdpackage; insert into RINGS values(2, 'STAR RING', 'pictures/ring-1.png', 'RINGS',2650.00)";
// $sql = "use webdpackage; insert into RINGS values(3, 'CLUFF RING' , 'pictures/ring2.png', 'RINGS', 1050.00)";
// $sql = "use webdpackage; insert into RINGS values(4, 'PENGUIN RING', 'pictures/PENGUNIE.png', 'RINGS', 599.00)";
// $sql = "use webdpackage; insert into RINGS values(5, 'BRIGHT LIFE RING', 'pictures/ring4.png', 'RINGS', 2999.00)";
// $sql = "use webdpackage; insert into RINGS values(6, 'CURLY BRACE RING', 'pictures/ring8.png', 'RINGS', 1000.00)";
// $sql = "use webdpackage; insert into RINGS values(7, 'BUBBLY RING', 'pictures/BUBBLY.png', 'RINGS', 1650.00)";
// $sql = "use webdpackage; insert into RINGS values(8, 'LEAF PLATTED RING', 'pictures/LEAF.png', 'RINGS', 1050.00)";
// $sql = "use webdpackage; insert into RINGS values(9, 'HEART-BEAT RING', 'pictures/ring3.png', 'RINGS', 1450.00)";
// $sql = "use webdpackage; insert into RINGS values(10,'RESIN RING', 'pictures/RINSIN.png', 'RINGS', 1450.00)";
//  if($conn->multi_query($sql) === TRUE) {
//       echo "Value inserted successfully";
//  }



//BANGLE TABLE 
// $sql = 'use webdpackage; create table BANGLES(id int primary key,
// 							 name varchar(50),
// 							 image varchar(60),
// 						     description varchar(100),
// 							 price float(10, 2));';
 
// $sql = "use webdpackage; insert into BANGLES values(1, 'AFRICAN BASS BANGLE', 'pictures/AFRICAN.png ', 'BANGLES', 2999.00)";
// $sql = "use webdpackage; insert into BANGLES values(2, 'JADE BANGLE  ', 'pictures/JADE.png ', 'BANGLES', 2500.00)";
// $sql = "use webdpackage; insert into BANGLES values(3, 'HAND CUFF BANGLE', 'pictures/HANDCUFF.png ', 'BANGLES', 3500.00)";
//$sql = "use webdpackage; insert into BANGLES values(4, 'PINK PLATTED BANGLE', 'pictures/PINK.png  ', 'BANGLES', 2450.00)";
// $sql = "use webdpackage; insert into BANGLES values(5, 'PEARL BANGLE ',  'pictures/PEARL.png   ', 'BANGLES', 2999.00)";
// $sql = "use webdpackage; insert into BANGLES values(6, 'MANSIYA ORANGE BANGLE ', 'pictures/MANSIYAORANGE.png', 'BANGLES', 5000.00)";
// $sql = "use webdpackage; insert into BANGLES values(7, 'RUBY GREEN PLATED BANGLE', 'pictures/bangle4.png  ', 'BANGLES', 4500.00)";
// $sql = "use webdpackage; insert into BANGLES values(8, 'TWIN BANGLE ', 'pictures/bangle3.png  ', 'BANGLES', 2500.00)";
// $sql = "use webdpackage; insert into BANGLES values(9, 'EYE DROP  ', 'pictures/EYEDROP.png   ', 'BANGLES', 2999.00)";
// $sql = "use webdpackage; insert into BANGLES values(10,'GARNET BANGLE   ', 'pictures/bangle5.png', 'BANGLES', 3999.00)";
//  if($conn->multi_query($sql) === TRUE) {
//       echo "Value inserted successfully";
//  }


// EARRING TABLE 
// $sql = "use webdpackage; create table EARINGS(id int primary key,
// 						     name varchar(50),
// 							 image varchar(60),
// 							 description varchar(100),
// 							 price float(10, 2));";

// $sql = "use webdpackage; insert into EARINGS values(1, 'HOT AND BOLD EARING', 'pictures/hotandblod.png ', 'EARINGS', 2500.00)";
// $sql = "use webdpackage; insert into EARINGS values(2, 'YELLOW CHIMES      ', 'pictures/CHIMES.png     ', 'EARINGS', 2780.00)";
// $sql = "use webdpackage; insert into EARINGS values(3, 'RAINBOW EARING     ', 'pictures/RAINBOW.png    ', 'EARINGS', 2250.00)";
// $sql = "use webdpackage; insert into EARINGS values(4, 'YOU BELLA EARING   ', 'pictures/BELLA.png      ', 'EARINGS', 3000.00)";
// $sql = "use webdpackage; insert into EARINGS values(5, 'BUTTERFLY EARCUFF  ', 'pictures/butterfly.png  ', 'EARINGS', 4999.00)";
// $sql = "use webdpackage; insert into EARINGS values(6, 'CRUNCHY EARING     ', 'pictures/CRUNCHY.png    ', 'EARINGS', 2400.00)";
// $sql = "use webdpackage; insert into EARINGS values(7, 'ZAVERI PEARL       ', 'pictures/ZAVERI.png     ', 'EARINGS', 2780.00)";
// $sql = "use webdpackage; insert into EARINGS values(8, 'ALL PINK EARING    ', 'pictures/earing5.png    ', 'EARINGS', 4000.00)";
// $sql = "use webdpackage; insert into EARINGS values(9, 'PEARL JUMKA        ', 'pictures/JUMKA.png      ', 'EARINGS', 2999.00)";
// $sql = "use webdpackage; insert into EARINGS values(10,'MERRY EARING      ', 'pictures/earing3.png    ', 'EARINGS', 2974.00)";

// if($conn->multi_query($sql) === TRUE) {
//       echo "Value inserted successfully";
//  }
 
 
 
//NECKLACE TABLE
// $sql = "use webdpackage; create table NECKLACE(id int primary key,
// 							  name varchar(50),
// 						      image varchar(60),
// 							  description varchar(100),
// 					          price float(10, 2));";

// table insertion
// $sql = "use webdpackage; insert into NECKLACE values(1, 'CHOKER -KUNDAN       ', 'pictures/choker.png  ', 'NECKLACE', 6500.00)";
// $sql = "use webdpackage; insert into NECKLACE values(2, 'PENDANT              ', 'pictures/pendant.png ', 'NECKLACE', 5000.00)";
// $sql = "use webdpackage; insert into NECKLACE values(3, 'GLORIOUS RED         ', 'pictures/RED.png     ', 'NECKLACE', 7500.00)";
// $sql = "use webdpackage; insert into NECKLACE values(4, 'DAZZLING CHOKER      ', 'pictures/gold.png    ', 'NECKLACE', 13000.00)";
// $sql = "use webdpackage; insert into NECKLACE values(5, 'TRIBAL NECKLACE      ', 'pictures/TRIBAL.png  ', 'NECKLACE', 9500.00) ";
// $sql = "use webdpackage; insert into NECKLACE values(6, 'SPARGZ               ', 'pictures/god.png     ', 'NECKLACE', 10000.00)";
// $sql = "use webdpackage; insert into NECKLACE values(7, 'SMILE BRIGHT NECKLACE', 'pictures/smile.png   ', 'NECKLACE', 6000.00)";
// $sql = "use webdpackage; insert into NECKLACE values(8, 'ALL-PINK FULL SET    ', 'pictures/neklace2.png', 'NECKLACE', 7500.00)";
// $sql = "use webdpackage; insert into NECKLACE values(9, 'PERIDOT GREEN CHOKER ', 'pictures/neklace1.png', 'NECKLACE', 13050.00)";
// $sql = "use webdpackage; insert into NECKLACE values(10,'MANGA ORANGE         ', 'pictures/neklace5.png', 'NECKLACE', 8000.00)";
// if($conn->multi_query($sql) === TRUE) {
//       echo "Value inserted successfully";
//  }

// $sql = "use webdpackage; create table users ( id int auto_increment primary key ,
//     Firstname varchar(50),
//     Lastname varchar(50),
//     email varchar(50),
//     password varchar(50) NOT NULL,
//     confirmpassword  varchar(50));";

// if($conn->multi_query($sql) === TRUE) {
//       echo "Table created successfully";
// }
// else {
//      echo $conn->error;
// }



?>
