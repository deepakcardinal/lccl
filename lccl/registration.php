
 
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- style sheet-->
        <link rel="stylesheet" href="css/main-style.css">
        <title>Registraion</title>
        <meta name="description" content="LCCL- Lucknow Lucknow Corporate Cricket League, brings together India’s biggest entertainment industries- Cricket and Films, where India’s top actors showcase their cricketing skills on-field in nail-biting and a run to the finish games, to the audiences delight.">
        <meta name="keywords" content="LCCL, Lucknow Lucknow Corporate Cricket League , LCCL official webiste, LCCL3, TRICON TITANS ,HCL HURRICANES,TCS STRIKERS,PHARMA WARRIORS,LUCKNOW SMASHERS,CARDINALS,Veer Marathi,CEDCOSS SUPER GIANTS">
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
        </style>

        <link href="css/social_styles.css" rel="stylesheet" />


        <script type="text/javascript" src="js/jQuery v1.11.3.js"></script> 
        <script type="text/javascript" src="js/animation-js.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/html5shiv.js"></script> 
        <script type="text/javascript" src="js/custom.js"></script>

        <!--fancyBox Start-->
        <script type="text/javascript" src="source/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="source/jquery.fancybox-buttons.css?v=1.0.5" />
        <script type="text/javascript" src="source/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="source/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="source/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="source/jquery.fancybox-media.js?v=1.0.6"></script>
        <script src="js/jquery.validate.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function () {

                //            $(".thumb").thumbs();
                /*
                 *  Simple image gallery. Uses default settings
                 */
                $('.fancybox').fancybox();

                $('.fancybox-media')
                        .attr('rel', 'media-gallery')
                        .fancybox({
                            openEffect: 'none',
                            closeEffect: 'none',
                            prevEffect: 'none',
                            nextEffect: 'none',
                            arrows: false,
                            helpers: {
                                title: {
                                    type: 'inside'
                                },
                                media: {},
                                buttons: {}
                            }
                        });

                $(".fancybox-text").fancybox({
                    //                wrapCSS: 'fancybox-custom',
                    closeClick: false,
                    //                openEffect: 'none',
                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        overlay: {
                            css: {
                                'background': 'rgba(238,238,238,0.85)'
                            }
                        },
                        margin: [20, 60, 20, 60]
                    },
                    afterLoad: function () {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });
            });
        </script>
        <!--fancyBox End-->


    </head>
    <body>
        <!-- header starts here-->
		<?php include "header.html";?>
        <!-- header ends here--> <!-- main starts here--><main class="internal-main">     <!-- internal top header background-->    
		<div class="bg-header-internal">    </div>      <!-- internal top header background ends here-->     <!-- internal page main content starts here-->    <section class="internal-main-content">        <!-- brudcrumb starts here-->        <div class="container brud-cr">            <ul class="brudcrumb">                <li><a href="/lccl/">Home</a></li>                <li><a>Registration</a></li>            </ul>        </div>        <!-- brud crumb ends here-->        <!-- main content starts here-->        
		<div class="main-content container nopad-desk" style="height:400px">            
		<div class="row">                
			<div class="col-md-10">                    
			<article>
			<h1>Registration Details </h1>
			<h3>Registrations for Season 3 are now closed</h3>
			<p>
			For the registration, teams need to submit the list of 15 players in the prescribed format along with the
				entry fee before the last date of fee submission.<br></br>
				<b>Required</b>
				<div>
				<ul class="registration-ul">
				<li>Entry Fee Rs. 5500</li>
				<li>Team Name (Must Include the Name of the Company)</li>
				<li>Team Logo (Good Quality PNG image)</li>
				<li>Images of the players in Team Jersey.</li>
				<li>Company ID (scanned copies of the all players).</li>
				<li>Dully filled Team Details Form (The Team Details Form will be provided along with this document).</li>
				<br></br>The above details should be emailed to : <a href="mailto:lccl@gmx.com" target="_top">lccl@gmx.com</a>.
				<br></br>For any registration related querry contact Sheetanshu at 9984575784.
				</ul>
				</div>
			</p></article>
			 </div>
			 <div  class="col-md-2" style="margin-top: 124px;margin-left: -187px;">
				<b>Download</b>
				<ul class="registration-ul">
				<li><a href="/lccl/documents/Team_Details_Form.docx" target="_blank">Team Details Form</a></li>
				<li><a href="/lccl/documents/LCCL_Brochure_V2.pdf" target="_blank">LCCL_Brochure_V2</a></li>
				</ul>
			</div>
		 </div> 
		 </div>
		 <!-- main content ends here-->    </section>    <!-- internal page main content ends here--></main><!-- main ends here--> 
				
<!-- footer starts here-->
<?php include "footer.html";?>
<!-- footer ends here-->
</body>
</html>
