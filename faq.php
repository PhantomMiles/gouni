<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="image" type="logo" href="logo.jpg">
    <script src="https://kit.fontawesome.com/d2a04fa078.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="top"> 
        <header>
            <div class="logo">
                <a href="index.php"><img src="logo.jpg" alt="logo"></a>
            </div>
            <nav class="first" id="nav1">
                <ul>
                    <li><a href="account2.php">User</a></li>
                    <li><a href="#" id="loginBtn">Log In</a></li>
                </ul>
                
            </nav>
            <nav class="main">
                <ul>
                    <li><a href="#"><i class="fa fa-search" id="searchBtn"></i></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About GOUNI</a></li>
                    <li><a href="forum.php">Forums</a></li>
                    <li><a href="faq.php" class="current">FAQ</a></li>
                    <li><a href="gallery.php">Our Gallery</a></li>
                    <li><a href="materials.php">Materials</a></li>
                    <li><a href="account.php">My Academic Record</a></li>
                    <!-- <li><a href="alumni.php">Alumni</a></li>
                    <li><a href="#"><i class="fa fa-tty"></i>+2349090786066</a></li> -->
                </ul>
                <div id="s_Modal" class="smodal">

                    <!--  Modal content -->
                    <div class="smodal-content">
                        <span class="close">&times;</span>
                        <input type="search" placeholder="Search" name="" id="searchBar" style="width: 700px; height: 35px; outline: none; border: none; border-radius: 50px; margin-top: 10px; margin-left: -40px; padding: 20px; font-family: tajawal; font-size: 17px; display: none;">
                    </div>
                </div>
            </nav>
            <div id="myModal" class="modal">

                <!--  Modal content -->
                <div class="modal-content">
                    <span class="close" data-close>&times;</span>
                    <form action="account2.php" method="post">
                        <table>
                            <tr>
                                <th><img src="logo.jpg" style="width:210px; height: 208px; padding: 30px; margin-top: -50px; border-radius: 100%;" alt=""></th>
                            </tr>
                            <tr>  
                                <th style="font-family: proxima-nova;">Username</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="username" id="" placeholder="Username"></td>
                            </tr>
                            <tr>  
                                <th style="font-family: proxima-nova;">Password</th>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" id="" placeholder="Password"></td>
                            </tr>
                            
                        </table>
                        <input type="submit" value="Login" id="subBtn">
                        <a href="#" class="cp_link" style="display: block; margin: 20px 0 20px 240px; font-family: proxima-nova; text-decoration: none; color: rgb(0, 132, 255); transition: ease-in 0.2s;">Forgot your password?</a>
                        <!-- 
                        
                            -->
                    </form>
                </div>
            
            </div>
        </header>  
        <h1>FAQs</h1>
    </div>
    <div class="box">
        <i class="fa fa-comment"></i>
    </div>

    <section class="questions">
        <div class="container">
            <h1>Q<sub>1</sub>: How long can a particular programme take?</h1>
            <h2>A<sub>1</sub>: All programmes in Godfrey Okoye University, with the exception of law, take four years.</h2>
            <hr style="background-color: rgb(85, 139, 255);">
            <h1>Q<sub>2</sub>: Are there frequent strikes in GOU?</h1>
            <h2>A<sub>2</sub>: There are no strikes in GOU.</h2>
            <hr style="background-color: rgb(85, 139, 255);">
            <h1>Q<sub>3</sub>: In the event of a lockdown, are there measures in place to make sure that students continue learning?</h1>
            <h2>A<sub>3</sub>: There is an online learning platform ready for both staff and students to continue lectures.</h2>
            <hr style="background-color: rgb(85, 139, 255);">
            <h1>Q<sub>4</sub>: Are the students safe in GOU?</h1>
            <h2>A<sub>4</sub>: Yes, they are.</h2>
            <hr style="background-color: rgb(85, 139, 255);">
            <h1>Q<sub>5</sub>: Are there student exchange programmes?</h1>
            <h2>A<sub>5</sub>: Yes. GOU partakes in student exchange programmes with Austria, Germany and Sweden.</h2>
            <hr style="background-color: rgb(85, 139, 255);">
            <!-- <h1>Q<sub>1</sub>: How long can a particular programme take?</h1>
            <h2>A<sub>1</sub>: All programmes in Godfrey Okoye University, with the exception of law, take four years.</h2>
            <hr style="background-color: rgb(85, 139, 255);"> -->
        </div>
    </section>
    <footer>
        <small>&copy; 2020 Godfrey Okoye University</small>
    </footer>
    <script src="js/search.js"></script>
    <script src="js/login.js"></script>

</body>    
</html>