"use strict";
(self["webpackChunkPumpkin"] = self["webpackChunkPumpkin"] || []).push([["product"],{

/***/ "./resources/js/product.js":
/*!*********************************!*\
  !*** ./resources/js/product.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _css_product_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../css/product.scss */ "./resources/css/product.scss");






document.addEventListener('DOMContentLoaded', function () {
  var add = document.querySelector(".add");
  var sub = document.querySelector(".sub");
  var quantity = document.querySelector(".quantity");
  var buy = document.querySelector(".buy");
  var favorite = document.querySelector(".favorite");
  add.addEventListener('click', function () {
    quantity.innerHTML = Number(quantity.innerHTML) + 1;
  });
  sub.addEventListener('click', function () {
    if (Number(quantity.innerHTML > 1)) {
      quantity.innerHTML = Number(quantity.innerHTML) - 1;
    }
  });
  buy.addEventListener('click', function (e) {
    var form = new FormData();
    form.append('product', buy.value);
    form.append('quantity', quantity.innerHTML);
    fetch('/addToBasket', {
      method: "POST",
      body: form
    }).then(function (response) {
      if (response.status == 200) {
        window.location.reload();
      }
      if (response.status == 302) {
        window.location.replace("/login");
      }
    });
  });
  favorite.addEventListener('click', function (e) {
    var form = new FormData();
    form.append('product', favorite.id);
    fetch('/favorite', {
      method: "POST",
      body: form
    }).then(function (response) {
      if (response.status == 200) {
        console.log(response.status);
        if (favorite.classList.contains("fa-regular")) {
          favorite.classList.remove("fa-regular");
          favorite.classList.add("fa-solid");
        } else {
          favorite.classList.remove("fa-solid");
          favorite.classList.add("fa-regular");
        }
      } else {
        window.location.href = "/login";
      }
    });
  });
});

/***/ }),

/***/ "./resources/css/product.scss":
/*!************************************!*\
  !*** ./resources/css/product.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/internals/inherit-if-required.js":
/*!***************************************************************!*\
  !*** ./node_modules/core-js/internals/inherit-if-required.js ***!
  \***************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var isCallable = __webpack_require__(/*! ../internals/is-callable */ "./node_modules/core-js/internals/is-callable.js");
var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");
var setPrototypeOf = __webpack_require__(/*! ../internals/object-set-prototype-of */ "./node_modules/core-js/internals/object-set-prototype-of.js");

// makes subclassing work correct for wrapped built-ins
module.exports = function ($this, dummy, Wrapper) {
  var NewTarget, NewTargetPrototype;
  if (
    // it can work only with native `setPrototypeOf`
    setPrototypeOf &&
    // we haven't completely correct pre-ES6 way for getting `new.target`, so use this
    isCallable(NewTarget = dummy.constructor) &&
    NewTarget !== Wrapper &&
    isObject(NewTargetPrototype = NewTarget.prototype) &&
    NewTargetPrototype !== Wrapper.prototype
  ) setPrototypeOf($this, NewTargetPrototype);
  return $this;
};


/***/ }),

/***/ "./node_modules/core-js/internals/path.js":
/*!************************************************!*\
  !*** ./node_modules/core-js/internals/path.js ***!
  \************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var global = __webpack_require__(/*! ../internals/global */ "./node_modules/core-js/internals/global.js");

module.exports = global;


/***/ }),

/***/ "./node_modules/core-js/internals/string-trim.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/internals/string-trim.js ***!
  \*******************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var requireObjectCoercible = __webpack_require__(/*! ../internals/require-object-coercible */ "./node_modules/core-js/internals/require-object-coercible.js");
var toString = __webpack_require__(/*! ../internals/to-string */ "./node_modules/core-js/internals/to-string.js");
var whitespaces = __webpack_require__(/*! ../internals/whitespaces */ "./node_modules/core-js/internals/whitespaces.js");

var replace = uncurryThis(''.replace);
var ltrim = RegExp('^[' + whitespaces + ']+');
var rtrim = RegExp('(^|[^' + whitespaces + '])[' + whitespaces + ']+$');

// `String.prototype.{ trim, trimStart, trimEnd, trimLeft, trimRight }` methods implementation
var createMethod = function (TYPE) {
  return function ($this) {
    var string = toString(requireObjectCoercible($this));
    if (TYPE & 1) string = replace(string, ltrim, '');
    if (TYPE & 2) string = replace(string, rtrim, '$1');
    return string;
  };
};

module.exports = {
  // `String.prototype.{ trimLeft, trimStart }` methods
  // https://tc39.es/ecma262/#sec-string.prototype.trimstart
  start: createMethod(1),
  // `String.prototype.{ trimRight, trimEnd }` methods
  // https://tc39.es/ecma262/#sec-string.prototype.trimend
  end: createMethod(2),
  // `String.prototype.trim` method
  // https://tc39.es/ecma262/#sec-string.prototype.trim
  trim: createMethod(3)
};


