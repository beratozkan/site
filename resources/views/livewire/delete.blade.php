
    <div class="modal-body">

        <h5 class="text-center">silmek istediğinize emin misiniz? {{ $user->name }} ?</h5>
    </div>
    <div class="modal-footer" style = "text-align: center;">
    <button wire:click="del2();" >no</button>  
    <button  wire:click="delete({{$user->id}})">Yes</button>
    </div>
