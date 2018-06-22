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
<h1>國際產學聯盟</h1>

<p style="text-indent: 0em"><span style="color:#cc0000">1.發展重點：</span></p>

<p style="text-indent: 0em"><span style="color:#cc0000">2.聯盟整體架構：</span></p>

<p style="text-indent: 0em"><span style="color:#cc0000">3.目標與運作模式：</span></p>

<p style="text-indent: 0em"><span style="color:#cc0000">4.預期效益：</span></p>

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