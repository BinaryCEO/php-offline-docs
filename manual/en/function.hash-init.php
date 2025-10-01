<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash_init - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash-init.php">
 <link rel="shorturl" href="https://www.php.net/hash-init">
 <link rel="alternate" href="https://www.php.net/hash-init" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hash-hmac-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-pbkdf2.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash-init.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash-init.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash-init.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash-init.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash-init.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash-init.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash-init.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash-init.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash-init.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash-init.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash-init.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initialize an incremental hashing context" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash_init - Manual" />
<meta name="twitter:description" content="Initialize an incremental hashing context" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash_init - Manual" />
<meta itemprop="description" content="Initialize an incremental hashing context" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initialize an incremental hashing context" />

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
        <a href="function.hash-pbkdf2.php">
          hash_pbkdf2 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hash-hmac-file.php">
          &laquo; hash_hmac_file        </a>
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
            <option value='en/function.hash-init.php' selected="selected">English</option>
            <option value='de/function.hash-init.php'>German</option>
            <option value='es/function.hash-init.php'>Spanish</option>
            <option value='fr/function.hash-init.php'>French</option>
            <option value='it/function.hash-init.php'>Italian</option>
            <option value='ja/function.hash-init.php'>Japanese</option>
            <option value='pt_BR/function.hash-init.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash-init.php'>Russian</option>
            <option value='tr/function.hash-init.php'>Turkish</option>
            <option value='uk/function.hash-init.php'>Ukrainian</option>
            <option value='zh/function.hash-init.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash-init" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash_init</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8, PECL hash &gt;= 1.1)</p><p class="refpurpose"><span class="refname">hash_init</span> &mdash; <span class="dc-title">Initialize an incremental hashing context</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.hash-init-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash_init</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$algo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><a href="class.hashcontext.php" class="type HashContext">HashContext</a></span></div>


 </div>

 <div class="refsect1 parameters" id="refsect1-function.hash-init-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">algo</code></dt>
     <dd>
      <p class="para">
       Name of selected hashing algorithm (e.g. <code class="literal">&quot;sha256&quot;</code>).
       For a list of supported algorithms see <span class="function"><a href="function.hash-algos.php" class="function">hash_algos()</a></span>.
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         Non-cryptographic hash functions are not allowed if the <strong><code><a href="hash.constants.php#constant.hash-hmac">HASH_HMAC</a></code></strong>
         flag is specified.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Optional settings for hash generation, currently supports only one option:
       <strong><code><a href="hash.constants.php#constant.hash-hmac">HASH_HMAC</a></code></strong>.  When specified, the <code class="parameter">key</code>
       <em>must</em> be specified.
      </p>
     </dd>
    
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       When <strong><code><a href="hash.constants.php#constant.hash-hmac">HASH_HMAC</a></code></strong> is specified for <code class="parameter">flags</code>,
       a shared secret key to be used with the HMAC hashing method must be supplied in this
       parameter.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array of options for the various hashing algorithms.
       Currently, only the <code class="literal">&quot;seed&quot;</code> parameter is
       supported by the MurmurHash variants.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-init-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a Hashing Context for use with <span class="function"><a href="function.hash-update.php" class="function">hash_update()</a></span>,
   <span class="function"><a href="function.hash-update-stream.php" class="function">hash_update_stream()</a></span>, <span class="function"><a href="function.hash-update-file.php" class="function">hash_update_file()</a></span>,
   and <span class="function"><a href="function.hash-final.php" class="function">hash_final()</a></span>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.hash-init-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception if
     <code class="parameter">algo</code> is unknown or is a non-cryptographic hash
     function, or if <code class="parameter">key</code> is empty.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Passing configurations options of the wrong type in
     <code class="parameter">options</code> will now emit an
     <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> error because they can be interpreted
     incorrectly.
     This will become a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> in the
     future.
    </span>
   </li>
  </ul>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-init-changelog">
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
       <td>8.4.0</td>
       <td>Passing options of a wrong type is now deprecated.</td>
      </tr>

      <tr>
       <td>8.1.0</td>
       <td>The <code class="parameter">options</code> parameter has been added.</td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        Now throws an <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception if the
        <code class="parameter">algo</code> is unknown or is a non-cryptographic hash
        function, or if <code class="parameter">key</code> is empty. Previously,
        <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned and an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> message was
        emitted.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>Usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) with <strong><code><a href="hash.constants.php#constant.hash-hmac">HASH_HMAC</a></code></strong> was disabled.</td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        Return <span class="classname"><a href="class.hashcontext.php" class="classname">HashContext</a></span> instead of resource.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.hash-init-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-988">
    <p><strong>Example #1 Incremental hashing example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$hash </span><span style="color: #007700">= </span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">, </span><span style="color: #DD0000">'The quick brown fox jumped over the lazy dog.'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">hash_update</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">, </span><span style="color: #DD0000">'The quick brown fox '</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">hash_update</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">, </span><span style="color: #DD0000">'jumped over the lazy dog.'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$incremental_hash </span><span style="color: #007700">= </span><span style="color: #0000BB">hash_final</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$incremental_hash</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash </span><span style="color: #007700">=== </span><span style="color: #0000BB">$incremental_hash</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
bool(true)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-init-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.hash-algos.php" class="function" rel="rdfs-seeAlso">hash_algos()</a> - Return a list of registered hashing algorithms</span></li>
    <li><span class="function"><a href="function.hash-update.php" class="function" rel="rdfs-seeAlso">hash_update()</a> - Pump data into an active hashing context</span></li>
    <li><span class="function"><a href="function.hash-update-file.php" class="function" rel="rdfs-seeAlso">hash_update_file()</a> - Pump data into an active hashing context from a file</span></li>
    <li><span class="function"><a href="function.hash-update-stream.php" class="function" rel="rdfs-seeAlso">hash_update_stream()</a> - Pump data into an active hashing context from an open stream</span></li>
    <li><span class="function"><a href="function.hash-final.php" class="function" rel="rdfs-seeAlso">hash_final()</a> - Finalize an incremental hash and return resulting digest</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash-init.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash-init%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash-init&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-init.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="current">
                            <a href="function.hash-init.php" title="hash_&#8203;init">hash_&#8203;init</a>
                        </li>
                                                <li class="">
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
