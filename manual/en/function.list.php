<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: list - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.list.php">
 <link rel="shorturl" href="https://www.php.net/list">
 <link rel="alternate" href="https://www.php.net/list" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ksort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.natcasesort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.list.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.list.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.list.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.list.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.list.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.list.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.list.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.list.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.list.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.list.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.list.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Assign variables as if they were an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: list - Manual" />
<meta name="twitter:description" content="Assign variables as if they were an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: list - Manual" />
<meta itemprop="description" content="Assign variables as if they were an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Assign variables as if they were an array" />

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
        <a href="function.natcasesort.php">
          natcasesort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ksort.php">
          &laquo; ksort        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.list.php' selected="selected">English</option>
            <option value='de/function.list.php'>German</option>
            <option value='es/function.list.php'>Spanish</option>
            <option value='fr/function.list.php'>French</option>
            <option value='it/function.list.php'>Italian</option>
            <option value='ja/function.list.php'>Japanese</option>
            <option value='pt_BR/function.list.php'>Brazilian Portuguese</option>
            <option value='ru/function.list.php'>Russian</option>
            <option value='tr/function.list.php'>Turkish</option>
            <option value='uk/function.list.php'>Ukrainian</option>
            <option value='zh/function.list.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.list" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">list</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">list</span> &mdash; <span class="dc-title">Assign variables as if they were an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.list-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>list</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">...$vars</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Like <span class="function"><a href="function.array.php" class="function">array()</a></span>, this is not really a function,
   but a language construct. <span class="function"><strong>list()</strong></span> is used to
   assign a list of variables in one operation.
   Only arrays and objects that implement <a href="class.arrayaccess.php" class="link">ArrayAccess</a> can be unpacked.
   <span class="function"><strong>list()</strong></span> expressions can not be completely empty.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Before PHP 7.1.0, <span class="function"><strong>list()</strong></span> only worked on numerical arrays and assumes
    the numerical indices start at 0.
   </p>
  </p></blockquote>
  <p class="para">
   As of PHP 7.1.0, <span class="function"><strong>list()</strong></span> can also contain explicit keys, allowing for the
   destructuring of arrays with non-integer or non-sequential keys. For more details on
   array destructuring, see the <a href="language.types.array.php#language.types.array.syntax.destructuring" class="link">array destructuring section</a>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Attempting to access an array key which has not been defined is
    the same as accessing any other undefined variable:
    an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>-level error message
    (<strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>-level prior to PHP 8.0.0) will be
    issued, and the result will be <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   </p>
   <p class="para">
    Attempting to unpack a scalar assigns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to all variables.
    Attempting to unpack an object that does not implement ArrayAccess is a fatal error.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.list-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       A variable.
      </p>
     </dd>
    
   </dl>
   <dl>
    
     <dt><code class="parameter">vars</code></dt>
     <dd>
      <p class="para">
       Further variables.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.list-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the assigned array.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-function.list-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.3.0</td>
       <td>
        Support for reference assignments in array destructuring was added.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        It is now possible to specify keys in <span class="function"><strong>list()</strong></span>. This
        enables destructuring of arrays with non-integer or non-sequential keys.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.list-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5313">
    <p><strong>Example #1 <span class="function"><strong>list()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$info </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'coffee'</span><span style="color: #007700">, </span><span style="color: #DD0000">'brown'</span><span style="color: #007700">, </span><span style="color: #DD0000">'caffeine'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Listing all the variables<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$drink</span><span style="color: #007700">, </span><span style="color: #0000BB">$color</span><span style="color: #007700">, </span><span style="color: #0000BB">$power</span><span style="color: #007700">) = </span><span style="color: #0000BB">$info</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$drink</span><span style="color: #DD0000"> is </span><span style="color: #0000BB">$color</span><span style="color: #DD0000"> and </span><span style="color: #0000BB">$power</span><span style="color: #DD0000"> makes it special.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Listing some of them<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$drink</span><span style="color: #007700">, , </span><span style="color: #0000BB">$power</span><span style="color: #007700">) = </span><span style="color: #0000BB">$info</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$drink</span><span style="color: #DD0000"> has </span><span style="color: #0000BB">$power</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Or let's skip to only the third one<br /></span><span style="color: #007700">list( , , </span><span style="color: #0000BB">$power</span><span style="color: #007700">) = </span><span style="color: #0000BB">$info</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"I need </span><span style="color: #0000BB">$power</span><span style="color: #DD0000">!\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// list() doesn't work with strings<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">) = </span><span style="color: #DD0000">"abcde"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$bar</span><span style="color: #007700">); </span><span style="color: #FF8000">// NULL<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5314">
    <p><strong>Example #2 An example use of <span class="function"><strong>list()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-non-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, name FROM employees"</span><span style="color: #007700">);<br />while (list(</span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">) = </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"id: </span><span style="color: #0000BB">$id</span><span style="color: #DD0000">, name: </span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5315">
    <p><strong>Example #3 Using nested <span class="function"><strong>list()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, list(</span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">)) = array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, array(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">int(1)
