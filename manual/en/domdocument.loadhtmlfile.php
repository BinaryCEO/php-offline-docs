<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::loadHTMLFile - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.loadhtml.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.loadxml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.loadhtmlfile.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.loadhtmlfile.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.loadhtmlfile.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.loadhtmlfile.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.loadhtmlfile.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.loadhtmlfile.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.loadhtmlfile.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.loadhtmlfile.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.loadhtmlfile.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.loadhtmlfile.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Load HTML from a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::loadHTMLFile - Manual" />
<meta name="twitter:description" content="Load HTML from a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::loadHTMLFile - Manual" />
<meta itemprop="description" content="Load HTML from a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Load HTML from a file" />

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
        <a href="domdocument.loadxml.php">
          DOMDocument::loadXML &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.loadhtml.php">
          &laquo; DOMDocument::loadHTML        </a>
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
            <option value='en/domdocument.loadhtmlfile.php' selected="selected">English</option>
            <option value='de/domdocument.loadhtmlfile.php'>German</option>
            <option value='es/domdocument.loadhtmlfile.php'>Spanish</option>
            <option value='fr/domdocument.loadhtmlfile.php'>French</option>
            <option value='it/domdocument.loadhtmlfile.php'>Italian</option>
            <option value='ja/domdocument.loadhtmlfile.php'>Japanese</option>
            <option value='pt_BR/domdocument.loadhtmlfile.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.loadhtmlfile.php'>Russian</option>
            <option value='tr/domdocument.loadhtmlfile.php'>Turkish</option>
            <option value='uk/domdocument.loadhtmlfile.php'>Ukrainian</option>
            <option value='zh/domdocument.loadhtmlfile.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.loadhtmlfile" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::loadHTMLFile</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::loadHTMLFile</span> &mdash; <span class="dc-title">
   Load HTML from a file
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.loadhtmlfile-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::loadHTMLFile</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The function parses the HTML document in the file named
   <code class="parameter">filename</code>. Unlike loading XML, HTML does not have
   to be well-formed to load.
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

 <div class="refsect1 parameters" id="refsect1-domdocument.loadhtmlfile-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The path to the HTML file.
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

 <div class="refsect1 returnvalues" id="refsect1-domdocument.loadhtmlfile-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.loadhtmlfile-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an empty string is passed as the <code class="parameter">filename</code>
   or an empty file is named, a warning will be generated. This warning
   is not generated by libxml and cannot be handled using <a href="function.libxml-use-internal-errors.php" class="link">libxml&#039;s error handling
   functions</a>.
  </p>
  <p class="para">While malformed HTML should load successfully, this function may generate <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> errors when it encounters bad markup. <a href="function.libxml-use-internal-errors.php" class="link">libxml&#039;s error handling functions</a> may be used to handle these errors.</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-domdocument.loadhtmlfile-changelog">
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


 <div class="refsect1 examples" id="refsect1-domdocument.loadhtmlfile-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5777">
    <p><strong>Example #1 Creating a Document</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadHTMLFile</span><span style="color: #007700">(</span><span style="color: #DD0000">"filename.html"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveHTML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-domdocument.loadhtmlfile-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.loadhtml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadHTML()</a> - Load HTML from a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/loadhtmlfile.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.loadhtmlfile%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.loadhtmlfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadhtmlfile.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114531">  <div class="votes">
    <div id="Vu114531">
    <a href="/manual/vote-note.php?id=114531&amp;page=domdocument.loadhtmlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114531">
    <a href="/manual/vote-note.php?id=114531&amp;page=domdocument.loadhtmlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114531" title="73% like this...">
    14
    </div>
  </div>
  <a href="#114531" class="name">
  <strong class="user"><em>onemanbanddan at gmail dot com</em></strong></a><a class="genanchor" href="#114531"> &para;</a><div class="date" title="2014-03-04 12:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114531">
