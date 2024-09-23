<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Users_model extends Model {

    public function read(){
        return $this->db->table('kmy_users')->get_all();
    }

    public function create($kmy_last_name, $kmy_first_name, $kmy_gender, $kmy_email, $kmy_address){
        $data = array(
         'kmy_last_name' => $kmy_last_name,
         'kmy_first_name' => $kmy_first_name,
         'kmy_gender' => $kmy_gender,
         'kmy_email' => $kmy_email,
         'kmy_address' => $kmy_address
        );

        return $this->db->table('kmy_users')->insert($data);
     }

    public function get_one($id){
        return $this->db->table('kmy_users')->where('id', $id)->get();
    }

    public function update($kmy_last_name, $kmy_first_name, $kmy_gender, $kmy_email, $kmy_address, $id){
        $data = array(
            'kmy_last_name' => $kmy_last_name,
            'kmy_first_name' => $kmy_first_name,
            'kmy_gender' => $kmy_gender,
            'kmy_email' => $kmy_email,
            'kmy_address' => $kmy_address
           );
   
        return $this->db->table('kmy_users')->where('id', $id)->update($data);
    }

    public function delete($id){
        return $this->db->table('kmy_users')->where('id', $id)->delete();   
    }
    
	
}
?>
