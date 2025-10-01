<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_csr_new - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-csr-new.php">
 <link rel="shorturl" href="https://www.php.net/openssl-csr-new">
 <link rel="alternate" href="https://www.php.net/openssl-csr-new" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-csr-get-subject.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-csr-sign.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-csr-new.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-csr-new.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-csr-new.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-csr-new.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-csr-new.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-csr-new.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-csr-new.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-csr-new.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-csr-new.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-csr-new.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-csr-new.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates a CSR" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_csr_new - Manual" />
<meta name="twitter:description" content="Generates a CSR" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_csr_new - Manual" />
<meta itemprop="description" content="Generates a CSR" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates a CSR" />

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
        <a href="function.openssl-csr-sign.php">
          openssl_csr_sign &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-csr-get-subject.php">
          &laquo; openssl_csr_get_subject        </a>
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
            <option value='en/function.openssl-csr-new.php' selected="selected">English</option>
            <option value='de/function.openssl-csr-new.php'>German</option>
            <option value='es/function.openssl-csr-new.php'>Spanish</option>
            <option value='fr/function.openssl-csr-new.php'>French</option>
            <option value='it/function.openssl-csr-new.php'>Italian</option>
            <option value='ja/function.openssl-csr-new.php'>Japanese</option>
            <option value='pt_BR/function.openssl-csr-new.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-csr-new.php'>Russian</option>
            <option value='tr/function.openssl-csr-new.php'>Turkish</option>
            <option value='uk/function.openssl-csr-new.php'>Ukrainian</option>
            <option value='zh/function.openssl-csr-new.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-csr-new" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_csr_new</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_csr_new</span> &mdash; <span class="dc-title">Generates a <abbr title="Certificate Signing Request">CSR</abbr></span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-csr-new-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_csr_new</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$distinguished_names</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.opensslasymmetrickey.php" class="type OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a></span></span> <code class="parameter reference">&$private_key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$extra_attributes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="class.opensslcertificatesigningrequest.php" class="type OpenSSLCertificateSigningRequest">OpenSSLCertificateSigningRequest</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_csr_new()</strong></span> generates a new <abbr title="Certificate Signing Request">CSR</abbr>
   based on the information provided by <code class="parameter">distinguished_names</code>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
 <span class="simpara">
  You need to have a valid <var class="filename">openssl.cnf</var> installed for
  this function to operate correctly.
  See the notes under <a href="openssl.installation.php" class="link">the installation
  section</a> for more information.
 </span>
