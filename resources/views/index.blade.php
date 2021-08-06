<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- fonts css -->
    <link rel="stylesheet" href="{{asset('css/font.css')}}">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- normalize css -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">

    <!--home owl carousel -->
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')}}">
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>Atarah Solutions</title>
</head>
<body>
    <!-- header -->
  @include('header.index')

    <!-- services --> 
   @include('services.index')

   <!-- models -->
   @include('models.index')
 
   <!-- testimonials -->
   @include('testimonials.index')

   <!-- clients -->
   @include('clients.index')

   <!-- contacts -->
   @include('contacts.index')


    <!-- jquery -->
    <script src="{{asset ('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>

    <!-- custom js -->
    <script src="{{asset ('js/script.js')}}"></script>
</body>
</html>