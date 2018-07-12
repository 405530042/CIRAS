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
			<div id='topic'>
				<div id="recent">
					<h1>文件下載</h1>
					<ul>
					<?php
						$file = mysql_query("select * from ciras_files where file_section='0' order by id asc");
						for($i=1;$i<=mysql_num_rows($file);$i++){
							$file_content = mysql_fetch_assoc($file);
							$file_name = $file_content['file_name'];
					?>
							<form action="" method="post">
							<li><?php echo '<a href="../../CIRAS/uploads/files/',$file_name,'" target="_blank">',$file_name, '</a>'; ?></li>
							</form>
					<?php
						}
					?>
					</ul>
					<hr>
					<ul>
					<?php
						$file1 = mysql_query("select * from ciras_files where file_section='1' order by id desc");
						for($j=1;$j<=mysql_num_rows($file1);$j++){
							$file1_content = mysql_fetch_assoc($file1);
							$file1_name = $file1_content['file_name'];
					?>
							<form action="" method="post">
							<li><?php echo '<a href="../../CIRAS/uploads/files/',$file1_name,'" target="_blank">',$file1_name, '</a>'; ?></li>
							</form>
					<?php
						}
					?>
					</ul>
				</div>
			</div>
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