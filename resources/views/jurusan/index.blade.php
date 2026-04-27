<a href={{route('jurusan.add')}}>
                <input type="button" value="Create">
            </a>
<table border="1">
    <thead>
        <th>No</th>
        <th>nama jurusan</th>
        <th>kode jurusan</th>
        <th>tanggal dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($jurusan as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama_jurusan}}</td>
        <td>{{$m->kode_jurusan}}</td>
        <td>{{$m->created_at}}</td>
        <td>
            <a href={{route('jurusan.update',$m->id)}}>
                <input type="button" value="Edit">
            </a>
            <form action="{{route('jurusan.delete', $m->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$m->id}}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>
        </td>
    </tr>
    @endforeach
</table>