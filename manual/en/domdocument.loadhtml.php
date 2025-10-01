<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::loadHTML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.loadhtml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.loadhtml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadhtml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.load.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadhtml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.loadhtml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.loadhtml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.loadhtml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.loadhtml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.loadhtml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.loadhtml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.loadhtml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.loadhtml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.loadhtml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.loadhtml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Load HTML from a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::loadHTML - Manual" />
<meta name="twitter:description" content="Load HTML from a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::loadHTML - Manual" />
<meta itemprop="description" content="Load HTML from a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Load HTML from a string" />

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
        <a href="domdocument.loadhtmlfile.php">
          DOMDocument::loadHTMLFile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.load.php">
          &laquo; DOMDocument::load        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domdocument.php'>DOMDocument</a></li>      </ul>
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
            <option value='en/domdocument.loadhtml.php' selected="selected">English</option>
            <option value='de/domdocument.loadhtml.php'>German</option>
            <option value='es/domdocument.loadhtml.php'>Spanish</option>
            <option value='fr/domdocument.loadhtml.php'>French</option>
            <option value='it/domdocument.loadhtml.php'>Italian</option>
            <option value='ja/domdocument.loadhtml.php'>Japanese</option>
            <option value='pt_BR/domdocument.loadhtml.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.loadhtml.php'>Russian</option>
            <option value='tr/domdocument.loadhtml.php'>Turkish</option>
            <option value='uk/domdocument.loadhtml.php'>Ukrainian</option>
            <option value='zh/domdocument.loadhtml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.loadhtml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::loadHTML</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::loadHTML</span> &mdash; <span class="dc-title">
   Load HTML from a string
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.loadhtml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::loadHTML</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The function parses the HTML contained in the string <code class="parameter">source</code>.
   Unlike loading XML, HTML does not have to be well-formed to load.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
 <p class="simpara">
  Use <span class="classname"><a href="class.dom-htmldocument.php" class="classname">Dom\HTMLDocument</a></span> to parse and process modern HTML
  instead of <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>.
 </p>
 <p class="simpara">
  This function parses the input using an HTML 4 parser. The parsing rules
  of HTML 5, which is what modern web browsers use, are different. Depending
  on the input this might result in a different DOM structure. Therefore
  this function cannot be safely used for sanitizing HTML.
 </p>
 <p class="simpara">
  The behavior when parsing HTML can depend on the version of
  <code class="literal">libxml</code> that is being used, particularly with regards to
  edge conditions and error handling.
  For parsing that conforms to the HTML5 specification,
  use <span class="methodname"><a href="dom-htmldocument.createfromstring.php" class="methodname">Dom\HTMLDocument::createFromString()</a></span> or
  <span class="methodname"><a href="dom-htmldocument.createfromfile.php" class="methodname">Dom\HTMLDocument::createFromFile()</a></span>, added in PHP 8.4.
 </p>
 <p class="simpara">
  As an example, some HTML elements will implicitly close a parent element
  when encountered. The rules for automatically closing parent elements
  differ between HTML 4 and HTML 5 and thus the resulting DOM structure that
  <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> sees might be different from the DOM
  structure a web browser sees, possibly allowing an attacker to break the
  resulting HTML.
 </p>
</div>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.loadhtml-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">source</code></dt>
     <dd>
      <p class="para">
       The HTML string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
  <a href="language.operators.bitwise.php" class="link">Bitwise <code class="literal">OR</code></a>
  of the <a href="libxml.constants.php" class="link">libxml option constants</a>.
</p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.loadhtml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.loadhtml-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an empty string is passed as the <code class="parameter">source</code>,
   a warning will be generated. This warning is not generated by libxml
   and cannot be handled using libxml&#039;s error handling functions.
  </p>
  <p class="para">While malformed HTML should load successfully, this function may generate <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> errors when it encounters bad markup. <a href="function.libxml-use-internal-errors.php" class="link">libxml&#039;s error handling functions</a> may be used to handle these errors.</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-domdocument.loadhtml-changelog">
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
       This function now has a tentative <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> return type.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Calling this function statically will
       now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
       Previously, an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> was raised.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-domdocument.loadhtml-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5776">
    <p><strong>Example #1 Creating a Document</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadHTML</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;html&gt;&lt;body&gt;Test&lt;br&gt;&lt;/body&gt;&lt;/html&gt;"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveHTML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-domdocument.loadhtml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.loadhtmlfile.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadHTMLFile()</a> - Load HTML from a file</span></li>
    <li><span class="methodname"><a href="domdocument.savehtml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveHTML()</a> - Dumps the internal document into a string using HTML formatting</span></li>
    <li><span class="methodname"><a href="domdocument.savehtmlfile.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveHTMLFile()</a> - Dumps the internal document into a file using HTML formatting</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/loadhtml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.loadhtml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.loadhtml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadhtml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95251">  <div class="votes">
    <div id="Vu95251">
    <a href="/manual/vote-note.php?id=95251&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95251">
    <a href="/manual/vote-note.php?id=95251&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95251" title="79% like this...">
    139
    </div>
  </div>
  <a href="#95251" class="name">
  <strong class="user"><em>mdmitry at gmail dot com</em></strong></a><a class="genanchor" href="#95251"> &para;</a><div class="date" title="2009-12-21 09:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95251">
