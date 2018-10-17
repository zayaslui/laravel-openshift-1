@extends('layouts.admin')

@section('content')
@section('title','Ver Obras')


                         <div class="row">
                              <div class="col-lg-12">
                                  <h1 class="page-header">{{$titulo}}</h1>
                              </div>
                              <!-- /.col-lg-12 -->
                          </div>
                          <!-- /.row -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          {{$subtitulo}}
                                      </div>
                                      <div class="panel-body">
                                          <div class="row">
                                              <div class="col-lg-12">
                                                  <form class="col-lg-12 col-md-6 col-sm-12">
                                                      @csrf
                                                        @include('obras.forms.default')
                                                      <a class="btn btn-primary btn-sm" href="/obras_">Listar Obras</a>
                                                  </form>
                                                  <div data-tilt class="col-lg-4 col-md-6 col-sm-12">
                                              </div>
                                          </div>
                                          <!-- /.row (nested) -->
                                      </div>
                                      <!-- /.panel-body -->
                                  </div>
                                  <!-- /.panel -->
                              </div>
                              <!-- /.col-lg-12 -->
                          </div>
                          <!-- /.row -->


    @stop