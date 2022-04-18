<?php

namespace App\Http\Responses;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class HtmlResponse extends Response
{
    const ALERT_TYPE_SUCCESS = 'success';
    const ALERT_TYPE_WARNING = 'warning';
    const ALERT_TYPE_DANGER = 'danger';
    const ALERT_TYPE_INFO = 'info';

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @param $content
     * @param int $status
     * @param array $headers
     * @param string|null $alert
     */
    public function __construct($content, int $status = 200, string $alert = self::ALERT_TYPE_INFO, array $headers = [])
    {
        $statusMessage = 'success';
        if (strpos($status, '2') === false) {
            $statusMessage = 'error';
        }
        $this->setStatusMessage($statusMessage);
        $this->setAlert($alert);

        parent::__construct($content, $status, $headers);
    }

    /**
     * @param string $statusMessage
     */
    public function setStatusMessage(string $statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * @param string $alert
     * @return void
     */
    public function setAlert(string $alert)
    {
        if (!empty($alert)) {
            Session::flash($alert, $this->content);
        }
    }
}
