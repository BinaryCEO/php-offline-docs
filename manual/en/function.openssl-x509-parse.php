<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_x509_parse - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-x509-parse.php">
 <link rel="shorturl" href="https://www.php.net/openssl-x509-parse">
 <link rel="alternate" href="https://www.php.net/openssl-x509-parse" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-x509-free.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-x509-read.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-x509-parse.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-x509-parse.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-x509-parse.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-x509-parse.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-x509-parse.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-x509-parse.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-x509-parse.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-x509-parse.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-x509-parse.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-x509-parse.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-x509-parse.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Parse an X509 certificate and return the information as an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_x509_parse - Manual" />
<meta name="twitter:description" content="Parse an X509 certificate and return the information as an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_x509_parse - Manual" />
<meta itemprop="description" content="Parse an X509 certificate and return the information as an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Parse an X509 certificate and return the information as an array" />

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
        <a href="function.openssl-x509-read.php">
          openssl_x509_read &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-x509-free.php">
          &laquo; openssl_x509_free        </a>
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
            <option value='en/function.openssl-x509-parse.php' selected="selected">English</option>
            <option value='de/function.openssl-x509-parse.php'>German</option>
            <option value='es/function.openssl-x509-parse.php'>Spanish</option>
            <option value='fr/function.openssl-x509-parse.php'>French</option>
            <option value='it/function.openssl-x509-parse.php'>Italian</option>
            <option value='ja/function.openssl-x509-parse.php'>Japanese</option>
            <option value='pt_BR/function.openssl-x509-parse.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-x509-parse.php'>Russian</option>
            <option value='tr/function.openssl-x509-parse.php'>Turkish</option>
            <option value='uk/function.openssl-x509-parse.php'>Ukrainian</option>
            <option value='zh/function.openssl-x509-parse.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-x509-parse" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_x509_parse</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_x509_parse</span> &mdash; <span class="dc-title">Parse an X509 certificate and return the information as an array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-x509-parse-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_x509_parse</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="class.opensslcertificate.php" class="type OpenSSLCertificate">OpenSSLCertificate</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$certificate</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$short_names</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_x509_parse()</strong></span> returns information about the
   supplied <code class="parameter">certificate</code>, including fields such as subject
   name, issuer name, purposes, valid from and valid to dates etc.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-x509-parse-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">certificate</code></dt>
     <dd>
      <p class="para">
        X509 certificate. See <a href="openssl.certparams.php" class="link">Key/Certificate parameters</a> for a list of valid values.
      </p>
     </dd>
    
    
     <dt><code class="parameter">short_names</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">short_names</code> controls how the data is indexed in the
       array - if <code class="parameter">short_names</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> (the default) then
       fields will be indexed with the short name form, otherwise, the long name
       form will be used - e.g.: CN is the shortname form of commonName.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-x509-parse-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <em>The structure of the returned data is (deliberately) not
   yet documented, as it is still subject to change.</em>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-x509-parse-changelog">
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
      <td>8.4.0</td>
      <td>
       Parsing certificate with no seconds in UTCTime is no longer allowed for any OpenSSL version.
       It was already disallowed for OpenSSL version 3.3+.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">certificate</code> accepts an <span class="classname"><a href="class.opensslcertificate.php" class="classname">OpenSSLCertificate</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL X.509</code> was accepted.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-x509-parse.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-x509-parse%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-x509-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-x509-parse.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="68805">  <div class="votes">
    <div id="Vu68805">
    <a href="/manual/vote-note.php?id=68805&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68805">
    <a href="/manual/vote-note.php?id=68805&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68805" title="75% like this...">
    10
    </div>
  </div>
  <a href="#68805" class="name">
  <strong class="user"><em>nathanael at dihedral dot de</em></strong></a><a class="genanchor" href="#68805"> &para;</a><div class="date" title="2006-08-11 06:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68805">
<div class="phpcode"><code><span class="html">When dealing with the purposes of a x509 crt file<br />the output of openssl_x509_parse gives an array with following for the purposes:<br />each new array ([purposes][1], [purposes][2] for example) is a new purpose check<br />I compared this output with the output of the command<br /># openssl x509 -purpose -in &lt;x509crt_file&gt;<br />the result i got was that<br />[purposes][x][2] quite obviously is the name of the purpose checked <br />[purposes][x][1] corresponds to the tested purpose (as named in [purposes][x][2]) acting as CA<br />[purposes][x][0] corresponds to the general availability of the purpose<br /><br />[purposes] =&gt; Array<br />    (<br />        [1] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; sslclient<br />            )<br /><br />        [2] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; sslserver<br />            )<br /><br />        [3] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; nssslserver<br />            )<br /><br />        [4] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; smimesign<br />            )<br /><br />        [5] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; smimeencrypt<br />            )<br /><br />        [6] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; crlsign<br />            )<br /><br />        [7] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; any<br />            )<br /><br />        [8] =&gt; Array<br />            (<br />                [0] =&gt; 1<br />                [1] =&gt; 1<br />                [2] =&gt; ocsphelper<br />            )<br /><br />    )</span></code></div>
  </div>
 </div>
  <div class="note" id="49890">  <div class="votes">
    <div id="Vu49890">
    <a href="/manual/vote-note.php?id=49890&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49890">
    <a href="/manual/vote-note.php?id=49890&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49890" title="75% like this...">
    4
    </div>
  </div>
  <a href="#49890" class="name">
  <strong class="user"><em>maarten at xolphin dot nl</em></strong></a><a class="genanchor" href="#49890"> &para;</a><div class="date" title="2005-02-11 02:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49890">
