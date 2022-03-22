

  <div class="wrapper">

<div class="add_user">

@include('livewire.show-posts')
 
  
</div>
<div class="table">
                       
<div class="user_table" x-data = fonks()>




<div class="table2">
    <div class="tbody">
        <div class="tr">
            <span class="th c_index">index</span>
            <span class="th name">name</span>
            <span class="th name">surname</span>
            <span class="th email">email</span>
            <span class="th email">action</span>
        </div>  
    @foreach ($users as $user)
    @if($update1 && $selected_id == $user->id)
    @include('livewire.update')
    @else
     <div class="tr">
    <span class="th c_index" style="font-weight: normal;">  <div class="item"> {{ $user->id }} </div></span>
    <span class="th name" style="font-weight: normal;">{{ $user->name }}</span>
    <span class="th surname" style="font-weight: normal;">{{ $user->surname }}</span>
    <span class="th email" style="font-weight: normal;">{{ $user->email }}</span>
    

    
    <span class="th control">
    
      @if($deletecon &&  $selected_id == $user->id)
      @include('livewire.delete')
      @else
   
  
<span class="material-icons-outlined" wire:click="del1({{ $user->id }})" style="cursor:pointer">
delete_forever
</span>


    <span style = "cursor:pointer"class="material-icons-outlined" wire:click="edit({{$user->id}})">
edit
</span>

  @endif
   
    </span>
   
  
 
    
    

        
    </div>
    @endif
    @endforeach
    </div>
   
    
</div>
       
</div>
 
</div>
                       </div>
