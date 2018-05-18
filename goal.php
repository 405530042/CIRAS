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
<h1>目標</h1><br>

<h1 style="color:#cc0000">一、總體目標</h1>
<p>本中心整體目標為系統性因應超高齡社會全人發展與照顧，參照國際標竿研究中心(日本東京大學高齡社會綜合研究機構，IOG)之作法，以高齡社區共創生活實驗室為核心，連結產官學研、在地居民及社區組織，共同建構社區全人照顧新模式。在社會實踐與服務面向，以營造超高齡社會整體友善環境、研擬全面性前瞻超高齡社會因應政策及協助我國社會順利轉型為目標；在高齡跨域研究方面，透過臺灣生命歷程跨域長期研究資料庫的建置為核心，從全人發展的生理、心理、社會、靈性生命與科技應用等涵蓋微觀與鉅視之面向，深入研析超高齡社會變遷趨勢，兼顧研究發展與社會實踐，提出具體因應方案，並培育具全人關懷的高齡跨域專業研發與服務實踐人才；在產業發展部分，以超高齡社會個人、家庭與社會之需求為核心，透過產學研民與國際合作，共同發展全球本土化之新創高齡產品與服務，全方位扶植高齡相關產業。</p>

<h1 style="color:#cc0000">二、中短期目標</h1>
<p>根據本中心成立之目標與預計達成效益，從短中長期而言，分列如下表：</p>
<p style="font-weight: 700">(一)短期(第一、二年)目標</p>
<div id="constpic">
	<img src="images/goal.png">
</div>
<p style="font-weight: 700">(二)中期(第三、四年)目標</p>
<div id="constpic">
	<img src="images/goal2.png">
</div>
<p style="font-weight: 700">(三)長期(第五年)目標</p>
<div id="constpic">
	<img src="images/goal3.png">
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