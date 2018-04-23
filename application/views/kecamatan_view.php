<table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kecamatan</th>
            <th>Jumlah Kelurahan</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>


<script type="text/javascript">
$.get("http://localhost/api-pekalongan/index.php/kecamatan/index/format/json",(data)=>{
    var data_kecamatan =  JSON.stringify(data);
    var data_decode=JSON.parse(data_kecamatan);
    for(i=0; i<data_decode.length; i++){
        var kolom = '<tr><td>'+(i+1)+'</td>';
        kolom += '<td>'+data_decode[i].nama_kecamatan+'</td>';
        kolom += '<td>'+data_decode[i].jml_kelurahan+'</td>';
        kolom += '</tr>';

        $('#myTable > tbody').append(kolom);
    }
},"json");

</script>
