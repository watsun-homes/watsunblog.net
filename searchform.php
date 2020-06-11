<div id="search">
<div class="inner">
<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>/">
    <label class="hidden" for="s">
        <?php _e('', 'kubrick'); ?>
    </label>
    <input type="search" value="<?php the_search_query(); ?>"  name="s" id="s" placeholder="検索したいワードを入力" />
    <button type="submit" id="searchsubmit" alt="検索" value="<?php _e('Search', 'kubrick'); ?>">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>
</div>
</div>