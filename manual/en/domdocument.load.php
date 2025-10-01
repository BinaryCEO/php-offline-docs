<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::load - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.load.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.load.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.load.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.importnode.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.loadhtml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.load.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.load.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.load.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.load.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.load.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.load.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.load.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.load.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.load.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.load.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.load.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Load XML from a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::load - Manual" />
<meta name="twitter:description" content="Load XML from a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::load - Manual" />
<meta itemprop="description" content="Load XML from a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Load XML from a file" />

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
        <a href="domdocument.loadhtml.php">
          DOMDocument::loadHTML &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.importnode.php">
          &laquo; DOMDocument::importNode        </a>
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
            <option value='en/domdocument.load.php' selected="selected">English</option>
            <option value='de/domdocument.load.php'>German</option>
            <option value='es/domdocument.load.php'>Spanish</option>
            <option value='fr/domdocument.load.php'>French</option>
            <option value='it/domdocument.load.php'>Italian</option>
            <option value='ja/domdocument.load.php'>Japanese</option>
            <option value='pt_BR/domdocument.load.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.load.php'>Russian</option>
            <option value='tr/domdocument.load.php'>Turkish</option>
            <option value='uk/domdocument.load.php'>Ukrainian</option>
            <option value='zh/domdocument.load.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.load" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::load</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::load</span> &mdash; <span class="dc-title">
   Load XML from a file
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.load-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::load</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Loads an XML document from a file. 
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    Unix style paths with forward slashes can cause significant performance
    degradation on Windows systems; be sure to call <span class="function"><a href="function.realpath.php" class="function">realpath()</a></span>
    in such a case.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.load-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The path to the XML document.
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

 <div class="refsect1 returnvalues" id="refsect1-domdocument.load-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.load-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an empty string is passed as the <code class="parameter">filename</code>
   or an empty file is named, a warning will be generated. This warning
   is not generated by libxml and cannot be handled using libxml&#039;s error
   handling functions.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-domdocument.load-changelog">
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


 <div class="refsect1 examples" id="refsect1-domdocument.load-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5775">
    <p><strong>Example #1 Creating a Document</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book.xml'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.load-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.loadxml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadXML()</a> - Load XML from a string</span></li>
    <li><span class="methodname"><a href="domdocument.save.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::save()</a> - Dumps the internal XML tree back into a file</span></li>
    <li><span class="methodname"><a href="domdocument.savexml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveXML()</a> - Dumps the internal XML tree back into a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/load.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.load%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.load&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.load.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91384">  <div class="votes">
    <div id="Vu91384">
    <a href="/manual/vote-note.php?id=91384&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91384">
    <a href="/manual/vote-note.php?id=91384&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91384" title="64% like this...">
    15
    </div>
  </div>
  <a href="#91384" class="name">
  <strong class="user"><em>Jonas Due Vesterheden</em></strong></a><a class="genanchor" href="#91384"> &para;</a><div class="date" title="2009-06-09 08:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91384">
