<?
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<!--
		// === J.O. ===============================================================================================================================
		// === MODULE - index.html - (JO JS v1.0)
		// ===
		// === AUTHOR - Julius Olatokunbo
		// ===
		// === REASON - SMART PENSIONS Require an online-File Parser System
		// ===        - Index.Html is the SMART PENSIONS algorithm in JSON
		// ===        - SMART PENSIONS RUBY DEVELOPER TEST
		// ===        
		// ===        - ASSIGNMENT
		// ===        
		// ===        - The goal:
		// ===        - 1. ruby_app  
		// ===        - Write a ruby script that:  
		// ===        - a. Receives a log as argument (webserver.log is provided)  e.g.: ./parser.rb webserver.log  
		// ===        - b. Returns the following:  
		// ===        - > list of webpages with most page views ordered from most pages views to less page views  
        // ===        - e.g.:  /home 90 visits /index 80 visits etc... > list of webpages with most unique page views also ordered  
        // ===        - e.g.:  /about/2 8 unique views /index 5 unique views etc...  
		// ===        - Finally, have some fun – Feel free to make changes or design something if you think it meets the criteria above, but would 
        // ===        - produce better outcomes and of course, the sooner you return the test, the quicker we can move the process.  
        // ===
		// === HISTORY- ===========================================================================================================================
		// === J.O. 09-SEP-2019 - v1.0 - Initial flash param loading to establish communication with server, trace output to console
	  	// === J.O. ===============================================================================================================================
		-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<title>SMART PENSIONS - Online-Parser</title>
