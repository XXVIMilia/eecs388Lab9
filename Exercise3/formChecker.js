function load(){
    document.getElementById("ch").value = "0";
    document.getElementById("e").value = "0";
    document.getElementById("c").value = "0";
    document.getElementById("h").value = "0";
    document.getElementById("user").value = "";
    document.getElementById("pass").value = "";
    var bttn = document.getElementsByName("q1");
    for(var i=0;i<bttn.length;i++)
        bttn[i].checked = false;
}

function validateForm(){
    var list = [document.getElementById("user").value,
    document.getElementById("pass").value,
    document.getElementById("ch").value,
    document.getElementById("e").value,
    document.getElementById("c").value,
    document.getElementById("h").value,];
    var bttn = document.getElementsByName("q1");

    for(var i = 0; i < list.length; i++){
        if(list[i] == ""){
            alert("Missing values");
            return false;
        }
    }
    var ship = false
    for(var i=0;i<bttn.length;i++)
        if(bttn[i].checked == true){
            ship = true;
        }

    if(ship){
        return true;
    }
    else{
        alert("Select a shipping");
        return false;
    }


}