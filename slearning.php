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
<h1>服務學習成果</h1><br>

<h1 style="color:#e69138; text-align:center;">106-1社會法總論關懷高齡者服務學習計畫</h1>
<h2 style="color:#b45f06; text-align:center;">合作單位：民雄文隆社區、新港大潭社區、中埔龍門社區、脊髓損傷協會、梅山文教基金會、Nownews</h2>
<div style="text-align: center;">
<a>
<img src="images/sl/1.png" width="400px">
<img src="images/sl/2.png" width="400px">
<img src="images/sl/3.png" width="400px">
<img src="images/sl/4.png" width="400px">
<img src="images/sl/5.png" width="400px">
<img src="images/sl/6.png" width="400px">
<img src="images/sl/7.png" width="225px">
<img src="images/sl/8.png" width="300px">
<img src="images/sl/9.png" width="225px">
<img src="images/sl/10.png" width="320px">
<img src="images/sl/11.png" width="400px">
</a></div>
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