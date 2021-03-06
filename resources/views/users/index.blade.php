@extends('layouts.app')
@section('title','ユーザー一覧')

@section('content')
<div class="main users-index">
   <div class="container -list">
      <h1 class="heading">ユーザー一覧</h1>

      {{-- @dump($users) --}}
      @foreach($users as $user)
      <div class="users-index-item">
         <div class="user-left">
            <img @if($user->image_name === null)
            src="{{ asset('assets/default-user-image.png') }}"
            @else
            src="{{ asset('storage/user_img/'.$user->image_name) }}"
            @endif
            >
         </div>
         <div class="user-right">
            <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
         </div>
      </div>
      @endforeach

   </div>
</div>
@endsection
