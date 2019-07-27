@component('mail::message')
# Introduction

Inquiry send by {{$inquiry->name}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
