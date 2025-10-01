<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gnupg_encrypt - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gnupg-encrypt.php">
 <link rel="shorturl" href="https://www.php.net/gnupg-encrypt">
 <link rel="alternate" href="https://www.php.net/gnupg-encrypt" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.gnupg.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gnupg-deletekey.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gnupg-encryptsign.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gnupg-encrypt.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gnupg-encrypt.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gnupg-encrypt.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gnupg-encrypt.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gnupg-encrypt.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gnupg-encrypt.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gnupg-encrypt.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gnupg-encrypt.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gnupg-encrypt.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gnupg-encrypt.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gnupg-encrypt.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Encrypts a given text" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gnupg_encrypt - Manual" />
<meta name="twitter:description" content="Encrypts a given text" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gnupg_encrypt - Manual" />
<meta itemprop="description" content="Encrypts a given text" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Encrypts a given text" />

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
        <a href="function.gnupg-encryptsign.php">
          gnupg_encryptsign &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gnupg-deletekey.php">
          &laquo; gnupg_deletekey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.gnupg.php'>GnuPG</a></li>      <li><a href='ref.gnupg.php'>GnuPG Functions</a></li>      </ul>
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
            <option value='en/function.gnupg-encrypt.php' selected="selected">English</option>
            <option value='de/function.gnupg-encrypt.php'>German</option>
            <option value='es/function.gnupg-encrypt.php'>Spanish</option>
            <option value='fr/function.gnupg-encrypt.php'>French</option>
            <option value='it/function.gnupg-encrypt.php'>Italian</option>
            <option value='ja/function.gnupg-encrypt.php'>Japanese</option>
            <option value='pt_BR/function.gnupg-encrypt.php'>Brazilian Portuguese</option>
            <option value='ru/function.gnupg-encrypt.php'>Russian</option>
            <option value='tr/function.gnupg-encrypt.php'>Turkish</option>
            <option value='uk/function.gnupg-encrypt.php'>Ukrainian</option>
            <option value='zh/function.gnupg-encrypt.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gnupg-encrypt" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gnupg_encrypt</h1>
  <p class="verinfo">(PECL gnupg &gt;= 0.1)</p><p class="refpurpose"><span class="refname">gnupg_encrypt</span> &mdash; <span class="dc-title">Encrypts a given text</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.gnupg-encrypt-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gnupg_encrypt</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$identifier</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$plaintext</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Encrypts the given <code class="parameter">plaintext</code> with the keys, which
   were set with <a href="function.gnupg-addencryptkey.php" class="link">gnupg_addencryptkey</a> before and
   returns the encrypted text.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.gnupg-encrypt-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">identifier</code></dt>
     <dd>
      <p class="para">The gnupg identifier, from a call to
<span class="function"><a href="function.gnupg-init.php" class="function">gnupg_init()</a></span> or <span class="classname"><strong class="classname">gnupg</strong></span>.</p>
     </dd>
    
    
     <dt><code class="parameter">plaintext</code></dt>
     <dd>
      <p class="para">
       The text being encrypted.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gnupg-encrypt-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    On success, this function returns the encrypted text.
    On failure, this function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.gnupg-encrypt-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3427">
    <p><strong>Example #1 Procedural <span class="function"><strong>gnupg_encrypt()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$res </span><span style="color: #007700">= </span><span style="color: #0000BB">gnupg_init</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">gnupg_addencryptkey</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">,</span><span style="color: #DD0000">"8660281B6051D071D94B5B230549F9DC851566DC"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$enc </span><span style="color: #007700">= </span><span style="color: #0000BB">gnupg_encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$res</span><span style="color: #007700">, </span><span style="color: #DD0000">"just a test"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$enc</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3428">
    <p><strong>Example #2 OO <span class="function"><strong>gnupg_encrypt()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$gpg </span><span style="color: #007700">= new </span><span style="color: #0000BB">gnupg</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$gpg</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addencryptkey</span><span style="color: #007700">(</span><span style="color: #DD0000">"8660281B6051D071D94B5B230549F9DC851566DC"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$enc </span><span style="color: #007700">= </span><span style="color: #0000BB">$gpg</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encrypt</span><span style="color: #007700">(</span><span style="color: #DD0000">"just a test"</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$enc</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gnupg/functions/gnupg-encrypt.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gnupg-encrypt%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gnupg-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gnupg-encrypt.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114809">  <div class="votes">
    <div id="Vu114809">
    <a href="/manual/vote-note.php?id=114809&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114809">
    <a href="/manual/vote-note.php?id=114809&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114809" title="84% like this...">
    13
    </div>
  </div>
  <a href="#114809" class="name">
  <strong class="user"><em>Mahbub Kabir</em></strong></a><a class="genanchor" href="#114809"> &para;</a><div class="date" title="2014-04-08 11:38"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114809">
