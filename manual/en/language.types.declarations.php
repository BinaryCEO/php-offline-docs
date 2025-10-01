<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Type declarations - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.types.declarations.php">
 <link rel="shorturl" href="https://www.php.net/types.declarations">
 <link rel="alternate" href="https://www.php.net/types.declarations" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.types.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.types.iterable.php">
 <link rel="next" href="https://www.php.net/manual/en/language.types.type-juggling.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.types.declarations.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.types.declarations.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.types.declarations.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.types.declarations.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.types.declarations.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.types.declarations.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.types.declarations.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.types.declarations.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.types.declarations.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.types.declarations.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.types.declarations.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Type declarations" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Type declarations - Manual" />
<meta name="twitter:description" content="Type declarations" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Type declarations - Manual" />
<meta itemprop="description" content="Type declarations" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Type declarations" />

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
        <a href="language.types.type-juggling.php">
          Type Juggling &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.types.iterable.php">
          &laquo; Iterables        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.types.php'>Types</a></li>      </ul>
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
            <option value='en/language.types.declarations.php' selected="selected">English</option>
            <option value='de/language.types.declarations.php'>German</option>
            <option value='es/language.types.declarations.php'>Spanish</option>
            <option value='fr/language.types.declarations.php'>French</option>
            <option value='it/language.types.declarations.php'>Italian</option>
            <option value='ja/language.types.declarations.php'>Japanese</option>
            <option value='pt_BR/language.types.declarations.php'>Brazilian Portuguese</option>
            <option value='ru/language.types.declarations.php'>Russian</option>
            <option value='tr/language.types.declarations.php'>Turkish</option>
            <option value='uk/language.types.declarations.php'>Ukrainian</option>
            <option value='zh/language.types.declarations.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.types.declarations" class="sect1">
 <h2 class="title">Type declarations</h2>

 <p class="para">
  Type declarations can be added to function arguments, return values,
  as of PHP 7.4.0, class properties, and as of PHP 8.3.0, class constants.
  They ensure that the value is of the specified type at call time,
  otherwise a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> is thrown.
 </p>

 <p class="para">
  Every single type that PHP supports, with the exception of
  <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> can be used within a user-land type declaration.
  This page contains a changelog of availability of the different types
  and documentation about usage of them in type declarations.
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   When a class implements an interface method or reimplements a method which
   has already been defined by a parent class, it has to be compatible with the
   aforementioned definition.
   A method is compatible if it follows the
   <a href="language.oop5.variance.php" class="link">variance</a> rules.
  </p>
 </p></blockquote>

 <div class="sect2">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.3.0</td>
      <td>
       Support for class, interface, trait, and enum constant typing has been added.
      </td>
     </tr>

     <tr>
      <td>8.2.0</td>
      <td>
       Support for <abbr title="Disjunctive Normal Form">DNF</abbr> types has been added.
      </td>
     </tr>

     <tr>
      <td>8.2.0</td>
      <td>
       Support for the literal type <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> has been added.
      </td>
     </tr>

     <tr>
      <td>8.2.0</td>
      <td>
       The types <span class="type"><a href="language.types.null.php" class="type null">null</a></span> and <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span> can now be used standalone.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Support for intersection types has been added.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Returning by reference from a <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> function is now deprecated.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Support for the return only type <span class="type"><a href="language.types.never.php" class="type never">never</a></span> has been added.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Support for <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> has been added.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Support for the return only type <span class="type">static</span> has been added.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Support for union types has been added.
      </td>
     </tr>

     <tr>
      <td>7.4.0</td>
      <td>
       Support for class properties typing has been added.
      </td>
     </tr>

     <tr>
      <td>7.2.0</td>
      <td>
       Support for <span class="type"><a href="language.types.object.php" class="type object">object</a></span> has been added.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Support for <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> has been added.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Support for <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> has been added.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       Support for nullable types has been added.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="sect2" id="language.types.declarations.base">
  <h3 class="title">Atomic Types Usage Notes</h3>

  <p class="simpara">
   Atomic types have straight forward behaviour with some minor caveats which
   are described in this section.
  </p>

  <div class="sect3" id="language.types.declarations.base.scalar">
   <h4 class="title">Scalar types</h4>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="para">
     Name aliases for scalar types (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
     <span class="type"><a href="language.types.float.php" class="type float">float</a></span>, <span class="type"><a href="language.types.string.php" class="type string">string</a></span>) are not supported.
     Instead, they are treated as class or interface names.
     For example, using <code class="literal">boolean</code> as a type declaration
     will require the value to be an <a href="language.operators.type.php" class="link"><code class="literal">instanceof</code></a> the class or interface
     <code class="literal">boolean</code>, rather than of type <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>:
    </p>
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">boolean $param</span><span style="color: #007700">) {}<br />    </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">Output of the above example in PHP 8:</p>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Warning: &quot;boolean&quot; will be interpreted as a class name. Did you mean &quot;bool&quot;? Write &quot;\boolean&quot; to suppress this warning in /in/9YrUX on line 2