int(2)
int(3)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   The order in which the indices of the array to be consumed by
   <span class="function"><strong>list()</strong></span> are defined is irrelevant.
  </p>
  <p class="para">
   <div class="example" id="example-5316">
    <p><strong>Example #4 <span class="function"><strong>list()</strong></span> and order of index definitions</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$foo </span><span style="color: #007700">= array(</span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'c'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #DD0000">'d'</span><span style="color: #007700">;<br />list(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$z</span><span style="color: #007700">) = </span><span style="color: #0000BB">$foo</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, </span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$z</span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Gives the following output (note the order of the elements compared in
     which order they were written in the <span class="function"><strong>list()</strong></span> syntax):
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(4) {
  [2]=&gt;
  string(1) &quot;a&quot;
  [&quot;foo&quot;]=&gt;
  string(1) &quot;b&quot;
  [0]=&gt;
  string(1) &quot;c&quot;
  [1]=&gt;
  string(1) &quot;d&quot;
}
string(1) &quot;c&quot;
string(1) &quot;d&quot;
string(1) &quot;a&quot;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5317">
    <p><strong>Example #5 <span class="function"><strong>list()</strong></span> with keys</strong></p>
    <div class="example-contents"><p>
     As of PHP 7.1.0 <span class="function"><strong>list()</strong></span> can now also contain
     explicit keys, which can be given as arbitrary expressions.
     Mixing of integer and string keys is allowed; however, elements
     with and without keys cannot be mixed.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= [<br />    [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Tom'</span><span style="color: #007700">],<br />    [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Fred'</span><span style="color: #007700">],<br />];<br />foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as [</span><span style="color: #DD0000">"id" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$name</span><span style="color: #007700">]) {<br />    echo </span><span style="color: #DD0000">"id: </span><span style="color: #0000BB">$id</span><span style="color: #DD0000">, name: </span><span style="color: #0000BB">$name</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />list(</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$second</span><span style="color: #007700">, </span><span style="color: #0000BB">3 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$fourth</span><span style="color: #007700">) = [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br />echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$second</span><span style="color: #DD0000">, </span><span style="color: #0000BB">$fourth</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">id: 1, name: Tom
id: 2, name: Fred

2, 4</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.list-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.each.php" class="function" rel="rdfs-seeAlso">each()</a> - Return the current key and value pair from an array and advance the array cursor</span></li>
    <li><span class="function"><a href="function.array.php" class="function" rel="rdfs-seeAlso">array()</a> - Create an array</span></li>
    <li><span class="function"><a href="function.extract.php" class="function" rel="rdfs-seeAlso">extract()</a> - Import variables into the current symbol table from an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/list.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.list%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.list&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.list.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120463">  <div class="votes">
    <div id="Vu120463">
    <a href="/manual/vote-note.php?id=120463&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120463">
    <a href="/manual/vote-note.php?id=120463&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120463" title="79% like this...">
    149
    </div>
  </div>
  <a href="#120463" class="name">
  <strong class="user"><em>carlosv775 at gmail dot com</em></strong></a><a class="genanchor" href="#120463"> &para;</a><div class="date" title="2017-01-12 08:30"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120463">
<div class="phpcode"><code><span class="html">In PHP 7.1 we can do the following:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">] = [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />Before, we had to do:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">list(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">) = [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">,  </span><span class="string">'c'</span><span class="keyword">];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121094">  <div class="votes">
    <div id="Vu121094">
    <a href="/manual/vote-note.php?id=121094&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121094">
    <a href="/manual/vote-note.php?id=121094&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121094" title="74% like this...">
    140
    </div>
  </div>
  <a href="#121094" class="name">
  <strong class="user"><em>Rhamnia Mohamed</em></strong></a><a class="genanchor" href="#121094"> &para;</a><div class="date" title="2017-05-17 11:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121094">
<div class="phpcode"><code><span class="html">Since PHP 7.1, keys can be specified<br /><br />exemple : <br /><span class="default">&lt;?php <br />$array </span><span class="keyword">= [</span><span class="string">'locality' </span><span class="keyword">=&gt; </span><span class="string">'Tunis'</span><span class="keyword">, </span><span class="string">'postal_code' </span><span class="keyword">=&gt; </span><span class="string">'1110'</span><span class="keyword">];<br /><br />list(</span><span class="string">'postal_code' </span><span class="keyword">=&gt; </span><span class="default">$zipCode</span><span class="keyword">, </span><span class="string">'locality' </span><span class="keyword">=&gt; </span><span class="default">$locality</span><span class="keyword">) = </span><span class="default">$array</span><span class="keyword">;<br /><br />print </span><span class="default">$zipCode</span><span class="keyword">; </span><span class="comment">// will output 1110<br /></span><span class="keyword">print </span><span class="default">$locality</span><span class="keyword">; </span><span class="comment">// will output Tunis<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129920">  <div class="votes">
    <div id="Vu129920">
    <a href="/manual/vote-note.php?id=129920&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129920">
    <a href="/manual/vote-note.php?id=129920&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129920" title="100% like this...">
    4
    </div>
  </div>
  <a href="#129920" class="name">
  <strong class="user"><em>xmgr2 at protonmail dot com</em></strong></a><a class="genanchor" href="#129920"> &para;</a><div class="date" title="2024-12-18 08:15"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129920">
<div class="phpcode"><code><span class="html">... and it also supports pushing items onto arrays.<br /><br />I couldn't find any official documentation on this behavior, but it appears that you can "push" elements onto arrays directly using array destructuring assignments.<br /><br /><span class="default">&lt;?php<br />$users </span><span class="keyword">= [<br />    [</span><span class="default">1</span><span class="keyword">, </span><span class="string">'Alice'</span><span class="keyword">, </span><span class="string">'alice@example.com'</span><span class="keyword">, </span><span class="string">'secret123'</span><span class="keyword">],<br />    [</span><span class="default">2</span><span class="keyword">, </span><span class="string">'Bob'</span><span class="keyword">, </span><span class="string">'bob@example.com'</span><span class="keyword">, </span><span class="string">'pass456'</span><span class="keyword">],<br />    [</span><span class="default">3</span><span class="keyword">, </span><span class="string">'Charlie'</span><span class="keyword">, </span><span class="string">'charlie@example.com'</span><span class="keyword">, </span><span class="string">'hunter678'</span><span class="keyword">],<br />];<br /><br /></span><span class="default">$ids       </span><span class="keyword">= [];<br /></span><span class="default">$names     </span><span class="keyword">= [];<br /></span><span class="default">$emails    </span><span class="keyword">= [];<br /></span><span class="default">$passwords </span><span class="keyword">= [];<br /><br />foreach (</span><span class="default">$users </span><span class="keyword">as </span><span class="default">$user</span><span class="keyword">) {<br />    [</span><span class="default">$ids</span><span class="keyword">[], </span><span class="default">$names</span><span class="keyword">[], </span><span class="default">$emails</span><span class="keyword">[], </span><span class="default">$passwords</span><span class="keyword">[]] = </span><span class="default">$user</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />For well-documented alternatives, consider using array_column(), which does quite the same:<br /><br /><span class="default">&lt;?php<br />$ids       </span><span class="keyword">= </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$users</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$names     </span><span class="keyword">= </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$users</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$emails    </span><span class="keyword">= </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$users</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$passwords </span><span class="keyword">= </span><span class="default">array_column</span><span class="keyword">(</span><span class="default">$users</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115975">  <div class="votes">
    <div id="Vu115975">
    <a href="/manual/vote-note.php?id=115975&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115975">
    <a href="/manual/vote-note.php?id=115975&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115975" title="73% like this...">
    100
    </div>
  </div>
  <a href="#115975" class="name">
  <strong class="user"><em>grzeniufication</em></strong></a><a class="genanchor" href="#115975"> &para;</a><div class="date" title="2014-10-21 10:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115975">
<div class="phpcode"><code><span class="html">The example showing that:<br /><br />$info = array('kawa', 'brązowa', 'kofeina');<br />list($a[0], $a[1], $a[2]) = $info;<br />var_dump($a);<br /><br />outputs:<br />array(3) {<br />[2]=&gt;<br />string(8) "kofeina"<br />[1]=&gt;<br />string(5) "brązowa"<br />[0]=&gt;<br />string(6) "kawa"<br />}<br /><br />One thing to note here is that if you define the array earlier, e.g.:<br />$a = [0, 0, 0];<br /><br />the indexes will be kept in the correct order:<br /><br />array(3) {<br />  [0]=&gt;<br />  string(4) "kawa"<br />  [1]=&gt;<br />  string(8) "brązowa"<br />  [2]=&gt;<br />  string(7) "kofeina"<br />}<br /><br />Thought that it was worth mentioning.</span></code></div>
  </div>
 </div>
  <div class="note" id="113189">  <div class="votes">
    <div id="Vu113189">
    <a href="/manual/vote-note.php?id=113189&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113189">
    <a href="/manual/vote-note.php?id=113189&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113189" title="69% like this...">
    77
    </div>
  </div>
  <a href="#113189" class="name">
  <strong class="user"><em>megan at voices dot com</em></strong></a><a class="genanchor" href="#113189"> &para;</a><div class="date" title="2013-09-10 03:45"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113189">
<div class="phpcode"><code><span class="html">As noted, list() will give an error if the input array is too short. This can be avoided by array_merge()'ing in some default values. For example:<br /><br /><span class="default">&lt;?php<br />$parameter </span><span class="keyword">= </span><span class="string">'name'</span><span class="keyword">;<br />list( </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">) = </span><span class="default">array_merge</span><span class="keyword">( </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'='</span><span class="keyword">, </span><span class="default">$parameter </span><span class="keyword">), array( </span><span class="default">true </span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span><br />However, you will have to array_merge with an array long enough to ensure there are enough elements (if $parameter is empty, the code above would still error).<br /><br />An alternate approach would be to use array_pad on the array to ensure its length (if all the defaults you need to add are the same).<br /><br /><span class="default">&lt;?php<br />    $parameter </span><span class="keyword">= </span><span class="string">'bob-12345'</span><span class="keyword">;<br />    list( </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">, </span><span class="default">$fav_color</span><span class="keyword">, </span><span class="default">$age </span><span class="keyword">) = </span><span class="default">array_pad</span><span class="keyword">( </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$parameter </span><span class="keyword">), </span><span class="default">4</span><span class="keyword">, </span><span class="string">'' </span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">, </span><span class="default">$fav_color</span><span class="keyword">, </span><span class="default">$age</span><span class="keyword">);<br /></span><span class="comment">/* outputs<br />string(3) "bob"<br />string(5) "12345"<br />string(0) ""<br />string(0) ""<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121139">  <div class="votes">
    <div id="Vu121139">
    <a href="/manual/vote-note.php?id=121139&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121139">
    <a href="/manual/vote-note.php?id=121139&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121139" title="70% like this...">
    56
    </div>
  </div>
  <a href="#121139" class="name">
  <strong class="user"><em>grzeniufication</em></strong></a><a class="genanchor" href="#121139"> &para;</a><div class="date" title="2017-05-27 04:01"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121139">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * It seems you can skip listed values.<br /> * Here's an example to show what I mean.<br /> *<br /> * FYI works just as well with PHP 7.1 shorthand list syntax.<br /> * Tested against PHP 5.6.30, 7.1.5<br /> */<br /></span><span class="default">$a </span><span class="keyword">= [ </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">];<br /><br /></span><span class="comment">// this is quite normal use case for list<br /></span><span class="keyword">echo </span><span class="string">"Unpack all values\n"</span><span class="keyword">;<br />list(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">) = </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$v1</span><span class="string">, </span><span class="default">$v2</span><span class="string">, </span><span class="default">$v3</span><span class="string">, </span><span class="default">$v4</span><span class="string">\n"</span><span class="keyword">;<br />unset(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">);<br /><br /></span><span class="comment">// this is what I mean:<br /></span><span class="keyword">echo </span><span class="string">"Skip middle\n"</span><span class="keyword">;<br />list(</span><span class="default">$v1</span><span class="keyword">, , , </span><span class="default">$v4</span><span class="keyword">) = </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$v1</span><span class="string">, </span><span class="default">$v2</span><span class="string">, </span><span class="default">$v3</span><span class="string">, </span><span class="default">$v4</span><span class="string">\n"</span><span class="keyword">;<br />unset(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">);<br /><br />echo </span><span class="string">"Skip beginning\n"</span><span class="keyword">;<br />list( , , </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">) = </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$v1</span><span class="string">, </span><span class="default">$v2</span><span class="string">, </span><span class="default">$v3</span><span class="string">, </span><span class="default">$v4</span><span class="string">\n"</span><span class="keyword">;<br />unset(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">);<br /><br />echo </span><span class="string">"Skip end\n"</span><span class="keyword">;<br />list(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, , ) = </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$v1</span><span class="string">, </span><span class="default">$v2</span><span class="string">, </span><span class="default">$v3</span><span class="string">, </span><span class="default">$v4</span><span class="string">\n"</span><span class="keyword">;<br />unset(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">);<br /><br />echo </span><span class="string">"Leave middle\n"</span><span class="keyword">;<br />list( , </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, ) = </span><span class="default">$a</span><span class="keyword">;<br />echo </span><span class="string">"</span><span class="default">$v1</span><span class="string">, </span><span class="default">$v2</span><span class="string">, </span><span class="default">$v3</span><span class="string">, </span><span class="default">$v4</span><span class="string">\n"</span><span class="keyword">;<br />unset(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">, </span><span class="default">$v3</span><span class="keyword">, </span><span class="default">$v4</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110563">  <div class="votes">
    <div id="Vu110563">
    <a href="/manual/vote-note.php?id=110563&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110563">
    <a href="/manual/vote-note.php?id=110563&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110563" title="64% like this...">
    77
    </div>
  </div>
  <a href="#110563" class="name">
  <strong class="user"><em>chris at chlab dot ch</em></strong></a><a class="genanchor" href="#110563"> &para;</a><div class="date" title="2012-11-07 03:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110563">
