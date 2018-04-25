<?php 
	include('Config.php'); // // include database file
?>
<?php
	session_start(); // start session for admin
?>
<?php
$msg="";
$blanck="";

if(isset($_POST['submit']))
	{function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'application/pdf': return '.pdf';
				case 'application/msword': return '.doc';
				case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document': return '.docx';
				case 'application/txt': return '.txt';
				case 'application/vnd.ms-excel': return '.xls';
				case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': return '.xlsx';
				case 'application/vnd.ms-powerpoint': return '.ppt';
				case 'application/zip': return '.zip';
				
				default: return false;
				}
			}
			
			if (!empty($_FILES["uploaddoc"]["name"])&&!empty($_POST["filename"])&&!empty($_POST["parent_cat"])&&!empty($_POST["sub_cat"]))
			{
				// for data upload
				$head = $_POST['filename']; 
				$desc = $_POST['parent_cat']; 
				$descc = $_POST['sub_cat'];
					
				
				// for image upload
				$file_name=$_FILES["uploaddoc"]["name"];
				$temp_name=$_FILES["uploaddoc"]["tmp_name"];
				$imgtype=$_FILES["uploaddoc"]["type"];
				$ext= GetImageExtension($imgtype);
				$imagename=$_FILES["uploaddoc"]["name"];
				$imageget=$descc."_".$imagename;
				$target_path = "upload/list/".$imageget;
			
				if(move_uploaded_file($temp_name, $target_path)) 
				{
					mysql_query("INSERT into list (Member_ID,Organization_Name,Filename,Upload_Doc) values('$descc','$desc','$head','$target_path') ") or die(mysql_error());
					
					print '<script>alert("Data Successfully Uploaded");</script>' ; // for successful data upload
					Print '<script>window.location.assign("Price_List.php");</script>';
				}
			}
			else
			{
				$msg="*";
				$blanck="Please fill in all required fields!";
			}
		
	}
?>
<!DOCTYPE html>
<!--BEGIN html-->
<html lang="en-US">
    <!--BEGIN head-->
    <head>

                    <!-- Favicon -->
            <!-- Firefox, Chrome, Safari, IE 11+ and Opera. -->
            <link href="http://www.beltshoses.in/wp-content/uploads/2016/01/fav.png" rel="icon" type="image/x-icon" />
        
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Price List | THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</title>
<link rel="alternate" type="application/rss+xml" title="THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION &raquo; Feed" href="http://www.beltshoses.in/feed/" />
<link rel="alternate" type="application/rss+xml" title="THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION &raquo; Comments Feed" href="http://www.beltshoses.in/comments/feed/" />
			<link rel="stylesheet" href="css/menu.css">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.beltshoses.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.3"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('');
		$.get('Org_List.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

	});
	</script>
