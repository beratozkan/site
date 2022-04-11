<div>
    <form>
    <label for="">yeni şifre</label>
    <input type="text" name="email" value="{{$email}}" style="display:none">
    <input type="text" name="token" value="{{$token}}" style="display:none">

    <input type="text" wire:model="password">
    <label for="">yeni şifre tekrarı</label>
    <input type="text" wire:model="retypepassword">
    

    <div wire:click = "userİsValid"  style = "width:min-content;height:min-content;border:1px solid black;cursor:pointer">onayla</div>
    {{$message}}
    </form>
</div>