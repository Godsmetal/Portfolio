<!DOCTYPE HTML>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mason Santora Portfolio</title>
        <link rel='stylesheet' type='text/css' href='style/css/landing.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body id='landingPage'>
    
        <?php
            //Load in navigation bar
            include 'views/navigation.php';
        ?>
        
        <!-- Main Content -->
        <div class='container'>
            <h1><span>Hi,</span><span>I'm Mason, your</span><span>friendly neighborhood</span><span>programmer</span></h1>
            <h2>
                <span class='typer' id='main' data-words='Full Stack Developer, Software Engineer, System Integration Tester, Web Application Developer, Project Manager'  data-colors='#E6E6E6' data-delay="100" data-deleteDelay="1000"></span>
                <span class='cursor' data-owner='main'></span>
            </h2>
            
            <form method='get' action='assets/mason-santora-resume.pdf' target='_blank'>
                <button>DOWNLOAD RESUME</button>
            </form>
            
            
            <div class='overlay'><img></div>
        </div>
        
    </body>
</html>

<!-- Script for auto typer -->
<script src='js/typer.js'></script>