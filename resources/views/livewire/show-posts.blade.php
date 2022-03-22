<div class="user_ekle">
            <div class="slot">
            <label for="name">isim</label>  
                                <input type="text" wire:model="name" >
                                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
                               
            <div class="slot">     
            <label >soyisim</label>  
                                <input type="text" wire:model="surname">
                                @error('surname') <span class="error">{{ $message }}</span> @enderror

            </div>                  
            <div class="slot"> 
            <label >email</label>  

                                <input type="text" wire:model = "email">
                                @error('email') <span class="error">{{ $message }}</span> @enderror

</div>
                                <div class="slot"> 
                                <label >şifre</label>  
    
                                <input type="password" wire:model="passwd" placeholder = "password">
                                @error('passwd') <span class="error">{{ $message }}</span> @enderror

                                </div>
                                <div class="slot"> 
                                <label >şifre tekrar</label>  
                                @error('r_pass') <span class="error">{{ $message }}</span> @enderror

                                <input type="password" wire:model="r_passwd" placeholder = "re enter password">
                                </div>
                                
                                <div class="slot" style="margin-left:20px;">
                                <button type="submit" wire:click="adduser"><h2>+</h2></button>
                                        @if (session()->has('message'))
                                    <span>
                                        {{ session('message') }}
                                        </span>

                                @endif 

</div>
                              
</div>