
@extends('layouts.layout')

@section('content')
<div class="container">

    <div id="app">
        <div class="container-communication">
            <div class="panel-heading">Chats</div>
            <button class="btn btn-primary btn-sm" id="btn-chat"  @click='changePeer("1")'>
                1
            </button>
            <button class="btn btn-primary btn-sm" id="btn-chat" @click='changePeer("2")'>
                2
            </button>
            <button class="btn btn-primary btn-sm" id="btn-chat"  @click='changePeer("3")'>
                3
            </button>
            <div id = "panel_body_id" class="panel-body">
                <chat-messages :messages="messages"  :user="{{ Auth::user() }}"></chat-messages>
            </div>
            <div class="panel-footer">
                <chat-form
                        v-on:messagesent="addMessage"
                        v-on:sendinguser="currentUser"
                        :user="{{ Auth::user() }}"


                ></chat-form>
            </div>
        </div>
    </div>
</div>
@endsection
