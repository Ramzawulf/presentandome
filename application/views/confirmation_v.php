<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?=base_url();?>css/960/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url();?>css/960/960.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url();?>css/960/text.css" type="text/css" />
    <link rel="stylesheet" href="<?=base_url();?>css/ui-lightness/jquery-ui-1.8.12.custom.css" type="text/css" />
    <script type="text/javascript" src="<?=base_url();?>js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jqForm.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery-ui-1.8.12.custom.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/ua_behavior.js"></script>
    <script>
        $(function(){
            $("#reg_form").validate();
        });
    </script>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <style>

        body{
            padding: 10px;
        }

        a{
            text-decoration: none;
            color: inherit;
        }
        #wrapper{
            background-color: #dddddd;
        }
        #container{
            background-color: #dddddd;
        }
        #user_activity{
            height: 50px;
            background-color: #cccccc;
        }
        #heading{
            background-color: #bbbbbb;
        }
        #followUp_text{
            background-color: #bbbbbb;
        }

        .padding{
            height: 20px;
        }
        .filler{
            background-color: #536283;
            height: 1px;
        }
        label[generated="true"]{
            position: absolute;
            margin: 0 5px;
            color:#FF0000;
            background-color: #FFFFFF;
            border: dotted #FF0000 2px;
            float: right;
        }
        .button{
            width:auto;
            margin:10px 0 0 2px;
            padding:3px 4px 3px 4px;
            color:white;
            background-color:#589d39;
            outline:none;
            border:1px solid #006600;
            font-weight:bold;
        }
        .button:hover{
            background-color:#CCCCCC;
            border-color: #FFFFFF;
        }
            #user_activity label{
                width: auto;
                display: inline-block;
                border: solid #ffffff 1px;
                padding: 3px 5px;
                color: #ffffff;
                font-size: 0.8em;
            }
            #user_activity label:hover{
                cursor: pointer;
                background-color: #ffffff;
                color: #cccccc;
            }
        #our_info{
            background-color: #99BC99;
            text-align: center;
        }
            #our_info p{
                list-style: none;
                color: #cccccc;
                font-size: 0.8em;
                margin: 0 auto;
            }
            #our_info ul{
                list-style: none;
                display: inline;
                margin: 0 auto;
            }
                #our_info li{
                    display: inline;
                    padding: 2px 5px;
                    margin: 0 auto;
                }
        #registration_container{
            background-color: #999999;
        }
            #registration_container fieldset{
                border: solid #FFFFFF 2px;
                width: 300px;
                margin: 0 auto;
                padding: 10px;
            }
            #registration_container legend{
                color: #FFFFFF;
                margin: 0 10px;
            }
    </style>
</head>

<body>
    <div id="ua_session_window">
    <!--Aquí va el contenido de lo que suceda con u_a -->
    </div>
    <div id="ua_registration_window">
    <!--Aquí va el contenido de lo que suceda con u_a -->
    </div>
    <div id="wrapper" class="container_12">
        <div id="header" class="grid_12">
            <div id="logo"          class="grid_5 alpha">
                logo logo
            </div>
            <div class="grid_5">
                grid vacio
            </div>
            <div id="user_activity" class="grid_2 omega">
            </div>
        </div>
        <div class="clear"></div>
        <div id="container" class="grid_12">
            <div class="padding"></div>
            <div class="filler grid_1 alpha"></div><!--Container left filler -->
            <div class="grid_10">
                <div id="heading"       class="grid_4 alpha">
                    Encabezado de la Confirmación
                </div>
                <div id="followUp_text" class="grid_6 omega">
                    <p>Texto de followup</p>
                </div>
                <div class="grid_10 padding"></div>
                <div id="sandbox" class="grid_10">
                    <p>
                        Mi estimad@ <?=$name;?> tu cuenta se ha creado.<br/>
                        Emtra a tu cuenta para que comiences con la creación de tu perfil.
                    </p>
                </div>
            </div>
            <div class="filler grid_1 omega"></div><!--Container rigth filler -->
        </div>
        <div class="clear"></div>
        <div id="our_info" class="grid_12">
            <ul>
                <li><?=anchor('info/metodo', 'Info 1'); ?></li>
                <li><?=anchor('info/metodo', 'Info 2'); ?></li>
                <li><?=anchor('info/metodo', 'Info 3'); ?></li>
                <li><?=anchor('info/metodo', 'Info 4'); ?></li>
            </ul>
            <p>
                Una producción de Ramza <br />
                Presentando.me &reg;
            </p>
        </div>
    </div>
    </body>
</html>