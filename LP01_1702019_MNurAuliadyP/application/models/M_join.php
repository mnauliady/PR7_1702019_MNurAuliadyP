<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_join extends CI_Model{

	// function left(){
	// 	$this->db->select('*');
	// 	$this->db->from('Lokomotif l');
	// 	$this->db->join('Kursi k', 'k.kd_kereta = k.kd_kereta', 'left');
	// 	$this->db->where('k.kd_kereta', $kd_kereta);
	// 	$query = $this->db->get(); 
	// 	return $query;
	// }
	
	function getAll(){
		return $this->db->get('Lokomotif');
	}

	function left(){
		$this->db->select('Kursi.*, Lokomotif.*');
      	$this->db->join('Kursi', 'Kursi.kd_kereta = Lokomotif.kd_kereta', 'left');
      	$this->db->from('Lokomotif');
      	$query = $this->db->get();
      	return $query->result();
	}

	function right(){
		$this->db->select('Kursi.*, Gerbong.*');
      	$this->db->join('Gerbong', 'Gerbong.kd_gerbong = Kursi.kd_gerbong', 'right');
      	$this->db->from('Kursi');
      	$query = $this->db->get();
      	return $query->result();
	}

	function inner(){
		$this->db->select('*, Lokomotif.nama as nama_kereta, Gerbong.nama as nama_gerbong');	
      	$this->db->join('Gerbong', 'Lokomotif.kd_kereta = Gerbong.kd_kereta');
      	$this->db->join('Kursi', 'Kursi.kd_kereta = Lokomotif.kd_kereta and Kursi.kd_gerbong = Gerbong.kd_gerbong');
      	$this->db->from('Lokomotif');
      	$query = $this->db->get();
      	return $query->result();
	}


}
