
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

 @yield('extra-meta')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        @yield('extra-script')
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
       
        @livewireStyles

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

      

        <script src="{{ mix('js/app.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased" >
      

        <div class="min-h-screen bg-black-100">
            @livewire('navigation-menu')

           

            <!-- Page Content -->
            <main>
            
                @yield('content')
         
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        @yield('stripe')
        @section('extra-js')
    </body>
</html>
