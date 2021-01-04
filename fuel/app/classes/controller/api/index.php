<?php

// use Fuel\Core\Controller_Hybrid;

class Controller_Api_Index extends Controller
{
    public function action_index()
    {
        return View::forge('api/index/index');
        // $data = array();
        // $data['rows'] = Model_Post::find_all();

        // return View::forge('post/list', $data);
    }
}
