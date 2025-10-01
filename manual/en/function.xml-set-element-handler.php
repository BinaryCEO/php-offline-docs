<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_set_element_handler - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-set-element-handler.php">
 <link rel="shorturl" href="https://www.php.net/xml-set-element-handler">
 <link rel="alternate" href="https://www.php.net/xml-set-element-handler" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-set-default-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-set-end-namespace-decl-handler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-set-element-handler.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-set-element-handler.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-set-element-handler.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-set-element-handler.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-set-element-handler.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-set-element-handler.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-set-element-handler.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-set-element-handler.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-set-element-handler.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-set-element-handler.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-set-element-handler.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set up start and end element handlers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_set_element_handler - Manual" />
<meta name="twitter:description" content="Set up start and end element handlers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_set_element_handler - Manual" />
<meta itemprop="description" content="Set up start and end element handlers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set up start and end element handlers" />

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
        <a href="function.xml-set-end-namespace-decl-handler.php">
          xml_set_end_namespace_decl_handler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-set-default-handler.php">
          &laquo; xml_set_default_handler        </a>
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
            <option value='en/function.xml-set-element-handler.php' selected="selected">English</option>
            <option value='de/function.xml-set-element-handler.php'>German</option>
            <option value='es/function.xml-set-element-handler.php'>Spanish</option>
            <option value='fr/function.xml-set-element-handler.php'>French</option>
            <option value='it/function.xml-set-element-handler.php'>Italian</option>
            <option value='ja/function.xml-set-element-handler.php'>Japanese</option>
            <option value='pt_BR/function.xml-set-element-handler.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-set-element-handler.php'>Russian</option>
            <option value='tr/function.xml-set-element-handler.php'>Turkish</option>
            <option value='uk/function.xml-set-element-handler.php'>Ukrainian</option>
            <option value='zh/function.xml-set-element-handler.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-set-element-handler" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_set_element_handler</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_set_element_handler</span> &mdash; <span class="dc-title">Set up start and end element handlers</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.xml-set-element-handler-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xml_set_element_handler</strong></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$start_handler</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$end_handler</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   Sets the element handler functions for the XML <code class="parameter">parser</code>.
  </p>
  <p class="para">
   <code class="parameter">start_handler</code> is called when a new XML element is
   opened. <code class="parameter">end_handler</code> is called when an XML element
   is closed.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-set-element-handler-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
 <dt><code class="parameter">parser</code></dt>
 <dd>
  <p class="para">
   The XML parser.
  </p>
 </dd>

    
     <dt><code class="parameter">start_handler</code></dt>
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
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">start_element_handler</span></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$attributes</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

       <dl>
        
 <dt><code class="parameter">parser</code></dt>
 <dd>
  <span class="simpara">
   The XML parser calling the handler.
  </span>
 </dd>

        
         <dt><code class="parameter">name</code></dt>
         <dd>
          <span class="simpara">
           Contains the name of the element for which this handler is called.
           If <a href="xml.case-folding.php" class="link">case-folding</a> is in effect
           for this parser, the element name will be in uppercase letters.
          </span>
         </dd>
        
        
         <dt><code class="parameter">attributes</code></dt>
         <dd>
          <span class="simpara">
           An associative array with the element&#039;s attributes.
           The array is empty if the element has no attributes.
           The keys of this array are the attribute names,
           the values are the attribute values.
           Attribute names are
           <a href="xml.case-folding.php" class="link">case-folded</a>
           on the same criteria as element names.
           Attribute values are <em>not</em> case-folded.
          </span>
          <span class="simpara">
           The order in which <code class="parameter">attributes</code> is traversed
           is identical to the order in which the attributes were declared.
          </span>
         </dd>
        
       </dl>
      </p>
     </dd>
    
    
     <dt><code class="parameter">end_handler</code></dt>
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
       <div class="methodsynopsis dc-description"><span class="methodname"><span class="replaceable">end_element_handler</span></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

       <dl>
        
 <dt><code class="parameter">parser</code></dt>
 <dd>
  <span class="simpara">
   The XML parser calling the handler.
  </span>
 </dd>

        
         <dt><code class="parameter">name</code></dt>
         <dd>
          <span class="simpara">
           Contains the name of the element for which this handler is called.
           If <a href="xml.case-folding.php" class="link">case-folding</a> is in effect
           for this parser, the element name will be in uppercase letters.
          </span>
         </dd>
        
       </dl>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xml-set-element-handler-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-set-element-handler-changelog">
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


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-set-element-handler.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-set-element-handler%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-set-element-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-set-element-handler.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">15 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69284">  <div class="votes">
    <div id="Vu69284">
    <a href="/manual/vote-note.php?id=69284&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69284">
    <a href="/manual/vote-note.php?id=69284&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69284" title="75% like this...">
    2
    </div>
  </div>
  <a href="#69284" class="name">
  <strong class="user"><em>rubentrancoso at gmail dot com</em></strong></a><a class="genanchor" href="#69284"> &para;</a><div class="date" title="2006-08-29 01:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69284">
