@extends('layouts.app')

@section('content')
    <section>
        @foreach ($tracking as $t)
            <div class="flex">

                <div>{{$t->service == 1? 'Courier Nacional':false}}</div>
                <div>{{$t->service == 2? 'Courier Miami':false}}</div>
                <div>{{$t->service == 3? 'Courier China':false}}</div>
                <div>{{$t->tracking_number}}</div>
                <div>{{$t->order_number}}</div>
                <div>
                    <a href="/tracking-update/{{$t->idtracking}}">
                        <button>
                            Update
                        </button>
                    </a>
                </div>
            </div>
        @endforeach
    </section>
@endsection