<!DOCTYPE html>
<html>

<head>
    @include("landingpage.includes.head")
</head>

<body class="">
    @include("landingpage.includes.nav")
    @yield("contenido")
    @include("landingpage.includes.footer")
    @include("landingpage.includes.js")
</body>


</html>