<div class="phpcode"><code><span class="html">You can also load HTML as UTF-8 using this simple hack:<br /><br /><span class="default">&lt;?php<br /><br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">'&lt;?xml encoding="UTF-8"&gt;' </span><span class="keyword">. </span><span class="default">$html</span><span class="keyword">);<br /><br /></span><span class="comment">// dirty fix<br /></span><span class="keyword">foreach (</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">)<br />    if (</span><span class="default">$item</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">== </span><span class="default">XML_PI_NODE</span><span class="keyword">)<br />        </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">); </span><span class="comment">// remove hack<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">; </span><span class="comment">// insert proper<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124877">  <div class="votes">
    <div id="Vu124877">
    <a href="/manual/vote-note.php?id=124877&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124877">
    <a href="/manual/vote-note.php?id=124877&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124877" title="100% like this...">
    5
    </div>
  </div>
  <a href="#124877" class="name">
  <strong class="user"><em>BychkovVV at mail dot ru</em></strong></a><a class="genanchor" href="#124877"> &para;</a><div class="date" title="2020-04-03 08:30"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124877">
<div class="phpcode"><code><span class="html">If you are loading html content from any website, in "utf-8" encoding, when meta width content-type is not first child of HEAD, it would not be acknowledged by parser (encoding); So you can make this fix:<br />  function domLoadHTML($html)<br />           {$testDOM = new DOMDocument('1.0', 'UTF-8');<br />            $testDOM-&gt;loadHTML($html);<br />            $charset = NULL;<br />            $searchInElemnt = function(&amp;$item) use (&amp;$searchInElemnt, &amp;$charset)<br />              {if($item-&gt;childNodes)<br />                 {foreach($item-&gt;childNodes as $childItem)<br />                    {switch($childItem-&gt;nodeName)<br />                       {case 'html':<br />                        case 'head':<br />                          $searchInElemnt($childItem);<br />                          break;<br />                        case 'meta':<br />                          $attributes = array();<br />                          foreach ($childItem-&gt;attributes as $attr) <br />                            {$attributes[mb_strtoupper($attr-&gt;localName)] = $attr-&gt;nodeValue;<br />                            }<br />                          if(array_key_exists('HTTP-EQUIV', $attributes) &amp;&amp; (mb_strtoupper($attributes['HTTP-EQUIV']) == 'CONTENT-TYPE') &amp;&amp; array_key_exists('CONTENT', $attributes) &amp;&amp; preg_match('~[\s]*;[\s]*charset[\s]*=[\s]*([^\s]+)~', $attributes['CONTENT'], $matches))<br />                            {$charset = preg_replace('~[\s\']~', '', $matches[1]);<br />                            }<br />                       }<br />                    }<br />                 }<br />              };<br />            $searchInElemnt($testDOM);<br />            if(isset($charset))<br />              {$dom = new DOMDocument('1.0', $charset);<br />               $dom-&gt;loadHTML('&lt;?xml encoding="'.$charset.'"&gt;'.$html);<br />               foreach ($dom-&gt;childNodes as $item)<br />               if($item-&gt;nodeType == XML_PI_NODE)<br />                 {$dom-&gt;removeChild($item);<br />                 }<br />               $dom-&gt;encoding = $charset;<br />              }<br />            else<br />              {$dom = $testDOM;                 <br />              }<br />            return $dom;<br />           };</span></code></div>
  </div>
 </div>
  <div class="note" id="95463">  <div class="votes">
    <div id="Vu95463">
    <a href="/manual/vote-note.php?id=95463&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95463">
    <a href="/manual/vote-note.php?id=95463&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95463" title="80% like this...">
    64
    </div>
  </div>
  <a href="#95463" class="name">
  <strong class="user"><em>Shane Harter</em></strong></a><a class="genanchor" href="#95463"> &para;</a><div class="date" title="2010-01-04 08:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95463">
