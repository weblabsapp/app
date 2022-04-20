<?php

namespace App\Exceptions;


abstract class AbstractException extends \Exception
{
    const ALERT_TYPE = '';
    const STATUS_CODE = 0;
    const MESSAGE = '';
    const SHOW_TOAST = false;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var array
     */
    protected $replacements = [];

    /**
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     * @param string|null $description
     * @param array $replacements
     */
    public function __construct($message = "", $code = 0, \Throwable $previous = null, string $description = null, array $replacements = [])
    {
        parent::__construct($message, $code, $previous);
        $this->setDescription($description);
        $this->setReplacements($replacements);
    }

    /**
     * @param string $error
     * @return void
     */
    protected function setDescription(string $error)
    {
        $this->description = $error;
    }

    /**
     * @param array $replacements
     * @return void
     */
    protected function setReplacements(array $replacements)
    {
        $this->replacements = $replacements;
    }

    /**
     * @param $request
     * @return \App\Http\Responses\JsonResponse|\Illuminate\Http\Response
     */
    public function render($request)
    {
        // Save request session before killing the app
        $request->session()->save();

        if ($request->isJson()) {
            return $this->renderJson($request);
        } elseif (method_exists($this, 'renderHtml')) {
            return $this->renderHtml($request);
        } else {
            return response($this->message, 500);
        }
    }

    /**
     * @param string|null $description
     * @return mixed
     * @throws AbstractException
     */
    public static function throw(string $description = null, array $replacements = [])
    {
        throw new static(static::MESSAGE, static::STATUS_CODE, null, $description, $replacements);
    }

    /**
     * @return string|null
     */
    protected function getHtmlData()
    {
        return $this->description ? __($this->description, $this->replacements) : $this->message;
    }

    /**
     * @return array
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function getJsonData()
    {
        return [
            'main' => $this->message,
            'description' => __($this->description, $this->replacements),
            'show_toast' => static::SHOW_TOAST,
            'is_recaptcha_required' => request()->get('recaptcha_required')
        ];
    }
}
