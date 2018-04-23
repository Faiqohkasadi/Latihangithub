<table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelurahan</th>
            <th>Nama Kecamatan</th>
            <th>Kode POS</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
$.get("http://localhost/api-pekalongan/index.php/kecamatan/index/format/json", (data)=>{
        var data_kecamatan =  JSON.stringify(data);
        var data_decode=JSON.parse(data_kecamatan);
        for(i=0; i<data_decode.length; i++){
            var pilihan = '<option value="'+data_decode[i].id_kecamatan+'">'+data_decode[i].nama_kecamatan+'</option>'

            $('#kecamatan').append(pilihan);
        }
    },"json");

    var filter_data = ()=>{
           $('#myTable > tbody').html('');
        
        var id_kecamatan = $('#kecamatan').val();
        $.get("http://localhost/api-pekalongan/index.php/kelurahan/index/format/json",{id_kecamatan:id_kecamatan},(data)=>{
            var data_kecamatan =  JSON.stringify(data);
            var data_decode=JSON.parse(data_kecamatan);
            for(i=0; i<data_decode.length; i++){
                var kolom = '<tr><td>'+(i+1)+'</td>';
                kolom += '<td>'+data_decode[i].nama_kelurahan+'</td>';
                kolom += '<td>'+data_decode[i].nama_kecamatan+'</td>';
                kolom += '<td>'+data_decode[i].kode_pos+'</td>';
                kolom += '</tr>';

                $('#myTable > tbody').append(kolom);
            }
        },"json");
    }

    filter_data();
</script>