<div class="phpcode"><code><span class="html">The example states the following:<br /><span class="default">&lt;?php<br /></span><span class="comment">// list() doesn't work with strings<br /></span><span class="keyword">list(</span><span class="default">$bar</span><span class="keyword">) = </span><span class="string">"abcde"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$bar</span><span class="keyword">); <br /></span><span class="comment">// output: NULL<br /></span><span class="default">?&gt;<br /></span><br />If the string is in a variable however, it seems using list() will treat the string as an array:<br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">"abcde"</span><span class="keyword">;<br />list(</span><span class="default">$foo</span><span class="keyword">) = </span><span class="default">$string</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">);<br /></span><span class="comment">// output: string(1) "a"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128059">  <div class="votes">
    <div id="Vu128059">
    <a href="/manual/vote-note.php?id=128059&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128059">
    <a href="/manual/vote-note.php?id=128059&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128059" title="78% like this...">
    8
    </div>
  </div>
  <a href="#128059" class="name">
  <strong class="user"><em>nek dot dev at gmail dot com</em></strong></a><a class="genanchor" href="#128059"> &para;</a><div class="date" title="2022-12-27 10:13"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128059">
<div class="phpcode"><code><span class="html">It can be convenient to specify a default value in case an element is missing in the list. You can use operator + for this:<br /><br /><span class="default">&lt;?php<br />$someArray </span><span class="keyword">= [</span><span class="string">'color' </span><span class="keyword">=&gt; </span><span class="string">'orange'</span><span class="keyword">];<br />[</span><span class="string">'color' </span><span class="keyword">=&gt; </span><span class="default">$color</span><span class="keyword">, </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">$size</span><span class="keyword">] = </span><span class="default">$someArray </span><span class="keyword">+ [</span><span class="string">'color' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">, </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />This will avoid the warning `Undefined array key "size"` you would encounter otherwise.</span></code></div>
  </div>
 </div>
  <div class="note" id="118786">  <div class="votes">
    <div id="Vu118786">
    <a href="/manual/vote-note.php?id=118786&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118786">
    <a href="/manual/vote-note.php?id=118786&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118786" title="67% like this...">
    38
    </div>
  </div>
  <a href="#118786" class="name">
  <strong class="user"><em>pemapmodder1970 at gmail dot com</em></strong></a><a class="genanchor" href="#118786"> &para;</a><div class="date" title="2016-02-05 04:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118786">
<div class="phpcode"><code><span class="html">list() can be used with foreach<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [[</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">], [</span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">], [</span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">]];<br /><br />foreach(</span><span class="default">$array </span><span class="keyword">as list(</span><span class="default">$odd</span><span class="keyword">, </span><span class="default">$even</span><span class="keyword">)){<br />    echo </span><span class="string">"</span><span class="default">$odd</span><span class="string"> is odd; </span><span class="default">$even</span><span class="string"> is even"</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The output:<br />===<br />1 is odd; 2 is even<br />3 is odd; 4 is even<br />5 is odd; 6 is even</span></code></div>
  </div>
 </div>
  <div class="note" id="113845">  <div class="votes">
    <div id="Vu113845">
    <a href="/manual/vote-note.php?id=113845&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113845">
    <a href="/manual/vote-note.php?id=113845&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113845" title="71% like this...">
    29
    </div>
  </div>
  <a href="#113845" class="name">
  <strong class="user"><em>john at jbwalker dot com</em></strong></a><a class="genanchor" href="#113845"> &para;</a><div class="date" title="2013-12-08 12:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113845">
<div class="phpcode"><code><span class="html">The list construct seems to look for a sequential list of indexes rather taking elements in sequence. What that obscure statement means is that if you unset an element, list will not simply jump to the next element and assign that to the variable but will treat the missing element as a null or empty variable:<br /><br />    $test = array("a","b","c","d");<br />    unset($test[1]);<br />    list($a,$b,$c)=$test;<br />    print "\$a='$a' \$b='$b' \$c='$c'&lt;BR&gt;";<br /><br />results in:<br />$a='a' $b='' $c='c'<br /><br />not:<br />$a='a' $b='c' $c='d'</span></code></div>
  </div>
 </div>
  <div class="note" id="126208">  <div class="votes">
    <div id="Vu126208">
    <a href="/manual/vote-note.php?id=126208&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126208">
    <a href="/manual/vote-note.php?id=126208&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126208" title="73% like this...">
    9
    </div>
  </div>
  <a href="#126208" class="name">
  <strong class="user"><em>diyor024 at gmail dot com</em></strong></a><a class="genanchor" href="#126208"> &para;</a><div class="date" title="2021-07-01 11:52"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126208">
<div class="phpcode"><code><span class="html">Don't miss simple array pattern matching since php 7<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">] = [</span><span class="string">'hello!'</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// 'hello!'<br /><br /></span><span class="default">$arr </span><span class="keyword">= [</span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="default">50</span><span class="keyword">];<br />[</span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="default">$fifty</span><span class="keyword">] = </span><span class="default">$arr</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$fifty</span><span class="keyword">); </span><span class="comment">// 50<br /><br /></span><span class="default">$multidimensionalArray </span><span class="keyword">= [[</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="default">15</span><span class="keyword">, </span><span class="string">'email' </span><span class="keyword">=&gt; </span><span class="string">'diyor024@gmail.com'</span><span class="keyword">]];<br />[[</span><span class="string">'id'  </span><span class="keyword">=&gt; </span><span class="default">$id</span><span class="keyword">, </span><span class="string">'email' </span><span class="keyword">=&gt; </span><span class="default">$email</span><span class="keyword">]] = </span><span class="default">$multidimensionalArray</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$email</span><span class="keyword">); </span><span class="comment">// 15 diyor024@gmail.com<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124642">  <div class="votes">
    <div id="Vu124642">
    <a href="/manual/vote-note.php?id=124642&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124642">
    <a href="/manual/vote-note.php?id=124642&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124642" title="73% like this...">
    7
    </div>
  </div>
  <a href="#124642" class="name">
  <strong class="user"><em>vike2000 at gmail dot com</em></strong></a><a class="genanchor" href="#124642"> &para;</a><div class="date" title="2020-01-23 03:49"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124642">
<div class="phpcode"><code><span class="html">Setting it like <span class="default">&lt;?php </span><span class="keyword">list(</span><span class="default">$var1</span><span class="keyword">,</span><span class="default">$varN</span><span class="keyword">) = </span><span class="default">null ?&gt;</span> does _not_ raise an E_NOTICE (or other error) and afaics effectively equals an <a href="https://php.net/function.unset" rel="nofollow" target="_blank">https://php.net/function.unset</a> of $var1,$varN.<br /><br />I note this as contrasting with the fact that PHP triggers an E_NOTICE about "Undefined offset" "if there aren't enough array elements to fill the list()", as attow documented for <a href="https://php.net/control-structures.foreach#control-structures.foreach.list" rel="nofollow" target="_blank">https://php.net/control-structures.foreach#control-structures.foreach.list</a> and here only noted in <a href="https://php.net/function.list#122951" rel="nofollow" target="_blank">https://php.net/function.list#122951</a> by Mardaneus.<br /><br />For completeness, a bash(1) (v5.0 or 4.3 on macos10.13) cli test producing the same result for all my PHP-versions (installed via macports.org) follows. It's also tested with php7.3 using bash5.0 on Debian10:<br />bash --noprofile --norc -c 'for php in php{{53..56},{70..73}};do for literal in "array()" null;do echo -n $php …=$literal:&amp;&amp;$php -n -d error_reporting=E_ALL -r "var_dump(list(\$var)=$literal);";done;done'<br /><br /># Above produces the same result pairs per version from:<br />php53 …=array():<br />Notice: Undefined offset: 0 in Command line code on line 1<br />array(0) {<br />}<br /># ... to:<br />php73 …=null:NULL</span></code></div>
  </div>
 </div>
  <div class="note" id="125644">  <div class="votes">
    <div id="Vu125644">
    <a href="/manual/vote-note.php?id=125644&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125644">
    <a href="/manual/vote-note.php?id=125644&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125644" title="72% like this...">
    8
    </div>
  </div>
  <a href="#125644" class="name">
  <strong class="user"><em>mark at manngo dot net</em></strong></a><a class="genanchor" href="#125644"> &para;</a><div class="date" title="2020-12-30 03:46"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125644">
<div class="phpcode"><code><span class="html">For PHP 7.1 on, the documentation states that integer and string keys can be mixed, but that elements with and without keys cannot. Here is an example, using data from getimagesize() with mixed keys:<br /><br /><span class="default">&lt;?php<br />    $data</span><span class="keyword">=[<br />        </span><span class="default">0</span><span class="keyword">=&gt; </span><span class="default">160</span><span class="keyword">,<br />        </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">120</span><span class="keyword">,<br />        </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">,<br />        </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'width="160" height="120"'</span><span class="keyword">,<br />        </span><span class="string">'mime' </span><span class="keyword">=&gt; </span><span class="string">'image/jpeg'<br />    </span><span class="keyword">];<br />    list(</span><span class="default">0</span><span class="keyword">=&gt;</span><span class="default">$width</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">=&gt;</span><span class="default">$height</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">=&gt;</span><span class="default">$type</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">=&gt;</span><span class="default">$dimensions</span><span class="keyword">,</span><span class="string">'mime'</span><span class="keyword">=&gt;</span><span class="default">$mime</span><span class="keyword">)=</span><span class="default">$data</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Here, the numeric keys also need to be specified, as if the whole array is treated as an associative array.<br /><br />As noted elsewhere, the list() operator can be written in array format:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">[</span><span class="default">0</span><span class="keyword">=&gt;</span><span class="default">$width</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">=&gt;</span><span class="default">$height</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">=&gt;</span><span class="default">$type</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">=&gt;</span><span class="default">$dimensions</span><span class="keyword">,</span><span class="string">'mime'</span><span class="keyword">=&gt;</span><span class="default">$mime</span><span class="keyword">]=</span><span class="default">$data</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110921">  <div class="votes">
    <div id="Vu110921">
    <a href="/manual/vote-note.php?id=110921&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110921">
    <a href="/manual/vote-note.php?id=110921&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110921" title="62% like this...">
    47
    </div>
  </div>
  <a href="#110921" class="name">
  <strong class="user"><em>svennd</em></strong></a><a class="genanchor" href="#110921"> &para;</a><div class="date" title="2012-12-23 07:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110921">
<div class="phpcode"><code><span class="html">The list() definition won't throw an error if your array is longer then defined list. <br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">list(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">) = array(</span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"b"</span><span class="keyword">, </span><span class="string">"c"</span><span class="keyword">, </span><span class="string">"d"</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="comment">// a<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">); </span><span class="comment">// b<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">); </span><span class="comment">// c<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125864">  <div class="votes">
    <div id="Vu125864">
    <a href="/manual/vote-note.php?id=125864&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125864">
    <a href="/manual/vote-note.php?id=125864&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125864" title="68% like this...">
    6
    </div>
  </div>
  <a href="#125864" class="name">
  <strong class="user"><em>samraskul at gmail dot com</em></strong></a><a class="genanchor" href="#125864"> &para;</a><div class="date" title="2021-02-27 08:53"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125864">
<div class="phpcode"><code><span class="html">list($a, $b, $c) = ["blue", "money", 32];<br /><br />shortcut:<br /><br />[$a, $b, $c] = ["blue", "money", 32];</span></code></div>
  </div>
 </div>
  <div class="note" id="122615">  <div class="votes">
    <div id="Vu122615">
    <a href="/manual/vote-note.php?id=122615&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122615">
    <a href="/manual/vote-note.php?id=122615&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122615" title="67% like this...">
    11
    </div>
  </div>
  <a href="#122615" class="name">
  <strong class="user"><em>petru at fuxspam dot xtremeweb dot ro</em></strong></a><a class="genanchor" href="#122615"> &para;</a><div class="date" title="2018-04-13 10:11"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122615">
<div class="phpcode"><code><span class="html">This is something I haven't seen in documentation.<br /><br />Since PHP 7.1, you can use short-hand list unpacking using square brackets, just like short-hand array declaration:<br /><br /><span class="default">&lt;?php<br /><br />$foo </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">];<br /><br /></span><span class="comment">// short-hand array definition<br /></span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">] = </span><span class="default">$foo</span><span class="keyword">;<br />echo </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">// displays "a"<br /><br />// it's same like:<br /></span><span class="keyword">list(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">, </span><span class="default">$z</span><span class="keyword">) = </span><span class="default">$foo</span><span class="keyword">;<br />echo </span><span class="default">$x</span><span class="keyword">; </span><span class="comment">// displays "a"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124004">  <div class="votes">
    <div id="Vu124004">
    <a href="/manual/vote-note.php?id=124004&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124004">
    <a href="/manual/vote-note.php?id=124004&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124004" title="60% like this...">
    7
    </div>
  </div>
  <a href="#124004" class="name">
  <strong class="user"><em>Paul Marti</em></strong></a><a class="genanchor" href="#124004"> &para;</a><div class="date" title="2019-07-02 09:45"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124004">
<div class="phpcode"><code><span class="html">Since 7.1.0, you can use an array directly without list():<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">[</span><span class="default">$test</span><span class="keyword">, </span><span class="default">$test2</span><span class="keyword">] = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="string">"hello, world"</span><span class="keyword">);<br />echo </span><span class="default">$test </span><span class="keyword">. </span><span class="default">$test2</span><span class="keyword">; </span><span class="comment">// hello, world<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121586">  <div class="votes">
    <div id="Vu121586">
    <a href="/manual/vote-note.php?id=121586&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121586">
    <a href="/manual/vote-note.php?id=121586&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121586" title="57% like this...">
    7
    </div>
  </div>
  <a href="#121586" class="name">
  <strong class="user"><em>blazej</em></strong></a><a class="genanchor" href="#121586"> &para;</a><div class="date" title="2017-08-31 02:00"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121586">
<div class="phpcode"><code><span class="html">From PHP Version 7.1 you can specify keys in list(), or its new shorthand [] syntax. This enables destructuring of arrays with non-integer or non-sequential keys.<br /><br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= [<br />    [</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">'Tom'</span><span class="keyword">],<br />    [</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">'Fred'</span><span class="keyword">],<br />];<br /><br /></span><span class="comment">// list() style<br /></span><span class="keyword">list(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">$id1</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="default">$name1</span><span class="keyword">) = </span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /><br /></span><span class="comment">// [] style<br /></span><span class="keyword">[</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">$id1</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="default">$name1</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /><br /></span><span class="comment">// list() style<br /></span><span class="keyword">foreach (</span><span class="default">$data </span><span class="keyword">as list(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">$id</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">)) {<br />    </span><span class="comment">// logic here with $id and $name<br /></span><span class="keyword">}<br /><br /></span><span class="comment">// [] style<br /></span><span class="keyword">foreach (</span><span class="default">$data </span><span class="keyword">as [</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">$id</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">]) {<br />    </span><span class="comment">// logic here with $id and $name<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120076">  <div class="votes">
    <div id="Vu120076">
    <a href="/manual/vote-note.php?id=120076&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120076">
    <a href="/manual/vote-note.php?id=120076&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120076" title="55% like this...">
    4
    </div>
  </div>
  <a href="#120076" class="name">
  <strong class="user"><em>anthony dot ossent at live dot fr</em></strong></a><a class="genanchor" href="#120076"> &para;</a><div class="date" title="2016-10-23 03:04"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120076">
<div class="phpcode"><code><span class="html">a simple example of use to swap two variables :<br /><br />$a = 'hello';<br />$b = 'world';<br /><br />list($a, $b) = [$b, $a];<br /><br />echo $a . ' ' . $b; //display "world hello"<br /><br />another example :<br /><br />function getPosition($x, $y, $z)<br />{<br />   // ... some operations like $x++...<br />   return [$x, $y, $z];<br />}<br /><br />list($x, $y, $z) = getPosition($x ,$y, $z);</span></code></div>
  </div>
 </div>
  <div class="note" id="122560">  <div class="votes">
    <div id="Vu122560">
    <a href="/manual/vote-note.php?id=122560&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122560">
    <a href="/manual/vote-note.php?id=122560&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122560" title="54% like this...">
    3
    </div>
  </div>
  <a href="#122560" class="name">
  <strong class="user"><em>contato at tobias dot ws</em></strong></a><a class="genanchor" href="#122560"> &para;</a><div class="date" title="2018-03-28 07:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122560">
<div class="phpcode"><code><span class="html">Since PHP 7.1 the [] may now be used as an alternative to the existing list() syntax:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">[</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">] = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="string">'123|Hello World!'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117677">  <div class="votes">
    <div id="Vu117677">
    <a href="/manual/vote-note.php?id=117677&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117677">
    <a href="/manual/vote-note.php?id=117677&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117677" title="53% like this...">
    3
    </div>
  </div>
  <a href="#117677" class="name">
  <strong class="user"><em>Colin Guthrie</em></strong></a><a class="genanchor" href="#117677"> &para;</a><div class="date" title="2015-07-20 01:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117677">
<div class="phpcode"><code><span class="html">If you want use the undefined behaviour as you might expect it e.g. if you want: <br /><br />  $b = ['a','b']; list($a, $b) = $b;<br /><br />to result in $a=='a' and $b=='b', then you can just cast $b to an array (even although it already is) to create a copy. e.g. <br /><br />  $b = ['a','b']; list($a, $b) = (array)$b;<br /><br />and get the expected results.</span></code></div>
  </div>
 </div>
  <div class="note" id="122951">  <div class="votes">
    <div id="Vu122951">
    <a href="/manual/vote-note.php?id=122951&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122951">
    <a href="/manual/vote-note.php?id=122951&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122951" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122951" class="name">
  <strong class="user"><em>Mardaneus</em></strong></a><a class="genanchor" href="#122951"> &para;</a><div class="date" title="2018-07-17 08:14"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122951">
<div class="phpcode"><code><span class="html">Unless you specify keys when using list() it expects the array being fed into it to start at 0.<br /><br />So having the following code will result in a notice level warning "Undefined offset: 0" and variables not filling as expected<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">list(</span><span class="default">$c1</span><span class="keyword">, </span><span class="default">$c2</span><span class="keyword">, </span><span class="default">$c3</span><span class="keyword">) = array [</span><span class="default">1 </span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'c'</span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">); </span><span class="comment">// NULL<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c2</span><span class="keyword">); </span><span class="comment">// string(1) "a"<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$c3</span><span class="keyword">); </span><span class="comment">// string(1) "b"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118463">  <div class="votes">
    <div id="Vu118463">
    <a href="/manual/vote-note.php?id=118463&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118463">
    <a href="/manual/vote-note.php?id=118463&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118463" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#118463" class="name">
  <strong class="user"><em>Dean</em></strong></a><a class="genanchor" href="#118463"> &para;</a><div class="date" title="2015-12-10 07:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118463">
<div class="phpcode"><code><span class="html">UNDOCUMENTED BEHAVIOR:<br /><br />    list($a,$b,$c) = null;<br /><br />in fact works like:<br /><br />    $a = null; $b = null; $c = null;<br /><br />...So correspondingly:<br /><br />    list($rows[]) = null;<br /><br />Will increment count($rows), just as if you had executed $rows[] = null;<br /><br />Watch out for this (for example) when retrieving entire tables from a database, e.g.<br /><br />    while (list($rows[]) = $mysqlresult-&gt;fetch_row());<br /><br />This will leave an extra 'null' entry as the last element of $rows.</span></code></div>
  </div>
 </div>
  <div class="note" id="124730">  <div class="votes">
    <div id="Vu124730">
    <a href="/manual/vote-note.php?id=124730&amp;page=function.list&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124730">
    <a href="/manual/vote-note.php?id=124730&amp;page=function.list&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124730" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#124730" class="name">
  <strong class="user"><em>fredsaavedra at hotmail dot com</em></strong></a><a class="genanchor" href="#124730"> &para;</a><div class="date" title="2020-02-18 04:03"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124730">
<div class="phpcode"><code><span class="html">Easy way to get actual date and time values in variables.<br /><br />list($day,$month,$year,$hour,$minute,$second) = explode('-',date('d-m-Y-G-i-s'));<br />echo "$day-$month-$year $hour".":".$minute.":".$second;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.list&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.list.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="current">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
