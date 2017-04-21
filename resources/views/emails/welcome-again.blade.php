@component('mail::message')
# Introduction

Thank you so much for registering..

@component('mail::button', ['url' => 'http://laracasts.com'])
Start Browsing
@endcomponent


@component('mail::panel', ['url' => ''])
Learning Never Ends. :)
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
