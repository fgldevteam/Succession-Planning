<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/main.css?<?=time();?>" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/print.css?<?=time();?>" type="text/css" media="print" title="no title" charset="utf-8">

    <style>
    h4 img{ padding-right: 10px;}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 5,
    zoomControl: false,
    panControl: false,   
    center: new google.maps.LatLng(55, 268),   
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

  setMarkers(map, stores);
}

 

  var stores = [
  ['Kitsilano','ATM',49.2715571,-123.1464177,'<h4><img src="atmo-logo.png" />100 Kitsilano</h4>'], 

['Prince George','ATM',53.9104310,-122.7607150,'<h4><img src="atmo-logo.png" />102 Prince George</h4>'], 

['Calgary','ATM',51.0437047,-114.0800161,'<h4><img src="atmo-logo.png" />107 Calgary</h4>'], 

['Deerfoot Meadows','ATM',50.9783138,-114.0414957,'<h4><img src="atmo-logo.png" />155 Deerfoot Meadows</h4>'], 

['Yates & Broad','ATM',48.4264645,-123.3661333,'<h4><img src="atmo-logo.png" />159 Yates & Broad</h4>'], 

['West Edmonton Mall','ATM',53.5238330,-113.6165014,'<h4><img src="atmo-logo.png" />161 West Edmonton Mall</h4>'], 

['Langley Power Centre','ATM',49.0987550,-122.6545940,'<h4><img src="atmo-logo.png" />162 Langley Power Centre</h4>'], 

['Coquitlam Centre','ATM',49.2769412,-122.7994717,'<h4><img src="atmo-logo.png" />163 Coquitlam Centre</h4>'], 

['Red Deer','ATM',52.2328764,-113.8139054,'<h4><img src="atmo-logo.png" />164 Red Deer</h4>'], 

['Banff','ATM',51.1755970,-115.5707886,'<h4><img src="atmo-logo.png" />171 Banff</h4>'], 

['South Edmonton Common','ATM',53.4425229,-113.4824213,'<h4><img src="atmo-logo.png" />172 South Edmonton Common</h4>'], 

['Market Mall','ATM',51.0828538,-114.1573603,'<h4><img src="atmo-logo.png" />185 Market Mall</h4>'], 

['Toronto Eaton Centre','ATM',43.6524019,-79.3793380,'<h4><img src="atmo-logo.png" />187 Toronto Eaton Centre</h4>'], 

['Corner Brook Plaza','SC',48.9462023,-57.9154387,'<h4><img src="chek-logo.png" />201 Corner Brook Plaza</h4>'], 

['Markham','SC',43.8681476,-79.3627362,'<h4><img src="chek-logo.png" />208 Markham</h4>'], 

['Woodstock','SC',43.1189482,-80.7390109,'<h4><img src="chek-logo.png" />213 Woodstock</h4>'], 

['Bedford','SC',44.7505500,-63.6450948,'<h4><img src="chek-logo.png" />219 Bedford</h4>'], 

['Waterloo','SC',43.4354706,-80.5605865,'<h4><img src="chek-logo.png" />221 Waterloo</h4>'], 

['Midland','SC',43.7173475,-79.2509154,'<h4><img src="chek-logo.png" />223 Midland</h4>'], 

['North Battleford','SC',52.7765957,-108.3070593,'<h4><img src="chek-logo.png" />224 North Battleford</h4>'], 

['Northumberland Square','SC',47.0301434,-65.4910718,'<h4><img src="chek-logo.png" />225 Northumberland Square</h4>'], 

['Linsday','SC',44.3501481,-78.7593733,'<h4><img src="chek-logo.png" />227 Linsday</h4>'], 

['Summerside','SC',43.6498325,-79.6871138,'<h4><img src="chek-logo.png" />228 Summerside</h4>'], 

['Salmon Arm','SC',50.6943101,-119.2984986,'<h4><img src="chek-logo.png" />229 Salmon Arm</h4>'], 

['Estevan','SC',49.1467196,-102.9779164,'<h4><img src="chek-logo.png" />230 Estevan</h4>'], 

['Crowfoot','SC',51.1272471,-114.2002468,'<h4><img src="chek-logo.png" />233 Crowfoot</h4>'], 

['Deerfoot Mall','SC',51.110450,-114.041114,'<h4><img src="chek-logo.png" />234 Deerfoot Mall</h4>'], 

['Truro Mall','SC',45.3693976,-63.3033468,'<h4><img src="chek-logo.png" />235 Truro Mall</h4>'], 

['Wetaskiwin Mall','SC',52.9526246,-113.3900974,'<h4><img src="chek-logo.png" />236 Wetaskiwin Mall</h4>'], 

['Cornwall','SC',45.0403954,-74.7604323,'<h4><img src="chek-logo.png" />237 Cornwall</h4>'], 

['Duncan Mall','SC',48.7766697,-123.7034450,'<h4><img src="chek-logo.png" />238 Duncan Mall</h4>'], 

['Trinity Common','SC',43.7319394,-79.7628212,'<h4><img src="chek-logo.png" />239 Trinity Common</h4>'], 

['Oakville Burloak','SC',43.4500000,-79.6833333,'<h4><img src="chek-logo.png" />240 Oakville Burloak</h4>'], 

['Leaside','SC',43.7086835,-79.3627170,'<h4><img src="chek-logo.png" />241 Leaside</h4>'], 

['London North','SC',43.0131709,-81.3286593,'<h4><img src="chek-logo.png" />242 London North</h4>'], 

['Sherway Gardens','SC',43.6190403,-79.5557647,'<h4><img src="chek-logo.png" />243 Sherway Gardens</h4>'], 

['Durham Centre','SC',43.8643369,-79.0260097,'<h4><img src="chek-logo.png" />244 Durham Centre</h4>'], 

['Highland Square Mall','SC',45.5787052,-62.6639747,'<h4><img src="chek-logo.png" />245 Highland Square Mall</h4>'], 

['Big Bend Crossing','SC',49.1998417,-122.9765991,'<h4><img src="chek-logo.png" />246 Big Bend Crossing</h4>'], 

['Shawnessy Town Centre','SC',50.8985091,-114.0626891,'<h4><img src="chek-logo.png" />247 Shawnessy Town Centre</h4>'], 

['Cross Iron Mills','SC',51.2003475,-113.9960292,'<h4><img src="chek-logo.png" />248 Cross Iron Mills</h4>'], 

['Stephen Avenue','SC',51.0456382,-114.0644545,'<h4><img src="chek-logo.png" />249 Stephen Avenue</h4>'], 

['Lloydminster Power Centre','SC',53.2779923,-110.0367144,'<h4><img src="chek-logo.png" />250 Lloydminster Power Centre</h4>'], 

['Fairview Mall','SC',43.7787787,-79.3447208,'<h4><img src="chek-logo.png" />251 Fairview Mall</h4>'], 

['Bolton','SC',43.8604131,-79.7115780,'<h4><img src="chek-logo.png" />252 Bolton</h4>'], 

['Whitby','SC',43.9176047,-78.9475422,'<h4><img src="chek-logo.png" />253 Whitby</h4>'], 

['Northumberland','SC',43.9706637,-78.2025234,'<h4><img src="chek-logo.png" />254 Northumberland</h4>'], 

['Upper Canada Mall','SC',44.0549218,-79.4803509,'<h4><img src="chek-logo.png" />255 Upper Canada Mall</h4>'], 

['Mayflower Mall','SC',46.1456911,-60.1383199,'<h4><img src="chek-logo.png" />256 Mayflower Mall</h4>'], 

['Appleby Crossing','SC',43.4066075,-79.8078951,'<h4><img src="chek-logo.png" />257 Appleby Crossing</h4>'], 

['Dartmouth Crossing','SC',44.6989361,-63.5672728,'<h4><img src="chek-logo.png" />258 Dartmouth Crossing</h4>'], 

['Stone Road Mall','SC',43.5187050,-80.2374383,'<h4><img src="chek-logo.png" />259 Stone Road Mall</h4>'], 

['Beacon Hill','SC',51.1575384,-114.1621374,'<h4><img src="chek-logo.png" />260 Beacon Hill</h4>'], 

['Timmins','SC',48.4725477,-81.3822838,'<h4><img src="chek-logo.png" />262 Timmins</h4>'], 

['Eglinton Corners','SC',43.7274339,-79.2904923,'<h4><img src="chek-logo.png" />263 Eglinton Corners</h4>'], 

['Riocan Marketplace','SC',45.2691733,-75.7408920,'<h4><img src="chek-logo.png" />264 Riocan Marketplace</h4>'], 

['St.Vital','SC',49.828991,-97.114766,'<h4><img src="chek-logo.png" />265 St.Vital</h4>'], 

['Kanata Centrum','SC',45.3120318,-75.9113775,'<h4><img src="chek-logo.png" />266 Kanata Centrum</h4>'], 

['Peachtree Square','SC',49.4645332,-119.5872541,'<h4><img src="chek-logo.png" />267 Peachtree Square</h4>'], 

['Southridge Mall','SC',46.4500854,-81.0016287,'<h4><img src="chek-logo.png" />268 Southridge Mall</h4>'], 

['Deerfoot Meadows','SC',50.9825630,-114.0388705,'<h4><img src="chek-logo.png" />270 Deerfoot Meadows</h4>'], 

['St. Catharines','SC',43.1781740,-79.2448140,'<h4><img src="chek-logo.png" />271 St. Catharines</h4>'], 

['Richmond Centre','SC',49.1665092,-123.1378114,'<h4><img src="chek-logo.png" />272 Richmond Centre</h4>'], 

['Cambridge Centre','SC',43.3936987,-80.3210193,'<h4><img src="chek-logo.png" />273 Cambridge Centre</h4>'], 

['Halifax Shopping Ctr','SC',44.6482273,-63.6205274,'<h4><img src="chek-logo.png" />274 Halifax Shopping Ctr</h4>'], 

['Westridge Place','SC',44.6100164,-79.4510956,'<h4><img src="chek-logo.png" />275 Westridge Place</h4>'], 

['Lougheed Mall Burnaby','SC',49.2516991,-122.8961476,'<h4><img src="chek-logo.png" />276 Lougheed Mall Burnaby</h4>'], 

['Edmonton Eaton Centre','SC',53.5333333,-113.5000000,'<h4><img src="chek-logo.png" />277 Edmonton Eaton Centre</h4>'], 

['Village Green Vernon','SC',50.2670137,-119.2720107,'<h4><img src="chek-logo.png" />278 Village Green Vernon</h4>'], 

['Sarnia','SC',42.9767002,-82.3667079,'<h4><img src="chek-logo.png" />279 Sarnia</h4>'], 

['Fort McMurray','SC',56.7225146,-111.3642598,'<h4><img src="chek-logo.png" />280 Fort McMurray</h4>'], 

['South Trail Crossing','SC',50.9293501,-113.9724496,'<h4><img src="chek-logo.png" />281 South Trail Crossing</h4>'], 

['Pine Centre','SC',53.9001522,-122.7781699,'<h4><img src="chek-logo.png" />282 Pine Centre</h4>'], 

['Woodbridge','SC',43.7920985,-79.5493013,'<h4><img src="chek-logo.png" />283 Woodbridge</h4>'], 

['Regent Mall','SC',45.9336009,-66.6624615,'<h4><img src="chek-logo.png" />284 Regent Mall</h4>'], 

['New Minas','SC',45.0672788,-64.4516611,'<h4><img src="chek-logo.png" />285 New Minas</h4>'], 

['Orion Gate','SC',43.6781436,-79.7198142,'<h4><img src="chek-logo.png" />287 Orion Gate</h4>'], 

['Milton Mall','SC',43.5178857,-79.8758303,'<h4><img src="chek-logo.png" />288 Milton Mall</h4>'], 

['Victoria Bay Centre','SC',48.4250195,-123.3656632,'<h4><img src="chek-logo.png" />290 Victoria Bay Centre</h4>'], 

['White Oaks','SC',42.9307053,-81.2265372,'<h4><img src="chek-logo.png" />291 White Oaks</h4>'], 

['Pen Centre','SC',43.1336381,-79.2243102,'<h4><img src="chek-logo.png" />292 Pen Centre</h4>'], 

['Argyle Mall','SC',43.0048864,-81.1754817,'<h4><img src="chek-logo.png" />293 Argyle Mall</h4>'], 

['Heartland','SC',43.6108108,-79.6995127,'<h4><img src="chek-logo.png" />294 Heartland</h4>'], 

['North Bay Mall','SC',46.2831484,-79.4487547,'<h4><img src="chek-logo.png" />296 North Bay Mall</h4>'], 

['Saint John','SC',45.2733153,-66.0633081,'<h4><img src="chek-logo.png" />297 Saint John</h4>'], 

['Lansdowne Place','SC',44.2835644,-78.3308736,'<h4><img src="chek-logo.png" />298 Lansdowne Place</h4>'], 

['Limeridge Mall','SC',43.2173548,-79.8619235,'<h4><img src="chek-logo.png" />299 Limeridge Mall</h4>'], 

['Aberdeen Mall','SC',50.6543912,-120.3710924,'<h4><img src="chek-logo.png" />300 Aberdeen Mall</h4>'], 

['Sunridge Mall','SC',51.0733852,-113.9876926,'<h4><img src="chek-logo.png" />303 Sunridge Mall</h4>'], 

['Town And Country','SC',50.4042905,-105.5303636,'<h4><img src="chek-logo.png" />304 Town And Country</h4>'], 

['Southpark','SC',53.4739100,-113.4944183,'<h4><img src="chek-logo.png" />308 Southpark</h4>'], 

['Market Mall','SC',51.0878638,-114.1573603,'<h4><img src="chek-logo.png" />309 Market Mall</h4>'], 

['Chinook Centre','SC',50.9960670,-114.0731480,'<h4><img src="chek-logo.png" />310 Chinook Centre</h4>'], 

['Park Place Mall','SC',49.6980744,-112.8373420,'<h4><img src="chek-logo.png" />311 Park Place Mall</h4>'], 

['Londonderry Mall','SC',53.5992320,-113.4430738,'<h4><img src="chek-logo.png" />312 Londonderry Mall</h4>'], 

['Medicine Hat','SC',50.0054122,-110.6492788,'<h4><img src="chek-logo.png" />313 Medicine Hat</h4>'], 

['West Edmonton Mall','SC',53.5333333,-113.5000000,'<h4><img src="chek-logo.png" />314 West Edmonton Mall</h4>'], 

['Kingsway Garden Mall','SC',53.5652774,-113.5055746,'<h4><img src="chek-logo.png" />316 Kingsway Garden Mall</h4>'], 

['Winston Power Centre','SC',43.5212783,-79.6796568,'<h4><img src="chek-logo.png" />317 Winston Power Centre</h4>'], 

['Southcentre','SC',50.9505402,-114.0665841,'<h4><img src="chek-logo.png" />318 Southcentre</h4>'], 

['Niagara Square','SC',43.0672651,-79.1227862,'<h4><img src="chek-logo.png" />319 Niagara Square</h4>'], 

['St. Albert','SC',53.6405958,-113.6249791,'<h4><img src="chek-logo.png" />320 St. Albert</h4>'], 

['Cataraqui','SC',44.2573091,-76.5685188,'<h4><img src="chek-logo.png" />322 Cataraqui</h4>'], 

['Pembroke Mall','SC',45.8205500,-77.0839288,'<h4><img src="chek-logo.png" />323 Pembroke Mall</h4>'], 

['Woodbine','SC',43.7194383,-79.6008261,'<h4><img src="chek-logo.png" />325 Woodbine</h4>'], 

['Broadway & Ontario','SC',49.2630165,-123.1052947,'<h4><img src="chek-logo.png" />327 Broadway & Ontario</h4>'], 

['Meadowtown Centre','SC',49.2257937,-122.6762372,'<h4><img src="chek-logo.png" />328 Meadowtown Centre</h4>'], 

['Southland Mall','SC',50.4044677,-104.6192597,'<h4><img src="chek-logo.png" />329 Southland Mall</h4>'], 

['St. Laurent','SC',45.4208201,-75.6354422,'<h4><img src="chek-logo.png" />330 St. Laurent</h4>'], 

['Park Royal','SC',49.3374940,-123.1601230,'<h4><img src="chek-logo.png" />334 Park Royal</h4>'], 

['Kelowna','SC',49.8806956,-119.4395769,'<h4><img src="chek-logo.png" />335 Kelowna</h4>'], 

['Island Home Centre','SC',48.4504255,-123.3704628,'<h4><img src="chek-logo.png" />336 Island Home Centre</h4>'], 

['Pacific Centre','SC',49.2848140,-123.1163870,'<h4><img src="chek-logo.png" />337 Pacific Centre</h4>'], 

['Centre Circle and 8th','SC',52.1145733,-106.6030224,'<h4><img src="chek-logo.png" />338 Centre Circle and 8th</h4>'], 

['Gateway','SC',53.1995686,-105.7542743,'<h4><img src="chek-logo.png" />339 Gateway</h4>'], 

['Bramalea City Centre','SC',43.7152636,-79.7237811,'<h4><img src="chek-logo.png" />340 Bramalea City Centre</h4>'], 

['Victoria Square','SC',50.4469878,-104.5499125,'<h4><img src="chek-logo.png" />341 Victoria Square</h4>'], 

['Saskatoon','SC',52.1275506,-106.6671508,'<h4><img src="chek-logo.png" />342 Saskatoon</h4>'], 

['Strawberry Hill','SC',49.1058970,-122.8279560,'<h4><img src="chek-logo.png" />344 Strawberry Hill</h4>'], 

['Pembina','SC',49.8215330,-97.1525733,'<h4><img src="chek-logo.png" />345 Pembina</h4>'], 

['Polo Park','SC',49.8812934,-97.1995640,'<h4><img src="chek-logo.png" />346 Polo Park</h4>'], 

['Kildonan','SC',49.8970547,-97.0628766,'<h4><img src="chek-logo.png" />347 Kildonan</h4>'], 

['Sherwood Park Mall','SC',53.5311503,-113.2954464,'<h4><img src="chek-logo.png" />348 Sherwood Park Mall</h4>'], 

['Quinte Mall','SC',44.1890941,-77.3974581,'<h4><img src="chek-logo.png" />349 Quinte Mall</h4>'], 

['Merivale Mall','SC',45.3457812,-75.7306022,'<h4><img src="chek-logo.png" />350 Merivale Mall</h4>'], 

['Pickering','SC',43.8370456,-79.0886906,'<h4><img src="chek-logo.png" />351 Pickering</h4>'], 

['Burlington','SC',43.3453803,-79.7948125,'<h4><img src="chek-logo.png" />352 Burlington</h4>'], 

['New Sudbury Centre','SC',46.5220256,-80.9471218,'<h4><img src="chek-logo.png" />353 New Sudbury Centre</h4>'], 

['Promenade','SC',43.8090933,-79.4532924,'<h4><img src="chek-logo.png" />354 Promenade</h4>'], 

['Square One','SC',43.5937650,-79.6480402,'<h4><img src="chek-logo.png" />355 Square One</h4>'], 

['Conestoga','SC',43.4980824,-80.5274971,'<h4><img src="chek-logo.png" />356 Conestoga</h4>'], 

['Hylands','SC',43.0283656,-81.2836164,'<h4><img src="chek-logo.png" />357 Hylands</h4>'], 

['Erin Mills Town Centre','SC',43.5594666,-79.7079064,'<h4><img src="chek-logo.png" />358 Erin Mills Town Centre</h4>'], 

['Intercity Mall','SC',48.4046542,-89.2436553,'<h4><img src="chek-logo.png" />359 Intercity Mall</h4>'], 

['Woodgrove Centre','SC',49.2352820,-124.0486050,'<h4><img src="chek-logo.png" />361 Woodgrove Centre</h4>'], 

['Oshawa','SC',43.8905295,-78.8799504,'<h4><img src="chek-logo.png" />362 Oshawa</h4>'], 

['Port Coquitlam','SC',49.2769412,-122.7994717,'<h4><img src="chek-logo.png" />363 Port Coquitlam</h4>'], 

['Brandon Shoppers World','SC',49.8264608,-99.9620067,'<h4><img src="chek-logo.png" />364 Brandon Shoppers World</h4>'], 

['Northgate Centre','SC',49.9404607,-97.1588573,'<h4><img src="chek-logo.png" />365 Northgate Centre</h4>'], 

['Cottonwood','SC',49.1408444,-121.9622844,'<h4><img src="chek-logo.png" />366 Cottonwood</h4>'], 

['Heritage Place','SC',44.5744658,-80.9189844,'<h4><img src="chek-logo.png" />367 Heritage Place</h4>'], 

['Sevenoaks Shopping Centre','SC',49.0561854,-122.3853325,'<h4><img src="chek-logo.png" />368 Sevenoaks Shopping Centre</h4>'], 

['Guildford Town Centre','SC',49.1888251,-122.8043422,'<h4><img src="chek-logo.png" />369 Guildford Town Centre</h4>'], 

['Bayers Lake','SC',44.6488810,-63.5753120,'<h4><img src="chek-logo.png" />370 Bayers Lake</h4>'], 

['Village Shopping Centre','SC',47.533463,-52.749552,'<h4><img src="chek-logo.png" />371 Village Shopping Centre</h4>'], 

['Yorkdale','SC',43.7258222,-79.4555263,'<h4><img src="chek-logo.png" />375 Yorkdale</h4>'], 

['Fairway Best Mall','SC',43.4184607,-80.4504050,'<h4><img src="chek-logo.png" />377 Fairway Best Mall</h4>'], 

['Champlain Place','SC',46.0982418,-64.7602155,'<h4><img src="chek-logo.png" />379 Champlain Place</h4>'], 

['Charlottetown','SC',46.2647933,-63.1471391,'<h4><img src="chek-logo.png" />380 Charlottetown</h4>'], 

['Westbrook Mall','SC',51.0432640,-114.1411220,'<h4><img src="chek-logo.png" />381 Westbrook Mall</h4>'], 

['Festival Marketplace','SC',43.3693289,-80.9447172,'<h4><img src="chek-logo.png" />382 Festival Marketplace</h4>'], 
['St. John&apos;s','SC',47.619113,-52.717877,'<h4><img src="chek-logo.png" />383 St. John&apos;s</h4>'], 
['Red Deer','SC',52.2884779,-113.8091156,'<h4><img src="chek-logo.png" />384 Red Deer</h4>'], 
['Willowbrook','SC',49.1129828,-122.6776134,'<h4><img src="chek-logo.png" />385 Willowbrook</h4>'], 
['Cambrian Mall','SC',46.5250665,-84.3193934,'<h4><img src="chek-logo.png" />386 Cambrian Mall</h4>'], 
['Markville Shopping Centre','SC',43.8672112,-79.2845910,'<h4><img src="chek-logo.png" />387 Markville Shopping Centre</h4>'], 
['Meadowlands Power Centre','SC',43.2292518,-79.9409201,'<h4><img src="chek-logo.png" />389 Meadowlands Power Centre</h4>'], 
['Lynden Park','SC',43.1736523,-80.2401013,'<h4><img src="chek-logo.png" />391 Lynden Park</h4>'], 
['Eaton Centre Metrotown','SC',49.2259188,-123.0026627,'<h4><img src="chek-logo.png" />392 Eaton Centre Metrotown</h4>'], 
['Chatham','SC',42.4050158,-82.1823765,'<h4><img src="chek-logo.png" />393 Chatham</h4>'], 
['Devonshire Mall','SC',42.2746699,-83.0035562,'<h4><img src="chek-logo.png" />394 Devonshire Mall</h4>'], 
['Hillcrest Mall','SC',43.8548551,-79.4360871,'<h4><img src="chek-logo.png" />395 Hillcrest Mall</h4>'], 
['Place D&apso;Orleans','SC',45.4782486,-75.5167150,'<h4><img src="chek-logo.png" />398 Place D&apso;Orleans</h4>'], 
['Eaton Centre','SC',43.6538951,-79.3801867,'<h4><img src="chek-logo.png" />401 Eaton Centre</h4>'], 
['Georgian Mall','SC',44.4166611,-79.7138018,'<h4><img src="chek-logo.png" />419 Georgian Mall</h4>'], 
['Confederation Centre','SC',52.1311281,-106.7228957,'<h4><img src="chek-logo.png" />5127 Confederation Centre</h4>'], 
['Kennedy Commons','HX',43.7730402,-79.2813961,'<h4><img src="chek-logo.png" />8812 Kennedy Commons</h4>'], 
['Dixie','HX',43.6315936,-79.6156377,'<h4><img src="chek-logo.png" />8814 Dixie</h4>'], 

  ];           

