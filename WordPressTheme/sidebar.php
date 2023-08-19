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
                   <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noImage.jpg"
                     alt=" NoImage画像" />
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
           <article class="boxes__item boxes__item--sub box">
             <div class="box__container box__container--sub">
               <div class="box__header box__header--sub">
                 <p class="box__gender">30代&#040;カップル&#041;</p>
                 <h3 class="box__title box__title--sub">ここにタイトルが入ります。ここにタイトル</h3>
               </div>
               <figure class="box__image box__image--sub">
                 <img src="<?php echo esc_url(get_theme_file_uri()); ?>//assets/images/common/sub-blog__couple.jpg"
                   alt="30代のカップルがソファーに座りながら笑顔でこちらを見ている様子">
               </figure>
             </div>
             <div class="review__button">
               <button class="button"
                 onclick="location.href='<?php echo esc_url(home_url('voice')); ?>'">View&nbsp;more<span
                   class="button__arrow"></span></button>
             </div>
           </article>
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
                 <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/noImage.jpg"
                   alt=" NoImage画像" />
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
                       &#165;<?php the_field("campaign-old-price"); ?>
                     </p>
                     <p class="slider__new-price slider__new-price--sub">
                       &#165;<?php the_field("campaign-new-price"); ?>
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
               <li class="archive__item archive__item--newLayout js-archive-item--new">2023</li>
               <li class="archive__item archive__item--close-layout">
                 <ul class="archive__sub-items js-subItems--new">
                   <li class="archive__sub-item archive__sub-item--layout"><a href="#">3月</a></li>
                   <li class="archive__sub-item archive__sub-item--layout"><a href="#">2月</a></li>
                   <li class="archive__sub-item archive__sub-item--layout"><a href="#">1月</a></li>
                 </ul>
               </li>
             </ul>
             <ul class="archive__items">
               <li class="archive__item archive__item--oldLayout js-archive-item--old">2022</li>
               <li class="archive__item archive__item--close-layout">
                 <ul class="archive__sub-items js-subItems--old">
                   <li class="archive__sub-item archive__sub-item--layout"><a href="#"></a></li>
                 </ul>
               </li>
             </ul>
           </div>
         </div>
       </aside>