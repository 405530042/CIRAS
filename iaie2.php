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
<h1>聯盟整體架構</h1>
						<div id="constpic">
							<img src="images/iaoa.png">
						</div>
<h2><img src="images/checkicon.png"> 中正大學內部資源</h2>
						<div id="constpic">
							<img src="images/iaoa2.png">
						</div>
<h2><img src="images/checkicon.png"> 學研合作對象</h2>
						<div id="constpic">
							<img src="images/iaoa3.png">
						</div>
<h2><img src="images/checkicon.png"> 產學研顧問</h2>
						<div id="constpic">
							<img src="images/iaoa4.png">
						</div>
<h2><img src="images/checkicon.png"> 產業合作對象</h2>
						<div id="constpic">
							<img src="images/iaoa5.png">
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