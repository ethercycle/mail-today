<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Will there be mail delivery today?</title>
		<meta name="description" content="Find out if today is a United States Postal Service holiday.">
		<meta name="author" content="/humans.txt">
		<meta name="viewport" content="width=device-width">
		
		<meta property="og:title" content="Will there be mail delivered today?">
		<meta property="og:site_name" content="http://willtherebemailtoday.com/">
		<meta property="og:image" content="http://willtherebemailtoday.com/apple-touch-icon-ipad3.png">
		<meta property="og:description" content="Find out if today is a United States Postal Service holiday.">

		<style>
			body {
				background: #485158 url('/bg.png');
				color: #fefefe;
				font: normal 1.3em/1.5em 'Helvetica Neue', Helvetica, Arial, sans-serif;
				margin: 20% 0 0 7%;
			}

			footer {
				color: #b4c1cc;
				font-size: .8em;
				margin-top: 50px;
				line-height: 1.3em;
			}

			dt {font-weight: bold;}
			dd {margin: 0; padding: 0;}
			footer a, footer a:visited { color: #b4c1cc; text-decoration: none; }
			footer a:hover { color: #fefefe; text-decoration: underline; }
		</style>

		<!--
			Hi. Here are the 2013 United States Postal Service Holidays:
				Tuesday, Jan. 1 - New Year's Day
				Monday, Jan. 21 - Birthday of Martin Luther King, Jr.
				Monday, Feb. 18 - Washington's Birthday
				Monday, May 27 - Memorial Day
				Thursday, July 4 - Independence Day
				Monday, Sept. 2 - Labor Day
				Monday, Oct. 14 - Columbus Day
				Monday, Nov. 11 - Veterans Day
				Thursday, Nov. 28 - Thanksgiving Day
				Wednesday, Dec. 25 - Christmas Day
		-->

	</head>
    <body>
		<dt>Will there be mail today?</dt>
		<dd><?php
			$d=date("m-d");

			if ($d == "01-01") {
			  echo 'No, today is New Year&apos;s Day.';
			}

			elseif ($d == "01-21") {
			  echo 'No, today is Martin Luther King, Jr. Day.';
			}

			elseif ($d == "02-18") {
			  echo 'No, today is Washington&apos;s Birthday.';
			}

			elseif ($d == "05-27") {
			  echo 'No, today is Memorial Day.';
			}

			elseif ($d == "07-04") {
			  echo 'No, today is Independence Day.';
			}

			elseif ($d == "09-02") {
			  echo 'No, today is Labor Day.';
			}

			elseif ($d == "10-14") {
			  echo 'No, today is Columbus Day.';
			}

			elseif ($d == "11-12") {
			  echo 'No, today is Veterans Day.';
			}

			elseif ($d == "11-28") {
			  echo 'No, today is Thanksgiving.';
			}

			elseif ($d == "12-25") {
			  echo 'No, today is Christmas.';
			}

			elseif (date("D")=="Sun") {
			  echo 'No, today is Sunday.';
			}

			else {
			  echo "Yes, mail is delivered on ".date("l").".";
			}
?></dd>

		<footer>
			With love,<br>
			<a href="http://ethercycle.com/" title="Ethercycle - an indie digital agency" rel="author">Ethercycle</a>
		</footer>

		<script type="text/javascript" src="/widowtamer.js"></script>
		<script>wt.fix({elements:"dd",chars:10,method:"nbsp",event:"resize"})</script>
		
		<script>
			var _gaq=[['_setAccount','UA-2237604-39'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		
	</body>
</html>