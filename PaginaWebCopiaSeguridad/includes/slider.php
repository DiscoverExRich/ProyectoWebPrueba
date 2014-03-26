<link rel="stylesheet" type="text/css" href="css/estiloSlider.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js" ></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 7000, true);
	});
</script>
<div id="featured" >
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item" id="nav-fragment-1"><a href="#fragment-1"><img src="images/slider/image1-small.jpg" alt="" /><span>15+ Excellent High Speed Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/slider/image2-small.jpg" alt="" /><span>20 Beautiful Long Exposure Photographs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/slider/image3-small.jpg" alt="" /><span>35 Amazing Logo Designs</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/slider/image4-small.jpg" alt="" /><span>Create a Vintage Photograph in Photoshop</span></a></li>
			
	      </ul>

	    <!-- First Content -->
	    <div id="fragment-1" class="ui-tabs-panel" style="">
			<img src="images/slider/image1.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Creando una web</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt condimentum lacus. Pellentesque ut diam....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/slider/image2.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >20 Beautiful Long Exposure Photographs</a></h2>
				<p>Vestibulum leo quam, accumsan nec porttitor a, euismod ac tortor. Sed ipsum lorem, sagittis non egestas id, suscipit....<a href="#" >read more</a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/slider/image3.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >35 Amazing Logo Designs</a></h2>
				<p>liquam erat volutpat. Proin id volutpat nisi. Nulla facilisi. Curabitur facilisis sollicitudin ornare....<a href="#" >read more</a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
	    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
			<img src="images/slider/image4.jpg" alt="" />
			 <div class="info" >
				<h2><a href="#" >Create a Vintage Photograph in Photoshop</a></h2>
				<p>Quisque sed orci ut lacus viverra interdum ornare sed est. Donec porta, erat eu pretium luctus, leo augue sodales....<a href="#" >read more</a></p>
	         </div>
	    </div>
		
		

		</div>