<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url() ); ?>/">
    <label class="hidden" for="s">Search: </label>
	<div class="input-group">
        <input type="text" class="form-control search-form" placeholder="Search site for..." value="<?php the_search_query(); ?>" name="s" id="s">
        <span class="input-group-btn">
            <!--<button class="btn btn-default" type="button">Go!</button>-->
            <button type="submit" class="btn btn-success search-btn" id="searchsubmit">
                <span class="fa fa-search"></span>
            </button>
        </span>
    </div>
</form>
