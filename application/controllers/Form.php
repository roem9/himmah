<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Form_model", "form");
    }
    
    public function inputAlumni(){
        // navbar and sidebar
        $data['title'] = "Form Input Alumni Binaul Ummah Kuningan";

        // for modal 
        $data['modal'] = ["modal_transaksi"];
        
        // javascript 
        $data['js'] = [
            "ajax.js", 
            "function.js", 
            "helper.js",
        ];

        $this->load->view("pages/form-input", $data);
    }

    public function add_alumni(){
        $data = $this->form->add_alumni();
        if($data){
            $this->session->set_flashdata("message", '
                <div class="alert alert-important alert-success alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <svg width="24" height="24" class="alert-icon">
                                <use xlink:href="'.base_url().'assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-circle-check" />
                            </svg>
                        </div>
                        <div>
                            Berhasil menambahkan data Anda
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            ');
        } else {
            $this->session->set_flashdata("message", '
                <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <svg width="24" height="24" class="alert-icon">
                                <use xlink:href="'.base_url().'assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-alert-circle" />
                            </svg>
                        </div>
                        <div>
                            Gagal menambahkan data Anda
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            ');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}

/* End of file Form.php */
