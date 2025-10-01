<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_word_count - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-word-count.php">
 <link rel="shorturl" href="https://www.php.net/str-word-count">
 <link rel="alternate" href="https://www.php.net/str-word-count" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-starts-with.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strcasecmp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-word-count.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-word-count.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-word-count.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-word-count.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-word-count.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-word-count.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-word-count.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-word-count.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-word-count.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-word-count.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-word-count.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return information about words used in a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_word_count - Manual" />
<meta name="twitter:description" content="Return information about words used in a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_word_count - Manual" />
<meta itemprop="description" content="Return information about words used in a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return information about words used in a string" />

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
        <a href="function.strcasecmp.php">
          strcasecmp &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-starts-with.php">
          &laquo; str_starts_with        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.str-word-count.php' selected="selected">English</option>
            <option value='de/function.str-word-count.php'>German</option>
            <option value='es/function.str-word-count.php'>Spanish</option>
            <option value='fr/function.str-word-count.php'>French</option>
            <option value='it/function.str-word-count.php'>Italian</option>
            <option value='ja/function.str-word-count.php'>Japanese</option>
            <option value='pt_BR/function.str-word-count.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-word-count.php'>Russian</option>
            <option value='tr/function.str-word-count.php'>Turkish</option>
            <option value='uk/function.str-word-count.php'>Ukrainian</option>
            <option value='zh/function.str-word-count.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-word-count" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_word_count</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_word_count</span> &mdash; <span class="dc-title">
   Return information about words used in a string
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.str-word-count-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_word_count</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$format</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$characters</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span></div>

  <p class="para rdfs-comment">
   Counts the number of words inside <code class="parameter">string</code>. 
   If the optional <code class="parameter">format</code> is not specified, then 
   the return value will be an integer representing the number of words 
   found. In the event the <code class="parameter">format</code> is specified, the return
   value will be an array, content of which is dependent on the 
   <code class="parameter">format</code>. The possible value for the 
   <code class="parameter">format</code> and the resultant outputs are listed below.
  </p>
  <p class="para">
   For the purpose of this function, &#039;word&#039; is defined as a locale dependent
   string containing alphabetic characters, which also may contain, but not start
   with &quot;&#039;&quot; and &quot;-&quot; characters.
   Note that multibyte locales are not supported.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-word-count-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string
      </p>
     </dd>
    
    
     <dt><code class="parameter">format</code></dt>
     <dd>
      <p class="para">
       Specify the return value of this function. The current supported values
       are:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          0 - returns the number of words found
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          1 - returns an array containing all the words found inside the
          <code class="parameter">string</code>
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          2 - returns an associative array, where the key is the numeric
          position of the word inside the <code class="parameter">string</code> and
          the value is the actual word itself
         </span>
        </li> 
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">characters</code></dt>
     <dd>
      <p class="para">
       A list of additional characters which will be considered as &#039;word&#039;
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-word-count-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array or an integer, depending on the
   <code class="parameter">format</code> chosen.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.str-word-count-changelog">
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
      <td>8.0.0</td>
      <td>
       <code class="parameter">characters</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.str-word-count-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5146">
    <p><strong>Example #1 A <span class="function"><strong>str_word_count()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Hello fri3nd, you're<br />       looking          good today!"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">str_word_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">str_word_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">str_word_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'àáãç3'</span><span style="color: #007700">));<br /><br />echo </span><span style="color: #0000BB">str_word_count</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Hello
    [1] =&gt; fri
    [2] =&gt; nd
    [3] =&gt; you&#039;re
    [4] =&gt; looking
    [5] =&gt; good
    [6] =&gt; today
)

Array
(
    [0] =&gt; Hello
    [6] =&gt; fri
    [10] =&gt; nd
    [14] =&gt; you&#039;re
    [29] =&gt; looking
    [46] =&gt; good
    [51] =&gt; today
)

Array
(
    [0] =&gt; Hello
    [1] =&gt; fri3nd
    [2] =&gt; you&#039;re
    [3] =&gt; looking
    [4] =&gt; good
    [5] =&gt; today
)

7</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.str-word-count-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
    <li><span class="function"><a href="function.preg-split.php" class="function" rel="rdfs-seeAlso">preg_split()</a> - Split string by a regular expression</span></li>
    <li><span class="function"><a href="function.count-chars.php" class="function" rel="rdfs-seeAlso">count_chars()</a> - Return information about characters used in a string</span></li>
    <li><span class="function"><a href="function.substr-count.php" class="function" rel="rdfs-seeAlso">substr_count()</a> - Count the number of substring occurrences</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-word-count.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-word-count%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-word-count&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-word-count.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107363">  <div class="votes">
    <div id="Vu107363">
    <a href="/manual/vote-note.php?id=107363&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107363">
    <a href="/manual/vote-note.php?id=107363&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107363" title="71% like this...">
    39
    </div>
  </div>
  <a href="#107363" class="name">
  <strong class="user"><em>cito at wikatu dot com</em></strong></a><a class="genanchor" href="#107363"> &para;</a><div class="date" title="2012-02-03 09:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107363">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/***<br /> * This simple utf-8 word count function (it only counts) <br /> * is a bit faster then the one with preg_match_all<br /> * about 10x slower then the built-in str_word_count<br /> * <br /> * If you need the hyphen or other code points as word-characters<br /> * just put them into the [brackets] like [^\p{L}\p{N}\'\-]<br /> * If the pattern contains utf-8, utf8_encode() the pattern,<br /> * as it is expected to be valid utf-8 (using the u modifier).<br /> **/<br /><br />// Jonny 5's simple word splitter<br /></span><span class="keyword">function </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />  return </span><span class="default">count</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'~[^\p{L}\p{N}\']+~u'</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88741">  <div class="votes">
    <div id="Vu88741">
    <a href="/manual/vote-note.php?id=88741&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88741">
    <a href="/manual/vote-note.php?id=88741&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88741" title="65% like this...">
    17
    </div>
  </div>
  <a href="#88741" class="name">
  <strong class="user"><em>splogamurugan at gmail dot com</em></strong></a><a class="genanchor" href="#88741"> &para;</a><div class="date" title="2009-02-05 02:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88741">
