
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style type="text/css">
            body{background:#f9f9f9;}
            #wrapper{padding:90px 15px;}
            .navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
            .card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
            .header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
            .leftmenutrigger{display: none}
            @media(min-width:992px) {
                .leftmenutrigger{display: block;display: block;margin: 7px 20px 4px 0;cursor: pointer;}
                #wrapper{padding: 90px 15px 15px 15px; }
                .navbar-nav.side-nav.open {left:0;}
                .navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:-220px;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
            }
            .animate{-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;transition:all .3s ease-in-out} </style>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <title>Caspero Admin Dashboard</title>
    </head>
    <body>
        <?php
        $this->load->view($content_view);
        ?>
    </body>
</html>
