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
                <i class='bx bx-command'></i>
                <div class="logo-name">
                    <img src="{{asset ('img/logo.png')}}" alt="our models" id="logo">
                </div>
            </div>
            <i class='bx bx-menu-alt-left' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="">
                <i class='bx bxs-grid-alt' ></i>
                <span class="links-name">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>