@extends('layouts.template')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Générer un rapport</a>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            
                         <!-- DataTales Example -->
                         <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Listes des Participants</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénoms</th>
                                            <th>Numéro de téléphone</th>
                                            <th>Email</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($participants as $participant)
                                        <tr>
                                            <td>{{$participant->nom}}</td>
                                            <td>{{$participant->prenoms}}</td>
                                            <td>{{$participant->telephone}}</td>
                                            <td>{{$participant->email}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection