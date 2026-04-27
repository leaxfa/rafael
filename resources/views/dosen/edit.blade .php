<form action="{{route('dosen.edit', $dosen->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$dosen->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>nama lengkap</td>
            <td>:</td>
            <td><input type="text" name="fullname" value="{{$dosen->fullname}}"></td>
        </tr>
        <tr>
            <td>pendidikan terakhir</td>
            <td>:</td>
            <td><input type="text" name="pendidikan_terakhir" value="{{$dosen->pendidikan_terakhir}}"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea name="alamat">{{$dosen->alamat}}</textarea></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>