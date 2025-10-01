<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: password_hash - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.password-hash.php">
 <link rel="shorturl" href="https://www.php.net/password-hash">
 <link rel="alternate" href="https://www.php.net/password-hash" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.password.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.password-get-info.php">
 <link rel="next" href="https://www.php.net/manual/en/function.password-needs-rehash.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.password-hash.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.password-hash.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.password-hash.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.password-hash.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.password-hash.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.password-hash.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.password-hash.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.password-hash.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.password-hash.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.password-hash.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.password-hash.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a password hash" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: password_hash - Manual" />
<meta name="twitter:description" content="Creates a password hash" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: password_hash - Manual" />
<meta itemprop="description" content="Creates a password hash" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a password hash" />

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
        <a href="function.password-needs-rehash.php">
          password_needs_rehash &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.password-get-info.php">
          &laquo; password_get_info        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.password.php'>Password Hashing</a></li>      <li><a href='ref.password.php'>Password Hashing Functions</a></li>      </ul>
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
            <option value='en/function.password-hash.php' selected="selected">English</option>
            <option value='de/function.password-hash.php'>German</option>
            <option value='es/function.password-hash.php'>Spanish</option>
            <option value='fr/function.password-hash.php'>French</option>
            <option value='it/function.password-hash.php'>Italian</option>
            <option value='ja/function.password-hash.php'>Japanese</option>
            <option value='pt_BR/function.password-hash.php'>Brazilian Portuguese</option>
            <option value='ru/function.password-hash.php'>Russian</option>
            <option value='tr/function.password-hash.php'>Turkish</option>
            <option value='uk/function.password-hash.php'>Ukrainian</option>
            <option value='zh/function.password-hash.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.password-hash" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">password_hash</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">password_hash</span> &mdash; <span class="dc-title">Creates a password hash</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.password-hash-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>password_hash</strong></span>(<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> <code class="parameter">$algo</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>password_hash()</strong></span> creates a new password hash using a strong one-way hashing
   algorithm.
  </p>
  <p class="simpara">
   The following algorithms are currently supported:
  </p>
  <p class="para">
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-default">PASSWORD_DEFAULT</a></code></strong> - Use the bcrypt algorithm (default as of PHP 5.5.0).
      Note that this constant is designed to change over time as new and stronger algorithms are added
      to PHP. For that reason, the length of the result from using this identifier can change over
      time. Therefore, it is recommended to store the result in a database column that can expand
      beyond 60 bytes (255 bytes would be a good choice).
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong> - Use the bcrypt algorithm to
      create the hash. This will produce a standard <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> compatible hash using
      the <code class="literal">$2y$</code> identifier.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-argon2i">PASSWORD_ARGON2I</a></code></strong> - Use the Argon2i hashing algorithm to create the hash.
      This algorithm is only available if PHP has been compiled with Argon2 support.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong> - Use the Argon2id hashing algorithm to create the hash.
      This algorithm is only available if PHP has been compiled with Argon2 support.
     </span>
    </li>
   </ul>
  </p>
  <p class="simpara">
   Supported options for <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong>:
  </p>
  <p class="para">
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      <code class="literal">salt</code> (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>) - to manually provide a salt to use when hashing the password.
      Note that this will override and prevent a salt from being automatically generated.
     </p>
     <p class="para">
      If omitted, a random salt will be generated by <span class="function"><strong>password_hash()</strong></span> for
      each password hashed. This is the intended mode of operation.
     </p>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">
       The salt option is deprecated. It is now
       preferred to simply use the salt that is generated by default.
       As of PHP 8.0.0, an explicitly given salt is ignored.
      </p>
     </div>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">cost</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>) - which denotes the algorithmic cost that should be used. 
      Examples of these values can be found on the <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> page.
     </p>
     <p class="para">
      If omitted, a default value of <code class="literal">12</code> will be used. This is a good
      baseline cost, but it should be adjusted depending on hardware used.
     </p>
    </li>
   </ul>
  </p>
  <p class="simpara">
   Supported options for <strong><code><a href="password.constants.php#constant.password-argon2i">PASSWORD_ARGON2I</a></code></strong>
   and <strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong>:
  </p>
  <p class="para">
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      <code class="literal">memory_cost</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>) - Maximum memory (in kibibytes) that may 
      be used to compute the Argon2 hash. Defaults to <strong><code><a href="password.constants.php#constant.password-argon2-default-memory-cost">PASSWORD_ARGON2_DEFAULT_MEMORY_COST</a></code></strong>.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">time_cost</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>) - Maximum amount of time it may 
      take to compute the Argon2 hash. Defaults to <strong><code><a href="password.constants.php#constant.password-argon2-default-time-cost">PASSWORD_ARGON2_DEFAULT_TIME_COST</a></code></strong>.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">threads</code> (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>) - Number of threads to use for computing 
      the Argon2 hash. Defaults to <strong><code><a href="password.constants.php#constant.password-argon2-default-threads">PASSWORD_ARGON2_DEFAULT_THREADS</a></code></strong>.
     </p>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">
        Only available when PHP uses libargon2, not with libsodium implementation.
      </p>
     </div>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.password-hash-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">password</code></dt>
    <dd>
     <p class="para">
      The user&#039;s password.
     </p>
      <div class="caution"><strong class="caution">Caution</strong>
       <p class="para">
        Using the <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong> as the
        algorithm, will result
        in the <code class="parameter">password</code> parameter being truncated to a
        maximum length of 72 bytes.
       </p>
      </div>
    </dd>
   
   
    <dt><code class="parameter">algo</code></dt>
    <dd>
     <p class="para">
      A <a href="password.constants.php" class="link">password algorithm constant</a> denoting the algorithm to use when hashing the password.
     </p>
    </dd>
   
   
    <dt><code class="parameter">options</code></dt>
    <dd>
     <p class="para">
      An associative array containing options. See the <a href="password.constants.php" class="link">password algorithm constants</a> for documentation on the supported options for each algorithm.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.password-hash-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the hashed password.
  </p>
  <p class="para">
   The used algorithm, cost and salt are returned as part of the hash. Therefore,
   all information that&#039;s needed to verify the hash is included in it. This allows
   the <span class="function"><a href="function.password-verify.php" class="function">password_verify()</a></span> function to verify the hash without
   needing separate storage for the salt or algorithm information.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.password-hash-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        The default value of the <code class="literal">cost</code> option of the
        <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong> algorithm was increased from
        <code class="literal">10</code> to <code class="literal">12</code>.
       </td>
      </tr>

      <tr>
       <td>8.3.0</td>
       <td>
        <span class="function"><strong>password_hash()</strong></span> now sets the underlying
        <span class="exceptionname"><a href="class.random-randomexception.php" class="exceptionname">Random\RandomException</a></span> as the
        <span class="property"><a href="class.exception.php#exception.props.previous">Exception::$previous</a></span> exception when a
        <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> is thrown due to a failure
        in the salt generation.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        <span class="function"><strong>password_hash()</strong></span> no longer returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure, instead a
        <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown if the password hashing algorithm
        is not valid, or an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> if the password hashing failed
        for an unknown error.
       </td>
      </tr>

      <tr>
       <td>8.0.0</td>
       <td>
        The <code class="parameter">algo</code> parameter is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The <code class="parameter">algo</code> parameter expects a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> now, but still accepts
        <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s for backward compatibility.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        The sodium extension provides an alternative implementation for Argon2 passwords.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Support for Argon2id passwords using <strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong> was added.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        Support for Argon2i passwords using <strong><code><a href="password.constants.php#constant.password-argon2i">PASSWORD_ARGON2I</a></code></strong> was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.password-hash-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1054">
    <p><strong>Example #1 <span class="function"><strong>password_hash()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #DD0000">"rasmuslerdorf"</span><span style="color: #007700">, </span><span style="color: #0000BB">PASSWORD_DEFAULT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.</pre>
