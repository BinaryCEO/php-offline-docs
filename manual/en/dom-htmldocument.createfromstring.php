<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Dom\HTMLDocument::createFromString - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/dom-htmldocument.createfromstring.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/dom-htmldocument.createfromstring.php">
 <link rel="alternate" href="https://www.php.net/manual/en/dom-htmldocument.createfromstring.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.dom-htmldocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/dom-htmldocument.createfromfile.php">
 <link rel="next" href="https://www.php.net/manual/en/dom-htmldocument.savehtml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/dom-htmldocument.createfromstring.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/dom-htmldocument.createfromstring.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/dom-htmldocument.createfromstring.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/dom-htmldocument.createfromstring.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/dom-htmldocument.createfromstring.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/dom-htmldocument.createfromstring.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/dom-htmldocument.createfromstring.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/dom-htmldocument.createfromstring.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/dom-htmldocument.createfromstring.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/dom-htmldocument.createfromstring.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/dom-htmldocument.createfromstring.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parses an HTML document from a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Dom\HTMLDocument::createFromString - Manual" />
<meta name="twitter:description" content="Parses an HTML document from a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Dom\HTMLDocument::createFromString - Manual" />
<meta itemprop="description" content="Parses an HTML document from a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parses an HTML document from a string" />

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
        <a href="dom-htmldocument.savehtml.php">
          Dom\HTMLDocument::saveHtml &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="dom-htmldocument.createfromfile.php">
          &laquo; Dom\HTMLDocument::createFromFile        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.dom-htmldocument.php'>Dom\HTMLDocument</a></li>      </ul>
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
            <option value='en/dom-htmldocument.createfromstring.php' selected="selected">English</option>
            <option value='de/dom-htmldocument.createfromstring.php'>German</option>
            <option value='es/dom-htmldocument.createfromstring.php'>Spanish</option>
            <option value='fr/dom-htmldocument.createfromstring.php'>French</option>
            <option value='it/dom-htmldocument.createfromstring.php'>Italian</option>
            <option value='ja/dom-htmldocument.createfromstring.php'>Japanese</option>
            <option value='pt_BR/dom-htmldocument.createfromstring.php'>Brazilian Portuguese</option>
            <option value='ru/dom-htmldocument.createfromstring.php'>Russian</option>
            <option value='tr/dom-htmldocument.createfromstring.php'>Turkish</option>
            <option value='uk/dom-htmldocument.createfromstring.php'>Ukrainian</option>
            <option value='zh/dom-htmldocument.createfromstring.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="dom-htmldocument.createfromstring" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Dom\HTMLDocument::createFromString</h1>
  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">Dom\HTMLDocument::createFromString</span> &mdash; <span class="dc-title">Parses an <abbr title="Hyper Text Markup Language">HTML</abbr> document from a string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-dom-htmldocument.createfromstring-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><strong>Dom\HTMLDocument::createFromString</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$overrideEncoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="class.dom-htmldocument.php" class="type Dom\HTMLDocument">Dom\HTMLDocument</a></span></div>

  <p class="simpara">
   Parses an <abbr title="Hyper Text Markup Language">HTML</abbr> document from a string,
   according to the living standard.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-dom-htmldocument.createfromstring-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">source</code></dt>
    <dd>
     <span class="simpara">
      The string containing the <abbr title="Hyper Text Markup Language">HTML</abbr> to parse.
     </span>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
  <a href="language.operators.bitwise.php" class="link">Bitwise <code class="literal">OR</code></a>
  of the <a href="libxml.constants.php" class="link">libxml option constants</a>.
</p>
 <span class="simpara">
  It is also possible to pass <strong><code><a href="dom.constants.php#constant.dom-html-no-default-ns">Dom\HTML_NO_DEFAULT_NS</a></code></strong>
  to disable the use of the HTML namespace and the template element.
  This should only be used if the implications are properly understood.
</span>
    </dd>
   
   
    <dt><code class="parameter">overrideEncoding</code></dt>
    <dd>
     <span class="simpara">
 The encoding that the document was created in.
 If not provided, it will attempt to determine the encoding that is most likely used.
</span>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-dom-htmldocument.createfromstring-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="simpara">
   The parsed document as an <span class="classname"><a href="class.dom-htmldocument.php" class="classname">Dom\HTMLDocument</a></span> instance.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-dom-htmldocument.createfromstring-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="itemizedlist">
   <li class="listitem">
 <span class="simpara">
  Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
  <code class="parameter">options</code> contains an invalid option.
 </span>
</li>
<li class="listitem">
 <span class="simpara">
  Throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
  <code class="parameter">overrideEncoding</code> is an unknown encoding.
 </span>
