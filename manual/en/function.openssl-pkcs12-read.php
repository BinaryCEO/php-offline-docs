<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_pkcs12_read - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-pkcs12-read.php">
 <link rel="shorturl" href="https://www.php.net/openssl-pkcs12-read">
 <link rel="alternate" href="https://www.php.net/openssl-pkcs12-read" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-pkcs12-export-to-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-pkcs7-decrypt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-pkcs12-read.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-pkcs12-read.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-pkcs12-read.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-pkcs12-read.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-pkcs12-read.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-pkcs12-read.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-pkcs12-read.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-pkcs12-read.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-pkcs12-read.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-pkcs12-read.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-pkcs12-read.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse a PKCS#12 Certificate Store into an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_pkcs12_read - Manual" />
<meta name="twitter:description" content="Parse a PKCS#12 Certificate Store into an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_pkcs12_read - Manual" />
<meta itemprop="description" content="Parse a PKCS#12 Certificate Store into an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse a PKCS#12 Certificate Store into an array" />

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
        <a href="function.openssl-pkcs7-decrypt.php">
          openssl_pkcs7_decrypt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-pkcs12-export-to-file.php">
          &laquo; openssl_pkcs12_export_to_file        </a>
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
            <option value='en/function.openssl-pkcs12-read.php' selected="selected">English</option>
            <option value='de/function.openssl-pkcs12-read.php'>German</option>
            <option value='es/function.openssl-pkcs12-read.php'>Spanish</option>
            <option value='fr/function.openssl-pkcs12-read.php'>French</option>
            <option value='it/function.openssl-pkcs12-read.php'>Italian</option>
            <option value='ja/function.openssl-pkcs12-read.php'>Japanese</option>
            <option value='pt_BR/function.openssl-pkcs12-read.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-pkcs12-read.php'>Russian</option>
            <option value='tr/function.openssl-pkcs12-read.php'>Turkish</option>
            <option value='uk/function.openssl-pkcs12-read.php'>Ukrainian</option>
            <option value='zh/function.openssl-pkcs12-read.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-pkcs12-read" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_pkcs12_read</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.2, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_pkcs12_read</span> &mdash; <span class="dc-title">Parse a <abbr title="Public Key Cryptography Standards">PKCS</abbr>#12 Certificate Store into an array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-pkcs12-read-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_pkcs12_read</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pkcs12</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$certificates</code></span>, <span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$passphrase</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_pkcs12_read()</strong></span> parses the <abbr title="Public Key Cryptography Standards">PKCS</abbr>#12 certificate store supplied by
   <code class="parameter">pkcs12</code> into a array named
   <code class="parameter">certificates</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-pkcs12-read-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pkcs12</code></dt>
     <dd>
      <p class="para">
       The certificate store contents, not its file name.
      </p>
     </dd>
    
    
     <dt><code class="parameter">certificates</code></dt>
     <dd>
      <p class="para">
       On success, this will hold the Certificate Store Data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">passphrase</code></dt>
     <dd>
      <p class="para">
      Encryption password for unlocking the <abbr title="Public Key Cryptography Standards">PKCS</abbr>#12 file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-pkcs12-read-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.openssl-pkcs12-read-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1031">
   <p><strong>Example #1 <span class="function"><strong>openssl_pkcs12_read()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">$cert_store </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"/certs/file.p12"</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Error: Unable to read the cert file\n"</span><span style="color: #007700">;<br />    exit;<br />}<br /><br />if (</span><span style="color: #0000BB">openssl_pkcs12_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$cert_store</span><span style="color: #007700">, </span><span style="color: #0000BB">$cert_info</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_secret_pass"</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Certificate Information\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$cert_info</span><span style="color: #007700">);<br />} else {<br />    echo </span><span style="color: #DD0000">"Error: Unable to read the cert store.\n"</span><span style="color: #007700">;<br />    exit;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-pkcs12-read.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-pkcs12-read%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-pkcs12-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-pkcs12-read.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128941">  <div class="votes">
    <div id="Vu128941">
    <a href="/manual/vote-note.php?id=128941&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128941">
    <a href="/manual/vote-note.php?id=128941&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128941" title="72% like this...">
    13
    </div>
  </div>
  <a href="#128941" class="name">
  <strong class="user"><em>fran at fran dot cr</em></strong></a><a class="genanchor" href="#128941"> &para;</a><div class="date" title="2023-10-11 12:10"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128941">
