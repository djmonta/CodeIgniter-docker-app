<?php

class Events_model_test extends CIPHPUnitTestCase
{
    /**
     * Tests that Event's public variable, $title, is the same as the given title
     *
     * @return bool
     */
    public function test_addEvent()
    {
        $event = new Events_model('test');
        $event->addEvent();
        $this->assertEquals('test', $event->title);
    }
}
