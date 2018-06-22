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
<h1>高齡福祉科技國際產學聯盟發展重點：</h1>

<p style="text-indent: 0em"><span style="color:#cc0000">1.研究發展：</span>協助聯盟夥伴研發創新技術與經營模式並辦理國際研討會</p>

<p style="text-indent: 0em"><span style="color:#cc0000">2.產業聚落：</span>智慧健康照護產業園區</p>

<p style="text-indent: 0em"><span style="color:#cc0000">3.國際行銷：</span>協助夥伴參加相關國外商展，辦理大型銀髮產業展、國際互訪與交流活動</p>

<p style="text-indent: 0em"><span style="color:#cc0000">4.人才培育：</span>開設高齡產業推廣教育課程、工作坊與高階照顧產業經營管理碩士專班(Executive Master of Care Administration, EMCA)
</p>
						<div id="constpic">
							<img src="images/pec.jpg">
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