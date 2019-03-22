<!DOCTYPE HTML>

<html>
    <head>
        <title>Mason Santora Portfolio</title>
        <link rel='stylesheet' type='text/css' href='../style/css/contact.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/main.js"></script>
    </head>
    
    <body id='contactPage'>
    
        <?php
            //Load in navigation bar
            include 'navigation.php';
        ?>
        
        <!-- Main Content -->
        <div class='container'>
            <h1>Contact me</h1>
            <h2>If you would like to reach out to me for further questions, don't hesitate to reach me through the form below. Or call me at (267) 371 0626</h2>
            
            
            <form id='contactForm'>
                <input type='text' name='name' placeholder='Name' class='shadow'>
                <input type='text' name='email' placeholder='Email' class='shadow'>
                <input type='text' name='subject' placeholder='Subject' class='shadow'>
                <textarea name='message' class='shadow' placeholder="Message" maxlength="600"></textarea>

                <input type='submit' value='Send' class='submit'>
            </form>
            
            <div class='overlay'><img></div>
        </div>
        
    </body>
</html>