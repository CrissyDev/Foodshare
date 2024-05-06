<?php
include('includes/db_connect.php');
include('includes/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare data for insertion
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pledge_amount = $_POST['pledge_amount'];
    $pickup_location = $_POST['pickup_location'];

    // Prepare SQL statement
    $sql = "INSERT INTO Donors (name, email, phone, address, pledge_amount, pickup_location)
            VALUES ('$name', '$email', '$phone', '$address', '$pledge_amount', '$pickup_location')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <h2>Donor Registration Form</h2>
    <div class="contact-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br>
        
        <label for="pledge_amount">Pledge Amount:</label><br>
        <input type="number" id="pledge_amount" name="pledge_amount" step="0.01" required><br>
        
        <label for="pickup_location">Pickup Location:</label><br>
        <input type="text" id="pickup_location" name="pickup_location" required><br>
        
        <input type="submit" value="Register">
    </form>
    </div>
</body>
</html>
