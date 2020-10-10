@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">ab</div>
            <div class="col-3">bc</div>
            <div class="col-sm-3">
                <div class="card">
                    <div style="max-width: 300px; ">
                        <div id="onPage" style=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    clock--}}


    <script src="{{asset('js/analogue-time-picker.js')}}"></script>

    <script>
        (function () {
            var code = document.querySelectorAll(".code pre code");
            for (var i = 0; i < code.length; i++) {
                eval(code[i].innerHTML);
            }
        }());

        window.clock = timePicker({
            element: document.getElementById("onPage"),
            time: new Date(),
            width: "100%",
        });


    </script>
@endsection

