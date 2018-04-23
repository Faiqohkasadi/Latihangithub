<?php

/**
 *
 */
class Kecamatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
                    'title'=>'Kecamatan',
                    'table_title'=>'Tabel Kecamatan',
                    'content'=>$this->load->view('kecamatan_view',[],TRUE),
                    'card_body'=>$this->load->view('form_download',[],TRUE),
                    'card_header'=>'Download Data As : '
                ];
        $this->load->view('template',$data);
    }
    public function get_data()
    {
        $this->load->helper('download');
        $data ="http://localhost/api-pekalongan/kecamatan/index/format/json";
        force_download('kecamatan.json',json_decode($data));
    }

}
/*End of file Kecamatan.php */
