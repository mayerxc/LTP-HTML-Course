window.onload = function(){
    document.getElementById('getLocationBtn').addEventListener('click', grabLocation);
    
    function grabLocation(e){
        console.log("inside grabLocation")
        navigator.geolocation.getCurrentPosition(showGoogleLink, error);
    }
    
    var myLocation = document.getElementById('mapsLink');
    
    function error(){
        alert('there was an error');
    }
    
    function showGoogleLink(position) {
        console.log(position);
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        myLocation.innerHTML = `<p>Longitude = ${long}</p><p>Latitude = ${lat}</p><a target="_blank" href="https://www.google.com/maps/?q=${lat},${long}">Click Me</a>`;
    }
}