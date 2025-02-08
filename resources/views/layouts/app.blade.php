<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('images/cimer.png') }}" type="image/x-icon">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1; 
        }

        footer {          
            height: 100px;
        }

        .position-relative {
            position: relative;
        }

        .position-relative:hover #overlay,
        .position-relative:hover #text-overlay {
            display: block;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
            opacity: 0;           
        }

        .position-relative:hover #overlay,
        .position-relative:hover #text-overlay {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-in-out, visibility 0s 0s; 
        }

        #overlay, #text-overlay {
            visibility: hidden;
            opacity: 0;
        }

    </style>
    
    
    <title>@yield('title')</title>
</head>
<body class="bg-primary bg-opacity-25">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('includes.nav')
    
    <div class="content">
        @yield('content')
    </div>


    @include('includes.footer')
    
    <script>
        // Kép és szöveg megjelenítése késleltetve
        const imageArea = document.querySelector('.position-relative');
        const overlay = document.getElementById('overlay');
        const textOverlay = document.getElementById('text-overlay');
    
        imageArea.addEventListener('mouseenter', () => {
            setTimeout(() => {
                overlay.style.visibility = 'visible';
                textOverlay.style.visibility = 'visible';
                overlay.style.opacity = '1';
                textOverlay.style.opacity = '1';
            }, 500); // 500 ms késleltetés
        });
    
        imageArea.addEventListener('mouseleave', () => {
            overlay.style.opacity = '0';
            textOverlay.style.opacity = '0';
            overlay.style.visibility = 'hidden';
            textOverlay.style.visibility = 'hidden';
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>