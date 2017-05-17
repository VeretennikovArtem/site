<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>chipsters</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/reg.css" rel="stylesheet">
 <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>



<?php include"head.php";?>

<div class="conteiner">
	<div class="row">
		<div class="col-md-6">
			<div class="text">Создай личный кабинет<br> для реестрации кодов</div>
			 <div class="soc0">
			  <a href="#" class="soc"> <div class="img0"><img class="img1" src="img/ico-vk-w.png" alt=""> </div></a>
			  <a href="#" class="soc"><div class="img0"> <img class="img1" src="img/ico-vk-w.png" alt=""> </div></a>
			 </div>
			 <form action="recapcha.php" method="POST" class="form1">
			 <b>	<input type="text" class="inp" placeholder="Имя"><br></b>
			  <b>	<input type="text" class="inp" placeholder="Фамилия"><br></b>
			  <b>		<select type="text" class="inp "  > 
			          <span class="str"></span>




			 		<option value="Киевская" selected disabled="" >Область проживания</option>
			 		<option value="Киевская"> Киевская</option>
			 		<option value="Киевская"> Херсонская</option>
			 		<option value="Киевская"> Донецкая </option>
			 		<option value="Киевская"> Луганская</option>


						</select><br></b>


											  <div class="span1">+38</div>
											   <select class="select1" name="phone_nomber" >
											  <option value="">063</option>
											  <option value="">093</option>
											  <option value="">050</option>
											  <option value="">067</option>
											  <option value="">098</option>
											  	


											  </select>
											  <input type="tel" class="inp1" placeholder="___-__-__" ><br></b>




			  <b>	<input type="email" class="inp" placeholder="E-mail"><br></b>
			  <b>	<input type="password" class="inp" placeholder="Пароль"><br></b>
			    <div class="recapycha">
			    <div class="g-recaptcha" data-sitekey="6LdbxB4UAAAAAP9VPFhS-n-LPpxPj0FR-qUKsX4K"></div>
			   </div>




			 	 <div class="checkbox">
   					 <label for="checkbox1">
     				     <input type="checkbox" id="checkbox1"> Мне исполнилось 14 <br> и я принимаю условия Акции
     			   </label>
 				 </div>
 				<b> <button class="but">Зарегистрироваться</button></b>




			 </form>

		</div>








		<div class="col-md-6">
			<div class="text"> Ты уже в списке<br> учасников акции</div>
			 <div class="soc0">
			  <a href="#" class="soc"> <div class="img0"><img class="img1" src="img/ico-vk-w.png" alt=""> </div></a>
			  <a href="#" class="soc"><div class="img0"> <img class="img1" src="img/ico-vk-w.png" alt=""> </div></a>
			   <form action="#" class="form1">
			 <b>	<input type="text" class="inp" placeholder="E-mail"><br></b>
			  <b>	<input type="text" class="inp" placeholder="Пароль"><br></b>
			  <b> <button class="but">Участвовать</button></b>
			  
			  <div class="f1"> 
			   <h3 class="h3">Забыли пароль?</h3>
			  <h5 class="h5">Твои учетные данные находятся в письме по ссылке на активацию. Проверь почтовый ящик</h5></div>

			 </form>
			 </div>
	 		
	    </div>
	</div>
</div>






<?php include"footer.php";?>



</body>
</html>