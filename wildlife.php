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

        .content-container {
            padding-left: 10px; /* Add a small gap to the left side of the content */
        }

        .button-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); /* Automatically adjust the number of images per row */
    gap: 10px; /* Gap between images */
    justify-content: space-between; /* Distribute available space evenly between images */
}

.button-container .button {
    cursor: pointer;
    text-align: center;
    width: 100%; /* Ensure the image containers take the full width available in their grid cell */
}

.button-container .button img {
    width: 100%; /* Set the width to 100% to fill the container */
    height: 100%; /* Set the height to 100% to fill the container */
}


        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
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
            <li><a href="Aboutus.html">About Us</a></li>
        </ul>
    </nav>
    
    <div class="content-container">
        <div class="button-container">
        <?php
           include('config.php');

            // Fetch image URLs from the database
            $result = $conn->query("SELECT * FROM wildlife");

            while ($row = $result->fetch_assoc()) {
                $imageUrl = 'data:image/' . $row['image_name'] . ';base64,' . base64_encode($row['image_data']);
                echo '<div class="button"><img src="' . $imageUrl . '" alt="Image"></div>';
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>

    <footer>
        <p>Name: Zainab</p>
        <p>Phone: +44 (131) 123456789</p>
        <p>Social Media: Follow me on <a href="https://www.facebook.com">Facebook</a> and <a href="https://www.instagram.com/yourprofile">Instagram</a></p>
    </footer>
</body>
</html>
