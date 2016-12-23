//when given an angle relative to north=0deg it will return a vector for the intersecting line 
function getVector(angle){
    
    var mod_angle_90 = angle % 90;    
    var mod_angle_45 = angle % 45; 
    var x;
    var y;
    switch(angle){
            
        case 90:
            x = 1;
            y = 0;
        break;
        case 180:
            x = 0;
            y = 1;
        break;
        case 270:
            x = -1;
            y = 0;
        break;
        case 360:
            x = 0;
            y = -1;
        break;
        case 0:
            x = 0;
            y = -1;
        break;
    }
    
    //checks to get vector
    if(angle > 0 && angle < 90){
        x = 0 + (mod_angle_90/90);
        y = -1 + (mod_angle_90/90);
    }
    else if(angle > 90 && angle < 180){
        x = 1 - (mod_angle_90/90);
        y = 0 + (mod_angle_90/90);
    }
    else if(angle > 180 && angle < 270){
        x = 0 - (mod_angle_90/90);
        y = 1 - (mod_angle_90/90);
    }
    else if(angle > 270 && angle < 360){
        x = -1 + (mod_angle_90/90);
        y = 0 - (mod_angle_90/90);
    }
    
    var scale = 0;
    var base_scale = 1.4;
    
    if(mod_angle_90 == 45){
            scale = base_scale;
    }
    else { 
        
    }
    
    //checks to scale
    if(mod_angle_90 > 0 && mod_angle_90 < 45){
        scale = 1 + ((mod_angle_45/45)/2);
    }
    else if(mod_angle_90 > 45 && mod_angle_90 < 90){
        scale = 1.5 - ((mod_angle_45/45)/2);
    }
    
    
    if(scale == 0){ 
        return [x,y];
    }
    else{
        return [x*scale,y*scale];
    }

}