<div class="phpcode"><code><span class="html">DOMDocument is very good at dealing with imperfect markup, but it throws warnings all over the place when it does. <br /><br />This isn't well documented here. The solution to this is to implement a separate aparatus for dealing with just these errors. <br /><br />Set libxml_use_internal_errors(true) before calling loadHTML. This will prevent errors from bubbling up to your default error handler. And you can then get at them (if you desire) using other libxml error functions. <br /><br />You can find more info here <a href="http://www.php.net/manual/en/ref.libxml.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ref.libxml.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="74777">  <div class="votes">
    <div id="Vu74777">
    <a href="/manual/vote-note.php?id=74777&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74777">
    <a href="/manual/vote-note.php?id=74777&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74777" title="80% like this...">
    63
    </div>
  </div>
  <a href="#74777" class="name">
  <strong class="user"><em>hanhvansu at yahoo dot com</em></strong></a><a class="genanchor" href="#74777"> &para;</a><div class="date" title="2007-04-26 08:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74777">
<div class="phpcode"><code><span class="html">When using loadHTML() to process UTF-8 pages, you may meet the problem that the output of dom functions are not like the input. For example, if you want to get "Cạnh tranh", you will receive "Cáº¡nh tranh".  I suggest we use mb_convert_encoding before load UTF-8 page :
<br /><span class="default">&lt;?php
<br />    $pageDom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();    
<br />    </span><span class="default">$searchPage </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$htmlUTF8Page</span><span class="keyword">, </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">); 
<br />    @</span><span class="default">$pageDom</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$searchPage</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126674">  <div class="votes">
    <div id="Vu126674">
    <a href="/manual/vote-note.php?id=126674&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126674">
    <a href="/manual/vote-note.php?id=126674&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126674" title="85% like this...">
    5
    </div>
  </div>
  <a href="#126674" class="name">
  <strong class="user"><em>obayed dot opu at gmail dot com</em></strong></a><a class="genanchor" href="#126674"> &para;</a><div class="date" title="2021-12-10 09:58"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126674">
<div class="phpcode"><code><span class="html">To support HTML5 you have to disable xml error handling by add `LIBXML_NOERROR` as an option of loadHTML method.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">"&lt;html&gt;&lt;body&gt;Test&lt;br&gt;&lt;section&gt;I'M UNSUPPORTED&lt;/section&gt;&lt;/body&gt;&lt;/html&gt;"</span><span class="keyword">, </span><span class="default">LIBXML_NOERROR</span><span class="keyword">);<br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52251">  <div class="votes">
    <div id="Vu52251">
    <a href="/manual/vote-note.php?id=52251&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52251">
    <a href="/manual/vote-note.php?id=52251&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52251" title="77% like this...">
    17
    </div>
  </div>
  <a href="#52251" class="name">
  <strong class="user"><em>bigtree at DONTSPAM dot 29a dot nl</em></strong></a><a class="genanchor" href="#52251"> &para;</a><div class="date" title="2005-04-26 02:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52251">
<div class="phpcode"><code><span class="html">Pay attention when loading html that has a different charset than iso-8859-1. Since this method does not actively try to figure out what the html you are trying to load is encoded in (like most browsers do), you have to specify it in the html head. If, for instance, your html is in utf-8, make sure you have a meta tag in the html's head section:<br /><br />&lt;head&gt;<br />&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"/&gt;<br />&lt;/head&gt;<br /><br />If you do not specify the charset like this, all high-ascii bytes will be html-encoded. It is not enough to set the dom document you are loading the html in to UTF-8.</span></code></div>
  </div>
 </div>
  <div class="note" id="125526">  <div class="votes">
    <div id="Vu125526">
    <a href="/manual/vote-note.php?id=125526&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125526">
    <a href="/manual/vote-note.php?id=125526&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125526" title="75% like this...">
    4
    </div>
  </div>
  <a href="#125526" class="name">
  <strong class="user"><em>deepakrajpal dot com at gmail dot com</em></strong></a><a class="genanchor" href="#125526"> &para;</a><div class="date" title="2020-11-20 06:16"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125526">
