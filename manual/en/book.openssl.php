<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OpenSSL - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.openssl.php">
 <link rel="shorturl" href="https://www.php.net/openssl">
 <link rel="alternate" href="https://www.php.net/openssl" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.crypto.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mhash-keygen-s2k.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.openssl.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.openssl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.openssl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.openssl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.openssl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.openssl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.openssl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.openssl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.openssl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.openssl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.openssl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.openssl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OpenSSL" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OpenSSL - Manual" />
<meta name="twitter:description" content="OpenSSL" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OpenSSL - Manual" />
<meta itemprop="description" content="OpenSSL" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OpenSSL" />

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
        <a href="intro.openssl.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mhash-keygen-s2k.php">
          &laquo; mhash_keygen_s2k        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      </ul>
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
            <option value='en/book.openssl.php' selected="selected">English</option>
            <option value='de/book.openssl.php'>German</option>
            <option value='es/book.openssl.php'>Spanish</option>
            <option value='fr/book.openssl.php'>French</option>
            <option value='it/book.openssl.php'>Italian</option>
            <option value='ja/book.openssl.php'>Japanese</option>
            <option value='pt_BR/book.openssl.php'>Brazilian Portuguese</option>
            <option value='ru/book.openssl.php'>Russian</option>
            <option value='tr/book.openssl.php'>Turkish</option>
            <option value='uk/book.openssl.php'>Ukrainian</option>
            <option value='zh/book.openssl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.openssl" class="book">
 
 <h1 class="title">OpenSSL</h1>
 
 
 
 
 
 







 




 







 


 




 







 




 




 





