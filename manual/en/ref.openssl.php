<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OpenSSL Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="shorturl" href="https://www.php.net/openssl">
 <link rel="alternate" href="https://www.php.net/openssl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/openssl.cert.verification.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-cipher-iv-length.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.openssl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.openssl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.openssl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.openssl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.openssl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.openssl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.openssl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.openssl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.openssl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.openssl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.openssl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OpenSSL Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OpenSSL Functions - Manual" />
<meta name="twitter:description" content="OpenSSL Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OpenSSL Functions - Manual" />
<meta itemprop="description" content="OpenSSL Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OpenSSL Functions" />

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
        <a href="function.openssl-cipher-iv-length.php">
          openssl_cipher_iv_length &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="openssl.cert.verification.php">
          &laquo; Certificate Verification        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.openssl.php'>OpenSSL</a></li>      </ul>
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
            <option value='en/ref.openssl.php' selected="selected">English</option>
            <option value='de/ref.openssl.php'>German</option>
            <option value='es/ref.openssl.php'>Spanish</option>
            <option value='fr/ref.openssl.php'>French</option>
            <option value='it/ref.openssl.php'>Italian</option>
            <option value='ja/ref.openssl.php'>Japanese</option>
            <option value='pt_BR/ref.openssl.php'>Brazilian Portuguese</option>
            <option value='ru/ref.openssl.php'>Russian</option>
            <option value='tr/ref.openssl.php'>Turkish</option>
            <option value='uk/ref.openssl.php'>Ukrainian</option>
            <option value='zh/ref.openssl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.openssl" class="reference">
 <h1 class="title">OpenSSL Functions</h1>

 












































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.openssl-cipher-iv-length.php">openssl_cipher_iv_length</a> — Gets the cipher iv length</li><li><a href="function.openssl-cipher-key-length.php">openssl_cipher_key_length</a> — Gets the cipher key length</li><li><a href="function.openssl-cms-decrypt.php">openssl_cms_decrypt</a> — Decrypt a CMS message</li><li><a href="function.openssl-cms-encrypt.php">openssl_cms_encrypt</a> — Encrypt a CMS message</li><li><a href="function.openssl-cms-read.php">openssl_cms_read</a> — Export the CMS file to an array of PEM certificates</li><li><a href="function.openssl-cms-sign.php">openssl_cms_sign</a> — Sign a file</li><li><a href="function.openssl-cms-verify.php">openssl_cms_verify</a> — Verify a CMS signature</li><li><a href="function.openssl-csr-export.php">openssl_csr_export</a> — Exports a CSR as a string</li><li><a href="function.openssl-csr-export-to-file.php">openssl_csr_export_to_file</a> — Exports a CSR to a file</li><li><a href="function.openssl-csr-get-public-key.php">openssl_csr_get_public_key</a> — Returns the public key of a CSR</li><li><a href="function.openssl-csr-get-subject.php">openssl_csr_get_subject</a> — Returns the subject of a CSR</li><li><a href="function.openssl-csr-new.php">openssl_csr_new</a> — Generates a CSR</li><li><a href="function.openssl-csr-sign.php">openssl_csr_sign</a> — Sign a CSR with another certificate (or itself) and generate a certificate</li><li><a href="function.openssl-decrypt.php">openssl_decrypt</a> — Decrypts data</li><li><a href="function.openssl-dh-compute-key.php">openssl_dh_compute_key</a> — Computes shared secret for public value of remote DH public key and local DH key</li><li><a href="function.openssl-digest.php">openssl_digest</a> — Computes a digest</li><li><a href="function.openssl-encrypt.php">openssl_encrypt</a> — Encrypts data</li><li><a href="function.openssl-error-string.php">openssl_error_string</a> — Return openSSL error message</li><li><a href="function.openssl-free-key.php">openssl_free_key</a> — Free key resource</li><li><a href="function.openssl-get-cert-locations.php">openssl_get_cert_locations</a> — Retrieve the available certificate locations</li><li><a href="function.openssl-get-cipher-methods.php">openssl_get_cipher_methods</a> — Gets available cipher methods</li><li><a href="function.openssl-get-curve-names.php">openssl_get_curve_names</a> — Gets list of available curve names for ECC</li><li><a href="function.openssl-get-md-methods.php">openssl_get_md_methods</a> — Gets available digest methods</li><li><a href="function.openssl-get-privatekey.php">openssl_get_privatekey</a> — Alias of openssl_pkey_get_private</li><li><a href="function.openssl-get-publickey.php">openssl_get_publickey</a> — Alias of openssl_pkey_get_public</li><li><a href="function.openssl-open.php">openssl_open</a> — Open sealed data</li><li><a href="function.openssl-pbkdf2.php">openssl_pbkdf2</a> — Generates a PKCS5 v2 PBKDF2 string</li><li><a href="function.openssl-pkcs12-export.php">openssl_pkcs12_export</a> — Exports a PKCS#12 Compatible Certificate Store File to variable</li><li><a href="function.openssl-pkcs12-export-to-file.php">openssl_pkcs12_export_to_file</a> — Exports a PKCS#12 Compatible Certificate Store File</li><li><a href="function.openssl-pkcs12-read.php">openssl_pkcs12_read</a> — Parse a PKCS#12 Certificate Store into an array</li><li><a href="function.openssl-pkcs7-decrypt.php">openssl_pkcs7_decrypt</a> — Decrypts an S/MIME encrypted message</li><li><a href="function.openssl-pkcs7-encrypt.php">openssl_pkcs7_encrypt</a> — Encrypt an S/MIME message</li><li><a href="function.openssl-pkcs7-read.php">openssl_pkcs7_read</a> — Export the PKCS7 file to an array of PEM certificates</li><li><a href="function.openssl-pkcs7-sign.php">openssl_pkcs7_sign</a> — Sign an S/MIME message</li><li><a href="function.openssl-pkcs7-verify.php">openssl_pkcs7_verify</a> — Verifies the signature of an S/MIME signed message</li><li><a href="function.openssl-pkey-derive.php">openssl_pkey_derive</a> — Computes shared secret for public value of remote and local DH or ECDH key</li><li><a href="function.openssl-pkey-export.php">openssl_pkey_export</a> — Gets an exportable representation of a key into a string</li><li><a href="function.openssl-pkey-export-to-file.php">openssl_pkey_export_to_file</a> — Gets an exportable representation of a key into a file</li><li><a href="function.openssl-pkey-free.php">openssl_pkey_free</a> — Frees a private key</li><li><a href="function.openssl-pkey-get-details.php">openssl_pkey_get_details</a> — Returns an array with the key details</li><li><a href="function.openssl-pkey-get-private.php">openssl_pkey_get_private</a> — Get a private key</li><li><a href="function.openssl-pkey-get-public.php">openssl_pkey_get_public</a> — Extract public key from certificate and prepare it for use</li><li><a href="function.openssl-pkey-new.php">openssl_pkey_new</a> — Generates a new private key</li><li><a href="function.openssl-private-decrypt.php">openssl_private_decrypt</a> — Decrypts data with private key</li><li><a href="function.openssl-private-encrypt.php">openssl_private_encrypt</a> — Encrypts data with private key</li><li><a href="function.openssl-public-decrypt.php">openssl_public_decrypt</a> — Decrypts data with public key</li><li><a href="function.openssl-public-encrypt.php">openssl_public_encrypt</a> — Encrypts data with public key</li><li><a href="function.openssl-random-pseudo-bytes.php">openssl_random_pseudo_bytes</a> — Generate a pseudo-random string of bytes</li><li><a href="function.openssl-seal.php">openssl_seal</a> — Seal (encrypt) data</li><li><a href="function.openssl-sign.php">openssl_sign</a> — Generate signature</li><li><a href="function.openssl-spki-export.php">openssl_spki_export</a> — Exports a valid PEM formatted public key signed public key and challenge</li><li><a href="function.openssl-spki-export-challenge.php">openssl_spki_export_challenge</a> — Exports the challenge associated with a signed public key and challenge</li><li><a href="function.openssl-spki-new.php">openssl_spki_new</a> — Generate a new signed public key and challenge</li><li><a href="function.openssl-spki-verify.php">openssl_spki_verify</a> — Verifies a signed public key and challenge</li><li><a href="function.openssl-verify.php">openssl_verify</a> — Verify signature</li><li><a href="function.openssl-x509-check-private-key.php">openssl_x509_check_private_key</a> — Checks if a private key corresponds to a certificate</li><li><a href="function.openssl-x509-checkpurpose.php">openssl_x509_checkpurpose</a> — Verifies if a certificate can be used for a particular purpose</li><li><a href="function.openssl-x509-export.php">openssl_x509_export</a> — Exports a certificate as a string</li><li><a href="function.openssl-x509-export-to-file.php">openssl_x509_export_to_file</a> — Exports a certificate to file</li><li><a href="function.openssl-x509-fingerprint.php">openssl_x509_fingerprint</a> — Calculates the fingerprint, or digest, of a given X.509 certificate</li><li><a href="function.openssl-x509-free.php">openssl_x509_free</a> — Free certificate resource</li><li><a href="function.openssl-x509-parse.php">openssl_x509_parse</a> — Parse an X509 certificate and return the information as an array</li><li><a href="function.openssl-x509-read.php">openssl_x509_read</a> — Parse an X.509 certificate and return an object for
  it</li><li><a href="function.openssl-x509-verify.php">openssl_x509_verify</a> — Verifies digital signature of x509 certificate against a public key</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.openssl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.openssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.openssl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">24 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="74188">  <div class="votes">
    <div id="Vu74188">
    <a href="/manual/vote-note.php?id=74188&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74188">
    <a href="/manual/vote-note.php?id=74188&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74188" title="75% like this...">
    28
    </div>
  </div>
  <a href="#74188" class="name">
  <strong class="user"><em>dan -AT- NOSPAM danschafer DOT netTT</em></strong></a><a class="genanchor" href="#74188"> &para;</a><div class="date" title="2007-03-28 10:58"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74188">
<div class="phpcode"><code><span class="html">Currently, all OpenSSL Functions defined in PHP only utilize the PEM format.  Use the following code to convert from DER to PEM and PEM to DER.<br /><br /><span class="default">&lt;?php<br />$pem_data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$cert_path</span><span class="keyword">.</span><span class="default">$pem_file</span><span class="keyword">);<br /></span><span class="default">$pem2der </span><span class="keyword">= </span><span class="default">pem2der</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">);<br /><br /></span><span class="default">$der_data </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$cert_path</span><span class="keyword">.</span><span class="default">$der_file</span><span class="keyword">);<br /></span><span class="default">$der2pem </span><span class="keyword">= </span><span class="default">der2pem</span><span class="keyword">(</span><span class="default">$der_data</span><span class="keyword">);<br /><br />function </span><span class="default">pem2der</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">) {<br />   </span><span class="default">$begin </span><span class="keyword">= </span><span class="string">"CERTIFICATE-----"</span><span class="keyword">;<br />   </span><span class="default">$end   </span><span class="keyword">= </span><span class="string">"-----END"</span><span class="keyword">;<br />   </span><span class="default">$pem_data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$begin</span><span class="keyword">)+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$begin</span><span class="keyword">));    <br />   </span><span class="default">$pem_data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">));<br />   </span><span class="default">$der </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">);<br />   return </span><span class="default">$der</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">der2pem</span><span class="keyword">(</span><span class="default">$der_data</span><span class="keyword">) {<br />   </span><span class="default">$pem </span><span class="keyword">= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$der_data</span><span class="keyword">), </span><span class="default">64</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);<br />   </span><span class="default">$pem </span><span class="keyword">= </span><span class="string">"-----BEGIN CERTIFICATE-----\n"</span><span class="keyword">.</span><span class="default">$pem</span><span class="keyword">.</span><span class="string">"-----END CERTIFICATE-----\n"</span><span class="keyword">;<br />   return </span><span class="default">$pem</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46694">  <div class="votes">
    <div id="Vu46694">
    <a href="/manual/vote-note.php?id=46694&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46694">
    <a href="/manual/vote-note.php?id=46694&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46694" title="80% like this...">
    9
    </div>
  </div>
  <a href="#46694" class="name">
  <strong class="user"><em>skippy zuavra net</em></strong></a><a class="genanchor" href="#46694"> &para;</a><div class="date" title="2004-10-20 05:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46694">
