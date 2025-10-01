<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xmlrpc_server_call_method - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xmlrpc-server-call-method.php">
 <link rel="shorturl" href="https://www.php.net/xmlrpc-server-call-method">
 <link rel="alternate" href="https://www.php.net/xmlrpc-server-call-method" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xmlrpc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xmlrpc-server-add-introspection-data.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xmlrpc-server-create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xmlrpc-server-call-method.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xmlrpc-server-call-method.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xmlrpc-server-call-method.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xmlrpc-server-call-method.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xmlrpc-server-call-method.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xmlrpc-server-call-method.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xmlrpc-server-call-method.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xmlrpc-server-call-method.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xmlrpc-server-call-method.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xmlrpc-server-call-method.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xmlrpc-server-call-method.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parses XML requests and call methods" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xmlrpc_server_call_method - Manual" />
<meta name="twitter:description" content="Parses XML requests and call methods" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xmlrpc_server_call_method - Manual" />
<meta itemprop="description" content="Parses XML requests and call methods" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parses XML requests and call methods" />

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
        <a href="function.xmlrpc-server-create.php">
          xmlrpc_server_create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xmlrpc-server-add-introspection-data.php">
          &laquo; xmlrpc_server_add_introspection_data        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.xmlrpc.php'>XML-RPC</a></li>      <li><a href='ref.xmlrpc.php'>XML-RPC Functions</a></li>      </ul>
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
            <option value='en/function.xmlrpc-server-call-method.php' selected="selected">English</option>
            <option value='de/function.xmlrpc-server-call-method.php'>German</option>
            <option value='es/function.xmlrpc-server-call-method.php'>Spanish</option>
            <option value='fr/function.xmlrpc-server-call-method.php'>French</option>
            <option value='it/function.xmlrpc-server-call-method.php'>Italian</option>
            <option value='ja/function.xmlrpc-server-call-method.php'>Japanese</option>
            <option value='pt_BR/function.xmlrpc-server-call-method.php'>Brazilian Portuguese</option>
            <option value='ru/function.xmlrpc-server-call-method.php'>Russian</option>
            <option value='tr/function.xmlrpc-server-call-method.php'>Turkish</option>
            <option value='uk/function.xmlrpc-server-call-method.php'>Ukrainian</option>
            <option value='zh/function.xmlrpc-server-call-method.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xmlrpc-server-call-method" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xmlrpc_server_call_method</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">xmlrpc_server_call_method</span> &mdash; <span class="dc-title">Parses XML requests and call methods</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.xmlrpc-server-call-method-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xmlrpc_server_call_method</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$server</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$xml</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$user_data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$output_options</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
<em>EXPERIMENTAL</em>. The behaviour of this function, its name, and
surrounding documentation may change without notice in a future release of PHP.
This function should be used at your own risk.
</p></div>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlrpc/functions/xmlrpc-server-call-method.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xmlrpc-server-call-method%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xmlrpc-server-call-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-server-call-method.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72001">  <div class="votes">
    <div id="Vu72001">
    <a href="/manual/vote-note.php?id=72001&amp;page=function.xmlrpc-server-call-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72001">
    <a href="/manual/vote-note.php?id=72001&amp;page=function.xmlrpc-server-call-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72001" title="72% like this...">
    5
    </div>
  </div>
  <a href="#72001" class="name">
  <strong class="user"><em>marco.buratto at tiscali punto it</em></strong></a><a class="genanchor" href="#72001"> &para;</a><div class="date" title="2006-12-28 08:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72001">
