<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
    
        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px;
        }
    
        header .logo {
            display: flex;
            align-items: center;
        }
    
        header .logo img {
            height: 60px;
            width: 60px;
            margin-right: 20px;
        }
    
        h1 {
            margin: 0;
            flex-grow: 1;
            text-align: center;
        }
    
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
        }
    
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center; /* Center the navigation links horizontally */
        }
    
        nav ul li {
            margin: 0 15px; /* Add space between menu items */
        }
    
        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #333;
            transition: background-color 0.3s; /* Add a smooth transition effect */
        }
    
        nav a:hover {
            background-color: #555; /* Change the background color on hover */
        }
    
        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Center the images */
        }
    
        .button-container .button {
            margin: 10px;
            cursor: pointer;
            width: calc(50% - 20px); /* Two images per row with some spacing */
            text-align: center;
            transition: transform 0.3s; /* Add a smooth transition effect on hover */
        }
    
        .button-container .button:hover {
            transform: scale(1.1); /* Enlarge the image on hover */
        }
    
        .button-container .button img {
            max-width: 400%; /* Make all images the same width */
            max-height: 320px; /* Set a fixed height for the images */
        }
    
        .button-container .button p {
            margin: 10px 0; /* Add spacing below text */
        }
    
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        /* Add your other CSS styles as needed */
    </style>
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="LOGO.png" alt="Logo">
        </div>
        <h1>Malcolm Lismore</h1>
    </header>
    <nav>
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Prices.html">Prices</a></li>
            <li><a href="Enquiries.html">Enquiries</a></li>
            <li><a href="Courses.html">Courses</a></li>
            <li><a href="Aboutus.html">About Us</a></li>
        </ul>
    </nav>
    
    <div class="button-container">

        <div class="button">
            <a href="wildlife.php"><img src="Gwildlife." alt="Image 1"></a>
            <p>Wildlife Photos</p>
        </div>
        <div class="button">
            <a href="landscape.php"><img src="Glandscape.jpeg" alt="Image 2"></a>
            <p>Landscape Photos</p>
        </div>
        <div class="button"> 
            <a href="wedding.php"><img src="Gwedding.jpeg" alt="Image 3"></a>
            <p>Wedding Photos</p>
        </div>
        <div class="button">
            <a href="photoshoot.php"><img src="Gphotoshoot.jpeg" alt="Image 4"></a>
            <p>Photoshoot Photos</p>
        </div>
        <div class="button">
            <a href="birthday.php"><img src="Gbirthday.jpeg" alt="Image 5"></a>
            <p>Birthday Photos</p>
        </div>
        <div class="button">
            <a href="graduation.php"><img src="Ggraduation.jpeg" alt="Image 6"></a>
            <p>Graduation Photos</p>
        </div>
        <div class="button">
            <a href="product.php"><img src="Gproduct.jpeg" alt="Image 7"></a>
            <p>Product Photos</p>
        </div>
        <div class="button">
            <a href="other.php"><img src="Gother.jpeg" alt="Image 8"></a>
            <p>Other Photos</p>
        </div>
        <!-- Add these links to your existing Gallery page -->


    </div>

    <footer>
        <p>Name: Malcolm Lismore</p>
        <p>Phone: +44 (131) 123456789</p>
        <p>Social Media: Follow me on <a href="https://www.facebook.com">Facebook</a> and <a href="https://www.instagram.com/yourprofile">Instagram</a></p>
    </footer>
</body>
</html>
