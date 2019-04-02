<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
        
    </head>
    <body>
        <h1>Thank you</h1>
        <p>Here is the information you have submitted:</p>
        <ol>
            <li><em>Name:    </em><?php echo $_POST['name']?></li>
            <li><em>Gender:    </em><?php echo $_POST['gender']?></li>
            <li><em>Odd/Even:    </em><?php echo $_POST['day']?></li>
            <li><em>Email:    </em><?php echo $_POST['email']?></li>
            <li><em>Subject:    </em><?php echo $_POST['subject']?></li>
            <li><em>Message:    </em><?php echo $_POST['message']?></li>
            
        </ol>
    </body>
</html>