<div class="phpcode"><code><span class="html">xmlrpc_server_call_method() with class methods<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">require_once (</span><span class="string">'Connections/adodb_mysql_connection.php'</span><span class="keyword">);<br /><br /></span><span class="comment">// Instantiating my own class<br /></span><span class="default">$my_report </span><span class="keyword">= new </span><span class="default">external_report</span><span class="keyword">(</span><span class="default">$db_connection</span><span class="keyword">);<br /><br /></span><span class="comment">// Setting up the XML-RPC "server"<br /></span><span class="default">$xmlrpc_server_handler </span><span class="keyword">= </span><span class="default">xmlrpc_server_create</span><span class="keyword">();<br /></span><span class="default">xmlrpc_server_register_method</span><span class="keyword">(</span><span class="default">$xmlrpc_server_handler</span><span class="keyword">, </span><span class="string">"external_method"</span><span class="keyword">, array(&amp;</span><span class="default">$my_report</span><span class="keyword">, </span><span class="string">"export"</span><span class="keyword">));<br /><br /></span><span class="comment">// Creating XML return data<br /></span><span class="keyword">if (</span><span class="default">$response </span><span class="keyword">= </span><span class="default">xmlrpc_server_call_method</span><span class="keyword">(</span><span class="default">$xmlrpc_server_handler</span><span class="keyword">, </span><span class="default">$HTTP_RAW_POST_DATA</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">))<br />    {<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/xml'</span><span class="keyword">);<br />    echo </span><span class="default">$response</span><span class="keyword">;<br />    }<br /><br /></span><span class="comment">// **************** class definition ****************<br /><br /></span><span class="keyword">class </span><span class="default">external_report<br />    </span><span class="keyword">{<br />    protected </span><span class="default">$db_connection</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$db_connection_pointer</span><span class="keyword">)<br />        {<br />        if (</span><span class="default">method_exists</span><span class="keyword">(</span><span class="default">$db_connection_pointer</span><span class="keyword">, </span><span class="string">"Execute"</span><span class="keyword">)) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db_connection </span><span class="keyword">= </span><span class="default">$db_connection_pointer</span><span class="keyword">;<br />        else die(</span><span class="string">"..."</span><span class="keyword">);<br />        }<br /><br />    public function </span><span class="default">export</span><span class="keyword">(</span><span class="default">$method_name</span><span class="keyword">, </span><span class="default">$params_array</span><span class="keyword">)<br />        {<br />        </span><span class="default">$id_dir </span><span class="keyword">= (int)</span><span class="default">$params_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        </span><span class="default">$id_usr </span><span class="keyword">= (int)</span><span class="default">$params_array</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; </span><span class="comment">// not used, just an example<br />        // We have to add arguments' validating code here and NOT inside the constructor (as usual)<br />        // because arguments are passed directly by xmlrpc_server_call_method (?!!)<br />        <br />        </span><span class="default">$myexport </span><span class="keyword">= array();<br /><br />        </span><span class="default">$dirs_query </span><span class="keyword">= </span><span class="string">"SELECT documento_id FROM tabella_cartelle WHERE cartella_id = "</span><span class="keyword">.</span><span class="default">$id_dir</span><span class="keyword">;<br />        </span><span class="default">$dirs_result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db_connection</span><span class="keyword">-&gt;</span><span class="default">Execute</span><span class="keyword">(</span><span class="default">$dirs_query</span><span class="keyword">) or die(</span><span class="string">"..."</span><span class="keyword">);<br /><br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while(!</span><span class="default">$dirs_result</span><span class="keyword">-&gt;</span><span class="default">EOF</span><span class="keyword">)<br />            {<br />            </span><span class="default">$docs_query </span><span class="keyword">= </span><span class="string">"SELECT codice, titolo FROM tabella_documenti WHERE id_documento = "</span><span class="keyword">.</span><span class="default">$dirs_result</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">(</span><span class="string">'documento_id'</span><span class="keyword">);<br />            </span><span class="default">$docs_result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db_connection</span><span class="keyword">-&gt;</span><span class="default">Execute</span><span class="keyword">(</span><span class="default">$docs_query</span><span class="keyword">) or die(</span><span class="string">"..."</span><span class="keyword">);<br /><br />            </span><span class="default">$myexport</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="string">'codice'</span><span class="keyword">] = </span><span class="default">$docs_result</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">(</span><span class="string">'codice'</span><span class="keyword">);<br />            </span><span class="default">$myexport</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="string">'titolo'</span><span class="keyword">] = </span><span class="default">$docs_result</span><span class="keyword">-&gt;</span><span class="default">Fields</span><span class="keyword">(</span><span class="string">'titolo'</span><span class="keyword">);<br /><br />            </span><span class="default">$index</span><span class="keyword">++;<br />            </span><span class="default">$dirs_result</span><span class="keyword">-&gt;</span><span class="default">MoveNext</span><span class="keyword">();<br />            }<br /><br />        return </span><span class="default">$myexport</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59139">  <div class="votes">
    <div id="Vu59139">
    <a href="/manual/vote-note.php?id=59139&amp;page=function.xmlrpc-server-call-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59139">
    <a href="/manual/vote-note.php?id=59139&amp;page=function.xmlrpc-server-call-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59139" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#59139" class="name">
  <strong class="user"><em>nyvsld at gmail dot com</em></strong></a><a class="genanchor" href="#59139"> &para;</a><div class="date" title="2005-11-27 05:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59139">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/* method implementation */<br /></span><span class="keyword">function </span><span class="default">impl</span><span class="keyword">(</span><span class="default">$method_name</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">,</span><span class="default">$user_data</span><span class="keyword">){<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">func_get_args</span><span class="keyword">(</span><span class="string">'impl'</span><span class="keyword">));<br />  return </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* create server */<br /></span><span class="default">$s</span><span class="keyword">=</span><span class="default">xmlrpc_server_create</span><span class="keyword">();<br /></span><span class="default">xmlrpc_server_register_method</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'add'</span><span class="keyword">,</span><span class="string">'impl'</span><span class="keyword">);<br /><br /></span><span class="comment">/* calling server method */<br /></span><span class="default">$req</span><span class="keyword">=</span><span class="default">xmlrpc_encode_request</span><span class="keyword">(</span><span class="string">'add'</span><span class="keyword">,array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">));<br /></span><span class="default">$resp</span><span class="keyword">=</span><span class="default">xmlrpc_server_call_method</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="default">$req</span><span class="keyword">,array(</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">));<br /><br /></span><span class="comment">/* process result */<br /></span><span class="default">$decoded</span><span class="keyword">=</span><span class="default">xmlrpc_decode</span><span class="keyword">(</span><span class="default">$resp</span><span class="keyword">);<br />if(</span><span class="default">xmlrpc_is_fault</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">)){<br />    echo </span><span class="string">'fault!'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xmlrpc-server-call-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-server-call-method.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.xmlrpc.php">XML-RPC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.xmlrpc-decode.php" title="xmlrpc_&#8203;decode">xmlrpc_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-decode-request.php" title="xmlrpc_&#8203;decode_&#8203;request">xmlrpc_&#8203;decode_&#8203;request</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-encode.php" title="xmlrpc_&#8203;encode">xmlrpc_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-encode-request.php" title="xmlrpc_&#8203;encode_&#8203;request">xmlrpc_&#8203;encode_&#8203;request</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-get-type.php" title="xmlrpc_&#8203;get_&#8203;type">xmlrpc_&#8203;get_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-is-fault.php" title="xmlrpc_&#8203;is_&#8203;fault">xmlrpc_&#8203;is_&#8203;fault</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-parse-method-descriptions.php" title="xmlrpc_&#8203;parse_&#8203;method_&#8203;descriptions">xmlrpc_&#8203;parse_&#8203;method_&#8203;descriptions</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-add-introspection-data.php" title="xmlrpc_&#8203;server_&#8203;add_&#8203;introspection_&#8203;data">xmlrpc_&#8203;server_&#8203;add_&#8203;introspection_&#8203;data</a>
                        </li>
                                                <li class="current">
                            <a href="function.xmlrpc-server-call-method.php" title="xmlrpc_&#8203;server_&#8203;call_&#8203;method">xmlrpc_&#8203;server_&#8203;call_&#8203;method</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-create.php" title="xmlrpc_&#8203;server_&#8203;create">xmlrpc_&#8203;server_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-destroy.php" title="xmlrpc_&#8203;server_&#8203;destroy">xmlrpc_&#8203;server_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-register-introspection-callback.php" title="xmlrpc_&#8203;server_&#8203;register_&#8203;introspection_&#8203;callback">xmlrpc_&#8203;server_&#8203;register_&#8203;introspection_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-server-register-method.php" title="xmlrpc_&#8203;server_&#8203;register_&#8203;method">xmlrpc_&#8203;server_&#8203;register_&#8203;method</a>
                        </li>
                                                <li class="">
                            <a href="function.xmlrpc-set-type.php" title="xmlrpc_&#8203;set_&#8203;type">xmlrpc_&#8203;set_&#8203;type</a>
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
