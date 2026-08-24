# Changelog

All notable changes to this theme are documented here. Format: [Keep a Changelog](https://keepachangelog.com/en/1.1.0/). Versioning: [SemVer](https://semver.org/).

## [Unreleased]
### Added
- Templates: single-service, single-area, archive-service, archive-area, page-contact, page-about, generic page, 404, search + searchform, ported from the prototype pages.
- Reusable helpers: `harbour_page_hero()`, `harbour_cta_band()`, `harbour_quote_card()`.
- Content-to-verify checklist extended with the service/area page items.

### Added
- Home page (`front-page.php`) ported section by section from the prototype: hero, trust strip, services grid, heritage split, "how it works" process, storm-damage band, testimonials, coverage/areas, firewood, FAQ and the enquiry-form section.
- Real photography from the asset library wired into the hero, crew and log-store slots; enquiry form rendered via `parts/quote-form-placeholder.php` pending the harbour-core form (Phase 4).
- Real brand logo reversed for the dark footer; "Website design and hosting by Hynca Consulting Ltd" credit.
- `CONTENT-TO-VERIFY.md` — the running list of placeholders and unconfirmed claims that replaces the prototype's stripped `data-verify` tooling.

### Added (chrome)
- Full theme chrome ported from the prototype: `style.css` (design tokens), `theme.json`, `header.php`, `footer.php`, sticky top bar, sticky masthead, keyboard-operable dropdown nav (`Harbour_Nav_Walker`), flattened mobile nav (`Harbour_Mobile_Nav_Walker`), sticky mobile action bar.
- Self-hosted Inter (latin-subset woff2), skip link, screen-reader-text and visible-focus utilities for WCAG 2.2 AA.
- Business-facts helper (`harbour_business()`) that reads harbour-core settings with safe fallbacks, so no phone/address/email is hardcoded in templates and the theme degrades gracefully when the plugin is inactive.
- `custom-logo` support; real brand logo wired in.
### Changed
- Rebranded to the real Harbour Tree Care identity: blue palette (navy #0F136F, sky #2E6FC2/#3F7DC9) replacing the prototype's green/amber, and sans-serif (Inter) headings replacing Fraunces. Layout, spacing and structure unchanged.

## [0.1.1] - 2026-08-24
### Changed
- Proved the self-update pipeline end to end: release detection and clean in-place update from GitHub Releases.

## [0.1.0] - 2026-08-24
### Added
- Initial theme skeleton: header, description, single stylesheet, minimal templates.
- Self-updating from GitHub Releases via Plugin Update Checker v5.7 (`inc/updates.php`).
- Release CI: tag/header version guard, `php -l` lint, distribution zip with the correct wrapping folder.