Fatal error: Uncaught TypeError: test(): Argument #1 ($param) must be of type boolean, bool given, called in - on line 3 and defined in -:2
Stack trace:
#0 -(3): test(true)
#1 {main}
  thrown in - on line 2
</pre></div>
     </div>
    </div>
   </div>
  </div>

  <div class="sect3" id="language.types.declarations.void">
   <h4 class="title">void</h4>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Returning by reference from a <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> function is deprecated as of PHP 8.1.0,
     because such a function is contradictory.
     Previously, it already emitted the following
     <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> when called:
     <span class="computeroutput">Only variable references should be returned by reference</span>.
     <div class="informalexample">
      <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function &amp;</span><span style="color: #0000BB">test</span><span style="color: #007700">(): </span><span style="color: #0000BB">void </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
   </p></blockquote>
  </div>

  <div class="sect3" id="language.types.declarations.base.function">
   <h4 class="title">Callable types</h4>
   <p class="para">
    This type cannot be used as a class property type declaration.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     It is not possible to specify the signature of the function.
    </span>
   </p></blockquote>
  </div>

  <div class="sect3" id="language.types.declarations.references">
   <h4 class="title">Type declarations on pass-by-reference Parameters</h4>

   <p class="simpara">
    If a pass-by-reference parameter has a type declaration, the type of the
    variable is <em>only</em> checked on function entry, at the
    beginning of the call, but not when the function returns.
    This means that a function can change the type of variable reference.
   </p>
   <div class="example" id="example-110">
    <p><strong>Example #1 Typed pass-by-reference Parameters</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">array_baz</span><span style="color: #007700">(array &amp;</span><span style="color: #0000BB">$param</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #0000BB">$param </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$var </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">array_baz</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_baz</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(1)

Fatal error: Uncaught TypeError: array_baz(): Argument #1 ($param) must be of type array, int given, called in - on line 9 and defined in -:2
Stack trace:
#0 -(9): array_baz(1)
#1 {main}
  thrown in - on line 2
</pre></div>
    </div>
   </div>
  </div>
 </div>

 <div class="sect2" id="language.types.declarations.composite">
  <h3 class="title">Composite Types Usage Notes</h3>
  <p class="para">
   Composite type declarations are subject to a couple of restrictions and
   will perform a redundancy check at compile time to prevent simple bugs.
  </p>

  <div class="caution"><strong class="caution">Caution</strong>
   <p class="simpara">
    Prior to PHP 8.2.0, and the introduction of <abbr title="Disjunctive Normal Form">DNF</abbr> types,
    it was not possible to combine intersection types with union types.
   </p>
  </div>

  <div class="sect3" id="language.types.declarations.composite.union">
   <h4 class="title">Union types</h4>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     It is not possible to combine the two singleton types <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>
     and <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> together in a union type.
     Use <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> instead.
    </p>
   </div>

   <div class="caution"><strong class="caution">Caution</strong>
    <p class="simpara">
     Prior to PHP 8.2.0, as <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span> and <span class="type"><a href="language.types.null.php" class="type null">null</a></span>
     could not be used as standalone types, a union type comprised of only
     these types was not permitted. This comprises the following types:
     <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span>, <code class="literal">false|null</code>,
     and <code class="literal">?false</code>.
    </p>
   </div>

   <div class="sect4" id="language.types.declarations.nullable">
    <h5 class="title">Nullable type syntactic sugar</h5>

    <p class="para">
     A single base type declaration can be marked nullable by prefixing the
     type with a question mark (<code class="literal">?</code>).
     Thus <code class="literal">?T</code> and <code class="literal">T|null</code> are identical.
    </p>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This syntax is supported as of PHP 7.1.0, and predates generalized union
      types support.
     </span>
    </p></blockquote>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      It is also possible to achieve nullable arguments by making
      <code class="literal">null</code> the default value.
      This is not recommended as if the default value is changed in a child
      class a type compatibility violation will be raised as the
      <span class="type"><a href="language.types.null.php" class="type null">null</a></span> type will need to be added to the type declaration.
      This behavior is also deprecated since PHP 8.4.
     </p>
     <div class="example" id="example-111">
      <p><strong>Example #2 Old way to make arguments nullable</strong></p>
      <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">C $c </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output:</p></div>
      <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
object(C)#1 (0) {
}
NULL
</pre></div>
      </div>
     </div>
    </p></blockquote>
   </div>
  </div>

  <div class="sect3" id="language.types.declarations.composite.redundant">
   <h4 class="title">Duplicate and redundant types</h4>
   <p class="para">
    To catch simple bugs in composite type declarations, redundant types that
    can be detected without performing class loading will result in a
    compile-time error. This includes:

    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Each name-resolved type may only occur once. Types such as
       <code class="literal">int|string|INT</code> or
       <code class="literal">Countable&amp;Traversable&amp;COUNTABLE</code>
       result in an error.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Using <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> results in an error.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">For union types:</span>
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         If <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> is used, <span class="type"><a href="language.types.singleton.php" class="type false">false</a></span> or <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>
         cannot be used additionally.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         If <span class="type"><a href="language.types.object.php" class="type object">object</a></span> is used, class types cannot be used additionally.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         If <span class="type"><a href="language.types.iterable.php" class="type iterable">iterable</a></span> is used, <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
         and <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> cannot be used additionally.
        </span>
       </li>
      </ul>
     </li>
     <li class="listitem">
      <span class="simpara">For intersection types:</span>
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         Using a type which is not a class-type results in an error.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Using either <span class="type">self</span>, <span class="type">parent</span>, or
         <span class="type">static</span> results in an error.
        </span>
       </li>
      </ul>
     </li>
     <li class="listitem">
      <span class="simpara">For <abbr title="Disjunctive Normal Form">DNF</abbr> types:</span>
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         If a more generic type is used, the more restrictive one is redundant.
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Using two identical intersection types.
        </span>
       </li>
      </ul>
     </li>
    </ul>
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     This does not guarantee that the type is “minimal”, because doing so would
     require loading all used class types.
    </span>
   </p></blockquote>

   <p class="para">
    For example, if <code class="literal">A</code> and <code class="literal">B</code> are class
    aliases, then <code class="literal">A|B</code> remains a legal union type, even
    though it could be reduced to either <code class="literal">A</code> or
    <code class="literal">B</code>.
    Similarly, if class <code class="code">B extends A {}</code>, then <code class="literal">A|B</code>
    is also a legal union type, even though it could be reduced to just
    <code class="literal">A</code>.

    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">int</span><span style="color: #007700">|</span><span style="color: #0000BB">INT </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">bool</span><span style="color: #007700">|</span><span style="color: #0000BB">false </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">int</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Traversable </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">self</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Traversable </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed<br /><br /></span><span style="color: #007700">use </span><span style="color: #0000BB">A </span><span style="color: #007700">as </span><span style="color: #0000BB">B</span><span style="color: #007700">;<br />function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">A</span><span style="color: #007700">|</span><span style="color: #0000BB">B </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed ("use" is part of name resolution)<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">A</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">B </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Disallowed ("use" is part of name resolution)<br /><br /></span><span style="color: #0000BB">class_alias</span><span style="color: #007700">(</span><span style="color: #DD0000">'X'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Y'</span><span style="color: #007700">);<br />function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">X</span><span style="color: #007700">|</span><span style="color: #0000BB">Y </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Allowed (redundancy is only known at runtime)<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(): </span><span style="color: #0000BB">X</span><span style="color: #007700">&amp;</span><span style="color: #0000BB">Y </span><span style="color: #007700">{} </span><span style="color: #FF8000">// Allowed (redundancy is only known at runtime)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>
 </div>

 <div class="sect2" id="language.types.declarations.examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-112">
   <p><strong>Example #3 Basic class type declaration</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">D </span><span style="color: #007700">extends </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /><br /></span><span style="color: #FF8000">// This doesn't extend C.<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">E </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">C $c</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">D</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">E</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
