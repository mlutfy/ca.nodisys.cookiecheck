cj(function($) {
  if (navigator.cookieEnabled == false) {
    if(window.location.href.indexOf('cookieredirect') > -1) {
      $('#crm-container').prepend('<div class="messages crm-error"><div class="icon red-icon alert-icon"></div>' + ts('This page requires cookies to be enabled in your browser settings. Please check this setting and enable cookies (if they are not enabled), then refresh this page. If this error persists, please contact us for assistance.') + '</div>');
    }
    else {
      window.location += '&cookieredirect=1';
    }
  }
});
