<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_main extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function insert($table,$data)
	{
		# code...
		$this->db->insert($table,$data);
	}
	public function getall($table)
	{
		# code...
		return $this->db->get($table)->result();
	}
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
	public function select_where2($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result();
	}

	public function update($tablename, $content, $where){
		$this->db->update($tablename, $content, $where);
	}

	public function get_id($tablename, $id_table){
		$hasil_query = $this->db->query("select * from $tablename ORDER BY $id_table DESC LIMIT 1");
		return $hasil_query->result();
	}

	public function delete($tablename, $where){
		$this->db->where($where);
		$this->db->delete($tablename);
	}
}
