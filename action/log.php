<?php
  // Start session
  session_start();

  // Include database connection
  require_once "config.php";

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validate user input
    if (empty($email) || empty($password)) {
      $error = "Please fill in all required fields.";
    } else {
      // Check if email exists and password is correct
      $sql = "SELECT * FROM users WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
          // Password is correct, start a new session
          $_SESSION['username'] = $user['email']; // Set username in session
          header("Location: ./home"); // Redirect to home page
          exit();
        } else {
          $error = "Invalid password.";
        }
      } else {
        $error = "Email does not exist.";
      }
    }
  }
?>