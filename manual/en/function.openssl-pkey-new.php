<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: openssl_pkey_new - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.openssl-pkey-new.php">
 <link rel="shorturl" href="https://www.php.net/openssl-pkey-new">
 <link rel="alternate" href="https://www.php.net/openssl-pkey-new" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.openssl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.openssl-pkey-get-public.php">
 <link rel="next" href="https://www.php.net/manual/en/function.openssl-private-decrypt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.openssl-pkey-new.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.openssl-pkey-new.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.openssl-pkey-new.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.openssl-pkey-new.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.openssl-pkey-new.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.openssl-pkey-new.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.openssl-pkey-new.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.openssl-pkey-new.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.openssl-pkey-new.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.openssl-pkey-new.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.openssl-pkey-new.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates a new private key" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: openssl_pkey_new - Manual" />
<meta name="twitter:description" content="Generates a new private key" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: openssl_pkey_new - Manual" />
<meta itemprop="description" content="Generates a new private key" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates a new private key" />

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
        <a href="function.openssl-private-decrypt.php">
          openssl_private_decrypt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.openssl-pkey-get-public.php">
          &laquo; openssl_pkey_get_public        </a>
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
            <option value='en/function.openssl-pkey-new.php' selected="selected">English</option>
            <option value='de/function.openssl-pkey-new.php'>German</option>
            <option value='es/function.openssl-pkey-new.php'>Spanish</option>
            <option value='fr/function.openssl-pkey-new.php'>French</option>
            <option value='it/function.openssl-pkey-new.php'>Italian</option>
            <option value='ja/function.openssl-pkey-new.php'>Japanese</option>
            <option value='pt_BR/function.openssl-pkey-new.php'>Brazilian Portuguese</option>
            <option value='ru/function.openssl-pkey-new.php'>Russian</option>
            <option value='tr/function.openssl-pkey-new.php'>Turkish</option>
            <option value='uk/function.openssl-pkey-new.php'>Ukrainian</option>
            <option value='zh/function.openssl-pkey-new.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.openssl-pkey-new" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">openssl_pkey_new</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">openssl_pkey_new</span> &mdash; <span class="dc-title">Generates a new private key</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.openssl-pkey-new-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>openssl_pkey_new</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.opensslasymmetrickey.php" class="type OpenSSLAsymmetricKey">OpenSSLAsymmetricKey</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>openssl_pkey_new()</strong></span> generates a new private
   key.
   How to obtain the public component of the key is shown in an example below.
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


 <div class="refsect1 parameters" id="refsect1-function.openssl-pkey-new-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       It is possible to fine-tune the key generation (e.g. specifying the number of
       bits or parameters) using the <code class="parameter">options</code> parameter.
       These options can either be algorithm-specific parameters used for key generation,
       or generic options used also in <abbr title="Certificate Signing Request">CSR</abbr>generation if not specified.
       See <span class="function"><a href="function.openssl-csr-new.php" class="function">openssl_csr_new()</a></span> for more information
       about how to use <code class="parameter">options</code> for a <abbr title="Certificate Signing Request">CSR</abbr>.
       Among those options only <code class="literal">private_key_bits</code>,
       <code class="literal">private_key_type</code>, <code class="literal">curve_name</code>,
       and <code class="literal">config</code> are used for key generation.
       Algorithm-specific options are used if the associative array includes one of the specific keys.
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <code class="literal">&quot;rsa&quot;</code> key for setting RSA parameters.
         </span>
         <table class="doctable informaltable">
          
           <thead>
            <tr>
             <th>options</th>
             <th>type</th>
             <th>format</th>
             <th>required</th>
             <th>description</th>
            </tr>

           </thead>

           <tbody class="tbody">
            <tr>
             <td><code class="literal">&quot;n&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>yes</td>
             <td>modulus</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;e&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>public exponent</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;d&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>yes</td>
             <td>private exponent</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;p&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>prime 1</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;q&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>prime 2</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;dmp1&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>exponent1, d mod (p-1)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;dmq1&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>exponent2, d mod (q-1)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;iqmp&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>coefficient, (inverse of q) mod p</td>
            </tr>

           </tbody>
          
         </table>

        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">&quot;dsa&quot;</code> key for setting DSA parameters.
         </span>
         <table class="doctable informaltable">
          
           <thead>
            <tr>
             <th>options</th>
             <th>type</th>
             <th>format</th>
             <th>required</th>
             <th>description</th>
            </tr>

           </thead>

           <tbody class="tbody">
            <tr>
             <td><code class="literal">&quot;p&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>prime number (public)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;q&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>160-bit subprime, q | p-1 (public)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;g&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>generator of subgroup (public)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;priv_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>private key x</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;pub_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>public key y = g^x</td>
            </tr>

           </tbody>
          
         </table>

        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">&quot;dh&quot;</code> key for DH (Diffie–Hellman key exchange) parameters.
         </span>
         <table class="doctable informaltable">
          
           <thead>
            <tr>
             <th>Options</th>
             <th>Type</th>
             <th>Format</th>
             <th>Required</th>
             <th>Description</th>
            </tr>

           </thead>

           <tbody class="tbody">
            <tr>
             <td><code class="literal">&quot;p&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>prime number (shared)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;g&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>generator of Z_p (shared)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;priv_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>private DH value x</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;pub_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>public DH value g^x</td>
            </tr>

           </tbody>
          
         </table>

        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">&quot;ec&quot;</code> key for Elliptic curve parameters
         </span>
         <table class="doctable informaltable">
          
           <thead>
            <tr>
             <th>Options</th>
             <th>Type</th>
             <th>Format</th>
             <th>Required</th>
             <th>Description</th>
            </tr>

           </thead>

           <tbody class="tbody">
            <tr>
             <td><code class="literal">&quot;curve_name&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>name</td>
             <td>no</td>
             <td>name of curve, see <span class="function"><a href="function.openssl-get-curve-names.php" class="function">openssl_get_curve_names()</a></span></td>
            </tr>

            <tr>
             <td><code class="literal">&quot;p&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>prime of the field for curve over Fp</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;a&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>coofecient a of the curve for Fp: y^2 mod p = x^3 + ax + b mod p</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;b&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>coofecient b of the curve for Fp: y^2 mod p = x^3 + ax + b mod p</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;seed&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>optional random number seed used to generate coefficient b</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;generator&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary encoded point</td>
             <td>no</td>
             <td>curve generator point</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;g_x&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>curver generator point x coordinat</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;g_y&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>curver generator point y coordinat</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;cofactor&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>curve cofactor</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;order&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>curve order</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;x&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>x coordinate (public)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;y&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>y coordinate (public)</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;d&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>binary number</td>
             <td>no</td>
             <td>private key</td>
            </tr>

           </tbody>
          
         </table>

        </li>
        <li class="listitem">
         <span class="simpara">
          <code class="literal">&quot;x25519&quot;</code>, <code class="literal">&quot;x448&quot;</code>,
          <code class="literal">&quot;ed25519&quot;</code>, <code class="literal">&quot;ed448&quot;</code> keys for
          Curve25519 and Curve448 parameters.
         </span>
         <table class="doctable informaltable">
          
           <thead>
            <tr>
             <th>Options</th>
             <th>Type</th>
             <th>Format</th>
             <th>Required</th>
             <th>Description</th>
            </tr>

           </thead>

           <tbody class="tbody">
             <tr>
             <td><code class="literal">&quot;priv_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>private key</td>
            </tr>

            <tr>
             <td><code class="literal">&quot;pub_key&quot;</code></td>
             <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
             <td>PEM key</td>
             <td>no</td>
             <td>public key</td>
            </tr>

           </tbody>
          
         </table>

        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.openssl-pkey-new-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span> instance for
   the pkey on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.openssl-pkey-new-changelog">
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
       Added support for Curve25519 and Curve448 based keys with the introduction of the
       <code class="literal">x25519</code>, <code class="literal">ed25519</code>, <code class="literal">x448</code>,
       and <code class="literal">ed448</code> fields.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       Added support for generation EC keys with custom EC parameters.
       Specifically with the introduction of the EC options:
       <code class="literal">p</code>, <code class="literal">a</code>, <code class="literal">b</code>, <code class="literal">seed</code>,
       <code class="literal">generator</code>, <code class="literal">g_x</code>, <code class="literal">g_y</code>,
       <code class="literal">cofactor</code>, and <code class="literal">order</code>.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       On success, this function returns an <span class="classname"><a href="class.opensslasymmetrickey.php" class="classname">OpenSSLAsymmetricKey</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> of type <code class="literal">OpenSSL key</code> was returned.
      </td>
     </tr>

     <tr>
      <td>7.1.0</td>
      <td>
       The <code class="literal">curve_name</code> key of the <code class="parameter">options</code> parameter was
       added to make it possible to create EC keys based on Elliptic Curve algorithms.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.openssl-pkey-new-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="function.openssl-pkey-new.example.public-key">
   <p><strong>Example #1 Obtain the public key from a private key</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$private_key </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$public_key_pem </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_details</span><span style="color: #007700">(</span><span style="color: #0000BB">$private_key</span><span style="color: #007700">)[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$public_key_pem</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$public_key </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_public</span><span style="color: #007700">(</span><span style="color: #0000BB">$public_key_pem</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$public_key</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">// Output prior to PHP 8.0.0; note, the function returns a resource
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwknBFEherZe74BiRjTFA
hqwZ1SK7brwq7C/afnLXKhRR7jnrpfM0ypC46q8xz5UZswenZakJ7kd5fls+r4Bv
3P8XsKYLTh2m1GiWQhV1g77cNIN4qNWh70PiDO3fB2446o1LBgToQYuRZS5YQRfJ
rVD0ysgtVcCU9tjaey28HlgApOpYFTaaKPj2MBmEYpMC+kG2HhL12GfpHUi2eiXI
dXT2WskWHWvUrmQ7fJIfI92JlDokV62DH/q1oiedLs9OPNb0rL1aAmYdzaVN6XNH
x/o4Lh125v2vAPV9E3fZCDc/HDEUaahpjanMiCQEgEDp5Hr+CRkvERT5/ydN+p08
5wIDAQAB
-----END PUBLIC KEY-----

