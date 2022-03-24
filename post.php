<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name ='description' contents='Recipe Library'>
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
                    echo '<a class="btn btn-outline-success" type="button">+Create Post</a>';
                    echo  '<a class="btn btn-sm btn-outline-secondary" type="button" href="logout.php">Log Out</a>';    
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
        <form action="UserPost.php" method="POST">
            <link rel="stylesheet" href="post.css">
            <div class="container">
                <h1>Create Post</h1>
                <p>Fill out the details of your recipe!</p>
                <hr>
                <label for="dish"><b>Name of Dish</b></label><br>
                <input type="text" placeholder="Enter Dish Name" name="dish" id="dish" required>
                <br>
                <label for="ingred"><b>Ingredients</b></label>
                <br>
                <textarea cols="54" rows="5" placeholder="Enter Ingredients" name="ingred" id="ingred" required></textarea>
                <br>
                <label for="steps"><b>Steps</b></label><br>
                <textarea cols="54" rows="5" placeholder="Enter Steps" name="steps" id="steps" required></textarea>
                <hr>
                <button type="submit" class="postbtn">Post</button>
            </div>
        </form>
        </section>

    </body>
</html>