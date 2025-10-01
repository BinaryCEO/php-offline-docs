<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OOP Changelog - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.changelog.php">
 <link rel="shorturl" href="https://www.php.net/oop5.changelog">
 <link rel="alternate" href="https://www.php.net/oop5.changelog" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.lazy-objects.php">
 <link rel="next" href="https://www.php.net/manual/en/language.namespaces.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.changelog.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.changelog.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.changelog.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.changelog.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.changelog.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.changelog.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.changelog.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.changelog.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.changelog.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.changelog.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.changelog.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OOP Changelog" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OOP Changelog - Manual" />
<meta name="twitter:description" content="OOP Changelog" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OOP Changelog - Manual" />
<meta itemprop="description" content="OOP Changelog" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OOP Changelog" />

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
        <a href="language.namespaces.php">
          Namespaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.lazy-objects.php">
          &laquo; Lazy Objects        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.changelog.php' selected="selected">English</option>
            <option value='de/language.oop5.changelog.php'>German</option>
            <option value='es/language.oop5.changelog.php'>Spanish</option>
            <option value='fr/language.oop5.changelog.php'>French</option>
            <option value='it/language.oop5.changelog.php'>Italian</option>
            <option value='ja/language.oop5.changelog.php'>Japanese</option>
            <option value='pt_BR/language.oop5.changelog.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.changelog.php'>Russian</option>
            <option value='tr/language.oop5.changelog.php'>Turkish</option>
            <option value='uk/language.oop5.changelog.php'>Ukrainian</option>
            <option value='zh/language.oop5.changelog.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.changelog" class="sect1">
 <h2 class="title">OOP Changelog</h2>
 <p class="para">
  Changes to the PHP OOP model are logged here. Descriptions and other notes regarding
  these features are documented within the OOP model documentation.
 </p>
 <p class="para">
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.4.0</td>
      <td>
       Added: Support for <a href="language.oop5.property-hooks.php" class="link">Property Hooks</a>.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       Added: Support for <a href="language.oop5.lazy-objects.php" class="link">Lazy Objects</a>.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Added: Support for the <span class="modifier">final</span> modifier for class constants. Also, interface constants become overridable by default.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Added: Support for the <a href="language.oop5.basic.php#language.oop5.basic.nullsafe" class="link">nullsafe operator</a> <em>?-&gt;</em> to access properties and methods on objects that may be null.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Changed: It is now possible to throw exception within
       <span class="function"><strong>__toString()</strong></span>.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Added: Support for limited return type covariance and argument
       type contravariance. Full variance support is only available if
       autoloading is used. Inside a single file only non-cyclic type
       references are possible.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Added: It is now possible to type class properties.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       Incompatibility: Argument unpacking of
       <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span>s with non-<span class="type"><a href="language.types.integer.php" class="type int">int</a></span> keys is no longer
       supported. This behaviour was not intended and thus has been removed.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       Incompatibility: In previous versions it was possible to separate the
       static properties by assigning a reference. This has been removed.
      </td>
     </tr>

     <tr>
      <td>7.3.0</td>
      <td>
       Changed: The <a href="language.operators.type.php" class="link">instanceof</a>
       operator now allows literals as the first operand, in which case the
       result is always <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Deprecated: The <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> method has been
       deprecated in favour of <span class="function"><a href="function.spl-autoload-register.php" class="function">spl_autoload_register()</a></span>.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Changed: The following name cannot be used to name classes, interfaces,
       or traits: <code class="literal">object</code>.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Changed: A trailing comma can now be added to the group-use syntax
       for namespaces.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Changed: Parameter type widening. Parameter types from overridden
       methods and from interface implementations may now be omitted.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Changed: Abstract methods can now be overridden when an abstract class
       extends another abstract class.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Changed: The following names cannot be used to name classes, interfaces,
       or traits: <code class="literal">void</code> and <code class="literal">iterable</code>.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Added: It is now possible to specify the
       <a href="language.oop5.visibility.php#language.oop5.visiblity-constants" class="link">visibility of
        class constants</a>.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Deprecated: <a href="language.oop5.static.php" class="link">Static</a> calls
       to methods that are not declared static.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Deprecated: PHP 4 style <a href="language.oop5.decon.php" class="link">
       constructor</a>. I.e. methods that have the same name as the class
       they are defined in.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Added: Group <em>use</em> declaration: classes, functions
       and constants being imported from the same namespace can now be grouped
       together in a single use statement.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Added: Support for
       <a href="language.oop5.anonymous.php" class="link">anonymous classes</a>
       has been added via <code class="literal">new class</code>.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Incompatibility: Iterating over a non-<span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span>
       <span class="type"><a href="language.types.object.php" class="type object">object</a></span> will now have the same behaviour as iterating over by-reference
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s.
      </td>
     </tr>

     <tr>
      <td>7.0.0</td>
      <td>
       Changed: Defining (compatible) properties in two used
       <a href="language.oop5.traits.php" class="link">traits</a> no longer
       triggers an error.
      </td>
     </tr>

     <tr>
      <td>5.6.0</td>
      <td>
       Added: The <a href="language.oop5.magic.php#object.debuginfo" class="link">__debugInfo()</a> method.
      </td>
     </tr>

     <tr>
      <td>5.5.0</td>
      <td>
       Added: The <a href="language.oop5.basic.php#language.oop5.basic.class.class" class="link">::class</a> magic constant.
      </td>
     </tr>

     <tr>
      <td>5.5.0</td>
      <td>
       Added: <a href="language.exceptions.php" class="link">finally</a> to handle exceptions.
      </td>
     </tr>

     <tr>
      <td>5.4.0</td>
      <td>
       Added: <a href="language.oop5.traits.php" class="link">traits</a>.
      </td>
     </tr>

     <tr>
      <td>5.4.0</td>
      <td>
       Changed: If an <a href="language.oop5.abstract.php" class="link">abstract</a> class
       defines a signature for the <a href="language.oop5.decon.php" class="link">
       constructor</a> it will now be enforced.
      </td>
     </tr>

     <tr>
      <td>5.3.3</td>
      <td>
       Changed: Methods with the same name as the last element of
       a <a href="language.namespaces.php" class="link">namespaced</a>
       class name will no longer be treated as <a href="language.oop5.decon.php" class="link">constructor</a>. This change doesn&#039;t
       affect non-namespaced classes.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Changed: Classes that implement interfaces with methods that have default 
       values in the prototype are no longer required to match the interface&#039;s default 
       value.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Changed: It&#039;s now possible to reference the class using a variable (e.g.,
       <code class="literal">echo $classname::constant;</code>).
       The variable&#039;s value can not be a keyword (e.g., <code class="literal">self</code>,
       <code class="literal">parent</code> or <code class="literal">static</code>).
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Changed: An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error is issued if
       the magic <a href="language.oop5.overloading.php" class="link">overloading</a>
       methods are declared <a href="language.oop5.static.php" class="link">static</a>.
       It also enforces the public visibility requirement.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Changed: Prior to 5.3.0, exceptions thrown in the
       <span class="function"><a href="function.autoload.php" class="function">__autoload()</a></span> function could not be
       caught in the <a href="language.exceptions.php" class="link">catch</a> block, and
       would result in a fatal error. Exceptions now thrown in the __autoload function
       can be caught in the <a href="language.exceptions.php" class="link">catch</a> block, with
       one provison. If throwing a custom exception, then the custom exception class must
       be available. The __autoload function may be used recursively to autoload the
       custom exception class.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Added: The <a href="language.oop5.overloading.php" class="link">__callStatic</a> method.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Added: <a href="language.types.string.php#language.types.string.syntax.heredoc" class="link">heredoc</a>
       and <a href="language.types.string.php#language.types.string.syntax.nowdoc" class="link">nowdoc</a>
       support for class <em>const</em> and property definitions.
       Note: heredoc values must follow the same rules as double-quoted strings,
       (e.g. no variables within).
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Added: <a href="language.oop5.late-static-bindings.php" class="link">Late Static Bindings</a>.
      </td>
     </tr>

     <tr>
      <td>5.3.0</td>
      <td>
       Added: The <a href="language.oop5.magic.php#object.invoke" class="link">__invoke()</a> method.
      </td>
     </tr>

     <tr>
      <td>5.2.0</td>
      <td>
       Changed: The <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>
       method was only called when it was directly combined with
       <span class="function"><a href="function.echo.php" class="function">echo</a></span> or <span class="function"><a href="function.print.php" class="function">print</a></span>.
       But now, it is called in any <span class="type"><a href="language.types.string.php" class="type string">string</a></span> context (e.g. in
       <span class="function"><a href="function.printf.php" class="function">printf()</a></span> with <code class="literal">%s</code> modifier) but not
       in other types contexts (e.g. with <code class="literal">%d</code> modifier).
       As of PHP 5.2.0, converting <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s without a
       <a href="language.oop5.magic.php#object.tostring" class="link">__toString</a> method to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
       emits a <strong><code><a href="errorfunc.constants.php#constant.e-recoverable-error">E_RECOVERABLE_ERROR</a></code></strong> level error.
      </td>
     </tr>

     <tr>
      <td>5.1.3</td>
      <td>
       Changed: In previous versions of PHP 5, the use of <code class="literal">var</code>
       was considered deprecated and would issue an <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong>
       level error. It&#039;s no longer deprecated, therefore does not emit the error.
      </td>
     </tr>

     <tr>
      <td>5.1.0</td>
      <td>
       Changed: The <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a> static
       method is now called for classes exported by <span class="function"><a href="function.var-export.php" class="function">var_export()</a></span>.
      </td>
     </tr>

     <tr>
      <td>5.1.0</td>
      <td>
       Added: The <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a>
       and <a href="language.oop5.overloading.php#object.unset" class="link">__unset()</a> methods.
      </td>
     </tr>

    </tbody>
   
  </table>

 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/changelog.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.changelog%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.changelog&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.changelog.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
