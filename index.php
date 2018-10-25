<?php
include("header.php");

?>

	<div class="slider1">		

		<header id="banner">
			<div class="slide-content align-self-end">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slide-text">
                                <h2>Making this the first true generator on the Internet</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		
		</header>
			<script src="js/slaide.js"></script>
			<script src="js/slidesbg.js"></script>
			
		<script>
				var slides = [
					"image/demo.jpg",
				  "image/1.jpg",
				  "image/3.jpg",
				];

				$("#banner").slidesbg({
				  dataSlide: slides,
							keyboard: true,
				});
		</script>
		
	</div>




<div class="main-msg-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="intro-msg text-center">
                    <h3 class="welcome-title">
                      Welcome to Newport High School
					</h3>
                    <p class="welcome-desc">
                      Newport High School (NHS) is a public secondary school in Bellevue, Washington. It serves students in grades 9–12 in the southern part of the Bellevue School District, including the neighborhoods of Eastgate, Factoria, Newport Hills, Newport Shores, Somerset, The Summit, and Sunset. As of the 2014-2015 school year, the principal is Dion Yahoudy. The mascot is the Knight, and the school colors are scarlet and gold.                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 ml-lg-auto align-self-stretch">
                <div class="home-event-widget">
                    <div class="widget-title text-center">
                        <h4>Upcomig Events</h4>
                    </div>
                    <div class="widgets-content">
                        <ul>
                        </ul>
                    </div>
                    <div class="widget-link text-center">
                        <a href="#" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include("footer.php");

?>