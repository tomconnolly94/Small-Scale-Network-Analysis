function create_host_node(segment_deg, i, result, centre_node, colour){
    
    var positions = getVector(segment_deg * i);
    var centre_position = [renderer.view.width/2, renderer.view.height/2];
    //var centre_position = [300, 300];
    
    var node = createNode(segment_deg, i, colour, positions, node_dist_scale);
    
    var message = createMessage(result.hostname);
    var node_line = createNodeLine([(positions[0]*-node_dist_scale),(positions[1]*-node_dist_scale)], node_dist_scale);
    
    node.colour = colour;
    
    nodes[i] = node;
    lines[i] = node_line;
    
    node.addChild(message);
    node.addChild(node_line);
    centre_node.addChild(node);
}

function createNode(segment_deg, i, colour, positions, node_dist_scale){
    
    var node = new PIXI.Graphics();

    node.beginFill(colour);
    node.drawCircle(0, 0, 20);
    node.position.set(renderer.view.width/2+positions[0]*node_dist_scale,renderer.view.height/2+positions[1]*node_dist_scale);
    node.interactive = true;
    
    node
        .on('mousedown', onButtonDown)
/*        .on('mouseup', onButtonUp)
        .on('mouseupoutside', onButtonUp)
        .on('touchstart', onButtonDown)
        .on('touchend', onButtonUp)
        .on('touchendoutside', onButtonUp);*/
    
    node.colour = colour;
    
    return node;
}

function createMessage(text){
    
    var style = {
        fill : '#FFFFFF',
        fontSize : 16
    };

    var message = new PIXI.Text(text, style);
    message.y = -50;

    return message;
}

function createNodeLine(position_to, node_dist_scale){
    
    var line = new PIXI.Graphics();
    line.lineStyle(1, 0xFFFFFF);
    
    line.moveTo(0, 0);
    line.lineTo(position_to[0], position_to[1]);
    line.endFill();
    
    return line;
}

function updateNode(node, segment_dev, i, node_dist_scale){
    var positions = getVector(segment_dev * i);
    
    node.beginFill(node.colour);
    node.drawCircle(0, 0, 20);
    node.position.set(renderer.view.width/2+positions[0]*node_dist_scale,renderer.view.height/2+positions[1]*node_dist_scale);
}

function updateCentreNode(){
    centre_node.clear();
    centre_node.beginFill(0xFFFFFF);
    centre_node.drawCircle(renderer.view.width/2, renderer.view.height/2, 20);
}