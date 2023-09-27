<div class="container">
    <div class="box-body">
        
    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user -> name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $user -> telefono }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-end">{{ __('Perfil') }}</label>

                            <div class="col-md-6">
                            <select name="perfil" id="perfil" class="col-md-12 col-form-label text-md-center">

                            @if ("{{ $user->perfil}}" =='Vendedor')
                            <option value="{{ $user->perfil }}">{{ $user -> perfil }}</option>
                            <option value="comprador">Comprador</option>
                            @else
                            <option value="{{ $user->perfil }}">{{ $user -> perfil }}</option>
                            <option value="vendedor">Vendedor</option>
                            @endif
                            </select>
                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="perfil" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>

                        <div class="col-md-6">
                            <select name="estado" id="estado" class="col-md-12 col-form-label text-md-center" >
                                <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                             </select>
                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="credito" class="col-md-4 col-form-label text-md-end">{{ __('Credito') }}</label>

                            <div class="col-md-6">
                                <input id="credito" type="text" class="form-control @error('credito') is-invalid @enderror" name="credito" value="{{ $user -> credito }}">

                                @error('credito')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                   


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user -> email }}" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user -> password }}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <input id="estado" type="hidden" name="estado" value="1">
                              
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>