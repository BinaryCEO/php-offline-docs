<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_verify - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-verify.php">
 <link rel="shorturl" href="https://www.php.net/openssl-verify">
 <link rel="alternate" href="https://www.php.net/openssl-verify" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-spki-verify.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-x509-check-private-key.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-verify.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-verify.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-verify.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-verify.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-verify.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-verify.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-verify.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-verify.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-verify.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-verify.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-verify.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Verify signature" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_verify - Manual" />
<meta name="twitter:description" content="Verify signature" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_verify - Manual" />
<meta itemprop="description" content="Verify signature" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Verify signature" />

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
        <a href="function.openssl-x509-check-private-key.php">
          openssl_x509_check_private_key &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-spki-verify.php">
          &laquo; openssl_spki_verify        </a>
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
            <option value='en/function.openssl-verify.php' selected="selected">English</option>
            <option value='de/function.openssl-verify.php'>German</option>
            <option value='es/function.openssl-verify.php'>Spanish</option>
            <option value='fr/function.openssl-verify.php'>French</option>
            <option value='it/function.openssl-verify.php'>Italian</option>
            <option value='ja/function.openssl-verify.php'>Japanese</option>
            <option value='pt_BR/function.openssl-verify.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-verify.php'>Russian</option>
            <option value='tr/function.openssl-verify.php'>Turkish</option>
            <option value='uk/function.openssl-verify.php'>Ukrainian</option>
            <option value='zh/function.openssl-verify.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-verify" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_verify</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_verify</span> &mdash; <span class="dc-title">Verify signature</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-verify-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_verify</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$signature</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.opensslasymmetrickey.php" class="type OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a></span>|<span class="type"><a href="class.opensslcertificate.php" class="type OpenSSLCertificate">OpenSSLCertificate</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$public_key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$algorithm</code><span class="initializer"> = <strong><code><a href="openssl.signature-algos.php#constant.openssl-algo-sha1">OPENSSL_ALGO_SHA1</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_verify()</strong></span> verifies that the
   <code class="parameter">signature</code> is correct for the specified
   <code class="parameter">data</code> using the public key associated with
   <code class="parameter">public_key</code>. This must be the public key
   corresponding to the private key used for signing.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-verify-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The string of data used to generate the signature previously
      </p>
     </dd>
    
    
     <dt><code class="parameter">signature</code></dt>
     <dd>
      <p class="para">
       A raw binary string, generated by <span class="function"><a href="function.openssl-sign.php" class="function">openssl_sign()</a></span> or similar means
      </p>
     </dd>
    
    
     <dt><code class="parameter">public_key</code></dt>
     <dd>
      <p class="para">
       <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span> - a key, returned by <span class="function"><a href="function.openssl-get-publickey.php" class="function">openssl_get_publickey()</a></span>
      </p>
      <p class="para">
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span> - a <abbr title="Privacy-Enhanced Mail">PEM</abbr> formatted key (e.g. <code class="literal">-----BEGIN PUBLIC KEY-----
MIIBCgK...</code>)
      </p>     
     </dd>
    
    
     <dt><code class="parameter">algorithm</code></dt>
     <dd>
      <p class="para">
       <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> - one of these <a href="openssl.signature-algos.php" class="link">Signature Algorithms</a>.
      </p>
      <p class="para">
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span> - a valid string returned by <span class="function"><a href="function.openssl-get-md-methods.php" class="function">openssl_get_md_methods()</a></span> example, &quot;sha1WithRSAEncryption&quot; or &quot;sha512&quot;.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-verify-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns 1 if the signature is correct, 0 if it is incorrect, and
   -1 or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-verify-changelog">
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
       <code class="parameter">public_key</code> accepts an <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span>
       or <span class="classname"><a href="class.opensslcertificate.php" class="classname">OpenSSLCertificate</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL key</code> or <code class="literal">OpenSSL X.509</code>
       was accepted.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.openssl-verify-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1050">
    <p><strong>Example #1 <span class="function"><strong>openssl_verify()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// $data and $signature are assumed to contain the data and the signature<br /><br />// fetch public key from certificate and ready it<br /></span><span style="color: #0000BB">$pubkeyid </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_public</span><span style="color: #007700">(</span><span style="color: #DD0000">"file://src/openssl-0.9.6/demos/sign/cert.pem"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// state whether signature is okay or not<br /></span><span style="color: #0000BB">$ok </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_verify</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$signature</span><span style="color: #007700">, </span><span style="color: #0000BB">$pubkeyid</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$ok </span><span style="color: #007700">== </span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"good"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">$ok </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"bad"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"ugly, error checking signature"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #FF8000">// free the key from memory<br /></span><span style="color: #0000BB">openssl_free_key</span><span style="color: #007700">(</span><span style="color: #0000BB">$pubkeyid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-1051">
    <p><strong>Example #2 <span class="function"><strong>openssl_verify()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//data you want to sign<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #DD0000">'my data'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//create new private and public key<br /></span><span style="color: #0000BB">$private_key_res </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">"private_key_bits" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2048</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"private_key_type" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">OPENSSL_KEYTYPE_RSA</span><span style="color: #007700">,<br />));<br /></span><span style="color: #0000BB">$details </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_details</span><span style="color: #007700">(</span><span style="color: #0000BB">$private_key_res</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$public_key_res </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_public</span><span style="color: #007700">(</span><span style="color: #0000BB">$details</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">//create signature<br /></span><span style="color: #0000BB">openssl_sign</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$signature</span><span style="color: #007700">, </span><span style="color: #0000BB">$private_key_res</span><span style="color: #007700">, </span><span style="color: #DD0000">"sha256WithRSAEncryption"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//verify signature<br /></span><span style="color: #0000BB">$ok </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_verify</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">$signature</span><span style="color: #007700">, </span><span style="color: #0000BB">$public_key_res</span><span style="color: #007700">, </span><span style="color: #0000BB">OPENSSL_ALGO_SHA256</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$ok </span><span style="color: #007700">== </span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"valid"</span><span style="color: #007700">;<br />} elseif (</span><span style="color: #0000BB">$ok </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"invalid"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"error: "</span><span style="color: #007700">.</span><span style="color: #0000BB">openssl_error_string</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.openssl-verify-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.openssl-sign.php" class="function" rel="rdfs-seeAlso">openssl_sign()</a> - Generate signature</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-verify.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-verify%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-verify&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-verify.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="62526">  <div class="votes">
    <div id="Vu62526">
    <a href="/manual/vote-note.php?id=62526&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62526">
    <a href="/manual/vote-note.php?id=62526&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62526" title="60% like this...">
    6
    </div>
  </div>
  <a href="#62526" class="name">
  <strong class="user"><em>Stiv</em></strong></a><a class="genanchor" href="#62526"> &para;</a><div class="date" title="2006-03-02 06:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62526">
<div class="phpcode"><code><span class="html">I've finally found a way to verify signature. Sample in the documentation doesn't work. Code bellow DOES work :)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// $data is assumed to contain the data to be signed<br /><br />// fetch certificate from file and ready it<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"path/file.pem"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">$cert </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">8192</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br /><br /></span><span class="comment">// state whether signature is okay or not<br />// use the certificate, not the public key<br /></span><span class="default">$ok </span><span class="keyword">= </span><span class="default">openssl_verify</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$signature</span><span class="keyword">, </span><span class="default">$cert</span><span class="keyword">);<br />if (</span><span class="default">$ok </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />    echo </span><span class="string">"good"</span><span class="keyword">;<br />} elseif (</span><span class="default">$ok </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />    echo </span><span class="string">"bad"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"ugly, error checking signature"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98282">  <div class="votes">
    <div id="Vu98282">
    <a href="/manual/vote-note.php?id=98282&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98282">
    <a href="/manual/vote-note.php?id=98282&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98282" title="60% like this...">
    4
    </div>
  </div>
  <a href="#98282" class="name">
  <strong class="user"><em>mikey at badpenguins dot com</em></strong></a><a class="genanchor" href="#98282"> &para;</a><div class="date" title="2010-06-06 09:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98282">
<div class="phpcode"><code><span class="html">I spent days scouring the php openssl documentation trying to figure out how to do what sounds like a simple task - given two PEM encoded certificates, is one the signer of the other?  Nowhere in the openssl_verify() documentation or comments is it explained where to obtain the signature of an existing certificate.  The openssl_x509_parse() function looked promising, but it is an unstable API that may change.<br /><br />I had to write my own code to determine if one cert signed another, it is located here: <a href="http://badpenguins.com/source/misc/isCertSigner.php?viewSource" rel="nofollow" target="_blank">http://badpenguins.com/source/misc/isCertSigner.php?viewSource</a><br /><br />In a nutshell here is what I learned...<br /><br />The signature data in a signed X.509 certificate contains DER formatted data about the signature that is encrypted with the signers public key.  The data contains a hash of the original subject certificate and information about what encryption algorithm was used to create the signature.<br /><br />So you need to get this signature data and a copy of the original certificate with the issuer and signature sequences removed.  Hash a copy of the original certificate (sans issuer/signature sequences) with the same algorithm the issuer used and if the hashes match, you have the issuer cert that signed the certificate.</span></code></div>
  </div>
 </div>
  <div class="note" id="13299">  <div class="votes">
    <div id="Vu13299">
    <a href="/manual/vote-note.php?id=13299&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13299">
    <a href="/manual/vote-note.php?id=13299&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13299" title="75% like this...">
    2
    </div>
  </div>
  <a href="#13299" class="name">
  <strong class="user"><em>meint dot post at bigfoot dot com</em></strong></a><a class="genanchor" href="#13299"> &para;</a><div class="date" title="2001-06-09 11:56"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13299">
<div class="phpcode"><code><span class="html">Anbybody trying to get a Win32 CryptoAPI based digital signature component to work with the openssl_verify() function should be aware that the CryptoAPI PKCS1 (RSA) method uses bytes in reverse order while the openssl_verify() method expects a correctly formatted PKCS1 digital signature (as should be). I learned this the hard way and it took me some time to dig this out. A simple solution in VBScript to reverse the byte order:
<br />
<br />N = Len(Blob.Hex)
<br />
<br />' reverse bytes in the signature using Hex format 
<br />For i = 1 To N - 1 Step 2 
<br />    s = Mid(Blob, i, 2) &amp; s 
<br />Next 
<br />
<br />s contains the digital signature in reverse order. Blob is an arbitrary binary container.
<br />
<br />Send the signature off in Hex format and use a hex2bin method in PHP to convert to the correct format for openssl_verify(), i.e.
<br />
<br />function hex2bin($data) {
<br />
<br />    $len = strlen($data);
<br />    return pack("H" . $len, $data);
<br />
<br />} 
<br />
<br />That's it, hope it helps out. BTW I used ASPEncrypt to toy around with on Win32 platform. Works only with Internet Explorer but you could also use a Java applet and have none of the abovementioned problems :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="122307">  <div class="votes">
    <div id="Vu122307">
    <a href="/manual/vote-note.php?id=122307&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122307">
    <a href="/manual/vote-note.php?id=122307&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122307" title="66% like this...">
    2
    </div>
  </div>
  <a href="#122307" class="name">
  <strong class="user"><em>peter dot labos at gmail dot com</em></strong></a><a class="genanchor" href="#122307"> &para;</a><div class="date" title="2018-01-23 02:10"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122307">