<div class="phpcode"><code><span class="html">We can also specify a range of values for charlist.
<br />
<br /><span class="default">&lt;?php
<br />$str </span><span class="keyword">= </span><span class="string">"Hello fri3nd, you're
<br />       looking          good today! 
<br />       look1234ing"</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">'0..3'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />will give the result as 
<br />
<br />Array ( [0] =&gt; Hello [1] =&gt; fri3nd [2] =&gt; you're [3] =&gt; looking [4] =&gt; good [5] =&gt; today [6] =&gt; look123 [7] =&gt; ing )</span></code></div>
  </div>
 </div>
  <div class="note" id="79699">  <div class="votes">
    <div id="Vu79699">
    <a href="/manual/vote-note.php?id=79699&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79699">
    <a href="/manual/vote-note.php?id=79699&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79699" title="62% like this...">
    2
    </div>
  </div>
  <a href="#79699" class="name">
  <strong class="user"><em>Adeel Khan</em></strong></a><a class="genanchor" href="#79699"> &para;</a><div class="date" title="2007-12-08 08:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79699">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Returns the number of words in a string.<br /> * As far as I have tested, it is very accurate.<br /> * The string can have HTML in it,<br /> * but you should do something like this first:<br /> *<br /> *    $search = array(<br /> *      '@&lt;script[^&gt;]*?&gt;.*?&lt;/script&gt;@si',<br /> *      '@&lt;style[^&gt;]*?&gt;.*?&lt;/style&gt;@siU',<br /> *      '@&lt;![\s\S]*?--[ \t\n\r]*&gt;@'<br /> *    );<br /> *    $html = preg_replace($search, '', $html);<br /> *<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">word_count</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">) {<br /><br />  </span><span class="comment"># strip all html tags<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);<br /><br />  </span><span class="comment"># remove 'words' that don't consist of alphanumerical characters or punctuation<br />  </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">"#[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-|:|\&amp;|@)]+#"</span><span class="keyword">;<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$wc</span><span class="keyword">));<br /><br />  </span><span class="comment"># remove one-letter 'words' that consist only of punctuation<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"#\s*[(\'|\"|\.|\!|\?|;|,|\\|\/|\-|:|\&amp;|@)]\s*#"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$wc</span><span class="keyword">));<br /><br />  </span><span class="comment"># remove superfluous whitespace<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\s\s+/"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$wc</span><span class="keyword">);<br /><br />  </span><span class="comment"># split string into an array of words<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$wc</span><span class="keyword">);<br /><br />  </span><span class="comment"># remove empty elements<br />  </span><span class="default">$wc </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$wc</span><span class="keyword">);<br /><br />  </span><span class="comment"># return the number of words<br />  </span><span class="keyword">return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$wc</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87801">  <div class="votes">
    <div id="Vu87801">
    <a href="/manual/vote-note.php?id=87801&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87801">
    <a href="/manual/vote-note.php?id=87801&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87801" title="54% like this...">
    1
    </div>
  </div>
  <a href="#87801" class="name">
  <strong class="user"><em>manrash at gmail dot com</em></strong></a><a class="genanchor" href="#87801"> &para;</a><div class="date" title="2008-12-22 03:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87801">
<div class="phpcode"><code><span class="html">For spanish speakers a valid character map may be:
<br />
<br /><span class="default">&lt;?php
<br />$characterMap </span><span class="keyword">= </span><span class="string">'áéíóúüñ'</span><span class="keyword">;
<br />
<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$characterMap</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109733">  <div class="votes">
    <div id="Vu109733">
    <a href="/manual/vote-note.php?id=109733&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109733">
    <a href="/manual/vote-note.php?id=109733&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109733" title="51% like this...">
    1
    </div>
  </div>
  <a href="#109733" class="name">
  <strong class="user"><em>uri at speedy dot net</em></strong></a><a class="genanchor" href="#109733"> &para;</a><div class="date" title="2012-08-15 07:08"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109733">
<div class="phpcode"><code><span class="html">Here is a count words function which supports UTF-8 and Hebrew. I tried other functions but they don't work. Notice that in Hebrew, '"' and '\'' can be used in words, so they are not separators. This function is not perfect, I would prefer a function we are using in JavaScript which considers all characters except [a-zA-Zא-ת0-9_\'\"] as separators, but I don't know how to do it in PHP.<br /><br />I removed some of the separators which don't work well with Hebrew ("\x20", "\xA0", "\x0A", "\x0D", "\x09", "\x0B", "\x2E"). I also removed the underline.<br /><br />This is a fix to my previous post on this page - I found out that my function returned an incorrect result for an empty string. I corrected it and I'm also attaching another function - my_strlen.<br /><br /><span class="default">&lt;?php <br /><br /></span><span class="keyword">function </span><span class="default">count_words</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="comment">// Return the number of words in a string.<br />    </span><span class="default">$string</span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;#039;"</span><span class="keyword">, </span><span class="string">"'"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="default">$t</span><span class="keyword">= array(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">"\t"</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">, </span><span class="string">'+'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">','</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">';'</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">, </span><span class="string">'['</span><span class="keyword">, </span><span class="string">']'</span><span class="keyword">, </span><span class="string">'{'</span><span class="keyword">, </span><span class="string">'}'</span><span class="keyword">, </span><span class="string">'('</span><span class="keyword">, </span><span class="string">')'</span><span class="keyword">, </span><span class="string">'&lt;'</span><span class="keyword">, </span><span class="string">'&gt;'</span><span class="keyword">, </span><span class="string">'&amp;'</span><span class="keyword">, </span><span class="string">'%'</span><span class="keyword">, </span><span class="string">'$'</span><span class="keyword">, </span><span class="string">'@'</span><span class="keyword">, </span><span class="string">'#'</span><span class="keyword">, </span><span class="string">'^'</span><span class="keyword">, </span><span class="string">'!'</span><span class="keyword">, </span><span class="string">'?'</span><span class="keyword">, </span><span class="string">'~'</span><span class="keyword">); </span><span class="comment">// separators<br />    </span><span class="default">$string</span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="default">$string</span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\s+/"</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">));<br />    </span><span class="default">$num</span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    if (</span><span class="default">my_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$word_array</span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br />        </span><span class="default">$num</span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$word_array</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$num</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">my_strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) {<br />    </span><span class="comment">// Return mb_strlen with encoding UTF-8.<br />    </span><span class="keyword">return </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="26703">  <div class="votes">
    <div id="Vu26703">
    <a href="/manual/vote-note.php?id=26703&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26703">
    <a href="/manual/vote-note.php?id=26703&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26703" title="52% like this...">
    1
    </div>
  </div>
  <a href="#26703" class="name">
  <strong class="user"><em>brettNOSPAM at olwm dot NO_SPAM dot com</em></strong></a><a class="genanchor" href="#26703"> &para;</a><div class="date" title="2002-11-09 12:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26703">
<div class="phpcode"><code><span class="html">This example may not be pretty, but It proves accurate:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//count words
<br /></span><span class="default">$words_to_count </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">);
<br /></span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">"/[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-\-|:|\&amp;|@)]+/"</span><span class="keyword">;
<br /></span><span class="default">$words_to_count </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$words_to_count</span><span class="keyword">);
<br /></span><span class="default">$words_to_count </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$words_to_count</span><span class="keyword">);
<br /></span><span class="default">$total_words </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$words_to_count</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope I didn't miss any punctuation. ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="122242">  <div class="votes">
    <div id="Vu122242">
    <a href="/manual/vote-note.php?id=122242&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122242">
    <a href="/manual/vote-note.php?id=122242&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122242" title="50% like this...">
    0
    </div>
  </div>
  <a href="#122242" class="name">
  <strong class="user"><em>php dot net at salagir dot com</em></strong></a><a class="genanchor" href="#122242"> &para;</a><div class="date" title="2018-01-08 04:09"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122242">
