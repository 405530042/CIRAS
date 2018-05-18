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
<h1>策略</h1><br>

<p>為達成總體營運目標，本中心將根據過去社區據點轉型之研究成果，挑選7個不同類型場域(包含都會、農村、漁村、山區、安養機構、身心障礙者、青銀共居)，透過與在地公、私、非營利組織以及工研院、資策會、第一銀行、嘉品生技、科技城、慈濟大林醫院、嘉義基督教醫院、榕懋實業及東京大學高齡社會綜合研究機構等外部產官學研單位共同攜手合作，建立7個<span style="font-weight:bold">高齡社區共創生活實驗室(Aging-Community-Engagement Living Labs) </span>，作為學術研究、人才培育、社會共創、產業發展、國際合作的平台，搭配<span style="font-weight:bold">臺灣生命歷程跨域研究資料庫與高齡社會全人服務資訊整合系統</span>的建立，提供研發單位進行長期追蹤研究，並透過巨量資料的即時與預測分析，提供服務實踐單位掌握先機及早因應。</p>
<div id="constpic">
<img src="images/stradgey.png">
</div>
					</div>
				</td>
			  </tr>
			</table>
		</div>
	</div>
	<div id="footer">
<?php include("templates/footer.php"); ?>
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