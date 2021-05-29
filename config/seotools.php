<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "CCK's Blog", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Ching Cheng Kang's Personal Blog and also act as his own knowledge base ! (He is a forgetful person)", // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['chengkangzai','Ching Cheng Kang','Cheng Kang','Malaysia Laravel Developer'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => "CCK's Blog", // set false to total remove
            'description' => "Ching Cheng Kang's Personal Blog and also act as his own knowledge base ! (He is a forgetful person)", // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [Config('app.url').'/src/bighead.jpeg'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@chengkangzai',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => "CCK's Blog", // set false to total remove
            'description' => "Ching Cheng Kang's Personal Blog and also act as his own knowledge base ! (He is a forgetful person)", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [Config('app.url').'/src/bighead.jpeg'],
        ],
    ],
];
