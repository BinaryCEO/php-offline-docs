<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: intval - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.intval.php">
 <link rel="shorturl" href="https://www.php.net/intval">
 <link rel="alternate" href="https://www.php.net/intval" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gettype.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-array.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.intval.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.intval.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.intval.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.intval.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.intval.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.intval.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.intval.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.intval.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.intval.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.intval.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.intval.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the integer value of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: intval - Manual" />
<meta name="twitter:description" content="Get the integer value of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: intval - Manual" />
<meta itemprop="description" content="Get the integer value of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the integer value of a variable" />

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
        <a href="function.is-array.php">
          is_array &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gettype.php">
          &laquo; gettype        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.intval.php' selected="selected">English</option>
            <option value='de/function.intval.php'>German</option>
            <option value='es/function.intval.php'>Spanish</option>
            <option value='fr/function.intval.php'>French</option>
            <option value='it/function.intval.php'>Italian</option>
            <option value='ja/function.intval.php'>Japanese</option>
            <option value='pt_BR/function.intval.php'>Brazilian Portuguese</option>
            <option value='ru/function.intval.php'>Russian</option>
            <option value='tr/function.intval.php'>Turkish</option>
            <option value='uk/function.intval.php'>Ukrainian</option>
            <option value='zh/function.intval.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.intval" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">intval</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">intval</span> &mdash; <span class="dc-title">Get the integer value of a variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.intval-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>intval</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$base</code><span class="initializer"> = 10</span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> value of <code class="parameter">value</code>,
   using the specified <code class="parameter">base</code> for the conversion 
   (the default is base 10). <span class="function"><strong>intval()</strong></span> should not be used
   on objects, as doing so will emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level
   error and return 1.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.intval-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The scalar value being converted to an integer
      </p>
     </dd>
    
    
     <dt><code class="parameter">base</code></dt>
     <dd>
      <p class="para">
       The base for the conversion
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">base</code> is 0, the base used is determined
        by the format of <code class="parameter">value</code>:
        <ul class="itemizedlist">
         <li class="listitem">
          <span class="simpara">
           if string includes a &quot;0x&quot; (or &quot;0X&quot;) prefix, the base is taken
           as 16 (hex); otherwise,
          </span>
         </li>
         <li class="listitem">
          <span class="simpara">
           if string starts with a &quot;0b&quot; (or &quot;0B&quot;), the base is taken
           as 2 (binary); otherwise,
          </span>
         </li>
         <li class="listitem">
          <span class="simpara">
           if string starts with &quot;0&quot;, the base is taken as 8 (octal);
           otherwise,
          </span>
         </li>
         <li class="listitem">
          <span class="simpara">
           the base is taken as 10 (decimal).
          </span>
         </li>
        </ul>
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.intval-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The integer value of <code class="parameter">value</code> on success, or 0 on
   failure. Empty arrays return 0, non-empty arrays return 1.
  </p>
  <p class="para">
   The maximum value depends on the system. 32 bit systems have a 
   maximum signed integer range of -2147483648 to 2147483647. So for example 
   on such a system, <code class="literal">intval(&#039;1000000000000&#039;)</code> will return 
   2147483647. The maximum signed integer value for 64 bit systems is 
   9223372036854775807.
  </p>
  <p class="para">
   Strings will most likely return 0 although this depends on the 
   leftmost characters of the string. The common rules of 
   <a href="language.types.integer.php#language.types.integer.casting" class="link">integer casting</a> 
   apply.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.intval-changelog">
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
       The error level when converting from object was changed from <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> to <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.intval-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5645">
    <p><strong>Example #1 <span class="function"><strong>intval()</strong></span> examples</strong></p>
    <div class="example-contents"><p>
     The following examples are based on a 64 bit system.
    </p></div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                      </span><span style="color: #FF8000">// 42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">4.7</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                     </span><span style="color: #FF8000">// 4<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'42'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                    </span><span style="color: #FF8000">// 42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'+42'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                   </span><span style="color: #FF8000">// 42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'-42'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                   </span><span style="color: #FF8000">// -42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">042</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                     </span><span style="color: #FF8000">// 34<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'042'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                   </span><span style="color: #FF8000">// 42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">1e10</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                    </span><span style="color: #FF8000">// 10000000000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'1e10'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                  </span><span style="color: #FF8000">// 10000000000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">0x1A</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                    </span><span style="color: #FF8000">// 26<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'0x1A'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                  </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'0x1A'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;               </span><span style="color: #FF8000">// 26<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">42000000</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                </span><span style="color: #FF8000">// 42000000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">420000000000000000000</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;   </span><span style="color: #FF8000">// -4275113695319687168<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'420000000000000000000'</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// 9223372036854775807<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                   </span><span style="color: #FF8000">// 42<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #DD0000">'42'</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                 </span><span style="color: #FF8000">// 34<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(array()), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                 </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;     </span><span style="color: #FF8000">// 1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                   </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                    </span><span style="color: #FF8000">// 1<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.intval-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <code class="parameter">base</code> parameter has no effect unless the
    <code class="parameter">value</code> parameter is a string.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.intval-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.boolval.php" class="function" rel="rdfs-seeAlso">boolval()</a> - Get the boolean value of a variable</span></li>
    <li><span class="function"><a href="function.floatval.php" class="function" rel="rdfs-seeAlso">floatval()</a> - Get float value of a variable</span></li>
    <li><span class="function"><a href="function.strval.php" class="function" rel="rdfs-seeAlso">strval()</a> - Get string value of a variable</span></li>
    <li><span class="function"><a href="function.settype.php" class="function" rel="rdfs-seeAlso">settype()</a> - Set the type of a variable</span></li>
    <li><span class="function"><a href="function.is-numeric.php" class="function" rel="rdfs-seeAlso">is_numeric()</a> - Finds whether a variable is a number or a numeric string</span></li>
    <li><a href="language.types.type-juggling.php" class="link">Type juggling</a></li>
    <li><a href="ref.bc.php" class="link">BCMath Arbitrary Precision Mathematics Functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/intval.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.intval%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.intval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.intval.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106478">  <div class="votes">
    <div id="Vu106478">
    <a href="/manual/vote-note.php?id=106478&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106478">
    <a href="/manual/vote-note.php?id=106478&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106478" title="85% like this...">
    367
    </div>
  </div>
  <a href="#106478" class="name">
  <strong class="user"><em>Ken</em></strong></a><a class="genanchor" href="#106478"> &para;</a><div class="date" title="2011-11-11 11:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106478">
<div class="phpcode"><code><span class="html">Not mentioned elsewhere: intval(NULL) also returns 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="120543">  <div class="votes">
    <div id="Vu120543">
    <a href="/manual/vote-note.php?id=120543&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120543">
    <a href="/manual/vote-note.php?id=120543&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120543" title="79% like this...">
    78
    </div>
  </div>
  <a href="#120543" class="name">
  <strong class="user"><em>leon at leonidasjp dot nl</em></strong></a><a class="genanchor" href="#120543"> &para;</a><div class="date" title="2017-01-27 03:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120543">
<div class="phpcode"><code><span class="html">It seems intval is interpreting valid numeric strings differently between PHP 5.6 and 7.0 on one hand, and PHP 7.1 on the other hand.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">'1e5'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will return 1 on PHP 5.6 and PHP 7.0,<br />but it will return 100000 on PHP 7.1.</span></code></div>
  </div>
 </div>
  <div class="note" id="101439">  <div class="votes">
    <div id="Vu101439">
    <a href="/manual/vote-note.php?id=101439&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101439">
    <a href="/manual/vote-note.php?id=101439&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101439" title="70% like this...">
    155
    </div>
  </div>
  <a href="#101439" class="name">
  <strong class="user"><em>winbill at hotmail dot com</em></strong></a><a class="genanchor" href="#101439"> &para;</a><div class="date" title="2010-12-16 08:31"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101439">
<div class="phpcode"><code><span class="html">Be careful :<br /><br /><span class="default">&lt;?php<br />$n</span><span class="keyword">=</span><span class="string">"19.99"</span><span class="keyword">;<br />print </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">); </span><span class="comment">// prints 1998<br /></span><span class="keyword">print </span><span class="default">intval</span><span class="keyword">(</span><span class="default">strval</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">)); </span><span class="comment">// prints 1999<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="7707">  <div class="votes">
    <div id="Vu7707">
    <a href="/manual/vote-note.php?id=7707&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7707">
    <a href="/manual/vote-note.php?id=7707&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7707" title="72% like this...">
    53
    </div>
  </div>
  <a href="#7707" class="name">
  <strong class="user"><em>zak at php dot net</em></strong></a><a class="genanchor" href="#7707"> &para;</a><div class="date" title="2000-08-12 01:38"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7707">
