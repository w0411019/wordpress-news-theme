<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<br />


<nav class="navbar navbar-expand">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo get_home_url();?>"><h1>the Hali</h1></a>
	</div>
    <ul class="nav navbar-nav">
	<?php
		$menu_top_items = wp_get_nav_menu_items("Secondary Menu");

		foreach($menu_top_items as $menu_item){
			echo "<li class='nav-item' id='menutop'><a href='".$menu_item->url."' class='nav-link'>".$menu_item->title."</a></li>";
		}
	?>
    </ul>
  </div>
</nav>


<nav class="navbar navbar-expand justify-content-center" id="menubottom">
    <ul class="nav navbar-nav">
	<?php
		$menu_bottom_items = wp_get_nav_menu_items("Primary Menu");
		echo "<li class='nav-item' id='news'><a href='http://wordpress.nscc.ca' class='nav-link'>News</a></li>";
		foreach($menu_bottom_items as $menu_item){
			echo "<li class='nav-item'><a href=".$menu_item->url." class='nav-link'>".$menu_item->title."</a></li>";
		}
	?>
    </ul>
</nav>






<hr />