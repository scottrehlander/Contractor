<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php 

	session_start(); 
	require("includes/contract-DB.php");	

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Find yourself a local contractor!" />
<meta name="Keywords" content="work, contractor, marlborough, shed, houses, building" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Scott Rehlander - srehlander@gmail.com" />
<meta name="Robots" content="index,follow" />

<link rel="stylesheet" href="images/Azulmedia.css" type="text/css" />

<title>Azulmedia</title>
	
<link href="css/Azulmedia.css" rel="stylesheet" type="text/css" />
</head>

<?php

	$con = getDBConnection();
	
		
	$sql = "SELECT * FROM `navigation` WHERE 1";
			
			
			$result = mysql_query($sql, $con) or die(mysql_error()); 	
			$row = mysql_fetch_array( $result );
	
			$userNameNotFound = false;
			$passwordNotCorrect = "";

			if( !empty($row) )
			{
				//User found, check password
				$userNameNotFound = true;
				$passwordNotCorrect = $row["display"];
			}
			
?>

<body>
<!-- wrap starts here -->

<?php

	if($userNameNotFound)
		echo("WOOOOORDDD " . $passwordNotCorrect);

?>

<div id="wrap">

	<div id="header">	
		
		<h1 id="logo">find<span class="gray">atract</span></h1>
		<h2 id="slogan">Your number one source for local contract work.</h2>		
		
		<!-- Menu Tabs -->
		<div id="menu">
			<ul>
			<li id="current"><a href="index.html">Home</a></li>
			<li><a href="index.html">News</a></li>
			<li><a href="index.html">Downloads</a></li>
			<li><a href="index.html">Support</a></li>
			<li><a href="index.html">About</a></li>			
			</ul>		
		</div>		
	
	</div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">	 
	
		<div id="sidebar" >				

			<h1 class="clear">Sidebar Menu</h1>
			<ul class="sidemenu">
				<li><a href="index.html">Home</a></li>
				<li><a href="#TemplateInfo">Template Info</a></li>
				<li><a href="#SampleTags">Sample Tags</a></li>
				<li><a href="http://www.styleshout.com/">More Free Templates</a></li>
				<li><a href="http://www.4templates.com/?aff=ealigam">Premium Templates</a></li>					
			</ul>		
			
			<h1>Site Partners</h1>
			<ul class="sidemenu">
				<li><a href="http://www.dreamhost.com/r.cgi?287326">Dreamhost</a></li>
				<li><a href="http://www.4templates.com/?aff=ealigam">4templates</a></li>
				<li><a href="http://store.templatemonster.com/?aff=ealigam">TemplateMonster</a></li>	
				<li><a href="http://www.fotolia.com/partner/114283">Fotolia.com</a></li>									
				<li><a href="http://www.text-link-ads.com/?ref=40025">Text Link Ads</a></li>  		
			</ul>
			
			<h1>Search</h1>
			<div class="searchform">
				<form action="#">
					<p>
					<input name="search_query" class="textbox" type="text" />
  					<input name="search" class="button" value="Search" type="submit" />
					</p>
				</form>
			</div>
			
			<h1>Wise Words</h1>
			<p>&quot;The happiest people are those who invested their time in others.
			The unhappiest people are those who wonder how the world is going to 
			make them happy&quot;</p>		
				
			<p class="align-right">- John Maxwell</p>			
			
			<h1>Support Styleshout</h1>
			<p>If you are interested in supporting my work and would like to contribute, you are
			welcome to make a small donation through the 
			<a href="http://www.styleshout.com/">donate link</a> on my website - it will 
			be a great help and will surely be appreciated.</p>				
		
		</div>	
	
		<div id="main">		
		
			<a name="TemplateInfo"></a>			
			<div class="box">
				
				<h1>Template <span class="gray">Info</span></h1>
				
				<p><strong>Azulmedia 2.1</strong> is a free, W3C-compliant, CSS-based website template 
				by <strong><a href="http://www.styleshout.com/">styleshout.com</a></strong>. This work is 
				distributed under the <a rel="license" href="http://creativecommons.org/licenses/by/2.5/">
				Creative Commons Attribution 2.5  License</a>, which means that you are free to 
				use and modify it for any purpose. All I ask is that you include a link back to  
				<a href="http://www.styleshout.com/">my website</a> in your credits.</p>  

				<p>For more free designs, you can visit 
				<a href="http://www.styleshout.com/">my website</a> to see 
				my other works.</p>
		
				<p>Good luck and I hope you find my free templates useful!</p>
				
				<p class="comments align-right">
					<a href="index.html">Read more</a> : 
					<a href="index.html">Comments(7)</a> : 
					Oct 28, 2006
				</p>
				
			</div>
			
			<a name="SampleTags"></a>
			<div class="box">
				<h1>Sample <span class="gray">Tags</span></h1>
				
				<h3>Code</h3>				
				<p><code>
				code-sample { <br />
				font-weight: bold;<br />
				font-style: italic;<br />				
				}
				</code></p>	
			
				<h3>Example Lists</h3>
			
				<ol>
					<li>example of</li>
					<li>ordered list</li>							
				</ol>	
						
				<ul>					
					<li>example of</li>
					<li>unordered list</li>								
				</ul>				
				
				<h3>Blockquote</h3>			
				<blockquote><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
				nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p></blockquote>
			
				<h3>Image and text</h3>
				<p><a href="http://getfirefox.com/"><img src="Images/firefox-gray.jpg" width="100" height="121" alt="firefox-gray" class="float-left" /></a>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
				Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
				posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
				odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra 
				condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. 
				In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar 
				ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est. 				
				</p>
			
				<h3>Example Form</h3>
				<form action="#">		
					<p>				
					<label>Name</label>
					<input name="dname" value="Your Name" type="text" size="30" />
					<label>Email</label>
					<input name="demail" value="Your Email" type="text" size="30" />
					<label>Your Comments</label>
					<textarea rows="5" cols="5"></textarea>
					<br />	
					<input class="button" type="submit" />		
					</p>		
				</form>				
				
				<br />	
			
			</div>	
							
		</div>				
		
	<br />			
	<!-- content-wrap ends here -->		
	</div>	

<!-- wrap ends here -->
</div>

<!-- footer starts here -->	
<div id="footer-wrap">
	
	<div class="footer-left">
		<p class="align-left">			
		&copy; 2006 <strong>Company Name</strong> |
		Design by <a href="http://www.styleshout.com/">styleshout</a> | Valid <a href="http://validator.w3.org/check/referer">XHTML</a> |
		<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
		</p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html">Home</a>&nbsp;|&nbsp;
  		<a href="index.html">SiteMap</a>&nbsp;|&nbsp;
   	<a href="index.html">RSS Feed</a>
		</p>
	</div>
	
</div>
<!-- footer ends here -->	

</body>
</html>
