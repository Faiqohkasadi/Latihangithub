        <!-- <form class="form" method="post" action="" > -->
           <!--  <div class="form-group" >
                <select name="tipe_data" class="form-control" id="tipe_data" >
                    <option disabled selected value="" >--PILIH TIPE DATA--</option>
                    <option value="json" >JSON</option>
                    <option value="xml" >XML</option>
                    <option value="html" >HTML</option>
                </select>
            </div> -->
            <div class="form-group" >
                <!-- <button id="pratinjau" class="btn btn-success btn-sm" type="button" >Preview</button> -->
                <a href="http://localhost/api-pekalongan/index.php/kecamatan/index/format/xml" title="xml" class="btn btn-success">xml</a>
                <a href="http://localhost/api-pekalongan/index.php/kecamatan/index/format/json" title="json" class="btn btn-success">json</a>
                <a href="http://localhost/api-pekalongan/index.php/kecamatan/index/format/php" title="php" class="btn btn-success">php</a>
                <!-- <button class="btn btn-primary btn-sm" id="download"  type="button" >Download</button> -->
            </div>

        <!-- </form> -->
        <script type="text/javascript">

            $(() => {
                $('#pratinjau').on('click',()=>{
                    var tipe = $('#tipe_data').val();
                    $.get("http://localhost/api-pekalongan/index.php/kecamatan/index/format/"+tipe,(data)=>{
                        if (tipe=='json') {
                            $('.modal-body').find('p').html(JSON.stringify(data));
                        } else if(tipe=='xml'){
                            var data_kecamatan = XMLSerializer().serializeToString(data);
                            alert(data_kecamatan);
                            $('.modal-body').find('p').html(data);
                        }
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
                        <p id="isi">Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
