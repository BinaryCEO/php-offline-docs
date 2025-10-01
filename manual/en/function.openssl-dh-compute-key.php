<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_dh_compute_key - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-dh-compute-key.php">
 <link rel="shorturl" href="https://www.php.net/openssl-dh-compute-key">
 <link rel="alternate" href="https://www.php.net/openssl-dh-compute-key" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-decrypt.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-digest.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-dh-compute-key.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-dh-compute-key.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-dh-compute-key.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-dh-compute-key.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-dh-compute-key.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-dh-compute-key.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-dh-compute-key.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-dh-compute-key.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-dh-compute-key.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-dh-compute-key.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-dh-compute-key.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes shared secret for public value of remote DH public key and local DH key" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_dh_compute_key - Manual" />
<meta name="twitter:description" content="Computes shared secret for public value of remote DH public key and local DH key" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_dh_compute_key - Manual" />
<meta itemprop="description" content="Computes shared secret for public value of remote DH public key and local DH key" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes shared secret for public value of remote DH public key and local DH key" />

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
        <a href="function.openssl-digest.php">
          openssl_digest &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-decrypt.php">
          &laquo; openssl_decrypt        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.openssl.php'>OpenSSL</a></li>      <li><a href='ref.openssl.php'>OpenSSL Functions</a></li>      </ul>
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
            <option value='en/function.openssl-dh-compute-key.php' selected="selected">English</option>
            <option value='de/function.openssl-dh-compute-key.php'>German</option>
            <option value='es/function.openssl-dh-compute-key.php'>Spanish</option>
            <option value='fr/function.openssl-dh-compute-key.php'>French</option>
            <option value='it/function.openssl-dh-compute-key.php'>Italian</option>
            <option value='ja/function.openssl-dh-compute-key.php'>Japanese</option>
            <option value='pt_BR/function.openssl-dh-compute-key.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-dh-compute-key.php'>Russian</option>
            <option value='tr/function.openssl-dh-compute-key.php'>Turkish</option>
            <option value='uk/function.openssl-dh-compute-key.php'>Ukrainian</option>
            <option value='zh/function.openssl-dh-compute-key.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-dh-compute-key" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_dh_compute_key</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_dh_compute_key</span> &mdash; <span class="dc-title">Computes shared secret for public value of remote DH public key and local DH key</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.openssl-dh-compute-key-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_dh_compute_key</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$public_key</code></span>, <span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="class.opensslasymmetrickey.php" class="type OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a></span> <code class="parameter">$private_key</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The shared secret returned by <span class="function"><strong>openssl_dh_compute_key()</strong></span> is
   often used as an encryption key to secretly communicate with a remote party.
   This is known as the Diffie-Hellman key exchange.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    It is important to use the same DH parameters for remote and local key pairs; otherwise, the
    generated secret between the two parties will not match.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    ECDH is only supported as of PHP 8.1.0 <em>and</em> OpenSSL 3.0.0.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-dh-compute-key-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">public_key</code></dt>
     <dd>
      <p class="para">
       DH Public key of the remote party.
      </p>
     </dd>
    
    
     <dt><code class="parameter">private_key</code></dt>
     <dd>
      <p class="para">
       A local DH private key, corresponding to the public key to be shared with the remote party.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-dh-compute-key-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns shared secret on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-dh-compute-key-changelog">
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
       <code class="parameter">private_key</code> accepts an <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span> now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL key</code> was accepted.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


  <div class="refsect1 examples" id="refsect1-function.openssl-dh-compute-key-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   
   <div class="example" id="example-1020">
    <p><strong>Example #1 Compute a shared secret</strong></p>
    <div class="example-contents"><p>First generate a public/private DH keypair locally, and have 
    the remote party do the same.  We need to use the <code class="literal">openssl</code>
    command-line utility.</p></div>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode"># generate private/public key keypair
openssl dhparam -out dhparam.pem 2048
openssl genpkey -paramfile dhparam.pem -out privatekey.pem

# extract public key only
openssl pkey -in privatekey.pem -pubout -out publickey.pem</pre>
</div>
    </div>

    <div class="example-contents"><p>
    Next, send your public key to the remote party. Use the <code class="literal">openssl 
    pkey</code> command to view the public key you will be sent from 
    the remote party.</p></div>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">openssl pkey -pubin -in remotepublickey.pem -text -noout</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">PKCS#3 DH Public-Key: (2048 bit)
    public-key:
        67:e5:e5:fa:e0:7b:0f:96:2c:dc:96:44:5f:50:02:
        9e:8d:c2:6c:04:68:b0:d1:1d:75:66:fc:63:f5:e3:
        42:30:b8:96:c1:45:cc:08:60:b4:21:3b:dd:ee:66:
        88:db:77:d9:1e:11:89:d4:5c:f2:7a:f2:f1:fe:1c:
        77:9d:6f:13:b8:b2:56:00:ef:cb:3b:60:79:74:02:
        98:f5:f9:8e:3e:b5:62:08:de:ca:8c:c3:40:4a:80:
        79:d5:43:06:17:a8:19:56:af:cc:95:5e:e2:32:2d:
        d2:14:7b:76:5a:9a:f1:3c:76:76:35:cc:7b:c1:a5:
        f4:39:e5:b6:ca:71:3f:7c:3f:97:e5:ab:86:c1:cd:
        0e:e6:ee:04:c9:e6:2d:80:7e:59:c0:49:eb:b6:64:
        4f:a8:f9:bb:a3:87:b3:3d:76:01:9e:2b:16:94:a4:
        37:30:fb:35:e2:63:be:23:90:b9:ef:3f:46:46:04:
        94:8f:60:79:7a:51:55:d6:1a:1d:f5:d9:7f:4a:3e:
        aa:ac:b0:d0:82:cc:c2:e0:94:e0:54:c1:17:83:0b:
        74:08:4d:5a:79:ae:ff:7f:1c:04:ab:23:39:4a:ae:
        87:83:55:43:ab:7a:7c:04:9d:20:80:bb:af:5f:16:
        a3:e3:20:b9:21:47:8c:f8:7f:a8:60:80:9e:61:77:
        36
 [...abbreviated...]</pre>
</div>
    </div>
    <div class="example-contents"><p>Use this public key as a parameter to <span class="function"><strong>openssl_dh_compute_key()</strong></span> 
     in order to compute the shared secret.</p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$remote_public_key </span><span style="color: #007700">= </span><span style="color: #DD0000">'67e5e5fae07b0f962cdc96445f50029e8dc26c0468b0d11d7566fc63f5e34230b896c145cc0860b4213bddee6688db77d91e1189d45cf27af2f1fe1c779d6f13b8b25600efcb3b6079740298f5f98e3eb56208deca8cc3404a8079d5430617a81956afcc955ee2322dd2147b765a9af13c767635cc7bc1a5f439e5b6ca713f7c3f97e5ab86c1cd0ee6ee04c9e62d807e59c049ebb6644fa8f9bba387b33d76019e2b1694a43730fb35e263be2390b9ef3f464604948f60797a5155d61a1df5d97f4a3eaaacb0d082ccc2e094e054c117830b74084d5a79aeff7f1c04ab23394aae87835543ab7a7c049d2080bbaf5f16a3e320b921478cf87fa860809e617736'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$local_priv_key </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_private</span><span style="color: #007700">(</span><span style="color: #DD0000">'file://privatekey.pem'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$shared_secret </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_dh_compute_key</span><span style="color: #007700">(</span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$remote_public_key</span><span style="color: #007700">), </span><span style="color: #0000BB">$local_priv_key</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$shared_secret</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1021">
    <p><strong>Example #2 Generate a DH public/private keypair in php</strong></p>
    <div class="example-contents"><p>First, generate the DH prime number</p></div>
    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">openssl dhparam -out dhparam.pem 2048
openssl dh -in dhparam.pem -noout  -text</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">PKCS#3 DH Parameters: (2048 bit)
        prime:
            00:a3:25:1e:73:3f:44:b9:2b:ee:f4:9d:9f:37:6a:
            4b:fd:1d:bd:f4:af:da:c8:10:77:59:41:c6:5f:73:
            d2:88:29:39:cd:1c:5f:c3:9f:0f:22:d2:9c:20:c1:
            e4:c0:18:03:b8:b6:d8:da:ad:3b:39:a6:da:8e:fe:
            12:30:e9:03:5d:22:ba:ef:18:d2:7b:69:f9:5b:cb:
            78:c6:0c:8c:6b:f2:49:92:c2:49:e0:45:77:72:b3:
            55:36:30:f2:40:17:89:18:50:03:fa:2d:54:7a:7f:
            34:4c:73:32:b6:88:14:51:14:be:80:57:95:e6:a3:
            f6:51:ff:17:47:4f:15:d6:0e:6c:47:53:72:2c:2a:
            4c:21:cb:7d:f3:49:97:c9:47:5e:40:33:7b:99:52:
            7e:7a:f3:52:27:80:de:1b:26:6b:40:bb:14:11:0b:
            fb:e6:d8:2f:cf:a0:06:2f:96:b9:1c:0b:b4:cb:d3:
            a6:62:9c:48:67:f6:81:f2:c6:ff:45:03:0a:9d:67:
            9d:ce:27:d9:6b:48:5d:ca:fb:c2:5d:84:9b:8b:cb:
            40:c7:a4:0c:8a:6e:f4:ab:ba:b6:10:c3:b8:25:4d:
            cf:60:96:f4:db:e8:00:1c:58:47:7a:fb:51:86:d1:
            22:d7:4e:94:31:7a:d5:da:3d:53:de:da:bb:64:8d:
            62:6b
        generator: 2 (0x2)</pre>
</div>
    </div>
    <div class="example-contents"><p>Prime and generator values ares passed as p and g into <span class="function"><a href="function.openssl-pkey-new.php" class="function">openssl_pkey_new()</a></span></p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$configargs </span><span style="color: #007700">= array();<br /></span><span style="color: #0000BB">$configargs</span><span style="color: #007700">[</span><span style="color: #DD0000">'p'</span><span style="color: #007700">] = </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #DD0000">'00a3251e733f44b92beef49d9f376a4bfd1dbdf4afdac810775941c65f73d2882939cd1c5fc39f0f22d29c20c1e4c01803b8b6d8daad3b39a6da8efe1230e9035d22baef18d27b69f95bcb78c60c8c6bf24992c249e0457772b3553630f2401789185003fa2d547a7f344c7332b688145114be805795e6a3f651ff17474f15d60e6c4753722c2a4c21cb7df34997c9475e40337b99527e7af3522780de1b266b40bb14110bfbe6d82fcfa0062f96b91c0bb4cbd3a6629c4867f681f2c6ff45030a9d679dce27d96b485dcafbc25d849b8bcb40c7a40c8a6ef4abbab610c3b8254dcf6096f4dbe8001c58477afb5186d122d74e94317ad5da3d53dedabb648d626b'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$configargs</span><span style="color: #007700">[</span><span style="color: #DD0000">'g'</span><span style="color: #007700">] = </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #DD0000">'02'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$private_key </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'dh' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$configargs</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">openssl_pkey_export_to_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$private_key</span><span style="color: #007700">,</span><span style="color: #DD0000">'privatekey.pem'</span><span style="color: #007700">,</span><span style="color: #0000BB">$passphrase</span><span style="color: #007700">=</span><span style="color: #DD0000">'y0urp@s5phr@se'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$details </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_details</span><span style="color: #007700">(</span><span style="color: #0000BB">$private_key</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$local_pub_key </span><span style="color: #007700">= </span><span style="color: #0000BB">$details</span><span style="color: #007700">[</span><span style="color: #DD0000">'dh'</span><span style="color: #007700">][</span><span style="color: #DD0000">'pub_key'</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$local_pub_key</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;</span><span style="color: #FF8000">//you can send your public key to the remote party<br /><br /></span><span style="color: #0000BB">$details </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_details</span><span style="color: #007700">(</span><span style="color: #0000BB">openssl_pkey_get_public</span><span style="color: #007700">(</span><span style="color: #DD0000">"file://remotepublickey.pem"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">$remote_public_key </span><span style="color: #007700">= </span><span style="color: #0000BB">$details</span><span style="color: #007700">[</span><span style="color: #DD0000">'dh'</span><span style="color: #007700">][</span><span style="color: #DD0000">'pub_key'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$shared_secret </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_dh_compute_key</span><span style="color: #007700">(</span><span style="color: #0000BB">$remote_public_key</span><span style="color: #007700">, </span><span style="color: #0000BB">$private_key</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$shared_secret</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.openssl-dh-compute-key-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.openssl-pkey-new.php" class="function" rel="rdfs-seeAlso">openssl_pkey_new()</a> - Generates a new private key</span></li>
    <li><span class="function"><a href="function.openssl-pkey-get-details.php" class="function" rel="rdfs-seeAlso">openssl_pkey_get_details()</a> - Returns an array with the key details</span></li>
    <li><span class="function"><a href="function.openssl-pkey-get-private.php" class="function" rel="rdfs-seeAlso">openssl_pkey_get_private()</a> - Get a private key</span></li>
    <li><span class="function"><a href="function.openssl-pkey-get-public.php" class="function" rel="rdfs-seeAlso">openssl_pkey_get_public()</a> - Extract public key from certificate and prepare it for use</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-dh-compute-key.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-dh-compute-key%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-dh-compute-key&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-dh-compute-key.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126645">  <div class="votes">
    <div id="Vu126645">
    <a href="/manual/vote-note.php?id=126645&amp;page=function.openssl-dh-compute-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126645">
    <a href="/manual/vote-note.php?id=126645&amp;page=function.openssl-dh-compute-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126645" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126645" class="name">
  <strong class="user"><em>k.s.swaminathan at live dot com</em></strong></a><a class="genanchor" href="#126645"> &para;</a><div class="date" title="2021-11-30 12:53"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126645">
<div class="phpcode"><code><span class="html">// Purpose: Provide a working example of Diffie-Hellman, entirely in php.<br /><br />// This function generates a configuration for Diffie-Hellman keypair<br />// We start with an empty config and have openssl_pkey_new create <br />// a prime and a generator. This is a time consuming step. <br /><br />function get_DH_params ($keylength=2048, $digest_alg="sha512")<br />{<br />    $pkey = openssl_pkey_new(["digest_alg" =&gt; $digest_alg,<br />                        "private_key_bits" =&gt; $keylength,<br />                        "private_key_type" =&gt; OPENSSL_KEYTYPE_DH]);<br />    $details = openssl_pkey_get_details($pkey);<br />    return [<br />            "digest_alg" =&gt; $digest_alg,<br />            "private_key_bits" =&gt; $keylength,<br />            "dh" =&gt; array('p' =&gt; $details['dh']['p'], 'g' =&gt; $details['dh']['g']),<br />            "private_key_type" =&gt; OPENSSL_KEYTYPE_DH,<br />        ];<br />}<br /><br />// Now Alice and Bob can create their respective keypairs<br />function get_DH_keyPair ($DH_params) <br />{<br />    $pkey = openssl_pkey_new($DH_params);           <br />    $privkey = openssl_pkey_get_private($pkey);<br />    $pubkey = openssl_pkey_get_details($pkey)['dh']['pub_key'];<br />    return (object) compact('pubkey','privkey');<br />}<br /><br />// Now Alice and Bob can create a mutual secret<br />function get_DH_mutualsecret($peers_public, $my_private)<br />{<br />    return bin2hex(openssl_dh_compute_key($peers_public, $my_private));<br />}<br /><br />// Usage<br />&gt;&gt;&gt; $dh_params = get_DH_params();<br />=&gt; [<br />     "digest_alg" =&gt; "sha512",<br />     "private_key_bits" =&gt; 2048,<br />     "dh" =&gt; [<br />       "p" =&gt; b"ó»¸'#ð\x18\x04Û_Ä\tõyÁZàx\x15\x14\x11ƒ┬l=Ü┤H\0",<br />       "g" =&gt; "\x02",<br />     ],<br />     "private_key_type" =&gt; 2,<br />   ]<br /><br />// Alice &amp; Bob generate their keys from the same dh_params.<br />// Binary values truncated.<br /><br />&gt;&gt;&gt; $alice = get_DH_keypair($dh_params);<br />=&gt; {#3773<br />     +"pubkey": b"""EØüÔSðÔîË╚ùà5ÜLÜ$┘▄±ü6]",<br />     +"privkey": OpenSSLAsymmetricKey {#3771},<br />   }<br /><br />&gt;&gt;&gt; $bob = get_DH_keypair($dh_params);<br />=&gt; {#3774<br />     +"pubkey": b"'ua¥ªo\ê\x11║OM©\vó╣ßÜWöíþ³e÷:\t9Ô\rB┌\x13",<br />     +"privkey": OpenSSLAsymmetricKey {#3765},<br />   }<br /><br />&gt;&gt;&gt; $alice_secret = get_DH_mutualsecret($bob-&gt;pubkey, $alice-&gt;privkey);<br />=&gt; "5fbf9df2f13da103f106.  ....."<br /><br />&gt;&gt;&gt; $bob_secret = get_DH_mutualsecret($alice-&gt;pubkey, $bob-&gt;privkey);<br />=&gt; "5fbf9df2f13da103f106.  ....."<br /><br />&gt;&gt;&gt; $bob_secret == $alice_secret;<br />=&gt; true<br /><br />// Now Alice and Bob have a shared secret which they can use as a symmetric key. The key will be 2048 bits long (same as the DH key length parameter). They can hash it to get a shorter key if they want. <br /><br />// A third person, Charlie, can also create a key pair like Alice and Bob. <br />// And Charlie and Alice can create their own Alice and Bob did.<br />// And Charlie and Bob can create their own (separate) secret. <br />//</span></code></div>
  </div>
 </div>
  <div class="note" id="125624">  <div class="votes">
    <div id="Vu125624">
    <a href="/manual/vote-note.php?id=125624&amp;page=function.openssl-dh-compute-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125624">
    <a href="/manual/vote-note.php?id=125624&amp;page=function.openssl-dh-compute-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125624" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125624" class="name">
  <strong class="user"><em>vangelier at hotmail dot com</em></strong></a><a class="genanchor" href="#125624"> &para;</a><div class="date" title="2020-12-22 08:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125624">
<div class="phpcode"><code><span class="html">A working example. After some study and reading I finally get how this method is working.<br /><br />You need to follow the below 4 steps;<br /><br />1. You create a public key which is known to 1:n parties.<br />2. Each party creates their own keypair.<br />2a. Each party shared their public key with the members.<br />3. Each user can re-create the shared secret by using his Private Key and the Public Key of the other parties.<br />4. Compare the secrets as a handshake<br /><br />/* 1. Create the first, global known public key. */<br /><br />/**<br />     * Get DH public/private keys<br />     * @return array<br />     */<br />    public static function get_keypair()<br />    {<br />        $keys = [];<br /><br />        $config = [<br />            "digest_alg" =&gt; "sha512",<br />            "private_key_bits" =&gt; 2048,<br />            "private_key_type" =&gt; OPENSSL_KEYTYPE_DH,<br />        ];<br /><br />        // Create the private and public key<br />        $res = openssl_pkey_new($config);<br /><br />        $pubKey = openssl_pkey_get_details($res);<br />        $keys["public"] = $pubKey["key"];<br /><br />        openssl_pkey_export($res, $privKey);<br /><br />        $keys["private"] = $privKey;<br /><br />        return $keys;<br />    }<br /><br />Now you share the Public Key with every member of the party.<br /><br />/* 2. Each user creates a new Key Pair with the P,G from the global public key info */<br /><br />$key = openssl_get_publickey(base64_decode($publicKey));<br />$info = openssl_pkey_get_details($key);<br />$params = $info["dh"];<br /><br />Now you have the P,G from the public key. Use it;<br /><br />/**<br />     * Create keypair from Prime and Generator for KeyExchange<br />     * @param $prime<br />     * @param $generator<br />     */<br />    public static function create_keypair_from_pg($prime, $generator)<br />    {<br />        $config = [<br />            "digest_alg" =&gt; "sha512",<br />            "private_key_bits" =&gt; 2048,<br />            "dh" =&gt; [<br />                "p" =&gt; $prime,<br />                "g" =&gt; $generator<br />            ],<br />            "private_key_type" =&gt; OPENSSL_KEYTYPE_DH,<br />        ];<br /><br />        return openssl_pkey_new($config);<br />    }<br /><br />/* 3. Create a shared secret with your Private Key, and User 1:n's Public Key */<br /><br />$privateKey = openssl_get_publickey(base64_decode($privateKeyData));<br /><br />$secret1 = openssl_dh_compute_key($user1PublicKey, $privateKey);<br />        if($secret !== false) {<br />            return bin2hex($secret);<br />        }else{<br />            print_r(openssl_error_string());<br />        }<br /><br />$secret2 = openssl_dh_compute_key($user2PublicKey, $privateKey);<br />        if($secret !== false) {<br />            return bin2hex($secret);<br />        }else{<br />            print_r(openssl_error_string());<br />        }<br /><br />/* 4. Compare the secrets as a handshake method */<br /><br />if(strcmp($secret1, $secret2) === 0) {<br />            return true;<br />        }<br /><br />        return false;<br /><br />Good luck, enjoy!. Keep me posted about improvements and updates.  vangelier AT hotmail DOT com</span></code></div>
  </div>
 </div>
  <div class="note" id="125623">  <div class="votes">
    <div id="Vu125623">
    <a href="/manual/vote-note.php?id=125623&amp;page=function.openssl-dh-compute-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125623">
    <a href="/manual/vote-note.php?id=125623&amp;page=function.openssl-dh-compute-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125623" title="no votes...">
    0
    </div>
  </div>
  <a href="#125623" class="name">
  <strong class="user"><em>vangelier at hotmail dot com</em></strong></a><a class="genanchor" href="#125623"> &para;</a><div class="date" title="2020-12-21 06:02"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125623">
<div class="phpcode"><code><span class="html">Is it possible for someone to post a working example?  I have written many test and examples, and I just can't seem to get 2 secrets that are alike with this method.<br /><br />I am following this; <a href="https://sandilands.info/sgordon/diffie-hellman-secret-key-exchange-with-openssl" rel="nofollow" target="_blank">https://sandilands.info/sgordon/diffie-hellman-secret-key-exchange-with-openssl</a><br /><br />With the console, it works great. With openssl_dh_compute_key it does not work.</span></code></div>
  </div>
 </div>
  <div class="note" id="125714">  <div class="votes">
    <div id="Vu125714">
    <a href="/manual/vote-note.php?id=125714&amp;page=function.openssl-dh-compute-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125714">
    <a href="/manual/vote-note.php?id=125714&amp;page=function.openssl-dh-compute-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125714" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125714" class="name">
  <strong class="user"><em>vangelier at hotmail dot com</em></strong></a><a class="genanchor" href="#125714"> &para;</a><div class="date" title="2021-01-23 07:35"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125714">
<div class="phpcode"><code><span class="html">After some challenges I decided to write a C++ and PHP code samples.<br /><br />As it can be very tricky to get a grib on how the Diffie and Hellman algoritm work. The code samples are cross compatible.<br /><br />Gist with PHP code and C++ code:<br /><br /><a href="https://gist.github.com/digitalhuman/2a2b85d61672e4bf83596d41351723ba" rel="nofollow" target="_blank">https://gist.github.com/digitalhuman/2a2b85d61672e4bf83596d41351723ba</a><br /><br />Enjoy!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-dh-compute-key&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-dh-compute-key.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.openssl.php">OpenSSL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.openssl-cipher-iv-length.php" title="openssl_&#8203;cipher_&#8203;iv_&#8203;length">openssl_&#8203;cipher_&#8203;iv_&#8203;length</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cipher-key-length.php" title="openssl_&#8203;cipher_&#8203;key_&#8203;length">openssl_&#8203;cipher_&#8203;key_&#8203;length</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cms-decrypt.php" title="openssl_&#8203;cms_&#8203;decrypt">openssl_&#8203;cms_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cms-encrypt.php" title="openssl_&#8203;cms_&#8203;encrypt">openssl_&#8203;cms_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cms-read.php" title="openssl_&#8203;cms_&#8203;read">openssl_&#8203;cms_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cms-sign.php" title="openssl_&#8203;cms_&#8203;sign">openssl_&#8203;cms_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-cms-verify.php" title="openssl_&#8203;cms_&#8203;verify">openssl_&#8203;cms_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-export.php" title="openssl_&#8203;csr_&#8203;export">openssl_&#8203;csr_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-export-to-file.php" title="openssl_&#8203;csr_&#8203;export_&#8203;to_&#8203;file">openssl_&#8203;csr_&#8203;export_&#8203;to_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-get-public-key.php" title="openssl_&#8203;csr_&#8203;get_&#8203;public_&#8203;key">openssl_&#8203;csr_&#8203;get_&#8203;public_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-get-subject.php" title="openssl_&#8203;csr_&#8203;get_&#8203;subject">openssl_&#8203;csr_&#8203;get_&#8203;subject</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-new.php" title="openssl_&#8203;csr_&#8203;new">openssl_&#8203;csr_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-csr-sign.php" title="openssl_&#8203;csr_&#8203;sign">openssl_&#8203;csr_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-decrypt.php" title="openssl_&#8203;decrypt">openssl_&#8203;decrypt</a>
                        </li>
                                                <li class="current">
                            <a href="function.openssl-dh-compute-key.php" title="openssl_&#8203;dh_&#8203;compute_&#8203;key">openssl_&#8203;dh_&#8203;compute_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-digest.php" title="openssl_&#8203;digest">openssl_&#8203;digest</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-encrypt.php" title="openssl_&#8203;encrypt">openssl_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-error-string.php" title="openssl_&#8203;error_&#8203;string">openssl_&#8203;error_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-free-key.php" title="openssl_&#8203;free_&#8203;key">openssl_&#8203;free_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-cert-locations.php" title="openssl_&#8203;get_&#8203;cert_&#8203;locations">openssl_&#8203;get_&#8203;cert_&#8203;locations</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-cipher-methods.php" title="openssl_&#8203;get_&#8203;cipher_&#8203;methods">openssl_&#8203;get_&#8203;cipher_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-curve-names.php" title="openssl_&#8203;get_&#8203;curve_&#8203;names">openssl_&#8203;get_&#8203;curve_&#8203;names</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-md-methods.php" title="openssl_&#8203;get_&#8203;md_&#8203;methods">openssl_&#8203;get_&#8203;md_&#8203;methods</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-privatekey.php" title="openssl_&#8203;get_&#8203;privatekey">openssl_&#8203;get_&#8203;privatekey</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-get-publickey.php" title="openssl_&#8203;get_&#8203;publickey">openssl_&#8203;get_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-open.php" title="openssl_&#8203;open">openssl_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pbkdf2.php" title="openssl_&#8203;pbkdf2">openssl_&#8203;pbkdf2</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs12-export.php" title="openssl_&#8203;pkcs12_&#8203;export">openssl_&#8203;pkcs12_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs12-export-to-file.php" title="openssl_&#8203;pkcs12_&#8203;export_&#8203;to_&#8203;file">openssl_&#8203;pkcs12_&#8203;export_&#8203;to_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs12-read.php" title="openssl_&#8203;pkcs12_&#8203;read">openssl_&#8203;pkcs12_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs7-decrypt.php" title="openssl_&#8203;pkcs7_&#8203;decrypt">openssl_&#8203;pkcs7_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs7-encrypt.php" title="openssl_&#8203;pkcs7_&#8203;encrypt">openssl_&#8203;pkcs7_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs7-read.php" title="openssl_&#8203;pkcs7_&#8203;read">openssl_&#8203;pkcs7_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs7-sign.php" title="openssl_&#8203;pkcs7_&#8203;sign">openssl_&#8203;pkcs7_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkcs7-verify.php" title="openssl_&#8203;pkcs7_&#8203;verify">openssl_&#8203;pkcs7_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-derive.php" title="openssl_&#8203;pkey_&#8203;derive">openssl_&#8203;pkey_&#8203;derive</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-export.php" title="openssl_&#8203;pkey_&#8203;export">openssl_&#8203;pkey_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-export-to-file.php" title="openssl_&#8203;pkey_&#8203;export_&#8203;to_&#8203;file">openssl_&#8203;pkey_&#8203;export_&#8203;to_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-free.php" title="openssl_&#8203;pkey_&#8203;free">openssl_&#8203;pkey_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-get-details.php" title="openssl_&#8203;pkey_&#8203;get_&#8203;details">openssl_&#8203;pkey_&#8203;get_&#8203;details</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-get-private.php" title="openssl_&#8203;pkey_&#8203;get_&#8203;private">openssl_&#8203;pkey_&#8203;get_&#8203;private</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-get-public.php" title="openssl_&#8203;pkey_&#8203;get_&#8203;public">openssl_&#8203;pkey_&#8203;get_&#8203;public</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-pkey-new.php" title="openssl_&#8203;pkey_&#8203;new">openssl_&#8203;pkey_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-private-decrypt.php" title="openssl_&#8203;private_&#8203;decrypt">openssl_&#8203;private_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-private-encrypt.php" title="openssl_&#8203;private_&#8203;encrypt">openssl_&#8203;private_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-public-decrypt.php" title="openssl_&#8203;public_&#8203;decrypt">openssl_&#8203;public_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-public-encrypt.php" title="openssl_&#8203;public_&#8203;encrypt">openssl_&#8203;public_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-random-pseudo-bytes.php" title="openssl_&#8203;random_&#8203;pseudo_&#8203;bytes">openssl_&#8203;random_&#8203;pseudo_&#8203;bytes</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-seal.php" title="openssl_&#8203;seal">openssl_&#8203;seal</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-sign.php" title="openssl_&#8203;sign">openssl_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-spki-export.php" title="openssl_&#8203;spki_&#8203;export">openssl_&#8203;spki_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-spki-export-challenge.php" title="openssl_&#8203;spki_&#8203;export_&#8203;challenge">openssl_&#8203;spki_&#8203;export_&#8203;challenge</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-spki-new.php" title="openssl_&#8203;spki_&#8203;new">openssl_&#8203;spki_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-spki-verify.php" title="openssl_&#8203;spki_&#8203;verify">openssl_&#8203;spki_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-verify.php" title="openssl_&#8203;verify">openssl_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-check-private-key.php" title="openssl_&#8203;x509_&#8203;check_&#8203;private_&#8203;key">openssl_&#8203;x509_&#8203;check_&#8203;private_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-checkpurpose.php" title="openssl_&#8203;x509_&#8203;checkpurpose">openssl_&#8203;x509_&#8203;checkpurpose</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-export.php" title="openssl_&#8203;x509_&#8203;export">openssl_&#8203;x509_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-export-to-file.php" title="openssl_&#8203;x509_&#8203;export_&#8203;to_&#8203;file">openssl_&#8203;x509_&#8203;export_&#8203;to_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-fingerprint.php" title="openssl_&#8203;x509_&#8203;fingerprint">openssl_&#8203;x509_&#8203;fingerprint</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-free.php" title="openssl_&#8203;x509_&#8203;free">openssl_&#8203;x509_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-parse.php" title="openssl_&#8203;x509_&#8203;parse">openssl_&#8203;x509_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-read.php" title="openssl_&#8203;x509_&#8203;read">openssl_&#8203;x509_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.openssl-x509-verify.php" title="openssl_&#8203;x509_&#8203;verify">openssl_&#8203;x509_&#8203;verify</a>
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
