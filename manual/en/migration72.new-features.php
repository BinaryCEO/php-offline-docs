<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration72.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration72.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration72.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration72.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration72.php">
 <link rel="next" href="https://www.php.net/manual/en/migration72.new-functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration72.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration72.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration72.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration72.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration72.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration72.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration72.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration72.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration72.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration72.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration72.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New features - Manual" />
<meta name="twitter:description" content="New features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New features - Manual" />
<meta itemprop="description" content="New features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New features" />

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
        <a href="migration72.new-functions.php">
          New functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration72.php">
          &laquo; Migrating from PHP 7.1.x to PHP 7.2.x        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration72.php'>Migrating from PHP 7.1.x to PHP 7.2.x</a></li>      </ul>
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
            <option value='en/migration72.new-features.php' selected="selected">English</option>
            <option value='de/migration72.new-features.php'>German</option>
            <option value='es/migration72.new-features.php'>Spanish</option>
            <option value='fr/migration72.new-features.php'>French</option>
            <option value='it/migration72.new-features.php'>Italian</option>
            <option value='ja/migration72.new-features.php'>Japanese</option>
            <option value='pt_BR/migration72.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration72.new-features.php'>Russian</option>
            <option value='tr/migration72.new-features.php'>Turkish</option>
            <option value='uk/migration72.new-features.php'>Ukrainian</option>
            <option value='zh/migration72.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration72.new-features" class="sect1">
 <h2 class="title">New features</h2>

 <div class="sect2" id="migration72.new-features.object-type">
  <h3 class="title">New object type</h3>

  <p class="para">
   A new type, <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, has been introduced that can be used for
   (contravariant) parameter typing and (covariant) return typing of any
   objects.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">object $obj</span><span style="color: #007700">) : </span><span style="color: #0000BB">object<br /></span><span style="color: #007700">{<br />    return new </span><span style="color: #0000BB">SplQueue</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">test</span><span style="color: #007700">(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">());</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.new-features.ext-loading-by-name">
  <h3 class="title">Extension loading by name</h3>

  <p class="para">
   Shared extensions no longer require their file extension
   (<code class="literal">.so</code> for Unix or <code class="literal">.dll</code> for Windows) to
   be specified. This is enabled in the php.ini file, as well as in the
   <span class="function"><a href="function.dl.php" class="function">dl()</a></span> function.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.abstract-method-overriding">
  <h3 class="title">Abstract method overriding</h3>

  <p class="para">
   Abstract methods can now be overridden when an abstract class extends
   another abstract class.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">abstract class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    abstract function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">string $s</span><span style="color: #007700">);<br />}<br />abstract class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// overridden - still maintaining contravariance for parameters and covariance for return<br />    </span><span style="color: #007700">abstract function </span><span style="color: #0000BB">test</span><span style="color: #007700">(</span><span style="color: #0000BB">$s</span><span style="color: #007700">) : </span><span style="color: #0000BB">int</span><span style="color: #007700">;<br />}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.new-features.sodium">
  <h3 class="title"><a href="book.sodium.php" class="link">Sodium</a> is now a core extension</h3>

  <p class="para">
   The modern Sodium cryptography library has now become a core extension in PHP.
  </p>
  <p class="para">
   For a complete function reference, see the <a href="book.sodium.php" class="link">Sodium</a>
   chapter.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.pws-hashing-with-argon2">
  <h3 class="title">Password hashing with Argon2</h3>

  <p class="para">
   Argon2 has been added to the <a href="book.password.php" class="link">password hashing API</a>, 
   where the following constants have been exposed:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="password.constants.php#constant.password-argon2i">PASSWORD_ARGON2I</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="password.constants.php#constant.password-argon2-default-memory-cost">PASSWORD_ARGON2_DEFAULT_MEMORY_COST</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="password.constants.php#constant.password-argon2-default-time-cost">PASSWORD_ARGON2_DEFAULT_TIME_COST</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="password.constants.php#constant.password-argon2-default-threads">PASSWORD_ARGON2_DEFAULT_THREADS</a></code></strong>
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration72.new-features.pdo-extended-str-types">
  <h3 class="title">Extended string types for <a href="book.pdo.php" class="link">PDO</a></h3>

  <p class="para">
   PDO&#039;s string type has been extended to support the national character type
   when emulating prepares. This has been done with the following constants:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="pdo.constants.php#pdo.constants.param-str-natl">PDO::PARAM_STR_NATL</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="pdo.constants.php#pdo.constants.param-str-char">PDO::PARAM_STR_CHAR</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="pdo.constants.php#pdo.constants.attr-default-str-param">PDO::ATTR_DEFAULT_STR_PARAM</a></code></strong>
    </span>
   </li>
  </ul>

  <p class="para">
   These constants are utilised by bitwise <code class="literal">OR</code>&#039;ing them with
   <strong><code><a href="pdo.constants.php#pdo.constants.param-str">PDO::PARAM_STR</a></code></strong>:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #DD0000">'über'</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR </span><span style="color: #007700">| </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR_NATL</span><span style="color: #007700">);</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.new-features.additional-emulated-prepares-debugging-info">
  <h3 class="title">Additional emulated prepares debugging information for <a href="book.pdo.php" class="link">PDO</a></h3>

  <p class="para">
   The <span class="function"><a href="pdostatement.debugdumpparams.php" class="function">PDOStatement::debugDumpParams()</a></span> method has been
   updated to include the SQL being sent to the DB, where the full, raw query
   (including the replaced placeholders with their bounded values) will be
   shown. This has been added to aid with debugging emulated prepares (and so
   it will only be available when emulated prepares are turned on).
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.extended-ops-in-ldap">
  <h3 class="title">Support for extended operations in <a href="book.ldap.php" class="link">LDAP</a></h3>

  <p class="para">
   Support for EXOP has been added to the LDAP extension. This has been done by
   exposing the following functions and constants:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.ldap-parse-exop.php" class="function">ldap_parse_exop()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.ldap-exop.php" class="function">ldap_exop()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.ldap-exop-passwd.php" class="function">ldap_exop_passwd()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.ldap-exop-whoami.php" class="function">ldap_exop_whoami()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="ldap.constants.php#constant.ldap-exop-start-tls">LDAP_EXOP_START_TLS</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="ldap.constants.php#constant.ldap-exop-modify-passwd">LDAP_EXOP_MODIFY_PASSWD</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="ldap.constants.php#constant.ldap-exop-refresh">LDAP_EXOP_REFRESH</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="ldap.constants.php#constant.ldap-exop-who-am-i">LDAP_EXOP_WHO_AM_I</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="ldap.constants.php#constant.ldap-exop-turn">LDAP_EXOP_TURN</a></code></strong>
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration72.new-features.addr-info-in-sockets">
  <h3 class="title">Address Information additions to the <a href="book.sockets.php" class="link">Sockets</a> extension</h3>

  <p class="para">
   The sockets extension now has the ability to lookup address information, as
   well as connect to it, bind to it, and explain it. The following four
   functions have been added for this:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.socket-addrinfo-lookup.php" class="function">socket_addrinfo_lookup()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.socket-addrinfo-connect.php" class="function">socket_addrinfo_connect()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.socket-addrinfo-bind.php" class="function">socket_addrinfo_bind()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><a href="function.socket-addrinfo-explain.php" class="function">socket_addrinfo_explain()</a></span>
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration72.new-features.param-type-widening">
  <h3 class="title">Parameter type widening</h3>

  <p class="para">
   Parameter types from overridden methods and from interface implementations
   may now be omitted. This is still in compliance with LSP, since parameters
   types are contravariant.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">Test</span><span style="color: #007700">(array </span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">implements </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">Test</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">){} </span><span style="color: #FF8000">// type omitted for $input<br /></span><span style="color: #007700">}</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.new-features.trailing-comma-in-grouped-namespaces">
  <h3 class="title">Allow a trailing comma for grouped namespaces</h3>

  <p class="para">
   A trailing comma can now be added to the group-use syntax introduced in
   PHP 7.0.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">use </span><span style="color: #0000BB">Foo\Bar</span><span style="color: #007700">\{<br />    </span><span style="color: #0000BB">Foo</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">Bar</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">Baz</span><span style="color: #007700">,<br />};</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration72.new-features.proc_nice-windows-support">
  <h3 class="title"><span class="function"><a href="function.proc-nice.php" class="function">proc_nice()</a></span> support on Windows</h3>

  <p class="para">
   The <span class="function"><a href="function.proc-nice.php" class="function">proc_nice()</a></span> function is now supported on Windows.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.pack-unpack-endian-support">
  <h3 class="title"><span class="function"><a href="function.pack.php" class="function">pack()</a></span> and <span class="function"><a href="function.unpack.php" class="function">unpack()</a></span> endian support</h3>

  <p class="para">
   The <span class="function"><a href="function.pack.php" class="function">pack()</a></span> and <span class="function"><a href="function.unpack.php" class="function">unpack()</a></span> functions now
   support float and double in both little and big endian.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.exif-features">
  <h3 class="title">Enhancements to the <a href="book.exif.php" class="link">EXIF</a> extension</h3>

  <p class="para">
   The EXIF extension has been updated to support a much larger range of formats. This 
   means that their format specific tags are now properly translated when parsing images 
   with the <span class="function"><a href="function.exif-read-data.php" class="function">exif_read_data()</a></span> function. The following new formats are 
   now supported:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Samsung
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     DJI
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Panasonic
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Sony
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Pentax
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Minolta
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Sigma/Foveon
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     AGFA
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Kyocera
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Ricoh
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     Epson
    </span>
   </li>
  </ul>

  <p class="para">
   The EXIF functions <span class="function"><a href="function.exif-read-data.php" class="function">exif_read_data()</a></span> and <span class="function"><a href="function.exif-thumbnail.php" class="function">exif_thumbnail()</a></span> 
   now support passing streams as their first argument.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.pcre">
  <h3 class="title">New features in <a href="book.pcre.php" class="link">PCRE</a></h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     The <code class="literal">J</code> modifier for setting PCRE_DUPNAMES has been added.
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration72.new-features.sqlite3">
  <h3 class="title"><a href="book.sqlite3.php" class="link">SQLite3</a> allows writing BLOBs</h3>

  <p class="para">
   <span class="methodname"><a href="sqlite3.openblob.php" class="methodname">SQLite3::openBlob()</a></span> now allows to open BLOB fields in
   write mode; formerly only read mode was supported.
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.oci8">
  <h3 class="title"><a href="book.oci8.php" class="link">Oracle OCI8</a> Transparent Application Failover Callbacks</h3>

  <p class="para">
   Support for <a href="oci8.taf.php" class="link">Oracle Database Transparent Application Failover (TAF) callbacks</a>
   has been added. TAF allows PHP OCI8 applications to
   automatically reconnect to a preconfigured database when a connection
   is broken.  The new TAF callback support allows PHP applications to
   monitor and control reconnection during failover. 
  </p>
 </div>

 <div class="sect2" id="migration72.new-features.zip">
  <h3 class="title">Enhancements to the <a href="book.zip.php" class="link">ZIP</a> extension</h3>

  <p class="para">
   Read and write support for encrypted archives has been added (requires libzip 1.2.0).
  </p>
  <p class="para">
   The <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> class now implements the <span class="interfacename"><a href="class.countable.php" class="interfacename">Countable</a></span> 
   interface.
  </p>
  <p class="para">
   The <code class="literal">zip://</code> stream now accepts a <code class="literal">&#039;password&#039;</code> context option.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration72/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration72.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration72.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration72.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126026">  <div class="votes">
    <div id="Vu126026">
    <a href="/manual/vote-note.php?id=126026&amp;page=migration72.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126026">
    <a href="/manual/vote-note.php?id=126026&amp;page=migration72.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126026" title="80% like this...">
    3
    </div>
  </div>
  <a href="#126026" class="name">
  <strong class="user"><em>antonfedonyuk at gmail dot com</em></strong></a><a class="genanchor" href="#126026"> &para;</a><div class="date" title="2021-04-21 12:27"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126026">
