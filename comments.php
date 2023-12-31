<div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <h3 class="h2">
                        <?php 
                        $philosopy_comment_num = get_comments_number();
                        if ( $philosopy_comment_num <= 1) {
                            echo esc_html($philosopy_comment_num). " ".__( "comment", "philosopiy" );
                        }else{
                            echo esc_html($philosopy_comment_num) . " ".__( "comments", "philosopiy" );
                        }
                        ?>
                    </h3>

                    <ol class="commentlist">

                    <?php echo wp_list_comments();?>

                    <div class="comment_pagination">
                        <?php 
                        the_comments_pagination( array(
                            "screen_reader_text" =>__( "pagination", "philosopy" ),
                            "prev_text"          =>'<'. __('prevous comments','philosopy'),
                            'next_text'=> '>'. __('Next comments','philosopy')
                        ) )
                        ?>

                    </div>
                    
                    <!-- ========== End Section ========== -->
                        <!-- <li class="depth-1 comment">
                            <div class="comment__avatar">
                                <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt>
                            </div>
                            <div class="comment__content">
                                <div class="comment__info">
                                    <cite>Itachi Uchiha</cite>
                                    <div class="comment__meta">
                                        <time class="comment__time">Dec 16, 2017 @ 23:05</time>
                                        <a class="reply" href="#0">Reply</a>
                                    </div>
                                </div>
                                <div class="comment__text">
                                    <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                </div>
                            </div>
                        </li>
                        <li class="thread-alt depth-1 comment">
                            <div class="comment__avatar">
                                <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt>
                            </div>
                            <div class="comment__content">
                                <div class="comment__info">
                                    <cite>John Doe</cite>
                                    <div class="comment__meta">
                                        <time class="comment__time">Dec 16, 2017 @ 24:05</time>
                                        <a class="reply" href="#0">Reply</a>
                                    </div>
                                </div>
                                <div class="comment__text">
                                    <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                        tantas semper delicatissimi.</p>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="depth-2 comment">
                                    <div class="comment__avatar">
                                        <img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt>
                                    </div>
                                    <div class="comment__content">
                                        <div class="comment__info">
                                            <cite>Kakashi Hatake</cite>
                                            <div class="comment__meta">
                                                <time class="comment__time">Dec 16, 2017 @ 25:05</time>
                                                <a class="reply" href="#0">Reply</a>
                                            </div>
                                        </div>
                                        <div class="comment__text">
                                            <p>Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                                cursus a sit amet mauris</p>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="depth-3 comment">
                                            <div class="comment__avatar">
                                                <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt>
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__info">
                                                    <cite>John Doe</cite>
                                                    <div class="comment__meta">
                                                        <time class="comment__time">Dec 16, 2017 @ 25:15</time>
                                                        <a class="reply" href="#0">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="comment__text">
                                                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="depth-1 comment">
                            <div class="comment__avatar">
                                <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt>
                            </div>
                            <div class="comment__content">
                                <div class="comment__info">
                                    <cite>Shikamaru Nara</cite>
                                    <div class="comment__meta">
                                        <time class="comment-time">Dec 16, 2017 @ 25:15</time>
                                        <a class="reply" href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="comment__text">
                                    <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                                </div>
                            </div>
                        </li> -->
                    </ol>

                    <div class="respond">
                        <h3 class="h2"><?php echo __( "Add Comment","philosopy")?></h3>
                        <?php comment_form()?>
                        <!-- <form name="contactForm" id="contactForm" method="post" action>
                            <fieldset>
                                <div class="form-field">
                                    <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value>
                                </div>
                                <div class="form-field">
                                    <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value>
                                </div>
                                <div class="form-field">
                                    <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value>
                                </div>
                                <div class="message form-field">
                                    <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="submit btn--primary btn--large full-width">Submit</button>
                            </fieldset>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>