<div class="phpcode"><code><span class="html">This function doesn't handle  accents, even in a locale with accent.<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="string">"Is working"</span><span class="keyword">); </span><span class="comment">// =2<br /><br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'fr_FR.utf8'</span><span class="keyword">);<br />echo </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="string">"Not wôrking"</span><span class="keyword">); </span><span class="comment">// expects 2, got 3.<br /></span><span class="default">?&gt;<br /></span><br />Cito solution treats punctuation as words and thus isn't a good workaround.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />      return </span><span class="default">count</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'~[^\p{L}\p{N}\']+~u'</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">));<br />}<br />echo </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="string">"Is wôrking"</span><span class="keyword">); </span><span class="comment">//=2<br /></span><span class="keyword">echo </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="string">"Not wôrking."</span><span class="keyword">); </span><span class="comment">//=3<br /></span><span class="default">?&gt;<br /></span><br />My solution:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\W+/u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />}<br />echo </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="string">"Is wôrking"</span><span class="keyword">); </span><span class="comment">// = 2<br /></span><span class="keyword">echo </span><span class="default">str_word_count_utf8</span><span class="keyword">(</span><span class="string">"Is wôrking! :)"</span><span class="keyword">); </span><span class="comment">// = 2<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100468">  <div class="votes">
    <div id="Vu100468">
    <a href="/manual/vote-note.php?id=100468&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100468">
    <a href="/manual/vote-note.php?id=100468&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100468" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100468" class="name">
  <strong class="user"><em>dmVuY2lAc3RyYWhvdG5pLmNvbQ== (base64)</em></strong></a><a class="genanchor" href="#100468"> &para;</a><div class="date" title="2010-10-18 04:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100468">
<div class="phpcode"><code><span class="html">to count words after converting a msword document to plain text with antiword, you can use this function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">count_words</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">), </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">); </span><span class="comment">// remove these chars (you can specify more)<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/\s+/'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">)); </span><span class="comment">// remove extra spaces<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/-{2,}/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">); </span><span class="comment">// remove 2 or more dashes in a row<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    <br />    if (</span><span class="default">0 </span><span class="keyword">=== </span><span class="default">$len</span><span class="keyword">) {<br />        return </span><span class="default">0</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$words </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    <br />    while (</span><span class="default">$len</span><span class="keyword">--) {<br />        if (</span><span class="string">' ' </span><span class="keyword">=== </span><span class="default">$text</span><span class="keyword">[</span><span class="default">$len</span><span class="keyword">]) {<br />            ++</span><span class="default">$words</span><span class="keyword">;<br />        }<br />    }<br />    <br />    return </span><span class="default">$words</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />it strips the pipe "|" chars, which antiword uses to format tables in its plain text output, removes more than one dashes in a row (also used in tables), then counts the words.<br /><br />counting words using explode() and then count() is not a good idea for huge texts, because it uses much memory to store the text once more as an array. this is why i'm using while() { .. } to walk the string</span></code></div>
  </div>
 </div>
  <div class="note" id="96192">  <div class="votes">
    <div id="Vu96192">
    <a href="/manual/vote-note.php?id=96192&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96192">
    <a href="/manual/vote-note.php?id=96192&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96192" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96192" class="name">
  <strong class="user"><em>brettz9 - see yahoo</em></strong></a><a class="genanchor" href="#96192"> &para;</a><div class="date" title="2010-02-12 11:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96192">
<div class="phpcode"><code><span class="html">Words also cannot end in a hyphen unless allowed by the charlist...</span></code></div>
  </div>
 </div>
  <div class="note" id="92556">  <div class="votes">
    <div id="Vu92556">
    <a href="/manual/vote-note.php?id=92556&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92556">
    <a href="/manual/vote-note.php?id=92556&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92556" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92556" class="name">
  <strong class="user"><em>charliefrancis at gmail dot com</em></strong></a><a class="genanchor" href="#92556"> &para;</a><div class="date" title="2009-07-29 04:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92556">
