<?php
include('connection/connect.php');
session_start();
$file = fopen("people.txt","r");
$number = fgets($file);
fclose($file);
$datem = date("n",filemtime("month.txt"));
$monthfile = fopen("month.txt","r");
if($datem !== date("n")){
    $monthpeople = 0;
}
else{
    $monthpeople = fgets($monthfile);
}
fclose($monthfile);
if($_SESSION['come']!="v"){
    $number++;
    $file = fopen("people.txt","w");
    fwrite($file, $number);
    fclose($file);
    $monthpeople++;
    $monthfile = fopen("month.txt","w");
    fwrite($monthfile,$monthpeople);
    fclose($monthfile);
    $_SESSION['come'] = "v";
}
?>
<!DOCTYPE html>

<html><!-- InstanceBegin template="/Templates/agei.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="UTF-8">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>國立中正大學高齡研究基地</title>
	<!-- InstanceEndEditable -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- InstanceBeginEditable name="head" -->
    <link rel="stylesheet" type="text/css" href="css/bliss-slider.css">
	<link rel="stylesheet" type="text/css" href="css/link.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/bliss-slider.js"></script>
    <script type="text/javascript" src="js/link.js"></script>
    <!-- InstanceEndEditable -->
</head>
<body>
<div id="page">
	<div id="header">

		<div id="banner-upon">
   			<ul>        
				<li><span>月瀏覽人數: <?php echo $monthpeople;?>人/總瀏覽人數: <?php echo $number; ?>人</span></li>   
        
        		<li><a href="https://www.ccu.edu.tw/"><img src="images/home.png" height="10">&nbsp 回中正大學首頁</a></li>
        
        		<li><a href="login.html">|&nbsp Login</a></li>
          
    		</ul>
		</div>
	  	
    	<div align="center">
    		<a href="index.php" id="logo"><img src="images/logo2.png" alt="Logo" height="75" ></a>
    	</div>

		<ul>
			<li class="current">
				<a href="index.php">最新消息</a>
		   		<ul>
					<li><a href="news1.php">活動公告</a></li>
	                <li><a href="news2.php">時事蒐集</a></li>
	                <li><a href="news3.php">新聞快訊</a></li>
				</ul>
			</li>
			<li><a href="">基地簡介</a>
	            <ul>
					<li><a href="about1.php">研究基地簡介</a></li>
					<li><a href="about2.php">組織架構</a></li>
	                <li><a href="about3.php">研究團隊</a></li>
	                <li><a href="about4.php">未來展望</a></li>
	                <li><a href="about5.php">聯絡我們</a></li>
				</ul>
			</li>
	        <li><a href="">資料庫</a>
	        	<ul>
					<li><a href="project.php">研究計畫</a></li>
	                <li><a href="result.php">研究成果</a></li>
	                <li><a href="consultant.php">顧問名單</a></li>
				</ul>
			</li>
			<li><a href="">活動專區</a>
				<ul>
					<li><a href="activity2.php">近期活動</a></li>
	                <li><a href="album.php">活動紀實</a></li>
				</ul>
			</li>
			<li><a href="cooperation.php">合作夥伴</a>
			</li>
			<li><a href="consultation.php">顧問諮詢</a>
			</li>
	        <li><a href="">研究募款</a>
				<ul>
					<li><a href="raise1.php">募款資訊</a></li>
                	<li><a href="raise2.php">捐款明細</a></li>
				</ul>
			</li>
			<li><a href="">深耕計劃專區</a>
			</li>
		</ul>
	</div>
<!-- InstanceBeginEditable name="Edit" -->
		<div id="body">
			<div class="header">
				<div align="center" style="background: rgb(254,252,234); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(254,252,234,1) 0%, rgba(255,246,186,1) 47%, rgba(254,252,234,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(254,252,234,1) 0%,rgba(255,246,186,1) 47%,rgba(254,252,234,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(254,252,234,1) 0%,rgba(255,246,186,1) 47%,rgba(254,252,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcea', endColorstr='#fefcea',GradientType=1 ); /* IE6-9 */">
                    <!-- <a href="index.html" id="picture"><img src="images/gardening1.jpg" alt="picture" width="580"></a> -->
                    <div id="slider" class="slider-container">
                        <ul class="slider">


                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp19.jpg" alt="Image"></div>
                            
                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp18.jpg" alt="Image"></div>
                            
                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp16.jpg" alt="Image"></div>
                            </li>

                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp15.jpg" alt="Image"></div>
                            </li>

                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp8.jpg" alt="Image"></div>
                            </li>

                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp1.jpg" alt="Image"></div>
                            </li>

                             <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp13.jpg" alt="Image"></div>
                            </li>

                             <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp14.JPG" alt="Image"></div>
                            </li>
                          
                            <li class="slide">
                                <div class="slide-bg"><img src="images/index_pictures/bp10.jpg" alt="Image"></div>
                            </li>
                            
                        </ul>
                        <div class="slider-controls">
                            <div class="slide-nav">
                                <a href="#" class="prev" onMouseOver=document.images["imgprev"].src="images/arrow_left_hover.png" onMouseOut=document.images["imgprev"].src="images/arrow_left.png"><img name="imgprev" src="images/arrow_left.png" height=40 ></a>
                                <a href="#" class="next" onMouseOver=document.images["imgnext"].src="images/arrow_right_hover.png" onMouseOut=document.images["imgnext"].src="images/arrow_right.png"><img name="imgnext" src="images/arrow_right.png" height=40 ></a>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="footer">
				<div class="slider_container_pic">
					<div>
						<img src="images/index_pictures/sp1.jpg" alt="Image">
					</div>
					<div>
						<img src="images/index_pictures/sp6.jpg" alt="Image">
					</div>
					<div>
						<img src="images/index_pictures/sp3.jpg" alt="Image">
					</div>
					<div>
						<img src="images/index_pictures/sp4.jpg" alt="Image">
					</div>
					<div>
						<img src="images/index_pictures/sp5.jpg" alt="Image">
					</div>
                    
				</div>
				<div style="padding-right: 60px;">
					<h1>近期活動</h1>
					<ul>
                    <!--    <li>10/04 宏恩醫院吳子鈞院長演講</li>
                        <li><p>10/06（四）1000-1200 臺灣大學陳東升教授交流座談會</p></li>
                        <li><p>11/24（四）1000-1200 日本東京大學牧野篤教授演講</p></li>
                        <li><p>11/25 將於社科院舉行高齡友善職場研討與座談會</p></li> -->
                    
                    <?php
                        $article_a = mysql_query("select * from articles where article_type='3' or article_type='2' order by year desc, month desc, day desc");
                        $num_a = mysql_num_rows($article_a);
                        if($num_a == 0){
                            ?>
                        <li style="list-style-type:none;"><a href="#" style="text-decoration:none; color:#2a5a07;font-weight:bold;">尚無資訊</a></li>
                            <?php
                        }
                        else{
                            if($num_a > 4) $num_a = 4;
                            for($i=1;$i<=$num_a;$i++){
                            $article_content_a = mysql_fetch_assoc($article_a);
                            $id = $article_content_a['id'];
                            $article_title_a = $article_content_a['title'];
                            if(mb_strlen($article_title_a,"utf-8") > 12){
                                $article_title_ar = mb_substr($article_title_a,0,12,"utf-8");
                                $article_title_ar= $article_title_ar.'...';
                            }
                            else{
                                $article_title_ar = $article_title_a;
                            }
                            $type = $article_content_a['article_type'];
                            $year = $article_content_a['year'];
                            $month = $article_content_a['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content_a['day'];
                            $day_r = sprintf("%02d",$day);
                            if($i==1){
                            if($type == 2){
                                ?>
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="activity1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_ar, '</a>'; ?></li>
                                <?php
                            }
                            else if($type == 3){
                                ?>
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="activity2.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_ar, '</a>'; ?></li>
                                <?php
                            }
                            }
                            else{
                            if($type == 2){
                                ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px;color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="activity1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_ar, '</a>'; ?></li>
                                <?php
                            }
                            else if($type == 3){
                                ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px; color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="activity2.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_ar, '</a>'; ?></li>
                                <?php
                            }
                            }
                        }
                        }
                    ?>
                    </ul>
				</div>
				<div style="padding-right: 40px;">
					<h1>活動公告</h1>
					<ul>
					<!--	<li>10/04 宏恩醫院吳子鈞院長演講</li>
						<li><p>10/06（四）1000-1200 臺灣大學陳東升教授交流座談會</p></li>
						<li><p>11/24（四）1000-1200 日本東京大學牧野篤教授演講</p></li>
						<li><p>11/25 將於社科院舉行高齡友善職場研討與座談會</p></li> -->
                    <?php
                        $article = mysql_query("select * from articles where article_type='1' or article_type='0' order by year desc, month desc, day desc");
                        $num = mysql_num_rows($article);
                        if($num == 0){
                            ?>
                        <li style="list-style-type:none;"><a href="#" style="text-decoration:none;color:#2a5a07;font-weight:bold;">尚無資訊</a></li>
                            <?php
                        }
                        else{
                            if($num > 4) $num = 4;
                            for($i=1;$i<=$num;$i++){
                            $article_content = mysql_fetch_assoc($article);
                            $id = $article_content['id'];
                            $article_title = $article_content['title'];
                            if(mb_strlen($article_title,"utf-8") > 12){
                                $article_title_r = mb_substr($article_title,0,12,"utf-8");
                                $article_title_r .='...';
                            }
                            else{
                                $article_title_r = $article_title;
                            }
                            $type = $article_content['article_type'];
                            $year = $article_content['year'];
                            $month = $article_content['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content['day'];
                            $day_r = sprintf("%02d",$day);
                            if($i==1){
                            if($type == 0){
                                ?>
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197; font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                            }
                            else if($type == 1){
                                ?>
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news2.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                            }
                            }
                            else{
                            if($type == 0){
                                ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px; color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                            }
                            else if($type == 1){
                                ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px;color:#9aa197;font-weight:bold;"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news2.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                            }
                            }
                        }
                        }
                    ?>
					</ul>
				</div>
			</div>
            <div>
            <h1></h1>
            </div>
			<div>
				<div id="link">
				    <div id="link-leftbtm">
				        <img alt="intent" src="images/link_left.png">
				    </div>
				    <div id="link-list">
				        <ul>
                        <li><a target="_blank" href="http://www.activeagingtw.org/AAA/index.php"><img alt="台灣高齡化政策暨產業發展協會" src="images/link13.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://www.oldpeople.org.tw/"><img alt="中華民國老人福利推動聯盟" src="images/link14.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://tag.org.tw/"><img alt="社團法人臺灣老人學學會" src="images/link15.jpg" width="150"></a></li>
                         <li><a target="_blank" href="http://www.idac.tohoku.ac.jp/site_ja/"><img alt="東北大學加齡醫學研究所" src="images/link11.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://www.iog.u-tokyo.ac.jp/?lang=en"><img alt="IOG東京大學高齡社會綜合研究機構" src="images/link12.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://www.hondao.org.tw/"><img alt="財團法人弘道老人福利基金會" src="images/link16.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://www.ltcpa.org.tw/main/"><img alt="社團法人台灣長期照護專業協會" src="images/link17.jpg" width="150"></a></li>
                        <li><a target="_blank" href="http://www.csca365.url.tw/index.html"><img alt="中華銀髮養身照顧協會" src="images/link18.jpg" width="150"></a></li>
				            <li><a target="_blank" href="https://www.cgmh.org.tw/"><img alt="長庚醫院" src="images/link09.jpg" width="150"></a></li>
				            <li><a target="_blank" href="http://som.web.ym.edu.tw/bin/home.php"><img alt="國立陽明大學醫學院" src="images/link02.jpg" width="150"></a></li>
				            <li><a target="_blank" href="https://www.itri.org.tw/"><img alt="工研院" src="images/link01.jpg" width="150"></a></li>
				            <li><a target="_blank" href="http://www.iog.ncku.edu.tw/main.php"><img alt="成大老年所" src="images/link04.jpg" width="150"></a></li>
				            <li><a target="_blank" href="http://www.tzuchi.com.tw/"><img alt="慈濟醫院" src="images/link05.jpg" width="150"></a></li>  
				            <li><a target="_blank" href="http://www.tmu.edu.tw/main.php"><img alt="台北醫學大學" src="images/link06.jpg" width="150"></a></li> 
				            <li><a target="_blank" href="http://www.gaim.cyut.edu.tw/"><img alt="朝陽銀髮管理系" src="images/link07.jpg" width="150" ></a></li>
				            <li><a target="_blank" href="http://www.cych.org.tw/cychweb/cych3/default.aspx"><img alt="嘉義基督教醫院" src="images/link08.jpg" width="150"></a></li>
				            
                            <li><a target="_blank" href="http://www.mohw.gov.tw/cht/LTC/DM1_P.aspx?f_list_no=976&fod_list_no=0&doc_no=55616"><img alt="長照政策專區" src="images/link03.jpg" width="150"></a></li>
				            <li><a target="_blank" href="http://aerc.ccu.edu.tw/allstructure.htm"><img alt="高齡研究教育中心" src="images/link10.jpg" width="150"></a></li>
				                
				        </ul>
				    </div>
				    <div id="link-rightbtm">
				        <img alt="intent" src="images/link_right.png">
				    </div>
				</div>
			</div>
		</div>
<!-- InstanceEndEditable -->
	<div id="footer">
		<p>Advanced Gerontological Expertise Institute (AGEI)&copy; 2016  | All Rights Reserved<br>
62102 嘉義縣民雄大學路一段168號 &nbsp;&nbsp;創新大樓(管理學院)487室&nbsp;&nbsp;聯絡信箱:deptagei@ccu.edu.tw &nbsp;&nbsp;電話：05-2720411#24027(總機)或撥專線05-2729065</br></p>
	</div>
</div>
</body>
<!-- InstanceBeginEditable name="Jscode" -->
<script>
    $(function() {
    	Link();
        $("#slider").blissSlider({
            auto: 1,
            transitionTime: 500,
            timeBetweenSlides: 4000
        });
    });
</script>
<!-- InstanceEndEditable -->
<!-- InstanceEnd --></html>