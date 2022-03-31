<div  class="user-panel" x-show="user_menu">
    <span x-on:click="show_user_information">bilgilerim</span>
    @if(Auth()->user()->role == "admin")
    <span wire:click="useradd">user ekle</span>
    @else
    @endif
    <span wire:click="logout">cikis</span>
    
</div>

<div class="user_information_modal" x-show="user_information_model" >
    <input type="text" wire:model="name" disabled>
    <input type="text" wire:model="name" disabled>
</div>