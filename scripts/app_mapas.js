function iniciarMap(){
    var coord = {lat: 20.6525877,lng: -103.3282517};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}

