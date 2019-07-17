<?php

namespace App\Http\View\Composer;


use App\StaticMenu;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class Menus
{
    /**
     * The user repository implementation.
     *
     * @var $categories
     */
    protected $menus;


    public function __construct()
    {
//        $this->menus = Cache::remember('menus', 5000, function () {


            $static_menu = StaticMenu::with(['page' => function ($q) {
                $q->where('status', 1)->orderBy('order')->select('id', 'title');
            }])->where('status', 1)->defaultOrder()->get()->toTree();
            $array_menu=[];
            foreach ($static_menu as $menu){
                $array_menu[]=$this->setMenu($menu);
            }
//            return $array_menu;
        $this->menus = $array_menu;
//        });
//        dd($array_menu);
    }

    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }

    protected function setMenu($menu){
        $menu_item=[
            'id'=>$menu->id,
            'name'=>$menu->name,
            'special_name'=>$menu->special_name,
            'description'=>$menu->description,
            'has_content'=>$menu->has_content,
            'type'=>$menu->type,
            'link'=>$menu->link,
            'active'=>false,
            'children'=>[]
        ];

        if($menu->type === 'page' && $menu->page !== null){
            $menu_item['link']=url('/pages/show/'.$menu->page->id);
        }
        if($menu->type === 'action'){
            $menu_item['link']=url($menu->link);
        }
        if(count($menu->children)>0){
            foreach ($menu->children as $child){
                $menu_item['children'][]=$this->setMenu($child);
            }
        }
        if(url(request()->path() )=== $menu_item['link']){
            $menu_item['active']=true;
        }

        return $menu_item;
    }

}