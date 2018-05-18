<?php include('../connection/connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('templates/_head.php'); ?>
</head>
<body id="body">
	<div id="head">
		<div class="container">
			<div id="head_icon">
				<a href="http://agei.ccu.edu.tw/CIRAS"><img src="#" width=270px height=130px></a>
			</div>
		</div>
		<div class="container">
			<div id="head_txt">
				<div id="upon">
<?php include('templates/_upon.php'); ?>
    			</div>
				<div id="nav">
<?php include('templates/_nav.php'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bw"></div>

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
						<h1>強化與國際標竿中心合作</h1><br>

  		<p>IOG整合來自東京大學醫學、護理、教育、工程、人文社會、法學、公共政策、農學、綜合文化、資訊科學與數理科學等30個系所，透過基礎研究、人才培育與官產學民合作共創三大策略，因應超高齡社會帶來的社會問題，創造活躍健康長壽的超高齡社會新模式，期能帶動跨領域高齡學飛躍進展，為高齡社會開創新生活方式、創造新產業並實現嶄新社會制度，使日本成為可蓬勃發展的超高齡社會國家，並推廣此模式，成為世界領先的亞洲最佳高齡學教育與研究機構。</p>

		<p>其具體目標包含，(1)延長高齡者健康自立餘命：透過預防醫學、照護預防、健康促進活動、飲食問題改善，達成自立期間最大化、被照護期間最小化，延長高齡者健康自立期間；透過社區活動、就業、社會參與，預防高齡者社會退出與鼓勵社會參與，讓高齡者也能對社會有所貢獻，達成延長健康壽命的關鍵目標。(2)友善環境的支持：透過到宅照護、到宅醫療、營造友善環境、生活支持系統的建立，即使高齡者的活動力下降，也要建立使其能在地老化的全面協助方案。(3)整頓社會制度：要實現一個蓬勃發展的超高齡化社會，有必要全面檢視及調整整個社會制度，透過跨部門的共創，從醫療與護理生命支持系統，飲食方式和生活方式，工作生活平衡，養育子女和社區生活環境和社會環境，改善和重組城市基礎設施，社會保障體系等基礎設施，深度整頓社會體系。</p>

		<p>人才培育部分，IOG整合東京大學9個研究生學院與30個系所的跨領域教學，結合產官學民合作共創與國際合作等策略，共同培育具備高齡社會問題專業研究能力、見樹又見林的理解能力、問題解決導向的社會實踐能力之優秀人才，領導世界共創一個蓬勃發展的超高齡社會。IOG另一項特色是透過<span style="font-weight:bold">生活實驗室(Living Lab)</span>，連結產官學民等在地組織，建立平等互惠共同參與的共生共創關係，攜手進行探索、實驗、評價、共創等活動，回應高齡社會相關學術研究、產品研發、社會創新、服務實踐等多重需求。</p>

		<p>本中心將參考IOG之整體運作模式，以基礎研究與科技研發做為基底，學術工作者將其知識與理論轉為行動研究，特別是以生活試驗室連結產官學，走入社區與在地居民共同合作之理念與作法，將是本中心的未來主要之運作模式。藉由<span style="font-weight:bold">高齡社區共創生活實驗室</span>此一平台，<span style="font-weight:bold">與產官學研、社區居民及在地組織</span>，攜手進行學術研究、技術研發、人才培育、社會服務、國際合作，以科技為輔助，以教育為策略觀點，透過社區資源整合，社區全民投入，輔以大學研究與輔導諮詢為引導，一同解決雲嘉嘉地區超高齡社會問題，<span style="font-weight:bold">共創臺灣超高齡社會因應新模式</span>，再透過全國跨區域大學實踐聯盟與高齡跨域國際產學聯盟的籌組，將此新創模式推廣到更多地方。</p>

		<p>東京大學高齡社會綜合研究機構作為日本乃至於世界上著名的高齡研究機構，本中心期待於5年內達到該機構之規模與成就，雖有其困難處，然而積極作為就是轉機。近年來跨國比較研究興起，「在地化」研究越深入則越容易「國際化」，如能貫徹「在地老化」理念以及結合本校基礎研究、科技研發與社區工作多年的成果，本中心有信心5年後將能建立具臺灣特色的「在地老化」高齡研究模式，並以此為開端，嘗試推動臺灣與日本乃至東亞地區的跨國比較研究，讓本校的「高齡跨域創新研究中心」成為國際上想瞭解臺灣高齡研究現況最佳選擇。</p>

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