<div class="phpcode"><code><span class="html">Since OpenSSL 3, this function will fail with .p12 files that use legacy ciphers. Unfortunately, .p12 files generated today from a lot of Windows based CAs are using them by default.<br /><br />OpenSSL 3 uses a provider mechanism where there is a legacy provider that supports these legacy ciphers, but it is disabled by default.<br /><br />While PHP SSL module lacks a mechanism to enable the legacy provider, you need to modify the openssl.conf used by PHP by hand, it is usually the same used by the system openssl command, so the OPENSSLDIR path value returned by the "openssl version -d" command contains the openssl.conf file to modify. The llines that need to be added, modified or uncommented are the following to look like this:<br /><br />openssl_conf = openssl_init<br /><br />[openss_init]<br />providers = provider_sect<br /><br />[provider_sect]<br />default = default_sect<br />legacy = legacy_sect<br /><br />[default_sect]<br />activate = 1<br /><br />[legacy_sect]<br />activate = 1<br /><br />This may require restarting the involved php service (php-fpm usually) to load the OpenSSL configuration changes.</span></code></div>
  </div>
 </div>
  <div class="note" id="128992">  <div class="votes">
    <div id="Vu128992">
    <a href="/manual/vote-note.php?id=128992&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128992">
    <a href="/manual/vote-note.php?id=128992&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128992" title="76% like this...">
    11
    </div>
  </div>
  <a href="#128992" class="name">
  <strong class="user"><em>rrequalwt</em></strong></a><a class="genanchor" href="#128992"> &para;</a><div class="date" title="2023-11-01 08:47"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128992">
<div class="phpcode"><code><span class="html">Instead of enabling legacy providers for your private key container to work with openssl3 one can simply repack the container using recent openssl<br /><br />openssl pkcs12 -legacy -in key.p12 -nodes -out key_decrypted.tmp<br /><br />openssl pkcs12 -in key_decrypted.tmp -export -out key_new.p12</span></code></div>
  </div>
 </div>
  <div class="note" id="129002">  <div class="votes">
    <div id="Vu129002">
    <a href="/manual/vote-note.php?id=129002&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129002">
    <a href="/manual/vote-note.php?id=129002&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129002" title="100% like this...">
    3
    </div>
  </div>
  <a href="#129002" class="name">
  <strong class="user"><em>at jornane.no</em></strong></a><a class="genanchor" href="#129002"> &para;</a><div class="date" title="2023-11-06 09:45"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129002">
