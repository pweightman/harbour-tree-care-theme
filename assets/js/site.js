/**
 * Harbour Tree Care — site behaviour.
 * Vanilla JS, deferred, no dependencies. Keep it small.
 */
(function () {
	'use strict';

	/* Mobile menu toggle */
	var burger = document.querySelector('.burger');
	var mnav = document.getElementById('mnav');
	if (burger && mnav) {
		burger.addEventListener('click', function () {
			var open = mnav.classList.toggle('open');
			burger.setAttribute('aria-expanded', open ? 'true' : 'false');
		});
	}

	/* Desktop dropdowns: reflect focus state in aria-expanded, and let Escape
	   close the open submenu. The submenu itself is revealed by :focus-within
	   in CSS, so this only maintains ARIA state and Escape handling. */
	var parents = document.querySelectorAll('.nav-list > li');
	Array.prototype.forEach.call(parents, function (li) {
		var toggle = li.querySelector(':scope > a[aria-haspopup]');
		if (!toggle) { return; }
		li.addEventListener('focusin', function () {
			toggle.setAttribute('aria-expanded', 'true');
		});
		li.addEventListener('focusout', function () {
			if (!li.contains(document.activeElement)) {
				toggle.setAttribute('aria-expanded', 'false');
			}
		});
		li.addEventListener('keydown', function (e) {
			if (e.key === 'Escape') {
				toggle.setAttribute('aria-expanded', 'false');
				toggle.focus();
			}
		});
	});

	/* Reveal-on-scroll */
	var reveal = document.querySelectorAll('.reveal');
	if ('IntersectionObserver' in window) {
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('in');
					io.unobserve(entry.target);
				}
			});
		}, { rootMargin: '0px 0px -60px 0px' });
		Array.prototype.forEach.call(reveal, function (el) { io.observe(el); });
	} else {
		Array.prototype.forEach.call(reveal, function (el) { el.classList.add('in'); });
	}
})();
