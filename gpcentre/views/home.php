
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>GPCentre.net :: Philip Gabbert Jr.</title>
    <link href='//fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href="/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="/css/back-stab.css" rel="stylesheet" type="text/css" />
    <link href="/css/awesome.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</head>
<body>

<div id="body">
    <!-- span id="availability" style="float: right; display: block;"><img src="/images/greendot3.png" width="20px" title="I'm on the market, open to new Sr. level PHP opportunities."/></span -->
    <header>A simple guy in <strong>Silicon Valley</strong> with a "thing" for <strong>PHP</strong>.</header>
    <div id="bar">
        <h1><a href="" id="link">Philip Gabbert Jr.</a></h1>
        <ul id="online-portals">
            <li><a href="https://plus.google.com/105981717032173537224/" title="Google+"><img src="/images/google-plus.png" alt="Google+" /></a></li>
            <li><a href="http://www.facebook.com/guice" title="For my Friends and Family"><img src="/images/facebook.png" alt="Facebook" /></a></li>
            <li><a href="http://twitter.com/guice" title="Open to all"><img src="/images/twitter.png" alt="Twitter" /></a></li>
            <li><a href="http://www.linkedin.com/in/guice" title="Lets keep it professional"><img src="/images/linkedin.png" alt="LinkedIn" /></a></li>
        </ul>
        <div id="extra">
            <img src="/images/icon.jpg" id="icon" alt="bloated cat">
            <p id="bio">
                I'm a simple guy taking life by the horns in the bay. PHP is a passion of mine: I love all the new features and fun toys PHP gives me every release. With packagist, composer, PHP7, there's always something new!
                <br />
                <br />
                I'm a <a href="https://www.zend.com/en/yellow-pages/ZEND901133">Zend Certified Engineer</a>; you can find my <a href="https://www.dropbox.com/sh/73wsk5b429ygld4/AACcXy264e1vnwfHYef34hMla?dl=0">resume on Dropbox</a>, as well as some <a href="https://www.dropbox.com/s/eimi6u053jkk5kp/alarm.zip?dl=0">sample code</a> (updated July 2017)..
            </p>
            <br class="clear" />
        </div>
    </div>
    <footer>
        <span class="email">g<span class="sans-bot">anti-bot</span>p@gp<span class="sans-bot">anti-bot</span>centre.ne<span class="sans-bot">anti-bot</span>t</span>
          <span class="validators"><a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Yes, this site is valid CSS3. Blame W3C for the ONE error: http://bit.ly/hGRTvq">CSS3</a> |
          <a href="http://validator.w3.org/check/referer">HTML 5</a></span>
    </footer>
    <div class="awesome">
        <h2>Be <span></span></h2>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#link').click(function(e) {
            $('div#extra').slideToggle('medium');
            e.preventDefault();
        });
    });
</script>
</body>
</html>