</p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.openssl-csr-new-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">distinguished_names</code></dt>
     <dd>
      <p class="para">
       The Distinguished Name or subject fields to be included in the
       certificate. The <code class="parameter">distinguished_names</code> is an
       associative array where the keys represent the attribute names of
       Distinguished Names and the values can either be strings (for single
       value) or arrays (if multiple values need to be set).
      </p>
     </dd>
    
    
     <dt><code class="parameter">private_key</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">private_key</code> should be set to a private key that
       was previously generated by <span class="function"><a href="function.openssl-pkey-new.php" class="function">openssl_pkey_new()</a></span> (or
       otherwise obtained from the other openssl_pkey family of functions), or
       <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> variable. If its value is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> variable, a new private key is
       generated based on the supplied <code class="parameter">options</code> and
       assigned to supplied variable. The corresponding public portion of the
       key will be used to sign the <abbr title="Certificate Signing Request">CSR</abbr>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       By default, the information in your system <code class="literal">openssl.conf</code>
       is used to initialize the request; you can specify a configuration file
       section by setting the <code class="literal">config_section_section</code> key in
       <code class="parameter">options</code>.  You can also specify an alternative
       OpenSSL configuration file by setting the value of the
       <code class="literal">config</code> key to the path of the file you want to use.
       The following keys, if present in <code class="parameter">options</code>
       behave as their equivalents in the <code class="literal">openssl.conf</code>, as
       listed in the table below.
       <table class="doctable table">
        <caption><strong>Configuration overrides</strong></caption>
        
         <thead>
          <tr>
           <th><code class="parameter">options</code> key</th>
           <th>type</th>
           <th><code class="literal">openssl.conf</code> equivalent</th>
           <th>description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>digest_alg</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>default_md</td>
           <td>Digest method or signature hash, usually one of <span class="function"><a href="function.openssl-get-md-methods.php" class="function">openssl_get_md_methods()</a></span></td>
          </tr>

          <tr>
           <td>x509_extensions</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>x509_extensions</td>
           <td>Selects which extensions should be used when creating an x509
           certificate</td>
          </tr>

          <tr>
           <td>req_extensions</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>req_extensions</td>
           <td>Selects which extensions should be used when creating a <abbr title="Certificate Signing Request">CSR</abbr></td>
          </tr>

          <tr>
           <td>private_key_bits</td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>default_bits</td>
           <td>Specifies how many bits should be used to generate a private key</td>
          </tr>

          <tr>
           <td>private_key_type</td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>none</td>
           <td>Specifies the type of private key to create.  This can be one
            of <strong><code><a href="openssl.key-types.php#constant.openssl-keytype-dsa">OPENSSL_KEYTYPE_DSA</a></code></strong>,
            <strong><code><a href="openssl.key-types.php#constant.openssl-keytype-dh">OPENSSL_KEYTYPE_DH</a></code></strong>,
            <strong><code><a href="openssl.key-types.php#constant.openssl-keytype-rsa">OPENSSL_KEYTYPE_RSA</a></code></strong> or
            <strong><code><a href="openssl.key-types.php#constant.openssl-keytype-ec">OPENSSL_KEYTYPE_EC</a></code></strong>.
            The default value is <strong><code><a href="openssl.key-types.php#constant.openssl-keytype-rsa">OPENSSL_KEYTYPE_RSA</a></code></strong>.
           </td>
          </tr>

          <tr>
           <td>encrypt_key</td>
           <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
           <td>encrypt_key</td>
           <td>Should an exported key (with passphrase) be encrypted?</td>
          </tr>

          <tr>
           <td>encrypt_key_cipher</td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>none</td>
           <td>
            One of <a href="openssl.ciphers.php" class="link">cipher constants</a>.
           </td>
          </tr>

          <tr>
           <td>curve_name</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>none</td>
           <td>
            One of <span class="function"><a href="function.openssl-get-curve-names.php" class="function">openssl_get_curve_names()</a></span>.
           </td>
          </tr>

          <tr>
           <td>config</td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>N/A</td>
           <td>
            Path to your own alternative openssl.conf file.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">extra_attributes</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">extra_attributes</code> is used to specify additional
       attributes for the <abbr title="Certificate Signing Request">CSR</abbr>. It is an associative arrays
       where the keys are converted to OIDs and applied as
       <abbr title="Certificate Signing Request">CSR</abbr> attributes.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-csr-new-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the <abbr title="Certificate Signing Request">CSR</abbr> on success, <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if
   <abbr title="Certificate Signing Request">CSR</abbr> creation is successful but signing
   fails or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-csr-new-changelog">
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
       The <code class="parameter">distinguished_names</code> associative array now supports arrays as values,
       allowing multiple values to be specified for a single attribute.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       The <code class="parameter">extra_attributes</code> parameter now correctly sets the CSR attributes,
       rather than modifying the subject&#039;s Distinguished Name as it previously did incorrectly.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       On success, this function returns an <span class="classname"><a href="class.opensslcertificatesigningrequest.php" class="classname">OpenSSLCertificateSigningRequest</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL X.509 CSR</code> was returned.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">private_key</code> accepts an <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL key</code> was accepted.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       <code class="parameter">options</code> now also supports <code class="literal">curve_name</code>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.openssl-csr-new-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1017">
    <p><strong>Example #1 Creating a self-signed certificate</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// for SSL server certificates the commonName is the domain name to be secured<br />// for S/MIME email certificates the commonName is the owner of the email address<br />// location and identification fields refer to the owner of domain or email subject to be secured<br /></span><span style="color: #0000BB">$dn </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"countryName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"GB"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"stateOrProvinceName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Somerset"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"localityName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Glastonbury"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"organizationName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"The Brain Room Limited"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"organizationalUnitName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"PHP Documentation Team"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"commonName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"Wez Furlong"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"emailAddress" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"wez@example.com"<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Generate a new private (and public) key pair<br /></span><span style="color: #0000BB">$privkey </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">"private_key_bits" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2048</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"private_key_type" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">OPENSSL_KEYTYPE_RSA</span><span style="color: #007700">,<br />));<br /><br /></span><span style="color: #FF8000">// Generate a certificate signing request<br /></span><span style="color: #0000BB">$csr </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_csr_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$dn</span><span style="color: #007700">, </span><span style="color: #0000BB">$privkey</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'digest_alg' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Generate a self-signed cert, valid for 365 days<br /></span><span style="color: #0000BB">$x509 </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_csr_sign</span><span style="color: #007700">(</span><span style="color: #0000BB">$csr</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$privkey</span><span style="color: #007700">, </span><span style="color: #0000BB">$days</span><span style="color: #007700">=</span><span style="color: #0000BB">365</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'digest_alg' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Save your private key, CSR and self-signed cert for later use<br /></span><span style="color: #0000BB">openssl_csr_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$csr</span><span style="color: #007700">, </span><span style="color: #0000BB">$csrout</span><span style="color: #007700">) and </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$csrout</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">openssl_x509_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$x509</span><span style="color: #007700">, </span><span style="color: #0000BB">$certout</span><span style="color: #007700">) and </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$certout</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$privkey</span><span style="color: #007700">, </span><span style="color: #0000BB">$pkeyout</span><span style="color: #007700">, </span><span style="color: #DD0000">"mypassword"</span><span style="color: #007700">) and </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkeyout</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Show any errors that occurred here<br /></span><span style="color: #007700">while ((</span><span style="color: #0000BB">$e </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_error_string</span><span style="color: #007700">()) !== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$e </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   
   <div class="example" id="example-1018">
    <p><strong>Example #2 Creating a self-signed ECC certificate (as of PHP 7.1.0)</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$subject </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"commonName" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"docs.php.net"</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #FF8000">// Generate a new private (and public) key pair<br /></span><span style="color: #0000BB">$private_key </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">(array(<br />    </span><span style="color: #DD0000">"private_key_type" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">OPENSSL_KEYTYPE_EC</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"curve_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'prime256v1'</span><span style="color: #007700">,<br />));<br /><br /></span><span style="color: #FF8000">// Generate a certificate signing request<br /></span><span style="color: #0000BB">$csr </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_csr_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$subject</span><span style="color: #007700">, </span><span style="color: #0000BB">$private_key</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'digest_alg' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sha384'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// Generate self-signed EC cert<br /></span><span style="color: #0000BB">$x509 </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_csr_sign</span><span style="color: #007700">(</span><span style="color: #0000BB">$csr</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">$private_key</span><span style="color: #007700">, </span><span style="color: #0000BB">$days</span><span style="color: #007700">=</span><span style="color: #0000BB">365</span><span style="color: #007700">, array(</span><span style="color: #DD0000">'digest_alg' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'sha384'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">openssl_x509_export_to_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$x509</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecc-cert.pem'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">openssl_pkey_export_to_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$private_key</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecc-private.key'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   
   
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.openssl-csr-new-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.openssl-csr-sign.php" class="function" rel="rdfs-seeAlso">openssl_csr_sign()</a> - Sign a CSR with another certificate (or itself) and generate a certificate</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-csr-new.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-csr-new%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-csr-new&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-csr-new.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93618">  <div class="votes">
    <div id="Vu93618">
    <a href="/manual/vote-note.php?id=93618&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93618">
    <a href="/manual/vote-note.php?id=93618&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93618" title="73% like this...">
    12
    </div>
  </div>
  <a href="#93618" class="name">
  <strong class="user"><em>The_Lost_One</em></strong></a><a class="genanchor" href="#93618"> &para;</a><div class="date" title="2009-09-18 07:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93618">
