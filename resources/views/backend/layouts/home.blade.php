@extends('backend.master')

@section('content')

    {{--<h1>{{$title}}</h1>--}}
    {{--<h6>{{$link}}</h6>--}}

    <h1>
{{--        <?php--}}
{{--        for($i = 1;$i <= 10;$i++)--}}
{{--        {--}}
{{--        ?>--}}
{{--        <p>--}}
{{--            <?php--}}
{{--            echo $i;--}}
{{--            ?>--}}
{{--        </p>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}

        @for($i = 1;$i <= 10;$i++)
        <p>{{$i}}</p>
        @endfor

    </h1>

@endsection
