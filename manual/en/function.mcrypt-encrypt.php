<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mcrypt_encrypt - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mcrypt-encrypt.php">
 <link rel="shorturl" href="https://www.php.net/mcrypt-encrypt">
 <link rel="alternate" href="https://www.php.net/mcrypt-encrypt" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mcrypt.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mcrypt-enc-self-test.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mcrypt-generic.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mcrypt-encrypt.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mcrypt-encrypt.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mcrypt-encrypt.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mcrypt-encrypt.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mcrypt-encrypt.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mcrypt-encrypt.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mcrypt-encrypt.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mcrypt-encrypt.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mcrypt-encrypt.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mcrypt-encrypt.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mcrypt-encrypt.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Encrypts plaintext with given parameters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mcrypt_encrypt - Manual" />
<meta name="twitter:description" content="Encrypts plaintext with given parameters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mcrypt_encrypt - Manual" />
<meta itemprop="description" content="Encrypts plaintext with given parameters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Encrypts plaintext with given parameters" />

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
        <a href="function.mcrypt-generic.php">
          mcrypt_generic &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mcrypt-enc-self-test.php">
          &laquo; mcrypt_enc_self_test        </a>
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
            <option value='en/function.mcrypt-encrypt.php' selected="selected">English</option>
            <option value='de/function.mcrypt-encrypt.php'>German</option>
            <option value='es/function.mcrypt-encrypt.php'>Spanish</option>
            <option value='fr/function.mcrypt-encrypt.php'>French</option>
            <option value='it/function.mcrypt-encrypt.php'>Italian</option>
            <option value='ja/function.mcrypt-encrypt.php'>Japanese</option>
            <option value='pt_BR/function.mcrypt-encrypt.php'>Brazilian Portuguese</option>
            <option value='ru/function.mcrypt-encrypt.php'>Russian</option>
            <option value='tr/function.mcrypt-encrypt.php'>Turkish</option>
            <option value='uk/function.mcrypt-encrypt.php'>Ukrainian</option>
            <option value='zh/function.mcrypt-encrypt.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mcrypt-encrypt" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mcrypt_encrypt</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_encrypt</span> &mdash; <span class="dc-title">Encrypts plaintext with given parameters</span></p>

 </div>
 
 <div id="function.mcrypt-encrypt-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 7.1.0 and