resource(6) of type (OpenSSL key)

// Output as of PHP 8.0.0; note, the function returns an object
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwknBFEherZe74BiRjTFA
hqwZ1SK7brwq7C/afnLXKhRR7jnrpfM0ypC46q8xz5UZswenZakJ7kd5fls+r4Bv
3P8XsKYLTh2m1GiWQhV1g77cNIN4qNWh70PiDO3fB2446o1LBgToQYuRZS5YQRfJ
rVD0ysgtVcCU9tjaey28HlgApOpYFTaaKPj2MBmEYpMC+kG2HhL12GfpHUi2eiXI
dXT2WskWHWvUrmQ7fJIfI92JlDokV62DH/q1oiedLs9OPNb0rL1aAmYdzaVN6XNH
x/o4Lh125v2vAPV9E3fZCDc/HDEUaahpjanMiCQEgEDp5Hr+CRkvERT5/ydN+p08
5wIDAQAB
-----END PUBLIC KEY-----

object(OpenSSLAsymmetricKey)#2 (0) {
}</pre>
</div>
   </div>
  </div>

  <div class="example" id="function.openssl-pkey-new.example.rsa-key">
   <p><strong>Example #2 Generating RSA key from parameters</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$nhex </span><span style="color: #007700">= </span><span style="color: #DD0000">"BBF82F090682CE9C2338AC2B9DA871F7368D07EED41043A440D6B6F07454F51F" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"B8DFBAAF035C02AB61EA48CEEB6FCD4876ED520D60E1EC4619719D8A5B8B807F" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"AFB8E0A3DFC737723EE6B4B7D93A2584EE6A649D060953748834B2454598394E" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"E0AAB12D7B61A51F527A9A41F6C1687FE2537298CA2A8F5946F8E5FD091DBDCB"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$ehex </span><span style="color: #007700">= </span><span style="color: #DD0000">"11"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dhex </span><span style="color: #007700">= </span><span style="color: #DD0000">"A5DAFC5341FAF289C4B988DB30C1CDF83F31251E0668B42784813801579641B2" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"9410B3C7998D6BC465745E5C392669D6870DA2C082A939E37FDCB82EC93EDAC9" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"7FF3AD5950ACCFBC111C76F1A9529444E56AAF68C56C092CD38DC3BEF5D20A93" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"9926ED4F74A13EDDFBE1A1CECC4894AF9428C2B7B8883FE4463A4BC85B1CB3C1"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$phex </span><span style="color: #007700">= </span><span style="color: #DD0000">"EECFAE81B1B9B3C908810B10A1B5600199EB9F44AEF4FDA493B81A9E3D84F632" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"124EF0236E5D1E3B7E28FAE7AA040A2D5B252176459D1F397541BA2A58FB6599"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$qhex </span><span style="color: #007700">= </span><span style="color: #DD0000">"C97FB1F027F453F6341233EAAAD1D9353F6C42D08866B1D05A0F2035028B9D86" </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"9840B41666B42E92EA0DA3B43204B5CFCE3352524D0416A5A441E700AF461503"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$dphex </span><span style="color: #007700">= </span><span style="color: #DD0000">"11"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$dqhex </span><span style="color: #007700">= </span><span style="color: #DD0000">"11"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$qinvhex </span><span style="color: #007700">= </span><span style="color: #DD0000">"b06c4fdabb6301198d265bdbae9423b380f271f73453885093077fcd39e2119f" </span><span style="color: #007700">.<br />           </span><span style="color: #DD0000">"c98632154f5883b167a967bf402b4e9e2e0f9656e698ea3666edfb25798039f7"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$rsa</span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'rsa' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'n' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$nhex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'e' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$ehex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'d' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$dhex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'p' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$phex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'q' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$qhex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'dmp1' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$dphex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'dmq1' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$dqhex</span><span style="color: #007700">),<br />        </span><span style="color: #DD0000">'iqmp' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">hex2bin</span><span style="color: #007700">(</span><span style="color: #0000BB">$qinvhex</span><span style="color: #007700">),<br />    ],<br />]);<br /></span><span style="color: #0000BB">$details </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_get_details</span><span style="color: #007700">(</span><span style="color: #0000BB">$rsa</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$details</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/functions/openssl-pkey-new.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.openssl-pkey-new%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.openssl-pkey-new&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-pkey-new.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111769">  <div class="votes">
    <div id="Vu111769">
    <a href="/manual/vote-note.php?id=111769&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111769">
    <a href="/manual/vote-note.php?id=111769&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111769" title="64% like this...">
    49
    </div>
  </div>
  <a href="#111769" class="name">
  <strong class="user"><em>dirt at awoms dot com</em></strong></a><a class="genanchor" href="#111769"> &para;</a><div class="date" title="2013-03-26 08:52"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111769">
