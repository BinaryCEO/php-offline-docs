<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Securing Session INI Settings - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/session.security.ini.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/session.security.ini.php">
 <link rel="alternate" href="https://www.php.net/manual/en/session.security.ini.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/session.security.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.session.security.management.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.session.php">

 <link rel="alternate" href="https://www.php.net/manual/en/session.security.ini.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/session.security.ini.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/session.security.ini.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/session.security.ini.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/session.security.ini.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/session.security.ini.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/session.security.ini.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/session.security.ini.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/session.security.ini.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/session.security.ini.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/session.security.ini.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Securing Session INI Settings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Securing Session INI Settings - Manual" />
<meta name="twitter:description" content="Securing Session INI Settings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Securing Session INI Settings - Manual" />
<meta itemprop="description" content="Securing Session INI Settings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Securing Session INI Settings" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="ref.session.php">
          Session Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.session.security.management.php">
          &laquo; Session Management Basics        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='session.security.php'>Sessions and Security</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/session.security.ini.php' selected="selected">English</option>
            <option value='de/session.security.ini.php'>German</option>
            <option value='es/session.security.ini.php'>Spanish</option>
            <option value='fr/session.security.ini.php'>French</option>
            <option value='it/session.security.ini.php'>Italian</option>
            <option value='ja/session.security.ini.php'>Japanese</option>
            <option value='pt_BR/session.security.ini.php'>Brazilian Portuguese</option>
            <option value='ru/session.security.ini.php'>Russian</option>
            <option value='tr/session.security.ini.php'>Turkish</option>
            <option value='uk/session.security.ini.php'>Ukrainian</option>
            <option value='zh/session.security.ini.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="session.security.ini" class="sect1">
  <h2 class="title">Securing Session INI Settings</h2>

  <p class="para">
   By securing session related INI settings, developers can improve session security.
   Some important INI settings do not have any recommended settings.
   Developers are responsible for hardening session settings.
  </p>

  <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.cookie-lifetime" class="link">session.cookie_lifetime</a>=0
     </p>
     <p class="para">
      <code class="literal">0</code> possesses a particular meaning.
      It informs browsers not to store the cookie to permanent storage.
      Therefore, when the browser is terminated, the session ID cookie is deleted immediately.
      If developers set this other than 0, it may allow other users to use the session ID.
      Most applications should use &quot;<code class="literal">0</code>&quot; for this.
     </p>
     <p class="para">
      If an auto-login feature is required,
      developers must implement their own secure auto-login feature.
      Do not use long life session IDs for this.
      More information can be found above in the relevant section.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.use-cookies" class="link">session.use_cookies</a>=On
     </p>
     <p class="para">
      <a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a>=On
     </p>
     <p class="para">
      Although HTTP cookies suffer some problems,
      cookies remain the preferred way to manage session IDs. 
      Only use cookies for session ID management when it is possible.
      Most applications should use a cookie for the session ID.
     </p>
     <p class="para">
      If <a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a>=Off,
      the session module will use the session ID values set by
      GET or POST provided the session ID cookie is uninitialized.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>=On
     </p>
     <p class="para">
      Although, enabling
      <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
      is mandatory for secure sessions. It is disabled by default.
     </p>
     <p class="para">
      This prevents the session module to use an uninitialized session ID.
      Put differently, the session module only accepts valid session IDs
      generated by the session module.
      It rejects any session ID supplied by users.
     </p>
     <p class="para">
      Due to the cookie specification, attackers are capable to place
      non-removable session ID cookies by locally setting a cookie database
      or JavaScript injections.
      <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
      can prevent an attacker-initialized session ID of being used.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Attackers may initialize a session ID with their device and may set
       the session ID of the victim. They must keep the session ID active to abuse.
       Attackers require additional steps to perform an attack in this scenario.
       Therefore,
       <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
       works as a mitigation.
      </p>
     </p></blockquote>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.cookie-httponly" class="link">session.cookie_httponly</a>=On
     </p>
     <p class="para">
      Refuses access to the session cookie from JavaScript.
      This setting prevents cookies snatched by a JavaScript injection.
     </p>
     <p class="para">
      It is possible to use a session ID as a CSRF token, but this is not recommended.
      For example, HTML sources may be saved and sent to other users.
      Developers should not write session IDs in web pages for better security.
      Almost all applications must use the httponly attribute for the session ID cookie.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       The CSRF token should be renewed periodically just like the session ID.
      </p>
     </p></blockquote>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.cookie-secure" class="link">session.cookie_secure</a>=On
     </p>
     <p class="para">
      Allow access to the session ID cookie only when the protocol is HTTPS.
      If a website is only accessible via HTTPS, it should enable this setting.
     </p>
     <p class="para">
      HSTS should be considered for websites accessible only via HTTPS.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.cookie-samesite" class="link">session.cookie_samesite</a>=&quot;Lax&quot; or
      <a href="session.configuration.php#ini.session.cookie-samesite" class="link">session.cookie_samesite</a>=&quot;Strict&quot;
     </p>
     <p class="para">
      As of PHP 7.3 the <code class="literal">&quot;SameSite&quot;</code> attribute can be set for the session ID cookie.
      This attribute is a way to mitigate CSRF (Cross Site Request Forgery) attacks.
     </p>
     <p class="para">
      The difference between Lax and Strict is the accessibility of the cookie in
      requests originating from another registrable domain employing the HTTP GET method.
      Cookies using Lax will be accessible in a GET request originated from
      another registrable domain, whereas cookies using Strict will not.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a>=[choose smallest possible]
     </p>
     <p class="para">
      <a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a>
      is a setting for deleting obsolete session ID.
      Reliance on this setting is <em>not</em> recommended.
      Developers should manage the lifetime of sessions with a timestamp by themselves.
     </p>
     <p class="para">
      Session GC (garbage collection) is best performed by using <span class="function"><a href="function.session-gc.php" class="function">session_gc()</a></span>.
      The <span class="function"><a href="function.session-gc.php" class="function">session_gc()</a></span> function should be executed by a task
      managers. E.g. cron on UNIX like systems.
     </p>
     <p class="para">
      GC is performed by probability by default.
      This setting does <em>not</em> guarantee that an outdated
      session is deleted.
      Although developers cannot rely on this setting,
      specifying it to the smallest possible value is recommended.
      Adjusting <a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a>
      and <a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a> so
      that obsolete sessions are deleted at an appropriate frequency.
      If an auto-login feature is required, developers must implement their own
      secure auto-login feature, see above for more information.
      Never use long life session ID for this feature.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Some session save handler modules do not use this setting for probability
       based expiration. E.g. memcached, memcache.
       Refer to the session save handler documentation for details.
      </p>
     </p></blockquote>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a>=Off
     </p>
     <p class="para">
      Use of a transparent session ID management is not prohibited.
      Developers may employ it when it is required.
      However, disabling transparent session ID management improves the general session
      ID security by eliminating the possibility of a session ID injection and/or leak.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Session ID may leak from bookmarked URLs, e-mailed URLs, saved HTML source, etc.
      </p>
     </p></blockquote>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.trans-sid-tags" class="link">session.trans_sid_tags</a>=[limited tags]
     </p>
     <p class="para">
      (PHP 7.1.0 &gt;=) Developers should not rewrite unneeded HTML tags.
      Default value should be sufficient for most usages.
      Older PHP versions use
      <a href="outcontrol.configuration.php#ini.url-rewriter.tags" class="link">url_rewriter.tags</a> instead.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.trans-sid-hosts" class="link">session.trans_sid_hosts</a>=[limited hosts]
     </p>
     <p class="para">
      (PHP 7.1.0 &gt;=) This INI defines whitelist hosts that allows trans sid rewrite.
      Never add untrusted hosts.
      Session module only allows <code class="literal">$_SERVER[&#039;HTTP_HOST&#039;]</code>
      when this setting is empty.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.referer-check" class="link">session.referer_check</a>=[originating URL]
     </p>
     <p class="para">
      When <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a>
      is enabled.
      It reduces the risk of session ID injection.
      If a website is <code class="literal">http://example.com/</code>,
      set <code class="literal">http://example.com/</code> to it.
      Note that with HTTPS browsers will not send the referrer header.
      Browsers may not send the referrer header by configuration.
      Therefore, this setting is not a reliable security measure.
      Use of this setting is recommended.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.cache-limiter" class="link">session.cache_limiter</a>=nocache
     </p>
     <p class="para">
      Ensure HTTP content are uncached for authenticated sessions.
      Allow caching only when the content is not private.
      Otherwise, content may be exposed.
      <code class="literal">&quot;private&quot;</code> may be employed if HTTP content does not
      include security sensitive data.
      Note that <code class="literal">&quot;private&quot;</code> may transmit private data
      cached by shared clients.
      <code class="literal">&quot;public&quot;</code> must only be used when HTTP content does
      not contain any private data at all.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.hash-function" class="link">session.hash_function</a>=&quot;sha256&quot;
     </p>
     <p class="para">
      (PHP 7.1.0 &lt;) A stronger hash function will generate a stronger session ID.
      Although hash collision is unlikely even with the MD5 hashing algorithm,
      developers should use SHA-2 or a stronger hashing algorithm like sha384 and sha512.
      Developers must ensure they feed a long enough
      <a href="session.configuration.php#ini.session.entropy-length" class="link">entropy</a>
      for the hashing function used.
     </p>
    </li>

    <li class="listitem">
     <p class="para">
      <a href="session.configuration.php#ini.session.save-path" class="link">session.save_path</a>=[non world-readable directory]
     </p>
     <p class="para">
      If this is set to a world-readable directory, such as
      <var class="filename">/tmp</var> (the default), other users on the
      server may be able to hijack sessions by getting the list of
      files in that directory.
     </p>
    </li>

  </ul>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/security.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsession.security.ini%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=session.security.ini&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.security.ini.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129282">  <div class="votes">
    <div id="Vu129282">
    <a href="/manual/vote-note.php?id=129282&amp;page=session.security.ini&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129282">
    <a href="/manual/vote-note.php?id=129282&amp;page=session.security.ini&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129282" title="78% like this...">
    8
    </div>
  </div>
  <a href="#129282" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129282"> &para;</a><div class="date" title="2024-02-26 07:07"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129282">
<div class="phpcode"><code><span class="html">It is important to realize that session.cookie_lifetime=0 will delete the cookie when the browser closes but nowadays browers tend to never close even after the last windows or tab was closed. <br /><br />For startup speed purposes and to retrieve push traffic browser drop to the background hence the cookie stays put.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=session.security.ini&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.security.ini.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="session.security.php">Sessions and Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.session.security.management.php" title="Session Management Basics">Session Management Basics</a>
                        </li>
                                                <li class="current">
                            <a href="session.security.ini.php" title="Securing Session INI Settings">Securing Session INI Settings</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
