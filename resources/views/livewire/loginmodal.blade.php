
<div class="loginPanel">
@if($resetPassword)

<label for="">email</label>
<div class="emailfiel">
                <input type="email" wire:model="email">
                <div class="sifreResetButton" wire:click="resetPassword"> iptal</div>
                <div  class="sifreResetButton" wire:click="sendMail"> onayla</div>

            </div>
            {{$message}}
@elseif ($openRegisterMenu)
<div class="register_panel">


<div>
<label for="">isim</label>
<input type="text" wire:model="name" placeholder="@error('name') {{ $message }} @enderror">



<label for="">soyisim</label>
<input type="text" wire:model="surname" placeholder="@error('surname') {{ $message }} @enderror">
</div>
<div>
<label for="">email</label>
<input type="text" wire:model="email" placeholder="@error('email') {{ $message }} @enderror" >
<label for="">email tekrar</label>
<input type="text" wire:model="reTypeEmail" placeholder="@error('reTypeEmail') {{ $message }} @enderror">
</div>
<div>
<label for="">şifre</label>
<input type="text" wire:model="password" placeholder="@error('password') {{ $message }} @enderror" >
<label for="">şifre tekrar</label>
<input type="text" wire:model="retypepassword" placeholder="@error('retypepassword') {{ $message }} @enderror">
</div>


<br>


<span wire:click="UserRegister" class="kayit_ol">kayit ol</span>
<span wire:click="openRegisterMenu" class="kayit_ol">iptal</span>

</div>
@else

<form action="adminLogin" method="post">

<div class="login_modal">
   
            <label for="">email</label>
            <input type="text" name="email">
            <label for="">password</label>
            <input type="text" name="password" >
            <button type="submit" class="buttton">giris</button>
            <div wire:click= "openRegisterMenu" class="kayit_ol">kayıt ol</div>
            @error('error_login')
            <p>{{ $message }}</p>
            @enderror
            <div  wire:click="resetPassword" class="sifreResetButton">şifremi unuttum</div>

 {{$message1}}           
</div>
    </form>
@endif

</div>