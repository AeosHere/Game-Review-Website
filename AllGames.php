<!DOCTYPE HTML>
<html>
	<head>
		<script>
		</script>
		<style>
		body
		{
			background-image: url("paisley.jpg");
			color:blue;
			min-width:300px;
		}
		img 
		{
			width:100px;
			height:100px;
		}
		a
		{
			color:red;
			text-decoration:none;
		}
		div#popularGames1
		{
			position:absolute;
			top:5%;
			left:63%;
		}
		div#popularGames2
		{
			position:absolute;
			top:7%;
			left:81%;
		}
		div#popularGamesToCome1
		{
			position:absolute;
			top:70%;
			left:63%;
		}
		div#popularGamesToCome2
		{
			position:absolute;
			top:70%;
			left:81%;
		}
		div#headlines
		{
			position:absolute;
			font:18pt arial;
			right:30%;
		}
		div#title
		{
			position:absolute;
			color:white;
			font:24pt arial;
			text-align:center;
			border:solid;
			border-radius:8px;
			border-color:pink;
			background-color: pink;
			background-image: url("http://www.transparenttextures.com/patterns/argyle.png");
			height:19%;
		}
		div#topStories
		{
			position:absolute;
			width:700px;
			height:300px;
			margin-left:35%;
			top:10%;
			font:18pt impact;
		}
		div#TT
		{
			position:absolute;
			right:47%;
			bottom:90%;
			font:18pt arial;
			color:blue;
			
		}
		img#richardsym
		{
			position:absolute;
			right:68%;
			width:180px;
			height:180px;
			border:solid;
			border-color:black;
		}
		</style>
	</head>
	<body onload = "">
		<?php
			/*
			$games = new PDO("mysql:host=fdb7.awardspace.net;dbname=1886854_games","1886854_games","32qw32qw32qw");
			$cmd = "SELECT * FROM Games";
			$statement = $games->prepare($cmd);
			$statement->execute();
			$data = $statement->fetch();
			print_r($data);
			/*
			$rowcount = $statement->rowCount();
			print_r($rowcount);
			*/
			$querysearch = $_POST['favs'];
			$querysearch = explode(" ",$searchquery);
			for($i=0;$i<count($querysearch);$i++)
			{
				$querynow = "%".$querysearch[$i]."%";
				$cmd = "SELECT * FROM Games WHERE Name LIKE '$querynow' OR Genre LIKE '$querynow' OR Platform LIKE '$querynow' OR Description LIKE '$querynow'";
			}
			$games = new PDO("mysql:host=fdb7.awardspace.net;dbname=1886854_games","1886854_games","32qw32qw32qw");
			$statement = $games->prepare($cmd);
			$statement->execute();
			$data = $statement->fetchAll(PDO::FETCH_ASSOC);
			echo $data;
			/*
			$rowcount = $statement->rowCount();
			for($p=0;$p<$rowcount;$p++)
			{
				echo $data[0][Description];
			}
			*/
		?>
		<div id = "title">
		<br/>
		Richard's Video Game Site <br/>
		The Best Gaming Review <br/>
		Site Ever
		</div>
		<a href = "Final Website Splash Page.html"> <img id = "richardsym" src = "symbol.jpg"/> </a>
		
		<div id = "headlines">
		<a href = "Trailers.html"> Trailers </a> <a href = "Reviews.html"> Reviews </a> <a href = "PS4Games.html"> PS4 </a> <a href = "XboxOneGames.html"> Xbox One </a> <a href = "PCGames.html"> PC </a> <a href = "WiiUGames.html"> Wii-U </a> <a href = "UserShop.html"> User Shop </a> <a href = "MiniGames.html"> Mini-Games </a> <div> <?php echo "$querysearch"; ?> </div>
		</div> <br/>
		</div> <br/>
		<div id = "popularGames">
			<div id = "popularGames1"> 
				Current Popular Games! <br/>
				<img src = "gtav.jpg"/> 1. <a href = "gtaV.html"> Grand Theft Auto V </a> 10 <br/>
				<img src = "bloodborne.jpg"/> 2. <a href = "bloodborne.html"> Bloodborne </a> 9.1 <br/>
				<img src = "pillarsofeternity.jpg"/> 3. <a href = "pillarsofeternity.html"> Pillars of Eternity </a> 9 <br/>
				<img src = "xenoblade.jpg"/> 4. <a href = "xenobladechronicles.html"> Xenoblade Chronicles </a> 8.7 <br/>
				<img src = "mlb15.jpg"/> 5. <a href = "mlb15theshow.html"> MLB 15: The Show </a> 8.5 <br/>
			</div>
			<div id = "popularGames2">
				<img src = "mortalkombatx.jpg"/> 6. <a href = "mortalkombatx.html"> Mortal Kombat X </a> 8.4 <br/>
				<img src = "titansouls.jpg"/> 7. <a href = "titansouls.html"> Titan Souls</a> 8 <br/>
				<img src = "neverwinter.jpg"/> 8. <a href = "neverwinter.html"> Neverwinter </a> 7.3 <br/>
				<img src = "lifeisstrange.jpg"/> 9. <a href = "lifeisstrange.html"> Life is Strange Episode 2 </a> 7 <br/>
				<img src = "rbi15.jpg"/> 10. <a href = "rbibaseball.html"> RBI Baseball 15 </a> 4.9 <br/>
			</div> 
		</div> <br/>
		<div id = "popularGamesToCome1">
			Popular Games Coming Soon! <br/>
			<img src = "thewitcher3.jpg"/> 1.  The Witcher 3: Wild Hunt </a> May 19 </br>
			<img src = "persona5.jpg"/> 2.  Persona 5 </a> TBA 2015 </br>
			<img src = "eslunlimited.jpg"/> 3.  ESO: Tamriel Unlimited </a> Jun 9 <br/>
			<img src = "kingdomhearts3.jpg"/> 4.  Kingdom Hearts III </a> TBA <br/>
			<img src = "projectcars.jpg"/> 5.  Project CARS </a> May 12 <br/>
		</div>
		<div id = "popularGamesToCome2">
			<img src = "wolfensteintheoldblood.jpg"/> 6.  Wolfenstein:The Old Blood </a> May 5 <br/>
			<img src = "legendofzeldawii.jpg"/> 7.  The Legend of Zelda Wii-U </a> TBA <br/>
			<img src = "metalgearsolid5.jpg"/> 8.  MGS V: The Phantom Pain </a> Sept 1 <br/>
			<img src = "batmanarkhamknight.jpg"/> 9.  Batman: Arkham Knight </a> Jun 23 <br/>
			<img src = "stateofdecay.jpg"/> 10.  State of Decay: Year One Survival Edition </a> Apr 28 <br/>
		</div>
		
		<script>
			poll1 = document.getElementById("poll");
			poll2 = document.getElementById("poll2");
			poll3 = document.getElementById("poll3");
			poll4 = document.getElementById("poll4");
			poll5 = document.getElementById("poll5");
		</script>
	</body>
</html>