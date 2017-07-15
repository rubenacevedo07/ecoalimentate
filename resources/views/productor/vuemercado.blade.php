<html>
<head>
  <title>Mapa</title>
  <style type="text/css">
    #map{
      height: 540px;
      width: 100%;
      border:2px solid blue;
    }

  </style>
</head>
<body>
  <div id="app">
    @{{ message }}
    <div id="map">
    </div>
  </div>

  <script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAssWrbJn1x2zbxMWVPgkyUg356RTMHx_c&callback=app.createMap"
              async defer></script>
  
</body>
</html>
    