@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name" class="col-md-12 col-form-label">{{ __('Nombre') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="last_name" class="col-md-12 col-form-label">{{ __('Apellido Paterno') }}</label>

                                <div class="col-md-12">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="second_surname" class="col-md-12 col-form-label">{{ __('Apellido Materno') }}</label>

                                <div class="col-md-12">
                                    <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ old('second_surname') }}" required autocomplete="second_surname" autofocus>

                                    @error('second_surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="gender_id" class="col-form-label">{{ __('Genero') }}</label>
                                    <select class="form-control"  @error('gender_id') is-invalid @enderror" name="gender_id" value="{{ old('gender_id') }}" required autocomplete="gender_id">
                                        <option>Selecciona una opcion</option>
                                        @foreach($genders as $gender)
                                            <option value="{{ $gender->id }}"
                                                @if ($gender->id == old('gender_id'))
                                                    selected="selected"
                                                @endif
                                                >{{ $gender->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-md-12">
                                        @error('gender_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="age" class="col-md-12 col-form-label">{{ __('Edad') }}</label>

                                        <div class="col-md-12">
                                            <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="maritalStatus" class="col-form-label">{{ __('Estado civil') }}</label>
                                    <select class="form-control"  @error('marital_status_id') is-invalid @enderror" name="marital_status_id" value="{{ old('marital_status_id') }}" required autocomplete="marital_status_id" >
                                        <option value="">Selecciona una opcion</option>
                                        @foreach($maritalStatus as $maritalStatus_)
                                            <option value="{{ $maritalStatus_->id }}"
                                                @if ($maritalStatus_->id == old('marital_status_id'))
                                                    selected="selected"
                                                @endif
                                                >{{ $maritalStatus_->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-md-12">
                                        @error('gender_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="degree_id" class="col-form-label">{{ __('Grado') }}</label>
                                    <select id="degree" class="form-control"  @error('degree_id') is-invalid @enderror" name="degree_id" value="{{ old('degree_id') }}" required autocomplete="degree_id">
                                        <option value="">Selecciona una opcion</option>
                                        @foreach($degrees as $degree)
                                            <option value="{{ $degree->id }}"
                                                @if ($degree->id == old('degree_id'))
                                                    selected="selected"
                                                @endif
                                                >{{ $degree->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-md-12">
                                        @error('degree')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6" id="interest_leve_id" style="display:none" >
                                    <label for="interest_level_id" class="col-form-label">{{ __('Nivel de interes') }}</label>
                                    <select class="form-control"  @error('interest_level_id') is-invalid @enderror" name="interest_level_id" value="{{ old('interest_level_id') }}" required autocomplete="interest_level_id" >
                                        <option value="">Selecciona una opcion</option>
                                        @foreach($interestLevels as $interestLevel)
                                            <option class="level_{{ $interestLevel->degree_id }}" value="{{  $interestLevel->id   }}"
                                                @if ($interestLevel->id == old('interest_level_id'))
                                                    selected="selected"
                                                @endif
                                            >{{ $interestLevel->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-md-12">
                                        @error('interest_level_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
