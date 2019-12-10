function beeLeft() {
    $("#b").animate({left: "-=500"}, 2000, "swing", beeRight);
}
function beeRight() {
    $("#b").animate({left: "+=500"}, 2000, "swing", beeLeft);
}

beeRight();
