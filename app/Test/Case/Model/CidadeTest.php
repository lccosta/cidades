<?php
App::uses('Cidade', 'Model');

class CidadeTest extends CakeTestCase {

    public $fixtures = array(
        'app.cidade'
    );

    public function setUp() {
        parent::setUp();
        $this->Cidade = ClassRegistry::init('Cidade');
    }

    public function tearDown() {
        unset($this->Cidade);

        parent::tearDown();
    }

}