</div>
    </div>
   </div>
  </p> 
  <p class="para">
   <div class="example" id="example-1055">
    <p><strong>Example #2 <span class="function"><strong>password_hash()</strong></span> example setting cost manually</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$options </span><span style="color: #007700">= [<br />    </span><span style="color: #FF8000">// Increase the bcrypt cost from 12 to 13.<br />    </span><span style="color: #DD0000">'cost' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">13</span><span style="color: #007700">,<br />];<br />echo </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #DD0000">"rasmuslerdorf"</span><span style="color: #007700">, </span><span style="color: #0000BB">PASSWORD_BCRYPT</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">$2y$13$xeDfQumlmdm0Sco.4qmH1OGfUUmOcuRmfae0dPJhjX1Bq0yYhqbNi</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1056">
    <p><strong>Example #3 <span class="function"><strong>password_hash()</strong></span> example finding a good cost</strong></p>
    <div class="example-contents"><p>
     This code will benchmark the machine to determine how high of a cost can be used
     without deteriorating user experience. It is recommended to set the highest cost
     that does not slow down other operations the machine needs to perform. 11 is a
     good baseline, and more is better if the machine is fast enough. The code below
     aims for ≤ 350 milliseconds stretching time, which is an appropriate delay for
     systems handling interactive logins.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$timeTarget </span><span style="color: #007700">= </span><span style="color: #0000BB">0.350</span><span style="color: #007700">; </span><span style="color: #FF8000">// 350 milliseconds<br /><br /></span><span style="color: #0000BB">$cost </span><span style="color: #007700">= </span><span style="color: #0000BB">11</span><span style="color: #007700">;<br />do {<br />    </span><span style="color: #0000BB">$cost</span><span style="color: #007700">++;<br />    </span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #DD0000">"test"</span><span style="color: #007700">, </span><span style="color: #0000BB">PASSWORD_BCRYPT</span><span style="color: #007700">, [</span><span style="color: #DD0000">"cost" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$cost</span><span style="color: #007700">]);<br />    </span><span style="color: #0000BB">$end </span><span style="color: #007700">= </span><span style="color: #0000BB">microtime</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />} while ((</span><span style="color: #0000BB">$end </span><span style="color: #007700">- </span><span style="color: #0000BB">$start</span><span style="color: #007700">) &lt; </span><span style="color: #0000BB">$timeTarget</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Appropriate Cost Found: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$cost </span><span style="color: #007700">- </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Appropriate Cost Found: 13</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1057">
    <p><strong>Example #4 <span class="function"><strong>password_hash()</strong></span> example using Argon2i</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Argon2i hash: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">password_hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'rasmuslerdorf'</span><span style="color: #007700">, </span><span style="color: #0000BB">PASSWORD_ARGON2I</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Argon2i hash: $argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.password-hash-notes">
  <h3 class="title">Notes</h3>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    It is strongly recommended not to provide an explicit salt for this function.
    A secure salt will automatically be created if no salt is specified.
   </p>
   <p class="para">
    As noted above, providing the <code class="literal">salt</code> option in PHP 7.0.0
    will generate a deprecation warning. Support for providing a salt explicitly
    has been removed in PHP 8.0.0.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is recommended to test this function on the machine used, adjusting the cost parameter(s)
    so that execution of the function takes less than 350 milliseconds for interactive logins.
    The script in the above example will help choosing an appropriate bcrypt cost for the given
    machine.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Updates to supported algorithms by this function (or changes to the default one) must follow 
    the following rules:
   </span>
   <p class="para">
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
      Any new algorithm must be in core for at least 1 full release of PHP
      prior to becoming default. So if, for example, a new algorithm is added
      in 7.5.5, it would not be eligible for default until 7.7 (since 7.6
      would be the first full release). But if a different algorithm was added
      in 7.6.0, it would also be eligible for default at 7.7.0.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       The default should only change in a full release (7.3.0, 8.0.0, etc)
       and not in a revision release.  The only exception to this is in an
       emergency when a critical security flaw is found in the current
       default.
      </span>
     </li>
    </ul>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.password-hash-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.password-verify.php" class="function" rel="rdfs-seeAlso">password_verify()</a> - Verifies that a password matches a hash</span></li>
    <li><span class="function"><a href="function.password-needs-rehash.php" class="function" rel="rdfs-seeAlso">password_needs_rehash()</a> - Checks if the given hash matches the given options</span></li>
    <li><span class="function"><a href="function.crypt.php" class="function" rel="rdfs-seeAlso">crypt()</a> - One-way string hashing</span></li>
    <li><span class="function"><a href="function.sodium-crypto-pwhash-str.php" class="function" rel="rdfs-seeAlso">sodium_crypto_pwhash_str()</a> - Get an ASCII-encoded hash</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/password/functions/password-hash.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.password-hash%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.password-hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.password-hash.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124138">  <div class="votes">
    <div id="Vu124138">
    <a href="/manual/vote-note.php?id=124138&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124138">
    <a href="/manual/vote-note.php?id=124138&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124138" title="76% like this...">
    155
    </div>
  </div>
  <a href="#124138" class="name">
  <strong class="user"><em>phpnetcomment201908 at lucb1e dot com</em></strong></a><a class="genanchor" href="#124138"> &para;</a><div class="date" title="2019-08-25 02:17"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124138">
