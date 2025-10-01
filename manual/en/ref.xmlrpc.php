<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XML-RPC Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.xmlrpc.php">
 <link rel="shorturl" href="https://www.php.net/xmlrpc">
 <link rel="alternate" href="https://www.php.net/xmlrpc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.xmlrpc.php">
 <link rel="prev" href="https://www.php.net/manual/en/xmlrpc.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xmlrpc-decode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.xmlrpc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.xmlrpc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.xmlrpc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.xmlrpc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.xmlrpc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.xmlrpc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.xmlrpc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.xmlrpc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.xmlrpc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.xmlrpc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.xmlrpc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="XML-RPC Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XML-RPC Functions - Manual" />
<meta name="twitter:description" content="XML-RPC Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XML-RPC Functions - Manual" />
<meta itemprop="description" content="XML-RPC Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="XML-RPC Functions" />

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
        <a href="function.xmlrpc-decode.php">
          xmlrpc_decode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xmlrpc.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.xmlrpc.php'>XML-RPC</a></li>      </ul>
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
            <option value='en/ref.xmlrpc.php' selected="selected">English</option>
            <option value='de/ref.xmlrpc.php'>German</option>
            <option value='es/ref.xmlrpc.php'>Spanish</option>
            <option value='fr/ref.xmlrpc.php'>French</option>
            <option value='it/ref.xmlrpc.php'>Italian</option>
            <option value='ja/ref.xmlrpc.php'>Japanese</option>
            <option value='pt_BR/ref.xmlrpc.php'>Brazilian Portuguese</option>
            <option value='ru/ref.xmlrpc.php'>Russian</option>
            <option value='tr/ref.xmlrpc.php'>Turkish</option>
            <option value='uk/ref.xmlrpc.php'>Ukrainian</option>
            <option value='zh/ref.xmlrpc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.xmlrpc" class="reference">
 <h1 class="title">XML-RPC Functions</h1>






















































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.xmlrpc-decode.php">xmlrpc_decode</a> — Decodes XML into native PHP types</li><li><a href="function.xmlrpc-decode-request.php">xmlrpc_decode_request</a> — Decodes XML into native PHP types</li><li><a href="function.xmlrpc-encode.php">xmlrpc_encode</a> — Generates XML for a PHP value</li><li><a href="function.xmlrpc-encode-request.php">xmlrpc_encode_request</a> — Generates XML for a method request</li><li><a href="function.xmlrpc-get-type.php">xmlrpc_get_type</a> — Gets xmlrpc type for a PHP value</li><li><a href="function.xmlrpc-is-fault.php">xmlrpc_is_fault</a> — Determines if an array value represents an XMLRPC fault</li><li><a href="function.xmlrpc-parse-method-descriptions.php">xmlrpc_parse_method_descriptions</a> — Decodes XML into a list of method descriptions</li><li><a href="function.xmlrpc-server-add-introspection-data.php">xmlrpc_server_add_introspection_data</a> — Adds introspection documentation</li><li><a href="function.xmlrpc-server-call-method.php">xmlrpc_server_call_method</a> — Parses XML requests and call methods</li><li><a href="function.xmlrpc-server-create.php">xmlrpc_server_create</a> — Creates an xmlrpc server</li><li><a href="function.xmlrpc-server-destroy.php">xmlrpc_server_destroy</a> — Destroys server resources</li><li><a href="function.xmlrpc-server-register-introspection-callback.php">xmlrpc_server_register_introspection_callback</a> — Register a PHP function to generate documentation</li><li><a href="function.xmlrpc-server-register-method.php">xmlrpc_server_register_method</a> — Register a PHP function to resource method matching method_name</li><li><a href="function.xmlrpc-set-type.php">xmlrpc_set_type</a> — Sets xmlrpc type, base64 or datetime, for a PHP string value</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlrpc/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.xmlrpc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.xmlrpc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.xmlrpc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="51159">  <div class="votes">
    <div id="Vu51159">
    <a href="/manual/vote-note.php?id=51159&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51159">
    <a href="/manual/vote-note.php?id=51159&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51159" title="100% like this...">
    3
    </div>
  </div>
  <a href="#51159" class="name">
  <strong class="user"><em>astrolox at lawyersonline dot co dot uk</em></strong></a><a class="genanchor" href="#51159"> &para;</a><div class="date" title="2005-03-22 04:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51159">
