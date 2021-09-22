<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/confirm_delete.css')}}">
    <script src="https://kit.fontawesome.com/fa6dbab9b7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="popupService" class="overlay">
        <div class="popup">
            <h2>Confirm Delete</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
                Are you sure you want to delete this service?
            </div>
            <div class="del-dialogue-btn">
                
                <button class="button" id="discard" onclick="hide()" >Discard</button>
                
               
                <form action="{{route('delete_service',$service->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="button" >Delete</button>
                </form>
                
              </div>
        </div>
    </div>
</body>
</html>