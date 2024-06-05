<?php
error_reporting(0);
  switch ($_GET['page'])
  {
	  case ''				: include "artikel.php";
	  						  break;
	  case 'home'			: include "artikel.php";
	  						  break;
	  case 'profil'			: include "biodata.php";
	  						  break;
	  case 'download'		: include "moduldownload.php";
	  						  break;
	  case 'Contact us'		: include "kontak.php";
	  						  break;
	  case 'artikel'		: include "artikelweb.php";
	  						  break;
	  case 'album'			: include "wowslider.html";
	  						  break;
	  case 'insert' 		: include "insert.php";
	  						  break; 	  
	  case 'view'			: include "view.php";
	  						  break;
		  						  
  }
  ?>