@extends('layouts.app')
@section('contain')
    <?php
        foreach ($data as $item) {
            echo $item;
            echo "<br>";
        };
    ?>
@endsection