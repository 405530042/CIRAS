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
					<h1 style="color:#cf0505;">社會實踐與服務面</h1>
						<ul>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">營造超高齡社會整體友善環境</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">研擬活躍老化之社會互助支持系統</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">推展全人與多面向整合性社會政策</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">協助我國社會順利轉型</li>
						</ul>
						</div>
						<div id='topic'>
					<h1 style="color:#cf0505;">高齡跨域研究面</h1>
						<ul>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">研究發展<br>&nbsp;&nbsp;-&nbsp;&nbsp;深入研析超高齡社會變遷趨勢<br>&nbsp;&nbsp;-&nbsp;&nbsp;開發高齡社會智慧生活多元服務</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">社會實踐<br>&nbsp;&nbsp;-&nbsp;&nbsp;培育具全人關懷的高齡跨域專業研發與服務實踐人才<br>&nbsp;&nbsp;-&nbsp;&nbsp;培育中高階專業及創新創業人才</li>
							
						</ul>
						</div>
						<div id='topic'>
					<h1 style="color:#cf0505;">產業發展面</h1>
						<ul>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">規劃高齡社會產學鏈結發展<br>&nbsp;&nbsp;-&nbsp;&nbsp;智慧生活健康照護的研究<br>&nbsp;&nbsp;-&nbsp;&nbsp;國際交流</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">發展長壽社會健康照護產業<br>&nbsp;&nbsp;-&nbsp;&nbsp;產品與服務模式研發</li>
							<li style="list-style-image:url('images/checkicon.png');color: #616161;font-size: 1.5em;font-family: 'Microsoft JhengHei';line-height: 1.5em;margin: 2% 0;">健康個人和健全社會促進<br>&nbsp;&nbsp;-&nbsp;&nbsp;人才訓練及教育推廣</li>
							
						</ul>
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