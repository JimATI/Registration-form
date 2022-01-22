
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
 	
 	$(document).ready (function () {
		$("#sendData").click (function () {
	           var name = $("#name").val ();
	           var surname = $("#surname").val ();
	           var email = $("#email").val ();
	           var password = $("#password").val ();
	           var repassword = $("#repassword").val ();
	           var dataString = 'name1=' + name + '&email1=' + email + '&surname1=' + surname +
	           '&password1=' + password + '&repassword1=' + repassword;

	           $.ajax({
	           	 type: "POST",
	           	 url: "process.php",
	           	 data: dataString,
	           	 cache: false,
	           	 success: function(result){
	           		$("#display").html(result);
	           	 }
	           })
	           return false;
 		});
    });
</script>
</head>
<body>
 <div class="container">
	<h1>Регистрация</h1>
	<form method="post">
		<div id="display"></div><br>
		<input type="text" id="name" name="name" placeholder="Введите имя" class="form-control"><br>
		<input type="text" id="surname" name="surname" placeholder="Ведите фамилию" class="form-control"><br>
		<input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
		<input type="password" id="password" name="password" placeholder="Введите пароль" class="form-control"><br>
		<input type="password" id="repassword" name="repassword" placeholder="Повторите пароль" class="form-control"><br>
		<button type="submit" id="sendData" class="btn btn-success">Зарегистрироваться</button>
	</form>
 </div>
 </body>
</html>