<link rel='stylesheet' id='parallaxcss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/parallax.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesomecss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/fontawesome/css/font-awesome.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='maincss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/style.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapcss-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/css/bootstrap.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrapcsstheme-css'  href='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/css/bootstrap-theme.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='dynamic-css-css'  href='http://www.beltshoses.in/wp-admin/admin-ajax.php?action=evolve_dynamic_css&#038;ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-evl_options-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A700%2C400&#038;subset=greek-ext%2Cgreek&#038;ver=1455523406' type='text/css' media='all' />
<script type='text/javascript' src='http://www.beltshoses.in/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/parallax.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/parallax/modernizr.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/carousel.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/tipsy.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/fields.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/jquery.scroll.pack.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/supersubs.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/superfish.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/hoverIntent.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/buttons.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/ddslick.js?ver=4.3.3'></script>
<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;language=en&#038;ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/bootstrap/js/bootstrap.js?ver=4.3.3'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.beltshoses.in/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.beltshoses.in/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.3.3" />
<link rel='canonical' href='http://www.beltshoses.in/about-us/' />
<link rel='shortlink' href='http://www.beltshoses.in/?p=12' />
<link href='https://fonts.googleapis.com/css?family=Exo+2:400,700' rel='stylesheet' type='text/css'>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="http://www.beltshoses.in/wp-content/themes/evolve/ie.css">
        <![endif]-->

    </head><!--END head-->

    <!--BEGIN body-->
    <body class="page page-id-12 page-template-default">
                    <div id="wrapper">
                        <div id="top"></div>
            <!--BEGIN .header-pattern-->
            <div class="header-pattern">
                <!--BEGIN .header-border-->
                <div class="header-border">
                    <!--BEGIN .header-->
                    <div class="header">
                        <!--BEGIN .container-header-->
                        <div class="container container-header">
                            <!--BEGIN #righttopcolumn-->
                            <div id="righttopcolumn">
                                                                <!--BEGIN #subscribe-follow-->
                                    <div id="social">
                                           
                                        													
                                    </div>
                                    <!--END #subscribe-follow-->
                                                                </div>
                                <!--END #righttopcolumn-->
                                <div class='header-logo-container'><a href=http://www.beltshoses.in><img id='logo-image' class='img-responsive' src=http://www.beltshoses.in/wp-content/uploads/2016/01/logo11.png /></a></div>                            <!--BEGIN .title-container-->
                            <div class="title-container ">
                                                                         <div id="logo" ><a href="http://www.beltshoses.in"><b style="font-family: 'Exo 2', sans-serif;letter-spacing: 0px;">THE MAHARASHTRA BELTS &amp; HOSES TRADERS ASSOCIATION</b></a></div>
                                    <div id="tagline">  &nbsp;&nbsp;ESTD. 2001</div>                                
                            </div>
                            <!--END .title-container-->
                        </div>
                        <!--END .container-header-->
                    </div>
                    <!--END .header-->
                </div>
                <!--END .header-border-->
            </div>
            <!--END .header-pattern-->
            <div class="menu-container">
                                    <div class="fluid-width">
                                        <div class="menu-header">
                        <!--BEGIN .container-menu-->
                        <div class="container nacked-menu container-menu">
                                                            
                                                                    <!--BEGIN #searchform-->
<!-------------Admin Header---------------------->
	<div style="height:35px;">
		<p style="color:white;margin-top:5px;padding:5px;margin-left:10px;"><b>Welcome,
		<?php 
				if($_SESSION["Admin_Name"]) 
				{
					echo $_SESSION["Admin_Name"];
				}else
				{
					print '<script>alert("Please Login!");</script>' ;
					Print '<script>window.location.assign("Admin_Login.php");</script>';
				}
		?></b><button onclick="parent.location='Log_Out.php'" value="Logout" style="float:right;height:30px;margin-top:-5px;">Logout</button></p>
	</div>
<!-------------End Admin Header---------------------->  
                                    <div class="clearfix"></div>
                                    <!--END #searchform-->
                                                            </div><!-- /.container -->
                    </div><!-- /.menu-header -->
                   
                                        </div><!-- /.fluid-width -->
                                <!--BEGIN .content-->
                <div class="content singular page pageid-12">
                                        <!--BEGIN .container-->
                    <div class="container container-center row">
                        <!--BEGIN #content-->
                        <div id="content">
                            
<!--BEGIN #primary .hfeed-->

<div id="primary" class=" col-md-12 full-width col-single">

    
    
            <!--BEGIN .hentry-->
            <div id="post-12" class="post-12 page type-page status-publish hentry p publish first-page untagged">

                
                

                <!--BEGIN .entry-content .article-->
                <div class="entry-content article">

		
	
