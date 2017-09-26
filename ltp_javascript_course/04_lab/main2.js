window.onload = function () {
    document.getElementById('findNameButton').addEventListener('click', lookForName);
    
    
    function lookForName() {
        var myName = 'Chris';
        //var timesFound = [];
        var timesFound = 0;
        var position = [];
        var text = document.getElementById('inputNameBox').value;
        console.log(text);
        
        for (var i = 0; text.length > i; i++) {
            if ( text.slice(i, i + myName.length) === myName ){
                console.log("Made it inside loop!");
                timesFound++
                position.push(i);
                /*for (var j = i; j < (myName.length + i); j++){
                    if ( text.slice(j, myName.length) === myName ) {
                        timesFound++
                    }
                        //timesFound.push(text[j]);
                    
                }*/
            }
        }
        if (timesFound === 0){
            alert("Your name wasn't found!");
        } else {
            alert('Your name was found ' + timesFound + ' times at these positions: ' + position );
        }
    }
}