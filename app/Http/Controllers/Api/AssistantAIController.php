<?php

namespace App\Http\Controllers\Api;



use App\Exceptions\AbstractException;
use App\Exceptions\InvalidRequestException;
use App\Http\Requests\SendLessonAiQuestionRequest;
use App\Http\Responses\JsonResponse;
use App\Repositories\LessonAIQuestionRepository;
use Orhanerday\OpenAi\OpenAi;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class AssistantAIController extends ApiController
{
    private LessonAIQuestionRepository $repository;

    public function __construct(LessonAIQuestionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Call AI Assistant
     *
     * @param SendLessonAiQuestionRequest $request
     * @return JsonResponse
     * @throws AbstractException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function send(SendLessonAiQuestionRequest $request)
    {
        // Validate the request
        $request->validated();

        $questionId = $request->post('question_id');
        $question = $this->repository->find($questionId);

        $code = $request->post('code');
        $courseTag = $request->query('course_tag');

        $messages = [
            [
                "role" => "assistant",
                "content" => $courseTag
            ],
            [
                "role" => "system",
                "content" => $question->text
            ],
        ];

        if ($question->embed_user_code) {
            array_unshift($messages, [
                "role" => "user",
                "content" => $code
            ]);
        }

        // Insert extra assistance text into messages at index 1
        if ($question->assistant_extra_text) {
            $messages[] = [
                "role" => "user",
                "content" => $question->assistant_extra_text
            ];
        }

        $open_ai_key = getenv('OPEN_AI_API_KEY');
        $open_ai = new OpenAi($open_ai_key);

        $chat = $open_ai->chat([
            'model' => env('OPEN_AI_MODEL'),
            'messages' => $messages,
            'temperature' => (int) env('OPEN_AI_TEMPERATURE'),
            'max_tokens' => (int) env('OPEN_AI_MAX_TOKENS'),
            'frequency_penalty' => (int) env('OPEN_AI_FREQUENCY_PENALTY'),
            'presence_penalty' => (int) env('OPEN_AI_PRESENCE_PENALTY'),
        ]);

        $AIResponse = json_decode($chat);

        if (empty($AIResponse->choices)) {
            InvalidRequestException::throw('assistant api error', [], new \Exception($AIResponse->error->message));
        } else {
            $answer = str_replace('```php', '<pre class="language-php"><code>&lt;?php', $AIResponse->choices[0]->message->content);
            $answer = str_replace('```', '</code></pre>', $answer);
            $this->setResponseData(['answer' => $answer]);
        }

        return $this->response();
    }
}