<ul class="chunklist chunklist_book"><li><a href="intro.openssl.php">Introduction</a></li><li><a href="openssl.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="openssl.requirements.php">Requirements</a></li><li><a href="openssl.installation.php">Installation</a></li><li><a href="openssl.configuration.php">Runtime Configuration</a></li><li><a href="openssl.resources.php">Resource Types</a></li></ul></li><li><a href="openssl.constants.php">Predefined Constants</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="openssl.purpose-check.php">Purpose checking flags</a></li><li><a href="openssl.padding.php">Padding flags for asymmetric encryption</a></li><li><a href="openssl.key-types.php">Key types</a></li><li><a href="openssl.pkcs7.flags.php">PKCS7 Flags/Constants</a></li><li><a href="openssl.cms.flags.php">CMS Flags/Constants</a></li><li><a href="openssl.signature-algos.php">Signature Algorithms</a></li><li><a href="openssl.ciphers.php">Ciphers</a></li><li><a href="openssl.constversion.php">Version constants</a></li><li><a href="openssl.constsni.php">Server Name Indication constants</a></li><li><a href="openssl.constants.other.php">Other Constants</a></li></ul></li><li><a href="openssl.certparams.php">Key/Certificate parameters</a></li><li><a href="openssl.cert.verification.php">Certificate Verification</a></li><li><a href="ref.openssl.php">OpenSSL Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.openssl-cipher-iv-length.php">openssl_cipher_iv_length</a> — Gets the cipher iv length</li><li><a href="function.openssl-cipher-key-length.php">openssl_cipher_key_length</a> — Gets the cipher key length</li><li><a href="function.openssl-cms-decrypt.php">openssl_cms_decrypt</a> — Decrypt a CMS message</li><li><a href="function.openssl-cms-encrypt.php">openssl_cms_encrypt</a> — Encrypt a CMS message</li><li><a href="function.openssl-cms-read.php">openssl_cms_read</a> — Export the CMS file to an array of PEM certificates</li><li><a href="function.openssl-cms-sign.php">openssl_cms_sign</a> — Sign a file</li><li><a href="function.openssl-cms-verify.php">openssl_cms_verify</a> — Verify a CMS signature</li><li><a href="function.openssl-csr-export.php">openssl_csr_export</a> — Exports a CSR as a string</li><li><a href="function.openssl-csr-export-to-file.php">openssl_csr_export_to_file</a> — Exports a CSR to a file</li><li><a href="function.openssl-csr-get-public-key.php">openssl_csr_get_public_key</a> — Returns the public key of a CSR</li><li><a href="function.openssl-csr-get-subject.php">openssl_csr_get_subject</a> — Returns the subject of a CSR</li><li><a href="function.openssl-csr-new.php">openssl_csr_new</a> — Generates a CSR</li><li><a href="function.openssl-csr-sign.php">openssl_csr_sign</a> — Sign a CSR with another certificate (or itself) and generate a certificate</li><li><a href="function.openssl-decrypt.php">openssl_decrypt</a> — Decrypts data</li><li><a href="function.openssl-dh-compute-key.php">openssl_dh_compute_key</a> — Computes shared secret for public value of remote DH public key and local DH key</li><li><a href="function.openssl-digest.php">openssl_digest</a> — Computes a digest</li><li><a href="function.openssl-encrypt.php">openssl_encrypt</a> — Encrypts data</li><li><a href="function.openssl-error-string.php">openssl_error_string</a> — Return openSSL error message</li><li><a href="function.openssl-free-key.php">openssl_free_key</a> — Free key resource</li><li><a href="function.openssl-get-cert-locations.php">openssl_get_cert_locations</a> — Retrieve the available certificate locations</li><li><a href="function.openssl-get-cipher-methods.php">openssl_get_cipher_methods</a> — Gets available cipher methods</li><li><a href="function.openssl-get-curve-names.php">openssl_get_curve_names</a> — Gets list of available curve names for ECC</li><li><a href="function.openssl-get-md-methods.php">openssl_get_md_methods</a> — Gets available digest methods</li><li><a href="function.openssl-get-privatekey.php">openssl_get_privatekey</a> — Alias of openssl_pkey_get_private</li><li><a href="function.openssl-get-publickey.php">openssl_get_publickey</a> — Alias of openssl_pkey_get_public</li><li><a href="function.openssl-open.php">openssl_open</a> — Open sealed data</li><li><a href="function.openssl-pbkdf2.php">openssl_pbkdf2</a> — Generates a PKCS5 v2 PBKDF2 string</li><li><a href="function.openssl-pkcs12-export.php">openssl_pkcs12_export</a> — Exports a PKCS#12 Compatible Certificate Store File to variable</li><li><a href="function.openssl-pkcs12-export-to-file.php">openssl_pkcs12_export_to_file</a> — Exports a PKCS#12 Compatible Certificate Store File</li><li><a href="function.openssl-pkcs12-read.php">openssl_pkcs12_read</a> — Parse a PKCS#12 Certificate Store into an array</li><li><a href="function.openssl-pkcs7-decrypt.php">openssl_pkcs7_decrypt</a> — Decrypts an S/MIME encrypted message</li><li><a href="function.openssl-pkcs7-encrypt.php">openssl_pkcs7_encrypt</a> — Encrypt an S/MIME message</li><li><a href="function.openssl-pkcs7-read.php">openssl_pkcs7_read</a> — Export the PKCS7 file to an array of PEM certificates</li><li><a href="function.openssl-pkcs7-sign.php">openssl_pkcs7_sign</a> — Sign an S/MIME message</li><li><a href="function.openssl-pkcs7-verify.php">openssl_pkcs7_verify</a> — Verifies the signature of an S/MIME signed message</li><li><a href="function.openssl-pkey-derive.php">openssl_pkey_derive</a> — Computes shared secret for public value of remote and local DH or ECDH key</li><li><a href="function.openssl-pkey-export.php">openssl_pkey_export</a> — Gets an exportable representation of a key into a string</li><li><a href="function.openssl-pkey-export-to-file.php">openssl_pkey_export_to_file</a> — Gets an exportable representation of a key into a file</li><li><a href="function.openssl-pkey-free.php">openssl_pkey_free</a> — Frees a private key</li><li><a href="function.openssl-pkey-get-details.php">openssl_pkey_get_details</a> — Returns an array with the key details</li><li><a href="function.openssl-pkey-get-private.php">openssl_pkey_get_private</a> — Get a private key</li><li><a href="function.openssl-pkey-get-public.php">openssl_pkey_get_public</a> — Extract public key from certificate and prepare it for use</li><li><a href="function.openssl-pkey-new.php">openssl_pkey_new</a> — Generates a new private key</li><li><a href="function.openssl-private-decrypt.php">openssl_private_decrypt</a> — Decrypts data with private key</li><li><a href="function.openssl-private-encrypt.php">openssl_private_encrypt</a> — Encrypts data with private key</li><li><a href="function.openssl-public-decrypt.php">openssl_public_decrypt</a> — Decrypts data with public key</li><li><a href="function.openssl-public-encrypt.php">openssl_public_encrypt</a> — Encrypts data with public key</li><li><a href="function.openssl-random-pseudo-bytes.php">openssl_random_pseudo_bytes</a> — Generate a pseudo-random string of bytes</li><li><a href="function.openssl-seal.php">openssl_seal</a> — Seal (encrypt) data</li><li><a href="function.openssl-sign.php">openssl_sign</a> — Generate signature</li><li><a href="function.openssl-spki-export.php">openssl_spki_export</a> — Exports a valid PEM formatted public key signed public key and challenge</li><li><a href="function.openssl-spki-export-challenge.php">openssl_spki_export_challenge</a> — Exports the challenge associated with a signed public key and challenge</li><li><a href="function.openssl-spki-new.php">openssl_spki_new</a> — Generate a new signed public key and challenge</li><li><a href="function.openssl-spki-verify.php">openssl_spki_verify</a> — Verifies a signed public key and challenge</li><li><a href="function.openssl-verify.php">openssl_verify</a> — Verify signature</li><li><a href="function.openssl-x509-check-private-key.php">openssl_x509_check_private_key</a> — Checks if a private key corresponds to a certificate</li><li><a href="function.openssl-x509-checkpurpose.php">openssl_x509_checkpurpose</a> — Verifies if a certificate can be used for a particular purpose</li><li><a href="function.openssl-x509-export.php">openssl_x509_export</a> — Exports a certificate as a string</li><li><a href="function.openssl-x509-export-to-file.php">openssl_x509_export_to_file</a> — Exports a certificate to file</li><li><a href="function.openssl-x509-fingerprint.php">openssl_x509_fingerprint</a> — Calculates the fingerprint, or digest, of a given X.509 certificate</li><li><a href="function.openssl-x509-free.php">openssl_x509_free</a> — Free certificate resource</li><li><a href="function.openssl-x509-parse.php">openssl_x509_parse</a> — Parse an X509 certificate and return the information as an array</li><li><a href="function.openssl-x509-read.php">openssl_x509_read</a> — Parse an X.509 certificate and return an object for
  it</li><li><a href="function.openssl-x509-verify.php">openssl_x509_verify</a> — Verifies digital signature of x509 certificate against a public key</li></ul></li><li><a href="class.opensslcertificate.php">OpenSSLCertificate</a> — The OpenSSLCertificate class</li><li><a href="class.opensslcertificatesigningrequest.php">OpenSSLCertificateSigningRequest</a> — The OpenSSLCertificateSigningRequest class</li><li><a href="class.opensslasymmetrickey.php">OpenSSLAsymmetricKey</a> — The OpenSSLAsymmetricKey class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.openssl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.openssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.openssl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91210">  <div class="votes">
    <div id="Vu91210">
    <a href="/manual/vote-note.php?id=91210&amp;page=book.openssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91210">
    <a href="/manual/vote-note.php?id=91210&amp;page=book.openssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91210" title="67% like this...">
    68
    </div>
  </div>
  <a href="#91210" class="name">
  <strong class="user"><em>bdh dot hall at gmail dot com</em></strong></a><a class="genanchor" href="#91210"> &para;</a><div class="date" title="2009-05-29 03:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91210">
