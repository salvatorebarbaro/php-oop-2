<?php 
//ci importiamo i diversi pezzi che ci servono 
require './models/Product.php';
require './models/Race.php';
require './models/Element.php';
require './models/Users.php';
require './models/PremiumUser.php';
require './models/toy.php';
require './models/food.php';
require_once __DIR__.'./trait/hasWeight.php';

$Cuccia = new Element("Cuccia con fiori",49.99,"Cane","Oggetto","Cuccia molto piccola gradevole con dei fiori che si possono notare sulla cuccia stessa","https://tse3.mm.bing.net/th/id/OIG2.vQBeHWzMf4wNUURP_HhO?pid=ImgGn");

$Tiragraffi = new toy("SuperTiragraffi resistente",32.89,"gatto","Oggetto","tiragraffi verde molto resistente che permette più di 1M di graffi dal vostro simpatico gatto","https://tse2.mm.bing.net/th/id/OIG2.ekuGpvoVUwZu_yD9fH9B?pid=ImgGn","1000 graffi","1,5 kg");

$ciboCane = new food("Croccantini al manzo",18,"Caneasde","Alimento", "Cibo molto puzzolente","https://tse4.mm.bing.net/th/id/OIG2.JqoWRU3BapP1AscqjvMN?pid=ImgGn","horrible","500 gr");

$Elements=[$Cuccia,$ciboCane,$Tiragraffi];

$Cacioppo = new Ospite("Giancarlo","Magalli","Via della sventura 18","Liguria","Italia","Ospite");


?>
