app.controller('teacherController', function ($scope, $http, API) {
    $scope.loadListTeacher = function () {
        $http.get(API + 'teacher/list').then(function (res) {
            $scope.list_teacher = res.data;
        })
    }

    $scope.loadListTeacher();


    $scope.getClassByTeacher = function (id) {
        $("#modalTeacher").modal('show');
    }
$scope.add = API + 'teacher/add';
    $scope.modalAdd = function(){

    	
    	$("#modal-id").modal('show');
    }
})