<div class="phpcode"><code><span class="html">In case you're wondering what's a "correctly hashed" directory for the use with cainfo: it's simply a directory which contains CA public certificates in PEM/X.509 format. You can get such certificates either from the CA's website (they advertise it in visible places) or from your browser. In Explorer for instance you can click on the little yellow padlock, go to the CA entry and export it.<br /><br />The only trick with the directory is that file names must be in the form "hash.#". The "hash" part is the 8-digit hex hash of the certificate, while the # part is a number which serves to differentiate certificates which give the same hash (yes, it can happen with certificates coming from the same CA). Usually # is 0, but you also can use 1, 2 and so on when having more certs with the same hash.<br /><br />In order to obtain the hash of a certificate you can use the openssl command line utility like this:<br /><br />openssl x509 -hash -in certfile.cer | head -1</span></code></div>
  </div>
 </div>
  <div class="note" id="66155">  <div class="votes">
    <div id="Vu66155">
    <a href="/manual/vote-note.php?id=66155&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66155">
    <a href="/manual/vote-note.php?id=66155&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66155" title="75% like this...">
    6
    </div>
  </div>
  <a href="#66155" class="name">
  <strong class="user"><em>peter dot mescalchin @ geemail dot com</em></strong></a><a class="genanchor" href="#66155"> &para;</a><div class="date" title="2006-05-16 01:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66155">
<div class="phpcode"><code><span class="html">For w32 users to enable OpenSSL support. As well as copying "libeay32.dll" to the windows system32 folder you also need to copy "ssleay32.dll".  The documentation above should probably be updated to note this.<br /><br />This requirement was documented at the libcurl pages:<br /><br /><a href="http://curl.haxx.se/libcurl/php/install.html#windows" rel="nofollow" target="_blank">http://curl.haxx.se/libcurl/php/install.html#windows</a></span></code></div>
  </div>
 </div>
  <div class="note" id="111062">  <div class="votes">
    <div id="Vu111062">
    <a href="/manual/vote-note.php?id=111062&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111062">
    <a href="/manual/vote-note.php?id=111062&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111062" title="71% like this...">
    3
    </div>
  </div>
  <a href="#111062" class="name">
  <strong class="user"><em>kraven at kraven dot org</em></strong></a><a class="genanchor" href="#111062"> &para;</a><div class="date" title="2013-01-10 06:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111062">
<div class="phpcode"><code><span class="html">If you want to verify that a csr was generated properly from your private key you can do the following:
<br />
<br /><span class="default">&lt;?php
<br />$countryName </span><span class="keyword">= </span><span class="string">"UK"</span><span class="keyword">;
<br /></span><span class="default">$stateOrProvinceName </span><span class="keyword">= </span><span class="string">"London"</span><span class="keyword">;
<br /></span><span class="default">$localityName </span><span class="keyword">= </span><span class="string">"Blah"</span><span class="keyword">;
<br /></span><span class="default">$organizationName </span><span class="keyword">= </span><span class="string">"Blah1"</span><span class="keyword">;
<br /></span><span class="default">$organizationalUnitName </span><span class="keyword">= </span><span class="string">"Blah2"</span><span class="keyword">;
<br /></span><span class="default">$commonName </span><span class="keyword">= </span><span class="string">"Joe Bloggs"</span><span class="keyword">;
<br /></span><span class="default">$emailAddress </span><span class="keyword">= </span><span class="string">"openssl@example.com"</span><span class="keyword">;
<br />
<br /></span><span class="default">$dn </span><span class="keyword">= array(
<br />  </span><span class="string">"countryName" </span><span class="keyword">=&gt; </span><span class="default">$countryName</span><span class="keyword">,
<br />  </span><span class="string">"stateOrProvinceName" </span><span class="keyword">=&gt; </span><span class="default">$stateOrProvinceName</span><span class="keyword">,
<br />  </span><span class="string">"localityName" </span><span class="keyword">=&gt; </span><span class="default">$localityName</span><span class="keyword">,
<br />  </span><span class="string">"organizationName" </span><span class="keyword">=&gt; </span><span class="default">$organizationName</span><span class="keyword">,
<br />  </span><span class="string">"organizationalUnitName" </span><span class="keyword">=&gt; </span><span class="default">$organizationalUnitName</span><span class="keyword">,
<br />  </span><span class="string">"commonName" </span><span class="keyword">=&gt; </span><span class="default">$commonName</span><span class="keyword">,
<br />  </span><span class="string">"emailAddress" </span><span class="keyword">=&gt; </span><span class="default">$emailAddress
<br /></span><span class="keyword">);
<br />
<br /></span><span class="default">$badPriv </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;
<br />
<br /></span><span class="comment">// generate a bad csr
<br /></span><span class="default">$badCsr </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$badPriv</span><span class="keyword">);
<br />
<br /></span><span class="comment">// generate private key
<br /></span><span class="default">$priv </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">();
<br />
<br /></span><span class="comment">// generate csr
<br /></span><span class="default">$csr </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$priv</span><span class="keyword">);
<br />
<br /></span><span class="default">$badCsrDetails </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">openssl_csr_get_public_key</span><span class="keyword">(</span><span class="default">$badCsr</span><span class="keyword">));
<br /></span><span class="default">$privDetails </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$priv</span><span class="keyword">);
<br /></span><span class="default">$csrDetails </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">openssl_csr_get_public_key</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">));
<br />
<br />echo </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$badCsrDetails</span><span class="keyword">[</span><span class="string">'rsa'</span><span class="keyword">][</span><span class="string">'n'</span><span class="keyword">]);
<br />echo </span><span class="string">"\nDoes not match\n"</span><span class="keyword">;
<br />echo </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$privDetails</span><span class="keyword">[</span><span class="string">'rsa'</span><span class="keyword">][</span><span class="string">'n'</span><span class="keyword">]);
<br />echo </span><span class="string">"\nMatches\n"</span><span class="keyword">;
<br />echo </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$csrDetails</span><span class="keyword">[</span><span class="string">'rsa'</span><span class="keyword">][</span><span class="string">'n'</span><span class="keyword">]);
<br />echo </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />This output is an md5 hash of the modulus.  The same check can be accomplished with openssl:
<br />openssl rsa -noout -modulus -in server.key | openssl md5
<br />openssl req -noout -modulus -in server.csr | openssl md5</span></code></div>
  </div>
 </div>
  <div class="note" id="79441">  <div class="votes">
    <div id="Vu79441">
    <a href="/manual/vote-note.php?id=79441&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79441">
    <a href="/manual/vote-note.php?id=79441&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79441" title="66% like this...">
    2
    </div>
  </div>
  <a href="#79441" class="name">
  <strong class="user"><em>jts</em></strong></a><a class="genanchor" href="#79441"> &para;</a><div class="date" title="2007-11-27 02:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79441">
