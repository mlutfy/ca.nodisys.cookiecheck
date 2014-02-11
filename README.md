CiviCRM Cookie Check
====================

This extension checks to make sure that the browser accepts cookies.
Cookies are used extensively in CiviCRM and refusing cookies will result
in obscur 'could not find a valid key' error messages.

Enabling the extension will do the following:

* Check for cookies in PHP, using the $_COOKIE variable.

* Check for cookies in Javascript, using avigator.cookieEnabled.

* If a test for cookies failed, we will try to force a page refresh,
  since that tends to solve many cookie issues (and add cookieredirect=1
  in the URL, to avoid redirect loops). If that failed as well, we will
  display a message to the user to warn that cookies must be enabled.

Requirements
============

- CiviCRM >= 4.2 (4.4 recommended)

Installation
============

* Unpack the module code in your CiviCRM extension directory, then enable.

To download:
https://github.com/mlutfy/ca.nodisys.cookiecheck

Support
=======

Please post bug reports in the issue tracker of this project on github:
https://github.com/mlutfy/ca.nodisys.cookiecheck/issues

For general support questions, please post on the CiviCRM Extensions forum:
http://forum.civicrm.org/index.php/board,57.0.html

This is a community contributed extension written thanks to the financial
support of the organisations using it, as well as the very helpful and
collaborative CiviCRM community.

If you appreciate this module, please consider donating 10$ to the CiviCRM project:
http://civicrm.org/participate/support-civicrm

While I do my best to provide volunteer support for this extension, please
consider financially contributing for support or development of this extension:
http://www.nodisys.ca/en

Authors and license
===================

(C) 2012-2014 Mathieu Lutfy
http://www.nodisys.ca

Redistributed under the AGPL license:
http://civicrm.org/licensing
