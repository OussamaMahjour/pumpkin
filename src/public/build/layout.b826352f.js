"use strict";
(self["webpackChunkPumpkin"] = self["webpackChunkPumpkin"] || []).push([["layout"],{

/***/ "./resources/js/layout.js":
/*!********************************!*\
  !*** ./resources/js/layout.js ***!
  \********************************/
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
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _css_layout_scss__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../css/layout.scss */ "./resources/css/layout.scss");
/* harmony import */ var _node_modules_bootstrap_dist_css_bootstrap_css__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../node_modules/bootstrap/dist/css/bootstrap.css */ "./node_modules/bootstrap/dist/css/bootstrap.css");









__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
document.addEventListener('DOMContentLoaded', function () {
  var search = document.getElementById('search');
  var search_container = document.getElementById('search_container');
  var side_menu = document.querySelector(".side-bar");
  var close_menu = document.querySelector(".close-menu");
  var menu_button = document.querySelector(".fa-bars");
  var side_menu_active_item = document.querySelector(".side-bar .active");
  var side_menu_items = this.getElementsByClassName("sidebar-item");
  var side_menu_content = document.querySelector(".side-bar-content");
  var product_card = document.querySelectorAll(".product-card");
  //search bar
  document.addEventListener('click', function (e) {
    if (e.target != search_container && !search_container.contains(e.target)) {
      search_container.classList.remove('show');
    }
    if (e.target != side_menu && !side_menu.contains(e.target) && e.target != menu_button) {
      side_menu.classList.remove("open");
    }
  });
  search.addEventListener('keyup', function (e) {
    if (e.key == 'Enter') {
      window.location.href = '/searchPage?search=' + search.value;
    }
    fetch("/search?search=" + search.value).then(function (response) {
      return response.json();
    }).then(search_container.innerHTML = "").then(function (response) {
      if (response.length == 0) {
        search_container.classList.remove('show');
      } else {
        search_container.classList.add('show');
      }
      for (var i = 0; i < response.length; i++) {
        var element = response[i];
        search_container.innerHTML += " <li class='nav-item text-start' >\
                      <a href='/searchPage?search=" + element.name + "' class='link-dark text-decoration-none'> <p style='padding-left:5px;'>   " + element.name + " </p></a> </li>";
      }
    });
  });

  //side bar 
  menu_button.addEventListener('click', function () {
    if (!side_menu.classList.contains("open")) {
      side_menu.classList.add("open");
      fetch("/" + side_menu_active_item.name).then(function (html) {
        return html.text();
      }).then(function (html) {
        side_menu_content.innerHTML = html;
        var script = side_menu_content.getElementsByClassName('filter-script');
        eval(script[0].innerHTML);
      });
    } else {
      side_menu.classList.remove("open");
    }
  });
  close_menu.addEventListener('click', function () {
    if (!side_menu.classList.contains("open")) {
      side_menu.classList.add("open");
    } else {
      side_menu.classList.remove("open");
    }
  });
  var _loop = function _loop(i) {
    side_menu_items[i].addEventListener('click', function (e) {
      side_menu_active_item.classList.remove("active");
      side_menu_items[i].classList.add("active");
      side_menu_active_item = side_menu_items[i];
      fetch("/" + side_menu_active_item.name).then(function (html) {
        return html.text();
      }).then(function (html) {
        side_menu_content.innerHTML = html;
        var script = side_menu_content.getElementsByClassName('filter-script');
        eval(script[0].innerHTML);
      });
    });
  };
  for (var i = 0; i < side_menu_items.length; i++) {
    _loop(i);
  }
  //basket handler
  var basket_button = document.querySelectorAll(".basket-button");
  var form = new FormData();
  if (product_card.length != 0) {
    product_card.forEach(function (element) {
      element.addEventListener('click', function (e) {
        if (!e.target.closest(".ignore")) {
          window.location.href = "/product?pr=" + element.id;
        }
      });
    });
  }
  basket_button.forEach(function (element) {
    element.addEventListener('click', function (e) {
      form.append('product', element.value);
      form.append('quantity', 1);
      fetch('/addToBasket', {
        method: "POST",
        body: form
      }).then(function (response) {
        if (response.status == 200) {
          element.classList.remove('basket-button');
          element.getElementsByTagName('i')[0].classList.remove('fa-cart-shopping');
          element.getElementsByTagName('i')[0].classList.add('fa-check');
        } else if (response.status == 302) {
          window.location.replace("/login");
        }
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

/***/ "./resources/css/layout.scss":
/*!***********************************!*\
  !*** ./resources/css/layout.scss ***!
  \***********************************/
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
/******/ __webpack_require__.O(0, ["vendors-node_modules_popperjs_core_lib_index_js","vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_function-appl-0fa2a2","vendors-node_modules_bootstrap_dist_js_bootstrap_esm_js","vendors-node_modules_core-js_modules_es_promise_js","vendors-node_modules_core-js_modules_es_string_replace_js","vendors-node_modules_bootstrap_dist_css_bootstrap_css"], () => (__webpack_exec__("./resources/js/layout.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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VFk7QUFDYixrQkFBa0IsbUJBQU8sQ0FBQyxpRkFBMEI7QUFDcEQsMkJBQTJCLG1IQUE0QztBQUN2RSxrQkFBa0IsbUJBQU8sQ0FBQyxxR0FBb0M7QUFDOUQsNEJBQTRCLG1CQUFPLENBQUMsMkdBQXVDOztBQUUzRTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxRQUFRO0FBQ1I7QUFDQTtBQUNBO0FBQ0EsR0FBRztBQUNIOzs7Ozs7Ozs7OztBQ3pCYTtBQUNiLGFBQWEsbUJBQU8sQ0FBQyx1RUFBcUI7QUFDMUMsbUJBQW1CLG1CQUFPLENBQUMscUZBQTRCO0FBQ3ZELDRCQUE0QixtQkFBTyxDQUFDLDJHQUF1QztBQUMzRSxjQUFjLG1CQUFPLENBQUMsdUZBQTZCO0FBQ25ELGtDQUFrQyxtQkFBTyxDQUFDLHVIQUE2Qzs7QUFFdkY7QUFDQTtBQUNBO0FBQ0E7QUFDQSxJQUFJO0FBQ0o7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9QdW1wa2luLy4vcmVzb3VyY2VzL2pzL2xheW91dC5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2Jvb3RzdHJhcC9kaXN0L2Nzcy9ib290c3RyYXAuY3NzPzNiYjkiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL3Jlc291cmNlcy9jc3MvbGF5b3V0LnNjc3M/YWU3ZiIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2FycmF5LWZvci1lYWNoLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktaXRlcmF0aW9uLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9pbnRlcm5hbHMvYXJyYXktbWV0aG9kLWlzLXN0cmljdC5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2FycmF5LXNwZWNpZXMtY29uc3RydWN0b3IuanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9hcnJheS1zcGVjaWVzLWNyZWF0ZS5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvaW50ZXJuYWxzL2RvbS1pdGVyYWJsZXMuanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9kb20tdG9rZW4tbGlzdC1wcm90b3R5cGUuanMiLCJ3ZWJwYWNrOi8vUHVtcGtpbi8uL25vZGVfbW9kdWxlcy9jb3JlLWpzL2ludGVybmFscy9pcy1hcnJheS5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5hcnJheS5mb3ItZWFjaC5qcyIsIndlYnBhY2s6Ly9QdW1wa2luLy4vbm9kZV9tb2R1bGVzL2NvcmUtanMvbW9kdWxlcy9lcy5mdW5jdGlvbi5uYW1lLmpzIiwid2VicGFjazovL1B1bXBraW4vLi9ub2RlX21vZHVsZXMvY29yZS1qcy9tb2R1bGVzL3dlYi5kb20tY29sbGVjdGlvbnMuZm9yLWVhY2guanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IFwiLi4vY3NzL2xheW91dC5zY3NzXCI7XG5pbXBvcnQgXCIuLi8uLi9ub2RlX21vZHVsZXMvYm9vdHN0cmFwL2Rpc3QvY3NzL2Jvb3RzdHJhcC5jc3NcIlxucmVxdWlyZSgnYm9vdHN0cmFwJyk7XG5cblxuXG5cblxuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XG4gIGxldCBzZWFyY2ggPWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZWFyY2gnKTtcbiAgbGV0IHNlYXJjaF9jb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc2VhcmNoX2NvbnRhaW5lcicpO1xuICBjb25zdCBzaWRlX21lbnUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnNpZGUtYmFyXCIpO1xuICBsZXQgY2xvc2VfbWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuY2xvc2UtbWVudVwiKTtcbiAgbGV0IG1lbnVfYnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5mYS1iYXJzXCIpO1xuICBsZXQgc2lkZV9tZW51X2FjdGl2ZV9pdGVtID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5zaWRlLWJhciAuYWN0aXZlXCIpO1xuICBsZXQgc2lkZV9tZW51X2l0ZW1zID0gdGhpcy5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwic2lkZWJhci1pdGVtXCIpO1xuICBsZXQgc2lkZV9tZW51X2NvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnNpZGUtYmFyLWNvbnRlbnRcIik7XG4gIGxldCBwcm9kdWN0X2NhcmQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLnByb2R1Y3QtY2FyZFwiKTtcbiAgICAvL3NlYXJjaCBiYXJcbiAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oZSl7XG4gICAgICAgICAgICBpZihlLnRhcmdldCE9c2VhcmNoX2NvbnRhaW5lciAmJiAhc2VhcmNoX2NvbnRhaW5lci5jb250YWlucyhlLnRhcmdldCkpe1xuICAgICAgICAgICAgICAgIHNlYXJjaF9jb250YWluZXIuY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYoZS50YXJnZXQhPXNpZGVfbWVudSAmJiAhc2lkZV9tZW51LmNvbnRhaW5zKGUudGFyZ2V0KSAmJiBlLnRhcmdldCE9bWVudV9idXR0b24pe1xuICAgICAgICAgICAgICBzaWRlX21lbnUuY2xhc3NMaXN0LnJlbW92ZShcIm9wZW5cIik7XG4gICAgICAgICAgICB9XG4gICAgfSk7XG4gICAgXG4gICAgc2VhcmNoLmFkZEV2ZW50TGlzdGVuZXIoJ2tleXVwJyxmdW5jdGlvbihlKSB7XG4gICAgICBpZihlLmtleSA9PSAnRW50ZXInKXtcbiAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL3NlYXJjaFBhZ2U/c2VhcmNoPScrc2VhcmNoLnZhbHVlO1xuICAgICAgfVxuICAgICAgZmV0Y2goXCIvc2VhcmNoP3NlYXJjaD1cIitzZWFyY2gudmFsdWUpLnRoZW4ocmVzcG9uc2UgPT4gcmVzcG9uc2UuanNvbigpKVxuICAgICAgICAudGhlbihzZWFyY2hfY29udGFpbmVyLmlubmVySFRNTCA9IFwiXCIpICBcbiAgICAgICAgLnRoZW4ocmVzcG9uc2U9PntcbiAgICAgICAgICAgIGlmKHJlc3BvbnNlLmxlbmd0aD09MCl7XG4gICAgICAgICAgICAgIHNlYXJjaF9jb250YWluZXIuY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZWxzZXtcbiAgICAgICAgICAgICAgc2VhcmNoX2NvbnRhaW5lci5jbGFzc0xpc3QuYWRkKCdzaG93Jyk7XG4gICAgICAgICAgICB9XG4gICAgICAgICAgICBmb3IobGV0IGk9MDtpPHJlc3BvbnNlLmxlbmd0aDtpKyspeyBcbiAgICAgICAgICAgICAgbGV0IGVsZW1lbnQgPXJlc3BvbnNlW2ldO1xuXG4gICAgICAgICAgICAgIHNlYXJjaF9jb250YWluZXIuaW5uZXJIVE1MICs9XCIgPGxpIGNsYXNzPSduYXYtaXRlbSB0ZXh0LXN0YXJ0JyA+XFxcbiAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPScvc2VhcmNoUGFnZT9zZWFyY2g9XCIrZWxlbWVudC5uYW1lK1wiJyBjbGFzcz0nbGluay1kYXJrIHRleHQtZGVjb3JhdGlvbi1ub25lJz4gPHAgc3R5bGU9J3BhZGRpbmctbGVmdDo1cHg7Jz4gICBcIitlbGVtZW50Lm5hbWUrXCIgPC9wPjwvYT4gPC9saT5cIlxuICAgICAgICAgICAgfVxuXG5cblxuICAgICAgICAgIH0pICAgICAgICAgXG4gICAgICB9KTtcblxuICAgICAgICAgICAgLy9zaWRlIGJhciBcbiAgICAgICAgICAgIG1lbnVfYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbigpe1xuXG4gICAgICAgICAgICAgIGlmKCFzaWRlX21lbnUuY2xhc3NMaXN0LmNvbnRhaW5zKFwib3BlblwiKSl7XG4gICAgICAgICAgICAgICAgICAgICAgc2lkZV9tZW51LmNsYXNzTGlzdC5hZGQoXCJvcGVuXCIpO1xuICAgICAgICAgICAgICAgICAgICAgIGZldGNoKFwiL1wiKyBzaWRlX21lbnVfYWN0aXZlX2l0ZW0ubmFtZSkudGhlbihodG1sID0+IGh0bWwudGV4dCgpKVxuICAgICAgICAgICAgICAgICAgICAgIC50aGVuKGh0bWw9PntcbiAgICAgICAgICAgICAgICAgICAgICAgIHNpZGVfbWVudV9jb250ZW50LmlubmVySFRNTD1odG1sO1xuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHNjcmlwdCA9IHNpZGVfbWVudV9jb250ZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2ZpbHRlci1zY3JpcHQnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGV2YWwoc2NyaXB0WzBdLmlubmVySFRNTCk7XG4gICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgIFxuICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgIGVsc2V7XG4gICAgICAgICAgICAgICAgICAgICAgc2lkZV9tZW51LmNsYXNzTGlzdC5yZW1vdmUoXCJvcGVuXCIpO1xuICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgY2xvc2VfbWVudS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24oKXtcblxuICAgICAgICAgICAgICBpZighc2lkZV9tZW51LmNsYXNzTGlzdC5jb250YWlucyhcIm9wZW5cIikpe1xuICAgICAgICAgICAgICAgICAgc2lkZV9tZW51LmNsYXNzTGlzdC5hZGQoXCJvcGVuXCIpO1xuICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgIGVsc2V7XG4gICAgICAgICAgICAgICAgICBzaWRlX21lbnUuY2xhc3NMaXN0LnJlbW92ZShcIm9wZW5cIik7XG4gICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIFxuICAgICAgICAgIFxuICAgICAgICAgICAgZm9yKGxldCBpID0gMDsgaSA8IHNpZGVfbWVudV9pdGVtcy5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICAgICBzaWRlX21lbnVfaXRlbXNbaV0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICBzaWRlX21lbnVfYWN0aXZlX2l0ZW0uY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTsgIFxuICAgICAgICAgICAgICAgIHNpZGVfbWVudV9pdGVtc1tpXS5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xuICAgICAgICAgICAgICAgIHNpZGVfbWVudV9hY3RpdmVfaXRlbSA9IHNpZGVfbWVudV9pdGVtc1tpXTtcbiAgICAgICAgICAgICAgICBmZXRjaChcIi9cIisgc2lkZV9tZW51X2FjdGl2ZV9pdGVtLm5hbWUpLnRoZW4oaHRtbCA9PiBodG1sLnRleHQoKSlcbiAgICAgICAgICAgICAgICAudGhlbihodG1sPT57XG4gICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgIFxuXG4gICAgICAgICAgICAgICAgICBzaWRlX21lbnVfY29udGVudC5pbm5lckhUTUw9aHRtbDtcbiAgICAgICAgICAgICAgICAgIGxldCBzY3JpcHQgPSBzaWRlX21lbnVfY29udGVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdmaWx0ZXItc2NyaXB0Jyk7XG4gICAgICAgICAgICAgICAgICBldmFsKHNjcmlwdFswXS5pbm5lckhUTUwpO1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgXG4gICAgICAgICAgICB9XG4gICAgICAgICAgICAvL2Jhc2tldCBoYW5kbGVyXG4gICAgICAgICAgICBsZXQgYmFza2V0X2J1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuYmFza2V0LWJ1dHRvblwiKTtcbiAgICAgICAgICAgIGxldCBmb3JtID0gbmV3IEZvcm1EYXRhKCk7XG4gICAgICAgICAgICBcbiAgICAgICAgICAgIGlmKHByb2R1Y3RfY2FyZC5sZW5ndGggIT0wKXtcbiAgICAgICAgICAgICAgcHJvZHVjdF9jYXJkLmZvckVhY2goZWxlbWVudCA9PiB7XG4gICAgICAgICAgICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxmdW5jdGlvbihlKXtcbiAgICAgICAgICAgICAgICAgaWYoIWUudGFyZ2V0LmNsb3Nlc3QoXCIuaWdub3JlXCIpKXtcbiAgICAgICAgICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWY9IFwiL3Byb2R1Y3Q/cHI9XCIrZWxlbWVudC5pZDtcbiAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0gICBcbiAgICAgICAgICAgIFxuICAgICAgICAgIGJhc2tldF9idXR0b24uZm9yRWFjaCgoZWxlbWVudCk9PntcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLGZ1bmN0aW9uKGUpe1xuICAgICAgICAgICAgICBmb3JtLmFwcGVuZCgncHJvZHVjdCcsZWxlbWVudC52YWx1ZSk7XG4gICAgICAgICAgICAgIGZvcm0uYXBwZW5kKCdxdWFudGl0eScsMSk7XG4gICAgICAgICAgICAgICAgZmV0Y2goJy9hZGRUb0Jhc2tldCcse1xuICAgICAgICAgICAgICAgICAgbWV0aG9kOiBcIlBPU1RcIixcbiAgICAgICAgICAgICAgICAgIGJvZHk6Zm9ybVxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgLnRoZW4ocmVzcG9uc2U9PntcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgIGlmKHJlc3BvbnNlLnN0YXR1cz09MjAwKXtcbiAgICAgICAgICAgICAgICAgICAgZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKCdiYXNrZXQtYnV0dG9uJyk7XG4gICAgICAgICAgICAgICAgICAgIGVsZW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ2knKVswXS5jbGFzc0xpc3QucmVtb3ZlKCdmYS1jYXJ0LXNob3BwaW5nJyk7XG4gICAgICAgICAgICAgICAgICAgIGVsZW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ2knKVswXS5jbGFzc0xpc3QuYWRkKCdmYS1jaGVjaycpO1xuICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgZWxzZSBpZihyZXNwb25zZS5zdGF0dXM9PTMwMil7XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5yZXBsYWNlKFwiL2xvZ2luXCIpO1xuICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSlcblxuICAgICAgICAgIH0pXG4gICAgICAgICBcbiAgXG4gICAgICBcbiAgICAgIFxuICAgICAgICAgICAgXG4gICAgICAgICAgICBcbiAgICAgICAgICAgIFxuICAgICAgICAgICBcblxuICAgXG4gICAgICAgICAgXG4gICAgICAgICAgICAgIFxuICAgIH0pO1xuICAgXG4gICAgXG5cblxuXG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIndXNlIHN0cmljdCc7XG52YXIgJGZvckVhY2ggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktaXRlcmF0aW9uJykuZm9yRWFjaDtcbnZhciBhcnJheU1ldGhvZElzU3RyaWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LW1ldGhvZC1pcy1zdHJpY3QnKTtcblxudmFyIFNUUklDVF9NRVRIT0QgPSBhcnJheU1ldGhvZElzU3RyaWN0KCdmb3JFYWNoJyk7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUuZm9yRWFjaGAgbWV0aG9kIGltcGxlbWVudGF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5mb3JlYWNoXG5tb2R1bGUuZXhwb3J0cyA9ICFTVFJJQ1RfTUVUSE9EID8gZnVuY3Rpb24gZm9yRWFjaChjYWxsYmFja2ZuIC8qICwgdGhpc0FyZyAqLykge1xuICByZXR1cm4gJGZvckVhY2godGhpcywgY2FsbGJhY2tmbiwgYXJndW1lbnRzLmxlbmd0aCA+IDEgPyBhcmd1bWVudHNbMV0gOiB1bmRlZmluZWQpO1xuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLWFycmF5LXByb3RvdHlwZS1mb3JlYWNoIC0tIHNhZmVcbn0gOiBbXS5mb3JFYWNoO1xuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIGJpbmQgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tYmluZC1jb250ZXh0Jyk7XG52YXIgdW5jdXJyeVRoaXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZnVuY3Rpb24tdW5jdXJyeS10aGlzJyk7XG52YXIgSW5kZXhlZE9iamVjdCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pbmRleGVkLW9iamVjdCcpO1xudmFyIHRvT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL3RvLW9iamVjdCcpO1xudmFyIGxlbmd0aE9mQXJyYXlMaWtlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2xlbmd0aC1vZi1hcnJheS1saWtlJyk7XG52YXIgYXJyYXlTcGVjaWVzQ3JlYXRlID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LXNwZWNpZXMtY3JlYXRlJyk7XG5cbnZhciBwdXNoID0gdW5jdXJyeVRoaXMoW10ucHVzaCk7XG5cbi8vIGBBcnJheS5wcm90b3R5cGUueyBmb3JFYWNoLCBtYXAsIGZpbHRlciwgc29tZSwgZXZlcnksIGZpbmQsIGZpbmRJbmRleCwgZmlsdGVyUmVqZWN0IH1gIG1ldGhvZHMgaW1wbGVtZW50YXRpb25cbnZhciBjcmVhdGVNZXRob2QgPSBmdW5jdGlvbiAoVFlQRSkge1xuICB2YXIgSVNfTUFQID0gVFlQRSA9PT0gMTtcbiAgdmFyIElTX0ZJTFRFUiA9IFRZUEUgPT09IDI7XG4gIHZhciBJU19TT01FID0gVFlQRSA9PT0gMztcbiAgdmFyIElTX0VWRVJZID0gVFlQRSA9PT0gNDtcbiAgdmFyIElTX0ZJTkRfSU5ERVggPSBUWVBFID09PSA2O1xuICB2YXIgSVNfRklMVEVSX1JFSkVDVCA9IFRZUEUgPT09IDc7XG4gIHZhciBOT19IT0xFUyA9IFRZUEUgPT09IDUgfHwgSVNfRklORF9JTkRFWDtcbiAgcmV0dXJuIGZ1bmN0aW9uICgkdGhpcywgY2FsbGJhY2tmbiwgdGhhdCwgc3BlY2lmaWNDcmVhdGUpIHtcbiAgICB2YXIgTyA9IHRvT2JqZWN0KCR0aGlzKTtcbiAgICB2YXIgc2VsZiA9IEluZGV4ZWRPYmplY3QoTyk7XG4gICAgdmFyIGxlbmd0aCA9IGxlbmd0aE9mQXJyYXlMaWtlKHNlbGYpO1xuICAgIHZhciBib3VuZEZ1bmN0aW9uID0gYmluZChjYWxsYmFja2ZuLCB0aGF0KTtcbiAgICB2YXIgaW5kZXggPSAwO1xuICAgIHZhciBjcmVhdGUgPSBzcGVjaWZpY0NyZWF0ZSB8fCBhcnJheVNwZWNpZXNDcmVhdGU7XG4gICAgdmFyIHRhcmdldCA9IElTX01BUCA/IGNyZWF0ZSgkdGhpcywgbGVuZ3RoKSA6IElTX0ZJTFRFUiB8fCBJU19GSUxURVJfUkVKRUNUID8gY3JlYXRlKCR0aGlzLCAwKSA6IHVuZGVmaW5lZDtcbiAgICB2YXIgdmFsdWUsIHJlc3VsdDtcbiAgICBmb3IgKDtsZW5ndGggPiBpbmRleDsgaW5kZXgrKykgaWYgKE5PX0hPTEVTIHx8IGluZGV4IGluIHNlbGYpIHtcbiAgICAgIHZhbHVlID0gc2VsZltpbmRleF07XG4gICAgICByZXN1bHQgPSBib3VuZEZ1bmN0aW9uKHZhbHVlLCBpbmRleCwgTyk7XG4gICAgICBpZiAoVFlQRSkge1xuICAgICAgICBpZiAoSVNfTUFQKSB0YXJnZXRbaW5kZXhdID0gcmVzdWx0OyAvLyBtYXBcbiAgICAgICAgZWxzZSBpZiAocmVzdWx0KSBzd2l0Y2ggKFRZUEUpIHtcbiAgICAgICAgICBjYXNlIDM6IHJldHVybiB0cnVlOyAgICAgICAgICAgICAgLy8gc29tZVxuICAgICAgICAgIGNhc2UgNTogcmV0dXJuIHZhbHVlOyAgICAgICAgICAgICAvLyBmaW5kXG4gICAgICAgICAgY2FzZSA2OiByZXR1cm4gaW5kZXg7ICAgICAgICAgICAgIC8vIGZpbmRJbmRleFxuICAgICAgICAgIGNhc2UgMjogcHVzaCh0YXJnZXQsIHZhbHVlKTsgICAgICAvLyBmaWx0ZXJcbiAgICAgICAgfSBlbHNlIHN3aXRjaCAoVFlQRSkge1xuICAgICAgICAgIGNhc2UgNDogcmV0dXJuIGZhbHNlOyAgICAgICAgICAgICAvLyBldmVyeVxuICAgICAgICAgIGNhc2UgNzogcHVzaCh0YXJnZXQsIHZhbHVlKTsgICAgICAvLyBmaWx0ZXJSZWplY3RcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH1cbiAgICByZXR1cm4gSVNfRklORF9JTkRFWCA/IC0xIDogSVNfU09NRSB8fCBJU19FVkVSWSA/IElTX0VWRVJZIDogdGFyZ2V0O1xuICB9O1xufTtcblxubW9kdWxlLmV4cG9ydHMgPSB7XG4gIC8vIGBBcnJheS5wcm90b3R5cGUuZm9yRWFjaGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLmZvcmVhY2hcbiAgZm9yRWFjaDogY3JlYXRlTWV0aG9kKDApLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLm1hcGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLm1hcFxuICBtYXA6IGNyZWF0ZU1ldGhvZCgxKSxcbiAgLy8gYEFycmF5LnByb3RvdHlwZS5maWx0ZXJgIG1ldGhvZFxuICAvLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5LnByb3RvdHlwZS5maWx0ZXJcbiAgZmlsdGVyOiBjcmVhdGVNZXRob2QoMiksXG4gIC8vIGBBcnJheS5wcm90b3R5cGUuc29tZWAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLnNvbWVcbiAgc29tZTogY3JlYXRlTWV0aG9kKDMpLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLmV2ZXJ5YCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZXZlcnlcbiAgZXZlcnk6IGNyZWF0ZU1ldGhvZCg0KSxcbiAgLy8gYEFycmF5LnByb3RvdHlwZS5maW5kYCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZmluZFxuICBmaW5kOiBjcmVhdGVNZXRob2QoNSksXG4gIC8vIGBBcnJheS5wcm90b3R5cGUuZmluZEluZGV4YCBtZXRob2RcbiAgLy8gaHR0cHM6Ly90YzM5LmVzL2VjbWEyNjIvI3NlYy1hcnJheS5wcm90b3R5cGUuZmluZEluZGV4XG4gIGZpbmRJbmRleDogY3JlYXRlTWV0aG9kKDYpLFxuICAvLyBgQXJyYXkucHJvdG90eXBlLmZpbHRlclJlamVjdGAgbWV0aG9kXG4gIC8vIGh0dHBzOi8vZ2l0aHViLmNvbS90YzM5L3Byb3Bvc2FsLWFycmF5LWZpbHRlcmluZ1xuICBmaWx0ZXJSZWplY3Q6IGNyZWF0ZU1ldGhvZCg3KVxufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBmYWlscyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mYWlscycpO1xuXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChNRVRIT0RfTkFNRSwgYXJndW1lbnQpIHtcbiAgdmFyIG1ldGhvZCA9IFtdW01FVEhPRF9OQU1FXTtcbiAgcmV0dXJuICEhbWV0aG9kICYmIGZhaWxzKGZ1bmN0aW9uICgpIHtcbiAgICAvLyBlc2xpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tdXNlbGVzcy1jYWxsIC0tIHJlcXVpcmVkIGZvciB0ZXN0aW5nXG4gICAgbWV0aG9kLmNhbGwobnVsbCwgYXJndW1lbnQgfHwgZnVuY3Rpb24gKCkgeyByZXR1cm4gMTsgfSwgMSk7XG4gIH0pO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBpc0FycmF5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLWFycmF5Jyk7XG52YXIgaXNDb25zdHJ1Y3RvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9pcy1jb25zdHJ1Y3RvcicpO1xudmFyIGlzT2JqZWN0ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2lzLW9iamVjdCcpO1xudmFyIHdlbGxLbm93blN5bWJvbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy93ZWxsLWtub3duLXN5bWJvbCcpO1xuXG52YXIgU1BFQ0lFUyA9IHdlbGxLbm93blN5bWJvbCgnc3BlY2llcycpO1xudmFyICRBcnJheSA9IEFycmF5O1xuXG4vLyBhIHBhcnQgb2YgYEFycmF5U3BlY2llc0NyZWF0ZWAgYWJzdHJhY3Qgb3BlcmF0aW9uXG4vLyBodHRwczovL3RjMzkuZXMvZWNtYTI2Mi8jc2VjLWFycmF5c3BlY2llc2NyZWF0ZVxubW9kdWxlLmV4cG9ydHMgPSBmdW5jdGlvbiAob3JpZ2luYWxBcnJheSkge1xuICB2YXIgQztcbiAgaWYgKGlzQXJyYXkob3JpZ2luYWxBcnJheSkpIHtcbiAgICBDID0gb3JpZ2luYWxBcnJheS5jb25zdHJ1Y3RvcjtcbiAgICAvLyBjcm9zcy1yZWFsbSBmYWxsYmFja1xuICAgIGlmIChpc0NvbnN0cnVjdG9yKEMpICYmIChDID09PSAkQXJyYXkgfHwgaXNBcnJheShDLnByb3RvdHlwZSkpKSBDID0gdW5kZWZpbmVkO1xuICAgIGVsc2UgaWYgKGlzT2JqZWN0KEMpKSB7XG4gICAgICBDID0gQ1tTUEVDSUVTXTtcbiAgICAgIGlmIChDID09PSBudWxsKSBDID0gdW5kZWZpbmVkO1xuICAgIH1cbiAgfSByZXR1cm4gQyA9PT0gdW5kZWZpbmVkID8gJEFycmF5IDogQztcbn07XG4iLCIndXNlIHN0cmljdCc7XG52YXIgYXJyYXlTcGVjaWVzQ29uc3RydWN0b3IgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktc3BlY2llcy1jb25zdHJ1Y3RvcicpO1xuXG4vLyBgQXJyYXlTcGVjaWVzQ3JlYXRlYCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXlzcGVjaWVzY3JlYXRlXG5tb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIChvcmlnaW5hbEFycmF5LCBsZW5ndGgpIHtcbiAgcmV0dXJuIG5ldyAoYXJyYXlTcGVjaWVzQ29uc3RydWN0b3Iob3JpZ2luYWxBcnJheSkpKGxlbmd0aCA9PT0gMCA/IDAgOiBsZW5ndGgpO1xufTtcbiIsIid1c2Ugc3RyaWN0Jztcbi8vIGl0ZXJhYmxlIERPTSBjb2xsZWN0aW9uc1xuLy8gZmxhZyAtIGBpdGVyYWJsZWAgaW50ZXJmYWNlIC0gJ2VudHJpZXMnLCAna2V5cycsICd2YWx1ZXMnLCAnZm9yRWFjaCcgbWV0aG9kc1xubW9kdWxlLmV4cG9ydHMgPSB7XG4gIENTU1J1bGVMaXN0OiAwLFxuICBDU1NTdHlsZURlY2xhcmF0aW9uOiAwLFxuICBDU1NWYWx1ZUxpc3Q6IDAsXG4gIENsaWVudFJlY3RMaXN0OiAwLFxuICBET01SZWN0TGlzdDogMCxcbiAgRE9NU3RyaW5nTGlzdDogMCxcbiAgRE9NVG9rZW5MaXN0OiAxLFxuICBEYXRhVHJhbnNmZXJJdGVtTGlzdDogMCxcbiAgRmlsZUxpc3Q6IDAsXG4gIEhUTUxBbGxDb2xsZWN0aW9uOiAwLFxuICBIVE1MQ29sbGVjdGlvbjogMCxcbiAgSFRNTEZvcm1FbGVtZW50OiAwLFxuICBIVE1MU2VsZWN0RWxlbWVudDogMCxcbiAgTWVkaWFMaXN0OiAwLFxuICBNaW1lVHlwZUFycmF5OiAwLFxuICBOYW1lZE5vZGVNYXA6IDAsXG4gIE5vZGVMaXN0OiAxLFxuICBQYWludFJlcXVlc3RMaXN0OiAwLFxuICBQbHVnaW46IDAsXG4gIFBsdWdpbkFycmF5OiAwLFxuICBTVkdMZW5ndGhMaXN0OiAwLFxuICBTVkdOdW1iZXJMaXN0OiAwLFxuICBTVkdQYXRoU2VnTGlzdDogMCxcbiAgU1ZHUG9pbnRMaXN0OiAwLFxuICBTVkdTdHJpbmdMaXN0OiAwLFxuICBTVkdUcmFuc2Zvcm1MaXN0OiAwLFxuICBTb3VyY2VCdWZmZXJMaXN0OiAwLFxuICBTdHlsZVNoZWV0TGlzdDogMCxcbiAgVGV4dFRyYWNrQ3VlTGlzdDogMCxcbiAgVGV4dFRyYWNrTGlzdDogMCxcbiAgVG91Y2hMaXN0OiAwXG59O1xuIiwiJ3VzZSBzdHJpY3QnO1xuLy8gaW4gb2xkIFdlYktpdCB2ZXJzaW9ucywgYGVsZW1lbnQuY2xhc3NMaXN0YCBpcyBub3QgYW4gaW5zdGFuY2Ugb2YgZ2xvYmFsIGBET01Ub2tlbkxpc3RgXG52YXIgZG9jdW1lbnRDcmVhdGVFbGVtZW50ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2RvY3VtZW50LWNyZWF0ZS1lbGVtZW50Jyk7XG5cbnZhciBjbGFzc0xpc3QgPSBkb2N1bWVudENyZWF0ZUVsZW1lbnQoJ3NwYW4nKS5jbGFzc0xpc3Q7XG52YXIgRE9NVG9rZW5MaXN0UHJvdG90eXBlID0gY2xhc3NMaXN0ICYmIGNsYXNzTGlzdC5jb25zdHJ1Y3RvciAmJiBjbGFzc0xpc3QuY29uc3RydWN0b3IucHJvdG90eXBlO1xuXG5tb2R1bGUuZXhwb3J0cyA9IERPTVRva2VuTGlzdFByb3RvdHlwZSA9PT0gT2JqZWN0LnByb3RvdHlwZSA/IHVuZGVmaW5lZCA6IERPTVRva2VuTGlzdFByb3RvdHlwZTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciBjbGFzc29mID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NsYXNzb2YtcmF3Jyk7XG5cbi8vIGBJc0FycmF5YCBhYnN0cmFjdCBvcGVyYXRpb25cbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtaXNhcnJheVxuLy8gZXNsaW50LWRpc2FibGUtbmV4dC1saW5lIGVzL25vLWFycmF5LWlzYXJyYXkgLS0gc2FmZVxubW9kdWxlLmV4cG9ydHMgPSBBcnJheS5pc0FycmF5IHx8IGZ1bmN0aW9uIGlzQXJyYXkoYXJndW1lbnQpIHtcbiAgcmV0dXJuIGNsYXNzb2YoYXJndW1lbnQpID09PSAnQXJyYXknO1xufTtcbiIsIid1c2Ugc3RyaWN0JztcbnZhciAkID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2V4cG9ydCcpO1xudmFyIGZvckVhY2ggPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvYXJyYXktZm9yLWVhY2gnKTtcblxuLy8gYEFycmF5LnByb3RvdHlwZS5mb3JFYWNoYCBtZXRob2Rcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtYXJyYXkucHJvdG90eXBlLmZvcmVhY2hcbi8vIGVzbGludC1kaXNhYmxlLW5leHQtbGluZSBlcy9uby1hcnJheS1wcm90b3R5cGUtZm9yZWFjaCAtLSBzYWZlXG4kKHsgdGFyZ2V0OiAnQXJyYXknLCBwcm90bzogdHJ1ZSwgZm9yY2VkOiBbXS5mb3JFYWNoICE9PSBmb3JFYWNoIH0sIHtcbiAgZm9yRWFjaDogZm9yRWFjaFxufSk7XG4iLCIndXNlIHN0cmljdCc7XG52YXIgREVTQ1JJUFRPUlMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZGVzY3JpcHRvcnMnKTtcbnZhciBGVU5DVElPTl9OQU1FX0VYSVNUUyA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9mdW5jdGlvbi1uYW1lJykuRVhJU1RTO1xudmFyIHVuY3VycnlUaGlzID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2Z1bmN0aW9uLXVuY3VycnktdGhpcycpO1xudmFyIGRlZmluZUJ1aWx0SW5BY2Nlc3NvciA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kZWZpbmUtYnVpbHQtaW4tYWNjZXNzb3InKTtcblxudmFyIEZ1bmN0aW9uUHJvdG90eXBlID0gRnVuY3Rpb24ucHJvdG90eXBlO1xudmFyIGZ1bmN0aW9uVG9TdHJpbmcgPSB1bmN1cnJ5VGhpcyhGdW5jdGlvblByb3RvdHlwZS50b1N0cmluZyk7XG52YXIgbmFtZVJFID0gL2Z1bmN0aW9uXFxiKD86XFxzfFxcL1xcKltcXFNcXHNdKj9cXCpcXC98XFwvXFwvW15cXG5cXHJdKltcXG5cXHJdKykqKFteXFxzKC9dKikvO1xudmFyIHJlZ0V4cEV4ZWMgPSB1bmN1cnJ5VGhpcyhuYW1lUkUuZXhlYyk7XG52YXIgTkFNRSA9ICduYW1lJztcblxuLy8gRnVuY3Rpb24gaW5zdGFuY2VzIGAubmFtZWAgcHJvcGVydHlcbi8vIGh0dHBzOi8vdGMzOS5lcy9lY21hMjYyLyNzZWMtZnVuY3Rpb24taW5zdGFuY2VzLW5hbWVcbmlmIChERVNDUklQVE9SUyAmJiAhRlVOQ1RJT05fTkFNRV9FWElTVFMpIHtcbiAgZGVmaW5lQnVpbHRJbkFjY2Vzc29yKEZ1bmN0aW9uUHJvdG90eXBlLCBOQU1FLCB7XG4gICAgY29uZmlndXJhYmxlOiB0cnVlLFxuICAgIGdldDogZnVuY3Rpb24gKCkge1xuICAgICAgdHJ5IHtcbiAgICAgICAgcmV0dXJuIHJlZ0V4cEV4ZWMobmFtZVJFLCBmdW5jdGlvblRvU3RyaW5nKHRoaXMpKVsxXTtcbiAgICAgIH0gY2F0Y2ggKGVycm9yKSB7XG4gICAgICAgIHJldHVybiAnJztcbiAgICAgIH1cbiAgICB9XG4gIH0pO1xufVxuIiwiJ3VzZSBzdHJpY3QnO1xudmFyIGdsb2JhbCA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9nbG9iYWwnKTtcbnZhciBET01JdGVyYWJsZXMgPSByZXF1aXJlKCcuLi9pbnRlcm5hbHMvZG9tLWl0ZXJhYmxlcycpO1xudmFyIERPTVRva2VuTGlzdFByb3RvdHlwZSA9IHJlcXVpcmUoJy4uL2ludGVybmFscy9kb20tdG9rZW4tbGlzdC1wcm90b3R5cGUnKTtcbnZhciBmb3JFYWNoID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2FycmF5LWZvci1lYWNoJyk7XG52YXIgY3JlYXRlTm9uRW51bWVyYWJsZVByb3BlcnR5ID0gcmVxdWlyZSgnLi4vaW50ZXJuYWxzL2NyZWF0ZS1ub24tZW51bWVyYWJsZS1wcm9wZXJ0eScpO1xuXG52YXIgaGFuZGxlUHJvdG90eXBlID0gZnVuY3Rpb24gKENvbGxlY3Rpb25Qcm90b3R5cGUpIHtcbiAgLy8gc29tZSBDaHJvbWUgdmVyc2lvbnMgaGF2ZSBub24tY29uZmlndXJhYmxlIG1ldGhvZHMgb24gRE9NVG9rZW5MaXN0XG4gIGlmIChDb2xsZWN0aW9uUHJvdG90eXBlICYmIENvbGxlY3Rpb25Qcm90b3R5cGUuZm9yRWFjaCAhPT0gZm9yRWFjaCkgdHJ5IHtcbiAgICBjcmVhdGVOb25FbnVtZXJhYmxlUHJvcGVydHkoQ29sbGVjdGlvblByb3RvdHlwZSwgJ2ZvckVhY2gnLCBmb3JFYWNoKTtcbiAgfSBjYXRjaCAoZXJyb3IpIHtcbiAgICBDb2xsZWN0aW9uUHJvdG90eXBlLmZvckVhY2ggPSBmb3JFYWNoO1xuICB9XG59O1xuXG5mb3IgKHZhciBDT0xMRUNUSU9OX05BTUUgaW4gRE9NSXRlcmFibGVzKSB7XG4gIGlmIChET01JdGVyYWJsZXNbQ09MTEVDVElPTl9OQU1FXSkge1xuICAgIGhhbmRsZVByb3RvdHlwZShnbG9iYWxbQ09MTEVDVElPTl9OQU1FXSAmJiBnbG9iYWxbQ09MTEVDVElPTl9OQU1FXS5wcm90b3R5cGUpO1xuICB9XG59XG5cbmhhbmRsZVByb3RvdHlwZShET01Ub2tlbkxpc3RQcm90b3R5cGUpO1xuIl0sIm5hbWVzIjpbInJlcXVpcmUiLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJzZWFyY2giLCJnZXRFbGVtZW50QnlJZCIsInNlYXJjaF9jb250YWluZXIiLCJzaWRlX21lbnUiLCJxdWVyeVNlbGVjdG9yIiwiY2xvc2VfbWVudSIsIm1lbnVfYnV0dG9uIiwic2lkZV9tZW51X2FjdGl2ZV9pdGVtIiwic2lkZV9tZW51X2l0ZW1zIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInNpZGVfbWVudV9jb250ZW50IiwicHJvZHVjdF9jYXJkIiwicXVlcnlTZWxlY3RvckFsbCIsImUiLCJ0YXJnZXQiLCJjb250YWlucyIsImNsYXNzTGlzdCIsInJlbW92ZSIsImtleSIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsInZhbHVlIiwiZmV0Y2giLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwiaW5uZXJIVE1MIiwibGVuZ3RoIiwiYWRkIiwiaSIsImVsZW1lbnQiLCJuYW1lIiwiaHRtbCIsInRleHQiLCJzY3JpcHQiLCJldmFsIiwiX2xvb3AiLCJiYXNrZXRfYnV0dG9uIiwiZm9ybSIsIkZvcm1EYXRhIiwiZm9yRWFjaCIsImNsb3Nlc3QiLCJpZCIsImFwcGVuZCIsIm1ldGhvZCIsImJvZHkiLCJzdGF0dXMiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsInJlcGxhY2UiXSwic291cmNlUm9vdCI6IiJ9