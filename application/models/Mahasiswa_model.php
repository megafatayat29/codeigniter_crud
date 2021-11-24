<?php

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nrp' => $this->input->post('nrp', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];

        return $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->delete('mahasiswa', array('id' => $id));
    }

    public function getMahasiswaById($id) {
        return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nrp' => $this->input->post('nrp', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}