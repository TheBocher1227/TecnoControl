@extends('layouts.index')
@section('content')
<style>
    .container {
        display: flex;
        flex-direction: column;
        height: 100vh;
        box-sizing: border-box;
        padding: 20px;
    }

    .content {
        display: flex;
        height: 100vh;
        width: 100%;
    }

    .header {
        max-width: 97%;
        width: 100%;
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .end-header {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .avatar {
        width: 50px;
        height: 50px;
        background-color: blue;
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
    <div class="header">
        <h4>Dashboard</h4>

        <div class="end-header">
            <div class="input-group">
                <span class="input-group-text border border-0 bg-white">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                </span>
                <input type="search" class="form-control border border-0" name="search" id="search" placeholder="Buscar">
            </div>
            <div class="avatar rounded-circle"></div>
        </div>
    </div>

    <div class="content">
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
</div>
@endsection
