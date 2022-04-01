<?php

namespace App\Http\Responses;


class JsonResponse extends \Illuminate\Http\JsonResponse
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
        $statusMessage = 'success';
        if (strpos($status, '2') === false) {
            $statusMessage = 'error';
        }
        $this->setStatusMessage($statusMessage);

        parent::__construct($content, $status, $headers, JSON_PRETTY_PRINT, true);
    }

    /**
     * @param string $statusMessage
     */
    public function setStatusMessage(string $statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @param $content
     */
    public function setContent($content)
    {
        $this->content = json_encode([
            'status' => $this->statusMessage,
            'content' => $this->data
        ], JSON_PRETTY_PRINT);
    }
}
