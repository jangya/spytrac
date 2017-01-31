/*global angular, navigator*/
'use strict';

function isolateScrolling() {
    return {
        restrict: 'A',
        link: function($scope, elem, attr) {

          elem.bind('mousewheel', function (e) {
            let height = elem[0].offsetHeight;
            let scrollHeight = elem[0].scrollHeight;
            let scrollTop = elem[0].scrollTop;
            let delta = Math.max(-1, Math.min(1, (e.originalEvent.wheelDelta || -e.originalEvent.detail)));
            console.log("height",height);
            console.log("scrollHeight",scrollHeight);
            console.log("scrollTop",scrollTop);
            console.log("delta",delta);
            if((scrollTop === (scrollHeight - height) && delta < 0) || (scrollTop === 0 && delta > 0)) {
              e.preventDefault();
            }
			    });
        }
    };
}
isolateScrolling.$inject = [];
export default isolateScrolling;