<div class="phpcode"><code><span class="html">Hi this is the first time I have posted on the php manual, I hope some of you will like this little function I wrote.<br /><br />It returns a string with a certain character limit, but still retaining whole words.<br />It breaks out of the foreach loop once it has found a string short enough to display, and the character list can be edited.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">word_limiter</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">$limit </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">, </span><span class="default">$chars </span><span class="keyword">= </span><span class="string">'0123456789' </span><span class="keyword">) {<br />    if( </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$text </span><span class="keyword">) &gt; </span><span class="default">$limit </span><span class="keyword">) {<br />        </span><span class="default">$words </span><span class="keyword">= </span><span class="default">str_word_count</span><span class="keyword">( </span><span class="default">$text</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">$chars </span><span class="keyword">);<br />        </span><span class="default">$words </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">$words</span><span class="keyword">, </span><span class="default">TRUE </span><span class="keyword">);<br />        foreach( </span><span class="default">$words </span><span class="keyword">as </span><span class="default">$length </span><span class="keyword">=&gt; </span><span class="default">$word </span><span class="keyword">) {<br />            if( </span><span class="default">$length </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$word </span><span class="keyword">) &gt;= </span><span class="default">$limit </span><span class="keyword">) {<br />                </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$words </span><span class="keyword">);<br />            } else {<br />                break;<br />            }<br />        }<br />        </span><span class="default">$words </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">$words </span><span class="keyword">);<br />        </span><span class="default">$text </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">( </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$words </span><span class="keyword">) . </span><span class="string">'&amp;hellip;'</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$text</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"Hello this is a list of words that is too long"</span><span class="keyword">;<br />echo </span><span class="string">'1: ' </span><span class="keyword">. </span><span class="default">word_limiter</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">);<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"Hello this is a list of words"</span><span class="keyword">;<br />echo </span><span class="string">'2: ' </span><span class="keyword">. </span><span class="default">word_limiter</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />1: Hello this is a list of words&amp;hellip;<br />2: Hello this is a list of words</span></code></div>
  </div>
 </div>
  <div class="note" id="55865">  <div class="votes">
    <div id="Vu55865">
    <a href="/manual/vote-note.php?id=55865&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55865">
    <a href="/manual/vote-note.php?id=55865&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55865" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55865" class="name">
  <strong class="user"><em>MadCoder</em></strong></a><a class="genanchor" href="#55865"> &para;</a><div class="date" title="2005-08-15 09:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55865">
<div class="phpcode"><code><span class="html">Here's a function that will trim a $string down to a certian number of words, and add a...   on the end of it.
<br />(explansion of muz1's 1st 100 words code)
<br />
<br />----------------------------------------------
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">trim_text</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">){
<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"  "</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);
<br />for ( </span><span class="default">$wordCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$wordCounter </span><span class="keyword">&lt;= </span><span class="default">$count</span><span class="keyword">;</span><span class="default">wordCounter</span><span class="keyword">++ ){ 
<br /></span><span class="default">$trimed </span><span class="keyword">.= </span><span class="default">$string</span><span class="keyword">[</span><span class="default">$wordCounter</span><span class="keyword">];
<br />if ( </span><span class="default">$wordCounter </span><span class="keyword">&lt; </span><span class="default">$count </span><span class="keyword">){ </span><span class="default">$trimed </span><span class="keyword">.= </span><span class="string">" "</span><span class="keyword">; }
<br />else { </span><span class="default">$trimed </span><span class="keyword">.= </span><span class="string">"..."</span><span class="keyword">; }
<br />}
<br /></span><span class="default">$trimed </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$trimed</span><span class="keyword">);
<br />return </span><span class="default">$trimed</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Usage
<br />------------------------------------------------
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">"one two three four"</span><span class="keyword">;
<br />echo </span><span class="default">trim_text</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />returns:
<br />one two three...</span></code></div>
  </div>
 </div>
  <div class="note" id="28541">  <div class="votes">
    <div id="Vu28541">
    <a href="/manual/vote-note.php?id=28541&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28541">
    <a href="/manual/vote-note.php?id=28541&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28541" title="50% like this...">
    0
    </div>
  </div>
  <a href="#28541" class="name">
  <strong class="user"><em>rcATinterfacesDOTfr</em></strong></a><a class="genanchor" href="#28541"> &para;</a><div class="date" title="2003-01-16 07:58"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28541">
<div class="phpcode"><code><span class="html">Here is another way to count words :<br />$word_count = count(preg_split('/\W+/', $text, -1, PREG_SPLIT_NO_EMPTY));</span></code></div>
  </div>
 </div>
  <div class="note" id="49092">  <div class="votes">
    <div id="Vu49092">
    <a href="/manual/vote-note.php?id=49092&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49092">
    <a href="/manual/vote-note.php?id=49092&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49092" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#49092" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#49092"> &para;</a><div class="date" title="2005-01-16 06:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49092">
<div class="phpcode"><code><span class="html">This function seems to view numbers as whitespace. I.e. a word consisting of numbers only won't be counted.</span></code></div>
  </div>
 </div>
  <div class="note" id="107082">  <div class="votes">
    <div id="Vu107082">
    <a href="/manual/vote-note.php?id=107082&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107082">
    <a href="/manual/vote-note.php?id=107082&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107082" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#107082" class="name">
  <strong class="user"><em>Samer Ata</em></strong></a><a class="genanchor" href="#107082"> &para;</a><div class="date" title="2012-01-05 09:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107082">
<div class="phpcode"><code><span class="html">This is my own version of to get SEO meta description from wordpress post content. it is also generic usage function to get the first n words from a string.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_meta_description</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$n</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">)<br />{<br /></span><span class="default">$text</span><span class="keyword">=</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);  </span><span class="comment">// not neccssary for none HTML<br />// $text=strip_shortcodes($text); // uncomment only inside wordpress system<br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\s+/"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">));<br /></span><span class="default">$word_array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">);<br />if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$word_array</span><span class="keyword">) &lt;= </span><span class="default">$n</span><span class="keyword">)<br />return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$word_array</span><span class="keyword">);<br />else<br />{<br /></span><span class="default">$text</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />foreach (</span><span class="default">$word_array </span><span class="keyword">as </span><span class="default">$length</span><span class="keyword">=&gt;</span><span class="default">$word</span><span class="keyword">)<br />{<br />    </span><span class="default">$text</span><span class="keyword">.=</span><span class="default">$word </span><span class="keyword">;<br />    if(</span><span class="default">$length</span><span class="keyword">==</span><span class="default">$n</span><span class="keyword">) break;<br />    else </span><span class="default">$text</span><span class="keyword">.=</span><span class="string">" "</span><span class="keyword">;<br />}<br />}<br />return </span><span class="default">$text</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90267">  <div class="votes">
    <div id="Vu90267">
    <a href="/manual/vote-note.php?id=90267&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90267">
    <a href="/manual/vote-note.php?id=90267&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90267" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#90267" class="name">
  <strong class="user"><em>jazz090</em></strong></a><a class="genanchor" href="#90267"> &para;</a><div class="date" title="2009-04-13 10:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90267">
<div class="phpcode"><code><span class="html">Personally, I dont like using this function becuase the characters it omits are sometime nessesery for instance MS Word counts "&gt;" or "&lt;" alone as single word where this function doesnt. I like using this however, it counts EVERYTHING:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">num_words</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){
<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/\S+/"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);
<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31012">  <div class="votes">
    <div id="Vu31012">
    <a href="/manual/vote-note.php?id=31012&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31012">
    <a href="/manual/vote-note.php?id=31012&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31012" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#31012" class="name">
  <strong class="user"><em>philip at cornado dot com</em></strong></a><a class="genanchor" href="#31012"> &para;</a><div class="date" title="2003-04-06 07:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31012">
<div class="phpcode"><code><span class="html">Some ask not just split on ' ', well, it's because simply exploding on a ' ' isn't fully accurate.  Words can be separated by tabs, newlines, double spaces, etc.  This is why people tend to seperate on all whitespace with regular expressions.</span></code></div>
  </div>
 </div>
  <div class="note" id="73604">  <div class="votes">
    <div id="Vu73604">
    <a href="/manual/vote-note.php?id=73604&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73604">
    <a href="/manual/vote-note.php?id=73604&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73604" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#73604" class="name">
  <strong class="user"><em>joshua dot blake at gmail dot com</em></strong></a><a class="genanchor" href="#73604"> &para;</a><div class="date" title="2007-03-02 05:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73604">
<div class="phpcode"><code><span class="html">I needed a function which would extract the first hundred words out of a given input while retaining all markup such as line breaks, double spaces and the like. Most of the regexp based functions posted above were accurate in that they counted out a hundred words, but recombined the paragraph by imploding an array down to a string. This did away with any such hopes of line breaks, and thus I devised a crude but very accurate function which does all that I ask it to:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">Truncate</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$numWords</span><span class="keyword">) 
<br />{
<br />  if(</span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">)&gt;</span><span class="default">$numWords</span><span class="keyword">)
<br />  {
<br />    </span><span class="default">$WordKey </span><span class="keyword">= </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />    </span><span class="default">$PosKey </span><span class="keyword">= </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$PosKey</span><span class="keyword">);
<br />    foreach(</span><span class="default">$WordKey </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$value</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$value</span><span class="keyword">=</span><span class="default">key</span><span class="keyword">(</span><span class="default">$PosKey</span><span class="keyword">);
<br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$PosKey</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$WordKey</span><span class="keyword">[</span><span class="default">$numWords</span><span class="keyword">]);
<br />  }
<br />  else {return </span><span class="default">$input</span><span class="keyword">;}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The idea behind it? Go through the keys of the arrays returned by str_word_count and associate the number of each word with its character position in the phrase. Then use substr to return everything up until the nth character. I have tested this function on rather large entries and it seems to be efficient enough that it does not bog down at all.
<br />
<br />Cheers!
<br />
<br />Josh</span></code></div>
  </div>
 </div>
  <div class="note" id="73577">  <div class="votes">
    <div id="Vu73577">
    <a href="/manual/vote-note.php?id=73577&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73577">
    <a href="/manual/vote-note.php?id=73577&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73577" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#73577" class="name">
  <strong class="user"><em>josh at joshblake.net</em></strong></a><a class="genanchor" href="#73577"> &para;</a><div class="date" title="2007-03-01 03:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73577">
<div class="phpcode"><code><span class="html">I was interested in a function which returned the first few words out of a larger string.
<br />
<br />In reality, I wanted a preview of the first hundred words of a blog entry which was well over that.
<br />
<br />I found all of the other functions which explode and implode strings to arrays lost key markups such as line breaks etc.
<br />
<br />So, this is what I came up with:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">WordTruncate</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$numWords</span><span class="keyword">) {
<br />if(</span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">)&gt;</span><span class="default">$numWords</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$WordKey </span><span class="keyword">= </span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);
<br />    </span><span class="default">$WordIndex </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">str_word_count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">));
<br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$WordIndex</span><span class="keyword">[</span><span class="default">$WordKey</span><span class="keyword">[</span><span class="default">$numWords</span><span class="keyword">]]);
<br />}
<br />else {return </span><span class="default">$input</span><span class="keyword">;}
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />While I haven't counted per se, it's accurate enough for my needs. It will also return the entire string if it's less than the specified number of words.
<br />
<br />The idea behind it? Use str_word_count to identify the nth word, then use str_word_count to identify the position of that word within the string, then use substr to extract up to that position.
<br />
<br />Josh.</span></code></div>
  </div>
 </div>
  <div class="note" id="103294">  <div class="votes">
    <div id="Vu103294">
    <a href="/manual/vote-note.php?id=103294&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103294">
    <a href="/manual/vote-note.php?id=103294&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103294" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#103294" class="name">
  <strong class="user"><em>matthewkastor at live dot com</em></strong></a><a class="genanchor" href="#103294"> &para;</a><div class="date" title="2011-04-05 07:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103294">
