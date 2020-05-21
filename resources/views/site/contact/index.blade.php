@extends('site.templates.templatec')



@section('content')



<html>
  <head>
    <title>Onde Estamos</title>
    <style>
      #mapa {
        height:404px;
        width:1349px;
      }
    </style>
  </head>
  <body>
    <div id="mapa"></div>
    <script>
 
      function inicializar() {
        var coordenadas = {lat: -22.912869, lng: -43.228963};
 
        var mapa = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 15,
          center: coordenadas 
        });
 
        var marker = new google.maps.Marker({
          position: coordenadas,
          map: mapa,
          title: 'Meu marcador'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_API_DO_GOOGLE&callback=inicializar">
    </script>
  </body>
</html>

@endsection