<div class="phpcode"><code><span class="html">Working example:<br /><br />$config = array(<br />    "digest_alg" =&gt; "sha512",<br />    "private_key_bits" =&gt; 4096,<br />    "private_key_type" =&gt; OPENSSL_KEYTYPE_RSA,<br />);<br />    <br />// Create the private and public key<br />$res = openssl_pkey_new($config);<br /><br />// Extract the private key from $res to $privKey<br />openssl_pkey_export($res, $privKey);<br /><br />// Extract the public key from $res to $pubKey<br />$pubKey = openssl_pkey_get_details($res);<br />$pubKey = $pubKey["key"];<br /><br />$data = 'plaintext data goes here';<br /><br />// Encrypt the data to $encrypted using the public key<br />openssl_public_encrypt($data, $encrypted, $pubKey);<br /><br />// Decrypt the data using the private key and store the results in $decrypted<br />openssl_private_decrypt($encrypted, $decrypted, $privKey);<br /><br />echo $decrypted;</span></code></div>
  </div>
 </div>
  <div class="note" id="123410">  <div class="votes">
    <div id="Vu123410">
    <a href="/manual/vote-note.php?id=123410&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123410">
    <a href="/manual/vote-note.php?id=123410&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123410" title="82% like this...">
    18
    </div>
  </div>
  <a href="#123410" class="name">
  <strong class="user"><em>gomez dot alejandre at gmail dot com</em></strong></a><a class="genanchor" href="#123410"> &para;</a><div class="date" title="2018-12-08 01:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123410">
