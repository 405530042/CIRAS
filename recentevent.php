	<h1>近期活動</h1>
					<ul>
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