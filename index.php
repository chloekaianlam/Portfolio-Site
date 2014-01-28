<?php include 'includes/header.php'; ?>

<div class="container">

	<header>

		<nav class="main-nav">
			<ul>
				<li><a class="nav" href="" data-hover="About">About</a></li>
				<li><a class="nav" href="" data-hover="Projects">Projects</a></li>
				<li><a class="nav" href="" data-hover="Clients">Clients</a></li>
				<li><a class="nav" href="" data-hover="Contact">Contact</a></li>
			</ul>
		</nav>

	</header>

	<section class="about" data-page="about" data-colour="blue">

		<div class="badge"></div>

		<div class="content">

			<h1>Hi,</h1>

			<p class="intro">I'm Chloe, London based Web Designer and Developer. There aren't many ways to write an introduction about oneself without sounding narcissistic, so I'm just going to tell you that I love what I do, my passion in life is what I do as a career.</p>
			<p class="intro">The dream had came true for me, I work very hard to live this dream of mine. Exploring, discovering creativity and technical knowledge is part of my daily venture.</p>

		</div>

		<figure class="air-balloon"><img src="../assets/image/animations/air-balloon.png" /></figure>

	</section>

	<section class="projects" data-page="projects" data-colour="rice">

		<div class="badge"></div>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a> 
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i>CSW</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i><i class="iphone"></i>Candyland</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i><i class="iphone"></i>Love Cravendale</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i>Aunt Bessies</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i><i class="iphone"></i>Cravendale</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i>Nominet</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i>Weight Watchers</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="art"></i>Coca Cola</span></a>
			</div>
		</article>

		<article class="project-item">
			<a class="thumbnail" href="http://www.google.co.uk/"><img src="http://dummyimage.com/640x480/000/fff" /></a>
			
			<div class="overlay">
				<a class="thumbnail" href="http://www.google.co.uk/"><span><i class="mac"></i><i class="art"></i>Shaun the Sheep</span></a>
			</div>
		</article>
		
	</section>

	<section class="client" data-page="client" data-colour="purple">

		<div class="badge"></div>
		
		<article class="content">

			<ul class="client-grid">
				<li><img src="assets/image/logos/rekorderlig.png" /></li>
				<li><img src="assets/image/logos/visa.png" /></li>
				<li><img src="assets/image/logos/coca-cola.png" /></li>
				<li><img src="assets/image/logos/tnt.png" /></li>
				<li><img src="assets/image/logos/nhs.png" /></li>
				<li><img src="assets/image/logos/hello-kitty.png" /></li>
				<li><img src="assets/image/logos/candyland.png" /></li>
				<li><img src="assets/image/logos/shaun-the-sheep.png" /></li>
				<li><img src="assets/image/logos/disney.png" /></li>
				<li><img src="assets/image/logos/macau-grand-prix.png" /></li>
				<li><img src="assets/image/logos/ibm.png" /></li>
				<li><img src="assets/image/logos/fujitsu.png" /></li>
				<li><img src="assets/image/logos/siemens.png" /></li>
				<li><img src="assets/image/logos/hp.png" /></li>
				<li><img src="assets/image/logos/sainsburys.png" /></li>
			</ul>
		</article>

		<figure></figure>
		
	</section>

	<section class="contact" data-page="contact" data-colour="lime">

		<div class="badge"></div>
		
		<article class="content">

			<form action="send.php" method="POST">

				<label for="name">Name:</label><img class="icon" src="assets/image/icons/pencil.png" />
				<input type="text" name="name" placeholder="Name" />

				<label for="email">Email:</label><img class="icon" src="assets/image/icons/email.png" />
				<input type="text" name="email" placeholder="Email" />

				<label for="message">Message:</label><img class="icon" src="assets/image/icons/message.png" />
				<textarea rows="5"></textarea>

				<input type="submit" value="Send" class="button" />

			</form>
		</article>
		
		<figure class="balloons"><img src="assets/image/animations/balloons.png" /></figure>

		<figure class="pencil"><img src="assets/image/animations/pencil.png" /></figure>
		
	</section>

</div>

<?php include 'includes/footer.php'; ?>