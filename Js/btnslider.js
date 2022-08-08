angular.module('ionicApp', ['ionic'])

.controller('MenuCtrl', function($scope, $stateParams, $ionicSlideBoxDelegate) {

    //switch slides
    $scope.slide = function(to) {
        $scope.current = to;
        $ionicSlideBoxDelegate.slide(to);
    }

});