<div class="phpcode"><code><span class="html">Note: "omitted" = "removed":<br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />interface </span><span class="default">ITest<br /></span><span class="keyword">{<br />    public function </span><span class="default">run</span><span class="keyword">(array </span><span class="default">$input</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">Test </span><span class="keyword">implements </span><span class="default">ITest<br /></span><span class="keyword">{<br />    public function </span><span class="default">run</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />       return </span><span class="default">$input</span><span class="keyword">;<br />   }<br />} <br /><br />echo (new </span><span class="default">Test</span><span class="keyword">())-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">); </span><span class="comment">// display foo, no error<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125352">  <div class="votes">
    <div id="Vu125352">
    <a href="/manual/vote-note.php?id=125352&amp;page=migration72.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125352">
    <a href="/manual/vote-note.php?id=125352&amp;page=migration72.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125352" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#125352" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#125352"> &para;</a><div class="date" title="2020-09-11 07:28"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125352">
<div class="phpcode"><code><span class="html">Note: you cant change parameter type for abstract method defined in interface.<br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">AbstractAssocArray imlements ArrayAccess<br /></span><span class="keyword">{<br />    abstract public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">): </span><span class="default">void</span><span class="keyword">;<br />    ...<br />}<br />abstract class </span><span class="default">AbstractAssocArray2 </span><span class="keyword">extends </span><span class="default">AbstractAssocArray<br /></span><span class="keyword">{<br />    abstract public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">string $offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">): </span><span class="default">void</span><span class="keyword">;<br />}<br />class </span><span class="default">AssocArray </span><span class="keyword">extends </span><span class="default">AbstractAssocArray2<br /></span><span class="keyword">{<br />    public function </span><span class="default">offsetSet</span><span class="keyword">(</span><span class="default">string $offset</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">): </span><span class="default">void<br />    </span><span class="keyword">{<br />         </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$offset</span><span class="keyword">} = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>It's throw fatal error: Declaration of AbstractAssocArray::offsetSet(string $offset, $value): void must be compatible with AbstractAssocArrayAccess::offsetSet($offset, $value).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration72.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration72.new-features.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration72.php">Migrating from PHP 7.1.x to PHP 7.2.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration72.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration72.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration72.constants.php" title="New global constants">New global constants</a>
                        </li>
                                                <li class="">
                            <a href="migration72.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="">
                            <a href="migration72.deprecated.php" title="Deprecated features in PHP 7.2.x">Deprecated features in PHP 7.2.x</a>
                        </li>
                                                <li class="">
                            <a href="migration72.other-changes.php" title="Other changes">Other changes</a>
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
