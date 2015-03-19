var ProgressBar = require('progressbar.js');
var $ = require('jquery');

var RemaningTimeClass = function () {
this.container = $('[data-widget-remaining]').find('[data-widget-remaining-progress]').get(0);

  this.init = function () {
    var progress = new ProgressBar.Circle(this.container, {
      duration: 200,
      color: "#FCB03C",
      strokeWidth: 4,
      trailColor: "#ddd",
      text: {
        value: 'Phase 2',
        className: 'remaining-label',
      }
    });
    //     var second = new Date().getSeconds();
    //     console.log(second / 60);
    progress.animate(0.8, function() {});		
  };

};

module.exports = RemaningTimeClass;

