//
function onButtonDown() {
    if(this.colour == "0xFFFFFF") {
        this.colour = "0xFF0000";
    }
    else if(this.colour == "0xFF0000"){
        this.colour = "0xFFFFFF";
    }
    
    console.log("click registered");
    console.log(this);
    new_data = true;
}