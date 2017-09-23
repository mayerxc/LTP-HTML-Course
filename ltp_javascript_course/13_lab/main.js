window.onload = function(){
    document.getElementById('httpButton').addEventListener("click", renderText);
    
    function renderText(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            document.getElementById('demo').innerHTML = xhttp.responseText;
        }
        //doesn't work due to cors, must run a webserver from npm or change chrome setting C:\ ... \Application\chrome.exe --allow-file-access-from-files
        xhttp.open("GET", "text.txt", true);
        xhttp.send();
    }
}