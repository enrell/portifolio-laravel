@extends('layouts.bootstrap')

<table class="table container">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">photo</th>
      <th scope="col">social</th>
      <th scope="col">languages</th>
      <th scope="col">technologies</th>
      <th scope="col">description</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
    <tr scope="row">
      @foreach ($profiles as $profile)
      <td>{{ $profile->id }}</td>
      <td>{{ $profile->photo }}</td>
      <td>{{ $profile->social }}</td>
      <td>{{ $profile->languages }}</td>
      <td>{{ $profile->technologies }}</td>
      <td>{{ $profile->description }}</td>
      <td>
      	<form class="container" action="{{ route('profile.destroy', $profile->id) }}" method="POST">
		@csrf
			<a class="btn bnt-info" href="{{ route('profile.edit', $profile->id) }}">Edit</a>
		@method('DELETE')
		<button type="submit" class="btn btn-danger">Deletar</button>
		</form>
      </td>
    </tr>
@endforeach
</table>
<div class="container">
	{{ $profiles->links() }}
</div>

