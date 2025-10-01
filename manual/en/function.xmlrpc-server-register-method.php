<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xmlrpc_server_register_method - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xmlrpc-server-register-method.php">
 <link rel="shorturl" href="https://www.php.net/xmlrpc-server-register-method">
 <link rel="alternate" href="https://www.php.net/xmlrpc-server-register-method" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xmlrpc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xmlrpc-server-register-introspection-callback.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xmlrpc-set-type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xmlrpc-server-register-method.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xmlrpc-server-register-method.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xmlrpc-server-register-method.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xmlrpc-server-register-method.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xmlrpc-server-register-method.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xmlrpc-server-register-method.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xmlrpc-server-register-method.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xmlrpc-server-register-method.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xmlrpc-server-register-method.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xmlrpc-server-register-method.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xmlrpc-server-register-method.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Register a PHP function to resource method matching method_name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xmlrpc_server_register_method - Manual" />
<meta name="twitter:description" content="Register a PHP function to resource method matching method_name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xmlrpc_server_register_method - Manual" />
<meta itemprop="description" content="Register a PHP function to resource method matching method_name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Register a PHP function to resource method matching method_name" />

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
        <a href="function.xmlrpc-set-type.php">
          xmlrpc_set_type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xmlrpc-server-register-introspection-callback.php">
          &laquo; xmlrpc_server_register_introspection_callback        </a>
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
            <option value='en/function.xmlrpc-server-register-method.php' selected="selected">English</option>
            <option value='de/function.xmlrpc-server-register-method.php'>German</option>
            <option value='es/function.xmlrpc-server-register-method.php'>Spanish</option>
            <option value='fr/function.xmlrpc-server-register-method.php'>French</option>
            <option value='it/function.xmlrpc-server-register-method.php'>Italian</option>
            <option value='ja/function.xmlrpc-server-register-method.php'>Japanese</option>
            <option value='pt_BR/function.xmlrpc-server-register-method.php'>Brazilian Portuguese</option>
            <option value='ru/function.xmlrpc-server-register-method.php'>Russian</option>
            <option value='tr/function.xmlrpc-server-register-method.php'>Turkish</option>
            <option value='uk/function.xmlrpc-server-register-method.php'>Ukrainian</option>
            <option value='zh/function.xmlrpc-server-register-method.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xmlrpc-server-register-method" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xmlrpc_server_register_method</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">xmlrpc_server_register_method</span> &mdash; <span class="dc-title">Register a PHP function to resource method matching method_name</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.xmlrpc-server-register-method-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xmlrpc_server_register_method</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$server</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$method_name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$function</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

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
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlrpc/functions/xmlrpc-server-register-method.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xmlrpc-server-register-method%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xmlrpc-server-register-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-server-register-method.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="68808">  <div class="votes">
    <div id="Vu68808">
    <a href="/manual/vote-note.php?id=68808&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68808">
    <a href="/manual/vote-note.php?id=68808&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68808" title="66% like this...">
    1
    </div>
  </div>
  <a href="#68808" class="name">
  <strong class="user"><em>giunta dot gaetano at sea-aeroportimilano dot it</em></strong></a><a class="genanchor" href="#68808"> &para;</a><div class="date" title="2006-08-11 06:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68808">
