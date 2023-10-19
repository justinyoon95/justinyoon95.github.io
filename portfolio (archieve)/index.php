<!DOCTYPE HTML>
<html>

<head>
    <title>Home @ 095 - Portfolio - 19/20</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Rokkitt&display=swap" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <header>
            <h1>095 - Portfolio - 19/20</h1>
        </header>

        <nav>
            <ul>
                <li><a href="index.php">Home</a>
                    <li><a href="about.html">About</a>
                        <li><a href="interest.html">Interest</a>
                            <li><a href="cpp.html">C++</a>
                                <li><a href="java.html">Java</a>
                                    <li><a href="html.html">HTML</a>
            </ul>
        </nav>

        <main>

            <div id="content">
                <div id="left-content">
                    <h1> Welcome to my website.</h1>
                    <p>This website is about all of my work throughout the semester in <strong>Computer Programming</strong> class.</p>
                    <p>This website contains all of my work done in this class and you'll see how I've improved compared to last year which was level 1.</p>
                    <p>You'll see my glorious work of <strong>C++</strong>, <strong>Java</strong> in Processing, <strong>HTML</strong>, <strong>CSS</strong> and <strong>php.</strong></p>
                    <p>Let's get this journey started.</p>
                    
                    <?php
                    	echo "By the way, today is ";
                    	echo date('l , F jS, Y');
                    	echo " and it's ";
                    	echo date('h:i:s A');
                    ?>
                    <h1>#095</h1>
                    <h1>#DIZZYTUBE</h1>
                </div>

                <div id="right-content">
                    <video width="450" height="240" controls>
                        <source src="hacking.mp4" type="video/mp4">
                    </video>

                    <p>This is me in <strong> Computer Programming </strong> class. Video credits to Arman&trade;.
                        <p>Cameo: Nick Nadon&trade;, Eric&trade;.</p>
                </div>
            </div>

        </main>
		
        <footer>
            <p>Designed and coded by Justin Yoon aka DizzyTube.</p>
            <p>&copy; 2019-2020 DizzyTube&trade;</p>
            <p>All rights reserved.</p>
            <br>
            <p>Email:justinyoon95s2@gmail.com</p>
            <p>Instagram:@justinyoon95</p>
            <p>Snapchat:justinyoon95</p>
        </footer>

    </div>

</body>

</html>