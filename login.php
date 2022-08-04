<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="img/png" href="img/logo2.png">
    <script src="https://kit.fontawesome.com/d2a04fa078.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="max-w-full relative container mx-auto py-4 md:py-4 px-3 bg-sapphireBlue">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="mx-auto">
                <img src="img/logo2.png" class="h-10 md:h-20" alt="" />
            </div>
        </div>
    </div>

    <section id="lgin" class="bg-platinum">
        <h1 class="text-4xl md:text-5xl text-center py-2 px-8 font-bold">LOG IN</h1>
        <h2 class="text-3xl md:text-4xl text-center py-4 px-8 font-bold">Please enter your login details</h2>
        <!-- Flex Container -->
        <div class="container flex flex-col items-center justify-between px-6 py-4 mx-auto space-y-12 md:py-4 md:space-y-0">
            <form id="lgin-frm" action="account2.php" method="post">
                <div class="container flex flex-col mb-2 space-y-2">
                    <div class="flex-col items-center justify-between px-6 py-2 mx-auto space-y-2">
                        <label for="" class="block font-bold mx-auto">Username/Matriculation Number</label>
                        <input type="email"  name="username" id="" placeholder="Username">
                    </div>
                    <div class="flex-col items-center justify-between px-6 py-2 mx-auto space-y-2">
                    <label for="" class="block font-bold">Password</label>
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <div class="flex justify-center">
                        <button id="lgin-btn" class="p-4 px-16 text-white bg-royalBlue rounded-lg baseline hover:bg-lightSkyBlue sm:hover-none focus:none outline:none text-md text-left font-bold md:mx-auto md:block">Log In</button>
                    </div>
                </div>      
                <!-- <a href="#" id="cp_link" class="text-sapphireBlue text-center mx-60">Forgot your password?</a> -->
            </form>
        </div>
    </section>
    <footer class="bg-veryDarkBlue">
        <!-- Flex container -->
        <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <!-- Logo and social links container -->
            <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx-auto my-6 text-center text-white md:hidden">Copyright &copy; Godfrey Okoye University 2022, All Rights Reserved</div>
                <!-- Logo -->
                <div>
                    <img src="img/logo-white.png" alt="" class="h-20 md:mt-10">
                </div>
                <!-- Social lInks container -->
                <div class="flex justify-center space-x-4">
                    <!-- Link 1 -->
                    <a href="www.facebook.com"><img src="img/icon-facebook.svg" alt="" class="h-8"></a>
                    <!-- Link 2 -->
                    <a href="www.youtube.com"><img src="img/icon-youtube.svg" alt="" class="h-8"></a>
                    <!-- Link 3 -->
                    <a href="www.twitter.com"><img src="img/icon-twitter.svg" alt="" class="h-8"></a>
                    <!-- Link 4 -->
                    <a href="www.pinterest.com"><img src="img/icon-pinterest.svg" alt="" class="h-8"></a>
                    <!-- Link 5 -->
                    <a href="www.instagram.com"><img src="img/icon-instagram.svg" alt="" class="h-8"></a>
                </div>
            </div>
            <!-- List container -->
            <div class="flex justify-around space-x-32" id="nav2">
                <div class="flex flex-col space-y-3 text-white">
                    <a href="account.html" class="hover:text-skyBlue font-bold">Your Profile</a>
                    <a href="index.html" class="hover:text-skyBlue font-bold">Home</a>
                    <a href="events.html" class="hover:text-skyBlue font-bold">Events</a>
                    <a href="news.html" class="hover:text-skyBlue font-bold">News</a>
                    <a href="about.html" class="hover:text-skyBlue font-bold">About</a>
                </div>
                <div class="flex flex-col space-y-3 text-white">
                    <a href="archive.html" class="hover:text-skyBlue font-bold">Archive</a>
                    <a href="courses.html" class="hover:text-skyBlue font-bold">Courses</a>
                    <a href="forum.html" class="hover:text-skyBlue font-bold">Forums</a>
                    <a href="faq.html" class="hover:text-skyBlue font-bold">FAQs</a>
                </div>
            </div>
            <!-- Input Container -->
            <div class="flex flex-col justify-between">
                <form action="">
                    <div class="flex space-x-3">
                        <input type="text" name="" id="" class="flex-1 w-1 px-4 rounded-full focus:outline-none" placeholder="Send us an email"> <button class="px-6 py-2 text-white rounded-full font-bold bg-royalBlue hover:bg-lightSkyBlue focus:outline:none">Send</button>
                    </div>
                </form>
                <div class="hidden text-white md:block"> Contact us on the following lines:</div>
                <div class="hidden text-white md:block md:mt-1/2">
                    <ul id="tel" class="ml-5">
                        <li>09134273215</li>
                        <li>09121963049</li>
                        <li>07061756730</li>
                    </ul>
                </div>
                <div class="hidden text-white md:block">&copy; Godfrey Okoye University 2022, All Rights Reserved</div>
            </div>
        </div>
    </footer>
</body>

</html>