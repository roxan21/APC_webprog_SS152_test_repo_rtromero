<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public $table = 'users';
    public $id = 'user_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('user_id,Name,Nickname,Email,Phone_number,Home_address,Gender,Comments');
        $this->datatables->from('users');
        //add this line for join
        //$this->datatables->join('table2', 'users.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('users/read/$1'),'Read')." | ".anchor(site_url('users/update/$1'),'Update')." | ".anchor(site_url('users/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'user_id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('user_id', $q);
	$this->db->or_like('Name', $q);
	$this->db->or_like('Nickname', $q);
	$this->db->or_like('Email', $q);
	$this->db->or_like('Phone_number', $q);
	$this->db->or_like('Home_address', $q);
	$this->db->or_like('Gender', $q);
	$this->db->or_like('Comments', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('user_id', $q);
	$this->db->or_like('Name', $q);
	$this->db->or_like('Nickname', $q);
	$this->db->or_like('Email', $q);
	$this->db->or_like('Phone_number', $q);
	$this->db->or_like('Home_address', $q);
	$this->db->or_like('Gender', $q);
	$this->db->or_like('Comments', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-12-22 06:01:05 */
/* http://harviacode.com */