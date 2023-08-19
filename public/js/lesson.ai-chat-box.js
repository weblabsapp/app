var Message;
Message = function (arg) {
    this.text = arg.text, this.ai_response = arg.ai_response, this.message_side = arg.message_side;

    this.draw = function (_this) {
        return function () {
            var $message;
            $message = $($('.ai-message-template').clone().html());
            if ('ai_response' in _this && _this.ai_response === true) {
                $message.find('div.avatar').html('<i class="fa fa-wand-sparkles" style="font-size: 36px; margin: 10px 10px;"></i>');
            }
            $message.addClass(_this.message_side);

            if ('text' in _this && _this.text) {
                $message.find('.text').html(_this.text);
            }

            $('.chat_window').find('.messages').append($message);
            return setTimeout(function () {
                return $message.addClass('appeared');
            }, 0);
        };
    }(this);
    return this;
};

window.message_side = 'left';

sendMessage = function (questionId, questionText, code, courseTag) {
    var $messages, message1, message2;
    if (questionId.trim() === '' || questionText.trim() === '') {
        return;
    }

    // Draw user message
    $messages = $('.chat_window').find('.messages');
    message1 = new Message({
        text: questionText,
        message_side: 'right',
        ai_response: false
    });
    message1.draw();
    $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);

    // Draw AI response message
    window.message_side = message_side === 'left' ? 'right' : 'left';
    message2 = new Message({
        text: '',
        message_side: 'left',
        ai_response: true
    });
    message2.draw();
    $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);

    $.ajax({
        type: 'POST',
        url: 'https://api.' + location.hostname + '/assistant/send?course_tag='+courseTag,
        dataType: 'json',
        data: JSON.stringify({question_id: questionId, code: code}),
        success: function (response, call = false) {
            if (call !== true) {
                return;
            }

            let assistantAnswer = response.content.answer;

            $('.chat_window').find('.messages .message:last').find('.text').html(assistantAnswer);

            // Highlight code in AI response
            Prism.highlightAll();

            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
        },
        error: function (xhr, call = false) {
            if (call !== true) {
                return;
            }

            $('.chat_window').find('.messages .message:last').remove();

            return {
                message: translate(...getErrorFromResponse(xhr)),
                status: TOAST_STATUS.DANGER
            }
        },
        complete: function (response, status) {
            if (status === "abort") {
                return false;
            }

            // Enable AI question buttons
            $(document).find('.lesson-ai-question').prop('disabled', false);
        }
    });
};

$(function () {
    $('.lesson-ai-question').click(function () {

        $(document).find('.lesson-ai-question').prop('disabled', true);

        let questionId = $(this).data('question-id'),
            questionText = $(this).data('text'),
            courseTag = $(this).data('course-tag'),
            embedUserCode = $(this).data('embed-user-code'),
            code;

        if (embedUserCode === 1) {
            code = editor.getValue();
        } else {
            code = '';
        }

        $('#chat-windows-explain').hide();
        sendMessage(questionId, questionText, code, courseTag);
    });
});