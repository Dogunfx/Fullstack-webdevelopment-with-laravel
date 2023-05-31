<!DOCTYPE html>
<html>

<head>
    <title>Home - IDeaL Exams Centre</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

</head>



<body>
    <header>
        <div class="brand">
            <img src="images/logo.png" alt="logo">
            <h1>IDeaL Exams Centre </h1>
        </div>
        <nav>
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="/about">About Us</a> </li>
                <li> <a href="/contact">Contact Us</a> </li>
                <li> <a href="/test-route">TRoute</a> </li>
            </ul>
        </nav>
        <div class="register">
            <a href="/register">Register</a>
        </div>
    </header>
    <hr>


    @yield('main-section')

    <footer>
        <p> &copy; Copyright IDeaL IT Exams Centre</p>
    </footer>

</body>

</html>