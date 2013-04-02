<?php
class News extends CI_Model
{
function News()
        {
        parent::Model();
        }
function get_news()
        {
        // Wszystkie newsy sortowane malejąco po news_id
        $this->db->orderby("news_id", "desc");
        return $this->db->get('news');
        }
function get_news_by_id($id)
        {
        // Pobiera określony news
        $this->db->where('news_id', $id);
        return $this->db->get('news');
        }
function get_news_by_keyword($keyword)
        {
        // Wszystkie newsy z danym słowem kluczowym sortowane malejąco po news_id
        $this->db->like($keyword);
        $this->db->orderby("news_id", "desc");
        return $this->db->get('news');
        }
function add_news($data)
        {
        // dodanie newsa
        return $this->db->insert('news', $data);
        }
function update_news($id, $data)
        {
        // zmiana newsa o podanym numerze news_id
        $this->db->where('news_id', $id);
        return $this->db->update('news', $data);
        }
function delete_news($id)
        {
        // skasowanie newsa o podanym news_od
        $this->db->where('news_id', $id);
        return $this->db->delete('news');
        }
 }
?>