<div class="phpcode"><code><span class="html">intval converts doubles to integers by truncating the fractional component of the number.
<br />
<br />When dealing with some values, this can give odd results.  Consider the following:
<br />
<br />print intval ((0.1 + 0.7) * 10);
<br />
<br />This will most likely print out 7, instead of the expected value of 8.
<br />
<br />For more information, see the section on floating point numbers in the PHP manual (<a href="http://www.php.net/manual/language.types.double.php" rel="nofollow" target="_blank">http://www.php.net/manual/language.types.double.php</a>)
<br />
<br />Also note that if you try to convert a string to an integer, the result is often 0.
<br />
<br />However, if the leftmost character of a string looks like a valid numeric value, then PHP will keep reading the string until a character that is not valid in a number is encountered.
<br />
<br />For example:
<br />
<br />"101 Dalmations" will convert to 101
<br />
<br />"$1,000,000" will convert to 0 (the 1st character is not a valid start for a number
<br />
<br />"80,000 leagues ..." will convert to 80
<br />
<br />"1.4e98 microLenats were generated when..." will convert to 1.4e98
<br />
<br />Also note that only decimal base numbers are recognized in strings.
<br />
<br />"099" will convert to 99, while "0x99" will convert to 0.
<br />
<br />One additional note on the behavior of intval.  If you specify the base argument, the var argument should be a string - otherwise the base will not be applied.
<br />
<br />For Example:
<br />
<br />print intval (77, 8);   // Prints 77
<br />print intval ('77', 8); // Prints 63</span></code></div>
  </div>
 </div>
  <div class="note" id="60793">  <div class="votes">
    <div id="Vu60793">
    <a href="/manual/vote-note.php?id=60793&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60793">
    <a href="/manual/vote-note.php?id=60793&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60793" title="70% like this...">
    38
    </div>
  </div>
  <a href="#60793" class="name">
  <strong class="user"><em>Ben Laurienti</em></strong></a><a class="genanchor" href="#60793"> &para;</a><div class="date" title="2006-01-16 01:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60793">
<div class="phpcode"><code><span class="html">You guys are going to love this.  I found something that I found quite disturbing.<br /><br />$test1 = intVal(1999);<br /><br />$amount = 19.99 * 100;<br />$test2 = intVal($amount);<br />$test3 = intVal("$amount");<br /><br />echo $test1 . "&lt;br /&gt;\n";<br />echo $test2 . "&lt;br /&gt;\n";<br />echo $test3 . "&lt;br /&gt;\n";<br /><br />expected output:<br />1999<br />1999<br />1999<br /><br />actual output<br />1999<br />1998<br />1999<br /><br />Appears to be a floating point issue, but the number 1999 is the only number that I was able to get to do this.  19.99 is the price of many things, and for our purpose we must pass it as 1999 instead of 19.99.</span></code></div>
  </div>
 </div>
  <div class="note" id="91649">  <div class="votes">
    <div id="Vu91649">
    <a href="/manual/vote-note.php?id=91649&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91649">
    <a href="/manual/vote-note.php?id=91649&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91649" title="66% like this...">
    36
    </div>
  </div>
  <a href="#91649" class="name">
  <strong class="user"><em>spoon_reloaded at gmail dot com</em></strong></a><a class="genanchor" href="#91649"> &para;</a><div class="date" title="2009-06-21 10:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91649">
<div class="phpcode"><code><span class="html">Here is a really useful undocumented feature:
<br />
<br />You can have it automatically deduce the base of the number from the prefix of the string using the same syntax as integer literals in PHP ("0x" for hexadecimal, "0" for octal, non-"0" for decimal) by passing a base of 0 to intval():
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">"0x1a"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// hex; prints "26"
<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">"057"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// octal; prints "47"
<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">"42"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">; </span><span class="comment">// decimal; prints "42"
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39681">  <div class="votes">
    <div id="Vu39681">
    <a href="/manual/vote-note.php?id=39681&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39681">
    <a href="/manual/vote-note.php?id=39681&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39681" title="64% like this...">
    11
    </div>
  </div>
  <a href="#39681" class="name">
  <strong class="user"><em>tuxedobob at mac dot com</em></strong></a><a class="genanchor" href="#39681"> &para;</a><div class="date" title="2004-02-07 04:56"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39681">
<div class="phpcode"><code><span class="html">Sometimes intval just won't cut it. For example if you want to use an unsigned 32-bit int and need all 32 bits. Recently, I wrote a little script that took and integer and converted it to an IP address. After realizing I couldn't just mod the whole thing, since the sign bit throws it off (and compensating for that), we ran into a problem where if it was entered into a form, the value somehow wasn't converted to an integer properly, at least not implicitly. The solution for this, and the way I recommend converting a string to an integer, is:<br /><br />$num = $num + 0;<br /><br />and PHP will leave your number alone; it'll just know it's a number. Such is the fun of a loosely-typed language. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="111582">  <div class="votes">
    <div id="Vu111582">
    <a href="/manual/vote-note.php?id=111582&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111582">
    <a href="/manual/vote-note.php?id=111582&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111582" title="62% like this...">
    15
    </div>
  </div>
  <a href="#111582" class="name">
  <strong class="user"><em>espertalhao04 at hotmail dot com</em></strong></a><a class="genanchor" href="#111582"> &para;</a><div class="date" title="2013-03-06 09:58"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111582">
<div class="phpcode"><code><span class="html">if you want to take a number from a string, no matter what it may contain, here is a good solution:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">int</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">){return(int)</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^\-\d]*(\-?\d*).*/'</span><span class="keyword">,</span><span class="string">'$1'</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">);}<br /><br />echo </span><span class="default">int</span><span class="keyword">(</span><span class="string">'j18ugj9hu0gj5hg'</span><span class="keyword">);<br /></span><span class="comment">//output: 18<br /></span><span class="default">?&gt;<br /></span>this example returns an int, so it will follow the int rules, and has support for negative values.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">int</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">){return(</span><span class="default">$a</span><span class="keyword">=</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^\-\d]*(\-?\d*).*/'</span><span class="keyword">,</span><span class="string">'$1'</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">))?</span><span class="default">$a</span><span class="keyword">:</span><span class="string">'0'</span><span class="keyword">;}<br /><br />echo </span><span class="default">int</span><span class="keyword">(</span><span class="string">'j-1809809808908099878758765ugj9hu0gj5hg'</span><span class="keyword">);<br /></span><span class="comment">//output: -1809809808908099878758765<br /></span><span class="default">?&gt;<br /></span><br />this one returns a string with just the numeric value.<br />it also supports negative values.<br /><br />the latter is better when you have a 32 bit system and you want a huge int that is higher than PHP_MAX_INT.</span></code></div>
  </div>
 </div>
  <div class="note" id="122651">  <div class="votes">
    <div id="Vu122651">
    <a href="/manual/vote-note.php?id=122651&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122651">
    <a href="/manual/vote-note.php?id=122651&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122651" title="60% like this...">
    6
    </div>
  </div>
  <a href="#122651" class="name">
  <strong class="user"><em>Anthony</em></strong></a><a class="genanchor" href="#122651"> &para;</a><div class="date" title="2018-04-21 12:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122651">
<div class="phpcode"><code><span class="html">The binary notation is NOT supported until php7.2<br /><span class="default">&lt;?php<br />                         </span><span class="comment">// PHP &lt;7.2 | PHP &gt;=7.2<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="default">0b11</span><span class="keyword">);       </span><span class="comment">//    3     |     3<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(-</span><span class="default">0b11</span><span class="keyword">);      </span><span class="comment">//   -3     |    -3<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">'0b11'</span><span class="keyword">);     </span><span class="comment">//    0     |     0<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">'-0b11'</span><span class="keyword">);    </span><span class="comment">//    0     |     0<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">'0b11'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);  </span><span class="comment">//    0     |     3<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">'-0b11'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="comment">//    0     |    -3<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125013">  <div class="votes">
    <div id="Vu125013">
    <a href="/manual/vote-note.php?id=125013&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125013">
    <a href="/manual/vote-note.php?id=125013&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125013" title="58% like this...">
    5
    </div>
  </div>
  <a href="#125013" class="name">
  <strong class="user"><em>Anony Moose</em></strong></a><a class="genanchor" href="#125013"> &para;</a><div class="date" title="2020-05-15 03:46"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125013">
<div class="phpcode"><code><span class="html">As a warning, do not use this function alone for input validation. <br /><br />Vulnerable example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]) &amp;&amp; </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">){<br />    echo </span><span class="default">$id</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The following requests would pass this filter:<br /><br />/page.php?id=10<br />/page.php?id=10oops<br />/page.php?id=10&lt;script&gt;alert(1)&lt;/script&gt;<br />/page.php?id=1' OR '1'='1<br />/page.php?id[]=&lt;script&gt;alert(1)&lt;/script&gt;<br /><br />Instead use the is_numeric() function for integer validation:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">(</span><span class="string">"10oops"</span><span class="keyword">); </span><span class="comment">// 10<br /></span><span class="keyword">echo </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="string">"10oops"</span><span class="keyword">);  </span><span class="comment">// false<br /></span><span class="default">?&gt;<br /></span><br />Secure example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]) &amp;&amp; </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]) &amp;&amp; </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]) &gt; </span><span class="default">0</span><span class="keyword">){<br />    echo </span><span class="default">$id</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124710">  <div class="votes">
    <div id="Vu124710">
    <a href="/manual/vote-note.php?id=124710&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124710">
    <a href="/manual/vote-note.php?id=124710&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124710" title="55% like this...">
    2
    </div>
  </div>
  <a href="#124710" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124710"> &para;</a><div class="date" title="2020-02-12 05:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124710">
