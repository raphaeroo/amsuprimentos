 <?php
/* Template Name: pagina-contato */
 ?>
<?php get_header(); ?>
<div id="separador"></div>
<section id="pag-interna">
    <div class="container">
        <div class="col-12 text-center">
            <h1>Fale Conosco</h1>
        </div>
        <div class="p-1em"></div>
        <div class="p-1em"></div>
        <div class="p-1em"></div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="p-1em"></div>
                <div class="p-1em"></div>
                <div class="p-1em"></div>
                <div class="p-1em"></div>
                	<p><i class="fa fa-phone"></i> <span>(11) 2355-9200</span></p>
                	<p><i class="fa fa-phone"></i> <span>(11) 2355-3494</span></p>
                	<p><i class="fa fa-phone"></i> <span>(11) 2864-4888</span></p>
				<p><i class="fa fa-envelope"></i> <span>contato@amsuprimentos.com.br </span></p>
				<p><i class="fab fa-skype"></i> <span>AMSUPRIMENTOS-2015</span></p>
				<p><i class="fa fa-map-pin"></i> <span> Rua Josina Maria da Silva, nº 37 - Vila Sacilotto <br />&nbsp;&nbsp;&nbsp;S.B. Campo - SP - Brasil - CEP 09810-310</span></p>
								<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.675741270285!2d-46.568402184836096!3d-23.7232708734769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4165129e97e7%3A0x6313ab158ade9d7a!2sR.+Josina+Maria+da+Silva%2C+37+-+Vila+Sacilotto%2C+S%C3%A3o+Bernardo+do+Campo+-+SP%2C+09810-310!5e0!3m2!1spt-BR!2sbr!4v1548701534983" width="100%" height="150" frameborder="5" style="border:5px solid #8e8e8e" allowfullscreen></iframe>
				</p>
            </div>
            <div class="col-md-8 col-sm-12">
                	<div class="text-center" id="form-direito">
				<h2>Mande uma Mensagem</h2>
				<p><?php echo do_shortcode('[contact-form-7 id="198" title="formulario-site"]');  ?></p>
			</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>