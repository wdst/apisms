<?php

namespace wdst\apisms;

abstract class AbstractSms
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $translit;

    /**
     * @var string
     */
    public $test;
}