<div class="phpcode"><code><span class="html">This needs improvement, but works well as is.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Generates an alphabetical index of unique words, and a count of their occurrences, in a file.<br /> * <br /> * This works on html pages or plain text files.<br /> * This function uses file_get_contents, so it <br /> * is possible to use a url instead of a local filename.<br /> * <br /> * Change the search pattern at <br /> * &lt;code&gt; $junk = preg_match('/[^a-zA-Z]/', $word); &lt;/code&gt;<br /> * if you want to keep words with numbers or other characters. The pattern<br /> * I've set searches for anything that is not an upper or lowercase letter,<br /> * you may want something else.<br /> * <br /> * The array returned will look something like this:<br /> * &lt;code&gt;<br /> * Array<br /> * (<br /> *     [0] =&gt; Array<br /> *        (<br /> *            [word] =&gt; a<br /> *            [count] =&gt; 21<br /> *        )<br /> * <br /> *     [1] =&gt; Array<br /> *        (<br /> *            [word] =&gt; ability<br /> *            [count] =&gt; 1<br /> *        )<br /> * )<br /> * &lt;/code&gt;<br /> * <br /> * @param string $file The file ( or url ) you want to create an index from.<br /> * @return array <br /> */<br /></span><span class="keyword">function </span><span class="default">index_page</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$index </span><span class="keyword">= array();<br />    </span><span class="default">$find </span><span class="keyword">= array(<br />        </span><span class="string">'/\r/'</span><span class="keyword">,<br />        </span><span class="string">'/\n/'</span><span class="keyword">,<br />        </span><span class="string">'/\s\s+/'<br />    </span><span class="keyword">);<br />    </span><span class="default">$replace </span><span class="keyword">= array(<br />        </span><span class="string">' '</span><span class="keyword">,<br />        </span><span class="string">' '</span><span class="keyword">,<br />        </span><span class="string">' '<br />    </span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[&gt;][&lt;]/'</span><span class="keyword">, </span><span class="string">'&gt; &lt;'</span><span class="keyword">, </span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$find</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$work </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">natcasesort</span><span class="keyword">(</span><span class="default">$work</span><span class="keyword">);<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach(</span><span class="default">$work </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="default">$word </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">);<br />        </span><span class="default">$junk </span><span class="keyword">= </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[^a-zA-Z]/'</span><span class="keyword">, </span><span class="default">$word</span><span class="keyword">);<br />        if(</span><span class="default">$junk </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="default">$word </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        }<br />        if( (!empty(</span><span class="default">$word</span><span class="keyword">)) &amp;&amp; (</span><span class="default">$word </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) ) {<br />            if(!isset(</span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'word'</span><span class="keyword">])) { </span><span class="comment">// if not set this is a new index<br />                </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'word'</span><span class="keyword">] = </span><span class="default">$word</span><span class="keyword">;<br />                </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />            } elseif( </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'word'</span><span class="keyword">] == </span><span class="default">$word </span><span class="keyword">) {  </span><span class="comment">// count repeats<br />                </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] += </span><span class="default">1</span><span class="keyword">;<br />            } else { </span><span class="comment">// else this is a different word, increment $i and create an entry<br />                </span><span class="default">$i</span><span class="keyword">++;<br />                </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'word'</span><span class="keyword">] = </span><span class="default">$word</span><span class="keyword">;<br />                </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    unset(</span><span class="default">$work</span><span class="keyword">);<br />    return(</span><span class="default">$index</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />example usage:<br /><br /><span class="default">&lt;?php<br />$file </span><span class="keyword">= </span><span class="string">'<a href="http://www.php.net/" rel="nofollow" target="_blank">http://www.php.net/</a>'</span><span class="keyword">;<br /></span><span class="comment">// or use a local file, see file_get_contents() for valid filenames and restrictions.<br /><br /></span><span class="default">$index </span><span class="keyword">= </span><span class="default">index_page</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$index</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47377">  <div class="votes">
    <div id="Vu47377">
    <a href="/manual/vote-note.php?id=47377&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47377">
    <a href="/manual/vote-note.php?id=47377&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47377" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#47377" class="name">
  <strong class="user"><em>aix at lux dot ee</em></strong></a><a class="genanchor" href="#47377"> &para;</a><div class="date" title="2004-11-14 02:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47377">
<div class="phpcode"><code><span class="html">One function.<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'word_count'</span><span class="keyword">)) {<br />function </span><span class="default">word_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$n </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">){<br />    </span><span class="default">$m</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)/</span><span class="default">2</span><span class="keyword">;<br />    </span><span class="default">$a</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />    while (</span><span class="default">$a</span><span class="keyword">&lt;</span><span class="default">$m</span><span class="keyword">) {<br />        </span><span class="default">$str</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"  "</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$a</span><span class="keyword">++;<br />        }<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br />    foreach (</span><span class="default">$b </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />    if (</span><span class="default">$n</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">) return </span><span class="default">$b</span><span class="keyword">;<br />    else  return </span><span class="default">$i</span><span class="keyword">;<br /><br />    }<br />}<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="string">"Tere Tartu linn"</span><span class="keyword">;<br /></span><span class="default">$c  </span><span class="keyword">= </span><span class="default">word_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// it return an array<br /></span><span class="default">$d  </span><span class="keyword">= </span><span class="default">word_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// it return int - how many words was in text<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />echo </span><span class="default">$d</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72710">  <div class="votes">
    <div id="Vu72710">
    <a href="/manual/vote-note.php?id=72710&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72710">
    <a href="/manual/vote-note.php?id=72710&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72710" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#72710" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#72710"> &para;</a><div class="date" title="2007-01-30 08:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72710">