<div class="phpcode"><code><span class="html">My 25 cents. This example show how to parse a XML in a associative array tree.<br /><br /><span class="default">&lt;?php<br /><br />$file </span><span class="keyword">= </span><span class="string">"flow/flow.xml"</span><span class="keyword">;<br /></span><span class="default">$depth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$tree </span><span class="keyword">= array();<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="string">"root"</span><span class="keyword">; <br /></span><span class="default">$stack</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">)] = &amp;</span><span class="default">$tree</span><span class="keyword">;<br /><br />function </span><span class="default">startElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attrs</span><span class="keyword">) {<br />   global </span><span class="default">$depth</span><span class="keyword">;<br />   global </span><span class="default">$stack</span><span class="keyword">;<br />   global </span><span class="default">$tree</span><span class="keyword">;<br />   <br />   </span><span class="default">$element </span><span class="keyword">= array();<br />   </span><span class="default">$element</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="default">$name</span><span class="keyword">;<br />   foreach (</span><span class="default">$attrs </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) { <br />        </span><span class="comment">//echo $key."=".$value;<br />        </span><span class="default">$element</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]=</span><span class="default">$value</span><span class="keyword">;<br />    }<br /><br />   </span><span class="default">$last </span><span class="keyword">= &amp;</span><span class="default">$stack</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br />   </span><span class="default">$last</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">] = &amp;</span><span class="default">$element</span><span class="keyword">;<br />   </span><span class="default">$stack</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">)] = &amp;</span><span class="default">$element</span><span class="keyword">;<br /><br />   </span><span class="default">$depth</span><span class="keyword">++;<br />}<br /><br />function </span><span class="default">endElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {<br />   global </span><span class="default">$depth</span><span class="keyword">;<br />   global </span><span class="default">$stack</span><span class="keyword">;<br /><br />   </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br />   </span><span class="default">$depth</span><span class="keyword">--;<br />}<br /><br /></span><span class="default">$xml_parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="string">"startElement"</span><span class="keyword">, </span><span class="string">"endElement"</span><span class="keyword">);<br />if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))) {<br />   die(</span><span class="string">"could not open XML input"</span><span class="keyword">);<br />}<br /><br />while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) {<br />   if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {<br />       die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">,<br />                   </span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)),<br />                   </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)));<br />   }<br />}<br /></span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br /></span><span class="default">$tree </span><span class="keyword">= </span><span class="default">$stack</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46731">  <div class="votes">
    <div id="Vu46731">
    <a href="/manual/vote-note.php?id=46731&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46731">
    <a href="/manual/vote-note.php?id=46731&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46731" title="66% like this...">
    3
    </div>
  </div>
  <a href="#46731" class="name">
  <strong class="user"><em>aw at avatartechnology dot com</em></strong></a><a class="genanchor" href="#46731"> &para;</a><div class="date" title="2004-10-21 08:40"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46731">
<div class="phpcode"><code><span class="html">In response to landb at mail dot net...<br /><br />As the notes mention, you can pass an array that contains the reference to an object and a method name when you need... so you can call methods in your own class as handlers like this:<br /><br />xml_set_element_handler($parser, array($this,"_startElement"), array($this,"_endElement"));<br /><br />Hope it helps...</span></code></div>
  </div>
 </div>
  <div class="note" id="52420">  <div class="votes">
    <div id="Vu52420">
    <a href="/manual/vote-note.php?id=52420&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52420">
    <a href="/manual/vote-note.php?id=52420&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52420" title="66% like this...">
    2
    </div>
  </div>
  <a href="#52420" class="name">
  <strong class="user"><em>youniforever at naver dot com</em></strong></a><a class="genanchor" href="#52420"> &para;</a><div class="date" title="2005-04-30 03:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52420">