<div class="phpcode"><code><span class="html">The options for surpressing errors and warnings will not work with this as they do for loadXML()<br />e.g.<br /><span class="default">&lt;?php<br />$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">LIBXML_NOWARNING </span><span class="keyword">| </span><span class="default">LIBXML_NOERROR</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>will not work.<br />you must use:<br /><span class="default">&lt;?php<br />libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>and handle the exceptions as neccesarry.</span></code></div>
  </div>
 </div>
  <div class="note" id="87294">  <div class="votes">
    <div id="Vu87294">
    <a href="/manual/vote-note.php?id=87294&amp;page=domdocument.loadhtmlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87294">
    <a href="/manual/vote-note.php?id=87294&amp;page=domdocument.loadhtmlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87294" title="57% like this...">
    6
    </div>
  </div>
  <a href="#87294" class="name">
  <strong class="user"><em>Mark Omohundro, ajamyajax dot com</em></strong></a><a class="genanchor" href="#87294"> &para;</a><div class="date" title="2008-11-28 06:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87294">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// try this html listing example for all nodes / includes a few getElementsByTagName options:<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">$DOCUMENT_ROOT</span><span class="keyword">. </span><span class="string">"test.html"</span><span class="keyword">;<br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTMLFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br /></span><span class="comment">// example 1:<br /></span><span class="default">$elements </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'*'</span><span class="keyword">);<br /></span><span class="comment">// example 2:<br /></span><span class="default">$elements </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'html'</span><span class="keyword">);<br /></span><span class="comment">// example 3:<br />//$elements = $doc-&gt;getElementsByTagName('body');<br />// example 4:<br />//$elements = $doc-&gt;getElementsByTagName('table');<br />// example 5:<br />//$elements = $doc-&gt;getElementsByTagName('div');<br /><br /></span><span class="keyword">if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$elements</span><span class="keyword">)) {<br />  foreach (</span><span class="default">$elements </span><span class="keyword">as </span><span class="default">$element</span><span class="keyword">) {<br />    echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">. </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">. </span><span class="string">": "</span><span class="keyword">;<br /><br />    </span><span class="default">$nodes </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">;<br />    foreach (</span><span class="default">$nodes </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {<br />      echo </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />  }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53210">  <div class="votes">
    <div id="Vu53210">
    <a href="/manual/vote-note.php?id=53210&amp;page=domdocument.loadhtmlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53210">
    <a href="/manual/vote-note.php?id=53210&amp;page=domdocument.loadhtmlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53210" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#53210" class="name">
  <strong class="user"><em>andy at carobert dot com</em></strong></a><a class="genanchor" href="#53210"> &para;</a><div class="date" title="2005-05-25 01:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53210">
<div class="phpcode"><code><span class="html">This puts the HTML into a DOM object which can be parsed by individual tags, attributes, etc..  Here is an example of getting all the 'href' attributes and corresponding node values out of the 'a' tag. Very cool....<br /><br /><span class="default">&lt;?php<br />$myhtml </span><span class="keyword">= &lt;&lt;&lt;EOF<br /></span><span class="string">&lt;html&gt;<br />&lt;head&gt;<br />&lt;title&gt;My Page&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />&lt;p&gt;&lt;a href="/mypage1"&gt;Hello World!&lt;/a&gt;&lt;/p&gt;<br />&lt;p&gt;&lt;a href="/mypage2"&gt;Another Hello World!&lt;/a&gt;&lt;/p&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br /></span><span class="keyword">EOF;<br /><br /></span><span class="default">$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$myhtml</span><span class="keyword">);<br /><br /></span><span class="default">$tags </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$tags </span><span class="keyword">as </span><span class="default">$tag</span><span class="keyword">) {<br />       echo </span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">).</span><span class="string">' | '</span><span class="keyword">.</span><span class="default">$tag</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This should output:<br /><br />/mypage1 | Hello World!<br />/mypage2 | Another Hello World!</span></code></div>
  </div>
 </div>
  <div class="note" id="116120">  <div class="votes">
    <div id="Vu116120">
    <a href="/manual/vote-note.php?id=116120&amp;page=domdocument.loadhtmlfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116120">
    <a href="/manual/vote-note.php?id=116120&amp;page=domdocument.loadhtmlfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116120" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#116120" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116120"> &para;</a><div class="date" title="2014-11-11 04:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116120">
<div class="phpcode"><code><span class="html">In this post <a href="http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html</a> I found a simple way to get the content of a URL with DOMDocument, loadHTMLFile and saveHTML().<br /><br />function getURLContent($url){<br />    $doc = new DOMDocument;<br />    $doc-&gt;preserveWhiteSpace = FALSE;<br />    @$doc-&gt;loadHTMLFile($url);<br />    return $doc-&gt;saveHTML();<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.loadhtmlfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadhtmlfile.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="domdocument.loadhtml.php" title="loadHTML">loadHTML</a>
                        </li>
                                                <li class="current">
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
