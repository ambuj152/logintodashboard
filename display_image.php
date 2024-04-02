<?php
include("connection.php");

// Retrieve the latest filename and filepath from the database
$query = "SELECT * FROM files ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if ($result > 0) {
    $row = mysqli_fetch_assoc($result);
    $filename = $row['filename'];
    $filepath = $row['filepath'];

    // Output the HTML <img> tag with the dynamic src attribute
    echo '<img src="' . $filepath . '" alt="' . $filename . '">';
} else {
    echo "No image found.";
}
?>
