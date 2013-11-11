<?php

class MessagesControllerTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    //test tatht GET /messages/{url}/{key} returns HTTP 200
    public function testShow()
    {
        $response = $this->call('GET', route('messages.show', ['url', 'key']));
        $this->assertResponseOk($response);
    }


    // test that GET /messages/create returns HTTP 200
    public function testCreate()
    {
        $response = $this->call('GET', route('messages.create'));
        $this->assertResponseOk($response);
    }

}