<div class="phpcode"><code><span class="html">The PHP XML-RPC project at SourceForge makes life a hell of a lot easier. However, the project uses some function names which are identical to thoses provided by the XML-RPC extention.<br /><br />If you are on a server with XML-RPC extension compiled in but wish to use the PHP based version then you will have to rename some of the functions.<br /><br />I notice that sourceforce says there is activity on the project in 2005 but the last release was January 12, 2003.<br /><br />I recommend that you use this not so friendly PHP extention if available. However this sourceforce project is still a good idea if you don't control which extenions are be available on the server.<br /><br /><a href="http://phpxmlrpc.sourceforge.net/" rel="nofollow" target="_blank">http://phpxmlrpc.sourceforge.net/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="43079">  <div class="votes">
    <div id="Vu43079">
    <a href="/manual/vote-note.php?id=43079&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43079">
    <a href="/manual/vote-note.php?id=43079&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43079" title="100% like this...">
    3
    </div>
  </div>
  <a href="#43079" class="name">
  <strong class="user"><em>swunderlin at REMOVE-telemedia dot ch</em></strong></a><a class="genanchor" href="#43079"> &para;</a><div class="date" title="2004-06-09 03:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43079">
<div class="phpcode"><code><span class="html">pear hs an XML_RPC package, if you can't recompile your php:<br /><a href="http://pear.php.net/package/XML_RPC" rel="nofollow" target="_blank">http://pear.php.net/package/XML_RPC</a></span></code></div>
  </div>
 </div>
  <div class="note" id="24653">  <div class="votes">
    <div id="Vu24653">
    <a href="/manual/vote-note.php?id=24653&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24653">
    <a href="/manual/vote-note.php?id=24653&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24653" title="100% like this...">
    3
    </div>
  </div>
  <a href="#24653" class="name">
  <strong class="user"><em>steve at orangeNOSPAMimagineering dot com</em></strong></a><a class="genanchor" href="#24653"> &para;</a><div class="date" title="2002-08-24 01:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24653">
