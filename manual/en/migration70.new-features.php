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

 <link rel="canonical" href="https://www.php.net/manual/en/migration70.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration70.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration70.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration70.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration70.incompatible.php">
 <link rel="next" href="https://www.php.net/manual/en/migration70.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration70.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration70.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration70.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration70.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration70.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration70.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration70.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration70.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration70.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration70.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration70.new-features.php" hreflang="zh">

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
        <a href="migration70.deprecated.php">
          Deprecated features in PHP 7.0.x &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration70.incompatible.php">
          &laquo; Backward incompatible changes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration70.php'>Migrating from PHP 5.6.x to PHP 7.0.x</a></li>      </ul>
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
            <option value='en/migration70.new-features.php' selected="selected">English</option>
            <option value='de/migration70.new-features.php'>German</option>
            <option value='es/migration70.new-features.php'>Spanish</option>
            <option value='fr/migration70.new-features.php'>French</option>
            <option value='it/migration70.new-features.php'>Italian</option>
            <option value='ja/migration70.new-features.php'>Japanese</option>
            <option value='pt_BR/migration70.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration70.new-features.php'>Russian</option>
            <option value='tr/migration70.new-features.php'>Turkish</option>
            <option value='uk/migration70.new-features.php'>Ukrainian</option>
            <option value='zh/migration70.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration70.new-features" class="sect1">
 <h2 class="title">New features</h2>

 <div class="sect2" id="migration70.new-features.scalar-type-declarations">
  <h3 class="title">Scalar type declarations</h3>

  <p class="para">
   Scalar
   <a href="language.types.declarations.php" class="link">type declarations</a>
   come in two flavours: coercive (default) and strict. The following types
   for parameters can now be enforced (either coercively or strictly): strings
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>), integers (<code class="literal">int</code>), floating-point
    numbers (<span class="type"><a href="language.types.float.php" class="type float">float</a></span>), and booleans (<code class="literal">bool</code>). They
    augment the other types introduced in PHP 5: class names, interfaces,
    <span class="type"><a href="language.types.array.php" class="type array">array</a></span> and <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Coercive mode<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">sumOfInts</span><span style="color: #007700">(</span><span style="color: #0000BB">int </span><span style="color: #007700">...</span><span style="color: #0000BB">$ints</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">array_sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$ints</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">sumOfInts</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'3'</span><span style="color: #007700">, </span><span style="color: #0000BB">4.1</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(9)
</pre></div>
   </div>
  </div>

  <p class="para">
   To enable strict mode, a single <a href="control-structures.declare.php" class="link"><code class="literal">declare</code></a> directive must be placed at the
   top of the file. This means that the strictness of typing for scalars is
   configured on a per-file basis. This directive not only affects the type
   declarations of parameters, but also a function&#039;s return type (see
   <a href="language.types.declarations.php" class="link">return type declarations</a>,
   built-in PHP functions, and functions from loaded
   extensions.
  </p>

  <p class="para">
   Full documentation and examples of scalar type declarations can be found in
   the
   <a href="language.types.declarations.php" class="link">type declaration</a>
   reference.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.return-type-declarations">
  <h3 class="title">Return type declarations</h3>

  <p class="para">
   PHP 7 adds support for 
   <a href="language.types.declarations.php" class="link">return type declarations</a>.
   Similarly to
   <a href="language.types.declarations.php" class="link">argument type declarations</a>,
   return type declarations specify the type of the value that will be
   returned from a function. The same
   <a href="language.types.declarations.php" class="link">types</a>
   are available for return type declarations as are available for argument
   type declarations.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">arraysSum</span><span style="color: #007700">(array ...</span><span style="color: #0000BB">$arrays</span><span style="color: #007700">): array<br />{<br />    return </span><span style="color: #0000BB">array_map</span><span style="color: #007700">(function(array </span><span style="color: #0000BB">$array</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">{<br />        return </span><span style="color: #0000BB">array_sum</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br />    }, </span><span style="color: #0000BB">$arrays</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">arraysSum</span><span style="color: #007700">([</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">], [</span><span style="color: #0000BB">4</span><span style="color: #007700">,</span><span style="color: #0000BB">5</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">], [</span><span style="color: #0000BB">7</span><span style="color: #007700">,</span><span style="color: #0000BB">8</span><span style="color: #007700">,</span><span style="color: #0000BB">9</span><span style="color: #007700">]));</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Array
