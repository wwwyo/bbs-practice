@extends('layout')

@section('content')
  <div class="container mt-4">
    <div class="border p-4">
      <h1 class="h5 mb-4">
        投稿の新規作成
      </h1>

      {{ Form::open(['route' => 'posts.store']) }}
        @csrf

        <div class="mb-4">
          <div class="form-group">
            {{ Form::label('title', 'タイトル')}}
            {{ Form::text('title', null, ['class'=>'form-control' ]) }}
          </div>
          @if ($errors->has('title'))
            <div class="invalid-feedback">
              {{ $errors->first('title') }}
            </div>
          @endif
        </div>
          
        <div class="form-group">
          {{ Form::label('body', '本文') }}
          {{ Form::textarea('body', null, ['class'=>'form-control']) }}
        </div>
        @if ($errors->has('body'))
          <div class="invalid-feedback">
            {{ $errors->first('body') }}
          </div>
        @endif
        <div class="mt-5">
          <a href="{{ route('top')}}" class="btn btn-secondary">
            キャンセル
          </a>
          {{ Form::submit('投稿する', ['class' => 'btn btn-prymary'])}}
        </div>
      {{ Form::close() }}
        
    </div>

    
  </div>

    
@endsection