<div class="phpcode"><code><span class="html">&lt;html&gt; <br />  &lt;head&gt; <br />    &lt;title&gt;SAX Demonstration&lt;/title&gt; <br />   &lt;META HTTP-EQUIV='Content-type' CONTENT='text/html; charset=euc-kr'&gt; <br />  &lt;/head&gt; <br />  &lt;body&gt; <br />    &lt;h1&gt;RSS ??????&lt;/h1&gt; <br />    <br />      <span class="default">&lt;?php <br /><br />     $file </span><span class="keyword">= </span><span class="string">"data.xml"</span><span class="keyword">; <br />      <br />      </span><span class="default">$currentTag </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />      </span><span class="default">$currentAttribs </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br /><br />      function </span><span class="default">startElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attribs</span><span class="keyword">) <br />      { <br />          global </span><span class="default">$currentTag</span><span class="keyword">, </span><span class="default">$currentAttribs</span><span class="keyword">; <br />          </span><span class="default">$currentTag </span><span class="keyword">= </span><span class="default">$name</span><span class="keyword">; <br />    <br />          </span><span class="default">$currentAttribs </span><span class="keyword">= </span><span class="default">$attribs</span><span class="keyword">; <br />          switch (</span><span class="default">$name</span><span class="keyword">) { <br />          <br />          default: <br />              echo(</span><span class="string">"&lt;b&gt;&amp;lt</span><span class="default">$name</span><span class="string">&amp;gt&lt;/b&gt;&lt;br&gt;"</span><span class="keyword">); <br />              break; <br />          } <br />      } <br /><br />      function </span><span class="default">endElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) <br />      { <br />          global </span><span class="default">$currentTag</span><span class="keyword">; <br />          switch (</span><span class="default">$name</span><span class="keyword">) { <br />          default: <br />              echo(</span><span class="string">"&lt;br&gt;&lt;b&gt;&amp;lt/</span><span class="default">$name</span><span class="string">&amp;gt&lt;/b&gt;&lt;br&gt;&lt;br&gt;"</span><span class="keyword">); <br />              break; <br />          } <br />          </span><span class="default">$currentTag </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />          </span><span class="default">$currentAttribs </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />      } <br /><br />      function </span><span class="default">characterData</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) <br />      { <br />          global </span><span class="default">$currentTag</span><span class="keyword">; <br />          switch (</span><span class="default">$currentTag</span><span class="keyword">) { <br />          case </span><span class="string">"link"</span><span class="keyword">: <br />              echo(</span><span class="string">"&lt;a href=\"</span><span class="default">$data</span><span class="string">\"&gt;</span><span class="default">$data</span><span class="string">&lt;/a&gt;\n"</span><span class="keyword">); <br />              break; <br />          case </span><span class="string">"title"</span><span class="keyword">: <br />              echo(</span><span class="string">"title : </span><span class="default">$data</span><span class="string">"</span><span class="keyword">); <br />              break; <br />          default: <br />              echo(</span><span class="default">$data</span><span class="keyword">); <br />              break; <br />          } <br />      } <br /><br />     </span><span class="default">$xmlParser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">(); <br />    <br />      </span><span class="default">$caseFold </span><span class="keyword">= </span><span class="default">xml_parser_get_option</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, <br />                                        </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">); <br />    <br />      </span><span class="default">$targetEncoding </span><span class="keyword">= </span><span class="default">xml_parser_get_option</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, <br />                                              </span><span class="default">XML_OPTION_TARGET_ENCODING</span><span class="keyword">); <br /><br />      if (</span><span class="default">$caseFold </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) { <br />          </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); <br />      } <br /><br />      </span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, </span><span class="string">"startElement"</span><span class="keyword">, </span><span class="string">"endElement"</span><span class="keyword">); <br />      </span><span class="default">xml_set_character_data_handler</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, </span><span class="string">"characterData"</span><span class="keyword">); <br /><br />      if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))) { <br />          die(</span><span class="string">"Cannot open XML data file: </span><span class="default">$file</span><span class="string">"</span><span class="keyword">); <br />      } <br /><br />     while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) { <br />          if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) { <br />              die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">, <br />                          </span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">)), <br />                          </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">))); <br />              </span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">); <br />          } <br />      } <br />      </span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xmlParser</span><span class="keyword">); <br />      </span><span class="default">?&gt;</span> <br />    &lt;/table&gt; <br />  &lt;/body&gt; <br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="70840">  <div class="votes">
    <div id="Vu70840">
    <a href="/manual/vote-note.php?id=70840&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70840">
    <a href="/manual/vote-note.php?id=70840&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70840" title="100% like this...">
    1
    </div>
  </div>
  <a href="#70840" class="name">
  <strong class="user"><em>lloeki at gmail dot com</em></strong></a><a class="genanchor" href="#70840"> &para;</a><div class="date" title="2006-10-31 03:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70840">
<div class="phpcode"><code><span class="html">I modified the previous script, so that it is associative. I find it more useful that way. BTW I prefer strtolower() things, but that's not mandatory at all.<br /><br /><span class="default">&lt;?php<br /><br />$file </span><span class="keyword">= </span><span class="string">"data.xml"</span><span class="keyword">;<br /></span><span class="default">$depth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">$tree </span><span class="keyword">= array();<br /></span><span class="default">$tree</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] = </span><span class="string">"root"</span><span class="keyword">;<br /></span><span class="default">$stack</span><span class="keyword">[] = &amp;</span><span class="default">$tree</span><span class="keyword">;<br /><br />function </span><span class="default">startElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attrs</span><span class="keyword">) {<br />   global </span><span class="default">$depth</span><span class="keyword">;<br />   global </span><span class="default">$stack</span><span class="keyword">;<br />   global </span><span class="default">$tree</span><span class="keyword">;<br />  <br />   </span><span class="default">$element </span><span class="keyword">= array();<br />   foreach (</span><span class="default">$attrs </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />       </span><span class="default">$element</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)]=</span><span class="default">$value</span><span class="keyword">;<br />   }<br /><br />   </span><span class="default">end</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br />   </span><span class="default">$stack</span><span class="keyword">[</span><span class="default">key</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">)][</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)] = &amp;</span><span class="default">$element</span><span class="keyword">;<br />   </span><span class="default">$stack</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)] = &amp;</span><span class="default">$element</span><span class="keyword">;<br />   <br />   </span><span class="default">$depth</span><span class="keyword">++;<br />}<br /><br />function </span><span class="default">endElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {<br />   global </span><span class="default">$depth</span><span class="keyword">;<br />   global </span><span class="default">$stack</span><span class="keyword">;<br /><br />   </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br />   </span><span class="default">$depth</span><span class="keyword">--;<br />}<br /><br /></span><span class="default">$xml_parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="string">"startElement"</span><span class="keyword">, </span><span class="string">"endElement"</span><span class="keyword">);<br />if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))) {<br />   die(</span><span class="string">"could not open XML input"</span><span class="keyword">);<br />}<br /><br />while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) {<br />   if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {<br />       die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">,<br />                   </span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)),<br />                   </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)));<br />   }<br />}<br /></span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br /></span><span class="default">$tree </span><span class="keyword">= </span><span class="default">end</span><span class="keyword">(</span><span class="default">end</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">));<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$tree</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58893">  <div class="votes">
    <div id="Vu58893">
    <a href="/manual/vote-note.php?id=58893&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58893">
    <a href="/manual/vote-note.php?id=58893&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58893" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58893" class="name">
  <strong class="user"><em>hendra_g at hotmail dot com</em></strong></a><a class="genanchor" href="#58893"> &para;</a><div class="date" title="2005-11-19 08:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58893">
