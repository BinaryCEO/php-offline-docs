<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: YAZ Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.yaz.php">
 <link rel="shorturl" href="https://www.php.net/yaz">
 <link rel="alternate" href="https://www.php.net/yaz" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.yaz.php">
 <link rel="prev" href="https://www.php.net/manual/en/yaz.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/function.yaz-addinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.yaz.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.yaz.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.yaz.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.yaz.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.yaz.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.yaz.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.yaz.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.yaz.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.yaz.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.yaz.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.yaz.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="YAZ Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: YAZ Functions - Manual" />
<meta name="twitter:description" content="YAZ Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: YAZ Functions - Manual" />
<meta itemprop="description" content="YAZ Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="YAZ Functions" />

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
        <a href="function.yaz-addinfo.php">
          yaz_addinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="yaz.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.yaz.php'>YAZ</a></li>      </ul>
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
            <option value='en/ref.yaz.php' selected="selected">English</option>
            <option value='de/ref.yaz.php'>German</option>
            <option value='es/ref.yaz.php'>Spanish</option>
            <option value='fr/ref.yaz.php'>French</option>
            <option value='it/ref.yaz.php'>Italian</option>
            <option value='ja/ref.yaz.php'>Japanese</option>
            <option value='pt_BR/ref.yaz.php'>Brazilian Portuguese</option>
            <option value='ru/ref.yaz.php'>Russian</option>
            <option value='tr/ref.yaz.php'>Turkish</option>
            <option value='uk/ref.yaz.php'>Ukrainian</option>
            <option value='zh/ref.yaz.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.yaz" class="reference">
 <h1 class="title">YAZ Functions</h1>

 






















































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.yaz-addinfo.php">yaz_addinfo</a> — Returns additional error information</li><li><a href="function.yaz-ccl-conf.php">yaz_ccl_conf</a> — Configure CCL parser</li><li><a href="function.yaz-ccl-parse.php">yaz_ccl_parse</a> — Invoke CCL Parser</li><li><a href="function.yaz-close.php">yaz_close</a> — Close YAZ connection</li><li><a href="function.yaz-connect.php">yaz_connect</a> — Prepares for a connection to a Z39.50 server</li><li><a href="function.yaz-database.php">yaz_database</a> — Specifies the databases within a session</li><li><a href="function.yaz-element.php">yaz_element</a> — Specifies Element-Set Name for retrieval</li><li><a href="function.yaz-errno.php">yaz_errno</a> — Returns error number</li><li><a href="function.yaz-error.php">yaz_error</a> — Returns error description</li><li><a href="function.yaz-es.php">yaz_es</a> — Prepares for an Extended Service Request</li><li><a href="function.yaz-es-result.php">yaz_es_result</a> — Inspects Extended Services Result</li><li><a href="function.yaz-get-option.php">yaz_get_option</a> — Returns value of option for connection</li><li><a href="function.yaz-hits.php">yaz_hits</a> — Returns number of hits for last search</li><li><a href="function.yaz-itemorder.php">yaz_itemorder</a> — Prepares for Z39.50 Item Order with an ILL-Request package</li><li><a href="function.yaz-present.php">yaz_present</a> — Prepares for retrieval (Z39.50 present)</li><li><a href="function.yaz-range.php">yaz_range</a> — Specifies a range of records to retrieve</li><li><a href="function.yaz-record.php">yaz_record</a> — Returns a record</li><li><a href="function.yaz-scan.php">yaz_scan</a> — Prepares for a scan</li><li><a href="function.yaz-scan-result.php">yaz_scan_result</a> — Returns Scan Response result</li><li><a href="function.yaz-schema.php">yaz_schema</a> — Specifies schema for retrieval</li><li><a href="function.yaz-search.php">yaz_search</a> — Prepares for a search</li><li><a href="function.yaz-set-option.php">yaz_set_option</a> — Sets one or more options for connection</li><li><a href="function.yaz-sort.php">yaz_sort</a> — Sets sorting criteria</li><li><a href="function.yaz-syntax.php">yaz_syntax</a> — Specifies the preferred record syntax for retrieval</li><li><a href="function.yaz-wait.php">yaz_wait</a> — Wait for Z39.50 requests to complete</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/yaz/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.yaz%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.yaz&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.yaz.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="58085">  <div class="votes">
    <div id="Vu58085">
    <a href="/manual/vote-note.php?id=58085&amp;page=ref.yaz&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58085">
    <a href="/manual/vote-note.php?id=58085&amp;page=ref.yaz&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58085" title="80% like this...">
    3
    </div>
  </div>
  <a href="#58085" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#58085"> &para;</a><div class="date" title="2005-10-23 03:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58085">
