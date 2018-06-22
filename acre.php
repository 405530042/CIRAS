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
						<?php include('templates/_list_acre.php'); ?>
					</div>
				</td>
				<td>
					<div id='topic'>
<h1>學術研究規劃</h1>
					<div id="constpic">
						<img src="images/acre.jpg">
					</div>
<h1>社會轉型研究群</h1>
<p style="text-indent: 0em">●研究特色</p>
<p>-關注全人生命歷程</p>
<p>-活化社區生態體系</p>

<h1>高齡生理、心理、認知與運動健康研究群</h1>
<p style="text-indent: 0em">●研究特色</p>
<p>-基礎研究與社區應用實踐相輔相成</p>

<h1>生活健康與照護科技研究群</h1>
<p style="text-indent: 0em">●研究特色</p>
<p>-尖端科技輔助社區照護與健康生活</p>

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