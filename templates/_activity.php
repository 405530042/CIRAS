    <div id ="recent">
    <h1><a href="activity.php" style="color:#616161;">活動紀實</a></h1>
                    <ul>
                    <?php
                    $article_a = mysql_query("select * from articles where article_type='3' and sticktop='1' order by year desc, month desc, day desc");
                    $article_b = mysql_query("select * from articles where article_type='3' and sticktop='0' order by year desc, month desc, day desc");
                    $num_a = mysql_num_rows($article_a);
                    $num_b = mysql_num_rows($article_b);
                    if(($num_a+$num_b) == 0){
                ?>
                <li><a href="#">尚無資訊</a></li>
                <?php
                    }else{
                        if($num_a > 5) {
                                $num_a = 5;    
                        }
                        $num_b=5-$num_a;
                        for($i=1;$i<=$num_a;$i++){
                            $article_content_a = mysql_fetch_assoc($article_a);
                            $id = $article_content_a['id'];
                            $article_title_a = $article_content_a['title'];
                            $type = $article_content_a['article_type'];
                            $year = $article_content_a['year'];
                            $month = $article_content_a['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content_a['day'];
                            $day_r = sprintf("%02d",$day);
                            $thisdate = $year.'-'.$month_r.'-'.$day_r;
                            if($i==1){
                    ?>
                            <li style="border-top-style:none;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../news1.php?article_id=',$id,'">',$article_title_a, '</a>'; ?></li>
                    <?php
                            }else{
                    ?>
                            <li style="border-top-style:dotted;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../news1.php?article_id=',$id,'">',$article_title_a, '</a>'; ?></li>
                    <?php
                            }
                        }
                        for($i=1;$i<=$num_b;$i++){
                            $article_content_b = mysql_fetch_assoc($article_b);
                            $id = $article_content_b['id'];
                            $article_title_b = $article_content_b['title'];
                            $type = $article_content_b['article_type'];
                            $year = $article_content_b['year'];
                            $month = $article_content_b['month'];
                            $month_r = sprintf("%02d",$month);
                            $day = $article_content_b['day'];
                            $day_r = sprintf("%02d",$day);
                            $thisdate = $year.'-'.$month_r.'-'.$day_r;
                            if($num_a==0 && $i==1){
                    ?>
                            <li style="border-top-style:none;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../news1.php?article_id=',$id,'">',$article_title_b, '</a>'; ?></li>
                    <?php
                            }else{
                    ?>
                            <li style="border-top-style:dotted;<?php echo date_cmp($thisdate); ?>"><?php echo $year,'/',$month_r,'/',$day_r,'　<a href="../news1.php?article_id=',$id,'">',$article_title_b, '</a>'; ?></li>
                    <?php
                            }
                        }
                    }
                    ?>
                    </ul>
</div>