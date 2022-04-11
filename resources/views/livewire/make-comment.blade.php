<form wire:model:>


    <div class="comment-area" id="reply-area">
            <textarea  wire:model.lazy="comment" placeholder="reply here ... "></textarea>
            <div type="submit"  wire:click="new_comment()">ekle</div>
            {{$this->post_id}}
            {{$this->user_id}}
            {{$this->comment}}
            
            
</div>
</form>