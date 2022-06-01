<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'root');

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if(isset($_GET['action'])){
    if($_GET['action']=='add'){
        $sql = 'select id, name, description, price from RINGS where id='.$_GET['id'].';';
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            $row = mysqli_fetch_assoc($res);
            $ids = array();
            foreach($_SESSION['cart'] as $item){
                array_push($ids, $item[0]);
            }
            if(in_array($row['id'], $ids)){
                foreach($_SESSION['cart'] as $key => $item){
                    if($_SESSION['cart'][$key][0] === $row['id']){
                        $_SESSION['cart'][$key]
						[4] += 1;
                    }
                }
            }
            else{
                $item = array($row['id'], $row['name'], $row['description'], $row['price'], 1);
                array_push($_SESSION['cart'], $item);
            }
        }
    }
}
//table creation

// $sql = 'create table CustomerDetails(
    // id int auto_increment primary key,
    // First_name varchar(30),
	// Last_name varchar(30),
    // email varchar(40),
	// password varchar(40),
	// confirm_password varchar(40),
    // ';
// mysqli_query($conn, $sql);

$sql = 'create table RINGS(
		id int primary key,
		name varchar(50),
		image varchar(60),
		description varchar(100),
		price float(10, 2));';
 mysqli_query($conn, $sql);

//table insertion
$sql = 'insert into  RINGS values(1, "HALF CUT ADJUSTABLE RING", "pictures/ring1.png", "RINGS",  1500.00)';
$sql = 'insert into RINGS values(2, "STAR RING", "pictures/ring-1.png", "RINGS",2650.00);';
$sql  = 'insert into RINGS values(3, "CLUFF RING" , "pictures/ring2.png", "RINGS", 1050.00);';
// $sql .= 'insert into RINGS values(4, "", ".png",  "Shorts", 1190.00);';
// $sql .= 'insert into RINGS values(5, "", ".png",  "Shorts", 1190.00);';
// $sql .= 'insert into RINGS values(6, "", ".png", "Shorts", 1190.00);';
mysqli_multi_query($conn, $sql);

//table insertion

// $sql = 'insert into RINGS values(1, "Blue Round Neck", "p1.png", "T-Shirts", 1200.00);';
// $sql .= 'insert into RINGS values(2, "Black Round Neck", "p2.png", "T-Shirts", 1290.00);';
// $sql .= 'insert into RINGS values(3, "White Round Neck" , "p3.png", "T-Shirts", 1200.00);';
// $sql .= 'insert into RINGS values(4, "Royal Blue Chinos", "p4.png",  "Shorts", 1190.00);';
// $sql .= 'insert into RINGS values(5, "Light grey Chinos", "p5.png",  "Shorts", 1190.00);';
// $sql .= 'insert into RINGS values(6, "Light Blue Chinos", "p6.png", "Shorts", 1190.00);';
// mysqli_multi_query($conn, $sql);

?>
