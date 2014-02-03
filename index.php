<?php


require_once("initvars.inc.php");

require_once("config.inc.php");

require_once("functions.inc.php");


//require_once("include/session.php");


?>


<!DOCTYPE html>


<html>

<head>

<title><?php echo $page_title  ; ?></title>







<LINK REL="SHORTCUT ICON" HREF="http://www.ehahu.com/favicon.ico" />


  
  
<base href="<?php echo $script_url; ?>/">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="keywords" content="<?php echo $meta_keywords; ?>">

<meta name="description" content="<?php echo $meta_description; ?>">

<link rel="stylesheet" type="text/css" href="dawit.css?<?filemtime("dawit.css")?>">


<link rel="stylesheet" type="text/css" href="css/dev.css?t=<?filemtime("css/dev.css")?>">
<link rel="stylesheet" type="text/css" href="css/common.css?t=<?filemtime("css/common.css")?>">

<link rel="stylesheet" type="text/css" href="userAccount.css?<?filemtime("userAccount.css")?>">

<link rel="stylesheet" type="text/css" href="movie.css?<?filemtime("movie.css")?>">

<link rel="stylesheet" type="text/css" href="event.css">

<link rel="stylesheet" type="text/css" href="myhub.css?<?filemtime("myhub.css")?>">

<link rel="stylesheet" type="text/css" href="tv.css">

<link rel="stylesheet" type="text/css" href="contacts.css">

<link rel="stylesheet" type="text/css" href="faq.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

 <script type="text/javascript" src="jquery/jquery-1.9.1.min.js"></script>


<link href="jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

   <link href="sunny.css" rel="stylesheet" type="text/css" media="screen, projection" />
		




<link rel="alternate" type="application/rss+xml" title="<?php echo rssTitle("", ""); ?>" 

	href="<?php echo "{$script_url}/{$global_rssurl}"; ?>">

<?php if (!empty($rssurl)) { ?>

<link rel="alternate" type="application/rss+xml" title="<?php echo rssTitle(($xsubcatname?$xsubcatname:$xcatname), ($xcityname?$xcityname:"")); ?>" 

	href="<?php echo "{$script_url}/{$rssurl}"; ?>">
	

<?php } ?>


<?php //include_once("inc/carousel.inc.php");?>


<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-43838283-1', 'ehahu.com');

  ga('send', 'pageview');



</script>
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
</head>




	


<body>


<?php /*Header Area*/?>
<header>
<h2 style="display:none"> Header Section </h2>


<?php include("header.inc.php"); ?>
 <?php //include("path.inc.php"); ?>
</header>

<?php /*Navigation Area*/?>
<nav class="navWrapper" >
<?php include("navigation.inc.php"); ?>	
</nav>


<article class="mainWrapper">

<h2 style="display:none"> Main Content Section </h2>

<?php  
$page = "main.php";
//the code below is taken from refrence purpose only
//$xview = $_GET['view'] ? $_GET['view'] : "main";
switch($xview){

			case "subcats": $page = "subcats.php";break;

			case "ads": 

			case "events": $page = "ads.php";break;
			
			case "myHub": $page = "myhub.php";break;
			
			case "delete": $page = "delete.php";break;
			
			case "update": $page = "update.php";break;
			
			case "register": $page = "register.php";break;
			
			case "login": $page = "login.php";break;
			
			case "forgetPassword": $page = "forgotpass.php";break;
			
			case "userinfo": $page = "userinfo.php";break;
			
			case "useredit": $page = "useredit.php";break;
			
			case "movie": $page = "movie.php";break;
			
			case "theatres": $page = "theatres.php";break;
			
			case "showMovie": $page = "showmovie.php";break;
			
			case "movieForm": $page = "movieForm.php";break;
			
			case "movieEdit": $page = "movieEdit.php";break;
			
			case "tvForm": $page = "tvForm.php";break;
			
			case "tvLogin": $page = "tv_login.php";break;
			
			case "tvSchedule": $page = "tv_schedule.php";break;
			
			case "tvEdit": $page = "tvEdit.php";break;
			
			case "eventForm": $page = "eventForm.php";break;
			
			case "eventLink": $page = "event.php";break;
			
			case "eventPrivateLogin": $page = "event_private_login.php";break;
			
			case "eventEdit": $page = "eventEdit.php";break;
			
			case "showEvent": $page = "showEvent.php";break;
			
			case "football": $page = "football.php";break;
			
			case "footballForm": $page = "footballForm.php";break;
			
			case "readMore": $page = "readMore.php";break;
			
			case "efeedback": $page = "efeedback.php";break;
			
			case "formPass": $page = "formPass.php";break;
			
			case "myContact": $page = "contacts.php";break;
			
			case "jEmployerForm": $page = "controller/jEmployerForm.php";break;
			
			case "jList": $page = "controller/jList.php";break;
			
			case "version": $page = "version.php";break;
			
			case "faq": $page = "faq.php";break;
			
			case "newUserList": $page = "newUserList.php";break;
			
			case "aboutUs": $page = "aboutUs.php";break;
			
			case "showad": 

			case "showevent": $page = "showad.php";	break;

			case "epostCategory": $page = "epost.php";break;
			
			case "post": $page = "post.php";break;

			case "edit": $page = "edit.php";break;

			case "imgs": $page = "imgs.php";break;

			case "showimg": $page = "showimg.php";	break;

			case "postimg": $page = "postimg.php";break;

			case "editimg": $page = "editimg.php";break;

			case "activate": $page = "activate.php";break;

			case "selectcity": $page = "selectcity.php";break;

			case "mailad": $page = "mailad.php";break;

			case "post404": $page = "post404.php";break;

			case "page":if (isCustomPage($_GET['pagename'])) { $page = "$_GET[pagename].php"; }	break;

		}



		include_once($page);



		?>



	
</article>


<aside class="SideWrapper">
<h2 style="display:none"> Side Bar section </h2>
<?php
include("sidebar_right.inc.php");
?>
	

</aside>


		





		

       

     

        



		









	



			

<footer class="footerWraper">

<h2 style="display:none"> Footer section </h2>
<?php include("footer.inc.php"); ?>

</footer>



 <script type="text/javascript" src="js/main.js"></script>


</body>

</html>