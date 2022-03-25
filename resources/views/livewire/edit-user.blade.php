<div class="tr">

    <span class="th c_id" wire:model="id">{{$selectedId}}</span>
    <span class="th name">
        {{$user->role}}
          </span>
    <span class="th name">
        <input
        
            type="text"
            wire:model="name"
            placeholder="@error('name') {{ $message }} @enderror">
        </span>
    
        
        <span class="th surname">
            <input
                type="text"
                wire:model="surname"
                placeholder="@error('surname') {{ $message }} @enderror"></span>

            <span class="th email">
                <input
                    type="text"
                    wire:model="email"
                    placeholder="@error('email') {{ $message }} @enderror"> </span>
                <span class="th control">
                    <span
                        class="material-icons-outlined"
                        wire:click="update"
                        style="cursor:pointer">

                        done
                    </span>
                </span>
                @error('editEmail')
                <span class="error">{{ $message }}</span>
                @enderror

            </div>