@extends('layout.estrutura.inicio')

@section('content')

@if(session()->has('success'))

    <div class="alert alert-success fade show" role="alert">
        <div class="alert-icon"><i class="flaticon-warning"></i></div>
        <div class="alert-text">
            {{ session()->get('success') }}
        </div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>

@endif

<br/>

<form method="post" name="grupo_whats" id="grupo_whats" action="/grupo-whatsapps" >
{{ csrf_field() }}
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Adicione os grupo de Whatsapp
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form class="kt-form kt-form--label-right">
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Empresa:</label>
                                <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Digite a Empresa">
                            </div>
                            <div class="col-lg-6">
                                <label class="quantidade_click">Quantidade de Clicks:</label>
                                <input type="number" id="quantidade_click" name="quantidade_click" class="form-control" placeholder="Quantidade de clicks">
                            </div>
                        </div>
                        <div class="form-group row">

                        </div>
                        <div class="repeater">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Links de Grupos</h4>
                                </div>
                                <div class="col-lg-6 kt-align-right">
                                    <input data-repeater-create class="btn btn-primary" type="button" value="Adicionar +"/>
                                </div>
                            </div>



                            <div data-repeater-list="link_whatsapps">
                                <div class="form-group row" data-repeater-item>
                                    <div class="col-lg-11">
                                        <label>Link:</label>
                                        <div class="kt-input-icon">
                                            <input type="text" id="link_whatsapps-0-link_whatapp" name="link_whatsapps[0][link_whatapp]" class="form-control" placeholder="Adicione o link do grupo">
                                            <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-whatsapp"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button data-repeater-delete class="btn btn-danger" style="margin-top: 35%" type="button">
                                            <i class="la la-trash"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-6 kt-align-right">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>
</form>

@endsection