<div class="phpcode"><code><span class="html">Not forget the $configArgs for windows users :D, or the method throws a error with the primary key<br /><br />//write your configurations :D<br />$configargs = array(<br />  "config" =&gt; "C:/xampp/php/extras/openssl/openssl.cnf",<br />  'private_key_bits'=&gt; 2048,<br />  'default_md' =&gt; "sha256",<br />);<br /><br />// Create the keypair<br />$res=openssl_pkey_new($configargs);<br />// Get private key<br />openssl_pkey_export($res, $privKey,NULL,$configargs);<br /><br />and it's for all methods ._ .<br /><br />a full implementation example here.<br /><br /><a href="https://gist.github.com/DuckHunter213/269a0efd17e709f7f1f177ae7da46ad1" rel="nofollow" target="_blank">https://gist.github.com/DuckHunter213/269a0efd17e709f7f1f177ae7da46ad1</a><br /><br />this error take me 3 full days you'r welcome :)</span></code></div>
  </div>
 </div>
  <div class="note" id="116765">  <div class="votes">
    <div id="Vu116765">
    <a href="/manual/vote-note.php?id=116765&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116765">
    <a href="/manual/vote-note.php?id=116765&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116765" title="73% like this...">
    12
    </div>
  </div>
  <a href="#116765" class="name">
  <strong class="user"><em>scott at brynen dot com</em></strong></a><a class="genanchor" href="#116765"> &para;</a><div class="date" title="2015-02-24 09:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116765">
