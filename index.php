<!DOCTYPE html>
<html>
    <head>
        <title>Help Me Choose</title>
        
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
        <script type="text/javascript" src="indexLogic.js"></script>
    </head>
    <body>
        
        <div id='login'>
            <input type="submit" value="login" id="login_btn"/>
        </div>
        
        <h2>Let me help you choose something to eat</h2>
        
        <div class="jumbotron">
            <form id="mainForm">
                Cuisine:<br />
                <select id="cuisines"></select><br /><br />
                
                Cost:<br />
                <select id="cost">
                    <option value="1">Cheap</option>
                    <option value="2">Average</option>
                    <option value="3">Expenisve</option>
                </select><br /><br />
                
                City:<br />
                <select id="city"></select><br /><br />
                
                <input id="submit" type="submit" class="btn btn-success" value="Find restaurant"/>
            </form>
        </div>
        
        <select id="choose"></select>
        
        <div id="result"></div>
        
    </body>
</html>