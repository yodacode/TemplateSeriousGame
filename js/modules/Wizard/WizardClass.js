var $ = require('jquery');
var wizardTemplate = require('./WizardTemplate.js');

var WizardClass = function () {
  this.wizard = $('[data-wizard]');
  this.data = {
    'step': this.wizard.attr('data-wizard-step'),
    'image': this.wizard.attr('data-wizard-bg')
  };
  this.wizard.append(wizardTemplate(this.data));
};

module.exports = WizardClass;