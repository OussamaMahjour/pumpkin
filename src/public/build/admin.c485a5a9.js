"use strict";
(self["webpackChunkPumpkin"] = self["webpackChunkPumpkin"] || []).push([["admin"],{

/***/ "./resources/js/admin/index.js":
/*!*************************************!*\
  !*** ./resources/js/admin/index.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _css_admin_index_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../css/admin/index.scss */ "./resources/css/admin/index.scss");
/* harmony import */ var _node_modules_bootstrap_dist_css_bootstrap_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../node_modules/bootstrap/dist/css/bootstrap.css */ "./node_modules/bootstrap/dist/css/bootstrap.css");







__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
document.addEventListener("DOMContentLoaded", function (event) {
  var active_item = document.querySelector(".active");
  var nav_items = document.querySelectorAll(".nav-link");
  var addCustomer = document.querySelector(".addCustomer");
  var editCustomer = document.querySelectorAll(".editCustomer");
  var banCustomer = document.querySelectorAll(".banCustomer");
  var popContainer = document.querySelector(".popUp-container");
  var popUp = document.querySelectorAll(".popUp");
  var addProduct = document.querySelector(".addProduct");
  var editProduct = document.querySelectorAll('.editProduct');
  var removeProduct = document.querySelectorAll('.removeProduct');
  active_item.addEventListener('click', function (e) {});
  nav_items.forEach(function (element) {
    element.addEventListener('click', function (e) {
      element.classList.add('active');
      active_item.classList.remove('active');
      active_item = element;
      document.querySelector(".active-content").classList.remove("active-content");
      document.querySelector("." + element.name).classList.add("active-content");
    });
  });
  addCustomer.addEventListener('click', function (e) {
    popContainer.style.display = "flex";
    popUp.forEach(function (element) {
      element.style.display = "none";
    });
    document.querySelector(".addCustomer-popUp").style.display = "block";
  });
  popContainer.addEventListener('click', function (e) {
    var contain = false;
    popUp.forEach(function (element) {
      if (element.contains(e.target) || element == e.target) {
        contain = true;
      }
    });
    if (!contain) {
      popContainer.style.display = "none";
    }
  });
  editCustomer.forEach(function (element) {
    element.addEventListener('click', function (e) {
      popUp.forEach(function (element) {
        element.style.display = "none";
      });
      popContainer.style.display = "flex";
      document.querySelector(".editCustomer-popUp").style.display = "block";
      document.querySelector(".editCustomer-popUp option[value='" + element.id + "']").selected = true;
    });
  });
  addProduct.addEventListener('click', function (e) {
    popContainer.style.display = "flex";
    popUp.forEach(function (element) {
      element.style.display = "none";
    });
    document.querySelector(".addProduct-popUp").style.display = "block";
  });
  editProduct.forEach(function (element) {
    element.addEventListener('click', function (e) {
      popUp.forEach(function (element) {
        element.style.display = "none";
      });
      popContainer.style.display = "flex";
      document.querySelector(".editProduct-popUp").style.display = "block";
      document.querySelector(".editProduct-popUp option[value='" + element.id + "']").selected = true;
    });
  });
  removeProduct.forEach(function (element) {
    element.addEventListener('click', function (e) {
      var form = new FormData();
      form.append('id', element.id);
      fetch('/removeProduct', {
        method: "POST",
        body: form
      }).then(function (response) {
        return window.location.reload();
      });
    });
  });
  banCustomer.forEach(function (element) {
    element.addEventListener('click', function (e) {
      var form = new FormData();
      form.append('id', element.id);
      fetch('/removeUser', {
        method: "POST",
        body: form
      }).then(function (response) {
        return window.location.reload();
      });
    });
  });
});

/***/ }),

/***/ "./node_modules/bootstrap/dist/css/bootstrap.css":
/*!*******************************************************!*\
  !*** ./node_modules/bootstrap/dist/css/bootstrap.css ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/admin/index.scss":
/*!****************************************!*\
  !*** ./resources/css/admin/index.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/core-js/internals/array-for-each.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/internals/array-for-each.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var $forEach = (__webpack_require__(/*! ../internals/array-iteration */ "./node_modules/core-js/internals/array-iteration.js").forEach);
var arrayMethodIsStrict = __webpack_require__(/*! ../internals/array-method-is-strict */ "./node_modules/core-js/internals/array-method-is-strict.js");

var STRICT_METHOD = arrayMethodIsStrict('forEach');

// `Array.prototype.forEach` method implementation
// https://tc39.es/ecma262/#sec-array.prototype.foreach
module.exports = !STRICT_METHOD ? function forEach(callbackfn /* , thisArg */) {
  return $forEach(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
// eslint-disable-next-line es/no-array-prototype-foreach -- safe
} : [].forEach;


/***/ }),

/***/ "./node_modules/core-js/internals/array-iteration.js":
/*!***********************************************************!*\
  !*** ./node_modules/core-js/internals/array-iteration.js ***!
  \***********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var bind = __webpack_require__(/*! ../internals/function-bind-context */ "./node_modules/core-js/internals/function-bind-context.js");
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var IndexedObject = __webpack_require__(/*! ../internals/indexed-object */ "./node_modules/core-js/internals/indexed-object.js");
var toObject = __webpack_require__(/*! ../internals/to-object */ "./node_modules/core-js/internals/to-object.js");
var lengthOfArrayLike = __webpack_require__(/*! ../internals/length-of-array-like */ "./node_modules/core-js/internals/length-of-array-like.js");
var arraySpeciesCreate = __webpack_require__(/*! ../internals/array-species-create */ "./node_modules/core-js/internals/array-species-create.js");

var push = uncurryThis([].push);

// `Array.prototype.{ forEach, map, filter, some, every, find, findIndex, filterReject }` methods implementation
var createMethod = function (TYPE) {
  var IS_MAP = TYPE === 1;
  var IS_FILTER = TYPE === 2;
  var IS_SOME = TYPE === 3;
  var IS_EVERY = TYPE === 4;
  var IS_FIND_INDEX = TYPE === 6;
  var IS_FILTER_REJECT = TYPE === 7;
  var NO_HOLES = TYPE === 5 || IS_FIND_INDEX;
  return function ($this, callbackfn, that, specificCreate) {
    var O = toObject($this);
    var self = IndexedObject(O);
    var length = lengthOfArrayLike(self);
    var boundFunction = bind(callbackfn, that);
    var index = 0;
    var create = specificCreate || arraySpeciesCreate;
    var target = IS_MAP ? create($this, length) : IS_FILTER || IS_FILTER_REJECT ? create($this, 0) : undefined;
    var value, result;
    for (;length > index; index++) if (NO_HOLES || index in self) {
      value = self[index];
      result = boundFunction(value, index, O);
      if (TYPE) {
        if (IS_MAP) target[index] = result; // map
        else if (result) switch (TYPE) {
          case 3: return true;              // some
          case 5: return value;             // find
          case 6: return index;             // findIndex
          case 2: push(target, value);      // filter
        } else switch (TYPE) {
          case 4: return false;             // every
          case 7: push(target, value);      // filterReject
        }
      }
    }
    return IS_FIND_INDEX ? -1 : IS_SOME || IS_EVERY ? IS_EVERY : target;
  };
};

module.exports = {
  // `Array.prototype.forEach` method
  // https://tc39.es/ecma262/#sec-array.prototype.foreach
  forEach: createMethod(0),
  // `Array.prototype.map` method
  // https://tc39.es/ecma262/#sec-array.prototype.map
  map: createMethod(1),
  // `Array.prototype.filter` method
  // https://tc39.es/ecma262/#sec-array.prototype.filter
  filter: createMethod(2),
  // `Array.prototype.some` method
  // https://tc39.es/ecma262/#sec-array.prototype.some
  some: createMethod(3),
  // `Array.prototype.every` method
  // https://tc39.es/ecma262/#sec-array.prototype.every
  every: createMethod(4),
  // `Array.prototype.find` method
  // https://tc39.es/ecma262/#sec-array.prototype.find
  find: createMethod(5),
  // `Array.prototype.findIndex` method
  // https://tc39.es/ecma262/#sec-array.prototype.findIndex
  findIndex: createMethod(6),
  // `Array.prototype.filterReject` method
  // https://github.com/tc39/proposal-array-filtering
  filterReject: createMethod(7)
};


/***/ }),

/***/ "./node_modules/core-js/internals/array-method-is-strict.js":
/*!******************************************************************!*\
  !*** ./node_modules/core-js/internals/array-method-is-strict.js ***!
  \******************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var fails = __webpack_require__(/*! ../internals/fails */ "./node_modules/core-js/internals/fails.js");

module.exports = function (METHOD_NAME, argument) {
  var method = [][METHOD_NAME];
  return !!method && fails(function () {
    // eslint-disable-next-line no-useless-call -- required for testing
    method.call(null, argument || function () { return 1; }, 1);
  });
};


/***/ }),

/***/ "./node_modules/core-js/internals/array-species-constructor.js":
/*!*********************************************************************!*\
  !*** ./node_modules/core-js/internals/array-species-constructor.js ***!
  \*********************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var isArray = __webpack_require__(/*! ../internals/is-array */ "./node_modules/core-js/internals/is-array.js");
var isConstructor = __webpack_require__(/*! ../internals/is-constructor */ "./node_modules/core-js/internals/is-constructor.js");
var isObject = __webpack_require__(/*! ../internals/is-object */ "./node_modules/core-js/internals/is-object.js");
var wellKnownSymbol = __webpack_require__(/*! ../internals/well-known-symbol */ "./node_modules/core-js/internals/well-known-symbol.js");

var SPECIES = wellKnownSymbol('species');
var $Array = Array;

// a part of `ArraySpeciesCreate` abstract operation
// https://tc39.es/ecma262/#sec-arrayspeciescreate
module.exports = function (originalArray) {
  var C;
  if (isArray(originalArray)) {
    C = originalArray.constructor;
    // cross-realm fallback
    if (isConstructor(C) && (C === $Array || isArray(C.prototype))) C = undefined;
    else if (isObject(C)) {
      C = C[SPECIES];
      if (C === null) C = undefined;
    }
  } return C === undefined ? $Array : C;
};


/***/ }),

/***/ "./node_modules/core-js/internals/array-species-create.js":
/*!****************************************************************!*\
  !*** ./node_modules/core-js/internals/array-species-create.js ***!
  \****************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var arraySpeciesConstructor = __webpack_require__(/*! ../internals/array-species-constructor */ "./node_modules/core-js/internals/array-species-constructor.js");

// `ArraySpeciesCreate` abstract operation
// https://tc39.es/ecma262/#sec-arrayspeciescreate
module.exports = function (originalArray, length) {
  return new (arraySpeciesConstructor(originalArray))(length === 0 ? 0 : length);
};


/***/ }),

/***/ "./node_modules/core-js/internals/dom-iterables.js":
/*!*********************************************************!*\
  !*** ./node_modules/core-js/internals/dom-iterables.js ***!
  \*********************************************************/
/***/ ((module) => {


// iterable DOM collections
// flag - `iterable` interface - 'entries', 'keys', 'values', 'forEach' methods
module.exports = {
  CSSRuleList: 0,
  CSSStyleDeclaration: 0,
  CSSValueList: 0,
  ClientRectList: 0,
  DOMRectList: 0,
  DOMStringList: 0,
  DOMTokenList: 1,
  DataTransferItemList: 0,
  FileList: 0,
  HTMLAllCollection: 0,
  HTMLCollection: 0,
  HTMLFormElement: 0,
  HTMLSelectElement: 0,
  MediaList: 0,
  MimeTypeArray: 0,
  NamedNodeMap: 0,
  NodeList: 1,
  PaintRequestList: 0,
  Plugin: 0,
  PluginArray: 0,
  SVGLengthList: 0,
  SVGNumberList: 0,
  SVGPathSegList: 0,
  SVGPointList: 0,
  SVGStringList: 0,
  SVGTransformList: 0,
  SourceBufferList: 0,
  StyleSheetList: 0,
  TextTrackCueList: 0,
  TextTrackList: 0,
  TouchList: 0
};


/***/ }),

/***/ "./node_modules/core-js/internals/dom-token-list-prototype.js":
/*!********************************************************************!*\
  !*** ./node_modules/core-js/internals/dom-token-list-prototype.js ***!
  \********************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


// in old WebKit versions, `element.classList` is not an instance of global `DOMTokenList`
var documentCreateElement = __webpack_require__(/*! ../internals/document-create-element */ "./node_modules/core-js/internals/document-create-element.js");

