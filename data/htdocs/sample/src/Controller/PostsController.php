<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    $posts = $this->Posts->find('all');
    $this->set(compact('posts'));
  }

  public function view($id = null)
  {
    $post = $this->Posts->get($id);
    $this->set(compact('post'));
  }

  public function add()
  {
    $post = $this->Posts->newEntity();
    $this->set(compact('post'));
  }
}