<div class="phpcode"><code><span class="html">If we are loading html5 tags such as &lt;section&gt;, &lt;svg&gt; there is following error:<br /><br />DOMDocument::loadHTML(): Tag section invalid in Entity<br /><br />We can disable standard libxml errors (and enable user error handling) using libxml_use_internal_errors(true); before loadHTML();<br /><br />This is quite useful in phpunit custom assertions as given in following example (if using phpunit test cases):<br /><br />// Create a DOMDocument<br />$dom = new DOMDocument();<br /><br />// fix html5/svg errors<br />libxml_use_internal_errors(true);<br />        <br />// Load html <br />$dom-&gt;loadHTML("&lt;section&gt;&lt;/section&gt;");<br />$htmlNodes = $dom-&gt;getElementsByTagName('section');<br /><br />if ($htmlNodes-&gt;length == 0) {<br />    $this-&gt;assertFalse(TRUE);<br />} else {<br />    $this-&gt;assertTrue(TRUE);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="127117">  <div class="votes">
    <div id="Vu127117">
    <a href="/manual/vote-note.php?id=127117&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127117">
    <a href="/manual/vote-note.php?id=127117&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127117" title="75% like this...">
    2
    </div>
  </div>
  <a href="#127117" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127117"> &para;</a><div class="date" title="2022-05-19 04:05"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127117">
<div class="phpcode"><code><span class="html">loadHTML() &amp; loadHTMLFile() may always generate warnings if the html include some tags such as "nav, section, footer, etc" adopted as of HTML5 (in PHP 8.1.6).<br /><br />Try to run below.<br /><br /><span class="default">&lt;?php<br /><br />$file_name </span><span class="keyword">= </span><span class="string">'PHP Runtime Configuration - Manual.html'</span><span class="keyword">; </span><span class="comment">// Download this file from "<a href="https://www.php.net/manual/en/session.configuration.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/session.configuration.php</a>" in advance.<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$file_name</span><span class="keyword">); </span><span class="comment">// if set "LIBXML_NOERROR" as 2nd arg, no error<br /></span><span class="keyword">echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();<br /><br /></span><span class="comment">// Warning: DOMDocument::loadHTMLFile(): Tag nav invalid in PHP Runtime Configuration - Manual.html, line: 63 in D:\xampp\htdocs\test\xml(dom)\loadHTML\index.php on line 6<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118107">  <div class="votes">
    <div id="Vu118107">
    <a href="/manual/vote-note.php?id=118107&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118107">
    <a href="/manual/vote-note.php?id=118107&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118107" title="72% like this...">
    10
    </div>
  </div>
  <a href="#118107" class="name">
  <strong class="user"><em>finkenb2 at mail dot lib dot msu dot edu</em></strong></a><a class="genanchor" href="#118107"> &para;</a><div class="date" title="2015-10-05 04:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118107">
<div class="phpcode"><code><span class="html">Warning:  This does not function well with HTML5 elements such as SVG.  Most of the advice on the Web is to turn off errors in order to have it work with HTML5.</span></code></div>
  </div>
 </div>
  <div class="note" id="118834">  <div class="votes">
    <div id="Vu118834">
    <a href="/manual/vote-note.php?id=118834&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118834">
    <a href="/manual/vote-note.php?id=118834&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118834" title="73% like this...">
    7
    </div>
  </div>
  <a href="#118834" class="name">
  <strong class="user"><em>fr at felix-riesterer dot de</em></strong></a><a class="genanchor" href="#118834"> &para;</a><div class="date" title="2016-02-13 01:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118834">
<div class="phpcode"><code><span class="html">Remember: If you use an HTML5 doctype and a meta element like so<br /><br />&lt;meta charset=utf-8"&gt;<br /><br />your HTML code will get interpreted as ISO-8859-something and non-ASCII chars will get converted into HTML entities. However the HTML4-like version will work (as has been pointed out 10 years ago by "bigtree at 29a"):<br /><br />&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="110862">  <div class="votes">
    <div id="Vu110862">
    <a href="/manual/vote-note.php?id=110862&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110862">
    <a href="/manual/vote-note.php?id=110862&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110862" title="69% like this...">
    13
    </div>
  </div>
  <a href="#110862" class="name">
  <strong class="user"><em>cake at brothercake dot com</em></strong></a><a class="genanchor" href="#110862"> &para;</a><div class="date" title="2012-12-16 05:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110862">
