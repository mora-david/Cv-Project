
<h1 class="center plantilla">Plantilla CV</h1>
<h3 class="titulos center personal-data">Datos personales (profile)</h3>

<div class="square">





<div class="data-field " id="names">
    <div class="data-field " id="photo"></div>
    <div>
        <h4 class=" fields" >{{$profile[0]->Nombre}} {{$profile[0]->Apellidos}}</h4>
        <h4 class=" fields" id="descrip">{{$profile[0]->Intro}}</h4>
        <div class="data-field" id="email">
            <h3 class="center titulos">Correo: </h3>
            <h4 class="center fields" id="correo">{{$profile[0]->Correo}}</h4>
        </div>
    </div>

</div>


    <div class="data-field" id="data-job">
<h3 class="titulos center">Empleo (job): </h3>
<h4 class="center fields">{{$jobs[0]->empleo}}</h4>
    </div>


<div class="data-field" id="data-education">
<h3 class="titulos center">Educación: </h3>
<h4 class="center fields">{{$education[0]->Formacion}}</h4>
</div>


    <div class="data-field" id="data-hability">
<h3 class="titulos center">Habilidad: </h3>
@foreach($hability as $key => $hability1)
   <h4 class="center fields"> {{$hability1->habilidad}}</h4>
@endforeach
    </div>

<div class="data-field" id="data-hobbie">
<h3 class="titulos center">Hobbie: </h3>
<h4 clasS="center fields">{{$hobbie[0]->nombre}}</h4>
    </div>



</div>








<style>
    .center{
        text-align: center;
    }

    .plantilla{
        color:red;
        padding:25px;
        font-size: 3rem;
    }

    .personal-data{
        font-size: 1rem;
    }

    .data-field{
        display:flex;
        justify-content: center;
    }

    .titulos{
        font-size: 1rem;
        padding-right: 10px;
    }

    .fields{
    font-size: 1rem;
        margin:30px;
    }

    .square{
        border: 1px solid black;
        margin:auto;
        padding-bottom: 50px;

    }

    #names{
        justify-content: left;
        padding-left: 80px;
        font-size: 1rem;
    }

    #names h4{
        font-size: 1rem;
    }

    #photo{
        width: 200px;
        height: 200px;
        border: 5px solid black;
        background:red;
    }

    #names #descrip{
        color:red;
        font-size: 1rem;
        margin-bottom:10px;
    }
    #names #correo{
        color:red;
        font-size: 1rem;
        margin-top: 22px;
        margin-left: 10px;
        left-top: 10px;
    }

    #email{
        justify-content: left;
        margin-left: 30px;
    }

    #data-job{
        width: 90%;
        border:1px solid #ED5565;
        margin: auto;
        margin-top:5px;
        margin-bottom:5px;
    }

    #data-education{
        width: 90%;
        border:1px solid #48CFAD;
        margin: auto;
        margin-top:5px;
        margin-bottom:5px;
    }

    #data-hability{
        width: 90%;
        border:1px solid #48CFAD;
        margin: auto;
        margin-top:5px;
        margin-bottom:5px;
    }

    #data-hobbie{
        width: 90%;
        border:1px solid #48CFAD;
        margin: auto;
        margin-top:5px;
        margin-bottom:5px;
    }
</style>



