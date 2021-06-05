<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data Pasien</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
  </tr>
  <tr>
    <td>Syahrul</td>
    <td>Surabaya</td>
  </tr>
</table>
<a href="{{url('createpasien')}}" class="active">Tambah Pasien</a>
</body>
</html>