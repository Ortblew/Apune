<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Apune | Create an Account </title>
        <style type="text/css">
            #u, #sc, #password, #e-mail, #DOB, #num, #small {
                margin-left:15px;
            }

            #btn1 {
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Apune</h1>
        <hr>
        <br>
        <form action="action.php" method="POST">
            <label for="username" id="u">Username:</label>
            <input type="text" id="username" name="user" maxlength="20" required size="20"><br><br>
  
            <label for="password" id="password">Password:</label>
            <input type="password" id="password" name="user_Password" maxlength="50" required size="19"><br><br>

            <label for="email" id="e-mail">Email:</label>
            <input type="email" id="email" name="email" required size="24.5"><br><br>

            <label for="phone" id="num">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required minlength="12" maxlength="12" size="16"><br>
            <small id="small">Format: 123-456-7890</small><br><br>

            <label for="security_code" id="sc">Secure Key:</label>
            <span title="This key is used for client services (unique)"><input type="text" id="code" name="security" minlength="10" maxlength="50" required size="17.5"></span><button id="btn1">Generate</button><br><br>

            <label for="DOB" id="DOB">Date of Birth</label>
            <input type="date" id="Date-of-birth" name="DOB" required size="34"><br><br>

            <input type="submit" value="Submit">

        </form>
    </body>
</html>