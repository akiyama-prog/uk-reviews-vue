@extends('layouts.header')

@section('content')
<h2>ロンドンで美味しいお店を見つけよう</h2>
<div id="app">
  <router-view></router-view>
  <router-link v-bind:to="{name: 'restaurant-create'}">新規投稿</router-link>
  <restaurant-index></restaurant-index>
</div>
@endsection