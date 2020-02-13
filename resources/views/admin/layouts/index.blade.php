<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include("admin.includesindex.head")
</head>

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">
    @include("admin.includesindex.nav")
    @yield("contenido")
    @include("admin.includesindex.footer")
    @include("admin.includesindex.js")
</body>


</html>