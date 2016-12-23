function animate() {
    
    //Loop this function at 60 frames per second
    requestAnimationFrame(animate);
    
    //resize or reposition objects that should not be affected by window resizing
    renderer.resize(window.innerWidth*0.8,window.innerHeight*0.8);
    centre_node.clear();
    centre_node.beginFill(0xFFFFFF);
    centre_node.drawCircle(renderer.view.width/2, renderer.view.height/2, 20);
    
    //http request to poll the server for new information (for IE)
    if(!use_server_event){
        //make http request to get network data
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                data = JSON.parse(this.response);
                new_data = true;
            }
        };

        //config http and send 
        xhttp.open("GET", "../../php/processing_scripts/ajax_response/get_mapping_data.php", true);
        xhttp.send();
   }
    
    var segment_deg = 360/data.length;
    
    for(var i = 0; i < nodes.length; i++){
        console.log(nodes);
        moveNode(nodes[i], segment_deg, i);
    }
            
    //check if data is different
    if(new_data){
        
        for(var i = 0; i < nodes.length; i++){
            if(nodes[i] != null && nodes[i].parent != null){
                var node = nodes[i];
                node.clear();
                node.children[0].clear();
            }
        }

        for(var i = 0; i < data.length; i++){
            /*if(nodes[i] == undefined || nodes[i].colour == undefined){
                create_host_node(segment_deg, i, data, centre_node, "0xFFFFFF");
            }
            else{
                create_host_node(segment_deg, i, data, centre_node, nodes[i].colour);
            }*/
            moveNode(nodes[i], segment_deg, i);
        }
        new_data = false;
    }
    //Render the stage to see the animation
    renderer.render(stage);
}