<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Sodium Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.sodium.php">
 <link rel="shorturl" href="https://www.php.net/sodium">
 <link rel="alternate" href="https://www.php.net/sodium" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sodium.php">
 <link rel="prev" href="https://www.php.net/manual/en/sodium.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sodium-add.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.sodium.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.sodium.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.sodium.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.sodium.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.sodium.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.sodium.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.sodium.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.sodium.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.sodium.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.sodium.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.sodium.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sodium Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Sodium Functions - Manual" />
<meta name="twitter:description" content="Sodium Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Sodium Functions - Manual" />
<meta itemprop="description" content="Sodium Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sodium Functions" />

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
        <a href="function.sodium-add.php">
          sodium_add &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sodium.constants.php">
          &laquo; Predefined Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.sodium.php'>Sodium</a></li>      </ul>
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
            <option value='en/ref.sodium.php' selected="selected">English</option>
            <option value='de/ref.sodium.php'>German</option>
            <option value='es/ref.sodium.php'>Spanish</option>
            <option value='fr/ref.sodium.php'>French</option>
            <option value='it/ref.sodium.php'>Italian</option>
            <option value='ja/ref.sodium.php'>Japanese</option>
            <option value='pt_BR/ref.sodium.php'>Brazilian Portuguese</option>
            <option value='ru/ref.sodium.php'>Russian</option>
            <option value='tr/ref.sodium.php'>Turkish</option>
            <option value='uk/ref.sodium.php'>Ukrainian</option>
            <option value='zh/ref.sodium.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.sodium" class="reference">
 <h1 class="title">Sodium Functions</h1>

 

























































































































































































































































































































































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.sodium-add.php">sodium_add</a> — Add large numbers</li><li><a href="function.sodium-base642bin.php">sodium_base642bin</a> — Decodes a base64-encoded string into raw binary.</li><li><a href="function.sodium-bin2base64.php">sodium_bin2base64</a> — Encodes a raw binary string with base64.</li><li><a href="function.sodium-bin2hex.php">sodium_bin2hex</a> — Encode to hexadecimal</li><li><a href="function.sodium-compare.php">sodium_compare</a> — Compare large numbers</li><li><a href="function.sodium-crypto-aead-aegis128l-decrypt.php">sodium_crypto_aead_aegis128l_decrypt</a> — Verify then decrypt a message with AEGIS-128L</li><li><a href="function.sodium-crypto-aead-aegis128l-encrypt.php">sodium_crypto_aead_aegis128l_encrypt</a> — Encrypt then authenticate a message with AEGIS-128L</li><li><a href="function.sodium-crypto-aead-aegis128l-keygen.php">sodium_crypto_aead_aegis128l_keygen</a> — Generate a random AEGIS-128L key</li><li><a href="function.sodium-crypto-aead-aegis256-decrypt.php">sodium_crypto_aead_aegis256_decrypt</a> — Verify then decrypt a message with AEGIS-256</li><li><a href="function.sodium-crypto-aead-aegis256-encrypt.php">sodium_crypto_aead_aegis256_encrypt</a> — Encrypt then authenticate a message with AEGIS-256</li><li><a href="function.sodium-crypto-aead-aegis256-keygen.php">sodium_crypto_aead_aegis256_keygen</a> — Generate a random AEGIS-256 key</li><li><a href="function.sodium-crypto-aead-aes256gcm-decrypt.php">sodium_crypto_aead_aes256gcm_decrypt</a> — Verify then decrypt a message with AES-256-GCM</li><li><a href="function.sodium-crypto-aead-aes256gcm-encrypt.php">sodium_crypto_aead_aes256gcm_encrypt</a> — Encrypt then authenticate with AES-256-GCM</li><li><a href="function.sodium-crypto-aead-aes256gcm-is-available.php">sodium_crypto_aead_aes256gcm_is_available</a> — Check if hardware supports AES256-GCM</li><li><a href="function.sodium-crypto-aead-aes256gcm-keygen.php">sodium_crypto_aead_aes256gcm_keygen</a> — Generate a random AES-256-GCM key</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-decrypt.php">sodium_crypto_aead_chacha20poly1305_decrypt</a> — Verify then decrypt with ChaCha20-Poly1305</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-encrypt.php">sodium_crypto_aead_chacha20poly1305_encrypt</a> — Encrypt then authenticate with ChaCha20-Poly1305</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt.php">sodium_crypto_aead_chacha20poly1305_ietf_decrypt</a> — Verify that the ciphertext includes a valid tag</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt.php">sodium_crypto_aead_chacha20poly1305_ietf_encrypt</a> — Encrypt a message</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-ietf-keygen.php">sodium_crypto_aead_chacha20poly1305_ietf_keygen</a> — Generate a random ChaCha20-Poly1305 (IETF) key.</li><li><a href="function.sodium-crypto-aead-chacha20poly1305-keygen.php">sodium_crypto_aead_chacha20poly1305_keygen</a> — Generate a random ChaCha20-Poly1305 key.</li><li><a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-decrypt.php">sodium_crypto_aead_xchacha20poly1305_ietf_decrypt</a> — (Preferred) Verify then decrypt with XChaCha20-Poly1305</li><li><a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.php">sodium_crypto_aead_xchacha20poly1305_ietf_encrypt</a> — (Preferred) Encrypt then authenticate with XChaCha20-Poly1305</li><li><a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-keygen.php">sodium_crypto_aead_xchacha20poly1305_ietf_keygen</a> — Generate a random XChaCha20-Poly1305 key.</li><li><a href="function.sodium-crypto-auth.php">sodium_crypto_auth</a> — Compute a tag for the message</li><li><a href="function.sodium-crypto-auth-keygen.php">sodium_crypto_auth_keygen</a> — Generate a random key for sodium_crypto_auth</li><li><a href="function.sodium-crypto-auth-verify.php">sodium_crypto_auth_verify</a> — Verifies that the tag is valid for the message</li><li><a href="function.sodium-crypto-box.php">sodium_crypto_box</a> — Authenticated public-key encryption</li><li><a href="function.sodium-crypto-box-keypair.php">sodium_crypto_box_keypair</a> — Randomly generate a secret key and a corresponding public key</li><li><a href="function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php">sodium_crypto_box_keypair_from_secretkey_and_publickey</a> — Create a unified keypair string from a secret key and public key</li><li><a href="function.sodium-crypto-box-open.php">sodium_crypto_box_open</a> — Authenticated public-key decryption</li><li><a href="function.sodium-crypto-box-publickey.php">sodium_crypto_box_publickey</a> — Extract the public key from a crypto_box keypair</li><li><a href="function.sodium-crypto-box-publickey-from-secretkey.php">sodium_crypto_box_publickey_from_secretkey</a> — Calculate the public key from a secret key</li><li><a href="function.sodium-crypto-box-seal.php">sodium_crypto_box_seal</a> — Anonymous public-key encryption</li><li><a href="function.sodium-crypto-box-seal-open.php">sodium_crypto_box_seal_open</a> — Anonymous public-key decryption</li><li><a href="function.sodium-crypto-box-secretkey.php">sodium_crypto_box_secretkey</a> — Extracts the secret key from a crypto_box keypair</li><li><a href="function.sodium-crypto-box-seed-keypair.php">sodium_crypto_box_seed_keypair</a> — Deterministically derive the key pair from a single key</li><li><a href="function.sodium-crypto-core-ristretto255-add.php">sodium_crypto_core_ristretto255_add</a> — Adds an element</li><li><a href="function.sodium-crypto-core-ristretto255-from-hash.php">sodium_crypto_core_ristretto255_from_hash</a> — Maps a vector</li><li><a href="function.sodium-crypto-core-ristretto255-is-valid-point.php">sodium_crypto_core_ristretto255_is_valid_point</a> — Determines if a point on the ristretto255 curve</li><li><a href="function.sodium-crypto-core-ristretto255-random.php">sodium_crypto_core_ristretto255_random</a> — Generates a random key</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-add.php">sodium_crypto_core_ristretto255_scalar_add</a> — Adds a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-complement.php">sodium_crypto_core_ristretto255_scalar_complement</a> — The sodium_crypto_core_ristretto255_scalar_complement purpose</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-invert.php">sodium_crypto_core_ristretto255_scalar_invert</a> — Inverts a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-mul.php">sodium_crypto_core_ristretto255_scalar_mul</a> — Multiplies a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-negate.php">sodium_crypto_core_ristretto255_scalar_negate</a> — Negates a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-random.php">sodium_crypto_core_ristretto255_scalar_random</a> — Generates a random key</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-reduce.php">sodium_crypto_core_ristretto255_scalar_reduce</a> — Reduces a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-scalar-sub.php">sodium_crypto_core_ristretto255_scalar_sub</a> — Subtracts a scalar value</li><li><a href="function.sodium-crypto-core-ristretto255-sub.php">sodium_crypto_core_ristretto255_sub</a> — Subtracts an element</li><li><a href="function.sodium-crypto-generichash.php">sodium_crypto_generichash</a> — Get a hash of the message</li><li><a href="function.sodium-crypto-generichash-final.php">sodium_crypto_generichash_final</a> — Complete the hash</li><li><a href="function.sodium-crypto-generichash-init.php">sodium_crypto_generichash_init</a> — Initialize a hash for streaming</li><li><a href="function.sodium-crypto-generichash-keygen.php">sodium_crypto_generichash_keygen</a> — Generate a random generichash key</li><li><a href="function.sodium-crypto-generichash-update.php">sodium_crypto_generichash_update</a> — Add message to a hash</li><li><a href="function.sodium-crypto-kdf-derive-from-key.php">sodium_crypto_kdf_derive_from_key</a> — Derive a subkey</li><li><a href="function.sodium-crypto-kdf-keygen.php">sodium_crypto_kdf_keygen</a> — Generate a random root key for the KDF interface</li><li><a href="function.sodium-crypto-kx-client-session-keys.php">sodium_crypto_kx_client_session_keys</a> — Calculate the client-side session keys.</li><li><a href="function.sodium-crypto-kx-keypair.php">sodium_crypto_kx_keypair</a> — Creates a new sodium keypair</li><li><a href="function.sodium-crypto-kx-publickey.php">sodium_crypto_kx_publickey</a> — Extract the public key from a crypto_kx keypair</li><li><a href="function.sodium-crypto-kx-secretkey.php">sodium_crypto_kx_secretkey</a> — Extract the secret key from a crypto_kx keypair.</li><li><a href="function.sodium-crypto-kx-seed-keypair.php">sodium_crypto_kx_seed_keypair</a> — Description</li><li><a href="function.sodium-crypto-kx-server-session-keys.php">sodium_crypto_kx_server_session_keys</a> — Calculate the server-side session keys.</li><li><a href="function.sodium-crypto-pwhash.php">sodium_crypto_pwhash</a> — Derive a key from a password, using Argon2</li><li><a href="function.sodium-crypto-pwhash-scryptsalsa208sha256.php">sodium_crypto_pwhash_scryptsalsa208sha256</a> — Derives a key from a password, using scrypt</li><li><a href="function.sodium-crypto-pwhash-scryptsalsa208sha256-str.php">sodium_crypto_pwhash_scryptsalsa208sha256_str</a> — Get an ASCII encoded hash</li><li><a href="function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php">sodium_crypto_pwhash_scryptsalsa208sha256_str_verify</a> — Verify that the password is a valid password verification string</li><li><a href="function.sodium-crypto-pwhash-str.php">sodium_crypto_pwhash_str</a> — Get an ASCII-encoded hash</li><li><a href="function.sodium-crypto-pwhash-str-needs-rehash.php">sodium_crypto_pwhash_str_needs_rehash</a> — Determine whether or not to rehash a password</li><li><a href="function.sodium-crypto-pwhash-str-verify.php">sodium_crypto_pwhash_str_verify</a> — Verifies that a password matches a hash</li><li><a href="function.sodium-crypto-scalarmult.php">sodium_crypto_scalarmult</a> — Compute a shared secret given a user's secret key and another user's public key</li><li><a href="function.sodium-crypto-scalarmult-base.php">sodium_crypto_scalarmult_base</a> — Alias of sodium_crypto_box_publickey_from_secretkey</li><li><a href="function.sodium-crypto-scalarmult-ristretto255.php">sodium_crypto_scalarmult_ristretto255</a> — Computes a shared secret</li><li><a href="function.sodium-crypto-scalarmult-ristretto255-base.php">sodium_crypto_scalarmult_ristretto255_base</a> — Calculates the public key from a secret key</li><li><a href="function.sodium-crypto-secretbox.php">sodium_crypto_secretbox</a> — Authenticated shared-key encryption</li><li><a href="function.sodium-crypto-secretbox-keygen.php">sodium_crypto_secretbox_keygen</a> — Generate random key for sodium_crypto_secretbox</li><li><a href="function.sodium-crypto-secretbox-open.php">sodium_crypto_secretbox_open</a> — Authenticated shared-key decryption</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php">sodium_crypto_secretstream_xchacha20poly1305_init_pull</a> — Initialize a secretstream context for decryption</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-push.php">sodium_crypto_secretstream_xchacha20poly1305_init_push</a> — Initialize a secretstream context for encryption</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-keygen.php">sodium_crypto_secretstream_xchacha20poly1305_keygen</a> — Generate a random secretstream key.</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-pull.php">sodium_crypto_secretstream_xchacha20poly1305_pull</a> — Decrypt a chunk of data from an encrypted stream</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-push.php">sodium_crypto_secretstream_xchacha20poly1305_push</a> — Encrypt a chunk of data so that it can safely be decrypted in a streaming API</li><li><a href="function.sodium-crypto-secretstream-xchacha20poly1305-rekey.php">sodium_crypto_secretstream_xchacha20poly1305_rekey</a> — Explicitly rotate the key in the secretstream state</li><li><a href="function.sodium-crypto-shorthash.php">sodium_crypto_shorthash</a> — Compute a short hash of a message and key</li><li><a href="function.sodium-crypto-shorthash-keygen.php">sodium_crypto_shorthash_keygen</a> — Get random bytes for key</li><li><a href="function.sodium-crypto-sign.php">sodium_crypto_sign</a> — Sign a message</li><li><a href="function.sodium-crypto-sign-detached.php">sodium_crypto_sign_detached</a> — Sign the message</li><li><a href="function.sodium-crypto-sign-ed25519-pk-to-curve25519.php">sodium_crypto_sign_ed25519_pk_to_curve25519</a> — Convert an Ed25519 public key to a Curve25519 public key</li><li><a href="function.sodium-crypto-sign-ed25519-sk-to-curve25519.php">sodium_crypto_sign_ed25519_sk_to_curve25519</a> — Convert an Ed25519 secret key to a Curve25519 secret key</li><li><a href="function.sodium-crypto-sign-keypair.php">sodium_crypto_sign_keypair</a> — Randomly generate a secret key and a corresponding public key</li><li><a href="function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.php">sodium_crypto_sign_keypair_from_secretkey_and_publickey</a> — Join a secret key and public key together</li><li><a href="function.sodium-crypto-sign-open.php">sodium_crypto_sign_open</a> — Check that the signed message has a valid signature</li><li><a href="function.sodium-crypto-sign-publickey.php">sodium_crypto_sign_publickey</a> — Extract the Ed25519 public key from a keypair</li><li><a href="function.sodium-crypto-sign-publickey-from-secretkey.php">sodium_crypto_sign_publickey_from_secretkey</a> — Extract the Ed25519 public key from the secret key</li><li><a href="function.sodium-crypto-sign-secretkey.php">sodium_crypto_sign_secretkey</a> — Extract the Ed25519 secret key from a keypair</li><li><a href="function.sodium-crypto-sign-seed-keypair.php">sodium_crypto_sign_seed_keypair</a> — Deterministically derive the key pair from a single key</li><li><a href="function.sodium-crypto-sign-verify-detached.php">sodium_crypto_sign_verify_detached</a> — Verify signature for the message</li><li><a href="function.sodium-crypto-stream.php">sodium_crypto_stream</a> — Generate a deterministic sequence of bytes from a seed</li><li><a href="function.sodium-crypto-stream-keygen.php">sodium_crypto_stream_keygen</a> — Generate a random sodium_crypto_stream key.</li><li><a href="function.sodium-crypto-stream-xchacha20.php">sodium_crypto_stream_xchacha20</a> — Expands the key and nonce into a keystream of pseudorandom bytes</li><li><a href="function.sodium-crypto-stream-xchacha20-keygen.php">sodium_crypto_stream_xchacha20_keygen</a> — Returns a secure random key</li><li><a href="function.sodium-crypto-stream-xchacha20-xor.php">sodium_crypto_stream_xchacha20_xor</a> — Encrypts a message using a nonce and a secret key (no authentication)</li><li><a href="function.sodium-crypto-stream-xchacha20-xor-ic.php">sodium_crypto_stream_xchacha20_xor_ic</a> — Encrypts a message using a nonce and a secret key (no authentication)</li><li><a href="function.sodium-crypto-stream-xor.php">sodium_crypto_stream_xor</a> — Encrypt a message without authentication</li><li><a href="function.sodium-hex2bin.php">sodium_hex2bin</a> — Decodes a hexadecimally encoded binary string</li><li><a href="function.sodium-increment.php">sodium_increment</a> — Increment large number</li><li><a href="function.sodium-memcmp.php">sodium_memcmp</a> — Test for equality in constant-time</li><li><a href="function.sodium-memzero.php">sodium_memzero</a> — Overwrite a string with NUL characters</li><li><a href="function.sodium-pad.php">sodium_pad</a> — Add padding data</li><li><a href="function.sodium-unpad.php">sodium_unpad</a> — Remove padding data</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sodium/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.sodium%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.sodium&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.sodium.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sodium.php">Sodium</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sodium.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sodium.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sodium.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="current">
                            <a href="ref.sodium.php" title="Sodium Functions">Sodium Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sodiumexception.php" title="SodiumException">SodiumException</a>
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
