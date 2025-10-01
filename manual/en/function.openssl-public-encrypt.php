<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_public_encrypt - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-public-encrypt.php">
 <link rel="shorturl" href="https://www.php.net/openssl-public-encrypt">
 <link rel="alternate" href="https://www.php.net/openssl-public-encrypt" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-public-decrypt.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-public-encrypt.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-public-encrypt.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-public-encrypt.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-public-encrypt.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-public-encrypt.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-public-encrypt.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-public-encrypt.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-public-encrypt.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-public-encrypt.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-public-encrypt.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-public-encrypt.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Encrypts data with public key" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_public_encrypt - Manual" />
<meta name="twitter:description" content="Encrypts data with public key" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_public_encrypt - Manual" />
<meta itemprop="description" content="Encrypts data with public key" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Encrypts data with public key" />

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
        <a href="function.openssl-random-pseudo-bytes.php">
          openssl_random_pseudo_bytes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-public-decrypt.php">
          &laquo; openssl_public_decrypt        </a>
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
            <option value='en/function.openssl-public-encrypt.php' selected="selected">English</option>
            <option value='de/function.openssl-public-encrypt.php'>German</option>
            <option value='es/function.openssl-public-encrypt.php'>Spanish</option>
            <option value='fr/function.openssl-public-encrypt.php'>French</option>
            <option value='it/function.openssl-public-encrypt.php'>Italian</option>
            <option value='ja/function.openssl-public-encrypt.php'>Japanese</option>
            <option value='pt_BR/function.openssl-public-encrypt.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-public-encrypt.php'>Russian</option>
            <option value='tr/function.openssl-public-encrypt.php'>Turkish</option>
            <option value='uk/function.openssl-public-encrypt.php'>Ukrainian</option>
            <option value='zh/function.openssl-public-encrypt.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-public-encrypt" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_public_encrypt</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_public_encrypt</span> &mdash; <span class="dc-title">Encrypts data with public key</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-public-encrypt-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_public_encrypt</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$encrypted_data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="class.opensslasymmetrickey.php" class="type OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a></span>|<span class="type"><a href="class.opensslcertificate.php" class="type OpenSSLCertificate">OpenSSLCertificate</a></span>|<span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$public_key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$padding</code><span class="initializer"> = <strong><code><a href="openssl.padding.php#constant.openssl-pkcs1-padding">OPENSSL_PKCS1_PADDING</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_public_encrypt()</strong></span> encrypts <code class="parameter">data</code>
   with public <code class="parameter">public_key</code> and stores the result into
   <code class="parameter">encrypted_data</code>. Encrypted data can be decrypted via
   <span class="function"><a href="function.openssl-private-decrypt.php" class="function">openssl_private_decrypt()</a></span>. 
  </p>
  <p class="para">
   This function can be used e.g. to encrypt message which can be then read
   only by owner of the private key. It can be also used to store secure data
   in database.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-public-encrypt-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">encrypted_data</code></dt>
     <dd>
      <p class="para">
       This will hold the result of the encryption.
      </p>
     </dd>
    
    
     <dt><code class="parameter">public_key</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">public_key</code> must be the public key that corresponds
       to the private key that will be used to decrypt the data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">padding</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">padding</code> can be one of
       <strong><code><a href="openssl.padding.php#constant.openssl-pkcs1-padding">OPENSSL_PKCS1_PADDING</a></code></strong>,
       <strong><code><a href="openssl.padding.php#constant.openssl-sslv23-padding">OPENSSL_SSLV23_PADDING</a></code></strong>,
       <strong><code><a href="openssl.padding.php#constant.openssl-pkcs1-oaep-padding">OPENSSL_PKCS1_OAEP_PADDING</a></code></strong>,
       <strong><code><a href="openssl.padding.php#constant.openssl-no-padding">OPENSSL_NO_PADDING</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-public-encrypt-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-public-encrypt-changelog">
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


 <div class="refsect1 seealso" id="refsect1-function.openssl-public-encrypt-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.openssl-private-encrypt.php" class="function" rel="rdfs-seeAlso">openssl_private_encrypt()</a> - Encrypts data with private key</span></li>
    <li><span class="function"><a href="function.openssl-private-decrypt.php" class="function" rel="rdfs-seeAlso">openssl_private_decrypt()</a> - Decrypts data with private key</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-public-encrypt.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-public-encrypt%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-public-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-public-encrypt.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118466">  <div class="votes">
    <div id="Vu118466">
    <a href="/manual/vote-note.php?id=118466&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118466">
    <a href="/manual/vote-note.php?id=118466&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118466" title="61% like this...">
    9
    </div>
  </div>
  <a href="#118466" class="name">
  <strong class="user"><em>security at paragonie dot com</em></strong></a><a class="genanchor" href="#118466"> &para;</a><div class="date" title="2015-12-11 12:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118466">
