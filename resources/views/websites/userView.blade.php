@extends('layouts.full')

@section('title', $website->name)

@section('content')

    <?php
        echo '<pre>';
        print_r($website);
        echo '</pre>';
    ?>

@endsection
