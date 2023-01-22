@extends('layouts.page')
@section('content')
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Inscription à la formation !</h1>
                            </div>
                            <form class="user" action="{{route('participants.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nom"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="prenoms"
                                            placeholder="Prénoms">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user"
                                            name="telephone" placeholder="Entrez votre numero de téléphone">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user"
                                            name="email" placeholder="Entrez votre email">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                   Valider
                                </button>
                                <div style="margin-top:20px">
                                 @include('flashmessage')
                                 </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection