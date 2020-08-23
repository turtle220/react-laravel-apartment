(function() {
    function e(t, n, r) {
        function s(o, u) {
            if (!n[o]) {
                if (!t[o]) {
                    var a = typeof require == 'function' && require;
                    if (!u && a) return a(o, !0);
                    if (i) return i(o, !0);
                    var f = new Error("Cannot find module '" + o + "'");
                    throw ((f.code = 'MODULE_NOT_FOUND'), f);
                }
                var l = (n[o] = { exports: {} });
                t[o][0].call(
                    l.exports,
                    function(e) {
                        var n = t[o][1][e];
                        return s(n ? n : e);
                    },
                    l,
                    l.exports,
                    e,
                    t,
                    n,
                    r
                );
            }
            return n[o].exports;
        }
        var i = typeof require == 'function' && require;
        for (var o = 0; o < r.length; o++) s(r[o]);
        return s;
    }
    return e;
})()(
    {
        1: [
            function(require, module, exports) {
                'use strict';

                Object.defineProperty(exports, '__esModule', {
                    value: true
                });
                exports.Navigation = undefined;

                var _createClass = (function() {
                    function defineProperties(target, props) {
                        for (var i = 0; i < props.length; i++) {
                            var descriptor = props[i];
                            descriptor.enumerable = descriptor.enumerable || false;
                            descriptor.configurable = true;
                            if ('value' in descriptor) descriptor.writable = true;
                            Object.defineProperty(target, descriptor.key, descriptor);
                        }
                    }
                    return function(Constructor, protoProps, staticProps) {
                        if (protoProps) defineProperties(Constructor.prototype, protoProps);
                        if (staticProps) defineProperties(Constructor, staticProps);
                        return Constructor;
                    };
                })();

                var _jquery = window.$;

                var _jquery2 = _interopRequireDefault(_jquery);

                function _interopRequireDefault(obj) {
                    return obj && obj.__esModule ? obj : { default: obj };
                }

                function _classCallCheck(instance, Constructor) {
                    if (!(instance instanceof Constructor)) {
                        throw new TypeError('Cannot call a class as a function');
                    }
                }

                var Navigation = (exports.Navigation = (function() {
                    function Navigation(element) {
                        _classCallCheck(this, Navigation);

                        this.$element = (0, _jquery2.default)(element);
                        this.$element.find('a').mouseover(function() {
                            var $link = (0, _jquery2.default)(this);
                            var target = $link.siblings('.sub-navigation');
                            if (!(0, _jquery2.default)('.check.visible-md').is(':visible')) {
                                if (target.length > 0) {
                                    $link.addClass('active');
                                    $link.parent().addClass('active');
                                    $link.mouseout(Navigation.hide);
                                    $link.parent().mouseout(Navigation.hide);
                                    (0, _jquery2.default)(target).addClass('active');
                                }
                            }
                        });
                        this.$element.find('a').click(function(e) {
                            var $link = (0, _jquery2.default)(this);
                            var target = $link.siblings('.sub-navigation');
                            if (Navigation.isHamburger()) {
                                if (target.length > 0) {
                                    e.preventDefault();
                                    var $target = (0, _jquery2.default)(target);
                                    if ($target.hasClass('expanded')) {
                                        $target.removeClass('expanded');
                                    } else {
                                        $target.addClass('expanded');
                                    }
                                }
                            } else {
                                return true;
                            }
                        });
                        this.$element.find('.sub-navigation .title a').click(function(e) {
                            var $link = (0, _jquery2.default)(this);
                            if (Navigation.isHamburger()) {
                                e.preventDefault();
                                if ($link.hasClass('expanded')) {
                                    $link.removeClass('expanded');
                                    $link
                                        .parent()
                                        .parent()
                                        .find('.items')
                                        .removeClass('expanded');
                                } else {
                                    $link.addClass('expanded');
                                    $link
                                        .parent()
                                        .parent()
                                        .find('.items')
                                        .addClass('expanded');
                                }
                            } else {
                                return true;
                            }
                        });
                    }

                    _createClass(Navigation, null, [
                        {
                            key: 'hide',
                            value: function hide(e) {
                                var $currentLink = (0, _jquery2.default)('.navigation a.active'),
                                    target = $currentLink.siblings('.sub-navigation'),
                                    $currentTarget = (0, _jquery2.default)(e.relatedTarget);
                                if (
                                    target &&
                                    !$currentTarget.hasClass('active') &&
                                    !$currentTarget.hasClass('sub-navigation') &&
                                    $currentTarget.parents('.sub-navigation').length == 0
                                ) {
                                    (0, _jquery2.default)(target).removeClass('active');
                                    $currentLink.removeClass('active');
                                    $currentLink.parent().removeClass('active');
                                }
                            }
                        },
                        {
                            key: 'isHamburger',
                            value: function isHamburger() {
                                return (
                                    (0, _jquery2.default)('.check.visible-md').is(':visible') ||
                                    (0, _jquery2.default)('.check.visible-sm').is(':visible') ||
                                    (0, _jquery2.default)('.check.visible-xxs').is(':visible') ||
                                    (0, _jquery2.default)('.check.visible-xs').is(':visible')
                                );
                            }
                        }
                    ]);

                    return Navigation;
                })());

                (0, _jquery2.default)(function() {
                    new Navigation('.navigation');
                });
            },
            {}
        ]
    },
    {},
    [1]
);
