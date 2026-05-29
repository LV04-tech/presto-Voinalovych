<x-layout>
  
  <div class="row justify-content-center align-items-center height-custom ">
    <div class="col-12 col-md-6 my-5">
      
      <form 
      action="{{route('register')}}" method="POST" class="p-4 shadow rounded-4 form"
      >
      @csrf
      {{-- name  --}}
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="name"  required>
        {{-- mail  --}}
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Mail</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
      </div>
      {{-- passwprd  --}}
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      {{-- password conformation --}}
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Conferma password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
      </div>
      {{-- bottone --}}
      <div class="col-12">
        <button class="bott" type="submit">Registrati</button>
      </div>
      
    </form>
  </div>
</div>
</x-layout>