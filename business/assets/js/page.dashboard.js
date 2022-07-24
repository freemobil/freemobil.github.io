/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/page.dashboard.js":
/*!**********************************!*\
  !*** ./src/js/page.dashboard.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  'use strict';

  $('[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    $(e.target).removeClass('active');
  });
  Charts.init();

  var EarningsTraffic = function EarningsTraffic(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area
        }
      }
    }, options);
    var data = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Traffic",
        data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Products = function Products(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    var data = arguments.length > 3 ? arguments[3] : undefined;
    options = Chart.helpers.merge({
      elements: {
        line: {
          fill: 'start',
          backgroundColor: settings.charts.colors.area,
          tension: 0,
          borderWidth: 1
        },
        point: {
          pointStyle: 'circle',
          radius: 5,
          hoverRadius: 5,
          backgroundColor: settings.colors.white,
          borderColor: settings.colors.primary[700],
          borderWidth: 2
        }
      },
      scales: {
        yAxes: [{
          display: false
        }],
        xAxes: [{
          display: false
        }]
      }
    }, options);
    data = data || {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [{
        label: "Earnings",
        data: [400, 200, 450, 460, 220, 380, 800]
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Courses = function Courses(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'line';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      elements: {
        line: {
          borderColor: settings.colors.success[700],
          backgroundColor: settings.hexToRGB(settings.colors.success[100], 0.5)
        },
        point: {
          borderColor: settings.colors.success[700]
        }
      }
    }, options);
    Products(id, type, options);
  };

  var LocationDoughnut = function LocationDoughnut(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'doughnut';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      tooltips: {
        callbacks: {
          title: function title(a, e) {
            return e.labels[a[0].index];
          },
          label: function label(a, e) {
            var t = "";
            return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>";
          }
        }
      }
    }, options);
    var data = {
      labels: ["United States", "United Kingdom", "Germany", "India"],
      datasets: [{
        data: [25, 25, 15, 35],
        backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors.primary[500], settings.colors.gray[300]],
        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
      }]
    };
    Charts.create(id, type, options, data);
  };

  var Orders = function Orders(id) {
    var type = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'roundedBar';
    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    options = Chart.helpers.merge({
      barRoundness: 1.2,
      scales: {
        yAxes: [{
          ticks: {
            callback: function callback(a) {
              if (!(a % 10)) return "$" + a + "k";
            }
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function label(a, e) {
            var t = e.datasets[a.datasetIndex].label || "",
                o = a.yLabel,
                r = "";
            return 1 < e.datasets.length && (r += '<span class="popover-body-label mr-auto">' + t + "</span>"), r += '<span class="popover-body-value">$' + o + "k</span>";
          }
        }
      }
    }, options);
    var data = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Sales",
        data: [25, 20, 30, 22, 17, 10, 18, 26, 28, 26, 20, 32],
        barPercentage: 0.5,
        barThickness: 20
      }]
    };
    Charts.create(id, type, options, data);
  }; ///////////////////
  // Create Charts //
  ///////////////////
  // EarningsTraffic('#earningsTrafficChart')
  // LocationDoughnut('#locationDoughnutChart')
  // Products('#productsChart')
  // Courses('#coursesChart')


  Orders('#ordersChartSwitch');
  $('[data-toggle="chart"]:checked').each(function (index, el) {
    Charts.add($(el));
  });
})();

/***/ }),

