@component('mail::message')
# Заказ:


@component('mail::table')
| Laravel            | Table                           |
| ------------------ |:-------------------------------:|
| Организация        | {{$witcher->contact_name}}      |
| Тип                | {{$witcher->type}}              |
| Товар              | {{$witcher->commodity}}         |
| Телефон            | {{$witcher->phone}}             |
| Погрузка           | {{$witcher->from}}              |
| Выгрузка           | {{$witcher->to}}                |
| Почта              | {{$witcher->email}}             |
| Дата погрузки      | {{$witcher->load}}              |
| Дата выгрузки      | {{$witcher->shipment}}          |
| Обозначения        | {{$witcher->Notations}}         |
@endcomponent

@component('mail::button', ['url' => 'http://f0542430.xsph.ru/admin'])
Вернуться на сайт
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent
