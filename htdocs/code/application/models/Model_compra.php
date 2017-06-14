

<?php if (! defined('BASEPATH')) exit('No direct scrip acces allowed');

	/**
	* 
	*/
	class Model_compra extends CI_Model
	{
		
		
			public function get_combos()
	
	    {

           //$connicefood=$socket->consultar("SELECT * FROM combos");


           $Asql=$this->db->query("SELECT  * FROM combos");
            return $Asql->result();
		
		}



			public function get_carta()
	
	    {
	    $Asql=$this->db->query("SELECT  * FROM producto");

           // $connicefood=$socket->consultar("SELECT * FROM producto");
            return $Asql->result();
		
		}

	}
	# code...
	
