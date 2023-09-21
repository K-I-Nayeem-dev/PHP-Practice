@extends('layouts.masterlayouts')

@php

    $user = "Yahoo Baba";

    $fruits = ['Kamrul', 'islam', 'nayeem', 'Arafat', 'Hello', 'walid', 'Abir', 'Habib'];

@endphp

<script>
    var user = @json($user);
    // var fruits = @json($fruits);
    var fruits = {{ Js::from($fruits) }}
    console.log(user);

    var num = 0;

    fruits.forEach(function(fruit){
        num++;
        console.log(num + " " + fruit);
    });

</script>

@section('content')
    @verbatim
        <div id="app" >{{ user }}</div>
    @endverbatim

    <div id="hello">
        <h2>Demo Text</h2>
    </div>

@endsection

@push('js')
    {{-- <script src='/custom.js'></script>
    <script src="/example.js"></script>
    <script src="/Hello.js"></script>
    <script src="/keno.js"></script> --}}

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            setup() {
                const user = ref('Hello World')
                return {
                    user
                }
            }
        }).mount('#app')

    </script>
@endpush



@push('style')
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/bootstarp.css">
    <link rel="stylesheet" href="/color.css">
@endpush

@prepend('style')
    <style>
        #hello{
            color: red;
            font-weight: bold;
            font-size: 2rem;
            font-family: 'Times New Roman';
        }

    </style>
@endprepend

@prepend('js')
    <script>
        document.getElementById('hello'){
            innerHTML = 'Hello';
        }
    </script>
@endprepend
