<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $items = $_POST['items'];

    $sql = "INSERT INTO `food`.`ord` (`name`, `phone`, `email`, `address`, `items`, `dt`) VALUES ('$name', '$phone', '$email', '$address', '$items', CURRENT_TIMESTAMP);";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        // $not_insert = true; <<< if getting error then input this line
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD Network Online | FoodNetwork.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)"href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai+2|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="FoodNetwork.com">
        </div>
        
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Menu</a></li>
            <li class="item"><a href="#clientsection">Order Tracking</a></li>
            <li class="item"><a href="#contact">Order Now</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Food Network</h1>
        <p>The Order Form at the bottom is built with php & MySQL database.</p>
        <p>Rest of the website, you know HTML and CSS.</p>
        <button class="btn"><a href="#contact">Order Now</a></button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Menu Items</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.png" alt="">
                <h2 class="h-secondary center">Soup Rs.199</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, voluptate nesciunt dicta ea esse nihil hic eveniet ipsum temporibus officia saepe aut rem repellendus illo a cum mollitia facere commodi minus sapiente amet tempora.</p>
            </div>
            <div class="box">
                <img src="img/2.png" alt="">
                <h2 class="h-secondary center">Pizza Rs.699</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quaerat recusandae placeat nulla nobis, dolore neque amet non accusantium harum obcaecati sed laborum omnis? Eaque, mollitia veritatis! Amet aspernatur officia magni quidem aliquam voluptatem.</p>
            </div>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">Salad Rs.299</h2>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat blanditiis maiores dolores omnis iste natus nesciunt aliquid quia esse repellendus. At sint voluptatibus totam, qui dicta, eum enim molestiae odit nobis adipisci, quae nam.</p>
            </div>
        </div>
        </div>
    </section>
    <section id="clientsection">
        <h1 class="h-primary center">Order Tracking</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/5.png" alt="Our Client">
            </div>
            <h2>After placing your Order, you will receive a tracking id number. You will receive your Food within 30 minutes after placing the Order. You can contact customer support and provide tracking id, so you will be notified with the details.<br> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ea. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores iure inventore nemo veritatis ut maiores illum tempora quam quod laborum.</h2>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Order Your Food Now</h1>
        <!-- <?php
        if($insert == true){
        echo "<p class='sbmsg'>Thanks for Ordering the Food. You will be contacted shortly from delivery department. </p>";
        }
        ?> -->
        <div id="contact-box">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <input type="address" name="address" id="address" placeholder="Enter your address">
                </div>
                <div class="form-group">
                    <label for="items">Order Items: </label>
                    <textarea name="items" id="items" cols="30" rows="10"></textarea>
                </div>
                <button class="btn2">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.foodnetwork.com. All rights reserved.
        </div>
    </footer>
</body>
</html>