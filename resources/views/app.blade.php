<!DOCTYPE html>
<html>
  <head>
    <!-- Primary Meta Tags -->
    <title>Tempestas</title>
    <meta name="title" content="Tempestas">
    <meta name="description" content="A simple interactive weather web application based on the Visual Crossing weather API">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Tempestas">
    <meta property="og:description" content="A simple interactive weather web application based on the Visual Crossing weather API">
    <meta property="og:image" content={{ asset('resources/images/meta_image.png') }}>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Tempestas">
    <meta property="twitter:description" content="A simple interactive weather web application based on the Visual Crossing weather API">
    <meta property="twitter:image" content={{ asset('resources/images/meta_image.png') }}>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    {{-- @routes --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- @inertiaHead --}}
    <link rel="icon" href="{{ url('favicon/rainy-weather-color-96.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
  </head>
  <body class="font-montserrat antialiased ">
    <div>
        <h1 class="p-5">Hi jeya</h1>
        <img src="{{ asset('resources/images/meta_image.png') }}" alt="image-test" class="img-size">
    </div>
    {{-- @inertia --}}
  </body>
</html>