<div class="phpcode"><code><span class="html">Win32 users having trouble getting php_openssl to work should make sure that they replace ALL the versions of libeay32.dll and ssleay32.dll, with the ones included with PHP.  This is especially true while using Apache2 and OpenSSL together, as some OpenSSL win32 packages include older versions of these two files.</span></code></div>
  </div>
 </div>
  <div class="note" id="56323">  <div class="votes">
    <div id="Vu56323">
    <a href="/manual/vote-note.php?id=56323&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56323">
    <a href="/manual/vote-note.php?id=56323&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56323" title="66% like this...">
    2
    </div>
  </div>
  <a href="#56323" class="name">
  <strong class="user"><em>greensweater</em></strong></a><a class="genanchor" href="#56323"> &para;</a><div class="date" title="2005-08-30 09:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56323">
<div class="phpcode"><code><span class="html">"You need to have a valid openssl.cnf installed for this function to operate correctly" includes most openssl functions. You can force php to find your openssl.cnf file as follows:<br /><br />$config = array('config'=&gt;'/path/to/openssl.cnf');<br />$pkey = openssl_pkey_new($config);<br />$csr = openssl_csr_new('MyCSR',$pkey,$config);</span></code></div>
  </div>
 </div>
  <div class="note" id="96941">  <div class="votes">
    <div id="Vu96941">
    <a href="/manual/vote-note.php?id=96941&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96941">
    <a href="/manual/vote-note.php?id=96941&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96941" title="66% like this...">
    1
    </div>
  </div>
  <a href="#96941" class="name">
  <strong class="user"><em>rahuul at yours dot com</em></strong></a><a class="genanchor" href="#96941"> &para;</a><div class="date" title="2010-03-23 11:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96941">
<div class="phpcode"><code><span class="html">for changing serial no of cert following is the solution:
<br />
<br /><span class="default">&lt;?php
<br />$sscert </span><span class="keyword">= </span><span class="default">openssl_csr_sign</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">, </span><span class="default">$cacert</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$days</span><span class="keyword">,</span><span class="default">$config</span><span class="keyword">,</span><span class="default">$serial</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68428">  <div class="votes">
    <div id="Vu68428">
    <a href="/manual/vote-note.php?id=68428&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68428">
    <a href="/manual/vote-note.php?id=68428&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68428" title="66% like this...">
    1
    </div>
  </div>
  <a href="#68428" class="name">
  <strong class="user"><em>yabba dabba</em></strong></a><a class="genanchor" href="#68428"> &para;</a><div class="date" title="2006-07-26 11:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68428">
<div class="phpcode"><code><span class="html">The php4 distribution for Windows/IIS has a README-SSL.txt which strongly implies that just the path needs to be added to the OPENSLL_CONF variable in the server's environment variables. Be sure to add the file name and extension too.<br /><br />E.g.: c:\php-4.3.11\openssl\openssl.cnf</span></code></div>
  </div>
 </div>
  <div class="note" id="83921">  <div class="votes">
    <div id="Vu83921">
    <a href="/manual/vote-note.php?id=83921&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83921">
    <a href="/manual/vote-note.php?id=83921&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83921" title="60% like this...">
    1
    </div>
  </div>
  <a href="#83921" class="name">
  <strong class="user"><em>web at mburda dot com</em></strong></a><a class="genanchor" href="#83921"> &para;</a><div class="date" title="2008-06-18 09:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83921">
<div class="phpcode"><code><span class="html">There is a little problem with Matt Alexander's code below.<br />Both public and private key are generated internally and saved into OpenSSL class object properties but only private key is then used.<br />Public key is taken from an external file and if it differs from the one stored internally, OpenSSL fails to decrypt the text.</span></code></div>
  </div>
 </div>
  <div class="note" id="81686">  <div class="votes">
    <div id="Vu81686">
    <a href="/manual/vote-note.php?id=81686&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81686">
    <a href="/manual/vote-note.php?id=81686&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81686" title="60% like this...">
    1
    </div>
  </div>
  <a href="#81686" class="name">
  <strong class="user"><em>stephen_at_liberty-irm_dot_com</em></strong></a><a class="genanchor" href="#81686"> &para;</a><div class="date" title="2008-03-09 03:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81686">
<div class="phpcode"><code><span class="html">This note is primarily aimed at folks storing encrypted things in MySQL as I'm unfamiliar with other database setups. If you store, for example, a credit card number that has been encrypted by openssl_public_encrypt inside of a database, the column type for the column you are storing the number in must be a blob. This is because "the result might contain arbitrary byte values" (MySQL Reference Manual). Basically, if you try to store it in a VARCHAR, LONGTEXT, etc, certain parts of the encrypted data may be dropped, truncated, etc. This will of course make the data impossible to decrypt. Hopefully this will help someone, because it had me stumped for about an hour!</span></code></div>
  </div>
 </div>
  <div class="note" id="121663">  <div class="votes">
    <div id="Vu121663">
    <a href="/manual/vote-note.php?id=121663&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121663">
    <a href="/manual/vote-note.php?id=121663&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121663" title="100% like this...">
    2
    </div>
  </div>
  <a href="#121663" class="name">
  <strong class="user"><em>karel dot wintersky at gmail dot com</em></strong></a><a class="genanchor" href="#121663"> &para;</a><div class="date" title="2017-09-20 11:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121663">
<div class="phpcode"><code><span class="html">May be useful for cyphers execution speed.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// PHP 7.0+ required!<br />// see results at <a href="https://gist.github.com/KarelWintersky/fe29dcad75de515e5a468894e7c070e6" rel="nofollow" target="_blank">https://gist.github.com/KarelWintersky/fe29dcad75de515e5a468894e7c070e6</a><br /><br /></span><span class="keyword">const </span><span class="default">TEST_COUNT </span><span class="keyword">= </span><span class="default">100000</span><span class="keyword">;<br />const </span><span class="default">SOURCE </span><span class="keyword">= </span><span class="string">'Note that HTML tags are not allowed in the posts, but the note formatting is preserved.'</span><span class="keyword">;<br />const </span><span class="default">KEY </span><span class="keyword">= </span><span class="string">"password"</span><span class="keyword">;<br /><br />function </span><span class="default">TESTER</span><span class="keyword">( </span><span class="default">$testing_function</span><span class="keyword">, </span><span class="default">$argument </span><span class="keyword">)<br />{<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />    for (</span><span class="default">$test_iterator </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$test_iterator </span><span class="keyword">&lt; </span><span class="default">TEST_COUNT</span><span class="keyword">; </span><span class="default">$test_iterator</span><span class="keyword">++) {<br />        </span><span class="default">$testing_function</span><span class="keyword">( </span><span class="default">$argument </span><span class="keyword">);<br />    }<br />    return </span><span class="default">round</span><span class="keyword">(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$crypt </span><span class="keyword">= function(</span><span class="default">$cipher</span><span class="keyword">) {<br />    </span><span class="default">$ivlen </span><span class="keyword">= </span><span class="default">openssl_cipher_iv_length</span><span class="keyword">(</span><span class="default">$cipher</span><span class="keyword">);<br />    </span><span class="default">$iv </span><span class="keyword">= </span><span class="default">openssl_random_pseudo_bytes</span><span class="keyword">(</span><span class="default">$ivlen</span><span class="keyword">);<br />    </span><span class="default">openssl_encrypt</span><span class="keyword">(</span><span class="default">SOURCE</span><span class="keyword">, </span><span class="default">$cipher</span><span class="keyword">, </span><span class="default">KEY</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$iv</span><span class="keyword">);<br />};<br /><br /></span><span class="default">$methods </span><span class="keyword">= </span><span class="default">openssl_get_cipher_methods</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">array_splice</span><span class="keyword">( </span><span class="default">$methods</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$methods</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">$timings </span><span class="keyword">= array();<br /><br />foreach (</span><span class="default">$methods </span><span class="keyword">as </span><span class="default">$cypher</span><span class="keyword">) {<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">TESTER</span><span class="keyword">( </span><span class="default">$crypt</span><span class="keyword">, </span><span class="default">$cypher </span><span class="keyword">);<br />    </span><span class="default">$timings</span><span class="keyword">[ </span><span class="default">$cypher </span><span class="keyword">] = </span><span class="default">$time</span><span class="keyword">;<br />    echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$cypher</span><span class="keyword">, </span><span class="default">40</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">), </span><span class="string">" have time  "</span><span class="keyword">, </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$time</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">), </span><span class="string">' seconds. '</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">uasort</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">){<br />    return </span><span class="default">$a </span><span class="keyword">&lt;=&gt; </span><span class="default">$b</span><span class="keyword">;<br />});<br /><br /></span><span class="default">$min_time </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">reset</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">) / </span><span class="default">TEST_COUNT</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /></span><span class="default">$min_cypher </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">);<br /><br /></span><span class="default">$max_time </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">end</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">) / </span><span class="default">TEST_COUNT</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /></span><span class="default">$max_cypher </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">);<br /><br />echo </span><span class="string">'-------------'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">"Total tests: "</span><span class="keyword">, </span><span class="default">count</span><span class="keyword">(</span><span class="default">$timings</span><span class="keyword">), </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">"Max timing : </span><span class="keyword">{</span><span class="default">$max_time</span><span class="keyword">}</span><span class="string"> seconds for `</span><span class="keyword">{</span><span class="default">$max_cypher</span><span class="keyword">}</span><span class="string">` algorithm."</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">"Min timing : </span><span class="keyword">{</span><span class="default">$min_time</span><span class="keyword">}</span><span class="string"> seconds for `</span><span class="keyword">{</span><span class="default">$min_cypher</span><span class="keyword">}</span><span class="string">` algorithm."</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />echo </span><span class="string">'Details: '</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />foreach (</span><span class="default">$timings </span><span class="keyword">as </span><span class="default">$m </span><span class="keyword">=&gt; </span><span class="default">$t</span><span class="keyword">) {<br />    echo </span><span class="string">'- '</span><span class="keyword">, </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">), </span><span class="string">" seconds for `</span><span class="keyword">{</span><span class="default">$m</span><span class="keyword">}</span><span class="string">`"</span><span class="keyword">,  </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">PHP_EOL</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78818">  <div class="votes">
    <div id="Vu78818">
    <a href="/manual/vote-note.php?id=78818&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78818">
    <a href="/manual/vote-note.php?id=78818&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78818" title="100% like this...">
    2
    </div>
  </div>
  <a href="#78818" class="name">
  <strong class="user"><em>kurian at net4ideas dot com</em></strong></a><a class="genanchor" href="#78818"> &para;</a><div class="date" title="2007-10-29 08:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78818">
