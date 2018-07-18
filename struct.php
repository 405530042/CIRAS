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
						<?php include('templates/_list.php'); ?>
					</div>
				</td>
				<td>
					<div id='topic'>
<h1 style="color:#cc0000">總體營運目標</h1>
<p>本中心整體目標為系統性因應超高齡社會全人發展與照顧，參照國際標竿研究中心 (IOG，日本東京大學高齡社會綜合研究機構) 之作法，以高齡社區共創生活實驗室為核心，連結產官學研、在地居民及社區組織，共同建構社區全人照顧新模式。</p>
						<div id="constpic">
							<img src="images/struct.png">
						</div>
<h2>●以雲嘉嘉為實驗場域，結合高齡跨領域研究成果籌設<span style="color:#cc0000">高齡跨域創新研究中心</span>，培育未來社會所需中高階人才。</h2>
						<div id="constpic">
							<img src="images/struct2.png">
						</div>
<h2>●以前瞻眼光配合創新策略，多層次、系統性整合跨領域資源，同步因應社會與經濟層面之未來挑戰。</h2>
						<div id="constpic">
							<img src="images/struct3.png">
						</div>
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