var classList = documentCreateElement('span').classList;
var DOMTokenListPrototype = classList && classList.constructor && classList.constructor.prototype;

module.exports = DOMTokenListPrototype === Object.prototype ? undefined : DOMTokenListPrototype;


/***/ }),

/***/ "./node_modules/core-js/internals/is-array.js":
/*!****************************************************!*\
  !*** ./node_modules/core-js/internals/is-array.js ***!
  \****************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {


var classof = __webpack_require__(/*! ../internals/classof-raw */ "./node_modules/core-js/internals/classof-raw.js");

// `IsArray` abstract operation
// https://tc39.es/ecma262/#sec-isarray
// eslint-disable-next-line es/no-array-isarray -- safe
module.exports = Array.isArray || function isArray(argument) {
  return classof(argument) === 'Array';
};


/***/ }),

/***/ "./node_modules/core-js/modules/es.array.for-each.js":
/*!***********************************************************!*\
  !*** ./node_modules/core-js/modules/es.array.for-each.js ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var $ = __webpack_require__(/*! ../internals/export */ "./node_modules/core-js/internals/export.js");
var forEach = __webpack_require__(/*! ../internals/array-for-each */ "./node_modules/core-js/internals/array-for-each.js");

// `Array.prototype.forEach` method
// https://tc39.es/ecma262/#sec-array.prototype.foreach
// eslint-disable-next-line es/no-array-prototype-foreach -- safe
$({ target: 'Array', proto: true, forced: [].forEach !== forEach }, {
  forEach: forEach
});


/***/ }),

/***/ "./node_modules/core-js/modules/es.function.name.js":
/*!**********************************************************!*\
  !*** ./node_modules/core-js/modules/es.function.name.js ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var DESCRIPTORS = __webpack_require__(/*! ../internals/descriptors */ "./node_modules/core-js/internals/descriptors.js");
var FUNCTION_NAME_EXISTS = (__webpack_require__(/*! ../internals/function-name */ "./node_modules/core-js/internals/function-name.js").EXISTS);
var uncurryThis = __webpack_require__(/*! ../internals/function-uncurry-this */ "./node_modules/core-js/internals/function-uncurry-this.js");
var defineBuiltInAccessor = __webpack_require__(/*! ../internals/define-built-in-accessor */ "./node_modules/core-js/internals/define-built-in-accessor.js");

var FunctionPrototype = Function.prototype;
var functionToString = uncurryThis(FunctionPrototype.toString);
var nameRE = /function\b(?:\s|\/\*[\S\s]*?\*\/|\/\/[^\n\r]*[\n\r]+)*([^\s(/]*)/;
var regExpExec = uncurryThis(nameRE.exec);
var NAME = 'name';

// Function instances `.name` property
// https://tc39.es/ecma262/#sec-function-instances-name
if (DESCRIPTORS && !FUNCTION_NAME_EXISTS) {
  defineBuiltInAccessor(FunctionPrototype, NAME, {
    configurable: true,
    get: function () {
      try {
        return regExpExec(nameRE, functionToString(this))[1];
      } catch (error) {
        return '';
      }
    }
  });
}


/***/ }),

/***/ "./node_modules/core-js/modules/web.dom-collections.for-each.js":
/*!**********************************************************************!*\
  !*** ./node_modules/core-js/modules/web.dom-collections.for-each.js ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {


var global = __webpack_require__(/*! ../internals/global */ "./node_modules/core-js/internals/global.js");
var DOMIterables = __webpack_require__(/*! ../internals/dom-iterables */ "./node_modules/core-js/internals/dom-iterables.js");
var DOMTokenListPrototype = __webpack_require__(/*! ../internals/dom-token-list-prototype */ "./node_modules/core-js/internals/dom-token-list-prototype.js");
var forEach = __webpack_require__(/*! ../internals/array-for-each */ "./node_modules/core-js/internals/array-for-each.js");
var createNonEnumerableProperty = __webpack_require__(/*! ../internals/create-non-enumerable-property */ "./node_modules/core-js/internals/create-non-enumerable-property.js");

var handlePrototype = function (CollectionPrototype) {
  // some Chrome versions have non-configurable methods on DOMTokenList
  if (CollectionPrototype && CollectionPrototype.forEach !== forEach) try {
    createNonEnumerableProperty(CollectionPrototype, 'forEach', forEach);
  } catch (error) {
    CollectionPrototype.forEach = forEach;
  }
};

for (var COLLECTION_NAME in DOMIterables) {
  if (DOMIterables[COLLECTION_NAME]) {
    handlePrototype(global[COLLECTION_NAME] && global[COLLECTION_NAME].prototype);
  }
}