/***/ }),

/***/ "./node_modules/core-js/internals/this-number-value.js":
/*!*************************************************************!*\
  !*** ./node_modules/core-js/internals/this-number-value.js ***!
  \*************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");

// `thisNumberValue` abstract operation
// https://tc39.es/ecma262/#sec-thisnumbervalue
module.exports = uncurryThis(1.0.valueOf);


/***/ }),

/***/ "./node_modules/core-js/internals/whitespaces.js":
/*!*******************************************************!*\
  !*** ./node_modules/core-js/internals/whitespaces.js ***!
  \*******************************************************/
/***/ ((module) => {


// a string of all valid unicode whitespaces
module.exports = '\u0009\u000A\u000B\u000C\u000D\u0020\u00A0\u1680\u2000\u2001\u2002' +
  '\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u3000\u2028\u2029\uFEFF';


/***/ }),

/***/ "./node_modules/core-js/modules/es.number.constructor.js":
/*!***************************************************************!*\
  !*** ./node_modules/core-js/modules/es.number.constructor.js ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var IS_PURE = __webpack_require__(/*! ../internals/is-pure */ "./node_modules/core-js/internals/is-pure.js");
var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var global = __webpack_require__(/*! ../internals/global */ "./node_modules/core-js/internals/global.js");
var path = __webpack_require__(/*! ../internals/path */ "./node_modules/core-js/internals/path.js");
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var isForced = __webpack_require__(/*! ../internals/is-forced */ "./node_modules/core-js/internals/is-forced.js");
var hasOwn = __webpack_require__(/*! ../internals/has-own-property */ "./node_modules/core-js/internals/has-own-property.js");
var inheritIfRequired = __webpack_require__(/*! ../internals/inherit-if-required */ "./node_modules/core-js/internals/inherit-if-required.js");
var isPrototypeOf = __webpack_require__(/*! ../internals/object-is-prototype-of */ "./node_modules/core-js/internals/object-is-prototype-of.js");
var isSymbol = __webpack_require__(/*! ../internals/is-symbol */ "./node_modules/core-js/internals/is-symbol.js");
var toPrimitive = __webpack_require__(/*! ../internals/to-primitive */ "./node_modules/core-js/internals/to-primitive.js");
var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");
var getOwnPropertyNames = (__webpack_require__(/*! ../internals/object-get-own-property-names */ "./node_modules/core-js/internals/object-get-own-property-names.js").f);
var getOwnPropertyDescriptor = (__webpack_require__(/*! ../internals/object-get-own-property-descriptor */ "./node_modules/core-js/internals/object-get-own-property-descriptor.js").f);
var defineProperty = (__webpack_require__(/*! ../internals/object-define-property */ "./node_modules/core-js/internals/object-define-property.js").f);
var thisNumberValue = __webpack_require__(/*! ../internals/this-number-value */ "./node_modules/core-js/internals/this-number-value.js");
var trim = (__webpack_require__(/*! ../internals/string-trim */ "./node_modules/core-js/internals/string-trim.js").trim);

var NUMBER = 'Number';
var NativeNumber = global[NUMBER];
var PureNumberNamespace = path[NUMBER];
var NumberPrototype = NativeNumber.prototype;
var TypeError = global.TypeError;
var stringSlice = uncurryThis(''.slice);
var charCodeAt = uncurryThis(''.charCodeAt);

// `ToNumeric` abstract operation
// https://tc39.es/ecma262/#sec-tonumeric
var toNumeric = function (value) {
  var primValue = toPrimitive(value, 'number');
  return typeof primValue == 'bigint' ? primValue : toNumber(primValue);
};

// `ToNumber` abstract operation
// https://tc39.es/ecma262/#sec-tonumber
var toNumber = function (argument) {
  var it = toPrimitive(argument, 'number');
  var first, third, radix, maxCode, digits, length, index, code;
  if (isSymbol(it)) throw new TypeError('Cannot convert a Symbol value to a number');
  if (typeof it == 'string' && it.length > 2) {
    it = trim(it);
    first = charCodeAt(it, 0);
    if (first === 43 || first === 45) {
      third = charCodeAt(it, 2);
      if (third === 88 || third === 120) return NaN; // Number('+0x1') should be NaN, old V8 fix
    } else if (first === 48) {
      switch (charCodeAt(it, 1)) {
        // fast equal of /^0b[01]+$/i
        case 66:
        case 98:
          radix = 2;
          maxCode = 49;
          break;
        // fast equal of /^0o[0-7]+$/i
        case 79:
        case 111:
          radix = 8;
          maxCode = 55;
          break;
        default:
          return +it;
      }
      digits = stringSlice(it, 2);
      length = digits.length;
      for (index = 0; index < length; index++) {
        code = charCodeAt(digits, index);
        // parseInt parses a string to a first unavailable symbol
        // but ToNumber should return NaN if a string contains unavailable symbols
        if (code < 48 || code > maxCode) return NaN;
      } return parseInt(digits, radix);
    }
  } return +it;
};

