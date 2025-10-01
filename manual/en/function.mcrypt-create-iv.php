<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mcrypt_create_iv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mcrypt-create-iv.php">
 <link rel="shorturl" href="https://www.php.net/mcrypt-create-iv">
 <link rel="alternate" href="https://www.php.net/mcrypt-create-iv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mcrypt.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.mcrypt.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mcrypt-decrypt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mcrypt-create-iv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mcrypt-create-iv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mcrypt-create-iv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mcrypt-create-iv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mcrypt-create-iv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mcrypt-create-iv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mcrypt-create-iv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mcrypt-create-iv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mcrypt-create-iv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mcrypt-create-iv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mcrypt-create-iv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates an initialization vector (IV) from a random source" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mcrypt_create_iv - Manual" />
<meta name="twitter:description" content="Creates an initialization vector (IV) from a random source" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mcrypt_create_iv - Manual" />
<meta itemprop="description" content="Creates an initialization vector (IV) from a random source" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates an initialization vector (IV) from a random source" />

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
        <a href="function.mcrypt-decrypt.php">
          mcrypt_decrypt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.mcrypt.php">
          &laquo; Mcrypt Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.mcrypt.php'>Mcrypt</a></li>      <li><a href='ref.mcrypt.php'>Mcrypt Functions</a></li>      </ul>
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
            <option value='en/function.mcrypt-create-iv.php' selected="selected">English</option>
            <option value='de/function.mcrypt-create-iv.php'>German</option>
            <option value='es/function.mcrypt-create-iv.php'>Spanish</option>
            <option value='fr/function.mcrypt-create-iv.php'>French</option>
            <option value='it/function.mcrypt-create-iv.php'>Italian</option>
            <option value='ja/function.mcrypt-create-iv.php'>Japanese</option>
            <option value='pt_BR/function.mcrypt-create-iv.php'>Brazilian Portuguese</option>
            <option value='ru/function.mcrypt-create-iv.php'>Russian</option>
            <option value='tr/function.mcrypt-create-iv.php'>Turkish</option>
            <option value='uk/function.mcrypt-create-iv.php'>Ukrainian</option>
            <option value='zh/function.mcrypt-create-iv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mcrypt-create-iv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mcrypt_create_iv</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_create_iv</span> &mdash; <span class="dc-title">Creates an initialization vector (IV) from a random source</span></p>

 </div>
 
 <div id="function.mcrypt-create-iv-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong>
   
<p class="para">
 This function was <em>DEPRECATED</em> in PHP 7.1.0, and
 <em>REMOVED</em> in PHP 7.2.0.
</p>
<p class="para">
 Alternatives to this function include:
</p>

   <ul class="simplelist">
    <li><span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span></li>
   </ul>
  </div>
 </div>
 
 <div class="refsect1 description" id="refsect1-function.mcrypt-create-iv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mcrypt_create_iv</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$size</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$source</code><span class="initializer"> = MCRYPT_DEV_URANDOM</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Creates an initialization vector (IV) from a random source.
  </p>
  <p class="para">
   The IV is only meant to give an alternative seed to the encryption
   routines. This IV does not need to be secret at all, though it can be
   desirable. You even can send it along with your ciphertext without
   losing security.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mcrypt-create-iv-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">size</code></dt>
     <dd>
      <p class="para">
       The size of the IV.
      </p>
     </dd>
    
    
     <dt><code class="parameter">source</code></dt>
     <dd>
      <p class="para">
       The source of the IV. The source can be
       <strong><code><a href="mcrypt.constants.php#constant.mcrypt-rand">MCRYPT_RAND</a></code></strong> (system random number generator),
       <strong><code><a href="mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></code></strong> (read data from
       <var class="filename">/dev/random</var>) and
       <strong><code><a href="mcrypt.constants.php#constant.mcrypt-dev-urandom">MCRYPT_DEV_URANDOM</a></code></strong> (read data from
       <var class="filename">/dev/urandom</var>). Prior to 5.3.0,
       <strong><code><a href="mcrypt.constants.php#constant.mcrypt-rand">MCRYPT_RAND</a></code></strong> was the only one supported on Windows.
      </p>
      <p class="para">
       Note that the default value of this parameter was
       <strong><code><a href="mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></code></strong> prior to PHP 5.6.0.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Note that <strong><code><a href="mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></code></strong> may block until more
        entropy is available.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-create-iv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the initialization vector, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mcrypt-create-iv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-991">
    <p><strong>Example #1 <span class="function"><strong>mcrypt_create_iv()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    $size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_CAST_256</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CFB</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$iv </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_DEV_RANDOM</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mcrypt-create-iv-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="http://www.ciphersbyritter.com/GLOSSARY.HTM#IV" class="link external">&raquo;&nbsp;http://www.ciphersbyritter.com/GLOSSARY.HTM#IV</a></li>
    <li><a href="http://www.quadibloc.com/crypto/co0409.htm" class="link external">&raquo;&nbsp;http://www.quadibloc.com/crypto/co0409.htm</a></li>
    <li>Chapter 9.3 of Applied Cryptography by Schneier (ISBN 0-471-11709-9)</li>
    <li><span class="function"><a href="function.random-bytes.php" class="function" rel="rdfs-seeAlso">random_bytes()</a> - Get cryptographically secure random bytes</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mcrypt/functions/mcrypt-create-iv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mcrypt-create-iv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mcrypt-create-iv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mcrypt-create-iv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114645">  <div class="votes">
    <div id="Vu114645">
    <a href="/manual/vote-note.php?id=114645&amp;page=function.mcrypt-create-iv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114645">
    <a href="/manual/vote-note.php?id=114645&amp;page=function.mcrypt-create-iv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114645" title="81% like this...">
    44
    </div>
  </div>
  <a href="#114645" class="name">
  <strong class="user"><em>Graham</em></strong></a><a class="genanchor" href="#114645"> &para;</a><div class="date" title="2014-03-16 11:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114645">
<div class="phpcode"><code><span class="html">In relation to all of the crypto "advice" seen here, my suggestion is that you ignore most of it. Some of it is good, some of it is bad, but most of it skips the critical issues.<br /><br />I had hoped to write out a nice long explanation, but PHP's commenting system tells me my essay is too long. Instead I will say this:<br /><br />You should use CBC, with a randomly chosen IV that is unique per key, and you should transmit that IV in the clear along with your ciphertext. You should also perform an authenticity check of that entire data blob, using something like HMAC-SHA256, with another independent key.<br /><br />Here's the full-text of what I was going to write: <a href="http://pastebin.com/sN6buivY" rel="nofollow" target="_blank">http://pastebin.com/sN6buivY</a><br /><br />If you're interested in this stuff, or just want more information, check out the Wikipedia articles around block cipher modes, block ciphers, HMAC, etc.<br /><br />I also suggest reading Practical Cryptography by Bruce Schneier, as well as Cryptography Engineering by Niels Ferguson, both of which are very easy-to-digest books on practical cryptography.</span></code></div>
  </div>
 </div>
  <div class="note" id="70947">  <div class="votes">
    <div id="Vu70947">
    <a href="/manual/vote-note.php?id=70947&amp;page=function.mcrypt-create-iv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70947">
    <a href="/manual/vote-note.php?id=70947&amp;page=function.mcrypt-create-iv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70947" title="77% like this...">
    17
    </div>
  </div>
  <a href="#70947" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#70947"> &para;</a><div class="date" title="2006-11-05 03:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70947">
