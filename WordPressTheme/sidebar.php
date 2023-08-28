       <aside class="sub-blog__aside-container aside">
         <div class="aside__popular-box">
           <div class="aside__title">
             <p class="aside__title-text">人気記事</p>
           </div>
           <?php
            $args = array(
              "post_type" => "post",
              "posts_per_page" => 3,
              "orderby" => "date",
              "order" => "DESC",
            );
            //配列で指定した内容で、記事情報を取得
            $blog_query = new WP_Query($args);
            ?>
           <!-- 取得した記事情報の表示 -->
           <?php if ($blog_query->have_posts()) : ?>
           <div class="aside__popular-items">
             <!-- ↓ ループ開始 ↓ -->
             <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
             <!-- ここに投稿がある場合の記述 -->
             <article class="aside__popular-item card">
               <a href="<?php the_permalink(); ?>">
                 <figure class="card__image card__image--sub">
                   <?php if (has_post_thumbnail()) : ?>
                   <?php the_post_thumbnail('full'); ?>
                   <?php else : ?>
                   <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                     alt=" noimage画像" />
                   <?php endif; ?>
                 </figure>
                 <div class="card__body card__body--sub">
                   <time datetime="<?php echo get_the_date('Y-m-d'); ?>"
                     class="card__date"><?php echo get_the_date('Y/m/d'); ?></time>
                   <h3 class="card__title">
                     <!-- タイトル40文字制限 -->
                     <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
                   </h3>
                 </div>
               </a>
             </article>
             <?php endwhile; ?>
           </div>
           <?php else : ?>
           <!-- ここに投稿がない場合の記述 -->
           <p>記事が投稿されていません</p>
           <?php endif;
            wp_reset_postdata(); ?>
         </div>

         <div class="aside__review review">
           <div class="aside__title">
             <p class="aside__title-text">口コミ</p>
           </div>
           <?php
            $args = array(
              "post_type" => "voice",
              "posts_per_page" => 1,
              "orderby" => "date",
              "order" => "DESC",
            );

            //配列で指定した内容で、記事情報を取得
            $asideVoice_query = new WP_Query($args);
            ?>
           <!-- 取得した記事情報の表示 -->
           <?php if ($asideVoice_query->have_posts()) : ?>
           <div class="aside__boxes boxes">
             <!-- ↓ ループ開始 ↓ -->
             <?php while ($asideVoice_query->have_posts()) : $asideVoice_query->the_post(); ?>
             <!-- ここに投稿がある場合の記述 -->
             <article class="boxes__item boxes__item--sub box">
               <div class="box__container box__container--sub">
                 <div class="box__header box__header--sub">
                   <p class="box__gender">
                     <?php the_field("voice-age"); ?>代&#040;<?php the_field("voice-gender") ?>&#041;</p>
                   <h3 class="box__title box__title--sub">
                     <!-- タイトル40文字制限 -->
                     <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
                   </h3>
                 </div>
                 <figure class="box__image box__image--sub js-slideColor">
                   <?php if (has_post_thumbnail()) : ?>
                   <?php the_post_thumbnail('full'); ?>
                   <?php else : ?>
                   <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                     alt="noimage画像" />
                   <?php endif; ?>
                 </figure>
               </div>
               <div class="review__button">
                 <button class="button"
                   onclick="location.href='<?php echo esc_url(home_url('voice')); ?>'">View&nbsp;more<span
                     class="button__arrow"></span></button>
               </div>
             </article>
             <?php endwhile; ?>
           </div>
           <?php else : ?>
           <!-- ここに投稿がない場合の記述 -->
           <p>記事が投稿されていません</p>
           <?php endif;
            wp_reset_postdata(); ?>


         </div>

         <div class="aside__campaign aside-campaign">
           <div class="aside__title">
             <p class="aside__title-text">キャンペーン</p>
           </div>
           <?php
            $args = array(
              "post_type" => "campaign",
              "posts_per_page" => 2,
              "orderby" => "date",
              "order" => "ASC",
            );

            //配列で指定した内容で、記事情報を取得
            $asideCampaign_query = new WP_Query($args);
            ?>
           <!-- 取得した記事情報の表示 -->
           <?php if ($asideCampaign_query->have_posts()) : ?>
           <div class="aside__container slider">
             <!-- ↓ ループ開始 ↓ -->
             <?php while ($asideCampaign_query->have_posts()) : $asideCampaign_query->the_post(); ?>
             <!-- ここに投稿がある場合の記述 -->
             <article class="slider__item slider__item--sub">
               <figure class="slider__image slider__image--sub">
                 <?php if (has_post_thumbnail()) : ?>
                 <?php the_post_thumbnail('full'); ?>
                 <?php else : ?>
                 <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noimage.jpg"
                   alt=" noimage画像" />
                 <?php endif; ?>
               </figure>
               <div class="slider__body slider__body--sub">
                 <h3 class="slider__title slider__title--sub">
                   <!-- タイトル40文字制限 -->
                   <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
                 </h3>
                 <div class="slider__meta slider__meta--sub">
                   <h4 class="slider__sub-title"><?php the_field("campaign-money-text"); ?></h4>
                   <div class="slider__price-unit slider__price-unit--sub">
                     <p class="slider__old-price slider__old-price--sub">
                       &#165;<?php
                                  $old_prices = number_format(get_field("campaign-old-price"));
                                  echo $old_prices;
                                  ?>
                     </p>
                     <p class="slider__new-price slider__new-price--sub">
                       &#165;<?php
                                  $new_prices = number_format(get_field("campaign-new-price"));
                                  echo $new_prices;
                                  ?>
                     </p>
                   </div>
                 </div>
               </div>
             </article>
             <?php endwhile; ?>
           </div>
           <?php else : ?>
           <!-- ここに投稿がない場合の記述 -->
           <p>記事が投稿されていません</p>
           <?php endif;
            wp_reset_postdata(); ?>



           <div class="aside-campaign__button">
             <button class="button"
               onclick="location.href='<?php echo esc_url(home_url('campaign')); ?>'">View&nbsp;more<span
                 class="button__arrow"></span></button>
           </div>
         </div>
         <div class="aside__archive archive">
           <div class="aside__title">
             <p class="aside__title-text">アーカイブ</p>
           </div>
           <div class="archive__container">
             <ul class="archive__items">
               <?php blog_get_archives(); ?>
             </ul>
           </div>
         </div>
       </aside>