<div class="phpcode"><code><span class="html">I was having a heck of a time finding help on making asynchronous encryption/decryption using private key/public key systems working, and I had to have it for creating a credit card module that uses recurring billing.<br /><br />You'd be a fool to use normal, 'synchronous' or two-way encryption for this, so the whole mcrypt library won't help.<br /><br />But, it turns out OpenSSL is extremely easy to use...yet it is so sparsely documented that it seems it would be incredibly hard.<br /><br />So I share my day of hacking with you - I hope you find it helpful!<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTPS'</span><span class="keyword">]) )<br />{<br />    echo </span><span class="string">"SECURE: This page is being accessed through a secure connection.&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br />else<br />{<br />    echo </span><span class="string">"UNSECURE: This page is being access through an unsecure connection.&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Create the keypair<br /></span><span class="default">$res</span><span class="keyword">=</span><span class="default">openssl_pkey_new</span><span class="keyword">();<br /><br /></span><span class="comment">// Get private key<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">);<br /><br /></span><span class="comment">// Get public key<br /></span><span class="default">$publickey</span><span class="keyword">=</span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br /></span><span class="default">$publickey</span><span class="keyword">=</span><span class="default">$publickey</span><span class="keyword">[</span><span class="string">"key"</span><span class="keyword">];<br /><br />echo </span><span class="string">"Private Key:&lt;BR&gt;</span><span class="default">$privatekey</span><span class="string">&lt;br&gt;&lt;br&gt;Public Key:&lt;BR&gt;</span><span class="default">$publickey</span><span class="string">&lt;BR&gt;&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">$cleartext </span><span class="keyword">= </span><span class="string">'1234 5678 9012 3456'</span><span class="keyword">;<br /><br />echo </span><span class="string">"Clear text:&lt;br&gt;</span><span class="default">$cleartext</span><span class="string">&lt;BR&gt;&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">openssl_public_encrypt</span><span class="keyword">(</span><span class="default">$cleartext</span><span class="keyword">, </span><span class="default">$crypttext</span><span class="keyword">, </span><span class="default">$publickey</span><span class="keyword">);<br /><br />echo </span><span class="string">"Crypt text:&lt;br&gt;</span><span class="default">$crypttext</span><span class="string">&lt;BR&gt;&lt;BR&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">openssl_private_decrypt</span><span class="keyword">(</span><span class="default">$crypttext</span><span class="keyword">, </span><span class="default">$decrypted</span><span class="keyword">, </span><span class="default">$privatekey</span><span class="keyword">);<br /><br />echo </span><span class="string">"Decrypted text:&lt;BR&gt;</span><span class="default">$decrypted</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Many thanks to other contributors in the docs for making this less painful.<br /><br />Note that you will want to use these sorts of functions to generate a key ONCE - save your privatekey offline for decryption, and put your public key in your scripts/configuration file. If your data is compromised you don't care about the encrypted stuff or the public key, it's only the private key and cleartext that really matter.<br /><br />Good luck!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.openssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.openssl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.crypto.php">Cryptography Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.hash.php" title="Hash">Hash</a>
                        </li>
                                                <li class="">
                            <a href="book.mcrypt.php" title="Mcrypt">Mcrypt</a>
                        </li>
                                                <li class="">
                            <a href="book.mhash.php" title="Mhash">Mhash</a>
                        </li>
                                                <li class="current">
                            <a href="book.openssl.php" title="OpenSSL">OpenSSL</a>
                        </li>
                                                <li class="">
                            <a href="book.password.php" title="Password Hashing">Password Hashing</a>
                        </li>
                                                <li class="">
                            <a href="book.rnp.php" title="Rnp">Rnp</a>
                        </li>
                                                <li class="">
                            <a href="book.sodium.php" title="Sodium">Sodium</a>
                        </li>
                                                <li class="">
                            <a href="book.xpass.php" title="Xpass">Xpass</a>
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
