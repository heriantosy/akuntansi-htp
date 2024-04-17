<h1>Daftar Master Perkiraan</h1>
<table border="1" width="75%">
    <tr>
        <td>No</td>
        <td>Nomor Perkiraan</td>
        <td>Nama Perkiraan</td>
    </tr>

    @foreach ($perkiraan as $item)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nomor_perkiraan }}</td>
        <td>{{ $item->nama_perkiraan }}</td>
    </tr>

    @endforeach

</table>