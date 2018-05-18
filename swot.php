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
						<h1>自我評估與SWOT分析</h1>
<table>
  <tr>
  	<td>
  		<h1 style="color:#cc0000">(一)自我評估</h1>
  		<h2>1. 具備特色領域的高齡研究</h2>
  		<p>本中心所推動之「高齡跨域創新」研究，整合了本校社會福利、人力資源、高齡教育、認知科學、運動健康、休閒管理、生物醫學及生物化學等研究領域，並配合本校表現優秀的工程研究、通訊研究等領域，使本校在高齡研究方面擁有豐沛之研究能量。其中社會福利學系、成人教育學系、勞工關係等系所，成立迄今已二十餘年，長期投入高齡相關領域的研究，在成果調查、政策規劃與建議及諮詢座談，均擔任重要的參議角色，如內政部與衛生署合作的「建構長期照護體系先導計畫」；衛生署推動的「長期照顧管理中心」；教育部「邁向高齡社會：老人教育政策白皮書」；以及鼓勵地方政府設立長青活動站、長青活動中心、樂齡學習中心等，這些政策與計畫，本校社會福利學系、勞工關係學系、成人教育學系等系所均長期參與其中的諮詢、規劃及執行。以上述特色領域研究與長期實務經驗為基礎，本中心必可由宏觀視野對高齡社會進行全面性研究及政策建議，協助政府建立跨部會機制，提出完整策略與全面方針。</p>

  		<h2>2. 具備厚實人文社會科學基礎</h2>
  		<p>本校在人文及社會科學領域的學門及科系建制與國內其它大學，特別是中南部大學相較，建置相當完整，殆無疑義其中不乏有全國首創，獨具研究、教學特色之系所，如社會福利系、勞工關係學系、傳播學系等。人社領域內之研究成員致力於理論方法之專精、持續進行專題研究，協助政府規劃政策，在各類期刊、研討會、專書中均可見質量俱精的論文。以國科會近五年統計資料來說，本校人社領域始終保持於前八名內，可說是表現優秀與研究能量充沛的最具體證明。</p>

		<h2>3. 具備「以人為本」的新型照護科技研發技術</h2>
		<p>在照護科技的研發方面，結合醫學、心理學及社會學的知識，運用無線感測網路、隱形心肺喉感測、智慧型輔具機器人等技術，讓高齡者照護能達到縝密、貼心並顧及隱私保障。這其中許多應用技術更屬國內頂尖，如運用多波束相列天線、分頻多工、極化分集技術和特用演算法的無線室內定位系統，可針對30個快速運動目標體進行動態大區域室內無線定位，總定位區域面積約為32x32平方公尺(約300坪)。誤差小於30公分、更新速度為20次／秒，效能已超越商用室內定位系統，目前為國防部採用，建置於軍事基地使用中。另有隱形心肺喉感測技術，不須以生理感測晶片也能監測高齡者的呼吸、心跳和聲帶振動波形，是臺灣第一個擁有此技術的團隊。</p>

		<h2>4. 具備跨域實踐與社區紮根的樂齡教育</h2>
		<p>本校教育學院具有領先的教育領導以及成人教育，加上獨特卓越的犯罪防治研究，有助於高齡研究之跨域需要。研究團隊在樂齡教育方面，已經有札實的基礎，特別是樂齡學習課程開發、安可生涯訓練、人力資源開發與應用方面，已有十年之經驗，屬於先驅團隊。目前國內有關樂齡學習的理論發展、課程架構、人才訓練策略、樂齡學習中心之經營工作手冊、教學模式與評鑑指標，均係本中心樂齡研究團隊所開發、執行，歷年來並持續系列出版。據此豐富之實踐經驗，可以有利的擴大開展樂齡人生、活躍老化智慧生活產品。</p>
  	</td>
  	<td>
  		<h1 style="color:#cc0000">(二)SWOT分析</h1>
  		<p>綜合上述之評估，本校內部優劣勢與外部機會及威脅之分析如下：
  		<img src="images/swot.png" id="swotpic" width="220px">
  		</p>
  	</td>
  </tr>
</table>
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