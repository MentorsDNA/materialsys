<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>
            Material Dashboard by Creative Tim
        </title>

            @
            @yield css
            @

    </head>
    <body>
        <div class="wrapper">
                               
        @
        @yield menu
        @

            <div class="main-panel">

            @
            @yield header
            @

            @
            @yield content
            @

            @
            @yield footer
            @

            </div>
        </div>

        @
        @yield js
        @


    </body>
</html>