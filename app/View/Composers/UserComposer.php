<?php
    namespace App\View\Composers;

    use Illuminate\View\View;
    use Illuminate\Support\Facades\DB;

    class UserComposer {
        public function compose( View $view ){
            $view->with( 'orders', DB::table('customers')
                ->selectRaw('CONCAT(first_name, " ", last_name) as fullName, order_date, amount')
                ->join('orders', 'customers.id', 'orders.customer_id')
                ->get() );
        }
    }