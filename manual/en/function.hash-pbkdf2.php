<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash_pbkdf2 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash-pbkdf2.php">
 <link rel="shorturl" href="https://www.php.net/hash-pbkdf2">
 <link rel="alternate" href="https://www.php.net/hash-pbkdf2" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hash-init.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-update.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash-pbkdf2.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash-pbkdf2.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash-pbkdf2.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash-pbkdf2.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash-pbkdf2.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash-pbkdf2.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash-pbkdf2.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash-pbkdf2.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash-pbkdf2.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash-pbkdf2.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash-pbkdf2.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a PBKDF2 key derivation of a supplied password" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash_pbkdf2 - Manual" />
<meta name="twitter:description" content="Generate a PBKDF2 key derivation of a supplied password" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash_pbkdf2 - Manual" />
<meta itemprop="description" content="Generate a PBKDF2 key derivation of a supplied password" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a PBKDF2 key derivation of a supplied password" />

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
        <a href="function.hash-update.php">
          hash_update &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hash-init.php">
          &laquo; hash_init        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.hash.php'>Hash</a></li>      <li><a href='ref.hash.php'>Hash Functions</a></li>      </ul>
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
            <option value='en/function.hash-pbkdf2.php' selected="selected">English</option>
            <option value='de/function.hash-pbkdf2.php'>German</option>
            <option value='es/function.hash-pbkdf2.php'>Spanish</option>
            <option value='fr/function.hash-pbkdf2.php'>French</option>
            <option value='it/function.hash-pbkdf2.php'>Italian</option>
            <option value='ja/function.hash-pbkdf2.php'>Japanese</option>
            <option value='pt_BR/function.hash-pbkdf2.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash-pbkdf2.php'>Russian</option>
            <option value='tr/function.hash-pbkdf2.php'>Turkish</option>
            <option value='uk/function.hash-pbkdf2.php'>Ukrainian</option>
            <option value='zh/function.hash-pbkdf2.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash-pbkdf2" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash_pbkdf2</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">hash_pbkdf2</span> &mdash; <span class="dc-title">Generate a PBKDF2 key derivation of a supplied password</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.hash-pbkdf2-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash_pbkdf2</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$algo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$salt</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$iterations</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$binary</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.hash-pbkdf2-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">algo</code></dt>
     <dd>
      <p class="para">
       Name of selected hashing algorithm (e.g. <code class="literal">&quot;sha256&quot;</code>).
       For a list of supported algorithms see <span class="function"><a href="function.hash-hmac-algos.php" class="function">hash_hmac_algos()</a></span>.
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Non-cryptographic hash functions are not allowed.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password to use for the derivation.
      </p>
     </dd>
    
    
     <dt><code class="parameter">salt</code></dt>
     <dd>
      <p class="para">
       The salt to use for the derivation. This value should be generated randomly.
      </p>
     </dd>
    
    
     <dt><code class="parameter">iterations</code></dt>
     <dd>
      <p class="para">
       The number of internal iterations to perform for the derivation.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The length of the output string. If <code class="parameter">binary</code>
       is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> this corresponds to the byte-length of the derived key, if
       <code class="parameter">binary</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> this corresponds to twice the
       byte-length of the derived key (as every byte of the key is returned as
       two hexits).
      </p>
      <p class="para">
       If <code class="literal">0</code> is passed, the entire output of the supplied
       algorithm is used.
      </p>
     </dd>
    
    
     <dt><code class="parameter">binary</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, outputs raw binary data. <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> outputs lowercase
       hexits.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array of options for the various hashing algorithms.
       Currently, only the <code class="literal">&quot;seed&quot;</code> key is
       supported by the MurmurHash variants.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-pbkdf2-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the derived key as lowercase hexits unless
   <code class="parameter">binary</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> in which case the raw
   binary representation of the derived key is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.hash-pbkdf2-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception if the algorithm is
   unknown, the <code class="parameter">iterations</code> parameter is less than or
   equal to <code class="literal">0</code>, the <code class="parameter">length</code> is less
   than <code class="literal">0</code> or the <code class="parameter">salt</code> is too long
   (greater than <strong><code>INT_MAX</code></strong><code class="literal"> - 4</code>).
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-pbkdf2-changelog">
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
       <td>8.0.0</td>
       <td>
        Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception on error.
        Previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned and an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
        message was emitted.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.hash-pbkdf2-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-989">
    <p><strong>Example #1 <span class="function"><strong>hash_pbkdf2()</strong></span> example, basic usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$password </span><span style="color: #007700">= </span><span style="color: #DD0000">"password"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$iterations </span><span style="color: #007700">= </span><span style="color: #0000BB">600000</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Generate a cryptographically secure random salt using random_bytes()<br /></span><span style="color: #0000BB">$salt </span><span style="color: #007700">= </span><span style="color: #0000BB">random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">16</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$hash </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_pbkdf2</span><span style="color: #007700">(</span><span style="color: #DD0000">"sha256"</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$salt</span><span style="color: #007700">, </span><span style="color: #0000BB">$iterations</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// for raw binary, the $length needs to be halved for equivalent results<br /></span><span style="color: #0000BB">$hash </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_pbkdf2</span><span style="color: #007700">(</span><span style="color: #DD0000">"sha256"</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$salt</span><span style="color: #007700">, </span><span style="color: #0000BB">$iterations</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">));</span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(20) &quot;120fb6cffcf8b32c43e7&quot;
