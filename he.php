<?php
//require_once 'load.php';
    include 'test.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
<style>
h1
    {
        font-size: 20px;
        font-weight: 400;
        
    }
    #drop
    {
        position: absolute;
        left: 10%;
        
        max-width: 150px;
        
    }
    #button
    {
        width: 250px;
        
        opacity: 0.6;
        box-shadow: 4px 4px black;
    }
    #MG_Road
    {
        color: green;
    }
</style>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(12.9716,77.5946),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <script>
        var data= <?php echo json_encode($traffic); ?>
            alert(data);
    if(data<=0.66 && data>=0.68)
    $("MG_Road").animate({
         colour='green'
    });
    else if(data<=0.66 && data>=0.68)
    $("MG_Road").animate({
        colour='yellow'
    });
    else if(data<=0.68 && data>=0.70)
    $("MG_Road").animate({
        colour='orange'
    });
    else if(data<=0.72 && data>=0.75)
    $("MG_Road").animate({
        colour='red'
    });
    </script>
</head>

<body>
<div id="googleMap" style="position:absolute;left=0px;right=0px;z-index=-1;width:1350px;height:625px;"></div>
  <div class="dropdown" id="drop">
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="button"><h1>BAITA</h1>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
<li><a href="intial1.html">Nimhans</a></li>
      <li><a href="intial2.html">RVCE</a></li>
  <li><a href="intial3.html">Teri_Dumlur</a></li>
      <li><a href="intial4.html">White Field</a></li>
      <li><a href="intial5.html">Yeswanthpur</a></li>
      <li><a href="intial6.html">BTM</a></li>
      <li><a href="intial7.html">Marathali</a></li>
      <li><a href="intial8.html">Nisarga Bhawan</a></li>
      <li id="MG_Road"><a href="intial9.html">Parisar Bhawan</a></li>
      <li><a href="intial10.html">Peenya</a></li>
      </ul>
  </div>
</div>
</body>
</html>
