@extends('layouts.app')

@section('content')
<div class="container">
<containear_menu  :items ="{{json_encode($menus)}}">
</containear_menu>
</div>
@endsection
