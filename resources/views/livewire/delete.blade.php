<div class="modal-body">

    <h5 class="text-center">{{ $user->name }} adlı kullanıcıyı silmek istediğinize emin misiniz?
        
        </h5>
</div>
<div class="modal-footer" style="text-align: center;">
    <button wire:click="deletecancel();">no</button>
    <button wire:click="approvedelete({{$user->id}})">Yes</button>
</div>