<div class="phpcode"><code><span class="html">Be aware that this function doesn't actually understand HTML -- it fixes tag-soup input using the general rules of SGML, so it creates well-formed markup, but has no idea which element contexts are allowed.<br /><br />For example, with input like this where the first element isn't closed: <br /><br />    &lt;span&gt;hello &lt;div&gt;world&lt;/div&gt;<br /><br />loadHTML will change it to this, which is well-formed but invalid:<br /><br />    &lt;span&gt;hello &lt;div&gt;world&lt;/div&gt;&lt;/span&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="73278">  <div class="votes">
    <div id="Vu73278">
    <a href="/manual/vote-note.php?id=73278&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73278">
    <a href="/manual/vote-note.php?id=73278&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73278" title="69% like this...">
    5
    </div>
  </div>
  <a href="#73278" class="name">
  <strong class="user"><em>romain dot lalaut at laposte dot net</em></strong></a><a class="genanchor" href="#73278"> &para;</a><div class="date" title="2007-02-15 08:31"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73278">
<div class="phpcode"><code><span class="html">Note that the elements of such document will have no namespace even with &lt;html xmlns="<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>"&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="88864">  <div class="votes">
    <div id="Vu88864">
    <a href="/manual/vote-note.php?id=88864&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88864">
    <a href="/manual/vote-note.php?id=88864&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88864" title="65% like this...">
    12
    </div>
  </div>
  <a href="#88864" class="name">
  <strong class="user"><em>Errol</em></strong></a><a class="genanchor" href="#88864"> &para;</a><div class="date" title="2009-02-11 08:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88864">
<div class="phpcode"><code><span class="html">It should be noted that when any text is provided within the body tag
<br />outside of a containing element, the DOMDocument will encapsulate that
<br />text into a paragraph tag (&lt;p&gt;).
<br />
<br />For example:
<br /><span class="default">&lt;?php
<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">"&lt;html&gt;&lt;body&gt;Test&lt;br&gt;&lt;div&gt;Text&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;"</span><span class="keyword">);
<br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />will yield:
<br />&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
<br />"<a href="http://www.w3.org/TR/REC-html40/loose.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/REC-html40/loose.dtd</a>"&gt;
<br />&lt;html&gt;&lt;body&gt;
<br />&lt;p&gt;Test&lt;br&gt;&lt;/p&gt;
<br />&lt;div&gt;Text&lt;/div&gt;
<br />&lt;/body&gt;&lt;/html&gt;
<br />
<br />while:
<br /><span class="default">&lt;?php
<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(
<br />    </span><span class="string">"&lt;html&gt;&lt;body&gt;&lt;i&gt;Test&lt;/i&gt;&lt;br&gt;&lt;div&gt;Text&lt;/div&gt;&lt;/body&gt;&lt;/html&gt;"</span><span class="keyword">);
<br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />will yield:
<br />&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
<br />"<a href="http://www.w3.org/TR/REC-html40/loose.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/REC-html40/loose.dtd</a>"&gt;
<br />&lt;html&gt;&lt;body&gt;
<br />&lt;i&gt;Test&lt;/i&gt;&lt;br&gt;&lt;div&gt;Text&lt;/div&gt;
<br />&lt;/body&gt;&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="120372">  <div class="votes">
    <div id="Vu120372">
    <a href="/manual/vote-note.php?id=120372&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120372">
    <a href="/manual/vote-note.php?id=120372&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120372" title="63% like this...">
    5
    </div>
  </div>
  <a href="#120372" class="name">
  <strong class="user"><em>kerim-yagmurcu at gmx dot de</em></strong></a><a class="genanchor" href="#120372"> &para;</a><div class="date" title="2016-12-24 03:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120372">
