function load(){
    document.getElementById("ch").value = ""
    document.getElementById("e").value = "" 
    document.getElementById("c").value = ""
    document.getElementById("h").value = ""
    document.getElementById("user").value = ""
    document.getElementById("pass").value = ""
    var bttn = document.getElementsByName("q3")
    for(var i=0;i<bttn.length;i++)
        bttn[i].checked = false;
}

function validateForm(){
    return true;
}