<div class="phpcode"><code><span class="html">For working of openssl in windows platform IIS webserver, we need to enable in php.ini, tne copy libeay32.dll and ssleay32.dll to the php folder (or windows's system32 folder) and add both dll's path to the window's PATH variable. It seems to be working for me after I did these changes.</span></code></div>
  </div>
 </div>
  <div class="note" id="58576">  <div class="votes">
    <div id="Vu58576">
    <a href="/manual/vote-note.php?id=58576&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58576">
    <a href="/manual/vote-note.php?id=58576&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58576" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58576" class="name">
  <strong class="user"><em>matt at NOSPAMopenflowsPLEASE dot org</em></strong></a><a class="genanchor" href="#58576"> &para;</a><div class="date" title="2005-11-08 10:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58576">
<div class="phpcode"><code><span class="html">The openssl functions were disabled in Debian release 3.0 (woody), but as of release 3.1 (sarge) they're available again.</span></code></div>
  </div>
 </div>
  <div class="note" id="56349">  <div class="votes">
    <div id="Vu56349">
    <a href="/manual/vote-note.php?id=56349&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56349">
    <a href="/manual/vote-note.php?id=56349&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56349" title="100% like this...">
    1
    </div>
  </div>
  <a href="#56349" class="name">
  <strong class="user"><em>greensweater</em></strong></a><a class="genanchor" href="#56349"> &para;</a><div class="date" title="2005-08-31 04:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56349">
<div class="phpcode"><code><span class="html">Sorry, the code in my previous note doesn't work... the last line should read:<br /><br />$csr = openssl_csr_new(array('commonName'=&gt;'MyCSR'),$pkey,$config);</span></code></div>
  </div>
 </div>
  <div class="note" id="45738">  <div class="votes">
    <div id="Vu45738">
    <a href="/manual/vote-note.php?id=45738&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45738">
    <a href="/manual/vote-note.php?id=45738&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45738" title="100% like this...">
    1
    </div>
  </div>
  <a href="#45738" class="name">
  <strong class="user"><em>jaz at ensn dot net</em></strong></a><a class="genanchor" href="#45738"> &para;</a><div class="date" title="2004-09-16 11:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45738">
<div class="phpcode"><code><span class="html">For newbies (as me):<br />If you want to try at home on win32, you can learn how to install apache+ssl on this url: <a href="http://tud.at/programm/apache-ssl-win32-howto.php3" rel="nofollow" target="_blank">http://tud.at/programm/apache-ssl-win32-howto.php3</a><br /><br />Versions on English, Spanish and French.<br /><br />Just I have read and install and run perfectly.</span></code></div>
  </div>
 </div>
  <div class="note" id="39564">  <div class="votes">
    <div id="Vu39564">
    <a href="/manual/vote-note.php?id=39564&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39564">
    <a href="/manual/vote-note.php?id=39564&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39564" title="100% like this...">
    1
    </div>
  </div>
  <a href="#39564" class="name">
  <strong class="user"><em>norman at rasmussen dot org</em></strong></a><a class="genanchor" href="#39564"> &para;</a><div class="date" title="2004-02-02 10:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39564">
<div class="phpcode"><code><span class="html">Debian maintainers have disabled the openssl support because it seems to help break apache on startup.  (<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=193343" rel="nofollow" target="_blank">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=193343</a> and <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=165699" rel="nofollow" target="_blank">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=165699</a>)<br /><br />- Norman</span></code></div>
  </div>
 </div>
  <div class="note" id="79295">  <div class="votes">
    <div id="Vu79295">
    <a href="/manual/vote-note.php?id=79295&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79295">
    <a href="/manual/vote-note.php?id=79295&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79295" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79295" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#79295"> &para;</a><div class="date" title="2007-11-19 06:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79295">
<div class="phpcode"><code><span class="html">There doesn't seem to be a function here to test if a cert is valid (i.e. not corrupt)... This bash snippet should help. Sorry it's not PHP. slap it in a system(); call or make it a bash script and call it that way or something...<br /><br />if [ "`openssl x509 -in /etc/certs/my.crt -noout -modulus`" = "`openssl rsa -in /etc/keys/my.key -noout -modulus`" ]; then echo "Match"; else echo "Different"; fi</span></code></div>
  </div>
 </div>
  <div class="note" id="71522">  <div class="votes">
    <div id="Vu71522">
    <a href="/manual/vote-note.php?id=71522&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71522">
    <a href="/manual/vote-note.php?id=71522&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71522" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71522" class="name">
  <strong class="user"><em>Richard Ablewhite</em></strong></a><a class="genanchor" href="#71522"> &para;</a><div class="date" title="2006-12-04 02:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71522">
<div class="phpcode"><code><span class="html">Windows users be warned that you need the following file in system32:<br /><br />msvcr71.dll<br /><br />It has to go in system32, is not picked up from php/dlls</span></code></div>
  </div>
 </div>
  <div class="note" id="125537">  <div class="votes">
    <div id="Vu125537">
    <a href="/manual/vote-note.php?id=125537&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125537">
    <a href="/manual/vote-note.php?id=125537&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125537" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#125537" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125537"> &para;</a><div class="date" title="2020-11-24 10:50"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125537">
<div class="phpcode"><code><span class="html">Improvement to the first comment, this function will handle correctly cert chains when converting from PEM to DER format:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">pemToDer</span><span class="keyword">(</span><span class="default">string $pem_data</span><span class="keyword">): </span><span class="default">string<br />    </span><span class="keyword">{<br />        </span><span class="default">$der_data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />        </span><span class="default">$begin </span><span class="keyword">= </span><span class="string">"-----BEGIN CERTIFICATE-----"</span><span class="keyword">;<br />        </span><span class="default">$end   </span><span class="keyword">= </span><span class="string">"-----END CERTIFICATE-----"</span><span class="keyword">;<br />        while (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$begin</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$pem_data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$begin</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$begin</span><span class="keyword">));<br />            </span><span class="default">$der_data </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">));<br />            </span><span class="default">$pem_data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pem_data</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">));<br />        }<br /><br />        return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$der_data</span><span class="keyword">);<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77140">  <div class="votes">
    <div id="Vu77140">
    <a href="/manual/vote-note.php?id=77140&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77140">
    <a href="/manual/vote-note.php?id=77140&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77140" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#77140" class="name">
  <strong class="user"><em>ChronoFish</em></strong></a><a class="genanchor" href="#77140"> &para;</a><div class="date" title="2007-08-16 11:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77140">
<div class="phpcode"><code><span class="html">There is a note below regarding the need to copy BOTH ssleay32.dll AND libeay32.dll to a folder in the system PATH on Win32 systems.<br /><br />That is absolutely true.  It should be noted also that Windows will search the Windows system directories before it will search the PATH.  If you have existing .dlls in these directories - rename (rather than deleting in case you need to undo your changes) them and copy over the latest version of these files.<br /><br />Key locations may include the /i386, /windows/system32, and ~/apache/.../modules directories.<br /><br />I also updated my ~/subversion/bin directory.<br /><br />-CF</span></code></div>
  </div>
 </div>
  <div class="note" id="74786">  <div class="votes">
    <div id="Vu74786">
    <a href="/manual/vote-note.php?id=74786&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74786">
    <a href="/manual/vote-note.php?id=74786&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74786" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#74786" class="name">
  <strong class="user"><em>igor dot gorshkov at gmail dot com</em></strong></a><a class="genanchor" href="#74786"> &para;</a><div class="date" title="2007-04-27 05:31"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74786">
