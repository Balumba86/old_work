<p>
    {!! $mail_text !!}
</p>
<p style="margin-top: 30px; font-size: 12px; color: #4e555b;">
    Вы получили это письмо потому, что подписаны на нашу рассылку.<br/>
    В любой момент Вы можете <a href="{{ route('user-email-unsubscribe-page', ['uns_token' => $mail_token]) }}" target="_blank">отписаться от рассылки</a>
    и больше не будете получать информационных писем.
</p>
