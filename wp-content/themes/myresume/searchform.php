<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'))?>">
	<div class="search-widget">
		<div class="widget">
			<h5>Search</h5>
			<div class="input-group">
				<div class="form-group">
					<input type="search" id="<?php echo $unique_id; ?>" name="s" class="form-control" title="Search"
					       value="<?php the_search_query(); ?>"
					       placeholder="<?php _e('Search', 'myresume'); ?>">
				</div>
				<span class="input-group-btn">
                <button class="btn" type="submit">
                    <span class="ion-ios-search"></span>
                </button>
			</span>
			</div>
		</div>
	</div>
</form>

