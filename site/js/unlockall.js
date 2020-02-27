
var allowedKeys = {// ok modif

    //unlockall
    117: 'u',
    110: 'n',
    108: 'l',
    111: 'o',
    99: 'c',
    107: 'k',
    97: 'a',
};
// the 'official' Konami Code sequence
var konamiCode = ['u', 'n', 'l', 'o', 'c', 'k', 'a', 'l', 'l',];//ok modif
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
    document.getElementById('login').style.display='block'
}

