<?php
namespace ApiKeyGenerator\KeyGenerator;

use Illuminate\Support\ServiceProvider;

class KeyGeneratorServiceProvider extends ServiceProvider{

    public function boot(){


        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register(){
        
    }
    
}





