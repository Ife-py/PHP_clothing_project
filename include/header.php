<html>
    <head>
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="/PHP_1/css/style.css" type="text/css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
        <link rel="shortcut icon" href="/PHP_1/favicon.ico">
    </head>
    <body>

        <div class="header"> 

            <div class="wrapper">

                <h1 class="branding-title"><a href="/PHP_1/">Shirts 4 Ife.py</a></h1>

                <ul class="nav">
                    <li class="shirts <?php if ($section=="shirts"){echo "on";} ?>"><a href="/PHP_1/shirts/">Shirts</a></li>
                    <li class="contact <?php if($section =="contact"){echo"on";} ?>"><a href="/PHP_1/contact/">Contact</a></li>
                    <li class="search <?php if($section =="contact"){echo"on";} ?>"><a href="/PHP_1/search/">Search</a></li>
                    <li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
                </ul>

            </div>

        </div>

        <div id="content">