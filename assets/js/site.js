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

	/* Header search toggle. The magnifier in the header reveals a search panel
	   below it; Escape or an outside click closes it, and focus moves into the
	   field on open. */
	var searchToggle = document.querySelector('.search-toggle');
	var headerSearch = document.getElementById('site-search');
	if (searchToggle && headerSearch) {
		var closeSearch = function () {
			headerSearch.classList.remove('open');
			searchToggle.setAttribute('aria-expanded', 'false');
		};
		searchToggle.addEventListener('click', function () {
			var open = headerSearch.classList.toggle('open');
			searchToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			if (open) {
				var field = headerSearch.querySelector('input[type="search"]');
				if (field) { field.focus(); }
			}
		});
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && headerSearch.classList.contains('open')) {
				closeSearch();
				searchToggle.focus();
			}
		});
		document.addEventListener('click', function (e) {
			if (headerSearch.classList.contains('open') &&
				!headerSearch.contains(e.target) && !searchToggle.contains(e.target)) {
				closeSearch();
			}
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

	/* Guard against double submits. The enquiry form's response is slow (photo
	   processing + email), so visitors are tempted to tap Send again, which used
	   to create duplicate enquiries. Lock the form on first submit: disable the
	   button, show progress, and block any further submit of the same form. The
	   server-side fingerprint guard is the real backstop; this just stops the
	   taps happening. */
	Array.prototype.forEach.call(document.querySelectorAll('form.form-card'), function (form) {
		var locked = false;
		form.addEventListener('submit', function (e) {
			if (locked) {
				e.preventDefault();
				return;
			}
			locked = true;
			var btn = form.querySelector('[type="submit"]');
			if (btn) {
				btn.setAttribute('aria-disabled', 'true');
				btn.dataset.label = btn.textContent;
				btn.textContent = 'Sending…';
				/* Disable after the event so the button's submission isn't cancelled. */
				setTimeout(function () { btn.disabled = true; }, 0);
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
