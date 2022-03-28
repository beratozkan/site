<div>
    @if(Auth::check() && auth()->user()->role !="admin")
        <div class="logout" wire:click="logout">logout</div>
    @endif
</div>
