'use strict';

angular.module('yiiApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      { title: 'HTML5 Boilerplate', url: 'http://html5boilerplate.com/' },
      { title: 'AngularJS', url: 'http://angularjs.org/' },
      { title: 'Karma', url: 'http://karma-runner.github.io/0.10/index.html' },
      { title: 'Yii Framework', url: 'http://yiiframework.com' }
    ];
  });
