@extends('layouts.app')
<h1 class="container mt-5">formulario para cv</h1>


<div class="container mt-5">
<form method="POST" action="/cv">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="Nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Apellidos</label>
        <input name="Apellidos" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Intro</label>
        <input name="Intro" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Num-Teléfonico</label>
        <input name="Num-Teléfonico" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input name="Correo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">empleo</label>
        <input name="empleo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Empresa</label>
        <input name="Empresa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">desde</label>
        <input name="desde" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">hasta</label>
        <input name="hasta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">descripcion</label>
        <input name="descripcion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Formacion</label>
        <input name="Formacion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Centro-Educativo</label>
        <input name="Centro-Educativo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">desde</label>
        <input name="desde1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">hasta</label>
        <input name="hasta1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">descripcion</label>
        <input name="descripcion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">habilidad</label>
        <input name="habilidad" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">nivel</label>
        <input name="nivel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">nombre</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
