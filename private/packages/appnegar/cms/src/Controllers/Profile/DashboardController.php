<?php
namespace Appnegar\Cms\Controllers\Profile;

use Appnegar\Cms\Controllers\AdminController;

class DashboardController extends AdminController{

    public function __construct(){
        $this->resource='Dashboard';
    }
    public function index()
    {

        $user=session('user_info');
        $menu=json_encode(getAdminMenu(session('department')));
//        dd($menu);

        $lang_resource=trans('main');
        if($lang_resource){
            $lang_resource=json_encode($lang_resource);
        }

        return view('appnegar::master',[
            'user'=>$user,
            'department'=>session('department'),
            'lang'=>session('lang'),
            'lang_resource'=>$lang_resource,
            'direction'=>session('direction'),
            'menu'=>$menu
        ]);
    }
}