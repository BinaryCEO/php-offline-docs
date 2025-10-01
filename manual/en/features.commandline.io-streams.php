<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: I/O streams - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.commandline.io-streams.php">
 <link rel="shorturl" href="https://www.php.net/commandline.io-streams">
 <link rel="alternate" href="https://www.php.net/commandline.io-streams" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.commandline.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.commandline.usage.php">
 <link rel="next" href="https://www.php.net/manual/en/features.commandline.interactive.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.commandline.io-streams.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.commandline.io-streams.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.commandline.io-streams.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.commandline.io-streams.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.commandline.io-streams.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.commandline.io-streams.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.commandline.io-streams.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.commandline.io-streams.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.commandline.io-streams.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.commandline.io-streams.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.commandline.io-streams.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Input/output streams" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: I/O streams - Manual" />
<meta name="twitter:description" content="Input/output streams" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: I/O streams - Manual" />
<meta itemprop="description" content="Input/output streams" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Input/output streams" />

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
        <a href="features.commandline.interactive.php">
          Interactive shell &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.commandline.usage.php">
          &laquo; Usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.commandline.php'>Command line usage</a></li>      </ul>
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
            <option value='en/features.commandline.io-streams.php' selected="selected">English</option>
            <option value='de/features.commandline.io-streams.php'>German</option>
            <option value='es/features.commandline.io-streams.php'>Spanish</option>
            <option value='fr/features.commandline.io-streams.php'>French</option>
            <option value='it/features.commandline.io-streams.php'>Italian</option>
            <option value='ja/features.commandline.io-streams.php'>Japanese</option>
            <option value='pt_BR/features.commandline.io-streams.php'>Brazilian Portuguese</option>
            <option value='ru/features.commandline.io-streams.php'>Russian</option>
            <option value='tr/features.commandline.io-streams.php'>Turkish</option>
            <option value='uk/features.commandline.io-streams.php'>Ukrainian</option>
            <option value='zh/features.commandline.io-streams.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.commandline.io-streams" class="section">
  <h2 class="title">Input/output streams</h2>
  
  
  <p class="para">
   The <abbr title="Command Line Interpreter/Interface">CLI</abbr> <abbr title="Server Application Programming Interface">SAPI</abbr> defines a few constants for I/O streams to make programming
   for the command line a bit easier.
  </p>
  
  <p class="para">
   <table class="doctable table">
    <caption><strong>CLI specific Constants</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td><strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong></td>
       <td>
        <p class="para">An already opened stream to <code class="literal">stdin</code>. This saves
       opening it with
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stdin </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://stdin'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

       If you want to read single line from <code class="literal">stdin</code>, you can
       use
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$line </span><span style="color: #007700">= </span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">)); </span><span style="color: #FF8000">// reads one line from STDIN<br /></span><span style="color: #0000BB">fscanf</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">, </span><span style="color: #DD0000">"%d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$number</span><span style="color: #007700">); </span><span style="color: #FF8000">// reads number from STDIN<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

       </p></td>
      </tr>

      <tr>
       <td><strong><code><a href="reserved.constants.php#constant.stdout">STDOUT</a></code></strong></td>
       <td><p class="para">
       An already opened stream to <code class="literal">stdout</code>. This saves
       opening it with
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stdout </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://stdout'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

       </p></td>
      </tr>

      <tr>
       <td><strong><code><a href="reserved.constants.php#constant.stderr">STDERR</a></code></strong></td>
       <td>
        <p class="para">
         An already opened stream to <code class="literal">stderr</code>.
         This saves opening it with
         <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stderr </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://stderr'</span><span style="color: #007700">, </span><span style="color: #DD0000">'w'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
         </div>

        </p>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
  
  <p class="para">
   Given the above, you don&#039;t need to open e.g. a stream for
   <code class="literal">stderr</code> yourself but simply use the constant instead of
   the stream resource:
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">php -r &#039;fwrite(STDERR, &quot;stderr\n&quot;);&#039;</pre>
</div>
   </div>

   You do not need to explicitly close these streams, as they are closed
   automatically by PHP when your script ends.
  </p>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    These constants are not available if reading the PHP script from
    <code class="literal">stdin</code>.
   </p>
  </p></blockquote>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/commandline.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.commandline.io-streams%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.commandline.io-streams&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.io-streams.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102767">  <div class="votes">
    <div id="Vu102767">
    <a href="/manual/vote-note.php?id=102767&amp;page=features.commandline.io-streams&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102767">
    <a href="/manual/vote-note.php?id=102767&amp;page=features.commandline.io-streams&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102767" title="64% like this...">
    32
    </div>
  </div>
  <a href="#102767" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#102767"> &para;</a><div class="date" title="2011-03-04 08:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102767">
