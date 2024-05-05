<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both title and content are set
    if (isset($_POST["title"]) && isset($_POST["content"])) {
        // Retrieve the submitted data
        $title = $_POST["title"];
        $content = $_POST["content"];
        
        // You can perform further validation or processing here
        
        // For demonstration purposes, let's simply display the submitted data
        echo "<h2>Submitted Post:</h2>";
        echo "<p><strong>Title:</strong> $title</p>";
        echo "<p><strong>Content:</strong> $content</p>";
    } else {
        // If either title or content is not set, display an error message
        echo "<p>Error: Please fill in both title and content fields.</p>";
    }
} else {
    // If the form is not submitted, redirect the user to the form page
    header("Location: post.html");
    exit();
}
?>
