<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="content-type" content="text/html;" />
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no">

	<title> PHP Date & Time | Tech Stream</title>

	<meta name="description" content="Reference table for PHP date formats, Standard, regular,MYSQL and human readable formats"/>

	<!-- Open Graph -->
	<meta property="og:title" content="PHP Date & Time" />
	<meta property="og:image" content="http://ns2.techstream.org/images/Techstream-Bits-PHP.jpg" />
	<meta property="og:site_name" content="Tech Stream" />
	<meta property="og:description" content="Reference table for PHP date formats, Standard, regular,MYSQL and human readable formats"/>
	<meta property="og:type" content="article">

	<!-- Twitter -->
	<meta name="twitter:title" content="PHP Date & Time" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:image" content="http://ns2.techstream.org/images/Techstream-Bits-PHP.jpg" />
	<meta name="twitter:site" content="@techstream_org" />
	<meta name="twitter:creator" content="@techstream_org" />
	<meta name="twitter:domain" content="techstream.org" />
    <meta name="twitter:description" content="Reference table for PHP date formats, Standard, regular,MYSQL and human readable formats"/>

	<link rel="publisher" href="https://plus.google.com/109470966265063246951">


	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/demo.css" media="all">

    <script src="js/script.js"></script>
</head>

<body>
	<div class="main-container" id="wide">
		<div id="top"></div>  	<!-- used to bring users to top -->
		<header id="main-header">
			<div class="content-inner">
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
							<div class="row">
								<div class="column-xsmall-2 center-xsmall padd0 logo">
									<a href="http://techstream.org">Tech Stream</a>
								</div>
								<div class="column-xsmall-10 align-right center-xsmall padd0">
									<a href="http://techstream.org/Bits/PHP/PHP-Date-Time" class="button">Back To article</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end of class="inner-container" -->
			</div><!-- end of class="content-inner" -->
		</header><!-- end if id="main-header" -->

		<?php
			date_default_timezone_set('GMT');
			$time = time();
			function is_timestamp($timestamp) {
				if(strtotime(date('d-m-Y H:i:s',$timestamp)) === (int)$timestamp){
					return true;
				}
				else
					return false;
			}
			function isValidTimeStamp($timestamp)
			{
			    return (( (string) (int) $timestamp === $timestamp ) && ($timestamp <= PHP_INT_MAX) && ($timestamp >= ~PHP_INT_MAX));
			}
			if(isset($_GET['timestamp']) == true && empty($_GET['timestamp']) == false){
				$timestamp = (htmlentities($_GET['timestamp']));
				//echo is_timestamp($timestamp);
				if(isValidTimeStamp($timestamp)){
					$time = $timestamp;
				}else{
					die();
				}
			}
		?>
		<div class="content">
			<div class="content-inner">
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
							<div class="row">
								
								<div class="column-small-2">
									<script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=techstreamorg" id="_carbonads_js"></script>
								</div>
								<div class="column-small-8">
									<h1 class="article-heading">PHP Date &amp; Time</h1>
									<article>
										<p>The following is a reference table of common PHP dates, enter a timestamp or it will take the current time stamp from the server. <code><?php echo $time?></code></p>
										<form method="get">
											<div class="row">
										        <div class="column-xsmall-6  padd0"><input name="timestamp" required="required" placeholder="<?php echo $time?>" type="number"></div>
										        <div class="column-xsmall-2 padd0-xsmall"><input class="" value="Go" type="submit"></div>
										        <div class="column-xsmall-2 padd0-xsmall"><a href="./">Reset</a></div>
										    </div>
									    </form>
										
										<table>
										    <thead>
										        <tr>
										            <th>Date String</th>
										            <th>Output</th>
										            <th>Comment</th>
										        </tr>
										    </thead>
										    <tbody>
										        <tr>
										            <td>
										                <code>Y-m-d H:i:s</code>
										            </td>
										            <td>
										                  <code><?php echo date("Y-m-d H:i:s",$time) ?></code>
										            </td>
										            <td>
										                 MySQL DATETIME format 
										            </td>
										        </tr>
										        <tr>
										            <td>
										                <code>H:i:s</code>
										            </td>
										            <td>
										                  <code><?php echo date("H:i:s",$time) ?></code>
										            </td>
										            <td>
										                  Time in Hour, Minuet's and seconds
										            </td>
										        </tr>
										        <tr>
										            <td>
										                <code>d-m-y</code>
										            </td>
										            <td>
										                  <code><?php echo date("d-m-y",$time) ?></code>
										            </td>
										            <td>
										                 Date in Day, Month and Year (2 digits)
										            </td>
										        </tr>
										        <tr>
										            <td>
										                <code>d-m-Y</code>
										            </td>
										            <td>
										                  <code><?php echo date("d-m-Y",$time) ?></code>
										            </td>
										            <td>
										                 Date in Day, Month and Year ( 4 Digits )
										            </td>
										        </tr>

										         <tr>
										            <td>
										                <code>jS</code>
										            </td>
										            <td>
										                  <code><?php echo date("jS",$time) ?></code>
										            </td>
										            <td>
										                 Numeric contractions for ordinals
										            </td>
										        </tr>

										         <tr>
										            <td>
										                <code>l dS F Y</code>
										            </td>
										            <td>
										                  <code><?php echo date("l dS F Y",$time) ?></code>
										            </td>
										            <td>
										                Expanded human laymen readable form
										            </td>
										        </tr>
										    </tbody>
										</table>
										<p><strong>Note : PHP will give a warning not to rely on the system's timezone settings if you haven't set  time Zone refer <a href="http://techstream.org/Web-Development/PHP/Change-Time-Zone-in-PHP">Time Zones with PHP</a> to set it. </strong/></p>
									</article>
								</div>
								<div class="column-small-2"></div>
							</div> <!-- end of forms -->
						</div>
					</div>
				</div> <!-- end of inner-content -->
			</div>  <!-- end of content-inner -->
		</div>
	</div>
</body>
</html>