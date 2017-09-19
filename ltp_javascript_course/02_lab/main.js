window.onload = function () {
    //add click listener and assign function addNumbers
    document.getElementById('addingButton').addEventListener('click', addNumbers);
    

    //create a variable and assign it empty string, outside of addNumbers scope so it keeps adding up of button is clicked multiple times.
    var answer = "";
    
    //called when clicked from listener above.
    function addNumbers() {
        //+ in front of something coerces it into a number
        //not sure why we have "+=" in the assignment bc the answer variable is then treated as a string and it just concatenates if button is clicked more than once.
        answer = +answer + +( +document.getElementById('inputOne').value + +document.getElementById('inputTwo').value );
        
        alert(answer);
    } 
    
    
}