<div class="phpcode"><code><span class="html">Please remember in multi-process applications (which are best suited under CLI), that I/O operations often will BLOCK signals from being processed.<br /><br />For instance, if you have a parent waiting on fread(STDIN), it won't handle SIGCHLD, even if you defined a signal handler for it, until after the call to fread has returned. <br /><br />Your solution in this case is to wait on stream_select() to find out whether reading will block. Waiting on stream_select(), critically, does NOT BLOCK signals from being processed. <br /><br />Aurelien</span></code></div>
  </div>
 </div>
  <div class="note" id="123014">  <div class="votes">
    <div id="Vu123014">
    <a href="/manual/vote-note.php?id=123014&amp;page=features.commandline.io-streams&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123014">
    <a href="/manual/vote-note.php?id=123014&amp;page=features.commandline.io-streams&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123014" title="66% like this...">
    16
    </div>
  </div>
  <a href="#123014" class="name">
  <strong class="user"><em>phil_php at zieaon dot com</em></strong></a><a class="genanchor" href="#123014"> &para;</a><div class="date" title="2018-08-08 07:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123014">
<div class="phpcode"><code><span class="html">The command line interface data in STDIN is not made available until return is pressed.<br />By adding "readline_callback_handler_install('', function(){});" before reading STDIN for the first time single key presses can be captured. <br /><br />Note: This only seems to work under Linux CLI and will not work in Apache or Windows CLI.<br /><br />This cam be used to obscure a password or used with 'stream_select' to make a non blocking keyboard monitor.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Demo WITHOUT readline_callback_handler_install('', function(){});<br />    </span><span class="default">$resSTDIN</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://stdin"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br />    echo(</span><span class="string">"Type 'x'. Then press return."</span><span class="keyword">);<br />    </span><span class="default">$strChar </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$resSTDIN</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br />    echo(</span><span class="string">"\nYou typed: "</span><span class="keyword">.</span><span class="default">$strChar</span><span class="keyword">.</span><span class="string">"\n\n"</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$resSTDIN</span><span class="keyword">);<br />    <br /></span><span class="comment">// Demo WITH readline_callback_handler_install('', function(){});<br />// This line removes the wait for &lt;CR&gt; on STDIN<br />    </span><span class="default">readline_callback_handler_install</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, function(){});<br />    <br />    </span><span class="default">$resSTDIN</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://stdin"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br />    echo(</span><span class="string">"We have now run: readline_callback_handler_install('', function(){});\n"</span><span class="keyword">);<br />    echo(</span><span class="string">"Press the 'y' key"</span><span class="keyword">);<br />    </span><span class="default">$strChar </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$resSTDIN</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo(</span><span class="string">"\nYou pressed: "</span><span class="keyword">.</span><span class="default">$strChar</span><span class="keyword">.</span><span class="string">"\nBut did not have to press &lt;cr&gt;\n"</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$resSTDIN</span><span class="keyword">);<br />    </span><span class="default">readline_callback_handler_remove </span><span class="keyword">();<br />    echo(</span><span class="string">"\nGoodbye\n"</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />It also hides text from the CLI so can be used for things like. password obscurification. <br />eg<br /><br /><span class="default">&lt;?php<br />    readline_callback_handler_install</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, function(){});<br />    echo(</span><span class="string">"Enter password followed by return. (Do not use a real one!)\n"</span><span class="keyword">);<br />    echo(</span><span class="string">"Password: "</span><span class="keyword">);<br />    </span><span class="default">$strObscured</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    while(</span><span class="default">true</span><span class="keyword">)<br />    {<br />    </span><span class="default">$strChar </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    if(</span><span class="default">$strChar</span><span class="keyword">===</span><span class="default">chr</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">))<br />    {<br />        break;<br />    }<br />    </span><span class="default">$strObscured</span><span class="keyword">.=</span><span class="default">$strChar</span><span class="keyword">;<br />    echo(</span><span class="string">"*"</span><span class="keyword">);<br />    }<br />    echo(</span><span class="string">"\n"</span><span class="keyword">);<br />    echo(</span><span class="string">"You entered: "</span><span class="keyword">.</span><span class="default">$strObscured</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105096">  <div class="votes">
    <div id="Vu105096">
    <a href="/manual/vote-note.php?id=105096&amp;page=features.commandline.io-streams&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105096">
    <a href="/manual/vote-note.php?id=105096&amp;page=features.commandline.io-streams&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105096" title="57% like this...">
    10
    </div>
  </div>
  <a href="#105096" class="name">
  <strong class="user"><em>ecrist at secure-computing dot net</em></strong></a><a class="genanchor" href="#105096"> &para;</a><div class="date" title="2011-07-27 08:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105096">
