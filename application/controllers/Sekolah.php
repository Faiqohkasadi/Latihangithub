<?php

/**
 *
 */
class Sekolah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
                    'title'=>'sekolah',
                    'table_title'=>'Tabel sekolah',
                    'content'=>$this->load->view('sekolah_view',[],TRUE),
                    'card_body'=>$this->load->view('sekolah_form',[],TRUE),
                    'card_header'=>'Download Data As : '
                ];
        $this->load->view('template',$data);
    }
    public function get_data()
    {
        $this->load->helper('download');
        $data ="http://localhost/api-pekalongan/sekolah/index/format/json";
        force_download('sekolah.json',json_decode($data));
    }

}
/*End of file sekolah.php */