<div class="phpcode"><code><span class="html">There's a handy library by Keith Devens (version 2.2.1) at 
<br /><a href="http://www.keithdevens.com/software/xmlrpc/" rel="nofollow" target="_blank">http://www.keithdevens.com/software/xmlrpc/</a>
<br />
<br />Here is a sample client. It remotely calls sample.sumAndDifference
<br />with two parameters (3 and 5).
<br />It returns:
<br />
<br />sum =&gt; 8
<br />difference =&gt; -2
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">include (</span><span class="string">"kd_xmlrpc.php"</span><span class="keyword">);
<br /></span><span class="comment">// define("XMLRPC_DEBUG", 0);    // Set to 1 for handy debugging
<br />
<br /></span><span class="default">$method </span><span class="keyword">= </span><span class="string">"sample.sumAndDifference"</span><span class="keyword">;
<br /></span><span class="default">$params </span><span class="keyword">= </span><span class="default">XMLRPC_prepare</span><span class="keyword">(array(</span><span class="default">3</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">));
<br />
<br /></span><span class="default">$site </span><span class="keyword">= </span><span class="string">"xmlrpc-c.sourceforge.net"</span><span class="keyword">;
<br /></span><span class="default">$location </span><span class="keyword">= </span><span class="string">"/api/sample.php"</span><span class="keyword">;
<br />
<br />list(</span><span class="default">$success</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">) = </span><span class="default">XMLRPC_request</span><span class="keyword">( </span><span class="default">$site</span><span class="keyword">, </span><span class="default">$location</span><span class="keyword">, </span><span class="default">$method</span><span class="keyword">, </span><span class="default">$params </span><span class="keyword">);
<br />
<br /></span><span class="comment">// XMLRPC_debug_print();    // uncomment for debugging
<br />
<br /></span><span class="keyword">foreach ( </span><span class="default">$result </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">) {
<br />          echo(</span><span class="string">" </span><span class="default">$key</span><span class="string"> =&gt; </span><span class="default">$value</span><span class="string"> \n"</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55468">  <div class="votes">
    <div id="Vu55468">
    <a href="/manual/vote-note.php?id=55468&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55468">
    <a href="/manual/vote-note.php?id=55468&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55468" title="69% like this...">
    10
    </div>
  </div>
  <a href="#55468" class="name">
  <strong class="user"><em>martin dot rode at programmfabrik dot de</em></strong></a><a class="genanchor" href="#55468"> &para;</a><div class="date" title="2005-08-04 05:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55468">
<div class="phpcode"><code><span class="html">To connect to a python xmlrpc server I use:<br /><br />function do_call($host, $port, $request) {<br />  <br />    $url = "<a href="http://$host:$port/" rel="nofollow" target="_blank">http://$host:$port/</a>";<br />    $header[] = "Content-type: text/xml";<br />    $header[] = "Content-length: ".strlen($request);<br />    <br />    $ch = curl_init();   <br />    curl_setopt($ch, CURLOPT_URL, $url);<br />    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);<br />    curl_setopt($ch, CURLOPT_TIMEOUT, 1);<br />    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);<br />    curl_setopt($ch, CURLOPT_POSTFIELDS, $request);<br />    <br />    $data = curl_exec($ch);       <br />    if (curl_errno($ch)) {<br />        print curl_error($ch);<br />    } else {<br />        curl_close($ch);<br />        return $data;<br />    }<br />}<br /><br />$request = xmlrpc_encode_request('add', array(3, 4));<br />$response = do_call($host, $port, $request);</span></code></div>
  </div>
 </div>
  <div class="note" id="66230">  <div class="votes">
    <div id="Vu66230">
    <a href="/manual/vote-note.php?id=66230&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66230">
    <a href="/manual/vote-note.php?id=66230&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66230" title="66% like this...">
    3
    </div>
  </div>
  <a href="#66230" class="name">
  <strong class="user"><em>keithNO dot SPAMthornhill at gmail dot com</em></strong></a><a class="genanchor" href="#66230"> &para;</a><div class="date" title="2006-05-17 02:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66230">
<div class="phpcode"><code><span class="html">for others attempting the same thing, here is what a function would look like if you wanted to send a base64 encoded file from a client and then save it onto the server. the other code necessary to call this function via an RPC is available in other comments so i won't repeat it.<br /><br />parameters:<br />1 - name of file<br />2 - base64 encoded data of file<br /><br />note the use of $file_data-&gt;scalar<br /><br />&lt;?<br />    function sendFile($method_name, $params, $user_data) {<br />        $file = "/somedir/" . $params[0];<br />        $file_data = $params[1];<br /><br />        $fh = @fopen($file, "wb");<br />        if ($fh) {<br />            if (@fwrite($fh, $file_data-&gt;scalar)) {<br />                $msg = "success msg";<br />            } else {<br />                $msg = "couldn't write to file";<br />            }<br />            fclose($fh);<br />            return $msg;<br />        } else {<br />            return "couldn't open file";<br />        }<br />    }<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="44704">  <div class="votes">
    <div id="Vu44704">
    <a href="/manual/vote-note.php?id=44704&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44704">
    <a href="/manual/vote-note.php?id=44704&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44704" title="66% like this...">
    2
    </div>
  </div>
  <a href="#44704" class="name">
  <strong class="user"><em>php at hendrik-krauss dot de</em></strong></a><a class="genanchor" href="#44704"> &para;</a><div class="date" title="2004-08-13 12:38"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44704">
<div class="phpcode"><code><span class="html">On "datetime" values:<br /><br />If you implement an XML-RPC server with these functions and a client calls a method on your server, sending a datetime as parameter (in ISO 8601 format, as specified at <a href="http://www.xmlrpc.com/spec" rel="nofollow" target="_blank">http://www.xmlrpc.com/spec</a>), the PHP XML-RPC will pass your registered server method an object as parameter. That object, for example, looks like:<br />obj-&gt;type="datetime"<br />obj-&gt;scalar="20040420T13:32:40"<br />obj-&gt;timestamp=1082460760<br /><br />If you do xmlrpc_get_type(obj), it will return "datetime", so presumably that function just returns the value of 'type'. 'scalar' seems to be the on-the-wire representation of the datetime (ISO 8601, exactly as received). 'timestamp' appears to be the ISO value in 'scalar' converted into a normal PHP timestamp (i.e. Unix time_t).<br /><br />Note on 'scalar': Using a MySQL DB, we did something like  "select blah where start_time &gt;= $obj-&gt;scalar ;". That actually worked and returned expected results, so MySQL appears to handle that ISO 8601 format correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="78289">  <div class="votes">
    <div id="Vu78289">
    <a href="/manual/vote-note.php?id=78289&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78289">
    <a href="/manual/vote-note.php?id=78289&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78289" title="66% like this...">
    1
    </div>
  </div>
  <a href="#78289" class="name">
  <strong class="user"><em>digibrisk at gmail dot NOSPAM dot SPAMNO dot com</em></strong></a><a class="genanchor" href="#78289"> &para;</a><div class="date" title="2007-10-05 03:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78289">
<div class="phpcode"><code><span class="html">Adding to what giunta dot gaetano at sea-aeroportimilano dot it and astrolox at lawyersonline dot co dot uk said about the Sourceforge PHP XML-RPC project: You can probably use function_exists() to determine whether the extension is installed so you don't have to incur performance costs. If it's not installed, then the function won't exist, and function_exists() returns false. You can then fall back on the alternative library if that's the case. For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"xmlrpc_server_create"</span><span class="keyword">)) {<br />    </span><span class="comment">// include necessary files.<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43051">  <div class="votes">
    <div id="Vu43051">
    <a href="/manual/vote-note.php?id=43051&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43051">
    <a href="/manual/vote-note.php?id=43051&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43051" title="60% like this...">
    3
    </div>
  </div>
  <a href="#43051" class="name">
  <strong class="user"><em>steph at zend dot com</em></strong></a><a class="genanchor" href="#43051"> &para;</a><div class="date" title="2004-06-08 04:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43051">
<div class="phpcode"><code><span class="html">It took me a while to get a client together without external libraries.  This very basic client/server pair works on my home set-up - hopefully it will save the next xml-rpc virgin some grief.
<br />
<br />/* clienttest.php */
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">do_call</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">) {
<br />    
<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">);
<br />    </span><span class="default">$query </span><span class="keyword">= </span><span class="string">"POST /home/servertest.php HTTP/1.0\nUser_Agent: My Egg Client\nHost: "</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">.</span><span class="string">"\nContent-Type: text/xml\nContent-Length: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$request</span><span class="keyword">).</span><span class="string">"\n\n"</span><span class="keyword">.</span><span class="default">$request</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />
<br />    if (!</span><span class="default">fputs</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">))) {
<br />        </span><span class="default">$errstr </span><span class="keyword">= </span><span class="string">"Write error"</span><span class="keyword">;
<br />        return </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">$contents </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />        </span><span class="default">$contents </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />    return </span><span class="default">$contents</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$host </span><span class="keyword">= </span><span class="string">'localhost'</span><span class="keyword">;
<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">80</span><span class="keyword">;
<br /></span><span class="default">$request </span><span class="keyword">= </span><span class="default">xmlrpc_encode_request</span><span class="keyword">(</span><span class="string">'cycle'</span><span class="keyword">, </span><span class="string">'egg'</span><span class="keyword">);
<br /></span><span class="default">$response </span><span class="keyword">= </span><span class="default">do_call</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">);
<br /></span><span class="comment">/* do something with $response, e.g. print it */
<br /></span><span class="default">?&gt;
<br /></span>
<br />/* servertest.php */
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">lifecycle</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">) {
<br /></span><span class="comment">/* $method = 'cycle', $params = (array of) request parameter(s); $data is also passed from xmlrpc_server_call_method, if we had any data to pass */
<br />    </span><span class="keyword">switch(</span><span class="default">$params</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) {
<br />        case </span><span class="string">'egg'</span><span class="keyword">:
<br />            </span><span class="default">$reply </span><span class="keyword">= </span><span class="string">'All eggs will be birds one day.'</span><span class="keyword">;
<br />        break;
<br />        default:
<br />            </span><span class="default">$reply </span><span class="keyword">= </span><span class="string">'That must have been an otheregg'</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">$reply</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$server </span><span class="keyword">= </span><span class="default">xmlrpc_server_create</span><span class="keyword">();
<br />
<br /></span><span class="comment">/* register the 'external' name and then the 'internal' name */
<br /></span><span class="default">xmlrpc_server_register_method</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="string">"cycle"</span><span class="keyword">, </span><span class="string">"lifecycle"</span><span class="keyword">);
<br />
<br /></span><span class="default">$request </span><span class="keyword">= </span><span class="default">$HTTP_RAW_POST_DATA</span><span class="keyword">; </span><span class="comment">// no you don't need 'always on', and no $_POST doesn't work.
<br />
<br />/* the parameters here are 'server, xml-string and user data'.  There's supposed to be an optional 'output options' array too, but I can't get it working :( hence header() call */
<br /></span><span class="default">$response </span><span class="keyword">= </span><span class="default">xmlrpc_server_call_method</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$request</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/xml'</span><span class="keyword">);
<br />print </span><span class="default">$response</span><span class="keyword">;
<br />
<br /></span><span class="default">xmlrpc_server_destroy</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29298">  <div class="votes">
    <div id="Vu29298">
    <a href="/manual/vote-note.php?id=29298&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29298">
    <a href="/manual/vote-note.php?id=29298&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29298" title="66% like this...">
    1
    </div>
  </div>
  <a href="#29298" class="name">
  <strong class="user"><em>bmichael at goldparrot dot com</em></strong></a><a class="genanchor" href="#29298"> &para;</a><div class="date" title="2003-02-08 09:52"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29298">
<div class="phpcode"><code><span class="html">If anyone is interested in making XMLRPC requests directly from the client, I have been able to get xmlrpc to <br />work with vcXMLRPC javascript backend.<br /><br />After about 1 week of scanning the market, I found this solution to be the best on Javascript back end.  It uses the Microsoft.HTTP activeX control for IE, or HTTPRequest Object for Mozilla.<br /><br />You include vc(Virtual Cowboys) vcXMLRPC.js file into your pages and make the rpc calls from with javascript to create the requests.<br /><br />It works both ways.<br /><br />Two Notes:<br /><br />I have tested it on IE 6.02 and you need to change lines in ProcessRequest :<br />function to read:<br /><br />  dom = this.getObject("XMLDOM",http.responseText);<br /><br />and change the getObject function to use the latest ActiveX Control:<br /><br /> MSXML2.XMLHTTP.3.0  (or 4.0)<br /> MSXML2.DOMDocument.3.0  (or 4.0)<br /><br />The controls are found on MSDN in the Web Services -&gt; XML area.<br /><br />As another note, you DO NOT NEED the rpcproxy.cgi script to use this.  That is a proxy script to get around JS Security.  You can use PHP to build the proxy.  But, I was able to get the CGI working with GCC compiler on Solaris (change the -KPCI, depend and -x03 optimizer settings in the Makefile )</span></code></div>
  </div>
 </div>
  <div class="note" id="62797">  <div class="votes">
    <div id="Vu62797">
    <a href="/manual/vote-note.php?id=62797&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62797">
    <a href="/manual/vote-note.php?id=62797&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62797" title="60% like this...">
    2
    </div>
  </div>
  <a href="#62797" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#62797"> &para;</a><div class="date" title="2006-03-09 12:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62797">
<div class="phpcode"><code><span class="html">This XML-RPC Service makes the use XML-RPC very esay.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br />* function myfun() returns  <br />*@return array<br />*/<br /></span><span class="keyword">function </span><span class="default">myfunc</span><span class="keyword">(){<br />    return </span><span class="default">$some_array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$ws </span><span class="keyword">= new </span><span class="default">XML_RPC_Server</span><span class="keyword">();<br /></span><span class="default">$ws</span><span class="keyword">-&gt;</span><span class="default">registerFunction</span><span class="keyword">(</span><span class="string">'myfunc'</span><span class="keyword">);<br /></span><span class="default">$ws</span><span class="keyword">-&gt;</span><span class="default">run</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br /><a href="http://www.pure-php.de/node/31" rel="nofollow" target="_blank">http://www.pure-php.de/node/31</a><br /><br />It creates also a simple docu.<br /><a href="http://www.pure-php.com/php/service.php?doc" rel="nofollow" target="_blank">http://www.pure-php.com/php/service.php?doc</a></span></code></div>
  </div>
 </div>
  <div class="note" id="69634">  <div class="votes">
    <div id="Vu69634">
    <a href="/manual/vote-note.php?id=69634&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69634">
    <a href="/manual/vote-note.php?id=69634&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69634" title="58% like this...">
    2
    </div>
  </div>
  <a href="#69634" class="name">
  <strong class="user"><em>giunta dot gaetano at sea-aeroportimilano dot it</em></strong></a><a class="genanchor" href="#69634"> &para;</a><div class="date" title="2006-09-13 06:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69634">
<div class="phpcode"><code><span class="html">If you need to use this extension but are stuck on a server where it can not be installed, the php-xmlrpc library found at <a href="http://phpxmlrpc.sourceforge.net" rel="nofollow" target="_blank">http://phpxmlrpc.sourceforge.net</a> includes an emulation layer that aims to be 100% compatible with the API of the native extension (as part of the "extras" package since version 0.2).<br />This means your code should be able to run unmodified on top of the php-xmlrpc library. Of course performance will be at least an order of magnitude worse...</span></code></div>
  </div>
 </div>
  <div class="note" id="73371">  <div class="votes">
    <div id="Vu73371">
    <a href="/manual/vote-note.php?id=73371&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73371">
    <a href="/manual/vote-note.php?id=73371&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73371" title="60% like this...">
    1
    </div>
  </div>
  <a href="#73371" class="name">
  <strong class="user"><em>handco at gmail dot com</em></strong></a><a class="genanchor" href="#73371"> &para;</a><div class="date" title="2007-02-20 08:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73371">
<div class="phpcode"><code><span class="html">Hi, <br /><br />A little snippet to implement OO XML RPC Server.<br /><br />File RPCPlugin.php : <br /><br />class RPCPlugins {<br />    <br />    private $plugins;<br />    <br />    function __construct ($pathname, $rpcServer) {<br />        $d = dir($pathname);<br />        while (($file = $d-&gt;read()) !== false) {<br />            if (ereg('(.*)\.php$', $file, $regs)) {<br />                include_once ($pathname . '/' . $file);<br />                $class=$regs[1];<br />                $this-&gt;plugins = new $class($rpcServer);            <br />            }<br />        }<br />    }<br />    <br />}<br /><br />class RPCPlugin {<br />    <br />    private $_rpcServer;<br />    <br />    function __construct($rpcServer) {<br />        $this-&gt;_rpcServer = $rpcServer;<br />        <br />        $methods = get_class_methods($this);<br />        <br />        foreach ($methods as $method) {<br />            if (substr($method, 0,1) != '_') {<br />                xmlrpc_server_register_method($rpcServer,get_class($this) . "." . $method,array(&amp;$this,$method));<br />            }<br />        }<br />        <br />    }<br />    <br />}<br /><br />An example of plugin in plugins/Test.php  : <br /><br /> class Test extends RPCPlugin {<br />     <br />     <br />     function HelloWorld ($method, $params) {<br />         return "Hello World ---&gt;&gt;" . $params[0];<br />     }<br />     <br /> }<br /><br />Now the real server : <br /><br />require_once 'RPCPlugin.php';<br /> <br /> $rpcServer = xmlrpc_server_create();<br /> <br />$plugins = new RPCPlugins(realpath('plugins/'), $rpcServer);<br /> <br /> $resp = xmlrpc_server_call_method($rpcServer,$HTTP_RAW_POST_DATA,null);<br /> if ($resp) {<br />     header ('Content-Type: text/xml');<br />     echo $resp;<br /> }<br /> xmlrpc_server_destroy($rpcServer)<br /><br />Then you can call ethod by classname.method. <br />For this sample Test.HelloWorld<br /><br />Hn'Co</span></code></div>
  </div>
 </div>
  <div class="note" id="57927">  <div class="votes">
    <div id="Vu57927">
    <a href="/manual/vote-note.php?id=57927&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57927">
    <a href="/manual/vote-note.php?id=57927&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57927" title="60% like this...">
    1
    </div>
  </div>
  <a href="#57927" class="name">
  <strong class="user"><em>john # curioussymbols com</em></strong></a><a class="genanchor" href="#57927"> &para;</a><div class="date" title="2005-10-19 04:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57927">
<div class="phpcode"><code><span class="html">I couldn't make the 'xmlrpc_errors' php.ini setting do anything <br />noticeable (PHP 4.3.11), so I used the following code to report errors <br />from my XMLRPC server. Hope it's helpful for someone.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">return_xmlrpc_error</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">,</span><span class="default">$errstr</span><span class="keyword">,</span><span class="default">$errfile</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">,</span><span class="default">$errline</span><span class="keyword">=</span><span class="default">NULL<br />       </span><span class="keyword">,</span><span class="default">$errcontext</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">){<br />    global </span><span class="default">$xmlrpc_server</span><span class="keyword">;<br />    if(!</span><span class="default">$xmlrpc_server</span><span class="keyword">)die(</span><span class="string">"Error: </span><span class="default">$errstr</span><span class="string"> in '</span><span class="default">$errfile</span><span class="string">', line '</span><span class="default">$errline</span><span class="string">'"</span><span class="keyword">);<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: text/xml; charset=UTF-8"</span><span class="keyword">);<br />    print(</span><span class="default">xmlrpc_encode</span><span class="keyword">(array(<br />        </span><span class="string">'faultCode'</span><span class="keyword">=&gt;</span><span class="default">$errno<br />        </span><span class="keyword">,</span><span class="string">'faultString'</span><span class="keyword">=&gt;</span><span class="string">"Remote XMLRPC Error from <br />          "</span><span class="keyword">.</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">].</span><span class="string">": </span><span class="default">$errstr</span><span class="string"> in at </span><span class="default">$errfile</span><span class="string">:</span><span class="default">$errline</span><span class="string">"<br />    </span><span class="keyword">)));<br />    die();<br />}    <br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">'return_xmlrpc_error'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In my server function, I just trigger_error("message",E_USER_ERROR)]<br /> if something can't be completed.<br /><br />Then on the client side,<br /><span class="default">&lt;?php<br />        $data </span><span class="keyword">=&amp; </span><span class="default">xmlrpc_decode</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">[</span><span class="string">'body'</span><span class="keyword">]);<br /><br />        if(</span><span class="default">xmlrpc_is_fault</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)){<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="string">'faultString'</span><span class="keyword">],</span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46530">  <div class="votes">
    <div id="Vu46530">
    <a href="/manual/vote-note.php?id=46530&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46530">
    <a href="/manual/vote-note.php?id=46530&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46530" title="57% like this...">
    1
    </div>
  </div>
  <a href="#46530" class="name">
  <strong class="user"><em>Jerome Delamarche</em></strong></a><a class="genanchor" href="#46530"> &para;</a><div class="date" title="2004-10-14 02:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46530">
