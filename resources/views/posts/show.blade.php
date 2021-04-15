<!DOCTYPE HTML>

<html>
	<head>
		<title>Dygitalebyte - blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset ('assets/main.css')}}" />
	</head>
	<body class="right-sidebar is-preload">


			
			<!-- Main -->
				<section id="main" class="wrapper style2">
					<div class="container">
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

						<!-- Content -->
                        <div id="content">
                            <article class="box post">
                                <header class="style1">
                                    <h2>{{ $post->title }}</h2>
                                </header>
                                <a href="#" class="image featured">
                                    <img src="images/pic01.jpg" alt="" />
                                </a>
                                <p>{{ $post->content }}.</p>
                            </article>
                        </div>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="box">
											<header>
												<h2>Ipsum nullam luctus</h2>
											</header>
											<p>Malesuada quis eget eros. Nullam sodales cursus sapien, id consequat
											leo suscipit ut. Praesent id turpis vitae turpis pretium ultricies. Vestibulum sit
											amet risus elit.</p>
											<a href="#" class="button style1">Learn More</a>
										</section>
										<section class="box">
											<header>
												<h2>Vitae turpis consequat</h2>
											</header>
											<ul class="style2">
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic08.jpg" alt="" /></a>
														<h3><a href="#">Diam odio lorem</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic09.jpg" alt="" /></a>
														<h3><a href="#">Sed duis consequat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
												<li>
													<article class="box post-excerpt">
														<a href="#" class="image left"><img src="images/pic10.jpg" alt="" /></a>
														<h3><a href="#">Tellus nulla volutpat</a></h3>
														<p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
													</article>
												</li>
											</ul>
											<a href="#" class="button style1">Archives</a>
										</section>
										
									</div>

							</div>
						</div>
					</div>
				</section>

	</body>
</html>