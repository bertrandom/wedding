<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bert &amp; Iris</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/wedding.css" rel="stylesheet">


<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
<script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>

    <script type="text/javascript" src="//use.typekit.net/wqx7pew.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>

    <div id="flair">
        <img src="/vectors/palm-left.svg" style="position:absolute; top:0px; left: 0px; z-index: 10;" />
        <img src="/vectors/palm-right.svg" style="position:absolute; top:0px; right: 0px; z-index: 10;" />
    </div>

    <div id="header" class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-4 nopadding"><img class="clouds-left" src="/images/clouds-left.png"/></div>
            <div id="container-logo" class="col-xs-6 col-md-4">
                <img src="/vectors/bird-left.svg" style="position:absolute; top:60px; left: -30px; z-index: 10;" />
                <img class="logo" src="/images/header-middle.png"/>
            </div>
            <div class="col-xs-6 col-md-4 nopadding" style="text-align: right; margin-right: 0px;">
                <img src="/vectors/bird-right.svg" style="position:absolute; top:40px; left: 30px; z-index: 10;" />
                <img src="/images/dates.png" style="position:absolute; top:80px; right: 120px;" />
                <img src="/images/clouds-right.png"/>
            </div>
        </div>
    </div>

    <div id="header-mobile" class="container-fluid">
        <div class="row">
            <center>
                <img class="img-responsive" src="/images/header-middle.png"/>
            </center>
        </div>
    </div>

    <div class="navbar navbar-inverse" style="background-color: #457B7F; border-color: #233E40; border:0px;" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">May 23-26, 2015</a>
        </div>
        <div class="collapse navbar-collapse">
            <?php include '_navigation.php' ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container welcome">
        <div class="row">
            <div class="col-md-4">
                <a href="https://www.flickr.com/photos/bertrandom/12710458654" title="Untitled by Bertrand Fan, on Flickr"><img class="img-thumbnail img-responsive" src="http://farm8.staticflickr.com/7402/12710458654_b625d4d1a9_d.jpg" alt="Untitled"></a>
            </div>
            <div class="col-md-8">
                <div class="page-header">
                    <h2>¡BIENVENIDOS!</h2>
                </div>
                <p>We're super excited to celebrate our big day on a beach vacation in paradise with our friends and family over Memorial Day weekend in 2015. You can use this website to learn more about the weekend festivities and planning details. We'll update it with additional info as we get closer to the weekend, so please check back.  
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <div class="page-header">
                    <h2>Get Ready</h2>
                </div>

                <ul style="list-style-type: none">
                    <li><span class="glyphicon glyphicon-ok-circle"></span> <a href="/rsvp/">RSVP for wedding, welcome drinks, and golf cart scavenger hunt</a> <p>March 25, 2015: deadline to RSVP</p></li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> <a href="http://travel.state.gov/content/passports/english/passports/apply.html">Get your passport</a></li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> <a href="/weddingweekend/#accommodations">Reserve a room</a> <p>February 22, 2015: deadline to book Hotel Playa Media Luna
</p></li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> <a href="https://www.hipmunk.com/flights/to-Cancun-Mexico">Find a flight</a></li>
                </ul>

            </div>

            <div class="col-md-3"><img class="img-responsive" src="/images/coconut.png">
                <br /></div>

        </div>

    </div>

    <div class="container-fluid nopadding" style="height: 1px; background: #457B7F;">
    </div>

    <div class="container-fluid nopadding">
         <div id="map"></div>
    </div>

    <script>

        var map = new L.Map('map', {subdomains: 'abcd', scrollWheelZoom: false, minZoom: 3, maxZoom: 9, dragging: true}).setView([21.22019978931047,-86.73070773482323], 5);
        map.addLayer(new L.TileLayer('http://{s}.tiles.bertyiris.com/DEST/{z}/{x}/{y}.png'));

        var icon = L.icon({
            iconUrl: 'images/marker.png',
            iconSize:     [51, 71], // size of the icon
            iconAnchor:   [25, 71]
        });

        L.marker([21.22019978931047,-86.73070773482323], {icon: icon}).addTo(map);

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>
</html>