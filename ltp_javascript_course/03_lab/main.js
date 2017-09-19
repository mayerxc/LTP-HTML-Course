window.onload = function () {
    alert("Let's play rock, paper, scissors!");
    
    document.getElementById("playButton").addEventListener('click', randomNumberSwitch);
    
    
}


//function for conditional checking
function randomNumber (e) {
    var computerAnswer = Math.random();
    //shows random number in console to test
    //console.log(computerAnswer.toString().slice(0,4));
    if ( computerAnswer <= 0.33 ) {
        alert("Computer chose rock!");
    } else if ( computerAnswer > .33 && computerAnswer <= .66 ) {
        alert("Computer chose paper!");
    } else {
        alert('Computer chose scissors')
    }
    
}

//code using switch statement (don't use conditional checking with switch)
function randomNumberSwitch (e) {
    //random number 1, 2 or 3 to utilize switch statement
    var computer = Math.floor( Math.random() * 3 ) + 1;
    //shows random number in console to test
    console.log(computer.toString());
    switch (computer){
        case 1:
            alert("Computer chose rock!");
            break;
        case 2:
            alert("Computer chose paper!");
            break;
        default:
            alert('Computer chose scissors')
    }
    
}