<div class="phpcode"><code><span class="html">I ran into the same problem with 'ibjoel at hotmail dot com' in regards to self-closing tags, and found that the script that he/she wrote did not work as I expected.<br />I played around with some of php's functions and examples and compiled something, which may not be the neatest solution, but it works for the data that 'ibjoel at hotmail dot com' provided.<br />The data needs to be read from a file though, so the fp can be utilised. It still uses the xml_get_current_byte_index(resource parser) trick, but this time, I check for the last 2 character before the index and test if it's "/&gt;".<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* myxmltest.xml:<br />&lt;normal_tag&gt;<br />  &lt;self_close_tag /&gt;<br />     data<br />  &lt;normal_tag&gt;data<br />     &lt;self_close_tag attr="value" /&gt;<br />  &lt;/normal_tag&gt;<br />     data<br />  &lt;normal_tag&gt;&lt;/normal_tag&gt;<br />&lt;/normal_tag&gt;<br />*/<br /><br />//## Global Variables ##//<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="string">"myxmltest.xml"</span><span class="keyword">;<br /></span><span class="default">$character_data_on </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$tag_complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />function </span><span class="default">startElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attrs</span><span class="keyword">) <br />{<br />    global </span><span class="default">$character_data_on</span><span class="keyword">;<br />    global </span><span class="default">$tag_complete</span><span class="keyword">;<br />    <br />    echo </span><span class="string">"&amp;lt;&lt;font color=\"#0000cc\"&gt;</span><span class="default">$name</span><span class="string">&lt;/font&gt;"</span><span class="keyword">;<br />    </span><span class="comment">//## Print the attributes ##//<br />    </span><span class="keyword">if (</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$attrs</span><span class="keyword">)) {<br />        while (list(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$attrs</span><span class="keyword">)) {<br />            echo </span><span class="string">" &lt;font color=\"#009900\"&gt;</span><span class="default">$k</span><span class="string">&lt;/font&gt;=\"&lt;font <br />                   color=\"#990000\"&gt;</span><span class="default">$v</span><span class="string">&lt;/font&gt;\""</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="comment">//## Tag is still still incomplete,<br />    //## will be completed at either endElement or characterData ##//<br />    </span><span class="default">$tag_complete </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$character_data_on </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">endElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) <br />{<br />    global </span><span class="default">$fp</span><span class="keyword">;<br />    global </span><span class="default">$character_data_on</span><span class="keyword">;<br />    global </span><span class="default">$tag_complete</span><span class="keyword">;<br />    <br />    </span><span class="comment">//#### Test for self-closing tag ####//<br />    //## xml_get_current_byte_index(resource parser) when run in this<br />    //## function, gives the index at (indicated by *):<br />    //##   for self closing tag: &lt;br /&gt;*<br />    //##   for individual closing tag: &lt;div&gt;character data*&lt;/div&gt;<br />    //## So to test for self-closing tag, we can just test for the last 2 <br />    //## characters from the index<br />    //###################################//<br />    <br />    </span><span class="keyword">if (!</span><span class="default">$character_data_on</span><span class="keyword">) {<br />        </span><span class="comment">//## Record current fp position ##//<br />        </span><span class="default">$temp_fp </span><span class="keyword">= </span><span class="default">ftell</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />        <br />        </span><span class="comment">//## Point fp to 2 bytes before the end element byte index ##//<br />        </span><span class="default">$end_element_byte_index </span><span class="keyword">= </span><span class="default">xml_get_current_byte_index</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">);<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$end_element_byte_index</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">);<br />        <br />        </span><span class="comment">//## Gets the last 2 characters before the end element byte index ##//<br />        </span><span class="default">$validator </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />        <br />        </span><span class="comment">//## Restore fp position ##//<br />        </span><span class="default">fseek</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$temp_fp</span><span class="keyword">);<br />        <br />        </span><span class="comment">//## If the last 2 character is "/&gt;" ##//<br />        </span><span class="keyword">if (</span><span class="default">$validator</span><span class="keyword">==</span><span class="string">"/&gt;"</span><span class="keyword">) {<br />            </span><span class="comment">//// Complete the self-closing tag ////<br />            </span><span class="keyword">echo </span><span class="string">" /&amp;gt"</span><span class="keyword">;<br />            </span><span class="comment">//// Otherwise it is an individual closing tag ////<br />        </span><span class="keyword">} else echo </span><span class="string">"&amp;gt&amp;lt/&lt;font color=\"#0000cc\"&gt;</span><span class="default">$name</span><span class="string">&lt;/font&gt;&amp;gt"</span><span class="keyword">;<br />        </span><span class="default">$tag_complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    } else echo </span><span class="string">"&amp;lt/&lt;font color=\"#0000cc\"&gt;</span><span class="default">$name</span><span class="string">&lt;/font&gt;&amp;gt"</span><span class="keyword">;<br />    <br />    </span><span class="default">$character_data_on </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">characterData</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) <br />{<br />    global </span><span class="default">$character_data_on</span><span class="keyword">;<br />    global </span><span class="default">$tag_complete</span><span class="keyword">;<br />    <br />    if ((!</span><span class="default">$character_data_on</span><span class="keyword">)&amp;&amp;(!</span><span class="default">$tag_complete</span><span class="keyword">)) {<br />        echo </span><span class="string">"&amp;gt"</span><span class="keyword">;<br />        </span><span class="default">$tag_complete </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    }<br />    echo </span><span class="string">"&lt;b&gt;</span><span class="default">$data</span><span class="string">&lt;/b&gt;"</span><span class="keyword">; <br />    </span><span class="default">$character_data_on </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$xml_parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="string">"startElement"</span><span class="keyword">, </span><span class="string">"endElement"</span><span class="keyword">);<br /></span><span class="default">xml_set_character_data_handler</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="string">"characterData"</span><span class="keyword">);<br />if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))) {<br />    die(</span><span class="string">"could not open XML input"</span><span class="keyword">);<br />}<br /><br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br />while (</span><span class="default">$file_content </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) {<br />    if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">$file_content</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {<br />        die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">,<br />                    </span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)),<br />                    </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">)));<br />    }<br />}<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /></span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12782">  <div class="votes">
    <div id="Vu12782">
    <a href="/manual/vote-note.php?id=12782&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12782">
    <a href="/manual/vote-note.php?id=12782&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12782" title="100% like this...">
    1
    </div>
  </div>
  <a href="#12782" class="name">
  <strong class="user"><em>jg at jmkg dot net</em></strong></a><a class="genanchor" href="#12782"> &para;</a><div class="date" title="2001-05-07 11:08"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12782">
