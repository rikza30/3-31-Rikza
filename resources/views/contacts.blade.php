@extends('layouts.main')

@section('container')
<div class="tittle-top mb-5">
    <h2 class="fw-bold">Contacts Us</h2>
</div>
<form>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="inputname" placeholder="Nama">
  <label for="inputname">Nama</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="inputemail" placeholder="Email">
  <label for="inputemail">Email</label>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Pesan</label>
</div>
<button type="sumbit" class="btn btn-primary">sumbit</button>
</form>
@endsection