<div class="phpcode"><code><span class="html">I had a problem with loading documents over HTTP. I would get errors looking like this:<br /><br />Warning: DOMDocument::load(<a href="http://external/document.xml" rel="nofollow" target="_blank">http://external/document.xml</a>): failed to open stream: HTTP request failed! HTTP/1.1 500 Internal Server Error<br /><br />The document would load fine in browsers and using wget. The problem is that DOMDocument::load() on my systems (both OS X and Linux) didn't send any User-Agent header which for some weird reason made Microsoft-IIS/6.0 respond with the 500 error.<br /><br />The solution is found on <a href="http://php.net/manual/en/function.libxml-set-streams-context.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.libxml-set-streams-context.php</a> : <br /><br /><span class="default">&lt;?php<br />$opts </span><span class="keyword">= array(<br />    </span><span class="string">'http' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'user_agent' </span><span class="keyword">=&gt; </span><span class="string">'PHP libxml agent'</span><span class="keyword">,<br />    )<br />);<br /><br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /></span><span class="default">libxml_set_streams_context</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">);<br /><br /></span><span class="comment">// request a file through HTTP<br /></span><span class="default">$doc </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">(</span><span class="string">'<a href="http://www.example.com/file.xml" rel="nofollow" target="_blank">http://www.example.com/file.xml</a>'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77459">  <div class="votes">
    <div id="Vu77459">
    <a href="/manual/vote-note.php?id=77459&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77459">
    <a href="/manual/vote-note.php?id=77459&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77459" title="75% like this...">
    2
    </div>
  </div>
  <a href="#77459" class="name">
  <strong class="user"><em>hh dot lohmann at yahoo dot de</em></strong></a><a class="genanchor" href="#77459"> &para;</a><div class="date" title="2007-08-30 03:48"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77459">
<div class="phpcode"><code><span class="html">BadGuy´s note may be confusing since what he depicts is no special property of the relevant method. PHP works always in and on a local file system which means that if you want to use resources from other systems or - what is, indeed, BadGuy´s problem - need resources that have been dealt with by other programs or processes, you have to state and manage that explicitly in your code. PHP is just a quite normal program in that.<br /><br />BadGuy´s solution is using the "http wrapper" to get output from another process (see "wrappers" in the PHP manual). Doing this, the appropriate syntax for http calls has to be respected.</span></code></div>
  </div>
 </div>
  <div class="note" id="75499">  <div class="votes">
    <div id="Vu75499">
    <a href="/manual/vote-note.php?id=75499&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75499">
    <a href="/manual/vote-note.php?id=75499&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75499" title="75% like this...">
    2
    </div>
  </div>
  <a href="#75499" class="name">
  <strong class="user"><em>admin at tijnema dot tijnema dot info</em></strong></a><a class="genanchor" href="#75499"> &para;</a><div class="date" title="2007-06-02 04:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75499">
<div class="phpcode"><code><span class="html">In reply to BadGuy [at] BadGuy [dot] nl<br /><br />When the news.php file is located on the same server, like you said in the first example then <a href="http://my.beautiful-website.com/xmlsource/news.php" rel="nofollow" target="_blank">http://my.beautiful-website.com/xmlsource/news.php</a> wouldn't work, but you should use <a href="http://localhost/xmlsource/news.php" rel="nofollow" target="_blank">http://localhost/xmlsource/news.php</a> or <a href="http://127.0.0.1/xmlsource/news.php" rel="nofollow" target="_blank">http://127.0.0.1/xmlsource/news.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="84470">  <div class="votes">
    <div id="Vu84470">
    <a href="/manual/vote-note.php?id=84470&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84470">
    <a href="/manual/vote-note.php?id=84470&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84470" title="63% like this...">
    3
    </div>
  </div>
  <a href="#84470" class="name">
  <strong class="user"><em>the_N_Channel</em></strong></a><a class="genanchor" href="#84470"> &para;</a><div class="date" title="2008-07-15 04:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84470">
<div class="phpcode"><code><span class="html">NOTE, will not load successfully if there is a comment at the beginning of the file before the &lt;?xml version="1.0" ?&gt; declaration!</span></code></div>
  </div>
 </div>
  <div class="note" id="72433">  <div class="votes">
    <div id="Vu72433">
    <a href="/manual/vote-note.php?id=72433&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72433">
    <a href="/manual/vote-note.php?id=72433&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72433" title="63% like this...">
    3
    </div>
  </div>
  <a href="#72433" class="name">
  <strong class="user"><em>BadGuy [at] BadGuy [dot] nl</em></strong></a><a class="genanchor" href="#72433"> &para;</a><div class="date" title="2007-01-18 08:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72433">
<div class="phpcode"><code><span class="html">Note that this method uses the local file system before doing anything remote. The 'disadvantage' would be that if you would do the following:<br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"xmlsource/news.php"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This would not make the method read the actual output of the news.php file --presumably valid xml data--, but the file contents --obviously this would be php code. So this will return an error saying news.php is missing the xml declaration and maybe the xml start-tag<br /><br />What would work is the following:<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">"<a href="http://my.beautiful-website.com/xmlsource/news.php" rel="nofollow" target="_blank">http://my.beautiful-website.com/xmlsource/news.php</a>"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will force a http request to be used to get this file instead of just locally reading it and the file just returning code</span></code></div>
  </div>
 </div>
  <div class="note" id="107443">  <div class="votes">
    <div id="Vu107443">
    <a href="/manual/vote-note.php?id=107443&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107443">
    <a href="/manual/vote-note.php?id=107443&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107443" title="54% like this...">
    1
    </div>
  </div>
  <a href="#107443" class="name">
  <strong class="user"><em>sainthyoga2003 at gmail dot com</em></strong></a><a class="genanchor" href="#107443"> &para;</a><div class="date" title="2012-02-09 03:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107443">
<div class="phpcode"><code><span class="html">in the default example:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'book.xml'</span><span class="keyword">);<br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />you must enter the absolute path for book.xml due for get a false result in load function.</span></code></div>
  </div>
 </div>
  <div class="note" id="129036">  <div class="votes">
    <div id="Vu129036">
    <a href="/manual/vote-note.php?id=129036&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129036">
    <a href="/manual/vote-note.php?id=129036&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129036" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129036" class="name">
  <strong class="user"><em>Raf-sns</em></strong></a><a class="genanchor" href="#129036"> &para;</a><div class="date" title="2023-11-11 06:19"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129036">
