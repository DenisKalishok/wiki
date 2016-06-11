<form role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row">
    	<div class="input-group">
          <input type="text" class="form-control input-sm" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" size="15" maxlength="15" />
               		
        	<span class="input-group-btn">
          		<button class="btn btn-success btn-sm" type="submit">
          			<i class="fa fa-search"></i>	
          		</button>
        	</span>
      	</div>
	</div>
</form>