<?php
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
class BaseComposer {
    public function compose(View $view){
        $url = url()->full();
        $arr = explode('/', $url);
        $end = end($arr);
        $view->with('end', $end);
    }
}
