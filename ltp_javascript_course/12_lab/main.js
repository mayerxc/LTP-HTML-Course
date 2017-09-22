window.onload = function(){
    console.log('does this work??');
    document.getElementById('para').addEventListener("mouseover", purpleWords);
    document.getElementById('para').addEventListener("mouseout", returnColor);
    
    function purpleWords(){
        var boldWords = document.getElementsByTagName('strong');
        console.log(boldWords);
        for (var i = 0; i < boldWords.length; i++) {
            boldWords[i].style.color = "purple";
        }
    }
    
    function returnColor() {
        var boldWords = document.getElementsByTagName('strong');
        for (var i = 0; i < boldWords.length; i++) {
            boldWords[i].style.color = "black";
        }
    }
    
}