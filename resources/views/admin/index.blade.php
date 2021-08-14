<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- fonts css -->
     <link rel="stylesheet" href="{{asset('css/font.css')}}">
      <!-- normalize css -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--custom css -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel="stylesheet">
    <title>Atarah admin</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">
                    <img src="{{asset ('img/logo.png')}}" alt="our models" id="logo">
                </div>
            </div>
            <i class='bx bx-menu-alt-left' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>                
                <i class='bx bx-search-alt-2' ></i>
                <input type="text" placeholder="search">                
               
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-user' ></i>
                    <span class="links-name">User</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="{{route('services')}}">
                    <i class='bx bxs-folder-open' ></i>
                    <span class="links-name">Service</span>
                </a>
                <span class="tooltip">Services</span>
            </li>
            <li>
                <a href="{{route('models')}}">
                    <i class='bx bxs-chart'></i>
                    <span class="links-name">Models</span>
                </a>
                <span class="tooltip">Models</span>
            </li>
            <li>
                <a href="{{route('testimonies')}}">
                    <i class='bx bx-message' ></i>
                    <span class="links-name">Testimony</span>
                </a>
                <span class="tooltip">Testimony</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-happy'></i>
                    <span class="links-name">Client</span>
                </a>
                <span class="tooltip">Clients</span>
            </li>
            <li>
                <a href="{{route('admin_contact')}}">
                    <i class='bx bx-conversation' ></i>
                    <span class="links-name">Contacts</span>
                </a>
                <span class="tooltip">Contacts</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="{{asset('img/bg2.jpg')}}" alt="atarah img">
                    <div class="name_job">
                        <div class="name">Kelvin Kiarie</div>
                        <div class="job">Developer</div>
                    </div>
                </div>
                <i class='bx bxs-log-out' id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <!-- <div class="top-bar">
            kk
        </div> -->
        @yield('content')
    </div>
    <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>