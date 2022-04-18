<?php

namespace App\Http\Responses;


use Illuminate\Http\JsonResponse as BaseJsonResponse;
use Illuminate\Support\Str;

class JsonResponse extends BaseJsonResponse
{
    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @param $content
     * @param int $status
     * @param array $headers
     */
    public function __construct($content, int $status = 200, array $headers = [])
    {
        $this->setStatusMessage(Str::startsWith($status, 2) ? 'success' : 'error');

        parent::__construct($this->toJson($content), $status, $headers);
    }

    /**
     * @param string $statusMessage
     */
    public function setStatusMessage(string $statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @param $json
     * @return array
     */
    public function toJson($json)
    {
        return [
            'status' => $this->statusMessage,
            'content' => $json
        ];
    }
}
