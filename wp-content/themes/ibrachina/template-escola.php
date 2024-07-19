<?php
//Template Name: Escola de Futebol
get_header();?>
<?php get_template_part('parts/porque');?>
<div class="turmas-ibra">
	<div class="container">
		<div class="row">
			<h2><?php esc_html_e( 'Turmas Disponíveis', 'ibrachina' ); ?></h2>

			<?php if( have_rows('turmas_disponiveis') ): ?>
				<table class="horarios">
					<tr class="top-table">
						<td><?php esc_html_e( 'Idade', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Dia', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Horário', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Professor', 'ibrachina' ); ?></td>
					</tr>
					<?php while( have_rows('turmas_disponiveis') ): the_row(); 
						?>
						<tr>
							<td class="idade"><?php echo wp_kses_post( get_sub_field('idade') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('datas') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('horarios') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('instrutores') );?></td>
						</tr>
					<?php endwhile; ?>
				</table>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="horarios-ibra">
	<div class="container">
		<div class="row">
			<h2><?php esc_html_e( 'Nossos Horários', 'ibrachina' ); ?></h2>
			<?php echo wp_kses_post( get_field('chamada_horarios')); ?>

			<?php if( have_rows('horarios') ): ?>
				<table class="horarios">
					<tr class="top-table">
						<td><?php esc_html_e( 'Idade', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Dia', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Horário', 'ibrachina' ); ?></td>
						<td><?php esc_html_e( 'Professor', 'ibrachina' ); ?></td>
					</tr>
					<?php while( have_rows('horarios') ): the_row();?>
						<tr>
							<td class="idade"><?php echo wp_kses_post( get_sub_field('idade') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('datas') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('horarios') );?></td>
							<td><?php echo wp_kses_post( get_sub_field('instrutores') );?></td>
						</tr>
					<?php endwhile; ?>
				</table>
			<?php endif; ?>
		</div>
	</div>
</div>



<div class="atletas-ibra convert-secundario">
	<div class="container">
		<div class="row">
			<div class="convert">
				<div class="container">
					<div class="row">
						<div class="box-pq">
							<?php echo wp_kses_post( get_field('chamada_conversao') );?>
							<a href="" title="" class="btn btn-red"><?php esc_html_e( 'Matricule-se!', 'ibrachina' ); ?> <i class="fa-brands fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('parts/insta');?>
<?php get_footer(); ?>