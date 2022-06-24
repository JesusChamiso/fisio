<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <style>
            :root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}h1,h5{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}strong{font-weight:bolder}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([class]){color:inherit;text-decoration:none}a:not([href]):not([class]):hover{color:inherit;text-decoration:none}img{vertical-align:middle;border-style:none}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}[role=button]{cursor:pointer}button{-webkit-appearance:button}button:not(:disabled){cursor:pointer}button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}.h1,.h5,h1,h5{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h5,h5{font-size:1.25rem}.img-fluid{max-width:100%;height:auto}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:768px){.row-cols-md-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}}.form-group{margin-bottom:1rem}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group{border-top:0}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.list-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#007bff;border-color:#007bff}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.bg-white{background-color:#fff!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.float-right{float:right!important}.h-100{height:100%!important}.mt-2{margin-top:.5rem!important}.m-3{margin:1rem!important}.text-wrap{white-space:normal!important}.text-center{text-align:center!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#121416!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}img{page-break-inside:avoid}p{orphans:3;widows:3}@page{size:a3}}
        </style>
        <div class="card">
            <div class="card-header bg-white">
                <div class="form-group">
                    <p class="text-center h1">Reporte General de Pacientes</p>
                </div>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-5 g-4">
                    @forelse ($pac as $d)
                        <div class="col">
                            {{-- <a href="{{ route('paciente_show', $d->codigo_paciente) }}" style="text-decoration:none;"
                                class="text-dark"> --}}
                            <div class="card h-100">
                                <div class="text-center mt-2">
                                    <img src="{{ asset('/img/user.png') }}"
                                        class="profile-user-img img-fluid img-circle" width="150" height="150">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        {{ $d->nombres }} {{ $d->apellido_paterno }} {{ $d->apellido_materno }}
                                    </h5>
                                    <div class="tab-pane fade show active" id="nav-datosP" role="tabpanel"
                                        aria-labelledby="nav-datosP-tab">
                                        <ul class="list-group list-group-unbordered m-3">
                                            <li class="list-group-item">
                                                <strong class="fs-5 text-wrap">Nombre Completo</strong>
                                                <p class="h5 float-right text-center">
                                                    {{ $d->nombres }} {{ $d->apellido_patenro }}
                                                    {{ $d->apellido_materno }}
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <strong class="fs-5 text-wrap">Peso:</strong>
                                                <p class="h5 float-right text-center">
                                                    {{ $d->peso }} kg.
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <strong class="fs-5 text-wrap">Talla</strong>
                                                <p class="h5 float-right text-center">
                                                    {{ $d->talla }} cm.
                                                </p>
                                            </li>
                                            <li class="list-group-item">
                                                <strong class="fs-5 text-wrap">telefono</strong>
                                                <p class="h5 float-right text-center">
                                                    {{ $d->telefono }}
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div>
                    @empty
                        <ul>
                            <li>No hay elementos</li>
                        </ul>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>

</html>
