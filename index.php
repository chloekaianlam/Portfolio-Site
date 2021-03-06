<?php include 'includes/header.php'; ?>

	<section class="about" id="about">

		<div class="badge first"></div>

		<div class="content">

			<h1>Hi,</h1>

			<p class="intro">I'm Chloe, London based Web Developer and Designer. I love making usable websites, solving problems creatively. Using the technical side of my brain to devise solution for businesses and brands is what I enjoy in my career. I will dedicate time to understand your requirement to create a tailored website that meets your specific needs.</p>
			<p class="intro">One of my preferences is to work with start-up companies, the passion and positive attitude they have towards their ideas and obstacles is something I can relate closely to. I find creating web application that reflects the original concept is a lot of fun and challenging, so I'm not going to stop enjoying my career.</p>

		</div>

		<figure class="air-balloon"><img src="../assets/image/animations/air-balloon.png" /></figure>

	</section>
		
	<div class="badge second"></div>

	<section class="projects" id="project">
<!--
		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a> 
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-1" data-tooltip="Click me and I'll bounce"><span><i class="mac"></i>Nominet</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-2"><span><i class="mac"></i><i class="iphone"></i>Candyland</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-3"><span><i class="mac"></i><i class="iphone"></i>Love Cravendale</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-4"><span><i class="mac"></i>Aunt Bessies</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-5"><span><i class="mac"></i><i class="iphone"></i>Cravendale</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-6"><span><i class="mac"></i>Rekorderlig</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-7"><span><i class="mac"></i>Weight Watchers</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-8"><span><i class="art"></i>Coca Cola</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="underlay"><img src="http://dummyimage.com/760x570/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="#" data-project="p-9"><span><i class="mac"></i><i class="art"></i>Shaun the Sheep</span></a>
			</div>
		</article>
-->
	</section>

	<div class="popup">
		<a class="close" data-page="#project">x</a>
		<section class="project-details"></section>
	</div>

	<div class="badge third"></div>

	<section class="client" id="client">

		<div class="badge fourth"></div>

		<div class="client-grid">
			<ul>
				<li class="logo"><img src="assets/image/logos/rekorderlig.png" /></li>
				<li class="logo"><img src="assets/image/logos/visa.png" /></li>
				<li class="logo"><img src="assets/image/logos/coca-cola.png" /></li>
				<li class="logo"><img src="assets/image/logos/hello-kitty.png" /></li>
				<!--<li class="logo"><img src="assets/image/logos/tnt.png" /></li>
				<li class="logo"><img src="assets/image/logos/nhs.png" /></li>
				<li class="logo"><img src="assets/image/logos/candyland.png" /></li>-->
				<li class="logo"><img src="assets/image/logos/shaun-the-sheep.png" /></li>
				<li class="logo"><img src="assets/image/logos/disney.png" /></li>
				<li class="logo"><img src="assets/image/logos/macau-grand-prix.png" /></li>
				<li class="logo"><img src="assets/image/logos/ibm.png" /></li>
				<li class="logo"><img src="assets/image/logos/fujitsu.png" /></li>
				<li class="logo"><img src="assets/image/logos/siemens.png" /></li>
				<li class="logo"><img src="assets/image/logos/hp.png" /></li>
				<li class="logo"><img src="assets/image/logos/sainsburys.png" /></li>
			</ul>
		</div>
		
	</section>

	<section class="contact" id="contact">

		<div class="badge fifth"></div>
		
		<article class="content">

			<div class="loader"></div>

			<form id="contact-form" action="send.php" method="POST">

				<label for="name">Name:</label><img class="icon" src="assets/image/icons/pencil.png" />
				<input type="text" name="name" placeholder="Name" class="" />

				<label for="email">Email:</label><img class="icon" src="assets/image/icons/email.png" />
				<input type="text" name="email" placeholder="Email" class="" />

				<label for="message">Message:</label><img class="icon" src="assets/image/icons/message.png" />
				<textarea rows="5" name="message" class=""></textarea>

				<input type="submit" value="Send" class="button" />

			</form>

			<div class="thanks">
				<p>Thanks for sending me a message!</p>
				<p>I'm always keen to get involved with interesting projects, so you won't have to wait long to hear from me.</p>
				<p>Anyway, grab yourself a cup of tea and we'll speak soon.</p>
				<p>For now let's connect:</p>
				<ul class="social">
					<li><a href="https://twitter.com/ChloeKaianLam"><img src="assets/image/icons/twitter.png" alt="Twitter" target="_blank" /></a></li>
					<li><a href="http://www.linkedin.com/pub/chloe-kaian-lam/17/506/459"><img src="assets/image/icons/linkedin.png" alt="Linkedin" target="_blank" /></a></li>
				</ul>
			</div>

			<div class="sorry">
				<p>Ooops! My hosting company might have gone for a tea break.</p>
				<p>If it's not too much trouble please try to send me a message again later. Perhaps grab yourself a cup of tea whilst waiting.</p>
				<p>We'll speak soon!</p>
				<p>For now let's connect:</p>
				<ul class="social">
					<li><a href="https://twitter.com/ChloeKaianLam"><img src="assets/image/icons/twitter.png" alt="Twitter" target="_blank" /></a></li>
					<li><a href="http://www.linkedin.com/pub/chloe-kaian-lam/17/506/459"><img src="assets/image/icons/linkedin.png" alt="Linkedin" target="_blank" /></a></li>
				</ul>
			</div>

			<figure class="balloons"><img src="assets/image/animations/balloons.png" /></figure>

		</article>

		<div class="badge sixth"></div>
		
	</section>


<?php include 'includes/footer.php'; ?>