<div class="phpcode"><code><span class="html">The documentation lacks an example that shows how to send a fault in a response. Here is how to do it:<br /><br />$args = array("faultCode" =&gt; $errcode, "faultString" =&gt; $errmsg);<br />$resp = xmlrpc_encode_request(NULL,$args);<br />//echo $resp;</span></code></div>
  </div>
 </div>
  <div class="note" id="24407">  <div class="votes">
    <div id="Vu24407">
    <a href="/manual/vote-note.php?id=24407&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24407">
    <a href="/manual/vote-note.php?id=24407&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24407" title="100% like this...">
    2
    </div>
  </div>
  <a href="#24407" class="name">
  <strong class="user"><em>hfuecks at pinkgoblin dot com</em></strong></a><a class="genanchor" href="#24407"> &para;</a><div class="date" title="2002-08-15 08:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24407">
<div class="phpcode"><code><span class="html">This extension does not handle the process of making making XML-RPC client requests via HTTP; it only prepares the XML-RPC request payload.<br /><br />This differs from many other XML-RPC implementations but offers greater flexibility, allowing SSL connections, authentication headers and XML-RPC via other transports like SMTP.</span></code></div>
  </div>
 </div>
  <div class="note" id="20983">  <div class="votes">
    <div id="Vu20983">
    <a href="/manual/vote-note.php?id=20983&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20983">
    <a href="/manual/vote-note.php?id=20983&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20983" title="100% like this...">
    2
    </div>
  </div>
  <a href="#20983" class="name">
  <strong class="user"><em>nic at uklinux dot NOSPAM dot net</em></strong></a><a class="genanchor" href="#20983"> &para;</a><div class="date" title="2002-04-24 09:05"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20983">
