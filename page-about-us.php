<?php get_header(); ?>

<div class="page-wrapper">
	<div id="primary" class="site-main">
		<div class="container-fluid">
			<div class="section-wrapper row main">
				<div class="col-xl-12 mt-5">
					<div class="mt-5">
						<h2 class="display-4 fw-bold text-center text-white">About Donkya Plastics</h2>
						<div class="container text-center py-5">
							<p class="col text-white fs-4"><strong>DONKYA</strong> was born out of an interest in restoring and preserving our natural environments. As a company, we are dedicated to constructing products from recycled plastic that add durability and style to our designs.</p>
							<p class="col text-white fs-4">Through our local recycling solution, we create awareness and additional economic value for communities. Furthermore, part of the revenue is used for renaturation and reforestation.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main id="page" class="container">
			<div class="section-wrapper row">
				<div class="container-fluid py-5">
					<!--p class="col text-center fs-4">We know that our story so far, this went from being nomads that gathered some fruits and hunted animals in order to survive. Now, having all the power to shape our enviroment, here lies the problem of pollution that is putting our world in a hurry.</p-->
				</div>
			</div>
			<div class="section-wrapper">
				<div class="row align-items-md-strech">
					<div class="col-md-6">
						<div class="h-100 p-5 text-white bg-green rounded-3">
							<h2>Mission</h2>
							<p class="fs-6 text-white">Here at <strong>DONKYA Plastic</strong> strive to protect nature in combination with a sustainable economy. By managing recycled plastics and transforming them into a handmade and innovative product. Our goals are based on solidarity and care for the planet in the face of the growing problem caused by the pollution of different types of plastic.</p>
						</div>
					</div>
					<div class="about-vision-box col-md-6">
						<div class="h-100 p-5 bg-light border rounded-3">
							<h2>Vision</h2>
							<p class="fs-6">Our vision is to be an environmental reference from the local to the international level, characterised by an environmental philosophy not only in the social environment but also in the promotion of a green economy.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-wrapper row">
				<div class="col-xl-12">
					<div class="container-fluid mt-5">
						<h2 class="display-6 fw-bold"><?php echo __( 'The Big Issue of Plastic', 'donkyatheme' ); ?></h2>
						<div class="row">
							<?php echo '<h3 class="fw-bold">' . __( 'Global Contamination', 'donkyatehme' ) . '</h3>'; ?>
							<p class="fs-6 col-md-6"><?php _e( 'The first plastic was produced in the early 1900s. Now, more than 100 years later, it has become one of the biggest global problem of pollution', 'donkyatehme' ); ?>.</p>
							<div class="col-md-6">
								<img class="img-fluid" src="https://res.cloudinary.com/negocios-el-triunfo/image/upload/v1659395996/donkya/4_i4xzyw.png">
							</div>
							<h3 class="fw-bold"><?php _e( 'Our Oceans', 'donkyatheme' ); ?></h3>
							<p class="fs-6">Plastic pollution grew from two million tonnes in 1950 to 348 million tonnes in 2017, making it a global industry valued at <strong>$522.6 billion</strong>, according to the Programme. It is expected to double by 2040.</p>
							<p class="fs-6">The impacts of plastic production and pollution are a looming catastrophe in the context of the triple planetary crisis of climate change, loss of nature and pollution, the UN agency said.</p>
							<h3 class="fw-bold"><?php _e('Human Health', 'donkyatheme' ); ?></h3>
							<p class="fs-6">Exposure to plastics harms human health, and can affect fertility, hormonal, metabolic and neurological activity, while open burning of plastics contributes to air pollution.</br>By 2050, greenhouse gas emissions associated with the production, use and disposal of plastics will account for 15% of allowable emissions under the goal of limiting global warming to 1.5°C.</p>
							<h3 class="fw-bold"><?php _e('Impact of plastic on CO2 emisions', 'donkyatheme' ); ?></h3>
							<p class="fs-6">More than 800 marine and coastal species are affected by this pollution through ingestion, entanglement and other hazards.</p>
							<p class="fs-6">Every year, some 11 million tonnes of plastic waste reaches the oceans. This figure could triple by 2040.</p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="section-wrapper row">
				<div class="col-xl-12">
					<div class="container-fluid mt-5">
						<h2 class="display-6 fw-bold">The Solution</h2>
						<p class="fs-6">As a company, we are commited with building products from recycled plastic and other waste products, in order to add durability, usability and style to our designs.</p>
						<p class="col-md-8 fs-6">Through our community based recycling solution, we create awareness and additional economic value for local communities. Furthermore, part of the revenue is used for renaturation and reforestation.</p>
						<p class="fs-6">The process goes from collecting the plastic waste to cleaning, shredding and transforming it into new, stylish and more durable products made from recycled plastic. Manual and artesanal processes are used, as well as tech with the use of machines such as “PetBots”, 3D printers, shredders, plate press and injection machines.</p>
						<p class="fs-6">Furthermore, we create more environmental awareness and knowledge around the topic of plastic and resource conservation through workshops and courses.</p>
					</div>
			</div>
			<div class="p-5 text-center">
				<a href="<?php echo get_permalink( 70 ); ?>" class="btn btn-success" role="button">
					Collaborate
				</a>
			</div>
		</main>
	</div>	
</div>

<?php get_footer(); ?>