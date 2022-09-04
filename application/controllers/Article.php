<?php

class Article extends CI_Controller 
{
	public function index()
	{
		$data['articles'] = [
			[
				'title' => 'Article 1',
				'content' => 'Ini artikel tentang Article 1',
			],
			[
				'title' => 'Article 2',
				'content' => 'Ini artikel tentang Article 2',
			],
			[
				'title' => 'Article 3',
				'content' => 'Ini artikel tentang Article 3',
			],
		];

		if(count($data['articles']) > 0){
			$this->load->view('articles/list_article.php', $data);
		} else {
			$this->load->view('articles/empty_article.php');
		}
	}

	public function show($slug = null)
	{
		$this->load->view('articles/show_article.php');
	}
}