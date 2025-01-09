<?php
    include('config.php');

    // Check if the form is submitted
    if (isset($_POST['submit'])) {

        // Process the uploaded image
        $image = $_FILES['photoshoot_image']['name'];
        $temp_image = $_FILES['photoshoot_image']['tmp_name'];
        $image_type = $_FILES['photoshoot_image']['type'];

        // Check if the uploaded file is an image
        if (substr($image_type, 0, 5) == "image") {
            
            // Read the image file
            $img_data = file_get_contents($temp_image);

            // Prepare and execute the SQL query to insert the image into the database
            $stmt = $conn->prepare("INSERT INTO photoshoot (image_data, image_name) VALUES (?, ?)");
            $stmt->bind_param("ss", $img_data, $image);
            $stmt->execute();

            // Check if the query was successful
            if ($stmt->affected_rows > 0) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading image.";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Please upload a valid image file.";
        }

        // Close the database connection
        $conn->close();
    }
    ?>