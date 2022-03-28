<div>
    <form action="sifreyenile" method="post">
    <label for="">yeni şifre</label>
    <input type="text" name="email" value="{{$email}}" style="display:none">
    <input type="text" name="token" value="{{$token}}" style="display:none">

    <input type="text" name="password">
    <label for="">yeni şifre tekrarı</label>
    <input type="text" name="retypepassword">
    

    <button type="submit">onayla</button>

    </form>
</div>