<?php
App::uses('AppController', 'Controller');
/**
 * Cidades Controller
 *
 */
class CidadesController extends AppController {
    
    public $components = array('RequestHandler');
        
    public function index(){
        $name = $this->request->query('name');
        
        $cidades = $this->Cidade->find('all',
                array(
                    'conditions' => array(
                        'Cidade.name LIKE' => '%'.$name.'%'
                    )
                ));
        $this->set(array(
            'name' => $name,
            'cidades' => $cidades,            
            '_serialize' => array('name', 'cidades')
        ));
    }

}
