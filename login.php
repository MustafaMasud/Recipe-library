<!DOCTYPE html>
<html>

<head>
    <meta name='description' contents='Recipe Library'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Recipe Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-sm btn-outline-secondary" type="button" href="login.php">Log In</a>
                <a class="btn btn-sm btn-outline-secondary" type="button" href="register.php">Sign Up</a>
            </form>
        </div>
    </nav>

    <section>
        <form action="" method="POST">
            <link rel="stylesheet" href="style.css">
            <div class="container">
                <h1>Login</h1>
                <p>Please fill in this form to login.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                <hr>
                <button type="submit" class="registerbtn">Login</button>
            </div>

            <div class="container signin">
                <p>Don't have an account? <a href="register.php">Sign up</a>.</p>
            </div>
        </form>
    </section>
</body>

</html>