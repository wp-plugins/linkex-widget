<?php
/*
Plugin Name: Linkex Widget
Plugin URI: http://blog.sexinaweb.com/linkex-widget/
Description: Adds a sidebar widget to display Linkex links
Author: John Pher
Version: 0.2
*/

function widget_linkexWidget_init()
{
	if (!function_exists('register_sidebar_widget'))
		return;
	
	function widget_linkexWidget($args) {
		extract($args);
		
		$options = get_option('widget_linkexWidget');
		$title = $options['title'];
		$fileUrl = $options['fileUrl'];
		
		// Output
		echo $before_widget . $before_title . $title . $after_title;
		
		echo '<ul>';
		include($_SERVER['DOCUMENT_ROOT'].$fileUrl);
		echo '<li><a href="http://phuis.com/" title="The most beautiful girls in social networks">Phuis - Real girls</a></li>';
		echo '</ul>';
		
		echo $after_widget;
	}
	
	function widget_linkexWidget_control() {
		$options = get_option('widget_linkexWidget');
		if (!is_array($options) )
			$options = array('title'=>'Blogroll', 'fileUrl'=>'/linkex/data/output/1001');
		
		if ($_POST['linkexWidget-submit']) {
			$options['title'] = strip_tags(stripslashes($_POST['linkexWidget-title']));
			$options['fileUrl'] = strip_tags(stripslashes($_POST['linkexWidget-fileUrl']));
			update_option('widget_linkexWidget', $options);
		}
		
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$fileUrl = htmlspecialchars($options['fileUrl'], ENT_QUOTES);
		
		echo '<p>
			<label for="linkexWidget-title">' . __('Title:') . ' 
			<input id="linkexWidget-title" name="linkexWidget-title" type="text" value="'.$title.'" class="widefat" />
			</label></p>';
		echo '<p>
			<label for="linkexWidget-fileUrl">' . __('Enter the URL of the file that contain the links:') . ' 
			<input id="linkexWidget-fileUrl" name="linkexWidget-fileUrl" type="text" value="'.$fileUrl.'" class="widefat" />
			</label></p>';
		echo '<input type="hidden" id="linkexWidget-submit" name="linkexWidget-submit" value="1" />';
	}
	register_sidebar_widget(array('Linkex Widget', 'widgets'), 'widget_linkexWidget');
	
	register_widget_control(array('Linkex Widget', 'widgets'), 'widget_linkexWidget_control');
}
add_action('widgets_init', 'widget_linkexWidget_init');
?>