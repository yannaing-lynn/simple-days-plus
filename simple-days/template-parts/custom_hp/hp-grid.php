<?php
/**
 *
 * @package Simple Days
 */


function simple_days_custom_hp_grid( $post , $settings){

	$this_id = $post->ID;
	$thumurl = simple_days_get_thumbnail( $this_id , $settings['image_size'] , $post);
	$title = $post ->post_title;

	$this_url = get_permalink($this_id);

	if($settings['to_main_content']){
		$this_url .= '#post-'.$this_id;
	}

	?>
	<li class="hp_box_thum pl_item mb10 shadow_box of_h f_grid<?php echo esc_attr($settings['columns']); ?>">


		<div class="rp_img fit_box_img_wrap">
			<a href="<?php echo esc_url($this_url); ?>" class="non_hover">
				<?php
				echo '<img decoding="async" src="'.esc_url($thumurl[0]).'" class="scale_13 trans_10" width="'.esc_attr($thumurl[1]).'" height="'.esc_attr($thumurl[2]).'" alt="'.esc_attr($title).'" title="'.esc_attr($title).'" />';
				?>
			</a>
		</div>
		<div class="hp_thum_title pl_thum_title f_box p5 fw8 of_h">
			<a href="<?php echo esc_url($this_url); ?>" class="non_hover">
				<?php echo esc_html($title); ?>
			</a>
		</div>
		<?php if($settings['date']){ ?>
			<div class='fs13 p5 fc_555'>
				<?php echo get_the_date(); ?>
			</div>
		<?php } ?>

	</li>
	<?php
}


