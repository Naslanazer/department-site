<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <title>Department of Computer Science</title>

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

        <?php if (isset($_SESSION['user_id'])) { ?>

            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>

        <?php } else { ?>

            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>

        <?php } ?>

    </ul>

</nav>


<section class="hero">

    <div class="hero-content">

        <h1>Department of Computer Science</h1>

        <p>
            Empowering students with knowledge, innovation
            and practical skills for the digital future.
        </p>

        <a href="about.php" class="btn">
            Explore Department
        </a>

    </div>

</section>


<section class="section">

    <h2>What We Offer</h2>

    <p>
        Our department provides a modern learning environment
        focused on technology, innovation and career development.
    </p>

    <div class="cards">

        <div class="card">
            <h3>Programming</h3>
            <p>
                Learn modern programming languages and
                software development techniques.
            </p>
        </div>

        <div class="card">
            <h3>Web Development</h3>
            <p>
                Build interactive and responsive websites
                using modern web technologies.
            </p>
        </div>

        <div class="card">
            <h3>Innovation</h3>
            <p>
                Develop creative solutions through projects,
                research and emerging technologies.
            </p>
        </div>

    </div>

</section>


</body>

</html>