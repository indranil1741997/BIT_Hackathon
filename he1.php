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
.dropbtn {
   
   font-size : 50px;
}
.dropdown {
   
    display: inline-block;
    position: absolute;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
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
</head>

<body>
    <iframe src="he.php" width="100%" height="625px" name="iframe_a">
 </iframe>

  
</body>
</html>
