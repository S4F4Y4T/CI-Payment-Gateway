<head>
    <base href="">
    <meta charset="utf-8"/>
    <title><?php echo $page_title; ?></title>
    <meta name="description"
          content="<?php echo $meta_description; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--Start loading stylesheets-->
    <?php foreach ($headStyles as $stylesheet) {
        echo generateStyleMarkup($stylesheet) . "\r\n";
    } ?>
    <!--End loading stylesheets-->

    <!--Start loading head scripts-->
    <?php foreach ($headScripts as $script) {
        echo generateScriptMarkup($script) . "\r\n";
    } ?>
    <!--End loading head stylesheets-->

    <!--end::Layout Themes-->
    <link rel="shortcut icon"
          href="<?php echo site_url(); ?>assets/<?php echo $theme; ?>/dist/assets/media/logos/favicon.ico"/>
</head>