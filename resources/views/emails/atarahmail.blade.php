@component('mail::message')
# {{$maildata['title']}}

Thank you for reaching out to Atarah solutions. Your query is being handled.

@component('mail::button', ['url' => $maildata['url']])
Back to atarah

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


