function myFunction() {
    var x = document.getElementById("JV");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}