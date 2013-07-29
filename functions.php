<?php

function htg_breadcrumb() {
	$topic = $_GET["topic"];
	$section = $_GET["section"];
	
	echo '<nav id="htg_breadcrumb">';
		echo '<ul>';
			if ($section == '') {
				echo '<li>' .htg_link('', '', 'How-to Guide') . '<span>&gt;</span></li>';
				echo '<li>' . htg_link($topic, '', $topic) . '</li>';
			} else {
				echo '<li>' .htg_link('', '', 'How-to Guide') . '<span>&gt;</span></li>';
				echo '<li>' . htg_link($topic, '', $topic) . '<span>&gt;</span></li>';
				echo '<li>' . htg_link($topic, $section, $section) . '</li>';
			}
		echo '</ul>';
	echo '</nav>';
}

function htg_link($topic, $section, $title) {
	if ($topic == '') {
		$link = '<a href="?page=bf_htg">' . $title . '</a>';
	} else {
		if ($section == '') {
			$link = '<a href="?page=bf_htg&topic=' . $topic . '">' . $title . '</a>';
		} else {
			$link = '<a href="?page=bf_htg&topic=' . $topic . '&section=' . $section . '">' . $title . '</a>';
		}
	}
	return $link;
}

?>