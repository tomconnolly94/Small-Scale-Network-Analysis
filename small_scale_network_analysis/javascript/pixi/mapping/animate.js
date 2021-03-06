function animate() {
    if(data.length > 0){
                
        segment_deg = 360/data.length;
        
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

<<<<<<< HEAD
            //config http and send 
            xhttp.open("GET", "../../php/processing_scripts/ajax_response/get_mapping_data.php", true);
            xhttp.send();
        }

        //section to deal with drawing the new data as nodes
        if(new_data){
            //reset boolean
            new_data = false;
            
            //remove all old nodes 
            if(!first_run){
                //remove all the old nodes from their parents
                for(var i = 0; i < nodes.length; i++){
                        var node = nodes[i];
                        node.parent.removeChild(node);
                        node.removeChild(node.children[0]);
                        node.removeChild(node.children[1]);
                }
                //empty the array
                //nodes = new Array();
            }
            
            //create new nodes
            for(var i = 0; i < data.length; i++){
                if(nodes[i] != undefined){
                    create_host_node(segment_deg, i, data[i], centre_node, nodes[i].colour);
                }
                else{
                    create_host_node(segment_deg, i, data[i], centre_node, "0xFFFFFF");
                }
            }
            first_run = false;
        }
        
        //resize or reposition objects to account for window resizing
        renderer.resize(window.innerWidth*0.8,window.innerHeight*0.8);
        updateCentreNode();
        for(var i = 0; i < nodes.length; i++){
            if(nodes[i] != null){
                updateNode(nodes[i], segment_deg, i, node_dist_scale);
            }
=======
        //config http and send 
        xhttp.open("GET", "../../php/processing_scripts/ajax_response/get_mapping_data.php", true);
        xhttp.send();
   }
    
    var segment_deg = 360/data.length;
    
    for(var i = 0; i < nodes.length; i++){
        //console.log(nodes);
        moveNode(nodes[i], segment_deg, i);
    }
            
    //check if data is different
    if(new_data){
        
        //loop through existing nodes to find any nodes that are still in the new data set
        for(var i = 0; i < nodes.length; i++){
            var node_found = false;
            for(var j = 0; j < data.length; j++){
                var node = nodes[i];
                if(node.message == data[j].hostname){
                    node_found = true;
                    data.splice(j,1);
                }
            }
             //delete node
             if(nodes[i] != null && nodes[i].parent != null && !node_found){
                 node.clear();
                 node.children[0].clear();
             }
        }

        for(var i = 0; i < data.length; i++){
            if(nodes[i] == undefined || nodes[i].colour == undefined){
                create_host_node(segment_deg, i, data, centre_node, "0xFFFFFF");
            }
            else{
                create_host_node(segment_deg, i, data, centre_node, nodes[i].colour);
            }
            //moveNode(nodes[i], segment_deg, i);
>>>>>>> c7286733eaac0dd9637e9341c7b591f53b178936
        }
        //Render the stage to see the animation
        renderer.render(stage);
    }
    //loop animate function at 60 fps
    requestAnimationFrame(animate);
}