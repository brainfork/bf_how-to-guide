<?php
echo '<h2>Table of Contents</h2>';
echo '<ul id="htg_index">';

	echo '<li>';
		echo '<div class="icon16 icon-dashboard"></div>';
		echo '<h3>' . htg_link('dashboard', '', 'Dashboard') . '</h3>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-generic"></div>';
		echo '<h3>' . htg_link('editor', '', 'Editor') . '</h3>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-post"></div>';
		echo '<h3>Posts</h3>';
		echo '<ul>';
			echo '<li>' . htg_link('posts', 'types', 'Types') . '</li>';
		echo '</ul>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-page"></div>';
		echo '<h3>Pages</h3>';
		echo '<ul>';
			echo '<li>' . htg_link('pages', '', 'AdWords') . '</li>';
		echo '</ul>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-media"></div>';
		echo '<h3>' . htg_link('media', '', 'Media') . '</h3>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-comments"></div>';
		echo '<h3>' . htg_link('comments', '', 'Comments') . '</h3>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-contact"><img src="' . plugins_url('contact-form-7/admin/images/screen-icon.png') . '" /></div>';
		echo '<h3>Contact</h3>';
		echo '<ul>';
			echo '<li>' . htg_link('contact', 'form', 'Forms') . '</li>';
			echo '<li>' . htg_link('contact', 'database', 'Database') . '</li>';
		echo '</ul>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-appearance"></div>';
		echo '<h3>Appearance</h3>';
		echo '<ul>';
			echo '<li>' . htg_link('appearance', 'widgets', 'Widgets') . '</li>';
			echo '<li>' . htg_link('appearance', 'menus', 'Menus') . '</li>';
		echo '</ul>';
	echo '</li>';
	
	echo '<li>';
		echo '<div class="icon16 icon-tools"></div>';
		echo '<h3>Tools</h3>';
		echo '<ul>';
			echo '<li>' . htg_link('tools', 'export', 'Export') . '</li>';
		echo '</ul>';
	echo '</li>';

echo '</ul>';
?>