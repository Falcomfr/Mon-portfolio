<style>
#wrap {
	/* position du conteneur pour le préparer à bouger */
	position: relative;
	top: 0;
	/* on prépare la transition à venir */
	transition: top 1.4s cubic-bezier(.49,.22,.52,1.35);
}

#slide1, #slide2, #slide3 {
	/* height à adapter avec media queries */
	height: 1000px;
	padding-top:100px;
	/* préparation des transitions */
	transition: background-position 1.4s  cubic-bezier(.49,.22,.52,1.35);
}
#slide3 { background: url(img/deco2OLD.jpg) center 0 no-repeat fixed; }

.slide_inside {
	width: 770px;
	margin: 0 auto;
	position: relative;
	background-color: rgba(0, 0, 0, .6);
	padding: 50px;
}
#slide3 .slide_inside {
	margin-top: 50px;
}

#s3:target ~ #wrap { top:-2150px; }
#s3:target ~ #wrap #nav li:last-child a { text-shadow: 0 0 5px #eca603, 0 0 5px #eca603, 0 0 5px #eca603, 0 0 5px #eca603; }
#s3:target ~ #wrap #slide1 { background-position: 50% 60%; }
#s3:target ~ #wrap #slide2 { background-position: 50% 35%; }
#s3:target ~ #wrap #slide3 { background-position: 50% 0%; }
#s3:target ~ #wrap #trooper { left:-1500px;top:-1000px; transform: rotate(-15deg); }
#s3:target ~ #wrap #clone { left:-1000px;top: -800px; transform: rotate(-15deg); }

</style>

<span id="s3"></span>

<div id="wrap">
	<div id="slide3">
		<div class="slide_inside">			
			<h2>Credits</h2>		
		</div> <!-- /.slide_inside-->	    
	</div> <!--  /#slide3 -->
</div>