handlePrototype(DOMTokenListPrototype);


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_popperjs_core_lib_index_js","vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_function-appl-0fa2a2","vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js","vendors-node_modules_core-js_modules_es_promise_js","vendors-node_modules_bootstrap_dist_css_bootstrap_css"], () => (__webpack_exec__("./resources/js/admin/index.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QU8sQ0FBQyx1RUFBcUI7QUFDckMsY0FBYyxtQkFBTyxDQUFDLHVGQUE2Qjs7QUFFbkQ7QUFDQTtBQUNBO0FBQ0EsSUFBSSw4REFBOEQ7QUFDbEU7QUFDQSxDQUFDOzs7Ozs7Ozs7OztBQ1RZO0FBQ2Isa0JBQWtCLG1CQUFPLENBQUMsaUZBQTBCO0FBQ3BELDJCQUEyQixtSEFBNEM7QUFDdkUsa0JBQWtCLG1CQUFPLENBQUMscUdBQW9DO0FBQzlELDRCQUE0QixtQkFBTyxDQUFDLDJHQUF1Qzs7QUFFM0U7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsUUFBUTtBQUNSO0FBQ0E7QUFDQTtBQUNBLEdBQUc7QUFDSDs7Ozs7Ozs7Ozs7QUN6QmE7QUFDYixhQUFhLG1CQUFPLENBQUMsdUVBQXFCO0FBQzFDLG1CQUFtQixtQkFBTyxDQUFDLHFGQUE0QjtBQUN2RCw0QkFBNEIsbUJBQU8sQ0FBQywyR0FBdUM7QUFDM0UsY0FBYyxtQkFBTyxDQUFDLHVGQUE2QjtBQUNuRCxrQ0FBa0MsbUJBQU8sQ0FBQyx1SEFBNkM7O0FBRXZGO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsSUFBSTtBQUNKO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vUHVtcGtpbi8uL3Jlc291cmNlcy9qcy9hZG1pbi9pbmRleC5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9kaXN0L2Nzcy9ib290c3RyYXAuY3NzPzNiYjkiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL3Jlc291cmNlcy9jc3MvYWRtaW4vaW5kZXguc2Nzcz81ZDU2Iiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktZm9yLWVhY2guanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9hcnJheS1pdGVyYXRpb24uanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9hcnJheS1tZXRob2QtaXMtc3RyaWN0LmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktc3BlY2llcy1jb25zdHJ1Y3Rvci5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2FycmF5LXNwZWNpZXMtY3JlYXRlLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvZG9tLWl0ZXJhYmxlcy5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2RvbS10b2tlbi1saXN0LXByb3RvdHlwZS5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2lzLWFycmF5LmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmFycmF5LmZvci1lYWNoLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL2VzLmZ1bmN0aW9uLm5hbWUuanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL21vZHVsZXMvd2ViLmRvbS1jb2xsZWN0aW9ucy5mb3ItZWFjaC5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgXCIuLi8uLi9jc3MvYWRtaW4vaW5kZXguc2Nzc1wiO1xuaW1wb3J0IFwiLi4vLi4vLi4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9kaXN0L2Nzcy9ib290c3RyYXAuY3NzXCJcbnJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oZXZlbnQpIHtcblxuICAgIGxldCBhY3RpdmVfaXRlbSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYWN0aXZlXCIpO1xuICAgIGxldCBuYXZfaXRlbXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLm5hdi1saW5rXCIpO1xuICAgIGxldCBhZGRDdXN0b21lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYWRkQ3VzdG9tZXJcIik7XG4gICAgbGV0IGVkaXRDdXN0b21lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuZWRpdEN1c3RvbWVyXCIpO1xuICAgIGxldCBiYW5DdXN0b21lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuYmFuQ3VzdG9tZXJcIik7XG4gICAgbGV0IHBvcENvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucG9wVXAtY29udGFpbmVyXCIpO1xuICAgIGxldCBwb3BVcCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIucG9wVXBcIik7XG4gICAgbGV0IGFkZFByb2R1Y3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmFkZFByb2R1Y3RcIik7XG4gICAgbGV0IGVkaXRQcm9kdWN0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmVkaXRQcm9kdWN0Jyk7XG4gICAgbGV0IHJlbW92ZVByb2R1Y3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcucmVtb3ZlUHJvZHVjdCcpO1xuICAgXG4gICAgYWN0aXZlX2l0ZW0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLGZ1bmN0aW9uKGUpe1xuICAgICAgICBcbiAgICB9KVxuICAgIG5hdl9pdGVtcy5mb3JFYWNoKGVsZW1lbnQgPT4ge1xuICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbihlKXtcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICAgICAgICAgIGFjdGl2ZV9pdGVtLmNsYXNzTGlzdC5yZW1vdmUoJ2FjdGl2ZScpO1xuICAgICAgICAgICAgYWN0aXZlX2l0ZW0gPSBlbGVtZW50O1xuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5hY3RpdmUtY29udGVudFwiKS5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlLWNvbnRlbnRcIik7XG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLlwiK2VsZW1lbnQubmFtZSkuY2xhc3NMaXN0LmFkZChcImFjdGl2ZS1jb250ZW50XCIpO1xuICAgICAgICAgICBcbiAgICAgICAgfSlcbiAgICBcbiAgICB9KTtcbiAgICBhZGRDdXN0b21lci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgIHBvcENvbnRhaW5lci5zdHlsZS5kaXNwbGF5ID0gXCJmbGV4XCI7XG4gICAgICAgIHBvcFVwLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCl7XG4gICAgICAgICAgICBlbGVtZW50LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjsgXG4gICAgICAgIH0pXG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYWRkQ3VzdG9tZXItcG9wVXBcIikuc3R5bGUuZGlzcGxheT0gXCJibG9ja1wiO1xuICAgIH0pXG4gICAgcG9wQ29udGFpbmVyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbihlKXtcbiAgICAgICAgdmFyIGNvbnRhaW4gPSBmYWxzZTtcbiAgICAgICAgcG9wVXAuZm9yRWFjaChmdW5jdGlvbihlbGVtZW50KXtcbiAgICAgICAgICAgIGlmKGVsZW1lbnQuY29udGFpbnMoZS50YXJnZXQpIHx8IGVsZW1lbnQgPT0gZS50YXJnZXQpe1xuICAgICAgICAgICAgICAgIGNvbnRhaW4gPSB0cnVlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgICAgICBpZighY29udGFpbil7XG4gICAgICAgICAgICBwb3BDb250YWluZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiXG4gICAgICAgIH1cbiAgICB9KVxuICAgIGVkaXRDdXN0b21lci5mb3JFYWNoKGZ1bmN0aW9uKGVsZW1lbnQpe1xuICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbihlKXtcbiAgICAgICAgICAgIHBvcFVwLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCl7XG4gICAgICAgICAgICAgICAgZWxlbWVudC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7IFxuICAgICAgICAgICAgfSlcbiAgICAgICAgcG9wQ29udGFpbmVyLnN0eWxlLmRpc3BsYXkgPSBcImZsZXhcIjtcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5lZGl0Q3VzdG9tZXItcG9wVXBcIikuc3R5bGUuZGlzcGxheT0gXCJibG9ja1wiO1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmVkaXRDdXN0b21lci1wb3BVcCBvcHRpb25bdmFsdWU9J1wiK2VsZW1lbnQuaWQrXCInXVwiKS5zZWxlY3RlZD10cnVlO1xuICAgICAgICB9KVxuXG4gICAgfSk7XG4gICAgYWRkUHJvZHVjdC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgIHBvcENvbnRhaW5lci5zdHlsZS5kaXNwbGF5ID0gXCJmbGV4XCI7XG4gICAgICAgIHBvcFVwLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCl7XG4gICAgICAgICAgICBlbGVtZW50LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjsgXG4gICAgICAgIH0pXG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYWRkUHJvZHVjdC1wb3BVcFwiKS5zdHlsZS5kaXNwbGF5PSBcImJsb2NrXCI7XG4gICAgfSlcbiAgICBlZGl0UHJvZHVjdC5mb3JFYWNoKGZ1bmN0aW9uKGVsZW1lbnQpe1xuICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbihlKXtcbiAgICAgICAgICAgIHBvcFVwLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCl7XG4gICAgICAgICAgICAgICAgZWxlbWVudC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7IFxuICAgICAgICAgICAgfSlcbiAgICAgICAgcG9wQ29udGFpbmVyLnN0eWxlLmRpc3BsYXkgPSBcImZsZXhcIjtcbiAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5lZGl0UHJvZHVjdC1wb3BVcFwiKS5zdHlsZS5kaXNwbGF5PSBcImJsb2NrXCI7XG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZWRpdFByb2R1Y3QtcG9wVXAgb3B0aW9uW3ZhbHVlPSdcIitlbGVtZW50LmlkK1wiJ11cIikuc2VsZWN0ZWQ9dHJ1ZTtcbiAgICAgICAgfSlcblxuICAgIH0pO1xuICAgIHJlbW92ZVByb2R1Y3QuZm9yRWFjaChmdW5jdGlvbihlbGVtZW50KXtcbiAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgICAgICB2YXIgZm9ybSA9IG5ldyBGb3JtRGF0YSgpO1xuICAgICAgICAgICAgZm9ybS5hcHBlbmQoJ2lkJyxlbGVtZW50LmlkKTtcbiAgICAgICAgICAgIGZldGNoKCcvcmVtb3ZlUHJvZHVjdCcse1xuICAgICAgICAgICAgICAgIG1ldGhvZDogXCJQT1NUXCIsXG4gICAgICAgICAgICAgICAgYm9keTogZm9ybVxuICAgICAgICAgICAgfSkudGhlbihcbiAgICAgICAgICAgICAgICByZXNwb25zZT0+XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZWxvYWQoKVxuXG4gICAgICAgICAgICApXG4gICAgICAgICAgIFxuICAgICAgICB9KVxuICAgIH0pXG4gICAgYmFuQ3VzdG9tZXIuZm9yRWFjaChmdW5jdGlvbihlbGVtZW50KXtcbiAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgICAgICB2YXIgZm9ybSA9IG5ldyBGb3JtRGF0YSgpO1xuICAgICAgICAgICAgZm9ybS5hcHBlbmQoJ2lkJyxlbGVtZW50LmlkKVxuICAgICAgICAgICAgZmV0Y2goJy9yZW1vdmVVc2VyJyx7XG4gICAgICAgICAgICAgICAgbWV0aG9kOiBcIlBPU1RcIixcbiAgICAgICAgICAgICAgICBib2R5OiBmb3JtXG4gICAgICAgICAgICB9KS50aGVuKFxuICAgICAgICAgICAgICAgIHJlc3BvbnNlPT53aW5kb3cubG9jYXRpb24ucmVsb2FkKClcbiAgICAgICAgICAgICk7XG4gICAgICAgIH0pXG4gICAgfSlcbiAgICBcbiAgICB9KTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIndXNlIHN0cmljdCc7XG52YXIgJGZvckVhY2ggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktaXRlcmF0aW9uJykuZm9yRWFjaDtcbnZhciBhcnJheU1ldGhvZElzU3RyaWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LW1ldGhvZC1pcy1zdHJpY3QnKTtcblxudmFyIFNUUklDVF9NRVRIT0QgPSBhcnJheU1ldGhvZElzU3RyaWN0KCdmb3JFYWNoJyk7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUuZm9yRWFjaGAgbWV0aG9kIGltcGxlbWVudGF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5mb3JlYWNoXG5tb2R1bGUuZXhwb3J0cyA9ICFTVFJJQ1RfTUVUSE9EID8gZnVuY3Rpb24gZm9yRWFjaChjYWxsYmFja2ZuIC8qICwgdGhpc0FyZyAqLykge1xuICByZXR1cm4gJGZvckVhY2godGhpcywgY2FsbGJhY2tmbiwgYXJndW1lbnRzLmxlbmd0aCA+IDEgPyBhcmd1bWVudHNbMV0gOiB1bmRlZmluZWQpO1xuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLWFycmF5LXByb3RvdHlwZS1mb3JlYWNoIC0tIHNhZmVcbn0gOiBbXS5mb3JFYWNoO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIGJpbmQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tYmluZC1jb250ZXh0Jyk7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG52YXIgSW5kZXhlZE9iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pbmRleGVkLW9iamVjdCcpO1xudmFyIHRvT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLW9iamVjdCcpO1xudmFyIGxlbmd0aE9mQXJyYXlMaWtlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2xlbmd0aC1vZi1hcnJheS1saWtlJyk7XG52YXIgYXJyYXlTcGVjaWVzQ3JlYXRlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LXNwZWNpZXMtY3JlYXRlJyk7XG5cbnZhciBwdXNoID0gdW5jdXJyeVRoaXMoW10ucHVzaCk7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUueyBmb3JFYWNoLCBtYXAsIGZpbHRlciwgc29tZSwgZXZlcnksIGZpbmQsIGZpbmRJbmRleCwgZmlsdGVyUmVqZWN0IH1gIG1ldGhvZHMgaW1wbGVtZW50YXRpb25cbnZhciBjcmVhdGVNZXRob2QgPSBmdW5jdGlvbiAoVFlQRSkge1xuICB2YXIgSVNfTUFQID0gVFlQRSA9PT0gMTtcbiAgdmFyIElTX0ZJTFRFUiA9IFRZUEUgPT09IDI7XG4gIHZhciBJU19TT01FID0gVFlQRSA9PT0gMztcbiAgdmFyIElTX0VWRVJZID0gVFlQRSA9PT0gNDtcbiAgdmFyIElTX0ZJTkRfSU5ERVggPSBUWVBFID09PSA2O1xuICB2YXIgSVNfRklMVEVSX1JFSkVDVCA9IFRZUEUgPT09IDc7XG4gIHZhciBOT19IT0xFUyA9IFRZUEUgPT09IDUgfHwgSVNfRklORF9JTkRFWDtcbiAgcmV0dXJuIGZ1bmN0aW9uICgkdGhpcywgY2FsbGJhY2tmbiwgdGhhdCwgc3BlY2lmaWNDcmVhdGUpIHtcbiAgICB2YXIgTyA9IHRvT2JqZWN0KCR0aGlzKTtcbiAgICB2YXIgc2VsZiA9IEluZGV4ZWRPYmplY3QoTyk7XG4gICAgdmFyIGxlbmd0aCA9IGxlbmd0aE9mQXJyYXlMaWtlKHNlbGYpO1xuICAgIHZhciBib3VuZEZ1bmN0aW9uID0gYmluZChjYWxsYmFja2ZuLCB0aGF0KTtcbiAgICB2YXIgaW5kZXggPSAwO1xuICAgIHZhciBjcmVhdGUgPSBzcGVjaWZpY0NyZWF0ZSB8fCBhcnJheVNwZWNpZXNDcmVhdGU7XG4gICAgdmFyIHRhcmdldCA9IElTX01BUCA/IGNyZWF0ZSgkdGhpcywgbGVuZ3RoKSA6IElTX0ZJTFRFUiB8fCBJU19GSUxURVJfUkVKRUNUID8gY3JlYXRlKCR0aGlzLCAwKSA6IHVuZGVmaW5lZDtcbiAgICB2YXIgdmFsdWUsIHJlc3VsdDtcbiAgICBmb3IgKDtsZW5ndGggPiBpbmRleDsgaW5kZXgrKykgaWYgKE5PX0hPTEVTIHx8IGluZGV4IGluIHNlbGYpIHtcbiAgICAgIHZhbHVlID0gc2VsZltpbmRleF07XG4gICAgICByZXN1bHQgPSBib3VuZEZ1bmN0aW9uKHZhbHVlLCBpbmRleCwgTyk7XG4gICAgICBpZiAoVFlQRSkge1xuICAgICAgICBpZiAoSVNfTUFQKSB0YXJnZXRbaW5kZXhdID0gcmVzdWx0OyAvLyBtYXBcbiAgICAgICAgZWxzZSBpZiAocmVzdWx0KSBzd2l0Y2ggKFRZUEUpIHtcbiAgICAgICAgICBjYXNlIDM6IHJldHVybiB0cnVlOyAgICAgICAgICAgICAgLy8gc29tZVxuICAgICAgICAgIGNhc2UgNTogcmV0dXJuIHZhbHVlOyAgICAgICAgICAgICAvLyBmaW5kXG4gICAgICAgICAgY2FzZSA2OiByZXR1cm4gaW5kZXg7ICAgICAgICAgICAgIC8vIGZpbmRJbmRleFxuICAgICAgICAgIGNhc2UgMjogcHVzaCh0YXJnZXQsIHZhbHVlKTsgICAgICAvLyBmaWx0ZXJcbiAgICAgICAgfSBlbHNlIHN3aXRjaCAoVFlQRSkge1xuICAgICAgICAgIGNhc2UgNDogcmV0dXJuIGZhbHNlOyAgICAgICAgICAgICAvLyBldmVyeVxuICAgICAgICAgIGNhc2UgNzogcHVzaCh0YXJnZXQsIHZhbHVlKTsgICAgICAvLyBmaWx0ZXJSZWplY3RcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgICByZXR1cm4gSVNfRklORF9JTkRFWCA/IC0xIDogSVNfU09NRSB8fCBJU19FVkVSWSA/IElTX0VWRVJZIDogdGFyZ2V0O1xuICB9O1xufTtcblxubW9kdWxlLmV4cG9ydHMgPSB7XG4gIC8vIGBBcnJheS5wcm90b3R5cGUuZm9yRWFjaGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLmZvcmVhY2hcbiAgZm9yRWFjaDogY3JlYXRlTWV0aG9kKDApLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLm1hcGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLm1hcFxuICBtYXA6IGNyZWF0ZU1ldGhvZCgxKSxcbiAgLy8gYEFycmF5LnByb3RvdHlwZS5maWx0ZXJgIG1ldGhvZFxuICAvLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5maWx0ZXJcbiAgZmlsdGVyOiBjcmVhdGVNZXRob2QoMiksXG4gIC8vIGBBcnJheS5wcm90b3R5cGUuc29tZWAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLnNvbWVcbiAgc29tZTogY3JlYXRlTWV0aG9kKDMpLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLmV2ZXJ5YCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZXZlcnlcbiAgZXZlcnk6IGNyZWF0ZU1ldGhvZCg0KSxcbiAgLy8gYEFycmF5LnByb3RvdHlwZS5maW5kYCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZmluZFxuICBmaW5kOiBjcmVhdGVNZXRob2QoNSksXG4gIC8vIGBBcnJheS5wcm90b3R5cGUuZmluZEluZGV4YCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZmluZEluZGV4XG4gIGZpbmRJbmRleDogY3JlYXRlTWV0aG9kKDYpLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLmZpbHRlclJlamVjdGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vZ2l0aHViLmNvbS90YzM5L3Byb3Bvc2FsLWFycmF5LWZpbHRlcmluZ1xuICBmaWx0ZXJSZWplY3Q6IGNyZWF0ZU1ldGhvZCg3KVxufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChNRVRIT0RfTkFNRSwgYXJndW1lbnQpIHtcbiAgdmFyIG1ldGhvZCA9IFtdW01FVEhPRF9OQU1FXTtcbiAgcmV0dXJuICEhbWV0aG9kICYmIGZhaWxzKGZ1bmN0aW9uICgpIHtcbiAgICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tdXNlbGVzcy1jYWxsIC0tIHJlcXVpcmVkIGZvciB0ZXN0aW5nXG4gICAgbWV0aG9kLmNhbGwobnVsbCwgYXJndW1lbnQgfHwgZnVuY3Rpb24gKCkgeyByZXR1cm4gMTsgfSwgMSk7XG4gIH0pO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBpc0FycmF5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWFycmF5Jyk7XG52YXIgaXNDb25zdHJ1Y3RvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1jb25zdHJ1Y3RvcicpO1xudmFyIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLW9iamVjdCcpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xuXG52YXIgU1BFQ0lFUyA9IHdlbGxLbm93blN5bWJvbCgnc3BlY2llcycpO1xudmFyICRBcnJheSA9IEFycmF5O1xuXG4vLyBhIHBhcnQgb2YgYEFycmF5U3BlY2llc0NyZWF0ZWAgYWJzdHJhY3Qgb3BlcmF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5c3BlY2llc2NyZWF0ZVxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAob3JpZ2luYWxBcnJheSkge1xuICB2YXIgQztcbiAgaWYgKGlzQXJyYXkob3JpZ2luYWxBcnJheSkpIHtcbiAgICBDID0gb3JpZ2luYWxBcnJheS5jb25zdHJ1Y3RvcjtcbiAgICAvLyBjcm9zcy1yZWFsbSBmYWxsYmFja1xuICAgIGlmIChpc0NvbnN0cnVjdG9yKEMpICYmIChDID09PSAkQXJyYXkgfHwgaXNBcnJheShDLnByb3RvdHlwZSkpKSBDID0gdW5kZWZpbmVkO1xuICAgIGVsc2UgaWYgKGlzT2JqZWN0KEMpKSB7XG4gICAgICBDID0gQ1tTUEVDSUVTXTtcbiAgICAgIGlmIChDID09PSBudWxsKSBDID0gdW5kZWZpbmVkO1xuICAgIH1cbiAgfSByZXR1cm4gQyA9PT0gdW5kZWZpbmVkID8gJEFycmF5IDogQztcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgYXJyYXlTcGVjaWVzQ29uc3RydWN0b3IgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktc3BlY2llcy1jb25zdHJ1Y3RvcicpO1xuXG4vLyBgQXJyYXlTcGVjaWVzQ3JlYXRlYCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXlzcGVjaWVzY3JlYXRlXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChvcmlnaW5hbEFycmF5LCBsZW5ndGgpIHtcbiAgcmV0dXJuIG5ldyAoYXJyYXlTcGVjaWVzQ29uc3RydWN0b3Iob3JpZ2luYWxBcnJheSkpKGxlbmd0aCA9PT0gMCA/IDAgOiBsZW5ndGgpO1xufTtcbiIsIid1c2Ugc3RyaWN0Jztcbi8vIGl0ZXJhYmxlIERPTSBjb2xsZWN0aW9uc1xuLy8gZmxhZyAtIGBpdGVyYWJsZWAgaW50ZXJmYWNlIC0gJ2VudHJpZXMnLCAna2V5cycsICd2YWx1ZXMnLCAnZm9yRWFjaCcgbWV0aG9kc1xubW9kdWxlLmV4cG9ydHMgPSB7XG4gIENTU1J1bGVMaXN0OiAwLFxuICBDU1NTdHlsZURlY2xhcmF0aW9uOiAwLFxuICBDU1NWYWx1ZUxpc3Q6IDAsXG4gIENsaWVudFJlY3RMaXN0OiAwLFxuICBET01SZWN0TGlzdDogMCxcbiAgRE9NU3RyaW5nTGlzdDogMCxcbiAgRE9NVG9rZW5MaXN0OiAxLFxuICBEYXRhVHJhbnNmZXJJdGVtTGlzdDogMCxcbiAgRmlsZUxpc3Q6IDAsXG4gIEhUTUxBbGxDb2xsZWN0aW9uOiAwLFxuICBIVE1MQ29sbGVjdGlvbjogMCxcbiAgSFRNTEZvcm1FbGVtZW50OiAwLFxuICBIVE1MU2VsZWN0RWxlbWVudDogMCxcbiAgTWVkaWFMaXN0OiAwLFxuICBNaW1lVHlwZUFycmF5OiAwLFxuICBOYW1lZE5vZGVNYXA6IDAsXG4gIE5vZGVMaXN0OiAxLFxuICBQYWludFJlcXVlc3RMaXN0OiAwLFxuICBQbHVnaW46IDAsXG4gIFBsdWdpbkFycmF5OiAwLFxuICBTVkdMZW5ndGhMaXN0OiAwLFxuICBTVkdOdW1iZXJMaXN0OiAwLFxuICBTVkdQYXRoU2VnTGlzdDogMCxcbiAgU1ZHUG9pbnRMaXN0OiAwLFxuICBTVkdTdHJpbmdMaXN0OiAwLFxuICBTVkdUcmFuc2Zvcm1MaXN0OiAwLFxuICBTb3VyY2VCdWZmZXJMaXN0OiAwLFxuICBTdHlsZVNoZWV0TGlzdDogMCxcbiAgVGV4dFRyYWNrQ3VlTGlzdDogMCxcbiAgVGV4dFRyYWNrTGlzdDogMCxcbiAgVG91Y2hMaXN0OiAwXG59O1xuIiwiJ3VzZSBzdHJpY3QnO1xuLy8gaW4gb2xkIFdlYktpdCB2ZXJzaW9ucywgYGVsZW1lbnQuY2xhc3NMaXN0YCBpcyBub3QgYW4gaW5zdGFuY2Ugb2YgZ2xvYmFsIGBET01Ub2tlbkxpc3RgXG52YXIgZG9jdW1lbnRDcmVhdGVFbGVtZW50ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2RvY3VtZW50LWNyZWF0ZS1lbGVtZW50Jyk7XG5cbnZhciBjbGFzc0xpc3QgPSBkb2N1bWVudENyZWF0ZUVsZW1lbnQoJ3NwYW4nKS5jbGFzc0xpc3Q7XG52YXIgRE9NVG9rZW5MaXN0UHJvdG90eXBlID0gY2xhc3NMaXN0ICYmIGNsYXNzTGlzdC5jb25zdHJ1Y3RvciAmJiBjbGFzc0xpc3QuY29uc3RydWN0b3IucHJvdG90eXBlO1xuXG5tb2R1bGUuZXhwb3J0cyA9IERPTVRva2VuTGlzdFByb3RvdHlwZSA9PT0gT2JqZWN0LnByb3RvdHlwZSA/IHVuZGVmaW5lZCA6IERPTVRva2VuTGlzdFByb3RvdHlwZTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBjbGFzc29mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NsYXNzb2YtcmF3Jyk7XG5cbi8vIGBJc0FycmF5YCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtaXNhcnJheVxuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLWFycmF5LWlzYXJyYXkgLS0gc2FmZVxubW9kdWxlLmV4cG9ydHMgPSBBcnJheS5pc0FycmF5IHx8IGZ1bmN0aW9uIGlzQXJyYXkoYXJndW1lbnQpIHtcbiAgcmV0dXJuIGNsYXNzb2YoYXJndW1lbnQpID09PSAnQXJyYXknO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGZvckVhY2ggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktZm9yLWVhY2gnKTtcblxuLy8gYEFycmF5LnByb3RvdHlwZS5mb3JFYWNoYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLmZvcmVhY2hcbi8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBlcy9uby1hcnJheS1wcm90b3R5cGUtZm9yZWFjaCAtLSBzYWZlXG4kKHsgdGFyZ2V0OiAnQXJyYXknLCBwcm90bzogdHJ1ZSwgZm9yY2VkOiBbXS5mb3JFYWNoICE9PSBmb3JFYWNoIH0sIHtcbiAgZm9yRWFjaDogZm9yRWFjaFxufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgREVTQ1JJUFRPUlMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZGVzY3JpcHRvcnMnKTtcbnZhciBGVU5DVElPTl9OQU1FX0VYSVNUUyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1uYW1lJykuRVhJU1RTO1xudmFyIHVuY3VycnlUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLXVuY3VycnktdGhpcycpO1xudmFyIGRlZmluZUJ1aWx0SW5BY2Nlc3NvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kZWZpbmUtYnVpbHQtaW4tYWNjZXNzb3InKTtcblxudmFyIEZ1bmN0aW9uUHJvdG90eXBlID0gRnVuY3Rpb24ucHJvdG90eXBlO1xudmFyIGZ1bmN0aW9uVG9TdHJpbmcgPSB1bmN1cnJ5VGhpcyhGdW5jdGlvblByb3RvdHlwZS50b1N0cmluZyk7XG52YXIgbmFtZVJFID0gL2Z1bmN0aW9uXFxiKD86XFxzfFxcL1xcKltcXFNcXHNdKj9cXCpcXC98XFwvXFwvW15cXG5cXHJdKltcXG5cXHJdKykqKFteXFxzKC9dKikvO1xudmFyIHJlZ0V4cEV4ZWMgPSB1bmN1cnJ5VGhpcyhuYW1lUkUuZXhlYyk7XG52YXIgTkFNRSA9ICduYW1lJztcblxuLy8gRnVuY3Rpb24gaW5zdGFuY2VzIGAubmFtZWAgcHJvcGVydHlcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtZnVuY3Rpb24taW5zdGFuY2VzLW5hbWVcbmlmIChERVNDUklQVE9SUyAmJiAhRlVOQ1RJT05fTkFNRV9FWElTVFMpIHtcbiAgZGVmaW5lQnVpbHRJbkFjY2Vzc29yKEZ1bmN0aW9uUHJvdG90eXBlLCBOQU1FLCB7XG4gICAgY29uZmlndXJhYmxlOiB0cnVlLFxuICAgIGdldDogZnVuY3Rpb24gKCkge1xuICAgICAgdHJ5IHtcbiAgICAgICAgcmV0dXJuIHJlZ0V4cEV4ZWMobmFtZVJFLCBmdW5jdGlvblRvU3RyaW5nKHRoaXMpKVsxXTtcbiAgICAgIH0gY2F0Y2ggKGVycm9yKSB7XG4gICAgICAgIHJldHVybiAnJztcbiAgICAgIH1cbiAgICB9XG4gIH0pO1xufVxuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIGdsb2JhbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwnKTtcbnZhciBET01JdGVyYWJsZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZG9tLWl0ZXJhYmxlcycpO1xudmFyIERPTVRva2VuTGlzdFByb3RvdHlwZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kb20tdG9rZW4tbGlzdC1wcm90b3R5cGUnKTtcbnZhciBmb3JFYWNoID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LWZvci1lYWNoJyk7XG52YXIgY3JlYXRlTm9uRW51bWVyYWJsZVByb3BlcnR5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NyZWF0ZS1ub24tZW51bWVyYWJsZS1wcm9wZXJ0eScpO1xuXG52YXIgaGFuZGxlUHJvdG90eXBlID0gZnVuY3Rpb24gKENvbGxlY3Rpb25Qcm90b3R5cGUpIHtcbiAgLy8gc29tZSBDaHJvbWUgdmVyc2lvbnMgaGF2ZSBub24tY29uZmlndXJhYmxlIG1ldGhvZHMgb24gRE9NVG9rZW5MaXN0XG4gIGlmIChDb2xsZWN0aW9uUHJvdG90eXBlICYmIENvbGxlY3Rpb25Qcm90b3R5cGUuZm9yRWFjaCAhPT0gZm9yRWFjaCkgdHJ5IHtcbiAgICBjcmVhdGVOb25FbnVtZXJhYmxlUHJvcGVydHkoQ29sbGVjdGlvblByb3RvdHlwZSwgJ2ZvckVhY2gnLCBmb3JFYWNoKTtcbiAgfSBjYXRjaCAoZXJyb3IpIHtcbiAgICBDb2xsZWN0aW9uUHJvdG90eXBlLmZvckVhY2ggPSBmb3JFYWNoO1xuICB9XG59O1xuXG5mb3IgKHZhciBDT0xMRUNUSU9OX05BTUUgaW4gRE9NSXRlcmFibGVzKSB7XG4gIGlmIChET01JdGVyYWJsZXNbQ09MTEVDVElPTl9OQU1FXSkge1xuICAgIGhhbmRsZVByb3RvdHlwZShnbG9iYWxbQ09MTEVDVElPTl9OQU1FXSAmJiBnbG9iYWxbQ09MTEVDVElPTl9OQU1FXS5wcm90b3R5cGUpO1xuICB9XG59XG5cbmhhbmRsZVByb3RvdHlwZShET01Ub2tlbkxpc3RQcm90b3R5cGUpO1xuIl0sIm5hbWVzIjpbInJlcXVpcmUiLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsImFjdGl2ZV9pdGVtIiwicXVlcnlTZWxlY3RvciIsIm5hdl9pdGVtcyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJhZGRDdXN0b21lciIsImVkaXRDdXN0b21lciIsImJhbkN1c3RvbWVyIiwicG9wQ29udGFpbmVyIiwicG9wVXAiLCJhZGRQcm9kdWN0IiwiZWRpdFByb2R1Y3QiLCJyZW1vdmVQcm9kdWN0IiwiZSIsImZvckVhY2giLCJlbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwibmFtZSIsInN0eWxlIiwiZGlzcGxheSIsImNvbnRhaW4iLCJjb250YWlucyIsInRhcmdldCIsImlkIiwic2VsZWN0ZWQiLCJmb3JtIiwiRm9ybURhdGEiLCJhcHBlbmQiLCJmZXRjaCIsIm1ldGhvZCIsImJvZHkiLCJ0aGVuIiwicmVzcG9uc2UiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsInJlbG9hZCJdLCJzb3VyY2VSb290IjoiIn0=