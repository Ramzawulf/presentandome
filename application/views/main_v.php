<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/960/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/960/960.css" type="text/css" />
    <link rel="stylesheet" href="css/960/text.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <style>
        #wrapper{
            background-color: #dddddd;
        }
        #container{
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div id="ua_window">
        <!--Aquí va el contenido de lo que suceda con u_a -->
    </div>
    <div id="wrapper" class="container_12">
        <div id="header" class="grid_12">
            <div id="logo"          class="grid_5 alpha"></div>
            <div class="grid_5"></div>
            <div id="user_activity" class="grid_2 omega">
                <? $this->load->view($user_activity); ?>
            </div>
        </div>
        <div class="clear"></div>
        <div id="container" class="grid_12">
            <div class="padding"></div>
            <div class="grid_1 aplha"></div><!--Container left filler -->
            <div id="logo" class="grid_10">
                <div id="heading"       class="grid_4 alpha">
                </div>
                <div id="followUp_text" class="grid_6 omega">
                </div>
                <div class="padding"></div>
                <div id="sandbox" class="grid_10">
                    <div id="info_container"></div>
                    <div id="registration_container"></div>
                </div>
            </div>
            <div class="grid_1 omega"></div><!--Container rigth filler -->
        </div>
        <div class="clear"></div>
        <div id="our_info" class="grid_12">
            <ul>
                <li><?=anchor('info/metodo', 'blah'); ?></li>
                <li><?=anchor('info/metodo', 'blah'); ?></li>
                <li><?=anchor('info/metodo', 'blah'); ?></li>
                <li><?=anchor('info/metodo', 'blah'); ?></li>
            </ul>
            <p>
                Una producción de Ramza <br />
                Presentando.me &reg;
            </p>
        </div>
    </div>
    {elapsed_time}

</body>
</html>