{{-- @extends('layouts.header') --}}
@extends('layouts.bootstrap')

@section('content')

<div>
<form action="{{ route('profile.store') }}" method="POST">
	@csrf
<div class="form-floating">
    <input name="social" type="text" class="form-control" id="floatingInputGroup2" placeholder="Social Media" required>
    <label for="floatingInputGroup2">Social Media</label>
</div>
<div class="form-floating">
   <select name="languages" class="form-select" aria-label="Default select example">
        <option selected value="Português">Português</option>
        <option value="Inglês">Inglês</option>
    </select>
</div>
<div class="form-floating">
   <select name="technologies" class="form-select" aria-label="Default select example">
        <option>Tecnologias</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Linux">Linux</option>
    </select>
</div>
<div class="form-floating">
    <div class="form-floating">
    <textarea name="description" class="form-control" id="floatingInputGroup2" placeholder="Descrição"></textarea>
    <label for="floatingInputGroup2">Descrição</label>
</div>

</div>
	<div class="form-floating mb-3">
  	<div class="mb-3">
  		<label for="formFileMultiple" class="form-label">Photo</label>
  		<input name="photo" class="form-control" type="file" id="formFileMultiple" multiple>
	</div>
</div>
    <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
</form>
</div>
	



@endsection

@yield('content')
