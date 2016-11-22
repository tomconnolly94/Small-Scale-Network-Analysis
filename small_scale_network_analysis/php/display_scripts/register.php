<html>

    <head>
        <title>Register</title>
        <?php include("../fragments/generic_head_refs.php"); ?>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
    </head>

    <body>
        <div id="outer_group">
            <div class="centered_items" id="title">
                <img class="centered_items" alt="application_logo" src="../../images/network_icon.ico">
                <h2>Small Scale Network Analysis</h2>
            </div>

            <div class="centered_items" id="login_box">
                <form method="POST" action="../processing_scripts/handle_register.php">
                    <div class="login_element">
                        <h4>Name</h4> <input name="name" type="text"/>
                    </div>
                    <div class="login_element">
                        <h4>Username</h4> <input name="username" type="text"/>
                    </div>
                    <div class="login_element">
                        <h4>Email</h4> <input name="email" type="text"/>
                    </div>
                    <div class="login_element">
                        <h4>Password</h4> <input name="password" type="password"/>
                    </div>
                    <div class="login_element">
                        <h4>Password again...</h4> <input name="password" type="password"/>
                    </div>
                    <input class="centered_items" id="submit_button" type="submit" style="top:310px;">
                    <a class="centered_items" id="submit_button" href="login.php" style="top:370px;">Log in</a>
                </form>
            </div>
        </div>
    </body>
    
</html>