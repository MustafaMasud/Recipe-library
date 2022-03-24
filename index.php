<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name ='description' contents='Recipe Library'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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
    
    </head>
    <body>
    <link rel="stylesheet" href="post.css">
        <div class="post-wall">
            <div id="post-list">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname="mydb";

                $conn = new mysqli($servername, $username, $password, $dbname);
                $qry = mysqli_query($conn, "SELECT * FROM listpost ORDER BY post_date DESC");
            ?>
                <div class="post-item">
                    <?php
                        while ($row = mysqli_fetch_array($qry)){

                    ?>
                    <h3 class="post_title">
                        <?php
                            echo $row['dish']
                        ?>
                    </h3>
                    <p class="post_user">
                        post by 
                        <?php echo $row['username'] ?> on 
                        <?php echo $row['post_date'];?>     
                    </p>
                    <p class="post_ingred">
                    <h5>Ingredients</h5>
                    <?php
                        echo nl2br($row['ingred']);
                    ?>
                    </p>
                    <p class="post_steps">
                    <h5>Steps</h5>
                    <?php
                        echo nl2br($row['steps']);
                    ?>
                    </p>
                    <hr>
                </div>
                <?php
                    }
                ?>
            </div>   
        </div>
    </body>
</html>