window.onload = function(){
    //seeing if this works with querySelector and .onclick instead of getElementById and addEventListener
    document.querySelector('#confirmButton').onclick = function(){runConfirm()}
    
    function runConfirm(){
        var message;
        if ( confirm("Press a button!") === true ) {
            message = "You pressed ok";
        } else {
            message = "You pressed cancel";
        }
        //display message
        document.querySelector('#text').innerHTML = message;
    }
}