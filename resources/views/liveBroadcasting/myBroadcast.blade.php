@extends('layouts/app')

@section('content')

<script>
   window.user = {
       id: {{ auth()->id() }},
       name: "{{ auth()->user()->name }}"
   };
   
   window.csrfToken = "{{ csrf_token() }}";
   </script>

<br>
<br>

<div id="appLiveBroad"></div>

@endsection