<div class="phpcode"><code><span class="html">Not sure whether the "bug" (undocumented behavior) I encountered is common to other people, but this comment might save hours of painful debug:<br />If you can't generate a new private key using openssl_pkey_new() or openssl_csr_new(), your script hangs during the call of these functions and in case you specified a "private_key_bits" parameter, ensure that you cast the variable to an int. Took me ages to notice that.<br /><br /><span class="default">&lt;?php<br />$SSLcnf </span><span class="keyword">= array(</span><span class="string">'config' </span><span class="keyword">=&gt; </span><span class="string">'/usr/local/nessy2/share/ssl/openssl.cnf'</span><span class="keyword">,<br />        </span><span class="string">'encrypt_key' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'private_key_type' </span><span class="keyword">=&gt; </span><span class="default">OPENSSL_KEYTYPE_RSA</span><span class="keyword">,<br />        </span><span class="string">'digest_alg' </span><span class="keyword">=&gt; </span><span class="string">'sha1'</span><span class="keyword">,<br />        </span><span class="string">'x509_extensions' </span><span class="keyword">=&gt; </span><span class="string">'v3_ca'</span><span class="keyword">,<br />        </span><span class="string">'private_key_bits' </span><span class="keyword">=&gt; </span><span class="default">$someVariable </span><span class="comment">// ---&gt; bad<br />        </span><span class="string">'private_key_bits' </span><span class="keyword">=&gt; (int)</span><span class="default">$someVariable </span><span class="comment">// ---&gt; good<br />        </span><span class="string">'private_key_bits' </span><span class="keyword">=&gt; </span><span class="default">512 </span><span class="comment">// ---&gt; obviously good<br />        </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117474">  <div class="votes">
    <div id="Vu117474">
    <a href="/manual/vote-note.php?id=117474&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117474">
    <a href="/manual/vote-note.php?id=117474&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117474" title="80% like this...">
    6
    </div>
  </div>
  <a href="#117474" class="name">
  <strong class="user"><em>james at kirk dot com</em></strong></a><a class="genanchor" href="#117474"> &para;</a><div class="date" title="2015-06-15 06:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117474">