C
D

Fatal error: Uncaught TypeError: f(): Argument #1 ($c) must be of type C, E given, called in /in/gLonb on line 14 and defined in /in/gLonb:8
Stack trace:
#0 -(14): f(Object(E))
#1 {main}
  thrown in - on line 8
</pre></div>
   </div>
  </div>

  <div class="example" id="example-113">
   <p><strong>Example #4 Basic interface type declaration</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">I </span><span style="color: #007700">{ public function </span><span style="color: #0000BB">f</span><span style="color: #007700">(); }<br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">implements </span><span style="color: #0000BB">I </span><span style="color: #007700">{ public function </span><span style="color: #0000BB">f</span><span style="color: #007700">() {} }<br /><br /></span><span style="color: #FF8000">// This doesn't implement I.<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">E </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">I $i</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$i</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">E</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
C

Fatal error: Uncaught TypeError: f(): Argument #1 ($i) must be of type I, E given, called in - on line 13 and defined in -:8
Stack trace:
#0 -(13): f(Object(E))
#1 {main}
  thrown in - on line 8
</pre></div>
   </div>
  </div>

  <div class="example" id="example-114">
   <p><strong>Example #5 Basic return type declaration</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">): </span><span style="color: #0000BB">float </span><span style="color: #007700">{<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Note that a float will be returned.<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
float(3)
</pre></div>
   </div>
  </div>

  <div class="example" id="example-115">
   <p><strong>Example #6 Returning an object</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">getC</span><span style="color: #007700">(): </span><span style="color: #0000BB">C </span><span style="color: #007700">{<br />    return new </span><span style="color: #0000BB">C</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">getC</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
object(C)#1 (0) {
}
</pre></div>
   </div>
  </div>

  <div class="example" id="example-116">
   <p><strong>Example #7 Nullable argument type declaration</strong></p>
   <div class="example-contents">
    <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">f</span><span style="color: #007700">(?</span><span style="color: #0000BB">C $c</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(new </span><span style="color: #0000BB">C</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">f</span><span style="color: #007700">(</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
    <div class="annotation-interactive cdata"><pre>
