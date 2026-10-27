<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash password
$hashed_password = password_hash(
    $password,
    PASSWORD_DEFAULT
);

// Check whether email already exists
$check = $conn->prepare(
    "SELECT id FROM users WHERE email = ?"
);

$check->bind_param("s", $email);

$check->execute();

$result = $check->get_result();

if ($result->num_rows > 0) {

    echo "<script>
            alert('Email already registered.');
            window.location='register.php';
          </script>";

    exit;
}


// Insert user
$stmt = $conn->prepare(
    "INSERT INTO users (name, email, password)
     VALUES (?, ?, ?)"
);

$stmt->bind_param(
    "sss",
    $name,
    $email,
    $hashed_password
);


if ($stmt->execute()) {

    echo "<script>
            alert('Registration successful!');
            window.location='login.php';
          </script>";

} else {

    echo "Registration failed.";

}

$stmt->close();
$conn->close();

?>