<div class="phpcode"><code><span class="html">An alternative XML-RPC implementation is available at <a href="http://xmlrpc.usefulinc.com" rel="nofollow" target="_blank">http://xmlrpc.usefulinc.com</a> - it's written in PHP so you can use it on servers for which you don't have the luxury of rebuilding PHP on.<br /><br />nic</span></code></div>
  </div>
 </div>
  <div class="note" id="40206">  <div class="votes">
    <div id="Vu40206">
    <a href="/manual/vote-note.php?id=40206&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40206">
    <a href="/manual/vote-note.php?id=40206&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40206" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40206" class="name">
  <strong class="user"><em>mboeren at php dot net</em></strong></a><a class="genanchor" href="#40206"> &para;</a><div class="date" title="2004-02-25 04:34"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40206">
<div class="phpcode"><code><span class="html">Just a quick addition to my previous xmlrpc_client class: since you cannot use remote methods containing capital letters or methods from subhandlers (like 'system.listMethods()'), I added a 'call(...)' method to the class. <br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// this method should be copy/pasted in the <br />    // xmlrpc_client class<br /><br />    </span><span class="keyword">function </span><span class="default">call</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">)<br />    {<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$argv </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">); </span><span class="comment">// remove function argument<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">__call</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">, &amp;</span><span class="default">$return</span><span class="keyword">);<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// now, you can also do<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">'system.listMethods'</span><span class="keyword">);<br />    </span><span class="default">$sum </span><span class="keyword">= </span><span class="default">client</span><span class="keyword">-&gt;</span><span class="default">call</span><span class="keyword">(</span><span class="string">'add'</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40176">  <div class="votes">
    <div id="Vu40176">
    <a href="/manual/vote-note.php?id=40176&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40176">
    <a href="/manual/vote-note.php?id=40176&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40176" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#40176" class="name">
  <strong class="user"><em>mboeren at php dot net</em></strong></a><a class="genanchor" href="#40176"> &para;</a><div class="date" title="2004-02-24 07:01"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40176">
