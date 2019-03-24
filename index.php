<!DOCTYPE HTML>
<html>
   <head>
      <link rel="stylesheet" media="screen" href="style/home_page_universe.css">
      <?php include('head.php');?>	
   </head>
   <body>
      <div class="xvpn_lp universe-theme top-lp-v2">
         <div class="jumbotron">
            <div class="stars" style="display: block;"></div>
            
            <div class="maini" id="main" style="z-index: 7;position:relative;">
               <?php include('header.php');?>	
               <div id="site_content">
                  <?php include('sidebar.php');
                     if($_GET['page'])
                     {
                     	$page = $_GET['page'];
                     	$display = $page.'.php';
                     	include($display);
                     
                     }
                     else
                     {
                     	include('aboutus.php');	
                     };
                     ?>	
                  <script>
                     var current = document.getElementsByClassName("selected");
                     current[0].className = current[0].className.replace(" selected", "");
                     var old = document.getElementsByClassName("<?php echo $page?>");
                     old[0].className += " selected";
                  </script>
               </div>
               <?php include('footer.php');?>
            </div>
         </div>
      </div>
   </body>
</html>