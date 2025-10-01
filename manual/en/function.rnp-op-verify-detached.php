<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: rnp_op_verify_detached - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.rnp-op-verify-detached.php">
 <link rel="shorturl" href="https://www.php.net/rnp-op-verify-detached">
 <link rel="alternate" href="https://www.php.net/rnp-op-verify-detached" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.rnp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.rnp-op-verify.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rnp-save-keys.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.rnp-op-verify-detached.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.rnp-op-verify-detached.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.rnp-op-verify-detached.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.rnp-op-verify-detached.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.rnp-op-verify-detached.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.rnp-op-verify-detached.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.rnp-op-verify-detached.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.rnp-op-verify-detached.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.rnp-op-verify-detached.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.rnp-op-verify-detached.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.rnp-op-verify-detached.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Verify detached signatures" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: rnp_op_verify_detached - Manual" />
<meta name="twitter:description" content="Verify detached signatures" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: rnp_op_verify_detached - Manual" />
<meta itemprop="description" content="Verify detached signatures" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Verify detached signatures" />

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
        <a href="function.rnp-save-keys.php">
          rnp_save_keys &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.rnp-op-verify.php">
          &laquo; rnp_op_verify        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.rnp.php'>Rnp</a></li>      <li><a href='ref.rnp.php'>Rnp Functions</a></li>      </ul>
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
            <option value='en/function.rnp-op-verify-detached.php' selected="selected">English</option>
            <option value='de/function.rnp-op-verify-detached.php'>German</option>
            <option value='es/function.rnp-op-verify-detached.php'>Spanish</option>
            <option value='fr/function.rnp-op-verify-detached.php'>French</option>
            <option value='it/function.rnp-op-verify-detached.php'>Italian</option>
            <option value='ja/function.rnp-op-verify-detached.php'>Japanese</option>
            <option value='pt_BR/function.rnp-op-verify-detached.php'>Brazilian Portuguese</option>
            <option value='ru/function.rnp-op-verify-detached.php'>Russian</option>
            <option value='tr/function.rnp-op-verify-detached.php'>Turkish</option>
            <option value='uk/function.rnp-op-verify-detached.php'>Ukrainian</option>
            <option value='zh/function.rnp-op-verify-detached.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.rnp-op-verify-detached" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">rnp_op_verify_detached</h1>
  <p class="verinfo">(PECL rnp &gt;= 0.1.1)</p><p class="refpurpose"><span class="refname">rnp_op_verify_detached</span> &mdash; <span class="dc-title">Verify detached signatures</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.rnp-op-verify-detached-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>rnp_op_verify_detached</strong></span>(<span class="methodparam"><span class="type"><a href="class.rnpffi.php" class="type RnpFFI">RnpFFI</a></span> <code class="parameter">$ffi</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$signature</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">

  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-function.rnp-op-verify-detached-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">ffi</code></dt>
    <dd>
     <p class="para">
      The FFI object returned by <span class="function"><a href="function.rnp-ffi-create.php" class="function">rnp_ffi_create()</a></span>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">data</code></dt>
    <dd>
     <p class="para">
      Source data.
     </p>
    </dd>
   
   
    <dt><code class="parameter">signature</code></dt>
    <dd>
     <p class="para">
      Detached signature data.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.rnp-op-verify-detached-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An associative array with information about verification results or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Key</th>
      <th>Data type</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">&quot;verification_status&quot;</code></td>
      <td>string</td>
      <td>
       Overall verification result, either &quot;Success&quot; string or appropriate error message.
       &quot;Success&quot; result is set when at least one signature is valid and successfully verified.
       Individual verification results for each signature can be checked in the &quot;signatures&quot; array.
      </td>
     </tr>

     <tr>
      <td><code class="literal">&quot;file_name&quot;</code></td>
      <td>string</td>
      <td>File name.</td>
     </tr>

     <tr>
      <td><code class="literal">&quot;file_mtime&quot;</code></td>
      <td>integer</td>
      <td>File modification time.</td>
     </tr>

     <tr>
      <td><code class="literal">&quot;mode&quot;</code></td>
      <td>string</td>
      <td>Data protection (encryption) mode used in processed message.
      Currently defined values are &quot;none&quot;, &quot;cfb&quot;, &quot;cfb-mdc&quot;, &quot;aead-ocb&quot;, &quot;aead-eax&quot;.
      </td>
     </tr>

     <tr>
      <td><code class="literal">&quot;cipher&quot;</code></td>
      <td>string</td>
      <td>Symmetric cipher used for data encryption.</td>
     </tr>

     <tr>
      <td><code class="literal">&quot;valid_integrity&quot;</code></td>
      <td>boolean</td>
      <td><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if message integrity protection was used (i.e. MDC or AEAD) and it was
      validated successfully.
      </td>
     </tr>

     <tr>
      <td><code class="literal">&quot;signatures&quot;</code></td>
      <td>array</td>
      <td>
       An associative array describing each signature found. See description below.
      </td>
     </tr>

    </tbody>
   
  </table>

  <p class="para">
   &quot;signatures&quot; sub-array.
  </p>
  <table class="doctable informaltable">
  
   <thead>
    <tr>
     <th>Key</th>
     <th>Data type</th>
     <th>Description</th>
    </tr>

   </thead>

  <tbody class="tbody">
   <tr>
    <td>&quot;verification_status&quot;</td>
    <td>string</td>
    <td>Signature verification status, either &quot;Success&quot; string or appropriate error message.</td>
   </tr>

   <tr>
    <td>&quot;creation_time&quot;</td>
    <td>integer</td>
    <td>Signature creation time in seconds since Jan, 1 1970 UTC.</td>
   </tr>

   <tr>
    <td>&quot;expiration_time&quot;</td>
    <td>integer</td>
    <td>Signature expiration time in seconds since the creation time or 0 if signature never expires.</td>
   </tr>

   <tr>
    <td>&quot;hash&quot;</td>
    <td>string</td>
    <td>Hash function algorithm used to calculate the signature.</td>
   </tr>

   <tr>
    <td>&quot;signing_key&quot;</td>
    <td>string</td>
    <td>Fingerprint of the key used for signing. Could be &quot;Not found&quot; if corresponding public key is not loaded to the FFI object.</td>
   </tr>

   <tr>
    <td>&quot;signature_type&quot;</td>
    <td>string</td>
    <td>
     Signature type. Currently defined values are: &#039;binary&#039;, &#039;text&#039;, &#039;standalone&#039;, &#039;certification (generic)&#039;, &#039;certification (persona)&#039;,
     &#039;certification (casual)&#039;, &#039;certification (positive)&#039;, &#039;subkey binding&#039;, &#039;primary key binding&#039;, &#039;direct&#039;, &#039;key revocation&#039;,
     &#039;subkey revocation&#039;, &#039;certification revocation&#039;, &#039;timestamp&#039;, &#039;uknown: 0..255&#039;.
    </td>
   </tr>

  </tbody>
  
  </table>

 </div>



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/rnp/functions/rnp-op-verify-detached.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.rnp-op-verify-detached%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.rnp-op-verify-detached&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.rnp-op-verify-detached.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.rnp.php">Rnp Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.rnp-backend-string.php" title="rnp_&#8203;backend_&#8203;string">rnp_&#8203;backend_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-backend-version.php" title="rnp_&#8203;backend_&#8203;version">rnp_&#8203;backend_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-decrypt.php" title="rnp_&#8203;decrypt">rnp_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-dump-packets.php" title="rnp_&#8203;dump_&#8203;packets">rnp_&#8203;dump_&#8203;packets</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-dump-packets-to-json.php" title="rnp_&#8203;dump_&#8203;packets_&#8203;to_&#8203;json">rnp_&#8203;dump_&#8203;packets_&#8203;to_&#8203;json</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-ffi-create.php" title="rnp_&#8203;ffi_&#8203;create">rnp_&#8203;ffi_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-ffi-destroy.php" title="rnp_&#8203;ffi_&#8203;destroy">rnp_&#8203;ffi_&#8203;destroy</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-ffi-set-pass-provider.php" title="rnp_&#8203;ffi_&#8203;set_&#8203;pass_&#8203;provider">rnp_&#8203;ffi_&#8203;set_&#8203;pass_&#8203;provider</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-import-keys.php" title="rnp_&#8203;import_&#8203;keys">rnp_&#8203;import_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-import-signatures.php" title="rnp_&#8203;import_&#8203;signatures">rnp_&#8203;import_&#8203;signatures</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-export.php" title="rnp_&#8203;key_&#8203;export">rnp_&#8203;key_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-export-autocrypt.php" title="rnp_&#8203;key_&#8203;export_&#8203;autocrypt">rnp_&#8203;key_&#8203;export_&#8203;autocrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-export-revocation.php" title="rnp_&#8203;key_&#8203;export_&#8203;revocation">rnp_&#8203;key_&#8203;export_&#8203;revocation</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-get-info.php" title="rnp_&#8203;key_&#8203;get_&#8203;info">rnp_&#8203;key_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-remove.php" title="rnp_&#8203;key_&#8203;remove">rnp_&#8203;key_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-key-revoke.php" title="rnp_&#8203;key_&#8203;revoke">rnp_&#8203;key_&#8203;revoke</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-list-keys.php" title="rnp_&#8203;list_&#8203;keys">rnp_&#8203;list_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-load-keys.php" title="rnp_&#8203;load_&#8203;keys">rnp_&#8203;load_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-load-keys-from-path.php" title="rnp_&#8203;load_&#8203;keys_&#8203;from_&#8203;path">rnp_&#8203;load_&#8203;keys_&#8203;from_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-locate-key.php" title="rnp_&#8203;locate_&#8203;key">rnp_&#8203;locate_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-encrypt.php" title="rnp_&#8203;op_&#8203;encrypt">rnp_&#8203;op_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-generate-key.php" title="rnp_&#8203;op_&#8203;generate_&#8203;key">rnp_&#8203;op_&#8203;generate_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-sign.php" title="rnp_&#8203;op_&#8203;sign">rnp_&#8203;op_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-sign-cleartext.php" title="rnp_&#8203;op_&#8203;sign_&#8203;cleartext">rnp_&#8203;op_&#8203;sign_&#8203;cleartext</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-sign-detached.php" title="rnp_&#8203;op_&#8203;sign_&#8203;detached">rnp_&#8203;op_&#8203;sign_&#8203;detached</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-op-verify.php" title="rnp_&#8203;op_&#8203;verify">rnp_&#8203;op_&#8203;verify</a>
                        </li>
                                                <li class="current">
                            <a href="function.rnp-op-verify-detached.php" title="rnp_&#8203;op_&#8203;verify_&#8203;detached">rnp_&#8203;op_&#8203;verify_&#8203;detached</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-save-keys.php" title="rnp_&#8203;save_&#8203;keys">rnp_&#8203;save_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-save-keys-to-path.php" title="rnp_&#8203;save_&#8203;keys_&#8203;to_&#8203;path">rnp_&#8203;save_&#8203;keys_&#8203;to_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-supported-features.php" title="rnp_&#8203;supported_&#8203;features">rnp_&#8203;supported_&#8203;features</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-version-string.php" title="rnp_&#8203;version_&#8203;string">rnp_&#8203;version_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.rnp-version-string-full.php" title="rnp_&#8203;version_&#8203;string_&#8203;full">rnp_&#8203;version_&#8203;string_&#8203;full</a>
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
