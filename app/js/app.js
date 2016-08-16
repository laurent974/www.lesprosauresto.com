var ToggleMobileLoginButton = {
  settings: {
    $button: $('.js-toggleLoginBlock'),
    $icon: $('.js-toggleLoginBlock .material-icons'),
    $loginForm: $('.js-loginForm')
  },

  initialize: function() {
    var that = this;

    console.log('Yes')

    that.settings.$button.on('click', function() {
      that.settings.$loginForm.toggle();
      that.settings.$icon.toggle();
    });
  }
}

/**
 * Au Chargement du DOM, on execute:
 */
$(document).ready(function() {
  console.log('ok');
  ToggleMobileLoginButton.initialize();
});
