// Cross-Browser Compatibility JavaScript for Ace Micro Services

// Browser Detection Function
function detectBrowser() {
  var userAgent = navigator.userAgent;
  var browserName = 'Unknown';
  var browserVersion = 'Unknown';
  
  // Chrome
  if (userAgent.indexOf('Chrome') > -1 && userAgent.indexOf('Edg') === -1) {
      browserName = 'Chrome';
      browserVersion = userAgent.match(/Chrome\/(\d+)/)[1];
  }
  // Firefox
  else if (userAgent.indexOf('Firefox') > -1) {
      browserName = 'Firefox';
      browserVersion = userAgent.match(/Firefox\/(\d+)/)[1];
  }
  // Safari
  else if (userAgent.indexOf('Safari') > -1 && userAgent.indexOf('Chrome') === -1) {
      browserName = 'Safari';
      browserVersion = userAgent.match(/Version\/(\d+)/)[1];
  }
  // Edge
  else if (userAgent.indexOf('Edg') > -1) {
      browserName = 'Edge';
      browserVersion = userAgent.match(/Edg\/(\d+)/)[1];
  }
  // Internet Explorer
  else if (userAgent.indexOf('MSIE') > -1 || userAgent.indexOf('Trident') > -1) {
      browserName = 'Internet Explorer';
      if (userAgent.indexOf('MSIE') > -1) {
          browserVersion = userAgent.match(/MSIE (\d+)/)[1];
      } else {
          browserVersion = userAgent.match(/rv:(\d+)/)[1];
      }
  }
  
  return {
      name: browserName,
      version: browserVersion,
      userAgent: userAgent
  };
}

// Display Browser Information
function displayBrowserInfo() {
  var browserInfo = detectBrowser();
  var browserInfoElement = document.getElementById('browserInfo');
  
  if (browserInfoElement) {
      browserInfoElement.innerHTML = 
          '<div class="browser-info-box">' +
          '<h4>🌐 Browser Detection Results</h4>' +
          '<p><strong>Browser:</strong> ' + browserInfo.name + '</p>' +
          '<p><strong>Version:</strong> ' + browserInfo.version + '</p>' +
          '<p><strong>User Agent:</strong> ' + browserInfo.userAgent + '</p>' +
          '</div>';
  }
}

// Cross-browser event listener function
function addEventListenerCrossBrowser(element, event, handler) {
  if (element.addEventListener) {
      element.addEventListener(event, handler, false);
  } else if (element.attachEvent) {
      element.attachEvent('on' + event, handler);
  } else {
      element['on' + event] = handler;
  }
}

// Progress Bar Animation
function startProgress() {
  var progressBar = document.getElementById('progressBar');
  if (progressBar) {
      progressBar.style.width = '0%';
      var width = 0;
      var interval = setInterval(function() {
          if (width >= 100) {
              clearInterval(interval);
          } else {
              width += 2;
              progressBar.style.width = width + '%';
          }
      }, 50);
  }
}

// Enhanced Form Validation with Cross-browser Support
function validateForm(event) {
  event = event || window.event; // IE compatibility
  
  var form = event.target || event.srcElement;
  var name = form.name.value;
  var email = form.email.value;
  var isValid = true;
  var errorMessage = '';
  
  // Name validation
  if (name.length < 2) {
      errorMessage += 'Name must be at least 2 characters long.\n';
      isValid = false;
  }
  
  // Email validation (cross-browser compatible regex)
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
      errorMessage += 'Please enter a valid email address.\n';
      isValid = false;
  }
  
  if (!isValid) {
      alert(errorMessage);
      if (event.preventDefault) {
          event.preventDefault();
      } else {
          event.returnValue = false; // IE compatibility
      }
      return false;
  }
  
  return true;
}

// Enhanced Menu Toggle with Cross-browser Support
function toggleMenu() {
  var navLinks = document.getElementById('navLinks');
  if (navLinks) {
      var currentDisplay = navLinks.style.display;
      if (currentDisplay === 'none' || currentDisplay === '') {
          navLinks.style.display = 'block';
      } else {
          navLinks.style.display = 'none';
      }
  }
}

// Form Submission Handler
function handleSubmit(event) {
  event = event || window.event;
  
  if (validateForm(event)) {
      // Simulate form submission
      var submitButton = document.querySelector('#demoForm button[type="submit"]');
      if (submitButton) {
          submitButton.innerHTML = 'Submitting...';
          submitButton.disabled = true;
          
          setTimeout(function() {
              alert('Form submitted successfully! This is a demo.');
              submitButton.innerHTML = 'Submit Form';
              submitButton.disabled = false;
              
              // Reset form
              var form = document.getElementById('demoForm');
              if (form && form.reset) {
                  form.reset();
              }
          }, 2000);
      }
  }
  
  if (event.preventDefault) {
      event.preventDefault();
  } else {
      event.returnValue = false;
  }
  return false;
}

