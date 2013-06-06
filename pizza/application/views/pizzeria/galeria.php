<div id="avmenu">
<h2 class="hide">Menu:</h2>
<ul>


<?php $this->load->view('pizzeria/leftmenu'); ?>


</ul>
</div>

<div id="extras">
<?php $this->load->view('pizzeria/extras'); ?>
</div>

<div id="content">




<div class="imageRow">
		  <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/image-2.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/thumb-2.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
      <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/pizzeria_banolli2.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/pizzeria_banolli2.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
      <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/vl245044.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/vl245044.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
      <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/e87c5067f963bf977bc47ccd84b8b84c,112,30.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/e87c5067f963bf977bc47ccd84b8b84c,112,30.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
      <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/414c8ba92c829a272abe0d3e8b97aaa3,112,30.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/414c8ba92c829a272abe0d3e8b97aaa3,112,30.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
      <div class="single">
      <a href="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/04_d.20120423193859.jpg" rel="lightbox">
      <img src="<?PHP echo base_url(); ?>application/views/pizzeria/images/examples/04_d.20120423193859.jpg" width="120" height="120" alt=""/>
      </a>
      </div>
     

<script type="text/javascript" src="<?PHP echo base_url(); ?>application/views/pizzeria/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>application/views/pizzeria/js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>application/views/pizzeria/js/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url(); ?>application/views/pizzeria/js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
  	

 

</div>



		 
  	
  







<p>&nbsp;</p>

		
		

</div>
