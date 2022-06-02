function iniciarMap(){
    var coord = {lat: -17.401470 ,lng: -66.132477};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}