<?php include 'includes/header.php'; ?>

<section class="portfolio">

	<article class="home" data-page="home" data-colour="blue">

		<img class="home-bg" src="assets/image/background/home-bg.png" />
		
		<div class="wrapper">
			<div class="content">
				<h1>Home</h1>

				<p>London based Web Developer and Designer. Hi, my name is Chloe. I design and code for the web - dedicating most of my time making functional, usable and pretty websites, because I LOVE it.</p>
				<p>Obviously, there are other things I love and feel passionate about, if you are interested take a look at <a href="#" data-hover="what I Love">what I Love</a> in my little world.</p>
			</div>
		</div>

	</article>

	<figure class="air-balloon"><img src="../assets/image/background/air-balloon.png" /></figure>

	<article class="projects" data-page="projects" data-colour="yellow">

		<img class="project-bg" src="assets/image/background/projects-bg.png" />
		
		<div class="wrapper">
			<h1>Projects</h1>

			<div class="project-grid">
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
				<img src="http://lorempixel.com/300/200/animals/" />
			</div>
		</div>

		<figure></figure>
		
	</article>

	<article class="love" data-page="love" data-colour="orange">
		
		<div class="love-bubble">
			<h1>Love</h1>

			<img class="cook" src="http://lorempixel.com/200/200/animals/" />
			<img class="bake" src="http://lorempixel.com/100/100/animals/" />
			<img class="photography" src="http://lorempixel.com/120/120/animals/" />
			<img class="html" src="http://lorempixel.com/150/150/animals/" />
			<img class="css" src="http://lorempixel.com/200/200/animals/" />
			<img class="javascript" src="http://lorempixel.com/180/180/animals/" />
			<img class="video" src="http://lorempixel.com/80/80/animals/" />
			<img class="art" src="http://lorempixel.com/230/230/animals/" />
		</div>

		<figure></figure>
		
	</article>

	<article class="contact" data-page="contact" data-colour="lime">
		
		<div class="wrapper">
			<h1>Contact</h1>

			<form action="send.php" method="POST">

				<label for="name">Name:</label><img class="icon" src="assets/image/icon/pencil.png" />
				<input type="text" name="name" placeholder="Name" />

				<label for="email">Email:</label><img class="icon" src="assets/image/icon/email.png" />
				<input type="text" name="email" placeholder="Email" />

				<label for="message">Message:</label><img class="icon" src="assets/image/icon/message.png" />
				<textarea rows="8"></textarea>

				<input type="submit" value="Send" class="button" />

			</form>
		</div>

		<figure></figure>
		
	</article>

	<article class="client" data-page="client" data-colour="purple">
		
		<div class="wrapper">
			<h1>Clients</h1>

			<div class="client-grid">
				<img src="assets/image/logos/rekorderlig.png" />
				<img src="assets/image/logos/visa.png" />
				<img src="assets/image/logos/coca-cola.png" />
				<img src="assets/image/logos/tnt.png" />
				<img src="assets/image/logos/nhs.png" />
				<img src="assets/image/logos/hello-kitty.png" />
				<img src="assets/image/logos/candyland.png" />
				<img src="assets/image/logos/shaun-the-sheep.png" />
				<img src="assets/image/logos/disney.png" />
				<img src="assets/image/logos/macau-grand-prix.png" />
				<img src="assets/image/logos/ibm.png" />
				<img src="assets/image/logos/fujitsu.png" />
				<img src="assets/image/logos/siemens.png" />
				<img src="assets/image/logos/hp.png" />
				<img src="assets/image/logos/sainsburys.png" />
			</div>
		</div>

		<figure></figure>
		
	</article>

</section>

<?php include 'includes/footer.php'; ?>