<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
    <body>
         <p><a href = 'C:\Users\AAT\Desktop\Основы программирования\Project Fidback\index.html'>Вернуться назад</a></p>
        <?
          
         if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) and !empty($_POST['message']))
            {
                $to = 'U-English@mail.ru';
                $from = 'Письмо с www.drimtea.github.io';
                $name = trim(strip_tags($_POST['name']));
                $phone = trim(strip_tags($_POST['phone']));
                $mail = trim(strip_tags($_POST['mail']));
                $message = trim(strip_tags($_POST['message']));
                $headers = 'Content-type:text/html;charset=windows-1251';
                
           
                mail($to, $from, $name, $phone, $mail, $message, $headers);
               
                echo 'Ваше сообщение успешно отправлено! Вы получите ответ в ближайшее время' back();
               
                exit;
            }
            else 
            {
                echo 'Для отправки сообщения заполните все поля!' back();
                exit;
            }

        ?>
    </body>
</html>