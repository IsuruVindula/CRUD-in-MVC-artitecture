

<?php
    class queries extends CI_Model{

        public function auth(){

        }
        public function addArt($data){
            return $this->db->insert('arts',$data);
        }

        public function allArts(){
            $query=$this->db->get('arts');
            if($query-> num_rows()>0){
                return $query->result();
            }
        }

        public function  searchByArtID($ID){
            $query=$this->db->get_where('arts',array('Art_Id'=>$ID));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }

       

        public function allClassic(){
            $query=$this->db->get_where('arts',array('Category'=>'Classic'));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }

        public function allRomance(){
            $query=$this->db->get_where('arts',array('Category'=>'Romance'));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }

        public function allNature(){
            $query=$this->db->get_where('arts',array('Category'=>'Nature'));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }

        public function allPencilArts(){
            $query=$this->db->get_where('arts',array('Category'=>'Pensil-Arts'));
            if($query-> num_rows()>0){
                return $query->result();
            }
        }


        public function updateArt($data, $Id){
            $this->db->where('Art_Id',$Id);
            return $this->db->update('arts', $data);
        }

        public function deleteArt( $Id){
            $this->db->where('Art_Id',$Id);
            return $this->db->delete('arts');
        }

    }
?>