string(20) &quot;120fb6cffcf8b32c43e7&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.hash-pbkdf2-notes">
  <h3 class="title">Notes</h3>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    The PBKDF2 method can be used for hashing passwords for storage. However, it
    should be noted that <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> or
    <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> with <strong><code><a href="string.constants.php#constant.crypt-blowfish">CRYPT_BLOWFISH</a></code></strong> are
    better suited for password storage.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-pbkdf2-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.password-hash.php" class="function" rel="rdfs-seeAlso">password_hash()</a> - Creates a password hash</span></li>
    <li><span class="function"><a href="function.hash-hkdf.php" class="function" rel="rdfs-seeAlso">hash_hkdf()</a> - Generate a HKDF key derivation of a supplied key input</span></li>
    <li><span class="function"><a href="function.sodium-crypto-pwhash.php" class="function" rel="rdfs-seeAlso">sodium_crypto_pwhash()</a> - Derive a key from a password, using Argon2</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash-pbkdf2.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash-pbkdf2%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash-pbkdf2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-pbkdf2.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119850">  <div class="votes">
    <div id="Vu119850">
    <a href="/manual/vote-note.php?id=119850&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119850">
    <a href="/manual/vote-note.php?id=119850&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119850" title="90% like this...">
    25
    </div>
  </div>
  <a href="#119850" class="name">
  <strong class="user"><em>clarence.pchy(at)gmail.com</em></strong></a><a class="genanchor" href="#119850"> &para;</a><div class="date" title="2016-09-06 08:40"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119850">
<div class="phpcode"><code><span class="html">Please pay great attention to the **$length** parameter! It is exactly the **return string length**, NOT the length of raw binary hash result.<br /><br />I had a big problem about this -- <br />I thought that `hash_pbkdf2(...false)` should equals to `bin2hex(hash_pbkdf2(...true))` just like `md5($x)` equals `bin2hex(md5($x, true))`. However I was wrong:<br /><br />hash_pbkdf2('sha256', '123456', 'abc', 10000, 50, false); // returns string(50) "584bc5b41005169f1fa15177edb78d75f9846afc466a4bae05"<br />hash_pbkdf2('sha256', '123456', 'abc', 10000, 50, true); // returns string(50) "XKŴ��Qw�u��j�FjK���BFW�YpG    �mp.g2�`;N�"<br />bin2hex(hash_pbkdf2('sha256', '123456', 'abc', 10000, 50, true)); // returns string(100) "584bc5b41005169f1fa15177edb78d75f9846afc466a4bae05119c82424657c81b5970471f098a6d702e6732b7603b194efe"<br /><br />So I add such a note. Hope it will help someone else like me.</span></code></div>
  </div>
 </div>
  <div class="note" id="113528">  <div class="votes">
    <div id="Vu113528">
    <a href="/manual/vote-note.php?id=113528&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113528">
    <a href="/manual/vote-note.php?id=113528&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113528" title="81% like this...">
    7
    </div>
  </div>
  <a href="#113528" class="name">
  <strong class="user"><em>does dot not at matter dot org</em></strong></a><a class="genanchor" href="#113528"> &para;</a><div class="date" title="2013-10-25 03:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113528">
<div class="phpcode"><code><span class="html">this snippet was posted over a year ago on a dutch PHP community: (reference/source: <a href="http://www.phphulp.nl/php/script/beveiliging/pbkdf2-een-veilige-manier-om-wachtwoorden-op-te-slaan/1956/pbkdf2php/1757/" rel="nofollow" target="_blank">http://www.phphulp.nl/php/script/beveiliging/pbkdf2-een-veilige-manier-om-wachtwoorden-op-te-slaan/1956/pbkdf2php/1757/</a>)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * @author Chris Horeweg<br /> * @package Security_Tools<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">pbkdf2</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">$algorithm </span><span class="keyword">= </span><span class="string">'sha512'</span><span class="keyword">, </span><span class="default">$count </span><span class="keyword">= </span><span class="default">20000</span><span class="keyword">, </span><span class="default">$key_length </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">, </span><span class="default">$raw_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">hash_algos</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">)) {<br />        exit(</span><span class="string">'pbkdf2: Hash algoritme is niet geinstalleerd op het systeem.'</span><span class="keyword">);<br />    }<br />    <br />    if(</span><span class="default">$count </span><span class="keyword">&lt;= </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$key_length </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">20000</span><span class="keyword">;<br />        </span><span class="default">$key_length </span><span class="keyword">= </span><span class="default">128</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$hash_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    </span><span class="default">$block_count </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$key_length </span><span class="keyword">/ </span><span class="default">$hash_length</span><span class="keyword">);<br /><br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$block_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$salt </span><span class="keyword">. </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"N"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$xorsum </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            </span><span class="default">$xorsum </span><span class="keyword">^= (</span><span class="default">$last </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />        }<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$xorsum</span><span class="keyword">;<br />    }<br /><br />    if(</span><span class="default">$raw_output</span><span class="keyword">) {<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">);<br />    }<br />    else {<br />        return </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">));<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118301">  <div class="votes">
    <div id="Vu118301">
    <a href="/manual/vote-note.php?id=118301&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118301">
    <a href="/manual/vote-note.php?id=118301&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118301" title="78% like this...">
    8
    </div>
  </div>
  <a href="#118301" class="name">
  <strong class="user"><em>Trevor Herselman</em></strong></a><a class="genanchor" href="#118301"> &para;</a><div class="date" title="2015-11-11 01:45"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118301">
<div class="phpcode"><code><span class="html">This is a light-weight drop-in replacement for PHP's hash_pbkdf2(); written for compatibility with older versions of PHP.<br />Written, formatted and tested by myself, but using code and ideas based on the following:<br /><a href="https://defuse.ca/php-pbkdf2.htm" rel="nofollow" target="_blank">https://defuse.ca/php-pbkdf2.htm</a><br /><a href="https://github.com/rchouinard/hash_pbkdf2-compat/blob/master/src/hash_pbkdf2.php" rel="nofollow" target="_blank">https://github.com/rchouinard/hash_pbkdf2-compat/blob/master/src/hash_pbkdf2.php</a><br /><a href="https://gist.github.com/rsky/5104756" rel="nofollow" target="_blank">https://gist.github.com/rsky/5104756</a><br /><br />My main goals:<br />1) Maximum compatibility with PHP hash_pbkdf2(), ie. a drop-in replacement function<br />2) Minimum code size/bloat<br />3) Easy to copy/paste<br />4) No classes, and not encapsulated in a class! Why write a class when a simple function will do?<br />5) Eliminate calls to sprintf(). (used by other examples for the error reporting)<br />6) No other dependencies, ie. extra required functions<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'hash_pbkdf2'</span><span class="keyword">))<br />{<br />    function </span><span class="default">hash_pbkdf2</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$raw_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">), </span><span class="default">hash_algos</span><span class="keyword">())) </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'(): Unknown hashing algorithm: ' </span><span class="keyword">. </span><span class="default">$algo</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">)) </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'(): expects parameter 4 to be long, ' </span><span class="keyword">. </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">) . </span><span class="string">' given'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'(): expects parameter 5 to be long, ' </span><span class="keyword">. </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">) . </span><span class="string">' given'</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        if (</span><span class="default">$count </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'(): Iterations must be a positive integer: ' </span><span class="keyword">. </span><span class="default">$count</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br />        if (</span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">'(): Length must be greater than or equal to 0: ' </span><span class="keyword">. </span><span class="default">$length</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">);<br /><br />        </span><span class="default">$output </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$block_count </span><span class="keyword">= </span><span class="default">$length </span><span class="keyword">? </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">/ </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$raw_output</span><span class="keyword">))) : </span><span class="default">1</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$block_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$xorsum </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$salt </span><span class="keyword">. </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'N'</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">), </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />            for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />            {<br />                </span><span class="default">$xorsum </span><span class="keyword">^= (</span><span class="default">$last </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />            }<br />            </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$xorsum</span><span class="keyword">;<br />        }<br /><br />        if (!</span><span class="default">$raw_output</span><span class="keyword">) </span><span class="default">$output </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">);<br />        return </span><span class="default">$length </span><span class="keyword">? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">) : </span><span class="default">$output</span><span class="keyword">;<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112691">  <div class="votes">
    <div id="Vu112691">
    <a href="/manual/vote-note.php?id=112691&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112691">
    <a href="/manual/vote-note.php?id=112691&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112691" title="73% like this...">
    7
    </div>
  </div>
  <a href="#112691" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112691"> &para;</a><div class="date" title="2013-07-13 04:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112691">
<div class="phpcode"><code><span class="html">Sadly this function was added in PHP 5.5 but many webservers just provide PHP 5.3. But there exists a pure PHP implementation (found here: <a href="https://defuse.ca/php-pbkdf2.htm" rel="nofollow" target="_blank">https://defuse.ca/php-pbkdf2.htm</a>).<br />I took this implementation, put it into a class with comments for PHPDoc and added a switch so that the native PHP function is used if available.<br /><br />Feel free to use it!<br /><a href="http://pastebin.com/f5PDq735" rel="nofollow" target="_blank">http://pastebin.com/f5PDq735</a><br />(Posted on pastebin.com since the text would have been too long)</span></code></div>
  </div>
 </div>
  <div class="note" id="125774">  <div class="votes">
    <div id="Vu125774">
    <a href="/manual/vote-note.php?id=125774&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125774">
    <a href="/manual/vote-note.php?id=125774&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125774" title="75% like this...">
    2
    </div>
  </div>
  <a href="#125774" class="name">
  <strong class="user"><em>php . ober-mail . de</em></strong></a><a class="genanchor" href="#125774"> &para;</a><div class="date" title="2021-02-04 12:56"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125774">
<div class="phpcode"><code><span class="html">If you are wondering what the requirements are for the salt, have a look at the RFC[1]:<br /><br />"The salt parameter should be a random string containing at least 64 bits of entropy. That means when generated from a function like *mcrypt_create_iv*, at least 8 bytes long. But for salts that consist of only *a-zA-Z0-9* (or are base_64 encoded), the minimum length should be at least 11 characters. It should be generated random for each password that's hashed, and stored along side the generated key."<br /><br />[1] <a href="https://wiki.php.net/rfc/hash_pbkdf2" rel="nofollow" target="_blank">https://wiki.php.net/rfc/hash_pbkdf2</a></span></code></div>
  </div>
 </div>
  <div class="note" id="124310">  <div class="votes">
    <div id="Vu124310">
    <a href="/manual/vote-note.php?id=124310&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124310">
    <a href="/manual/vote-note.php?id=124310&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124310" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124310" class="name">
  <strong class="user"><em>Yahe</em></strong></a><a class="genanchor" href="#124310"> &para;</a><div class="date" title="2019-10-19 06:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124310">
<div class="phpcode"><code><span class="html">On an error hash_pbkdf2() will not just raise an E_WARNING but it will also return FALSE.</span></code></div>
  </div>
 </div>
  <div class="note" id="118589">  <div class="votes">
    <div id="Vu118589">
    <a href="/manual/vote-note.php?id=118589&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118589">
    <a href="/manual/vote-note.php?id=118589&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118589" title="66% like this...">
    1
    </div>
  </div>
  <a href="#118589" class="name">
  <strong class="user"><em>nimasdj [AT] yahoo [DOT] com</em></strong></a><a class="genanchor" href="#118589"> &para;</a><div class="date" title="2016-01-05 12:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118589">
<div class="phpcode"><code><span class="html">There is a mistake in the class provided by Binod Kumar Luitel (<a href="http://php.net/manual/en/function.hash-pbkdf2.php#113488" rel="nofollow" target="_blank">http://php.net/manual/en/function.hash-pbkdf2.php#113488</a>):<br />this line:<br />return bin2hex(substr($this-&gt;output, 0, $this-&gt;key_length));<br />must be changed to:<br />return substr(bin2hex($this-&gt;output), 0, $this-&gt;key_length);</span></code></div>
  </div>
 </div>
  <div class="note" id="122264">  <div class="votes">
    <div id="Vu122264">
    <a href="/manual/vote-note.php?id=122264&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122264">
    <a href="/manual/vote-note.php?id=122264&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122264" title="60% like this...">
    1
    </div>
  </div>
  <a href="#122264" class="name">
  <strong class="user"><em>Flimm</em></strong></a><a class="genanchor" href="#122264"> &para;</a><div class="date" title="2018-01-12 04:56"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122264">
<div class="phpcode"><code><span class="html">Note that if $raw_output is false, then the output will be encoded using lowercase hexits. Some other systems (such as Django 2.0) use base64 instead. So if you're trying to generate hash strings that are compatible with those systems, you can use the base64_encode function, like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">base64_encode</span><span class="keyword">( </span><span class="default">hash_pbkdf2</span><span class="keyword">( </span><span class="string">"sha256"</span><span class="keyword">, </span><span class="string">"example password"</span><span class="keyword">, </span><span class="string">"BbirbJq1C1G7"</span><span class="keyword">, </span><span class="default">100000</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124003">  <div class="votes">
    <div id="Vu124003">
    <a href="/manual/vote-note.php?id=124003&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124003">
    <a href="/manual/vote-note.php?id=124003&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124003" title="57% like this...">
    1
    </div>
  </div>
  <a href="#124003" class="name">
  <strong class="user"><em>gfilippakis at sleed dot gr</em></strong></a><a class="genanchor" href="#124003"> &para;</a><div class="date" title="2019-07-02 12:16"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124003">
<div class="phpcode"><code><span class="html">This is a very basic implementation of Rfc2898DeriveBytes class with only 2 of its constructors in case someone else finds it useful.<br /><br />class Rfc2898DeriveBytes<br />{<br />    private $textToHash;<br />    private $saltByteSize;<br />    <br />    public $salt;<br />    <br />    public function __construct($arg1, $arg2)<br />    {<br />        if (is_string($arg1) &amp;&amp; is_integer($arg2)) {<br />            $this-&gt;textToHash = $arg1;<br />            $this-&gt;saltByteSize = $arg2;<br />            $this-&gt;salt = substr(<br />                hex2bin(sha1(uniqid('', true))),<br />                0,<br />                $this-&gt;saltByteSize<br />            );<br />        } elseif (is_string($arg1) &amp;&amp; is_string($arg2)) {<br />            $this-&gt;textToHash = $arg1;<br />            $this-&gt;salt = $arg2;<br />        }<br />    }<br />    <br />    public function getBytes($size)<br />    {<br />        return hash_pbkdf2(<br />            "sha1",<br />            $this-&gt;textToHash,<br />            $this-&gt;salt,<br />            1000,<br />            $size,<br />            true<br />        );<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="113488">  <div class="votes">
    <div id="Vu113488">
    <a href="/manual/vote-note.php?id=113488&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113488">
    <a href="/manual/vote-note.php?id=113488&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113488" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#113488" class="name">
  <strong class="user"><em>Binod Kumar Luitel</em></strong></a><a class="genanchor" href="#113488"> &para;</a><div class="date" title="2013-10-17 10:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113488">
<div class="phpcode"><code><span class="html">People who wants pure PHP implementation of the function, i.e. who don't have PHP 5.5 installed within their server, can use the following implementation. Nothing has been modified so far as from reference <a href="https://defuse.ca/php-pbkdf2.htm" rel="nofollow" target="_blank">https://defuse.ca/php-pbkdf2.htm</a> but the OOP lovers might like this.<br />For more information about PBKDF2 see: <a href="http://en.wikipedia.org/wiki/PBKDF2" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/PBKDF2</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * PBKDF2 key derivation function as defined by RSA's PKCS #5: <a href="https://www.ietf.org/rfc/rfc2898.txt" rel="nofollow" target="_blank">https://www.ietf.org/rfc/rfc2898.txt</a><br /> * $algorithm - The hash algorithm to use. Recommended: SHA256<br /> * $password - The password.<br /> * $salt - A salt that is unique to the password.<br /> * $count - Iteration count. Higher is better, but slower. Recommended: At least 1000.<br /> * $key_length - The length of the derived key in bytes.<br /> * $raw_output - If true, the key is returned in raw binary format. Hex encoded otherwise.<br /> * Returns: A $key_length-byte key derived from the password and salt.<br /> */<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"hash_pbkdf2"</span><span class="keyword">)) {<br />    function </span><span class="default">hash_pbkdf2</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">, </span><span class="default">$raw_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br /><br />        class </span><span class="default">pbkdf2 </span><span class="keyword">{<br />            public </span><span class="default">$algorithm</span><span class="keyword">;<br />            public </span><span class="default">$password</span><span class="keyword">;<br />            public </span><span class="default">$salt</span><span class="keyword">;<br />            public </span><span class="default">$count</span><span class="keyword">;<br />            public </span><span class="default">$key_length</span><span class="keyword">;<br />            public </span><span class="default">$raw_output</span><span class="keyword">;<br /><br />            private </span><span class="default">$hash_length</span><span class="keyword">;<br />            private </span><span class="default">$output         </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /><br />            public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />            {<br />                if (</span><span class="default">$data </span><span class="keyword">!= </span><span class="default">null</span><span class="keyword">) {<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">init</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />                }<br />            }<br /><br />            public function </span><span class="default">init</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />            {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm  </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"algorithm"</span><span class="keyword">];<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password   </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"password"</span><span class="keyword">];<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">salt       </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"salt"</span><span class="keyword">];<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count      </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">];<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key_length </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"key_length"</span><span class="keyword">];<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">raw_output </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">[</span><span class="string">"raw_output"</span><span class="keyword">];<br />            }<br /><br />            public function </span><span class="default">hash</span><span class="keyword">()<br />            {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm</span><span class="keyword">);<br />                if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm</span><span class="keyword">, </span><span class="default">hash_algos</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">))<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'PBKDF2 ERROR: Invalid hash algorithm.'</span><span class="keyword">);<br /><br />                if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count </span><span class="keyword">&lt;= </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key_length </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'PBKDF2 ERROR: Invalid parameters.'</span><span class="keyword">);<br /><br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hash_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />                </span><span class="default">$block_count </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key_length </span><span class="keyword">/ </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hash_length</span><span class="keyword">);<br />                for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$block_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                    </span><span class="comment">// $i encoded as 4 bytes, big endian.<br />                    </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">salt </span><span class="keyword">. </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"N"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />                    </span><span class="comment">// first iteration<br />                    </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$xorsum </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />                    </span><span class="comment">// perform the other $this-&gt;count - 1 iterations<br />                    </span><span class="keyword">for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />                        </span><span class="default">$xorsum </span><span class="keyword">^= (</span><span class="default">$last </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />                    }<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output </span><span class="keyword">.= </span><span class="default">$xorsum</span><span class="keyword">;<br />                    if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">raw_output</span><span class="keyword">)<br />                        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key_length</span><span class="keyword">);<br />                    else<br />                        return </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">key_length</span><span class="keyword">));<br />                }<br />            }<br />        }<br /><br />        </span><span class="default">$data </span><span class="keyword">= array(</span><span class="string">'algorithm' </span><span class="keyword">=&gt; </span><span class="default">$algorithm</span><span class="keyword">, </span><span class="string">'password' </span><span class="keyword">=&gt; </span><span class="default">$password</span><span class="keyword">, </span><span class="string">'salt' </span><span class="keyword">=&gt; </span><span class="default">$salt</span><span class="keyword">, </span><span class="string">'count' </span><span class="keyword">=&gt; </span><span class="default">$count</span><span class="keyword">, </span><span class="string">'key_length' </span><span class="keyword">=&gt; </span><span class="default">$key_length</span><span class="keyword">, </span><span class="string">'raw_output' </span><span class="keyword">=&gt; </span><span class="default">$raw_output</span><span class="keyword">);<br />        try {<br />            </span><span class="default">$pbkdf2 </span><span class="keyword">= new </span><span class="default">pbkdf2</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />            return </span><span class="default">$pbkdf2</span><span class="keyword">-&gt;</span><span class="default">hash</span><span class="keyword">();<br />        } catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />            throw </span><span class="default">$e</span><span class="keyword">;<br />        }<br />    }<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125775">  <div class="votes">
    <div id="Vu125775">
    <a href="/manual/vote-note.php?id=125775&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125775">
    <a href="/manual/vote-note.php?id=125775&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125775" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#125775" class="name">
  <strong class="user"><em>php - ober-mail - de</em></strong></a><a class="genanchor" href="#125775"> &para;</a><div class="date" title="2021-02-04 12:57"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125775">
<div class="phpcode"><code><span class="html">If you are wondering what the requirements are for the salt, have a look at the RFC[1]:<br /><br />"The salt parameter should be a random string containing at least 64 bits of entropy. That means when generated from a function like *mcrypt_create_iv*, at least 8 bytes long. But for salts that consist of only *a-zA-Z0-9* (or are base_64 encoded), the minimum length should be at least 11 characters. It should be generated random for each password that's hashed, and stored along side the generated key."<br /><br />[1] <a href="https://wiki.php.net/rfc/hash_pbkdf2" rel="nofollow" target="_blank">https://wiki.php.net/rfc/hash_pbkdf2</a></span></code></div>
  </div>
 </div>
  <div class="note" id="125773">  <div class="votes">
    <div id="Vu125773">
    <a href="/manual/vote-note.php?id=125773&amp;page=function.hash-pbkdf2&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125773">
    <a href="/manual/vote-note.php?id=125773&amp;page=function.hash-pbkdf2&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125773" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#125773" class="name">
  <strong class="user"><em>php at ober-mail dot de</em></strong></a><a class="genanchor" href="#125773"> &para;</a><div class="date" title="2021-02-04 12:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125773">
<div class="phpcode"><code><span class="html">If you are wondering what the requirements are for the salt, have a look at the RFC[1]:<br /><br />"The salt parameter should be a random string containing at least 64 bits of entropy. That means when generated from a function like *mcrypt_create_iv*, at least 8 bytes long. But for salts that consist of only *a-zA-Z0-9* (or are base_64 encoded), the minimum length should be at least 11 characters. It should be generated random for each password that's hashed, and stored along side the generated key."<br /><br />[1] <a href="https://wiki.php.net/rfc/hash_pbkdf2" rel="nofollow" target="_blank">https://wiki.php.net/rfc/hash_pbkdf2</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.hash-pbkdf2&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-pbkdf2.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.hash.php">Hash Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.hash.php" title="hash">hash</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-algos.php" title="hash_&#8203;algos">hash_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-copy.php" title="hash_&#8203;copy">hash_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-equals.php" title="hash_&#8203;equals">hash_&#8203;equals</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-file.php" title="hash_&#8203;file">hash_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-final.php" title="hash_&#8203;final">hash_&#8203;final</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hkdf.php" title="hash_&#8203;hkdf">hash_&#8203;hkdf</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac.php" title="hash_&#8203;hmac">hash_&#8203;hmac</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-algos.php" title="hash_&#8203;hmac_&#8203;algos">hash_&#8203;hmac_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-file.php" title="hash_&#8203;hmac_&#8203;file">hash_&#8203;hmac_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-init.php" title="hash_&#8203;init">hash_&#8203;init</a>
                        </li>
                                                <li class="current">
                            <a href="function.hash-pbkdf2.php" title="hash_&#8203;pbkdf2">hash_&#8203;pbkdf2</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update.php" title="hash_&#8203;update">hash_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-file.php" title="hash_&#8203;update_&#8203;file">hash_&#8203;update_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-stream.php" title="hash_&#8203;update_&#8203;stream">hash_&#8203;update_&#8203;stream</a>
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
