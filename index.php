<html>
 <head>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
  <style>
  span {
    font-family: "Josefin Sans";
    background-color: black;
    color: white;
    font-size: 30px;
	padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 8px;
    padding-left: 10px;
	border-radius: 9px;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta http-equiv="refresh" content="5000" >
  <title>Philippe's AI Clock</title>
</head> 

<body>

<div style="padding-top:130px;padding-left:50px">
<span id="badge">0</span>
</div>

<script>
  var t1 = new Date();
  var t2 = new Date(2020, 8, 21, 17, 0, 0, 0);
  var dif = t2.getTime() - t1.getTime();

  var Seconds_from_T1_to_T2 = dif / 1000;
  var Seconds_Between_Dates = Math.abs(Math.floor(Seconds_from_T1_to_T2));

   var $badge = $('#badge'); // cache 
   $badge.html(Seconds_Between_Dates);
   setInterval(function () {
        function RandomInt() {
          return Math.floor((Math.random() * 10));
        }
        var value = parseInt($badge.html());
        value=value-1;
        $badge.html(value);
        var value16 = value.toString(16);
        if(value16.length==5)
          $("body").css("background-color", value16 + RandomInt() );
        if(value16.length==4)
          $("body").css("background-color", value16 + RandomInt() + RandomInt());
        if(value16.length==3)
          $("body").css("background-color", value16 + RandomInt() + RandomInt() + RandomInt());
        if(value16.length==2)
          $("body").css("background-color", value16 + RandomInt() + RandomInt() + RandomInt() + RandomInt());
        if(value16.length==1)
          $("body").css("background-color", value16 + RandomInt() + RandomInt() + RandomInt() + RandomInt() + RandomInt());
        value16 = value16.substring(value16.length - 6, value16.length);
        if(value16.length>=6)
          $("body").css("background-color", value16);
        //$("body").css("background-color", value16); //was before 20161220
        //$("body").css("background-color", value16 + '0');
        //console.log(value16);
   }, 1000);
</script>

<script>/*
for (i = 0; i < 20; i++) { 
(function makeDiv(){
    var divsize = ((Math.random()*100) + 20).toFixed();
    var color = '#'+ Math.round(0xffffff * Math.random()).toString(16);
    $newdiv = $('<div/>').css({
        'width':divsize+'px',
        'height':divsize+'px',
        'border-radius': '50%',
        'background-color': color
    });
    
    var posx = (Math.random() * ($(document).width() - divsize)).toFixed();
    var posy = (Math.random() * ($(document).height() - divsize)).toFixed();
    
    $newdiv.css({
        'position':'absolute',
        'left':posx+'px',
        'top':posy+'px',
        'display':'none'
    }).appendTo( 'body' ).fadeIn(Math.floor((Math.random() * 1000) + 1000)).delay(Math.floor((Math.random() * 100) + 200)).fadeOut(Math.floor((Math.random() * 1000) + 1000), function(){
       $(this).remove();
       makeDiv(); 
    });
})();
};*/
</script>

</body>
</html>
