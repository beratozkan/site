<div class="container">
     <!--Navigation-->
     <div class="navigate">
            <span><a href="">MyForum - Forums</a> >> <a href=""></a></span>
        </div>
        <!--Display posts table-->
        <div class="posts-table">
            <div class="table-head">
                <div class="status">Status</div>
                <div class="subjects">Subjects</div>
                <div class="replies">Replies/Views</div>
                <div class="last-reply">Last Reply</div>
            </div>
        </div>
           
@foreach($posts as $key=>$post)

    @livewire("display-posts",["post"=>$post,"category_name"=>$this->category_name])
    
 


@endforeach

       
            
</div>