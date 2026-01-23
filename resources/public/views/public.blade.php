<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @routes('public')
    @vite('resources/public/js/public.ts')
    @inertiaHead
</head>
<body>
@inertia
</body>
<script>
    console.log(Ziggy.routes)
</script>
</html>