</li>
  </ul>
 </div>


 <div class="refsect1 examples" id="refsect1-dom-htmldocument.createfromstring-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="dom-htmldocument.createfromstring.example.basic">
   <p><strong>Example #1 <span class="methodname"><strong>Dom\HTMLDocument::createFromString()</strong></span> example</strong></p>
   <div class="example-contents"><p>
    Parses a sample document.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dom </span><span style="color: #007700">= </span><span style="color: #0000BB">Dom\HTMLDocument</span><span style="color: #007700">::</span><span style="color: #0000BB">createFromString</span><span style="color: #007700">(&lt;&lt;&lt;'HTML'<br /></span><span style="color: #DD0000">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;body&gt;<br />   &lt;p&gt;Hello, world!&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br /></span><span style="color: #007700">HTML);<br />echo </span><span style="color: #0000BB">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveHtml</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;!DOCTYPE html&gt;&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;
    &lt;p&gt;Hello, world!&lt;/p&gt;

&lt;/body&gt;&lt;/html&gt;</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-dom-htmldocument.createfromstring-notes">
 <h3 class="title">Notes</h3>
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Whitespace in the <code class="literal">html</code> and <code class="literal">head</code> tags
   is not considered significant and may lose formatting.
  </span>
 </p></blockquote>
</div>


 <div class="refsect1 seealso" id="refsect1-dom-htmldocument.createfromstring-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="methodname"><a href="dom-htmldocument.createempty.php" class="methodname" rel="rdfs-seeAlso">Dom\HTMLDocument::createEmpty()</a> - Creates an empty HTML document</span></li>
   <li><span class="methodname"><a href="dom-htmldocument.createfromfile.php" class="methodname" rel="rdfs-seeAlso">Dom\HTMLDocument::createFromFile()</a> - Parses an HTML document from a file</span></li>
  </ul>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/dom/htmldocument/createfromstring.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdom-htmldocument.createfromstring%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=dom-htmldocument.createfromstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/dom-htmldocument.createfromstring.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129991">  <div class="votes">
    <div id="Vu129991">
    <a href="/manual/vote-note.php?id=129991&amp;page=dom-htmldocument.createfromstring&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129991">
    <a href="/manual/vote-note.php?id=129991&amp;page=dom-htmldocument.createfromstring&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129991" title="100% like this...">
    4
    </div>
  </div>
  <a href="#129991" class="name">
  <strong class="user"><em>kawewong at gmail dot com</em></strong></a><a class="genanchor" href="#129991"> &para;</a><div class="date" title="2025-01-22 03:34"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129991">
<div class="phpcode"><code><span class="html">To load HTML without doctype, html, body elements use `LIBXML_HTML_NOIMPLIED` flag.<br /><br /><span class="default">&lt;?php<br />$html </span><span class="keyword">= &lt;&lt;&lt;EOT<br /></span><span class="string">&lt;div class="row"&gt;<br />    &lt;div class="col"&gt;&lt;h1 id="heading" class="col1-heading"&gt;Hello&lt;/h1&gt;&lt;/div&gt;<br />    &lt;div class="col"&gt;&lt;p class="paragraph"&gt;Hello world.&lt;/p&gt;<br />&lt;/div&gt;<br /></span><span class="keyword">EOT;<br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">\DOM\HTMLDocument</span><span class="keyword">::</span><span class="default">createFromString</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">, </span><span class="default">LIBXML_HTML_NOIMPLIED</span><span class="keyword">);<br />echo </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">(), </span><span class="default">ENT_QUOTES</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=dom-htmldocument.createfromstring&amp;repo=en&amp;redirect=https://www.php.net/manual/en/dom-htmldocument.createfromstring.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.dom-htmldocument.php">Dom\HTMLDocument</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="dom-htmldocument.createempty.php" title="createEmpty">createEmpty</a>
                        </li>
                                                <li class="">
                            <a href="dom-htmldocument.createfromfile.php" title="createFromFile">createFromFile</a>
                        </li>
                                                <li class="current">
                            <a href="dom-htmldocument.createfromstring.php" title="createFromString">createFromString</a>
                        </li>
                                                <li class="">
                            <a href="dom-htmldocument.savehtml.php" title="saveHtml">saveHtml</a>
                        </li>
                                                <li class="">
                            <a href="dom-htmldocument.savehtmlfile.php" title="saveHtmlFile">saveHtmlFile</a>
                        </li>
                                                <li class="">
                            <a href="dom-htmldocument.savexml.php" title="saveXml">saveXml</a>
                        </li>
                                                <li class="">
                            <a href="dom-htmldocument.savexmlfile.php" title="saveXmlFile">saveXmlFile</a>
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
