<div  class="table-row">
                <span></span>
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="/forum/{{$this->category_name}}/{{$post->post_title}}/{{$post->post_category_id}}">{{$post->post_title}}</a>
                    <br>
                    <span>Started by <b><a href="">{{ $post->user }}</a></b> </span>
                </div>
                <div class="replies">
                    2 replies <br>  {{$post->view_count}} views
                </div>
               
                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            
</div>