<div class="phpcode"><code><span class="html">When in doubt, read the source code to PHP!<br /><br />$configargs is fairly opaque as to what is going on behind the scenes.  That is, until you actually look at php_openssl_parse_config() in '/ext/openssl/openssl.c':<br /><br />    SET_OPTIONAL_STRING_ARG("digest_alg", req-&gt;digest_name,<br />        CONF_get_string(req-&gt;req_config, req-&gt;section_name, "default_md"));<br />    SET_OPTIONAL_STRING_ARG("x509_extensions", req-&gt;extensions_section,<br />        CONF_get_string(req-&gt;req_config, req-&gt;section_name, "x509_extensions"));<br />    SET_OPTIONAL_STRING_ARG("req_extensions", req-&gt;request_extensions_section,<br />        CONF_get_string(req-&gt;req_config, req-&gt;section_name, "req_extensions"));<br />    SET_OPTIONAL_LONG_ARG("private_key_bits", req-&gt;priv_key_bits,<br />        CONF_get_number(req-&gt;req_config, req-&gt;section_name, "default_bits"));<br /><br />    SET_OPTIONAL_LONG_ARG("private_key_type", req-&gt;priv_key_type, OPENSSL_KEYTYPE_DEFAULT);<br /><br />Here we can see that SET_OPTIONAL_STRING_ARG() is called for most inputs but for 'private_key_bits' SET_OPTIONAL_LONG_ARG() is called.  Both calls are C macros that expand to code that enforces the expected input type.  The generated code ignores the input without warning/notice if an unexpected type is used and just uses the default from the configuration file.  This is why using a string with 'private_key_bits' will result in unexpected behavior.<br /><br />Further inspection of the earlier initialization in the same function:<br /><br />    SET_OPTIONAL_STRING_ARG("config", req-&gt;config_filename, default_ssl_conf_filename);<br />    SET_OPTIONAL_STRING_ARG("config_section_name", req-&gt;section_name, "req");<br />    req-&gt;global_config = CONF_load(NULL, default_ssl_conf_filename, NULL);<br />    req-&gt;req_config = CONF_load(NULL, req-&gt;config_filename, NULL);<br /><br />    if (req-&gt;req_config == NULL) {<br />        return FAILURE;<br />    }<br /><br />And elsewhere in another function:<br /><br />    /* default to 'openssl.cnf' if no environment variable is set */<br />    if (config_filename == NULL) {<br />        snprintf(default_ssl_conf_filename, sizeof(default_ssl_conf_filename), "%s/%s",<br />                X509_get_default_cert_area(),<br />                "openssl.cnf");<br />    } else {<br />        strlcpy(default_ssl_conf_filename, config_filename, sizeof(default_ssl_conf_filename));<br />    }<br /><br />Reveals that 'config' in $configargs is an override for any default setting elsewhere.  This actually negates the comment in the documentation that says "Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information."  A more correct sentence would be "Note:  You need to either have a valid openssl.cnf set up or use $configargs to point at a valid openssl.cnf file for this function to operate correctly."<br /><br />All of that goes to show that looking at the PHP source code is the only real way to figure out what is actually happening.  Doing so saves time and effort.</span></code></div>
  </div>
 </div>
  <div class="note" id="116719">  <div class="votes">
    <div id="Vu116719">
    <a href="/manual/vote-note.php?id=116719&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116719">
    <a href="/manual/vote-note.php?id=116719&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116719" title="80% like this...">
    3
    </div>
  </div>
  <a href="#116719" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116719"> &para;</a><div class="date" title="2015-02-19 04:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116719">