(
    [0] =&gt; 6
    [1] =&gt; 15
    [2] =&gt; 24
)
</pre></div>
   </div>
  </div>

  <p class="para">
   Full documentation and examples of return type declarations can be found in
   the
   <a href="language.types.declarations.php" class="link">return type declarations</a>.
   reference.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.null-coalesce-op">
  <h3 class="title">Null coalescing operator</h3>

  <p class="para">
   The null coalescing operator (<code class="literal">??</code>) has been added as
   syntactic sugar for the common case of needing to use a ternary in
   conjunction with <span class="function"><a href="function.isset.php" class="function">isset()</a></span>. It returns its first operand
   if it exists and is not <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>; otherwise it returns its second operand.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Fetches the value of $_GET['user'] and returns 'nobody'<br />// if it does not exist.<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">] ?? </span><span style="color: #DD0000">'nobody'</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// This is equivalent to:<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">]) ? </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">] : </span><span style="color: #DD0000">'nobody'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Coalescing can be chained: this will return the first<br />// defined value out of $_GET['user'], $_POST['user'], and<br />// 'nobody'.<br /></span><span style="color: #0000BB">$username </span><span style="color: #007700">= </span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">] ?? </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'user'</span><span style="color: #007700">] ?? </span><span style="color: #DD0000">'nobody'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  
 </div>

 <div class="sect2" id="migration70.new-features.spaceship-op">
  <h3 class="title">Spaceship operator</h3>
  <p class="para">
   The spaceship operator is used for comparing two expressions. It returns -1, 0 
   or 1 when <var class="varname">$a</var> is respectively less than, equal to, or greater 
   than <var class="varname">$b</var>. Comparisons are performed according to PHP&#039;s usual
   <a href="types.comparisons.php" class="link">type comparison rules</a>.
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Integers<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">2 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /><br />// Floats<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1.5</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">1.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">2.5</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">2.5 </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #0000BB">1.5</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /> <br />// Strings<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"a" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"a"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"a" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"b"</span><span style="color: #007700">; </span><span style="color: #FF8000">// -1<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"b" </span><span style="color: #007700">&lt;=&gt; </span><span style="color: #DD0000">"a"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 1<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  
 </div>

 <div class="sect2" id="migration70.new-features.define-array">
  <h3 class="title">Constant arrays using <span class="function"><a href="function.define.php" class="function">define()</a></span></h3>

  <p class="para">
   <span class="type"><a href="language.types.array.php" class="type Array">Array</a></span> constants can now be defined with
   <span class="function"><a href="function.define.php" class="function">define()</a></span>. In PHP 5.6, they could only be defined with
   <a href="language.constants.syntax.php" class="link"><code class="literal">const</code></a>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">'ANIMALS'</span><span style="color: #007700">, [<br />    </span><span style="color: #DD0000">'dog'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'cat'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'bird'<br /></span><span style="color: #007700">]);<br /><br />echo </span><span style="color: #0000BB">ANIMALS</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]; </span><span style="color: #FF8000">// outputs "cat"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration70.new-features.anonymous-classes">
  <h3 class="title">Anonymous classes</h3>

  <p class="para">
   Support for anonymous classes has been added via <code class="literal">new
   class</code>. These can be used in place of full class definitions for
   throwaway objects:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">Logger </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">string $msg</span><span style="color: #007700">);<br />}<br /><br />class </span><span style="color: #0000BB">Application </span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$logger</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">getLogger</span><span style="color: #007700">(): </span><span style="color: #0000BB">Logger </span><span style="color: #007700">{<br />         return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logger</span><span style="color: #007700">;<br />    }<br /><br />    public function </span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(</span><span style="color: #0000BB">Logger $logger</span><span style="color: #007700">) {<br />         </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">logger </span><span style="color: #007700">= </span><span style="color: #0000BB">$logger</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$app </span><span style="color: #007700">= new </span><span style="color: #0000BB">Application</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setLogger</span><span style="color: #007700">(new class implements </span><span style="color: #0000BB">Logger </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">string $msg</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$msg</span><span style="color: #007700">;<br />    }<br />});<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLogger</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
