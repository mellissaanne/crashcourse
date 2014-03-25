<?php
	class Blog_model extends CI_MODEL {
		function getPosts()
		{
			$query = $this->db->get('DATA');
			return $query->result_array();
		}

		function getPost($id) 
		{ 
  			$query = $this->db->get_where('DATA', array('id' => $id)); 
 			return $query->result_array(); 
		}

		function get_comments($id) 
		{ 
  			$query = $this->db->get_where('COMMENTS', array('post_id' => $id)); 
 			return $query->result_array(); 
		}

		function create_post()
		{
			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$data['tags'] = $this->input->post('tags');
			$data['Prof'] = $this->input->post('Prof');
			$data['Rateone'] = $this->input->post('Rateone');
			$data['Ratetwo'] = $this->input->post('Ratetwo');
			$data['Ratethree'] = $this->input->post('Ratethree');
			$data['Ratefour'] = $this->input->post('Ratefour');

			return $this->db->insert('DATA', $data);
		}

		function create_comment($post_id)
		{
			$data['comment'] = $this->input->post('comment');
			$data['post_id'] = $post_id;

			return $this->db->insert('COMMENTS', $data);
		}

		function update_post($id) 
		{ 
  			$data['title'] = $this->input->post('title'); 
  			$data['content'] = $this->input->post('content'); 
  			$data['tags'] = $this->input->post('tags');
  			$this->db->where('id', $id); 
  			$this->db->update('DATA', $data); 
		}

		function delete_post($id) 
		{ 

  			$this->db->delete('DATA', array('id' => $id)); 
		}

		function search_post()
		{
			$search_term = $this->input->post('searchquery');
			$sql = "SELECT * FROM DATA WHERE MATCH (title, content) AGAINST ('" . $search_term . "')";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
	}
