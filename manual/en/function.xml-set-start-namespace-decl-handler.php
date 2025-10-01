<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_set_start_namespace_decl_handler - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-set-start-namespace-decl-handler.php">
 <link rel="shorturl" href="https://www.php.net/xml-set-start-namespace-decl-handler">
 <link rel="alternate" href="https://www.php.net/xml-set-start-namespace-decl-handler" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-set-processing-instruction-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-set-unparsed-entity-decl-handler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-set-start-namespace-decl-handler.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-set-start-namespace-decl-handler.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-set-start-namespace-decl-handler.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-set-start-namespace-decl-handler.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-set-start-namespace-decl-handler.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-set-start-namespace-decl-handler.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-set-start-namespace-decl-handler.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-set-start-namespace-decl-handler.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-set-start-namespace-decl-handler.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-set-start-namespace-decl-handler.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-set-start-namespace-decl-handler.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set up start namespace declaration handler" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_set_start_namespace_decl_handler - Manual" />
<meta name="twitter:description" content="Set up start namespace declaration handler" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_set_start_namespace_decl_handler - Manual" />
<meta itemprop="description" content="Set up start namespace declaration handler" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set up start namespace declaration handler" />

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
        <a href="function.xml-set-unparsed-entity-decl-handler.php">
          xml_set_unparsed_entity_decl_handler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-set-processing-instruction-handler.php">
          &laquo; xml_set_processing_instruction_handler        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xml.php'>XML Parser</a></li>      <li><a href='ref.xml.php'>XML Parser Functions</a></li>      </ul>
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
            <option value='en/function.xml-set-start-namespace-decl-handler.php' selected="selected">English</option>
            <option value='de/function.xml-set-start-namespace-decl-handler.php'>German</option>
            <option value='es/function.xml-set-start-namespace-decl-handler.php'>Spanish</option>
            <option value='fr/function.xml-set-start-namespace-decl-handler.php'>French</option>
            <option value='it/function.xml-set-start-namespace-decl-handler.php'>Italian</option>
            <option value='ja/function.xml-set-start-namespace-decl-handler.php'>Japanese</option>
            <option value='pt_BR/function.xml-set-start-namespace-decl-handler.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-set-start-namespace-decl-handler.php'>Russian</option>
            <option value='tr/function.xml-set-start-namespace-decl-handler.php'>Turkish</option>
            <option value='uk/function.xml-set-start-namespace-decl-handler.php'>Ukrainian</option>
            <option value='zh/function.xml-set-start-namespace-decl-handler.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-set-start-namespace-decl-handler" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_set_start_namespace_decl_handler</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_set_start_namespace_decl_handler</span> &mdash; <span class="dc-title">
   Set up start namespace declaration handler
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.xml-set-start-namespace-decl-handler-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xml_set_start_namespace_decl_handler</strong></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$handler</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Set a handler to be called when a namespace is declared. Namespace
   declarations occur inside start tags. But the namespace declaration start
   handler is called before the start tag handler for each namespace declared
   in that start tag.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-set-start-namespace-decl-handler-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
 <dt><code class="parameter">parser</code></dt>
 <dd>
  <p class="para">
   The XML parser.
  </p>
 </dd>

    
     <dt><code class="parameter">handler</code></dt>
     <dd>
      <p class="para">
 If <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is passed, the handler is reset to its default state.
 <div class="warning"><strong class="warning">Warning</strong>
  <p class="simpara">
    An empty string will also reset the handler,
    however this is deprecated as of PHP 8.4.0.
  </p>
 </div>
</p>
<p class="para">
 If <code class="parameter">handler</code> is a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>,
 the callable is set as the handler.
</p>
<p class="para">
 If <code class="parameter">handler</code> is a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
 it can be the name of a method of an object set with
 <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span>.
 <div class="warning"><strong class="warning">Warning</strong>
  <p class="simpara">
   This is deprecated as of PHP 8.4.0.
  </p>
 </div>