<div class="phpcode"><code><span class="html">The following code shows how to test for input on STDIN.  In this case, we were looking for CSV data, so we use fgetcsv to read STDIN, if it creates an array, we assume CVS input on STDIN, if no array was created, we assume there's no input from STDIN, and look, later, to an argument with a CSV file name.<br /><br />Note, without the stream_set_blocking() call, fgetcsv() hangs on STDIN, awaiting input from the user, which isn't useful as we're looking for a piped file. If it isn't here already, it isn't going to be.<br /><br /><span class="default">&lt;?php<br />stream_set_blocking</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$csv_ar </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);<br />if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$csv_ar</span><span class="keyword">)){<br />  print </span><span class="string">"CVS on STDIN\n"</span><span class="keyword">;<br />} else {<br />  print </span><span class="string">"Look to ARGV for CSV file name.\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125106">  <div class="votes">
    <div id="Vu125106">
    <a href="/manual/vote-note.php?id=125106&amp;page=features.commandline.io-streams&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125106">
    <a href="/manual/vote-note.php?id=125106&amp;page=features.commandline.io-streams&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125106" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125106" class="name">
  <strong class="user"><em>phil_php at zieaon dot com</em></strong></a><a class="genanchor" href="#125106"> &para;</a><div class="date" title="2020-06-10 04:42"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125106">
<div class="phpcode"><code><span class="html">Under Linux CLI - STDIN, STDOUT and STDERR can be closed and reconnected to a different php stream such as a file, pipe or even a UDP socket_stream. (I use this technique to send the output/errors of my long running background scripts to a file so I can debug if something goes wrong.)<br /><br />For example: (The below creates/appends file "/tmp/php_stdout.txt")<br /><span class="default">&lt;?php<br /></span><span class="comment">// This only works under CLI in Linux<br />// Note: Until we have closed it STDOUT will NOT be prefixed with a $<br /><br />// Get the path to the current console for STDOUT so we can reconnect later!<br />    </span><span class="default">$strOldSTDOUT</span><span class="keyword">=(</span><span class="default">posix_ttyname</span><span class="keyword">(</span><span class="default">STDOUT</span><span class="keyword">));  <br /><br />    echo(</span><span class="string">"This will go to the current console\r\n"</span><span class="keyword">);<br /></span><span class="comment">// Close the STDOUT resource      <br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">STDOUT</span><span class="keyword">);    <br /><br /></span><span class="comment">// Reopen $STDOUT as a file     Note: All further $STDOUT usage will be prefixed with a $<br />    </span><span class="default">$STDOUT</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/tmp/php_stdout.txt"</span><span class="keyword">,</span><span class="string">"a"</span><span class="keyword">);  /<br />    echo(</span><span class="string">"This should append the file /tmp/php_stdout.txt\r\n"</span><span class="keyword">);<br /></span><span class="comment">// Close stdout again so we can reconnect the console. Note: We are still using<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$STDOUT</span><span class="keyword">);    <br /><br /></span><span class="comment">// Use the path to the console we got earlier    <br />    </span><span class="default">$STDOUT</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$strOldSTDOUT</span><span class="keyword">,</span><span class="string">"r+"</span><span class="keyword">);<br />    echo(</span><span class="string">"And we are back on the console\r\n"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.commandline.io-streams&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.commandline.io-streams.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.commandline.php">Command line usage</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.commandline.differences.php" title="Differences to other SAPIs">Differences to other SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.options.php" title="Options">Options</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.usage.php" title="Usage">Usage</a>
                        </li>
                                                <li class="current">
                            <a href="features.commandline.io-streams.php" title="I/O streams">I/O streams</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.interactive.php" title="Interactive shell">Interactive shell</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.webserver.php" title="Built-&#8203;in web server">Built-&#8203;in web server</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.ini.php" title="INI settings">INI settings</a>
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
