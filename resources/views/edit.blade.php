@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            memo edit
            <form class="card-body" action="{{ route('destory') }}" method="POST">
                @csrf
                <input type="hidden" name="memo_id" value="{{ $edit_memo[0]['id'] }}">
                <button type="submit">削除</button>
            </form>
        </div>
        <div class="card-body">
            <form class="card-body" action="{{ route('update') }}" method="POST">
                @csrf
                <input type="hidden" name="memo_id" value="{{ $edit_memo[0]['id'] }}">
                <div class="form-group">
                    <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力">{{ $edit_memo[0]['content'] }}</textarea>
                </div>
                @foreach($tags as $t)
                    <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="checkbox" name="tags[]" id="{{ $t['id'] }}" value="{{ $t['id'] }}" {{ in_array($t['id'], $include_tags) ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ $t['id'] }}">{{ $t['name']}}</label>
                    </div>
                @endforeach
                <input type="text" class="form-control w-50 my-3" name="new_tag" placeholder="new tag">
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
    </div>
@endsection