<div class="phpcode"><code><span class="html">PHP 7.2 <br /><br />$test = intval(150.20*100); //15019<br />$test2 = intval(15020); //15020<br />$test3 = intval(15020.0); //15020<br />$test4 = 150.20*100; //15020.0</span></code></div>
  </div>
 </div>
  <div class="note" id="101583">  <div class="votes">
    <div id="Vu101583">
    <a href="/manual/vote-note.php?id=101583&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101583">
    <a href="/manual/vote-note.php?id=101583&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101583" title="55% like this...">
    4
    </div>
  </div>
  <a href="#101583" class="name">
  <strong class="user"><em>yves</em></strong></a><a class="genanchor" href="#101583"> &para;</a><div class="date" title="2010-12-27 08:53"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101583">
<div class="phpcode"><code><span class="html">The behaviour of intval() is interesting when supplying a base, and you better check your intval base-based expressions, as it is counter-intuitive.<br />As the example shows<br /><span class="default">&lt;?php<br />  intval</span><span class="keyword">(</span><span class="string">'42'</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">); </span><span class="comment">// =&gt; 34<br />  </span><span class="default">intval</span><span class="keyword">(</span><span class="default">42</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);   </span><span class="comment">// =&gt; 42 !<br /></span><span class="default">?&gt;<br /></span>PHP considers the 42 as being already an integer, and doesn't apply any conversion. And supplying<br /><span class="default">&lt;?php<br />  intval</span><span class="keyword">(</span><span class="default">49</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);  </span><span class="comment">// =&gt; 49 !<br /></span><span class="default">?&gt;<br /></span>produces no error and no warning.</span></code></div>
  </div>
 </div>
  <div class="note" id="112039">  <div class="votes">
    <div id="Vu112039">
    <a href="/manual/vote-note.php?id=112039&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112039">
    <a href="/manual/vote-note.php?id=112039&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112039" title="54% like this...">
    4
    </div>
  </div>
  <a href="#112039" class="name">
  <strong class="user"><em>pfreet at gmail dot com</em></strong></a><a class="genanchor" href="#112039"> &para;</a><div class="date" title="2013-04-25 05:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112039">
<div class="phpcode"><code><span class="html">Do not use intval() when you really want round(). This is due to how PHP handles precision. <br /><br />echo number_format(8.20*100, 20), "&lt;br /&gt;";<br />echo intval(8.20*100), "&lt;br /&gt;";<br />echo floor(8.20*100), "&lt;br /&gt;";<br />echo round(8.20*100), "&lt;br /&gt;";<br /><br />819.99999999999988631316<br />819 <br />819<br />820</span></code></div>
  </div>
 </div>
  <div class="note" id="117624">  <div class="votes">
    <div id="Vu117624">
    <a href="/manual/vote-note.php?id=117624&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117624">
    <a href="/manual/vote-note.php?id=117624&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117624" title="52% like this...">
    1
    </div>
  </div>
  <a href="#117624" class="name">
  <strong class="user"><em>taylorsarrafian at gmail dot com</em></strong></a><a class="genanchor" href="#117624"> &para;</a><div class="date" title="2015-07-11 04:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117624">
<div class="phpcode"><code><span class="html">beware:<br /><br /><span class="default">&lt;?php<br /><br />   </span><span class="comment">// observe the following<br />   </span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">( </span><span class="default">strval</span><span class="keyword">( -</span><span class="default">0.0001 </span><span class="keyword">) ); </span><span class="comment">// 0<br />   </span><span class="keyword">echo </span><span class="default">intval</span><span class="keyword">( </span><span class="default">strval</span><span class="keyword">( -</span><span class="default">0.00001 </span><span class="keyword">) ); </span><span class="comment">// -1<br /><br />   // this is because<br />   </span><span class="keyword">echo </span><span class="default">strval</span><span class="keyword">( -</span><span class="default">0.0001 </span><span class="keyword">); </span><span class="comment">// -.0001<br />   </span><span class="keyword">echo </span><span class="default">strval</span><span class="keyword">( -</span><span class="default">0.00001 </span><span class="keyword">); </span><span class="comment">// -1.0E-5<br /><br />   // thus beware when using<br />   </span><span class="keyword">function </span><span class="default">trunc2_bad</span><span class="keyword">( </span><span class="default">$n </span><span class="keyword">) {<br />      return </span><span class="default">intval</span><span class="keyword">( </span><span class="default">strval</span><span class="keyword">( </span><span class="default">$n </span><span class="keyword">* </span><span class="default">100 </span><span class="keyword">) / </span><span class="default">100 </span><span class="keyword">);<br />   }<br /><br />   </span><span class="comment">// use this instead<br />   </span><span class="keyword">function </span><span class="default">trunc2_good</span><span class="keyword">( </span><span class="default">$n </span><span class="keyword">) {<br />      return </span><span class="default">intval</span><span class="keyword">( </span><span class="default">floatval</span><span class="keyword">( </span><span class="default">strval</span><span class="keyword">( </span><span class="default">$n </span><span class="keyword">* </span><span class="default">100 </span><span class="keyword">)  ) / </span><span class="default">100 </span><span class="keyword">);<br />   }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62680">  <div class="votes">
    <div id="Vu62680">
    <a href="/manual/vote-note.php?id=62680&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62680">
    <a href="/manual/vote-note.php?id=62680&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62680" title="53% like this...">
    2
    </div>
  </div>
  <a href="#62680" class="name">
  <strong class="user"><em>mkamerma at science dot uva dot nl</em></strong></a><a class="genanchor" href="#62680"> &para;</a><div class="date" title="2006-03-06 11:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62680">
<div class="phpcode"><code><span class="html">As addendum, the "if ($int &gt; 0)" check in the encode function is redundant. It doesn't do anything bad to keep it in since it will always be true when reaching that point, but it's a meaningless conditional this way. It's a remnant from when I tried to write the function in terms of bitshifts, which could lead to negative ints when shifting if the 32nd bit was set (instead of always padding with 0's when using &gt;&gt; it pads with 1's leading to negative ints).</span></code></div>
  </div>
 </div>
  <div class="note" id="129193">  <div class="votes">
    <div id="Vu129193">
    <a href="/manual/vote-note.php?id=129193&amp;page=function.intval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129193">
    <a href="/manual/vote-note.php?id=129193&amp;page=function.intval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129193" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129193" class="name">
  <strong class="user"><em>Denes Kellner</em></strong></a><a class="genanchor" href="#129193"> &para;</a><div class="date" title="2024-01-24 09:28"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129193">
<div class="phpcode"><code><span class="html">Warning: intval() parses scientific notation, like "12.3e7".<br /><br />This comes out of the blue when you use intval() to cut the first integer value from a string; at first glance there's nothing wrong with it, if you have "123.jeff" it will give you 123, but in the rare case of parsing something that has a second segment with a hex number, you can easily run into this. (Let's not start the "why would you parse a string like that" argument.)<br /><br />So if you're not prepared, these results may surprise you:<br /><br />    intval("123.ee-2") - gives you 123<br />    intval("123.e2-e") - gives you 12300<br />    intval("123.a2-e") - gives you 123<br />    intval("123.e-22") - gives you 0<br />    intval("123.e-a2") - gives you 123<br />    intval("123.e-2a") - gives you 1<br />    intval("123.2e2a") - gives you 12320<br />    intval("123.22e2") - gives you 12322<br />    intval("123.22ea") - gives you 123<br /><br />Again, this is somewhat expected behaviour once you know that scientific notation is interpreted by it. But it looks like a less-than-widely known fact and I only faced this issue after 20+ years of php.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.intval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.intval.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="current">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