<div class="phpcode"><code><span class="html">If you are using a class for xml parsing, and want to check the return value of xml_set_element_handler in case it  fails, you must do this outside of the class's constructor. Inside the constructor, PHP-4.0.5 will die.
<br />
<br />Basically, put all your xml initialisation code in another function of the class, and keep it out of the constructor.</span></code></div>
  </div>
 </div>
  <div class="note" id="73189">  <div class="votes">
    <div id="Vu73189">
    <a href="/manual/vote-note.php?id=73189&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73189">
    <a href="/manual/vote-note.php?id=73189&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73189" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73189" class="name">
  <strong class="user"><em>darien at etelos dot com</em></strong></a><a class="genanchor" href="#73189"> &para;</a><div class="date" title="2007-02-12 10:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73189">
<div class="phpcode"><code><span class="html">This documentation is somewhat awry. I know it's been said many times before, but it bears repeating...<br /><br />If using PHP4, you may be required to use xml_set_object() instead of calling any of the xml_set_*_handler() functions with a two-item array. It will work fine on PHP5, but move the same code to PHP4 and it will create one copie of $this (even if you use &amp;$this) for each handler you set!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// This code will fail mysteriously on PHP4.<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,<br />            array(&amp;</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"start_tag"</span><span class="keyword">),<br />            array(&amp;</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"end_tag"</span><span class="keyword">)<br />        );<br />        </span><span class="default">xml_set_character_data_handler</span><span class="keyword">(<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,<br />            array(&amp;</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"tag_data"</span><span class="keyword">)<br />        );<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">// This code will work on PHP4.<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_set_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,&amp;</span><span class="default">$this</span><span class="keyword">); <br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,<br />            </span><span class="string">"start_tag"</span><span class="keyword">,<br />            </span><span class="string">"end_tag"<br />        </span><span class="keyword">);<br />        </span><span class="default">xml_set_character_data_handler</span><span class="keyword">(<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,<br />            </span><span class="string">"tag_data"<br />        </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56955">  <div class="votes">
    <div id="Vu56955">
    <a href="/manual/vote-note.php?id=56955&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56955">
    <a href="/manual/vote-note.php?id=56955&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56955" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56955" class="name">
  <strong class="user"><em>turan dot yuksel at tcmb dot gov dot tr</em></strong></a><a class="genanchor" href="#56955"> &para;</a><div class="date" title="2005-09-20 03:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56955">
