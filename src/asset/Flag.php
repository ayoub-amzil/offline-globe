<?php

namespace asset;

class Flag
{
    public static function flags()
    {
        return  $flags = [
        'algeria' => 'dz',
        'angola' => 'ao',
        'benin' => 'bj',
        'botswana' => 'bw',
        'burkina_faso' => 'bf',
        'burundi' => 'bi',
        'cabo_verde' => 'cv',
        'cameroon' => 'cm',
        'central_african_republic' => 'cf',
        'chad' => 'td',
        'comoros' => 'km',
        'democratic_republic_of_the_congo' => 'cd',
        'djibouti' => 'dj',
        'egypt' => 'eg',
        'equatorial_guinea' => 'gq',
        'eritrea' => 'er',
        'eswatini' => 'sz',
        'ethiopia' => 'et',
        'gabon' => 'ga',
        'gambia' => 'gm',
        'ghana' => 'gh',
        'guinea' => 'gn',
        'guinea-bissau' => 'gw',
        'ivory_coast' => 'ci',
        'kenya' => 'ke',
        'lesotho' => 'ls',
        'liberia' => 'lr',
        'libya' => 'ly',
        'madagascar' => 'mg',
        'malawi' => 'mw',
        'mali' => 'ml',
        'mauritania' => 'mr',
        'mauritius' => 'mu',
        'morocco' => 'ma',
        'mozambique' => 'mz',
        'namibia' => 'na',
        'niger' => 'ne',
        'nigeria' => 'ng',
        'rwanda' => 'rw',
        'sao_tome_and_principe' => 'st',
        'senegal' => 'sn',
        'seychelles' => 'sc',
        'sierra_leone' => 'sl',
        'somalia' => 'so',
        'south_africa' => 'za',
        'south_sudan' => 'ss',
        'sudan' => 'sd',
        'tanzania' => 'tz',
        'togo' => 'tg',
        'tunisia' => 'tn',
        'uganda' => 'ug',
        'zambia' => 'zm',
        'zimbabwe' => 'zw',
        'afghanistan' => 'af',
        'armenia' => 'am',
        'azerbaijan' => 'az',
        'bahrain' => 'bh',
        'bangladesh' => 'bd',
        'bhutan' => 'bt',
        'brunei' => 'bn',
        'cambodia' => 'kh',
        'china' => 'cn',
        'cyprus' => 'cy',
        'georgia' => 'ge',
        'india' => 'in',
        'indonesia' => 'id',
        'iran' => 'ir',
        'iraq' => 'iq',
        'israel' => 'il',
        'japan' => 'jp',
        'jordan' => 'jo',
        'kazakhstan' => 'kz',
        'kuwait' => 'kw',
        'kyrgyzstan' => 'kg',
        'laos' => 'la',
        'lebanon' => 'lb',
        'malaysia' => 'my',
        'maldives' => 'mv',
        'mongolia' => 'mn',
        'myanmar_(burma)' => 'mm',
        'nepal' => 'np',
        'north_korea' => 'kp',
        'oman' => 'om',
        'pakistan' => 'pk',
        'palestine' => 'ps',
        'philippines' => 'ph',
        'qatar' => 'qa',
        'saudi_arabia' => 'sa',
        'singapore' => 'sg',
        'south_korea' => 'kr',
        'sri_lanka' => 'lk',
        'syria' => 'sy',
        'taiwan' => 'tw',
        'tajikistan' => 'tj',
        'thailand' => 'th',
        'timor-leste' => 'tl',
        'turkey' => 'tr',
        'turkmenistan' => 'tm',
        'united_arab_emirates' => 'ae',
        'uzbekistan' => 'uz',
        'vietnam' => 'vn',
        'yemen' => 'ye',
        'albania' => 'al',
        'andorra' => 'ad',
        'austria' => 'at',
        'belarus' => 'by',
        'belgium' => 'be',
        'bosnia_and_herzegovina' => 'ba',
        'bulgaria' => 'bg',
        'croatia' => 'hr',
        'czech_republic' => 'cz',
        'denmark' => 'dk',
        'estonia' => 'ee',
        'finland' => 'fi',
        'france' => 'fr',
        'germany' => 'de',
        'greece' => 'gr',
        'hungary' => 'hu',
        'iceland' => 'is',
        'ireland' => 'ie',
        'italy' => 'it',
        'kosovo' => 'xk',
        'latvia' => 'lv',
        'liechtenstein' => 'li',
        'lithuania' => 'lt',
        'luxembourg' => 'lu',
        'malta' => 'mt',
        'moldova' => 'md',
        'monaco' => 'mc',
        'montenegro' => 'me',
        'netherlands' => 'nl',
        'north_macedonia' => 'mk',
        'norway' => 'no',
        'poland' => 'pl',
        'portugal' => 'pt',
        'romania' => 'ro',
        'russia' => 'ru',
        'san_marino' => 'sm',
        'serbia' => 'rs',
        'slovakia' => 'sk',
        'slovenia' => 'si',
        'spain' => 'es',
        'sweden' => 'se',
        'switzerland' => 'ch',
        'ukraine' => 'ua',
        'united_kingdom' => 'gb',
        'vatican_city' => 'va',
        'antigua_and_barbuda' => 'ag',
        'bahamas' => 'bs',
        'barbados' => 'bb',
        'belize' => 'bz',
        'canada' => 'ca',
        'costa_rica' => 'cr',
        'cuba' => 'cu',
        'dominica' => 'dm',
        'dominican_republic' => 'do',
        'el_salvador' => 'sv',
        'grenada' => 'gd',
        'guatemala' => 'gt',
        'haiti' => 'ht',
        'honduras' => 'hn',
        'jamaica' => 'jm',
        'mexico' => 'mx',
        'nicaragua' => 'ni',
        'panama' => 'pa',
        'saint_kitts_and_nevis' => 'kn',
        'saint_lucia' => 'lc',
        'saint_vincent_and_the_grenadines' => 'vc',
        'trinidad_and_tobago' => 'tt',
        'united_states' => 'us',
        'argentina' => 'ar',
        'bolivia' => 'bo',
        'brazil' => 'br',
        'chile' => 'cl',
        'colombia' => 'co',
        'ecuador' => 'ec',
        'guyana' => 'gy',
        'paraguay' => 'py',
        'peru' => 'pe',
        'suriname' => 'sr',
        'uruguay' => 'uy',
        'venezuela' => 've',
        'french_guiana' => 'gf',
        'australia' => 'au',
        'fiji' => 'fj',
        'kiribati' => 'ki',
        'marshall_islands' => 'mh',
        'micronesia' => 'fm',
        'nauru' => 'nr',
        'new_zealand' => 'nz',
        'palau' => 'pw',
        'papua_new_guinea' => 'pg',
        'samoa' => 'ws',
        'solomon_islands' => 'sb',
        'tonga' => 'to',
        'tuvalu' => 'tv',
        'vanuatu' => 'vu',
    ];
    }
}