<div class="phpcode"><code><span class="html">If you try and generate a new key using openssl_pkey_new(), and need to specify the size of the key, the key MUST be type-bound to integer<br /><br />// works<br />$keysize = 1024;<br />$ssl = openssl_pkey_new (array('private_key_bits' =&gt; $keysize));<br /><br />// fails<br />$keysize = "1024";<br />$ssl = openssl_pkey_new (array('private_key_bits' =&gt; $keysize));<br /><br />// works (force to int)<br />$keysize = "1024";<br />$ssl = openssl_pkey_new (array('private_key_bits' =&gt; (int)$keysize));</span></code></div>
  </div>
 </div>
  <div class="note" id="126637">  <div class="votes">
    <div id="Vu126637">
    <a href="/manual/vote-note.php?id=126637&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126637">
    <a href="/manual/vote-note.php?id=126637&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126637" title="61% like this...">
    3
    </div>
  </div>
  <a href="#126637" class="name">
  <strong class="user"><em>Andrew</em></strong></a><a class="genanchor" href="#126637"> &para;</a><div class="date" title="2021-11-24 07:17"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126637">
<div class="phpcode"><code><span class="html">It's not documented here but you can also create ECC keys from existing key parameters (e.g. from JWK):<br /><br /><span class="default">&lt;?php<br />$key </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">([<br />    </span><span class="string">'ec' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'curve_name' </span><span class="keyword">=&gt; </span><span class="string">'prime256v1'</span><span class="keyword">,<br />        </span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="default">$someXValue</span><span class="keyword">,<br />        </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="default">$someYValue</span><span class="keyword">,<br />        </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="default">$someDValue<br />    </span><span class="keyword">]<br />]);<br /></span><span class="default">?&gt;<br /></span><br />You can just provide x/y if it's a public key, or you can just provide d if it's a private key.</span></code></div>
  </div>
 </div>
  <div class="note" id="82253">  <div class="votes">
    <div id="Vu82253">
    <a href="/manual/vote-note.php?id=82253&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82253">
    <a href="/manual/vote-note.php?id=82253&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82253" title="58% like this...">
    5
    </div>
  </div>
  <a href="#82253" class="name">
  <strong class="user"><em>Brad</em></strong></a><a class="genanchor" href="#82253"> &para;</a><div class="date" title="2008-04-02 12:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82253">
