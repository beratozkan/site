<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/loginpage.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>
    
    <div class="wrapper">
    
        @livewire("loginmodal")
            
    </div>

    @livewireScripts  
</body>
</html>