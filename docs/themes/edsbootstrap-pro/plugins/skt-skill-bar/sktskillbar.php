<?php
/**
* Plugin Name: SKT Skill Bar
* Description: Skill Bar plugin to show skill bar or progress bar or circular bar or half circular bars using fancy animated jquery.
* Plugin URI:  http://www.sktthemes.net
* Author:      SKT Themes
* Author URI:  http://www.sktthemes.net
* Version:     1.4
*/

define('SB_VER','1.4');

add_action('wp_print_scripts', 'sbar_register_scripts');
add_action('wp_print_styles', 'sbar_register_styles');

function sbar_register_scripts() {
	if ( !is_admin() ) {
		
		wp_register_script('circle_script', get_template_directory_uri().'/plugins/skt-skill-bar/skill_bar/circle/jquery.easy-pie-chart.js');
		wp_enqueue_script('circle_script');

		wp_register_script('circle_custom_script', get_template_directory_uri().'/plugins/skt-skill-bar/skill_bar/circle/custom.js');
		wp_enqueue_script('circle_custom_script');
	}
}

function sbar_register_styles() {
	

	wp_register_style('circle_styles', get_template_directory_uri().'/plugins/skt-skill-bar/skill_bar/circle/jquery.easy-pie-chart.css');	// register
	wp_enqueue_style('circle_styles');	// enqueue
}


//	[skillwrapper type="circle" track_color="#dddddd" chart_color="#333333" chart_size="150"][/skillwrapper]
function skillwrapper_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'circle',
		'track_color' => '#dddddd',
		'chart_color' => '#ff5555',
		'chart_size' => '150',
		'align' => 'center',
	), $atts ) );

			$wrapCode = '<div class="vertical-page">
					<article class="cvpage " id="resume">
						<div class="charts clearfix">
							<div>
								<ul class="car hideme">'.str_replace('<br />', '', do_shortcode($content)).'</ul>
								<div style="clear:both"></div>
							</div>
						</div>
					</article>
				</div>
				
				<style type="text/css">
				.chart{color:'.$track_color.'; margin-bottom:5px;}
				.chartbox p{color:'.$chart_color.';} 
				.car, .skills ul{text-align:'.$align.';}
				</style>
				<script type="text/javascript">
				jQuery(".chartbox p").each( function(){
					if( jQuery(this).html() == "" ){
						jQuery(this).remove();
					}
				});
				var pixflow_js_opt = {"pie_chart_color":"'.$chart_color.'","pie_track_color":"'.$track_color.'","pie_chart_size":"'.$chart_size.'"};
				</script>';
			
	return $wrapCode;
}
add_shortcode( 'skillwrapper', 'skillwrapper_func' );


//[skill title_background="#f7a53b" bar_foreground="#f7a53b" bar_background="#eeeeee" percent="90" title="CSS3"]
function skilldata_func( $atts ) {
	extract( shortcode_atts( array(
		'title_background' => '',
		'bar_foreground' => '',
		'bar_background' => '',
		'percent' => '0',
		'title' => '',
	), $atts ) );

	if( $title_background != '' ){
		$skillHtml = '<div class="skillbar clearfix " data-percent="'.$percent.'%" style="background: '.$bar_background.';">
				<div class="skillbar-title" style="background: '.$title_background.';"><span>'.$title.'</span></div>
				<div class="skillbar-bar" style="background: '.$bar_foreground.';"></div>
				<div class="skill-bar-percent">'.$percent.'%</div>
			</div>';
	}elseif( $title_background == '' && $bar_foreground != '' && $bar_background != '' ){
		$skillHtml = '<div class="skillbar clearfix " data-percent="'.$percent.'%" style="background: '.$bar_background.';">
				<div class="skillbar-title" style="background: '.$title_background.';"><span>'.$title.'</span></div>
				<div class="skillbar-bar" style="background: '.$bar_foreground.';"></div>
				<div class="skill-bar-percent">'.$percent.'%</div>
			</div>';
	}elseif( $title_background == '' && $bar_foreground == '' && $bar_background == '' ){
		$skillHtml = '<li>
				<div class="chartbox">
					<div class="chart" data-percent="'.$percent.'">
						<span>'.$percent.'%</span>
					</div>
					<p>'.strip_tags($title).'</p>
				</div>
			</li>';
	}

	return $skillHtml;
}
add_shortcode( 'skill', 'skilldata_func' );


?>