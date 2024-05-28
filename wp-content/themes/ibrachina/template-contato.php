<?php
//Template Name: Contato
get_header();?>
<div class="container">
	<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="breadcrumb">
			<span class="bc-span">Você está em:</span>
			<ol itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
						<span itemprop="name">Home</span>
					</a>››
					<meta itemprop="position" content="1">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a itemprop="item" href="<?php echo esc_url( home_url( '/' ) ); ?>contato/"> 
						<span itemprop="name">Contato</span>
					</a>
					<meta itemprop="position" content="2">
				</li>
			</ol>
		</div>
	</div>
</div>
<div class="container">
	<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<form id="form-contact" method="POST" action="<?php bloginfo('template_directory');?>/php/sendcontact.php">
			<input type="hidden" name="identifier" value="<?php the_title();?>">
			<input type="text" name="name" placeholder="Nome" required>
			<input type="email" name="email" placeholder="E-mail" required>
			<input type="text" name="phone" placeholder="Telefone" class="form-phone fullphone">
			<input type="text" name="cell-phone" placeholder="Celular" class="form-cell fullphone">
			<input type="text" name="site" placeholder="Site">
			<select name="service" required>
				<option value="" selected disabled>-- Selecione um Serviço --</option>
				<option value="Criação de Sites">Criação de Sites</option>
				<option value="Criação de E-commerce">Criação de E-commerce</option>
				<option value="Otimização de Sites">Otimização de Sites</option>
				<option value="Links Patrocinados">Links Patrocinados</option>
				<option value="Gestão de Redes Sociais">Gestão de Redes Sociais</option>
				<option value="E-mail Marketing">E-mail Marketing</option>
			</select>
			<input type="submit" name="send" value="Solicitar Contato">
		</form>
	</div>		
</div>
<?php get_footer(); ?>