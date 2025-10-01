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

 <link rel="canonical" href="https://www.php.net/manual/en/migration84.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration84.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration84.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration84.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration84.php">
 <link rel="next" href="https://www.php.net/manual/en/migration84.new-classes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration84.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration84.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration84.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration84.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration84.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration84.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration84.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration84.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration84.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration84.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration84.new-features.php" hreflang="zh">

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
        <a href="migration84.new-classes.php">
          New Classes, Enums, and Interfaces &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration84.php">
          &laquo; Migrating from PHP 8.3.x to PHP 8.4.x        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration84.php'>Migrating from PHP 8.3.x to PHP 8.4.x</a></li>      </ul>
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
            <option value='en/migration84.new-features.php' selected="selected">English</option>
            <option value='de/migration84.new-features.php'>German</option>
            <option value='es/migration84.new-features.php'>Spanish</option>
            <option value='fr/migration84.new-features.php'>French</option>
            <option value='it/migration84.new-features.php'>Italian</option>
            <option value='ja/migration84.new-features.php'>Japanese</option>
            <option value='pt_BR/migration84.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration84.new-features.php'>Russian</option>
            <option value='tr/migration84.new-features.php'>Turkish</option>
            <option value='uk/migration84.new-features.php'>Ukrainian</option>
            <option value='zh/migration84.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration84.new-features" class="sect1">
 <h2 class="title">New Features</h2>

 
 <div class="sect2" id="migration84.new-features.core">
  <h3 class="title">PHP Core</h3>

  
  <div class="sect3" id="migration84.new-features.core.property-hooks">
   <h4 class="title">Property Hooks</h4>

   <p class="simpara">
    Object properties may now have additional logic associated with their
    <code class="literal">get</code> and <code class="literal">set</code> operations.
    Depending on the usage, that may or may not make the property virtual,
    that is, it has no backing value at all.
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Person<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// A "virtual" property.  It may not be set explicitly.<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $fullName </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">get </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstName </span><span style="color: #007700">. </span><span style="color: #DD0000">' ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastName</span><span style="color: #007700">;<br />    }<br /><br />    </span><span style="color: #FF8000">// All write operations go through this hook, and the result is what is written.<br />    // Read access happens normally.<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $firstName </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />    }<br /><br />    </span><span style="color: #FF8000">// All write operations go through this hook, which has to write to the backing value itself.<br />    // Read access happens normally.<br />    </span><span style="color: #007700">public </span><span style="color: #0000BB">string $lastName </span><span style="color: #007700">{<br />        </span><span style="color: #0000BB">set </span><span style="color: #007700">{<br />            if (</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">) &lt; </span><span style="color: #0000BB">2</span><span style="color: #007700">) {<br />                throw new </span><span style="color: #0000BB">\InvalidArgumentException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Too short'</span><span style="color: #007700">);<br />            }<br />            </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastName </span><span style="color: #007700">= </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= new </span><span style="color: #0000BB">Person</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstName </span><span style="color: #007700">= </span><span style="color: #DD0000">'peter'</span><span style="color: #007700">;<br />print </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">firstName</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints "Peter"<br /></span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastName </span><span style="color: #007700">= </span><span style="color: #DD0000">'Peterson'</span><span style="color: #007700">;<br />print </span><span style="color: #0000BB">$p</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fullName</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints "Peter Peterson"</span></span></code></div>
    </div>

   </div>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.asymmetric-property-visibility">
   <h4 class="title">Asymmetric Property Visibility</h4>

   <p class="simpara">
    Object properties may now have their <code class="literal">set</code> visibility
    controlled separately from the <code class="literal">get</code> visibility.
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// The first visibility modifier controls the get-visibility, and the second modifier<br />    // controls the set-visibility. The get-visibility must not be narrower than set-visibility.<br />    </span><span style="color: #007700">public protected(</span><span style="color: #0000BB">set</span><span style="color: #007700">) </span><span style="color: #0000BB">string $name</span><span style="color: #007700">;<br /><br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">string $name</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />    }<br />}</span></span></code></div>
    </div>

   </div>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.lazy-objects">
   <h4 class="title">Lazy Objects</h4>
   <p class="simpara">
    It is now possible to create objects whose initialization is deferred until
    they are accessed. Libraries and frameworks can leverage these lazy objects
    to defer fetching data or dependencies required for initialization.
   </p>
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Example<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(private </span><span style="color: #0000BB">int $data</span><span style="color: #007700">)<br />    {<br />    }<br /><br />    </span><span style="color: #FF8000">// ...<br /></span><span style="color: #007700">}<br /><br /></span><span style="color: #0000BB">$initializer </span><span style="color: #007700">= static function (</span><span style="color: #0000BB">Example $ghost</span><span style="color: #007700">): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />    </span><span style="color: #FF8000">// Fetch data or dependencies<br />    </span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">getData</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Initialize<br />    </span><span style="color: #0000BB">$ghost</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />};<br /><br /></span><span style="color: #0000BB">$reflector </span><span style="color: #007700">= new </span><span style="color: #0000BB">ReflectionClass</span><span style="color: #007700">(</span><span style="color: #0000BB">Example</span><span style="color: #007700">::class);<br /></span><span style="color: #0000BB">$object </span><span style="color: #007700">= </span><span style="color: #0000BB">$reflector</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newLazyGhost</span><span style="color: #007700">(</span><span style="color: #0000BB">$initializer</span><span style="color: #007700">);</span></span></code></div>
    </div>

   </div>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.deprecated-attribute">
   <h4 class="title"><code class="code">#[\Deprecated]</code> attribute</h4>

   <p class="simpara">
    The new <span class="classname"><a href="class.deprecated.php" class="classname">Deprecated</a></span> attribute can be used to mark functions, methods,
    and class constants as deprecated. The behavior of functionality deprecated with this
    attribute matches the behavior of the existing deprecation mechanism for functionality
    provided by PHP itself. The only exception is that the emitted error code is
    <strong><code><a href="errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></code></strong> instead of <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong>.
   </p>

   <p class="simpara">
    Existing deprecations in functionality provided by PHP itself have been updated to use
    the attribute, improving the emitted error messages by including a short explanation.
   </p>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.rfc1867">
   <h4 class="title">Parsing RFC1867 (multipart) requests in non-POST HTTP requests</h4>

   
   <p class="simpara">
    Added <span class="function"><a href="function.request-parse-body.php" class="function">request_parse_body()</a></span> function that allows parsing
    RFC1867 (multipart) requests in non-POST HTTP requests.
   </p>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.new-chaining">
   <h4 class="title">Chaining <a href="language.oop5.basic.php#language.oop5.basic.new" class="link"><code class="literal">new</code></a> expressions without parentheses</h4>

   
   <p class="simpara">
    New expressions with constructor arguments are now dereferencable, meaning
    they allow chaining method calls, property accesses, etc. without enclosing
    the expression in parentheses.
   </p>
  </div>

  <div class="sect3" id="migration84.new-features.core.debug-weakref">
   <h4 class="title">Improved Debugging Info for <span class="classname"><a href="class.weakreference.php" class="classname">WeakReference</a></span></h4>

   
   <p class="simpara">
    Getting the debug info for <span class="classname"><a href="class.weakreference.php" class="classname">WeakReference</a></span> will now
    also output the object it references, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if the reference is no
    longer valid.
   </p>
  </div>

  <div class="sect3" id="migration84.new-features.core.debug-closure">
   <h4 class="title">Improved Debugging Info for <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span></h4>

   
   <p class="simpara">
    The output of <span class="methodname"><strong>Closure::__debugInfo()</strong></span> now includes
    the name, file, and line of the <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span>.
   </p>
  </div>

  
  <div class="sect3" id="migration84.new-features.core.multiple-namespaces-symbols">
   <h4 class="title">Defining Identical Symbols in Different Namespace Blocks</h4>

   
   <p class="simpara">
    Exiting a namespace now clears seen symbols.
    This allows using a symbol in a namespace block, even if a previous
    namespace block declared a symbol with the same name.
    
   </p>
  </div>

 </div>

 <div class="sect2" id="migration84.new-features.curl">
  <h3 class="title">cURL</h3>

  <p class="simpara">
   <span class="function"><a href="function.curl-version.php" class="function">curl_version()</a></span> returns an additional
   <code class="literal">feature_list</code> value, which is an associative array
   of all known cURL features, and whether they are supported (<strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>)
   or not (<strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>).
  </p>

  <p class="simpara">
   Added <strong><code><a href="curl.constants.php#constant.curl-http-version-3">CURL_HTTP_VERSION_3</a></code></strong> and
   <strong><code><a href="curl.constants.php#constant.curl-http-version-3only">CURL_HTTP_VERSION_3ONLY</a></code></strong> constants (available
   since libcurl 7.66 and 7.88) as available options for
   <strong><code><a href="curl.constants.php#constant.curlopt-http-version">CURLOPT_HTTP_VERSION</a></code></strong>.
  </p>

  <p class="simpara">
   Added <strong><code><a href="curl.constants.php#constant.curlopt-prereqfunction">CURLOPT_PREREQFUNCTION</a></code></strong> as a cURL option that
   accepts a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> to be called after the connection is made,
   but before the request is sent.
   This callable must return either <strong><code><a href="curl.constants.php#constant.curl-prereqfunc-ok">CURL_PREREQFUNC_OK</a></code></strong> or
   <strong><code><a href="curl.constants.php#constant.curl-prereqfunc-abort">CURL_PREREQFUNC_ABORT</a></code></strong> to allow or abort the request.
  </p>

  <p class="simpara">
   Added <strong><code><a href="curl.constants.php#constant.curlopt-server-response-timeout">CURLOPT_SERVER_RESPONSE_TIMEOUT</a></code></strong>,
   which was formerly known as <strong><code><a href="curl.constants.php#constant.curlopt-ftp-response-timeout">CURLOPT_FTP_RESPONSE_TIMEOUT</a></code></strong>.
   Both constants hold the same value.
  </p>

  <p class="para">
   Added <strong><code><a href="curl.constants.php#constant.curlopt-debugfunction">CURLOPT_DEBUGFUNCTION</a></code></strong> as a cURL option that
   accepts a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> that gets called during the request lifetime
   with the <span class="classname"><a href="class.curlhandle.php" class="classname">CurlHandle</a></span> object,
   an integer containing the debug message type, and a string containing the
   debug message.
   The debug message type is one of the following constants:
   <ul class="simplelist">
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-text">CURLINFO_TEXT</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-header-in">CURLINFO_HEADER_IN</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-header-out">CURLINFO_HEADER_OUT</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-data-in">CURLINFO_DATA_IN</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-data-out">CURLINFO_DATA_OUT</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-ssl-data-in">CURLINFO_SSL_DATA_IN</a></code></strong></li>
    <li><strong><code><a href="curl.constants.php#constant.curlinfo-ssl-data-out">CURLINFO_SSL_DATA_OUT</a></code></strong></li>
   </ul>
   Once this option is set, <strong><code><a href="curl.constants.php#constant.curlinfo-header-out">CURLINFO_HEADER_OUT</a></code></strong>
   must not be set because it uses the same libcurl functionality.
  </p>

  <p class="simpara">
   The <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span> now returns an additional
   <code class="literal">posttransfer_time_us</code> key, containing the number of
   microseconds from the start until the last byte is sent.
   When a redirect is followed, the time from each request is added together.
   This value can also be retrieved by passing
   <strong><code><a href="curl.constants.php#constant.curlinfo-posttransfer-time-t">CURLINFO_POSTTRANSFER_TIME_T</a></code></strong> to the
   <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span> <code class="parameter">option</code> parameter.
   This requires libcurl 8.10.0 or later.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.dom">
  <h3 class="title">DOM</h3>

  
  
  <p class="simpara">
   Added the Dom namespace with new classes as counterparts
   to the existing DOM classes (e.g. <span class="classname"><a href="class.dom-node.php" class="classname">Dom\Node</a></span> is the new
   <span class="classname"><a href="class.domnode.php" class="classname">DOMNode</a></span>).
   These classes are compatible with HTML 5 and are WHATWG spec-compliant;
   solving long-standing bugs in the DOM extension.
   The old DOM classes remain available for backwards compatibility.
  </p>

  <p class="para">
   Added the <span class="methodname"><a href="domnode.comparedocumentposition.php" class="methodname">DOMNode::compareDocumentPosition()</a></span>
   with its associated constants:
   <ul class="simplelist">
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-disconnected">DOMNode::DOCUMENT_POSITION_DISCONNECTED</a></code></strong></li>
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-preceding">DOMNode::DOCUMENT_POSITION_PRECEDING</a></code></strong></li>
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-following">DOMNode::DOCUMENT_POSITION_FOLLOWING</a></code></strong></li>
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-contains">DOMNode::DOCUMENT_POSITION_CONTAINS</a></code></strong></li>
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-contained-by">DOMNode::DOCUMENT_POSITION_CONTAINED_BY</a></code></strong></li>
    <li><strong><code><a href="class.domnode.php#domnode.constants.document-position-implementation-specific">DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC</a></code></strong></li>
   </ul>
  </p>

  
  <p class="simpara">
   It is now possible to pass any callable to
   <span class="methodname"><a href="domxpath.registerphpfunctions.php" class="methodname">DOMXPath::registerPhpFunctions()</a></span>.

   Furthermore, with <span class="methodname"><a href="domxpath.registerphpfunctionns.php" class="methodname">DOMXPath::registerPhpFunctionNs()</a></span>,
   callbacks can now be registered that will use native function call syntax
   rather than using <code class="code">php:function(&#039;name&#039;)</code>.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.intl">
  <h3 class="title">Intl</h3>

  <p class="simpara">
   Added the <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfodd">NumberFormatter::ROUND_HALFODD</a></code></strong> to
   complement the existing <strong><code><a href="class.numberformatter.php#numberformatter.constants.round-halfeven">NumberFormatter::ROUND_HALFEVEN</a></code></strong>
   functionality.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.openssl">
  <h3 class="title">OpenSSL</h3>

  <p class="simpara">
   Added support for Curve25519 + Curve448 based keys.
   Specifically x25519, ed25519, x448 and ed448 fields are supported in
   <span class="function"><a href="function.openssl-pkey-new.php" class="function">openssl_pkey_new()</a></span>,
   <span class="function"><a href="function.openssl-pkey-get-details.php" class="function">openssl_pkey_get_details()</a></span>,
   <span class="function"><a href="function.openssl-sign.php" class="function">openssl_sign()</a></span>, and
   <span class="function"><a href="function.openssl-verify.php" class="function">openssl_verify()</a></span> were extended to support those keys.
  </p>

  <p class="simpara">
   Implement PASSWORD_ARGON2 password hashing.
   Requires OpenSSL 3.2 and NTS build.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.pcre">
  <h3 class="title">PCRE</h3>

  <p class="simpara">
   The bundled pcre2lib has been updated to version 10.44.
   As a consequence, LoongArch JIT support has been added, spaces
   are now allowed between braces in Perl-compatible items, and
   variable-length lookbehind assertions are now supported.
  </p>

  <p class="simpara">
   With pcre2lib version 10.44, the maximum length of named capture groups
   has changed from <code class="literal">32</code> to <code class="literal">128</code>.
  </p>

  <p class="simpara">
   Added support for the <code class="literal">r</code> (PCRE2_EXTRA_CASELESS_RESTRICT)
   modifier, as well as the <code class="literal">(?r)</code> mode modifier.
   When enabled along with the case-insensitive modifier (<code class="literal">i</code>),
   the expression locks out mixing of ASCII and non-ASCII characters.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.pdo">
  <h3 class="title">PDO</h3>

  
  <p class="simpara">
   Added support for driver-specific subclasses in order to better support
   database-specific functionalities.
   The new classes are instantiatable either via calling the
   <span class="methodname"><a href="pdo.connect.php" class="methodname">PDO::connect()</a></span> method or by instantiating one
   of the driver-specific subclasses directly.
  </p>

  
  <p class="para">
   Added support for driver specific SQL parsers.
   When a driver-specific parser is not available, the default parser is used.
   The default parser supports:
   <ul class="simplelist">
    <li>
     single and double-quoted literals, with doubling as escaping mechanism
    </li>
    <li>
     two-dashes and non-nested C-style comments
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.pdo-mysql">
  <h3 class="title">PDO_MYSQL</h3>

  
  <p class="para">
   Added a custom parser supporting:
   <ul class="simplelist">
    <li>
     single and double-quoted literals, with doubling and backslash as escaping
     mechanism
    </li>
    <li>
     backtick literal identifiers and with doubling as escaping mechanism
    </li>
    <li>
     two dashes followed by at least 1 whitespace, non-nested C-style comments,
     and hash-comments
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.pdo-pgsql">
  <h3 class="title">PDO_PGSQL</h3>

  
  <p class="para">
   Added a custom parser supporting:
   <ul class="simplelist">
    <li>
     single and double-quoted literals, with doubling as escaping mechanism
    </li>
    <li>
     C-style "escape" string literals (<code class="literal">E&#039;string&#039;</code>)
    </li>
    <li>
     dollar-quoted string literals
    </li>
    <li>
     two-dashes and C-style comments (non-nested)
    </li>
    <li>
     support for <code class="literal">??</code> as escape sequence for the
     <code class="literal">?</code> operator
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.pdo-sqlite">
  <h3 class="title">PDO_SQLITE</h3>

  
  <p class="para">
   Added a custom parser supporting:
   <ul class="simplelist">
    <li>
     single, double-quoted, and backtick literals, with doubling as
     escaping mechanism
    </li>
    <li>
     square brackets quoting for identifiers
    </li>
    <li>
     two-dashes and C-style comments (non-nested)
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.phar">
  <h3 class="title">Phar</h3>

  <p class="simpara">
   Added support for the Unix timestamp extension for Zip archives.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.readline">
  <h3 class="title">Readline</h3>

  <p class="simpara">
   Added ability to change the <code class="literal">.php_history</code> path through
   the <var class="envar">PHP_HISTFILE</var> environment variable.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.reflection">
  <h3 class="title">Reflection</h3>

  <p class="simpara">
   <span class="classname"><a href="class.reflectionattribute.php" class="classname">ReflectionAttribute</a></span> now contains a
   <span class="property">name</span> property to improve the debugging experience.
  </p>

  <p class="simpara">
   <span class="methodname"><a href="reflectionclassconstant.tostring.php" class="methodname">ReflectionClassConstant::__toString()</a></span> and
   <span class="methodname"><a href="reflectionproperty.tostring.php" class="methodname">ReflectionProperty::__toString()</a></span> now returns the
   attached doc comments.
  </p>

  
  <p class="para">
   Multiple new methods and constants which are related to the lazy objects
   feature have been added:

   <ul class="simplelist">
    <li>
     <span class="methodname"><a href="reflectionclass.newlazyghost.php" class="methodname">ReflectionClass::newLazyGhost()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.newlazyproxy.php" class="methodname">ReflectionClass::newLazyProxy()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.resetaslazyghost.php" class="methodname">ReflectionClass::resetAsLazyGhost()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.resetaslazyproxy.php" class="methodname">ReflectionClass::resetAsLazyProxy()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.isuninitializedlazyobject.php" class="methodname">ReflectionClass::isUninitializedLazyObject()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.initializelazyobject.php" class="methodname">ReflectionClass::initializeLazyObject()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.marklazyobjectasinitialized.php" class="methodname">ReflectionClass::markLazyObjectAsInitialized()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionclass.getlazyinitializer.php" class="methodname">ReflectionClass::getLazyInitializer()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionproperty.skiplazyinitialization.php" class="methodname">ReflectionProperty::skipLazyInitialization()</a></span>
    </li>
    <li>
     <span class="methodname"><a href="reflectionproperty.setrawvaluewithoutlazyinitialization.php" class="methodname">ReflectionProperty::setRawValueWithoutLazyInitialization()</a></span>
    </li>
    <li>
     <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.skip-initialization-on-serialize">ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE</a></code></strong>
    </li>
    <li>
     <strong><code><a href="class.reflectionclass.php#reflectionclass.constants.skip-destructor">ReflectionClass::SKIP_DESTRUCTOR</a></code></strong>
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.soap">
  <h3 class="title">SOAP</h3>

  <p class="simpara">
   Added support for clark notation for namespaces in class map.
   It is now possible to specify entries in a class map with clark notation
   to resolve a type with a specific namespace to a specific class.
   For example: <code class="code">&#039;{http://example.com}foo&#039; =&gt; &#039;FooClass&#039;</code>.
  </p>

  <p class="simpara">
   Instances of <span class="interfacename"><a href="class.datetimeinterface.php" class="interfacename">DateTimeInterface</a></span> that are
   passed to <code class="literal">xsd:datetime</code> or similar elements are now
   serialized as such instead of being serialized as an empty string.
  </p>

  <p class="simpara">
   Session persistence now works with a shared session module.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.standard">
  <h3 class="title">Standard</h3>

  
  <p class="simpara">
   
   Added a new <span class="classname"><a href="enum.roundingmode.php" class="classname">RoundingMode</a></span> enum with clearer naming
   and improved discoverability compared to the
   <strong><code><a href="math.constants.php#constant.php-round-half-up">PHP_ROUND_<span class="replaceable">*</span></a></code></strong> constants.
   Moreover, four new rounding modes were added which are only available via
   the new <span class="classname"><a href="enum.roundingmode.php" class="classname">RoundingMode</a></span> enum.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.xsl">
  <h3 class="title">XSL</h3>

  <p class="simpara">
   It is now possible to use parameters that contain both single and double
   quotes.
  </p>

  
  <p class="simpara">
   It is now possible to pass any callable to
   <span class="methodname"><a href="xsltprocessor.registerphpfunctions.php" class="methodname">XSLTProcessor::registerPhpFunctions()</a></span>.
   
  </p>

  <p class="simpara">
   Added <span class="property"><a href="class.xsltprocessor.php#xsltprocessor.props.maxtemplatedepth">XSLTProcessor::$maxTemplateDepth</a></span> and
   <span class="property"><a href="class.xsltprocessor.php#xsltprocessor.props.maxtemplatevars">XSLTProcessor::$maxTemplateVars</a></span>
   to control the recursion depth of XSL template evaluation.
  </p>
 </div>

 <div class="sect2" id="migration84.new-features.zip">
  <h3 class="title">Zip</h3>

  <p class="simpara">
   Added the <strong><code><a href="zip.constants.php#ziparchive.constants.er-truncated-zip">ZipArchive::ER_TRUNCATED_ZIP</a></code></strong>
   constant, which was added in libzip 1.11.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration84/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration84.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration84.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration84.php">Migrating from PHP 8.3.x to PHP 8.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration84.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-classes.php" title="New Classes, Enums, and Interfaces">New Classes, Enums, and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration84.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.windows-support.php" title="Windows Support">Windows Support</a>
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
