{{-- Basic Meta Tags --}}
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="AyanAmy">

{{-- Links to External/Interal Resources --}}
<link rel="icon" href="assets/icons/calculator_icon_192.png" type="image/png">
{{-- PWA Stuff --}}
<link rel="manifest" href="assets/manifest.json">
<link rel="apple-touch-icon" href="assets/icons/calculator_icon_192.png">

<title>{{ str_replace(env('NAVABLEPREFIX'), "", Route::currentRouteName()) }} - TaxCalc.com</title>
