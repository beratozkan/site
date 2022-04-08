<div class="subforum">
            <div class="subforum-title">
               
                <h1>{{$category->name}}</h1>
                <h4>{{$category->category_information}}</h4>
            </div>
            {{ $this->displaycat($category->id); }}
            
            @foreach($this->sub_category as $subcat)
            
                @livewire("show-sub-category",["sub_category_posts"=>$subcat])
            @endforeach
        </div>


</div>