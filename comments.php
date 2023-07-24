<!DOCTYPE html>
<html lang="ru">
<head>

<title>Омск | Комментарии</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css?version=1" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
<div class="bgded">
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1>Комментарии</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.html">На главную</a></li>
		  
		  <li class="active"><a class="drop" href="#">Подробнее</a>
            <ul>
              <li class="active"><a href="gallery.html">Галерея</a></li>
              <li><a href="comments.php">Комментарии</a></li>
            </ul>
          </li>
		  
		  <li><a class="drop" href="#">Другое</a>
            <ul>
                <li><a href="zametki.html">Заметки</a></li>
            </ul>
          </li>
		  
        </ul>
      </nav>
    </header>
  </div>
</div>

<div class="wrapper row3">
<main class="hoc container clear">

	<div id="comments" class="content">
		<h2>Написать комментарий</h2>

		<form name="form1" action="db.php" method="post">
			<div class="one_third first">
	  
				<label for="name">Name <span>*</span></label>
				<input type="text" name="name" id="name" size="22" placeholder="Введите имя" required>
		
			</div>
			<div class="one_third">
		  
				<label for="email">Mail <span>*</span></label>
				<input type="email" name="email" id="email" size="22" placeholder="Введите email" required>
			
			</div>
			<div class="block clear">
		  
				<label for="comment">Your Comment</label>
				<textarea name="comment" id="comment" cols="25" rows="10" placeholder="Ваше сообщение"></textarea>
			
			</div>
			<div>
		  
				<input type="submit" name="submit" value="Отправить">
				&nbsp;
				<input type="reset" name="reset" value="Очистить">
		
			</div>
		</form>
	</div>
	<div class='inspace-30'>
	<h2>Комментарии</h2>
	</div>
	<?php
	$db=mysql_connect("localhost", "root","");
	mysql_select_db("praktika", $db);
	$sql="SELECT name, email, comment FROM table1";
	$result=mysql_query($sql);
	
	while ($line=mysql_fetch_row($result)) {
		
		echo"<ul><div id='comments' class='comma'>
            <article>
              <header>
                <address>
                Пользователь: <a>$line[0]</a>
                </address>
              </header>
              <div class='comcont'>
                <p>$line[2]</p>
              </div>
            </article>
		</div></ul>";
		

	}
	?>
	
    <div class="clear"></div>
</main>
</div>



<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_third first">
      <h6 class="heading">Получать новости</h6>
      <p class="nospace btmspace-30">Оставьте вашу почту для получения новинок</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Отправить</button>
        </fieldset>
      </form>
    </div>
    <div class="one_third">
      <h6 class="heading">График работы</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace font-x1">Пн - Сб с 9:00 до 18:00*</p>
          </article>
        </li>
		<li>
			<p class="nospace font-xs">*В праздничные дни приём клиентов не осуществляется</p>
		</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Контакты</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          г.Омск ул.Ленина д.1/3 
          </address>
        </li>
        <li> 8 800 555 55 55</li>
        <li> info@gmail.com</li>
      </ul>
      <ul >
        <a href="#"><img width="48" height="48" src="i.png"/></a>
        <a href="#"><img width="48" height="48" src="f.png"/></a>
        <a href="#"><img width="48" height="48" src="t.png"/></a>
        <a href="#"><img width="48" height="48" src="y.png"/></a>
      </ul>
    </div>
  </footer>
</div>

</body>
</html>