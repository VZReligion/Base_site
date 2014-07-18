
<!-- JS Global Compulsory -->			
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/bootstrap/js/bootstrap.min.js"></script>	
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/parallax-slider/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo $this->_theme->baseUrl;?>/js/respond.js"></script>
<![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>	