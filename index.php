<html> 
<head>
<style>
body{
				
				 text-align:center;
				 font-family:Arial,san-serif;
				 padding-top:80px;
				 
				 background-image: url('https://cdn1.vectorstock.com/i/1000x1000/49/15/retro-cinema-video-camera-vector-17074915.jpg');
				 border-image-width: 10px;
				 background-size:cover;
				 background-position:left;
				  background-attachment: relative;
				 overflow:hidden;
			}
		
#shape{
			height:50px;
			width:140px;
			border-radius:30px;
			border:0;
			background-color:skyblue;
			font-size:30px;
			border:1px solid;
			}
			#a{
				border-radius:20px;
				height:40px;
				width:250px;
				font-size:80px;
			}
			
			
a:link, a:visited {
  background-color: lightblue;
  color: red;
border-radius:20px;
				height:20px;
				width:40px;
				font-size:20px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: pink;
}
			p{
				font-size:20px;
			}
			
			section{
				display:flex;
				justify-content:center;
				align-items:center;
				
				
			}
			.container { 
				position: relative; 
				width:350px;
				height:450px;
				backdrop-filter:blur(10px);
				display:flex;
				  right: -300px;
				  top: -30px;
				justify-content:center;
				align-items:center;
				box-shadow: 0 10px 20px rgba(0, 0, 0, .5); 
				
			} 
			#c{
			
			height:30px;
			width:100px;
			border-radius:10px;
			background-color:orange;
			font-size:20px;
			color:black;
			font-family:monospace;
			}		
			
			
			#colr{
				color:black;
				
			</style>
</head>			
    <title>PHP login system</title>  
  
<body>
	 <section>
		<div class="container">
			<div class="form>"
				<h1 style="color:black; font-size:30px; font-weight:bold;">LOGIN PAGE</h1>
					<form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
<div class="imgcontainer">
							<img src="https://th.bing.com/th/id/OIP.iR-L3h8p33r7B8Dn80Lh3AHaHa?w=174&h=180&c=7&o=5&dpr=1.5&pid=1.7" alt="Avatar" class="avatar" width="60px" style="border-radius:90px;">
						  </div>
			 <div class="inputbox">
				
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
				<form action="authentication.php" method="post">
		<input id='c' type="submit" value="Login">
		</form>

	
            </p>  
        </form>
		</div>
		</div>
		</div>
		</div>
	</section>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  