object(class@anonymous)#2 (0) {
}
</pre></div>
   </div>
  </div>

  <p class="para">
   Full documentation can be found in the 
   <a href="language.oop5.anonymous.php" class="link">anonymous class reference</a>.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.unicode-codepoint-escape-syntax">
  <h3 class="title">Unicode codepoint escape syntax</h3>

  <p class="para">
   This takes a Unicode codepoint in hexadecimal form, and outputs that
   codepoint in UTF-8 to a double-quoted string or a heredoc. Any valid
   codepoint is accepted, with leading 0&#039;s being optional.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"\u{aa}"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"\u{0000aa}"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"\u{9999}"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo &lt;&lt;&lt;EOT<br /></span><span style="color: #DD0000">\u{01f418}<br /></span><span style="color: #007700">EOT;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
ª
ª (same as before but with optional leading 0&#039;s)
香
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration70.new-features.closure-call-method">
  <h3 class="title"><span class="methodname"><a href="closure.call.php" class="methodname">Closure::call()</a></span></h3>

  <p class="para">
   <span class="methodname"><a href="closure.call.php" class="methodname">Closure::call()</a></span> is a more performant, shorthand way
   of temporarily binding an object scope to a closure and invoking it.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{private </span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;}<br /><br /></span><span style="color: #FF8000">// Pre PHP 7 code<br /></span><span style="color: #0000BB">$getX </span><span style="color: #007700">= function() {return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">x</span><span style="color: #007700">;};<br /></span><span style="color: #0000BB">$getXCB </span><span style="color: #007700">= </span><span style="color: #0000BB">$getX</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindTo</span><span style="color: #007700">(new </span><span style="color: #0000BB">A</span><span style="color: #007700">, </span><span style="color: #DD0000">'A'</span><span style="color: #007700">); </span><span style="color: #FF8000">// intermediate closure<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$getXCB</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// PHP 7+ code<br /></span><span style="color: #0000BB">$getX </span><span style="color: #007700">= function() {return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">x</span><span style="color: #007700">;};<br />echo </span><span style="color: #0000BB">$getX</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">call</span><span style="color: #007700">(new </span><span style="color: #0000BB">A</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
1
1
</pre></div>
   </div>
  </div>
 </div>
 <div class="sect2" id="migration70.new-features.filtered-unserialize">
  <h3 class="title">Filtered <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span></h3>

  <p class="para">
   This feature seeks to provide better security when unserializing objects on
   untrusted data. It prevents possible code injections by enabling the
   developer to whitelist classes that can be unserialized.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// converts all objects into __PHP_Incomplete_Class object<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, [</span><span style="color: #DD0000">"allowed_classes" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">]);<br /><br /></span><span style="color: #FF8000">// converts all objects into __PHP_Incomplete_Class object except those of MyClass and MyClass2<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, [</span><span style="color: #DD0000">"allowed_classes" </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">"MyClass"</span><span style="color: #007700">, </span><span style="color: #DD0000">"MyClass2"</span><span style="color: #007700">]]);<br /><br /></span><span style="color: #FF8000">// default behaviour (same as omitting the second argument) that accepts all classes<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">, [</span><span style="color: #DD0000">"allowed_classes" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration70.new-features.intlchar">
  <h3 class="title"><span class="classname"><a href="class.intlchar.php" class="classname">IntlChar</a></span></h3>

  <p class="para">
   The new <span class="classname"><a href="class.intlchar.php" class="classname">IntlChar</a></span> class seeks to expose additional
   ICU functionality. The class itself defines a number of static methods and
   constants that can be used to manipulate unicode characters.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />printf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%x'</span><span style="color: #007700">, </span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">CODEPOINT_MAX</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">charName</span><span style="color: #007700">(</span><span style="color: #DD0000">'@'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">IntlChar</span><span style="color: #007700">::</span><span style="color: #0000BB">ispunct</span><span style="color: #007700">(</span><span style="color: #DD0000">'!'</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
10ffff
COMMERCIAL AT
bool(true)
</pre></div>
   </div>
  </div>

  <p class="para">
   In order to use this class, the <a href="book.intl.php" class="link">Intl</a> extension must be installed.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.expectations">
  <h3 class="title">Expectations</h3>

  <p class="para">
   Expectations are a
   backwards compatible enhancement to the older <span class="function"><a href="function.assert.php" class="function">assert()</a></span>
   function. They allow for zero-cost assertions in production code, and
   provide the ability to throw custom exceptions when the assertion fails.
  </p>

  <p class="para">
   While the old API continues to be maintained for compatibility,
   <span class="function"><a href="function.assert.php" class="function">assert()</a></span> is now a language construct, allowing the first
   parameter to be an expression rather than just a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> to be
   evaluated or a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> value to be tested.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'assert.exception'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />class </span><span style="color: #0000BB">CustomError </span><span style="color: #007700">extends </span><span style="color: #0000BB">AssertionError </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">assert</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">, new </span><span style="color: #0000BB">CustomError</span><span style="color: #007700">(</span><span style="color: #DD0000">'Some error message'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Uncaught CustomError: Some error message
</pre></div>
   </div>
  </div>

  <p class="para">
   Full details on this feature, including how to configure it in both
   development and production environments, can be found on the manual page
   of the <span class="function"><a href="function.assert.php" class="function">assert()</a></span> language construct.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.group-use-declarations">
  <h3 class="title">Group <code class="literal">use</code> declarations</h3>

  <p class="para">
   Classes, functions and constants being imported from the same <a href="language.namespaces.definition.php" class="link"><code class="literal">namespace</code></a>
   can now be grouped together in a single <a href="language.namespaces.importing.php" class="link"><code class="literal">use</code></a> statement.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Pre PHP 7 code<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">some\namespace\ClassA</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">some\namespace\ClassB</span><span style="color: #007700">;<br />use </span><span style="color: #0000BB">some\namespace\ClassC </span><span style="color: #007700">as </span><span style="color: #0000BB">C</span><span style="color: #007700">;<br /><br />use function </span><span style="color: #0000BB">some\namespace\fn_a</span><span style="color: #007700">;<br />use function </span><span style="color: #0000BB">some\namespace\fn_b</span><span style="color: #007700">;<br />use function </span><span style="color: #0000BB">some\namespace\fn_c</span><span style="color: #007700">;<br /><br />use const </span><span style="color: #0000BB">some\namespace\ConstA</span><span style="color: #007700">;<br />use const </span><span style="color: #0000BB">some\namespace\ConstB</span><span style="color: #007700">;<br />use const </span><span style="color: #0000BB">some\namespace\ConstC</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// PHP 7+ code<br /></span><span style="color: #007700">use </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">ClassA</span><span style="color: #007700">, </span><span style="color: #0000BB">ClassB</span><span style="color: #007700">, </span><span style="color: #0000BB">ClassC </span><span style="color: #007700">as </span><span style="color: #0000BB">C</span><span style="color: #007700">};<br />use function </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">fn_a</span><span style="color: #007700">, </span><span style="color: #0000BB">fn_b</span><span style="color: #007700">, </span><span style="color: #0000BB">fn_c</span><span style="color: #007700">};<br />use const </span><span style="color: #0000BB">some\namespace</span><span style="color: #007700">\{</span><span style="color: #0000BB">ConstA</span><span style="color: #007700">, </span><span style="color: #0000BB">ConstB</span><span style="color: #007700">, </span><span style="color: #0000BB">ConstC</span><span style="color: #007700">};<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration70.new-features.generator-return-expressions">
  <h3 class="title">Generator Return Expressions</h3>

  <p class="para">
   This feature builds upon the generator functionality introduced into PHP 5.5.
   It enables for a <code class="literal">return</code> statement to be used within a
   generator to enable for a final expression to be returned (return by
   reference is not allowed). This value can be fetched using the new 
   <code class="literal">Generator::getReturn()</code> method, which may only be used
   once the generator has finished yielding values.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$gen </span><span style="color: #007700">= (function() {<br />    yield </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />    return </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />})();<br /><br />foreach (</span><span style="color: #0000BB">$gen </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$val</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #0000BB">$gen</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getReturn</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
1
2
3
</pre></div>
   </div>
  </div>

  <p class="para">
   Being able to explicitly return a final value from a generator is a handy
   ability to have. This is because it enables for a final value to be returned
   by a generator (from perhaps some form of coroutine computation) that can be
   specifically handled by the client code executing the generator. This is far
   simpler than forcing the client code to firstly check whether the final
   value has been yielded, and then if so, to handle that value specifically.
  </p>
 </div>
 <div class="sect2" id="migration70.new-features.generator-delegation">
  <h3 class="title">Generator delegation</h3>

  <p class="para">
   Generators can now delegate to another generator,
   <span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> object or <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
   automatically, without needing to write boilerplate in the outermost
   generator by using the <a href="language.generators.syntax.php#control-structures.yield.from" class="link"><code class="literal">yield from</code></a> construct.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">gen</span><span style="color: #007700">()<br />{<br />    yield </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    yield from </span><span style="color: #0000BB">gen2</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">gen2</span><span style="color: #007700">()<br />{<br />    yield </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br />    yield </span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />}<br /><br />foreach (</span><span style="color: #0000BB">gen</span><span style="color: #007700">() as </span><span style="color: #0000BB">$val</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #0000BB">$val</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
1
2
3
4
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration70.new-features.intdiv">
  <h3 class="title">Integer division with <span class="function"><a href="function.intdiv.php" class="function">intdiv()</a></span></h3>

  <p class="para">
   The new <span class="function"><a href="function.intdiv.php" class="function">intdiv()</a></span> function performs an integer division
   of its operands and returns it.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">intdiv</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(3)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration70.new-features.session-options">
  <h3 class="title">Session options</h3>

  <p class="para">
   <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> now accepts an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of
   options that override the
   <a href="session.configuration.php" class="link">session configuration directives</a>
   normally set in php.ini.
  </p>

  <p class="para">
   These options have also been expanded to support
   <a href="session.configuration.php#ini.session.lazy-write" class="link">session.lazy_write</a>, which is
   on by default and causes PHP to only overwrite any session file if the
   session data has changed, and <code class="literal">read_and_close</code>, which is
   an option that can only be passed to <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span> to
   indicate that the session data should be read and then the session should
   immediately be closed unchanged.
  </p>

  <p class="para">
   For example, to set
   <a href="session.configuration.php#ini.session.cache-limiter" class="link">session.cache_limiter</a> to
   <code class="literal">private</code> and immediately close the session after reading
   it:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />session_start</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'cache_limiter' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'private'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'read_and_close' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration70.new-features.preg-repace-callback-array-function">
  <h3 class="title"><span class="function"><a href="function.preg-replace-callback-array.php" class="function">preg_replace_callback_array()</a></span></h3>

  <p class="para">
   The new <span class="function"><a href="function.preg-replace-callback-array.php" class="function">preg_replace_callback_array()</a></span> function enables
   code to be written more cleanly when using the
   <span class="function"><a href="function.preg-replace-callback.php" class="function">preg_replace_callback()</a></span> function. Prior to PHP 7,
   callbacks that needed to be executed per regular expression required the
   callback function to be polluted with lots of branching.
  </p>

  <p class="para">
   Now, callbacks can be registered to each regular expression using an
   associative array, where the key is a regular expression and the value is a
   callback.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.csprng-functions">
  <h3 class="title">CSPRNG Functions</h3>

  <p class="para">
   Two new functions have been added to generate cryptographically secure
   integers and strings in a cross platform way:
   <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> and <span class="function"><a href="function.random-int.php" class="function">random_int()</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration70.new-features.list-arrayaccess">
  <h3 class="title">
   <span class="function"><a href="function.list.php" class="function">list()</a></span> can always unpack objects implementing
   <span class="classname"><a href="class.arrayaccess.php" class="classname">ArrayAccess</a></span>
  </h3>

  <p class="para">
   Previously, <span class="function"><a href="function.list.php" class="function">list()</a></span> was not guaranteed to operate
   correctly with objects implementing <span class="classname"><a href="class.arrayaccess.php" class="classname">ArrayAccess</a></span>.
   This has been fixed.
  </p>
 </div>
 
 <div class="sect2" id="migration70.new-features.others">
  <h3 class="title">Other Features</h3>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     Class member access on cloning has been added,
     e.g. <code class="literal">(clone $foo)-&gt;bar()</code>.
    </span>
   </li>
  </ul>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration70/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration70.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration70.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration70.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124622">  <div class="votes">
    <div id="Vu124622">
    <a href="/manual/vote-note.php?id=124622&amp;page=migration70.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124622">
    <a href="/manual/vote-note.php?id=124622&amp;page=migration70.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124622" title="84% like this...">
    65
    </div>
  </div>
  <a href="#124622" class="name">
  <strong class="user"><em>Adrian Wiik</em></strong></a><a class="genanchor" href="#124622"> &para;</a><div class="date" title="2020-01-16 01:52"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124622">
<div class="phpcode"><code><span class="html">A good rule of thumb for remembering what the spaceship operator expression returns is to replace the spaceship operator with a minus sign (-). If the result is negative, 0 or positive, the expression will return -1, 0 or 1 respectively.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">5 </span><span class="keyword">&lt;=&gt; </span><span class="default">8</span><span class="keyword">; </span><span class="comment">// 5 - 8 = -3, prints -1<br /></span><span class="keyword">echo </span><span class="default">2 </span><span class="keyword">&lt;=&gt; </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// 2 - 2 = 0, prints 0<br /></span><span class="keyword">echo </span><span class="default">4 </span><span class="keyword">&lt;=&gt; </span><span class="default">2</span><span class="keyword">; </span><span class="comment">// 4 - 2 = 2, prints 1</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125356">  <div class="votes">
    <div id="Vu125356">
    <a href="/manual/vote-note.php?id=125356&amp;page=migration70.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125356">
    <a href="/manual/vote-note.php?id=125356&amp;page=migration70.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125356" title="69% like this...">
    15
    </div>
  </div>
  <a href="#125356" class="name">
  <strong class="user"><em>Julian Sawicki</em></strong></a><a class="genanchor" href="#125356"> &para;</a><div class="date" title="2020-09-12 01:52"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125356">
<div class="phpcode"><code><span class="html">In php 7.0 it's possible to curry functions in a way that's similar to JavaScript.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// A curried function<br /></span><span class="keyword">function </span><span class="default">add</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) {<br />  return function(</span><span class="default">$b</span><span class="keyword">) use (</span><span class="default">$a</span><span class="keyword">) {<br />    return </span><span class="default">$a </span><span class="keyword">+ </span><span class="default">$b</span><span class="keyword">;<br />  };<br />}<br /><br /></span><span class="comment">// Invoking curried function in PHP 7 <br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">add</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">)(</span><span class="default">15</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">); </span><span class="comment">// int 25<br /><br /></span><span class="default">?&gt;<br /></span><br />Currying in this way is not possible in php 5.6.</span></code></div>
  </div>
 </div>
  <div class="note" id="130145">  <div class="votes">
    <div id="Vu130145">
    <a href="/manual/vote-note.php?id=130145&amp;page=migration70.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130145">
    <a href="/manual/vote-note.php?id=130145&amp;page=migration70.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130145" title="no votes...">
    0
    </div>
  </div>
  <a href="#130145" class="name">
  <strong class="user"><em>rshaw8k at yahoo dot com</em></strong></a><a class="genanchor" href="#130145"> &para;</a><div class="date" title="2025-03-15 09:25"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130145">
<div class="phpcode"><code><span class="html">As a finding aid, here is the ordered list of section titles on this page:<br /><br />     Scalar type declarations<br />     Return type declarations<br />     Null coalescing operator<br />     Spaceship operator<br />     Constant arrays using define()<br />     Anonymous classes<br />     Unicode codepoint escape syntax<br />     Closure::call()<br />     Filtered unserialize()<br />     IntlChar<br />     Expectations<br />     Group use declarations<br />     Generator Return Expressions<br />     Generator delegation<br />     Integer division with intdiv()<br />     Session options<br />     preg_replace_callback_array()<br />     CSPRNG Functions<br />     list() can always unpack objects implementing ArrayAccess<br />     Other Features</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration70.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration70.new-features.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration70.php">Migrating from PHP 5.6.x to PHP 7.0.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration70.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="current">
                            <a href="migration70.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration70.deprecated.php" title="Deprecated features in PHP 7.0.x">Deprecated features in PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.changed-functions.php" title="Changed functions">Changed functions</a>
                        </li>
                                                <li class="">
                            <a href="migration70.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration70.classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration70.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration70.sapi-changes.php" title="Changes in SAPI Modules">Changes in SAPI Modules</a>
                        </li>
                                                <li class="">
                            <a href="migration70.removed-exts-sapis.php" title="Removed Extensions and SAPIs">Removed Extensions and SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="migration70.other-changes.php" title="Other Changes">Other Changes</a>
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
