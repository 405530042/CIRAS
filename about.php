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
<h1>關於中心</h1>

<p>根據中華民國內政部人口統計資料，107年3月底，我國65歲以上老年人口已超過14%，正式進入<span style="color: #cc0000">高齡社會(Aged Society)</span>，預估於2025年後將達到20%，成為<span style="color: #cc0000">超高齡社會(Hyper-aged Society)</span>，面對史上首度的人口超高齡現象，政府與國民皆需積極因應面對，為了完整因應臺灣社會超高齡之挑戰，本校於105年成立<span style="color: #cc0000">高齡研究基地</span>，整合校內外學研、產業、社會等各方資源，積極投入高齡跨域應用研究，並於107年初通過教育部高等教育深耕計畫特色領域研究中心計畫，正式成立<span style="color: #cc0000">高齡跨域創新研究中心(Center for Innovative Research on Aging Society, CIRAS)</span>，本中心旨在建構臺灣全人整體社會照顧之多元創新模式，將從「社會轉型」、「高齡生理/心理/認知與運動健康促進」及「生活健康與照護科技」三大層面著手，藉由科學研究與社會實踐，促進台灣高齡者的健康與幸福，更期待能成為我國高齡友善政策與整體社會世代共榮的重要推手。</p>
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
</script>
</html>