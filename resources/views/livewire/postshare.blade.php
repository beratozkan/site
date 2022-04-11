<div>
    <textarea wire:model="posttitle" id="postitle" cols="30" rows="10" placeholder = "title"></textarea>
    <textarea wire:model="postcontent" id="postcontent" cols="30" rows="10" placeholder = "content"></textarea>
    <input type="text" wire:model="cat_id">
    <button type="submit" wire:click="savepost">gonder</button>
</div>
