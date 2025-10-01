<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: igbinary_unserialize - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.igbinary-unserialize.php">
 <link rel="shorturl" href="https://www.php.net/igbinary-unserialize">
 <link rel="alternate" href="https://www.php.net/igbinary-unserialize" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.igbinary.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.igbinary-serialize.php">
 <link rel="next" href="https://www.php.net/manual/en/book.json.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.igbinary-unserialize.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.igbinary-unserialize.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.igbinary-unserialize.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.igbinary-unserialize.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.igbinary-unserialize.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.igbinary-unserialize.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.igbinary-unserialize.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.igbinary-unserialize.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.igbinary-unserialize.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.igbinary-unserialize.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.igbinary-unserialize.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a PHP value from a stored representation from igbinary_serialize" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: igbinary_unserialize - Manual" />
<meta name="twitter:description" content="Creates a PHP value from a stored representation from igbinary_serialize" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: igbinary_unserialize - Manual" />
<meta itemprop="description" content="Creates a PHP value from a stored representation from igbinary_serialize" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a PHP value from a stored representation from igbinary_serialize" />

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
        <a href="book.json.php">
          JSON &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.igbinary-serialize.php">
          &laquo; igbinary_serialize        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.igbinary.php'>Igbinary</a></li>      <li><a href='ref.igbinary.php'>Igbinary Functions</a></li>      </ul>
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
            <option value='en/function.igbinary-unserialize.php' selected="selected">English</option>
            <option value='de/function.igbinary-unserialize.php'>German</option>
            <option value='es/function.igbinary-unserialize.php'>Spanish</option>
            <option value='fr/function.igbinary-unserialize.php'>French</option>
            <option value='it/function.igbinary-unserialize.php'>Italian</option>
            <option value='ja/function.igbinary-unserialize.php'>Japanese</option>
            <option value='pt_BR/function.igbinary-unserialize.php'>Brazilian Portuguese</option>
            <option value='ru/function.igbinary-unserialize.php'>Russian</option>
            <option value='tr/function.igbinary-unserialize.php'>Turkish</option>
            <option value='uk/function.igbinary-unserialize.php'>Ukrainian</option>
            <option value='zh/function.igbinary-unserialize.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.igbinary-unserialize" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">igbinary_unserialize</h1>
  <p class="verinfo">(PECL igbinary &gt;= 1.1.1)</p><p class="refpurpose"><span class="refname">igbinary_unserialize</span> &mdash; <span class="dc-title">
   Creates a PHP value from a stored representation from <span class="function"><a href="function.igbinary-serialize.php" class="function">igbinary_serialize()</a></span>
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.igbinary-unserialize-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>igbinary_unserialize</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$str</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="simpara">
   <span class="function"><strong>igbinary_unserialize()</strong></span> takes a single serialized variable from
   <span class="function"><a href="function.igbinary-serialize.php" class="function">igbinary_serialize()</a></span> and converts it back into a PHP value.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Untrusted user input must not be passed to <span class="function"><strong>igbinary_unserialize()</strong></span>.
    Unserialization can result in code being loaded and executed due to object
    instantiation and autoloading, and a malicious user may be able to exploit
    this. Instead a safe, standard data interchange format such as JSON (via
    <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span> and <span class="function"><a href="function.json-encode.php" class="function">json_encode()</a></span>) should be used,
    if serialized data needs to be passed to a client.
   </p>
   <p class="para">
    If there is the need to unserialize externally-stored serialized data,
    <span class="function"><a href="function.hash-hmac.php" class="function">hash_hmac()</a></span> can be used for data validation.
    It is important to ensure that nobody has tampered with the data.
   </p>
  </div>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The igbinary serialization format does not provide a way to distinguish between different reference
    groups for the same value. All PHP references to a given value as treated as part
    of the same reference group when unserialized,
    even if they were parts of difference reference groups when serialized.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.igbinary-unserialize-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">str</code></dt>
    <dd>
     <p class="para">
      The serialized string generated by <span class="function"><a href="function.igbinary-serialize.php" class="function">igbinary_serialize()</a></span>.
     </p>
     <p class="para">
      If the value being unserialized is an <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, after successfully
      reconstructing the object igbinary will automatically attempt to call the
      <a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a> or
      <a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a> methods (if one exists).
     </p>
     <p class="para">
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <strong>
        <a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a>
         directive
       </strong><br />
       <p class="para">
        The callback specified in the
        <a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a>
        directive is called when an undefined class is unserialized.
        If no callback is specified, the object will be instantiated as
        <span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span>.
       </p>
      </p></blockquote>
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.igbinary-unserialize-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The converted value is returned, and can be a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>,
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, <span class="type"><a href="language.types.float.php" class="type float">float</a></span>, <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, or <span class="type"><a href="language.types.null.php" class="type null">null</a></span>.
  </p>
  <p class="para">
   In case the passed string is not unserializeable, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned and
   <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> or <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is issued.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.igbinary-unserialize-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Objects may throw <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span>s in their unserialization handlers.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.igbinary-unserialize-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned both in the case of an error and if unserializing
    the serialized <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> value. It is possible to catch this special case by
    comparing <code class="parameter">str</code> with
    <code class="code">igbinary_serialize(null)</code> or <code class="code">igbinary_serialize(false)</code>
    or by catching the issued <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.igbinary-unserialize-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.unserialize.php" class="function" rel="rdfs-seeAlso">unserialize()</a> - Creates a PHP value from a stored representation</span></li>
    <li><span class="function"><a href="function.json-encode.php" class="function" rel="rdfs-seeAlso">json_encode()</a> - Returns the JSON representation of a value</span></li>
    <li><span class="function"><a href="function.json-decode.php" class="function" rel="rdfs-seeAlso">json_decode()</a> - Decodes a JSON string</span></li>
    <li><span class="function"><a href="function.hash-hmac.php" class="function" rel="rdfs-seeAlso">hash_hmac()</a> - Generate a keyed hash value using the HMAC method</span></li>
    <li><span class="function"><a href="function.igbinary-serialize.php" class="function" rel="rdfs-seeAlso">igbinary_serialize()</a> - Generates a compact, storable binary representation of a value</span></li>
    <li><a href="language.oop5.autoload.php" class="link">Autoloading Classes</a></li>
    <li><a href="var.configuration.php#ini.unserialize-callback-func" class="link">unserialize_callback_func</a></li>
    <li><a href="language.oop5.magic.php#object.wakeup" class="link">__wakeup()</a></li>
    <li><a href="language.oop5.magic.php#object.serialize" class="link">__serialize()</a></li>
    <li><a href="language.oop5.magic.php#object.unserialize" class="link">__unserialize()</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/igbinary/functions/igbinary-unserialize.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.igbinary-unserialize%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.igbinary-unserialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.igbinary-unserialize.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="130124">  <div class="votes">
    <div id="Vu130124">
    <a href="/manual/vote-note.php?id=130124&amp;page=function.igbinary-unserialize&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130124">
    <a href="/manual/vote-note.php?id=130124&amp;page=function.igbinary-unserialize&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130124" title="no votes...">
    0
    </div>
  </div>
  <a href="#130124" class="name">
  <strong class="user"><em>olliejones at gmail dot com</em></strong></a><a class="genanchor" href="#130124"> &para;</a><div class="date" title="2025-03-09 06:15"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130124">
<div class="phpcode"><code><span class="html">This little function returns true if a data string was made by igbinary_serialize() and can be passed to igbinary_unseriaize(). <br /><br />function is_igbinary($data) {<br />      return is_string($data) &amp;&amp; '00000002' === bin2hex(substr($data, 0, 4));<br />}<br /><br />It doesn't validate the contents of the data string, or ensure it is safe to decode if it came from an untrusted source. But it is handy when trying to avoid unserializing data that wasn't serialized.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.igbinary-unserialize&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.igbinary-unserialize.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.igbinary.php">Igbinary Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.igbinary-serialize.php" title="igbinary_&#8203;serialize">igbinary_&#8203;serialize</a>
                        </li>
                                                <li class="current">
                            <a href="function.igbinary-unserialize.php" title="igbinary_&#8203;unserialize">igbinary_&#8203;unserialize</a>
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