var FORCED = isForced(NUMBER, !NativeNumber(' 0o1') || !NativeNumber('0b1') || NativeNumber('+0x1'));

var calledWithNew = function (dummy) {
  // includes check on 1..constructor(foo) case
  return isPrototypeOf(NumberPrototype, dummy) && fails(function () { thisNumberValue(dummy); });
};

// `Number` constructor
// https://tc39.es/ecma262/#sec-number-constructor
var NumberWrapper = function Number(value) {
  var n = arguments.length < 1 ? 0 : NativeNumber(toNumeric(value));
  return calledWithNew(this) ? inheritIfRequired(Object(n), this, NumberWrapper) : n;
};

NumberWrapper.prototype = NumberPrototype;
if (FORCED && !IS_PURE) NumberPrototype.constructor = NumberWrapper;

$({ global: true, constructor: true, wrap: true, forced: FORCED }, {
  Number: NumberWrapper
});

// Use `internal/copy-constructor-properties` helper in `core-js@4`
var copyConstructorProperties = function (target, source) {
  for (var keys = DESCRIPTORS ? getOwnPropertyNames(source) : (
    // ES3:
    'MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,' +
    // ES2015 (in case, if modules with ES2015 Number statics required before):
    'EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,' +
    // ESNext
    'fromString,range'
  ).split(','), j = 0, key; keys.length > j; j++) {
    if (hasOwn(source, key = keys[j]) && !hasOwn(target, key)) {
      defineProperty(target, key, getOwnPropertyDescriptor(source, key));
    }
  }
};

