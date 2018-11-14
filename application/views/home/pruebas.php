<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="carousel carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="<?php echo base_url('assets/images/3907.jpg') ?>"></a>
        <a class="carousel-item" href="#two!"><img src="<?php echo base_url('assets/images/789.jpg') ?>"></a>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

	<script>
		$(function(){
                $('.carousel.carousel-slider').carousel({full_width: true});
            });
	</script>
</body>
</html>