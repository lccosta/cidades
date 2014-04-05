<?php
App::uses('CidadesController', 'Controller');

class CidadesControllerTest extends ControllerTestCase {

    public $fixtures = array(
        'app.cidade'
    );
        
    public function testIndex(){
        $cidade = array(
            'id' => '3550308',
            'name' => 'São Paulo',
            'state' => 'SP'
        );
        
        $controller = new CidadesController();
        $controller->Cidade->save($cidade);
        
        $cidades = $controller->Cidade->find('all');
        
        $this->assertEqual($cidades[0]['Cidade']['id'], $cidade['id']);
    }

}
