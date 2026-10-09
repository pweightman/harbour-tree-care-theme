# Changelog

All notable changes to this theme are documented here. Format: [Keep a Changelog](https://keepachangelog.com/en/1.1.0/). Versioning: [SemVer](https://semver.org/).

## [Unreleased]

## [0.6.1] - 2026-10-09
### Fixed
- Asset cache-busting: `HARBOUR_THEME_VERSION` was hardcoded at `0.3.1` and never bumped, so `style.css` and `site.js` loaded with `?ver=0.3.1` on every release — meaning CDN/browser caches kept serving the *old* CSS/JS after a theme update. It's now derived from the theme header, so assets bust cache automatically on every update.

## [0.6.0] - 2026-10-09
### Added
- Favicon: a crisp on-brand SVG (`assets/img/favicon.svg`) — the navy seedling-in-hand mark from the logo — output in the head, so the site shows an icon in browser tabs. It defers automatically to a WordPress Site Icon if one is set (Appearance → Customize → Site Identity), which also covers the iOS home-screen icon.
### Changed
- Credentials confirmed and made specific: the homepage trust point now reads **"NPTC-qualified climbers, fully insured"**, and the About page's "The paperwork" section states that staff hold the relevant NPTC qualifications and the business carries liability insurance (certificates on request). Cleared the matching rows in `CONTENT-TO-VERIFY.md`.
### Fixed
- `theme-color` meta was still the old pre-rebrand green (`#1D4230`); updated to the brand navy (`#0F136F`).

## [0.5.0] - 2026-10-09
### Added
- Advice articles now show their topic tags as pill links at the foot of the article. Only tags substantial enough to be topic pages are surfaced — those with at least the shared threshold of linked articles (`harbour_tag_min_posts`, default 3).
- Tag archives render as proper topic landing pages: clean capitalised heading (no "Tag:" prefix), an intro (the tag description, or a sensible default), the article grid, a Home › Advice › Tag breadcrumb and the quote CTA band. New `harbour_post_tag_links()` / `harbour_tag_min_posts()` helpers and tag-pill styles.

## [0.4.2] - 2026-10-09
### Changed
- Verified PHP 8.5 compatibility (production now runs PHP 8.5): clean lint under 8.5 and every page type rendered with no deprecations or warnings. No code changes were required.
- CI now lints against a PHP matrix of 8.1, 8.3 and 8.5 (was 8.3 only).

## [0.4.1] - 2026-09-29
### Fixed
- Update checks failed with GitHub API HTTP 403 on shared hosting (the unauthenticated 60-requests/hour-per-IP limit). The update checker now uses an optional GitHub token when the `HARBOUR_GITHUB_TOKEN` constant is defined in `wp-config.php`, raising the limit to 5,000/hour. Without the constant, behaviour is unchanged.

## [0.4.0] - 2026-09-29
### Added
- Advice (blog) templates matching the design system: `home.php` (the `/advice/` index — H1, intro, card grid with featured image, excerpt, date and reading time, pagination, quote CTA band), `single.php` (breadcrumb, meta, comfortable reading-width body with h2/h3/list/table/blockquote styling, an end-of-article CTA that switches to "Order logs" for firewood topics, and 3 related posts), and `archive.php` / `category.php` (the same grid with the category name as H1). Empty `/advice/` shows the intro and "Articles coming soon".
- "Latest advice" strip (3 most recent posts) on the homepage, hidden when there are no posts.
- "Related advice" on service pages when posts link to that service.
- Template helpers: `harbour_reading_time()`, `harbour_is_firewood_post()`, `harbour_post_card()`, `harbour_advice_grid()`, `harbour_related_advice_for_service()`.
### Changed
- Blog post structured data (`BlogPosting` + breadcrumb) is now emitted by harbour-core so there is a single JSON-LD source; the standalone script previously in `single.php` has been removed. Requires harbour-core 0.6.0+.
- Confirmed the theme adds no hard-coded `<title>`, meta description, canonical or Open Graph — `add_theme_support( 'title-tag' )` is on and `wp_head()` is called once, so Rank Math (or harbour-core's fallback) fully controls SEO output.

## [0.3.1] - 2026-08-25
### Fixed
- 404 template referenced an undefined `$service_archive`, causing PHP notices on any 404. Defined it before use.

## [0.3.0] - 2026-08-25
### Added
- New page templates: Prices (`page-tree-surgery-prices.php`) and Emergency (`page-emergency-tree-surgeon-leicestershire.php`), ported from the revised prototype.
### Changed
- Revised home and about copy (SEO rewrite): hero now leads with the services and a clearer offer; button labels updated.
- Per-page SEO title + meta description now render from harbour-core fields.

## [0.2.0] - 2026-08-24
### Added
- `inc/performance.php`: dequeue block-library/global-styles CSS, disable emoji, oEmbed and XML-RPC, trim wp_head, drop wp-embed on the front end.
- AVIF + WebP versions of the hero, crew and log-store images, served via a `harbour_picture()` `<picture>` helper (AVIF → WebP → JPG), hero prioritised.
- CI workflow (php -l + PHPCS WordPress-Extra) and a dev composer.json.
### Changed
- Theme is clean against WordPress-Extra (PHPCS): output escaping, translator comments, and fixes for a WP global-variable clash (`$s`) and reserved parameter names.

### Added
- Templates for the new content: page-order-logs (firewood products + log-order form), archive-job and single-job (before/after gallery), plus job-gallery CSS.
- Dynamic reviews section on service and area pages (renders only when real reviews exist).

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
