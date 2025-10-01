<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xpass.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xpass.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xpass.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.xpass.php">
 <link rel="prev" href="https://www.php.net/manual/en/xpass.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.xpass.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xpass.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xpass.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xpass.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xpass.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xpass.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xpass.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xpass.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xpass.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xpass.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xpass.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xpass.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="ref.xpass.php">
          Xpass Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xpass.installation.php">
          &laquo; Installation via PECL        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.xpass.php'>Xpass</a></li>      </ul>
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
            <option value='en/xpass.constants.php' selected="selected">English</option>
            <option value='de/xpass.constants.php'>German</option>
            <option value='es/xpass.constants.php'>Spanish</option>
            <option value='fr/xpass.constants.php'>French</option>
            <option value='it/xpass.constants.php'>Italian</option>
            <option value='ja/xpass.constants.php'>Japanese</option>
            <option value='pt_BR/xpass.constants.php'>Brazilian Portuguese</option>
            <option value='ru/xpass.constants.php'>Russian</option>
            <option value='tr/xpass.constants.php'>Turkish</option>
            <option value='uk/xpass.constants.php'>Ukrainian</option>
            <option value='zh/xpass.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xpass.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <p class="simpara">
  Xpass extension provides various set of constants.
  Hash methods (<strong><code><a href="xpass.constants.php#constant.crypt-prefix-std-des">CRYPT_PREFIX_<span class="replaceable">*</span></a></code></strong>) for
  <span class="function"><a href="function.crypt-gensalt.php" class="function">crypt_gensalt()</a></span> prefix parameter.
  Error codes (<strong><code><a href="xpass.constants.php#constant.crypt-salt-ok">CRYPT_SALT_<span class="replaceable">*</span></a></code></strong>) returned by
  <span class="function"><a href="function.crypt-checksalt.php" class="function">crypt_checksalt()</a></span>.
  Password algorithms (<strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_<span class="replaceable">*</span></a></code></strong>) for
  <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> algo parameter.
 </p>

 <dl id="xpass.constants.algo">
  <strong class="title">Hashing methods</strong>
  
   <dt id="constant.crypt-prefix-std-des">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-std-des">CRYPT_PREFIX_STD_DES</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The original hashing method from Unix V7, based on the DES block cipher.
     Because DES is cheap on modern hardware,
     because there are only <code class="literal">4096</code> possible salts and 2**56 distinct passphrases,
     which it truncates to 8 characters,
     it is feasible to discover any passphrase hashed with this method.
     It should only be used when supporting old operating systems that support
     no other hash generation algorithm, due to how weak DES hashes are.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-ext-des">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-ext-des">CRYPT_PREFIX_EXT_DES</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     An extension of traditional DES, which eliminates the length limit,
     increases the salt size, and makes the time cost tunable.
     It originates with BSDI BSD/OS and is also available on at least NetBSD,
     OpenBSD, and FreeBSD due to the use of David Burren&#039;s FreeSec library.
     It is much better than traditional DES and bigcrypt,
     but still should not be used for new hashes.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-md5">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-md5">CRYPT_PREFIX_MD5</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A hash based on the MD5 algorithm, originally developed by Poul-Henning Kamp for FreeBSD.
     Supported on most free Unixes and newer versions of Solaris.
     Not as weak as the DES-based hashes below,
     but MD5 is so cheap on modern hardware that it should not be used for new hashes.
     Processing cost is not adjustable.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-blowfish">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-blowfish">CRYPT_PREFIX_BLOWFISH</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A hash based on the Blowfish block cipher, modified to have an extra-expensive key schedule.
     Originally developed by Niels Provos and David Mazieres for OpenBSD and also supported on recent
     versions of FreeBSD and NetBSD, on Solaris 10 and newer, and on several GNU/*/Linux distributions.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-sha256">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-sha256">CRYPT_PREFIX_SHA256</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A hash based on SHA-2 with 256-bit output, originally developed by Ulrich Drepper for GNU libc.
     Supported on Linux but not common elsewhere.
     Acceptable for new hashes.
     The default processing cost parameter is <code class="literal">5000</code>,
     which is too low for modern hardware.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-sha512">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-sha512">CRYPT_PREFIX_SHA512</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A hash based on SHA-2 with 512-bit output, originally developed by Ulrich Drepper for GNU libc.
     Supported on Linux but not common elsewhere.
     Acceptable for new hashes.
     The default processing cost parameter is <code class="literal">5000</code>,
     which is too low for modern hardware.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-scrypt">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-scrypt">CRYPT_PREFIX_SCRYPT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Scrypt is a password-based key derivation function created by Colin Percival,
     originally for the Tarsnap online backup service.
     The algorithm was specifically designed to make it costly to perform
     large-scale custom hardware attacks by requiring large amounts of memory.
     In 2016, the scrypt algorithm was published by IETF as RFC 7914.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-gost-yescrypt">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-gost-yescrypt">CRYPT_PREFIX_GOST_YESCRYPT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Gost-yescrypt uses the output from yescrypt as an input message to HMAC with the
     GOST R 34.11-2012 (Streebog) hash function with a 256-bit digest.
     Thus, yescrypt&#039;s cryptographic properties are superseded by those of the GOST hash function.
     This hashing method is useful in applications that need modern passphrase hashing,
     but have to rely on GOST algorithms.
     The GOST R 34.11-2012 (Streebog) hash function has been published by the IETF as RFC 6986.
     Acceptable for new hashes where required.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-prefix-yescrypt">
    <strong><code><a href="xpass.constants.php#constant.crypt-prefix-yescrypt">CRYPT_PREFIX_YESCRYPT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Yescrypt is a scalable passphrase hashing scheme designed by Solar Designer,
     which is based on Colin Percival&#039;s scrypt.
     While yescrypt&#039;s strength against password guessing attacks comes from its algorithm design,
     its cryptographic security is guaranteed by its use of SHA-256 on the outer layer.
     The SHA-256 hash function has been published by NIST in FIPS PUB 180-2
     (and its subsequent revisions such as FIPS PUB 180-4) and by the IETF as RFC 4634
     (and subsequently RFC 6234).
     Recommended for new hashes.
    </span>
   </dd>
  
 </dl>

 <dl id="xpass.constants.error">
  <strong class="title">Error codes</strong>
  
   <dt id="constant.crypt-salt-ok">
    <strong><code><a href="xpass.constants.php#constant.crypt-salt-ok">CRYPT_SALT_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No error.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-salt-invalid">
    <strong><code><a href="xpass.constants.php#constant.crypt-salt-invalid">CRYPT_SALT_INVALID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Unknown hashing method or invalid parameters.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-salt-method-disabled">
    <strong><code><a href="xpass.constants.php#constant.crypt-salt-method-disabled">CRYPT_SALT_METHOD_DISABLED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Hashing method is no longer allowed to be used.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-salt-method-legacy">
    <strong><code><a href="xpass.constants.php#constant.crypt-salt-method-legacy">CRYPT_SALT_METHOD_LEGACY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Hashing method is no longer considered strong enough.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-salt-too-cheap">
    <strong><code><a href="xpass.constants.php#constant.crypt-salt-too-cheap">CRYPT_SALT_TOO_CHEAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Cost parameters are considered too cheap.
    </span>
   </dd>
  
 </dl>

 <dl id="xpass.constants.password">
  <strong class="title">Password algorithms</strong>
  
   <dt id="constant.password-sha512">
    <strong><code><a href="xpass.constants.php#constant.password-sha512">PASSWORD_SHA512</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <strong><code><a href="xpass.constants.php#constant.password-sha512">PASSWORD_SHA512</a></code></strong> is used to create new password
     hashes using the <strong><code><a href="string.constants.php#constant.crypt-sha512">CRYPT_SHA512</a></code></strong> algorithm.
    </span>
   </dd>
  
  
   <dt id="constant.password-yescrypt">
    <strong><code><a href="xpass.constants.php#constant.password-yescrypt">PASSWORD_YESCRYPT</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <strong><code><a href="xpass.constants.php#constant.password-yescrypt">PASSWORD_YESCRYPT</a></code></strong> is used to create new password
     hashes using the <strong><code>CRYPT_YESCRYPT</code></strong> algorithm.
    </span>
   </dd>
  
 </dl>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xpass/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxpass.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xpass.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xpass.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.xpass.php">Xpass</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.xpass.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="xpass.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="xpass.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.xpass.php" title="Xpass Functions">Xpass Functions</a>
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
