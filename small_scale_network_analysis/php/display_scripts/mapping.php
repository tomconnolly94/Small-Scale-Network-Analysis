<html>

<head>
    <title>Network Mapping</title>
    <!-- javascript references -->
    <script src="../../dependencies/pixi.min.js"></script>
    <script src="../../dependencies/jquery-3.1.1.min.js"></script>
    <script src="../../javascript/pixi/mapping/init.js"></script>
    <script src="../../javascript/pixi/mapping/animate.js"></script>
    <script src="../../javascript/pixi/mapping/mapping_gen_purp_funcs.js"></script>
    <script src="../../javascript/pixi/mapping/click_listeners.js"></script>
    <script src="../../javascript/pixi/master_gen_purp_funcs.js"></script>
    <!--css references -->
    <link rel="stylesheet" type="text/css" href="../../css/mapping.css">
    <!-- include references made available to all pages -->
    <?php include("../fragments/generic_head_refs.php"); ?>
</head>

<body>
    <!--include fragment scripts -->
    <?php
        include("../fragments/check_logged_in.php");
    ?>
    <?php
        include("../fragments/generic_page_header.php");
    ?>
    <!-- main body of content -->
    <div id="container">
        <h3 id="title" class="centered_items"> Network Mapping </h3>
        <div id="txtHint"> </div>
    </div>
    <div id="javascript">
        <script>
            //script to init global vars
            var stage; //master container for pixi scene
            var renderer; //pixi renderer
            var nodes = []; //collection of node graphics
            var data = []; //collection of data received from the server
            var lines = new Array(); //collection of lines connecting nodes
            var centre_node; //centre node of the scene
            var new_data = false; //boolean to indicate that new data has arrived at the client
            var new_graphics = false; //boolean to indicate if graphics properties have changed and need redrawing
            var use_server_events = false; //boolean to indicate which type of data transmission will be used
            
            var node_dist_scale = 200; //scaling factor for distance of nodes from centre
            var segment_deg;
            var first_run = true;
            //star the pixi scene
            PIXI.loader.add("../../images/attack.jpg").load(init);
        </script>
    </div>
    <!--include footer -->
    <?php include("../fragments/footer.php"); ?>
</body>

</html>