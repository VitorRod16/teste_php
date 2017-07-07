<?php

namespace app\controllers;


class WelcomeController extends \Src\Http\Controller {
    
    public function view() {
        echo $this->service->render('template/welcome.html', [
            'simple' => [
                'title' => 'simple-php',
                'asset' => asset(),
                'ano'   => date('Y'),
            ]
        ]);
        
        exit;
    }
    
}