<section id="new_sec01">
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <div class="button">
        <a href="<?php echo home_url('/news-list/'); ?>">
            <p class="button-text">
                <span>一覧に戻る</span><span class="icon-arrow-r"></span>
            </p>
        </a>
    </div>
</section>