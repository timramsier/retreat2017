<body>
<!-- =================== This Begins the Header =================== -->
	<header>
			<?php include $PATH['BLOCKS'].'header.block.php'; ?>
	</header>
<!-- =================== This Ends the Header =================== -->

<!-- =================== This Begins the Main  =================== -->

<!-- begins the section used for background images/crossfading -->
<div id="main-background"></div>
<!-- <div id="matte"></div>  -->
<div class="overlay" img-index="2"></div>
<div class="overlay" img-index="3"></div>
<div class="overlay" img-index="4"></div>
<!-- ends the section used for background images/crossfading -->

<main>
  <div class="container">
    <div class="row">
    	
    	<!-- Load the view based on the URL variable "view" -->
    	<?php include $PATH['VIEWS'].$view.'.view.php'; ?>

    </div>
  </div>
</main>
<!-- =================== This Ends the Main =================== -->

<!-- =================== This Begins the Footer =================== -->
	<footer>
	</footer>
<!-- =================== This Ends the Footer =================== -->
</body>