object(C)#1 (0) {
}
NULL
</pre></div>
   </div>
  </div>

  <div class="example" id="example-117">
   <p><strong>Example #8 Nullable return type declaration</strong></p>
   <div class="example-contents">
    <div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">get_item</span><span style="color: #007700">(): ?</span><span style="color: #0000BB">string </span><span style="color: #007700">{<br />    if (isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'item'</span><span style="color: #007700">])) {<br />        return </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'item'</span><span style="color: #007700">];<br />    } else {<br />        return </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-118">
   <p><strong>Example #9 Class property type declaration</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">User </span><span style="color: #007700">{<br />    public static </span><span style="color: #0000BB">string $foo </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /><br />    public </span><span style="color: #0000BB">int $id</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">string $username</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">int $id</span><span style="color: #007700">, </span><span style="color: #0000BB">string $username</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id </span><span style="color: #007700">= </span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">username </span><span style="color: #007700">= </span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

  
 <div class="sect2" id="language.types.declarations.strict">
  <h3 class="title">Strict typing</h3>

  <p class="para">
   By default, PHP will coerce values of the wrong type into the expected
   scalar type declaration if possible. For example, a function that is given
   an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> for a parameter that expects a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   will get a variable of type <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
  </p>

  <p class="para">
   It is possible to enable strict mode on a per-file basis. In strict
   mode, only a value corresponding exactly to the type declaration will be
   accepted, otherwise a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> will be thrown.
   The only exception to this rule is that an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> value will
   pass a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> type declaration.
  </p>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Function calls from within internal functions will not be affected by
    the <code class="literal">strict_types</code> declaration.
   </p>
  </div>

  <p class="para">
   To enable strict mode, the <a href="control-structures.declare.php" class="link"><code class="literal">declare</code></a> statement is used with the
   <code class="literal">strict_types</code> declaration:
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Strict typing applies to function calls made from
    <em>within</em> the file with strict typing enabled, not to
    the functions declared within that file. If a file without strict
    typing enabled makes a call to a function that was defined in a file
    with strict typing, the caller&#039;s preference (coercive typing) will be
    respected, and the value will be coerced.
   </p>
  </p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Strict typing is only defined for scalar type declarations.
   </p>
  </p></blockquote>

  <div class="example" id="example-119">
   <p><strong>Example #10 Strict typing for arguments values</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">strict_types</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a</span><span style="color: #007700">, </span><span style="color: #0000BB">int $b</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1.5</span><span style="color: #007700">, </span><span style="color: #0000BB">2.5</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(3)

Fatal error: Uncaught TypeError: sum(): Argument #1 ($a) must be of type int, float given, called in - on line 9 and defined in -:4
Stack trace:
#0 -(9): sum(1.5, 2.5)
#1 {main}
  thrown in - on line 4
</pre></div>
   </div>
  </div>

  <div class="example" id="example-120">
   <p><strong>Example #11 Coercive typing for argument values</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">int $a</span><span style="color: #007700">, </span><span style="color: #0000BB">int $b</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// These will be coerced to integers: note the output below!<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1.5</span><span style="color: #007700">, </span><span style="color: #0000BB">2.5</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(3)
int(3)
</pre></div>
   </div>
  </div>

  <div class="example" id="example-121">
   <p><strong>Example #12 Strict typing for return values</strong></p>
   <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">declare(</span><span style="color: #0000BB">strict_types</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />function </span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">{<br />    return </span><span style="color: #0000BB">$a </span><span style="color: #007700">+ </span><span style="color: #0000BB">$b</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sum</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2.5</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
int(3)

Fatal error: Uncaught TypeError: sum(): Return value must be of type int, float returned in -:5
Stack trace:
#0 -(9): sum(1, 2.5)
#1 {main}
  thrown in - on line 5
</pre></div>
   </div>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/types/declarations.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.types.declarations%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.types.declarations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.declarations.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126191">  <div class="votes">
    <div id="Vu126191">
    <a href="/manual/vote-note.php?id=126191&amp;page=language.types.declarations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126191">
    <a href="/manual/vote-note.php?id=126191&amp;page=language.types.declarations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126191" title="75% like this...">
    27
    </div>
  </div>
  <a href="#126191" class="name">
  <strong class="user"><em>toinenkayt (ta at ta) [iwonderr] gmail d</em></strong></a><a class="genanchor" href="#126191"> &para;</a><div class="date" title="2021-06-24 11:10"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126191">