<em>REMOVED</em> as of PHP 7.2.0. Relying on this function
is highly discouraged.</p></div>
 </div>
 
 <div class="refsect1 description" id="refsect1-function.mcrypt-encrypt-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mcrypt_encrypt</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$cipher</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$iv</code><span class="initializer"> = ?</span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Encrypts the data and returns it.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mcrypt-encrypt-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">cipher</code></dt>
     <dd>
      <p class="para">One of the <strong><code>MCRYPT_ciphername</code></strong> constants, or the name of the algorithm as string.</p>
     </dd>
    
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       The key with which the data will be encrypted. If the provided key size is
       not supported by the cipher, the function will emit a warning and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The data that will be encrypted with the given <code class="parameter">cipher</code>
       and <code class="parameter">mode</code>. If the size of the data is not n * blocksize,
       the data will be padded with &#039;<code class="literal">\0</code>&#039;.
      </p>
      <p class="para">
       The returned crypttext can be larger than the size of the data that was
       given by <code class="parameter">data</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">One of the <strong><code>MCRYPT_MODE_modename</code></strong> constants, or one of the following strings: &quot;ecb&quot;, &quot;cbc&quot;, &quot;cfb&quot;, &quot;ofb&quot;, &quot;nofb&quot; or &quot;stream&quot;.</p>
     </dd>
    
    
     <dt><code class="parameter">iv</code></dt>
     <dd>
      <p class="para">Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-encrypt-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the encrypted data as a string  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mcrypt-encrypt-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-995">
    <p><strong>Example #1 <span class="function"><strong>mcrypt_encrypt()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />    </span><span style="color: #FF8000"># --- ENCRYPTION ---<br /><br />    # the key should be random binary, use scrypt, bcrypt or PBKDF2 to<br />    # convert a string into a key<br />    # key is specified using hexadecimal<br />    </span><span style="color: #0000BB">$key </span><span style="color: #007700">= </span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'H*'</span><span style="color: #007700">, </span><span style="color: #DD0000">"bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3"</span><span style="color: #007700">);<br />    <br />    </span><span style="color: #FF8000"># show key size use either 16, 24 or 32 byte keys for AES-128, 192<br />    # and 256 respectively<br />    </span><span style="color: #0000BB">$key_size </span><span style="color: #007700">=  </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"Key size: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$key_size </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    <br />    </span><span style="color: #0000BB">$plaintext </span><span style="color: #007700">= </span><span style="color: #DD0000">"This string was AES-256 / CBC / ZeroBytePadding encrypted."</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000"># create a random IV to use with CBC encoding<br />    </span><span style="color: #0000BB">$iv_size </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$iv </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_RAND</span><span style="color: #007700">);<br />    <br />    </span><span style="color: #FF8000"># creates a cipher text compatible with AES (Rijndael block size = 128)<br />    # to keep the text confidential <br />    # only suitable for encoded input that never ends with value 00h<br />    # (because of default zero padding)<br />    </span><span style="color: #0000BB">$ciphertext </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">,<br />                                 </span><span style="color: #0000BB">$plaintext</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000"># prepend the IV for it to be available for decryption<br />    </span><span style="color: #0000BB">$ciphertext </span><span style="color: #007700">= </span><span style="color: #0000BB">$iv </span><span style="color: #007700">. </span><span style="color: #0000BB">$ciphertext</span><span style="color: #007700">;<br />    <br />    </span><span style="color: #FF8000"># encode the resulting cipher text so it can be represented by a string<br />    </span><span style="color: #0000BB">$ciphertext_base64 </span><span style="color: #007700">= </span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$ciphertext</span><span style="color: #007700">);<br /><br />    echo  </span><span style="color: #0000BB">$ciphertext_base64 </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000"># === WARNING ===<br /><br />    # Resulting cipher text has no integrity or authenticity added<br />    # and is not protected against padding oracle attacks.<br />    <br />    # --- DECRYPTION ---<br />    <br />    </span><span style="color: #0000BB">$ciphertext_dec </span><span style="color: #007700">= </span><span style="color: #0000BB">base64_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$ciphertext_base64</span><span style="color: #007700">);<br />    <br />    </span><span style="color: #FF8000"># retrieves the IV, iv_size should be created using mcrypt_get_iv_size()<br />    </span><span style="color: #0000BB">$iv_dec </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br />    <br />    </span><span style="color: #FF8000"># retrieves the cipher text (everything except the $iv_size in the front)<br />    </span><span style="color: #0000BB">$ciphertext_dec </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_size</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000"># may remove 00h valued characters from end of plain text<br />    </span><span style="color: #0000BB">$plaintext_dec </span><span style="color: #007700">= </span><span style="color: #0000BB">mcrypt_decrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #0000BB">$key</span><span style="color: #007700">,<br />                                    </span><span style="color: #0000BB">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">, </span><span style="color: #0000BB">$iv_dec</span><span style="color: #007700">);<br />    <br />    echo  </span><span style="color: #0000BB">$plaintext_dec </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Key size: 32
ENJW8mS2KaJoNB5E5CoSAAu0xARgsR1bdzFWpEn+poYw45q+73az5kYi4j+0haevext1dGrcW8Qi59txfCBV8BBj3bzRP3dFCp3CPQSJ8eU=
This string was AES-256 / CBC / ZeroBytePadding encrypted.</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mcrypt-encrypt-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mcrypt-decrypt.php" class="function" rel="rdfs-seeAlso">mcrypt_decrypt()</a> - Decrypts crypttext with given parameters</span></li>
    <li><span class="function"><a href="function.mcrypt-module-open.php" class="function" rel="rdfs-seeAlso">mcrypt_module_open()</a> - Opens the module of the algorithm and the mode to be used</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mcrypt/functions/mcrypt-encrypt.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mcrypt-encrypt%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mcrypt-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mcrypt-encrypt.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117667">  <div class="votes">
    <div id="Vu117667">
    <a href="/manual/vote-note.php?id=117667&amp;page=function.mcrypt-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117667">
    <a href="/manual/vote-note.php?id=117667&amp;page=function.mcrypt-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117667" title="73% like this...">
    61
    </div>
  </div>
  <a href="#117667" class="name">
  <strong class="user"><em>scott at paragonie dot com</em></strong></a><a class="genanchor" href="#117667"> &para;</a><div class="date" title="2015-07-18 10:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117667">
<div class="phpcode"><code><span class="html">If you're writing code to encrypt/encrypt data in 2015, you should use openssl_encrypt() and openssl_decrypt(). The underlying library (libmcrypt) has been abandoned since 2007, and performs far worse than OpenSSL (which leverages AES-NI on modern processors and is cache-timing safe).<br /><br />Also, MCRYPT_RIJNDAEL_256 is not AES-256, it's a different variant of the Rijndael block cipher. If you want AES-256 in mcrypt, you have to use MCRYPT_RIJNDAEL_128 with a 32-byte key. OpenSSL makes it more obvious which mode you are using (i.e. 'aes-128-cbc' vs 'aes-256-ctr').<br /><br />OpenSSL also uses PKCS7 padding with CBC mode rather than mcrypt's NULL byte padding. Thus, mcrypt is more likely to make your code vulnerable to padding oracle attacks than OpenSSL.<br /><br />Finally, if you are not authenticating your ciphertexts (Encrypt Then MAC), you're doing it wrong.<br /><br />Further reading:<br /><br /><a href="https://paragonie.com/blog/2015/05/using-encryption-and-authentication-correctly" rel="nofollow" target="_blank">https://paragonie.com/blog/2015/05/using-encryption-and-authentication-correctly</a><br /><br /><a href="https://paragonie.com/blog/2015/05/if-you-re-typing-word-mcrypt-into-your-code-you-re-doing-it-wrong" rel="nofollow" target="_blank">https://paragonie.com/blog/2015/05/if-you-re-typing-word-mcrypt-into-your-code-you-re-doing-it-wrong</a></span></code></div>
  </div>
 </div>
  <div class="note" id="47973">  <div class="votes">
    <div id="Vu47973">
    <a href="/manual/vote-note.php?id=47973&amp;page=function.mcrypt-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47973">
    <a href="/manual/vote-note.php?id=47973&amp;page=function.mcrypt-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47973" title="71% like this...">
    25
    </div>
  </div>
  <a href="#47973" class="name">
  <strong class="user"><em>jesse at pctest dot com</em></strong></a><a class="genanchor" href="#47973"> &para;</a><div class="date" title="2004-12-07 02:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47973">
<div class="phpcode"><code><span class="html">Solving 3DES incompatibilities with .NET's TripleDESCryptoServiceProvider<br /><br />mcrypt's 3DES only accepts 192 bit keys, but Microsoft's .NET and many other tools accept both 128 and 192 bit keys.<br />If your key is too short, mcrypt will 'helpfully' pad null characters onto the end, but .NET refuses to use a key where the last third is all null (this is a Bad Key). This prevents you from emulating mcrypt's "short key" behaviour in .NET.<br /><br />How to reconcile this? A little DES theory is in order<br />3DES runs the DES algorithm three times, using each third of your 192 bit key as the 64 bit DES key<br /><br />Encrypt Key1 -&gt; Decrypt Key2 -&gt; Encrypt Key3<br /><br />and both .NET and PHP's mcrypt do this the same way.<br />The problem arises in short key mode on .NET, since 128 bits is only two 64 bit DES keys<br />The algorithm that they use then is:<br /><br />Encrypt Key1 -&gt; Decrypt Key2 -&gt; Encrypt Key1<br /><br />mcrypt does not have this mode of operation natively.<br />but before you go and start running DES three times yourself, here's a Quick Fix<br /><span class="default">&lt;?php<br />$my_key </span><span class="keyword">= </span><span class="string">"12345678abcdefgh"</span><span class="keyword">; </span><span class="comment">// a 128 bit (16 byte) key<br /></span><span class="default">$my_key </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$my_key</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">); </span><span class="comment">// append the first 8 bytes onto the end<br /></span><span class="default">$secret </span><span class="keyword">= </span><span class="default">mcrypt_encrypt</span><span class="keyword">(</span><span class="default">MCRYPT_3DES</span><span class="keyword">, </span><span class="default">$my_key</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">MCRYPT_MODE_CBC</span><span class="keyword">, </span><span class="default">$iv</span><span class="keyword">);  </span><span class="comment">//CBC is the default mode in .NET<br /></span><span class="default">?&gt;<br /></span><br />And, like magic, it works.<br /><br />There's one more caveat: Data padding<br />mcrypt always pads data will the null character<br />but .NET has two padding modes: "Zeros" and "PKCS7"<br />Zeros is identical to the mcrypt scheme, but PKCS7 is the default.<br />PKCS7 isn't much more complex, though:<br />instead of nulls, it appends the total number of padding bytes (which means, for 3DES, it can be a value from 0x01 to 0x07)<br />if your plaintext is "ABC", it will be padded into:<br />0x41 0x42 0x43 0x05 0x05 0x05 0x05 0x05<br /><br />You can remove these from a decrypted string in PHP by counting the number of times that last character appears, and if it matches it's ordinal value, truncating the string by that many characters:<br /><span class="default">&lt;?php<br />    $block </span><span class="keyword">= </span><span class="default">mcrypt_get_block_size</span><span class="keyword">(</span><span class="string">'tripledes'</span><span class="keyword">, </span><span class="string">'cbc'</span><span class="keyword">);<br />    </span><span class="default">$packing </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">{</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">});<br />    if(</span><span class="default">$packing </span><span class="keyword">and (</span><span class="default">$packing </span><span class="keyword">&lt; </span><span class="default">$block</span><span class="keyword">)){<br />      for(</span><span class="default">$P </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">; </span><span class="default">$P </span><span class="keyword">&gt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) - </span><span class="default">$packing</span><span class="keyword">; </span><span class="default">$P</span><span class="keyword">--){<br />    if(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">{</span><span class="default">$P</span><span class="keyword">}) != </span><span class="default">$packing</span><span class="keyword">){<br />      </span><span class="default">$packing </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />      }<br />    }<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) - </span><span class="default">$packing</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And to pad a string that you intend to decrypt with .NET, just add the chr() value of the number of padding bytes:<br /><span class="default">&lt;?php<br />    $block </span><span class="keyword">= </span><span class="default">mcrypt_get_block_size</span><span class="keyword">(</span><span class="string">'tripledes'</span><span class="keyword">, </span><span class="string">'cbc'</span><span class="keyword">);<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$dat</span><span class="keyword">);<br />    </span><span class="default">$padding </span><span class="keyword">= </span><span class="default">$block </span><span class="keyword">- (</span><span class="default">$len </span><span class="keyword">% </span><span class="default">$block</span><span class="keyword">);<br />    </span><span class="default">$dat </span><span class="keyword">.= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$padding</span><span class="keyword">),</span><span class="default">$padding</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />That's all there is to it.<br />Knowing this, you can encrypt, decrypt, and duplicate exactly any .NET 3DES behaviour in PHP.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mcrypt-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mcrypt-encrypt.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mcrypt.php">Mcrypt Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
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
                                                <li class="current">
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
