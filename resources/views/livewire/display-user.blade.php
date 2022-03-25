<div class="wrapper">
   
    <div class="banner">
    @if (auth()->user()->role == "admin")
        Admin Page
    </div>
    <div class="add_user">
    @livewire('user-ekle')

 
    </div>
    <div>
@else
    User Page
</div>
    
@endif
   
    <div class="table">
        
        <div class="user_table" x-data="fonks()">

            <div class="table2">
                <div class="tbody">
                    <div class="tr">
                        <span class="th c_index">index</span>
                        <span class="th c_index">role</span>
                        <span class="th name">name</span>
                        <span class="th name">surname</span>
                        <span class="th email">email</span>
                        <span class="th email">action</span>
                    </div>
                    @foreach ($users as $user) 
                    @if($update && $selectedId == $user->id)
                    @livewire('edit-user',['user' => $user,'id' => $user->id ])
                     @else
                    <div class="tr">
                        <span class="th c_index" style="font-weight: normal;">
                            <div class="item">
                                {{ $user->id }}
                            </div>
                        </span>
                        <span class="th c_index" style="font-weight: normal;">{{ $user->role }}</span>

                        <span class="th name" style="font-weight: normal;">{{ $user->name }}</span>
                        <span class="th surname" style="font-weight: normal;">{{ $user->surname }}</span>
                        <span class="th email" style="font-weight: normal;">{{ $user->email }}</span>

                        <span class="th control">

                            @if($confirmdelete && $selectedId == $user->id) 
                            @include('livewire.delete')
                            @else

                            <span
                                class="material-icons-outlined"
                                wire:click="deleteconfirm({{ $user->id }})"
                                style="cursor:pointer">
                                delete_forever
                            </span>

                            <span
                                style="cursor:pointer"
                                class="material-icons-outlined"
                                wire:click="edit({{ $user->id }})">    
                                edit
                            </span>

                            @endif

                        </span>

                    </div>
                    @endif @endforeach
                </div>
               
            </div>
            <div class="logout" wire:click="logout">logout</div>
        </div>
       


        
    </div>
</div>