<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New Features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration74.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration74.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration74.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration74.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration74.php">
 <link rel="next" href="https://www.php.net/manual/en/migration74.new-classes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration74.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration74.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration74.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration74.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration74.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration74.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration74.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration74.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration74.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration74.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration74.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New Features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New Features - Manual" />
<meta name="twitter:description" content="New Features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New Features - Manual" />
<meta itemprop="description" content="New Features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New Features" />

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
        <a href="migration74.new-classes.php">
          New Classes and Interfaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration74.php">
          &laquo; Migrating from PHP 7.3.x to PHP 7.4.x        </a>
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
            <option value='en/migration74.new-features.php' selected="selected">English</option>
            <option value='de/migration74.new-features.php'>German</option>
            <option value='es/migration74.new-features.php'>Spanish</option>
            <option value='fr/migration74.new-features.php'>French</option>
            <option value='it/migration74.new-features.php'>Italian</option>
            <option value='ja/migration74.new-features.php'>Japanese</option>
            <option value='pt_BR/migration74.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration74.new-features.php'>Russian</option>
            <option value='tr/migration74.new-features.php'>Turkish</option>
            <option value='uk/migration74.new-features.php'>Ukrainian</option>
            <option value='zh/migration74.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration74.new-features" class="sect1">
 <h2 class="title">New Features</h2>

 <div class="sect2" id="migration74.new-features.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration74.new-features.core.typed-properties">
   <h4 class="title">Typed properties</h4>

   <p class="para">
    Class properties now support type declarations.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">User </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">int $id</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    The above example will enforce that <code class="literal">$user-&gt;id</code> can only be
    assigned <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> values and <code class="literal">$user-&gt;name</code> can
    only be assigned <span class="type"><a href="language.types.string.php" class="type string">string</a></span> values.
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.arrow-functions">
   <h4 class="title">Arrow functions</h4>

   <p class="para">
    <a href="functions.arrow.php" class="link">Arrow functions</a> provide a
    shorthand syntax for defining functions
    with implicit by-value scope binding.

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$factor </span><span style="color: #007700">= </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$nums </span><span style="color: #007700">= </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(fn(</span><span style="color: #0000BB">$n</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$n </span><span style="color: #007700">* </span><span style="color: #0000BB">$factor</span><span style="color: #007700">, [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">]);<br /></span><span style="color: #FF8000">// $nums = array(10, 20, 30, 40);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.type-variance">
   <h4 class="title">Limited return type covariance and argument type contravariance</h4>

   <p class="para">
    The following code will now work:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{}<br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A </span><span style="color: #007700">{}<br /><br />class </span><span style="color: #0000BB">Producer </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(): </span><span style="color: #0000BB">A </span><span style="color: #007700">{}<br />}<br />class </span><span style="color: #0000BB">ChildProducer </span><span style="color: #007700">extends </span><span style="color: #0000BB">Producer </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(): </span><span style="color: #0000BB">B </span><span style="color: #007700">{}<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    Full variance support is only available if autoloading is used. Inside a
    single file only non-cyclic type references are possible, because all
    classes need to be available before they are referenced.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/**<br /> * These classes satisfy the LSP requirements, because C is a subtype of A.<br /> * However, at the time class B is declared, class C is not yet available<br /> */<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(): </span><span style="color: #0000BB">A </span><span style="color: #007700">{}<br />}<br /><br />class </span><span style="color: #0000BB">B </span><span style="color: #007700">extends </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Fatal error: Could not check compatibility between B::method():C and<br />    // A::method(): A, because class С is not available<br />    </span><span style="color: #007700">public function </span><span style="color: #0000BB">method</span><span style="color: #007700">(): </span><span style="color: #0000BB">С </span><span style="color: #007700">{}<br />}<br /><br />class </span><span style="color: #0000BB">C </span><span style="color: #007700">extends </span><span style="color: #0000BB">B </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.null-coalescing-assignment-operator">
   <h4 class="title">Null coalescing assignment operator</h4>

   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">] ??= </span><span style="color: #0000BB">computeDefault</span><span style="color: #007700">();<br /></span><span style="color: #FF8000">// is roughly equivalent to<br /></span><span style="color: #007700">if (!isset(</span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">] = </span><span style="color: #0000BB">computeDefault</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.unpack-inside-array">
   <h4 class="title">Unpacking inside arrays</h4>

   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$parts </span><span style="color: #007700">= [</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'pear'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$fruits </span><span style="color: #007700">= [</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">, </span><span style="color: #DD0000">'orange'</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$parts</span><span style="color: #007700">, </span><span style="color: #DD0000">'watermelon'</span><span style="color: #007700">];<br /></span><span style="color: #FF8000">// ['banana', 'orange', 'apple', 'pear', 'watermelon'];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.numeric-literal-separator">
   <h4 class="title">Numeric literal separator</h4>

   <p class="para">
    Numeric literals can contain underscores between digits.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />6.674_083e-11</span><span style="color: #007700">; </span><span style="color: #FF8000">// float<br /></span><span style="color: #0000BB">299_792_458</span><span style="color: #007700">;   </span><span style="color: #FF8000">// decimal<br /></span><span style="color: #0000BB">0xCAFE_F00D</span><span style="color: #007700">;   </span><span style="color: #FF8000">// hexadecimal<br /></span><span style="color: #0000BB">0b0101_1111</span><span style="color: #007700">;   </span><span style="color: #FF8000">// binary<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.weakreference">
   <h4 class="title">Weak references</h4>

   <p class="para">
    <a href="class.weakreference.php" class="link">Weak references</a> allow the programmer to retain a reference to an object
    that does not prevent the object from being destroyed.
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.core.tostring-exceptions">
   <h4 class="title">Allow exceptions from __toString()</h4>

   <p class="para">
    Throwing exceptions from <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>
    is now permitted. Previously this resulted in a fatal error. Existing
    recoverable fatal errors in string conversions have been converted to
    <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration74.new-features.curl">
  <h3 class="title">CURL</h3>

  <p class="para">
   <span class="classname"><a href="class.curlfile.php" class="classname">CURLFile</a></span> now supports stream wrappers in addition
   to plain file names, if the extension has been built against libcurl &gt;= 7.56.0.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.filter">
  <h3 class="title">Filter</h3>

  <p class="para">
   The <strong><code><a href="filter.constants.php#constant.filter-validate-float">FILTER_VALIDATE_FLOAT</a></code></strong> filter now supports the
   <code class="literal">min_range</code> and <code class="literal">max_range</code>
   options, with the same semantics as <strong><code><a href="filter.constants.php#constant.filter-validate-int">FILTER_VALIDATE_INT</a></code></strong>.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.ffi">
  <h3 class="title">FFI</h3>

  <p class="para">
   FFI is a new extension, which provides a simple way to call
   native functions, access native variables, and create/access
   data structures defined in C libraries.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.gd">
  <h3 class="title">GD</h3>

  <p class="para">
   Added the <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong> image filter
   to apply a scatter filter to images.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.hash">
  <h3 class="title">Hash</h3>

  <p class="para">
   Added <code class="literal">crc32c</code> hash using Castagnoli&#039;s polynomial.
   This CRC32 variant is used by storage systems, such as
   iSCSI, SCTP, Btrfs and ext4.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.mbstring">
  <h3 class="title">Multibyte String</h3>

  <p class="para">
   Added the <span class="function"><a href="function.mb-str-split.php" class="function">mb_str_split()</a></span> function, which provides
   the same functionality as <span class="function"><a href="function.str-split.php" class="function">str_split()</a></span>, but operating
   on code points rather than bytes.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.opcache">
  <h3 class="title">OPcache</h3>

  <p class="para">
   <a href="opcache.preloading.php" class="link">Support for preloading code</a> has been added.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.pcre">
  <h3 class="title">Regular Expressions (Perl-Compatible)</h3>

  <p class="para">
   The <span class="function"><a href="function.preg-replace-callback.php" class="function">preg_replace_callback()</a></span> and <span class="function"><a href="function.preg-replace-callback-array.php" class="function">preg_replace_callback_array()</a></span>
   functions now accept an additional <code class="parameter">flags</code> argument, with support for the
   <strong><code><a href="pcre.constants.php#constant.preg-offset-capture">PREG_OFFSET_CAPTURE</a></code></strong> and <strong><code><a href="pcre.constants.php#constant.preg-unmatched-as-null">PREG_UNMATCHED_AS_NULL</a></code></strong> flags.
   This influences the format of the matches array passed to the callback function.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.pdo">
  <h3 class="title">PDO</h3>

  <p class="para">
   The username and password can now be specified as part of the PDO DSN for
   the mysql, mssql, sybase, dblib, firebird and oci drivers. Previously this
   was only supported by the pgsql driver. If a username/password is specified
   both in the constructor and the DSN, the constructor takes precedence.
  </p>
  <p class="para">
   It is now possible to escape question marks in SQL queries to avoid them
   being interpreted as parameter placeholders. Writing <code class="literal">??</code>
   allows sending a single question mark to the database and e.g. use the
   PostgreSQL JSON key exists (<code class="literal">?</code>) operator.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.pdo_oci">
  <h3 class="title">PDO_OCI</h3>

  <p class="para">
   <span class="methodname"><a href="pdostatement.getcolumnmeta.php" class="methodname">PDOStatement::getColumnMeta()</a></span> is now available.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.pdo_sqlite">
  <h3 class="title">PDO_SQLite</h3>

  <p class="para">
   <code class="literal">PDOStatement::getAttribute(PDO::SQLITE_ATTR_READONLY_STATEMENT)</code>
   allows checking whether the statement is read-only, i.e. if it doesn&#039;t modify
   the database.
  </p>
  <p class="para">
   <code class="literal">PDO::setAttribute(PDO::SQLITE_ATTR_EXTENDED_RESULT_CODES, true)</code>
   enables the use of SQLite3 extended result codes in <span class="function"><a href="pdo.errorinfo.php" class="function">PDO::errorInfo()</a></span>
   and <span class="function"><a href="pdostatement.errorinfo.php" class="function">PDOStatement::errorInfo()</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.sqlite3">
  <h3 class="title">SQLite3</h3>

  <p class="para">
   Added <span class="methodname"><strong>SQLite3::lastExtendedErrorCode()</strong></span>
   to fetch the last extended result code.
  </p>
  <p class="para">
   Added <code class="literal">SQLite3::enableExtendedResultCodes($enable = true)</code>,
   which will make <span class="methodname"><a href="sqlite3.lasterrorcode.php" class="methodname">SQLite3::lastErrorCode()</a></span>
   return extended result codes.
  </p>
 </div>

 <div class="sect2" id="migration74.new-features.standard">
  <h3 class="title">Standard</h3>

  <div class="sect3" id="migration74.new-features.standard.strip-tags">
   <h4 class="title">strip_tags() with array of tag names</h4>
   <p class="para">
    <span class="function"><a href="function.strip-tags.php" class="function">strip_tags()</a></span> now also accepts an array of allowed tags:
    instead of <code class="literal">strip_tags($str, &#039;&lt;a&gt;&lt;p&gt;&#039;)</code>
    you can now write <code class="literal">strip_tags($str, [&#039;a&#039;, &#039;p&#039;])</code>.
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.standard.magic-serialize">
   <h4 class="title">Custom object serialization</h4>
   <p class="para">
    A new mechanism for custom object serialization has been added, which
    uses two new magic methods: <code class="literal">__serialize</code>
    and <code class="literal">__unserialize</code>.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Returns array containing all the necessary state of the object.<br /></span><span style="color: #007700">public function </span><span style="color: #0000BB">__serialize</span><span style="color: #007700">(): array<br />{<br />}<br /><br /></span><span style="color: #FF8000">// Restores the object state from the given data array.<br /></span><span style="color: #007700">public function </span><span style="color: #0000BB">__unserialize</span><span style="color: #007700">(array </span><span style="color: #0000BB">$data</span><span style="color: #007700">): </span><span style="color: #0000BB">void<br /></span><span style="color: #007700">{<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    The new serialization mechanism supersedes the
    <span class="interfacename"><a href="class.serializable.php" class="interfacename">Serializable</a></span> interface,
    which will be deprecated in the future.
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.standard.array-merge-no-args">
   <h4 class="title">Array merge functions without arguments</h4>
   <p class="para">
    <span class="function"><a href="function.array-merge.php" class="function">array_merge()</a></span> and <span class="function"><a href="function.array-merge-recursive.php" class="function">array_merge_recursive()</a></span>
    may now be called without any arguments, in which case they will return an empty array.
    This is useful in conjunction with the spread operator, e.g. <code class="literal">array_merge(...$arrays)</code>.
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.standard.proc-open">
   <h4 class="title"><span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> function</h4>
   <p class="para">
    <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> now accepts an array instead of a
    string for the command. In this case the process will be opened
    directly (without going through a shell) and PHP will take care of
    any necessary argument escaping.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />proc_open</span><span style="color: #007700">([</span><span style="color: #DD0000">'php'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-r'</span><span style="color: #007700">, </span><span style="color: #DD0000">'echo "Hello World\n";'</span><span style="color: #007700">], </span><span style="color: #0000BB">$descriptors</span><span style="color: #007700">, </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> now supports
    <code class="literal">redirect</code> and <code class="literal">null</code> descriptors.
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Like 2&gt;&amp;1 on the shell<br /></span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$cmd</span><span style="color: #007700">, [</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'pipe'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">], </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'redirect'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">]], </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Like 2&gt;/dev/null or 2&gt;nul on the shell<br /></span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$cmd</span><span style="color: #007700">, [</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'pipe'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">], </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'null'</span><span style="color: #007700">]], </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration74.new-features.standard.sodium-argon-hash">
   <h4 class="title">argon2i(d) without libargon</h4>
   <p class="para">
    <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> now has the argon2i and argon2id implementations
    from the sodium extension when PHP is built without libargon.
   </p>
  </div>

 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration74/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration74.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration74.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124654">  <div class="votes">
    <div id="Vu124654">
    <a href="/manual/vote-note.php?id=124654&amp;page=migration74.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124654">
    <a href="/manual/vote-note.php?id=124654&amp;page=migration74.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124654" title="88% like this...">
    101
    </div>
  </div>
  <a href="#124654" class="name">
  <strong class="user"><em>Rain</em></strong></a><a class="genanchor" href="#124654"> &para;</a><div class="date" title="2020-01-27 08:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124654">
<div class="phpcode"><code><span class="html">It should be noted that typed properties internally are never initialized to a default null. Unless of course you initialize them to null yourself. That's why you will always going to encounter this error if you try to access them before initialization.<br /><br />**Typed property foo::$bar must not be accessed before initialization**<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">User<br /></span><span class="keyword">{<br />    public </span><span class="default">$id</span><span class="keyword">;<br />    public </span><span class="default">string $name</span><span class="keyword">; </span><span class="comment">// Typed property (Uninitialized)<br />    </span><span class="keyword">public ?</span><span class="default">string $age </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">; </span><span class="comment">//  Typed property (Initialized)<br /></span><span class="keyword">}<br /><br /></span><span class="default">$user </span><span class="keyword">= new </span><span class="default">User</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">)); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">)); </span><span class="comment">// PHP Fatal error: Typed property User::$name must not be accessed before initialization<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">age</span><span class="keyword">));</span><span class="comment">// bool(true)<br /></span><span class="default">?&gt;<br /></span><br />Another thing worth noting is that it's not possible to initialize a property of type object to anything other than null.  Since the evaluation of properties happens at compile-time and object instantiation happens at runtime. One last thing, callable type is not supported due to its context-dependent behavior.</span></code></div>
  </div>
 </div>
  <div class="note" id="124763">  <div class="votes">
    <div id="Vu124763">
    <a href="/manual/vote-note.php?id=124763&amp;page=migration74.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124763">
    <a href="/manual/vote-note.php?id=124763&amp;page=migration74.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124763" title="56% like this...">
    6
    </div>
  </div>
  <a href="#124763" class="name">
  <strong class="user"><em>wow-apps.pro</em></strong></a><a class="genanchor" href="#124763"> &para;</a><div class="date" title="2020-02-26 08:42"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124763">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// How to get property type? For example for testing:<br /><br /></span><span class="keyword">class </span><span class="default">Foo<br /></span><span class="keyword">{<br />    private </span><span class="default">int $num</span><span class="keyword">;<br />    private </span><span class="default">bool $isPositive</span><span class="keyword">;<br />    private </span><span class="default">$notes</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$reflection </span><span class="keyword">= new </span><span class="default">\ReflectionClass</span><span class="keyword">(</span><span class="default">Foo</span><span class="keyword">::class);<br /></span><span class="default">$classProperties </span><span class="keyword">= </span><span class="default">$reflection</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">(</span><span class="default">\ReflectionProperty</span><span class="keyword">::</span><span class="default">IS_PRIVATE</span><span class="keyword">);<br />foreach (</span><span class="default">$classProperties </span><span class="keyword">as </span><span class="default">$classProperty</span><span class="keyword">) {<br />    </span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$classProperty</span><span class="keyword">-&gt;</span><span class="default">getType</span><span class="keyword">());<br />}<br /><br /></span><span class="comment">/**<br /> * Result:<br /> * "int"<br /> * "bool"<br /> * ""<br /> */</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration74.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration74.new-features.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration74.php">Migrating from PHP 7.3.x to PHP 7.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
