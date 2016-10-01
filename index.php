<!DOCTYPE html>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/8a2d7d85ce.js"></script>

    <!-- webiste title icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./images/siteIcon.png">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Risque" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>
<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3">
                <div class="sidePanel">

                    <h1>Learners Spot</h1>
                    
                    <nav>

                        <ul class="mainMenu">

                            <li><a href="">HOME</a></li>
                            <li><a href="">RECENT</a></li>
                            <li><a href="">MOST VIEWED</a></li>
                            <li class="dropDown">
                                <a href="">CATEGORIES</a>
                                <ul class="dropDown-menu">

                                    <li><a href="">HTML</a></li>
                                    <li><a href="">CSS</a></li>
                                    <li><a href="">Bootstrap</a></li>
                                    <li><a href="">JavaScript</a></li>
                                    <li><a href="">JQuery</a></li>
                                    <li><a href="">PHP</a></li>
                                    <li><a href="">MySql</a></li>


                                </ul>
                            
                            
                            </li>
                            

                        </ul>
                    </nav>

                    <div class="panelFooter">
                        
                        <p>Read about Web Developement, Web Designing, Programming and Other Cool Stuff!!!</p>


                        <div class="hidden-xs">
                            <a href="" id="leftPadding"><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-google-plus-square"></i></a>
                            <a href=""><i class="fa fa-github-square"></i></a>
                            <a href=""><i class="fa fa-twitter-square"></i></a>
                       
                        </div>


                    </div>
                    
                </div>


            </div>

            <div class="col-md-9">

                <div class="mainPage">

                    <div class="container-fluid">
                        <div class="row">
                        
                        <div class="col-md-12">
                            <div class="header">
                                
                                <p id="intro">Learner's Spot: The Best Place for Knowledge Seekers</p>

                                <div id="searchBox" class="form-group">
                                    <input id="searchBar" type="text" class="form-control" placeholder="Search" />
                                    <i id="searchIcon" class="glyphicon glyphicon-search"></i>
                                </div>


                            </div>
                       
                        </div>
                        </div>
                    
                    </div>

                    <div class="container">


                        <div class="row">

                            <div class="col-md-8" id="allPosts">

                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "first_blogging_site";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }


                            $sql = 'SELECT title, date_time, user, content, likes FROM blog_post';
                            $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                                            echo "<div class='blogPost'>";
                                                            echo "<a href='#currentPost' class='postTitle'><h1>{$row['title']}</h1></a>";
                                                            echo "<p class='calendar fa fa-calendar'><span> {$row['date_time']}</span></p>";
                                                            echo "<p class='user fa fa-user'><span> {$row['user']}</span></p>";
                                                            echo "<br>";
                                                            echo "<hr>";
                                                            echo "<p class='content'>{$row['content']}</p>";
                                                            echo "<a href='#currentPost' class='readMore'>Read More</a>";
                                                            echo "</div>";                                         
                                                            echo "<div class='likes-comments'>";
                                                            echo "<i class='likes fa fa-thumbs-up'> <span>{$row['likes']} Likes</span></i>";
                                                            echo "<i class='comments fa fa-comments'> <span> {$row['likes']} Comments</span></i>";
                                                            echo "</div>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                                ?>

                                <a id="bottomLink" href="">Home</a>
                                <p id="subscribe">Subscribe to: <a href="">Learners Spot</a></p>
                            </div>

                            <div class="col-md-8" id="currentPost">
                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "first_blogging_site";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }


                                    $sql = 'SELECT title, date_time, user, content, likes FROM blog_post';
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                                                echo "<div class='blogPost'>";
                                                                echo "<a href='#currentPost' class='postTitle'><h1>{$row['title']}</h1></a>";
                                                                echo "<p class='calendar fa fa-calendar'><span> {$row['date_time']}</span></p>";
                                                                echo "<p class='user fa fa-user'><span> {$row['user']}</span></p>";
                                                                echo "<br>";
                                                                echo "<hr>";
                                                                echo "<p class='content'>{$row['content']}</p>";
                                                                echo "<a href='#currentPost' class='readMore'>Read More</a>";
                                                                echo "</div>";                                         
                                                                echo "<div class='likes-comments'>";
                                                                echo "<i class='likes fa fa-thumbs-up'> <span>{$row['likes']} Likes</span></i>";
                                                                echo "<i class='comments fa fa-comments'> <span> {$row['likes']} Comments</span></i>";
                                                                echo "</div>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>
                            
                            </div>

                            <div class="col-md-4 rightPanel">

                                <div id="subCon1">
                                    <p>Recent Posts<p>

                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "first_blogging_site";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }


                                    $sql = 'SELECT title, date_time, user, content, likes FROM blog_post';
                                    $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            $count = 0;
                                            while($row = $result->fetch_assoc()) {
                                                                    $shortContent = substr($row['content'],0,150);

                                                                    echo "<div class='recentPost'>";
                                                                    echo "<a href='' class='postTitle'><h1>{$row['title']}</h1></a>";
                                                                    echo "<p class='content'>$shortContent ...</p>";
                                                                    echo "<a href='' class='readMore'>Read More</a>";
                                                                    echo "<br><br>";
                                                                    echo "</div>";   

                                                                    $count++;
                                                                    if($count == 2){
                                                                        break;
                                                                    }                                      
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        $conn->close();
                                    ?>

                                </div>

                                <div id="subCon2">
                                    <p>Categories</p> 
                                    <ul>
                                        <li><a href="">HTML</a></li>
                                        <li><a href="">CSS</a></li>
                                        <li><a href="">Bootstrap</a></li>
                                        <li><a href="">JavaScript</a></li>
                                        <li><a href="">JQuery</a></li>
                                        <li><a href="">PHP</a></li>
                                        <li><a href="">MySql</a></li>
                                    </ul>

                                </div>

                                <div id="subCon3">
                                    <p>Blog Archive<p>

                                    <form action="" method="POST" class="form">
                                    
                                        <select name="blogArchive" class="form-control">
                                            <option> April 1</option>
                                            <option> April 2</option>
                                            <option> April 3</option>
                                            <option> April 4</option>
                                        </select>
                                    </form>
                                </div>

                                <div id="subCon4">
                                
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-12 footer">
                            <p>Designed &amp; Developed by <a href="">Afzal Ashraf</a> </p>
                        </div>
                        </div>                    
                    </div>


                </div>

            </div>
        </div>
    </div>



    <script src="jquery-2.2.3.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>