<div class="phpcode"><code><span class="html">At this time very useful X509 oids (like streetAddress, postalCode and others) are missing. You can find a list of them at <a href="http://www.alvestrand.no/objectid/2.5.4.html," rel="nofollow" target="_blank">http://www.alvestrand.no/objectid/2.5.4.html,</a> I hope they get included to openssl-x509-parse soon.<br /><br />Until then you can get these oids anyway like this:<br /><br />&lt;?<br />  function getOID($OID, $ssl)<br />  {<br />    preg_match('/\/' . $OID  . '=([^\/]+)/', $ssl, $matches);<br />    return $matches[1];<br />  }<br /><br />  $cert = file_get_contents('test.crt');<br />  $ssl = openssl_x509_parse($cert);<br />  $Address = getOID('2.5.4.9', $ssl['name']);<br />  $ZipCode = getOID('2.5.4.17', $ssl['name']);<br />  $Postbox = getOID('2.5.4.18', $ssl['name']);<br />?&gt;<br /><br />The parseCert function from the Horde framework can be usefull for this too.</span></code></div>
  </div>
 </div>
  <div class="note" id="119438">  <div class="votes">
    <div id="Vu119438">
    <a href="/manual/vote-note.php?id=119438&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119438">
    <a href="/manual/vote-note.php?id=119438&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119438" title="57% like this...">
    1
    </div>
  </div>
  <a href="#119438" class="name">
  <strong class="user"><em>Stilez</em></strong></a><a class="genanchor" href="#119438"> &para;</a><div class="date" title="2016-06-06 04:12"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119438">
<div class="phpcode"><code><span class="html">The valid from/to info is returned twice, in two different formats. They can be converted to normal datetime objects like this:<br /><br />$x509_data = openssl_x509_parse($cert);<br />date_create_from_format('ymdHise', $x509_data['validFrom'])-&gt;format('c');<br />date_create( '@' .  $x509_data['validFrom_time_t'])-&gt;format('c');<br />/* these give the same result */<br /><br />To get a human-readable format directly (or any other formatted string) instead of a datetime object, use this:<br /><br />date_create_from_format('ymdHise', $x509_data['validFrom'])-&gt;format('c');<br />or<br />date_create( '@' .  $x509_data['validFrom_time_t'])-&gt;format('c');<br /><br />The same applies to validTo and validTo_time_t</span></code></div>
  </div>
 </div>
  <div class="note" id="46992">  <div class="votes">
    <div id="Vu46992">
    <a href="/manual/vote-note.php?id=46992&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46992">
    <a href="/manual/vote-note.php?id=46992&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46992" title="55% like this...">
    2
    </div>
  </div>
  <a href="#46992" class="name">
  <strong class="user"><em>smgallo at buffalo dot edu</em></strong></a><a class="genanchor" href="#46992"> &para;</a><div class="date" title="2004-10-29 11:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46992">
