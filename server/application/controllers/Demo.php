<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Demo extends CI_Controller {
    public function index() {
        $this->load->database();
        $res = $this->db->get('type');
        $this->json([ 
            'code' => 0,
            'data' => [
                'msg' => $res->result(),
            ]
        ]);
    }

    public function getList(){
        $this->load->database();
        $page = $this->input->get('page');
        if(!$page)$page=1;
        $res = $this->db->limit(12, ($page-1)*12)->get('fiction');
       
        $this->json([ 
            'code' => 0,
            'data' => [
                'msg' => $res->result(),
                'page'=> $page,
            ]
        ]);
    }

    public function getArticle(){
      $id = $this->input->get('id');
      $page = $this->input->get('page');
      if(!$page)$page=1;
      $this->load->database();
      $res = $this->db->limit(12, ($page-1)*12)->get('article');
      $sql =  'select count(*) num from article where fiction_id='.$id;
      $total = $this->db->query($sql)->row_array();
      $this->json([ 
            'code' => 0,
            'data' => [
                'msg' => $res->result(),
                'page'=> $page,
            ]
        ]);
      
    }

    public function getContent(){
      $article_id = $this->input->get("article_id");
      $this->load->database();
      $res = $this->db
              ->where('article_id', $article_id)
              ->get('article');
      $this->json([ 
            'code' => 0,
            'data' => [
                'msg' => $res->row_array(),
            ]
        ]);   
    }
}