<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../../css/login.css">
        <?php include("../fragments/generic_head_refs.php"); ?>
        <title> Log in</title>
    </head>

    <body>
        <div id="outer_group">
            <div class="centered_items" id="title">
                <img class="centered_items" alt="application_logo" src="../../images/network_icon.ico">
                <h2>Small Scale Network Analysis</h2>
            </div>

            <div class="centered_items" id="login_box">
                <form method="POST" action="../processing_scripts/handle_login.php">
                    <div class="login_element">
                        <h4>Username</h4> <input name="username" type="text"/>
                    </div>
                    <div class="login_element">
                        <h4>Password</h4> <input name="password" type="password"/>
                    </div>

                    <input class="centered_items" id="submit_button" type="submit" style="top:180px;">
                    <a class="centered_items" id="submit_button" href="register.php" style="top:250px;">Register</a>
                </form>
            </div>
        </div>
    </body>


</html>