<!-------------Your contents body---------------------->	
		<!---Vertical Menus--->		
		<div id='cssmenu' style="float:left;">
		<ul>
		<li><a href='Admin_Panel.php'><span>Dashboard</span></a></li>
		<li><a href='Slider.php'><span>Slider</span></a></li>
		<li><a href='News.php'><span>News</span></a></li>
		<li><a href='Circulars.php'><span>Circulars</span></a></li>
		<li class='active'><a href='Price_List.php'><span>Price List</span></a></li>
		<li><a href='Data_Entry.php'><span>Data Entry</span></a></li>
		<li><a href='Members_Sheet.php'><span>Members Sheet</span></a></li>
		<li class='last'><a href='Change_Pass.php'><span>Change Password</span></a></li>
		</ul>
		</div>
		<!---End Vertical Menus--->
		
		<!---Body of menus contents--->
		<div style="float:left;margin-left:10px;width:80%">
		<form method="POST" action="" enctype="multipart/form-data"> 
		<table>
		<tr>
		<td colspan="2" align="center" style="border-bottom:1px #272727 solid; text-align:center;font-size:16px;padding:10px;background-color:#38A3E1;font-family: 'roboto';color:#FFFFFF;">Add Price List
		</td>
		</tr>
		<tr>
		<td style="text-align:right;">Member ID:</td>
		<td><select name="parent_cat" id="parent_cat" style="height:30px;margin-top:0px;">
			<option value="">Select Organization Name</option> 
            <?php
					$query_parent = mysql_query("SELECT DISTINCT Organization_Name FROM data_entry ORDER BY Organization_Name ASC") or die("Query failed: ".mysql_error());
					while($r=mysql_fetch_row($query_parent))
					{ 
						echo "<option value='$r[0]'> $r[0] </option>"; // fetch all product types data from database
					}
             ?>
			</select>
			<select name="sub_cat" id="sub_cat" style="height:30px;"><option value=""></option> </select>
			<span style="color:red;"><?php echo $msg;?></span>
		</td>
		</tr>
		<tr>
		<td style="text-align:right;">File Name:</td>
		<td><input type="text" style="width:50%;" name="filename" value="<?php echo isset($_POST['filename']) ? $_POST['filename'] : ''; ?>"><span style="color:red;"><?php echo $msg;?></span></td>
		</tr>
		<tr>
		<td style="text-align:right;">Upload File:</td>
		<td><span style="color:red;"><?php echo $msg;?></span><input name="uploaddoc" type="file"></td>
		</tr>
		<tr>
		<td>
		</td>
		<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
		<tr>
		<td colspan="2"><center><span style="color:red;"><?php echo $blanck;?></span></center>
		</td>
		</tr>
		</table>
		</form>
		<table>
		<tr>
		<td style="border-bottom:1px #272727 solid;width:60px; text-align:center;font-size:16px;padding:10px;background-color:#38A3E1;font-family: 'roboto';color:#FFFFFF;">Remove Price Lists
		</td>
		
		</tr>
		</table>
		<object type='text/html' data='Remove_PriceList.php' width='100%' height='400' style='overflow: scroll;'></object>
		
		</div>
		<!---End body of menus contents--->
<!-------------End your contents body---------------------->
	

                    <div class="clearfix"></div>

                </div><!--END .entry-content .article-->

                <!-- Auto Discovery Trackbacks
                <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
			xmlns:dc="http://purl.org/dc/elements/1.1/"
			xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/">
		<rdf:Description rdf:about="http://www.beltshoses.in/about-us/"
    dc:identifier="http://www.beltshoses.in/about-us/"
    dc:title="About us"
    trackback:ping="http://www.beltshoses.in/about-us/trackback/" />
</rdf:RDF>                -->
                <!--END .hentry-->
            </div>

            
            
<div id="comments">   
    </div>


            

    <!--END #primary .hfeed-->
</div>



<!--END #content-->
</div>
<!--END .container-->
</div>
<!--END .content-->
</div>
<!--BEGIN .content-bottom-->
<div class="content-bottom">
    <!--END .content-bottom-->
