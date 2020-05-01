<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    $posts = $this->Posts->find('all')
              ->order(['title' => 'DESC'])
              ->limit(2)
              ->where(['title like' => '%3']);
    $this->set(compact('posts'));
  }
}