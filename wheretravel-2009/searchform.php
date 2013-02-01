<form method="get" action="<?php bloginfo('home'); ?>/">
<input type="text" id="searchform" value="<?php echo wp_specialchars($s, 1); ?>" name="s" />
<input type="submit" id="searchsubmit" value="Search" />
</form>