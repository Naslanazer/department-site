<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js"></script>

</head>

<body>

<nav>

    <div class="logo">
        CS Department
    </div>

    <ul>

        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="register.php">Register</a></li>

    </ul>

</nav>


<div class="form-container">

    <h2>Login</h2>

    <form
        action="process_login.php"
        method="POST"
        onsubmit="return validateLogin();"
    >

        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                name="email"
                id="email"
                placeholder="Enter your email"
                required
            >

        </div>


        <div class="form-group">

            <label>Password</label>

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter your password"
                required
            >

        </div>


        <button type="submit">
            Login
        </button>

    </form>

    <p style="text-align:center; margin-top:15px;">
        Don't have an account?
        <a href="register.php">Register</a>
    </p>

</div>



</body>

</html>