<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Dashboard</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<nav>

    <div class="logo">
        CS Department
    </div>

    <ul>

        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>

    </ul>

</nav>


<div class="dashboard">

    <div class="dashboard-card">

        <h1>
            Welcome,
            <?php echo htmlspecialchars($_SESSION['user_name']); ?>!
        </h1>

        <p style="margin-top:20px;">
            You have successfully logged into the
            Department website.
        </p>

        <br>

        <a href="index.php" class="btn">
            Back to Home
        </a>

    </div>

</div>



</body>

</html>