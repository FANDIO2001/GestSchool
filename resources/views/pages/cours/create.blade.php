        @extends('layouts.app')
        @section('content')
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-15 col-lg-15">
                        <div class="card border-0 shadow-lg rounded-4">
                            <div class="card-header bg-dark text-white text-center py-3 rounded-top-4">
                                <h2 class="h3 fw-bold mb-0">Créer un Cours </h2>
                            </div>
                            <div class="card-body p-5">
                                @if ($errors->any())
                                    <div class="alert alert-danger rounded-3" role="alert">
                                        <h5 class="alert-heading fw-bold">Erreur(s) de validation :</h5>
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('cours.store') }}">
                                    @csrf

                                    @csrf
                                    {{-- Nom du cours --}}
                                    <div class="mb-4">
                                        <label for="coursname" class="form-label fw-semibold text-blac">Nom DU Cours</label>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                                            class="form-control form-control-lg rounded-pill @error('title') is-invalid @enderror"
                                            placeholder="coursname" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Description</label>
                                        <textarea id="" cols="30" rows="10"class="form-control" name=" description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="d-flex justify-content-center ">
                                        <button type="submit"
                                            class="btn btn-dark btn-lg fw-bold py-2 w-50 text-align: center rounded-pill">
                                            Créer Eleve
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
