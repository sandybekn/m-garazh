<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>

	<?php $this->head() ?>
</head>
<body>

	<?php $this->beginBody() ?>




	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

			<p class="pull-right"><?= Yii::powered() ?></p>

					<!-- ZERO.kz -->
		<span id="_zero_68884">
			<noscript>
				<a href="http://zero.kz/?s=68884" target="_blank">
					<img src="http://c.zero.kz/z.png?u=68884" width="88" height="31" alt="ZERO.kz" />
				</a>
			</noscript>
		</span>

		<script type="text/javascript"><!--
			var _zero_kz_ = _zero_kz_ || [];
			_zero_kz_.push(["id", 68884]);
			_zero_kz_.push(["type", 1]);

			(function () {
				var a = document.getElementsByTagName("script")[0],
				s = document.createElement("script");
				s.type = "text/javascript";
				s.async = true;
				s.src = (document.location.protocol == "https:" ? "https:" : "http:")
				+ "//c.zero.kz/z.js";
				a.parentNode.insertBefore(s, a);
			})(); //-->
		</script>
		<!-- End ZERO.kz -->
		</div>


		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-97381827-1', 'auto');
			ga('send', 'pageview');

		</script>
		<!-- Yandex.Metrika counter --> 
		<script type="text/javascript"> 
			(function (d, w, c) { (w[c] = w[c] || []).push(function() { 
				try { w.yaCounter44208934 = new Ya.Metrika(
					{ id:44208934, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); 
			} 
			catch(e) { 
			} 
		}); 
			var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), 
			f = function () { 
				n.parentNode.insertBefore(s, n); 
			}; 
			s.type = "text/javascript"; s.async = true; 
			s.src = "https://mc.yandex.ru/metrika/watch.js"; 
			if (w.opera == "[object Opera]") { 
				d.addEventListener("DOMContentLoaded", f, false); 
			} 
			else { 
				f(); 
			} 
		})
			(document, window, "yandex_metrika_callbacks"); 
		</script> 
		<noscript>
			<div>
				<img src="https://mc.yandex.ru/watch/44208934" style="position:absolute; left:-9999px;" alt="" />
			</div>
		</noscript> <!-- /Yandex.Metrika counter -->


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
