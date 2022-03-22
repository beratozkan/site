<div class="tr">

    <span class="th c_id"  wire:model ="id">{{ $selected_id }}</span>
    <span class="th name"> <input type="text" wire:model ="name1" placeholder=  "@error('name1') {{ $message }} @enderror"></span>

    <span class="th surname"> <input type="text" wire:model ="surname1" placeholder=  "@error('surname1') {{ $message }} @enderror"
></span>

    <span class="th email"><input type="text" wire:model="email1" placeholder=  "@error('email1') {{ $message }} @enderror"></span>
    <span class="th control">
    <span class="material-icons-outlined" wire:click="update" style="cursor:pointer">

done
</span>
</span>
@error('email1') <span class="error">{{ $message }}</span> @enderror

    
</div>