<div class="phpcode"><code><span class="html">The method that 'ibjoel at hotmail dot com' have described requires libxml2 as the xml parser, it does not work with expat. For a brief explanation, see xml_get_current_byte_index.</span></code></div>
  </div>
 </div>
  <div class="note" id="55360">  <div class="votes">
    <div id="Vu55360">
    <a href="/manual/vote-note.php?id=55360&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55360">
    <a href="/manual/vote-note.php?id=55360&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55360" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55360" class="name">
  <strong class="user"><em>ibjoel at hotmail dot com</em></strong></a><a class="genanchor" href="#55360"> &para;</a><div class="date" title="2005-08-01 03:49"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55360">
<div class="phpcode"><code><span class="html">I noticed that in the example below, and all the examples I've seen on this site for viewing xml in html, the look of self closing tags such as &lt;br /&gt; are not preserved. The parser cannot distinguish between &lt;tag /&gt; and &lt;tag&gt;&lt;/tag&gt;, and if your start and end element functions are like these examples, both instances will be output with both an indvidual start and end tag.  I needed to preserve self-closing tags and it took me a while to figure out this work around. Hope this helps someone...<br />  <br />The start tag is left open, and then completed by it's first child, the next start tag or its end tag.  The end tag will complete with " /&gt;", or &lt;/tag&gt; depending on the number of bytes between the start and end tags in the parsed data.<br /><span class="default">&lt;?php<br /></span><span class="comment">//$data=filepath or string<br /></span><span class="default">$data</span><span class="keyword">=&lt;&lt;&lt;DATA<br /></span><span class="string">&lt;normal_tag&gt;<br />  &lt;self_close_tag /&gt;<br />      data<br />  &lt;normal_tag&gt;data<br />     &lt;self_close_tag attr="value" /&gt;<br />  &lt;/normal_tag&gt;<br />      data<br />  &lt;normal_tag&gt;&lt;/normal_tag&gt;<br />&lt;/normal_tag&gt;<br /></span><span class="keyword">DATA;<br /><br />function </span><span class="default">startElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attrs</span><span class="keyword">)<br />{<br />        </span><span class="default">xml_set_character_data_handler</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="string">"characterData"</span><span class="keyword">);<br />        global </span><span class="default">$first_child</span><span class="keyword">, </span><span class="default">$start_byte</span><span class="keyword">;<br />        if(</span><span class="default">$first_child</span><span class="keyword">)          </span><span class="comment">//close start tag if neccessary<br />                </span><span class="keyword">echo </span><span class="string">"&gt;&lt;br /&gt;"</span><span class="keyword">;<br />        </span><span class="default">$first_child</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />        </span><span class="default">$start_byte</span><span class="keyword">=</span><span class="default">xml_get_current_byte_index </span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">);<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$attrs</span><span class="keyword">)&gt;=</span><span class="default">1</span><span class="keyword">){<br />                foreach(</span><span class="default">$attrs </span><span class="keyword">as </span><span class="default">$x</span><span class="keyword">=&gt;</span><span class="default">$y</span><span class="keyword">){<br />                        </span><span class="default">$attr_string </span><span class="keyword">.= </span><span class="string">" </span><span class="default">$x</span><span class="string">=\"</span><span class="default">$y</span><span class="string">\""</span><span class="keyword">;<br />                }<br />        }<br />        echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="string">"&lt;</span><span class="keyword">{</span><span class="default">$name</span><span class="keyword">}{</span><span class="default">$attr_string</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">); </span><span class="comment">//unclosed starttag<br /></span><span class="keyword">}<br /><br />function </span><span class="default">endElement</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">)<br />{<br />        global </span><span class="default">$first_child</span><span class="keyword">, </span><span class="default">$start_byte</span><span class="keyword">;<br />        </span><span class="default">$byte</span><span class="keyword">=</span><span class="default">xml_get_current_byte_index </span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">);<br />        if(</span><span class="default">$byte</span><span class="keyword">-</span><span class="default">$start_byte</span><span class="keyword">&gt;</span><span class="default">2</span><span class="keyword">){           </span><span class="comment">//if end tag is more than 2 bytes from start tag<br />                </span><span class="keyword">if(</span><span class="default">$first_child</span><span class="keyword">)          </span><span class="comment">//close start tag if neccessary<br />                        </span><span class="keyword">echo </span><span class="string">"&gt;&lt;br /&gt;"</span><span class="keyword">;<br />                echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="string">"&lt;/</span><span class="keyword">{</span><span class="default">$name</span><span class="keyword">}</span><span class="string">&gt;"</span><span class="keyword">).</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;  </span><span class="comment">//individual end tag<br />        </span><span class="keyword">}else<br />                echo </span><span class="string">" /&gt;&lt;br /&gt;"</span><span class="keyword">;  </span><span class="comment">// self closing tag<br />        </span><span class="default">$first_child</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br /><br />}<br /><br />function </span><span class="default">characterData</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)<br />{<br />        global </span><span class="default">$first_child</span><span class="keyword">;<br />        if(</span><span class="default">$first_child</span><span class="keyword">)  </span><span class="comment">//if $data is first child, close start tag<br />                </span><span class="keyword">echo </span><span class="string">"&gt;&lt;br /&gt;"</span><span class="keyword">;<br />        if(</span><span class="default">$data</span><span class="keyword">=</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">))<br />                echo </span><span class="string">"&lt;font color='blue'&gt;</span><span class="default">$data</span><span class="string">&lt;/font&gt;&lt;br /&gt;"</span><span class="keyword">;<br />        </span><span class="default">$first_child</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">ParseData</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />{<br />        </span><span class="default">$xml_parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br />        </span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="string">"startElement"</span><span class="keyword">, </span><span class="string">"endElement"</span><span class="keyword">);<br />        </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">,</span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />        if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">))<br />        {<br />                if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))) {<br />                        die(</span><span class="string">"could not open XML input"</span><span class="keyword">);<br />                }<br /><br />                while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) {<br />                        if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {<br />                                </span><span class="default">$error</span><span class="keyword">=</span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">));<br />                               </span><span class="default">$line</span><span class="keyword">=</span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br />                                die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">,</span><span class="default">$error</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">));<br />                        }<br />                }<br />        }else{<br />                if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) {<br />                                </span><span class="default">$error</span><span class="keyword">=</span><span class="default">xml_error_string</span><span class="keyword">(</span><span class="default">xml_get_error_code</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">));<br />                                </span><span class="default">$line</span><span class="keyword">=</span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br />                                die(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"XML error: %s at line %d"</span><span class="keyword">,</span><span class="default">$error</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">));<br />                }<br />        }<br />        <br />        </span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$xml_parser</span><span class="keyword">);<br />}<br /><br /></span><span class="default">ParseData</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29053">  <div class="votes">
    <div id="Vu29053">
    <a href="/manual/vote-note.php?id=29053&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29053">
    <a href="/manual/vote-note.php?id=29053&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29053" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29053" class="name">
  <strong class="user"><em>tj at tobyjoe dot com</em></strong></a><a class="genanchor" href="#29053"> &para;</a><div class="date" title="2003-01-31 11:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29053">
