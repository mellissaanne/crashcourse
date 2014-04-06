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
			$data['Prof'] = $this->input->post('Prof');

			return $this->db->insert('DATA', $data);
		}

		function create_comment($post_id)
		{
			$data['comment'] = $this->input->post('comment');
			$data['rateone'] = $this->input->post('rateone');
			$data['ratetwo'] = $this->input->post('ratetwo');
			$data['ratethree'] = $this->input->post('ratethree');
			$data['ratefour'] = $this->input->post('ratefour');
			$data['post_id'] = $post_id;

			return $this->db->insert('COMMENTS', $data);
		}


		function create_rate($post_id)
		{
			$data['rate'] = $this->input->post('rate');
			$data['post_id'] = $post_id;

			return $this->db->insert('COMMENTS', $data);
		}

		function update_post($id) 
		{ 
  			$data['title'] = $this->input->post('title'); 
  			$data['content'] = $this->input->post('content'); 
  			$data['Prof'] = $this->input->post('Prof');
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

		function get_current_rating($id)
		{
			$total = 0;
			$current_value = $this->db->get_where('DATA', array('id' => $id));
			foreach ($current_vale as $cv) {
				$total = $total + $cv['rateone'];
			}
			return total;
		}









	}
