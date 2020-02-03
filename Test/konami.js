<!-- Konami Code! U,U,D,D,L,R,L,R,B,A -->
document.addEventListener('DOMContentLoaded',init);
function init(){

}
function konami() {
    var keys = []; // closure
    return function(e) {
        keys.push(e.keyCode);
        if (keys.length > 10) keys.shift();
        if (("["+keys.join(",")+"]").indexOf("[38,38,40,40,37,39,37,39,66,65]") > -1) {
            /*
            * chose a charger une fois le code executer
            * */

            keys = [];
        }
}
/*try {
    gloader.load(
        ["glow", "1", "glow.events", "glow.anim", "glow.widgets.Overlay"],
        {
            onload: function(glow) {
                document.events.addListener(
                    document,
                    "keydown",
                    (function() {
                        var keys = []; // closure
                        return function(e) {
                            keys.push(e.keyCode);
                            if (keys.length > 10) keys.shift();
                            if (("["+keys.join(",")+"]").indexOf("[38,38,40,40,37,39,37,39,66,65]") > -1) {
                                // chose a charger une fois le code executer
                                keys = [];
                            }
                        }
                    })()
                );
            }
        }
    );
}
catch(e) { /* ignore}*/