var app=angular.module("dash",["easypiechart"]);
  app.controller("row1-col1",function($scope){
    $scope.project_name="Branch Name";
    $scope.release="1704";
    $scope.start_date="2 Feb 2017";
    $scope.exp_date="31 Dec 2017";
    $scope.b_version="1.0.3.1";
  });
  app.controller("row1-col2",function($scope){

    $scope.tf="500";
    $scope.wip="100";
    $scope.mu="50";
  });
    app.controller("row3-col1",function($scope){
      $scope.prod_env="git";
      $scope.dev_env="";
  });
    app.controller("row3-col2",function($scope){

  });
    app.controller('chartCtrl', ['$scope', function ($scope) {
        $scope.percentages = [70,50,66,33,17,83,92,74,45,24,56,23,88,90,23,34,45,67,71,71,71,71,71,71,71,71,86,15];
        $scope.filename= "filename";
    }]);