<div class="phpcode"><code><span class="html">In response to Rovinson (<a href="https://www.php.net/manual/en/function.openssl-pkcs12-read.php#128854" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.openssl-pkcs12-read.php#128854</a>):<br /><br />&gt; In PHP versions 8.2.6 and 8.2.7, OpenSSL 1.1.1 is still utilized.<br />&gt; However, starting from PHP version 8.2.8 onwards, OpenSSL 3.0.9 is employed.<br /><br />This is not correct; Debian 12 currently uses PHP 8.2.7, yet it does use OpenSSL 3.0.11. So for a version check, I would rather target PHP 8.2+.</span></code></div>
  </div>
 </div>
  <div class="note" id="128819">  <div class="votes">
    <div id="Vu128819">
    <a href="/manual/vote-note.php?id=128819&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128819">
    <a href="/manual/vote-note.php?id=128819&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128819" title="57% like this...">
    1
    </div>
  </div>
  <a href="#128819" class="name">
  <strong class="user"><em>Also Anonymous</em></strong></a><a class="genanchor" href="#128819"> &para;</a><div class="date" title="2023-08-22 01:52"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128819">
<div class="phpcode"><code><span class="html">In response to Anonymous' note:(<a href="https://www.php.net/manual/en/function.openssl-pkcs12-read.php#128790" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.openssl-pkcs12-read.php#128790</a>)<br /><br />I'm using 8.2.6 on Windows and this function is working without issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="128854">  <div class="votes">
    <div id="Vu128854">
    <a href="/manual/vote-note.php?id=128854&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128854">
    <a href="/manual/vote-note.php?id=128854&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128854" title="54% like this...">
    1
    </div>
  </div>
  <a href="#128854" class="name">
  <strong class="user"><em>Rovinson</em></strong></a><a class="genanchor" href="#128854"> &para;</a><div class="date" title="2023-09-04 02:21"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128854">
<div class="phpcode"><code><span class="html">In response to Anonymous' note:(<a href="https://www.php.net/manual/es/function.openssl-pkcs12-read.php#128819" rel="nofollow" target="_blank">https://www.php.net/manual/es/function.openssl-pkcs12-read.php#128819</a>)<br /><br />In PHP versions 8.2.6 and 8.2.7, OpenSSL 1.1.1 is still utilized. However, starting from PHP version 8.2.8 onwards, OpenSSL 3.0.9 is employed.<br /><br />I have conducted tests, and the function works correctly with all PHP versions using OpenSSL 1, but it fails with OpenSSL 3 versions.</span></code></div>
  </div>
 </div>
  <div class="note" id="128921">  <div class="votes">
    <div id="Vu128921">
    <a href="/manual/vote-note.php?id=128921&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128921">
    <a href="/manual/vote-note.php?id=128921&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128921" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128921" class="name">
  <strong class="user"><em>InvisibleSmiley</em></strong></a><a class="genanchor" href="#128921"> &para;</a><div class="date" title="2023-09-28 09:14"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128921">
<div class="phpcode"><code><span class="html">It really seems to depend on the OpenSSL version only. I checked:<br /><br />OpenSSL 1:<br />- Linux Sury PHP 8.1 and 8.2<br />- Windows (according to what Anonymous reported here)<br /><br />OpenSSL 3:<br />- Linux Ubuntu jammy (22.04 LTS) PHP 8.1<br />- Mac OS Homebrew PHP 8.1 and 8.2</span></code></div>
  </div>
 </div>
  <div class="note" id="130002">  <div class="votes">
    <div id="Vu130002">
    <a href="/manual/vote-note.php?id=130002&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130002">
    <a href="/manual/vote-note.php?id=130002&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130002" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130002" class="name">
  <strong class="user"><em>quinn at strangecode dot com</em></strong></a><a class="genanchor" href="#130002"> &para;</a><div class="date" title="2025-01-30 06:02"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom130002">
<div class="phpcode"><code><span class="html">There may be no need to configure OpenSSL to use legacy algorithms. If possible, it's easier and more portable just to convert the encrypted certificates file. The steps below use a `.p12` file but it should work to swap these commands for a `.pfx` file.<br /><br />1. Dump the certs from the old `.p12` (it will ask for the certificate password):<br /><br />openssl pkcs12 -in old.p12 -out temp.pem -nodes -legacy<br /><br />2. Make a new `.p12` encrypted with algorithms used in OpenSSL v3 (create a new certificate password):<br /><br />openssl pkcs12 -export -in temp.pem -out new.p12 -certpbe AES-256-CBC -keypbe AES-256-CBC -iter 2048<br /><br />3. Rename the `new.p12` so it's accessible by your app.</span></code></div>
  </div>
 </div>
  <div class="note" id="128790">  <div class="votes">
    <div id="Vu128790">
    <a href="/manual/vote-note.php?id=128790&amp;page=function.openssl-pkcs12-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128790">
    <a href="/manual/vote-note.php?id=128790&amp;page=function.openssl-pkcs12-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128790" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128790" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#128790"> &para;</a><div class="date" title="2023-08-11 11:02"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128790">
<div class="phpcode"><code><span class="html">The openssl_pkcs12_read method does not work in PHP 8.2 due to the change in the OpenSSL library from version ^1 to ^3.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-pkcs12-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-pkcs12-read.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
