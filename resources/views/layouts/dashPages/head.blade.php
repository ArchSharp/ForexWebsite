<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArchFX - Ease your Forex trading</title>
    {{--<link rel="stylesheet" href={{ asset("bootstrap5/css/bootstrap.css") }}>
     <link rel="stylesheet" href="archstyle.css"> --}}
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
      function show(shown, hidden) {
        document.getElementById(shown).style.display='block';
        document.getElementById(hidden).style.display='none';
        //var value = JSON.String(document.getElementById(shown));    //to convert object to string
        return false;
      }
    </script>
    <!-- Scripts -->
    {{-- <script src={{ asset("js/app.js") }} defer></script>
    <script src={{ asset("js/archjs.js") }} defer></script> --}}

    <!-- Styles -->
    <link href={{ asset("css/app.css") }} rel="stylesheet">
    <link href={{ asset("css/archstyle.css") }} rel="stylesheet">


    {{-- <script type="text/javascript" src="{{ URL::asset('js/archjs.js') }}" defer></script> --}}
    
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/archstyle.css') }}" > --}}
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>