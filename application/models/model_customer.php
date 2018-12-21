<?php

class model_customer extends CI_Model
{

    function tampil_data() {
        return $this->db->get('customer')->result();
    }

    function input_data($data) {
        return $this->db->insert('customer', $data);
    }

    function hapus_data($) {
        return $this->db
                ->where('id_customer', $id_customer)
                ->delete('customer');
    }

    function edit_data($nomor_induk) {
        return $this->db->get_where('customer', array('id_customer'=>$id_customer))->row();
    }

    function update_data($data, $id_customer) {
        $this->db->where('id_customer', $id_customer);
        $this->db->update('customer', $data);
    }

}