<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

    <head>
        @include("admin.includesregistros.head")
    </head>

    <body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page"
    data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
        @include("admin.includesregistros.nav")
        @yield("contenido")
        @include("admin.includesregistros.footer")
        @include("admin.includesregistros.js")
    </body>


</html>