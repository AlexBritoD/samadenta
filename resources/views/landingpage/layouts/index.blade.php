<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include("landingpage.includes.head")
</head>

<body class="block statistic">
    @include("landingpage.includes.nav")
    @yield("contenido")
    @include("landingpage.includes.footer")
    @include("landingpage.includes.js")
</body>


</html>