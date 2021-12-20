(function ($, window, undefined) {
	'use strict'

	$.fn.cleave = function (opts) {

		const defaults = {autoUnmask: false},
			options = $.extend(defaults, opts || {});

		return this.each(function () {

			const cleave = new Cleave('#' + this.id, options), $this = $(this);

			$this.data('cleave-auto-unmask', options['autoUnmask']);
			;
			$this.data('cleave', cleave)
		});
	}

	let origGetHook, origSetHook;

	if ($.valHooks.input) {

		origGetHook = $.valHooks.input.get;
		origSetHook = $.valHooks.input.set;

	} else {

		$.valHooks.input = {};
	}

	$.valHooks.input.get = function (el) {

		const $el = $(el), cleave = $el.data('cleave');

		if (cleave) {

			return $el.data('cleave-auto-unmask') ? cleave.getRawValue() : el.value;

		} else if (origGetHook) {

			return origGetHook(el);

		} else {

			return undefined;
		}
	}

	$.valHooks.input.set = function (el, val) {

		const $el = $(el), cleave = $el.data('cleave');

		if (cleave) {

			cleave.setRawValue(val);
			return $el;

		} else if (origSetHook) {

			return origSetHook(el);

		} else {
			return undefined;
		}
	}
})(jQuery, window);
