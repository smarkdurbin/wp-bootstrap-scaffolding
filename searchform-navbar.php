<form method="get" class="hidden visible-xs navbar-form" action="<?php echo esc_url( home_url() ); ?>/" role="search">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search site for..." value="<?php the_search_query(); ?>" name="s" id="s">
        <div class="input-group-btn">
            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
