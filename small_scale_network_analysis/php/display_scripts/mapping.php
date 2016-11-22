<html>

    <head>
        <title>Network Mapping</title>
        <!-- javascript references -->
        <script src="../../dependencies/three.min.js"></script>
        <script src="../../dependencies/jquery-3.1.1.min.js"></script>
        <script src="../../dependencies/controls_lib/OrbitControls.js"></script>
        <script src="../../javascript/mapping/init.js"></script>
        <script src="../../javascript/mapping/animate.js"></script>
        <script src="../../javascript/mapping/data_request.js"></script>
        <script src="../../javascript/general_purpose_funcs.js"></script>
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
                //create globals for 3js scene
                var scene, camera, renderer;
                this.master_data;

                get_data();
                
                document.onload = animate(); 
            </script>
        </div>
        
        <!--include footer -->
        <?php include("../fragments/footer.php"); ?>
        
    </body>


</html>