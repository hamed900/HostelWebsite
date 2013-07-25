<?php
defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$csite_name	= $app->getCfg('sitename');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<jdoc:include type="head" />

		<?php //setting caption image
        $caption1 = $this->params->get("caption1", "Every time we embrace...");
        $caption2 = $this->params->get("caption2", "Whenever i look into your eyes...");
		$caption3 = $this->params->get("caption3", "You are always on my mind...");
        ?>
		
		<?php         
        $text1 = $this->params->get("text1", "Babulal Nandlal Bohra Chhatra Niwas Celebrates 10 years of Glory and Success!");        
        $text2 = $this->params->get("text2", "Annual Function is being celebrated on 10th Feb'2013");		
        $text3 = $this->params->get("text3", "Saraswati Puja Function will be celebrated on 15th Feb' 2013 in Hostel");        
        ?>	

		<?php   //main width
        $mod_left = $this->countModules( 'position-7' );
        $mod_search = $this->countModules( 'position-0' );
        if ( $mod_left && $mod_search ) {
        $width = '';
         } elseif ( ($mod_left || $mod_search) ) {
         $width = '';
         } else {
        $width = '-full';
         }
        ?>

		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/defaut.css" type="text/css" />
		<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
		<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>
		<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/modal.js"></script>
        <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>
        <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
	    <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/innerfade.js"></script>		
        <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/faded.js"></script>
		<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/slideshow.js"></script>

	<script type="text/javascript">
        $().ready(function() {
        $('#dialog').jqm();
        });
    </script> 	
		
    <script type="text/javascript">	
        $(document).ready(				
        function(){					
           $('#news').innerfade({						
           animationtype: 'slide',						
           speed: 750,						
           timeout: 3000,						
           type: 'random',						
           containerheight: '1em'					
        });								
    });  	
    </script>	
		
	<script type="text/javascript">	
        $(document).ready(function() {
	    $(' .navigation ul  ').superfish({
		  delay:       800,                            
		  animation:   {opacity:'show',height:'show'},  
		  speed:       'normal',                          
		  autoArrows:  false,                           
		  dropShadows: true                           
	   });
	   });
    </script> 

	<script type="text/javascript">
	    $(document).ready(function() {
        $('#s3slider').s3Slider({
        timeOut: 8000 });
        }); 
    </script>
	</head>

<body>
<div id="header">
    <div class="pagewidth">
	    <div id="topmenu">
		    <div class="navigation">
                <jdoc:include type="modules" name="position-1" />
            </div>
			    <div id="content-bottom">						        
                    <div id="hightlight-t">  NEWS:</div>							            
                        <div id="hightlight-b">						                
                            <ul id="news">									                        
                                <li><a href="#n1"><?php echo $text1 ?></a></li>					                        
                                <li><a href="#n2"><?php echo $text2 ?></a></li>										                        
                                <li><a href="#n3"><?php echo $text3 ?></a></li>											                
                            </ul>
			</div>
                            <div id="tool">	
						        <a href="index.php/credits" class="jqModal">Credits</a>
			    
                                    				
                                           
                                   
					        					
                </div>
        </div>
    </div>
</div>
    <div class="pagewidth">
        <div id="wrapper-top">
	        <div id="sitename">				    	             	   
		        <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="251" height="191" alt="logotype" /></a>				            
		    </div>
			    <div id="slide">
				    <div id="s3slider">
                        <ul id="s3sliderContent">
                            <li class="s3sliderImage">
						        <img src="templates/<?php echo $this->template ?>/images/slide1.jpg" alt="image1" />
                                    <span><?php echo $caption1; ?></span>
                            </li>
                            <li class="s3sliderImage">
                                <img src="templates/<?php echo $this->template ?>/images/slide2.jpg" alt="image2" />
                                    <span><?php echo $caption2; ?></span>
                            </li>
						    <li class="s3sliderImage">
                                <img src="templates/<?php echo $this->template ?>/images/slide3.jpg" alt="image3" />
                                    <span><?php echo $caption3; ?></span>
                            </li>
                                <div class="clear s3sliderImage"></div>
                         </ul>
                    </div>
                </div>
        </div>
	        <div id="wrapper-main">
		        <?php if ($this->countModules('position-7') ||  $this->countModules('position-0')) { ?>
				    <div id="colonne">
					    <div id="left">
	                        <jdoc:include type="modules" name="position-7" style="xhtml" />
					    </div>
						    <?php if ($this->countModules('position-0')) { ?>
								<div id="search">
									 <jdoc:include type="modules" name="position-0" style="xhtml" />
	                            </div>
							<?php } ?>
					</div>
				<?php } ?>
					<div id="main<?php echo $width; ?>">
				        <jdoc:include type="component" />
			        </div>
		    </div>
	</div>
	 <?php if ($this->countModules('position-3') || $this->countModules('position-4') || $this->countModules('position-6') ||  $this->countModules('position-8')) { ?>
	    <div id="footer">
		    <div class="pagewidth">
		        <div class="box">
				    <jdoc:include type="modules" name="position-3" style="xhtml" />
			    </div>
			    <div class="box">
				     <jdoc:include type="modules" name="position-4" style="xhtml" />
						                    
		        </div>
			     <div class="box">
				  <jdoc:include type="modules" name="position-6" style="xhtml" />
						                    
		        </div>
			    <div class="box">
				 <jdoc:include type="modules" name="position-8" style="xhtml" />
						                    
		        </div>
		    </div>
		</div>
	<?php } ?>
		<div id="ftb-f">
			<div class="pagewidth">
			    <div class="ftb">
				    <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("template.php"); ?>
                </div>
				<div id="topb">
                    <div class="top_button">
                        <a href="#" onclick="scrollToTop();return false;">
						<img src="templates/<?php echo $this->template ?>/images/top.png" width="30" height="30" alt="top" /></a>

                    </div>




			    </div>
				
            </div>
        </div>			
</body>

</html>