<div class="phpcode"><code><span class="html">Be carreful with the option "preserveWhiteSpace"<br /><br />$dom = new DOMDocument;<br />// false -&gt; this preserve white spaces<br />// true -&gt; this will put all entries inline<br />$dom-&gt;preserveWhiteSpace = false;  // preserve white space !</span></code></div>
  </div>
 </div>
  <div class="note" id="102637">  <div class="votes">
    <div id="Vu102637">
    <a href="/manual/vote-note.php?id=102637&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102637">
    <a href="/manual/vote-note.php?id=102637&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102637" title="50% like this...">
    0
    </div>
  </div>
  <a href="#102637" class="name">
  <strong class="user"><em>sainthyoga2003 at gmail dot com</em></strong></a><a class="genanchor" href="#102637"> &para;</a><div class="date" title="2011-02-25 05:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102637">
<div class="phpcode"><code><span class="html">i've found the partial solution for xml:id warning,is explained at this address: <a href="https://fosswiki.liip.ch/display/BLOG/GetElementById+Pitfalls" rel="nofollow" target="_blank">https://fosswiki.liip.ch/display/BLOG/GetElementById+Pitfalls</a><br /><br />there explains that:<br />The ID does have to be a valid NCName, which for example means, that the first letter can't be a number.<br /><br />and in my xml:id i had a number. :D</span></code></div>
  </div>
 </div>
  <div class="note" id="97428">  <div class="votes">
    <div id="Vu97428">
    <a href="/manual/vote-note.php?id=97428&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97428">
    <a href="/manual/vote-note.php?id=97428&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97428" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97428" class="name">
  <strong class="user"><em>_ michael</em></strong></a><a class="genanchor" href="#97428"> &para;</a><div class="date" title="2010-04-19 07:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97428">