<div class="phpcode"><code><span class="html">I generate certificates in such a way. <br /><br />$config = array("config" =&gt; "d:/sslcert/openssl.cnf");<br />$dn = array(<br />   "countryName" =&gt; "RU",<br />   "stateOrProvinceName" =&gt; "Russia",<br />   "localityName" =&gt; "Saint-Petersburg",<br />   "organizationName" =&gt; "temp",<br />   "organizationalUnitName" =&gt; "temp",<br />   "commonName" =&gt; "temp",<br />   "emailAddress" =&gt; "temp@temp.com"<br />);<br />$privkey_enc = openssl_pkey_new($config);<br />$csr = openssl_csr_new($dn, $privkey_enc, $config);<br />$sscert = openssl_csr_sign($csr, null, $privkey_enc, 365);<br />openssl_x509_export_to_file($sscert, "d:/cert_enc.crt");<br />openssl_pkey_export_to_file($privkey_enc, "d:/privkey_enc.pem");<br /><br />As a result all the received certificates have identical serial number (00). But it should not be! How to avoid it?</span></code></div>
  </div>
 </div>
  <div class="note" id="77439">  <div class="votes">
    <div id="Vu77439">
    <a href="/manual/vote-note.php?id=77439&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77439">
    <a href="/manual/vote-note.php?id=77439&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77439" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#77439" class="name">
  <strong class="user"><em>mattalexx at gmail dot com</em></strong></a><a class="genanchor" href="#77439"> &para;</a><div class="date" title="2007-08-29 02:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77439">
