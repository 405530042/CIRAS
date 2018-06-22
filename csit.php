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
						<?php include('templates/_list_training.php'); ?>
					</div>
				</td>
				<td>
					<div id='topic'>
<h1>培育高齡產業與相關服務人才</h1>

<br>
<h1 style="color:#cc0000">延攬優秀人才</h1>
<p>-研究員與博士後研究制度</p>
<p>-國內外優秀學者駐校研究</p>
<p>-獎勵研究績優人員</p>
<p>-建立跨校研究社群</p>

<h1 style="color:#cc0000">培育高階研發人才</h1>
<p>-碩博士生高齡跨域學術<span style="color: #cc0000">研究輔導計畫</span>與高齡跨域研究<span style="color: #cc0000">碩博士學位學程</span></p>
<p>-籌辦高齡跨域創新實踐(大學部)學程及EMCA碩士專班</p>
<p>-社區人才培力</p>
<p>-在職進修與研習工作坊</p>

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