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

						<h1>協助社會共創發展規劃</h1><br>
							<h1>1. 成立高齡社會資源服務整合中心</h1>
		<p>以7個高齡社區共創生活實驗室為核心，結合社區全人服務資源整合資訊系統，成立高齡社會資源服務整合中心，作為雲嘉嘉高齡相關服務資源(如樂齡、長照、輔具、健康促進或送餐等)的整合樞紐，提供長者、家庭照顧者、社區或非營利組織等單位資源諮詢服務，並協助社區建立互助網絡機制。</p>

							<h1>2.推動社區工作與服務</h1>
		<p>本中心將從「培力社區」、「推行社區工作教育」及「時間銀行」三個面向切入，推行社區工作與服務，使「社區」成為滿足高齡者需求的基礎單位。首先將實際走入社區，與社區共同探討在地需求，培力社區成為具有自主解決問題能力的實體；其次藉由國內相關大專校院社工系所整合平台建立，結合理論與實務、社區與大學合作交流模式，發展在地化社區工作模式。最後將以社區為基礎，實施時間銀行，推行互惠概念，建構社區互助網絡，解決超高齡社會的相關問題。</p>

							<h1>3.推廣樂齡學習</h1>
		<p>本校於今年四月開始指導教育學院成人教育研究所碩士生及博士生，規劃中正樂齡村與青銀共學計畫，以服務社區，前瞻未來，樂齡學習，智慧生活，避免失能，未來將持續此一社會發展策略，並以此為模型擴大本校社會實踐範圍，此外亦將結合樂齡教育、產品開發、旅遊學習等整合方案，帶動社區產業之發展。</p>

							<h1>4.組成跨區域大學實踐聯盟</h1>
		<p>透過聯盟的大學夥伴，將本中心研發成果與運作模式推廣至全國各地，並協助地方政府推動在地社區照顧新創模式，協助中央政府研擬超高齡社會政策，共同推動創齡產業之發展。</p>
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