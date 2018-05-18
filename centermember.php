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
						<h1>中心成員</h1>
						<div id="constpic">
							<img src="images/const.png">
						</div>
<h1 style="color: #cc0000;">參與教師群專長</h1>
<div id="member">
<?php $cmember = mysql_query("select * from irig_centermember order by id");
		$total = mysql_num_rows($cmember);
		if($total == 0){
?>
			<p>目前尚無資料</p>
<?php
		}else {
			for($i=1; $i<=$total; $i++) {
				$cm_content = mysql_fetch_assoc($cmember);
				$depart = $cm_content['depart'];
				$name = $cm_content['name'];
				$profession = $cm_content['profession'];
				$profile = $cm_content['profile'];
?>
				<p><?php echo $depart; ?> <a href=<?php echo '"'.$profile.'"'; ?>><?php echo $name; ?></a> <?php echo $profession; ?></p>
<?php 	
			}
		}
?>
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