<div class="phpcode"><code><span class="html">I use the following code (requires the overload extension) to make developing clients easier:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">include(</span><span class="string">"utils/utils.php"</span><span class="keyword">); </span><span class="comment">// from xmlrpc-epi utils<br /><br />/*<br />Usage:<br />    $client = new xmlrpc_client("<a href="http://localhost:7080" rel="nofollow" target="_blank">http://localhost:7080</a>");<br />    print $client-&gt;echo('x')."\n";<br />    print $client-&gt;add(1, 3)."\n";<br /><br />*/<br /></span><span class="keyword">class </span><span class="default">xmlrpc_client<br /></span><span class="keyword">{<br />    var </span><span class="default">$url</span><span class="keyword">;<br />    var </span><span class="default">$urlparts</span><span class="keyword">;<br /><br />    function </span><span class="default">xmlrpc_client</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts </span><span class="keyword">= </span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">);<br />        foreach(array(</span><span class="string">'scheme'</span><span class="keyword">, </span><span class="string">'host'</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'pass'</span><span class="keyword">, </span><span class="string">'path'</span><span class="keyword">,<br />                      </span><span class="string">'query'</span><span class="keyword">, </span><span class="string">'fragment'</span><span class="keyword">)<br />                as </span><span class="default">$part</span><span class="keyword">) {<br />            if (!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts</span><span class="keyword">[</span><span class="default">$part</span><span class="keyword">])) { <br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts</span><span class="keyword">[</span><span class="default">$part</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br />                }<br />            }<br />    }<br /><br />    function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$function</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">, &amp;</span><span class="default">$return</span><span class="keyword">)<br />    {<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">];<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">];<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'uri'</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">urlparts</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">];<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">] = </span><span class="default">$function</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">] = </span><span class="default">$arguments</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'debug'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'timeout'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'user'</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'pass'</span><span class="keyword">] = </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$requestprms</span><span class="keyword">[</span><span class="string">'secure'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /><br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">xu_rpc_http_concise</span><span class="keyword">(</span><span class="default">$requestprms</span><span class="keyword">);<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'faultCode'</span><span class="keyword">])) {<br />            print(</span><span class="string">'Error in xmlrpc call \''</span><span class="keyword">.</span><span class="default">$function</span><span class="keyword">.</span><span class="string">'\''</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />            print(</span><span class="string">'  code   : '</span><span class="keyword">.</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'faultCode'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">);<br />            print(</span><span class="string">'  message: '</span><span class="keyword">.</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'faultString'</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />            }<br />        </span><span class="default">$return </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">;<br />        return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="default">overload</span><span class="keyword">(</span><span class="string">'xmlrpc_client'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22543">  <div class="votes">
    <div id="Vu22543">
    <a href="/manual/vote-note.php?id=22543&amp;page=ref.xmlrpc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22543">
    <a href="/manual/vote-note.php?id=22543&amp;page=ref.xmlrpc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22543" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#22543" class="name">
  <strong class="user"><em>ivanr  at  webkreator dot com</em></strong></a><a class="genanchor" href="#22543"> &para;</a><div class="date" title="2002-06-21 11:50"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22543">
<div class="phpcode"><code><span class="html">For a really easy way to use this XML-RPC extension take a look at<br /><br />XML-RPC Class Server (<a href="http://www.webkreator.com/php/xcs/" rel="nofollow" target="_blank">http://www.webkreator.com/php/xcs/</a>)<br /><br />It automatically creates servers out of PHP classes. Creating clients is almost as easy, especially with the recent addition of the overload extension to PHP (see <a href="http://www.php.net/manual/en/ref.overload.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ref.overload.php</a>).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.xmlrpc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.xmlrpc.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.xmlrpc.php">XML-RPC</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.xmlrpc.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="xmlrpc.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ref.xmlrpc.php" title="XML-&#8203;RPC Functions">XML-&#8203;RPC Functions</a>
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