<div class="phpcode"><code><span class="html">// to generate a key type in gpg --gen-key in the command line<br />// to export public key gpg --export -a "User Name" &gt; public.key<br /><br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">"GNUPGHOME=/tmp"</span><span class="keyword">);<br /><br /></span><span class="comment">// it assumes public key exists in the /tmp/keys folder<br /></span><span class="default">$publicKey </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">getenv</span><span class="keyword">(</span><span class="string">'GNUPGHOME'</span><span class="keyword">) . </span><span class="string">'/keys/public.key'</span><span class="keyword">);<br /><br />    </span><span class="default">$gpg </span><span class="keyword">= new </span><span class="default">gnupg</span><span class="keyword">();<br />    </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">seterrormode</span><span class="keyword">(</span><span class="default">gnupg</span><span class="keyword">::</span><span class="default">ERROR_EXCEPTION</span><span class="keyword">);<br />    </span><span class="default">$info </span><span class="keyword">= </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">import</span><span class="keyword">(</span><span class="default">$publicKey</span><span class="keyword">);<br />    </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">addencryptkey</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'fingerprint'</span><span class="keyword">]);<br /><br />    </span><span class="default">$uploadFileContent </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'/tmp/file-to-encrypt'</span><span class="keyword">);<br />    </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$uploadFileContent</span><span class="keyword">);<br />    echo </span><span class="default">$enc<br /><br />Hope this helps</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82594">  <div class="votes">
    <div id="Vu82594">
    <a href="/manual/vote-note.php?id=82594&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82594">
    <a href="/manual/vote-note.php?id=82594&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82594" title="80% like this...">
    12
    </div>
  </div>
  <a href="#82594" class="name">
  <strong class="user"><em>nick johnson</em></strong></a><a class="genanchor" href="#82594"> &para;</a><div class="date" title="2008-04-17 11:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82594">
