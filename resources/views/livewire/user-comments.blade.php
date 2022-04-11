<div x-data="to_reply">



@foreach($comments as $index => $comment)


<div class="comments-container" wire:ignore>
            <div class="body">
                <div class="authors">
                {{$this->getUser($comment->user)}}
                    <div class="username"><a href="">{{$this->user_info[0]}}</a></div>
                    <div>{{$this->user_info[1]}}</div>
                    <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt="">
                    <div>Posts: <u>455</u></div>
                    <div>Points: <u>4586</u></div>
                </div>
                <div class="content">
                    @if($comment->if_is_replyed)
                   
                  
                    {{ $this->getreplycomment($comment->if_is_replyed)}} 

                    <div class="reply_comment">
                        @foreach
                        <div>

                        
                        <span class="reply_post_username"> {{$this->reply_user_username->name}} : </span>
                        <span class="reply_post_content">{{$this->replyed_post->comment_content}}</span>
                        </div>
                    </div>
                   
                    
                
                   
                    @endif
                    <div class="post_reply_content">
                    {{$comment->comment_content}}
                    </div>
                    <br><br>
                    Nothing more and nothing less.
                    <br>
                    <br>
                    <div class="comment">
                        <div class="reply_commet_button" x-on:click="reply_to_user({{$index}})"> <span>Reply</span> </div>
                    </div>
                </div>
            </div>
</div>

@endforeach
        <!--Reply Area-->
{{$comments->links()}}
@if(Auth::check())

<form  wire:ignore>
{{$this->make_comment}}
<div class="comment-area" id="reply-area">
       
        <div class="reply_comment_info">
           
        </div>
        
        <textarea x-ref="comment_area" wire:model.lazy="comment" placeholder="reply here ... "></textarea>
        <div type="submit"  wire:click="new_comment()">gönder</div>
        
    
</div>
</form>
@else
<div class="yorum_yazamaz">
    yorum yapmak için kayıt olmalısınız yada giriş yapmalısınız
</div>
@endif
        </div>

        <script>
        
        function to_reply(){
            
            return{

                reply_to_user:function($index){
                    
                    this.$refs.comment_area.focus();
                    node_parent = this.$el.parentNode.parentNode.parentNode
                    
                    username = node_parent.getElementsByClassName("username")[0].textContent
                    content = node_parent.getElementsByClassName("content")[0].firstChild.textContent.trim()
                    
                    document.getElementsByClassName("reply_comment_info")[0].innerText = username +" adlı kullanıcının "+"'"+content+"'"+" yorumuna cevap veriyorsunuz";
                    this.$wire.reply_to_user($index);
                   
                }
            }
        }
        </script>