// Polyfill for classList (IE9 and below)
if (!('classList' in document.createElement('_'))) {
  (function (view) {
      if (!('Element' in view)) return;
      
      var classListProp = 'classList',
          protoProp = 'prototype',
          elemCtrProto = view.Element[protoProp],
          objCtr = Object,
          strTrim = String[protoProp].trim || function () {
              return this.replace(/^\s+|\s+$/g, '');
          },
          arrIndexOf = Array[protoProp].indexOf || function (item) {
              var i = 0, len = this.length;
              for (; i < len; i++) {
                  if (i in this && this[i] === item) {
                      return i;
                  }
              }
              return -1;
          };
      
      var DOMTokenList = function (el) {
          this.el = el;
          var classes = el.className.replace(/^\s+|\s+$/g, '').split(/\s+/);
          for (var i = 0; i < classes.length; i++) {
              this.push(classes[i]);
          }
          this._updateClassName = function () {
              el.className = this.toString();
          };
      };
      
      DOMTokenList[protoProp] = [];
      DOMTokenList[protoProp].item = function (i) {
          return this[i] || null;
      };
      DOMTokenList[protoProp].contains = function (token) {
          token += '';
          return arrIndexOf.call(this, token) !== -1;
      };
      DOMTokenList[protoProp].add = function () {
          var tokens = arguments;
          for (var i = 0, l = tokens.length; i < l; i++) {
              var token = tokens[i] + '';
              if (arrIndexOf.call(this, token) === -1) {
                  this.push(token);
              }
          }
          this._updateClassName();
      };
      DOMTokenList[protoProp].remove = function () {
          var tokens = arguments;
          for (var i = 0, l = tokens.length; i < l; i++) {
              var token = tokens[i] + '';
              var index = arrIndexOf.call(this, token);
              if (index !== -1) {
                  this.splice(index, 1);
              }
          }
          this._updateClassName();
      };
     if (!DOMTokenList.prototype.toggle.toString().includes('force')) {
  // Apply the polyfill only if `force` isn't supported
  DOMTokenList.prototype.toggle = function (token, force) {
    token = String(token);

    if (force === true) {
      this.add(token);
      return true;
    }

    if (force === false) {
      this.remove(token);
      return false;
    }

    if (this.contains(token)) {
      this.remove(token);
      return false;
    } else {
      this.add(token);
      return true;
    }
  };
}

      
      if (objCtr.defineProperty) {
          var defineProperty = function (object, property, definition) {
              if (definition.value) {
                  object[property] = definition.value;
              } else {
                  object.__defineGetter__(property, definition.get);
              }
          };
          try {
              defineProperty(elemCtrProto, classListProp, {
                  get: function () {
                      return new DOMTokenList(this);
                  }
              });
          } catch (ex) {
              if (ex.number === -0x7FF5EC54) {
                  defineProperty(elemCtrProto, classListProp, {
                      value: function () {
                          return new DOMTokenList(this);
                      }
                  });
              }
          }
      } else if (objCtr[protoProp].__defineGetter__) {
          elemCtrProto.__defineGetter__(classListProp, function () {
              return new DOMTokenList(this);
          });
      }
  }(self));
}

// Fade-in Animation Trigger
function initializeFadeInAnimations() {
  var elements = document.querySelectorAll('section, .card, .info');
  
  // Fallback for browsers without querySelectorAll
  if (!elements.length && document.getElementsByTagName) {
      var sections = document.getElementsByTagName('section');
      var cards = document.getElementsByClassName('card');
      var infos = document.getElementsByClassName('info');
      
      elements = [];
      for (var i = 0; i < sections.length; i++) elements.push(sections[i]);
      for (var i = 0; i < cards.length; i++) elements.push(cards[i]);
      for (var i = 0; i < infos.length; i++) elements.push(infos[i]);
  }
  
  for (var i = 0; i < elements.length; i++) {
      if (elements[i].classList) {
          elements[i].classList.add('fade-in');
      } else {
          elements[i].className += ' fade-in';
      }
  }
}

// Feature Detection
function checkFeatureSupport() {
  var features = {
      flexbox: 'flex' in document.documentElement.style,
      grid: 'grid' in document.documentElement.style,
      transforms: 'transform' in document.documentElement.style,
      transitions: 'transition' in document.documentElement.style,
      localStorage: typeof(Storage) !== 'undefined'
  };
  
  console.log('Feature Support:', features);
  return features;
}

// Main initialization function
function initializeCrossBrowserFeatures() {
  // Check for DOM ready state
  if (document.readyState === 'loading') {
      addEventListenerCrossBrowser(document, 'DOMContentLoaded', function() {
          displayBrowserInfo();
          initializeFadeInAnimations();
          checkFeatureSupport();
      });
  } else {
      displayBrowserInfo();
      initializeFadeInAnimations();
      checkFeatureSupport();
  }
  
  // Initialize progress bar functionality
  var progressButton = document.getElementById('progressButton');
  if (progressButton) {
      addEventListenerCrossBrowser(progressButton, 'click', startProgress);
  }
  
  // Initialize form validation
  var demoForm = document.getElementById('demoForm');
  if (demoForm) {
      addEventListenerCrossBrowser(demoForm, 'submit', handleSubmit);
  }
}

// Initialize when script loads
initializeCrossBrowserFeatures();

// Enhance existing modal functionality for cross-browser support
var originalWindowOnload = window.onload;
window.onload = function() {
  // Call original onload if it exists
  if (originalWindowOnload) {
      originalWindowOnload();
  }
  
  // Add cross-browser enhancements to existing modals
  var modals = document.querySelectorAll('.modal');
  for (var i = 0; i < modals.length; i++) {
      var modal = modals[i];
      
      // Add cross-browser transition support
      if (modal.style.transition === undefined) {
          modal.style.transition = 'opacity 0.3s ease';
      }
      
      // Enhance modal reveal animation
      var originalDisplay = modal.style.display;
      modal.addEventListener('animationend', function() {
          if (this.style.display === 'block') {
              this.style.opacity = '1';
          }
      });
  }
};

// Cross-browser console.log fallback
if (!window.console) {
  window.console = {
      log: function() {},
      error: function() {},
      warn: function() {}
  };
}