<div class="phpcode"><code><span class="html">Straightforward Steps to get PHP Yaz to work on win32:<br /><br />Download latest verion of php_yaz.dll and copy to your PHP extensions directory<br /><a href="http://ftp.indexdata.dk/pub/phpyaz/" rel="nofollow" target="_blank">http://ftp.indexdata.dk/pub/phpyaz/</a><br /><br />Download latest version of YAZ toolkit and install it<br /><a href="http://www.indexdata.dk/yaz/" rel="nofollow" target="_blank">http://www.indexdata.dk/yaz/</a><br /><br />Go to the YAZ toolkit directory<br />(Most likely C:\Program Files\YAZ\bin)<br /><br />Copy the 4 DLL files in that folder into your win32 directory<br /><br />Uncomment the "extention=php_yaz.dll;" line in php.ini<br /><br />Restart your web server.<br /><br />Uninstall the YAZ toolkit if you wish.</span></code></div>
  </div>
 </div>
  <div class="note" id="44139">  <div class="votes">
    <div id="Vu44139">
    <a href="/manual/vote-note.php?id=44139&amp;page=ref.yaz&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44139">
    <a href="/manual/vote-note.php?id=44139&amp;page=ref.yaz&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44139" title="100% like this...">
    1
    </div>
  </div>
  <a href="#44139" class="name">
  <strong class="user"><em>cstdenis at hotmail dot com</em></strong></a><a class="genanchor" href="#44139"> &para;</a><div class="date" title="2004-07-15 06:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44139">
<div class="phpcode"><code><span class="html">For those wondering what it is:<br /><br />"This standard defines a client/server based service and protocol for<br />Information Retrieval. It specifies procedures and formats for a client to search a<br />database provided by a server, retrieve database records, and perform related<br />information retrieval functions. The protocol addresses communication between<br />information retrieval applications at the client and server; it does not address interaction<br />between the client and the end-user."</span></code></div>
  </div>
 </div>
  <div class="note" id="122626">  <div class="votes">
    <div id="Vu122626">
    <a href="/manual/vote-note.php?id=122626&amp;page=ref.yaz&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122626">
    <a href="/manual/vote-note.php?id=122626&amp;page=ref.yaz&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122626" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122626" class="name">
  <strong class="user"><em>adam at indexdata dot dk</em></strong></a><a class="genanchor" href="#122626"> &para;</a><div class="date" title="2018-04-17 08:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122626">
<div class="phpcode"><code><span class="html">When using Apache, you must also place libxslt.dll and yaz5.dll in \xampp\apache\bin . (No need need to copy libxml2 because it is already there).</span></code></div>
  </div>
 </div>
  <div class="note" id="122280">  <div class="votes">
    <div id="Vu122280">
    <a href="/manual/vote-note.php?id=122280&amp;page=ref.yaz&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122280">
    <a href="/manual/vote-note.php?id=122280&amp;page=ref.yaz&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122280" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122280" class="name">
  <strong class="user"><em>francisco.vazquez@ubik</em></strong></a><a class="genanchor" href="#122280"> &para;</a><div class="date" title="2018-01-17 06:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122280">
<div class="phpcode"><code><span class="html">Updated steps to install this extension on windows 7 (january 2018)<br /><br />1)Go to: <a href="http://ftp.indexdata.dk/pub/phpyaz/windows/" rel="nofollow" target="_blank">http://ftp.indexdata.dk/pub/phpyaz/windows/</a> and search trough the folders until you find the one that matches your php installation.<br /><br />2)Download all four files:    libxml2.dll, libxslt.dll, php_yaz.dll, yaz5.dll<br /><br />3)Place the following files inside your php folder (\xampp\php): libxml2.dll, libxslt.dll, yaz5.dll<br /><br />4)Place php_yaz.dll inside your php extensions folder (xampp\php\ext)<br /><br />5)Add the following line to php.ini (you can find out where is php.ini located calling phpinfo): extension=php_yaz.dll<br />(look for the place where all the other extension are declarated and place it at the bottom as the las one installed)<br /><br />6)Restart your server<br /><br />That should work. You can check if it is installed by calling phpinfo and checking if yaz extension appears as a section.<br /><br />Cheers!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.yaz&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.yaz.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.yaz.php">YAZ</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.yaz.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="yaz.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="yaz.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.yaz.php" title="YAZ Functions">YAZ Functions</a>
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
