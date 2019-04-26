@extends('plantilla')
@section('cuerpo')    


<div class="container ">
    <div class="row " >
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contactanos</legend>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="lname" name="name" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="email" name="email" type="text" placeholder="Email " class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <textarea class="form-control" id="message" name="message" placeholder="Descripción" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection