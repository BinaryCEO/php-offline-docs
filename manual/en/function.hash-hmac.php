<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash_hmac - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash-hmac.php">
 <link rel="shorturl" href="https://www.php.net/hash-hmac">
 <link rel="alternate" href="https://www.php.net/hash-hmac" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hash-hkdf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-hmac-algos.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash-hmac.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash-hmac.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash-hmac.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash-hmac.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash-hmac.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash-hmac.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash-hmac.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash-hmac.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash-hmac.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash-hmac.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash-hmac.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a keyed hash value using the HMAC method" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash_hmac - Manual" />
<meta name="twitter:description" content="Generate a keyed hash value using the HMAC method" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash_hmac - Manual" />
<meta itemprop="description" content="Generate a keyed hash value using the HMAC method" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a keyed hash value using the HMAC method" />

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
        <a href="function.hash-hmac-algos.php">
          hash_hmac_algos &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hash-hkdf.php">
          &laquo; hash_hkdf        </a>
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
            <option value='en/function.hash-hmac.php' selected="selected">English</option>
            <option value='de/function.hash-hmac.php'>German</option>
            <option value='es/function.hash-hmac.php'>Spanish</option>
            <option value='fr/function.hash-hmac.php'>French</option>
            <option value='it/function.hash-hmac.php'>Italian</option>
            <option value='ja/function.hash-hmac.php'>Japanese</option>
            <option value='pt_BR/function.hash-hmac.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash-hmac.php'>Russian</option>
            <option value='tr/function.hash-hmac.php'>Turkish</option>
            <option value='uk/function.hash-hmac.php'>Ukrainian</option>
            <option value='zh/function.hash-hmac.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash-hmac" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash_hmac</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8, PECL hash &gt;= 1.1)</p><p class="refpurpose"><span class="refname">hash_hmac</span> &mdash; <span class="dc-title">Generate a keyed hash value using the HMAC method</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.hash-hmac-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash_hmac</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$algo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$binary</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>


 </div>

 <div class="refsect1 parameters" id="refsect1-function.hash-hmac-parameters">
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
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       Message to be hashed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       Shared secret key used for generating the HMAC variant of the message digest.
      </p>
     </dd>
    
    
     <dt><code class="parameter">binary</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, outputs raw binary data.
       <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> outputs lowercase hexits.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-hmac-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the calculated message digest as lowercase hexits
   unless <code class="parameter">binary</code> is set to true in which case the raw
   binary representation of the message digest is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.hash-hmac-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception if
   <code class="parameter">algo</code> is unknown or is a non-cryptographic hash
   function.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-hmac-changelog">
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
        Now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> exception if
        <code class="parameter">algo</code> is unknown or is a
        non-cryptographic hash function; previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned instead.
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


 <div class="refsect1 examples" id="refsect1-function.hash-hmac-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-985">
    <p><strong>Example #1 <span class="function"><strong>hash_hmac()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">hash_hmac</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">, </span><span style="color: #DD0000">'The quick brown fox jumped over the lazy dog.'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">9c5c42422b03f0ee32949920649445e417b2c634050833c5165704b825c2a53b</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-hmac-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.hash-hmac-algos.php" class="function" rel="rdfs-seeAlso">hash_hmac_algos()</a> - Return a list of registered hashing algorithms suitable for hash_hmac</span></li>
    <li><span class="function"><a href="function.hash-hmac-file.php" class="function" rel="rdfs-seeAlso">hash_hmac_file()</a> - Generate a keyed hash value using the HMAC method and the contents of a given file</span></li>
    <li><span class="function"><a href="function.hash-equals.php" class="function" rel="rdfs-seeAlso">hash_equals()</a> - Timing attack safe string comparison</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash-hmac.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash-hmac%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash-hmac&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-hmac.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122657">  <div class="votes">
    <div id="Vu122657">
    <a href="/manual/vote-note.php?id=122657&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122657">
    <a href="/manual/vote-note.php?id=122657&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122657" title="80% like this...">
    123
    </div>
  </div>
  <a href="#122657" class="name">
  <strong class="user"><em>Korbendallas</em></strong></a><a class="genanchor" href="#122657"> &para;</a><div class="date" title="2018-04-23 08:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122657">
<div class="phpcode"><code><span class="html">Very important notice, if you pass array to $data, php will generate a Warning, return a NULL and continue your application. Which I think is critical vulnerability as this function used to check authorisation typically.<br /><br />Example:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="string">'sha256'</span><span class="keyword">, [], </span><span class="string">'secret'</span><span class="keyword">));<br /><br /></span><span class="default">WARNING hash_hmac</span><span class="keyword">() </span><span class="default">expects parameter 2 to be string</span><span class="keyword">, array </span><span class="default">given on line number 3<br />NULL<br />?&gt;<br /></span>Of course not documented feature.</span></code></div>
  </div>
 </div>
  <div class="note" id="111435">  <div class="votes">
    <div id="Vu111435">
    <a href="/manual/vote-note.php?id=111435&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111435">
    <a href="/manual/vote-note.php?id=111435&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111435" title="73% like this...">
    84
    </div>
  </div>
  <a href="#111435" class="name">
  <strong class="user"><em>Michael</em></strong></a><a class="genanchor" href="#111435"> &para;</a><div class="date" title="2013-02-19 08:52"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111435">
<div class="phpcode"><code><span class="html">Please be careful when comparing hashes. In certain cases, information can be leaked by using a timing attack. It takes advantage of the == operator only comparing until it finds a difference in the two strings. To prevent it, you have two options.
<br />
<br />Option 1: hash both hashed strings first - this doesn't stop the timing difference, but it makes the information useless.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">if (</span><span class="default">md5</span><span class="keyword">(</span><span class="default">$hashed_value</span><span class="keyword">) === </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$hashed_expected</span><span class="keyword">)) {
<br />        echo </span><span class="string">"hashes match!"</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Option 2: always compare the whole string.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">if (</span><span class="default">hash_compare</span><span class="keyword">(</span><span class="default">$hashed_value</span><span class="keyword">, </span><span class="default">$hashed_expected</span><span class="keyword">)) {
<br />        echo </span><span class="string">"hashes match!"</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">hash_compare</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {
<br />        if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) || !</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br />        if (</span><span class="default">$len </span><span class="keyword">!== </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) {
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />        }
<br />
<br />        </span><span class="default">$status </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />            </span><span class="default">$status </span><span class="keyword">|= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) ^ </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);
<br />        }
<br />        return </span><span class="default">$status </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120040">  <div class="votes">
    <div id="Vu120040">
    <a href="/manual/vote-note.php?id=120040&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120040">
    <a href="/manual/vote-note.php?id=120040&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120040" title="78% like this...">
    63
    </div>
  </div>
  <a href="#120040" class="name">
  <strong class="user"><em>Michiel Thalen, Thalent</em></strong></a><a class="genanchor" href="#120040"> &para;</a><div class="date" title="2016-10-13 03:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120040">
<div class="phpcode"><code><span class="html">As  Michael  uggests we should take care not to compare the hash using == (or ===). Since PHP version 5.6 we can now use hash_equals().<br /><br />So the example will be:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">hash_equals</span><span class="keyword">(</span><span class="default">$hashed_expected</span><span class="keyword">, </span><span class="default">$hashed_value</span><span class="keyword">) ) {<br />        echo </span><span class="string">"hashes match!"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128038">  <div class="votes">
    <div id="Vu128038">
    <a href="/manual/vote-note.php?id=128038&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128038">
    <a href="/manual/vote-note.php?id=128038&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128038" title="87% like this...">
    6
    </div>
  </div>
  <a href="#128038" class="name">
  <strong class="user"><em>pbuttelli at tutanota dot com</em></strong></a><a class="genanchor" href="#128038"> &para;</a><div class="date" title="2022-12-21 09:23"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128038">
<div class="phpcode"><code><span class="html">While implementing a TOTP application, please note that hash_hmac() must receive data in binary, not in a hexadecimal string, to generate a valid OTP across platforms.<br /><br />This problem can be easily fixed by converting a hexadecimal string to its binary form before passing it to hash_hmac().<br /><br /><span class="default">&lt;?php<br />$time </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'0000000003523f77'</span><span class="keyword">); </span><span class="comment">// time must be in this "hexadecimal and padded" form<br /></span><span class="default">$key </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'bb57d1...'</span><span class="keyword">); </span><span class="comment">// 160-bits = 40-digit hexadecimal (4 bits) = 32-digit base32 (5 bits)<br /><br /></span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="string">'sha1'</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93440">  <div class="votes">
    <div id="Vu93440">
    <a href="/manual/vote-note.php?id=93440&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93440">
    <a href="/manual/vote-note.php?id=93440&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93440" title="62% like this...">
    9
    </div>
  </div>
  <a href="#93440" class="name">
  <strong class="user"><em>KC Cloyd</em></strong></a><a class="genanchor" href="#93440"> &para;</a><div class="date" title="2009-09-09 11:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93440">
<div class="phpcode"><code><span class="html">Sometimes a hosting provider doesn't provide access to the Hash extension. Here is a clone of the hash_hmac function you can use in the event you need an HMAC generator and Hash is not available. It's only usable with MD5 and SHA1 encryption algorithms, but its output is identical to the official hash_hmac function (so far at least).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">custom_hmac</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$raw_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    </span><span class="default">$algo </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">);<br />    </span><span class="default">$pack </span><span class="keyword">= </span><span class="string">'H'</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">));<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">64</span><span class="keyword">;<br />    </span><span class="default">$opad </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x5C</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">);<br />    </span><span class="default">$ipad </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x36</span><span class="keyword">), </span><span class="default">$size</span><span class="keyword">);<br /><br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &gt; </span><span class="default">$size</span><span class="keyword">) {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="default">$pack</span><span class="keyword">, </span><span class="default">$algo</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)), </span><span class="default">$size</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">));<br />    } else {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">));<br />    }<br /><br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$opad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$opad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$key</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$ipad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$ipad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$key</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    }<br /><br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">$algo</span><span class="keyword">(</span><span class="default">$opad</span><span class="keyword">.</span><span class="default">pack</span><span class="keyword">(</span><span class="default">$pack</span><span class="keyword">, </span><span class="default">$algo</span><span class="keyword">(</span><span class="default">$ipad</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">)));<br /><br />    return (</span><span class="default">$raw_output</span><span class="keyword">) ? </span><span class="default">pack</span><span class="keyword">(</span><span class="default">$pack</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">) : </span><span class="default">$output</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example Use:<br /><br /><span class="default">&lt;?php<br /><br />custom_hmac</span><span class="keyword">(</span><span class="string">'sha1'</span><span class="keyword">, </span><span class="string">'Hello, world!'</span><span class="keyword">, </span><span class="string">'secret'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110288">  <div class="votes">
    <div id="Vu110288">
    <a href="/manual/vote-note.php?id=110288&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110288">
    <a href="/manual/vote-note.php?id=110288&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110288" title="58% like this...">
    5
    </div>
  </div>
  <a href="#110288" class="name">
  <strong class="user"><em>pete dot walker at NOSPAM dot me dot com</em></strong></a><a class="genanchor" href="#110288"> &para;</a><div class="date" title="2012-10-08 02:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110288">
<div class="phpcode"><code><span class="html">A function implementing the algorithm outlined in RFC 6238 (<a href="http://tools.ietf.org/html/rfc6238" rel="nofollow" target="_blank">http://tools.ietf.org/html/rfc6238</a>)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * This function implements the algorithm outlined<br /> * in RFC 6238 for Time-Based One-Time Passwords<br /> *<br /> * @link <a href="http://tools.ietf.org/html/rfc6238" rel="nofollow" target="_blank">http://tools.ietf.org/html/rfc6238</a><br /> * @param string $key    the string to use for the HMAC key<br /> * @param mixed  $time   a value that reflects a time (unix<br /> *                       time in the example)<br /> * @param int    $digits the desired length of the OTP<br /> * @param string $crypto the desired HMAC crypto algorithm<br /> * @return string the generated OTP<br /> */<br /></span><span class="keyword">function </span><span class="default">oauth_totp</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$time</span><span class="keyword">, </span><span class="default">$digits</span><span class="keyword">=</span><span class="default">8</span><span class="keyword">, </span><span class="default">$crypto</span><span class="keyword">=</span><span class="string">'sha256'</span><span class="keyword">)<br />{<br />    </span><span class="default">$digits </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$digits</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Convert counter to binary (64-bit)       <br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'NNC*'</span><span class="keyword">, </span><span class="default">$time </span><span class="keyword">&gt;&gt; </span><span class="default">32</span><span class="keyword">, </span><span class="default">$time </span><span class="keyword">&amp; </span><span class="default">0xFFFFFFFF</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Pad to 8 chars (if necessary)<br />    </span><span class="keyword">if (</span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &lt; </span><span class="default">8</span><span class="keyword">) {<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">), </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    }        <br />    <br />    </span><span class="comment">// Get the hash<br />    </span><span class="default">$hash </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$crypto</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Grab the offset<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">2 </span><span class="keyword">* </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />    <br />    </span><span class="comment">// Grab the portion we're interested in<br />    </span><span class="default">$binary </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$hash</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">)) &amp; </span><span class="default">0x7fffffff</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Modulus<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$binary </span><span class="keyword">% </span><span class="default">pow</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">$digits</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Pad (if necessary)<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$digits</span><span class="keyword">, </span><span class="string">"0"</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100351">  <div class="votes">
    <div id="Vu100351">
    <a href="/manual/vote-note.php?id=100351&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100351">
    <a href="/manual/vote-note.php?id=100351&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100351" title="52% like this...">
    6
    </div>
  </div>
  <a href="#100351" class="name">
  <strong class="user"><em>Siann Beck</em></strong></a><a class="genanchor" href="#100351"> &para;</a><div class="date" title="2010-10-10 09:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100351">
<div class="phpcode"><code><span class="html">For signing an Amazon AWS query, base64-encode the binary value:<br /><br /><span class="default">&lt;?php<br />  $Sig </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="string">'sha256'</span><span class="keyword">, </span><span class="default">$Request</span><span class="keyword">, </span><span class="default">$AmazonSecretKey</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109260">  <div class="votes">
    <div id="Vu109260">
    <a href="/manual/vote-note.php?id=109260&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109260">
    <a href="/manual/vote-note.php?id=109260&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109260" title="52% like this...">
    2
    </div>
  </div>
  <a href="#109260" class="name">
  <strong class="user"><em>havoc  at  NOSPAM defuse dot ca</em></strong></a><a class="genanchor" href="#109260"> &para;</a><div class="date" title="2012-06-30 04:30"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109260">
<div class="phpcode"><code><span class="html">Here is an efficient PBDKF2 implementation:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br /> * PBKDF2 key derivation function as defined by RSA's PKCS #5: <a href="https://www.ietf.org/rfc/rfc2898.txt" rel="nofollow" target="_blank">https://www.ietf.org/rfc/rfc2898.txt</a><br /> * $algorithm - The hash algorithm to use. Recommended: SHA256<br /> * $password - The password.<br /> * $salt - A salt that is unique to the password.<br /> * $count - Iteration count. Higher is better, but slower. Recommended: At least 1024.<br /> * $key_length - The length of the derived key in bytes.<br /> * $raw_output - If true, the key is returned in raw binary format. Hex encoded otherwise.<br /> * Returns: A $key_length-byte key derived from the password and salt.<br /> *<br /> * Test vectors can be found here: <a href="https://www.ietf.org/rfc/rfc6070.txt" rel="nofollow" target="_blank">https://www.ietf.org/rfc/rfc6070.txt</a><br /> *<br /> * This implementation of PBKDF2 was originally created by defuse.ca<br /> * With improvements by variations-of-shadow.com<br /> */<br /></span><span class="keyword">function </span><span class="default">pbkdf2</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">, </span><span class="default">$raw_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    </span><span class="default">$algorithm </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">);<br />    if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">hash_algos</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">))<br />        die(</span><span class="string">'PBKDF2 ERROR: Invalid hash algorithm.'</span><span class="keyword">);<br />    if(</span><span class="default">$count </span><span class="keyword">&lt;= </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$key_length </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">)<br />        die(</span><span class="string">'PBKDF2 ERROR: Invalid parameters.'</span><span class="keyword">);<br /><br />    </span><span class="default">$hash_length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">hash</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    </span><span class="default">$block_count </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$key_length </span><span class="keyword">/ </span><span class="default">$hash_length</span><span class="keyword">);<br /><br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$block_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="comment">// $i encoded as 4 bytes, big endian.<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$salt </span><span class="keyword">. </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"N"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />        </span><span class="comment">// first iteration<br />        </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$xorsum </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="comment">// perform the other $count - 1 iterations<br />        </span><span class="keyword">for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            </span><span class="default">$xorsum </span><span class="keyword">^= (</span><span class="default">$last </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$algorithm</span><span class="keyword">, </span><span class="default">$last</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />        }<br />        </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$xorsum</span><span class="keyword">;<br />    }<br /><br />    if(</span><span class="default">$raw_output</span><span class="keyword">)<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">);<br />    else<br />        return </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$key_length</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105099">  <div class="votes">
    <div id="Vu105099">
    <a href="/manual/vote-note.php?id=105099&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105099">
    <a href="/manual/vote-note.php?id=105099&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105099" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#105099" class="name">
  <strong class="user"><em>josefkoh at hotmail dot com</em></strong></a><a class="genanchor" href="#105099"> &para;</a><div class="date" title="2011-07-27 10:24"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105099">
<div class="phpcode"><code><span class="html">Simple implementation of hmac sha1<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">hmac_sha1</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Adjust key to exactly 64 bytes<br />    </span><span class="keyword">if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &gt; </span><span class="default">64</span><span class="keyword">) {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">), </span><span class="default">64</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />    }<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &lt; </span><span class="default">64</span><span class="keyword">) {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">));<br />    }<br /><br />    </span><span class="comment">// Outter and Inner pad<br />    </span><span class="default">$opad </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x5C</span><span class="keyword">), </span><span class="default">64</span><span class="keyword">);<br />    </span><span class="default">$ipad </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x36</span><span class="keyword">), </span><span class="default">64</span><span class="keyword">);<br /><br />    </span><span class="comment">// Xor key with opad &amp; ipad<br />    </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$opad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$opad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$key</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$ipad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$ipad</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$key</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    }<br /><br />    return </span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$opad</span><span class="keyword">.</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$ipad</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101540">  <div class="votes">
    <div id="Vu101540">
    <a href="/manual/vote-note.php?id=101540&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101540">
    <a href="/manual/vote-note.php?id=101540&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101540" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#101540" class="name">
  <strong class="user"><em>Peter Terence Roux</em></strong></a><a class="genanchor" href="#101540"> &para;</a><div class="date" title="2010-12-23 03:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101540">
<div class="phpcode"><code><span class="html">The Implementation of the PBKDF2 key derivation function as described in RFC 2898 can be used to not only get the hashed KEY but also a specific IV.
<br />
<br />To use, one would use it as follows:-
<br />
<br /><span class="default">&lt;?php
<br />  $p </span><span class="keyword">= </span><span class="default">str_hash_pbkdf2</span><span class="keyword">(</span><span class="default">$pw</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">, </span><span class="string">'sha1'</span><span class="keyword">);
<br />  </span><span class="default">$p </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">);
<br />
<br />  </span><span class="default">$iv </span><span class="keyword">= </span><span class="default">str_hash_pbkdf2</span><span class="keyword">(</span><span class="default">$pw</span><span class="keyword">, </span><span class="default">$salt</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">16</span><span class="keyword">, </span><span class="string">'sha1'</span><span class="keyword">, </span><span class="default">32</span><span class="keyword">);
<br />  </span><span class="default">$iv </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$iv</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />The function should be:-
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="comment">// PBKDF2 Implementation (described in RFC 2898)
<br />  //
<br />  // @param   string  p   password
<br />  // @param   string  s   salt
<br />  // @param   int     c   iteration count (use 1000 or higher)
<br />  // @param   int     kl  derived key length
<br />  // @param   string  a   hash algorithm
<br />  // @param   int     st  start position of result
<br />  //
<br />  // @return  string  derived key
<br />  </span><span class="keyword">function </span><span class="default">str_hash_pbkdf2</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$kl</span><span class="keyword">, </span><span class="default">$a </span><span class="keyword">= </span><span class="string">'sha256'</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)
<br />  {
<br />    </span><span class="default">$kb </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">+</span><span class="default">$kl</span><span class="keyword">;                        </span><span class="comment">// Key blocks to compute
<br />    </span><span class="default">$dk </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;                                    </span><span class="comment">// Derived key
<br />
<br />    // Create key
<br />    </span><span class="keyword">for (</span><span class="default">$block</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$block</span><span class="keyword">&lt;=</span><span class="default">$kb</span><span class="keyword">; </span><span class="default">$block</span><span class="keyword">++)
<br />    {
<br />      </span><span class="comment">// Initial hash for this block
<br />      </span><span class="default">$ib </span><span class="keyword">= </span><span class="default">$h </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$s </span><span class="keyword">. </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'N'</span><span class="keyword">, </span><span class="default">$block</span><span class="keyword">), </span><span class="default">$p</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />
<br />      </span><span class="comment">// Perform block iterations
<br />      </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />      {
<br />        </span><span class="comment">// XOR each iterate
<br />        </span><span class="default">$ib </span><span class="keyword">^= (</span><span class="default">$h </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$h</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));
<br />      }
<br />
<br />      </span><span class="default">$dk </span><span class="keyword">.= </span><span class="default">$ib</span><span class="keyword">;                                </span><span class="comment">// Append iterated block
<br />    </span><span class="keyword">}
<br />
<br />    </span><span class="comment">// Return derived key of correct length
<br />    </span><span class="keyword">return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dk</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$kl</span><span class="keyword">);
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125905">  <div class="votes">
    <div id="Vu125905">
    <a href="/manual/vote-note.php?id=125905&amp;page=function.hash-hmac&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125905">
    <a href="/manual/vote-note.php?id=125905&amp;page=function.hash-hmac&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125905" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#125905" class="name">
  <strong class="user"><em>Pawel M.</em></strong></a><a class="genanchor" href="#125905"> &para;</a><div class="date" title="2021-03-11 10:32"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125905">
<div class="phpcode"><code><span class="html">Function for those, who really need to use crc32 algorithm in PHP&gt;7.1<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">hash_hmac_crc32</span><span class="keyword">(</span><span class="default">string $key</span><span class="keyword">, </span><span class="default">string $data</span><span class="keyword">): </span><span class="default">string<br />    </span><span class="keyword">{<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &gt; </span><span class="default">$b</span><span class="keyword">) {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">"H*"</span><span class="keyword">, </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32'</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">));<br />        }<br />        </span><span class="default">$key  </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x00</span><span class="keyword">));<br />        </span><span class="default">$ipad </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x36</span><span class="keyword">));<br />        </span><span class="default">$opad </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0x5c</span><span class="keyword">));<br />        </span><span class="default">$k_ipad </span><span class="keyword">= </span><span class="default">$key </span><span class="keyword">^ </span><span class="default">$ipad</span><span class="keyword">;<br />        </span><span class="default">$k_opad </span><span class="keyword">= </span><span class="default">$key </span><span class="keyword">^ </span><span class="default">$opad</span><span class="keyword">;<br />        return </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32'</span><span class="keyword">, </span><span class="default">$k_opad </span><span class="keyword">. </span><span class="default">hash</span><span class="keyword">(</span><span class="string">'crc32'</span><span class="keyword">, </span><span class="default">$k_ipad </span><span class="keyword">. </span><span class="default">$data</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.hash-hmac&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-hmac.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