function setMarkers(map, locations) {

  var scimage = new google.maps.MarkerImage('sc-flag.png',
      new google.maps.Size(32, 35),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 35));

  var atmoimage = new google.maps.MarkerImage('atmo-green.png',
      new google.maps.Size(32, 35),
      new google.maps.Point(0,0),
      new google.maps.Point(0, 35));
      
     
  var shape = {
      coord: [1, 1, 1, 20, 30, 20, 30 , 1],
      type: 'poly'
  };
  
  for (var i = 0; i < locations.length; i++) {
    var store = locations[i];
    var myLatLng = new google.maps.LatLng(store[2], store[3]);
           
    if(store[1] == "ATM"){      
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: atmoimage,       
          shape: shape,
          title: store[0] });
      
    } else if(store[1] == "SC"){
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: scimage,       
          shape: shape,
          title: store[0] });  
    }
    
    var infowindow = new google.maps.InfoWindow({
      content: store[4]
    });
    
    addListener(marker,infowindow,map);
  }
}

function addListener(m,i,map) {
  google.maps.event.addListener(m, 'click', function(){
        i.open(map,m);                 
    });  
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

  </head>
  <body>
    <div id="stage">
    <div id="sidebar">
      <div id="nav" class="fixedpos">
        @include('nav')
      </div>
    </div>

    <div class="main">
        <div id="map_canvas" class="map_container"></div>
    </div>

    
    <br class="clear" />

    </div>    
  </body>
</html>