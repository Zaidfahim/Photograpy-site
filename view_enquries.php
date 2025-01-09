<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "enquiries"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete selected entries
if (isset($_POST['delete'])) {
    if (!empty($_POST['selected_entries'])) {
        $selectedEntries = implode(",", $_POST['selected_entries']);
        $deleteSql = "DELETE FROM approval_form WHERE id IN ($selectedEntries)";
        if ($conn->query($deleteSql) === TRUE) {
            $deleteMessage = '<div style="color: green;">Selected records deleted successfully</div>';
        } else {
            $deleteMessage = '<div style="color: red;">Error deleting records: ' . $conn->error . '</div>';
        }
    } else {
        $deleteMessage = '<div style="color: red; text-align: center; margin-top: 10px;">No records selected for deletion</div>';
    }
}

// Fetch data from the database
$sql = "SELECT * FROM approval_form ORDER BY id DESC";
$result = $conn->query($sql);

// Check if data is available
if ($result->num_rows > 0) {
    $enquiries = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $enquiries = array(); // Initialize an empty array to avoid errors in the HTML section
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Enquiries - Malcolm Lismore Photography</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
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

        h2 {
            margin: 5px 0;
            margin-left: 30px; /* Add a small left margin */
            margin-top: 20px;
            color: #333;
            text-align: left; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .button-container button:hover {
            background-color: #555;
        }

        .message-container {
            text-align: center; /* Center the message */
            margin-top: 10px;
        }

        /* Adjust the width of the email section and provide more space for the message */
        td:nth-child(3),
        td:nth-child(9) {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Allow the message to wrap to a new line */
        td:nth-child(9) {
            white-space: normal;
            word-wrap: break-word;
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

    <h2>Enquiry Details</h2>

    <?php echo isset($deleteMessage) ? '<div class="message-container">' . $deleteMessage . '</div>' : ''; ?>

    <form method="post" action="">
        <table>
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Event</th>
                    <th>Package</th>
                    <th>Location</th>
                    <th>Event Date</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $enquiry) : ?>
                    <tr>
                        <td><input type="checkbox" name="selected_entries[]" value="<?php echo $enquiry['id']; ?>"></td>
                        <td><?php echo $enquiry['name']; ?></td>
                        <td><?php echo $enquiry['email']; ?></td>
                        <td><?php echo $enquiry['phone']; ?></td>
                        <td><?php echo $enquiry['event']; ?></td>
                        <td><?php echo $enquiry['package']; ?></td>
                        <td><?php echo $enquiry['location']; ?></td>
                        <td><?php echo $enquiry['event_date']; ?></td>
                        <td><?php echo $enquiry['message']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="button-container">
            <button type="submit" name="delete">Delete Selected</button>
        </div>
    </form>
</body>
</html>