<div class="phpcode"><code><span class="html">While waiting for native support for typed arrays, here are a couple of alternative ways to ensure strong typing of arrays by abusing variadic functions. The performance of these methods is a mystery to the writer and so the responsibility of benchmarking them falls unto the reader.<br /><br />PHP 5.6 added the splat operator (...) which is used to unpack arrays to be used as function arguments. PHP 7.0 added scalar type hints. Latter versions of PHP have further improved the type system. With these additions and improvements, it is possible to have a decent support for typed arrays.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare (</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />function </span><span class="default">typeArrayNullInt</span><span class="keyword">(?</span><span class="default">int </span><span class="keyword">...</span><span class="default">$arg</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />}<br /><br />function </span><span class="default">doSomething</span><span class="keyword">(array </span><span class="default">$ints</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />    (function (?</span><span class="default">int </span><span class="keyword">...</span><span class="default">$arg</span><span class="keyword">) {})(...</span><span class="default">$ints</span><span class="keyword">);<br />    </span><span class="comment">// Alternatively, <br />    </span><span class="keyword">(fn (?</span><span class="default">int </span><span class="keyword">...</span><span class="default">$arg</span><span class="keyword">) =&gt; </span><span class="default">$arg</span><span class="keyword">)(...</span><span class="default">$ints</span><span class="keyword">);<br />    </span><span class="comment">// Or to avoid cluttering memory with too many closures<br />    </span><span class="default">typeArrayNullInt</span><span class="keyword">(...</span><span class="default">$ints</span><span class="keyword">);<br /><br />    </span><span class="comment">/* ... */<br /></span><span class="keyword">}<br /><br />function </span><span class="default">doSomethingElse</span><span class="keyword">(?</span><span class="default">int </span><span class="keyword">...</span><span class="default">$ints</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />    </span><span class="comment">/* ... */<br /></span><span class="keyword">}<br /><br /></span><span class="default">$ints </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">null</span><span class="keyword">];<br /></span><span class="default">doSomething </span><span class="keyword">(</span><span class="default">$ints</span><span class="keyword">);<br /></span><span class="default">doSomethingElse </span><span class="keyword">(...</span><span class="default">$ints</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Both methods work with all type declarations. The key idea here is to have the functions throw a runtime error if they encounter a typing violation. The typing method used in doSomethingElse is cleaner of the two but it disallows having any other parameters after the variadic parameter. It also requires the call site to be aware of this typing implementation and unpack the array. The method used in doSomething is messier but it does not require the call site to be aware of the typing method as the unpacking is performed within the function. It is also less ambiguous as the doSomethingElse would also accept n individual parameters where as doSomething only accepts an array. doSomething's method is also easier to strip away if native typed array support is ever added to PHP. Both of these methods only work for input parameters. An array return value type check would need to take place at the call site.<br /><br />If strict_types is not enabled, it may be desirable to return the coerced scalar values from the type check function (e.g. floats and strings become integers) to ensure proper typing.</span></code></div>
  </div>
 </div>
  <div class="note" id="129977">  <div class="votes">
    <div id="Vu129977">
    <a href="/manual/vote-note.php?id=129977&amp;page=language.types.declarations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129977">
    <a href="/manual/vote-note.php?id=129977&amp;page=language.types.declarations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129977" title="100% like this...">
    5
    </div>
  </div>
  <a href="#129977" class="name">
  <strong class="user"><em>harl at gmail dot com</em></strong></a><a class="genanchor" href="#129977"> &para;</a><div class="date" title="2025-01-13 07:58"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129977">
<div class="phpcode"><code><span class="html">For DNF type declarations (which lack an example), they're a mix of intersection and union types that look like this:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">send</span><span class="keyword">(</span><span class="default">c1</span><span class="keyword">|(</span><span class="default">c2</span><span class="keyword">&amp;</span><span class="default">c3</span><span class="keyword">) </span><span class="default">$f</span><span class="keyword">) {}<br /><br /></span><span class="default">?&gt;<br /></span><br />It's a union type where some of its options are intersection types, which are wrapped in parentheses ($f is something that is either a c1, or something that is both a c2 and a c3).</span></code></div>
  </div>
 </div>
  <div class="note" id="126464">  <div class="votes">
    <div id="Vu126464">
    <a href="/manual/vote-note.php?id=126464&amp;page=language.types.declarations&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126464">
    <a href="/manual/vote-note.php?id=126464&amp;page=language.types.declarations&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126464" title="70% like this...">
    18
    </div>
  </div>
  <a href="#126464" class="name">
  <strong class="user"><em>crash</em></strong></a><a class="genanchor" href="#126464"> &para;</a><div class="date" title="2021-09-29 01:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126464">
<div class="phpcode"><code><span class="html">The documentation lacks the information, that it's possible to change the return type of a method defined in an interface when the interface's methods return type is defined as `mixed`.<br /><br />From the RFC:<br /><br />"The mixed return type could be narrowed in a subclass as this is covariant and is allowed in LSP." (<a href="https://wiki.php.net/rfc/mixed_type_v2" rel="nofollow" target="_blank">https://wiki.php.net/rfc/mixed_type_v2</a>)<br /><br />This means the following code is valid in PHP 8.0:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">interface </span><span class="default">ITest<br /></span><span class="keyword">{<br />    public function </span><span class="default">apfel</span><span class="keyword">(): </span><span class="default">mixed</span><span class="keyword">; </span><span class="comment">// valid as of 8.0<br /></span><span class="keyword">}<br /><br />class </span><span class="default">Test </span><span class="keyword">implements </span><span class="default">ITest<br /></span><span class="keyword">{<br />    public function </span><span class="default">apfel</span><span class="keyword">(): array </span><span class="comment">// more explicit<br />    </span><span class="keyword">{<br />        return [];<br />    }<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">((new </span><span class="default">Test</span><span class="keyword">())-&gt;</span><span class="default">apfel</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />You can see the result here: <a href="https://3v4l.org/PXDB6" rel="nofollow" target="_blank">https://3v4l.org/PXDB6</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.types.declarations&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.types.declarations.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.types.php">Types</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.types.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-system.php" title="Type System">Type System</a>
                        </li>
                                                <li class="">
                            <a href="language.types.null.php" title="NULL">NULL</a>
                        </li>
                                                <li class="">
                            <a href="language.types.boolean.php" title="Booleans">Booleans</a>
                        </li>
                                                <li class="">
                            <a href="language.types.integer.php" title="Integers">Integers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.float.php" title="Floating point numbers">Floating point numbers</a>
                        </li>
                                                <li class="">
                            <a href="language.types.string.php" title="Strings">Strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.numeric-strings.php" title="Numeric strings">Numeric strings</a>
                        </li>
                                                <li class="">
                            <a href="language.types.array.php" title="Arrays">Arrays</a>
                        </li>
                                                <li class="">
                            <a href="language.types.object.php" title="Objects">Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.types.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.resource.php" title="Resources">Resources</a>
                        </li>
                                                <li class="">
                            <a href="language.types.callable.php" title="Callbacks / Callables">Callbacks / Callables</a>
                        </li>
                                                <li class="">
                            <a href="language.types.mixed.php" title="Mixed">Mixed</a>
                        </li>
                                                <li class="">
                            <a href="language.types.void.php" title="Void">Void</a>
                        </li>
                                                <li class="">
                            <a href="language.types.never.php" title="Never">Never</a>
                        </li>
                                                <li class="">
                            <a href="language.types.relative-class-types.php" title="Relative class types">Relative class types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.singleton.php" title="Singleton types">Singleton types</a>
                        </li>
                                                <li class="">
                            <a href="language.types.iterable.php" title="Iterables">Iterables</a>
                        </li>
                                                <li class="current">
                            <a href="language.types.declarations.php" title="Type declarations">Type declarations</a>
                        </li>
                                                <li class="">
                            <a href="language.types.type-juggling.php" title="Type Juggling">Type Juggling</a>
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
