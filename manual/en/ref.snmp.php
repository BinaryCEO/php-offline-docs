<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SNMP Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.snmp.php">
 <link rel="shorturl" href="https://www.php.net/snmp">
 <link rel="alternate" href="https://www.php.net/snmp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.snmp.php">
 <link rel="prev" href="https://www.php.net/manual/en/snmp.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.snmp-get-quick-print.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.snmp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.snmp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.snmp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.snmp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.snmp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.snmp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.snmp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.snmp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.snmp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.snmp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.snmp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SNMP Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SNMP Functions - Manual" />
<meta name="twitter:description" content="SNMP Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SNMP Functions - Manual" />
<meta itemprop="description" content="SNMP Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SNMP Functions" />

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
        <a href="function.snmp-get-quick-print.php">
          snmp_get_quick_print &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="snmp.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.snmp.php'>SNMP</a></li>      </ul>
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
            <option value='en/ref.snmp.php' selected="selected">English</option>
            <option value='de/ref.snmp.php'>German</option>
            <option value='es/ref.snmp.php'>Spanish</option>
            <option value='fr/ref.snmp.php'>French</option>
            <option value='it/ref.snmp.php'>Italian</option>
            <option value='ja/ref.snmp.php'>Japanese</option>
            <option value='pt_BR/ref.snmp.php'>Brazilian Portuguese</option>
            <option value='ru/ref.snmp.php'>Russian</option>
            <option value='tr/ref.snmp.php'>Turkish</option>
            <option value='uk/ref.snmp.php'>Ukrainian</option>
            <option value='zh/ref.snmp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.snmp" class="reference">
 <h1 class="title">SNMP Functions</h1>
  
 




























































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.snmp-get-quick-print.php">snmp_get_quick_print</a> — Fetches the current value of the NET-SNMP library's quick_print setting</li><li><a href="function.snmp-get-valueretrieval.php">snmp_get_valueretrieval</a> — Return the method how the SNMP values will be returned</li><li><a href="function.snmp-read-mib.php">snmp_read_mib</a> — Reads and parses a MIB file into the active MIB tree</li><li><a href="function.snmp-set-enum-print.php">snmp_set_enum_print</a> — Return all values that are enums with their enum value instead of the raw integer</li><li><a href="function.snmp-set-oid-numeric-print.php">snmp_set_oid_numeric_print</a> — Alias of snmp_set_oid_output_format</li><li><a href="function.snmp-set-oid-output-format.php">snmp_set_oid_output_format</a> — Set the OID output format</li><li><a href="function.snmp-set-quick-print.php">snmp_set_quick_print</a> — Set the value of enable within the NET-SNMP library</li><li><a href="function.snmp-set-valueretrieval.php">snmp_set_valueretrieval</a> — Specify the method how the SNMP values will be returned</li><li><a href="function.snmp2-get.php">snmp2_get</a> — Fetch an SNMP object</li><li><a href="function.snmp2-getnext.php">snmp2_getnext</a> — Fetch the SNMP object which follows the given object id</li><li><a href="function.snmp2-real-walk.php">snmp2_real_walk</a> — Return all objects including their respective object ID within the specified one</li><li><a href="function.snmp2-set.php">snmp2_set</a> — Set the value of an SNMP object</li><li><a href="function.snmp2-walk.php">snmp2_walk</a> — Fetch all the SNMP objects from an agent</li><li><a href="function.snmp3-get.php">snmp3_get</a> — Fetch an SNMP object</li><li><a href="function.snmp3-getnext.php">snmp3_getnext</a> — Fetch the SNMP object which follows the given object id</li><li><a href="function.snmp3-real-walk.php">snmp3_real_walk</a> — Return all objects including their respective object ID within the specified one</li><li><a href="function.snmp3-set.php">snmp3_set</a> — Set the value of an SNMP object</li><li><a href="function.snmp3-walk.php">snmp3_walk</a> — Fetch all the SNMP objects from an agent</li><li><a href="function.snmpget.php">snmpget</a> — Fetch an SNMP object</li><li><a href="function.snmpgetnext.php">snmpgetnext</a> — Fetch the SNMP object which follows the given object id</li><li><a href="function.snmprealwalk.php">snmprealwalk</a> — Return all objects including their respective object ID within the specified one</li><li><a href="function.snmpset.php">snmpset</a> — Set the value of an SNMP object</li><li><a href="function.snmpwalk.php">snmpwalk</a> — Fetch all the SNMP objects from an agent</li><li><a href="function.snmpwalkoid.php">snmpwalkoid</a> — Query for a tree of information about a network entity</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/snmp/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.snmp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.snmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.snmp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="58657">  <div class="votes">
    <div id="Vu58657">
    <a href="/manual/vote-note.php?id=58657&amp;page=ref.snmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58657">
    <a href="/manual/vote-note.php?id=58657&amp;page=ref.snmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58657" title="65% like this...">
    7
    </div>
  </div>
  <a href="#58657" class="name">
  <strong class="user"><em>1413 at blargh dot com</em></strong></a><a class="genanchor" href="#58657"> &para;</a><div class="date" title="2005-11-10 01:29"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58657">
<div class="phpcode"><code><span class="html">For my purposes in PHP coding, I have the following SNMP options set, always.  These aren't documented very well in PHP's docs, but they make dealing with the SNMP results a LOT easier:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Return back the numeric OIDs, instead of text strings.<br /></span><span class="default">snmp_set_oid_numeric_print</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">// Get just the values.<br /></span><span class="default">snmp_set_quick_print</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /><br /></span><span class="comment">// For sequence types, return just the numbers, not the string and numbers.<br /></span><span class="default">snmp_set_enum_print</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">); <br /><br /></span><span class="comment">// Don't let the SNMP library get cute with value interpretation.  This makes <br />// MAC addresses return the 6 binary bytes, timeticks to return just the integer<br />// value, and some other things.<br /></span><span class="default">snmp_set_valueretrieval</span><span class="keyword">(</span><span class="default">SNMP_VALUE_PLAIN</span><span class="keyword">);  <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78909">  <div class="votes">
    <div id="Vu78909">
    <a href="/manual/vote-note.php?id=78909&amp;page=ref.snmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78909">
    <a href="/manual/vote-note.php?id=78909&amp;page=ref.snmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78909" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#78909" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#78909"> &para;</a><div class="date" title="2007-11-01 01:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78909">
<div class="phpcode"><code><span class="html">Here's a fresh list of API for SNMPv1, SNMPv2c, and SNMPv3 as of PHP 5.2.4:<br /><br />SNMPv1<br />------<br />string snmpget(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />string snmpgetnext(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />array snmpwalk(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />array snmprealwalk(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />bool snmp_get_quick_print(void);<br /><br />void snmp_set_quick_print(int quick_print);<br /><br />void snmp_set_enum_print(int enum_print);<br /><br />void snmp_set_oid_output_format(int oid_format);<br /><br />int snmpset(string host, string community, string object_id, string type, mixed value [, int timeout [, int retries]]);<br /><br />SNMPv2c<br />-------<br />string snmp2_get(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />string snmp2_getnext(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />array snmp2_walk(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />array snmp2_real_walk(string host, string community, string object_id [, int timeout [, int retries]]);<br /><br />int snmp2_set(string host, string community, string object_id, string type, mixed value [, int timeout [, int retries]]);<br /><br />SNMPv3<br />------<br />int snmp3_get(string host, string sec_name, string sec_level, string auth_protocol, string auth_passphrase, string priv_protocol, string priv_passphrase, string object_id [, int timeout [, int retries]]);<br /><br />int snmp3_getnext(string host, string sec_name, string sec_level, string auth_protocol, string auth_passphrase, string priv_protocol, string priv_passphrase, string object_id [, int timeout [, int retries]]);<br /><br />int snmp3_walk(string host, string sec_name, string sec_level, string auth_protocol, string auth_passphrase, string priv_protocol, string priv_passphrase, string object_id [, int timeout [, int retries]]);<br /><br />int snmp3_real_walk(string host, string sec_name, string sec_level, string auth_protocol, string auth_passphrase, string priv_protocol, string priv_passphrase, string object_id [, int timeout [, int retries]]);<br /><br />int snmp3_set(string host, string sec_name, string sec_level, string auth_protocol, string auth_passphrase, string priv_protocol, string priv_passphrase, string object_id, string type, mixed value [, int timeout [, int retries]]);<br /><br />General<br />-------<br />int snmp_set_valueretrieval(int method);<br /><br />int snmp_get_valueretrieval();<br /><br />int snmp_read_mib(string filename);<br /><br />SNMPv3 options<br />--------------<br />SNMPv3 offers a different authentication/authorization scheme than previous versions of SNMP.  To aid in using the API listed above, here is a brief explanation of each of the unique parameters used in the snmp3_* functions.<br /><br />$sec_name - the "username" used for authentication to the system<br /><br />$sec_level - the authentication scheme ('noAuthNoPriv', 'authNoPriv', or 'authPriv')<br /><br />$auth_protocol - the encryption protocol used for authentication ('MD5' [default] or 'SHA')<br /><br />$auth_passphrase - the encrypted key to use as the authentication challenge<br /><br />$priv_protocol - the encryption protocol used for protecting the protocol data unit ('DES' [default], 'AES128', 'AES192', or 'AES256')<br /><br />$priv_passphrase - the key to use for encrypting the protocol data unit<br /><br />There are good code snippets available on <a href="http://forums.cacti.net/about5403.html" rel="nofollow" target="_blank">http://forums.cacti.net/about5403.html</a> for more information.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.snmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.snmp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.snmp.php">SNMP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.snmp.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="snmp.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="snmp.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.snmp.php" title="SNMP Functions">SNMP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="class.snmpexception.php" title="SNMPException">SNMPException</a>
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
