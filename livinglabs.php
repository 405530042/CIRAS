<!DOCTYPE html>
<html>
<head>
	<?php include('templates/_head.php'); ?>
</head>
<body id="body">
<?php include('templates/_nav.php'); ?>
	<div class="bw"></div>
	<div id="head_photo">
		<div id="head_img">
		</div>
	</div>
	<div id="page">
		<div id="content">
			<table>
			  <tr>
				<td>
					<div id="list">
						<?php include('templates/_list_livinglabs.php'); ?>
					</div>
				</td>
				<td>
					<div id='topic'>
<img src="images/acell.jpg" style="width: 140px; float: left;">
<br>
<h1>高齡社區共創生活實驗室</h1>
<span style="font-size: 1.2em; color: #616161;">Aging-Community-Engagement Living Labs</span>
<br>
<br>
<br>
<br>

<p style="text-indent: 0em; color:#c45911">1. On paper(Problem-Solution Fit): 思考</p>
<p>-確認假設: 實驗室的作用</p>

<p style="text-indent: 0em; color:#c45911">2. In the market(Product-Market Fit)</p>
<p>-證明顧客在乎特定任務、痛點和獲益</p>
<p>-設計出呼應這些任務、痛點和獲益的價值主張</p>

<p style="text-indent: 0em; color:#c45911">3. In the bank(Business Model Fit)</p>
<p>-找到證據證明你的價值主張能夠遷入一個可擴展、可獲利的商業模式中</p>
<p>-生態系之建立</p>

<br>
<h1 style="color: #00b050">高齡社區共創生活實驗室</h1>

<p style="text-indent: 0em; color:#c45911">一個信念:</p>
<p>-社區風華再現，價值重建</p>
<p>-老人不是依賴者，而是生產者</p>

<p style="text-indent: 0em; color:#c45911">三大目標:</p>
<p>-培力偏鄉社區</p>
<p>-鼓勵活躍老化</p>
<p>-協力文化傳承</p>

					</div>
				</td>
			  </tr>
			</table>
		</div>
	</div>
	<div id="footer">
<?php include("templates/_footer.php"); ?>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$(".expander").click(function(){
			var $p = $(this).parent('li');
			$p.children('ul').slideToggle();

			$(this).toggleClass('exclose');
		});
	});
</script>
</html>