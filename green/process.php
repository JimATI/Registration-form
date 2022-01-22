<?php
$name = $_POST['name1'];
$email = $_POST['email1'];
$surname = $_POST['surname1'];
$password = $_POST['password1'];
$repassword = $_POST['repassword1'];

$fields = [
	  name => ['Pavel','Egor','Vlad'],
    id => ['Pavel','Egor','Vlad'],
    email => ['Pavel@ru.ru','Egor@ru.ru','Vlad@ru.ru'],
];

if (stristr($email, '@')) {

	 if ($password != '' && $repassword != '') { 

     if ($password == $repassword) { 

       
	     if (in_array($email, $fields[email])) {
	    	   echo "Такой email уже зарегестрирован";
	           $logFileName = "log.txt";
             $message = $email . " - обновлен " . date('d.m.Y H:i:s') . "\n";
               file_put_contents($logFileName, $message, FILE_APPEND);
           exit(); 
       } else {
        	 echo '
               <meta http-equiv = "Refresh"
               content = "0 ; URL = registration.html">
        	      ';
                $logFileName = "log.txt";
                $message = $email . " - обновлен " . date('d.m.Y H:i:s') . "\n";
                  file_put_contents($logFileName, $message, FILE_APPEND);
        	  exit();
         } 
        
       
      } else {
 	        echo "Пароли не совпадают";
        }
    } else {
        echo "Заполните все поля паролей";
      }
} else {
	    echo "Вы ввели некорректный email";
  }
?>





 


          
                     
