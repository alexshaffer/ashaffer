<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]
    --><head prefix="og: http://ogp.me/ns#">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Alex Shaffer</title>
        <meta name="description" content="Alex Shaffer's Portfolio">

        <!-- <meta property="og:title" content="Texting Base">
        <meta property="og:description" content="The Best Way To Stay In Touch. Keep your contacts at an arm’s reach with personalized messaging. Make your relationships stronger today with Texting Base!">
        <meta property="og:locale" content="en_US">
        <meta property="og:url" content="http://textingbase.com">
        <meta property="og:image" content="<?//= Uri::create('assets/img/global/texting_base_logo.png'); ?>">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="146">
        <meta property="og:image:height" content="99">
        <meta property="fb:app_id" content="700455386734456"> -->
        <?= Casset::render_css() ?>
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <link rel="icon" 
            type="image/png" 
            href="<?= Uri::create('assets/img/favicon.png'); ?>" />
        <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOJh_YHCV_JJkthZNR99xZG9sB6jdo7bI&amp;libraries=places" type="text/javascript"></script> -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45454221-4', 'auto');
            ga('send', 'pageview');
        </script>
        <?= Casset::render_js() ?>
    </head
    ><body>
        <?= isset($nav) ? $nav : null ?>
        <?= isset($header) ? $header : null
        ?><div id="content" class="<?= isset($index) && $index ? 'index' : null ?>">
            <?= isset($contact) ? $contact : null ?>
            <?= isset($content) ? $content : null ?>
        </div>
		<?= isset($footer) ? $footer : null ?>
    </body
></html>