<div class="phpcode"><code><span class="html">It's easier than all that, if you just want the keys:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Create the keypair<br /></span><span class="default">$res</span><span class="keyword">=</span><span class="default">openssl_pkey_new</span><span class="keyword">();<br /><br /></span><span class="comment">// Get private key<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">);<br /><br /></span><span class="comment">// Get public key<br /></span><span class="default">$pubkey</span><span class="keyword">=</span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br /></span><span class="default">$pubkey</span><span class="keyword">=</span><span class="default">$pubkey</span><span class="keyword">[</span><span class="string">"key"</span><span class="keyword">];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129940">  <div class="votes">
    <div id="Vu129940">
    <a href="/manual/vote-note.php?id=129940&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129940">
    <a href="/manual/vote-note.php?id=129940&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129940" title="100% like this...">
    2
    </div>
  </div>
  <a href="#129940" class="name">
  <strong class="user"><em>Eno_CN at qq dot com</em></strong></a><a class="genanchor" href="#129940"> &para;</a><div class="date" title="2025-01-06 03:21"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129940">
<div class="phpcode"><code><span class="html">Some examples for generating EC keypair <br /><br />EC - generate keypair with curve_name<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* <br /> * Custom parameters x, y, and d are not supported with SM2 in OpenSSL 3.x.<br /> * Directly creating EVP_PKEY_CTX using EVP_PKEY_CTX_new_from_name(NULL, "SM2", NULL) <br /> * will result in generating incorrect private keys (which cannot be correctly recognized <br /> * by existing external applications based on the SM2 algorithm).<br /> */<br /></span><span class="default">$curve_name </span><span class="keyword">= </span><span class="string">'SM2'</span><span class="keyword">;<br /></span><span class="default">$pkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">(array(<br />    </span><span class="string">'ec'</span><span class="keyword">=&gt; array(<br />        </span><span class="string">'curve_name' </span><span class="keyword">=&gt; </span><span class="default">$curve_name</span><span class="keyword">,<br />    )<br />));<br /><br /></span><span class="default">$details </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$details</span><span class="keyword">);<br /></span><span class="default">$pubkey </span><span class="keyword">= </span><span class="default">$details</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">];<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">);<br />echo </span><span class="string">'Private Key:'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">'Public Key：'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$pubkey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />EC - generate keypair with custom params (OSCCA WAPIP192v1 Elliptic curve)<br /><br /><span class="default">&lt;?php<br />$d </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'8D0AC65AAEA0D6B96254C65817D4A143A9E7A03876F1A37D'</span><span class="keyword">); </span><span class="comment">// private key binary<br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'98E07AAD50C31F9189EBE6B8B5C70E5DEE59D7A8BC344CC6'</span><span class="keyword">); </span><span class="comment">// public key x binary<br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'6109D3D96E52D0867B9D05D72D07BE5876A3D973E0E96792'</span><span class="keyword">); </span><span class="comment">// public key y binary<br /><br /></span><span class="default">$p </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'BDB6F4FE3E8B1D9E0DA8C0D46F4C318CEFE4AFE3B6B8551F'</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'BB8E5E8FBC115E139FE6A814FE48AAA6F0ADA1AA5DF91985'</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'1854BEBDC31B21B7AEFC80AB0ECD10D5B1B3308E6DBF11C1'</span><span class="keyword">);<br /></span><span class="default">$g_x </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'4AD5F7048DE709AD51236DE65E4D4B482C836DC6E4106640'</span><span class="keyword">);<br /></span><span class="default">$g_y </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'02BB3A02D4AAADACAE24817A4CA3A1B014B5270432DB27D2'</span><span class="keyword">);<br /></span><span class="default">$order </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'BDB6F4FE3E8B1D9E0DA8C0D40FC962195DFAE76F56564677'</span><span class="keyword">);<br /><br /></span><span class="default">$pkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">(array(<br />    </span><span class="string">'ec'</span><span class="keyword">=&gt; array(<br />        </span><span class="string">'p' </span><span class="keyword">=&gt; </span><span class="default">$p</span><span class="keyword">,<br />        </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">$a</span><span class="keyword">,<br />        </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">$b</span><span class="keyword">,<br />        </span><span class="string">'order' </span><span class="keyword">=&gt; </span><span class="default">$order</span><span class="keyword">,<br />        </span><span class="string">'g_x' </span><span class="keyword">=&gt; </span><span class="default">$g_x</span><span class="keyword">,<br />        </span><span class="string">'g_y' </span><span class="keyword">=&gt; </span><span class="default">$g_y</span><span class="keyword">,<br />        </span><span class="comment">//'d' =&gt; $d, // import the private key to generate keypairs<br />    </span><span class="keyword">)<br />));<br /><br /></span><span class="default">$details </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$details</span><span class="keyword">);<br /></span><span class="default">$pubkey </span><span class="keyword">= </span><span class="default">$details</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">];<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">);<br />echo </span><span class="string">'Private Key:'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">'Public Key：'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$pubkey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />EC - generate keypair with custom params (SM2 curve)<br /><br /><span class="default">&lt;?php<br />$p </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF00000000FFFFFFFFFFFFFFFF'</span><span class="keyword">);<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF00000000FFFFFFFFFFFFFFFC'</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'28E9FA9E9D9F5E344D5A9E4BCF6509A7F39789F515AB8F92DDBCBD414D940E93'</span><span class="keyword">);<br /></span><span class="default">$g_x </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'32C4AE2C1F1981195F9904466A39C9948FE30BBFF2660BE1715A4589334C74C7'</span><span class="keyword">);<br /></span><span class="default">$g_y </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'BC3736A2F4F6779C59BDCEE36B692153D0A9877CC62A474002DF32E52139F0A0'</span><span class="keyword">);<br /></span><span class="default">$order </span><span class="keyword">= </span><span class="default">hex2bin</span><span class="keyword">(</span><span class="string">'FFFFFFFEFFFFFFFFFFFFFFFFFFFFFFFF7203DF6B21C6052B53BBF40939D54123'</span><span class="keyword">);<br /><br /></span><span class="comment">/* <br /> * Custom parameters x, y, and d are not supported with SM2 in OpenSSL 3.x.<br /> * Directly creating EVP_PKEY_CTX using EVP_PKEY_CTX_new_from_name(NULL, "SM2", NULL) <br /> * will result in generating incorrect private keys (which cannot be correctly recognized <br /> * by existing external applications based on the SM2 algorithm).<br /> */<br /></span><span class="default">$pkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">(array(<br />    </span><span class="string">'ec'</span><span class="keyword">=&gt; array(<br />        </span><span class="string">'p' </span><span class="keyword">=&gt; </span><span class="default">$p</span><span class="keyword">,<br />        </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">$a</span><span class="keyword">,<br />        </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">$b</span><span class="keyword">,<br />        </span><span class="string">'order' </span><span class="keyword">=&gt; </span><span class="default">$order</span><span class="keyword">,<br />        </span><span class="string">'g_x' </span><span class="keyword">=&gt; </span><span class="default">$g_x</span><span class="keyword">,<br />        </span><span class="string">'g_y' </span><span class="keyword">=&gt; </span><span class="default">$g_y</span><span class="keyword">,<br />    )<br />));<br /><br /></span><span class="comment">/* <br /> * It is not entirely the same as generating keys through the SM2 curve naming method.<br /> * So the generated key will be in PKCS8 format to store algorithm information.<br /> */<br /></span><span class="default">$details </span><span class="keyword">= </span><span class="default">openssl_pkey_get_details</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$details</span><span class="keyword">);<br /></span><span class="default">$pubkey </span><span class="keyword">= </span><span class="default">$details</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">];<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$pkey</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">);<br />echo </span><span class="string">'Private Key:'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$prikey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">'Public Key：'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$pubkey</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123488">  <div class="votes">
    <div id="Vu123488">
    <a href="/manual/vote-note.php?id=123488&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123488">
    <a href="/manual/vote-note.php?id=123488&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123488" title="no votes...">
    0
    </div>
  </div>
  <a href="#123488" class="name">
  <strong class="user"><em>Jan</em></strong></a><a class="genanchor" href="#123488"> &para;</a><div class="date" title="2019-01-03 09:02"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123488">
