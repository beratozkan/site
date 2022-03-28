
<div class="loginPanel">
@if($resetPassword)
<label for="">email</label>
<div class="emailfiel">
                <input type="email" wire:model="email">
                <div class="şifreReset" wire:click="resetpassword"> iptal</div>
                <div  class="şifreReset" wire:click="sendmail"> onayla</div>

            </div>
            {{$message}}
@else

<form action="adminLogin" method="post">

<div class="login_modal">
            <label for="">email</label>
            <input type="text" name="email">
            <label for="">password</label>
            <input type="text" name="password" >
            <button type="submit" class="buttton">giris</button>
            @error('error_login')
            <p>{{ $message }}</p>
            @enderror
            <div  wire:click="resetpassword" class="şifreReset">şifremi unuttum</div>

            
</div>
    </form>
@endif

</div>