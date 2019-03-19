<!DOCTYPE HTML>

<html>
    <head>
        <title>Mason Santora Portfolio</title>
        <link rel='stylesheet' type='text/css' href='style/css/landing.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body id='landingPage'>
    
        <!-- Navigation Bar -->
        <div class='sidenav'>
            <!-- Upper Navigation -->
            <div class='upperNav'>
                <a href='index.php'><i class="fas fa-home"></i></a>
                <a href='#'><i class="fas fa-user-circle"></i></a>
                <a href='#'><i class="fas fa-project-diagram"></i></a>
            </div>
            
            <!-- Lower Navigation -->
            <div class='lowerNav'>
                <a href='#'><i class="fas fa-envelope"></i></a>
                <a href='#'><i class="fab fa-linkedin-in"></i></a>
                <a href='#'><i class="fab fa-github"></i></a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class='container'>
            <h1><span>Hi,</span><span>I'm Mason, your</span><span>friendly neighborhood</span><span>programmer</span></h1>
            <h2>
                <span class='typer' id='main' data-words='Full Stack Developer, Software Engineer, System Integration Tester, Web Application Developer, Project Manager'  data-colors='#E6E6E6' data-delay="100" data-deleteDelay="1000"></span>
                <span class='cursor' data-owner='main'></span>
            </h2>
            
            <button>CONTACT ME</button>
            
            <div class='overlay'><img></div>
        </div>
        
        
    </body>
    <!-- Script for auto typer -->
    <script src='js/typer.js'></script>
</html>