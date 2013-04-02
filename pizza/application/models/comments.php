<?php
class Comments extends CI_Model
{
function Comments()
        {
        parent::Model();
        }
function get_comments_for_news($news_id)
        {
        // Komentarze dla danego newsa
        $this->db->where('news_id', $news_id);
        $this->db->orderby("com_id", "asc");
        return $this->db->get('comments');
        }
function add_comment($data)
        {
        // dodanie komentarza
        return $this->db->insert('comments', $data);
        }
function delete_comment($id)
        {
        // skasowanie komentarza o podanym ID
        $this->db->where('com_id', $id);
        return $this->db->delete('comments');
        }
function are_comments_for_news($news_id)
        {
        // ile jest komentarzy dla danego newsa
        // tego Active Records nie potrafi
        return $this->db->query("SELECT COUNT(*) AS comnumber FROM ".$this->db->dbprefix."comments WHERE news_id = '".$news_id."'");
        }
 }