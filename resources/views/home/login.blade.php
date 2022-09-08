@extends('layouts.master')

@section('content') 
  @if ( ! Auth::user())
  <div class="contaner mt-2">
    <form action="{{route('login_post')}}" method="post">
        @CSRF
        @if (Session::has('error'))
            <div class="alert alert-danger col-md-3 mt-2">Geçersiz kullanıcı adı ve/veya şifre</div>
        @endif
    
        @if (Session::has('logout'))
            <div class="alert alert-info">Çıkış yapıldı</div>
        @endif
        <div class="form-group">
            <label class="mb-2">Kullanıcı Adı</label>
            <input type="text" name="username" required value="{{old('username')}}" class="form-control form-control-sm col-md-3 w-25">
        </div>
        <div class="form-group mt-1">
            <label class="mb-2">Şifre</label>
            <input type="password" name="password" required value="{{old('password')}}" class="form-control form-control-sm col-md-3 w-25">
        </div>
        <div class="form-group mt-1 mb-2">
            <label class="checkbox">
                <input type="checkbox" /> Beni Hatırla
            </label>
        </div>
    
        <button type="submit" class="btn btn-sm btn-primary">Giriş</button>
      </form>
  </div>
  @endif

@endsection