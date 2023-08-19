<?php

namespace App\Http\Controllers\Api;



use App\Exceptions\InvalidRequestException;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class OpenAIController extends ApiController
{
    public function send(Request $request)
    {
        $question = $request->post('question');
        $code = $request->post('code');
        $courseTag = $request->query('course_tag');

        $open_ai_key = getenv('OPENAI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $chat = $open_ai->chat([
            'model' => 'gpt-3.5-turbo-16k',
            'messages' => [
                [
                    "role" => "user",
                    "content" => $code
                ],
                [
                    "role" => "assistant",
                    "content" => $courseTag
                ],
                [
                    "role" => "system",
                    "content" => $question
                ],
            ],
            'temperature' => 1.0,
            'max_tokens' => 16000,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ]);

        $d = json_decode($chat);

        if (empty($d->choices)) {
            InvalidRequestException::throw('assistant api error', [], new \Exception($d->error->message));
        } else {
            $answer = str_replace('```php', '<pre class="language-php"><code>&lt;?php', $d->choices[0]->message->content);
            $answer = str_replace('```', '</code></pre>', $answer);
            $this->setResponseData(['answer' => $answer]);
        }

        return $this->response();
    }
}