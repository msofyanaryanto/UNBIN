<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bonus extends CI_Model {

	var $table = 'bonus';
	var $column_order = array(null,'name_user','gaji','bonus'); //set column field database for datatable orderable
	var $column_search = array('name_user','gaji','bonus'); //set column field database for datatable searchable 
	var $order = array('bonus_id' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
	}

	private function _get_datatables_query()
	{
		//$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('ref_user', 'ref_user.id_user = bonus.id_user');

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function total_gaji()
	{
		//$ttl = $this->db->query("select sum(gaji) as total from ref_user where id_group = '2' and gaji >= '3000000'")->row();
		//return $ttl->total;

		$this->db->select('sum(gaji) as total');
		$this->db->from($this->table);
		$this->db->join('ref_user', 'ref_user.id_user = bonus.id_user');
		$this->db->where("gaji >= '3000000' and id_group = '2'");

		$ttl =  $this->db->get()->row();

		return $ttl->total;
	}

	public function gaji()
	{
		$ttl = $this->db->query("select sum(gaji) as total from ref_user where id_group = '2' and gaji >= '3000000'")->row();
		
		return $ttl->total;
	}

	public function total_bonus()
	{

		$ttl = $this->db->query("select sum(bonus) as total from bonus")->row();
		return $ttl->total;
	}

	function select_group(){
		$this->db->order_by("create_at", "desc");
        return $this->db->get('ref_group');
	}

}
