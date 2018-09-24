function reapareceDiv() {
    document.getElementById("aparecer").style.display = "block";
}
function tiraDiv() {
    document.getElementById("esconder").style.display = "none";
}
function tiraDiv2() {
    setTimeout(function () {
        $("#esconder").css({display: "none"});
    }, 1000);
}