<div class="phpcode"><code><span class="html">It seems that the tag handlers don't block on one another (the end handler is called whether or not the begin handler has finished). this can put you in a tight spot if you don't realize it while planning your app.</span></code></div>
  </div>
 </div>
  <div class="note" id="85970">  <div class="votes">
    <div id="Vu85970">
    <a href="/manual/vote-note.php?id=85970&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85970">
    <a href="/manual/vote-note.php?id=85970&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85970" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#85970" class="name">
  <strong class="user"><em>kok at nachon dot nl</em></strong></a><a class="genanchor" href="#85970"> &para;</a><div class="date" title="2008-09-26 06:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85970">
<div class="phpcode"><code><span class="html">Here is another example of detecting empty elements. I works with libxml2. Note that it handles buffer boundaries.<br /><br /><span class="default">&lt;?php<br /><br />$depth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//current depth, used for pretty printing<br /></span><span class="default">$empty </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; </span><span class="comment">//whether the tag is empty<br /></span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">//the index of the start of the current buffer within the stream<br /><br /></span><span class="keyword">function </span><span class="default">tagStart</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, array </span><span class="default">$attribs</span><span class="keyword">) {<br />    global </span><span class="default">$depth</span><span class="keyword">, </span><span class="default">$empty</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$lastchar</span><span class="keyword">;<br />    </span><span class="default">$idx </span><span class="keyword">= </span><span class="default">xml_get_current_byte_index</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">);<br />    </span><span class="comment">/* xml_get_current_byte_index returns index within the streams and not<br />       within the buffer.*/<br />    <br />    /* Check if the index is within the buffer. */<br />    </span><span class="keyword">if (isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$idx </span><span class="keyword">- </span><span class="default">$offset</span><span class="keyword">])) {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$idx </span><span class="keyword">- </span><span class="default">$offset</span><span class="keyword">];<br />    } else {<br />        </span><span class="comment">/* If it isn't simple use the last character of the buffer. */<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$lastchar</span><span class="keyword">;<br />    }<br />    </span><span class="default">$empty </span><span class="keyword">= </span><span class="default">$c </span><span class="keyword">== </span><span class="string">'/'</span><span class="keyword">;<br />    echo </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">), </span><span class="string">"&lt;</span><span class="default">$name</span><span class="string">"</span><span class="keyword">, (</span><span class="default">$empty </span><span class="keyword">? </span><span class="string">'/&gt;' </span><span class="keyword">: </span><span class="string">'&gt;'</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />    if (!</span><span class="default">$empty</span><span class="keyword">) ++</span><span class="default">$depth</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">tagEnd</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {<br />    global </span><span class="default">$depth</span><span class="keyword">, </span><span class="default">$empty</span><span class="keyword">;<br />    if (!</span><span class="default">$empty</span><span class="keyword">) {<br />        --</span><span class="default">$depth</span><span class="keyword">;<br />        echo </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"\t"</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">), </span><span class="string">"&lt;/</span><span class="default">$name</span><span class="string">&gt;\n"</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$empty </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br /></span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="string">'tagStart'</span><span class="keyword">, </span><span class="string">'tagEnd'</span><span class="keyword">);<br /><br /></span><span class="default">$data1 </span><span class="keyword">= </span><span class="string">'<br />&lt;test&gt;<br />    &lt;empty att="3" /&gt;<br />    &lt;nocontent&gt;&lt;/nocontent&gt;<br />    &lt;content&gt;<br />        &lt;empty/&gt;<br />        &lt;empty/&gt;<br />    &lt;/content&gt;<br />    &lt;empty/'</span><span class="keyword">;<br /><br /></span><span class="default">$data2 </span><span class="keyword">= </span><span class="string">'&gt;<br />    &lt;empty att="5" /&gt;<br />&lt;/test&gt;<br />'</span><span class="keyword">;<br /><br /></span><span class="default">$data </span><span class="keyword">= &amp;</span><span class="default">$data1</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data1</span><span class="keyword">);<br /></span><span class="default">$lastchar </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$length</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br /></span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data1</span><span class="keyword">);<br /></span><span class="default">$offset </span><span class="keyword">.= </span><span class="default">$length</span><span class="keyword">;<br /></span><span class="default">$data </span><span class="keyword">= &amp;</span><span class="default">$data2</span><span class="keyword">;<br /></span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data2</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59694">  <div class="votes">
    <div id="Vu59694">
    <a href="/manual/vote-note.php?id=59694&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59694">
    <a href="/manual/vote-note.php?id=59694&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59694" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#59694" class="name">
  <strong class="user"><em>vladimir-leontiev at uiowa dot edu</em></strong></a><a class="genanchor" href="#59694"> &para;</a><div class="date" title="2005-12-13 09:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59694">