<div class="phpcode"><code><span class="html">In case this function returns false, then check your openssl.cnf and make sure that in the [req] section of this file the entry default_bits is not commented out.</span></code></div>
  </div>
 </div>
  <div class="note" id="120814">  <div class="votes">
    <div id="Vu120814">
    <a href="/manual/vote-note.php?id=120814&amp;page=function.openssl-pkey-new&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120814">
    <a href="/manual/vote-note.php?id=120814&amp;page=function.openssl-pkey-new&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120814" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#120814" class="name">
  <strong class="user"><em>dodginess at yahoo dot com</em></strong></a><a class="genanchor" href="#120814"> &para;</a><div class="date" title="2017-03-15 11:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120814">
<div class="phpcode"><code><span class="html">If you're using openssl_pkey_new() in conjunction with openssl_csr_new() and want to change the CSR digest algorithm as well as specify a custom key size, the configuration override should be defined once and sent to both functions:<br /><br /><span class="default">&lt;?php<br />$config </span><span class="keyword">= array(<br />    </span><span class="string">'digest_alg' </span><span class="keyword">=&gt; </span><span class="string">'sha1'</span><span class="keyword">,<br />    </span><span class="string">'private_key_bits' </span><span class="keyword">=&gt; </span><span class="default">2048</span><span class="keyword">,<br />    </span><span class="string">'private_key_type' </span><span class="keyword">=&gt; </span><span class="default">OPENSSL_KEYTYPE_RSA</span><span class="keyword">,<br />);<br /><br /></span><span class="default">$privkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">(</span><span class="default">$config</span><span class="keyword">);<br /><br /></span><span class="default">$csr </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$config</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Although openssl_pkey_new() will accept the 'digest_alg' argument it won't use it, and setting the value has no effect unless you also set this value for openssl_csr_new(). The reason for this is that the $config array is acting as a drop-in replacement for the values found in the openssl.cnf file, so it must contain all of the override values that you need even if the function they're being sent to won't use them.<br /><br />Also, if you change the 'digest_alg' to something like 'sha256' and still get an MD5 signed CSR check your openssl.cnf file to see whether the digest algorithm you want to use is actually supported.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.openssl-pkey-new&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.openssl-pkey-new.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
