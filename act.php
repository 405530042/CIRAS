<div style="padding-right: 40px;">
					<h1>活動公告</h1>
					<ul>
                    <?php
                        $article = mysql_query("select * from articles where article_type='0' and sticktop='1' order by year desc, month desc, day desc");
                        $article_c = mysql_query("select * from articles where article_type='0' and sticktop='0' order by year desc, month desc, day desc");
                        $num = mysql_num_rows($article);
                        $num_c = mysql_num_rows($article_c);
                        if(($num+$num_c) == 0){
                            ?>
                        <li style="list-style-type:none;"><a href="#" style="text-decoration:none;color:#2a5a07;font-weight:bold;">尚無資訊</a></li>
                            <?php
                        }
                        else{
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
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197; font-weight:bold;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                                }else{
                            ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px; color:#9aa197;font-weight:bold;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_r, '</a>'; ?></li>
                                <?php
                                }
                            }
                            for($i=1;$i<=$num_c;$i++){
                                $article_content_c = mysql_fetch_assoc($article_c);
                                $id = $article_content_c['id'];
                                $article_title_c = $article_content_c['title'];
                                if(mb_strlen($article_title_c,"utf-8") > 12){
                                    $article_title_cr = mb_substr($article_title_c,0,12,"utf-8");
                                    $article_title_cr .='...';
                                }else{
                                    $article_title_cr = $article_title_c;
                                }
                                $type = $article_content_c['article_type'];
                                $year = $article_content_c['year'];
                                $month = $article_content_c['month'];
                                $month_r = sprintf("%02d",$month);
                                $day = $article_content_c['day'];
                                $day_r = sprintf("%02d",$day);
                                $thisdate = $year.'-'.$month_r.'-'.$day_r;
                                if($num==0 && $i==1){
                            ?>
                        <li style="list-style-type:none;padding-bottom: 8px;color:#9aa197; font-weight:bold;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_cr, '</a>'; ?></li>
                                <?php
                                }else{
                            ?>
                        <li style="list-style-type:none;border-top-style:dotted;border-top-width:1px;border-bottom-color: #a0a0a0;padding-top: 8px;padding-bottom: 8px; color:#9aa197;font-weight:bold;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'&nbsp;&nbsp;<a href="news1.php?article_id=',$id,'" style="text-decoration:none;color:#2a5a07;font-weight:bold;">',$article_title_cr, '</a>'; ?></li>
                                <?php
                                }
                            }
                        }
                    ?>
					</ul>
				</div>