<html>
<head>
  <title>Тест веб-разработка</title>
</head>
<body>
<form method='get'>
<b>1)Веб-разработка-это?</b><br>
<input name="answer[0]" type="radio" value="Bерно">Процесс создания веб-сайта или веб-приложения.<br>
<input name="answer[0]" type="radio" value="Неверно">Процесс производства сайтов, который состоит из технической разработки, создания удобной структуры веб-страницы, графического оформления и передачи информации в сеть.<br>
<input name="answer[0]" type="radio" value="Неверно">Процесс исследования ИС<br>
<b>2)Гипертекст - это:</b><br>
<input name="answer[1]" type="radio" value="Неверно">Текст очень большого размера<br>
<input name="answer[1]" type="radio" value="Верно">Структурированный текст, где возможны переходы по выделенным меткам<br>
<input name="answer[1]" type="radio" value="Неверно">Текст, в который вставлены объекты с большим объемом информации<br>
<br>
<b>3)Программа для просмотра гипертекстовых страниц называется:</b><br>
<input name="answer[2]" type="radio" value="Верно">Браузер<br>
<input name="answer[2]" type="radio" value="Неверно">HTML<br>
<input name="answer[2]" type="radio" value="Неверно">Сервер<br>
<br>
<b>4)Что такое сложный запрос MySQL?</b><br>
<input name="answer[3]" type="radio" value="Верно">это один запрос к нескольким таблицам<br>
<input name="answer[3]" type="radio" value="Неверно">это запрос, в котором участвует одна таблица базы данных<br>
<input name="answer[3]" type="radio" value="Неверно">это обращение к базе данных <br>
<br>
<b>5)Каким тегом объявляется заголовок web-страницы?</b><br>
<input name="answer[4]" type="radio" value="Верно"> title<br>
<input name="answer[4]" type="radio" value="Неверно">body<br>
<input name="answer[4]" type="radio" value="Неверно">scr<br>
<br>
<b>6)Программа для создания Web-страницы с использованием языка HTML:</b><br>
<input name="answer[5]" type="radio" value="Верно">notepad<br>
<input name="answer[5]" type="radio" value="Неверно">paint<br>
<input name="answer[5]" type="radio" value="Неверно">word<br>
<br>
<b>7)Тег b позволяет задать</b><br>
<input name="answer[6]" type="radio" value="Верно">жирный шрифт <br>
<input name="answer[6]" type="radio" value="Неверно">курсив<br>
<input name="answer[6]" type="radio" value="Неверно">подчеркнутый<br>
<br>
<b>8)Тег - это:</b><br>
<input name="answer[7]" type="radio" value="Верно">Специальная команда, записанная в угловых скобках <br>
<input name="answer[7]" type="radio" value="Неверно">Текст, в котором используются спецсимволы <br>
<input name="answer[7]" type="radio" value="Неверно">Указатель на другой файл или объект <br>
<br>
<b>9)Гиперссылки на Web - странице могут обеспечить переход</b><br>
<input name="answer[8]" type="radio" value="Верно">только в пределах данной web – страницы<br>
<input name="answer[8]" type="radio" value="Неверно">только на web - страницы данного сервера <br>
<input name="answer[8]" type="radio" value="Неверно">на любую web - страницу любого сервера Интернет<br>
<br>
<b>10)HTML (HYPER TEXT MARKUP LANGUAGE) является</b><br>
<input name="answer[9]" type="radio" value="Верно">Одним из средств при создании Web-страниц<br>
<input name="answer[9]" type="radio" value="Неверно">Графическим редактором<br>
<input name="answer[9]" type="radio" value="Неверно">Системой управления базами данных<br>
<br>
<b>11)Способ организации информации на Web-сервере называется</b><br>
<input name="answer[10]" type="radio" value="Верно">Web-сайтом<br>
<input name="answer[10]" type="radio" value="Неверно">Файлом<br>
<input name="answer[10]" type="radio" value="Неверно">Гиперссылкой<br>
<br>
<b>12)Какой тег нужно использовать для названия таблицы?</b><br>
<input name="answer[11]" type="radio" value="Верно"> caption<br>
<input name="answer[11]" type="radio" value="Неверно">head<br>
<input name="answer[11]" type="radio" value="Неверно">body<br>
<br>
<b>13)Какое число заголовков первого уровня считается допустимым?</b><br>
<input name="answer[12]" type="radio" value="Верно">1<br>
<input name="answer[12]" type="radio" value="Неверно">2<br>
<input name="answer[12]" type="radio" value="Неверно">3<br>
<input type='submit' name="Submit" value='Отправить'>
</form>
<?php
$k=0;
   if (is_array($_GET['answer'])){
   foreach($_GET['answer'] as $value) 
        {
         if ($value=='Верно') { 
         $k=$k+1;
        }
        echo $value, '<br>'; 
        }
  echo "У вас {$k} правильных ответов", '<br>'; 
      }
?>
</body>
</html>