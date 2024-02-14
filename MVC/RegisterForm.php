<!-- 3-c. Write a server-side POST request-handler to register a smartphone. -->
<?php
// Assuming a database connection is established elsewhere
// Include necessary files or configurations here

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $manufacturer = $_POST["manufacturer"];
    $model = $_POST["model"];
    $dataMemory = $_POST["data_memory"];
    $yearManufacture = $_POST["year_manufacture"];
    $osVersion = $_POST["os_version"];
    $bodyColor = $_POST["body_color"];
    $price = $_POST["price"];

    // Perform any additional validation here if needed

    // Insert the smartphone data into the database
    $sql = "INSERT INTO smartphones (manufacturer, model, data_memory, year_manufacture, os_version, body_color, price) 
            VALUES ('$manufacturer', '$model', '$dataMemory', '$yearManufacture', '$osVersion', '$bodyColor', '$price')";
    
    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Smartphone registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If the request is not a POST request, handle accordingly (e.g., display an error message)
    echo "Invalid request method!";
}
?>
