<?php

/*
|--------------------------------------------------------------------------
| Site Template Configuration
|--------------------------------------------------------------------------
|
| This is the SINGLE source of truth for everything the template renders.
| Edit values here to re-skin the entire site for any business — agency,
| restaurant, salon, clinic, gym, consultancy, studio, retailer, etc.
|
| A few patterns:
|   - Use plain strings for short copy.
|   - Use arrays (['title' => '…', 'body' => '…']) for repeating items
|     like services, portfolio pieces, pricing tiers and FAQ entries.
|   - Use https://… URLs for images, or paths under /public/images/ for
|     self-hosted assets.
|   - The 'theme' block drives the entire visual identity. Change the
|     accent color and the whole site re-skins.
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Brand
    |--------------------------------------------------------------------------
    */
    'brand' => [
        'name'    => 'Northwind & Co.',
        'tagline' => 'Brand & digital studio',
        'mark'    => '✦', // a single character used as the brand glyph
    ],

    /*
    |--------------------------------------------------------------------------
    | Meta / SEO
    |--------------------------------------------------------------------------
    */
    'meta' => [
        'description' => 'Northwind & Co. is a small brand and digital studio building considered identities and websites for businesses worth remembering.',
        'og_image'    => null, // absolute URL, e.g. 'https://…/og.jpg'
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    | The accent color drives every interactive element. Background, ink and
    | spacing are left alone — they form the editorial base.
    */
    'theme' => [
        'accent'      => '#c0532b', // terracotta
        'accent_deep' => '#9a3f1f',
        'accent_soft' => '#f1d9cb',
    ],

    /*
    |--------------------------------------------------------------------------
    | Hero
    |--------------------------------------------------------------------------
    */
    'hero' => [
        'eyebrow'        => 'Brand & digital studio',
        'headline'       => 'Considered design for businesses worth remembering.',
        'subhead'        => 'We help founders, studios and operators sharpen their brand and ship work that earns attention — without the agency overhead.',
        'cta_primary'    => ['label' => 'Start a project', 'href' => '#contact'],
        'cta_secondary'  => ['label' => 'See our work',    'href' => '#work'],
        'image'          => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=2400&q=80&auto=format&fit=crop',
        'image_alt'      => '',
    ],

    /*
    |--------------------------------------------------------------------------
    | Trust strip ("As featured in")
    |--------------------------------------------------------------------------
    */
    'trust' => [
        'label' => 'As featured in',
        'items' => ['Forbes', 'Monocle', 'Wallpaper*', 'It’s Nice That', 'Dezeen'],
    ],

    /*
    |--------------------------------------------------------------------------
    | About
    |--------------------------------------------------------------------------
    */
    'about' => [
        'headline'   => 'A small studio with a long view.',
        'lead'       => 'We’re a four-person studio working out of a converted print shop. Our clients range from two-person consultancies to established retailers who want their digital presence to match the quality of their work.',
        'body'       => 'Our process is deliberately slow. We read, we walk the site, we ask questions twice, and we draft more rounds than most studios are willing to. The result is identity and web work that holds up five years later — not a quarter after launch.',
        'image'      => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1600&q=80&auto=format&fit=crop',
        'image_alt'  => 'The studio’s print room, with letterpress and a long shared table.',
        'caption'    => 'The studio on a Tuesday morning, before the kettle goes cold.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        'headline' => 'What we do, end-to-end.',
        'sub'      => 'We work in two ways: focused engagements for a single deliverable, and longer partnerships that move through brand, web and product together.',
        'items'    => [
            ['title' => 'Brand identity',     'body' => 'Naming, positioning, logo, type and a small but rigorous set of touchpoints. We don’t do 80-page brand guidelines — we leave you with a system you’ll actually use.'],
            ['title' => 'Websites & digital', 'body' => 'Marketing sites, modest web apps and editor-driven publications. Built to be edited by your team after we hand it over — no black-box CMS.'],
            ['title' => 'Editorial & print',  'body' => 'Books, reports, menus, packaging and the occasional poster. We keep a small letterpress for proofs and editions.'],
            ['title' => 'Creative direction', 'body' => 'Ongoing advisory for teams that want a senior voice without hiring one full-time. Monthly retainers, six-month minimum.'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Selected work / portfolio
    |--------------------------------------------------------------------------
    */
    'work' => [
        'headline' => 'Recent and ongoing.',
        'items'    => [
            [
                'tag'       => 'Brand & web · 2025',
                'title'     => 'Halcyon Coffee Roasters',
                'desc'      => 'A new identity and direct-to-consumer site for a third-wave roaster opening its first flagship.',
                'image'     => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1600&q=80&auto=format&fit=crop',
                'image_alt' => 'A small espresso bar with a long brass-topped counter.',
                'offset'    => false,
                'href'      => '#',
            ],
            [
                'tag'       => 'Editorial · 2025',
                'title'     => 'The Field Notebook',
                'desc'      => 'A 240-page annual report for a regional land trust, written and designed in close collaboration with their team.',
                'image'     => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1600&q=80&auto=format&fit=crop',
                'image_alt' => 'An open book lying on a wooden table, type printed in two colours.',
                'offset'    => true,
                'href'      => '#',
            ],
            [
                'tag'       => 'Identity · 2024',
                'title'     => 'Mercer & Sons',
                'desc'      => 'Wordmark, type system and packaging for a fourth-generation hardware supplier in Bristol.',
                'image'     => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600&q=80&auto=format&fit=crop',
                'image_alt' => 'A tidy hardware shop with hand-painted signage and stacked tins.',
                'offset'    => false,
                'href'      => '#',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Testimonial
    |--------------------------------------------------------------------------
    */
    'testimonial' => [
        'quote' => 'Northwind did the only thing we really needed — they slowed us down, asked better questions, and shipped a brand we still recognise three years later.',
        'name'  => 'Imogen Hart',
        'role'  => 'Founder, Halcyon Coffee Roasters',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pricing
    |--------------------------------------------------------------------------
    */
    'pricing' => [
        'headline' => 'Three ways to work with us.',
        'sub'      => 'Pick the shape that fits — or write to us with something custom.',
        'currency' => '$',
        'tiers'    => [
            [
                'name'     => 'Studio',
                'tagline'  => 'A focused single deliverable.',
                'price'    => '8,500',
                'features' => [
                    'One defined deliverable',
                    '6–8 week timeline',
                    'Two rounds of revision',
                    'Final hand-off & support',
                ],
                'featured' => false,
                'cta'      => ['label' => 'Choose Studio', 'href' => '#contact'],
            ],
            [
                'name'     => 'Practice',
                'tagline'  => 'Brand & web, together.',
                'price'    => '24,000',
                'features' => [
                    'Identity + website',
                    '12–16 week timeline',
                    'Three rounds of revision',
                    'Photography direction',
                    '90 days post-launch support',
                ],
                'featured' => true,
                'flag'     => 'Most popular',
                'cta'      => ['label' => 'Choose Practice', 'href' => '#contact'],
            ],
            [
                'name'     => 'Partnership',
                'tagline'  => 'Ongoing, monthly.',
                'price'    => '6,500 / mo',
                'features' => [
                    'Dedicated senior team',
                    'Two active workstreams',
                    'Weekly working session',
                    'Six-month minimum',
                ],
                'featured' => false,
                'cta'      => ['label' => 'Choose Partnership', 'href' => '#contact'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | FAQ
    |--------------------------------------------------------------------------
    */
    'faq' => [
        'headline' => 'Things people ask before we start.',
        'items'    => [
            ['q' => 'How long does a typical project take?',                                                  'a' => 'A focused Studio engagement runs six to eight weeks. A Practice engagement (brand + web) typically takes twelve to sixteen. We share a detailed schedule in week one and update it weekly.'],
            ['q' => 'Do you work with companies outside the UK?',                                              'a' => 'About half of our work is international. We overlap with European mornings and US afternoons, and we’re used to running reviews asynchronously when the timezones get awkward.'],
            ['q' => 'What happens after you hand the work over?',                                              'a' => 'Every project includes a structured hand-off: editable source files, a documented system, and a recorded walkthrough with your team. We don’t lock you into a maintenance contract.'],
            ['q' => 'Can you white-label for our agency?',                                                     'a' => 'Yes, regularly. We’re comfortable working under NDAs and inside other studios’ processes. Get in touch and we’ll send our partner terms.'],
            ['q' => 'What does the investment actually cover?',                                                'a' => 'Everything scoped in the proposal — strategy, design, build, photography direction, revisions and hand-off. The only things billed separately are third-party costs (type licensing, photography, hosting) which we always flag in advance.'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact (final CTA + form)
    |--------------------------------------------------------------------------
    */
    'contact_section' => [
        'headline' => 'Tell us what you’re working on.',
        'body'     => 'We read every inquiry and reply within two working days. The more you can tell us about your business and the moment you’re in, the better.',
        'form'     => [
            'action' => 'mailto:hello@northwind.studio',
            'subject' => 'Project inquiry',
            'fine_print' => 'Or email directly:',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact details (used in footer + form mailto)
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'email'   => 'hello@northwind.studio',
        'phone'   => null, // optional, displayed in footer if set
        'instagram' => 'https://instagram.com/northwindstudio',
        'linkedin'  => 'https://linkedin.com/company/northwind-studio',
        'location_url'   => 'https://maps.google.com/?q=Bristol+UK',
        'location_label' => 'Bristol, UK',
        'hours' => [
            'weekday' => '09:00 – 18:00',
            'saturday' => 'By appointment',
            'sunday'   => 'Closed',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */
    'footer' => [
        'tagline' => 'Considered design for businesses worth remembering.',
    ],
];