<div class="phpcode"><code><span class="html">Since 2017, NIST recommends using a secret input when hashing memorized secrets such as passwords. By mixing in a secret input (commonly called a "pepper"), one prevents an attacker from brute-forcing the password hashes altogether, even if they have the hash and salt. For example, an SQL injection typically affects only the database, not files on disk, so a pepper stored in a config file would still be out of reach for the attacker. A pepper must be randomly generated once and can be the same for all users. Many password leaks could have been made completely useless if site owners had done this.<br /><br />Since there is no pepper parameter for password_hash (even though Argon2 has a "secret" parameter, PHP does not allow to set it), the correct way to mix in a pepper is to use hash_hmac(). The "add note" rules of php.net say I can't link external sites, so I can't back any of this up with a link to NIST, Wikipedia, posts from the security stackexchange site that explain the reasoning, or anything... You'll have to verify this manually. The code:<br /><br />// config.conf<br />pepper=c1isvFdxMDdmjOlvxpecFw<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// register.php<br /></span><span class="default">$pepper </span><span class="keyword">= </span><span class="default">getConfigVariable</span><span class="keyword">(</span><span class="string">"pepper"</span><span class="keyword">);<br /></span><span class="default">$pwd </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">];<br /></span><span class="default">$pwd_peppered </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="string">"sha256"</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">, </span><span class="default">$pepper</span><span class="keyword">);<br /></span><span class="default">$pwd_hashed </span><span class="keyword">= </span><span class="default">password_hash</span><span class="keyword">(</span><span class="default">$pwd_peppered</span><span class="keyword">, </span><span class="default">PASSWORD_ARGON2ID</span><span class="keyword">);<br /></span><span class="default">add_user_to_database</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$pwd_hashed</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">// login.php<br /></span><span class="default">$pepper </span><span class="keyword">= </span><span class="default">getConfigVariable</span><span class="keyword">(</span><span class="string">"pepper"</span><span class="keyword">);<br /></span><span class="default">$pwd </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">];<br /></span><span class="default">$pwd_peppered </span><span class="keyword">= </span><span class="default">hash_hmac</span><span class="keyword">(</span><span class="string">"sha256"</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">, </span><span class="default">$pepper</span><span class="keyword">);<br /></span><span class="default">$pwd_hashed </span><span class="keyword">= </span><span class="default">get_pwd_from_db</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">);<br />if (</span><span class="default">password_verify</span><span class="keyword">(</span><span class="default">$pwd_peppered</span><span class="keyword">, </span><span class="default">$pwd_hashed</span><span class="keyword">)) {<br />    echo </span><span class="string">"Password matches."</span><span class="keyword">;<br />}<br />else {<br />    echo </span><span class="string">"Password incorrect."</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Note that this code contains a timing attack that leaks whether the username exists. But my note was over the length limit so I had to cut this paragraph out.<br /><br />Also note that the pepper is useless if leaked or if it can be cracked. Consider how it might be exposed, for example different methods of passing it to a docker container. Against cracking, use a long randomly generated value (like in the example above), and change the pepper when you do a new install with a clean user database. Changing the pepper for an existing database is the same as changing other hashing parameters: you can either wrap the old value in a new one and layer the hashing (more complex), you compute the new password hash whenever someone logs in (leaving old users at risk, so this might be okay depending on what the reason is that you're upgrading).<br /><br />Why does this work? Because an attacker does the following after stealing the database:<br /><br />password_verify("a", $stolen_hash)<br />password_verify("b", $stolen_hash)<br />...<br />password_verify("z", $stolen_hash)<br />password_verify("aa", $stolen_hash)<br />etc.<br /><br />(More realistically, they use a cracking dictionary, but in principle, the way to crack a password hash is by guessing. That's why we use special algorithms: they are slower, so each verify() operation will be slower, so they can try much fewer passwords per hour of cracking.)<br /><br />Now what if you used that pepper? Now they need to do this:<br /><br />password_verify(hmac_sha256("a", $secret), $stolen_hash)<br /><br />Without that $secret (the pepper), they can't do this computation. They would have to do:<br /><br />password_verify(hmac_sha256("a", "a"), $stolen_hash)<br />password_verify(hmac_sha256("a", "b"), $stolen_hash)<br />...<br />etc., until they found the correct pepper.<br /><br />If your pepper contains 128 bits of entropy, and so long as hmac-sha256 remains secure (even MD5 is technically secure for use in hmac: only its collision resistance is broken, but of course nobody would use MD5 because more and more flaws are found), this would take more energy than the sun outputs. In other words, it's currently impossible to crack a pepper that strong, even given a known password and salt.</span></code></div>
  </div>
 </div>
  <div class="note" id="129484">  <div class="votes">
    <div id="Vu129484">
    <a href="/manual/vote-note.php?id=129484&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129484">
    <a href="/manual/vote-note.php?id=129484&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129484" title="80% like this...">
    6
    </div>
  </div>
  <a href="#129484" class="name">
  <strong class="user"><em>fullstadev at gmail dot com</em></strong></a><a class="genanchor" href="#129484"> &para;</a><div class="date" title="2024-05-14 12:48"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129484">
<div class="phpcode"><code><span class="html">Similar to another post made here about the use of strings holding null-bytes within password_hash(), I wanted to be a little more precise, as we've had quite some issues now. <br /><br />I've had a project of an application generating random hashes (CSPRN). What they've done is that they've used random_bytes(32), and the applied password_hash() to that obtained string, with the bcrypt algorithm. <br /><br />This on one side led to the fact that sometimes, random_bytes() generated a string with null-bytes, actually resulting to an error in their call to password_hash() (PHP v 8.2.18). Thanks to that ("Bcrypt password must not contain a null character") I modified the the function generating random hashes to encoding the obtained binary random string with random_bytes() using bin2hex() (or base64 or whatever), to assure that the string to be hashed has no null-bytes. <br /><br />I then just wanted to add that, when you use the bcrypt algorithm, make sure to remember that bcrypt truncates your password at 72 characters. When encoding your random string (e.g. generated using random_bytes()), this will convert your string from binary to hex representation, e.g. doubling its length. What you generally want is that your entire password is still contained within the 72 characters limit, to be sure that your entire "random information" gets hashes, and not only part of it.</span></code></div>
  </div>
 </div>
  <div class="note" id="113397">  <div class="votes">
    <div id="Vu113397">
    <a href="/manual/vote-note.php?id=113397&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113397">
    <a href="/manual/vote-note.php?id=113397&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113397" title="65% like this...">
    46
    </div>
  </div>
  <a href="#113397" class="name">
  <strong class="user"><em>nicoSWD</em></strong></a><a class="genanchor" href="#113397"> &para;</a><div class="date" title="2013-10-06 03:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113397">
<div class="phpcode"><code><span class="html">I agree with martinstoeckli,<br /><br />don't create your own salts unless you really know what you're doing.<br /><br />By default, it'll use /dev/urandom to create the salt, which is based on noise from device drivers.<br /><br />And on Windows, it uses CryptGenRandom().<br /><br />Both have been around for many years, and are considered secure for cryptography (the former probably more than the latter, though).<br /><br />Don't try to outsmart these defaults by creating something less secure. Anything that is based on rand(), mt_rand(), uniqid(), or variations of these is *not* good.</span></code></div>
  </div>
 </div>
  <div class="note" id="128853">  <div class="votes">
    <div id="Vu128853">
    <a href="/manual/vote-note.php?id=128853&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128853">
    <a href="/manual/vote-note.php?id=128853&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128853" title="73% like this...">
    7
    </div>
  </div>
  <a href="#128853" class="name">
  <strong class="user"><em>bhare at duck dot com</em></strong></a><a class="genanchor" href="#128853"> &para;</a><div class="date" title="2023-09-03 04:36"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128853">
<div class="phpcode"><code><span class="html">If you are you going to use bcrypt then you should pepper the passwords with random large string, as commodity hardware can break bcrypt 8 character passwords within an hour; <a href="https://www.tomshardware.com/news/eight-rtx-4090s-can-break-passwords-in-under-an-hour" rel="nofollow" target="_blank">https://www.tomshardware.com/news/eight-rtx-4090s-can-break-passwords-in-under-an-hour</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118603">  <div class="votes">
    <div id="Vu118603">
    <a href="/manual/vote-note.php?id=118603&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118603">
    <a href="/manual/vote-note.php?id=118603&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118603" title="63% like this...">
    33
    </div>
  </div>
  <a href="#118603" class="name">
  <strong class="user"><em>Lyo Mi</em></strong></a><a class="genanchor" href="#118603"> &para;</a><div class="date" title="2016-01-06 06:11"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118603">
<div class="phpcode"><code><span class="html">Please note that password_hash will ***truncate*** the password at the first NULL-byte.<br /><br /><a href="http://blog.ircmaxell.com/2015/03/security-issue-combining-bcrypt-with.html" rel="nofollow" target="_blank">http://blog.ircmaxell.com/2015/03/security-issue-combining-bcrypt-with.html</a><br /><br />If you use anything as an input that can generate NULL bytes (sha1 with raw as true, or if NULL bytes can naturally end up in people's passwords), you may make your application much less secure than what you might be expecting.<br /><br />The password <br />$a = "\01234567"; <br />is zero bytes long (an empty password) for bcrypt.<br /><br />The workaround, of course, is to make sure you don't ever pass NULL-bytes to password_hash.</span></code></div>
  </div>
 </div>
  <div class="note" id="111620">  <div class="votes">
    <div id="Vu111620">
    <a href="/manual/vote-note.php?id=111620&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111620">
    <a href="/manual/vote-note.php?id=111620&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111620" title="56% like this...">
    18
    </div>
  </div>
  <a href="#111620" class="name">
  <strong class="user"><em>martinstoeckli</em></strong></a><a class="genanchor" href="#111620"> &para;</a><div class="date" title="2013-03-08 10:36"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111620">
<div class="phpcode"><code><span class="html">In most cases it is best to omit the salt parameter. Without this parameter, the function will generate a cryptographically safe salt, from the random source of the operating system.</span></code></div>
  </div>
 </div>
  <div class="note" id="124294">  <div class="votes">
    <div id="Vu124294">
    <a href="/manual/vote-note.php?id=124294&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124294">
    <a href="/manual/vote-note.php?id=124294&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124294" title="57% like this...">
    6
    </div>
  </div>
  <a href="#124294" class="name">
  <strong class="user"><em>ms1 at rdrecs dot com</em></strong></a><a class="genanchor" href="#124294"> &para;</a><div class="date" title="2019-10-14 05:07"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124294">
<div class="phpcode"><code><span class="html">Timing attacks simply put, are attacks that can calculate what characters of the password are due to speed of the execution.<br /><br />More at...<br /><a href="https://paragonie.com/blog/2015/11/preventing-timing-attacks-on-string-comparison-with-double-hmac-strategy" rel="nofollow" target="_blank">https://paragonie.com/blog/2015/11/preventing-timing-attacks-on-string-comparison-with-double-hmac-strategy</a><br /><br />I have added code to phpnetcomment201908 at lucb1e dot com's suggestion to make this possible "timing attack" more difficult using the code phpnetcomment201908 at lucb1e dot com posted.<br /><br />$pph_strt = microtime(true);<br /><br />//...<br />/*The code he posted for login.php*/<br />//...<br /><br />$end = (microtime(true) - $pph_strt);<br /><br />$wait = bcmul((1 - $end), 1000000);  // usleep(250000) 1/4 of a second<br /><br />usleep ( $wait );<br /><br />echo "&lt;br&gt;Execution time:".(microtime(true) - $pph_strt)."; ";<br /><br />Note I suggest changing the wait time to suit your needs but make sure that it is more than than the highest execution time the script takes on your server.<br /><br />Also, this is my workaround to obfuscate the execution time to nullify timing attacks. You can find an in-depth discussion and more from people far more equipped than I for cryptography at the link I posted. I do not believe this was there but there are others. It is where I found out what timing attacks were as I am new to this but would like solid security.</span></code></div>
  </div>
 </div>
  <div class="note" id="115629">  <div class="votes">
    <div id="Vu115629">
    <a href="/manual/vote-note.php?id=115629&amp;page=function.password-hash&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115629">
    <a href="/manual/vote-note.php?id=115629&amp;page=function.password-hash&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115629" title="55% like this...">
    13
    </div>
  </div>
  <a href="#115629" class="name">
  <strong class="user"><em>Mike Robinson</em></strong></a><a class="genanchor" href="#115629"> &para;</a><div class="date" title="2014-08-28 02:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115629">
<div class="phpcode"><code><span class="html">For passwords, you generally want the hash calculation time to be between 250 and 500 ms (maybe more for administrator accounts). Since calculation time is dependent on the capabilities of the server, using the same cost parameter on two different servers may result in vastly different execution times. Here's a quick little function that will help you determine what cost parameter you should be using for your server to make sure you are within this range (note, I am providing a salt to eliminate any latency caused by creating a pseudorandom salt, but this should not be done when hashing passwords):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @Param int $min_ms Minimum amount of time in milliseconds that it should take<br /> * to calculate the hashes<br /> */<br /></span><span class="keyword">function </span><span class="default">getOptimalBcryptCostParameter</span><span class="keyword">(</span><span class="default">$min_ms </span><span class="keyword">= </span><span class="default">250</span><span class="keyword">) {<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">31</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$options </span><span class="keyword">= [ </span><span class="string">'cost' </span><span class="keyword">=&gt; </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'salt' </span><span class="keyword">=&gt; </span><span class="string">'usesomesillystringforsalt' </span><span class="keyword">];<br />        </span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">password_hash</span><span class="keyword">(</span><span class="string">"rasmuslerdorf"</span><span class="keyword">, </span><span class="default">PASSWORD_BCRYPT</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />        </span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        if ((</span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">) * </span><span class="default">1000 </span><span class="keyword">&gt; </span><span class="default">$min_ms</span><span class="keyword">) {<br />            return </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br />}<br />echo </span><span class="default">getOptimalBcryptCostParameter</span><span class="keyword">(); </span><span class="comment">// prints 12 in my case<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.password-hash&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.password-hash.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.password.php">Password Hashing Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.password-algos.php" title="password_&#8203;algos">password_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.password-get-info.php" title="password_&#8203;get_&#8203;info">password_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="current">
                            <a href="function.password-hash.php" title="password_&#8203;hash">password_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.password-needs-rehash.php" title="password_&#8203;needs_&#8203;rehash">password_&#8203;needs_&#8203;rehash</a>
                        </li>
                                                <li class="">
                            <a href="function.password-verify.php" title="password_&#8203;verify">password_&#8203;verify</a>
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
