<?php

namespace Linker\Api\Client;

use JMS\Serializer\Annotation\Type;

class ApiException extends \Exception
{
    /**
     * @Type("string")
     */
    protected $message;

    /**
     * @Type("string")
     */
    protected $code;
}