<?php 
session_start();
?>
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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            </ul>
            <?php 
                if (isset($_SESSION['email'])){
                    echo '<a class="btn btn-outline-success" type="button" href="post.php">+Create Post</a>';
                    echo '<a class="btn btn-sm btn-outline-secondary" type="button" href="logout.php">Log Out</a>'; 
                    echo '<a class="btn btn-sm btn-outline-secondary" type="button" href="Edit.php">Edit Profile</a>';   
                } else {
                   echo ' <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-sm btn-outline-secondary" type="button" href="login.php">Log In</a>
                    <a class="btn btn-sm btn-outline-secondary" type="button" href="register.php">Sign Up</a>
                    </form>';
                }
            ?>
            
        </div>
        </nav>

      
    <section>
        <form action="UserEdit.php" method="POST">
            <link rel="stylesheet" href="style.css">
            <div class="container">
                <h1>Edit Username</h1>
                <p>Please fill in this form to edit User Name.</p>
                <hr>

                <label for="name"><b>User Name</b></label>
                <input type="text" placeholder="Enter Name" name="editname" id="editname" required>
                <button type="submit" class="registerbtn">Update</button>
            </div>
        </form>

    </section>


</body>

</html>