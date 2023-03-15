<?php
    namespace App\View;
    use Illuminate\View\View;

    class ViewComposer{
        public function compose( View $view ){
            $view->with('composer', 'View Composer');
        }
    }