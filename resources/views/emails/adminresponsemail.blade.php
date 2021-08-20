@component('mail::message')
# {{$maildata['title']}}

Hello <b>{{$maildata['name']}}</b>,<br>

{{$maildata['message']}}


@component('mail::button', ['url' => $maildata['url']])
Go to Atarah Solutions
@endcomponent

With Regards,<br>
<b>Atarah Solutions.<b>
@endcomponent
