<head>
    <title><?php echo $page_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        SITE_URL = "<?php echo site_url() ?>" ;
        ROLE_ID  = "<?php echo $this->session->userdata('role_id') ?>";
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- tabs files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.css">

    
    <!-- Custom Theme files -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/css/style.css " type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" />
    <!-- Ratings -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- Time Picker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
    <!-- //Custom Theme files -->
	<link href="<?php echo base_url(); ?>assets/css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link  href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" rel="stylesheet" property="" />
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
    <link href="<?php echo base_url(); ?>assets/css/mycss.css?v1" rel='stylesheet' type='text/css' />
</head>