<div class="phpcode"><code><span class="html">XHTML and entities: The solution proposed below by zachatwork at gmail dot com didn't work for me. I checked on a number of servers (both LAMPP and WAMPP) - on each of them, calling loadXML() with the LIBXML_DTDLOAD option triggered an external request for the DTD. And that's bad news.<br /><br />If allow_url_fopen is turned off, the request for the DTD fails with a warning. If it is turned on, the request fails because these w3c URLs return a 503 Service Unavailable.<br /><br />HTML entities still generate a warning in either case. <br /><br />The best solution, as far as I can tell, is simply to ignore the warnings and suppress them using '@'. I can't recommend parsing XHTML with loadHTML() instead of loadXML() - yes, you get rid of the entity problem, but loadHTML() changes the source while parsing it (tries to 'fix' it even though there is nothing to fix).</span></code></div>
  </div>
 </div>
  <div class="note" id="90077">  <div class="votes">
    <div id="Vu90077">
    <a href="/manual/vote-note.php?id=90077&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90077">
    <a href="/manual/vote-note.php?id=90077&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90077" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90077" class="name">
  <strong class="user"><em>syntaxiko</em></strong></a><a class="genanchor" href="#90077"> &para;</a><div class="date" title="2009-04-04 10:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90077">
<div class="phpcode"><code><span class="html">Function will not work if using XML DOM PECL module</span></code></div>
  </div>
 </div>
  <div class="note" id="57911">  <div class="votes">
    <div id="Vu57911">
    <a href="/manual/vote-note.php?id=57911&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57911">
    <a href="/manual/vote-note.php?id=57911&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57911" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#57911" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#57911"> &para;</a><div class="date" title="2005-10-18 05:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57911">
<div class="phpcode"><code><span class="html">Suppose you wanted to dynamically load an array from an .XSD file. This method is your guy. just remember to use the actual xs: portion in xpaths and such.
<br />
<br />All the other "load" methods will error out.
<br />
<br /><span class="default">&lt;?php
<br />$attributes </span><span class="keyword">= array();
<br /></span><span class="default">$xsdstring </span><span class="keyword">= </span><span class="string">"/htdocs/api/xsd/common.xsd"</span><span class="keyword">;
<br /></span><span class="default">$XSDDOC </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$XSDDOC</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />if (</span><span class="default">$XSDDOC</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$xsdstring</span><span class="keyword">))
<br />{
<br />    </span><span class="default">$xsdpath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$XSDDOC</span><span class="keyword">);
<br />    </span><span class="default">$attributeNodes </span><span class="keyword">= 
<br />              </span><span class="default">$xsdpath</span><span class="keyword">-&gt;
<br />              </span><span class="default">query</span><span class="keyword">(</span><span class="string">'//xs:simpleType[@name="attributeType"]'</span><span class="keyword">)
<br />              -&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />    foreach (</span><span class="default">$attributeNodes</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$attr</span><span class="keyword">) 
<br />    {
<br />        </span><span class="default">$attributes</span><span class="keyword">[ </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'value'</span><span class="keyword">) ] = </span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">getAttribute</span><span class="keyword">(</span><span class="string">'name'</span><span class="keyword">);
<br />    }
<br />    unset(</span><span class="default">$xsdpath</span><span class="keyword">);
<br />}
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$attributes</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98213">  <div class="votes">
    <div id="Vu98213">
    <a href="/manual/vote-note.php?id=98213&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98213">
    <a href="/manual/vote-note.php?id=98213&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98213" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#98213" class="name">
  <strong class="user"><em>_ michael</em></strong></a><a class="genanchor" href="#98213"> &para;</a><div class="date" title="2010-06-01 08:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98213">
<div class="phpcode"><code><span class="html">load() will handle non-ASCII characters depending on the details of the XML declaration, but in a somewhat surprising way. One would assume that the declarations '&lt;?xml version="1.0" encoding="UTF-8"?&gt;' and '&lt;?xml version="1.0"?&gt;' are treated in the same way because UTF-8 is the default encoding anyway. But not so.<br /><br />* If there is an XML declaration defining the encoding *explicitly*, the non-ASCII characters remain unchanged.<br />* If the XML declaration does not define the encoding explicitly, or if the XML declaration is missing, non-ASCII characters are converted into numeric entities.<br /><br />So the document<br /><br />    &lt;?xml version="1.0"?&gt;<br />    &lt;root&gt;&lt;nonascii&gt;ä&lt;/nonascii&gt;&lt;/root&gt;<br /><br />will be converted to<br /><br />    &lt;?xml version="1.0"?&gt;<br />    &lt;root&gt;&lt;nonascii&gt;&amp;#xE4;&lt;/nonascii&gt;&lt;/root&gt;<br /><br />The same happens if there is no XML declaration at all. On the other hand, the document<br /><br />    &lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />    &lt;root&gt;&lt;nonascii&gt;ä&lt;/nonascii&gt;&lt;/root&gt;<br /><br />will remain as it is.<br /><br />This behaviour applies to loadXML() as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="84904">  <div class="votes">
    <div id="Vu84904">
    <a href="/manual/vote-note.php?id=84904&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84904">
    <a href="/manual/vote-note.php?id=84904&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84904" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#84904" class="name">
  <strong class="user"><em>darren at viamedia dot co dot za</em></strong></a><a class="genanchor" href="#84904"> &para;</a><div class="date" title="2008-08-05 07:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84904">
