<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--custom css -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
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
                <span class="tooltip">user</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-folder-open' ></i>
                    <span class="links-name">Service</span>
                </a>
                <span class="tooltip">Services crud operation</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-chart'></i>
                    <span class="links-name">Models</span>
                </a>
                <span class="tooltip">Add or remove Models</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-message' ></i>
                    <span class="links-name">Testimony</span>
                </a>
                <span class="tooltip">Testimony addition</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-happy'></i>
                    <span class="links-name">Client</span>
                </a>
                <span class="tooltip">Add clients</span>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-conversation' ></i>
                    <span class="links-name">Contacts</span>
                </a>
                <span class="tooltip">Emails and messages from users</span>
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
        <div class="text">Admin Landing Page</div>
    </div>
    <script src="{{asset('js/admin.js')}}"></script>
</body>
</html>