/***/ 6:
/*!****************************************!*\
  !*** multi ./src/js/page.dashboard.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/demi/Documents/GitHub/admin-bizzark/src/js/page.dashboard.js */"./src/js/page.dashboard.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3BhZ2UuZGFzaGJvYXJkLmpzIl0sIm5hbWVzIjpbIiQiLCJlIiwiQ2hhcnRzIiwiRWFybmluZ3NUcmFmZmljIiwidHlwZSIsIm9wdGlvbnMiLCJlbGVtZW50cyIsImxpbmUiLCJmaWxsIiwiYmFja2dyb3VuZENvbG9yIiwic2V0dGluZ3MiLCJhcmVhIiwiZGF0YSIsImxhYmVscyIsImRhdGFzZXRzIiwibGFiZWwiLCJQcm9kdWN0cyIsInRlbnNpb24iLCJib3JkZXJXaWR0aCIsInBvaW50IiwicG9pbnRTdHlsZSIsInJhZGl1cyIsImhvdmVyUmFkaXVzIiwiYm9yZGVyQ29sb3IiLCJzY2FsZXMiLCJ5QXhlcyIsImRpc3BsYXkiLCJ4QXhlcyIsIkNvdXJzZXMiLCJMb2NhdGlvbkRvdWdobnV0IiwidG9vbHRpcHMiLCJjYWxsYmFja3MiLCJ0aXRsZSIsImEiLCJ0IiwiaG92ZXJCb3JkZXJDb2xvciIsIndoaXRlIiwiT3JkZXJzIiwiYmFyUm91bmRuZXNzIiwidGlja3MiLCJjYWxsYmFjayIsIm8iLCJyIiwiYmFyUGVyY2VudGFnZSIsImJhclRoaWNrbmVzcyJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOzs7UUFHQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMENBQTBDLGdDQUFnQztRQUMxRTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLHdEQUF3RCxrQkFBa0I7UUFDMUU7UUFDQSxpREFBaUQsY0FBYztRQUMvRDs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0EseUNBQXlDLGlDQUFpQztRQUMxRSxnSEFB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RUFtQyxRQUFNLENBQU5BLG9CQUFNLENBQU5BO0FBRUFyQyxHQUFDLENBQURBLCtCQUFDLENBQURBLE1BQXdDLHFCQUFxQjtBQUMzREUsVUFBTSxDQUFOQSxJQUFXRixDQUFDLENBQVpFLEVBQVksQ0FBWkE7QUFERkY7QUFqS0YsSyIsImZpbGUiOiIvZGlzdC9hc3NldHMvanMvcGFnZS5kYXNoYm9hcmQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcbiBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4gXHRcdH1cbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbiBcdH07XG5cbiBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4gXHQvLyBtb2RlICYgMjogbWVyZ2UgYWxsIHByb3BlcnRpZXMgb2YgdmFsdWUgaW50byB0aGUgbnNcbiBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy50ID0gZnVuY3Rpb24odmFsdWUsIG1vZGUpIHtcbiBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4gXHRcdGlmKChtb2RlICYgNCkgJiYgdHlwZW9mIHZhbHVlID09PSAnb2JqZWN0JyAmJiB2YWx1ZSAmJiB2YWx1ZS5fX2VzTW9kdWxlKSByZXR1cm4gdmFsdWU7XG4gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShucywgJ2RlZmF1bHQnLCB7IGVudW1lcmFibGU6IHRydWUsIHZhbHVlOiB2YWx1ZSB9KTtcbiBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuIFx0XHRyZXR1cm4gbnM7XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIi9cIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDYpO1xuIiwiKGZ1bmN0aW9uKCl7XG4gICd1c2Ugc3RyaWN0JztcbiAgICBcbiAgJCgnW2RhdGEtdG9nZ2xlPVwidGFiXCJdJykub24oJ2hpZGUuYnMudGFiJywgZnVuY3Rpb24gKGUpIHtcbiAgICAkKGUudGFyZ2V0KS5yZW1vdmVDbGFzcygnYWN0aXZlJylcbiAgfSlcblxuICBDaGFydHMuaW5pdCgpXG4gIFxuICB2YXIgRWFybmluZ3NUcmFmZmljID0gZnVuY3Rpb24oaWQsIHR5cGUgPSAnbGluZScsIG9wdGlvbnMgPSB7fSkge1xuICAgIG9wdGlvbnMgPSBDaGFydC5oZWxwZXJzLm1lcmdlKHtcbiAgICAgIGVsZW1lbnRzOiB7XG4gICAgICAgIGxpbmU6IHtcbiAgICAgICAgICBmaWxsOiAnc3RhcnQnLFxuICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogc2V0dGluZ3MuY2hhcnRzLmNvbG9ycy5hcmVhXG4gICAgICAgIH1cbiAgICAgIH1cbiAgICB9LCBvcHRpb25zKVxuXG4gICAgdmFyIGRhdGEgPSB7XG4gICAgICBsYWJlbHM6IFtcIkphblwiLCBcIkZlYlwiLCBcIk1hclwiLCBcIkFwclwiLCBcIk1heVwiLCBcIkp1blwiLCBcIkp1bFwiLCBcIkF1Z1wiLCBcIlNlcFwiLCBcIk9jdFwiLCBcIk5vdlwiLCBcIkRlY1wiXSxcbiAgICAgIGRhdGFzZXRzOiBbe1xuICAgICAgICBsYWJlbDogXCJUcmFmZmljXCIsXG4gICAgICAgIGRhdGE6IFsxMCwgMiwgNSwgMTUsIDEwLCAxMiwgMTUsIDI1LCAyMiwgMzAsIDI1LCA0MF1cbiAgICAgIH1dXG4gICAgfVxuXG4gICAgQ2hhcnRzLmNyZWF0ZShpZCwgdHlwZSwgb3B0aW9ucywgZGF0YSlcbiAgfVxuXG4gIHZhciBQcm9kdWN0cyA9IGZ1bmN0aW9uKGlkLCB0eXBlID0gJ2xpbmUnLCBvcHRpb25zID0ge30sIGRhdGEpIHtcbiAgICBvcHRpb25zID0gQ2hhcnQuaGVscGVycy5tZXJnZSh7XG4gICAgICBlbGVtZW50czoge1xuICAgICAgICBsaW5lOiB7XG4gICAgICAgICAgZmlsbDogJ3N0YXJ0JyxcbiAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IHNldHRpbmdzLmNoYXJ0cy5jb2xvcnMuYXJlYSxcbiAgICAgICAgICB0ZW5zaW9uOiAwLFxuICAgICAgICAgIGJvcmRlcldpZHRoOiAxXG4gICAgICAgIH0sXG4gICAgICAgIHBvaW50OiB7XG4gICAgICAgICAgcG9pbnRTdHlsZTogJ2NpcmNsZScsXG4gICAgICAgICAgcmFkaXVzOiA1LFxuICAgICAgICAgIGhvdmVyUmFkaXVzOiA1LFxuICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogc2V0dGluZ3MuY29sb3JzLndoaXRlLFxuICAgICAgICAgIGJvcmRlckNvbG9yOiBzZXR0aW5ncy5jb2xvcnMucHJpbWFyeVs3MDBdLFxuICAgICAgICAgIGJvcmRlcldpZHRoOiAyXG4gICAgICAgIH1cbiAgICAgIH0sXG4gICAgICBzY2FsZXM6IHtcbiAgICAgICAgeUF4ZXM6IFt7XG4gICAgICAgICAgZGlzcGxheTogZmFsc2VcbiAgICAgICAgfV0sXG4gICAgICAgIHhBeGVzOiBbe1xuICAgICAgICAgIGRpc3BsYXk6IGZhbHNlXG4gICAgICAgIH1dXG4gICAgICB9XG4gICAgfSwgb3B0aW9ucylcblxuICAgIGRhdGEgPSBkYXRhIHx8IHtcbiAgICAgIGxhYmVsczogW1wiTW9uXCIsIFwiVHVlXCIsIFwiV2VkXCIsIFwiVGh1XCIsIFwiRnJpXCIsIFwiU2F0XCIsIFwiU3VuXCJdLFxuICAgICAgZGF0YXNldHM6IFt7XG4gICAgICAgIGxhYmVsOiBcIkVhcm5pbmdzXCIsXG4gICAgICAgIGRhdGE6IFs0MDAsIDIwMCwgNDUwLCA0NjAsIDIyMCwgMzgwLCA4MDBdXG4gICAgICB9XVxuICAgIH1cblxuICAgIENoYXJ0cy5jcmVhdGUoaWQsIHR5cGUsIG9wdGlvbnMsIGRhdGEpXG4gIH1cblxuICB2YXIgQ291cnNlcyA9IGZ1bmN0aW9uKGlkLCB0eXBlID0gJ2xpbmUnLCBvcHRpb25zID0ge30pIHtcbiAgICBvcHRpb25zID0gQ2hhcnQuaGVscGVycy5tZXJnZSh7XG4gICAgICBlbGVtZW50czoge1xuICAgICAgICBsaW5lOiB7XG4gICAgICAgICAgYm9yZGVyQ29sb3I6IHNldHRpbmdzLmNvbG9ycy5zdWNjZXNzWzcwMF0sXG4gICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBzZXR0aW5ncy5oZXhUb1JHQihzZXR0aW5ncy5jb2xvcnMuc3VjY2Vzc1sxMDBdLCAwLjUpXG4gICAgICAgIH0sXG4gICAgICAgIHBvaW50OiB7XG4gICAgICAgICAgYm9yZGVyQ29sb3I6IHNldHRpbmdzLmNvbG9ycy5zdWNjZXNzWzcwMF1cbiAgICAgICAgfVxuICAgICAgfVxuICAgIH0sIG9wdGlvbnMpXG5cbiAgICBQcm9kdWN0cyhpZCwgdHlwZSwgb3B0aW9ucylcbiAgfVxuXG4gIHZhciBMb2NhdGlvbkRvdWdobnV0ID0gZnVuY3Rpb24oaWQsIHR5cGUgPSAnZG91Z2hudXQnLCBvcHRpb25zID0ge30pIHtcbiAgICBvcHRpb25zID0gQ2hhcnQuaGVscGVycy5tZXJnZSh7XG4gICAgICB0b29sdGlwczoge1xuICAgICAgICBjYWxsYmFja3M6IHtcbiAgICAgICAgICB0aXRsZTogZnVuY3Rpb24oYSwgZSkge1xuICAgICAgICAgICAgcmV0dXJuIGUubGFiZWxzW2FbMF0uaW5kZXhdXG4gICAgICAgICAgfSxcbiAgICAgICAgICBsYWJlbDogZnVuY3Rpb24oYSwgZSkge1xuICAgICAgICAgICAgdmFyIHQgPSBcIlwiO1xuICAgICAgICAgICAgcmV0dXJuIHQgKz0gJzxzcGFuIGNsYXNzPVwicG9wb3Zlci1ib2R5LXZhbHVlXCI+JyArIGUuZGF0YXNldHNbMF0uZGF0YVthLmluZGV4XSArIFwiJTwvc3Bhbj5cIlxuICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgfVxuICAgIH0sIG9wdGlvbnMpXG5cbiAgICB2YXIgZGF0YSA9IHtcbiAgICAgIGxhYmVsczogW1wiVW5pdGVkIFN0YXRlc1wiLCBcIlVuaXRlZCBLaW5nZG9tXCIsIFwiR2VybWFueVwiLCBcIkluZGlhXCJdLFxuICAgICAgZGF0YXNldHM6IFt7XG4gICAgICAgIGRhdGE6IFsyNSwgMjUsIDE1LCAzNV0sXG4gICAgICAgIGJhY2tncm91bmRDb2xvcjogW3NldHRpbmdzLmNvbG9ycy5zdWNjZXNzWzQwMF0sIHNldHRpbmdzLmNvbG9ycy5kYW5nZXJbNDAwXSwgc2V0dGluZ3MuY29sb3JzLnByaW1hcnlbNTAwXSwgc2V0dGluZ3MuY29sb3JzLmdyYXlbMzAwXV0sXG4gICAgICAgIGhvdmVyQm9yZGVyQ29sb3I6IFwiZGFya1wiID09IHNldHRpbmdzLmNoYXJ0cy5jb2xvclNjaGVtZSA/IHNldHRpbmdzLmNvbG9ycy5ncmF5WzgwMF0gOiBzZXR0aW5ncy5jb2xvcnMud2hpdGVcbiAgICAgIH1dXG4gICAgfVxuXG4gICAgQ2hhcnRzLmNyZWF0ZShpZCwgdHlwZSwgb3B0aW9ucywgZGF0YSlcbiAgfVxuXG4gIHZhciBPcmRlcnMgPSBmdW5jdGlvbihpZCwgdHlwZSA9ICdyb3VuZGVkQmFyJywgb3B0aW9ucyA9IHt9KSB7XG4gICAgb3B0aW9ucyA9IENoYXJ0LmhlbHBlcnMubWVyZ2Uoe1xuICAgICAgYmFyUm91bmRuZXNzOiAxLjIsXG4gICAgICBzY2FsZXM6IHtcbiAgICAgICAgeUF4ZXM6IFt7XG4gICAgICAgICAgdGlja3M6IHtcbiAgICAgICAgICAgIGNhbGxiYWNrOiBmdW5jdGlvbihhKSB7XG4gICAgICAgICAgICAgIGlmICghKGEgJSAxMCkpXG4gICAgICAgICAgICAgICAgcmV0dXJuIFwiJFwiICsgYSArIFwia1wiXG4gICAgICAgICAgICB9XG4gICAgICAgICAgfVxuICAgICAgICB9XVxuICAgICAgfSxcbiAgICAgIHRvb2x0aXBzOiB7XG4gICAgICAgIGNhbGxiYWNrczoge1xuICAgICAgICAgIGxhYmVsOiBmdW5jdGlvbihhLCBlKSB7XG4gICAgICAgICAgICB2YXIgdCA9IGUuZGF0YXNldHNbYS5kYXRhc2V0SW5kZXhdLmxhYmVsIHx8IFwiXCIsXG4gICAgICAgICAgICAgICAgbyA9IGEueUxhYmVsLFxuICAgICAgICAgICAgICAgIHIgPSBcIlwiO1xuICAgICAgICAgICAgcmV0dXJuIDEgPCBlLmRhdGFzZXRzLmxlbmd0aCAmJiAociArPSAnPHNwYW4gY2xhc3M9XCJwb3BvdmVyLWJvZHktbGFiZWwgbXItYXV0b1wiPicgKyB0ICsgXCI8L3NwYW4+XCIpLCByICs9ICc8c3BhbiBjbGFzcz1cInBvcG92ZXItYm9keS12YWx1ZVwiPiQnICsgbyArIFwiazwvc3Bhbj5cIlxuICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgfVxuICAgIH0sIG9wdGlvbnMpXG5cbiAgICB2YXIgZGF0YSA9IHtcbiAgICAgIGxhYmVsczogW1wiSmFuXCIsIFwiRmViXCIsIFwiTWFyXCIsIFwiQXByXCIsIFwiTWF5XCIsIFwiSnVuXCIsIFwiSnVsXCIsIFwiQXVnXCIsIFwiU2VwXCIsIFwiT2N0XCIsIFwiTm92XCIsIFwiRGVjXCJdLFxuICAgICAgZGF0YXNldHM6IFt7XG4gICAgICAgIGxhYmVsOiBcIlNhbGVzXCIsXG4gICAgICAgIGRhdGE6IFsyNSwgMjAsIDMwLCAyMiwgMTcsIDEwLCAxOCwgMjYsIDI4LCAyNiwgMjAsIDMyXSxcbiAgICAgICAgYmFyUGVyY2VudGFnZTogMC41LFxuICAgICAgICBiYXJUaGlja25lc3M6IDIwLFxuICAgICAgfV1cbiAgICB9XG5cbiAgICBDaGFydHMuY3JlYXRlKGlkLCB0eXBlLCBvcHRpb25zLCBkYXRhKVxuICB9XG5cbiAgLy8vLy8vLy8vLy8vLy8vLy8vL1xuICAvLyBDcmVhdGUgQ2hhcnRzIC8vXG4gIC8vLy8vLy8vLy8vLy8vLy8vLy9cbiAgXG4gIC8vIEVhcm5pbmdzVHJhZmZpYygnI2Vhcm5pbmdzVHJhZmZpY0NoYXJ0JylcbiAgLy8gTG9jYXRpb25Eb3VnaG51dCgnI2xvY2F0aW9uRG91Z2hudXRDaGFydCcpXG4gIC8vIFByb2R1Y3RzKCcjcHJvZHVjdHNDaGFydCcpXG4gIC8vIENvdXJzZXMoJyNjb3Vyc2VzQ2hhcnQnKVxuXG4gIE9yZGVycygnI29yZGVyc0NoYXJ0U3dpdGNoJylcblxuICAkKCdbZGF0YS10b2dnbGU9XCJjaGFydFwiXTpjaGVja2VkJykuZWFjaChmdW5jdGlvbiAoaW5kZXgsIGVsKSB7XG4gICAgQ2hhcnRzLmFkZCgkKGVsKSlcbiAgfSlcblxufSkoKSJdLCJzb3VyY2VSb290IjoiIn0=