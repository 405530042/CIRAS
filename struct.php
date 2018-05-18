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
						<h1 style="color:#cc0000">中心架構</h1>
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