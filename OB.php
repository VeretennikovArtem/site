<?php



if (isset($_POST["send"])) {

	//print_r($_POST);

	
	$email =  htmlspecialchars($_POST["email"]);
	$subject = htmlspecialchars($_POST["subject"]);
	$message =  htmlspecialchars($_POST["message"]) ;
	
																$error_email = "";
															$error_message = "";
																$error_subject = "";
															    $error = false;


															if ($email == "") {
																$error_email = "Введите коректный E-Mail";
														     	$error = true;
															};
														   if ($subject == "") {
																$error_subject = "Выберите вопрос";
															$error = true;
																};



															if (strlen($message) == 0) {
																$error_message = "jgdfigj";
																	$error = true;

																	# code...
															};

if ($error) {
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply-to : $email\r\nContent-type:text/plain; charset=utf-8\r\n";


    mail($email, $subject, $message,$headers);
	# code...
}




}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>chipsters</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/ob.css" rel="stylesheet">

</head>
<body>




<?php include"head.php";?>





 <div class="container">
 	<div class="row">
 		<div class="text ">
 			Возникли вопросы по участию в тусовке ? <br/>
 			Напиши нам!
 		</div>
 	</div>
 </div>

<div class="container-fluid">
 	<div class="row">
     <div class="text1 ">
      Сначала прочитай FAQ! Запросы, ответы на которые есть в FAQ, будут обрабатываться в последнюю очередь
     </div>

</div>
 </div>




<div class="container">
 	<div class="row">
 	<div class="col-md-12">
 		<div class="form ">
 		 <form action="" method="POST">
 		 
 		  <strong><input class="inp" type="email" placeholder="Ваш E-Mail"  name="email" >
 		 

 		   </strong> <br/><br/>
 		       





    
 		      
 		        <strong><select class="inp1" type="text" name="subject"  >  
 		            <option value="">Тема вопроса</option> 
 		             <option value="">Привет2</option> 
                     <option value="">Привет1</option> 
                     <option value="">Привет3dsfjlkgjakl;jlkdsfjl;sadjkl;kfl;jgarjgioghfiohjgoijfiojeOIJFIjrfihruhhIFJIOGFJRIHGIRHG</option> 
                      <option value="">Привет4</option> 
                      <option value="">Привет</option> 


               </select>  </strong>  <br/><br/>


                      
			 		  <strong><textarea class="inp2" type="text" name="message" >
			 		   
			 		  

			 		   </textarea></strong>  <br/><br/>
			 		  
			 		  <input type="submit" name="send" class="but" value="Oтрпавить"/>

 		  </form>
 		  </div>

 		</div>
 	</div>
 </div>




<div class="container">
 	<div class="row">
 	  <div class="text3">
 	  Телефон гарячей линии 0-800-503-060 <br>
 	  Время работы администрации тусовки с 8-30 до 20-30


 		</div>
 	</div>
 </div>

<?php include"footer.php";?>
</body>
</html>