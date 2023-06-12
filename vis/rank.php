<?php
// Get the username from the URL parameter
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Make a request to the API or database to retrieve the user's rank
    // Replace this code with your actual logic to fetch the rank data
    $rank = getUserRank($username);

    // Output the rank
    echo "Username: $username<br>";
    echo "Rank: $rank";
} else {
    echo "Username parameter is missing.";
}

// Function to retrieve the user's rank
function getUserRank($username) {
    // Replace this code with your actual logic to fetch the rank data
    // For this example, we'll return a static rank based on the username
    if ($username === "admin") {
        return "admin";
    } else {
        return "user";
    }
}
?>