<div class="phpcode"><code><span class="html">To have an xmlrpc fault response programatically generated by the server, the php function registered as method handler must return an array containing a FaultCode and a FaultString members.<br /><br />function $myfunc($methodname, $vals, $extra_data)<br />{<br />...<br />return array('faultCode' =&gt; 666, 'faultString' =&gt; 'DOH!');<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="59137">  <div class="votes">
    <div id="Vu59137">
    <a href="/manual/vote-note.php?id=59137&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59137">
    <a href="/manual/vote-note.php?id=59137&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59137" title="57% like this...">
    1
    </div>
  </div>
  <a href="#59137" class="name">
  <strong class="user"><em>nyvsld at gmail dot com</em></strong></a><a class="genanchor" href="#59137"> &para;</a><div class="date" title="2005-11-27 05:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59137">
<div class="phpcode"><code><span class="html">prototype of registered function:<br /><br />function method_impl(string $method_name, array $params, array $user_data);<br /><br />$method_name<br />    the public method name, known by calling client<br />$params<br />    parameters specified by calling client<br />$user_data<br />    any local data, passed by `xmlrpc_server_call_method'</span></code></div>
  </div>
 </div>
  <div class="note" id="51340">  <div class="votes">
    <div id="Vu51340">
    <a href="/manual/vote-note.php?id=51340&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51340">
    <a href="/manual/vote-note.php?id=51340&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51340" title="57% like this...">
    1
    </div>
  </div>
  <a href="#51340" class="name">
  <strong class="user"><em>eiriks at hollowmatrix dot com</em></strong></a><a class="genanchor" href="#51340"> &para;</a><div class="date" title="2005-03-28 03:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51340">
<div class="phpcode"><code><span class="html">Remember that you can't do like Chrigu and Nate said if you want to add methods from a static class (Hence you can't create any instances of it).<br />A workaround is to create lambda functions calling the<br />methods:<br /><br />// Our static handler class<br />static class MyHandler<br />{<br />    public function getPrice($item)<br />    {<br />        $prices = array("apple" =&gt; 4, "orange" =&gt; 5);<br />        return $prices[$item];<br />    }<br />    public function buy($item, $number)<br />    {<br />        $price = self::getPrice($item) * $number;<br />        do_thing_to_sell_the_item();<br />        return $price;<br />    }<br />}<br /><br />// Use reflection to get method names and parameters<br />$mirror = new ReflectionClass("MyHandler");<br />foreach ($mirror-&gt;getMethods() as $method)<br />{<br />    // Create new "lambda" function for each method<br />    <br />    // Generate argument list<br />    $args = array();<br />    foreach ($method-&gt;getParameters() as $param)<br />    {<br />        $args[] = '$'.$param-&gt;getName();<br />    }<br />    $args = implode(',', $args);<br />    <br />    // Generate code<br />    $methodname = $method-&gt;getName();<br />    $code = "return {$real_class}::{$methodname}({$args});";<br />    <br />    // Create function, retrieve function name<br />    $function_name = create_function($args, $code);<br /><br />    // Register the function<br />    xmlrpc_server_register_method($myserver, $methodname, $function_name);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="26942">  <div class="votes">
    <div id="Vu26942">
    <a href="/manual/vote-note.php?id=26942&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26942">
    <a href="/manual/vote-note.php?id=26942&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26942" title="53% like this...">
    1
    </div>
  </div>
  <a href="#26942" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#26942"> &para;</a><div class="date" title="2002-11-18 10:40"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26942">
<div class="phpcode"><code><span class="html">Here is an example how to register a class methode:<br /><br />xml_rpc_server_register_methode($xmlrpc_server, "foo", array(&amp;$bar, "foo_func"));<br /><br />where $bar is the instance of your class and foo_func a methode of this class. Don't forget the '&amp;'!<br /><br />hope this may be useful...<br /><br />Chrigu</span></code></div>
  </div>
 </div>
  <div class="note" id="125645">  <div class="votes">
    <div id="Vu125645">
    <a href="/manual/vote-note.php?id=125645&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125645">
    <a href="/manual/vote-note.php?id=125645&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125645" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125645" class="name">
  <strong class="user"><em>giunta dot gaetano at gmail dot com</em></strong></a><a class="genanchor" href="#125645"> &para;</a><div class="date" title="2020-12-30 09:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125645">
<div class="phpcode"><code><span class="html">Note 1: even if you add introspection data via calls to `xmlrpc_server_register_introspection_callback` or `xmlrpc_server_add_introspection_data`, the server will not validate for you the number or type of received parameters.<br />This means that you have to implement all required validation of the received parameters in your php function.<br /><br />Note 2: take care about dealing with base64 and datetime values in the received parameters: those are not automatically transformed into php scalar values, but into stdClass objects with members `xmlrpc_type` and `scalar`</span></code></div>
  </div>
 </div>
  <div class="note" id="55729">  <div class="votes">
    <div id="Vu55729">
    <a href="/manual/vote-note.php?id=55729&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55729">
    <a href="/manual/vote-note.php?id=55729&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55729" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#55729" class="name">
  <strong class="user"><em>dante at lorenso dot com</em></strong></a><a class="genanchor" href="#55729"> &para;</a><div class="date" title="2005-08-11 12:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55729">
<div class="phpcode"><code><span class="html">To register a callback to a 'static' function within the same class, consider a syntax like the following:<br />&lt;code&gt;<br />$callback = array (__CLASS__, "my_function_name");<br />xmlrpc_server_register_method($xmlrpc_server, "my_function", $callback);<br />&lt;/code&gt;<br />Doing it this way makes it easier to rename your class later.</span></code></div>
  </div>
 </div>
  <div class="note" id="31665">  <div class="votes">
    <div id="Vu31665">
    <a href="/manual/vote-note.php?id=31665&amp;page=function.xmlrpc-server-register-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31665">
    <a href="/manual/vote-note.php?id=31665&amp;page=function.xmlrpc-server-register-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31665" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#31665" class="name">
  <strong class="user"><em>Nate Parsons</em></strong></a><a class="genanchor" href="#31665"> &para;</a><div class="date" title="2003-04-29 03:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31665">
<div class="phpcode"><code><span class="html">In case its not completely obvious what Chrigu meant,<br /><br />You can register a method inside your class by doing the following:<br /><br />xml_rpc_server_register_methode($xmlrpc_server, "myClientCall", array(&amp;$this, "handleClientCallFunc"));<br /><br />where $this == the magic class $this. =)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xmlrpc-server-register-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xmlrpc-server-register-method.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
