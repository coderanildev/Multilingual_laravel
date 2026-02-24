<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIR-NIScPR | National Institute of Science Communication and Policy Research</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">
</head>
<body>

    @include('frontend.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
<style>
    .footer { font-size: 0.7rem; }
    .links-scroll { scrollbar-width: thin; scrollbar-color: #d4af37 #2c3e50; }
    .links-scroll::-webkit-scrollbar { height: 2px; }
    .links-scroll::-webkit-scrollbar-track { background: #2c3e50; }
    .links-scroll::-webkit-scrollbar-thumb { background: #d4af37; }
    .hover-gold:hover { color: #d4af37 !important; }
</style>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/script.js') }}"></script>

</body>
</html>
