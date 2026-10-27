<!DOCTYPE html>
<html>

<head>

    <title>Registration</title>

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
        <li><a href="login.php">Login</a></li>

    </ul>

</nav>


<div class="form-container">

    <h2>Create Account</h2>

    <form
        action="process_register.php"
        method="POST"
        onsubmit="return validateRegister();"
    >

        <div class="form-group">

            <label>Name</label>

            <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter your name"
                required
            >

        </div>


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
                placeholder="Enter password"
                required
            >

        </div>


        <div class="form-group">

            <label>Confirm Password</label>

            <input
                type="password"
                id="confirm_password"
                placeholder="Confirm password"
                required
            >

        </div>


        <button type="submit">
            Register
        </button>

    </form>

    <p style="text-align:center; margin-top:15px;">
        Already have an account?
        <a href="login.php">Login</a>
    </p>

</div>


</body>

</html> 