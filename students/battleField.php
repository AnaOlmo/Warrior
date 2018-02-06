<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {

  		public static function createMyWarrior()//une méthode statique createMyWarrior
  		{

  			$Ana= new MarvelWarrior($GLOBALS['warriorID']);//Instancier un guerrier ATTENTION, l'id du guerrier doit être la variable globale warriorID
			  $Weapon= new Weapon ('gun',50);//lui affecter une arme avec 2 parametres weapon et force 
			  $Weapon -> SetImageUrl ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKtokC4VoEqDuu4XoeQ3LujtYUSMhpRYHlHmAaEMV7kdhPWyftPQ");//lui affecter une image d' arme
			  $Ana -> SetWeapon($Weapon);
			  $Ana -> SetImageUrl ("http://marveltoynews.com/wp-content/uploads/2014/07/Guardians-of-the-Galaxy-Hot-Toys-Rocket-Raccoon-Sixth-Scale-Figure-with-Rifle.jpg");//lui affecter une image 
			  $Ana -> saveNew();//la classe localWarrior contient une méthode saveNew
  		}	
  		
  		public static function createOtherWarrior()//une méthode statique createOtherWarrior
  			{
  				$otherWarrior= new MarvelWarrior('bad guy');//Instancier un autre guerrier
			  $Weapon= new Weapon ('blade',40);////lui affecter une arme avec 2 parametres weapon et force 
			  $Weapon -> SetImageUrl ("https://www.flickr.com/photos/mattandkristy/5449508896/");//lui affecter une image d' arme
			  $otherWarrior -> SetWeapon($Weapon);
			  $otherWarrior -> SetImageUrl ("http://1.bp.blogspot.com/-ReGQhlI7omY/U8PFXkLbdgI/AAAAAAABv_Q/MlC1Ta5YG1U/s1600/Ronan.jpg");//lui affecter une image 
			  $otherWarrior -> saveNew();//la classe localWarrior contient une méthode saveNew
  		
  				$otherWarrior1= new MarvelWarrior('devil');
			  $Weapon= new Weapon ('sword',30);
			  $Weapon -> SetImageUrl ("http://www.pngmart.com/files/1/Warcraft-Sword-PNG.png");
			  $otherWarrior1 -> SetWeapon($Weapon);
			  $otherWarrior1 -> SetImageUrl ("https://upload.wikimedia.org/wikipedia/en/3/37/Blade_%28Marvel_Comics%29.png");
			  $otherWarrior1 -> saveNew();
  			}
  }
