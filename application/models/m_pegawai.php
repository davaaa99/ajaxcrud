<?php
Class m_pegawai extends CI_Model
{
  function TampilPegawai() 
    {
        $this->db->order_by('nip', 'ASC');
        return $this->db->from('pegawai')
          ->get()
          ->result();
    }

    function getnip($nip = '')
    {
      return $this->db->get_where('pegawai', array('nip' => $nip))->row();
    }
}
?>