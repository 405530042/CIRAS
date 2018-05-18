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

					</div>
				</td>
				<td>
					<div id='topic'>
<h1>建置中</h1>
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