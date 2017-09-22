window.onload = function(){
    var sentence = "This is a test to check how many vowels are in this sentence.";
    document.getElementById('sentence').innerHTML = sentence;

    var howMany = sentence.match(/[aeiou]/gi).length.toString();
    howMany = `There are ${howMany} vowels in the previous sentence!`
    document.getElementById('result').innerHTML = howMany;
}