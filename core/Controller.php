<?php
namespace App\Core;


class Controller {
    protected Request $request;
    // injection de la Request dans le controller
    public function __construct(Request $request) {
            $this->request=$request;
    }
    public function render(string $path,array $data=[]){
        // permet de charger une vue
        $data['Constantes']=Constantes::class;
       $data['request']=$this->request;
       ob_start();
      extract($data);//donnee accessible a partir des cles
       //dans une vue $Constante:: et $request(pour acceder a request)
       require_once(Constantes::ROOT()."templates/".$path.".html.php");
       $content_for_views=ob_get_clean();
        require_once(Constantes::ROOT()."templates/layout/base.html.php");
    }
    public function redirectRoute($uri){
      header("location:".Constantes::WEB_ROOT.$uri);
    }
}