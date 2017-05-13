<?php
class M_home extends CI_Model{
     function kota(){
        $this->db->select('*');
        $this->db->from('kota');
        $this->db->join('provinsi', 'kota.id_provinsi = provinsi.id_provinsi');
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			foreach($query->result_array() as $y){
                $hasil_array[]=$y;
			}
			return $hasil_array;
		}
		else {
			return FALSE;
		}
    }
    
    public function provinsi(){
		$this->db->select('*');
		return $this->db->get('provinsi')->result_array();
    }
    
    public function input_kota($data){
		$this->db->insert('kota', $data);
    }
    
    function update_kota($id_kota, $data){
        $this->db->where('id_kota', $id_kota)
                 ->update('kota', $data);
    }
    
}
?>
