<?php

namespace App\Http\Responses;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
        $view = $content;
        $statusMessage = 'success';
        if (!Str::startsWith($status, 2)) {
            $statusMessage = 'error';
            $view = view("errors.{$status}");
        }
        $this->setStatusMessage($statusMessage);
        $this->setContent($content);
        $this->setAlert($alert);

        parent::__construct($view, $status, $headers);
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
