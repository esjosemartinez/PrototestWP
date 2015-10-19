<?php
			$args = array(
				'posts_per_page' => 100,
				'offset' => 0,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_type' => get_post_type(),
				'post_status' => 'publish',
				'suppress_filters' => 0);

			$myposts = get_posts($args);
			foreach ($myposts as $post) : setup_postdata($post);
				$genres = get_field('genres');
				switch(get_field('origin')){
					case 0:
						$origin = 'vod';
						break;
					case 1:
						$origin = 'live';
						break;
				}
				?>

				<li class="show <?php echo $origin; ?> option-visible <?php echo get_media_genres_class($genres); ?>" 
					data-origin="<?php the_field('origin'); ?>" 
					data-popularity="<?php the_field('popularity'); ?>" 
					data-title="<?php the_title(); ?>" 
					data-genres="<?php echo get_media_genres_ids($genres); ?>" 
					data-date="<?php echo get_the_date("Y-m-d-H-i-s"); ?>" 
					data-duration="<?php the_field('duration'); ?>" 
					>
					<?php if(get_field('origin') == 0): ?>
					<img class="cover" src="<?php echo cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 116, 172, 3); ?>" alt="<?php the_title(); ?>" >
					<div class="info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="duration"><?php the_field('duration'); ?>min</span><br>
						<span class="genres">
							<?php
							if ($genres):
								$c = count($genres) - 1;
								$a = 0;
								foreach ($genres as $genre):
									echo get_the_title($genre);
									if ($a < $c):
										echo ', ';
									endif;
									$a++;
								endforeach;
							endif;
							?>
						</span>
					</div>
					<?php 
					elseif(get_field('origin') == 1): 
					$image = get_field('live_image');
					if(!empty($image)):
						$imgurl = cached_image($image['url'], 306, 172, 3);
					else:
						$imgurl = cached_image(wp_get_attachment_url(get_post_thumbnail_id()), 306, 172, 3);
					endif;
					?>
					<img class="cover" src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" >
					<div class="info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<span class="time">22:00 - 00:45</span>
						<div class="progress-container">
							<div class="progress" style="width: <?php the_field('broadcasted'); ?>%"></div>
						</div>	
					</div>
					<?php endif; ?>
				</li>

<?php
endforeach;
wp_reset_postdata();
?>