<div class="phpcode"><code><span class="html">We can't guarantee that RSA will still be trusted for security in 2016, but this is the current best practice for RSA. The rest of the world is moving on to ECDH and EdDSA (e.g. Ed25519).<br /><br />That said, make sure you are using OPENSSL_PKCS1_OAEP_PADDING or else you're vulnerable to a chosen-ciphertext attack (Google: "Daniel Bleichenbacher 1998 RSA padding oracle" and you'll find plenty of material on it.)<br /><br />The only fix is to use OAEP (preferably with MGF1-SHA256, but this function doesn't let you specify that detail and defaults to MGF1+SHA1).<br /><br />Phpseclib offers RSAES-OAEP + MGF1-SHA256 for encryption and RSASS-PSS + MGF1-SHA256 for signatures.<br /><br /><a href="http://phpseclib.sourceforge.net/rsa/examples.html#encrypt,enc1" rel="nofollow" target="_blank">http://phpseclib.sourceforge.net/rsa/examples.html#encrypt,enc1</a><br /><br />If you don't want to hassle with these details yourself,  check out <a href="https://github.com/paragonie/EasyRSA" rel="nofollow" target="_blank">https://github.com/paragonie/EasyRSA</a></span></code></div>
  </div>
 </div>
  <div class="note" id="42286">  <div class="votes">
    <div id="Vu42286">
    <a href="/manual/vote-note.php?id=42286&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42286">
    <a href="/manual/vote-note.php?id=42286&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42286" title="56% like this...">
    8
    </div>
  </div>
  <a href="#42286" class="name">
  <strong class="user"><em>Jeff</em></strong></a><a class="genanchor" href="#42286"> &para;</a><div class="date" title="2004-05-11 12:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42286">
<div class="phpcode"><code><span class="html">I figured it out.  This function is not intended for general encryption and decryption.  For that, you want openssl_seal() and openssl_open().</span></code></div>
  </div>
 </div>
  <div class="note" id="55901">  <div class="votes">
    <div id="Vu55901">
    <a href="/manual/vote-note.php?id=55901&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55901">
    <a href="/manual/vote-note.php?id=55901&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55901" title="55% like this...">
    3
    </div>
  </div>
  <a href="#55901" class="name">
  <strong class="user"><em>Thomas Horsten</em></strong></a><a class="genanchor" href="#55901"> &para;</a><div class="date" title="2005-08-16 04:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55901">
<div class="phpcode"><code><span class="html">chsnyder writes that the data is limited to 936 bits in his implementation.<br /><br />Actually, it has nothing to do with RSA being CPU intensive, RAM or anything of the sort.<br /><br />Basically when you encrypt something using an RSA key (whether public or private), the encrypted value must be smaller than the key (due to the maths used to do the actual encryption). So if you have a 1024-bit key, in theory you could encrypt any 1023-bit value (or a 1024-bit value smaller than the key) with that key.<br /><br />However, the PKCS#1 standard, which OpenSSL uses, specifies a padding scheme (so you can encrypt smaller quantities without losing security), and that padding scheme takes a minimum of 11 bytes (it will be longer if the value you're encrypting is smaller). So the highest number of bits you can encrypt with a 1024-bit key is 936 bits because of this (unless you disable the padding by adding the OPENSSL_NO_PADDING flag, in which case you can go up to 1023-1024 bits). With a 2048-bit key it's 1960 bits instead.<br /><br />But as chsnyder correctly wrote, the normal application of a public key encryption algorithm is to store a key or a hash of the data you want to respectively encrypt or sign. A hash is typically 128-256 bits (the PHP sha1() function returns a 160 bit hash). And an AES key is 128 to 256 bits. So either of those will comfortably fit inside a single RSA encryption.</span></code></div>
  </div>
 </div>
  <div class="note" id="115138">  <div class="votes">
    <div id="Vu115138">
    <a href="/manual/vote-note.php?id=115138&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115138">
    <a href="/manual/vote-note.php?id=115138&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115138" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115138" class="name">
  <strong class="user"><em>AoK</em></strong></a><a class="genanchor" href="#115138"> &para;</a><div class="date" title="2014-06-02 03:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115138">
<div class="phpcode"><code><span class="html">Very important to recognize the maximum size $data string constraint and its relation to SSL bit size as pointed out by others.  Before I addressed the maximum size limit through blocking the data, I was receiving these types of errors from openssl_error_string():<br />- error:0906D06C:PEM routines:PEM_read_bio:no start line  OR<br />- error:0E06D06C:configuration file routines:NCONF_get_string:no value<br />Using a key (sha512, OPENSSL_KEYTYPE_RSA) with 2048 bits, I had a maximum message size of 245 bytes and 4096 bits yielded a max size of 502 bytes.  So if you change your key size later, in particular if you reduce the size of it, be aware it affects your maximum encryption length.</span></code></div>
  </div>
 </div>
  <div class="note" id="104567">  <div class="votes">
    <div id="Vu104567">
    <a href="/manual/vote-note.php?id=104567&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104567">
    <a href="/manual/vote-note.php?id=104567&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104567" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104567" class="name">
  <strong class="user"><em>sumadhuracool at gmail dot com</em></strong></a><a class="genanchor" href="#104567"> &para;</a><div class="date" title="2011-06-23 04:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104567">
<div class="phpcode"><code><span class="html">length of the data &lt; length of the private key ..so i divided the message while taking it,put a ":::".then again encrpt it. look at the pgm to get an idea about this..
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">class </span><span class="default">cry
<br />    </span><span class="keyword">{
<br />            </span><span class="comment"># generate a 1024 bit rsa private key, ask for a passphrase to encrypt it and save to file
<br />            //openssl genrsa -des3 -out /path/to/privatekey 1024
<br /> 
<br />            # generate the public key for the private key and save to file
<br />            //openssl rsa -in /path/to/privatekey -pubout -out /path/to/publickey
<br />            //programatically using php-openssll
<br />
<br />            //This will call while registration
<br />            </span><span class="keyword">function </span><span class="default">gen_cert</span><span class="keyword">(</span><span class="default">$userid</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$dn </span><span class="keyword">= array(</span><span class="string">"countryName" </span><span class="keyword">=&gt; </span><span class="string">'XX'</span><span class="keyword">, </span><span class="string">"stateOrProvinceName" </span><span class="keyword">=&gt; </span><span class="string">'State'</span><span class="keyword">, </span><span class="string">"localityName" </span><span class="keyword">=&gt; </span><span class="string">'SomewhereCity'</span><span class="keyword">, </span><span class="string">"organizationName" </span><span class="keyword">=&gt;</span><span class="string">'MySelf'</span><span class="keyword">, </span><span class="string">"organizationalUnitName" </span><span class="keyword">=&gt; </span><span class="string">'Whatever'</span><span class="keyword">, </span><span class="string">"commonName" </span><span class="keyword">=&gt; </span><span class="string">'mySelf'</span><span class="keyword">, </span><span class="string">"emailAddress" </span><span class="keyword">=&gt; </span><span class="string">'user@example.com'</span><span class="keyword">);
<br />                </span><span class="comment">//Passphrase can be taken during registration 
<br />                //Here its initialized to 1234 for sample                
<br />                </span><span class="default">$privkeypass </span><span class="keyword">= </span><span class="string">'root'</span><span class="keyword">;
<br />                </span><span class="default">$numberofdays </span><span class="keyword">= </span><span class="default">365</span><span class="keyword">;
<br />                </span><span class="comment">//RSA encryption and 1024 bits length
<br />                </span><span class="default">$privkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">(array(</span><span class="string">'private_key_bits' </span><span class="keyword">=&gt; </span><span class="default">1024</span><span class="keyword">,</span><span class="string">'private_key_type' </span><span class="keyword">=&gt; </span><span class="default">OPENSSL_KEYTYPE_RSA</span><span class="keyword">));
<br />                </span><span class="default">$csr </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">);
<br />                </span><span class="default">$sscert </span><span class="keyword">= </span><span class="default">openssl_csr_sign</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$numberofdays</span><span class="keyword">);
<br />                </span><span class="default">openssl_x509_export</span><span class="keyword">(</span><span class="default">$sscert</span><span class="keyword">, </span><span class="default">$publickey</span><span class="keyword">);
<br />                </span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">, </span><span class="default">$privkeypass</span><span class="keyword">);
<br />                </span><span class="default">openssl_csr_export</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">, </span><span class="default">$csrStr</span><span class="keyword">);
<br />                </span><span class="comment">//Generated keys are stored into files
<br />                </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"../PKI/private/</span><span class="default">$userid</span><span class="string">.key"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);
<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$privatekey</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">); 
<br />                </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"../PKI/public/</span><span class="default">$userid</span><span class="string">.crt"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);
<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">$publickey</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);        
<br />            }
<br />            </span><span class="comment">//Encryption with public key
<br />            </span><span class="keyword">function </span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$rc</span><span class="keyword">)
<br />            {
<br />                </span><span class="comment">//path holds the certificate path present in the system                
<br />                </span><span class="default">$path</span><span class="keyword">=</span><span class="string">"../PKI/public/server.crt"</span><span class="keyword">;
<br />                </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />                </span><span class="default">$pub_key</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />                </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">$pub_key</span><span class="keyword">);
<br />            </span><span class="comment">//$source='';
<br />                //$source="sumanth ahoiadodakjaksdsa;ldadkkllksdalkalsdl;asld;ls sumanthasddddddddddddddddddddddddddddddddfsdfsffdfsdfsumanth";
<br />                </span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />                </span><span class="default">$x</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)/</span><span class="default">10</span><span class="keyword">;
<br />                </span><span class="default">$y</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);
<br />                for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$y</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)
<br />                {
<br />                </span><span class="default">$crypttext</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;
<br />                
<br />                </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">),</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$pub_key</span><span class="keyword">);</span><span class="default">$j</span><span class="keyword">=</span><span class="default">$j</span><span class="keyword">+</span><span class="default">10</span><span class="keyword">;
<br />                </span><span class="default">$crt</span><span class="keyword">.=</span><span class="default">$crypttext</span><span class="keyword">;
<br />                </span><span class="default">$crt</span><span class="keyword">.=</span><span class="string">":::"</span><span class="keyword">;
<br />                }
<br />                if((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)%</span><span class="default">10</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)
<br />                {
<br />                </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$j</span><span class="keyword">),</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$pub_key</span><span class="keyword">);
<br />                </span><span class="default">$crt</span><span class="keyword">.=</span><span class="default">$crypttext</span><span class="keyword">;
<br />                }    
<br />                return(</span><span class="default">$crt</span><span class="keyword">);
<br />                
<br />            }
<br />            </span><span class="comment">//Decryption with private key
<br />            </span><span class="keyword">function </span><span class="default">decrypt</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$userid</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$passphrase</span><span class="keyword">=</span><span class="string">"root"</span><span class="keyword">;
<br />                </span><span class="default">$path</span><span class="keyword">=</span><span class="string">"../PKI/private/server.key"</span><span class="keyword">;
<br />                </span><span class="default">$fpp1</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />                </span><span class="default">$priv_key</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fpp1</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fpp1</span><span class="keyword">);
<br />                </span><span class="default">$res1</span><span class="keyword">= </span><span class="default">openssl_get_privatekey</span><span class="keyword">(</span><span class="default">$priv_key</span><span class="keyword">,</span><span class="default">$passphrase</span><span class="keyword">);
<br />                </span><span class="default">$tt</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">":::"</span><span class="keyword">,</span><span class="default">$crypttext</span><span class="keyword">);
<br />                </span><span class="default">$cnt</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$tt</span><span class="keyword">);
<br />                </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />                while(</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$cnt</span><span class="keyword">)
<br />                {
<br />                </span><span class="default">openssl_private_decrypt</span><span class="keyword">(</span><span class="default">$tt</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$res1</span><span class="keyword">);
<br />                </span><span class="default">$str</span><span class="keyword">.=</span><span class="default">$str1</span><span class="keyword">;
<br />                </span><span class="default">$i</span><span class="keyword">++;
<br />                }
<br />                return </span><span class="default">$str</span><span class="keyword">;      
<br />        }
<br />            function </span><span class="default">sign</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$rc</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$has</span><span class="keyword">=</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">);
<br />                </span><span class="default">$source</span><span class="keyword">.=</span><span class="string">"::"</span><span class="keyword">;
<br />                </span><span class="default">$source</span><span class="keyword">.=</span><span class="default">$has</span><span class="keyword">;
<br />                </span><span class="default">$path</span><span class="keyword">=</span><span class="string">"../PKI/public/</span><span class="default">$rc</span><span class="string">.crt"</span><span class="keyword">;
<br />                </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />                </span><span class="default">$pub_key</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />                </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">$pub_key</span><span class="keyword">);
<br />                </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$mese</span><span class="keyword">,</span><span class="default">$pub_key</span><span class="keyword">);
<br />                return </span><span class="default">$mese</span><span class="keyword">;
<br />            
<br />            }
<br />            function </span><span class="default">verify</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$userid</span><span class="keyword">)
<br />            {
<br />                </span><span class="default">$passphrase</span><span class="keyword">=</span><span class="string">"root"</span><span class="keyword">;
<br />                </span><span class="default">$path</span><span class="keyword">=</span><span class="string">"../PKI/private/</span><span class="default">$userid</span><span class="string">.key"</span><span class="keyword">;
<br />                </span><span class="default">$fpp1</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />                </span><span class="default">$priv_key</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fpp1</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fpp1</span><span class="keyword">);
<br />                </span><span class="default">$res1</span><span class="keyword">= </span><span class="default">openssl_get_privatekey</span><span class="keyword">(</span><span class="default">$priv_key</span><span class="keyword">,</span><span class="default">$passphrase</span><span class="keyword">);
<br />                </span><span class="default">openssl_private_decrypt</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$has1</span><span class="keyword">,</span><span class="default">$res1</span><span class="keyword">);
<br />                list(</span><span class="default">$c1</span><span class="keyword">,</span><span class="default">$c2</span><span class="keyword">)=</span><span class="default">split</span><span class="keyword">(</span><span class="string">"::"</span><span class="keyword">,</span><span class="default">$has1</span><span class="keyword">);
<br />                </span><span class="default">$has</span><span class="keyword">=</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$c1</span><span class="keyword">);
<br />                if(</span><span class="default">$has</span><span class="keyword">==</span><span class="default">$c2</span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$message</span><span class="keyword">=</span><span class="default">$c1</span><span class="keyword">;
<br />                    return </span><span class="default">$message</span><span class="keyword">;
<br />                }                 
<br />            }
<br />
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104420">  <div class="votes">
    <div id="Vu104420">
    <a href="/manual/vote-note.php?id=104420&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104420">
    <a href="/manual/vote-note.php?id=104420&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104420" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104420" class="name">
  <strong class="user"><em>ppostma1</em></strong></a><a class="genanchor" href="#104420"> &para;</a><div class="date" title="2011-06-14 12:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104420">
<div class="phpcode"><code><span class="html">The confusion most have seems to be on "mixed $key"
<br />
<br />The $key is explained in, and mostly the same as the parameter of <a href="http://www.php.net/manual/en/function.openssl-pkey-get-public.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.openssl-pkey-get-public.php</a>
<br />
<br />It can take the resource $key returned from openssl_pkey_get_public() OR find the value is text and passes the text to openssl_pkey_get_public() to get a valid resource.
<br />
<br />To better break down rstinnett's example:
<br />(and where the flaw is)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">EncryptData</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/etc/httpd/conf/ssl.crt/server.crt"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />  </span><span class="default">$pub_key_string</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />  </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">$pub_key</span><span class="keyword">);
<br />
<br />  </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$crypttext</span><span class="keyword">,</span><span class="default">$pub_key_string</span><span class="keyword">);
<br />  </span><span class="comment">/*this simply passes the string contents of pub_key_string back to be decoded*/
<br />  </span><span class="keyword">return(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />is more efficient:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">EncryptData</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/etc/httpd/conf/ssl.crt/server.crt"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />  </span><span class="default">$pub_key_string</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />  </span><span class="default">$key_resource </span><span class="keyword">= </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">$pub_key</span><span class="keyword">);
<br />
<br />  </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$crypttext</span><span class="keyword">, </span><span class="default">$key_resource </span><span class="keyword">);
<br />  </span><span class="comment">/*uses the already existing key resource*/
<br />  </span><span class="keyword">return(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />shorter:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">EncryptData</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/etc/httpd/conf/ssl.crt/server.crt"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />  </span><span class="default">$pub_key</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">8192</span><span class="keyword">);
<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />
<br />  </span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">,</span><span class="default">$crypttext</span><span class="keyword">, </span><span class="default">$pub_key </span><span class="keyword">);
<br />
<br />  return(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98927">  <div class="votes">
    <div id="Vu98927">
    <a href="/manual/vote-note.php?id=98927&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98927">
    <a href="/manual/vote-note.php?id=98927&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98927" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98927" class="name">
  <strong class="user"><em>Mark Seecof</em></strong></a><a class="genanchor" href="#98927"> &para;</a><div class="date" title="2010-07-16 12:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98927">
<div class="phpcode"><code><span class="html">If you need a message key, obtain it from the openssl_random_pseudo_bytes() function.<br /><br />DO NOT just hash the current time-- an attacker will guess any such key very easily (he'll just hash a bunch of likely time values and try them until he finds the right one.  The attacker can generate and test many millions of candidate hashes every minute using an ordinary PC).</span></code></div>
  </div>
 </div>
  <div class="note" id="47333">  <div class="votes">
    <div id="Vu47333">
    <a href="/manual/vote-note.php?id=47333&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47333">
    <a href="/manual/vote-note.php?id=47333&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47333" title="50% like this...">
    0
    </div>
  </div>
  <a href="#47333" class="name">
  <strong class="user"><em>pigo at ms5 dot url dot com dot tw</em></strong></a><a class="genanchor" href="#47333"> &para;</a><div class="date" title="2004-11-11 12:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47333">
<div class="phpcode"><code><span class="html">openssl_public_encrypt and openssl_private_encrypt can't encrypt large data . so I write a class . this class can encrypt large data and decrypt.<br /><br />look url : <a href="http://pigo.pigo.idv.tw/opensslcrypt.phps" rel="nofollow" target="_blank">http://pigo.pigo.idv.tw/opensslcrypt.phps</a></span></code></div>
  </div>
 </div>
  <div class="note" id="42259">  <div class="votes">
    <div id="Vu42259">
    <a href="/manual/vote-note.php?id=42259&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42259">
    <a href="/manual/vote-note.php?id=42259&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42259" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42259" class="name">
  <strong class="user"><em>Jeff</em></strong></a><a class="genanchor" href="#42259"> &para;</a><div class="date" title="2004-05-10 02:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42259">
<div class="phpcode"><code><span class="html">It looks like there is a limit on the size of the string to be encrypted: about 50 characters.<br /><br />This is due to the fact that the implementation allocates an output buffer of size EVP_PKEY_size(pkey), which is totally arbitrary and unrelated to the size of the input.  Also, it's not using a cipher envelope approach.  It's just RSAing the input string.</span></code></div>
  </div>
 </div>
  <div class="note" id="31311">  <div class="votes">
    <div id="Vu31311">
    <a href="/manual/vote-note.php?id=31311&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31311">
    <a href="/manual/vote-note.php?id=31311&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31311" title="50% like this...">
    0
    </div>
  </div>
  <a href="#31311" class="name">
  <strong class="user"><em>lonewolf at greyskydesigns dot com</em></strong></a><a class="genanchor" href="#31311"> &para;</a><div class="date" title="2003-04-16 10:28"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31311">
<div class="phpcode"><code><span class="html">Easy way:<br /><br /><span class="default">&lt;?php<br /><br />$publicKey </span><span class="keyword">= </span><span class="string">"file://path/to/public/key-crt.pem"</span><span class="keyword">;<br /></span><span class="default">$plaintext </span><span class="keyword">= </span><span class="string">"String to encrypt"</span><span class="keyword">;<br /><br /></span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$plaintext</span><span class="keyword">, </span><span class="default">$encrypted</span><span class="keyword">, </span><span class="default">$publicKey</span><span class="keyword">);<br /><br />echo </span><span class="default">$encrypted</span><span class="keyword">;   </span><span class="comment">//encrypted string<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30313">  <div class="votes">
    <div id="Vu30313">
    <a href="/manual/vote-note.php?id=30313&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30313">
    <a href="/manual/vote-note.php?id=30313&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30313" title="50% like this...">
    0
    </div>
  </div>
  <a href="#30313" class="name">
  <strong class="user"><em>webmaster at costarica-travelinfo dot com</em></strong></a><a class="genanchor" href="#30313"> &para;</a><div class="date" title="2003-03-13 02:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30313">
<div class="phpcode"><code><span class="html">This example worked for me:<br /><br />RedHat 7.2 / php 4.2.2 / Apache 1.3.7<br /><br />// STEP 1: Encryption with Public Key (you will need Private Key to decrypt - see step2).<br /><br />$string="Some Important Data";<br />$fp=fopen ("cert.pem","r");<br />$pub_key=fread ($fp,8192);<br />fclose($fp);<br />$PK="";<br />$PK=openssl_get_publickey($pub_key);<br />if (!$PK) {<br />    echo "Cannot get public key";<br />}<br />$finaltext="";<br />openssl_public_encrypt($string,$finaltext,$PK);<br />if (!empty($finaltext)) {<br />    openssl_free_key($PK);<br />    echo "Encryption OK!";<br />}else{<br />    echo "Cannot Encrypt";<br />}<br /><br />// STEP 2: Decription (Using Private Key)<br /><br />$fp=fopen ("pk.pem","r");<br />$priv_key2=fread ($fp,8192);<br />fclose($fp);<br />$PK2=openssl_get_privatekey($priv_key2);<br />$Crypted=openssl_private_decrypt($Data,$Decrypted,$PK2);<br />if (!$Crypted) {<br />    $MSG.="&lt;p class='error'&gt;Cannot Decrypt ($CCID).&lt;/p&gt;";<br />}else{<br />    echo "Decrypted Data: " . $Decrypted;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="56449">  <div class="votes">
    <div id="Vu56449">
    <a href="/manual/vote-note.php?id=56449&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56449">
    <a href="/manual/vote-note.php?id=56449&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56449" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#56449" class="name">
  <strong class="user"><em>adrian</em></strong></a><a class="genanchor" href="#56449"> &para;</a><div class="date" title="2005-09-02 02:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56449">
<div class="phpcode"><code><span class="html">T. Horsten explained the size limits on raw encryption. Here are two functions to encrypt/decrypt larger data when you can't use the envelope functions:<br /><br />function ssl_encrypt($source,$type,$key){<br />//Assumes 1024 bit key and encrypts in chunks.<br /><br />$maxlength=117;<br />$output='';<br />while($source){<br />  $input= substr($source,0,$maxlength);<br />  $source=substr($source,$maxlength);<br />  if($type=='private'){<br />    $ok= openssl_private_encrypt($input,$encrypted,$key);<br />  }else{<br />    $ok= openssl_public_encrypt($input,$encrypted,$key);<br />  }<br />        <br />  $output.=$encrypted;<br />}<br />return $output;<br />}<br /><br />function ssl_decrypt($source,$type,$key){<br />// The raw PHP decryption functions appear to work<br />// on 128 Byte chunks. So this decrypts long text<br />// encrypted with ssl_encrypt().<br /><br />$maxlength=128;<br />$output='';<br />while($source){<br />  $input= substr($source,0,$maxlength);<br />  $source=substr($source,$maxlength);<br />  if($type=='private'){<br />    $ok= openssl_private_decrypt($input,$out,$key);<br />  }else{<br />    $ok= openssl_public_decrypt($input,$out,$key);<br />  }<br />        <br />  $output.=$out;<br />}<br />return $output;<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125477">  <div class="votes">
    <div id="Vu125477">
    <a href="/manual/vote-note.php?id=125477&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125477">
    <a href="/manual/vote-note.php?id=125477&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125477" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#125477" class="name">
  <strong class="user"><em>1520667045 at qq dot com</em></strong></a><a class="genanchor" href="#125477"> &para;</a><div class="date" title="2020-10-30 08:22"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125477">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$value </span><span class="keyword">=&lt;&lt;&lt;EOL<br /></span><span class="string">some long long text<br /></span><span class="keyword">EOL;<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">214</span><span class="keyword">); </span><span class="comment">// max is 214<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$d</span><span class="keyword">){<br />    if(</span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">, </span><span class="default">$encrypted</span><span class="keyword">, </span><span class="default">$publickey</span><span class="keyword">, </span><span class="default">OPENSSL_PKCS1_OAEP_PADDING</span><span class="keyword">)){<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$encrypted</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">), </span><span class="default">256</span><span class="keyword">); </span><span class="comment">//every strlen($encrypted) == 256<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />foreach(</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$d</span><span class="keyword">){<br />    if(</span><span class="default">openssl_private_decrypt</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">, </span><span class="default">$decrypted</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">, </span><span class="default">OPENSSL_PKCS1_OAEP_PADDING</span><span class="keyword">)){<br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$decrypted</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95307">  <div class="votes">
    <div id="Vu95307">
    <a href="/manual/vote-note.php?id=95307&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95307">
    <a href="/manual/vote-note.php?id=95307&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95307" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#95307" class="name">
  <strong class="user"><em>public at grik dot net</em></strong></a><a class="genanchor" href="#95307"> &para;</a><div class="date" title="2009-12-25 10:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95307">
<div class="phpcode"><code><span class="html">openssl_private_encrypt() has a low limit for the length of the data it can encrypt due to the nature of the algorithm.<br /><br />To encrypt the larger data you can use openssl_encrypt() with a random password (like sha1(microtime(true))), and encrypt the password with openssl_public_encrypt().<br />This way the data can be encrypted with a public key and decrypted with the private one.</span></code></div>
  </div>
 </div>
  <div class="note" id="50145">  <div class="votes">
    <div id="Vu50145">
    <a href="/manual/vote-note.php?id=50145&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50145">
    <a href="/manual/vote-note.php?id=50145&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50145" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#50145" class="name">
  <strong class="user"><em>chsnyder at gmail dot com</em></strong></a><a class="genanchor" href="#50145"> &para;</a><div class="date" title="2005-02-19 09:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50145">
<div class="phpcode"><code><span class="html">In comment below, Jeff says the input to this function is limited to "about 50 characters". On my PHP5 build, the limit is 117 characters (936 bits, strange number).<br /><br />That's because public key encryption is CPU intensive, and meant to be used on short values. The idea is to use this function to encrypt a secret key that is in turn used to encrypt data using a more efficient algorithm, such as RC4 or TripleDES. The recipient uses their private key to decrypt the secret, and can then decrypt the data.<br /><br />The openssl_seal() and openssl_open() functions do this internally, and are very well documented. You should probably use them instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="54320">  <div class="votes">
    <div id="Vu54320">
    <a href="/manual/vote-note.php?id=54320&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54320">
    <a href="/manual/vote-note.php?id=54320&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54320" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#54320" class="name">
  <strong class="user"><em>kenashkov at gmail dot com</em></strong></a><a class="genanchor" href="#54320"> &para;</a><div class="date" title="2005-06-30 05:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54320">
<div class="phpcode"><code><span class="html">The encrypted data can be stored in MySQL without use of base64. It must be properly escaped with mysql_real_escape_string(), and then saved to BLOB column. (In fact - this function must be used every time when you insert binary data in MySQL).</span></code></div>
  </div>
 </div>
  <div class="note" id="46321">  <div class="votes">
    <div id="Vu46321">
    <a href="/manual/vote-note.php?id=46321&amp;page=function.openssl-public-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46321">
    <a href="/manual/vote-note.php?id=46321&amp;page=function.openssl-public-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46321" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#46321" class="name">
  <strong class="user"><em>rstinnett at bfmhconsulting dot com</em></strong></a><a class="genanchor" href="#46321"> &para;</a><div class="date" title="2004-10-06 06:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46321">
<div class="phpcode"><code><span class="html">To store the encrypted data in a MySQL database, you first have to encode the data so it can safely be written. You can use a blob type for this, but it can make SELECTs really nasty. The easiest way I have found to do this is with base64_encode and base64_decode. The following example using code from a previous example and split into encrypt and decrypt functions.<br /><br />function EncryptData($source)<br />{<br />  $fp=fopen("/etc/httpd/conf/ssl.crt/server.crt","r");<br />  $pub_key=fread($fp,8192);<br />  fclose($fp);<br />  openssl_get_publickey($pub_key);<br />  /*<br />   * NOTE:  Here you use the $pub_key value (converted, I guess)<br />   */<br />  openssl_public_encrypt($source,$crypttext,$pub_key);<br />  return(base64_encode($crypttext));<br />}<br /><br />function DecryptData($source)<br />{<br />  #print("number : $number");<br />  $fp=fopen("/etc/httpd/conf/ssl.key/server.key","r");<br />  $priv_key=fread($fp,8192);<br />  fclose($fp);<br />  // $passphrase is required if your key is encoded (suggested)<br />  $res = openssl_get_privatekey($priv_key,$passphrase);<br />  /*<br />   * NOTE:  Here you use the returned resource value<br />   */<br />  $decoded_source = base64_decode($source);<br />  openssl_private_decrypt($decoded_source,$newsource,$res);<br />  return($newsource);<br />}<br /><br />Just use the return values to store the encrypted data or display the decrypted data.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-public-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-public-encrypt.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