<div class="phpcode"><code><span class="html">For those of you who want to get an external URL's class element, I have 2 usefull functions. In this example we get the '&lt;h3 class="r"&gt;'<br /> elements back (search result headers) from google search:<br /><br />1. Check the URL (if it is reachable, existing)<br /><span class="default">&lt;?php<br /></span><span class="comment"># URL Check<br /></span><span class="keyword">function </span><span class="default">url_check</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) { <br />    </span><span class="default">$headers </span><span class="keyword">= @</span><span class="default">get_headers</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">); <br />    return </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">) ? </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^HTTP\\/\\d+\\.\\d+\\s+2\\d\\d\\s+.*$/'</span><span class="keyword">,</span><span class="default">$headers</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) : </span><span class="default">false</span><span class="keyword">; <br />};<br /></span><span class="default">?&gt;<br /></span><br />2. Clean the element you want to get (remove all tags, tabs, new-lines etc.)<br /><span class="default">&lt;?php<br /></span><span class="comment"># Function to clean a string<br /></span><span class="keyword">function </span><span class="default">clean</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />    </span><span class="default">$clean </span><span class="keyword">= </span><span class="default">html_entity_decode</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">,</span><span class="string">'-'</span><span class="keyword">,</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\s+/S'</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)))));</span><span class="comment">// remove everything<br />    </span><span class="keyword">return </span><span class="default">$clean</span><span class="keyword">;<br />    echo </span><span class="string">'\n'</span><span class="keyword">;</span><span class="comment">// throw a new line<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />After doing that, we can output the search result headers with following method:<br /><span class="default">&lt;?php<br />$searchstring </span><span class="keyword">= </span><span class="string">'djceejay'</span><span class="keyword">;<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">'<a href="http://www.google.de/webhp#q=" rel="nofollow" target="_blank">http://www.google.de/webhp#q=</a>'</span><span class="keyword">.</span><span class="default">$searchstring</span><span class="keyword">;<br />if(</span><span class="default">url_check</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">)){<br />    </span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">validateOnParse </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHtml</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">));<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">clean</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementByClass</span><span class="keyword">(</span><span class="string">'r'</span><span class="keyword">)-&gt;</span><span class="default">textContent</span><span class="keyword">);<br />    echo </span><span class="default">$output </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}else{<br />    echo </span><span class="string">'URL not reachable!'</span><span class="keyword">;</span><span class="comment">// Throw message when URL not be called<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86450">  <div class="votes">
    <div id="Vu86450">
    <a href="/manual/vote-note.php?id=86450&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86450">
    <a href="/manual/vote-note.php?id=86450&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86450" title="64% like this...">
    4
    </div>
  </div>
  <a href="#86450" class="name">
  <strong class="user"><em>jamesedwardcooke+php at gmail dot com</em></strong></a><a class="genanchor" href="#86450"> &para;</a><div class="date" title="2008-10-19 11:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86450">
<div class="phpcode"><code><span class="html">Using loadHTML() automagically sets the doctype property of your DOMDocument instance(to the doctype in the html, or defaults to 4.0 Transitional). If you set the doctype with DOMImplementation it will be overridden.<br /><br />I assumed it was possible to set it and then load html with the doctype I defined(in order to decide the doctype at runtime), and ran into a huge headache trying to find out where my doctype was going. Hopefully this helps someone else.</span></code></div>
  </div>
 </div>
  <div class="note" id="125361">  <div class="votes">
    <div id="Vu125361">
    <a href="/manual/vote-note.php?id=125361&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125361">
    <a href="/manual/vote-note.php?id=125361&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125361" title="60% like this...">
    1
    </div>
  </div>
  <a href="#125361" class="name">
  <strong class="user"><em>divinity76+spam at gmail dot com</em></strong></a><a class="genanchor" href="#125361"> &para;</a><div class="date" title="2020-09-14 09:25"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125361">
