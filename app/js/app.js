var ToggleMobileLoginButton = function() {
  settings = {
    $button: $('.js-toggleLoginBlock'),
    $loginForm: $('.js-loginForm')
  },

  initialize = function() {
    var that = this;

    that.settings.$button.on('click', function() {
      that.settings.$loginForm.toggle();
    });
  }
}
