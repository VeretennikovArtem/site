<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>chipsters</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/Lkk.css" rel="stylesheet">
 <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>




<?php include"head.php"; ?>


<div class="container-fluid">
	<div class="row">
	 
		<div class="text">
			Привет,Дмитрий <br>
			твой Email:Mail@Mail.com<br>
			Твой номер телефона: +380530010204 
		</div>
		
	</div>
</div>



<div class="container-fluid">
	<div class="row">
	 
		<form action="recapcha.php" method="POST">
		 <div class="col-md-4 ">
		  <div class="input0">
		  <strong><input type="text" name="name" class="input1" placeholder="Акционный код" > </input></strong>
		  </div>
		  </div>

           <div class="col-md-4">
           <div class="recapcha">
           <div class="g-recaptcha" data-sitekey="6LdbxB4UAAAAAP9VPFhS-n-LPpxPj0FR-qUKsX4K"></div>
           </div>
           


           
		
		   </div>

           <div class="col-md-4">
            <div class="but">
		  <b><button class="button1">Регистрация</button></b>
		   </div>
		   </div>


		  </form>
		
	</div>
</div>





<div class="container-fluid">
	<div class="row">
	 <div class="col-xs-12">
	 <div class="table-responsive">
		<table class="table1" border="2">
			<tr class="tr1">
				<td class="td1"> Дата</td>
				<td class="td1"> Код</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1">Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
				<td class="td1"> Сертификат на покупку модного прикида 250 гр</td>
			</tr>
			<tr class="tr2">
				<td> XX.XX.XX</td>
				<td> XXXXXX</td>
				<td> X или 123456</td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
			<tr class="tr2">
				<td> XX.XX.XX</td>
				<td>XXXXXX</td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
		  </table>
		 </div>
		</div>
	</div>
</div>










<?php include"footer.php"; ?>

	
</body>
</html>