<div class="phpcode"><code><span class="html">The identifier for the email portion of certificates in the name and subject array have changed since PHP4.  In PHP 4.3.0 the following array was returned (displayed my print_r())<br /><br />[name] =&gt; /O=Grid/O=Globus/O=CCR Grid Portal/OU=Portal User/CN=Test User/Email=test@nospam.buffalo.edu<br />[subject] =&gt; Array<br />(<br />   [O] =&gt; Grid/O=Globus/O=CCR Grid Portal<br />   [OU] =&gt; Portal User<br />   [CN] =&gt; Test User<br />   [Email] =&gt; test@nospam.buffalo.edu<br />...<br /><br />The result in PHP5 is (note Email -&gt; emailAddress):<br /><br />[name] =&gt; /O=Grid/O=Globus/O=CCR Grid Portal/OU=Portal User/CN=Test User/emailAddress=test@nospam.buffalo.edu<br />[subject] =&gt; Array<br />(<br />   [O] =&gt; Grid/O=Globus/O=CCR Grid Portal<br />   [OU] =&gt; Portal User<br />   [CN] =&gt; Test User<br />   [emailAddress] =&gt; test@nospam.buffalo.edu<br />...<br /><br />Of course, the manual DOES say this could happen.  :)</span></code></div>
  </div>
 </div>
  <div class="note" id="81871">  <div class="votes">
    <div id="Vu81871">
    <a href="/manual/vote-note.php?id=81871&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81871">
    <a href="/manual/vote-note.php?id=81871&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81871" title="100% like this...">
    2
    </div>
  </div>
  <a href="#81871" class="name">
  <strong class="user"><em>koukopoulos at gmail dot com</em></strong></a><a class="genanchor" href="#81871"> &para;</a><div class="date" title="2008-03-17 05:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81871">
<div class="phpcode"><code><span class="html">Re: the previous note: support for the x509v3 extensions was added in PHP 5.2. Also in PHP5 prior to 5.2.4 the values of the x509v3 extensions were not decoded and were returned in the DER binary representation. Therefore in order to read the contents of the v3 extensions you have to parse the relevant ASN.1 structures yourself.<br /><br />For example if one needs to read an IA5STRING value in a private extension with the OID 1.3.6.1.4.1.7782.3.3 one can do :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* parse a DER encoded representation <br />   of a IA5STRING of length &lt; 127 */<br /></span><span class="keyword">function </span><span class="default">asn1der_ia5string</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />{<br />    </span><span class="default">$len</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)-</span><span class="default">2</span><span class="keyword">;<br />    if (</span><span class="default">$len </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$len </span><span class="keyword">&gt; </span><span class="default">127</span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/* check tag and len */<br />    </span><span class="keyword">if (</span><span class="default">22 </span><span class="keyword">!= (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">++]) &amp; </span><span class="default">0x1f</span><span class="keyword">) &amp;&amp; <br />    </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$pos</span><span class="keyword">++]) != </span><span class="default">$len</span><span class="keyword">) {<br />    </span><span class="comment">/* not a valid DER encoding of an IA5STRING */<br />    </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">,  </span><span class="default">$len</span><span class="keyword">);<br />}<br /></span><span class="default">$cert </span><span class="keyword">= </span><span class="default">openssl_x509_parse</span><span class="keyword">(</span><span class="default">$pemcert</span><span class="keyword">);<br />print (</span><span class="default">asn1der_ia5string</span><span class="keyword">(</span><span class="default">$cert</span><span class="keyword">[</span><span class="string">'extensions'</span><span class="keyword">][</span><span class="string">'1.3.6.1.4.1.7782.3.3'</span><span class="keyword">])); </span><span class="comment">// prints decoded ascii string<br /><br /></span><span class="default">?&gt;<br /></span><br />In newer versions (&gt;5.2.3) the extensions are returned in a 'readable format'. For example:<br /><br /><span class="default">&lt;?php print_r</span><span class="keyword">(</span><span class="default">openssl_x509_parse</span><span class="keyword">(...)); </span><span class="default">?&gt;<br /></span>will result in<br />&lt;?<br />Array<br />(<br />    [name] =&gt; /C=GR/O=SOMETHING/CN=ME/<br />    ...<br />    [extensions] =&gt; Array<br />        (<br />            [basicConstraints] =&gt; CA:FALSE<br />            [keyUsage] =&gt; Digital Signature, Non Repudiation, Key Encipherment<br />            [extendedKeyUsage] =&gt; E-mail Protection, TLS Web Client Authentication<br />            [nsCertType] =&gt; SSL Client, S/MIME<br />            ....<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="95339">  <div class="votes">
    <div id="Vu95339">
    <a href="/manual/vote-note.php?id=95339&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95339">
    <a href="/manual/vote-note.php?id=95339&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95339" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95339" class="name">
  <strong class="user"><em>s dot stok at rollerscapes dot net</em></strong></a><a class="genanchor" href="#95339"> &para;</a><div class="date" title="2009-12-28 05:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95339">
<div class="phpcode"><code><span class="html">Alternative subjects can read as extensions.<br /><br />[extensions]<br />            [subjectAltName] =&gt; DNS:*.cacert.org, DNS:cacert.org, DNS:*.cacert.net, DNS:cacert.net, DNS:*.cacert.com, DNS:cacert.com</span></code></div>
  </div>
 </div>
  <div class="note" id="81079">  <div class="votes">
    <div id="Vu81079">
    <a href="/manual/vote-note.php?id=81079&amp;page=function.openssl-x509-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81079">
    <a href="/manual/vote-note.php?id=81079&amp;page=function.openssl-x509-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81079" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#81079" class="name">
  <strong class="user"><em>zioproto at gmail dot com</em></strong></a><a class="genanchor" href="#81079"> &para;</a><div class="date" title="2008-02-13 06:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81079">
<div class="phpcode"><code><span class="html">To read an extension from a X.509 certificate, you can proceed like this if you know the OID<br /><br />//Read the certificate from file<br />$cert = file_get_contents('test.crt');<br />$ssl = openssl_x509_parse($cert);<br /><br />$ext_value =  $ssl['extensions']['1.2.3.4.5.6'];<br />echo $ext_value<br /><br />--------------------------------<br /><br />Because the $ssl array is not documented, you can easily see its contents like this:<br /><br />  //To print out all the array!<br />  print_r(array_values($ssl)); <br />  print_r(array_keys($ssl));</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-x509-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-x509-parse.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
