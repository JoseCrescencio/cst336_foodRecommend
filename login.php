<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <h1>Login</h1>
        
        
        <div class="jumbotron">
            <h2>Credentials required before submiting form.</h2>
            <p>You can log in using username and password <strong>admin2</strong> and <strong>password</strong>
            
            <!--Form to enter credentials-->
            <form method="POST" action="verifyUser.php">
                <input type="text" name="username" placeholder="Username"/><br />
                <input type="password" name="password" placeholder="Password"/>
                <input type="submit" name="submit" value="Login"/>
            </form>
        </div>
    </body>
</html>