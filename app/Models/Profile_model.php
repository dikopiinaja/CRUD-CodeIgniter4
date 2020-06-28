<?php namespace App\Models;
use CodeIgniter\Model;
  
class Profile_model extends Model
{
    protected $table = 'profile';
      
    public function getProfile($id = false)
    {
        if($id === false){
            return $this->table('profile')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('profile')
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertProfile($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateProfile($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['profile_id' => $id]);
    }

    public function deleteProfile($id)
    {
        return $this->db->table($this->table)->delete(['profile_id' => $id]);
    }

}
?>