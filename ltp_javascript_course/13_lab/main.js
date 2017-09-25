window.onload = function(){
    document.getElementById('httpButton').addEventListener("click", renderText);
    
    function renderText(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            document.getElementById('demo').innerHTML = xhttp.responseText;
        }
        //doesn't work everytime in live mode on brackets due to cors, must run a webserver from npm or change chrome setting C:\ ... \Application\chrome.exe --allow-file-access-from-
        //to run webserver, installed python36, in command line: cd into the folder with html file... run "python -m http.server 3000"
        //open browser to "localhost:3000" now the code will work without CORS error.
        xhttp.open("GET", "text.txt", true);
        xhttp.send();
    }
}