</p>
<div class="warning"><strong class="warning">Warning</strong>
 <p class="simpara">
  As of PHP 8.4.0, the callable is checked to be valid while setting the handler,
  not when it is called.
  This means that <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span> must be called prior to
  setting a method string as the callback.
  However, as this behaviour is also deprecated as of PHP 8.4.0,
  using a proper <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> for the method is recommended instead.
 </p>
</div>

      <p class="para">
       The signature of the handler must be:
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span> <code class="parameter">$prefix</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$uri</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

       <dl>
        
 <dt><code class="parameter">parser</code></dt>
 <dd>
  <span class="simpara">
   The XML parser calling the handler.
  </span>
 </dd>

        
         <dt><code class="parameter">prefix</code></dt>
         <dd>
          <span class="simpara">
           The prefix is a string used to reference the namespace within an XML object.
           <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if no prefix exists.
          </span>
         </dd>
        
        
         <dt><code class="parameter">uri</code></dt>
         <dd>
          <span class="simpara">
           Uniform Resource Identifier (URI) of namespace.
          </span>
         </dd>
        
       </dl>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.xml-set-start-namespace-decl-handler-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-set-start-namespace-decl-handler-changelog">
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
 <td>8.4.0</td>
 <td>
  Passing a non-<span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <span class="type"><a href="language.types.string.php" class="type string">string</a></span> to
  <code class="parameter">handler</code> is now deprecated,
  use a proper callable for methods, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to reset the handler.
 </td>
</tr>

<tr>
 <td>8.4.0</td>
 <td>
  The validity of <code class="parameter">handler</code> as a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>
  is now checked when setting the handler instead of checking when calling it.
 </td>
</tr>

     <tr>
 <td>8.0.0</td>
 <td>
  <code class="parameter">parser</code> expects an <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span>
  instance now; previously, a valid <code class="literal">xml</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.xml-set-start-namespace-decl-handler-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.xml-set-end-namespace-decl-handler.php" class="function" rel="rdfs-seeAlso">xml_set_end_namespace_decl_handler()</a> - Set up end namespace declaration handler</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-set-start-namespace-decl-handler.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-set-start-namespace-decl-handler%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-set-start-namespace-decl-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-set-start-namespace-decl-handler.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.xml.php">XML Parser Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.xml-error-string.php" title="xml_&#8203;error_&#8203;string">xml_&#8203;error_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-byte-index.php" title="xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index">xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-column-number.php" title="xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-line-number.php" title="xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-error-code.php" title="xml_&#8203;get_&#8203;error_&#8203;code">xml_&#8203;get_&#8203;error_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse.php" title="xml_&#8203;parse">xml_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse-into-struct.php" title="xml_&#8203;parse_&#8203;into_&#8203;struct">xml_&#8203;parse_&#8203;into_&#8203;struct</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create.php" title="xml_&#8203;parser_&#8203;create">xml_&#8203;parser_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create-ns.php" title="xml_&#8203;parser_&#8203;create_&#8203;ns">xml_&#8203;parser_&#8203;create_&#8203;ns</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-free.php" title="xml_&#8203;parser_&#8203;free">xml_&#8203;parser_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-get-option.php" title="xml_&#8203;parser_&#8203;get_&#8203;option">xml_&#8203;parser_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-set-option.php" title="xml_&#8203;parser_&#8203;set_&#8203;option">xml_&#8203;parser_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-character-data-handler.php" title="xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler">xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-default-handler.php" title="xml_&#8203;set_&#8203;default_&#8203;handler">xml_&#8203;set_&#8203;default_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-element-handler.php" title="xml_&#8203;set_&#8203;element_&#8203;handler">xml_&#8203;set_&#8203;element_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-end-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-external-entity-ref-handler.php" title="xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler">xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-notation-decl-handler.php" title="xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-object.php" title="xml_&#8203;set_&#8203;object">xml_&#8203;set_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-processing-instruction-handler.php" title="xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler">xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler</a>
                        </li>
                                                <li class="current">
                            <a href="function.xml-set-start-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-unparsed-entity-decl-handler.php" title="xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler</a>
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
