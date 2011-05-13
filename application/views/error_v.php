<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/960/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/960/960.css" type="text/css" />
    <link rel="stylesheet" href="css/960/text.css" type="text/css" />
    <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.8.12.custom.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="js/jqForm.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/ua_behavior.js"></script>
    <script>
        $(function(){
            $("#reg_form").validate();
        });
    </script>
    <meta charset="utf-8">
    <title><?=$title;?></title>
</head>

<body>
                        <p>
                            <?$this->load->view('error/err_user_creation');?>
                        </p>

</body>
</html>