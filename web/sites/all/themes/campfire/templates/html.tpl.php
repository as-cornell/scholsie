<!doctype html>

<?php if ($show_scripts): ?>

<html class="no-js" xml:lang="<?php print $language->language;?>" lang="<?php print $language->language;?>" dir="<?php print $language->dir;?>" <?php print $rdf_namespaces;?>>
  <head>
  <title><?php print $head_title;?> Cornell Arts & Sciences</title>

    <meta charset='utf-8'>
    <meta name="google-site-verification" content="O9L06AHQnWXwYZ_ZBm47p75B67ADm7LNWQbexWy2nvw" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <?php print $head;?>
    <?php print $styles;?>
    <link href="/sites/all/themes/campfire/css/print.css" media="print" rel="stylesheet" type="text/css" />

    <script src="https://use.typekit.net/fde2wmo.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Hotjar Tracking Code for http://as.cornell.edu -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1027127,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <?php print $scripts;?>
<!-- cu emergency banner -->
<script src="https://embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript"></script>
<script type="text/javascript" src="/sites/all/themes/campfire/js/build/campAS-plugins.js">
</script>

</head>
  <!-- body in -->
  <body class="<?php print $classes;?>" <?php print $attributes;?>>
    <?php print $page_top;?>
    <?php print $page;?>
    <?php print $page_bottom;?>
  <!-- body out -->
  <script type="text/javascript" src="/sites/all/themes/campfire/js/build/campAS-scripts.js"></script>
        <script type="text/javascript">
        /*<![CDATA[*/
        (function() {
            var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
            sz.src = '//siteimproveanalytics.com/js/siteanalyze_6120104.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
        })();
        /*]]>*/
        </script>
  </body>

<?php else: ?>

<?php // newsletter template ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html" />
            <meta charset='utf-8'>
            <meta name="viewport" content="width=device-width"/>
            <title><?php print $head_title;?></title>
            <style>
            a{
                color: #b31b1b;
                text-decoration: none;
            }
            p{
                margin-bottom: 20px;
            }
            </style>
        </head>
        <body style="font-family: helvetica, arial, sans-serif;width: 100% !important;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin: 0;padding: 0;min-width: 100%;color: #222222;font-weight: normal;text-align: left;line-height: 27px;font-size: 18px;">
            <?php // all newsletter output in node--newsletter ?>
            <?php print $page;?>
        </body>

<?php endif;?>

</html>
