(function (module) {
    'use strict';

    module.directive('politicianRatingForm', directive);

    function directive() {
        return {
            templateUrl: '/build/assets/js/templates/politician-rating-form.html',
            restrict: 'E',
            controller: Controller,
            scope: {
                userId: '=',
                politicianId: '='
            }
        }
    }

    Controller.$inject = ['$scope', '$window', 'politicianRatingService'];

    function Controller($scope, $window, politicianRatingService) {
        init();

        $scope.toggleAmendment = function (amendment, rating) {
            if(!$scope.alreadyReviewed)
                $scope.review.scores[amendment] = rating;
        };

        $scope.submit = function () {
            var ratings = [];

            angular.forEach($scope.amendments, (function (amendment) {
                    ratings.push(amendment.rating);
            }));

            // TODO: Make model inside service.
            var model = {
                userId: $scope.userId,
                politicianId: $scope.politicianId,
                comment: $scope.review.comment,
                ratings: $scope.review.scores
            };

            politicianRatingService.reviewPolitician(model).then(function () {
                $window.location.reload();
            });
        };

        function init() {
            $scope.formDisabled = typeof $scope.userId === 'undefined';

            politicianRatingService.getReview($scope.userId, $scope.politicianId).then(function (result) {
                $scope.review = result.data;

                if ($scope.review.id !== '') {
                    $scope.formDisabled = true;
                    $scope.alreadyReviewed = true;
                    if ($scope.review.comment === '')
                        $scope.review.comment = 'No comment given.';

                }
                else {
                    $scope.review.comment = '';
                    $scope.review.scores = {
                        'First': 1,
                        'Second': 1,
                        'Third': 1,
                        'Fourth': 1,
                        'Fifth': 1,
                        'Sixth': 1,
                        'Seventh': 1,
                        'Eighth': 1,
                        'Ninth': 1,
                        'Tenth': 1
                    };
                }
            });

            $scope.amendments = politicianRatingService.getAmendments();
        }
    }
})(angular.module('PoliticianRating'));