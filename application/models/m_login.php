<?php
class M_login extends CI_Model{
     
    function check($email, $pass){
            $query = $this->db->get_where('user', array('email' => $email, 'password' => $pass));
            return $query->num_rows();
        }
    
    function user($email, $pass){
            $query = $this->db->get_where('user', array('email' => $email, 'password' => $pass));
            return $query->result_array();
        }
}
?>