if (IS_PURE && PureNumberNamespace) copyConstructorProperties(path[NUMBER], PureNumberNamespace);
if (FORCED || IS_PURE) copyConstructorProperties(path[NUMBER], NativeNumber);


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_function-appl-0fa2a2","vendors-node_modules_core-js_modules_es_promise_js","vendors-node_modules_core-js_modules_es_string_replace_js"], () => (__webpack_exec__("./resources/js/product.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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akU7QUFDQSxDQUFDOztBQUVEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLDRCQUE0QixpQkFBaUI7QUFDN0M7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vUHVtcGtpbi8uL3Jlc291cmNlcy9qcy9wcm9kdWN0LmpzIiwid2VicGFjazovL1B1bXBraW4vLi9yZXNvdXJjZXMvY3NzL3Byb2R1Y3Quc2Nzcz9hYTEzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvaW5oZXJpdC1pZi1yZXF1aXJlZC5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL3BhdGguanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9zdHJpbmctdHJpbS5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL3RoaXMtbnVtYmVyLXZhbHVlLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvd2hpdGVzcGFjZXMuanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvZXMubnVtYmVyLmNvbnN0cnVjdG9yLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBcIi4uL2Nzcy9wcm9kdWN0LnNjc3NcIjtcblxuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XG5cbiAgICBsZXQgYWRkID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5hZGRcIik7XG4gICAgbGV0IHN1YiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuc3ViXCIpO1xuICAgIGxldCBxdWFudGl0eSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucXVhbnRpdHlcIik7XG4gICAgbGV0IGJ1eSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYnV5XCIpO1xuICAgIGxldCBmYXZvcml0ZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZmF2b3JpdGVcIik7XG4gICAgYWRkLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbigpe1xuICAgICAgICBxdWFudGl0eS5pbm5lckhUTUwgPSBOdW1iZXIocXVhbnRpdHkuaW5uZXJIVE1MKSArIDE7XG4gICAgICAgXG5cbiAgICB9KTtcbiAgICBzdWIuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLGZ1bmN0aW9uKCl7XG4gICAgICAgIGlmKE51bWJlcihxdWFudGl0eS5pbm5lckhUTUwgPjEpKXsgXG4gICAgICAgIHF1YW50aXR5LmlubmVySFRNTCA9IE51bWJlcihxdWFudGl0eS5pbm5lckhUTUwpIC0gMTtcbiAgICAgICAgfVxuXG4gICAgfSk7XG4gIFxuICAgICAgIGJ1eS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgICAgdmFyIGZvcm09bmV3IEZvcm1EYXRhKCk7XG4gICAgICAgICAgIGZvcm0uYXBwZW5kKCdwcm9kdWN0JyxidXkudmFsdWUpO1xuICAgICAgICAgICBmb3JtLmFwcGVuZCgncXVhbnRpdHknLHF1YW50aXR5LmlubmVySFRNTCk7XG4gICAgICAgICAgICBmZXRjaCgnL2FkZFRvQmFza2V0Jyx7XG4gICAgICAgICAgICAgIG1ldGhvZDogXCJQT1NUXCIsXG4gICAgICAgICAgICAgIGJvZHk6Zm9ybVxuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC50aGVuKHJlc3BvbnNlPT57XG4gICAgICAgICAgICAgIGlmKHJlc3BvbnNlLnN0YXR1cz09MjAwKXtcbiAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3RhdHVzPT0zMDIpe1xuICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZXBsYWNlKFwiL2xvZ2luXCIpO1xuICAgICAgICAgICAgICB9XG4gICAgICAgICAgICBcbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgXG4gICAgICAgIH0pO1xuICAgICAgZmF2b3JpdGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLGZ1bmN0aW9uKGUpe1xuICAgICAgICB2YXIgZm9ybSA9IG5ldyBGb3JtRGF0YSgpO1xuICAgICAgICBmb3JtLmFwcGVuZCgncHJvZHVjdCcsZmF2b3JpdGUuaWQpO1xuICAgICAgICBmZXRjaCgnL2Zhdm9yaXRlJyx7XG4gICAgICAgICAgbWV0aG9kOiBcIlBPU1RcIixcbiAgICAgICAgICBib2R5OmZvcm1cbiAgICAgICAgfSkudGhlbihcbiAgICAgICAgICByZXNwb25zZT0+e1xuICAgICAgICAgICAgaWYocmVzcG9uc2Uuc3RhdHVzPT0yMDApe1xuICAgICAgICAgICAgICBjb25zb2xlLmxvZyhyZXNwb25zZS5zdGF0dXMpO1xuICAgICAgICAgIGlmKGZhdm9yaXRlLmNsYXNzTGlzdC5jb250YWlucyhcImZhLXJlZ3VsYXJcIikpe1xuICAgICAgICAgICAgZmF2b3JpdGUuY2xhc3NMaXN0LnJlbW92ZShcImZhLXJlZ3VsYXJcIik7XG4gICAgICAgICAgICBmYXZvcml0ZS5jbGFzc0xpc3QuYWRkKFwiZmEtc29saWRcIik7XG4gICAgICAgICAgfSBcbiAgICAgICAgICBlbHNle1xuICAgICAgICAgICAgZmF2b3JpdGUuY2xhc3NMaXN0LnJlbW92ZShcImZhLXNvbGlkXCIpO1xuICAgICAgICAgICAgZmF2b3JpdGUuY2xhc3NMaXN0LmFkZChcImZhLXJlZ3VsYXJcIik7XG4gICAgICAgICAgfVxuICAgICAgICB9ZWxzZXtcbiAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZj1cIi9sb2dpblwiXG4gICAgICAgIH1cblxuICAgICAgICAgIH1cblxuICAgICAgICApXG5cbiAgICAgICAgXG4gICAgICAgXG4gICAgICB9KTtcblxuICAgICBcblxuXG5cblxufSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiJ3VzZSBzdHJpY3QnO1xudmFyIGlzQ2FsbGFibGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaXMtY2FsbGFibGUnKTtcbnZhciBpc09iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1vYmplY3QnKTtcbnZhciBzZXRQcm90b3R5cGVPZiA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9vYmplY3Qtc2V0LXByb3RvdHlwZS1vZicpO1xuXG4vLyBtYWtlcyBzdWJjbGFzc2luZyB3b3JrIGNvcnJlY3QgZm9yIHdyYXBwZWQgYnVpbHQtaW5zXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uICgkdGhpcywgZHVtbXksIFdyYXBwZXIpIHtcbiAgdmFyIE5ld1RhcmdldCwgTmV3VGFyZ2V0UHJvdG90eXBlO1xuICBpZiAoXG4gICAgLy8gaXQgY2FuIHdvcmsgb25seSB3aXRoIG5hdGl2ZSBgc2V0UHJvdG90eXBlT2ZgXG4gICAgc2V0UHJvdG90eXBlT2YgJiZcbiAgICAvLyB3ZSBoYXZlbid0IGNvbXBsZXRlbHkgY29ycmVjdCBwcmUtRVM2IHdheSBmb3IgZ2V0dGluZyBgbmV3LnRhcmdldGAsIHNvIHVzZSB0aGlzXG4gICAgaXNDYWxsYWJsZShOZXdUYXJnZXQgPSBkdW1teS5jb25zdHJ1Y3RvcikgJiZcbiAgICBOZXdUYXJnZXQgIT09IFdyYXBwZXIgJiZcbiAgICBpc09iamVjdChOZXdUYXJnZXRQcm90b3R5cGUgPSBOZXdUYXJnZXQucHJvdG90eXBlKSAmJlxuICAgIE5ld1RhcmdldFByb3RvdHlwZSAhPT0gV3JhcHBlci5wcm90b3R5cGVcbiAgKSBzZXRQcm90b3R5cGVPZigkdGhpcywgTmV3VGFyZ2V0UHJvdG90eXBlKTtcbiAgcmV0dXJuICR0aGlzO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBnbG9iYWwgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZ2xvYmFsJyk7XG5cbm1vZHVsZS5leHBvcnRzID0gZ2xvYmFsO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIHVuY3VycnlUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLXVuY3VycnktdGhpcycpO1xudmFyIHJlcXVpcmVPYmplY3RDb2VyY2libGUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvcmVxdWlyZS1vYmplY3QtY29lcmNpYmxlJyk7XG52YXIgdG9TdHJpbmcgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdG8tc3RyaW5nJyk7XG52YXIgd2hpdGVzcGFjZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvd2hpdGVzcGFjZXMnKTtcblxudmFyIHJlcGxhY2UgPSB1bmN1cnJ5VGhpcygnJy5yZXBsYWNlKTtcbnZhciBsdHJpbSA9IFJlZ0V4cCgnXlsnICsgd2hpdGVzcGFjZXMgKyAnXSsnKTtcbnZhciBydHJpbSA9IFJlZ0V4cCgnKF58W14nICsgd2hpdGVzcGFjZXMgKyAnXSlbJyArIHdoaXRlc3BhY2VzICsgJ10rJCcpO1xuXG4vLyBgU3RyaW5nLnByb3RvdHlwZS57IHRyaW0sIHRyaW1TdGFydCwgdHJpbUVuZCwgdHJpbUxlZnQsIHRyaW1SaWdodCB9YCBtZXRob2RzIGltcGxlbWVudGF0aW9uXG52YXIgY3JlYXRlTWV0aG9kID0gZnVuY3Rpb24gKFRZUEUpIHtcbiAgcmV0dXJuIGZ1bmN0aW9uICgkdGhpcykge1xuICAgIHZhciBzdHJpbmcgPSB0b1N0cmluZyhyZXF1aXJlT2JqZWN0Q29lcmNpYmxlKCR0aGlzKSk7XG4gICAgaWYgKFRZUEUgJiAxKSBzdHJpbmcgPSByZXBsYWNlKHN0cmluZywgbHRyaW0sICcnKTtcbiAgICBpZiAoVFlQRSAmIDIpIHN0cmluZyA9IHJlcGxhY2Uoc3RyaW5nLCBydHJpbSwgJyQxJyk7XG4gICAgcmV0dXJuIHN0cmluZztcbiAgfTtcbn07XG5cbm1vZHVsZS5leHBvcnRzID0ge1xuICAvLyBgU3RyaW5nLnByb3RvdHlwZS57IHRyaW1MZWZ0LCB0cmltU3RhcnQgfWAgbWV0aG9kc1xuICAvLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXN0cmluZy5wcm90b3R5cGUudHJpbXN0YXJ0XG4gIHN0YXJ0OiBjcmVhdGVNZXRob2QoMSksXG4gIC8vIGBTdHJpbmcucHJvdG90eXBlLnsgdHJpbVJpZ2h0LCB0cmltRW5kIH1gIG1ldGhvZHNcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1zdHJpbmcucHJvdG90eXBlLnRyaW1lbmRcbiAgZW5kOiBjcmVhdGVNZXRob2QoMiksXG4gIC8vIGBTdHJpbmcucHJvdG90eXBlLnRyaW1gIG1ldGhvZFxuICAvLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXN0cmluZy5wcm90b3R5cGUudHJpbVxuICB0cmltOiBjcmVhdGVNZXRob2QoMylcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG5cbi8vIGB0aGlzTnVtYmVyVmFsdWVgIGFic3RyYWN0IG9wZXJhdGlvblxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy10aGlzbnVtYmVydmFsdWVcbm1vZHVsZS5leHBvcnRzID0gdW5jdXJyeVRoaXMoMS4wLnZhbHVlT2YpO1xuIiwiJ3VzZSBzdHJpY3QnO1xuLy8gYSBzdHJpbmcgb2YgYWxsIHZhbGlkIHVuaWNvZGUgd2hpdGVzcGFjZXNcbm1vZHVsZS5leHBvcnRzID0gJ1xcdTAwMDlcXHUwMDBBXFx1MDAwQlxcdTAwMENcXHUwMDBEXFx1MDAyMFxcdTAwQTBcXHUxNjgwXFx1MjAwMFxcdTIwMDFcXHUyMDAyJyArXG4gICdcXHUyMDAzXFx1MjAwNFxcdTIwMDVcXHUyMDA2XFx1MjAwN1xcdTIwMDhcXHUyMDA5XFx1MjAwQVxcdTIwMkZcXHUyMDVGXFx1MzAwMFxcdTIwMjhcXHUyMDI5XFx1RkVGRic7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgJCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9leHBvcnQnKTtcbnZhciBJU19QVVJFID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLXB1cmUnKTtcbnZhciBERVNDUklQVE9SUyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kZXNjcmlwdG9ycycpO1xudmFyIGdsb2JhbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwnKTtcbnZhciBwYXRoID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3BhdGgnKTtcbnZhciB1bmN1cnJ5VGhpcyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi11bmN1cnJ5LXRoaXMnKTtcbnZhciBpc0ZvcmNlZCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1mb3JjZWQnKTtcbnZhciBoYXNPd24gPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvaGFzLW93bi1wcm9wZXJ0eScpO1xudmFyIGluaGVyaXRJZlJlcXVpcmVkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2luaGVyaXQtaWYtcmVxdWlyZWQnKTtcbnZhciBpc1Byb3RvdHlwZU9mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL29iamVjdC1pcy1wcm90b3R5cGUtb2YnKTtcbnZhciBpc1N5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1zeW1ib2wnKTtcbnZhciB0b1ByaW1pdGl2ZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy90by1wcmltaXRpdmUnKTtcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xudmFyIGdldE93blByb3BlcnR5TmFtZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvb2JqZWN0LWdldC1vd24tcHJvcGVydHktbmFtZXMnKS5mO1xudmFyIGdldE93blByb3BlcnR5RGVzY3JpcHRvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9vYmplY3QtZ2V0LW93bi1wcm9wZXJ0eS1kZXNjcmlwdG9yJykuZjtcbnZhciBkZWZpbmVQcm9wZXJ0eSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9vYmplY3QtZGVmaW5lLXByb3BlcnR5JykuZjtcbnZhciB0aGlzTnVtYmVyVmFsdWUgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvdGhpcy1udW1iZXItdmFsdWUnKTtcbnZhciB0cmltID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3N0cmluZy10cmltJykudHJpbTtcblxudmFyIE5VTUJFUiA9ICdOdW1iZXInO1xudmFyIE5hdGl2ZU51bWJlciA9IGdsb2JhbFtOVU1CRVJdO1xudmFyIFB1cmVOdW1iZXJOYW1lc3BhY2UgPSBwYXRoW05VTUJFUl07XG52YXIgTnVtYmVyUHJvdG90eXBlID0gTmF0aXZlTnVtYmVyLnByb3RvdHlwZTtcbnZhciBUeXBlRXJyb3IgPSBnbG9iYWwuVHlwZUVycm9yO1xudmFyIHN0cmluZ1NsaWNlID0gdW5jdXJyeVRoaXMoJycuc2xpY2UpO1xudmFyIGNoYXJDb2RlQXQgPSB1bmN1cnJ5VGhpcygnJy5jaGFyQ29kZUF0KTtcblxuLy8gYFRvTnVtZXJpY2AgYWJzdHJhY3Qgb3BlcmF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLXRvbnVtZXJpY1xudmFyIHRvTnVtZXJpYyA9IGZ1bmN0aW9uICh2YWx1ZSkge1xuICB2YXIgcHJpbVZhbHVlID0gdG9QcmltaXRpdmUodmFsdWUsICdudW1iZXInKTtcbiAgcmV0dXJuIHR5cGVvZiBwcmltVmFsdWUgPT0gJ2JpZ2ludCcgPyBwcmltVmFsdWUgOiB0b051bWJlcihwcmltVmFsdWUpO1xufTtcblxuLy8gYFRvTnVtYmVyYCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtdG9udW1iZXJcbnZhciB0b051bWJlciA9IGZ1bmN0aW9uIChhcmd1bWVudCkge1xuICB2YXIgaXQgPSB0b1ByaW1pdGl2ZShhcmd1bWVudCwgJ251bWJlcicpO1xuICB2YXIgZmlyc3QsIHRoaXJkLCByYWRpeCwgbWF4Q29kZSwgZGlnaXRzLCBsZW5ndGgsIGluZGV4LCBjb2RlO1xuICBpZiAoaXNTeW1ib2woaXQpKSB0aHJvdyBuZXcgVHlwZUVycm9yKCdDYW5ub3QgY29udmVydCBhIFN5bWJvbCB2YWx1ZSB0byBhIG51bWJlcicpO1xuICBpZiAodHlwZW9mIGl0ID09ICdzdHJpbmcnICYmIGl0Lmxlbmd0aCA+IDIpIHtcbiAgICBpdCA9IHRyaW0oaXQpO1xuICAgIGZpcnN0ID0gY2hhckNvZGVBdChpdCwgMCk7XG4gICAgaWYgKGZpcnN0ID09PSA0MyB8fCBmaXJzdCA9PT0gNDUpIHtcbiAgICAgIHRoaXJkID0gY2hhckNvZGVBdChpdCwgMik7XG4gICAgICBpZiAodGhpcmQgPT09IDg4IHx8IHRoaXJkID09PSAxMjApIHJldHVybiBOYU47IC8vIE51bWJlcignKzB4MScpIHNob3VsZCBiZSBOYU4sIG9sZCBWOCBmaXhcbiAgICB9IGVsc2UgaWYgKGZpcnN0ID09PSA0OCkge1xuICAgICAgc3dpdGNoIChjaGFyQ29kZUF0KGl0LCAxKSkge1xuICAgICAgICAvLyBmYXN0IGVxdWFsIG9mIC9eMGJbMDFdKyQvaVxuICAgICAgICBjYXNlIDY2OlxuICAgICAgICBjYXNlIDk4OlxuICAgICAgICAgIHJhZGl4ID0gMjtcbiAgICAgICAgICBtYXhDb2RlID0gNDk7XG4gICAgICAgICAgYnJlYWs7XG4gICAgICAgIC8vIGZhc3QgZXF1YWwgb2YgL14wb1swLTddKyQvaVxuICAgICAgICBjYXNlIDc5OlxuICAgICAgICBjYXNlIDExMTpcbiAgICAgICAgICByYWRpeCA9IDg7XG4gICAgICAgICAgbWF4Q29kZSA9IDU1O1xuICAgICAgICAgIGJyZWFrO1xuICAgICAgICBkZWZhdWx0OlxuICAgICAgICAgIHJldHVybiAraXQ7XG4gICAgICB9XG4gICAgICBkaWdpdHMgPSBzdHJpbmdTbGljZShpdCwgMik7XG4gICAgICBsZW5ndGggPSBkaWdpdHMubGVuZ3RoO1xuICAgICAgZm9yIChpbmRleCA9IDA7IGluZGV4IDwgbGVuZ3RoOyBpbmRleCsrKSB7XG4gICAgICAgIGNvZGUgPSBjaGFyQ29kZUF0KGRpZ2l0cywgaW5kZXgpO1xuICAgICAgICAvLyBwYXJzZUludCBwYXJzZXMgYSBzdHJpbmcgdG8gYSBmaXJzdCB1bmF2YWlsYWJsZSBzeW1ib2xcbiAgICAgICAgLy8gYnV0IFRvTnVtYmVyIHNob3VsZCByZXR1cm4gTmFOIGlmIGEgc3RyaW5nIGNvbnRhaW5zIHVuYXZhaWxhYmxlIHN5bWJvbHNcbiAgICAgICAgaWYgKGNvZGUgPCA0OCB8fCBjb2RlID4gbWF4Q29kZSkgcmV0dXJuIE5hTjtcbiAgICAgIH0gcmV0dXJuIHBhcnNlSW50KGRpZ2l0cywgcmFkaXgpO1xuICAgIH1cbiAgfSByZXR1cm4gK2l0O1xufTtcblxudmFyIEZPUkNFRCA9IGlzRm9yY2VkKE5VTUJFUiwgIU5hdGl2ZU51bWJlcignIDBvMScpIHx8ICFOYXRpdmVOdW1iZXIoJzBiMScpIHx8IE5hdGl2ZU51bWJlcignKzB4MScpKTtcblxudmFyIGNhbGxlZFdpdGhOZXcgPSBmdW5jdGlvbiAoZHVtbXkpIHtcbiAgLy8gaW5jbHVkZXMgY2hlY2sgb24gMS4uY29uc3RydWN0b3IoZm9vKSBjYXNlXG4gIHJldHVybiBpc1Byb3RvdHlwZU9mKE51bWJlclByb3RvdHlwZSwgZHVtbXkpICYmIGZhaWxzKGZ1bmN0aW9uICgpIHsgdGhpc051bWJlclZhbHVlKGR1bW15KTsgfSk7XG59O1xuXG4vLyBgTnVtYmVyYCBjb25zdHJ1Y3RvclxuLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1udW1iZXItY29uc3RydWN0b3JcbnZhciBOdW1iZXJXcmFwcGVyID0gZnVuY3Rpb24gTnVtYmVyKHZhbHVlKSB7XG4gIHZhciBuID0gYXJndW1lbnRzLmxlbmd0aCA8IDEgPyAwIDogTmF0aXZlTnVtYmVyKHRvTnVtZXJpYyh2YWx1ZSkpO1xuICByZXR1cm4gY2FsbGVkV2l0aE5ldyh0aGlzKSA/IGluaGVyaXRJZlJlcXVpcmVkKE9iamVjdChuKSwgdGhpcywgTnVtYmVyV3JhcHBlcikgOiBuO1xufTtcblxuTnVtYmVyV3JhcHBlci5wcm90b3R5cGUgPSBOdW1iZXJQcm90b3R5cGU7XG5pZiAoRk9SQ0VEICYmICFJU19QVVJFKSBOdW1iZXJQcm90b3R5cGUuY29uc3RydWN0b3IgPSBOdW1iZXJXcmFwcGVyO1xuXG4kKHsgZ2xvYmFsOiB0cnVlLCBjb25zdHJ1Y3RvcjogdHJ1ZSwgd3JhcDogdHJ1ZSwgZm9yY2VkOiBGT1JDRUQgfSwge1xuICBOdW1iZXI6IE51bWJlcldyYXBwZXJcbn0pO1xuXG4vLyBVc2UgYGludGVybmFsL2NvcHktY29uc3RydWN0b3ItcHJvcGVydGllc2AgaGVscGVyIGluIGBjb3JlLWpzQDRgXG52YXIgY29weUNvbnN0cnVjdG9yUHJvcGVydGllcyA9IGZ1bmN0aW9uICh0YXJnZXQsIHNvdXJjZSkge1xuICBmb3IgKHZhciBrZXlzID0gREVTQ1JJUFRPUlMgPyBnZXRPd25Qcm9wZXJ0eU5hbWVzKHNvdXJjZSkgOiAoXG4gICAgLy8gRVMzOlxuICAgICdNQVhfVkFMVUUsTUlOX1ZBTFVFLE5hTixORUdBVElWRV9JTkZJTklUWSxQT1NJVElWRV9JTkZJTklUWSwnICtcbiAgICAvLyBFUzIwMTUgKGluIGNhc2UsIGlmIG1vZHVsZXMgd2l0aCBFUzIwMTUgTnVtYmVyIHN0YXRpY3MgcmVxdWlyZWQgYmVmb3JlKTpcbiAgICAnRVBTSUxPTixNQVhfU0FGRV9JTlRFR0VSLE1JTl9TQUZFX0lOVEVHRVIsaXNGaW5pdGUsaXNJbnRlZ2VyLGlzTmFOLGlzU2FmZUludGVnZXIscGFyc2VGbG9hdCxwYXJzZUludCwnICtcbiAgICAvLyBFU05leHRcbiAgICAnZnJvbVN0cmluZyxyYW5nZSdcbiAgKS5zcGxpdCgnLCcpLCBqID0gMCwga2V5OyBrZXlzLmxlbmd0aCA+IGo7IGorKykge1xuICAgIGlmIChoYXNPd24oc291cmNlLCBrZXkgPSBrZXlzW2pdKSAmJiAhaGFzT3duKHRhcmdldCwga2V5KSkge1xuICAgICAgZGVmaW5lUHJvcGVydHkodGFyZ2V0LCBrZXksIGdldE93blByb3BlcnR5RGVzY3JpcHRvcihzb3VyY2UsIGtleSkpO1xuICAgIH1cbiAgfVxufTtcblxuaWYgKElTX1BVUkUgJiYgUHVyZU51bWJlck5hbWVzcGFjZSkgY29weUNvbnN0cnVjdG9yUHJvcGVydGllcyhwYXRoW05VTUJFUl0sIFB1cmVOdW1iZXJOYW1lc3BhY2UpO1xuaWYgKEZPUkNFRCB8fCBJU19QVVJFKSBjb3B5Q29uc3RydWN0b3JQcm9wZXJ0aWVzKHBhdGhbTlVNQkVSXSwgTmF0aXZlTnVtYmVyKTtcbiJdLCJuYW1lcyI6WyJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJhZGQiLCJxdWVyeVNlbGVjdG9yIiwic3ViIiwicXVhbnRpdHkiLCJidXkiLCJmYXZvcml0ZSIsImlubmVySFRNTCIsIk51bWJlciIsImUiLCJmb3JtIiwiRm9ybURhdGEiLCJhcHBlbmQiLCJ2YWx1ZSIsImZldGNoIiwibWV0aG9kIiwiYm9keSIsInRoZW4iLCJyZXNwb25zZSIsInN0YXR1cyIsIndpbmRvdyIsImxvY2F0aW9uIiwicmVsb2FkIiwicmVwbGFjZSIsImlkIiwiY29uc29sZSIsImxvZyIsImNsYXNzTGlzdCIsImNvbnRhaW5zIiwicmVtb3ZlIiwiaHJlZiJdLCJzb3VyY2VSb290IjoiIn0=