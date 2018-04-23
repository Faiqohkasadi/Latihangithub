<table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama sekolah</th>
            <th>Tingkat</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>


<script type="text/javascript">
$.get("http://localhost/api-pekalongan/index.php/sekolah/index/format/json",(data)=>{
    var data_sekolah =  JSON.stringify(data);
    var data_decode=JSON.parse(data_sekolah);
    for(i=0; i<data_decode.length; i++){
        var kolom = '<tr><td>'+(i+1)+'</td>';
        kolom += '<td>'+data_decode[i].nama_sekolah+'</td>';
        kolom += '<td>'+data_decode[i].tingkat+'</td>';
        kolom += '<td>'+data_decode[i].alamat_sekolah+'</td>';
        kolom += '<td>'+data_decode[i].nama_kecamatan+'</td>';
        kolom += '</tr>';

        $('#myTable > tbody').append(kolom);
    }
},"json");

</script>