<div class="phpcode"><code><span class="html">After spending some time trying to get this extension to work, I've found that you have to have the GNUPGHOME environment variable set so that the keychain can be found, and have it set equal to the .gnupg directory itself, not the apache/httpd user's home directory (which is what is shown in dan's example code).  below is an example of this and a simple function I was working on at the time to encrypt a piece of data for storage in a database.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// set the environment so gnupg can find the keyring<br />    </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"GNUPGHOME=/home/apache/.gnupg"</span><span class="keyword">);<br /><br />    function </span><span class="default">encrypt_string</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$fingerprint</span><span class="keyword">) {<br />        </span><span class="default">$res </span><span class="keyword">= </span><span class="default">gnupg_init</span><span class="keyword">();<br />        </span><span class="default">gnupg_addencryptkey</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$fingerprint</span><span class="keyword">);<br />        </span><span class="default">$enc </span><span class="keyword">= </span><span class="default">gnupg_encrypt</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />        return </span><span class="default">$enc</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126812">  <div class="votes">
    <div id="Vu126812">
    <a href="/manual/vote-note.php?id=126812&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126812">
    <a href="/manual/vote-note.php?id=126812&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126812" title="100% like this...">
    4
    </div>
  </div>
  <a href="#126812" class="name">
  <strong class="user"><em>Stressed dev. Permission issue (SELinux)</em></strong></a><a class="genanchor" href="#126812"> &para;</a><div class="date" title="2022-01-31 05:58"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126812">
<div class="phpcode"><code><span class="html">If you're using CentOS 8 and you're having folder permissions problems, remember to disable SELinux during development. (/etc/selinux/config), just change to disabled or permissive. Then when your project is going live switch it back to enforcing and add the proper se context.</span></code></div>
  </div>
 </div>
  <div class="note" id="73242">  <div class="votes">
    <div id="Vu73242">
    <a href="/manual/vote-note.php?id=73242&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73242">
    <a href="/manual/vote-note.php?id=73242&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73242" title="60% like this...">
    1
    </div>
  </div>
  <a href="#73242" class="name">
  <strong class="user"><em>paul at cressbrook dot co dot uk</em></strong></a><a class="genanchor" href="#73242"> &para;</a><div class="date" title="2007-02-14 04:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73242">
<div class="phpcode"><code><span class="html">Hi<br /><br />I found that the apache or httpd user (or whichever user the webserver is using to run) needed to have write access to the .gnupg directory for the gnupg_php functions to work. This could be your problem.  It seems a rather unsatisfactory feature of this module - gnupg keeps giving warnings that it is unsafe.</span></code></div>
  </div>
 </div>
  <div class="note" id="119502">  <div class="votes">
    <div id="Vu119502">
    <a href="/manual/vote-note.php?id=119502&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119502">
    <a href="/manual/vote-note.php?id=119502&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119502" title="57% like this...">
    1
    </div>
  </div>
  <a href="#119502" class="name">
  <strong class="user"><em>emiliocolombo3 at gmail dot com</em></strong></a><a class="genanchor" href="#119502"> &para;</a><div class="date" title="2016-06-23 02:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119502">
<div class="phpcode"><code><span class="html">Examples<br /><br />Getting Key Information<br /><br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'GNUPGHOME=/home/sender/.gnupg'</span><span class="keyword">);<br /><br /></span><span class="comment">// create new GnuPG object<br /></span><span class="default">$gpg </span><span class="keyword">= new </span><span class="default">gnupg</span><span class="keyword">();<br /><br /></span><span class="comment">// throw exception if error occurs<br /></span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">seterrormode</span><span class="keyword">(</span><span class="default">gnupg</span><span class="keyword">::</span><span class="default">ERROR_EXCEPTION</span><span class="keyword">); <br /><br /></span><span class="comment">// get list of keys containing string 'example'<br /></span><span class="keyword">try {<br />  </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">keyinfo</span><span class="keyword">(</span><span class="string">'example'</span><span class="keyword">);<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  echo </span><span class="string">'ERROR: ' </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />Encrypt a Simple Mail<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// set path to keyring directory<br />// set path to keyring directory<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'GNUPGHOME=/home/sender/.gnupg'</span><span class="keyword">);<br /><br /></span><span class="comment">// create new GnuPG object<br /></span><span class="default">$gpg </span><span class="keyword">= new </span><span class="default">gnupg</span><span class="keyword">();<br /><br /></span><span class="comment">// throw exception if error occurs<br /></span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">seterrormode</span><span class="keyword">(</span><span class="default">gnupg</span><span class="keyword">::</span><span class="default">ERROR_EXCEPTION</span><span class="keyword">); <br /><br /></span><span class="comment">// recipient's email address<br /></span><span class="default">$recipient </span><span class="keyword">= </span><span class="string">'dgar@example.org'</span><span class="keyword">;<br /><br /></span><span class="comment">// plaintext message<br /></span><span class="default">$plaintext </span><span class="keyword">= <br /></span><span class="string">"Dear Dave,\n<br />  The answer is 42.\n<br />John"</span><span class="keyword">;<br /><br /></span><span class="comment">// find key matching email address<br />// encrypt plaintext message<br />// display and also write to file<br /></span><span class="keyword">try {<br />  </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">addencryptkey</span><span class="keyword">(</span><span class="default">$recipient</span><span class="keyword">);<br />  </span><span class="default">$ciphertext </span><span class="keyword">= </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">encrypt</span><span class="keyword">(</span><span class="default">$plaintext</span><span class="keyword">);<br />  echo </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">$ciphertext </span><span class="keyword">. </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />  </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'/tmp/ciphertext.gpg'</span><span class="keyword">, </span><span class="default">$ciphertext</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  die(</span><span class="string">'ERROR: ' </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />}<br /></span><span class="default">?&gt;<br /></span><br />Decryption The Mail<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// set path to keyring directory<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'GNUPGHOME=/home/recipient/.gnupg'</span><span class="keyword">);<br /><br /></span><span class="comment">// create new GnuPG object<br /></span><span class="default">$gpg </span><span class="keyword">= new </span><span class="default">gnupg</span><span class="keyword">();<br /><br /></span><span class="comment">// throw exception if error occurs<br /></span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">seterrormode</span><span class="keyword">(</span><span class="default">gnupg</span><span class="keyword">::</span><span class="default">ERROR_EXCEPTION</span><span class="keyword">); <br /><br /></span><span class="comment">// recipient's email address<br /></span><span class="default">$recipient </span><span class="keyword">= </span><span class="string">'dgar@example.org'</span><span class="keyword">;<br /><br /></span><span class="comment">// ciphertext message<br /></span><span class="default">$ciphertext </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'/tmp/ciphertext.gpg'</span><span class="keyword">);<br /><br /></span><span class="comment">// register secret key by providing passphrase<br />// decrypt ciphertext with secret key<br />// display plaintext message<br /></span><span class="keyword">try {<br />  </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">adddecryptkey</span><span class="keyword">(</span><span class="default">$recipient</span><span class="keyword">, </span><span class="string">'guessme'</span><span class="keyword">);<br />  </span><span class="default">$plaintext </span><span class="keyword">= </span><span class="default">$gpg</span><span class="keyword">-&gt;</span><span class="default">decrypt</span><span class="keyword">(</span><span class="default">$ciphertext</span><span class="keyword">);<br />  echo </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">$plaintext </span><span class="keyword">. </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  die(</span><span class="string">'ERROR: ' </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81229">  <div class="votes">
    <div id="Vu81229">
    <a href="/manual/vote-note.php?id=81229&amp;page=function.gnupg-encrypt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81229">
    <a href="/manual/vote-note.php?id=81229&amp;page=function.gnupg-encrypt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81229" title="53% like this...">
    2
    </div>
  </div>
  <a href="#81229" class="name">
  <strong class="user"><em>dan at f-box dot org</em></strong></a><a class="genanchor" href="#81229"> &para;</a><div class="date" title="2008-02-19 07:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81229">
