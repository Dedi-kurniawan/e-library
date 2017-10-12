<?php 
namespace App\Views\Composers;

use Illuminate\View\View;
use App\Faculty;

class SidemenuComposer
{
    public function compose(View $view)
    {
        $this->composeMenuFakultas($view);
    }

    public function composeMenuFakultas(View $view)
    {
        $menuFakultas = Faculty::with('categories')->get();

        $view->with('menuFakultas', $menuFakultas);
    }

}

