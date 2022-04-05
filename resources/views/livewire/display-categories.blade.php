<div>
<input type="text" wire:model="name">
<input type="text" wire:model="description">
<input type="text" wire:model="category_id">
<div style = "width:100px;height:100px" wire:click="createcat">ekle</div>

@foreach ($category as $categorys)
<div class="subforum">
            <div class="subforum-title">
                
                <h1>{{$categorys->name}}</h1>
                <h4>{{$categorys->category_information}}</h4>
            </div>
            {{ $this->displaycat($categorys->id); }}
           
            @foreach($this->sub_category as $subcat)
            
            <div class="subforum-row">
                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="/forum/{{$subcat->name}}">{{$subcat->name}}</a></h4>
                    
                    <p>{{$subcat->category_information}}</p>
                </div>
                <div class="subforum-stats subforum-column center">
                {{ $sub_category_post = $this->displayCategoryPost($subcat->id) }}
                    <span> | {{ count($this->working_cat)}}</span>

                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href="">{{$this->working_cat[0]->user}}</a> 
                    <br>on <small>{{$this->working_cat[0]->created_at}}</small>
                </div>
            </div>
            @endforeach
        </div>
@endforeach

</div>