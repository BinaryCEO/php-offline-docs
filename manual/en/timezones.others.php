<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Others - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/timezones.others.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/timezones.others.php">
 <link rel="alternate" href="https://www.php.net/manual/en/timezones.others.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/timezones.php">
 <link rel="prev" href="https://www.php.net/manual/en/timezones.pacific.php">
 <link rel="next" href="https://www.php.net/manual/en/class.dateerror.php">

 <link rel="alternate" href="https://www.php.net/manual/en/timezones.others.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/timezones.others.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/timezones.others.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/timezones.others.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/timezones.others.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/timezones.others.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/timezones.others.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/timezones.others.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/timezones.others.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/timezones.others.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/timezones.others.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Others" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Others - Manual" />
<meta name="twitter:description" content="Others" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Others - Manual" />
<meta itemprop="description" content="Others" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Others" />

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
        <a href="class.dateerror.php">
          DateError &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="timezones.pacific.php">
          &laquo; Pacific        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='timezones.php'>List of Supported Timezones</a></li>      </ul>
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
            <option value='en/timezones.others.php' selected="selected">English</option>
            <option value='de/timezones.others.php'>German</option>
            <option value='es/timezones.others.php'>Spanish</option>
            <option value='fr/timezones.others.php'>French</option>
            <option value='it/timezones.others.php'>Italian</option>
            <option value='ja/timezones.others.php'>Japanese</option>
            <option value='pt_BR/timezones.others.php'>Brazilian Portuguese</option>
            <option value='ru/timezones.others.php'>Russian</option>
            <option value='tr/timezones.others.php'>Turkish</option>
            <option value='uk/timezones.others.php'>Ukrainian</option>
            <option value='zh/timezones.others.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="timezones.others" class="sect1">
  <h2 class="title">Others</h2>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">Please do not use any of the timezones
listed here (besides UTC), they only exist for backward compatible reasons, and may expose erroneous behavior.
Furthermore, these timezones may be removed from the IANA timezone database at any time.
</p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
 If you disregard the above warning, please also note that the IANA
 timezone database that provides PHP&#039;s timezone support uses POSIX style
 signs, which results in the <code class="literal">Etc/GMT+n</code> and
 <code class="literal">Etc/GMT-n</code> time zones being reversed from common usage.
</p>
<p class="simpara">
 For example, the time zone 8 hours ahead of GMT that is used in China and
 Western Australia (among other places) is actually
 <code class="literal">Etc/GMT-8</code> in this database, not
 <code class="literal">Etc/GMT+8</code> as you would normally expect.
</p>
<p class="simpara">
 Once again, it is strongly recommended that you use the correct time zone
 for your location, such as <code class="literal">Asia/Shanghai</code> or
 <code class="literal">Australia/Perth</code> for the above examples.
