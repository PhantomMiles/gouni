<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Records</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="image" type="jpg" href="logo.jpg">
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
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="gallery.php">Our Gallery</a></li>
                    <li><a href="materials.php">Materials</a></li>
                    <li><a href="account.php" class="current">My Academic Record</a></li>
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
        <h1>My Academic Records</h1>
    </div>
    <div class="box">
        <i class="fa fa-comment"></i>
    </div>

    <section class="user-details">
        <div class="user-box"><i class="fa fa-user"></i></div>
        <h2 style="font-family: proxima-nova; text-align: center; font-size: 30px;">[User Name]</h2>
        
        <div class="courses"> 
            <div class="year1"style="display: none;"> 
                <div class="gst" >
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>     
                </div>
                <div class="nas">
                    <div class="mcb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="apb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="btg">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="bch">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="sta">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phy">
                        
                    </div>
                    <div class="glm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="arc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="mss">
                    <div class="acc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="baf">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="ire">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mac">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="man">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mkt">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="psy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="pad">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="soc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                </div>
                <div class="arts">
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="hid">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mus">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phl">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="law">
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>   
                </div>
                <div class="edu">
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="sse">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="his">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bio">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="phy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bed">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                </div>
            </div>  
            <div class="year2"style="display: none;"> 
                <div class="gst" >
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>     
                </div>
                <div class="nas">
                    <div class="mcb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="apb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="btg">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="bch">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="sta">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phy">
                        
                    </div>
                    <div class="glm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="arc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="mss">
                    <div class="acc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="baf">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="ire">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mac">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="man">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mkt">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="psy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="pad">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="soc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                </div>
                <div class="arts">
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="hid">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mus">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phl">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="law">
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>   
                </div>
                <div class="edu">
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="sse">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="his">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bio">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="phy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bed">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                </div>
            </div>    
            <div class="year3"style="display: none;"> 
                <div class="gst" >
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>     
                </div>
                <div class="nas">
                    <div class="mcb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="apb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="btg">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="bch">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="sta">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phy">
                        
                    </div>
                    <div class="glm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="arc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="mss">
                    <div class="acc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="baf">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="ire">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mac">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="man">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mkt">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="psy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="pad">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="soc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                </div>
                <div class="arts">
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="hid">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mus">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phl">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="law">
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>   
                </div>
                <div class="edu">
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="sse">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="his">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bio">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="phy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bed">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                </div>
            </div>    
            <div class="year4"style="display: none;"> 
                <div class="gst" >
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>     
                </div>
                <div class="nas">
                    <div class="mcb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="apb">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="btg">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="bch">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="sta">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phy">
                        
                    </div>
                    <div class="glm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="arc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="mss">
                    <div class="acc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="baf">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="ire">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mac">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="man">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="mkt">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="psy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div> 
                    <div class="pad">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                    <div class="soc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div> 
                    </div>
                </div>
                <div class="arts">
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="hid">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="mus">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                    <div class="phl">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>
                    </div>
                </div>
                <div class="law">
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>   
                </div>
                <div class="edu">
                    <div class="eco">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="pol">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="els">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="sse">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="his">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bio">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="chm">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="phy">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="csc">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="mat">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                    <div class="bed">
                        <div class="Sem1">
                            
                        </div>
                        <div class="Sem2">
                            
                        </div>   
                    </div>
                </div>
            </div>    
            <div class="finals-law"style="display: none;"> 
                <div class="gst" >
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>     
                </div>
                <div class="law">
                    <div class="Sem1">
                            
                    </div>
                    <div class="Sem2">
                        
                    </div>   
                </div>
            </div>    
        </div>   
    </section>
    <footer>
        <small>&copy; 2020 Godfrey Okoye University</small>
    </footer>
    <script src="js/search.js"></script>
    <script src="js/login.js"></script>

</body>    
</html>