<div class="phpcode"><code><span class="html">For those of you using Debian-based systems, the openssl configuration file is at: /etc/ssl/openssl.cnf</span></code></div>
  </div>
 </div>
  <div class="note" id="85493">  <div class="votes">
    <div id="Vu85493">
    <a href="/manual/vote-note.php?id=85493&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85493">
    <a href="/manual/vote-note.php?id=85493&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85493" title="66% like this...">
    2
    </div>
  </div>
  <a href="#85493" class="name">
  <strong class="user"><em>main ATT jokester DOTT fr</em></strong></a><a class="genanchor" href="#85493"> &para;</a><div class="date" title="2008-09-02 08:09"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85493">
<div class="phpcode"><code><span class="html">To set the "basicConstraints" to  "critical,CA:TRUE", you have to define configargs, but in the openssl_csr_sign() function !<br /><br />That's my example of code to sign a "child" certificate :<br /><br />$CAcrt = "file://ca.crt";<br />$CAkey = array("file://ca.key", "myPassWord");<br /><br />$clientKeys = openssl_pkey_new();<br />$dn = array(<br />    "countryName" =&gt; "FR",<br />    "stateOrProvinceName" =&gt; "Finistere",<br />    "localityName" =&gt; "Plouzane",<br />    "organizationName" =&gt; "Ecole Nationale d'Ingenieurs de Brest",<br />    "organizationalUnitName" =&gt; "Enib Students",<br />    "commonName" =&gt; "www.enib.fr",<br />    "emailAddress" =&gt; "ilovessl@php.net"<br />);<br />$csr = openssl_csr_new($dn, $clientPrivKey);<br /><br />$configArgs = array("x509_extensions" =&gt; "v3_req");<br />$cert = openssl_csr_sign($csr, $CAcrt, $CAkey, 100, $configArgs);<br /><br />openssl_x509_export_to_file($cert, "childCert.crt");<br /><br />Then if you want to add some more options, you can edit the "/etc/ssl/openssl.cnf" ssl config' file (debian path), and add these after the [ v3_req ] tag.</span></code></div>
  </div>
 </div>
  <div class="note" id="116357">  <div class="votes">
    <div id="Vu116357">
    <a href="/manual/vote-note.php?id=116357&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116357">
    <a href="/manual/vote-note.php?id=116357&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116357" title="56% like this...">
    2
    </div>
  </div>
  <a href="#116357" class="name">
  <strong class="user"><em>alex at nodex dot co dot uk</em></strong></a><a class="genanchor" href="#116357"> &para;</a><div class="date" title="2014-12-17 10:59"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116357">
<div class="phpcode"><code><span class="html">In the PHP example above it uses "UK" as the country name which is incorrect, the country name must be "GB"</span></code></div>
  </div>
 </div>
  <div class="note" id="112732">  <div class="votes">
    <div id="Vu112732">
    <a href="/manual/vote-note.php?id=112732&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112732">
    <a href="/manual/vote-note.php?id=112732&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112732" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112732" class="name">
  <strong class="user"><em>Richard Lynch</em></strong></a><a class="genanchor" href="#112732"> &para;</a><div class="date" title="2013-07-17 03:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112732">