<div class="phpcode"><code><span class="html">This is a simple example of a Procedural use of import addencryptkey and encrypt. Obviously in a real world use you would only be importing the key once.<br /><br /><span class="default">&lt;?php<br /><br />putenv</span><span class="keyword">(</span><span class="string">"GNUPGHOME=/tmp"</span><span class="keyword">);<br /></span><span class="default">$pubkey </span><span class="keyword">= </span><span class="string">"-----BEGIN PGP PUBLIC KEY BLOCK-----<br />Version: GnuPG v1.2.6 (GNU/Linux)<br /><br />mQGiBEe68W8RBACVuFuv4d+roDSCdRO1SuO8dQwds4VTjVOqgVKQtq6+8Fe95RY8<br />BAf1IyLj4bxvWPhr0wZdVwTosD/sFoPtdCyhVcF932nP0GLHsTEeVwSz9mid22HI<br />O4Kmwj2kE+I+C9QdzAg0zaWQnVaF9UC7pIdMR6tEnADI8nkVDdZ+zb2ziwCg6Yqu<br />tk3KAzKRT1SNUzTE/n9y2PED/1tIWiXfGBGzseX0W/e1G+MjuolWOXv4BXeiFGmn<br />8wnHsQ4Z4Tzk+ag0k+6pZZXjcL6Le486wpZ9MAe6LM31XDpQDVtyCL8t63nvQpB8<br />TUimbseBZMb3TytCubNLGFe5FnNLGDciElcD09d2xC6Xv6zE2jj4GtBW1bXqYWtl<br />jm0PA/4u6av6o6pIgLRfAawspr8kaeZ8+FU4NbIiS6xZmBUEQ/o7q95VKGgFVKBi<br />ugDOlnbgSzBIwSlsRVT2ivu/XVWnhQaRCotSm3AzOc2XecqrJ6F1gqk0n+yP/1h1<br />yeTvvfS5zgqNTG2UmovjVsKFzaDqmsYZ+sYfwc209z9PY+6FuLQnQXBhY2hlVGVz<br />dCAoVGVzdGluZykgPGFwYWNoZUBsb2NhbGhvc3Q+iF4EExECAB4FAke68W8CGwMG<br />CwkIBwMCAxUCAwMWAgECHgECF4AACgkQJE9COu2PFIEGDwCglArzAza13xjbdR04<br />DQ1U9FWQhMYAnRrWQeGTRm+BYm6SghNpDOKcmMqruQENBEe68XAQBADPIO+JFe5t<br />BQmI4l60bNMNSUqsL0TtIP8G6Bpd8q2xBOemHCLfGT9Y5DN6k0nneBQxajSfWBQ5<br />ZdKFwV5ezICz9fnGisEf9LPSwctfUIcvumbcPPsrUOUZX7BuCHrcfy1nebS3myO/<br />ScTKpW8Wz8AjpKTBG55DMkXSvnx+hS+PEwADBQP/dNnVlKYdNKA70B4QTEzfvF+E<br />5lyiauyT41SQoheTMhrs/3RIqUy7WWn3B20aTutHWWYXdYV+E85/CarhUmLNZGA2<br />tml1Mgl6F2myQ/+MiKi/aj9NVhcuz38OK/IAze7kNJJqK+UEWblB2Wfa31/9nNzv<br />ewVHa1xHtUyVDaewAACISQQYEQIACQUCR7rxcAIbDAAKCRAkT0I67Y8UgRwEAKDT<br />L6DwyEZGLTpAqy2OLUH7SFKm2ACgr3tnPuPFlBtHx0OqY4gGiNMJHXE=<br />=jHPH<br />-----END PGP PUBLIC KEY BLOCK-----"</span><span class="keyword">;<br /><br /></span><span class="default">$enc </span><span class="keyword">= (</span><span class="default">null</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">gnupg_init</span><span class="keyword">();<br />echo </span><span class="string">"gnupg_init RTV = &lt;br/&gt;&lt;pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">$rtv </span><span class="keyword">= </span><span class="default">gnupg_import</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$pubkey</span><span class="keyword">);<br />echo </span><span class="string">"gnupg_import RTV = &lt;br/&gt;&lt;pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$rtv</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">$rtv </span><span class="keyword">= </span><span class="default">gnupg_addencryptkey</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="string">"C25F29936D9046D73A77DCF8244F423AED8F1481"</span><span class="keyword">);<br />echo </span><span class="string">"gnupg_addencryptkey RTV = &lt;br /&gt;&lt;pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$rtv</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;\n"</span><span class="keyword">;<br /></span><span class="default">$enc </span><span class="keyword">= </span><span class="default">gnupg_encrypt</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">, </span><span class="string">"just a test to see if anything works"</span><span class="keyword">);<br />echo </span><span class="string">"Encrypted Data: " </span><span class="keyword">. </span><span class="default">$enc </span><span class="keyword">. </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gnupg-encrypt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gnupg-encrypt.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.gnupg.php">GnuPG Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.gnupg-adddecryptkey.php" title="gnupg_&#8203;adddecryptkey">gnupg_&#8203;adddecryptkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-addencryptkey.php" title="gnupg_&#8203;addencryptkey">gnupg_&#8203;addencryptkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-addsignkey.php" title="gnupg_&#8203;addsignkey">gnupg_&#8203;addsignkey</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-cleardecryptkeys.php" title="gnupg_&#8203;cleardecryptkeys">gnupg_&#8203;cleardecryptkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-clearencryptkeys.php" title="gnupg_&#8203;clearencryptkeys">gnupg_&#8203;clearencryptkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-clearsignkeys.php" title="gnupg_&#8203;clearsignkeys">gnupg_&#8203;clearsignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-decrypt.php" title="gnupg_&#8203;decrypt">gnupg_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-decryptverify.php" title="gnupg_&#8203;decryptverify">gnupg_&#8203;decryptverify</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-deletekey.php" title="gnupg_&#8203;deletekey">gnupg_&#8203;deletekey</a>
                        </li>
                                                <li class="current">
                            <a href="function.gnupg-encrypt.php" title="gnupg_&#8203;encrypt">gnupg_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-encryptsign.php" title="gnupg_&#8203;encryptsign">gnupg_&#8203;encryptsign</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-export.php" title="gnupg_&#8203;export">gnupg_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-getengineinfo.php" title="gnupg_&#8203;getengineinfo">gnupg_&#8203;getengineinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-geterror.php" title="gnupg_&#8203;geterror">gnupg_&#8203;geterror</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-geterrorinfo.php" title="gnupg_&#8203;geterrorinfo">gnupg_&#8203;geterrorinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-getprotocol.php" title="gnupg_&#8203;getprotocol">gnupg_&#8203;getprotocol</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-gettrustlist.php" title="gnupg_&#8203;gettrustlist">gnupg_&#8203;gettrustlist</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-import.php" title="gnupg_&#8203;import">gnupg_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-init.php" title="gnupg_&#8203;init">gnupg_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-keyinfo.php" title="gnupg_&#8203;keyinfo">gnupg_&#8203;keyinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-listsignatures.php" title="gnupg_&#8203;listsignatures">gnupg_&#8203;listsignatures</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-setarmor.php" title="gnupg_&#8203;setarmor">gnupg_&#8203;setarmor</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-seterrormode.php" title="gnupg_&#8203;seterrormode">gnupg_&#8203;seterrormode</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-setsignmode.php" title="gnupg_&#8203;setsignmode">gnupg_&#8203;setsignmode</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-sign.php" title="gnupg_&#8203;sign">gnupg_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.gnupg-verify.php" title="gnupg_&#8203;verify">gnupg_&#8203;verify</a>
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
