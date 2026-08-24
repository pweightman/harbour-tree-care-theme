# Harbour Tree Care — WordPress theme

Custom classic PHP theme (with block-editor support) for Harbour Tree Care, family-run tree surgeons in Leicestershire since 1977. Presentation only — all functionality lives in the companion [`harbour-core`](https://github.com/pweightman/harbour-core) plugin, so this theme can be redesigned without touching enquiries, orders, reviews or the job gallery.

Installed as `wp-content/themes/harbour-tree-care`.

## Self-updating

The live site offers updates in **Appearance → Themes** whenever a new release is tagged here, using a vendored copy of [Plugin Update Checker](https://github.com/YahnisElsts/plugin-update-checker) v5.7 (`inc/vendor/`, committed — not fetched at runtime). Wiring is in `inc/updates.php`.

> **Fallback:** if that library is ever abandoned, the same job can be done dependency-free with WordPress's native `Update URI:` theme header and the `update_themes_{$hostname}` filter (introduced in WP 6.1). It means writing and hosting the update JSON yourself.

## Releasing

The `Version:` header in `style.css` is the single source of truth and **must** equal the release tag minus the `v`. CI enforces this.

```bash
# bump Version: in style.css, update CHANGELOG.md, commit
git commit -am "chore(release): v0.1.1"
git tag v0.1.1
git push origin main --tags
```

CI lints every PHP file, builds `harbour-tree-care.zip` with the correct wrapping folder, and attaches it to the release. The live site sees it within 12 hours, or immediately on a manual check.

## Development

See `LOCAL-DEV.md` in the build workspace. Requires WordPress 6.5+ and PHP 8.1+ (developed against PHP 8.3 to match the host). No build step: hand-written CSS and JS ship as-is.

Before every commit:

```bash
find . -name '*.php' -not -path '*/vendor/*' -exec php -l {} \;
```