<div class="phpcode"><code><span class="html">Here is a php work counting function together with a javascript version which will print the same result.<br /><br /><span class="default">&lt;?php<br />      </span><span class="comment">//Php word counting function<br />      </span><span class="keyword">function </span><span class="default">word_count</span><span class="keyword">(</span><span class="default">$theString</span><span class="keyword">)<br />      {<br />        </span><span class="default">$char_count </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$theString</span><span class="keyword">);<br />        </span><span class="default">$fullStr </span><span class="keyword">= </span><span class="default">$theString</span><span class="keyword">.</span><span class="string">" "</span><span class="keyword">;<br />        </span><span class="default">$initial_whitespace_rExp </span><span class="keyword">= </span><span class="string">"^[[:alnum:]]$"</span><span class="keyword">;<br />        <br />        </span><span class="default">$left_trimmedStr </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="default">$initial_whitespace_rExp</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$fullStr</span><span class="keyword">);<br />        </span><span class="default">$non_alphanumerics_rExp </span><span class="keyword">= </span><span class="string">"^[[:alnum:]]$"</span><span class="keyword">;<br />        </span><span class="default">$cleanedStr </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="default">$non_alphanumerics_rExp</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$left_trimmedStr</span><span class="keyword">);<br />        </span><span class="default">$splitString </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$cleanedStr</span><span class="keyword">);<br />        <br />        </span><span class="default">$word_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$splitString</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br />        <br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fullStr</span><span class="keyword">)&lt;</span><span class="default">2</span><span class="keyword">)<br />        {<br />          </span><span class="default">$word_count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        }      <br />        return </span><span class="default">$word_count</span><span class="keyword">;<br />      }<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br />      </span><span class="comment">//Function to count words in a phrase<br />      </span><span class="keyword">function </span><span class="default">wordCount</span><span class="keyword">(</span><span class="default">theString</span><span class="keyword">)<br />      {<br />        var </span><span class="default">char_count </span><span class="keyword">= </span><span class="default">theString</span><span class="keyword">.</span><span class="default">length</span><span class="keyword">;<br />        var </span><span class="default">fullStr </span><span class="keyword">= </span><span class="default">theString </span><span class="keyword">+ </span><span class="string">" "</span><span class="keyword">;<br />        var </span><span class="default">initial_whitespace_rExp </span><span class="keyword">= /^[^</span><span class="default">A</span><span class="keyword">-</span><span class="default">Za</span><span class="keyword">-</span><span class="default">z0</span><span class="keyword">-</span><span class="default">9</span><span class="keyword">]+/</span><span class="default">gi</span><span class="keyword">;<br />        var </span><span class="default">left_trimmedStr </span><span class="keyword">= </span><span class="default">fullStr</span><span class="keyword">.</span><span class="default">replace</span><span class="keyword">(</span><span class="default">initial_whitespace_rExp</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br />        var </span><span class="default">non_alphanumerics_rExp </span><span class="keyword">= </span><span class="default">rExp </span><span class="keyword">= /[^</span><span class="default">A</span><span class="keyword">-</span><span class="default">Za</span><span class="keyword">-</span><span class="default">z0</span><span class="keyword">-</span><span class="default">9</span><span class="keyword">]+/</span><span class="default">gi</span><span class="keyword">;<br />        var </span><span class="default">cleanedStr </span><span class="keyword">= </span><span class="default">left_trimmedStr</span><span class="keyword">.</span><span class="default">replace</span><span class="keyword">(</span><span class="default">non_alphanumerics_rExp</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">);<br />        var </span><span class="default">splitString </span><span class="keyword">= </span><span class="default">cleanedStr</span><span class="keyword">.</span><span class="default">split</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">);<br />        <br />        var </span><span class="default">word_count </span><span class="keyword">= </span><span class="default">splitString</span><span class="keyword">.</span><span class="default">length </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        <br />        if (</span><span class="default">fullStr</span><span class="keyword">.</span><span class="default">length </span><span class="keyword">&lt;</span><span class="default">2</span><span class="keyword">) <br />        {<br />          </span><span class="default">word_count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }      <br />        return </span><span class="default">word_count</span><span class="keyword">;<br />      }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117500">  <div class="votes">
    <div id="Vu117500">
    <a href="/manual/vote-note.php?id=117500&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117500">
    <a href="/manual/vote-note.php?id=117500&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117500" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#117500" class="name">
  <strong class="user"><em>broncha at rajesharma dot com</em></strong></a><a class="genanchor" href="#117500"> &para;</a><div class="date" title="2015-06-19 07:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117500">
<div class="phpcode"><code><span class="html">Turns out the charlist is set by default for the web. For example, the string<br /><br />Copyright &amp;copy; ABC Ltd.<br /><br />is 3 words in the cli and 4 words if executing in web context.</span></code></div>
  </div>
 </div>
  <div class="note" id="40119">  <div class="votes">
    <div id="Vu40119">
    <a href="/manual/vote-note.php?id=40119&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40119">
    <a href="/manual/vote-note.php?id=40119&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40119" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#40119" class="name">
  <strong class="user"><em>Kirils Solovjovs</em></strong></a><a class="genanchor" href="#40119"> &para;</a><div class="date" title="2004-02-22 09:06"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40119">
<div class="phpcode"><code><span class="html">Nothing of this worked for me. I think countwords() is very encoding dependent. This is the code for win1257. For other layots you just need to redefine the ranges of letters...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">countwords</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">){<br />        </span><span class="default">$ls</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="comment">//was it a whitespace?<br />        </span><span class="default">$cc33</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="comment">//counter<br />        </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){<br />                </span><span class="default">$spstat</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">; </span><span class="comment">//is it a number or a letter?<br />                </span><span class="default">$ot</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                if( ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">48</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">57</span><span class="keyword">)) ||  ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">97</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">122</span><span class="keyword">)) || ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">65</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">90</span><span class="keyword">)) || (</span><span class="default">$ot</span><span class="keyword">==</span><span class="default">170</span><span class="keyword">) ||<br />                ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">192</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">214</span><span class="keyword">)) || ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">216</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">246</span><span class="keyword">)) || ((</span><span class="default">$ot</span><span class="keyword">&gt;=</span><span class="default">248</span><span class="keyword">) &amp;&amp; (</span><span class="default">$ot</span><span class="keyword">&lt;=</span><span class="default">254</span><span class="keyword">))  )</span><span class="default">$spstat</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">;<br />                if((</span><span class="default">$ls</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)&amp;&amp;(</span><span class="default">$spstat</span><span class="keyword">)){<br />                        </span><span class="default">$ls</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />                        </span><span class="default">$cc33</span><span class="keyword">++;<br />                }<br />                if(!</span><span class="default">$spstat</span><span class="keyword">)</span><span class="default">$ls</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$cc33</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="36567">  <div class="votes">
    <div id="Vu36567">
    <a href="/manual/vote-note.php?id=36567&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36567">
    <a href="/manual/vote-note.php?id=36567&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36567" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#36567" class="name">
  <strong class="user"><em>Artimis</em></strong></a><a class="genanchor" href="#36567"> &para;</a><div class="date" title="2003-10-15 02:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36567">
<div class="phpcode"><code><span class="html">Never use this function to count/separate alphanumeric words, it will just split them up words to words, numbers to numbers.  You could refer to another function "preg_split" when splitting alphanumeric words.  It works with Chinese characters as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="68971">  <div class="votes">
    <div id="Vu68971">
    <a href="/manual/vote-note.php?id=68971&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68971">
    <a href="/manual/vote-note.php?id=68971&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68971" title="22% like this...">
    -5
    </div>
  </div>
  <a href="#68971" class="name">
  <strong class="user"><em>lwright at psu dot edu</em></strong></a><a class="genanchor" href="#68971"> &para;</a><div class="date" title="2006-08-17 11:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68971">
<div class="phpcode"><code><span class="html">If you are looking to count the frequency of words, try:<br /><br /><span class="default">&lt;?php<br /><br />$wordfrequency </span><span class="keyword">= </span><span class="default">array_count_values</span><span class="keyword">( </span><span class="default">str_word_count</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32160">  <div class="votes">
    <div id="Vu32160">
    <a href="/manual/vote-note.php?id=32160&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32160">
    <a href="/manual/vote-note.php?id=32160&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32160" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#32160" class="name">
  <strong class="user"><em>andrea at 3site dot it</em></strong></a><a class="genanchor" href="#32160"> &para;</a><div class="date" title="2003-05-19 04:55"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32160">
<div class="phpcode"><code><span class="html">if string doesn't contain the space " ", the explode method doesn't do anything, so i've wrote this and it seems works better ... i don't know about time and resource
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">str_incounter</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">) {
<br /></span><span class="default">$count_match </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) {
<br />if(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">)))==</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">)) {
<br /></span><span class="default">$count_match</span><span class="keyword">++;
<br />}
<br />}
<br />return </span><span class="default">$count_match</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />example 
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">"something:something!!something"</span><span class="keyword">;
<br /></span><span class="default">$count_some </span><span class="keyword">= </span><span class="default">str_incounter</span><span class="keyword">(</span><span class="string">"something"</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="comment">// will return 3
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88113">  <div class="votes">
    <div id="Vu88113">
    <a href="/manual/vote-note.php?id=88113&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88113">
    <a href="/manual/vote-note.php?id=88113&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88113" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#88113" class="name">
  <strong class="user"><em>eanimator at yahoo dot com</em></strong></a><a class="genanchor" href="#88113"> &para;</a><div class="date" title="2009-01-11 12:37"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88113">
<div class="phpcode"><code><span class="html">My quick and rough wordLimiter function.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">WordLimiter</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$limit</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">){
<br />    </span><span class="default">$explode </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);
<br />    </span><span class="default">$string  </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        
<br />    </span><span class="default">$dots </span><span class="keyword">= </span><span class="string">'...'</span><span class="keyword">;
<br />    if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$explode</span><span class="keyword">) &lt;= </span><span class="default">$limit</span><span class="keyword">){
<br />        </span><span class="default">$dots </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    }
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$limit</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){
<br />        </span><span class="default">$string </span><span class="keyword">.= </span><span class="default">$explode</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">" "</span><span class="keyword">;
<br />    }
<br />        
<br />    return </span><span class="default">$string</span><span class="keyword">.</span><span class="default">$dots</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125856">  <div class="votes">
    <div id="Vu125856">
    <a href="/manual/vote-note.php?id=125856&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125856">
    <a href="/manual/vote-note.php?id=125856&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125856" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#125856" class="name">
  <strong class="user"><em>amosbatto at yahoo dot com</em></strong></a><a class="genanchor" href="#125856"> &para;</a><div class="date" title="2021-02-23 03:26"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125856">
