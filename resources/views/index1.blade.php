<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>hello</h1>
    @php
        $a = 10;
        $b = 20;
        $c = 30;

      @endphp

    <h1>{{ $a }}</h1>
    {{ $b }} <br>
    {{ $c }}

    @if ($a > $b && $a > $c)
        <h1>{{ $a }}</h1>
        {{ $a }} is greater than {{ $b }} and {{ $c }}
    @elseif($b > $a && $b > $c)
        <h1>{{ $b }}</h1>
        {{ $b }} is greater than {{ $c }} and {{ $a }}
    @else
        <h1>{{ $c }}</h1>
        {{ $c }} is greater than {{ $a }} and {{ $b }} <br>
    @endif

    @for ($i = 0; $i <= $a; $i++)
        Textbox-{{ $i }}:: <input type="text" name="b{{ $i }}" />
        <br>
    @endfor
@php
      $x = ['a' => 35, 'b' => 30, 'c' => 45, 'd' => 45, 'e' => 45, 'f' => 45];

@endphp
    @foreach ($x as $a1 => $a2)
        {{ $a1 }} = {{ $a2 }}<br>
    @endforeach
</body>
</html>
