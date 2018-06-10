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
    <div id ="recent">
    <h1><a href="article.php" style="color:#616161;">活動公告</a></h1>
					<ul>
                    <?php
                    $article = mysql_query("select * from articles where article_type='0' and sticktop='1' order by year desc, month desc, day desc");
                    $article_c = mysql_query("select * from articles where article_type='0' and sticktop='0' order by year desc, month desc, day desc");
                    $num = mysql_num_rows($article);
                    $num_c = mysql_num_rows($article_c);
                    if(($num+$num_c) == 0){
                ?>
                <li><a href="#">尚無資訊</a></li>
                <?php
                    }else{
                        if($num > 5) {
                                $num = 5;    
                        }
                        $num_c=5-$num;
                        for($i=1;$i<=$num;$i++){
                            $article_content = mysql_fetch_assoc($article);
                            $id = $article_content['id'];
                            $article_title = $article_content['title'];
                            $type = $article_content['article_type'];
                            $year = $article_content['year'];
                            $month = $article_content['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content['day'];
                            $day_r = sprintf("%02d",$day);
                            $thisdate = $year.'-'.$month_r.'-'.$day_r;
                            if($i==1){
                    ?>
                            <li style="border-top-style:none;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../article.php?article_id=',$id,'">',$article_title, '</a>'; ?></li>
                    <?php
                            }else{
                    ?>
                            <li style="border-top-style:dotted;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../article.php?article_id=',$id,'">',$article_title, '</a>'; ?></li>
                    <?php
                            }
                        }
                        for($i=1;$i<=$num_c;$i++){
                            $article_content_c = mysql_fetch_assoc($article_c);
                            $id = $article_content_c['id'];
                            $article_title_c = $article_content_c['title'];
                            $type = $article_content_c['article_type'];
                            $year = $article_content_c['year'];
                            $month = $article_content_c['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content_c['day'];
                            $day_r = sprintf("%02d",$day);
                            $thisdate = $year.'-'.$month_r.'-'.$day_r;
                            if($num==0 && $i==1){
                    ?>
                            <li style="border-top-style:none;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../article.php?article_id=',$id,'">',$article_title_c, '</a>'; ?></li>
                    <?php
                            }else{
                    ?>
                            <li style="border-top-style:dotted;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../article.php?article_id=',$id,'">',$article_title_c, '</a>'; ?></li>
                    <?php
                            }
                        }
                    }
                    ?>
                    </ul>
</div>