<div class="phpcode"><code><span class="html">//To get an accurate word count in English, some diacritical marks have <br />// to be added for words like née, Chloë, naïve, coöpt, façade, piñata, etc.  <br />$count = str_word_count($str, 0, 'éëïöçñÉËÏÖÇÑ');<br /><br />//To get the word count for any European language using a Roman alphabet:<br />$count = str_word_count($str, 0, 'äëïöüÄËÏÖÜáǽćéíĺńóŕśúźÁǼĆÉÍĹŃÓŔŚÚŹ'.<br />   'àèìòùÀÈÌÒÙãẽĩõñũÃẼĨÕÑŨâêîôûÂÊÎÔÛăĕğĭŏœ̆ŭĂĔĞĬŎŒ̆Ŭ'.<br />   'āēīōūĀĒĪŌŪőűŐŰąęįųĄĘĮŲåůÅŮæÆøØýÝÿŸþÞẞßđĐıIœŒ'.<br />   'čďěľňřšťžČĎĚĽŇŘŠŤŽƒƑðÐłŁçģķļșțÇĢĶĻȘȚħĦċėġżĊĖĠŻʒƷǯǮŋŊŧŦ');</span></code></div>
  </div>
 </div>
  <div class="note" id="125451">  <div class="votes">
    <div id="Vu125451">
    <a href="/manual/vote-note.php?id=125451&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125451">
    <a href="/manual/vote-note.php?id=125451&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125451" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#125451" class="name">
  <strong class="user"><em>dev dot vegera at gmail dot com</em></strong></a><a class="genanchor" href="#125451"> &para;</a><div class="date" title="2020-10-22 08:16"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125451">
<div class="phpcode"><code><span class="html">preg_match_all based function to mimic str_word_count behavior:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_word_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$format </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">, </span><span class="default">$charlist </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {<br />  if (</span><span class="default">$format </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$format </span><span class="keyword">&gt; </span><span class="default">2</span><span class="keyword">) {<br />    throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">'Argument #2 ($format) must be a valid format value'</span><span class="keyword">);<br />  }<br />  </span><span class="default">$count </span><span class="keyword">= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'#[\p{L}\p{N}][\p{L}\p{N}\'' </span><span class="keyword">. </span><span class="default">$charlist </span><span class="keyword">. </span><span class="string">']*#u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">$format </span><span class="keyword">=== </span><span class="default">2 </span><span class="keyword">? </span><span class="default">PREG_OFFSET_CAPTURE </span><span class="keyword">: </span><span class="default">PREG_PATTERN_ORDER</span><span class="keyword">);<br />  if (</span><span class="default">$format </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />    return </span><span class="default">$count</span><span class="keyword">;<br />  }<br />  </span><span class="default">$matches </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ?? [];<br />  if (</span><span class="default">$format </span><span class="keyword">=== </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="default">$result </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match</span><span class="keyword">) {<br />      </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$match</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] = </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />  }<br />  return </span><span class="default">$matches</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43573">  <div class="votes">
    <div id="Vu43573">
    <a href="/manual/vote-note.php?id=43573&amp;page=function.str-word-count&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43573">
    <a href="/manual/vote-note.php?id=43573&amp;page=function.str-word-count&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43573" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#43573" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#43573"> &para;</a><div class="date" title="2004-06-26 03:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43573">
<div class="phpcode"><code><span class="html">This functionality is now implemented in the PEAR package PHP_Compat.<br /><br />More information about using this function without upgrading your version of PHP can be found on the below link:<br /><br /><a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-word-count&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-word-count.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="current">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
