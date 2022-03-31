<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    
    <link href="{{ asset('/css/forum.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="//unpkg.com/alpinejs" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <header>
        <!--NavBar Section-->
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <span class="close-icon" id="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
                <ul class="nav-list">
                    <li class="nav-item"><a href="forums.html">Forums</a></li>
                    <li class="nav-item"><a href="posts.html">Posts</a></li>
                    <li class="nav-item"><a href="detail.html">Detail</a></li>
                </ul>
            </nav>
            <a class="bar-icon" id="iconBar" onclick="hideIconBar()"><i class="fa fa-bars"></i></a>
            <div class="brand">My Forum</div>
        </div>
        <!--SearchBox Section-->
      
      
         
            
    </header>
    <div class="container">
        <div class="top-panel">
        @if(!Auth::check())
            <div class="login-box">
           
            @livewire("loginmodal")
                
             
        </div>
        @else
        <div x-data="usermodal" class="user_menu">
            <span x-on:click="open_user_menu">kullanıcı paneli</span>
            @livewire("user-information")

           
            
    </div>
             @endif
        </div>
        @livewire("postshare")

        @livewire("display-categories")

        <!--More-->
     
            
          
        <!---->
    </div>

    <!-- Forum Info -->
    <div class="forum-info">
        <div class="chart">
            MyForum - Stats &nbsp;<i class="fa fa-bar-chart"></i>
        </div>
        <span><u>5,369</u> Posts in <u> @livewire("userpost") </u> Topics by <u></u> Members.</span><br>
        <span>Latest post: <b><a href="">Random post</a></b> on Dec 15 2021 By <a href="">RandomUser</a></span>.<br>
        <span>Check <a href="">the latest posts</a> .</span><br>
    </div>

    <footer>
        <span>&copy;  </span>
    </footer>
    <script>
        function usermodal(){
            
            return {
                user_information_model:false,
                user_menu:false,
                open_user_menu:function(){
                    this.user_menu = !this.user_menu;
                    
                },
                show_user_information:function(){
                    document.getElementsByClassName("container")[0].classList.add("add_opacity");
                    this.user_information_model = !this.user_information_model;

                },
            
            }
        }
    </script>


    @livewireScripts  
</body>
</html>