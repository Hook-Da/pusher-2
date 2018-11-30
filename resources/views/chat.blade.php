@extends('layouts.master')
@section('title','|Chat')
@section('content')
<div class="columns">
 <div class="column is-6 is-offset-one-quarter">
  <div class="card">
    <div class="card-content">
  	<ul class="list-group" v-chat-scroll="{always:false,smooth:true}">
  		<div v-for="item in messages">
    		<app-message :message="item"></app-message>
    	</div>
  	</ul> 
  </div>
  <div class="columns">
  	<div class="column is-9">
   <div class="field">
  	 <div class="field">
  		<div class="control">
  	  		<textarea @keyup.enter="sendMessage" v-model="message" class="textarea is-small" placeholder="Textarea"></textarea>
  		</div>
	</div>
    </div>
    </div>
    <div class="column is-3">
    	<div class="sendButtonPositioning">
    		<a @click="sendMessage" class="button is-info is-outlined is-small">Отправить</a>
    	</div>
    </div>
    </div>
  </div>
 </div>
</div>
@endsection