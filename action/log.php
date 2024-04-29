<?php

include 'config.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ../home");
}

// Define a User class
class User {
    public $id;
    public $name;
    public $email;
    public $password;
  
    // Constructor to initialize user object
    public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = password_hash($password, PASSWORD_DEFAULT); // Hash password securely
    }
  
    // Method to save user to database
    public function save($conn) {
      $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sss", $this->name, $this->email, $this->password);
      $stmt->execute();
      $this->id = $conn->insert_id; // Get the newly inserted user ID
    }
  }
  
  
  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
  
    // Validate user input (implement your own validation logic)
    if (empty($name) || empty($email) || empty($password)) {
      $error = "Please fill in all required fields.";
    } else {
      // Check if email already exists (implement logic here)
      $sql = "SELECT email FROM users WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
        $error = "Email already exists.";
      } else {
        // Create a new User object and save to database
        $user = new User($name, $email, $password);
        $user->save($conn);
  
        // Log successful signup to log.php (implement your logging logic)
        // $log_message = "New user registered: " . $user->email . PHP_EOL;
        // file_put_contents("log.php", $log_message, FILE_APPEND);
  
        // Redirect to login page after successful signup
        $_SESSION['username'] = $user->email; // Set username in session
        header("Location: home");
        exit();
      }
    }
  }
  
  ?>
