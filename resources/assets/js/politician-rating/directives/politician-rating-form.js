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

    Controller.$inject = ['$scope', 'politicianRatingService'];

    function Controller($scope, politicianRatingService) {
        init();

        $scope.toggleAmendment = function (amendment, rating) {
            $scope.amendments[amendment].rating = rating;
        };

        $scope.submit = function(){

        };


        function init() {
            var descriptions = [
                'Congress shall make no law respecting an establishment of religion, or prohibiting the free exercise thereof; or abridging the freedom of speech, or of the press; or the right of the people peaceably to assemble, and to petition the government for a redress of grievances.',
                'A well regulated militia, being necessary to the security of a free state, the right of the people to keep and bear arms, shall not be infringed.',
                'No soldier shall, in time of peace be quartered in any house, without the consent of the owner, nor in time of war, but in a manner to be prescribed by law.',
                'The right of the people to be secure in their persons, houses, papers, and effects, against unreasonable searches and seizures, shall not be violated, and no warrants shall issue, but upon probable cause, supported by oath or affirmation, and particularly describing the place to be searched, and the persons or things to be seized.',
                'No person shall be held to answer for a capital, or otherwise infamous crime, unless on a presentment or indictment of a grand jury, except in cases arising in the land or naval forces, or in the militia, when in actual service in time of war or public danger; nor shall any person be subject for the same offense to be twice put in jeopardy of life or limb; nor shall be compelled in any criminal case to be a witness against himself, nor be deprived of life, liberty, or property, without due process of law; nor shall private property be taken for public use, without just compensation.',
                'In all criminal prosecutions, the accused shall enjoy the right to a speedy and public trial, by an impartial jury of the state and district wherein the crime shall have been committed, which district shall have been previously ascertained by law, and to be informed of the nature and cause of the accusation; to be confronted with the witnesses against him; to have compulsory process for obtaining witnesses in his favor, and to have the assistance of counsel for his defense.',
                'In suits at common law, where the value in controversy shall exceed twenty dollars, the right of trial by jury shall be preserved, and no fact tried by a jury, shall be otherwise reexamined in any court of the United States, than according to the rules of the common law.',
                'Excessive bail shall not be required, nor excessive fines imposed, nor cruel and unusual punishments inflicted.',
                'The enumeration in the Constitution, of certain rights, shall not be construed to deny or disparage others retained by the people.',
                'The powers not delegated to the United States by the Constitution, nor prohibited by it to the states, are reserved to the states respectively, or to the people.'
            ];

            $scope.amendments = [
                {name: '1st Amendment', description: descriptions[0], rating: 1},
                {name: '2nd Amendment', description: descriptions[1], rating: 1},
                {name: '3rd Amendment', description: descriptions[2], rating: 1},
                {name: '4th Amendment', description: descriptions[3], rating: 1},
                {name: '5th Amendment', description: descriptions[4], rating: 1},
                {name: '6th Amendment', description: descriptions[5], rating: 1},
                {name: '7th Amendment', description: descriptions[6], rating: 1},
                {name: '8th Amendment', description: descriptions[7], rating: 1},
                {name: '9th Amendment', description: descriptions[8], rating: 1},
                {name: '10th Amendment', description: descriptions[9], rating: 1}
            ];

            $scope.ratings = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
        }
    }
})(angular.module('PoliticianRating'));