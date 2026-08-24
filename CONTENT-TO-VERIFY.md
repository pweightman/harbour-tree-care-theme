# Content to verify before launch

The prototype's "Show items to check" button and `data-verify` markers were prototype-only scaffolding and have been stripped from the real build (per BUILD-SPEC §0). This file replaces them: it is the running list of everything on the site that is a placeholder or an unconfirmed claim, and **none of it should go live as written** until confirmed with the client.

Nothing here has been invented — unconfirmed figures (prices, insurance cover, review names) are shown as neutral placeholders, not fabricated values.

## Home page (`front-page.php`)

| Item | Current placeholder | Needs |
|---|---|---|
| Firewood prices | "Price on request" ×3 (Bulk bag / Half load / Full load) | Real product names, volumes and prices |
| Reviews | 3 real quote texts, attributed "Google review" only | Real reviewer first name, town and date; ideally pulled live once the Google Business Profile is claimed |
| Insurance (FAQ "Are you insured?") | "public liability and employer's liability insurance, certificates on request" — general claim, no figures | Confirm cover types and levels, and the insurer, before publishing |
| Hero point "Qualified climbers, fully insured" | as written | Confirm the insurance/qualification claim |
| Coverage map | Marked placeholder box | Generate a static map image of the LE17 catchment (not a Google iframe — keeps the page fast and cookie-free) |
| "49 years on the tools" trust stat | 49 (2026 − 1977) | Confirm the firm has traded continuously since 1977 |
| Opening hours (footer) | Mon–Fri 7.30am–5.30pm, Sat 8am–1pm | Confirm; confirm whether the yard takes visitors |
| Photos (hero climber, crew, log store) | Real photos from the asset library | Confirm these are the images the client wants to lead with |

## Site-wide

| Item | Needs |
|---|---|
| Phone / email / address / company no. | Confirm `01455 230643`, `07815 835588`, `info@harbourtreecare.co.uk`, `Ashby Magna … LE17 5NJ`, `08834201` (currently theme fallbacks in `harbour_business()`; become plugin settings in Phase 4) |
| Social URLs | Confirm the Facebook and Instagram handles in the footer |
| Accreditations / waste carrier licence / Arboricultural Association membership | Only add once evidenced (BUILD-SPEC §5) |
| Survey types & who signs them | Confirm which surveys are offered and the qualifications held (e.g. BS 5837) |
| Logo | High-res PNG in use; convert the EPS masters to SVG for the header (README item 2) |

Later pages (services, areas, about, contact) will add their own items here as they are built (Phase 5).
