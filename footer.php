<div class="footer">
  <div class="footer-inside">
    <div class="footerlink"><p style="color:white;">Copyright (c)@2013 Groupinfra.co.in All rights reserved.</p> <a href="http://www.localweb.co.in" style="color:#FFFFFF;">Design by Localweb.co.in</a></div>
  </div>
</div>
<div class="clear"></div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script type="text/javascript" >
function blink(selector){
$(selector).fadeOut('slow', function(){
$(this).fadeIn('slow', function(){
blink(this);
});
});
}

blink('#msg');
</script>


</body>
</html>
