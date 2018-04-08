<html>
<head>
<script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>

<script type="text/javascript">


function Login() {
	
	 VK.init({apiId: '6440328'});
	   //авторизация VK
	   	   	   
		    VK.Auth.login(function(response){
		      if (response.session) {			
			      
			   
			  };
		     },+262148);
         
	};
	
	
function Post() {
	
	 VK.Api.call("wall.post", {owner_id: '-85069881', message: 'test', attachments: 'photo-85069881_359163524', v:'5.73'}, function (data) {
		 
		 
	 });
         
	};


</script>

</head>
<body onload="Login()">

<button type="button" onclick="Post()">x</button>

</body>

</html>