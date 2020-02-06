

// a key map of allowed keys
var allowedKeycpnv = {



    099: 'c',
   112 : 'p',
   110 : 'n',
    118: 'v'
   
};
var cpnvcode = ['c', 'p', 'n', 'v'];

// a variable to remember the 'position' the user has reached so far.
var cpnvCodePosition = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
    // get the value of the key code from the key map
    var keycpnv = allowedKeyscpnv[e.keyCode];
    // get the value of the required key from the konami code
    var requiredKeycpnv = cpnvcode[cpnvCodePosition];

    // compare the key with the required key
    if (keycpnv == requiredKeycpnv) {

        // move to the next key in the konami code sequence
        cpnvCodePosition++;

        // if the last key is reached, activate cheats
        if (cpnvCodePosition == cpnvcode.length) {
            cpnv();
            cpnvCodePosition = 0;
        }
    } else {
        cpnvCodePosition = 0;
    }
});
function cpnv() {
    //chose a faire apres le code
    location.replace ("https://www.cpnv.ch/")
	
	
	///---------------------------------------------------------------------
	




}// a key map of allowed keys
var allowedKeys = {
    76: 'l',
    79: 'o',
    71: 'g',
    73: 'i',
    78: 'n'
};

// the 'official' Konami Code sequence
var konamiCode = ['l', 'o', 'g', 'i', 'n'];

// a variable to remember the 'position' the user has reached so far.
var konamiCodePosition = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
    // get the value of the key code from the key map
    var key = allowedKeys[e.keyCode];
    // get the value of the required key from the konami code
    var requiredKey = konamiCode[konamiCodePosition];

    // compare the key with the required key
    if (key == requiredKey) {

        // move to the next key in the konami code sequence
        konamiCodePosition++;

        // if the last key is reached, activate cheats
        if (konamiCodePosition == konamiCode.length) {
            login();
            konamiCodePosition = 0;
        }
    } else {
        konamiCodePosition = 0;
    }
});
function login() {
    //chose a faire apres le code
    k.classList.add('k') 
}