<div class="phpcode"><code><span class="html">There appears to be no openssl_csr_free function.<br /><br />At least not here.<br /><br />If it's in the source, one might be able to just call it.<br /><br />If it's not in the source, it probably should be.</span></code></div>
  </div>
 </div>
  <div class="note" id="54149">  <div class="votes">
    <div id="Vu54149">
    <a href="/manual/vote-note.php?id=54149&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54149">
    <a href="/manual/vote-note.php?id=54149&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54149" title="no votes...">
    0
    </div>
  </div>
  <a href="#54149" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#54149"> &para;</a><div class="date" title="2005-06-24 12:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54149">
<div class="phpcode"><code><span class="html">If you get the error:<br /><br />error:0D11A086:asn1 encoding routines:ASN1_mbstring_copy:string too short<br /><br />then look at your key:value pairs in the $dn (distinguished name) array.<br /><br />If you have one value (like "organizationalUnitName" = "") set to an empty string, it will throw the above error.<br /><br />Fix the error by either eliminating that array element from $dn completely, or using a space " " instead of an empty string.</span></code></div>
  </div>
 </div>
  <div class="note" id="52805">  <div class="votes">
    <div id="Vu52805">
    <a href="/manual/vote-note.php?id=52805&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52805">
    <a href="/manual/vote-note.php?id=52805&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52805" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52805" class="name">
  <strong class="user"><em>robertliu AT wiscore DOT com</em></strong></a><a class="genanchor" href="#52805"> &para;</a><div class="date" title="2005-05-12 08:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52805">
<div class="phpcode"><code><span class="html">I am using PHP-4.3.11.<br />The type of configargs--private_key_bits is a INTEGER, not a string.<br />An example of configration:<br /><span class="default">&lt;?php<br />$config </span><span class="keyword">= array(<br />  </span><span class="string">"digest_alg" </span><span class="keyword">=&gt; </span><span class="string">"sha1"</span><span class="keyword">,<br />  </span><span class="string">"private_key_bits" </span><span class="keyword">=&gt; </span><span class="default">2048</span><span class="keyword">,<br />  </span><span class="string">"private_key_type" </span><span class="keyword">=&gt; </span><span class="default">OPENSSL_KEYTYPE_DSA</span><span class="keyword">,<br />  </span><span class="string">"encrypt_key" </span><span class="keyword">=&gt; </span><span class="default">false<br /></span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49820">  <div class="votes">
    <div id="Vu49820">
    <a href="/manual/vote-note.php?id=49820&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49820">
    <a href="/manual/vote-note.php?id=49820&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49820" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#49820" class="name">
  <strong class="user"><em>dankybastard at hotmail</em></strong></a><a class="genanchor" href="#49820"> &para;</a><div class="date" title="2005-02-09 06:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49820">
<div class="phpcode"><code><span class="html">As you probably guessed from the example, the documentation is misinforming.  openssl_csr_new returns a CSR resource or FALSE on failure.<br /><br />mixed openssl_csr_new (assoc_array dn, resource_privkey, [...])</span></code></div>
  </div>
 </div>
  <div class="note" id="120323">  <div class="votes">
    <div id="Vu120323">
    <a href="/manual/vote-note.php?id=120323&amp;page=function.openssl-csr-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120323">
    <a href="/manual/vote-note.php?id=120323&amp;page=function.openssl-csr-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120323" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#120323" class="name">
  <strong class="user"><em>@operator</em></strong></a><a class="genanchor" href="#120323"> &para;</a><div class="date" title="2016-12-13 02:19"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120323">
<div class="phpcode"><code><span class="html">One command to create modern certificate request with 4 SAN subdomain.<br />According to RFC you can change CN (common name) and subjectAltName. When cert validated searching in CN and subjectAltName.<br /><br />openssl req -new -nodes -config &lt;( cat &lt;&lt;-EOF<br />[req]<br />default_bits = 2048<br />prompt = no<br />default_md = sha256<br />req_extensions = re<br />distinguished_name = dn<br />[ dn ]<br />CN = my.tld<br />C = country<br />ST = state<br />L = location<br />O = ORGANISATION<br />[ re ]<br />subjectAltName = DNS.1: www.my.tld, DNS.2: www2.my.tld, DNS.3: www3.my.tld, DNS.4: www4.my.tld<br />EOF<br />) -keyout secret.key -out req.csr</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-csr-new&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-csr-new.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
