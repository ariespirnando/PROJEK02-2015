<?php


class modelLogin extends CI_Model{
    
    function login($data)
    {
        return $this->db->get_where('user',$data);
    }
    function insertMahasiswaa($adm,$psw){
        $sql="INSERT INTO user VALUES(null,'$adm','$psw',null,null,4,1)";
        $this->db->query($sql);
    }
    function edituser($use, $pas,$asal,$pasal,$idu)
    {
        $sql="UPDATE user SET Username ='$use', Password ='$pas', UseAsal ='$asal', PasAsal ='$pasal' WHERE idUser =$idu";
        $this->db->query($sql);
    }
}
?>