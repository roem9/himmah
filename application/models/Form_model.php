<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends MY_Model {
    
    public function add_alumni(){
        $data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $this->input->post($key);
        }

        return $this->add_data("alumni", $data);
    }

}

/* End of file Form_model.php */
