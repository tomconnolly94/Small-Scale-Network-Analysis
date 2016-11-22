<html>

    <head>
        <title>Home</title>
        <!-- css references -->
        <link rel="stylesheet" type="text/css" href="../../css/home.css">
        <!-- include references made available to all pages -->
        <?php include("../fragments/generic_head_refs.php"); ?>
    </head>

    <body>
        <?php
            include("../fragments/check_logged_in.php");
        ?>
        <?php
            include("../fragments/generic_page_header.php");
        ?>

        <div class="centered_items" style="width:70%">
            <ol>
                <a href="mapping.php"><li style="background-image:url(../../images/network-img.png)"><div class="button">Network Mapping</div></li></a>
                <a href=""><li style="background-image:url(../../images/attack.jpg)"><div class="button">Attacks</div></li></a>
                <a href=""><li style="background-image:url(../../images/terminal.jpg)"><div class="button">Terminal access</div></li></a>
                <a href=""><li style="background-image:url(../../images/Vulnerability.png)"><div class="button">Vulnerabilities</div></li></a>
            </ol>
        </div>
        <?php include("../fragments/footer.php"); ?>
    </body>
</html>