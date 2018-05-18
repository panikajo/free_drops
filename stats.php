<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Чтение из текстовых файлов</title>
	<meta name="google-site-verification" content="ams1QhwnFqna3g2UQznhO4gtGad1jmh59n7Sq8W0gyI" />
<meta name="yandex-verification" content="11c42bc4b4e3fa42" />
<META HTTP-EQUIV=Cache-Control content=no-cache>
<link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script data-require="jquery@*" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
 document.onkeydown = function(e) {
   e = e || window.event;
 if(e.keyCode == 85 | e.keyCode == 83 | e.keyCode == 123)  {
     return false;
   }
   return true;
 }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47068650-2', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body>
	
	<div class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="container-fluid">
<div class="nav-collapse collapse">
<ul id="menu-menyu-v-shapke" class="nav">
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a title="Кратко о Bootstrap" href="/">Главная</a></li>
</ul>          
</div>
</div>
</div>
</div>
</div>

<?PHP
                $str=file ('statistika.txt');
                        echo '<table border="1">';
                                foreach($str as $val)
                                        {
                                                echo '<tr>';
                                                $mass=explode("|", $val);
                                                for ($i=0; $i<=count($mass)-1;$i++)
                                                        {
                                                echo '<td>'.$mass[$i].'</td>';
                                                        }
                                                echo '</tr>';
                                        }
                                                echo '</table>';


                ?>

	</body>
	</html>
	
