var app=angular.module("app",[]);

app.controller("controlador",function($scope){
    $scope.apellido="Rivas";

    var lista=this;
    var n=2;
    lista.productos=[
        {id:1,nombre:"Agua",precion:20.0},
        {id:2,nombre:"Cafe",precion:10.0},
    ];

    lista.carrito=[];

    lista.addProducto=function()
    {
        var nombre=lista.nombre;
        var precio=lista.precio;
        var qwertyzcvsdfqewdsfdwer

        if(nombre!=null && precio!=null)
        {
            n++;
            lista.productos.push({id:n,nombre:nombre,precio:precio});
            
            lista.nombre="";
            lista.precio="";
            
        }
    };

    lista.addAlCarrito=function()
    {
        var n=1;
        var id=lista.productoSeleccionado;
    }
});

