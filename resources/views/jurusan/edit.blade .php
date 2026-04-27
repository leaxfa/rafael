<form action="{{route('jurusan.edit', $jurusan->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$jurusan->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>nama jurusan</td>
            <td>:</td>
            <td><input type="text" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}"></td>
        </tr>
        <tr>
            <td>kode jurusan</td>
            <td>:</td>
            <td><input type="text" name="kode_jurusan" value="{{$jurusan->kode_jurusan}}"></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>