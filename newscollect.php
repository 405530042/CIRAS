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
					<h1>新聞快訊</h1>
					<p style="text-indent: 0em;">
                    <?php
                	$sql = "select * from news order by id DESC";
                    $news = mysql_query($sql);
                    $data_nums = mysql_num_rows($news);
                    if($data_nums == 0){
                ?>
                    <a href="">目前尚無資料</a>
				<?php
                    }else {				
                        $per = 10;
                        $pages = ceil($data_nums/$per);
                        if(!isset($_GET['page'])){
                            $page = 1;
                        }
                        else {
                            $page = intval($_GET['page']);
                        }
                        $start = ($page - 1) * $per;
                        $result = mysql_query($sql.' LIMIT '.$start.', '.$per);
                        while($news_content = mysql_fetch_assoc($result)){
                    		$content = $news_content['content'];
							$ary_phase = array("\r\n","\r","\n");
                        	$content = str_replace($ary_phase,'<br />',$content);
                        	$content = str_replace('<Link="','<a target="_blank" style="text-decoration:none; color:#298cca" href="',$content);
                        	$content = str_replace('</Link>','</a>',$content);
							$title = $news_content['title'];
                ?>
						<b><?php echo $title;?></b><br>
					 	<?php echo $content;?>
						<br><br>
                <?php
                     	}
				?>
				</p>
				</div>
				<?php
                        echo '<br/><a href=?page=1><button id="pagestyle">首頁</button></a>';
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                        if($pages<10) {
                            for($i=1;$i<=$pages;$i++){
                                echo '<a href=?page='.$i.'><button id="pagestyle">'.$i.'</button></a> ';
                            }   
                        }else {
                            if($page<6) {
                                for($i=1;$i<=10;$i++){
                                    echo '<a href=?page='.$i.'><button id="pagestyle">'.$i.'</button></a>';
                                }
                            }
                            else if($page>$pages-5) {
                                for($i=$pages-9;$i<=$pages;$i++){
                                    echo '<a href=?page='.$i.'><button id="pagestyle">'.$i.'</button></a>';
                                }
                            }else {
                                for($i=$page-4;$i<=$page+5 && $i<=$pages;$i++){
                                    echo '<a href=?page='.$i.'><button id="pagestyle">'.$i.'</button></a>';
                                }
                            }
                        }
                        echo '&nbsp;&nbsp;&nbsp;<a href=?page='.$pages.'><button id="pagestyle">末頁</button></a><br /><br />';    
                    }
                    ?>          
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include("templates/_footer.php"); ?>
	</div>
</body>
<script type="text/javascript">
</script>
</html>