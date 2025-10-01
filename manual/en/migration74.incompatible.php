<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward Incompatible Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration74.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration74.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration74.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration74.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration74.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration74.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration74.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration74.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration74.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration74.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration74.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration74.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration74.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration74.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration74.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration74.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration74.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward Incompatible Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward Incompatible Changes - Manual" />
<meta name="twitter:description" content="Backward Incompatible Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward Incompatible Changes - Manual" />
<meta itemprop="description" content="Backward Incompatible Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward Incompatible Changes" />

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
        <a href="migration74.deprecated.php">
          Deprecated Features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration74.constants.php">
          &laquo; New Global Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration74.php'>Migrating from PHP 7.3.x to PHP 7.4.x</a></li>      </ul>
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
            <option value='en/migration74.incompatible.php' selected="selected">English</option>
            <option value='de/migration74.incompatible.php'>German</option>
            <option value='es/migration74.incompatible.php'>Spanish</option>
            <option value='fr/migration74.incompatible.php'>French</option>
            <option value='it/migration74.incompatible.php'>Italian</option>
            <option value='ja/migration74.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration74.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration74.incompatible.php'>Russian</option>
            <option value='tr/migration74.incompatible.php'>Turkish</option>
            <option value='uk/migration74.incompatible.php'>Ukrainian</option>
            <option value='zh/migration74.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration74.incompatible" class="sect1">
 <h2 class="title">Backward Incompatible Changes</h2>

 <div class="sect2" id="migration74.incompatible.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration74.incompatible.core.non-array-access">
   <h4 class="title">Array-style access of non-arrays</h4>

   <p class="para">
    Trying to use values of type <span class="type"><a href="language.types.null.php" class="type null">null</a></span>, <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>,
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, <span class="type"><a href="language.types.float.php" class="type float">float</a></span> or <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> as an
    array (such as <code class="literal">$null[&quot;key&quot;]</code>) will now generate a notice.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.get-declared-classes">
   <h4 class="title"><span class="function"><a href="function.get-declared-classes.php" class="function">get_declared_classes()</a></span> function</h4>

   <p class="para">
    The <span class="function"><a href="function.get-declared-classes.php" class="function">get_declared_classes()</a></span> function no longer
    returns anonymous classes that have not been instantiated yet.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.fn">
   <h4 class="title"><code class="literal">fn</code> keyword</h4>

   <p class="para">
    <code class="literal">fn</code> is now a reserved keyword. In particular,
    it can no longer be used as a function or class name.
    It can still be used as a method or class constant name.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.php-tag">
   <h4 class="title"><code class="literal">&lt;?php</code> tag at end of file</h4>

   <p class="para">
    <code class="literal">&lt;?php</code> at the end of the file (without trailing newline)
    will now be interpreted as an opening PHP tag. Previously it was interpreted
    either as a short opening tag followed by literal <code class="literal">php</code> and
    resulted in a syntax error (with <code class="literal">short_open_tag=1</code>)
    or was interpreted as a literal <code class="literal">&lt;?php</code> string
    (with <code class="literal">short_open_tag=0</code>).
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.stream-wrappers">
   <h4 class="title">Stream wrappers</h4>

   <p class="para">
    When using include/require on a stream,
    <span class="methodname"><a href="streamwrapper.stream-set-option.php" class="methodname">streamWrapper::stream_set_option()</a></span>
    will be invoked with the <strong><code><a href="stream.constants.php#constant.stream-option-read-buffer">STREAM_OPTION_READ_BUFFER</a></code></strong> option.
    Custom stream wrapper implementations may need to implement the
    <span class="methodname"><a href="streamwrapper.stream-set-option.php" class="methodname">streamWrapper::stream_set_option()</a></span> method to
    avoid a warning (always returning <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is a sufficient implementation).
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.serialization">
   <h4 class="title">Serialization</h4>

   <p class="para">
    The <code class="literal">o</code> serialization format has been removed.
    As it is never produced by PHP, this may only break unserialization of
    manually crafted strings.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.password-algorithm-constants">
   <h4 class="title">Password algorithm constants</h4>

   <p class="para">
    Password hashing algorithm identifiers are now nullable strings rather
    than integers.
   </p>

   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-default">PASSWORD_DEFAULT</a></code></strong> was int 1; now is string &#039;2y&#039; (in PHP 7.4.0, 7.4.1, and 7.4.2 it was <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>)
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-bcrypt">PASSWORD_BCRYPT</a></code></strong> was int 1; now is string &#039;2y&#039;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-argon2i">PASSWORD_ARGON2I</a></code></strong> was int 2; now is string &#039;argon2i&#039;
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong> was int 3; now is string &#039;argon2id&#039;
     </span>
    </li>
   </ul>

   <p class="para">
    Applications correctly using the constants PASSWORD_DEFAULT,
    PASSWORD_BCRYPT, PASSWORD_ARGON2I, and PASSWORD_ARGON2ID will continue to
    function correctly.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.htmlentities">
   <h4 class="title"><span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> function</h4>

   <p class="para">
    <span class="function"><a href="function.htmlentities.php" class="function">htmlentities()</a></span> will now raise a notice
    (instead of a strict standards warning) if it is used with
    an encoding for which only basic entity substitution is supported,
    in which case it is equivalent to <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration74.incompatible.core.fread-fwrite">
   <h4 class="title"><span class="function"><a href="function.fread.php" class="function">fread()</a></span> and <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span> function</h4>

   <p class="para">
    <span class="function"><a href="function.fread.php" class="function">fread()</a></span> and <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span> will now
    return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the operation failed.
    Previously an empty string or 0 was returned.
    EAGAIN/EWOULDBLOCK are not considered failures.
   </p>
   <p class="para">
    These functions now also raise a notice on failure,
    such as when trying to write to a read-only file resource.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration74.incompatible.bcmath">
  <h3 class="title">BCMath Arbitrary Precision Mathematics</h3>

  <p class="para">
   BCMath functions will now warn if a non well-formed number is passed, such
   as <code class="literal">&quot;32foo&quot;</code>. The argument will be interpreted as zero, as before.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.curl">
  <h3 class="title">CURL</h3>

  <p class="para">
   Attempting to serialize a <span class="classname"><a href="class.curlfile.php" class="classname">CURLFile</a></span> class will now
   generate an exception. Previously the exception was only thrown on unserialization.
  </p>
  <p class="para">
   Using <strong><code><a href="curl.constants.php#constant.curlpipe-http1">CURLPIPE_HTTP1</a></code></strong> is deprecated, and is no longer
   supported as of cURL 7.62.0.
  </p>
  <p class="para">
   The <code class="literal">$version</code> parameter of <span class="function"><a href="function.curl-version.php" class="function">curl_version()</a></span>
   is deprecated. If any value not equal to the default <strong><code><a href="curl.constants.php#constant.curlversion-now">CURLVERSION_NOW</a></code></strong>
   is passed, a warning is raised and the parameter is ignored.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.datetime">
  <h3 class="title">Date and Time</h3>

  <p class="para">
   Calling <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span> or similar on a
   <span class="classname"><a href="class.datetime.php" class="classname">DateTime</a></span> or <span class="classname"><a href="class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>
   instance will no longer leave behind accessible properties on the object.
  </p>
  <p class="para">
   Comparison of <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span> objects
   (using <code class="literal">==</code>, <code class="literal">&lt;</code>, and so on) will now generate
   a warning and always return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Previously all <span class="classname"><a href="class.dateinterval.php" class="classname">DateInterval</a></span>
   objects were considered equal, unless they had properties.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.intl">
  <h3 class="title">Intl</h3>

  <p class="para">
   The default parameter value of <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span> and
   <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span> is now <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong>
   instead of the deprecated <strong><code><a href="intl.constants.php#constant.intl-idna-variant-2003">INTL_IDNA_VARIANT_2003</a></code></strong>.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.mysqli">
  <h3 class="title">MySQLi</h3>

  <p class="para">
   The embedded server functionality has been removed. It was broken since
   at least PHP 7.0.
  </p>
  <p class="para">
   The undocumented <code class="literal">mysqli::$stat</code> property has been removed
   in favor of <span class="methodname"><a href="mysqli.stat.php" class="methodname">mysqli::stat()</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.openssl">
  <h3 class="title">OpenSSL</h3>

  <p class="para">
   The <span class="function"><a href="function.openssl-random-pseudo-bytes.php" class="function">openssl_random_pseudo_bytes()</a></span> function will now
   throw an exception in error situations, similar to <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span>.
   In particular, an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown if the number of
   requested bytes is less than or equal to zero, and an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>
   is thrown if sufficient randomness cannot be gathered.
   The <code class="literal">$crypto_strong</code> output argument is guaranteed to always
   be <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the function does not throw, so explicitly checking it is not necessary.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.pcre">
  <h3 class="title">Regular Expressions (Perl-Compatible)</h3>

  <p class="para">
   When <strong><code><a href="pcre.constants.php#constant.preg-unmatched-as-null">PREG_UNMATCHED_AS_NULL</a></code></strong> mode is used, trailing
   unmatched capturing groups will now also be set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (or
   <code class="literal">[null, -1]</code> if offset capture is enabled).
   This means that the size of the <code class="literal">$matches</code> will always be the same.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.pdo">
  <h3 class="title">PHP Data Objects</h3>

  <p class="para">
   Attempting to serialize a <span class="classname"><a href="class.pdo.php" class="classname">PDO</a></span> or
   <span class="classname"><a href="class.pdostatement.php" class="classname">PDOStatement</a></span> instance will now generate
   an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> rather than a <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span>,
   consistent with other internal classes which do not support serialization.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.reflection">
  <h3 class="title">Reflection</h3>

  <p class="para">
   Reflection objects will now generate an exception if an attempt is made
   to serialize them. Serialization for reflection objects was never
   supported and resulted in corrupted reflection objects. It has been
   explicitly prohibited now.
  </p>

  <p class="para">
   The values of the class constant of <span class="classname"><a href="class.reflectionclassconstant.php" class="classname">ReflectionClassConstant</a></span>,
   <span class="classname"><a href="class.reflectionmethod.php" class="classname">ReflectionMethod</a></span> and <span class="classname"><a href="class.reflectionproperty.php" class="classname">ReflectionProperty</a></span>
   have changed.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.spl">
  <h3 class="title">Standard PHP Library (SPL)</h3>

  <p class="para">
   Calling <span class="function"><a href="function.get-object-vars.php" class="function">get_object_vars()</a></span> on an <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span>
   instance will now always return the properties of the <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span>
   itself (or a subclass). Previously it returned the values of the wrapped
   array/object unless the <strong><code><a href="class.arrayobject.php#arrayobject.constants.std-prop-list">ArrayObject::STD_PROP_LIST</a></code></strong>
   flag was specified.
  </p>
  <p class="para">
   Other affected operations are:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <span class="methodname"><strong>ReflectionObject::getProperties()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.reset.php" class="function">reset()</a></span>, <span class="function"><a href="function.current.php" class="function">current()</a></span>, etc.
     Use <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span> methods instead.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Potentially others working on object properties as a list,
     e.g. <span class="function"><a href="function.array-walk.php" class="function">array_walk()</a></span>.
    </span>
   </li>
  </ul>
  <p class="para">
   <code class="literal">(array)</code> casts are not affected. They will continue to
   return either the wrapped array, or the <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span>
   properties, depending on whether the <strong><code><a href="class.arrayobject.php#arrayobject.constants.std-prop-list">ArrayObject::STD_PROP_LIST</a></code></strong>
   flag is used.
  </p>
  <p class="para">
   <span class="methodname"><a href="splpriorityqueue.setextractflags.php" class="methodname">SplPriorityQueue::setExtractFlags()</a></span> will throw
   an exception if zero is passed. Previously this would generate a recoverable
   fatal error on the next extraction operation.
  </p>
  <p class="para">
   <span class="classname"><a href="class.arrayobject.php" class="classname">ArrayObject</a></span>, <span class="classname"><a href="class.arrayiterator.php" class="classname">ArrayIterator</a></span>,
   <span class="classname"><a href="class.spldoublylinkedlist.php" class="classname">SplDoublyLinkedList</a></span> and <span class="classname"><a href="class.splobjectstorage.php" class="classname">SplObjectStorage</a></span>
   now support the <code class="literal">__serialize()</code> and <code class="literal">__unserialize()</code>
   mechanism in addition to the <span class="interfacename"><a href="class.serializable.php" class="interfacename">Serializable</a></span> interface.
   This means that serialization payloads created on older PHP versions can still be
   unserialized, but new payloads created by PHP 7.4 will not be understood by older versions.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.tokenizer">
  <h3 class="title">Tokenizer</h3>

  <p class="para">
   <span class="function"><a href="function.token-get-all.php" class="function">token_get_all()</a></span> will now emit a
   <strong><code><a href="tokens.php#constant.t-bad-character">T_BAD_CHARACTER</a></code></strong> token for unexpected
   characters instead of leaving behind holes in the token stream.
  </p>
 </div>

 <div class="sect2" id="migration74.incompatible.cookie-decode">
  <h3 class="title">Incoming Cookies</h3>

  <p class="para">
   As of PHP 7.4.11, the <em>names</em> of incoming cookies are no
   longer url-decoded for security reasons.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration74/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration74.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration74.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125717">  <div class="votes">
    <div id="Vu125717">
    <a href="/manual/vote-note.php?id=125717&amp;page=migration74.incompatible&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125717">
    <a href="/manual/vote-note.php?id=125717&amp;page=migration74.incompatible&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125717" title="61% like this...">
    16
    </div>
  </div>
  <a href="#125717" class="name">
  <strong class="user"><em>happydog at kennel17</em></strong></a><a class="genanchor" href="#125717"> &para;</a><div class="date" title="2021-01-24 11:23"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125717">
<div class="phpcode"><code><span class="html">Re: "The o serialization format has been removed. As it is never produced by PHP, this may only break unserialization of manually crafted strings."<br /><br />This little-o serialisation format was used by PHP3 but was never generated by PH PHP4 or above.  The deserialization code still recognised it, though, for reasons of backwards-compatibility with PHP3.<br /><br />However, based on a bit of investigation, it looks like this code has been broken for about 15 years, so although this is listed as a deprecation, in practice it wasn't.<br /><br />See this Stack Overflow question for a really great answer, with a lot more detail about this: <a href="https://stackoverflow.com/questions/65289729/what-was-phps-o-serialization-format-for" rel="nofollow" target="_blank">https://stackoverflow.com/questions/65289729/what-was-phps-o-serialization-format-for</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration74.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.incompatible.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration74.php">Migrating from PHP 7.3.x to PHP 7.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration74.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration74.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration74.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration74.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration74.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration74.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration74.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration74.windows-support.php" title="Windows Support">Windows Support</a>
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
