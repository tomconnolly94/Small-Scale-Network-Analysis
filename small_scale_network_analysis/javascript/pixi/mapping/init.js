function init() {
    //init renderer
    renderer = PIXI.autoDetectRenderer(window.innerWidth*0.8, window.innerHeight*0.8,{backgroundColor : 0x000000});
    //init a master container object
    stage = new PIXI.Container();
    //access the dom element to attach the renderer to
    var scene_container = document.getElementById("container");
    //add class to renderer.view to allow styling later
    renderer.view.className = "centered_items";
    //bind the renderer to the dom element
    scene_container.appendChild( renderer.view );
    
    //if client browser cannot surpport Server events, use http requests (IE compatibility)
    if (typeof(EventSource) !== "undefined") {
        var source = new EventSource('../../php/processing_scripts/ajax_response/send_server_event.php');
        
        source.onmessage = function(event) {
            new_data = true;
            data = JSON.parse(event.data);        
        }
        use_server_event = true;
    } 
    else {
        // Resort to xhr polling
        
         //make http request to get network data
        var xhttp = new XMLHttpRequest();
    
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                data = JSON.parse(this.response);
            }
        };

        //config http and send 
        xhttp.open("GET", "../../php/processing_scripts/ajax_response/get_mapping_data.php", true);
        xhttp.send();
        
        use_server_event = false;
    }
    //for(var i )
    //    create_host_node(segment_deg, i, data, centre_node, "0xFFFFFF");

    centre_node = new PIXI.Graphics();
    centre_node.beginFill(0xFFFFFF);
    centre_node.drawCircle(renderer.view.width/2, renderer.view.height/2, 20);
    stage.addChild(centre_node);

    animate();    
}