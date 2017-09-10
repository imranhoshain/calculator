<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Spy Chat</title>
    <title>PHP Programming</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="style.css" rel="stylesheet">
    <link type="text/css" href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-top">
                <div class="header-top-left">
                    <?php echo "<p> Today Is: ".date("d-F-Y")."</p>";
                          echo "<p> Today Is: ".date("l")."</p>";
                    ?>
                </div>
                <div class="header-top-right">
                    <?php 
                        date_default_timezone_set('Asia/Dhaka');
                    echo "<p> Time Zone Location: ".date_default_timezone_get()."</p>";
                    echo "<p> Now Time Is: ".date("h-i-sa")."</p>"; 
                     ?>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="mainmenu">
                        <ul>
                            <li><a href="">Profile</a></li>
                            <li><a href="">Home</a></li>                            
                            <li><a href="">Setting</a>
                                <ul>
                                    <li><a href="">Create a page</a></li>
                                    <li><a href="">manage a page</a></li>
                                    <li><a href="">Create a Group</a></li>
                                    <li><a href="">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>