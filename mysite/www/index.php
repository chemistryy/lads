<!doctype html>
<html>
<head>
<?php  
    $title = "Главная страница";
    require_once "blocks/head.php"; 
?>
</head>
<body>
 <?php require_once "blocks/header.php"; ?>
<div id="wrapper">
	<div id="leftCol">
		<div id="bigArticle">
			<img src="/img/26a2ca30ebcb69f938478c4ac70912d7.jpg">
			<h2>О МЕРАХ ПО ПОВЫШЕНИЮ КАЧЕСТВА НЕПРЕРЫВНОГО ОБРАЗОВАНИЯ И РЕЗУЛЬТАТИВНОСТИ НАУКИ ПО НАПРАВЛЕНИЯМ «ХИМИЯ» И «БИОЛОГИЯ»</h2>
			<p>Развитие в нашей стране предметов «химия» и «биология», повышение качества образования и результативности науки в данных направлениях определены одними из приоритетных задач Государственной программы «Год развития науки, просвещения и цифровой экономики».</p>
		  <a href="decree.php"><div class="btn">Далее...</div></a>
	   </div>
		<div class="clear"><br></div>
	</div>
	<?php require_once "blocks/rightCol.php"; ?>
</div>

<div class="clear">
   <div id="main_soc_block">
   <center>
     <div id="main_soc_block_in">
	    <h3>Регистрируйтесь на сайте</h3>
		<p>Только у нас лучшие бла, бла, бла!!!</p>
		<a href="reg.html" title="Регистрация">Регистрируйтесь</a>
	 </div>
   </center>
   </div>
</div>
<div class="clear"></div>

   <div class="article">
	   <img src="/img/химия.jpg">
			<h2>Пройдите полный курс <br>химии</h2>
			<p>Курс предназначен для лиц широкой аудитории, может быть использован учителями химии при подготовке школьников к экзаменам и олимпиадам разного уровня.</p>
		  <a href=""><div class="btn">Далее...</div></a>
   </div>
   <div class="article">
	   <img src="/img/биология.jpg">
			<h2>Пройдите полный курс биологии</h2>
			<p>Курс предназначен для лиц широкой аудитории, может быть использован учителями биологии при подготовке школьников к экзаменам и олимпиадам разного уровня.</p>
		  <a href=""><div class="btn">Далее...</div></a>
   </div>
<?php require_once "blocks/footer.php"; ?>
</body>
</html>