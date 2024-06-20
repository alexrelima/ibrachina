<?php
//Template Name: Peneiras
get_header();?>
<div class="proximos-jogos">
	<div class="container">
		<div class="row">
			<h2><?php the_title();?></h2>
			<div class="contato-head">
				<?php the_content();?>
			</div>
			<div class="col col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<?php if( have_rows('proximas_peneiras') ){ ?>
					<h4><?php esc_html_e( 'Próximas Peneiras', 'ibrachina' ); ?></h4>
					<table class="horarios">
						<tr class="top-table">
							<td><?php esc_html_e( 'Idade', 'ibrachina' ); ?></td>
							<td><?php esc_html_e( 'Local', 'ibrachina' ); ?></td>
							<td><?php esc_html_e( 'Data', 'ibrachina' ); ?></td>
							<td><?php esc_html_e( 'Horário', 'ibrachina' ); ?></td>
							<td><?php esc_html_e( 'Documentos Obrigatórios', 'ibrachina' ); ?></td>
						</tr>
						<?php while( have_rows('proximas_peneiras') ): the_row();?>
							<tr>
							<td class="idade"><?php echo wp_kses_post( get_sub_field('idade') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('local') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('data') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('horario') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('documentacao_obrigatoria') );?></td>
						</tr>
						<?php endwhile; ?>
					</table>
				<?php }else{ ?> 
					<h3 class="no-date"><?php esc_html_e( 'Sem peneira em aberto no momento!', 'ibrachina' ); ?></h3>
				<?php } ?>
			</div>
			<div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h4><?php esc_html_e( 'Peneiras Realizadas', 'ibrachina' ); ?></h4>
				<?php if( have_rows('aprovados') ): ?>
				<table class="horarios">
					<tr class="top-table">
						<td><?php esc_html_e( 'Idade', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Dia', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Lista de aprovados', 'ibrachina' ); ?></td>
					</tr>
					<?php $count = 1; while( have_rows('aprovados') ): the_row();?>
						<tr>
							<td class="idade"><?php echo wp_kses_post( get_sub_field('idade') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('data') );?></td>
							<td>
								<button data-fancybox data-src="#dialog-content-<?php echo $count;?>" class="btn btn-red btn-peneira"><?php esc_html_e( 'Ver Aprovados', 'ibrachina' ); ?></button>

								<div id="dialog-content-<?php echo $count;?>" style="display:none;max-width:500px;">
									<h5>Lista de aprovados - Peneira <?php echo wp_kses_post( get_sub_field('idade') );?> - <?php echo wp_kses_post( get_sub_field('data') );?></h5>
									<?php echo wp_kses_post( get_sub_field('lista_de_aprovados') );?>
								</div>
							</td>
						</tr>
					<?php $count = $count + 1; endwhile; ?>
				</table>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>