<?php



class Controller_Api_Drpage extends Controller
{
    public function action_score()
    {
        echo 2;

        print_r(Input::get());

        $scad = new Model_Api_Score();
        $data['rows'] = $scad->get_data();
        
        return View::forge('api/drpage/score', $data);
        
        // return Response::forge(View::forge('api/drpage/score'), $data);
        print_r($data);




        // return View::forge('api/drpage/score');
    }
    public function action_index()
    {
        echo 1;

        return View::forge('api/drpage/index');
    }
}
