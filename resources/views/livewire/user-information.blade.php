<div  class="user-panel" x-show="user_menu">
    <span>bilgilerim</span>
    @if(Auth()->user()->role == "admin")
    <span wire:click="useradd">user ekle</span>
    @else
    @endif
    <span wire:click="logout">cikis</span>
    
</div>
