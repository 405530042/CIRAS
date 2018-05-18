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
						<h1>對社會及產業的貢獻</h1><br>

  		<h1 style="color:#cc0000">(一)建構全人關懷的社會支持系統，研擬活躍老化的在地政策</h1>
  		<p>超高齡社會帶來的是全面性的影響，進而需要全人面向的政策回應。本中心將整合本校7大學院、校外研究單位、地方政府、企業、非營利組織、在地社區組織與居民，共創全人關懷的社區互助支持的新模式，營造促進高齡者健康自立、積極參與的友善環境，研擬我國超高齡社會活躍老化的完整政策。</p>

		<h1 style="color:#cc0000">(二)建立以人為本的「友善科技、健康自立、在地老化」之活躍老化新模式</h1>
		<p>本中心將透過高齡社區共創生活實驗室，使居住在不同區域屬性的民眾、家庭與社區組織可共同參與研究，從使用者共創的角度出發，深入調查因應在地老化所產生的各種食、衣、住、行、育、樂、就業與社會參與需求與影響因子，結合福祉友善科技之研發與應用，開發新創產品與服務，延長高齡長者健康餘命，協助各社區場域建立「友善科技、健康自立、在地老化」的新興照顧關懷模式。</p>

		<h1 style="color:#cc0000">(三)建置臺灣本土超高齡政策智庫，打造亞太地區國際級高齡跨域研究中心</h1>
		<p>先本土化，而後才能國際化；全球化越發激烈，本土化越發重要。本中心位處臺灣人口高齡化最嚴重且城鄉差距極大的雲嘉嘉地區，我們將透過嚴謹的實驗與田野調查，完整收集相關資料，建置臺灣生命歷程事件史趨勢資料庫，藉由學術研究、政策經驗與社會實踐，成立臺灣超高齡社會政策智庫，研擬解決超高齡社會問題的本土化政策，供政府施政參考。此外也將透過此一平台，與國際高齡與生命歷程研究中心共同合作，進行超高齡社會跨國跨域之比較研究，促成亞太區域的研究交流與政策對話，成為亞太國家高齡研究與政策規劃的重要據點，提升臺灣在國際高齡跨域研究領域的發展地位。</p>

		<h1 style="color:#cc0000">(四)培育跨域專業人才，注入高齡產業發展新動力</h1>
		<p>面對超高齡社會的挑戰，專業高齡跨域人才的培育已刻不容緩，本中心將透過一系列的教學、研究、服務與實踐活動，從社區工作與發展、高齡照顧產業、跨域研發與服務實踐、退休與中高齡社會參與等多元面向，培育具有問題解決能力之高齡跨域優質人力資源，並協助企業與非營利組織進行工作職務再設計，推動在地產業與社區服務轉型升級，協助社區與高齡產業的全面發展。 </p>
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