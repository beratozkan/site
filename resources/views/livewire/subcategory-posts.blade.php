
@foreach($this->postsAll as $post)
    @livewire("display-posts",["post"=>$post,"category_name"=>$this->category_name])

@endforeach
