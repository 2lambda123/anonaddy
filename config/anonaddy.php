<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Return Path
    |--------------------------------------------------------------------------
    |
    | This will be used as the return-path header for outbound emails
    |
    */

    'return_path' => env('ANONADDY_RETURN_PATH'),

    /*
    |--------------------------------------------------------------------------
    | Admin Username
    |--------------------------------------------------------------------------
    |
    | If set this value will be used and allow you to receive forwarded emails
    | at the root domain, e.g. @example.com aswell as @username.example.com
    |
    */

    'admin_username' => env('ANONADDY_ADMIN_USERNAME'),

    /*
    |--------------------------------------------------------------------------
    | Enable Registration
    |--------------------------------------------------------------------------
    |
    | If set to false this will prevent new users from registering on the site
    | useful if you are self-hosting and do not want anyone else to be able to register
    |
    */

    'enable_registration' => env('ANONADDY_ENABLE_REGISTRATION', true),

    /*
    |--------------------------------------------------------------------------
    | Domain
    |--------------------------------------------------------------------------
    |
    | If set and you are self hosting AnonAddy then a check will be done so that you can
    | receive email at the root domain, e.g. @example.com aswell as @username.example.com
    |
    */

    'domain' => env('ANONADDY_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Hostname
    |--------------------------------------------------------------------------
    |
    | This value is your FQDN hostname for your server e.g. mail.example.com
    | it is used to validate records on custom domains that are added by users
    |
    */

    'hostname' => env('ANONADDY_HOSTNAME'),

    /*
    |--------------------------------------------------------------------------
    | DNS Resolver
    |--------------------------------------------------------------------------
    |
    | This value is used when validating records on custom domains that are added
    | by users, if you don't have a local caching name server you can use 1.1.1.1 etc.
    |
    */

    'dns_resolver' => env('ANONADDY_DNS_RESOLVER', '127.0.0.1'),

    /*
    |--------------------------------------------------------------------------
    | All Domains
    |--------------------------------------------------------------------------
    |
    | If you would like to have other domains to use e.g. @username.example2.com
    | enter a comma separated list in your .env file like so, example.com,example2.com
    |
    */

    'all_domains' => explode(',', env('ANONADDY_ALL_DOMAINS')),

    /*
    |--------------------------------------------------------------------------
    | Secret
    |--------------------------------------------------------------------------
    |
    | Simply a long random string used when hashing data for the anonymous
    | replies, make sure that you set something suitably long and random in your .env
    |
    */

    'secret' => env('ANONADDY_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Hourly Email Limit
    |--------------------------------------------------------------------------
    |
    | This value is an integer that determines the number of emails a user can forward
    | and reply per hour, e.g. 200 would mean the user is rate limited to 200 emails per hour
    |
    */

    'limit' => env('ANONADDY_LIMIT', 200),

    /*
    |--------------------------------------------------------------------------
    | Monthly Bandwidth Limit
    |--------------------------------------------------------------------------
    |
    | This value is an integer that determines the monthly bandwidth
    | limit for users in bytes the default value is 104857600 which is 100MB
    |
    */

    'bandwidth_limit' => env('ANONADDY_BANDWIDTH_LIMIT', 104857600),

    /*
    |--------------------------------------------------------------------------
    | New Alias Hourly Limit
    |--------------------------------------------------------------------------
    |
    | This value is an integer that determines the number of new aliases
    | a user can create each hour, the default value is 10 aliases per hour
    |
    */

    'new_alias_hourly_limit' => env('ANONADDY_NEW_ALIAS_LIMIT', 10),

    /*
    |--------------------------------------------------------------------------
    | Additional Username Limit
    |--------------------------------------------------------------------------
    |
    | This value is an integer that determines the number of additional
    | usernames a user can add to their account, the default value is 3
    |
    */

    'additional_username_limit' => env('ANONADDY_ADDITIONAL_USERNAME_LIMIT', 3),

    /*
    |--------------------------------------------------------------------------
    | Signing Key Fingerprint
    |--------------------------------------------------------------------------
    |
    | This is the fingerprint of the gpg key to be used to sign forwarded
    | emails, it should be the same as your mail from email address
    |
    */

    'signing_key_fingerprint' => env('ANONADDY_SIGNING_KEY_FINGERPRINT'),

    /*
    |--------------------------------------------------------------------------
    | Username Blacklist
    |--------------------------------------------------------------------------
    |
    | List of blacklisted usernames with some additions from - https://github.com/marteinn/The-Big-Username-Blacklist
    |
    */

    'blacklist' =>[
      '.htaccess',
      '.htpasswd',
      '.well-known',
      '400',
      '401',
      '403',
      '404',
      '405',
      '406',
      '407',
      '408',
      '409',
      '410',
      '411',
      '412',
      '413',
      '414',
      '415',
      '416',
      '417',
      '421',
      '422',
      '423',
      '424',
      '426',
      '428',
      '429',
      '431',
      '500',
      '501',
      '502',
      '503',
      '504',
      '505',
      '506',
      '507',
      '508',
      '509',
      '510',
      '511',
      'about',
      'about-us',
      'abuse',
      'access',
      'account',
      'accounts',
      'activate',
      'active',
      'ad',
      'add',
      'addy',
      'admin',
      'administration',
      'administrator',
      'ads',
      'advertise',
      'advertising',
      'aes128-ctr',
      'aes128-gcm',
      'aes192-ctr',
      'aes256-ctr',
      'aes256-gcm',
      'affiliate',
      'affiliates',
      'ajax',
      'alert',
      'alerts',
      'alias',
      'alpha',
      'amp',
      'analytics',
      'anonaddy',
      'api',
      'app',
      'apps',
      'asc',
      'assets',
      'atom',
      'auth',
      'authentication',
      'authorize',
      'autoconfig',
      'autodiscover',
      'avatar',
      'backup',
      'banner',
      'banners',
      'beta',
      'billing',
      'billings',
      'blog',
      'blogs',
      'board',
      'bookmark',
      'bookmarks',
      'bounce',
      'bounces',
      'broadcasthost',
      'business',
      'buy',
      'cache',
      'calendar',
      'campaign',
      'captcha',
      'careers',
      'cart',
      'cas',
      'categories',
      'category',
      'cdn',
      'cgi',
      'cgi-bin',
      'chacha20-poly1305',
      'change',
      'channel',
      'channels',
      'chart',
      'chat',
      'checkout',
      'clear',
      'client',
      'close',
      'cms',
      'com',
      'comment',
      'comments',
      'community',
      'compare',
      'compose',
      'config',
      'connect',
      'contact',
      'contest',
      'cookies',
      'copy',
      'copyright',
      'count',
      'create',
      'crossdomain.xml',
      'css',
      'curve25519-sha256',
      'customer',
      'customers',
      'customize',
      'dashboard',
      'db',
      'deactivate',
      'deals',
      'debug',
      'delete',
      'desc',
      'destroy',
      'dev',
      'developer',
      'developers',
      'diffie-hellman-group-exchange-sha256',
      'diffie-hellman-group14-sha1',
      'disconnect',
      'discuss',
      'dns',
      'dns0',
      'dns1',
      'dns2',
      'dns3',
      'dns4',
      'docs',
      'documentation',
      'domain',
      'download',
      'downloads',
      'downvote',
      'draft',
      'drop',
      'ecdh-sha2-nistp256',
      'ecdh-sha2-nistp384',
      'ecdh-sha2-nistp521',
      'edit',
      'editor',
      'email',
      'enterprise',
      'error',
      'errors',
      'event',
      'events',
      'example',
      'exception',
      'exit',
      'explore',
      'export',
      'extensions',
      'false',
      'family',
      'faq',
      'faqs',
      'favicon.ico',
      'features',
      'feed',
      'feedback',
      'feeds',
      'file',
      'files',
      'filter',
      'follow',
      'follower',
      'followers',
      'following',
      'fonts',
      'forgot',
      'forgot-password',
      'forgotpassword',
      'form',
      'forms',
      'forum',
      'forums',
      'forward',
      'forwarder',
      'friend',
      'friends',
      'ftp',
      'get',
      'git',
      'go',
      'group',
      'groups',
      'guest',
      'guidelines',
      'guides',
      'head',
      'header',
      'help',
      'hide',
      'hmac-sha',
      'hmac-sha1',
      'hmac-sha1-etm',
      'hmac-sha2-256',
      'hmac-sha2-256-etm',
      'hmac-sha2-512',
      'hmac-sha2-512-etm',
      'home',
      'host',
      'hosting',
      'hostmaster',
      'htpasswd',
      'http',
      'httpd',
      'https',
      'humans.txt',
      'icons',
      'images',
      'imap',
      'img',
      'import',
      'index',
      'info',
      'insert',
      'investors',
      'invitations',
      'invite',
      'invites',
      'invoice',
      'is',
      'isatap',
      'issues',
      'it',
      'jobs',
      'join',
      'js',
      'json',
      'keybase.txt',
      'learn',
      'legal',
      'license',
      'licensing',
      'like',
      'limit',
      'live',
      'load',
      'local',
      'localdomain',
      'localhost',
      'lock',
      'login',
      'logout',
      'lost-password',
      'mail',
      'mail0',
      'mail1',
      'mail2',
      'mail3',
      'mail4',
      'mail5',
      'mail6',
      'mail7',
      'mail8',
      'mail9',
      'mailer',
      'mailer-daemon',
      'mailerdaemon',
      'map',
      'marketing',
      'marketplace',
      'master',
      'me',
      'media',
      'member',
      'members',
      'message',
      'messages',
      'metrics',
      'mis',
      'mobile',
      'moderator',
      'modify',
      'more',
      'mx',
      'my',
      'net',
      'network',
      'new',
      'news',
      'newsletter',
      'newsletters',
      'next',
      'nil',
      'no-reply',
      'nobody',
      'noc',
      'none',
      'noreply',
      'notification',
      'notifications',
      'ns',
      'ns0',
      'ns1',
      'ns2',
      'ns3',
      'ns4',
      'ns5',
      'ns6',
      'ns7',
      'ns8',
      'ns9',
      'null',
      'oauth',
      'oauth2',
      'offer',
      'offers',
      'online',
      'openid',
      'order',
      'orders',
      'overview',
      'owner',
      'page',
      'pages',
      'partners',
      'passwd',
      'password',
      'pay',
      'payment',
      'payments',
      'photo',
      'photos',
      'pixel',
      'plans',
      'plugins',
      'policies',
      'policy',
      'pop',
      'pop3',
      'popular',
      'portfolio',
      'post',
      'postfix',
      'postmaster',
      'poweruser',
      'preferences',
      'premium',
      'press',
      'previous',
      'pricing',
      'print',
      'privacy',
      'privacy-policy',
      'private',
      'prod',
      'product',
      'production',
      'profile',
      'profiles',
      'project',
      'projects',
      'public',
      'purchase',
      'put',
      'quota',
      'recipient',
      'redirect',
      'reduce',
      'refund',
      'refunds',
      'register',
      'registration',
      'remove',
      'replies',
      'reply',
      'report',
      'request',
      'request-password',
      'reset',
      'reset-password',
      'response',
      'return',
      'returns',
      'review',
      'reviews',
      'robots.txt',
      'root',
      'rootuser',
      'rsa-sha2-2',
      'rsa-sha2-512',
      'rss',
      'rules',
      'sales',
      'save',
      'script',
      'sdk',
      'search',
      'secure',
      'security',
      'select',
      'services',
      'session',
      'sessions',
      'settings',
      'setup',
      'share',
      'shift',
      'shop',
      'signin',
      'signup',
      'site',
      'sitemap',
      'sites',
      'smtp',
      'sort',
      'source',
      'sql',
      'ssh',
      'ssh-rsa',
      'ssl',
      'ssladmin',
      'ssladministrator',
      'sslwebmaster',
      'stage',
      'staging',
      'stat',
      'static',
      'statistics',
      'stats',
      'status',
      'store',
      'style',
      'styles',
      'stylesheet',
      'stylesheets',
      'subdomain',
      'subscribe',
      'sudo',
      'super',
      'superuser',
      'support',
      'survey',
      'sync',
      'sysadmin',
      'system',
      'tablet',
      'tag',
      'tags',
      'team',
      'telnet',
      'terms',
      'terms-of-use',
      'test',
      'testimonials',
      'theme',
      'themes',
      'today',
      'tools',
      'topic',
      'topics',
      'tour',
      'training',
      'translate',
      'translations',
      'trending',
      'trial',
      'true',
      'umac-128',
      'umac-128-etm',
      'umac-64',
      'umac-64-etm',
      'undefined',
      'unfollow',
      'unlike',
      'unsub',
      'unsubscribe',
      'update',
      'upgrade',
      'usenet',
      'user',
      'username',
      'users',
      'uucp',
      'var',
      'verify',
      'video',
      'view',
      'void',
      'vote',
      'webmail',
      'webmaster',
      'website',
      'widget',
      'widgets',
      'wiki',
      'wpad',
      'write',
      'www',
      'www-data',
      'www1',
      'www2',
      'www3',
      'www4',
      'you',
      'yourname',
      'yourusername',
      'zlib'
    ]

];
