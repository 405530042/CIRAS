<?php
require_once '../library/HTMLPurifier.auto.php';
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
?>
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
			  <?php
                    $type_kind=array("【活動】","【講座】","【參訪】","【研討會】","【論壇】","【其他】");
                    if(isset($_GET['article_id'])){
                        $article_id = $_GET['article_id'];
                        $clean_article_id = $purifier->purify($article_id);
                        $clean_article_id = mysql_real_escape_string($clean_article_id);
                        $article = mysql_query("select * from articles where id like '$clean_article_id'");
                        if(mysql_num_rows($article) == 0) {
                            ?>
                            <h1>查無此資料</h1>
                            <?php
                        }
                        else {
                            $article_content = mysql_fetch_assoc($article);
                            $author_id = $article_content['author_id'];
                            $user = mysql_query("select * from members where id like '$author_id'");
                            $user_content = mysql_fetch_assoc($user);
                            $name = $user_content['name'];
                            $account = $user_content['account'];
                            $title = $article_content['title'];
                            $content = $article_content['content'];
                            $stype = $article_content['sub_type'];
                            $type = $article_content['article_type'];
                            $ary_phase = array("\r\n","\r","\n");
                            $content = str_replace($ary_phase,'<br />',$content);
                            $content = str_replace('<R>','<span style="color:red;">',$content);
                            $content = str_replace('</R>','</span>',$content);
                            $content = str_replace('<B>','<span style="color:blue;">',$content);
                            $content = str_replace('</B>','</span>',$content);
                            $content = str_replace('<G>','<span style="color:green;">',$content);
                            $content = str_replace('</G>','</span>',$content);
                            $content = str_replace('<Strong>','<span style="font-weight:bold;">',$content);
                            $content = str_replace('</Strong>','</span>',$content);
                            $content = str_replace('<Link="','<a target="_blank" href="',$content);
                            $content = str_replace('</Link>','</a>',$content);
                            $time = $article_content['created_time'];
                    ?>
                   
                    <h1><?php echo $type_kind[$stype].$title; ?></h1>
                    <p style="text-indent: 0em;"><?php echo $content; ?></p>
                    <?php
                        $other_article = mysql_query("select * from articles where article_type like '$type' order by year desc, month desc, day desc");
                        $other_num = mysql_num_rows($other_article);
                        $prev = 0;
                        ?>
                    <br/><br/><br/>
                     <?php
                            if($download_files == 1){
                                $picture_query = mysql_query("select * from files where author_id='$article_id'");
                                $picture_result = mysql_fetch_assoc($picture_query);
                                $picture_name = $picture_result['replace_name'];
                                $path = 'uploads/files/'.$picture_name;
                        ?>
                    <a href="<?php echo $path; ?>" data-lightbox-gallery="gallery"><img src="<?php echo $path; ?>" alt="Image" style="width: 400px;"></a>
                        <?php
                            }
                        }
                    ?>
                    <br/><br /><br />
                    <a href="article.php" class="button">返回</a>
                    <?php
                    }
                    else {
                    ?>
                  
                    <?php 
                    function date_cmp($thisdate){
                        $todate = date('Y-m-d');
                        if(strtotime($todate)>strtotime($thisdate))
                            $print = "";
                        else
                            $print = "list-style-image:url('images/new.gif');";
                        return $print;
                    }
                    ?>
				<div id="recent">
					<h1>活動公告</h1>
                    <ul>
                    <?php
                        $sql = "select * from articles where article_type='0' and  year(created_time)=year(now()) order by year desc, month desc, day desc";
                        $article = mysql_query($sql);
                        $data_nums = mysql_num_rows($article);
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
                        while($article_content = mysql_fetch_assoc($result)){
                            $type = $article_content['article_type'];
                            $stype = $article_content['sub_type'];
                            $year = $article_content['year'];
                            $month = $article_content['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content['day'];
                            $day_r = sprintf("%02d",$day);
                            $thisdate = $year.'-'.$month_r.'-'.$day_r;
                            if($type == 0){
                                $id = $article_content['id'];
                                $article_title = $article_content['title'];
                            ?>
                    <li style="<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'<a href="article.php?article_id=',$id,'">',$type_kind[$stype],$article_title, '</a>'; ?></li>
                            <?php
                            }

                        }
                        ?>
                    </ul>
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