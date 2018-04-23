<?php
/**
 *
 */
class Kelurahan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = [
                    'title'=>'Kelurahan',
                    'table_title'=>'Tabel Kelurahan',
                    'content'=>$this->load->view('kelurahan_view',[],TRUE),
                    'card_body'=>$this->load->view('kelurahan_form',[],TRUE),
                    'card_header'=>'Cari Data Kelurahan : '
                ];
        $this->load->view('template',$data);
    }
}
/* End of file Kelurahan.php */