</div>
<!--BEGIN .footer-->
<div class="footer">
    <!--BEGIN .container-->
    <div class="container container-footer">
                <div class="clearfix"></div>
        <div style="font-family: 'roboto'; font-size: 14px; text-align:center;"><h5>Copyright © 2016 | Powered By<a href="http://sednainfosystems.com/" target=" "><b> Sedna</b></h5> </a></div>        <!-- Theme Hook -->
        
    <script type="text/javascript">
        var $jx = jQuery.noConflict();
        $jx("div.post").mouseover(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'hidden');
                }
        );
        $jx("div.type-page").mouseover(
                function () {
                    $jx(this).find("span.edit-page").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-page").css('visibility', 'hidden');
                }
        );
        $jx("div.type-attachment").mouseover(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-post").css('visibility', 'hidden');
                }
        );
        $jx("li.comment").mouseover(
                function () {
                    $jx(this).find("span.edit-comment").css('visibility', 'visible');
                }
        ).mouseout(
                function () {
                    $jx(this).find("span.edit-comment").css('visibility', 'hidden');
                }
                );</script> 

    

    
        <script type="text/javascript">
            /*----------------------------*/
            /* Animated Buttons
             /*----------------------------*/

            var $animated = jQuery.noConflict();
            $animated('.post-more').hover(
                    function () {
                        $animated(this).addClass('animated pulse')
                    },
                    function () {
                        $animated(this).removeClass('animated pulse')
                    }
            )
            $animated('.read-more').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )
            $animated('#submit').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )
            $animated('input[type="submit"]').hover(
                    function () { $animated(this).addClass('animated pulse') },
                    function () { $animated(this).removeClass('animated pulse') }
            )

        </script>

    

    
        <script type="text/javascript">
            /*----------------*/
            /* AnythingSlider
             /*----------------*/
            var $s = jQuery.noConflict();
            $s(
                    function () {
                        $s('#slides')
                                .anythingSlider({autoPlay: true, delay: 7000, })
                    }
            )
        </script>

    

            <script type="text/javascript">
            /*----------------*/
            /* Parallax Slider
             /*----------------*/

            var $par = jQuery.noConflict();
            $par('#da-slider').cslider(
                    {
                        autoplay: true,
                        bgincrement: 450,
                        interval: 4000                    }
                    );</script>

    
    <script type="text/javascript">
        /*----------------------*/
        /* Bootstrap Slider
         /*---------------------*/

        var $carousel = jQuery.noConflict();
        $carousel('#myCarousel').carousel(
                {
                    interval: 7000
                }
        )

        $carousel('#carousel-nav a').click(
                function (q) {
                    q.preventDefault();
                    targetSlide = $carousel(this).attr('data-to') - 1;
                    $carousel('#myCarousel').carousel(targetSlide);
                    $carousel(this).addClass('active').siblings().removeClass('active');
                }
        );
        $carousel('#bootstrap-slider').carousel(
                {
                    interval: 7000                }
        )

        $carousel('#carousel-nav a').click(
                function (q) {
                    q.preventDefault();
                    targetSlide = $carousel(this).attr('data-to') - 1;
                    $carousel('#bootstrap-slider').carousel(targetSlide);
                    $carousel(this).addClass('active').siblings().removeClass('active');
                }
        );
        // $('#carousel-rel a').click(function(q){
        //         console.log('Clicked');
        //         targetSlide = (parseInt($('#carousel-rel a.active').data('to')) + 1) % 3;
        //         console.log('targetSlide');
        //         $('#carousel-rel a[data-to='+ targetSlide +']').addClass('active').siblings().removeClass('active');
        //     });
    </script>


            <!--END .container-->
    </div>
    <!--END .footer-->
</div>
<!--END body-->
    <a href="#top" id="top-link"><div id="backtotop"></div></a>
        <script>
			if (jQuery(".posts-container-infinite").length == 1) {
			var ias = jQuery.ias({
			 container: ".posts-container-infinite",
			 item: "div.post",
			 pagination: "div.pagination",
			 next: "a.pagination-next",
		   });
		   
			ias.extension(new IASTriggerExtension({
				text: "Load more items",
				offset: 99999
			}));
		   ias.extension(new IASSpinnerExtension({
				src: "http://www.beltshoses.in/wp-content/themes/evolve/library/media/images/loader.gif"			   
		   }));
		   ias.extension(new IASNoneLeftExtension());
			}
		</script><script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/tabs.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/main.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://www.beltshoses.in/wp-content/themes/evolve/library/media/js/gmap.js?ver=4.3.3'></script>
</body>
<!--END html(kthxbye)-->
</html>