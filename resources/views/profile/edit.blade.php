{{-- @extends('layouts.header') --}}
@extends('layouts.bootstrap')

<div>
<form action="{{ route('profile.update', $profile->id) }}" method="POST">
	@csrf
    @method('PUT')
<div class="form-floating">
    <input name="social" type="text" class="form-control" id="floatingInputGroup2" placeholder="Social Media" value="{{ $profile->social }}" required>
    <label for="floatingInputGroup2">Social Media</label>
</div>
<div class="form-floating">
   <select name="languages" class="form-select" aria-label="Default select example">
        <option value="{{ $profile->languages }}">Valor Selecionado: {{ $profile->languages }}</option>
        <option value="Português">Português</option>
        <option value="Inglês">Inglês</option>
    </select>
</div>
<div class="form-floating">
   <select name="technologies" class="form-select" aria-label="Default select example">
        <option selected value="{{ $profile->technologies }}">Valor Selecionado: {{ $profile->technologies }}</option>
        <option value="PHP">PHP</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Linux">Linux</option>
    </select>
</div>
<div class="form-floating">
    <div class="form-floating">
    <textarea name="description" class="form-control" id="floatingInputGroup2" placeholder="Descrição">{{ $profile->description }}</textarea>
    <label for="floatingInputGroup2">Descrição</label>
</div>

</div>
	<div class="form-floating mb-3">
  	<div class="mb-3">
  		<label for="formFileMultiple" class="form-label">{{ $profile->photo }}</label>
  		<input value="{{ $profile->photo }}" name="photo" class="form-control" type="file" id="formFileMultiple" multiple>
	</div>
</div>
    <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
</form>
</div>
	