<meta name="robots" content="noindex">
<meta name="keywords" content="regular expression, regex, regexp, ruby, rails, programming, development, editor, tester, tool">
<meta name="description" content="Ruby-based regular expression editor/tester">
<meta property="og:type" content="website">
<meta property="og:title" content="Rubular">
<meta property="og:description" content="Ruby-based regular expression editor/tester">
<meta property="og:image" content="https://rubular.com/assets/rubular_og-4948f7355b502d134c18e9fade5bc2e39c3a343ae818f2f5bdf922d8dc9bd919.png">
<meta property="og:url" content="https://rubular.com">
<meta name="twitter:card" content="summary_large_image" "="">
<link rel="shortcut icon" href="https://rubular.com/assets/favicon-45ccd548f76f6c2960ad6ce6128b6c245937e2219e6fab4d1fa61bb33616961c.ico">
<script type="text/javascript" async="" src="Rubular%20%20dyno=(%20(dyno)_S+)_files/ga.js"></script><script src="Rubular%20%20dyno=(%20(dyno)_S+)_files/application-0ea1ad0961b9d166106fd39dabac34810e59572b61d5c7fdd.js"></script>
<link rel="stylesheet" media="screen" href="Rubular%20%20dyno=(%20(dyno)_S+)_files/application-31f250c1b63f32a8e11e366a62be346b9c9858aa9217bd97.css">
<!--[if lte IE 6]>
      <link rel="stylesheet" media="screen" href="/assets/iefix-70f8c1d538cd2fed4d7e94d58dd0814f11c5fbf43482a0e4b9cfc32ee9b656dc.css" />
    <![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2302692-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Default Statcounter code for Raiiar.com Smartpension
http://www.raiiar.com/smartpension/ -->
<script type="text/javascript">
var sc_project=12097626; 
var sc_invisible=1; 
var sc_security="bc02907c"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12097626/0/bc02907c/1/"
alt="Web Analytics Made Easy -
StatCounter"></a></div></noscript>
<!-- End of Statcounter Code -->
</head>
<body onload="Rubular.clearFields('dyno=(?<dyno>\\S+)','', '2014-01-09T06:16:53.766841+00:00 heroku[router]: at=info method=POST path=/logs/save_personal_data host=services.pocketplaylab.com fwd=\&quot;5.13.87.91\&quot; dyno=web.10 connect=1ms service=42ms status=200 bytes=16\n2014-01-09T06:16:53.772938+00:00 heroku[router]: at=info method=POST path=/api/users/100002844291023 host=services.pocketplaylab.com fwd=\&quot;46.195.178.244\&quot; dyno=web.6 connect=2ms service=43ms status=200 bytes=52\n2014-01-09T06:16:53.765430+00:00 heroku[router]: at=info method=GET path=/api/users/100005936523817/get_friends_progress host=services.pocketplaylab.com fwd=\&quot;5.13.87.91\&quot; dyno=web.11 connect=1ms service=47ms status=200 bytes=7498\n2014-01-09T06:16:53.760472+00:00 heroku[router]: at=info method=POST path=/api/users/1770684197 host=services.pocketplaylab.com fwd=\&quot;74.139.217.81\&quot; dyno=web.5 connect=1ms service=17ms status=200 bytes=681\n2014-01-09T06:15:15.893505+00:00 heroku[router]: at=info method=GET path=/api/users/1686318645/get_friends_progress host=services.pocketplaylab.com fwd=\&quot;1.125.42.139\&quot; dyno=web.3 connect=8ms service=90ms status=200 bytes=7534\n2014-01-09T06:16:53.768188+00:00 heroku[router]: at=info method=GET path=/api/users/100005936523817/get_friends_score host=services.pocketplaylab.com fwd=\&quot;5.13.87.91\&quot; dyno=web.13 connect=2ms service=46ms status=200 bytes=9355\n2014-01-09T06:15:17.858874+00:00 heroku[router]: at=info method=POST path=/api/users/1145906359 host=services.pocketplaylab.com fwd=\&quot;107.220.72.53\&quot; dyno=web.14 connect=2ms service=362ms status=200 bytes=52\n2014-01-09T06:16:53.797975+00:00 heroku[router]: at=info method=GET path=/api/users/100000622081059/count_pending_messages host=services.pocketplaylab.com fwd=\&quot;174.239.6.42\&quot; dyno=web.12 connect=1ms service=20ms status=200 bytes=33\n2014-01-09T06:16:53.796869+00:00 heroku[router]: at=info method=GET path=/api/users/100004683190675/get_friends_score host=services.pocketplaylab.com fwd=\&quot;99.138.1.64\&quot; dyno=web.12 connect=2ms service=55ms status=200 bytes=16881')">
<div id="main">
<h1><a href="#">SMART PENSIONS - Online-Parser</a></h1>
<h2>a Ruby regular expression editor</h2>
<div id="inner" class="gainlayout">
<div id="ajax_loader_wrapper" style="display: none;"><img src="Rubular%20%20dyno=(%20(dyno)_S+)_files/ajax-loader-3f3c13d972c1f87802b643db53e115718090a72652493c37.gif"></div>
<div id="form_wrapper">
<form id="test_form" action="/regex/do_test" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
<label id="regex_label" for="regex">Your regular expression:</label><br>
<span class="slash">/</span><input type="text" name="regex" id="regex" size="80" tabindex="1" value="dyno=(?&lt;dyno&gt;\S+)"><span class="slash">/</span><input type="text" name="options" id="options" size="8" tabindex="2"><br>
<div id="test_and_result" class="gainlayout">
<div id="test_string">
<div id="inner_test_string_wrapper">
<label for="test">Your test string:</label>
<textarea name="test" id="test" tabindex="3" cols="56" rows="10">2014-01-09T06:16:53.766841+00:00
 heroku[router]: at=info method=POST path=/logs/save_personal_data 
host=services.pocketplaylab.com fwd="5.13.87.91" dyno=web.10 connect=1ms
 service=42ms status=200 bytes=16
2014-01-09T06:16:53.772938+00:00 heroku[router]: at=info method=POST 
path=/api/users/100002844291023 host=services.pocketplaylab.com 
fwd="46.195.178.244" dyno=web.6 connect=2ms service=43ms status=200 
bytes=52
2014-01-09T06:16:53.765430+00:00 heroku[router]: at=info method=GET 
path=/api/users/100005936523817/get_friends_progress 
host=services.pocketplaylab.com fwd="5.13.87.91" dyno=web.11 connect=1ms
 service=47ms status=200 bytes=7498
2014-01-09T06:16:53.760472+00:00 heroku[router]: at=info method=POST 
path=/api/users/1770684197 host=services.pocketplaylab.com 
fwd="74.139.217.81" dyno=web.5 connect=1ms service=17ms status=200 
bytes=681
2014-01-09T06:15:15.893505+00:00 heroku[router]: at=info method=GET 
path=/api/users/1686318645/get_friends_progress 
host=services.pocketplaylab.com fwd="1.125.42.139" dyno=web.3 
connect=8ms service=90ms status=200 bytes=7534
2014-01-09T06:16:53.768188+00:00 heroku[router]: at=info method=GET 
path=/api/users/100005936523817/get_friends_score 
host=services.pocketplaylab.com fwd="5.13.87.91" dyno=web.13 connect=2ms
 service=46ms status=200 bytes=9355
2014-01-09T06:15:17.858874+00:00 heroku[router]: at=info method=POST 
path=/api/users/1145906359 host=services.pocketplaylab.com 
fwd="107.220.72.53" dyno=web.14 connect=2ms service=362ms status=200 
bytes=52
2014-01-09T06:16:53.797975+00:00 heroku[router]: at=info method=GET 
path=/api/users/100000622081059/count_pending_messages 
host=services.pocketplaylab.com fwd="174.239.6.42" dyno=web.12 
connect=1ms service=20ms status=200 bytes=33
2014-01-09T06:16:53.796869+00:00 heroku[router]: at=info method=GET 
path=/api/users/100004683190675/get_friends_score 
host=services.pocketplaylab.com fwd="99.138.1.64" dyno=web.12 
connect=2ms service=55ms status=200 bytes=16881</textarea>
<div id="test_controls">
<span id="test_settings">
<label>Wrap words <input type="checkbox" name="word_wrap" id="word_wrap" value="1" checked="checked"></label>
<label>Show invisibles <input type="checkbox" name="show_invisibles" id="show_invisibles" value="1"></label>
</span>

</div>
</div>
</div>
<div id="result">  <span class="result_label">Match result:</span>
  <div id="match_string" class=""><span id="match_string_inner">2014-01-09T06:16:53.766841+00:00 heroku[router]: at=info method=POST path=/logs/save_personal_data host=services.pocketplaylab.com fwd="5.13.87.91" <span class="match">dyno=web.10</span> connect=1ms service=42ms status=200 bytes=16<br>2014-01-09T06:16:53.772938+00:00 heroku[router]: at=info method=POST path=/api/users/100002844291023 host=services.pocketplaylab.com fwd="46.195.178.244" <span class="match">dyno=web.6</span> connect=2ms service=43ms status=200 bytes=52<br>2014-01-09T06:16:53.765430+00:00 heroku[router]: at=info method=GET path=/api/users/100005936523817/get_friends_progress host=services.pocketplaylab.com fwd="5.13.87.91" <span class="match">dyno=web.11</span> connect=1ms service=47ms status=200 bytes=7498<br>2014-01-09T06:16:53.760472+00:00 heroku[router]: at=info method=POST path=/api/users/1770684197 host=services.pocketplaylab.com fwd="74.139.217.81" <span class="match">dyno=web.5</span> connect=1ms service=17ms status=200 bytes=681<br>2014-01-09T06:15:15.893505+00:00 heroku[router]: at=info method=GET path=/api/users/1686318645/get_friends_progress host=services.pocketplaylab.com fwd="1.125.42.139" <span class="match">dyno=web.3</span> connect=8ms service=90ms status=200 bytes=7534<br>2014-01-09T06:16:53.768188+00:00 heroku[router]: at=info method=GET path=/api/users/100005936523817/get_friends_score host=services.pocketplaylab.com fwd="5.13.87.91" <span class="match">dyno=web.13</span> connect=2ms service=46ms status=200 bytes=9355<br>2014-01-09T06:15:17.858874+00:00 heroku[router]: at=info method=POST path=/api/users/1145906359 host=services.pocketplaylab.com fwd="107.220.72.53" <span class="match">dyno=web.14</span> connect=2ms service=362ms status=200 bytes=52<br>2014-01-09T06:16:53.797975+00:00 heroku[router]: at=info method=GET path=/api/users/100000622081059/count_pending_messages host=services.pocketplaylab.com fwd="174.239.6.42" <span class="match">dyno=web.12</span> connect=1ms service=20ms status=200 bytes=33<br>2014-01-09T06:16:53.796869+00:00 heroku[router]: at=info method=GET path=/api/users/100004683190675/get_friends_score host=services.pocketplaylab.com fwd="99.138.1.64" <span class="match">dyno=web.12</span> connect=2ms service=55ms status=200 bytes=16881</span></div>
    <span class="result_label">Match groups:</span>
    <div id="match_captures">
      <table>
          <tbody><tr>
            <th colspan="2">Match 1</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.10</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 2</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.6</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 3</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.11</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 4</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.5</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 5</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.3</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 6</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.13</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 7</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.14</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 8</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.12</td></tr> 
          </tbody>
          <tbody><tr>
            <th colspan="2">Match 9</th>
          </tr>
          </tbody><tbody>
               <tr><td class="named_group"><span>dyno</span></td><td>web.12</td></tr> 
          </tbody>
      </table>
    </div>

</div>
</div>
</form> </div>
<div id="ajax_note" style="display:none"></div>
<div class="form_controls">
<a href="#" onclick="Rubular.makePermalink(); return false;">make permalink</a>
<a href="#" onclick="Rubular.clearFields(); return false;">clear fields</a>
</div>
</div>
<h3>Regex quick reference</h3>
<div id="quickref">
<div style="float:left">
<table>
<tbody><tr>
<td><code>[abc]</code></td>
<td>A single character of: a, b, or c</td>
</tr>
<tr>
<td><code>[^abc]</code></td>
<td>Any single character except: a, b, or c</td>
</tr>
<tr>
<td><code>[a-z]</code></td>
<td>Any single character in the range a-z</td>
</tr>
<tr>
<td><code>[a-zA-Z]</code></td>
<td>Any single character in the range a-z or A-Z</td>
</tr>
<tr>
<td><code>^</code></td>
<td>Start of line</td>
</tr>
<tr>
<td><code>$</code></td>
<td>End of line</td>
</tr>
<tr>
<td><code>\A</code></td>
<td>Start of string</td>
</tr>
<tr>
<td><code>\z</code></td>
<td>End of string</td>
</tr>
</tbody></table>
</div>
<div style="float:left">
<table>
<tbody><tr>
<td><code>.</code></td>
<td>Any single character</td>
</tr>
<tr>
<td><code>\s</code></td>
<td>Any whitespace character</td>
</tr>
<tr>
<td><code>\S</code></td>
<td>Any non-whitespace character</td>
</tr>
<tr>
<td><code>\d</code></td>
<td>Any digit</td>
</tr>
<tr>
<td><code>\D</code></td>
<td>Any non-digit</td>
</tr>
<tr>
<td><code>\w</code></td>
<td>Any word character (letter, number, underscore)</td>
</tr>
<tr>
<td><code>\W</code></td>
<td>Any non-word character</td>
</tr>
<tr>
<td><code>\b</code></td>
<td>Any word boundary</td>
</tr>
</tbody></table>
</div>
<table>
<tbody><tr>
<td><code>(...)</code></td>
<td>Capture everything enclosed</td>
</tr>
<tr>
<td><code>(a|b)</code></td>
<td>a or b</td>
</tr>
<tr>
<td><code>a?</code></td>
<td>Zero or one of a</td>
</tr>
<tr>
<td><code>a*</code></td>
<td>Zero or more of a</td>
</tr>
<tr>
<td><code>a+</code></td>
<td>One or more of a</td>
</tr>
<tr>
<td><code>a{3}</code></td>
<td>Exactly 3 of a</td>
</tr>
<tr>
<td><code>a{3,}</code></td>
<td>3 or more of a</td>
</tr>
<tr>
<td><code>a{3,6}</code></td>
<td>Between 3 and 6 of a</td>
</tr>
</tbody></table>
<div id="regex_options" style="text-align:center">
<p>
options:
<code>i</code> case insensitive
<code>m</code> make dot match newlines
<code>x</code> ignore whitespace in regex
<code>o</code> perform #{...} substitutions only once
</p>
</div>
</div>
<div id="birdseed" class="birdseed">
<p>SMART PENSIONS - Online Parser - v 1.01                                         
<font size="2" color="GREEN">&copy; SMART PENSIONS &minus; 2019 </font><a href="http://www.raiiar.co.uk"><font size="2" color="GREEN">Another website designed by Julius Olatokunbo&nbsp;</font></a>
</p>
</div>
</div>

<script src="Rubular%20%20dyno=(%20(dyno)_S+)_files/funder.js" async="async"></script>


</body></html>
?>