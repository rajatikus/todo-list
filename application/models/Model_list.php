<?php

/**
* model app
*/
class Model_list extends CI_Model
{
	
	private $table 	= 'list';
	private $pk		= 'id';

	function __construct()
	{
		parent::__construct();
	}

	function get_all_list()
	{
		$this->db->order_by('date_created', 'asc');
		return $this->db->get($this->table)->result_array();
	}

	function get_not_completed_list()
	{
		$this->db->order_by('date_due', 'asc');
		return $this->db->where('is_completed', 0)->get($this->table)->result_array();
	}

	function get_completed_list()
	{
		$this->db->order_by('date_due', 'asc');
		return $this->db->where('is_completed', 1)->get($this->table)->result_array();
	}

	function get_list_per_id($id)
	{
		return $this->db->where($this->pk, $id)->get($this->table)->row_array();
	}

	public function add_new($data)
	{
		$data['date_created'] = date('Y-m-d');
		if ($this->db->insert($this->table, $data)) :
			return TRUE;
		else :
			return FALSE;
		endif;
	}
	public function mark_complete($id)
	{
		$this->db->where('id', $id)
				 ->update($this->table, [
					'is_completed' 		=> 1,
					'date_complete' 	=> date('Y-m-d')
				 ]);
		return TRUE;
	}
	public function delete_list($id)
	{
		$this->db->where('id', $id)
				 ->delete($this->table);
		return TRUE;
	}

	public function update_list($id, $data)
	{
		$this->db->where('id', $id)
				 ->update($this->table, $data);

		return true;
	}
}