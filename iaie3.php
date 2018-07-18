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
						<?php include('templates/_list_pec.php'); ?>
					</div>
				</td>
				<td>
					<div id='topic'>
<h1>目標與運作模式</h1>

<h2>目標</h2>
						<div id="constpic">
							<img src="images/igmo.png">
						</div>


<h2>運作模式</h2>
<p style="text-indent: 0em">1. 以東京大學高齡社會綜合研究機構(IOG)為標竿</p>

<p style="text-indent: 0em">2.以高齡社區共創生活實驗室為協同運作之平臺</p>

<p style="text-indent: 0em">3. 以整合熟齡相關廠商之產品與服務，發展一套以「活躍老化」為理念的在地老化模式，並進一步轉化為商業模式並推展至國際</p>

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