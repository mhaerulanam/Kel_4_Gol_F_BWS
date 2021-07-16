<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NO</th>
                <th>ID Kategori</th>
                <th>Tanggal</th>
                <th>Nama Penulis</th>
                <th>Judul</th>
                <th> Isi</th>
                <th>Gambar</th>
                <th>Sumber</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($artikel as $item)
			<tr>
				<td>{{ $no++ }}</td>
                <td>{{ $item->kategori_artikel }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->nama_penulis }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{\Illuminate\Support\Str::limit($item->isi , 250)}} <a href="/artikel/{{ $item->id_artikel }}/detail/" class="more-btn">  <strong> Read more » </strong></a></td>
                <td><img src="/data/data_artikel/{{ $item->gambar }}" width="200"></td>
                <td>{{ $item->sumber }}</td>
                <td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>