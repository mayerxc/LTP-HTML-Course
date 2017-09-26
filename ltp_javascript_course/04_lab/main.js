window.onload = function () {
    document.getElementById('findNameButton').addEventListener('click', lookForName);
    
    
    function lookForName() {
        var myName = 'Chris';
        var timesFound = [];
        var text = document.getElementById('inputNameBox').value;
        console.log(text);
        
        for (var i = 0; text.length > i; i++) {
            if (text[i] === "C"){
                console.log("Made it inside loop!");
                for (var j = i; j < (myName.length + i); j++){
                    timesFound.push(text[j]);
                }
            }
        }
        if (timesFound.length === 0){
            alert("Your name wasn't found!");
        } else {
            alert(timesFound);
        }
    }
}