<div class="phpcode"><code><span class="html">Use this for simple public/private key encryption.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Point to your config file<br /> *<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"OPEN_SSL_CONF_PATH"</span><span class="keyword">, </span><span class="string">"/usr/share/ssl/openssl.cnf"</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * Length of time certificate is valid (in days)<br /> *<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"OPEN_SSL_CERT_DAYS_VALID"</span><span class="keyword">, </span><span class="default">365</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * Passphrase required with private key<br /> *<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"OPEN_SSL_PASSPHRASE"</span><span class="keyword">, </span><span class="string">"lkdfjbjeyrasdfvkajwdeblsolkdkdjfbvzslalsmdbfvksb"</span><span class="keyword">);<br /></span><span class="comment">/**<br /> * Enter description here...<br /> *<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">"OPEN_SSL_PUBKEY_PATH"</span><span class="keyword">, </span><span class="string">"/docs/domains/mywebsite.com/docs/key.pem"</span><span class="keyword">); </span><span class="comment">// Public key path<br /><br />/**<br /> * A wrapper class for a simple subset of the PHP OpenSSL functions. Use for public key encryption jobs.<br /> * <br /> * &lt;code&gt;<br /> * <br /> * // To configure<br /> * // 1. Set OPEN_SSL_CONF_PATH to the path of your openssl.cnf file.<br /> * // 2. Set OPEN_SSL_PASSPHRASE to any passphrase.<br /> * // 3. Use the OpenSSL::do_csr method to generate your private and public keys (see next section).<br /> * // 4. Save the private key somewhere offline and save your public key somewhere on this machine.<br /> * // 5. Set OPEN_SSL_PUBKEY_PATH to the public key's path.<br /> * <br /> * // To generate keys<br /> * $ossl = new OpenSSL;<br /> * $ossl-&gt;do_csr();<br /> * $privatekey = $ossl-&gt;privatekey;<br /> * $publickey = $ossl-&gt;publickey;<br /> * unset($ossl);<br /> * <br /> * // Encrypt<br /> * $text = "Secret text";<br /> * $ossl = new OpenSSL;<br /> * $ossl-&gt;encrypt($text);<br /> * $encrypted_text = $ossl-&gt;crypttext;<br /> * $ekey = $ossl-&gt;ekey;<br /> * unset($ossl);<br /> * <br /> * // Decrypt<br /> * $ossl = new OpenSSL;<br /> * $decrypted_text = $ossl-&gt;decrypt($encrypted_text, $privatekey, $ekey);<br /> * unset($ossl);<br /> * <br /> * @author Matt Alexander (mattalexx@gmail.com) [based on code by Alex Poole (php@wwwcrm.com)]<br /> * @copyright 2007<br /> * <br /> */<br /></span><span class="keyword">class </span><span class="default">OpenSSL </span><span class="keyword">{<br />   <br />   public </span><span class="default">$privatekey</span><span class="keyword">;<br />   public </span><span class="default">$publickey</span><span class="keyword">;<br />   public </span><span class="default">$csr</span><span class="keyword">;<br />   public </span><span class="default">$crypttext</span><span class="keyword">;<br />   public </span><span class="default">$ekey</span><span class="keyword">;<br />    <br />   public function </span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$plain</span><span class="keyword">) {<br />      <br />      </span><span class="comment">// Turn public key into resource<br />      </span><span class="default">$publickey </span><span class="keyword">= </span><span class="default">openssl_get_publickey</span><span class="keyword">(</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">OPEN_SSL_PUBKEY_PATH</span><span class="keyword">)? </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">OPEN_SSL_PUBKEY_PATH</span><span class="keyword">) : </span><span class="default">OPEN_SSL_PUBKEY_PATH</span><span class="keyword">);<br />      <br />      </span><span class="comment">// Encrypt<br />      </span><span class="default">openssl_seal</span><span class="keyword">(</span><span class="default">$plain</span><span class="keyword">, </span><span class="default">$crypttext</span><span class="keyword">, </span><span class="default">$ekey</span><span class="keyword">, array(</span><span class="default">$publickey</span><span class="keyword">));<br />      </span><span class="default">openssl_free_key</span><span class="keyword">(</span><span class="default">$publickey</span><span class="keyword">);<br />      <br />      </span><span class="comment">// Set values<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">crypttext </span><span class="keyword">= </span><span class="default">$crypttext</span><span class="keyword">;<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ekey </span><span class="keyword">= </span><span class="default">$ekey</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />   }<br /> <br />   public function </span><span class="default">decrypt</span><span class="keyword">(</span><span class="default">$crypt</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">, </span><span class="default">$ekey</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">) {<br />   <br />      </span><span class="comment">// Turn private key into resource<br />      </span><span class="default">$privatekey </span><span class="keyword">= </span><span class="default">openssl_get_privatekey</span><span class="keyword">((</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$privatekey</span><span class="keyword">)? </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$privatekey</span><span class="keyword">) : </span><span class="default">$privatekey</span><span class="keyword">), </span><span class="default">OPEN_SSL_PASSPHRASE</span><span class="keyword">);<br />      <br />      </span><span class="comment">// Decrypt<br />      </span><span class="default">openssl_open</span><span class="keyword">(</span><span class="default">$crypt</span><span class="keyword">, </span><span class="default">$plaintext</span><span class="keyword">, </span><span class="default">$ekey</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">);<br />      </span><span class="default">openssl_free_key</span><span class="keyword">(</span><span class="default">$privatekey</span><span class="keyword">);<br />      <br />      </span><span class="comment">// Return value<br />      </span><span class="keyword">return </span><span class="default">$plaintext</span><span class="keyword">;<br />   }<br /><br />   public function </span><span class="default">do_csr</span><span class="keyword">( <br />   </span><span class="default">$countryName </span><span class="keyword">= </span><span class="string">"UK"</span><span class="keyword">,<br />   </span><span class="default">$stateOrProvinceName </span><span class="keyword">= </span><span class="string">"London"</span><span class="keyword">,<br />   </span><span class="default">$localityName </span><span class="keyword">= </span><span class="string">"Blah"</span><span class="keyword">,<br />   </span><span class="default">$organizationName </span><span class="keyword">= </span><span class="string">"Blah1"</span><span class="keyword">,<br />   </span><span class="default">$organizationalUnitName </span><span class="keyword">= </span><span class="string">"Blah2"</span><span class="keyword">,<br />   </span><span class="default">$commonName </span><span class="keyword">= </span><span class="string">"Joe Bloggs"</span><span class="keyword">,<br />   </span><span class="default">$emailAddress </span><span class="keyword">= </span><span class="string">"openssl@domain.com"<br />   </span><span class="keyword">) {         <br />      </span><span class="default">$dn </span><span class="keyword">= array(<br />         </span><span class="string">"countryName" </span><span class="keyword">=&gt; </span><span class="default">$countryName</span><span class="keyword">,<br />         </span><span class="string">"stateOrProvinceName" </span><span class="keyword">=&gt; </span><span class="default">$stateOrProvinceName</span><span class="keyword">,<br />         </span><span class="string">"localityName" </span><span class="keyword">=&gt; </span><span class="default">$localityName</span><span class="keyword">,<br />         </span><span class="string">"organizationName" </span><span class="keyword">=&gt; </span><span class="default">$organizationName</span><span class="keyword">,<br />         </span><span class="string">"organizationalUnitName" </span><span class="keyword">=&gt; </span><span class="default">$organizationalUnitName</span><span class="keyword">,<br />         </span><span class="string">"commonName" </span><span class="keyword">=&gt; </span><span class="default">$commonName</span><span class="keyword">,<br />         </span><span class="string">"emailAddress" </span><span class="keyword">=&gt; </span><span class="default">$emailAddress<br />         </span><span class="keyword">);<br />      </span><span class="default">$config </span><span class="keyword">= array(<br />         </span><span class="string">"config" </span><span class="keyword">=&gt; </span><span class="default">OPEN_SSL_CONF_PATH<br />         </span><span class="keyword">);<br />      </span><span class="default">$privkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">();<br />      </span><span class="default">$csr </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">);<br />      </span><span class="default">$sscert </span><span class="keyword">= </span><span class="default">openssl_csr_sign</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">OPEN_SSL_CERT_DAYS_VALID</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">);<br />      </span><span class="default">openssl_x509_export</span><span class="keyword">(</span><span class="default">$sscert</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">publickey</span><span class="keyword">);<br />      </span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">privatekey</span><span class="keyword">, </span><span class="default">OPEN_SSL_PASSPHRASE</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">);<br />      </span><span class="default">openssl_csr_export</span><span class="keyword">(</span><span class="default">$csr</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">csr</span><span class="keyword">);<br />   }<br />   <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58806">  <div class="votes">
    <div id="Vu58806">
    <a href="/manual/vote-note.php?id=58806&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58806">
    <a href="/manual/vote-note.php?id=58806&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58806" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#58806" class="name">
  <strong class="user"><em>php ~at~ wwwcrm dot komm</em></strong></a><a class="genanchor" href="#58806"> &para;</a><div class="date" title="2005-11-16 08:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58806">
<div class="phpcode"><code><span class="html">If you want to use PHP for public / private key encryption jobs without needing to know the ins and outs of the Open SSL extension, the following may be of interest:<br /><br /><a href="http://www.karenandalex.com/php_stuff/_class_OpenSSL.phps" rel="nofollow" target="_blank">http://www.karenandalex.com/php_stuff/_class_OpenSSL.phps</a><br /><br />This class was unavailable for a long while (server problems) but is now back up. Apologies to those who clicked through and got a 404<br /><br />I hope it is useful to you...<br /><br />Alex</span></code></div>
  </div>
 </div>
  <div class="note" id="58581">  <div class="votes">
    <div id="Vu58581">
    <a href="/manual/vote-note.php?id=58581&amp;page=ref.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58581">
    <a href="/manual/vote-note.php?id=58581&amp;page=ref.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58581" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#58581" class="name">
  <strong class="user"><em>beckman at purplecow dot com</em></strong></a><a class="genanchor" href="#58581"> &para;</a><div class="date" title="2005-11-08 12:07"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58581">
<div class="phpcode"><code><span class="html">FreeBSD Ports tree php5-openssl uses openssl-0.9.8a.  This is a problem, as if you install these two ports and attempt to open an HTTPS URL within PHP, it will fail with this error from openssl_error_string(): error:140A90A1:SSL routines:func(169):reason(161) which is SSL_R_LIBRARY_HAS_NO_CIPHERS or "library has no ciphers"<br /><br />This is because the openssl library now requires you to load your ciphers manually -- all ciphers are not automatically loaded for you.<br /><br />I don't believe the php5-openssl module has been updated to do this before opening an SSL connection (as of 5.0.5). <br /><br />Using openssl-0.9.7i seems to work; symlinking libcrypto.so.3 to libcrypto.so.4 prevents the php5-openssl port from trying to install openssl-0.9.8a.  So install openssl-stable (0.9.7i) from ports first, symlink 2nd, then install php5-openssl 3rd, and you should be OK.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.openssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.openssl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.openssl.php">OpenSSL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.openssl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="openssl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="openssl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="openssl.certparams.php" title="Key/Certificate parameters">Key/Certificate parameters</a>
                        </li>
                                                <li class="">
                            <a href="openssl.cert.verification.php" title="Certificate Verification">Certificate Verification</a>
                        </li>
                                                <li class="current">
                            <a href="ref.openssl.php" title="OpenSSL Functions">OpenSSL Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.opensslcertificate.php" title="OpenSSLCertificate">OpenSSLCertificate</a>
                        </li>
                                                <li class="">
                            <a href="class.opensslcertificatesigningrequest.php" title="OpenSSLCertificateSigningRequest">OpenSSLCertificateSigningRequest</a>
                        </li>
                                                <li class="">
                            <a href="class.opensslasymmetrickey.php" title="OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a>
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