<div class="phpcode"><code><span class="html">&gt;First, the IV should be random and variable. The whole &gt;point of it is to ensure that the same plaintext does not &gt;encrypt to the same ciphertext every time. You most &gt;certainly do lose security if the IV is constant or public.<br /><br />Wrong, Wrong WRONG! The initialization vector is ALLOWED to be PUBLIC! It is generally sent along with the ciphertext, UNENCRYPTED.<br /><br />&gt;The ciphertext should be E(IV | plaintext, key)<br /><br />Wrong again! The initialization vector is NOT prepended to the plaintext before encryption. The IV is used to seed the feedback system! (which is why you don't need one in ECB mode - there is no feedback)<br /><br />&gt;Second, the IV should not be part of the decryption &gt;parameters at all. You should be able to decrypt the cipher &gt;text, throw away the initial vector at the front w/o even &gt;reading it, and have your plaintext:<br /><br />Nope. You need to seed the feedback mechanism during decryption to the SAME state as it was seeded during encryption. This means using the SAME IV!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mcrypt-create-iv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mcrypt-create-iv.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mcrypt.php">Mcrypt Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.mcrypt-create-iv.php" title="mcrypt_&#8203;create_&#8203;iv">mcrypt_&#8203;create_&#8203;iv</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-decrypt.php" title="mcrypt_&#8203;decrypt">mcrypt_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-algorithms-name.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;algorithms_&#8203;name">mcrypt_&#8203;enc_&#8203;get_&#8203;algorithms_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-block-size.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;block_&#8203;size">mcrypt_&#8203;enc_&#8203;get_&#8203;block_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-iv-size.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;iv_&#8203;size">mcrypt_&#8203;enc_&#8203;get_&#8203;iv_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-key-size.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;key_&#8203;size">mcrypt_&#8203;enc_&#8203;get_&#8203;key_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-modes-name.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;modes_&#8203;name">mcrypt_&#8203;enc_&#8203;get_&#8203;modes_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-get-supported-key-sizes.php" title="mcrypt_&#8203;enc_&#8203;get_&#8203;supported_&#8203;key_&#8203;sizes">mcrypt_&#8203;enc_&#8203;get_&#8203;supported_&#8203;key_&#8203;sizes</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-is-block-algorithm.php" title="mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;algorithm">mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;algorithm</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-is-block-algorithm-mode.php" title="mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;algorithm_&#8203;mode">mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;algorithm_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-is-block-mode.php" title="mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;mode">mcrypt_&#8203;enc_&#8203;is_&#8203;block_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-enc-self-test.php" title="mcrypt_&#8203;enc_&#8203;self_&#8203;test">mcrypt_&#8203;enc_&#8203;self_&#8203;test</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-encrypt.php" title="mcrypt_&#8203;encrypt">mcrypt_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-generic.php" title="mcrypt_&#8203;generic">mcrypt_&#8203;generic</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-generic-deinit.php" title="mcrypt_&#8203;generic_&#8203;deinit">mcrypt_&#8203;generic_&#8203;deinit</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-generic-init.php" title="mcrypt_&#8203;generic_&#8203;init">mcrypt_&#8203;generic_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-get-block-size.php" title="mcrypt_&#8203;get_&#8203;block_&#8203;size">mcrypt_&#8203;get_&#8203;block_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-get-cipher-name.php" title="mcrypt_&#8203;get_&#8203;cipher_&#8203;name">mcrypt_&#8203;get_&#8203;cipher_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-get-iv-size.php" title="mcrypt_&#8203;get_&#8203;iv_&#8203;size">mcrypt_&#8203;get_&#8203;iv_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-get-key-size.php" title="mcrypt_&#8203;get_&#8203;key_&#8203;size">mcrypt_&#8203;get_&#8203;key_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-list-algorithms.php" title="mcrypt_&#8203;list_&#8203;algorithms">mcrypt_&#8203;list_&#8203;algorithms</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-list-modes.php" title="mcrypt_&#8203;list_&#8203;modes">mcrypt_&#8203;list_&#8203;modes</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-close.php" title="mcrypt_&#8203;module_&#8203;close">mcrypt_&#8203;module_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-get-algo-block-size.php" title="mcrypt_&#8203;module_&#8203;get_&#8203;algo_&#8203;block_&#8203;size">mcrypt_&#8203;module_&#8203;get_&#8203;algo_&#8203;block_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-get-algo-key-size.php" title="mcrypt_&#8203;module_&#8203;get_&#8203;algo_&#8203;key_&#8203;size">mcrypt_&#8203;module_&#8203;get_&#8203;algo_&#8203;key_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-get-supported-key-sizes.php" title="mcrypt_&#8203;module_&#8203;get_&#8203;supported_&#8203;key_&#8203;sizes">mcrypt_&#8203;module_&#8203;get_&#8203;supported_&#8203;key_&#8203;sizes</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-is-block-algorithm.php" title="mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;algorithm">mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;algorithm</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-is-block-algorithm-mode.php" title="mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;algorithm_&#8203;mode">mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;algorithm_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-is-block-mode.php" title="mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;mode">mcrypt_&#8203;module_&#8203;is_&#8203;block_&#8203;mode</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-open.php" title="mcrypt_&#8203;module_&#8203;open">mcrypt_&#8203;module_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.mcrypt-module-self-test.php" title="mcrypt_&#8203;module_&#8203;self_&#8203;test">mcrypt_&#8203;module_&#8203;self_&#8203;test</a>
                        </li>
                                                <li class="">
                            <a href="function.mdecrypt-generic.php" title="mdecrypt_&#8203;generic">mdecrypt_&#8203;generic</a>
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
