window.onload = function(){
    //declare all variables
    var arr = ["Sap", "Haze", "Julius", "Doppelganger", "Good Morning", "Julius", "Julius", "Haze"];
    var mostFrequent = 0;
    var notFrequent = 0;
    var item = 0;
    var arrayString = "";
     
    //find the most frequent item in array
    function frequentItem() {
        for (var i = 0; i < arr.length; i++) {
            //nested for loop to compare item with rest of items
            for (var j = 0; j < arr.length; j++) {
                //does an item equal another item in the same array
                console.log("second loop");
                if (arr[i] === arr[j]) {
                    //add a number to see how many times it's in the array
                    notFrequent++;
                }
                //if notFrequent is more than mostFrequent, that's not good, change it to the mostFrequent and then identify the item.
                if (mostFrequent < notFrequent) {
                    mostFrequent = notFrequent;
                    item = arr[i];
                }
            }
        // reset to start with next item
        notFrequent = 0;
        }//done with loops, should have answer now
        
    //display answer
    document.querySelector('#result').innerHTML = `${item} appears ${mostFrequent} times`;
    }//function frequentItem()
    
    //create array string for display, just displaying arr looks bad
    arrayString = "[";
    for (var k = 0; k < arr.length; k++){
        arrayString += arr[k];
        arrayString += ", "
    }
    arrayString = arrayString.slice(0, -2);//take off last comma and space
    arrayString += "]"; //add in last ]

    //display array string
    document.querySelector("#array").innerHTML = arrayString;
    //create button listener
    document.getElementById('button').addEventListener('click', frequentItem);
    
}