<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // For simplicity, in a real application, you should use a database to store and verify user credentials.
        // Here, we are just doing basic authentication.
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simulate user authentication logic
        if ($username === 'user' && $password === 'password') {
            echo 'Login successful';
        } else {
            echo 'Login failed';
        }
    } else {
        echo 'Invalid input';
    }
}
?>

