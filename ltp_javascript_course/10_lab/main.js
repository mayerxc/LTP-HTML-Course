window.onload = function(){
    document.getElementById('checkDay').addEventListener('click', runIsWeekend);
    
    function runIsWeekend(){
        var dateToCheck = document.getElementById('inputDay').value;
        //isWeekend(dateToCheck);
        var d = new Date(dateToCheck);
        if (d.getDay() === 0 || d.getDay() === 6){
            return document.getElementById('result').innerHTML = "It's a weekend!";
        } else {
            return document.getElementById('result').innerHTML = "Not a weekend.";
        }
    }
    
 /*   function isWeekend(userDate) {
        //get the date
        var d = new Date(userDate);
        if (d.getDay() === 0 || d.getDay() === 6){
            return document.getElementById('result').innerHTML = "It's a weekend!";
        } else {
            return document.getElementById('result').innerHTML = "Not a weekend.";
        }
    }*/
}