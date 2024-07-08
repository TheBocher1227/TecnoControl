@extends('layouts.index')
@section('content')
<style>
    .container {
        display: flex;
        height: 100vh;
        box-sizing: border-box;
        padding: 20px;
    }
    .div-promociones {
        background-color: #000000;
        width: 60%;
        height: 95%;
        border-radius: 10px;
        color: white; 
        padding: 20px;
        box-sizing: border-box;
        margin-right: 20px;
    }
    .things {
        background-color: #000000;
        width: 35%;
        height: 95%;
        border-radius: 10px;
        padding: 20px;
        box-sizing: border-box;
        color: white; 
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .things .item {
        height: 30%;
        border-radius: 10px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .blue {
        background-color: blue;
    }
    .red {
        background-color: red;
    }
    .yellow {
        background-color: yellow;
        color: black; 
    }
</style>
<div class="container">
    <div class="div-promociones">
       
    </div>
    <div class="things">
    <div class="item blue">
</div>
        <div class="item red">
            <p>Rojo</p>
        </div>
        <div class="item yellow">
            <p>Amarillo</p>
        </div>
    </div>
</div>
@endsection