<div class="phpcode"><code><span class="html">openssl_verify() is populating openssl_error_string() even on false. <br /><br />When openssl_verify() returns 0, openssl_error_string() is populated with 1.<br />I spent lot of time to understand, while my next call to openssl was failing with checks for error.<br /><br /><span class="default">&lt;?php<br />$c </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$publicKey </span><span class="keyword">= </span><span class="default">openssl_pkey_get_public</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">openssl_verify</span><span class="keyword">(</span><span class="string">'freedom'</span><span class="keyword">, </span><span class="string">'someirrelevantnosign'</span><span class="keyword">, </span><span class="default">$publicKey</span><span class="keyword">);<br /><br /></span><span class="default">$error </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /><br />while (</span><span class="default">$msg </span><span class="keyword">= </span><span class="default">openssl_error_string</span><span class="keyword">() !== </span><span class="default">false</span><span class="keyword">) {<br />    </span><span class="default">$error </span><span class="keyword">.= </span><span class="default">$msg</span><span class="keyword">;<br />}<br /><br />if (!empty(</span><span class="default">$error</span><span class="keyword">)) {<br />    echo </span><span class="default">$error</span><span class="keyword">; </span><span class="comment">// 1<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="21889">  <div class="votes">
    <div id="Vu21889">
    <a href="/manual/vote-note.php?id=21889&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21889">
    <a href="/manual/vote-note.php?id=21889&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21889" title="56% like this...">
    2
    </div>
  </div>
  <a href="#21889" class="name">
  <strong class="user"><em>steve dot venable at lmco dot com</em></strong></a><a class="genanchor" href="#21889"> &para;</a><div class="date" title="2002-05-30 12:36"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21889">
<div class="phpcode"><code><span class="html">A note about the openssl_verify() (and some of the other functions).  The public key comes from a certificate in any of the support formats (as the example shows, use openssl_get_publickey() to get the resource id).  But after some trial and error I found the signature string MUST BE BINARY.  While no error occurs, passing a base64-formatted signature string (PEM format?), you simply get a mismatch.  When I did the base64 decode myself, the verify returned a match (return value 1).  You can simply drop the begin/end lines and take the output of the 'base64_decode()' function.</span></code></div>
  </div>
 </div>
  <div class="note" id="126439">  <div class="votes">
    <div id="Vu126439">
    <a href="/manual/vote-note.php?id=126439&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126439">
    <a href="/manual/vote-note.php?id=126439&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126439" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126439" class="name">
  <strong class="user"><em>phpdev at fpierrat dot fr</em></strong></a><a class="genanchor" href="#126439"> &para;</a><div class="date" title="2021-09-20 01:17"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126439">
<div class="phpcode"><code><span class="html">As stated from the doc: "Returns 1 if the signature is correct, 0 if it is incorrect, and -1 or false on error. "<br /><br />In the second example as a well as in Stiv's note, following condition will match for both 0 or false, which have different meaning:<br />elseif ($ok == 0) {<br />    echo "bad";<br />}<br /><br />On should do an identical test here (===) instead of an equal test (==):<br />elseif ($ok === 0) {<br />    echo "bad";<br />}<br />---<br />var_dump(0==false); //==&gt; true<br />var_dump(0===false);//==&gt; false</span></code></div>
  </div>
 </div>
  <div class="note" id="115617">  <div class="votes">
    <div id="Vu115617">
    <a href="/manual/vote-note.php?id=115617&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115617">
    <a href="/manual/vote-note.php?id=115617&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115617" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115617" class="name">
  <strong class="user"><em>attila dot m dot magyar at gmail dot com</em></strong></a><a class="genanchor" href="#115617"> &para;</a><div class="date" title="2014-08-26 09:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115617">
<div class="phpcode"><code><span class="html">mikey at badpenguins dot com -- validating an X509 certificate chain in php seems to be possible with openssl_x509_checkpurpose()</span></code></div>
  </div>
 </div>
  <div class="note" id="105612">  <div class="votes">
    <div id="Vu105612">
    <a href="/manual/vote-note.php?id=105612&amp;page=function.openssl-verify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105612">
    <a href="/manual/vote-note.php?id=105612&amp;page=function.openssl-verify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105612" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105612" class="name">
  <strong class="user"><em>jeremie dot gomez at gmail dot com</em></strong></a><a class="genanchor" href="#105612"> &para;</a><div class="date" title="2011-08-31 11:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105612">
<div class="phpcode"><code><span class="html">You can actually use the public key as third parameter and not the certificate.<br /><br />If you can't make it work, make sure that :<br /><br />1) Your public key is well formatted. It seems that it must have the ----BEGIN PUBLIC KEY---- and ----END PUBLIC KEY----<br /><br />2) Your signature is in binary format. You can use the php base64_decode for this.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-verify&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-verify.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