<div class="phpcode"><code><span class="html">If you are loading xml with the intention of validating it against an internal dtd and you have experienced issues with the validation it could be related to missing LIBXML constants.<br /><br />I found this post by "aidan at php dot net" in root level dom docs and thought it might be more useful here:<br />As of PHP 5.1, libxml options may be set using constants rather than the use of proprietary DomDocument properties.<br /><br />DomDocument-&gt;resolveExternals is equivilant to setting<br />LIBXML_DTDLOAD<br />LIBXML_DTDATTR<br /><br />DomDocument-&gt;validateOnParse is equivilant to setting<br />LIBXML_DTDLOAD<br />LIBXML_DTDVALID<br /><br />PHP 5.1 users are encouraged to use the new constants.<br /><br />Example:<br /><span class="default">&lt;?php<br />$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">;<br /></span><span class="comment">// Resolve externals<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">LIBXML_DTDLOAD</span><span class="keyword">|</span><span class="default">LIBXML_DTDATTR</span><span class="keyword">);<br /></span><span class="comment">// OR <br />// Validate against DTD<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">LIBXML_DTDLOAD</span><span class="keyword">|</span><span class="default">LIBXML_DTDVALID</span><span class="keyword">);<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">validate</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91901">  <div class="votes">
    <div id="Vu91901">
    <a href="/manual/vote-note.php?id=91901&amp;page=domdocument.load&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91901">
    <a href="/manual/vote-note.php?id=91901&amp;page=domdocument.load&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91901" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#91901" class="name">
  <strong class="user"><em>zachatwork at gmail dot com</em></strong></a><a class="genanchor" href="#91901"> &para;</a><div class="date" title="2009-06-30 11:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91901">
<div class="phpcode"><code><span class="html">You can easily avoid the warning about &amp;nbsp; references by using the LIBXML_DTDLOAD option. <br /><br /><span class="default">&lt;?php<br /><br />$html </span><span class="keyword">= &lt;&lt;&lt;EOF<br /></span><span class="string">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "<a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd</a>"&gt;<br />&lt;html xmlns="<a href="http://www.w3.org/1999/xhtml" rel="nofollow" target="_blank">http://www.w3.org/1999/xhtml</a>"&gt;<br />  &lt;head&gt;<br />  &lt;/head&gt;<br />  &lt;body&gt;<br />    &lt;p&gt;&amp;nbsp;&lt;/p&gt;<br />  &lt;/body&gt;<br />&lt;/html&gt;<br /></span><span class="keyword">EOF;<br /><br /></span><span class="comment">// This one works perfectly.<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">, </span><span class="default">LIBXML_DTDLOAD</span><span class="keyword">);<br />print </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="comment">// This one produces a warning.<br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br />print </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />See also: <a href="http://www.php.net/manual/en/libxml.constants.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/libxml.constants.php</a><br /><br />Note that libxml will detect that your DTD is locally available via /etc/xml/catalog. So there is no worry about this causing your DOM loads to make external network requests.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.load&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.load.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="domdocument.load.php" title="load">load</a>
                        </li>
                                                <li class="">
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
