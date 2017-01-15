<div id="front-page">
	<div class="row">
		<?php // 
		$args = array(
			'page_id' => 4,
		);
		query_posts($args);
		?>
		<?php if(have_posts()): ?>
		<div id="reassurance" class="clearfix">
			<div class="col-xs-12">
				<section class="well">
					<?php while ( have_posts() ): the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<?php endwhile; ?>
				</section>
			</div>
		</div>
		<?php else:?>
		<?php endif; wp_reset_query(); ?>

		<div id="info">
			<div class="col-xs-12">
				<?php
				$paged = get_query_var('paged');
				$args = array(
					'posts_per_page' => '5',
					'category_name' => '',
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'paged' => $paged
				);
				query_posts($args);
				?>
				<section class="well">
					<h2>お知らせ</h2>
					<?php if(have_posts()): while ( have_posts() ): the_post(); ?>
					<h3>
						<span class="date"><?php the_time('Y年m月d日'); ?></span>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h3>
					<?php endwhile; else:?>
					<p>表示するお知らせはありませんでした。</p>
					<?php endif; wp_reset_query(); ?>
					<a href="<?php echo home_url(); ?>/information/">≫ 一覧</a>
				</section>
			</div>
		</div>

	</div><!-- /row -->
</div><!-- /front-page -->
