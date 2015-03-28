'use strict';

angular.module('chatApp', ['ngRoute'])

.config(function ($routeProvider){

    $routeProvider
    .when('/chat-rooms', {
        templateurl : 'partials/chat-rooms.html',
        controller : 'ChatRoomsCtrl'
    })
    .when('/chat-room', {
        templateurl : 'partials/chat-room.html',
        controller : 'ChatRoomCtrl'
    });

});
