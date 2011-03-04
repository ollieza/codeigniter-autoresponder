<?php

class Autoresponder_model extends CI_Model
{
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

	function get($autoresponder_name = NULL) 
	{
		$this->db->select('*');
       	$this->db->from($this->_table['autoresponders']);
      	$this->db->where('autoresponder_name', $autoresponder_name);
       	return $this->db->get();   
	}
	
	// --------------------------------------------------------------------
	
	function log_email($data = array())
	{
        $this->db->insert($this->_table['autoresponder_log'], $data);
 
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
 
		return FALSE;
    }
	
	// --------------------------------------------------------------------
}
?>