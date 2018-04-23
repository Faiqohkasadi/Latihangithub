<form action="" class="form">
	<div class="form-group">
		<label for="">Filter berdasar kecamatan</label>
		<select id="kecamatan" class="form-control" onchange="filter_data()">
			<option value="">Semua</option>
		</select>
	</div>
	<!-- <div class="form-group">
		<label for="">Pilih Tipe Data</label>
		<select id="tipe" class="form-control">
			<option value="xml">XML</option>
			<option value="json">JSON</option>
		</select>
	</div> -->
	<div class="form-group">
		<!-- <button type="button" id="pratinjau" class="btn btn-success">Preview Data</button> -->
	       <a href="http://localhost/api-pekalongan/index.php/kelurahan/index/format/xml" title="xml" class="btn btn-success">xml</a>
           <a href="http://localhost/api-pekalongan/index.php/kelurahan/index/format/json" title="json" class="btn btn-success">json</a>
           <a href="http://localhost/api-pekalongan/index.php/kelurahan/index/format/php" title="php" class="btn btn-success">php</a>
    </div>
</form>

<script type="text/javascript">

    $(() => {
        $('#pratinjau').on('click',()=>{
            var tipe = $('#tipe_data').val();
            $.get("http://localhost/api-pekalongan/index.php/kelurahan/index/format/"+tipe,(data)=>{
                $('.modal-body').html(JSON.stringify(data));
                $('#myModal').modal('show');
               
            })     
        });   

        $('#download').on('click',()=>{
            var tipe = $('#tipe_data').val();
            $.get("http://localhost/api-pekalongan/index.php/kecamatan/index/format/"+tipe,(data)=>{
             
                myJSON = JSON.stringify(data);
                localStorage.setItem("testJSON", myJSON);
               
            })   
        });
    });
</script>
<div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="isi">
                	
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
