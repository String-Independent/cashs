<?php
// Start or resume the session
session_start();

// Check if the user clicked the logout button
if (isset($_POST['logout'])) {
    // Destroy all session data
    session_destroy();
    // Redirect to the login page
    header("Location: login.html");
    exit();
}


// Proceed with your login logic here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $schoolid = $_POST['schoolid'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'auchiefs');
    if ($conn->connect_error) {
        echo "Connection Failed: " . $conn->connect_error;
        exit();
    } else {
        // Check if the user exists
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE schoolid = ?");
        $stmt->bind_param("s", $schoolid);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // User found, verify password
            $row = $result->fetch_assoc();
            if ($password === $row['password']) {
                // Password is correct, set up the session
                $_SESSION['schoolid'] = $schoolid;
                echo "Login successful";
                exit();
            } else {
                echo "Invalid password";
                exit();
            }
        } else {
            echo "User not found";
            exit();
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
