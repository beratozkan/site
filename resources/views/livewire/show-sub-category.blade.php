<div class="subforum-row">

                <div class="subforum-icon subforum-column center">
                    <i class="fa fa-car center"></i>
                </div>
                <div class="subforum-description subforum-column">
                    <h4><a href="/forum/{{$sub_category_posts->name}}">{{$sub_category_posts->name}}</a></h4>
                   
                    <p>{{$sub_category_posts->category_information}}</p>
                </div>
                <div class="subforum-stats subforum-column center">
                {{ $this->displayCategoryPost($sub_category_posts->id) }}
                    <span>| </span>
        
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Last post</a></b> by <a href=""></a> 
                    <br>on <small></small>
                </div>
               
 </div>