</p>
  </div>
  <table class="doctable table">
   <caption><strong>Others</strong></caption>
   
    <tbody class="tbody">
     <tr>
      <td>Africa/Asmera</td>
      <td>Africa/Timbuktu</td>
      <td>America/Argentina/ComodRivadavia</td>
      <td>America/Atka</td>
     </tr>

     <tr>
      <td>America/Buenos_Aires</td>
      <td>America/Catamarca</td>
      <td>America/Coral_Harbour</td>
      <td>America/Cordoba</td>
     </tr>

     <tr>
      <td>America/Ensenada</td>
      <td>America/Fort_Wayne</td>
      <td>America/Godthab</td>
      <td>America/Indianapolis</td>
     </tr>

     <tr>
      <td>America/Jujuy</td>
      <td>America/Knox_IN</td>
      <td>America/Louisville</td>
      <td>America/Mendoza</td>
     </tr>

     <tr>
      <td>America/Montreal</td>
      <td>America/Nipigon</td>
      <td>America/Pangnirtung</td>
      <td>America/Porto_Acre</td>
     </tr>

     <tr>
      <td>America/Rainy_River</td>
      <td>America/Rosario</td>
      <td>America/Santa_Isabel</td>
      <td>America/Shiprock</td>
     </tr>

     <tr>
      <td>America/Thunder_Bay</td>
      <td>America/Virgin</td>
      <td>America/Yellowknife</td>
      <td>Antarctica/South_Pole</td>
     </tr>

     <tr>
      <td>Asia/Ashkhabad</td>
      <td>Asia/Calcutta</td>
      <td>Asia/Choibalsan</td>
      <td>Asia/Chongqing</td>
     </tr>

     <tr>
      <td>Asia/Chungking</td>
      <td>Asia/Dacca</td>
      <td>Asia/Harbin</td>
      <td>Asia/Istanbul</td>
     </tr>

     <tr>
      <td>Asia/Kashgar</td>
      <td>Asia/Katmandu</td>
      <td>Asia/Macao</td>
      <td>Asia/Rangoon</td>
     </tr>

     <tr>
      <td>Asia/Saigon</td>
      <td>Asia/Tel_Aviv</td>
      <td>Asia/Thimbu</td>
      <td>Asia/Ujung_Pandang</td>
     </tr>

     <tr>
      <td>Asia/Ulan_Bator</td>
      <td>Atlantic/Faeroe</td>
      <td>Atlantic/Jan_Mayen</td>
      <td>Australia/ACT</td>
     </tr>

     <tr>
      <td>Australia/Canberra</td>
      <td>Australia/Currie</td>
      <td>Australia/LHI</td>
      <td>Australia/North</td>
     </tr>

     <tr>
      <td>Australia/NSW</td>
      <td>Australia/Queensland</td>
      <td>Australia/South</td>
      <td>Australia/Tasmania</td>
     </tr>

     <tr>
      <td>Australia/Victoria</td>
      <td>Australia/West</td>
      <td>Australia/Yancowinna</td>
      <td>Brazil/Acre</td>
     </tr>

     <tr>
      <td>Brazil/DeNoronha</td>
      <td>Brazil/East</td>
      <td>Brazil/West</td>
      <td>Canada/Atlantic</td>
     </tr>

     <tr>
      <td>Canada/Central</td>
      <td>Canada/Eastern</td>
      <td>Canada/Mountain</td>
      <td>Canada/Newfoundland</td>
     </tr>

     <tr>
      <td>Canada/Pacific</td>
      <td>Canada/Saskatchewan</td>
      <td>Canada/Yukon</td>
      <td>CET</td>
     </tr>

     <tr>
      <td>Chile/Continental</td>
      <td>Chile/EasterIsland</td>
      <td>CST6CDT</td>
      <td>Cuba</td>
     </tr>

     <tr>
      <td>EET</td>
      <td>Egypt</td>
      <td>Eire</td>
      <td>EST</td>
     </tr>

     <tr>
      <td>EST5EDT</td>
      <td>Etc/GMT</td>
      <td>Etc/GMT+0</td>
      <td>Etc/GMT+1</td>
     </tr>

     <tr>
      <td>Etc/GMT+10</td>
      <td>Etc/GMT+11</td>
      <td>Etc/GMT+12</td>
      <td>Etc/GMT+2</td>
     </tr>

     <tr>
      <td>Etc/GMT+3</td>
      <td>Etc/GMT+4</td>
      <td>Etc/GMT+5</td>
      <td>Etc/GMT+6</td>
     </tr>

     <tr>
      <td>Etc/GMT+7</td>
      <td>Etc/GMT+8</td>
      <td>Etc/GMT+9</td>
      <td>Etc/GMT-0</td>
     </tr>

     <tr>
      <td>Etc/GMT-1</td>
      <td>Etc/GMT-10</td>
      <td>Etc/GMT-11</td>
      <td>Etc/GMT-12</td>
     </tr>

     <tr>
      <td>Etc/GMT-13</td>
      <td>Etc/GMT-14</td>
      <td>Etc/GMT-2</td>
      <td>Etc/GMT-3</td>
     </tr>

     <tr>
      <td>Etc/GMT-4</td>
      <td>Etc/GMT-5</td>
      <td>Etc/GMT-6</td>
      <td>Etc/GMT-7</td>
     </tr>

     <tr>
      <td>Etc/GMT-8</td>
      <td>Etc/GMT-9</td>
      <td>Etc/GMT0</td>
      <td>Etc/Greenwich</td>
     </tr>

     <tr>
      <td>Etc/UCT</td>
      <td>Etc/Universal</td>
      <td>Etc/UTC</td>
      <td>Etc/Zulu</td>
     </tr>

     <tr>
      <td>Europe/Belfast</td>
      <td>Europe/Kiev</td>
      <td>Europe/Nicosia</td>
      <td>Europe/Tiraspol</td>
     </tr>

     <tr>
      <td>Europe/Uzhgorod</td>
      <td>Europe/Zaporozhye</td>
      <td>Factory</td>
      <td>GB</td>
     </tr>

     <tr>
      <td>GB-Eire</td>
      <td>GMT</td>
      <td>GMT+0</td>
      <td>GMT-0</td>
     </tr>

     <tr>
      <td>GMT0</td>
      <td>Greenwich</td>
      <td>Hongkong</td>
      <td>HST</td>
     </tr>

     <tr>
      <td>Iceland</td>
      <td>Iran</td>
      <td>Israel</td>
      <td>Jamaica</td>
     </tr>

     <tr>
      <td>Japan</td>
      <td>Kwajalein</td>
      <td>Libya</td>
      <td>MET</td>
     </tr>

     <tr>
      <td>Mexico/BajaNorte</td>
      <td>Mexico/BajaSur</td>
      <td>Mexico/General</td>
      <td>MST</td>
     </tr>

     <tr>
      <td>MST7MDT</td>
      <td>Navajo</td>
      <td>NZ</td>
      <td>NZ-CHAT</td>
     </tr>

     <tr>
      <td>Pacific/Enderbury</td>
      <td>Pacific/Johnston</td>
      <td>Pacific/Ponape</td>
      <td>Pacific/Samoa</td>
     </tr>

     <tr>
      <td>Pacific/Truk</td>
      <td>Pacific/Yap</td>
      <td>Poland</td>
      <td>Portugal</td>
     </tr>

     <tr>
      <td>PRC</td>
      <td>PST8PDT</td>
      <td>ROC</td>
      <td>ROK</td>
     </tr>

     <tr>
      <td>Singapore</td>
      <td>Turkey</td>
      <td>UCT</td>
      <td>Universal</td>
     </tr>

     <tr>
      <td>US/Alaska</td>
      <td>US/Aleutian</td>
      <td>US/Arizona</td>
      <td>US/Central</td>
     </tr>

     <tr>
      <td>US/East-Indiana</td>
      <td>US/Eastern</td>
      <td>US/Hawaii</td>
      <td>US/Indiana-Starke</td>
     </tr>

     <tr>
      <td>US/Michigan</td>
      <td>US/Mountain</td>
      <td>US/Pacific</td>
      <td>US/Samoa</td>
     </tr>

     <tr>
      <td>UTC</td>
      <td>W-SU</td>
      <td>WET</td>
      <td>Zulu</td>
     </tr>

    </tbody>
   
  </table>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/timezones.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftimezones.others%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=timezones.others&amp;repo=en&amp;redirect=https://www.php.net/manual/en/timezones.others.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="timezones.php">List of Supported Timezones</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="timezones.africa.php" title="Africa">Africa</a>
                        </li>
                                                <li class="">
                            <a href="timezones.america.php" title="America">America</a>
                        </li>
                                                <li class="">
                            <a href="timezones.antarctica.php" title="Antarctica">Antarctica</a>
                        </li>
                                                <li class="">
                            <a href="timezones.arctic.php" title="Arctic">Arctic</a>
                        </li>
                                                <li class="">
                            <a href="timezones.asia.php" title="Asia">Asia</a>
                        </li>
                                                <li class="">
                            <a href="timezones.atlantic.php" title="Atlantic">Atlantic</a>
                        </li>
                                                <li class="">
                            <a href="timezones.australia.php" title="Australia">Australia</a>
                        </li>
                                                <li class="">
                            <a href="timezones.europe.php" title="Europe">Europe</a>
                        </li>
                                                <li class="">
                            <a href="timezones.indian.php" title="Indian">Indian</a>
                        </li>
                                                <li class="">
                            <a href="timezones.pacific.php" title="Pacific">Pacific</a>
                        </li>
                                                <li class="current">
                            <a href="timezones.others.php" title="Others">Others</a>
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
