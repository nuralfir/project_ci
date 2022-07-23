<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{

  function get($table, $select, $order_by = null, $limit = null)
  {
    $this->db->select($select);
    if ($order_by != null) {
      $this->db->order_by($order_by);
    }
    if ($limit != null) {
      $this->db->limit($limit);
    }
    return $this->db->get($table);
  }

  function get_limit($table, $select, $limit = null, $where = null)
  {
    $this->db->select($select);
    $this->db->limit($limit);
    $this->db->where($where);
    return $this->db->get($table);
  }
  function get_limit_order($table, $select, $limit = null, $where = null, $order_by = null, $order_method = NULL)
  {
    $this->db->select($select);
    $this->db->limit($limit);
    $this->db->where($where);
    if ($order_by != null) {
      $this->db->order_by($order_by, $order_method);
    }
    return $this->db->get($table);
  }
  function get_progress($where)
  {
    return $this->db->query("select 
          (select COUNT(proposal_id) from v_progress where actual = '0' AND category_id='$where') as a,
          (select COUNT(proposal_id) from v_progress where actual > '0' AND actual <= '25' AND category_id='$where') as b,
          (select COUNT(proposal_id) from v_progress where actual > '25' AND actual <= '50' AND category_id='$where') as c,
          (select COUNT(proposal_id) from v_progress where actual > '50' AND actual <= '75' AND category_id='$where') as d,
          (select COUNT(proposal_id) from v_progress where actual > '75' AND category_id='$where') as e ")->row();
  }
  function query($query)
  {
    return $this->db->query($query);
  }

  function get_last_insert_id()
  {
    return $this->db->insert_id();
  }

  function get_where($table, $select, $where = null, $order_by = null, $limit = null, $group_by = null, $table2 = null, $join = null)
  {
    $this->db->select($select);
    $this->db->where($where);
    if ($join != null) {
      $this->db->join($table2, $join);
    }
    if ($order_by != null) {
      $this->db->order_by($order_by);
    }
    if ($limit != null) {
      $this->db->limit($limit);
    }
    if ($group_by != null) {
      $this->db->group_by($group_by);
    }
    return $this->db->get($table);
  }

  function get_where_join($select, $table, $table2, $join, $where)
  {
    $this->db->select($select);
    $this->db->join($table2, $join);
    $this->db->where($where);

    return $this->db->get($table);
  }

  function truncate($table)
  {
    return $this->db->truncate($table);
  }


  function insert($table, $data = array())
  {
    return $this->db->insert($table, $data);
  }

  function insert_batch($table, $data = array())
  {
    return $this->db->insert_batch($table, $data);
  }

  function update($table, $data = array(), $where = array())
  {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }

  function delete($table, $where)
  {
    return $this->db->delete($table, $where);
  }

  function execute($query)
  {
    return $this->db->query($query);
  }
}
