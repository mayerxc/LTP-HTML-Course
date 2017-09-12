window.onload = function () {
    document.getElementById('consoleButton').addEventListener("click", firstResponse);
    document.getElementById('browserButton').addEventListener("click", secondResponse);
    
}

function firstResponse() {
    console.log("Thanks for clicking the console button!");
}

function secondResponse() {
    document.write("Thanks for clicking the browser button!");
}