<div class="phpcode"><code><span class="html">It seems that characterData() gets characters in chuncks of 1024; therefore if you have string of characters between you tags that is longer than 1024 then characterData() will be called more that once for single pair of tags. I don't know if this feature(bug?) is documented anywhere, I just wanted to warn everyone about this; it had tripped me. I use php 4.3.10 on Linux.</span></code></div>
  </div>
 </div>
  <div class="note" id="66128">  <div class="votes">
    <div id="Vu66128">
    <a href="/manual/vote-note.php?id=66128&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66128">
    <a href="/manual/vote-note.php?id=66128&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66128" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#66128" class="name">
  <strong class="user"><em>redb</em></strong></a><a class="genanchor" href="#66128"> &para;</a><div class="date" title="2006-05-15 05:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66128">
<div class="phpcode"><code><span class="html">Example below (BadParser) works fine with some changes.<br /><br />xml_set_element_handler ( $parser, array ( &amp;$this, 'tagStart' ), array ( &amp;$this, 'tagEnd' ) );<br />xml_set_character_data_handler ( $parser, array ( &amp;$this, 'tagContent' ) );</span></code></div>
  </div>
 </div>
  <div class="note" id="50906">  <div class="votes">
    <div id="Vu50906">
    <a href="/manual/vote-note.php?id=50906&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50906">
    <a href="/manual/vote-note.php?id=50906&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50906" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#50906" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50906"> &para;</a><div class="date" title="2005-03-13 01:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50906">
<div class="phpcode"><code><span class="html">In response to aw at avatartechnology dot com...<br />In response to landb at mail dot net...<br /><br />When your functions are in an object:<br />Careful ! Don't forget to add: &amp; (reference) to your parameters.<br /><br />xml_set_element_handler($parser, array(&amp;$this,"_startElement"), array(&amp;$this,"_endElement"));<br />--&gt; xmlparse will work on your object (good).<br /><br />instead of:<br />xml_set_element_handler($parser, array($this,"_startElement"), array($this,"_endElement"));<br />---&gt; xmlparse will work on a COPY of your object (often bad)<br /><br />Vin-s<br />(sorry for my english)</span></code></div>
  </div>
 </div>
  <div class="note" id="15985">  <div class="votes">
    <div id="Vu15985">
    <a href="/manual/vote-note.php?id=15985&amp;page=function.xml-set-element-handler&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15985">
    <a href="/manual/vote-note.php?id=15985&amp;page=function.xml-set-element-handler&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15985" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#15985" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#15985"> &para;</a><div class="date" title="2001-10-11 04:09"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom15985">
<div class="phpcode"><code><span class="html">You CAN use classes to parse XML. Just take a look at the following function:
<br />
<br />xml_set_object</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xml-set-element-handler&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-set-element-handler.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
                                                <li class="">
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
