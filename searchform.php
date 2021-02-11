
<form role="search" action="<?php echo home_url('/'); ?>">
                    <label class="searchie">
                    <input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search" />
                    <button type="submit" class="search-submit"><span class="i-search"><i class="fa fa-search"></i></span></button>
                    </label>
</form>