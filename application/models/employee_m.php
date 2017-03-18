<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class employee_m extends CI_Model {

    var $table = 'employee';
    var $column_order = array(null, 'employee_name','employee_salary','employee_age'); //set column field database for datatable orderable
    var $column_search = array('employee_name','employee_salary','employee_age'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_query()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $emp) // loop column 
        {
			if(isset($_POST['search']['value']) && !empty($_POST['search']['value'])){
			$_POST['search']['value'] = $_POST['search']['value'];
		} else
			$_POST['search']['value'] = '';
		if($_POST['search']['value']) // if datatable send POST for search
		{
			if($i===0) // first loop
			{
				$this->db->group_start();
				$this->db->like($emp), $_POST['search']['value']);
			}
			else
			{
				$this->db->or_like($emp), $_POST['search']['value']);
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

    function get_employees()
    {
        $this->_get_query();
		if(isset($_POST['length']) && $_POST['length'] < 1) {
			$_POST['length']= '10';
		} else
		$_POST['length']= $_POST['length'];
		
		if(isset($_POST['start']) && $_POST['start'] > 1) {
			$_POST['start']= $_POST['start'];
		}
        $this->db->limit($_POST['length'], $_POST['start']);
		//print_r($_POST);die;
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}
