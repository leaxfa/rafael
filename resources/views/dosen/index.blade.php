<a href={{route('dosen.add')}}>
                <input type="button" value="Create">
            </a>
<table border="1">
    <thead>
        <th>No</th>
        <th>ama lengkap</th>
        <th>pendidikan terakhir</th>
        <th>alamat</th>
        <th>tanggal dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($dosen as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->fullname}}</td>
        <td>{{$m->pendidikan_terakhir}}</td>
        <td>{{$m->alamat}}</td>
        <td>{{$m->created_at}}</td>
        <td>
            <a href={{route('dosen.update',$m->id)}}>
                <input type="button" value="Edit">
            </a>
            <form action="{{route('dosen.delete', $m->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>
        </td>
    </tr>
    @endforeach
</table>