<div class="phpcode"><code><span class="html">if you want to get rid of all the "DOMText elements containing ONLY whitespace", maybe try<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">loadHTML_noemptywhitespace</span><span class="keyword">(</span><span class="default">string $html</span><span class="keyword">, </span><span class="default">int $extra_flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">int $exclude_flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">): </span><span class="default">DOMDocument<br /></span><span class="keyword">{<br />    </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">LIBXML_HTML_NODEFDTD </span><span class="keyword">| </span><span class="default">LIBXML_NOBLANKS </span><span class="keyword">| </span><span class="default">LIBXML_NONET</span><span class="keyword">;<br />    </span><span class="default">$flags </span><span class="keyword">= (</span><span class="default">$flags </span><span class="keyword">| </span><span class="default">$extra_flags</span><span class="keyword">) &amp; ~ </span><span class="default">$exclude_flags</span><span class="keyword">;<br /><br />    </span><span class="default">$domd </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$domd</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    @</span><span class="default">$domd</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="string">'&lt;?xml encoding="UTF-8"&gt;' </span><span class="keyword">. </span><span class="default">$html</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">);<br />    </span><span class="default">$removeAnnoyingWhitespaceTextNodes </span><span class="keyword">= function (</span><span class="default">\DOMNode $node</span><span class="keyword">) use (&amp;</span><span class="default">$removeAnnoyingWhitespaceTextNodes</span><span class="keyword">): </span><span class="default">void </span><span class="keyword">{<br />        if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">()) {<br />            </span><span class="comment">// Warning: it's important to do it backwards; if you do it forwards, the index for DOMNodeList might become invalidated;<br />            // that's why i don't use foreach() - don't change it (unless you know what you're doing, ofc)<br />            </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">length </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">; --</span><span class="default">$i</span><span class="keyword">) {<br />                </span><span class="default">$removeAnnoyingWhitespaceTextNodes</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">));<br />            }<br />        }<br />        if (</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeType </span><span class="keyword">=== </span><span class="default">XML_TEXT_NODE </span><span class="keyword">&amp;&amp; !</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasChildNodes</span><span class="keyword">() &amp;&amp; !</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">hasAttributes</span><span class="keyword">() &amp;&amp; empty(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">textContent</span><span class="keyword">))) {<br />            </span><span class="comment">//echo "Removing annoying POS";<br />            // var_dump($node);<br />            </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">parentNode</span><span class="keyword">-&gt;</span><span class="default">removeChild</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);<br />        } </span><span class="comment">//elseif ($node instanceof DOMText) { echo "not removed"; var_dump($node, $node-&gt;hasChildNodes(), $node-&gt;hasAttributes(), trim($node-&gt;textContent)); }<br />    </span><span class="keyword">};<br />    </span><span class="default">$removeAnnoyingWhitespaceTextNodes</span><span class="keyword">(</span><span class="default">$domd</span><span class="keyword">);<br />    return </span><span class="default">$domd</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97256">  <div class="votes">
    <div id="Vu97256">
    <a href="/manual/vote-note.php?id=97256&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97256">
    <a href="/manual/vote-note.php?id=97256&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97256" title="58% like this...">
    3
    </div>
  </div>
  <a href="#97256" class="name">
  <strong class="user"><em>Alex</em></strong></a><a class="genanchor" href="#97256"> &para;</a><div class="date" title="2010-04-10 08:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97256">
<div class="phpcode"><code><span class="html">Beware of the "gotcha" (works as designed but not as expected): if you use loadHTML, you cannot validate the document. Validation is only for XML. Details here: <a href="http://bugs.php.net/bug.php?id=43771&amp;edit=1" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=43771&amp;edit=1</a></span></code></div>
  </div>
 </div>
  <div class="note" id="78243">  <div class="votes">
    <div id="Vu78243">
    <a href="/manual/vote-note.php?id=78243&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78243">
    <a href="/manual/vote-note.php?id=78243&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78243" title="58% like this...">
    4
    </div>
  </div>
  <a href="#78243" class="name">
  <strong class="user"><em>xuanbn at yahoo dot com</em></strong></a><a class="genanchor" href="#78243"> &para;</a><div class="date" title="2007-10-04 01:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78243">
<div class="phpcode"><code><span class="html">If you use loadHTML() to process utf HTML string (eg in Vietnamese), you may experience result in garbage text, while some files were OK. Even your HTML already have meta charset  like<br /><br />  &lt;meta http-equiv="content-type" content="text/html; charset=utf-8"&gt;<br /><br />I have discovered that, to help loadHTML() process utf file correctly, the meta tag should come first, before any utf string appear. For example, this HTML file<br /><br />&lt;html&gt;<br /> &lt;head&gt;<br />    &lt;meta http-equiv="content-type" content="text/html; charset=utf-8"&gt;<br />    &lt;title&gt; Vietnamese - Tiếng Việt&lt;/title&gt;<br />  &lt;/head&gt;<br />&lt;body&gt;&lt;/body&gt;<br />&lt;/html&gt;<br /><br />will be OK with loadHTML() when &lt;meta&gt; tag appear &lt;title&gt; tag.<br /><br />But the file below will not regcornize by loadHTML() because &lt;title&gt; tag contains utf string appear before &lt;meta&gt; tag.<br /><br />&lt;html&gt;<br /> &lt;head&gt;<br />    &lt;title&gt; Vietnamese - Tiếng Việt&lt;/title&gt;<br />    &lt;meta http-equiv="content-type" content="text/html; charset=utf-8"&gt;<br />  &lt;/head&gt;<br />&lt;body&gt;&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="91513">  <div class="votes">
    <div id="Vu91513">
    <a href="/manual/vote-note.php?id=91513&amp;page=domdocument.loadhtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91513">
    <a href="/manual/vote-note.php?id=91513&amp;page=domdocument.loadhtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91513" title="53% like this...">
    2
    </div>
  </div>
  <a href="#91513" class="name">
  <strong class="user"><em>piopier</em></strong></a><a class="genanchor" href="#91513"> &para;</a><div class="date" title="2009-06-14 08:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91513">
<div class="phpcode"><code><span class="html">Here is a function I wrote to capitalize the previous remarks about charset problems (UTF-8...) when using loadHTML and then DOM functions.<br />It adds the charset meta tag just after &lt;head&gt; to improve automatic encoding detection, converts any specific character to an html entity, thus PHP DOM functions/attributes will return correct values.<br /><br /><span class="default">&lt;?php<br />mb_detect_order</span><span class="keyword">(</span><span class="string">"ASCII,UTF-8,ISO-8859-1,windows-1252,iso-8859-15"</span><span class="keyword">);<br />function </span><span class="default">loadNprepare</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$encod</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">) {<br />        </span><span class="default">$content        </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />        if (!empty(</span><span class="default">$content</span><span class="keyword">)) {<br />                if (empty(</span><span class="default">$encod</span><span class="keyword">))<br />                        </span><span class="default">$encod  </span><span class="keyword">= </span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">);<br />                </span><span class="default">$headpos        </span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">,</span><span class="string">'&lt;head&gt;'</span><span class="keyword">);<br />                if (</span><span class="default">FALSE</span><span class="keyword">=== </span><span class="default">$headpos</span><span class="keyword">)<br />                        </span><span class="default">$headpos</span><span class="keyword">= </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">,</span><span class="string">'&lt;HEAD&gt;'</span><span class="keyword">);<br />                if (</span><span class="default">FALSE</span><span class="keyword">!== </span><span class="default">$headpos</span><span class="keyword">) {<br />                        </span><span class="default">$headpos</span><span class="keyword">+=</span><span class="default">6</span><span class="keyword">;<br />                        </span><span class="default">$content </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$headpos</span><span class="keyword">) . </span><span class="string">'&lt;meta http-equiv="Content-Type" content="text/html; charset='</span><span class="keyword">.</span><span class="default">$encod</span><span class="keyword">.</span><span class="string">'"&gt;' </span><span class="keyword">.</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">,</span><span class="default">$headpos</span><span class="keyword">);<br />                }<br />                </span><span class="default">$content</span><span class="keyword">=</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">, </span><span class="string">'HTML-ENTITIES'</span><span class="keyword">, </span><span class="default">$encod</span><span class="keyword">);<br />        }<br />        </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">;<br />        </span><span class="default">$res </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">);<br />        if (!</span><span class="default">$res</span><span class="keyword">) return </span><span class="default">FALSE</span><span class="keyword">;<br />        return </span><span class="default">$dom</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />NB: it uses mb_strpos/mb_substr instead of mb_ereg_replace because that seemed more efficient with huge html pages.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.loadhtml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadhtml.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domdocument.php">DOMDocument</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domdocument.adoptnode.php" title="adoptNode">adoptNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattribute.php" title="createAttribute">createAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattributens.php" title="createAttributeNS">createAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcdatasection.php" title="createCDATASection">createCDATASection</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcomment.php" title="createComment">createComment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createdocumentfragment.php" title="createDocumentFragment">createDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelement.php" title="createElement">createElement</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelementns.php" title="createElementNS">createElementNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createentityreference.php" title="createEntityReference">createEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createprocessinginstruction.php" title="createProcessingInstruction">createProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createtextnode.php" title="createTextNode">createTextNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementbyid.php" title="getElementById">getElementById</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagname.php" title="getElementsByTagName">getElementsByTagName</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagnamens.php" title="getElementsByTagNameNS">getElementsByTagNameNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.importnode.php" title="importNode">importNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.load.php" title="load">load</a>
                        </li>
                                                <li class="current">
                            <a href="domdocument.loadhtml.php" title="loadHTML">loadHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtmlfile.php" title="loadHTMLFile">loadHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadxml.php" title="loadXML">loadXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.normalizedocument.php" title="normalizeDocument">normalizeDocument</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.registernodeclass.php" title="registerNodeClass">registerNodeClass</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidate.php" title="relaxNGValidate">relaxNGValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidatesource.php" title="relaxNGValidateSource">relaxNGValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.replacechildren.php" title="replaceChildren">replaceChildren</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.save.php" title="save">save</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtml.php" title="saveHTML">saveHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtmlfile.php" title="saveHTMLFile">saveHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidate.php" title="schemaValidate">schemaValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidatesource.php" title="schemaValidateSource">schemaValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.validate.php" title="validate">validate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.xinclude.php" title="xinclude">xinclude</a>
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
