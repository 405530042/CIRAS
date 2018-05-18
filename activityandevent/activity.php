<div id ="activity">
    <h1>活動公告</h1>
					<ul>
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