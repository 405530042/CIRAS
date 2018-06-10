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
<h1>國立中正大學高等教育深耕計畫第二部分(特色領域研究中心)：高齡跨域創新研究中心</h1>

<p>據內政部106年2月資料，臺灣社會老化指數平均超過100，許多鄉鎮已出現高齡人口高於幼年人口的狀況，面對史上首度的人口超高齡化現象，國家因應方式卻過度著眼於長期照護層面，對其他如經濟發展、勞動力、精神心理、世代正義甚至高齡犯罪等問題的重視度與資源分配皆明顯不足。有鑑於此，本中心將建構全人整體關懷的老化基礎科學研究平台，務求更全面性地回應超高齡社會帶來的問題。</p>
<p>本中心將從「社會轉型」、「高齡生理/心理/認知研究與健康促進」及「生活健康與照護科技」三大層面切入。「社會轉型」層面將從生命歷程的制度重組和社區治理的政策創新為主要策略，檢視當前社會福利和家庭人口政策的片面化與被動治標的防衛性策略，從而轉向以生命歷程體制探討當代問題的相互及積累作用，打破教育到就業、就業到退休、工作與家庭、世代永續等轉銜性新社會風險，探索社會和就業參與、老年經濟安全和樂齡跨世代學習的新模式。「高齡生理/心理/認知研究與健康促進」層面則以高齡者的臨床生理及基礎認知研究為起點，發展高齡運動的理論與實務規劃，同時透過在地文化與社會認知之實務研究，以更在地化，貼近地方需求的方式，促進社區長者的身心靈健康，並提高其社會參與的意願。「生活健康與照護科技」層面將著重於發展高齡者之健康監控與照護促進，包括生理參數監測、行為監控分析、心理情緒預測、活動力促進與強化等各種感測融合系統、個人隨身裝置或輔具，期能協助高齡長者自立生活，提升社區及照護機構的照顧質量。</p>
<p>結合以上三大層面，兼顧基礎研究與社會實踐，以促進高齡者身心靈健康、高齡友善政策發展、生活科技應用研究及青銀世代共榮為目標，期許達成「全人整體關懷」之目的。</p>
						<div id="constpic">
							<img src="images/const.png">
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
	/*$(function(){
		// nav 預設顯示第一個 Tab
		var _showTab = 0;
		var $defaultLi = $('#nav ul li').eq(_showTab).addClass('active');
		// 當 li 頁籤被點擊時...
		$('#nav ul li').click(function() {
			var $this = $(this),
				_clickTab = $this.find('a').attr('href');
			$this.addClass('active').siblings('.active').removeClass('active');
			return false;
		}).find('a').focus(function(){
			this.blur();
		});
	});*/
	$(document).ready(function(){
		$(".expander").click(function(){
			var $p = $(this).parent('li');
			$p.children('ul').slideToggle();

			$(this).toggleClass('exclose');
		});
	});
</script>
</html>