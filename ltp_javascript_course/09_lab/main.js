window.onload = function(){
    var sentence = "chris loves beer.";
    
    function capWord(str){
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    
    alert(capWord(sentence));
}