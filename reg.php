<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГрумRoom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contener">
      
      <form action="reg/php/formRegustrsql.php" method="post" class="formRegustr" id="formRegustr">
          <h3>Регистрация (Колосков И.К)</h3>
          <input class="formRegustrInput" type="text" name="fio" id="" placeholder="ФИО" required>
          <input class="formRegustrInput" type="text" name="login" placeholder="Логин" id="login" required>
          <input class="formRegustrInput" type="email" name="email" id="" placeholder="email" required>
          <input class="formRegustrInput" type="password" name="password" id="passwprd1" placeholder="Пароль" required>
          <input class="formRegustrInput" type="password" name="" id="passwprd2" placeholder="Повторите Пароль" required>
          <p><input class="formRegustrInput" type="checkbox" name="" id="checked" >Обработка данных</p>
          <p class="erorses" id="edr"></p>
          <button class="buttons">Зарегистрироваться</button>
      </form>
    </div>
</body>
</html>