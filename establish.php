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
<h1>成立宗旨</h1>

<br>
<h1 style="color:#cc0000">背景分析</h1>
<p style="text-indent: 1em">-2018年我國65歲以上老年人口超過14%，<b>高齡社會(Aged Society)</b><br>
　-2025年後將達到20%，<b>超高齡社會(Hyper-aged Society)</b><br>
　-2050年後將超過35%，<b>每三人中就有一人超過65歲</b></p>

<h2 style="text-indent: 1em">1. 因應臺灣社會超高齡化之挑戰</h2>
						<div id="constpic">
							<img src="images/challenge.png">
						</div>

<h2 style="text-indent: 1em">2. 翻轉與重新定位高齡研究及實務發展現況</h2>
<p>過去國內高齡相關的研究，多由地處都會區的大型研究機構執行，以去社會脈絡化的觀點進行研究，然而從本校的研究與實踐中發現，城鄉差距不只在環境與社會資源的質量及分配上有所不同，<span style="color:#cc0000">環境差異更進一步造成個人在生活型態、觀念、動機等許多微觀層次的分歧</span>，進而在家庭、組織、文化等更宏觀層次產生重大影響。</p>
<p><span style="color:#cc0000">高齡化對於個人、家庭、組織與社會所造成的影響，隨著時間變化產生極大個別差異</span>，這樣的個別差異在橫斷面的研究與實踐中很容易被當成是系統性的誤差而被忽略，致使大眾無法真正了解高齡隨著時間帶來的變化與服務實踐的成效。</p>
<p>當前社會、教育與學術環境，多僅強調<span style="color:#cc0000">個人與短期績效</span>，不管是學校、研究機構、社區發展協會、非營利組織、企業或各級公部門組織，皆難以進行長期的研究、社會實踐或人才養成之持續性方案。</p>
<p>因此本中心藉由<span style="color:#cc0000">較為長期的深耕計畫</span>，將橫斷後續研究(cross-sequential study)的方法與觀念引入整體研究、實踐與服務中，期待為我國建立一個<span style="color:#cc0000">全面性、系統性且可長期追蹤的高齡跨域研究與創新服務實踐推廣平台</span>，並配合社會實際需求，培育優秀的未來人才。</p>

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